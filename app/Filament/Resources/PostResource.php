<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Category;
use App\Models\Post;
use App\Rules\FilledHtmlContent;
use BackedEnum;
use App\Filament\Forms\Components\QuillEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    private const CONTENT_MAX_CHARACTERS = 6_000_000;

    protected static ?string $model = Post::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    protected static ?string $navigationLabel = 'Blog Posts';

    protected static ?string $modelLabel = 'Post';

    protected static ?string $pluralModelLabel = 'Posts';

    protected static ?int $navigationSort = 10;

    public static function getNavigationGroup(): ?string
    {
        return 'Content';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->schema([
                Section::make('Post Details')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                            ->label('Post Title')
                            ->required()
                            ->minLength(3)
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state)))
                            ->validationMessages([
                                'required' => 'Add a clear title before saving the post.',
                                'min' => 'The title should be at least 3 characters.',
                            ]),

                        TextInput::make('slug')
                            ->required()
                            ->alphaDash()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->helperText('Used in the public blog URL. Lowercase letters, numbers, and dashes work best.')
                            ->validationMessages([
                                'alpha_dash' => 'Use only letters, numbers, dashes, and underscores in the slug.',
                                'unique' => 'This slug is already used by another post.',
                            ]),

                        Textarea::make('excerpt')
                            ->required()
                            ->minLength(20)
                            ->maxLength(1000)
                            ->rows(3)
                            ->autosize()
                            ->helperText('Short summary shown in blog lists and search previews.')
                            ->validationMessages([
                                'required' => 'Add a short excerpt for this post.',
                                'min' => 'The excerpt should be at least 20 characters.',
                                'max' => 'Keep the excerpt under 1,000 characters.',
                            ]),

                        QuillEditor::make('content')
                            ->label('Content')
                            ->required()
                            ->rules([
                                'max:'.self::CONTENT_MAX_CHARACTERS,
                                new FilledHtmlContent(),
                            ])
                            ->dehydrateStateUsing(fn (?string $state): ?string => blank(trim(strip_tags(str_replace('&nbsp;', '', $state ?? '')))) ? null : $state)
                            ->minHeight(420)
                            ->helperText('Use the gallery fields below for images. Inline editor images can make the post too large to save.')
                            ->validationMessages([
                                'required' => 'Write the post content before saving.',
                                'max' => 'The editor content is too large. Remove pasted inline images or shorten the post.',
                            ]),

                    ]),

                Section::make('Meta')
                    ->schema([
                        TextInput::make('author')
                            ->default('Endow Corporation')
                            ->required()
                            ->maxLength(255),

                        Select::make('category_id')
                            ->label('Category')
                            ->options(fn () => Category::where('is_visible', true)
                                ->orderBy('sort_order')
                                ->pluck('name', 'id'))
                            ->searchable()
                            ->preload()
                            ->native(false),

                        FileUpload::make('featured_image')
                            ->directory('uploads/posts')
                            ->image()
                            ->imageEditor()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(4096)
                            ->helperText('JPEG, PNG, or WebP. Max 4 MB.')
                            ->nullable(),

                        Toggle::make('is_published')
                            ->default(true)
                            ->label('Published'),

                    ])->columns([
                        'default' => 1,
                        'md' => 2,
                    ]),

                Section::make('SEO')
                    ->collapsible()
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(60)
                            ->placeholder('Leave blank to use post title')
                            ->helperText('Recommended max 60 characters')
                            ->nullable(),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->maxLength(160)
                            ->rows(2)
                            ->placeholder('Brief description for search results')
                            ->helperText('Recommended max 160 characters')
                            ->nullable(),

                        FileUpload::make('og_image')
                            ->label('OG Image (Social Sharing)')
                            ->directory('uploads/posts/og')
                            ->image()
                            ->imageEditor()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(4096)
                            ->helperText('Recommended size: 1200x630px. JPEG, PNG, or WebP. Max 4 MB.')
                            ->nullable(),
                    ])->columns([
                        'default' => 1,
                        'md' => 2,
                    ]),

                Section::make('Image Gallery')
                    ->collapsible()
                    ->schema([
                        Repeater::make('images')
                            ->relationship('images')
                            ->schema([
                                FileUpload::make('image_path')
                                    ->label('Image')
                                    ->directory('uploads/posts/gallery')
                                    ->image()
                                    ->imageEditor()
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                    ->maxSize(4096)
                                    ->required(),

                                TextInput::make('caption')
                                    ->maxLength(255)
                                    ->nullable(),

                                TextInput::make('sort_order')
                                    ->numeric()
                                    ->default(0)
                                    ->hidden(),
                            ])
                            ->orderColumn('sort_order')
                            ->addActionLabel('Add Image')
                            ->collapsible()
                            ->columns([
                                'default' => 1,
                                'md' => 2,
                            ]),
                    ]),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->schema([
                Section::make('Post Details')
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('title')
                            ->label('Post Title')
                            ->columnSpanFull(),

                        TextEntry::make('slug')
                            ->label('Slug')
                            ->copyable(),

                        TextEntry::make('excerpt')
                            ->label('Excerpt')
                            ->columnSpanFull()
                            ->placeholder('No excerpt provided.'),

                        TextEntry::make('content')
                            ->label('Content')
                            ->html()
                            ->columnSpanFull()
                            ->placeholder('No content.'),
                    ]),

                Section::make('Meta')
                    ->schema([
                        TextEntry::make('author')
                            ->label('Author'),

                        TextEntry::make('categoryRelation.name')
                            ->label('Category')
                            ->badge()
                            ->color(fn (?string $state): string => match ($state) {
                                'General' => 'gray',
                                'Travel' => 'info',
                                'Education' => 'success',
                                'Technology' => 'warning',
                                'Healthcare' => 'danger',
                                default => 'gray',
                            }),

                        IconEntry::make('is_published')
                            ->label('Published')
                            ->boolean(),

                        ImageEntry::make('featured_image')
                            ->label('Featured Image')
                            ->disk('public')
                            ->columnSpanFull()
                            ->height(300)
                            ->placeholder('No featured image.'),

                        TextEntry::make('created_at')
                            ->label('Created At')
                            ->dateTime('M d, Y H:i'),

                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime('M d, Y H:i'),
                    ])->columns([
                        'default' => 1,
                        'md' => 2,
                    ]),

                Section::make('SEO')
                    ->collapsible()
                    ->schema([
                        TextEntry::make('meta_title')
                            ->label('Meta Title')
                            ->placeholder('Uses post title'),

                        TextEntry::make('meta_description')
                            ->label('Meta Description')
                            ->placeholder('Not set'),

                        ImageEntry::make('og_image')
                            ->label('OG Image (Social Sharing)')
                            ->disk('public')
                            ->height(200)
                            ->placeholder('No OG image set.')
                            ->columnSpanFull(),
                    ])->columns([
                        'default' => 1,
                        'md' => 2,
                    ]),

                Section::make('Image Gallery')
                    ->collapsible()
                    ->schema([
                        RepeatableEntry::make('images')
                            ->schema([
                                ImageEntry::make('image_path')
                                    ->label('Image')
                                    ->disk('public')
                                    ->height(200),

                                TextEntry::make('caption')
                                    ->label('Caption')
                                    ->placeholder('No caption'),
                            ])
                            ->columns([
                                'default' => 1,
                                'md' => 2,
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                Tables\Columns\TextColumn::make('author')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('categoryRelation.name')
                    ->label('Category')
                    ->badge()
                    ->color(fn (?string $state): string => match ($state) {
                        'General' => 'gray',
                        'Travel' => 'info',
                        'Education' => 'success',
                        'Technology' => 'warning',
                        'Healthcare' => 'danger',
                        default => 'gray',
                    })
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_published')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M d, Y')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('categoryRelation', 'name')
                    ->searchable()
                    ->native(false),

                Tables\Filters\SelectFilter::make('is_published')
                    ->label('Status')
                    ->options([
                        1 => 'Published',
                        0 => 'Draft',
                    ]),
            ])
            ->actions([
                Actions\ViewAction::make(),
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
