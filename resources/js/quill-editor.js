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

window.initQuill = (containerId, options = {}) => {
    const container = document.getElementById(containerId);
    if (!container) return null;

    const { content = '', onUpdate, disabled = false } = options;

    const toolbarConfig = window.quillToolbarPresets?.default ?? defaultToolbar;

    const quill = new Quill(`#${containerId}`, {
        theme: 'snow',
        modules: {
            toolbar: toolbarConfig,
        },
        placeholder: 'Write something...',
        readOnly: disabled,
    });

    if (content) {
        quill.root.innerHTML = content;
    }

    quill.on('text-change', () => {
        const html = quill.root.innerHTML;
        if (onUpdate) onUpdate(html);
    });

    return quill;
};

window.destroyQuill = (quill) => {
    if (quill) {
        quill.enable(false);
    }
};
