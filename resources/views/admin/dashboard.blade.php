@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

{{-- ═══════════════ WELCOME HERO ═══════════════ --}}
<div style="background:linear-gradient(135deg, rgba(239,68,68,0.06) 0%, rgba(139,92,246,0.04) 50%, rgba(59,130,246,0.03) 100%); border:1px solid rgba(255,255,255,0.06); border-radius:20px; padding:32px; margin-bottom:28px; position:relative; overflow:hidden;">
    {{-- Decorative blobs --}}
    <div style="position:absolute;top:-60px;right:-40px;width:200px;height:200px;border-radius:50%;background:radial-gradient(circle,rgba(239,68,68,0.08) 0%,transparent 70%);pointer-events:none;"></div>
    <div style="position:absolute;bottom:-80px;left:20%;width:240px;height:240px;border-radius:50%;background:radial-gradient(circle,rgba(139,92,246,0.06) 0%,transparent 70%);pointer-events:none;"></div>

    <div style="position:relative;z-index:1;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:24px;">
        <div>
            <div style="display:inline-flex;align-items:center;gap:8px;padding:5px 12px;border-radius:20px;background:rgba(16,185,129,0.08);border:1px solid rgba(16,185,129,0.12);margin-bottom:16px;">
                <span style="width:7px;height:7px;border-radius:50%;background:#10B981;animation:pulse-dot 2s ease-in-out infinite;"></span>
                <span style="font-size:11px;font-weight:600;color:#34D399;">All systems operational</span>
            </div>
            <h1 style="font-size:32px;font-weight:700;letter-spacing:-0.03em;color:#F1F5F9;line-height:1.15;margin:0;">
                Welcome back, {{ auth()->user()->name }}
            </h1>
            <p style="font-size:14px;color:#64748B;margin-top:6px;font-weight:400;">
                {{ \Carbon\Carbon::now()->format('l, F j, Y') }} · Here's what's happening today.
            </p>
        </div>

        <div style="display:flex;gap:10px;flex-wrap:wrap;">
            @can('create posts')
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                <i class="fa-solid fa-plus text-xs"></i> New Post
            </a>
            @endcan
            @can('view posts')
            <a href="{{ route('admin.posts.index') }}" class="btn btn-ghost">
                <i class="fa-solid fa-file-lines text-xs"></i> All Posts
            </a>
            @endcan
        </div>
    </div>

    {{-- Quick Stats Row --}}
    <div style="position:relative;z-index:1;display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:16px;margin-top:28px;padding-top:24px;border-top:1px solid rgba(255,255,255,0.05);">
        <div>
            <div style="font-size:24px;font-weight:700;color:#F1F5F9;line-height:1;">{{ $counts['posts'] }}</div>
            <div style="font-size:12px;color:#64748B;margin-top:4px;font-weight:500;">Total Posts</div>
        </div>
        <div>
            <div style="font-size:24px;font-weight:700;color:#F1F5F9;line-height:1;">{{ $counts['users'] }}</div>
            <div style="font-size:12px;color:#64748B;margin-top:4px;font-weight:500;">Registered Users</div>
        </div>
        <div>
            <div style="font-size:24px;font-weight:700;color:#F1F5F9;line-height:1;">{{ $counts['newsletters'] }}</div>
            <div style="font-size:12px;color:#64748B;margin-top:4px;font-weight:500;">Subscribers</div>
        </div>
        <div>
            <div style="font-size:24px;font-weight:700;color:#10B981;line-height:1;">{{ $counts['appointments'] }}</div>
            <div style="font-size:12px;color:#64748B;margin-top:4px;font-weight:500;">Appointments</div>
        </div>
    </div>
</div>

