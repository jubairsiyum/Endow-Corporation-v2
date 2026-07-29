@extends('admin.layouts.app')
@section('title', 'Posts')
@section('page-title', 'Posts')

@section('content')

<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;">
    <p style="font-size:14px;color:var(--text-tertiary);">{{ $posts->total() }} post(s)</p>
    @can('create posts')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">
        <i class="fa-solid fa-plus text-xs"></i> New Post
    </a>
    @endcan
</div>

<div class="panel">
    <div style="overflow-x:auto;">
        <table style="width:100%;font-size:14px;border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid var(--border);text-align:left;">
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Title</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Category</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Author</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Status</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Date</th>
                    <th style="padding:13px 20px;text-align:right;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr style="border-bottom:1px solid var(--border);transition:background 0.15s;" onmouseover="this.style.background='rgba(255,255,255,0.015)'" onmouseout="this.style.background='transparent'">
                    <td style="padding:14px 20px;">
                        <p style="font-weight:500;color:var(--text-primary);max-width:250px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $post->title }}</p>
                        <p style="font-size:12px;color:var(--text-tertiary);margin-top:2px;max-width:250px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ Str::limit($post->excerpt, 60) }}</p>
                    </td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-secondary);">{{ $post->categoryRelation?->name ?? $post->category ?? '—' }}</td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-secondary);">{{ $post->author ?: '—' }}</td>
                    <td style="padding:14px 20px;">
                        <span class="badge {{ $post->is_published ? 'badge-success' : 'badge-muted' }}">{{ $post->is_published ? 'Published' : 'Draft' }}</span>
                    </td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-tertiary);">{{ $post->created_at->format('M d, Y') }}</td>
                    <td style="padding:14px 20px;text-align:right;">
                        <div style="display:flex;align-items:center;justify-content:flex-end;gap:2px;">
                            <a href="{{ route('blog.show', $post->slug) }}" target="_blank" style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;" onmouseover="this.style.color='#60A5FA';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="View">
                                <i class="fa-solid fa-eye text-xs"></i>
                            </a>
                            @can('edit posts')
                            <a href="{{ route('admin.posts.edit', $post) }}" style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;" onmouseover="this.style.color='var(--text-primary)';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="Edit">
                                <i class="fa-solid fa-pen text-xs"></i>
                            </a>
                            @endcan
                            @can('delete posts')
                            <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" onsubmit="return confirm('Delete this post?')" style="display:inline;">
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
                            <div class="empty-state-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div style="font-size:14px;font-weight:500;color:var(--text-secondary);margin-bottom:4px;">No posts found</div>
                            <div style="font-size:12px;color:var(--text-tertiary);margin-bottom:16px;">Create your first blog post.</div>
                            @can('create posts')
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">Create Post</a>
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($posts->hasPages())
    <div style="padding:14px 20px;border-top:1px solid var(--border);">{{ $posts->links() }}</div>
    @endif
</div>
@endsection
