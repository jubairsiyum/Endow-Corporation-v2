@extends('admin.layouts.app')
@section('title', 'Message Detail')
@section('page-title', 'Message from ' . ($message->name ?: 'Anonymous'))

@section('content')
<div style="max-width:640px;margin:0 auto;">
    <div class="panel" style="padding:28px;">
        <div style="display:flex;flex-direction:column;gap:20px;">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Name</p>
                    <p style="font-size:15px;font-weight:500;color:var(--text-primary);">{{ $message->name ?: 'Anonymous' }}</p>
                </div>
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Status</p>
                    @php
                        $msgColors = [
                            'unread'   => 'background:rgba(239,68,68,0.08);color:#F87171;',
                            'read'     => 'background:rgba(96,165,250,0.08);color:#60A5FA;',
                            'replied'  => 'background:rgba(52,211,153,0.08);color:#34D399;',
                            'archived' => 'background:rgba(255,255,255,0.03);color:#64748B;',
                        ];
                        $mc = $msgColors[$message->status] ?? 'background:rgba(255,255,255,0.03);color:#64748B;';
                    @endphp
                    <span style="font-size:11px;font-weight:600;padding:4px 10px;border-radius:20px;{{ $mc }}">{{ ucfirst($message->status) }}</span>
                </div>
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Email</p>
                    <a href="mailto:{{ $message->email }}" style="font-size:14px;color:#F87171;text-decoration:none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">{{ $message->email }}</a>
                </div>
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Phone</p>
                    <p style="font-size:14px;color:var(--text-primary);">{{ $message->phone ?: '—' }}</p>
                </div>
                <div style="grid-column:span 2;">
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Received</p>
                    <p style="font-size:14px;color:var(--text-primary);">{{ $message->created_at->format('F d, Y — H:i') }}</p>
                </div>
                <div style="grid-column:span 2;">
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:8px;">Message</p>
                    <div style="background:var(--hover);border:1px solid var(--border);border-radius:10px;padding:16px;">
                        <p style="font-size:14px;color:var(--text-primary);white-space:pre-wrap;line-height:1.6;">{{ $message->message }}</p>
                    </div>
                </div>
            </div>

            <div style="border-top:1px solid var(--border);padding-top:20px;display:flex;flex-wrap:wrap;gap:12px;align-items:center;">
                <form method="POST" action="{{ route('admin.contact-messages.update-status', $message) }}" style="display:flex;align-items:center;gap:12px;">
                    @csrf @method('PATCH')
                    <select name="status" style="background:var(--hover);border:1px solid var(--border);border-radius:10px;padding:10px 14px;font-size:14px;color:var(--text-primary);outline:none;transition:all 0.2s;font-family:'Inter',system-ui,sans-serif;cursor:pointer;" onfocus="this.style.borderColor='rgba(239,68,68,0.4)'" onblur="this.style.borderColor='rgba(255,255,255,0.06)'">
                        <option value="unread" {{ $message->status === 'unread' ? 'selected' : '' }}>Unread</option>
                        <option value="read" {{ $message->status === 'read' ? 'selected' : '' }}>Read</option>
                        <option value="replied" {{ $message->status === 'replied' ? 'selected' : '' }}>Replied</option>
                        <option value="archived" {{ $message->status === 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm">Update Status</button>
                </form>

                <a href="mailto:{{ $message->email }}" class="btn btn-sm" style="background:#3B82F6;color:white;" onmouseover="this.style.background='#2563EB'" onmouseout="this.style.background='#3B82F6'">
                    <i class="fa-solid fa-reply text-xs"></i> Reply via Email
                </a>
            </div>
        </div>
    </div>

    <a href="{{ route('admin.contact-messages.index') }}" style="display:inline-flex;align-items:center;gap:8px;font-size:14px;color:var(--text-tertiary);text-decoration:none;margin-top:16px;transition:color 0.15s;" onmouseover="this.style.color='var(--text-secondary)'" onmouseout="this.style.color='var(--text-tertiary)'">
        <i class="fa-solid fa-arrow-left text-xs"></i> Back to Messages
    </a>
</div>
@endsection