{{-- ═══════════════ STATISTICS CARDS ═══════════════ --}}
<div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:20px;margin-bottom:28px;">

    {{-- Posts Card --}}
    <a href="{{ auth()->user()->can('view posts') ? route('admin.posts.index') : '#' }}" class="stat-card">
        <div class="stat-glow" style="background:#3B82F6;"></div>
        <div class="stat-icon-wrap" style="background:rgba(59,130,246,0.08);">
            <i class="fa-solid fa-file-lines" style="color:#60A5FA;font-size:18px;"></i>
        </div>
        <div class="stat-number">{{ $counts['posts'] }}</div>
        <div class="stat-label">Total Posts</div>
        <div class="stat-trend" style="color:#60A5FA;">
            <i class="fa-solid fa-arrow-up text-[10px]"></i> Content library
        </div>
    </a>

    {{-- Categories Card --}}
    <a href="{{ auth()->user()->can('view categories') ? route('admin.categories.index') : '#' }}" class="stat-card">
        <div class="stat-glow" style="background:#8B5CF6;"></div>
        <div class="stat-icon-wrap" style="background:rgba(139,92,246,0.08);">
            <i class="fa-solid fa-layer-group" style="color:#A78BFA;font-size:18px;"></i>
        </div>
        <div class="stat-number">{{ $counts['categories'] }}</div>
        <div class="stat-label">Categories</div>
        <div class="stat-trend" style="color:#A78BFA;">
            <i class="fa-solid fa-tags text-[10px]"></i> Organized content
        </div>
    </a>

    {{-- Users Card --}}
    <a href="{{ auth()->user()->can('view users') ? route('admin.users.index') : '#' }}" class="stat-card">
        <div class="stat-glow" style="background:#EF4444;"></div>
        <div class="stat-icon-wrap" style="background:rgba(239,68,68,0.08);">
            <i class="fa-solid fa-user-group" style="color:#F87171;font-size:18px;"></i>
        </div>
        <div class="stat-number">{{ $counts['users'] }}</div>
        <div class="stat-label">Registered Users</div>
        <div class="stat-trend" style="color:#F87171;">
            <i class="fa-solid fa-users text-[10px]"></i> Platform members
        </div>
    </a>

    {{-- Messages Card --}}
    <a href="{{ auth()->user()->can('view contact messages') ? route('admin.contact-messages.index') : '#' }}" class="stat-card">
        <div class="stat-glow" style="background:#F59E0B;"></div>
        <div class="stat-icon-wrap" style="background:rgba(245,158,11,0.08);">
            <i class="fa-solid fa-message" style="color:#FBBF24;font-size:18px;"></i>
        </div>
        <div style="display:flex;align-items:baseline;gap:10px;">
            <div class="stat-number">{{ $counts['contact_messages'] }}</div>
            @if($counts['unread_messages'])
            <span class="badge badge-warning">{{ $counts['unread_messages'] }} unread</span>
            @endif
        </div>
        <div class="stat-label">Contact Messages</div>
        <div class="stat-trend" style="color:#FBBF24;">
            <i class="fa-solid fa-inbox text-[10px]"></i> Customer inquiries
        </div>
    </a>
</div>

{{-- ═══════════════ MAIN CONTENT GRID ═══════════════ --}}
<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:28px;">

    {{-- Recent Posts Panel --}}
    <div class="panel">
        <div class="panel-header">
            <div style="display:flex;align-items:center;gap:10px;">
                <span style="width:8px;height:8px;border-radius:50%;background:#3B82F6;"></span>
                <span class="panel-title">Recent Posts</span>
            </div>
            @can('view posts')
            <a href="{{ route('admin.posts.index') }}" style="font-size:12px;font-weight:500;color:#64748B;text-decoration:none;transition:color 0.15s;" onmouseover="this.style.color='#94A3B8'" onmouseout="this.style.color='#64748B'">View all →</a>
            @endcan
        </div>
        <div class="panel-body">
            @forelse($recentPosts as $post)
            <div class="table-row">
                <div style="width:40px;height:40px;border-radius:10px;background:rgba(59,130,246,0.06);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-right:14px;">
                    <i class="fa-solid fa-file-lines" style="color:#60A5FA;font-size:14px;"></i>
                </div>
                <div style="flex:1;min-width:0;">
                    <div style="font-size:14px;font-weight:500;color:#E2E8F0;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $post->title }}</div>
                    <div style="font-size:11px;color:#64748B;margin-top:3px;">{{ $post->author ?: 'Unknown' }} · {{ $post->created_at->format('M d, Y') }}</div>
                </div>
                <span @class([
                    'badge',
                    'badge-success' => $post->is_published,
                    'badge-muted' => !$post->is_published,
                ])>{{ $post->is_published ? 'Published' : 'Draft' }}</span>
            </div>
            @empty
            <div class="empty-state">
                <div class="empty-state-icon"><i class="fa-solid fa-file-lines"></i></div>
                <div style="font-size:14px;font-weight:500;color:#94A3B8;margin-bottom:4px;">No posts yet</div>
                <div style="font-size:12px;color:#64748B;margin-bottom:16px;">Create your first blog post to get started.</div>
                @can('create posts')
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">Create Post</a>
                @endcan
            </div>
            @endforelse
        </div>
    </div>

    {{-- Recent Messages Panel --}}
    <div class="panel">
        <div class="panel-header">
            <div style="display:flex;align-items:center;gap:10px;">
                <span style="width:8px;height:8px;border-radius:50%;background:#F59E0B;"></span>
                <span class="panel-title">Recent Messages</span>
            </div>
            @can('view contact messages')
            <a href="{{ route('admin.contact-messages.index') }}" style="font-size:12px;font-weight:500;color:#64748B;text-decoration:none;transition:color 0.15s;" onmouseover="this.style.color='#94A3B8'" onmouseout="this.style.color='#64748B'">View all →</a>
            @endcan
        </div>
        <div class="panel-body">
            @forelse($recentMessages as $msg)
            <div class="table-row" style="align-items:flex-start;">
                <div style="width:36px;height:36px;border-radius:50%;background:rgba(245,158,11,0.1);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-right:12px;font-size:13px;font-weight:600;color:#FBBF24;">
                    {{ strtoupper(substr($msg->name ?: 'A', 0, 1)) }}
                </div>
                <div style="flex:1;min-width:0;">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:8px;">
                        <span style="font-size:14px;font-weight:500;color:#E2E8F0;">{{ $msg->name ?: 'Anonymous' }}</span>
                        @if($msg->status === 'unread')
                        <span class="badge badge-warning">New</span>
                        @else
                        <span class="badge badge-muted">{{ ucfirst($msg->status) }}</span>
                        @endif
                    </div>
                    <div style="font-size:12px;color:#64748B;margin-top:3px;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">{{ Str::limit($msg->message, 80) }}</div>
                    <div style="font-size:10px;color:rgba(255,255,255,0.12);margin-top:4px;">{{ $msg->created_at->diffForHumans() }}</div>
                </div>
            </div>
            @empty
            <div class="empty-state">
                <div class="empty-state-icon"><i class="fa-solid fa-message"></i></div>
                <div style="font-size:14px;font-weight:500;color:#94A3B8;margin-bottom:4px;">No messages yet</div>
                <div style="font-size:12px;color:#64748B;">Messages from your contact form will appear here.</div>
            </div>
            @endforelse
        </div>
    </div>
