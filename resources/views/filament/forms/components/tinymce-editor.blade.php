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
    <div
        wire:ignore
        x-data="{
            editorId: '{{ $id }}',
            state: $wire.$entangle('{{ $statePath }}'),
            initEditor() {
                if (typeof initTinyMCE === 'function') {
                    initTinyMCE(this.editorId, this.state || '', (content) => {
                        this.state = content;
                    });
                }
            },
            destroyEditor() {
                if (typeof destroyTinyMCE === 'function') {
                    destroyTinyMCE(this.editorId);
                }
            }
        }"
        x-init="initEditor()"
        x-on:livewire:navigating.window="destroyEditor()"
    >
        <textarea
            id="{{ $id }}"
            rows="20"
            @if ($isDisabled) disabled @endif
            {{ $getExtraInputAttributeBag() }}
        >{{ $getState() }}</textarea>
    </div>
</x-dynamic-component>
