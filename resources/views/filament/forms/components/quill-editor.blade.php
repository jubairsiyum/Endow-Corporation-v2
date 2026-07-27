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
            quill: null,
            initEditor() {
                this.$nextTick(() => {
                    if (typeof initQuill === 'function') {
                        try {
                            this.quill = initQuill(this.editorId, {
                                content: this.state || '',
                                disabled: {{ $isDisabled ? 'true' : 'false' }},
                                onUpdate: (content) => {
                                    this.state = content;
                                }
                            });
                        } catch (e) {
                            console.error('Quill init error:', e);
                        }
                    }
                });
            },
            destroyEditor() {
                if (this.quill && typeof destroyQuill === 'function') {
                    destroyQuill(this.quill);
                    this.quill = null;
                }
            }
        }"
        x-init="initEditor()"
        x-on:livewire:navigating.window="destroyEditor()"
    >
        <div
            id="{{ $id }}"
            class="quill-editor-wrapper"
            @if ($isDisabled) style="pointer-events: none; opacity: 0.6;" @endif
        >{{ $getState() }}</div>
    </div>
</x-dynamic-component>