</div>

{{-- ═══════════════ BOTTOM GRID ═══════════════ --}}
<div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:20px;">

    {{-- Appointments Overview --}}
    <div class="panel">
        <div class="panel-header">
            <div style="display:flex;align-items:center;gap:10px;">
                <span style="width:8px;height:8px;border-radius:50%;background:#8B5CF6;"></span>
                <span class="panel-title">Appointments</span>
            </div>
            @can('view appointments')
            <a href="{{ route('admin.appointments.index') }}" style="font-size:12px;font-weight:500;color:#64748B;text-decoration:none;transition:color 0.15s;" onmouseover="this.style.color='#94A3B8'" onmouseout="this.style.color='#64748B'">View all →</a>
            @endcan
        </div>
        <div class="panel-body padded" style="text-align:center;">
            <div style="font-size:48px;font-weight:700;color:#F1F5F9;line-height:1;">{{ $counts['appointments'] }}</div>
            <div style="font-size:13px;color:#64748B;margin-top:4px;">Total Appointments</div>
            @if($counts['pending_appts'])
            <div style="margin-top:12px;display:inline-flex;align-items:center;gap:6px;padding:6px 12px;border-radius:20px;background:rgba(245,158,11,0.08);">
                <span style="width:6px;height:6px;border-radius:50%;background:#F59E0B;"></span>
                <span style="font-size:12px;font-weight:600;color:#FBBF24;">{{ $counts['pending_appts'] }} pending</span>
            </div>
            @else
            <div style="margin-top:12px;font-size:12px;color:rgba(255,255,255,0.15);">All caught up!</div>
            @endif
        </div>
    </div>

    {{-- Newsletter Growth --}}
    <div class="panel">
        <div class="panel-header">
            <div style="display:flex;align-items:center;gap:10px;">
                <span style="width:8px;height:8px;border-radius:50%;background:#10B981;"></span>
                <span class="panel-title">Newsletter</span>
            </div>
            @can('view newsletters')
            <a href="{{ route('admin.newsletters.index') }}" style="font-size:12px;font-weight:500;color:#64748B;text-decoration:none;transition:color 0.15s;" onmouseover="this.style.color='#94A3B8'" onmouseout="this.style.color='#64748B'">View all →</a>
            @endcan
        </div>
        <div class="panel-body padded" style="text-align:center;">
            <div style="font-size:48px;font-weight:700;color:#F1F5F9;line-height:1;">{{ $counts['newsletters'] }}</div>
            <div style="font-size:13px;color:#64748B;margin-top:4px;">Subscribers</div>
            <div style="margin-top:16px;display:flex;align-items:center;justify-content:center;gap:6px;">
                <span style="font-size:11px;color:#34D399;font-weight:600;"><i class="fa-solid fa-arrow-trend-up text-[10px]"></i> Growing audience</span>
            </div>
        </div>
    </div>

    {{-- System Status --}}
    <div class="panel">
        <div class="panel-header">
            <div style="display:flex;align-items:center;gap:10px;">
                <span style="width:8px;height:8px;border-radius:50%;background:#06B6D4;"></span>
                <span class="panel-title">System Status</span>
            </div>
        </div>
        <div class="panel-body padded">
            <div style="display:flex;align-items:center;justify-content:space-between;padding:10px 0;border-bottom:1px solid rgba(255,255,255,0.04);">
                <span style="font-size:13px;color:#94A3B8;">Database</span>
                <span class="badge badge-success">Online</span>
            </div>
            <div style="display:flex;align-items:center;justify-content:space-between;padding:10px 0;border-bottom:1px solid rgba(255,255,255,0.04);">
                <span style="font-size:13px;color:#94A3B8;">Cache</span>
                <span class="badge badge-success">Active</span>
            </div>
            <div style="display:flex;align-items:center;justify-content:space-between;padding:10px 0;border-bottom:1px solid rgba(255,255,255,0.04);">
                <span style="font-size:13px;color:#94A3B8;">Storage</span>
                <span class="badge badge-success">Connected</span>
            </div>
            <div style="display:flex;align-items:center;justify-content:space-between;padding:10px 0;">
                <span style="font-size:13px;color:#94A3B8;">Laravel</span>
                <span class="badge badge-blue">{{ app()->version() }}</span>
            </div>
        </div>
    </div>
