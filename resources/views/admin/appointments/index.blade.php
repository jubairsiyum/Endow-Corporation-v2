@extends('admin.layouts.app')
@section('title', 'Appointments')
@section('page-title', 'Appointments')

@section('content')

<p style="font-size:14px;color:var(--text-tertiary);margin-bottom:24px;">{{ $appointments->total() }} appointment(s)</p>

<div class="panel">
    <div style="overflow-x:auto;">
        <table style="width:100%;font-size:14px;border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid var(--border);text-align:left;">
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Name</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Contact</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Service</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Status</th>
                    <th style="padding:13px 20px;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Date</th>
                    <th style="padding:13px 20px;text-align:right;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $apt)
                <tr style="border-bottom:1px solid var(--border);transition:background 0.15s;" onmouseover="this.style.background='rgba(255,255,255,0.015)'" onmouseout="this.style.background='transparent'">
                    <td style="padding:14px 20px;font-weight:500;color:var(--text-primary);">{{ $apt->name }}</td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-secondary);">
                        <div>{{ $apt->email }}</div>
                        <div>{{ $apt->phone }}</div>
                    </td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-secondary);">{{ $apt->service_type ?: '—' }}</td>
                    <td style="padding:14px 20px;">
                        @php
                            $statusColors = [
                                'pending'   => 'background:rgba(251,191,36,0.08);color:#FBBF24;',
                                'confirmed' => 'background:rgba(96,165,250,0.08);color:#60A5FA;',
                                'completed' => 'background:rgba(52,211,153,0.08);color:#34D399;',
                                'cancelled' => 'background:rgba(255,255,255,0.03);color:#64748B;',
                            ];
                            $color = $statusColors[$apt->status] ?? 'background:rgba(255,255,255,0.03);color:#64748B;';
                        @endphp
                        <span style="font-size:11px;font-weight:600;padding:4px 10px;border-radius:20px;white-space:nowrap;{{ $color }}">{{ ucfirst($apt->status) }}</span>
                    </td>
                    <td style="padding:14px 20px;font-size:12px;color:var(--text-tertiary);">{{ $apt->created_at->format('M d, Y H:i') }}</td>
                    <td style="padding:14px 20px;text-align:right;">
                        <div style="display:flex;align-items:center;justify-content:flex-end;gap:2px;">
                            <a href="{{ route('admin.appointments.show', $apt) }}" style="padding:6px;color:var(--text-tertiary);border-radius:8px;transition:all 0.15s;" onmouseover="this.style.color='#60A5FA';this.style.background='var(--hover)'" onmouseout="this.style.color='var(--text-tertiary)';this.style.background='transparent'" title="View">
                                <i class="fa-solid fa-eye text-xs"></i>
                            </a>
                            @can('delete appointments')
                            <form method="POST" action="{{ route('admin.appointments.destroy', $apt) }}" onsubmit="return confirm('Delete?')" style="display:inline;">
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
                            <div class="empty-state-icon"><i class="fa-solid fa-calendar-check"></i></div>
                            <div style="font-size:14px;font-weight:500;color:var(--text-secondary);margin-bottom:4px;">No appointments found</div>
                            <div style="font-size:12px;color:var(--text-tertiary);">Appointments will appear here when submitted.</div>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($appointments->hasPages())
    <div style="padding:14px 20px;border-top:1px solid var(--border);">{{ $appointments->links() }}</div>
    @endif
</div>
@endsection
