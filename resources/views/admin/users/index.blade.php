@extends('admin.layouts.app')
@section('title', 'Users')
@section('page-title', 'Users')

@section('content')

{{-- Header --}}
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;">
    <p style="font-size:14px;color:var(--text-tertiary);">{{ $users->total() }} user(s)</p>
    @can('create users')
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">
        <i class="fa-solid fa-plus text-xs"></i> New User
    </a>
    @endcan
</div>

{{-- Table --}}
<div class="panel">
    <div style="overflow-x:auto;">
        <table style="width:100%;font-size:14px;border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid var(--border);text-align:left;">
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Name</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Email</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Roles</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Verified</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Joined</th>
                    <th style="padding:13px 20px;text-align:right;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr style="border-bottom:1px solid var(--border);transition:background 0.15s;" onmouseover="this.style.background='rgba(255,255,255,0.015)'" onmouseout="this.style.background='transparent'">
                    <td style="padding:14px 20px;font-weight:500;color:var(--text-primary);">{{ $user->name }}</td>
                    <td style="padding:14px 20px;color:var(--text-secondary);">{{ $user->email }}</td>
                    <td style="padding:14px 20px;">
                        <div style="display:flex;flex-wrap:wrap;gap:4px;">
                            @foreach($user->roles as $role)
                                <span style="font-size:10px;font-weight:600;padding:3px 9px;border-radius:20px;{{ $role->name === 'Super Admin' ? 'background:rgba(239,68,68,0.08);color:#F87171;' : ($role->name === 'Editor' ? 'background:rgba(251,191,36,0.08);color:#FBBF24;' : 'background:rgba(96,165,250,0.08);color:#60A5FA;') }}">
                                    {{ $role->name }}
                                </span>
                            @endforeach
                            @if($user->roles->isEmpty())
                                <span style="font-size:11px;color:var(--text-tertiary);">—</span>
                            @endif
                        </div>
                    </td>
                    <td style="padding:14px 20px;">
                        @if($user->email_verified_at)
                            <span style="font-size:12px;color:#34D399;"><i class="fa-solid fa-check-circle" style="margin-right:4px;"></i>Verified</span>
                        @else
                            <span style="font-size:12px;color:var(--text-tertiary);"><i class="fa-solid fa-clock" style="margin-right:4px;"></i>Pending</span>
                        @endif
                    </td>
                    <td style="padding:14px 20px;color:var(--text-tertiary);font-size:12px;">{{ $user->created_at->format('M d, Y') }}</td>
                    <td style="padding:14px 20px;text-align:right;">
                        <div style="display:flex;align-items:center;justify-content:flex-end;gap:2px;">
                            @can('edit users')
                            <a href="{{ route('admin.users.edit', $user) }}" style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;" onmouseover="this.style.color='var(--text-primary)';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="Edit">
                                <i class="fa-solid fa-pen text-xs"></i>
                            </a>
                            @endcan
                            @can('delete users')
                            @if($user->id !== auth()->id())
                            <form method="POST" action="{{ route('admin.users.destroy', $user) }}" onsubmit="return confirm('Delete this user?')" style="display:inline;">
                                @csrf @method('DELETE')
                                <button style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;background:none;border:none;cursor:pointer;font-family:inherit;" onmouseover="this.style.color='#F87171';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="Delete">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </form>
                            @endif
                            @endcan
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <div class="empty-state-icon"><i class="fa-solid fa-user-group"></i></div>
                            <div style="font-size:14px;font-weight:500;color:var(--text-secondary);margin-bottom:4px;">No users found</div>
                            <div style="font-size:12px;color:var(--text-tertiary);margin-bottom:16px;">Create your first user to get started.</div>
                            @can('create users')
                            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">Create User</a>
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($users->hasPages())
    <div style="padding:14px 20px;border-top:1px solid var(--border);">
        {{ $users->links() }}
    </div>
    @endif
</div>
@endsection
