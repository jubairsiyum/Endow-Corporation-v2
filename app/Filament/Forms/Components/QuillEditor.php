<?php

namespace App\Filament\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;

class QuillEditor extends Field
{
    use HasExtraInputAttributes;

    protected string $view = 'filament.forms.components.quill-editor';

    protected string $toolbar = 'default';

    protected int $minHeight = 400;

    public function getMinHeight(): int
    {
        return $this->minHeight;
    }

    public function minHeight(int $height): static
    {
        $this->minHeight = $height;

        return $this;
    }

    public function getToolbar(): string
    {
        return $this->toolbar;
    }

    public function toolbar(string $preset): static
    {
        $this->toolbar = $preset;

        return $this;
    }
}
