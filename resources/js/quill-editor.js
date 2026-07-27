import Quill from 'quill';

const Delta = Quill.import('delta');

const defaultToolbar = [
    ['bold', 'italic', 'underline', 'strike'],
    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    [{ 'color': [] }, { 'background': [] }],
    [{ 'align': [] }],
    ['link'],
    ['blockquote', 'code-block'],
    ['clean'],
];

function getByteSize(value) {
    return new Blob([value || '']).size;
}

function showEditorMessage(container, message, type = 'error') {
    let messageEl = container.parentElement.querySelector('[data-quill-message]');

    if (!messageEl) {
        messageEl = document.createElement('p');
        messageEl.setAttribute('data-quill-message', '');
        container.parentElement.appendChild(messageEl);
    }

    messageEl.textContent = message;
    messageEl.dataset.type = type;
    messageEl.hidden = !message;
}

function createFallbackTextarea(container, input, message) {
    const textarea = document.createElement('textarea');
    textarea.className = 'quill-editor-fallback';
    textarea.value = input.value || '';
    textarea.rows = 12;
    textarea.placeholder = 'Write the post content...';
    textarea.addEventListener('input', () => {
        input.value = textarea.value;
        input.dispatchEvent(new Event('input', { bubbles: true }));
    });

    container.replaceWith(textarea);
    showEditorMessage(textarea, message);
}

function initEditor(containerId, options = {}) {
    const container = document.getElementById(containerId);
    if (!container) return null;

    const { content = '', onUpdate, disabled = false } = options;
    const maxContentBytes = Number(container.dataset.maxContentBytes || 0);

    const quill = new Quill(container, {
        theme: 'snow',
        modules: { toolbar: defaultToolbar },
        placeholder: 'Write something...',
        readOnly: disabled,
    });

    quill.clipboard.addMatcher('IMG', (node) => {
        const src = node.getAttribute('src') || '';

        if (src.startsWith('data:')) {
            showEditorMessage(container, 'Inline pasted images were removed. Use Featured Image or Image Gallery uploads instead.', 'warning');

            return new Delta();
        }

        return new Delta().insert({ image: src });
    });

    if (content) {
        quill.clipboard.dangerouslyPasteHTML(content);
    }

    quill.on('text-change', () => {
        quill.root.querySelectorAll('img[src^="data:"]').forEach((image) => {
            image.remove();
        });

        const html = quill.root.innerHTML;

        if (maxContentBytes && getByteSize(html) > maxContentBytes) {
            showEditorMessage(container, 'This content is getting large. Remove pasted inline images or split very long content before saving.', 'warning');
        }

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

        try {
            initEditor(id, {
                content: input.value || '',
                onUpdate: (html) => {
                    input.value = html;
                    input.dispatchEvent(new Event('input', { bubbles: true }));
                },
            });
        } catch (error) {
            console.error('Quill editor failed to initialize:', error);
            createFallbackTextarea(el, input, 'The rich editor could not load. You can still write or paste content here.');
        }
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
