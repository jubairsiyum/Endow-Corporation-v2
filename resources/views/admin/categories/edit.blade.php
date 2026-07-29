@extends('admin.layouts.app')
@section('title', 'Edit Category')
@section('page-title', 'Edit Category — ' . $category->name)

@section('content')
<div style="max-width:640px;margin:0 auto;">
<form method="POST" action="{{ route('admin.categories.update', $category) }}">
    @csrf @method('PUT')
    <div class="panel" style="padding:28px;">
        <div style="display:flex;flex-direction:column;gap:20px;">
            <x-admin.input name="name" label="Category Name" :value="$category->name" required />
            <x-admin.input name="slug" label="Slug" :value="$category->slug" />
            <div>
                <label for="description" style="display:block;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:6px;">Description</label>
                <textarea name="description" id="description" rows="3" style="width:100%;background:var(--hover);border:1px solid var(--border);border-radius:10px;padding:10px 14px;font-size:14px;color:var(--text-primary);outline:none;transition:all 0.2s;font-family:'Inter',system-ui,sans-serif;box-sizing:border-box;resize:vertical;" onfocus="this.style.borderColor='rgba(239,68,68,0.4)';this.style.boxShadow='0 0 0 3px rgba(239,68,68,0.06)'" onblur="this.style.borderColor='rgba(255,255,255,0.06)';this.style.boxShadow='none'">{{ old('description', $category->description) }}</textarea>
            </div>
            <x-admin.input name="color" label="Color (hex)" :value="$category->color" />
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <x-admin.input name="sort_order" type="number" label="Sort Order" :value="$category->sort_order" />
                <div style="display:flex;align-items:flex-end;padding-bottom:1px;">
                    <label style="display:flex;align-items:center;gap:10px;padding:10px 14px;border-radius:10px;background:var(--hover);border:1px solid var(--border);cursor:pointer;transition:all 0.15s;" onmouseover="this.style.borderColor='rgba(239,68,68,0.3)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.06)'">
                        <input type="hidden" name="is_visible" value="0">
                        <input type="checkbox" name="is_visible" value="1" {{ $category->is_visible ? 'checked' : '' }} style="width:15px;height:15px;border-radius:4px;accent-color:#EF4444;cursor:pointer;">
                        <span style="font-size:14px;color:var(--text-primary);">Visible</span>
                    </label>
                </div>
            </div>
            <div style="display:flex;align-items:center;gap:12px;padding-top:8px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-check text-xs"></i> Update Category
                </button>
                <a href="{{ route('admin.categories.index') }}" style="font-size:14px;color:var(--text-tertiary);text-decoration:none;transition:color 0.15s;" onmouseover="this.style.color='var(--text-secondary)'" onmouseout="this.style.color='var(--text-tertiary)'">Cancel</a>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
