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
            @if ($isDisabled) style="pointer-events:none;opacity:.6" @endif
        ></div>
    </div>
</x-dynamic-component>
