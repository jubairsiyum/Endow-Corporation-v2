@extends('admin.layouts.app')
@section('title', 'Contact Messages')
@section('page-title', 'Contact Messages')

@section('content')

<p style="font-size:14px;color:var(--text-tertiary);margin-bottom:24px;">{{ $messages->total() }} message(s)</p>

<div class="panel">
    <div style="overflow-x:auto;">
        <table style="width:100%;font-size:14px;border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid var(--border);text-align:left;">
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">From</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Message</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Status</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Date</th>
                    <th style="padding:13px 20px;text-align:right;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $msg)
                <tr style="border-bottom:1px solid var(--border);transition:background 0.15s;{{ $msg->status === 'unread' ? 'background:rgba(239,68,68,0.02);' : '' }}" onmouseover="this.style.background='rgba(255,255,255,0.02)'" onmouseout="this.style.background='{{ $msg->status === 'unread' ? 'rgba(239,68,68,0.02)' : 'transparent' }}'">
                    <td style="padding:14px 20px;">
                        <p style="font-weight:500;color:var(--text-primary);">{{ $msg->name ?: 'Anonymous' }}</p>
                        <p style="font-size:12px;color:var(--text-tertiary);">{{ $msg->email }}</p>
                    </td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-secondary);max-width:280px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ Str::limit($msg->message, 70) }}</td>
                    <td style="padding:14px 20px;">
                        @php
                            $msgColors = [
                                'unread'   => 'background:rgba(239,68,68,0.08);color:#F87171;',
                                'read'     => 'background:rgba(96,165,250,0.08);color:#60A5FA;',
                                'replied'  => 'background:rgba(52,211,153,0.08);color:#34D399;',
                                'archived' => 'background:rgba(255,255,255,0.03);color:#64748B;',
                            ];
                            $mc = $msgColors[$msg->status] ?? 'background:rgba(255,255,255,0.03);color:#64748B;';
                        @endphp
                        <span style="font-size:11px;font-weight:600;padding:4px 10px;border-radius:20px;white-space:nowrap;{{ $mc }}">{{ ucfirst($msg->status) }}</span>
                    </td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-tertiary);">{{ $msg->created_at->format('M d, Y H:i') }}</td>
                    <td style="padding:14px 20px;text-align:right;">
                        <div style="display:flex;align-items:center;justify-content:flex-end;gap:2px;">
                            <a href="{{ route('admin.contact-messages.show', $msg) }}" style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;" onmouseover="this.style.color='#60A5FA';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="View">
                                <i class="fa-solid fa-eye text-xs"></i>
                            </a>
                            @can('delete contact messages')
                            <form method="POST" action="{{ route('admin.contact-messages.destroy', $msg) }}" onsubmit="return confirm('Delete?')" style="display:inline;">
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
                    <td colspan="5">
                        <div class="empty-state">
                            <div class="empty-state-icon"><i class="fa-solid fa-message"></i></div>
                            <div style="font-size:14px;font-weight:500;color:var(--text-secondary);margin-bottom:4px;">No messages found</div>
                            <div style="font-size:12px;color:var(--text-tertiary);">Messages from your contact form will appear here.</div>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($messages->hasPages())
    <div style="padding:14px 20px;border-top:1px solid var(--border);">{{ $messages->links() }}</div>
    @endif
</div>
@endsection
