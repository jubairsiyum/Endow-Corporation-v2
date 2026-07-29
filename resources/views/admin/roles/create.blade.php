@extends('admin.layouts.app')
@section('title', 'Create Role')
@section('page-title', 'Create Role')

@section('content')
<div style="max-width:640px;margin:0 auto;">
<form method="POST" action="{{ route('admin.roles.store') }}">
    @csrf
    <div class="panel" style="padding:28px;">
        <div style="display:flex;flex-direction:column;gap:20px;">
            <x-admin.input name="name" label="Role Name" required placeholder="e.g. Manager" />

            <div>
                <label style="display:block;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:10px;">Permissions</label>
                <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:8px;max-height:260px;overflow-y:auto;padding:2px;">
                    @foreach($permissions as $perm)
                    <label style="display:flex;align-items:center;gap:10px;padding:10px 14px;border-radius:10px;background:var(--hover);border:1px solid var(--border);cursor:pointer;transition:all 0.15s;" onmouseover="this.style.borderColor='rgba(239,68,68,0.3)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.06)'">
                        <input type="checkbox" name="permissions[]" value="{{ $perm->name }}" style="width:15px;height:15px;border-radius:4px;accent-color:#EF4444;cursor:pointer;">
                        <span style="font-size:12px;color:var(--text-secondary);">{{ $perm->name }}</span>
                    </label>
                    @endforeach
                </div>
            </div>

            <div style="display:flex;align-items:center;gap:12px;padding-top:8px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-check text-xs"></i> Create Role
                </button>
                <a href="{{ route('admin.roles.index') }}" style="font-size:14px;color:var(--text-tertiary);text-decoration:none;transition:color 0.15s;" onmouseover="this.style.color='var(--text-secondary)'" onmouseout="this.style.color='var(--text-tertiary)'">Cancel</a>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
