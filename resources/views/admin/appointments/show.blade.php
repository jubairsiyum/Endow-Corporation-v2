@extends('admin.layouts.app')
@section('title', 'Appointment Detail')
@section('page-title', 'Appointment — ' . $appointment->name)

@section('content')
<div style="max-width:640px;margin:0 auto;">
    <div class="panel" style="padding:28px;">
        <div style="display:flex;flex-direction:column;gap:20px;">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Name</p>
                    <p style="font-size:15px;font-weight:500;color:var(--text-primary);">{{ $appointment->name }}</p>
                </div>
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Status</p>
                    @php
                        $statusColors = [
                            'pending'   => 'background:rgba(251,191,36,0.08);color:#FBBF24;',
                            'confirmed' => 'background:rgba(96,165,250,0.08);color:#60A5FA;',
                            'completed' => 'background:rgba(52,211,153,0.08);color:#34D399;',
                            'cancelled' => 'background:rgba(255,255,255,0.03);color:#64748B;',
                        ];
                        $color = $statusColors[$appointment->status] ?? 'background:rgba(255,255,255,0.03);color:#64748B;';
                    @endphp
                    <span style="font-size:11px;font-weight:600;padding:4px 10px;border-radius:20px;{{ $color }}">{{ ucfirst($appointment->status) }}</span>
                </div>
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Email</p>
                    <p style="font-size:14px;color:var(--text-primary);">{{ $appointment->email }}</p>
                </div>
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Phone</p>
                    <p style="font-size:14px;color:var(--text-primary);">{{ $appointment->phone }}</p>
                </div>
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Service Type</p>
                    <p style="font-size:14px;color:var(--text-primary);">{{ $appointment->service_type ?: '—' }}</p>
                </div>
                <div>
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Page</p>
                    <p style="font-size:14px;color:var(--text-primary);">{{ $appointment->page ?: '—' }}</p>
                </div>
                <div style="grid-column:span 2;">
                    <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:4px;">Message</p>
                    <p style="font-size:14px;color:var(--text-primary);white-space:pre-wrap;">{{ $appointment->message ?: '—' }}</p>
                </div>
            </div>

            <div style="border-top:1px solid var(--border);padding-top:20px;">
                <form method="POST" action="{{ route('admin.appointments.update-status', $appointment) }}" style="display:flex;align-items:center;gap:12px;">
                    @csrf @method('PATCH')
                    <select name="status" style="background:var(--hover);border:1px solid var(--border);border-radius:10px;padding:10px 14px;font-size:14px;color:var(--text-primary);outline:none;transition:all 0.2s;font-family:'Inter',system-ui,sans-serif;cursor:pointer;" onfocus="this.style.borderColor='rgba(239,68,68,0.4)'" onblur="this.style.borderColor='rgba(255,255,255,0.06)'">
                        <option value="pending" {{ $appointment->status === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="confirmed" {{ $appointment->status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                        <option value="completed" {{ $appointment->status === 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="cancelled" {{ $appointment->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm">Update Status</button>
                </form>
            </div>
        </div>
    </div>

    <a href="{{ route('admin.appointments.index') }}" style="display:inline-flex;align-items:center;gap:8px;font-size:14px;color:var(--text-tertiary);text-decoration:none;margin-top:16px;transition:color 0.15s;" onmouseover="this.style.color='var(--text-secondary)'" onmouseout="this.style.color='var(--text-tertiary)'">
        <i class="fa-solid fa-arrow-left text-xs"></i> Back to Appointments
    </a>
</div>
@endsection
