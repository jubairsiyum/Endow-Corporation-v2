@extends('admin.layouts.app')
@section('title', 'Newsletter Subscribers')
@section('page-title', 'Newsletter Subscribers')

@section('content')

<p style="font-size:14px;color:var(--text-tertiary);margin-bottom:24px;">{{ $subscribers->total() }} subscriber(s)</p>

<div class="panel">
    <div style="overflow-x:auto;">
        <table style="width:100%;font-size:14px;border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid var(--border);text-align:left;">
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Email</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Status</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Subscribed</th>
                    <th style="padding:13px 20px;text-align:right;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($subscribers as $sub)
                <tr style="border-bottom:1px solid var(--border);transition:background 0.15s;" onmouseover="this.style.background='rgba(255,255,255,0.015)'" onmouseout="this.style.background='transparent'">
                    <td style="padding:14px 20px;font-weight:500;color:var(--text-primary);">{{ $sub->email }}</td>
                    <td style="padding:14px 20px;">
                        <span class="badge {{ $sub->status === 'active' ? 'badge-success' : 'badge-muted' }}">{{ ucfirst($sub->status) }}</span>
                    </td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-tertiary);">{{ $sub->created_at->format('M d, Y') }}</td>
                    <td style="padding:14px 20px;text-align:right;">
                        <form method="POST" action="{{ route('admin.newsletters.destroy', $sub) }}" onsubmit="return confirm('Remove this subscriber?')" style="display:inline;">
                            @csrf @method('DELETE')
                            <button style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;background:none;border:none;cursor:pointer;font-family:inherit;" onmouseover="this.style.color='#F87171';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="Remove">
                                <i class="fa-solid fa-trash text-xs"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">
                        <div class="empty-state">
                            <div class="empty-state-icon"><i class="fa-solid fa-mail-bulk"></i></div>
                            <div style="font-size:14px;font-weight:500;color:var(--text-secondary);margin-bottom:4px;">No subscribers found</div>
                            <div style="font-size:12px;color:var(--text-tertiary);">Subscribers will appear here when they sign up.</div>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($subscribers->hasPages())
    <div style="padding:14px 20px;border-top:1px solid var(--border);">{{ $subscribers->links() }}</div>
    @endif
</div>
@endsection
