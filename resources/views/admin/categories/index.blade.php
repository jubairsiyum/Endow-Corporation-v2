@extends('admin.layouts.app')
@section('title', 'Categories')
@section('page-title', 'Categories')

@section('content')

<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;">
    <p style="font-size:14px;color:var(--text-tertiary);">{{ $categories->total() }} category(ies)</p>
    @can('create categories')
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-sm">
        <i class="fa-solid fa-plus text-xs"></i> New Category
    </a>
    @endcan
</div>

<div class="panel">
    <div style="overflow-x:auto;">
        <table style="width:100%;font-size:14px;border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid var(--border);text-align:left;">
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Name</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Slug</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Color</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Visible</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Order</th>
                    <th style="padding:13px 20px;text-align:right;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $cat)
                <tr style="border-bottom:1px solid var(--border);transition:background 0.15s;" onmouseover="this.style.background='rgba(255,255,255,0.015)'" onmouseout="this.style.background='transparent'">
                    <td style="padding:14px 20px;font-weight:500;color:var(--text-primary);">{{ $cat->name }}</td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-secondary);font-family:'SF Mono','Consolas',monospace;">{{ $cat->slug }}</td>
                    <td style="padding:14px 20px;">
                        @if($cat->color)
                            <span style="display:inline-flex;align-items:center;gap:6px;">
                                <span style="width:14px;height:14px;border-radius:50%;border:1px solid var(--border);background:{{ $cat->color }};"></span>
                                <span style="font-size:12px;color:var(--text-secondary);">{{ $cat->color }}</span>
                            </span>
                        @else
                            <span style="font-size:12px;color:var(--text-tertiary);">—</span>
                        @endif
                    </td>
                    <td style="padding:14px 20px;">
                        <span class="badge {{ $cat->is_visible ? 'badge-success' : 'badge-muted' }}">{{ $cat->is_visible ? 'Yes' : 'No' }}</span>
                    </td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-secondary);">{{ $cat->sort_order }}</td>
                    <td style="padding:14px 20px;text-align:right;">
                        <div style="display:flex;align-items:center;justify-content:flex-end;gap:2px;">
                            @can('edit categories')
                            <a href="{{ route('admin.categories.edit', $cat) }}" style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;" onmouseover="this.style.color='var(--text-primary)';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="Edit">
                                <i class="fa-solid fa-pen text-xs"></i>
                            </a>
                            @endcan
                            @can('delete categories')
                            <form method="POST" action="{{ route('admin.categories.destroy', $cat) }}" onsubmit="return confirm('Delete this category?')" style="display:inline;">
                                @csrf @method('DELETE')
                                <button style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;background:none;border:none;cursor:pointer;font-family:inherit;" onmouseover="this.style.color='#F87171';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="Delete">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </form>
                            @endcan
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <div class="empty-state-icon"><i class="fa-solid fa-layer-group"></i></div>
                            <div style="font-size:14px;font-weight:500;color:var(--text-secondary);margin-bottom:4px;">No categories found</div>
                            <div style="font-size:12px;color:var(--text-tertiary);margin-bottom:16px;">Create categories to organize your content.</div>
                            @can('create categories')
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-sm">Create Category</a>
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($categories->hasPages())
    <div style="padding:14px 20px;border-top:1px solid var(--border);">{{ $categories->links() }}</div>
    @endif
</div>
@endsection
