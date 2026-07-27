import Quill from 'quill';

const defaultToolbar = [
    ['bold', 'italic', 'underline', 'strike'],
    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    [{ 'color': [] }, { 'background': [] }],
    [{ 'align': [] }],
    ['link', 'image'],
    ['blockquote', 'code-block'],
    ['clean'],
];

function initEditor(containerId, options = {}) {
    const container = document.getElementById(containerId);
    if (!container) return null;

    const { content = '', onUpdate, disabled = false } = options;

    const quill = new Quill(container, {
        theme: 'snow',
        modules: { toolbar: defaultToolbar },
        placeholder: 'Write something...',
        readOnly: disabled,
    });

    if (content) {
        quill.clipboard.dangerouslyPasteHTML(content);
    }

    quill.on('text-change', () => {
        const html = quill.root.innerHTML;
        if (onUpdate) onUpdate(html);
    });

    return quill;
}

function bootQuillEditors() {
    document.querySelectorAll('[data-quill-editor]:not([data-quill-initialized])').forEach(el => {
        const id = el.id;
        const input = document.getElementById(id + '_input');
        if (!id || !input) return;

        el.setAttribute('data-quill-initialized', '1');
        initEditor(id, {
            content: input.value || '',
            onUpdate: (html) => {
                input.value = html;
                input.dispatchEvent(new Event('input', { bubbles: true }));
            },
        });
    });
}

function startQuillEditorObserver() {
    if (!document.body) return;

    bootQuillEditors();

    const observer = new MutationObserver(bootQuillEditors);
    observer.observe(document.body, { childList: true, subtree: true });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', startQuillEditorObserver);
} else {
    startQuillEditorObserver();
}

document.addEventListener('livewire:navigated', bootQuillEditors);
