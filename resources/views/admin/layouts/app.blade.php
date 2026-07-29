<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Dashboard') — Endow Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;450;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand:       { DEFAULT: '#EF4444', light: '#F87171', dark: '#DC2626', glow: 'rgba(239,68,68,0.18)', soft: 'rgba(239,68,68,0.1)' },
                        surface:     { DEFAULT: '#151A21', hover: '#1D232D', elevated: '#1A1F27', input: '#1D232D' },
                        sidebar:     { DEFAULT: '#11151B', hover: '#1A1F28', active: 'rgba(239,68,68,0.08)' },
                        bg:          { DEFAULT: '#0B0F14', secondary: '#0F1319' },
                        border:      { DEFAULT: 'rgba(255,255,255,0.06)', strong: 'rgba(255,255,255,0.10)' },
                        accent:      { amber:'#F59E0B', emerald:'#10B981', sky:'#3B82F6', violet:'#8B5CF6', rose:'#F43F5E', cyan:'#06B6D4' },
                        soft:        { DEFAULT:'#8E929B', light:'#A8ACB5', dark:'#636772' },
                        muted:       { DEFAULT: '#94A3B8', secondary: '#64748B' },
                        primary:     { DEFAULT: '#EF4444', hover: '#DC2626', soft: 'rgba(239,68,68,0.1)' },
                        success:     { DEFAULT: '#34D399', soft: 'rgba(52,211,153,0.1)' },
                        danger:      { DEFAULT: '#F87171', soft: 'rgba(248,113,113,0.1)' },
                        warning:     { DEFAULT: '#FBBF24', soft: 'rgba(251,191,36,0.1)' },
                        info:        { DEFAULT: '#60A5FA', soft: 'rgba(96,165,250,0.1)' },
                    },
                    fontFamily: { sans: ['Inter','system-ui','sans-serif'] },
                    borderRadius: { '2xl': '16px', '3xl': '20px', '4xl': '24px' },
                    boxShadow: {
                        'card': '0 1px 2px rgba(0,0,0,0.3), 0 0 0 1px rgba(255,255,255,0.03)',
                        'card-hover': '0 4px 12px rgba(0,0,0,0.4), 0 0 0 1px rgba(255,255,255,0.06)',
                        'sidebar': '4px 0 24px rgba(0,0,0,0.4)',
                        'dropdown': '0 12px 40px rgba(0,0,0,0.5), 0 0 0 1px rgba(255,255,255,0.06)',
                        'btn': '0 2px 8px rgba(239,68,68,0.25)',
                    },
                }
            }
        }
    </script>

    <style>
        :root {
            --bg:         #0B0F14;
            --sidebar:    #11151B;
            --surface:    #151A21;
            --hover:      #1D232D;
            --border:     rgba(255,255,255,0.06);
            --border-strong: rgba(255,255,255,0.10);
            --primary:    #EF4444;
            --primary-soft: rgba(239,68,68,0.12);
            --success:    #10B981;
            --warning:    #F59E0B;
            --blue:       #3B82F6;
            --purple:     #8B5CF6;
            --text-primary:   #F1F5F9;
            --text-secondary: #94A3B8;
            --text-tertiary:  #64748B;
            --radius-card: 20px;
            --radius-btn:  12px;
            --sidebar-width: 280px;
            --header-height: 64px;
            --transition-fast: 150ms ease;
            --transition-base: 200ms ease-in-out;
            --transition-slow: 300ms cubic-bezier(0.4,0,0.2,1);
        }

        * { scrollbar-width: thin; scrollbar-color: #1D232D transparent; }
        ::-webkit-scrollbar { width: 4px; height: 4px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #1D232D; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #2A303C; }

        body {
            background: var(--bg);
            color: var(--text-primary);
            font-family: 'Inter', system-ui, sans-serif;
            font-size: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            line-height: 1.5;
        }

        /* ── Sidebar ── */
        .sidebar {
            position: fixed;
            top: 12px;
            left: 12px;
            bottom: 12px;
            width: var(--sidebar-width);
            background: var(--sidebar);
            border-radius: 20px;
            z-index: 40;
            display: flex;
            flex-direction: column;
            border: 1px solid var(--border);
            box-shadow: 0 1px 2px rgba(0,0,0,0.3), 0 0 0 1px rgba(255,255,255,0.03);
            transition: transform var(--transition-slow), opacity var(--transition-slow);
            overflow: hidden;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 20px 20px 16px;
            flex-shrink: 0;
        }

        .sidebar-logo {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary), #DC2626);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(239,68,68,0.25);
            flex-shrink: 0;
        }

        .sidebar-brand-name {
            font-size: 14px;
            font-weight: 700;
            color: #F1F5F9;
            letter-spacing: -0.02em;
            line-height: 1.1;
        }

        .sidebar-brand-label {
            font-size: 10px;
            font-weight: 600;
            color: var(--primary);
            letter-spacing: 2.5px;
            text-transform: uppercase;
            line-height: 1;
        }

        .sidebar-nav {
            flex: 1;
            overflow-y: auto;
            padding: 4px 12px 12px;
            display: flex;
            flex-direction: column;
            gap: 1px;
        }

        .sidebar-section-label {
            padding: 20px 12px 6px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.15);
            user-select: none;
        }

        .sidebar-footer {
            flex-shrink: 0;
            border-top: 1px solid var(--border);
            padding: 12px 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        /* ── Nav Items ── */
        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 12px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-tertiary);
            text-decoration: none;
            transition: all var(--transition-base);
            position: relative;
            white-space: nowrap;
        }

        .nav-item:hover {
            color: var(--text-secondary);
            background: var(--sidebar-hover);
        }

        .nav-item.active {
            color: var(--text-primary);
            background: var(--primary-soft);
            box-shadow: inset 0 0 0 1px rgba(239,68,68,0.15);
        }

        .nav-item.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 20px;
            background: var(--primary);
            border-radius: 0 4px 4px 0;
        }

        .nav-item i {
            width: 20px;
            text-align: center;
            font-size: 16px;
            flex-shrink: 0;
            transition: color var(--transition-base);
        }

        .nav-item.active i { color: var(--primary); }
        .nav-item .nav-badge {
            margin-left: auto;
            font-size: 10px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 20px;
            min-width: 22px;
            text-align: center;
        }

        .nav-item .nav-badge.amber { background: rgba(245,158,11,0.12); color: #F59E0B; }
        .nav-item .nav-badge.red   { background: rgba(239,68,68,0.12); color: #EF4444; }

        /* ── Header ── */
        .admin-header {
            position: sticky;
            top: 0;
            z-index: 30;
            height: var(--header-height);
            background: rgba(11,15,20,0.85);
            backdrop-filter: blur(16px) saturate(120%);
            -webkit-backdrop-filter: blur(16px) saturate(120%);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 24px;
            gap: 16px;
        }

        /* ── Search ── */
        .header-search {
            display: flex;
            align-items: center;
            gap: 8px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 8px 14px;
            min-width: 280px;
            transition: all var(--transition-fast);
        }
        .header-search:focus-within {
            border-color: var(--border-strong);
            box-shadow: 0 0 0 3px rgba(255,255,255,0.03);
        }
        .header-search input {
            background: transparent;
            border: none;
            outline: none;
            color: var(--text-primary);
            font-size: 13px;
            width: 100%;
            font-family: 'Inter', system-ui, sans-serif;
        }
        .header-search input::placeholder { color: var(--text-tertiary); }

        /* ── Breadcrumbs ── */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: var(--text-tertiary);
        }
        .breadcrumb a { color: var(--text-tertiary); text-decoration: none; transition: color var(--transition-fast); }
        .breadcrumb a:hover { color: var(--text-secondary); }
        .breadcrumb .separator { font-size: 10px; color: rgba(255,255,255,0.15); }
        .breadcrumb .current { color: var(--text-primary); font-weight: 600; }

        /* ── Header Actions ── */
        .header-action {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-tertiary);
            background: transparent;
            border: none;
            cursor: pointer;
            transition: all var(--transition-fast);
            position: relative;
        }
        .header-action:hover { color: var(--text-secondary); background: var(--surface); }

        .header-action .dot {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--primary);
            border: 2px solid var(--bg);
        }

        /* ── Quick Create Button ── */
        .btn-create {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            height: 38px;
            padding: 0 16px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: var(--radius-btn);
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition-base);
            box-shadow: 0 2px 8px rgba(239,68,68,0.25);
            text-decoration: none;
            white-space: nowrap;
        }
        .btn-create:hover {
            background: #DC2626;
            transform: translateY(-1px);
            box-shadow: 0 4px 16px rgba(239,68,68,0.35);
        }

        /* ── Profile ── */
        .profile-trigger {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 4px 12px 4px 4px;
            border-radius: 14px;
            border: none;
            background: transparent;
            cursor: pointer;
            transition: all var(--transition-fast);
        }
        .profile-trigger:hover { background: var(--surface); }

        .profile-avatar {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--primary), #DC2626);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            color: white;
            flex-shrink: 0;
        }

        .profile-name {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            display: none;
        }
        @media (min-width: 640px) { .profile-name { display: block; } }

        /* ── Dropdown ── */
        .dropdown-menu {
            position: absolute;
            right: 0;
            top: calc(100% + 8px);
            width: 260px;
            background: var(--sidebar);
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.5), 0 0 0 1px rgba(255,255,255,0.06);
            padding: 6px;
            z-index: 50;
        }
        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border-radius: 10px;
            font-size: 13px;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all var(--transition-fast);
            cursor: pointer;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            font-family: 'Inter', system-ui, sans-serif;
        }
        .dropdown-item:hover { color: var(--text-primary); background: var(--hover); }
        .dropdown-item.danger { color: #FCA5A5; }
        .dropdown-item.danger:hover { background: rgba(239,68,68,0.1); color: #FECACA; }
        .dropdown-divider { height: 1px; background: var(--border); margin: 6px 0; }

        /* ── Notification Dot Animation ── */
        @keyframes pulse-dot { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.5;transform:scale(0.8)} }
        .pulse-dot { animation: pulse-dot 2s ease-in-out infinite; }

        /* ── Main Content ── */
        .main-content { margin-left: calc(var(--sidebar-width) + 24px); min-height: 100vh; display: flex; flex-direction: column; }

        .page-container { flex: 1; padding: 28px 32px; }

        /* ── Alert Toasts ── */
        .alert {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 18px;
            border-radius: 14px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            animation: slideDown 0.3s ease;
        }
        @keyframes slideDown { from { opacity: 0; transform: translateY(-8px); } to { opacity: 1; transform: translateY(0); } }
        .alert-success { background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.15); color: #34D399; }
        .alert-error   { background: rgba(244,63,94,0.08); border: 1px solid rgba(244,63,94,0.15); color: #FB7185; }

        /* ── Page Title ── */
        .page-title { font-size: 28px; font-weight: 700; letter-spacing: -0.03em; color: var(--text-primary); line-height: 1.15; }
        .page-subtitle { font-size: 14px; color: var(--text-tertiary); margin-top: 4px; font-weight: 400; }

        /* ── Stat Card ── */
        .stat-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-card);
            padding: 24px;
            transition: all var(--transition-base);
            position: relative;
            overflow: hidden;
            text-decoration: none;
            display: block;
        }
        .stat-card:hover {
            border-color: var(--border-strong);
            box-shadow: 0 4px 12px rgba(0,0,0,0.4), 0 0 0 1px rgba(255,255,255,0.06);
            transform: translateY(-2px);
        }
        .stat-card .stat-glow {
            position: absolute;
            top: -30px;
            right: -30px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            opacity: 0.06;
            transition: opacity var(--transition-base);
        }
        .stat-card:hover .stat-glow { opacity: 0.12; }
        .stat-icon-wrap {
            width: 44px;
            height: 44px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            transition: transform var(--transition-slow);
        }
        .stat-card:hover .stat-icon-wrap { transform: scale(1.08); }
        .stat-number { font-size: 36px; font-weight: 700; letter-spacing: -0.03em; color: var(--text-primary); line-height: 1; }
        .stat-label  { font-size: 13px; color: var(--text-tertiary); margin-top: 6px; font-weight: 500; }
        .stat-trend  { font-size: 12px; font-weight: 600; margin-top: 10px; display: inline-flex; align-items: center; gap: 4px; }

        /* ── Panel Card ── */
        .panel {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-card);
            overflow: hidden;
        }
        .panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 24px;
            border-bottom: 1px solid var(--border);
        }
        .panel-title {
            font-size: 15px;
            font-weight: 600;
            color: var(--text-primary);
            letter-spacing: -0.01em;
        }
        .panel-body { padding: 0; }
        .panel-body.padded { padding: 24px; }

        /* ── Table Row ── */
        .table-row {
            display: flex;
            align-items: center;
            padding: 14px 24px;
            transition: background var(--transition-fast);
            border-bottom: 1px solid var(--border);
        }
        .table-row:last-child { border-bottom: none; }
        .table-row:hover { background: rgba(255,255,255,0.015); }

        /* ── Badge ── */
        .badge {
            font-size: 11px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 20px;
            white-space: nowrap;
        }
        .badge-success { background: rgba(16,185,129,0.1); color: #34D399; }
        .badge-warning { background: rgba(245,158,11,0.1); color: #FBBF24; }
        .badge-blue    { background: rgba(59,130,246,0.1); color: #60A5FA; }
        .badge-purple  { background: rgba(139,92,246,0.1); color: #A78BFA; }
        .badge-muted   { background: rgba(255,255,255,0.04); color: #64748B; }

        /* ── Empty State ── */
        .empty-state {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 48px 24px;
            text-align: center;
        }
        .empty-state-icon {
            width: 64px;
            height: 64px;
            border-radius: 20px;
            background: var(--surface);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            font-size: 24px;
            color: var(--text-tertiary);
        }

        /* ── Timeline ── */
        .timeline-item {
            display: flex;
            gap: 16px;
            padding: 14px 24px;
            border-bottom: 1px solid var(--border);
            transition: background var(--transition-fast);
        }
        .timeline-item:last-child { border-bottom: none; }
        .timeline-item:hover { background: rgba(255,255,255,0.015); }
        .timeline-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-top: 6px;
            flex-shrink: 0;
            position: relative;
        }
        .timeline-dot::after {
            content: '';
            position: absolute;
            top: 10px;
            left: 4px;
            width: 2px;
            height: calc(100% + 20px);
            background: var(--border);
        }
        .timeline-item:last-child .timeline-dot::after { display: none; }

        /* ── Button Styles ── */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            height: 42px;
            padding: 0 18px;
            border-radius: var(--radius-btn);
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition-base);
            text-decoration: none;
            border: none;
            font-family: 'Inter', system-ui, sans-serif;
        }
        .btn-primary { background: var(--primary); color: white; box-shadow: 0 2px 8px rgba(239,68,68,0.25); }
        .btn-primary:hover { background: #DC2626; transform: translateY(-1px); box-shadow: 0 4px 16px rgba(239,68,68,0.35); }
        .btn-ghost { background: transparent; color: var(--text-tertiary); }
        .btn-ghost:hover { background: var(--surface); color: var(--text-secondary); }
        .btn-sm { height: 34px; padding: 0 12px; font-size: 12px; border-radius: 10px; }

        /* ── Mobile Sidebar Overlay ── */
        .sidebar-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            z-index: 39;
        }

        /* ── Responsive ── */
        @media (max-width: 1023px) {
            .sidebar { transform: translateX(calc(-100% - 24px)); opacity: 0; }
            .sidebar.open { transform: translateX(0); opacity: 1; }
            .main-content { margin-left: 0; }
            .page-container { padding: 20px 16px; }
            .header-search { min-width: auto; flex: 1; max-width: 320px; }
            .breadcrumb { display: none; }
            .page-title { font-size: 24px; }
            .stat-number { font-size: 28px; }
        }

        @media (max-width: 639px) {
            .page-container { padding: 16px 12px; }
            .admin-header { padding: 0 12px; }
            .header-search { display: none; }
            .stat-card { padding: 18px; }
            .stat-number { font-size: 26px; }
            .panel-header { padding: 14px 16px; }
            .table-row { padding: 12px 16px; }
        }

        [x-cloak] { display: none !important; }

        /* ── Quill Dark Theme ── */
        .ql-dark .ql-toolbar {
            background: #1A1F27;
            border: 1px solid rgba(255,255,255,0.08) !important;
            border-bottom: 1px solid rgba(255,255,255,0.06) !important;
            border-radius: 12px 12px 0 0;
            padding: 10px 12px;
            display: flex;
            flex-wrap: wrap;
            gap: 2px;
        }
        .ql-dark .ql-container {
            background: #151A21;
            border: 1px solid rgba(255,255,255,0.08) !important;
            border-top: none !important;
            border-radius: 0 0 12px 12px;
            font-size: 15px;
            color: #F1F5F9;
            min-height: 400px;
        }
        .ql-dark .ql-editor {
            min-height: 400px;
            max-height: 600px;
            overflow-y: auto;
            padding: 18px 20px;
            line-height: 1.7;
            font-family: 'Inter', system-ui, sans-serif;
        }
        .ql-dark .ql-editor.ql-blank::before {
            color: #64748B;
            font-style: normal;
        }
        .ql-dark .ql-stroke { stroke: #94A3B8; }
        .ql-dark .ql-fill { fill: #94A3B8; }
        .ql-dark .ql-picker { color: #94A3B8; }
        .ql-dark .ql-picker-options {
            background: #1A1F27;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.5);
        }
        .ql-dark .ql-picker-item { color: #94A3B8; }
        .ql-dark button:hover .ql-stroke,
        .ql-dark button.ql-active .ql-stroke,
        .ql-dark .ql-picker-label:hover .ql-stroke,
        .ql-dark .ql-picker-label.ql-active .ql-stroke { stroke: #F87171 !important; }
        .ql-dark button:hover .ql-fill,
        .ql-dark button.ql-active .ql-fill,
        .ql-dark .ql-picker-label:hover .ql-fill,
        .ql-dark .ql-picker-label.ql-active .ql-fill { fill: #F87171 !important; }
        .ql-dark button:hover,
        .ql-dark button.ql-active,
        .ql-dark .ql-picker-label:hover,
        .ql-dark .ql-picker-label.ql-active,
        .ql-dark .ql-picker-item:hover,
        .ql-dark .ql-picker-item.ql-selected { color: #F87171 !important; }
        .ql-dark .ql-tooltip {
            background: #1A1F27;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.5);
            color: #F1F5F9;
        }
        .ql-dark .ql-tooltip input[type=text] {
            background: #151A21;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 6px;
            color: #F1F5F9;
            padding: 4px 8px;
        }
        .ql-dark .ql-tooltip a { color: #F87171; }
    </style>
    @stack('styles')
</head>
<body class="font-sans antialiased">

    {{-- Mobile Sidebar Overlay --}}
    <div id="sidebar-overlay" class="sidebar-overlay hidden" onclick="closeSidebar()"></div>

    {{-- ═══════════════ SIDEBAR ═══════════════ --}}
    <aside id="sidebar" class="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
            </div>
            <div>
                <div class="sidebar-brand-name">ENDOW</div>
                <div class="sidebar-brand-label">Admin</div>
            </div>
        </div>

        <nav class="sidebar-nav">
            <x-admin.nav-link route="admin.dashboard" icon="fa-solid fa-border-all" label="Dashboard" />

            <div class="sidebar-section-label">Administration</div>
            <x-admin.nav-link route="admin.users.index" icon="fa-solid fa-user-group" label="Users" permission="view users" />
            <x-admin.nav-link route="admin.roles.index" icon="fa-solid fa-shield-halved" label="Roles & Permissions" permission="view roles" />

            <div class="sidebar-section-label">Content</div>
            <x-admin.nav-link route="admin.posts.index" icon="fa-solid fa-file-lines" label="Posts" permission="view posts" />
            <x-admin.nav-link route="admin.categories.index" icon="fa-solid fa-layer-group" label="Categories" permission="view categories" />

            <div class="sidebar-section-label">Communication</div>
            <x-admin.nav-link route="admin.appointments.index" icon="fa-solid fa-calendar-check" label="Appointments" permission="view appointments">
                @php $pa = \App\Models\Appointment::where('status','pending')->count(); @endphp
                @if($pa)<span class="nav-badge amber">{{ $pa }}</span>@endif
            </x-admin.nav-link>
            <x-admin.nav-link route="admin.contact-messages.index" icon="fa-solid fa-message" label="Messages" permission="view contact messages">
                @php $um = \App\Models\ContactMessage::where('status','unread')->count(); @endphp
                @if($um)<span class="nav-badge red">{{ $um }}</span>@endif
            </x-admin.nav-link>
            <x-admin.nav-link route="admin.newsletters.index" icon="fa-solid fa-mail-bulk" label="Newsletter" permission="view newsletters" />
        </nav>

        <div class="sidebar-footer">
            <a href="{{ route('home') }}" target="_blank" class="nav-item" style="font-size:13px;">
                <i class="fa-solid fa-arrow-up-right text-xs"></i>
                View Website
            </a>
            <span style="font-size:10px; color:rgba(255,255,255,0.12); padding:0 12px;">© {{ date('Y') }} Endow Corporation</span>
        </div>
    </aside>

    {{-- ═══════════════ MAIN CONTENT ═══════════════ --}}
    <div class="main-content">
        {{-- Header --}}
        <header class="admin-header">
            <div class="flex items-center gap-3">
                <button onclick="toggleSidebar()" class="header-action lg:hidden" aria-label="Toggle sidebar">
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>

                {{-- Breadcrumbs --}}
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" aria-label="Dashboard"><i class="fa-solid fa-house text-xs"></i></a>
                    <span class="separator"><i class="fa-solid fa-chevron-right text-[8px]"></i></span>
                    <span class="current">@yield('page-title', 'Dashboard')</span>
                </div>
            </div>

            <div class="flex items-center gap-2">
                {{-- Search --}}
                <div class="header-search">
                    <i class="fa-solid fa-magnifying-glass text-xs" style="color:var(--text-tertiary);"></i>
                    <input type="text" placeholder="Search anything..." aria-label="Search">
                    <kbd style="font-size:10px;padding:2px 6px;border-radius:6px;background:rgba(255,255,255,0.04);color:var(--text-tertiary);border:1px solid var(--border);">⌘K</kbd>
                </div>

                {{-- Quick Create --}}
                @can('create posts')
                <a href="{{ route('admin.posts.create') }}" class="btn-create hidden sm:inline-flex">
                    <i class="fa-solid fa-plus text-xs"></i>
                    <span class="hidden lg:inline">New Post</span>
                </a>
                @endcan

                {{-- Notifications --}}
                <button class="header-action relative" aria-label="Notifications">
                    <i class="fa-regular fa-bell text-lg"></i>
                    @php $umBadge = \App\Models\ContactMessage::where('status','unread')->count(); @endphp
                    @if($umBadge)
                    <span class="dot pulse-dot"></span>
                    @endif
                </button>

                {{-- Profile Dropdown --}}
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="profile-trigger" aria-label="Profile menu">
                        <div class="profile-avatar">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
                        <span class="profile-name">{{ auth()->user()->name }}</span>
                        <i class="fa-solid fa-chevron-down text-[10px]" style="color:var(--text-tertiary);"></i>
                    </button>

                    <div x-show="open" @click.outside="open = false" x-cloak x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 scale-95"
                         class="dropdown-menu">
                        <div style="padding:10px 12px; border-bottom:1px solid var(--border); margin-bottom:4px;">
                            <div style="font-size:13px; font-weight:600; color:var(--text-primary);">{{ auth()->user()->name }}</div>
                            <div style="font-size:11px; color:var(--text-tertiary); margin-top:2px;">{{ auth()->user()->email }}</div>
                        </div>

                        <a href="{{ route('admin.profile.edit') }}" class="dropdown-item">
                            <i class="fa-solid fa-gear text-xs w-5 text-center"></i> Edit Profile
                        </a>

                        <div class="dropdown-divider"></div>

                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item danger">
                                <i class="fa-solid fa-right-from-bracket text-xs w-5 text-center"></i> Sign Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        {{-- Flash Messages --}}
        @if(session('success') || session('error'))
        <div style="padding:20px 24px 0;">
            @if(session('success'))
            <div class="alert alert-success">
                <i class="fa-solid fa-circle-check"></i>
                <span class="flex-1">{{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" style="background:none;border:none;color:inherit;cursor:pointer;opacity:0.6;"><i class="fa-solid fa-xmark"></i></button>
            </div>
            @endif
            @if(session('error'))
            <div class="alert alert-error">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span class="flex-1">{{ session('error') }}</span>
                <button onclick="this.parentElement.remove()" style="background:none;border:none;color:inherit;cursor:pointer;opacity:0.6;"><i class="fa-solid fa-xmark"></i></button>
            </div>
            @endif
        </div>
        @endif

        {{-- Page Content --}}
        <div class="page-container">
            @yield('content')
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const s = document.getElementById('sidebar');
            const o = document.getElementById('sidebar-overlay');
            s.classList.toggle('open');
            o.classList.toggle('hidden');
            document.body.style.overflow = s.classList.contains('open') ? 'hidden' : '';
        }
        function closeSidebar() {
            const s = document.getElementById('sidebar');
            const o = document.getElementById('sidebar-overlay');
            s.classList.remove('open');
            o.classList.add('hidden');
            document.body.style.overflow = '';
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('scripts')
</body>
</html>
