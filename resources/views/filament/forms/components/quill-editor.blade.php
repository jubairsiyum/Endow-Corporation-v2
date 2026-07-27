@php
    $fieldWrapperView = $getFieldWrapperView();
    $isDisabled = $isDisabled();
    $statePath = $getStatePath();
    $id = $getId();
@endphp

<x-dynamic-component
    :component="$fieldWrapperView"
    :field="$field"
>
    <input
        type="hidden"
        id="{{ $id }}_input"
        value="{{ $getState() }}"
        {{ $applyStateBindingModifiers('wire:model') }}="{{ $statePath }}"
    />

    <div
        class="quill-editor-field"
        style="--quill-min-height: {{ $getMinHeight() }}px;"
        wire:ignore
    >
        <div
            id="{{ $id }}"
            data-quill-editor
            data-max-content-bytes="{{ min((int) (config('livewire.payload.max_size', 8 * 1024 * 1024) * 0.75), 6 * 1024 * 1024) }}"
            @if ($isDisabled) style="pointer-events:none;opacity:.6" @endif
        ></div>
    </div>
</x-dynamic-component>
