@extends('admin.layouts.app')
@section('title', 'Roles')
@section('page-title', 'Roles')

@section('content')

<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;">
    <p style="font-size:14px;color:var(--text-tertiary);">{{ $roles->total() }} role(s)</p>
    @can('create roles')
    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-sm">
        <i class="fa-solid fa-plus text-xs"></i> New Role
    </a>
    @endcan
</div>

<div style="display:flex;flex-direction:column;gap:12px;">
    @forelse($roles as $role)
    <div class="panel" style="padding:20px 24px;transition:border-color 0.2s;" onmouseover="this.style.borderColor='rgba(239,68,68,0.2)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.06)'">
        <div style="display:flex;align-items:flex-start;justify-content:space-between;">
            <div style="flex:1;min-width:0;">
                <div style="display:flex;align-items:center;gap:12px;margin-bottom:8px;">
                    <h3 style="font-size:16px;font-weight:600;color:var(--text-primary);">{{ $role->name }}</h3>
                    <span style="font-size:10px;color:var(--text-tertiary);text-transform:uppercase;">guard: {{ $role->guard_name }}</span>
                </div>
                <div style="display:flex;flex-wrap:wrap;gap:6px;">
                    @foreach($role->permissions as $perm)
                        <span style="font-size:10px;background:var(--hover);border:1px solid var(--border);color:var(--text-secondary);padding:3px 9px;border-radius:20px;">{{ $perm->name }}</span>
                    @endforeach
                    @if($role->permissions->isEmpty())
                        <span style="font-size:11px;color:var(--text-tertiary);">No permissions assigned</span>
                    @endif
                </div>
            </div>
            <div style="display:flex;align-items:center;gap:2px;margin-left:16px;">
                @can('edit roles')
                <a href="{{ route('admin.roles.edit', $role) }}" style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;" onmouseover="this.style.color='var(--text-primary)';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="Edit">
                    <i class="fa-solid fa-pen text-xs"></i>
                </a>
                @endcan
                @can('delete roles')
                @if($role->name !== 'Super Admin')
                <form method="POST" action="{{ route('admin.roles.destroy', $role) }}" onsubmit="return confirm('Delete this role?')" style="display:inline;">
                    @csrf @method('DELETE')
                    <button style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;background:none;border:none;cursor:pointer;font-family:inherit;" onmouseover="this.style.color='#F87171';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="Delete">
                        <i class="fa-solid fa-trash text-xs"></i>
                    </button>
                </form>
                @endif
                @endcan
            </div>
        </div>
    </div>
    @empty
    <div class="panel">
        <div class="empty-state">
            <div class="empty-state-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <div style="font-size:14px;font-weight:500;color:var(--text-secondary);margin-bottom:4px;">No roles found</div>
            <div style="font-size:12px;color:var(--text-tertiary);margin-bottom:16px;">Create roles to manage permissions.</div>
            @can('create roles')
            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-sm">Create Role</a>
            @endcan
        </div>
    </div>
    @endforelse
</div>

@if($roles->hasPages())
<div style="margin-top:16px;">{{ $roles->links() }}</div>
@endif
@endsection
