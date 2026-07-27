import tinymce from 'tinymce/tinymce';
import 'tinymce/themes/silver';
import 'tinymce/icons/default';

import 'tinymce/plugins/advlist';
import 'tinymce/plugins/autolink';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/link';
import 'tinymce/plugins/image';
import 'tinymce/plugins/charmap';
import 'tinymce/plugins/preview';
import 'tinymce/plugins/anchor';
import 'tinymce/plugins/searchreplace';
import 'tinymce/plugins/code';
import 'tinymce/plugins/visualblocks';
import 'tinymce/plugins/insertdatetime';
import 'tinymce/plugins/media';
import 'tinymce/plugins/table';
import 'tinymce/plugins/help';
import 'tinymce/plugins/wordcount';

window.initTinyMCE = (textareaId, value, onUpdate) => {
    if (tinymce.get(textareaId)) {
        tinymce.get(textareaId).remove();
    }

    tinymce.init({
        selector: `#${textareaId}`,
        height: 600,
        menubar: true,
        plugins: 'advlist autolink lists link image charmap preview anchor searchreplace code visualblocks insertdatetime media table help wordcount',
        toolbar: 'undo redo | blocks | bold italic underline strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media table | code preview fullscreen | removeformat help',
        toolbar_mode: 'wrap',
        image_advtab: true,
        image_caption: true,
        relative_urls: false,
        remove_script_host: false,
        convert_urls: false,
        branding: false,
        promotion: false,
        setup: (editor) => {
            editor.on('init', () => {
                if (value) {
                    editor.setContent(value);
                }
            });
            editor.on('change keyup', () => {
                const content = editor.getContent();
                if (onUpdate) {
                    onUpdate(content);
                }
            });
        },
    });
};

window.destroyTinyMCE = (textareaId) => {
    if (tinymce.get(textareaId)) {
        tinymce.get(textareaId).remove();
    }
};
