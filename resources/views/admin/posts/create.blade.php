@extends('admin.layouts.app')
@section('title', 'Create Post')
@section('page-title', 'Create Post')

@push('styles')
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
@endpush

@section('content')
<div style="max-width:900px;margin:0 auto;">
<form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" id="post-form">
    @csrf
    <div class="panel" style="padding:28px;">
        <div style="display:flex;flex-direction:column;gap:24px;">

            {{-- Title --}}
            <x-admin.input name="title" label="Post Title" required />

            {{-- Slug + Author Row --}}
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <x-admin.input name="slug" label="Slug (auto-generated if empty)" placeholder="my-post-slug" />
                <x-admin.input name="author" label="Author Name" placeholder="John Doe" />
            </div>

            {{-- Excerpt --}}
            <div>
                <label for="excerpt" style="display:block;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:6px;">Excerpt</label>
                <textarea name="excerpt" id="excerpt" rows="2" style="width:100%;background:var(--hover);border:1px solid var(--border);border-radius:10px;padding:10px 14px;font-size:14px;color:var(--text-primary);outline:none;transition:all 0.2s;font-family:'Inter',system-ui,sans-serif;box-sizing:border-box;resize:vertical;" onfocus="this.style.borderColor='rgba(239,68,68,0.4)';this.style.boxShadow='0 0 0 3px rgba(239,68,68,0.06)'" onblur="this.style.borderColor='rgba(255,255,255,0.06)';this.style.boxShadow='none'">{{ old('excerpt') }}</textarea>
            </div>

            {{-- Quill Rich Editor --}}
            <div>
                <label style="display:block;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:8px;">Content</label>
                <div style="border-radius:12px;overflow:hidden;">
                    <div id="quill-editor" class="ql-dark" data-quill-editor></div>
                </div>
                <input type="hidden" name="content" id="content_input" value="{{ old('content') }}">
                @error('content')
                    <p style="font-size:12px;color:#F87171;margin-top:6px;">{{ $message }}</p>
                @enderror
            </div>

            {{-- Category + Text Override Row --}}
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div>
                    <label for="category_id" style="display:block;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:6px;">Category (Relation)</label>
                    <select name="category_id" id="category_id" style="width:100%;background:var(--hover);border:1px solid var(--border);border-radius:10px;padding:10px 14px;font-size:14px;color:var(--text-primary);outline:none;transition:all 0.2s;font-family:'Inter',system-ui,sans-serif;box-sizing:border-box;cursor:pointer;" onfocus="this.style.borderColor='rgba(239,68,68,0.4)'" onblur="this.style.borderColor='rgba(255,255,255,0.06)'">
                        <option value="">None</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <x-admin.input name="category" label="Category (Text override)" placeholder="Technology" />
            </div>

            {{-- Featured Image --}}
            <div>
                <label for="featured_image" style="display:block;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:6px;">Featured Image</label>
                <input type="file" name="featured_image" id="featured_image" accept="image/*" style="width:100%;font-size:14px;color:var(--text-secondary);">
            </div>

            {{-- SEO Fields --}}
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <x-admin.input name="meta_title" label="Meta Title (SEO)" />
                <x-admin.input name="og_image" label="OG Image URL" />
            </div>
            <div>
                <label for="meta_description" style="display:block;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:6px;">Meta Description (SEO)</label>
                <textarea name="meta_description" id="meta_description" rows="2" style="width:100%;background:var(--hover);border:1px solid var(--border);border-radius:10px;padding:10px 14px;font-size:14px;color:var(--text-primary);outline:none;transition:all 0.2s;font-family:'Inter',system-ui,sans-serif;box-sizing:border-box;resize:vertical;" onfocus="this.style.borderColor='rgba(239,68,68,0.4)';this.style.boxShadow='0 0 0 3px rgba(239,68,68,0.06)'" onblur="this.style.borderColor='rgba(255,255,255,0.06)';this.style.boxShadow='none'">{{ old('meta_description') }}</textarea>
            </div>

            {{-- Published Toggle --}}
            <label style="display:flex;align-items:center;gap:10px;cursor:pointer;">
                <input type="hidden" name="is_published" value="0">
                <input type="checkbox" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }} style="width:15px;height:15px;border-radius:4px;accent-color:#EF4444;cursor:pointer;">
                <span style="font-size:14px;color:var(--text-primary);">Published</span>
            </label>

            {{-- Actions --}}
            <div style="display:flex;align-items:center;gap:12px;padding-top:8px;border-top:1px solid var(--border);">
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-check text-xs"></i> Create Post
                </button>
                <a href="{{ route('admin.posts.index') }}" style="font-size:14px;color:var(--text-tertiary);text-decoration:none;transition:color 0.15s;" onmouseover="this.style.color='var(--text-secondary)'" onmouseout="this.style.color='var(--text-tertiary)'">Cancel</a>
            </div>
        </div>
    </div>
</form>
</div>
@endsection

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script>
(function() {
    const container = document.getElementById('quill-editor');
    const input = document.getElementById('content_input');
    if (!container || !input) return;

    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        ['blockquote', 'code-block'],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'align': [] }],
        ['link', 'image'],
        ['clean']
    ];

    const quill = new Quill(container, {
        theme: 'snow',
        modules: { toolbar: toolbarOptions },
        placeholder: 'Write your post content here...',
    });

    // Load existing content
    if (input.value) {
        quill.clipboard.dangerouslyPasteHTML(input.value);
    }

    // Sync to hidden input
    quill.on('text-change', function() {
        input.value = quill.root.innerHTML;
    });

    // Strip pasted base64 images
    quill.clipboard.addMatcher('IMG', function(node) {
        const src = node.getAttribute('src') || '';
        if (src.startsWith('data:')) {
            return new Quill.import('delta').insert('');
        }
        return new Quill.import('delta').insert({ image: src });
    });
})();
</script>
@endpush

