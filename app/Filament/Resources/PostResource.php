<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Category;
use App\Models\Post;
use BackedEnum;
use App\Filament\Forms\Components\TinyMceEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
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
            ->schema([
                Section::make('Post Details')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Textarea::make('excerpt')
                            ->required()
                            ->maxLength(1000)
                            ->rows(3),

                        TinyMceEditor::make('content')
                            ->required()
                            ->minHeight(600),

                    ]),

                Section::make('Meta')
                    ->schema([
                        TextInput::make('author')
                            ->default('Endow Corporation')
                            ->maxLength(255),

                        Select::make('category_id')
                            ->label('Category')
                            ->options(fn () => Category::where('is_visible', true)
                                ->orderBy('sort_order')
                                ->pluck('name', 'id'))
                            ->native(false),

                        FileUpload::make('featured_image')
                            ->directory('uploads/posts')
                            ->image()
                            ->imageEditor()
                            ->nullable(),

                        Toggle::make('is_published')
                            ->default(true)
                            ->label('Published'),

                    ])->columns(2),

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
                            ->helperText('Recommended size: 1200x630px')
                            ->nullable(),
                    ])->columns(2),

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
                            ->columns(2),
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