</div>

{{-- ═══════════════ ACTIVITY TIMELINE ═══════════════ --}}
<div class="panel" style="margin-top:20px;">
    <div class="panel-header">
        <div style="display:flex;align-items:center;gap:10px;">
            <span style="width:8px;height:8px;border-radius:50%;background:#06B6D4;"></span>
            <span class="panel-title">Recent Activity</span>
        </div>
    </div>
    <div class="panel-body">
        @php
            $activities = collect();

            foreach($recentPosts as $post) {
                $activities->push([
                    'icon' => 'fa-solid fa-file-lines',
                    'color' => '#3B82F6',
                    'bg' => 'rgba(59,130,246,0.1)',
                    'title' => $post->is_published ? 'Post published' : 'Draft created',
                    'desc' => $post->title,
                    'time' => $post->created_at->diffForHumans(),
                    'badge' => $post->is_published ? ['Published', 'badge-success'] : ['Draft', 'badge-muted'],
                ]);
            }

            foreach($recentMessages as $msg) {
                $activities->push([
                    'icon' => 'fa-solid fa-message',
                    'color' => '#F59E0B',
                    'bg' => 'rgba(245,158,11,0.1)',
                    'title' => $msg->name ?: 'Anonymous' . ' sent a message',
                    'desc' => Str::limit($msg->message, 60),
                    'time' => $msg->created_at->diffForHumans(),
                    'badge' => $msg->status === 'unread' ? ['Unread', 'badge-warning'] : ['Read', 'badge-muted'],
                ]);
            }

            $activities = $activities->sortByDesc(function($a) {
                return strtotime($a['time'] ?? 'now');
            })->take(6);
        @endphp

        @forelse($activities as $activity)
        <div class="timeline-item">
            <div class="timeline-dot" style="background:{{ $activity['color'] }};"></div>
            <div style="flex:1;min-width:0;">
                <div style="display:flex;align-items:center;justify-content:space-between;gap:8px;">
                    <div style="font-size:13px;font-weight:500;color:#E2E8F0;">{{ $activity['title'] }}</div>
                    <span @class(['badge', $activity['badge'][1]])>{{ $activity['badge'][0] }}</span>
                </div>
                <div style="font-size:12px;color:#64748B;margin-top:2px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $activity['desc'] }}</div>
                <div style="font-size:10px;color:rgba(255,255,255,0.12);margin-top:4px;">{{ $activity['time'] }}</div>
            </div>
        </div>
        @empty
        <div class="empty-state">
            <div class="empty-state-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
            <div style="font-size:14px;font-weight:500;color:#94A3B8;margin-bottom:4px;">No recent activity</div>
            <div style="font-size:12px;color:#64748B;">Activity from your content and messages will show here.</div>
        </div>
        @endforelse
    </div>
</div>

@endsection

