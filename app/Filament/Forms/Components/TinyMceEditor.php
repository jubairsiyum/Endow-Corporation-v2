<?php

namespace App\Filament\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use Filament\Support\Concerns\HasPlaceholder;

class TinyMceEditor extends Field
{
    use HasExtraInputAttributes;
    use HasPlaceholder;

    protected string $view = 'filament.forms.components.tinymce-editor';

    protected int $minHeight = 600;

    public function getMinHeight(): int
    {
        return $this->minHeight;
    }

    public function minHeight(int $height): static
    {
        $this->minHeight = $height;

        return $this;
    }
}
