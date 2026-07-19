<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Endow Corporation – Empowering Businesses Globally')</title>
    <meta name="title" content="@yield('meta_title', 'Endow Corporation – Empowering Businesses Globally')">
    <meta name="description" content="@yield('meta_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Endow Corporation, travel, education, technology, consulting, global business solutions, medical tourism')">
    <meta name="author" content="Endow Corporation">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Endow Corporation – Empowering Businesses Globally')">
    <meta property="og:description" content="@yield('og_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
    <meta property="og:site_name" content="Endow Corporation">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('og_title', 'Endow Corporation – Empowering Businesses Globally')">
    <meta property="twitter:description" content="@yield('og_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css'])

    @stack('structured-data')
    @yield('head')

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body>

    {{-- Fixed Glassmorphism Header --}}
    <header id="main-header" style="position: fixed; z-index: 1000; top: 0; left: 0; right: 0; padding: 16px 4% 0; transition: padding 0.4s cubic-bezier(0.4,0,0.2,1);">

        {{-- Topbar — collapsed by default, expands on scroll --}}
        <div id="header-topbar" class="lg:block" style="background: #0a0a0a; max-height: 0; overflow: hidden; opacity: 0; transition: max-height 0.35s ease, opacity 0.35s ease;">
            <div class="max-w-7xl mx-auto px-6 py-2.5 flex items-center justify-between">
                <div class="flex items-center gap-7">
                    <div class="flex items-center gap-2.5 text-[13px] font-medium" style="color: rgba(255,255,255,0.7);">
                        <i class="fa-regular fa-clock" style="color: var(--color-primary); font-size: 11px;"></i>
                        <span>Sat – Thu, 8:00am – 6:00pm</span>
                    </div>
                    <div class="w-px h-3.5" style="background: rgba(255,255,255,0.12);"></div>
                    <a href="mailto:contact@endowcorporation.com" class="flex items-center gap-2.5 text-[13px] font-medium transition-colors" style="color: rgba(255,255,255,0.7);" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                        <i class="fa-regular fa-envelope" style="color: var(--color-primary); font-size: 11px;"></i>
                        contact@endowcorporation.com
                    </a>
                    <div class="w-px h-3.5" style="background: rgba(255,255,255,0.12);"></div>
                    <div class="flex items-center gap-2.5 text-[13px] font-medium" style="color: rgba(255,255,255,0.7);">
                        <i class="fa-solid fa-location-dot" style="color: var(--color-primary); font-size: 11px;"></i>
                        Seoul, South Korea
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    @foreach([
                        ['icon' => 'fa-brands fa-facebook-f', 'url' => 'https://www.facebook.com/endowcorporation'],
                        ['icon' => 'fa-brands fa-linkedin-in', 'url' => 'https://www.linkedin.com/company/endow-corporation/'],
                        ['icon' => 'fa-brands fa-instagram', 'url' => 'https://www.instagram.com/endowcorporation'],
                        ['icon' => 'fa-brands fa-youtube', 'url' => 'https://www.youtube.com/@endowcorporation'],
                    ] as $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                           class="w-6 h-6 rounded flex items-center justify-center transition-all"
                           style="color: rgba(255,255,255,0.4);"
                           onmouseover="this.style.color='white'; this.style.backgroundColor='rgba(255,255,255,0.1)';"
                           onmouseout="this.style.color='rgba(255,255,255,0.4)'; this.style.backgroundColor='transparent';"
                           aria-label="Social">
                            <i class="{{ $social['icon'] }}" style="font-size: 11px;"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Glassmorphism Pill — 85% width at top, 100% on scroll --}}
        <div id="header-pill" class="flex items-center justify-between rounded-2xl px-6 sm:px-10 lg:px-16 py-4" style="transition: background 0.4s cubic-bezier(0.4,0,0.2,1), box-shadow 0.4s cubic-bezier(0.4,0,0.2,1), border-radius 0.45s cubic-bezier(0.4,0,0.2,1), margin 0.4s cubic-bezier(0.4,0,0.2,1); background: rgba(255,255,255,0.8); backdrop-filter: blur(16px) saturate(120%); -webkit-backdrop-filter: blur(16px) saturate(120%); box-shadow: 0 4px 24px rgba(0,0,0,0.08), inset 0 1px 0 rgba(255,255,255,0.6);">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3">
                <img src="{{ asset('images/endow-logo.png') }}" alt="Endow Corporation" class="header-logo" style="height: 36px; width: auto;">
                <div id="header-wordmark" class="hidden leading-none" style="color: #fff; transition: opacity 0.4s cubic-bezier(0.4,0,0.2,1);">
                    <div class="text-base font-bold" style="line-height: 1.15; letter-spacing: 3.5px;">ENDOW</div>
                    <div class="font-semibold" style="line-height: 1.15; font-size: 10px; letter-spacing: 1.8px;">Corporation</div>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden lg:flex items-center gap-1 text-sm font-medium text-white/60">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>

                {{-- Divisions --}}
                <div x-data="{ open: false }" class="relative" @click.away="open = false">
                    <button @click="open = !open" class="nav-link flex items-center gap-1.5 {{ request()->routeIs('division.*') ? 'active' : '' }}">
                        <span>Divisions</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-200" :class="open ? 'rotate-180' : ''" style="font-size: 9px;"></i>
                    </button>
                    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-0 mt-3 w-64 p-2 rounded-2xl"
                         style="background: rgba(10,10,10,0.9); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.08); box-shadow: 0 20px 50px rgba(0,0,0,0.3);">
                        @foreach([
                            ['route' => 'travel', 'icon' => 'fa-solid fa-plane-departure', 'name' => 'Endow Travel'],
                            ['route' => 'education', 'icon' => 'fa-solid fa-graduation-cap', 'name' => 'Global Education'],
                            ['route' => 'technology', 'icon' => 'fa-solid fa-microchip', 'name' => 'Technologies'],
                            ['route' => 'hospital-tourism', 'icon' => 'fa-solid fa-heart-pulse', 'name' => 'Hospital Tourism'],
                        ] as $division)
                            <a href="{{ route('division.show', $division['route']) }}"
                               class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/60 transition-all duration-200 text-sm"
                               onmouseover="this.style.background='rgba(255,255,255,0.06)'; this.style.color='white'" onmouseout="this.style.background='transparent'; this.style.color='rgba(255,255,255,0.6)'">
                                <i class="{{ $division['icon'] }} text-xs" style="color: var(--color-primary);"></i>
                                <span class="font-medium">{{ $division['name'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </nav>

            {{-- CTA + Hamburger --}}
            <div class="flex items-center gap-2">
                <a href="{{ route('consulting') }}" class="hidden sm:inline-flex btn-primary">
                    <span class="btn-text"><span>Let's Talk</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>

                <button id="mobile-menu-btn" class="lg:hidden w-10 h-10 flex items-center justify-center rounded-xl transition-all duration-300" style="background: rgba(0,0,0,0.05);" onmouseover="this.style.background='rgba(0,0,0,0.08)'" onmouseout="this.style.background='rgba(0,0,0,0.05)'" aria-label="Menu">
                    <i class="fa-solid fa-bars hamburger-icon" style="font-size: 16px; color: #374151;"></i>
                </button>
            </div>
        </div>
    </header>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden fixed inset-0" style="z-index: 1100;">
        <div id="mobile-menu-overlay" class="absolute inset-0" style="background: rgba(0,0,0,0.4); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);"></div>
        <div id="mobile-menu-panel" class="absolute right-0 top-0 h-full w-80 max-w-[85vw] p-6 transform translate-x-full transition-transform duration-300" style="background: rgba(10,10,10,0.95); backdrop-filter: blur(24px) saturate(180%); -webkit-backdrop-filter: blur(24px) saturate(180%); border-left: 1px solid rgba(255,255,255,0.08); box-shadow: -8px 0 40px rgba(0,0,0,0.3);">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/endow-logo.png') }}" alt="Endow Corporation" style="height: 36px; width: auto; filter: brightness(0) invert(1);">
                </a>
                <button id="mobile-menu-close" class="w-10 h-10 flex items-center justify-center rounded-xl transition-colors" style="background: rgba(255,255,255,0.08);" onmouseover="this.style.background='rgba(255,255,255,0.15)'" onmouseout="this.style.background='rgba(255,255,255,0.08)'" aria-label="Close">
                    <i class="fa-solid fa-xmark" style="font-size: 18px; color: rgba(255,255,255,0.85);"></i>
                </button>
            </div>

            <nav class="space-y-1">
                @foreach([
                    ['route' => 'home', 'label' => 'Home'],
                    ['route' => 'about', 'label' => 'About Us'],
                    ['route' => 'contact', 'label' => 'Contact'],
                ] as $link)
                    <a href="{{ route($link['route']) }}"
                       class="block px-4 py-3 rounded-xl text-sm font-semibold transition-colors {{ request()->routeIs($link['route']) ? 'text-white' : '' }}"
                       @if(request()->routeIs($link['route'])) style="background: var(--color-primary);" @else style="color: rgba(255,255,255,0.6);" onmouseover="this.style.background='rgba(255,255,255,0.06)'; this.style.color='white'" onmouseout="this.style.background='transparent'; this.style.color='rgba(255,255,255,0.6)'" @endif>
                        {{ $link['label'] }}
                    </a>
                @endforeach

                <div class="pt-5 pb-2 px-4">
                    <p class="text-[10px] font-bold uppercase tracking-[2px]" style="color: rgba(255,255,255,0.3);">Divisions</p>
                </div>

                @foreach([
                    ['route' => 'travel', 'label' => 'Endow Travel'],
                    ['route' => 'education', 'label' => 'Global Education'],
                    ['route' => 'technology', 'label' => 'Technologies'],
                    ['route' => 'hospital-tourism', 'label' => 'Hospital Tourism'],
                ] as $division)
                    <a href="{{ route('division.show', $division['route']) }}"
                       class="block px-4 py-3 rounded-xl text-sm font-semibold transition-colors {{ request()->routeIs('division.show', $division['route']) ? 'text-white' : '' }}"
                       @if(request()->routeIs('division.show', $division['route'])) style="background: var(--color-primary);" @else style="color: rgba(255,255,255,0.6);" onmouseover="this.style.background='rgba(255,255,255,0.06)'; this.style.color='white'" onmouseout="this.style.background='transparent'; this.style.color='rgba(255,255,255,0.6)'" @endif>
                        {{ $division['label'] }}
                    </a>
                @endforeach
            </nav>

            {{-- Contact Info (from desktop topbar) --}}
            <div class="mt-8 pt-6 space-y-4" style="border-top: 1px solid rgba(255,255,255,0.06);">
                <div class="flex items-center gap-3 px-4">
                    <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.1);">
                        <i class="fa-regular fa-clock text-xs" style="color: var(--color-primary-light);"></i>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase tracking-wider mb-0.5" style="color: rgba(255,255,255,0.3);">Hours</p>
                        <p class="text-xs font-medium" style="color: rgba(255,255,255,0.7);">Sat – Thu, 8:00am – 6:00pm</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 px-4">
                    <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.1);">
                        <i class="fa-regular fa-envelope text-xs" style="color: var(--color-primary-light);"></i>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase tracking-wider mb-0.5" style="color: rgba(255,255,255,0.3);">Email</p>
                        <a href="mailto:contact@endowcorporation.com" class="text-xs font-medium" style="color: rgba(255,255,255,0.7);">contact@endowcorporation.com</a>
                    </div>
                </div>
                <div class="flex items-center gap-3 px-4">
                    <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.1);">
                        <i class="fa-solid fa-location-dot text-xs" style="color: var(--color-primary-light);"></i>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase tracking-wider mb-0.5" style="color: rgba(255,255,255,0.3);">Location</p>
                        <p class="text-xs font-medium" style="color: rgba(255,255,255,0.7);">Seoul, South Korea</p>
                    </div>
                </div>

                {{-- Social Links --}}
                <div class="flex items-center gap-2 px-4 pt-2">
                    @foreach([
                        ['icon' => 'fa-brands fa-facebook-f', 'url' => 'https://www.facebook.com/endowcorporation'],
                        ['icon' => 'fa-brands fa-linkedin-in', 'url' => 'https://www.linkedin.com/company/endow-corporation/'],
                        ['icon' => 'fa-brands fa-instagram', 'url' => 'https://www.instagram.com/endowcorporation'],
                        ['icon' => 'fa-brands fa-youtube', 'url' => 'https://www.youtube.com/@endowcorporation'],
                    ] as $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                           class="w-8 h-8 rounded-lg flex items-center justify-center transition-all"
                           style="background: rgba(255,255,255,0.05); color: rgba(255,255,255,0.4);"
                           onmouseover="this.style.color='white'; this.style.background='rgba(255,255,255,0.1)';"
                           onmouseout="this.style.color='rgba(255,255,255,0.4)'; this.style.background='rgba(255,255,255,0.05)';"
                           aria-label="Social">
                            <i class="{{ $social['icon'] }}" style="font-size: 12px;"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="absolute bottom-6 left-6 right-6">
                <a href="{{ route('consulting') }}" class="btn-primary w-full justify-center">
                    <span class="btn-text"><span>Let's Talk</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    @include('components.ui.footer')

    {{-- Back to Top --}}
    <button id="back-to-top"
            class="fixed bottom-6 right-6 z-50 w-12 h-12 rounded-full flex items-center justify-center opacity-0 invisible transition-all duration-300 text-white"
            style="background-color: var(--color-primary); box-shadow: 0 4px 20px rgba(212,32,44,0.35);"
            aria-label="Back to top">
        <i class="fa-solid fa-arrow-up text-sm"></i>
    </button>

    {{-- WhatsApp --}}
    <a href="https://wa.link/2tzhly" target="_blank" rel="noopener noreferrer"
       class="fixed bottom-6 left-6 z-50 w-14 h-14 rounded-full flex items-center justify-center text-white transition-all duration-300 hover:scale-110"
       style="background-color: #25D366; box-shadow: 0 4px 20px rgba(37,211,102,0.3);"
       aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    @vite(['resources/js/app.js'])

    <script>
        // Back to top
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            backToTop.classList.toggle('opacity-100', window.scrollY > 400);
            backToTop.classList.toggle('visible', window.scrollY > 400);
            backToTop.classList.toggle('opacity-0', window.scrollY <= 400);
            backToTop.classList.toggle('invisible', window.scrollY <= 400);
        });
        backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        // Sticky header
        const header = document.getElementById('main-header');
        const headerTopBar = document.getElementById('header-topbar');
        const headerPill = document.getElementById('header-pill');
        const headerWordmark = document.getElementById('header-wordmark');

        function setHeaderScrolled() {
            header.classList.add('header-scrolled');
            header.style.paddingLeft = '0';
            header.style.paddingRight = '0';
            header.style.paddingTop = '0';
            if (headerTopBar && window.innerWidth >= 1024) {
                headerTopBar.style.maxHeight = '50px';
                headerTopBar.style.opacity = '1';
            }
            if (headerPill) {
                headerPill.style.background = 'rgba(10,10,10,0.85)';
                headerPill.style.boxShadow = '0 4px 20px rgba(0,0,0,0.3), inset 0 1px 0 rgba(255,255,255,0.04)';
                headerPill.style.borderRadius = '0 0 12px 12px';
                headerPill.style.marginTop = '-1px';
            }
            document.querySelectorAll('.header-logo').forEach(img => img.style.filter = 'brightness(0) invert(1)');
            header.querySelectorAll('.nav-link').forEach(link => link.style.color = 'rgba(255,255,255,0.6)');
            document.querySelectorAll('.hamburger-icon').forEach(icon => icon.style.color = 'rgba(255,255,255,0.85)');
            if (headerWordmark) headerWordmark.classList.remove('hidden');
        }

        function setHeaderNormal() {
            header.classList.remove('header-scrolled');
            header.style.paddingLeft = '4%';
            header.style.paddingRight = '4%';
            header.style.paddingTop = '16px';
            if (headerTopBar) {
                headerTopBar.style.maxHeight = '0';
                headerTopBar.style.opacity = '0';
            }
            if (headerPill) {
                headerPill.style.background = 'rgba(255,255,255,0.8)';
                headerPill.style.boxShadow = '0 4px 24px rgba(0,0,0,0.08), inset 0 1px 0 rgba(255,255,255,0.6)';
                headerPill.style.borderRadius = '';
                headerPill.style.marginTop = '';
            }
            document.querySelectorAll('.header-logo').forEach(img => img.style.filter = '');
            header.querySelectorAll('.nav-link').forEach(link => link.style.color = '');
            document.querySelectorAll('.hamburger-icon').forEach(icon => icon.style.color = '#374151');
            if (headerWordmark) headerWordmark.classList.add('hidden');
        }

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                setHeaderScrolled();
            } else {
                setHeaderNormal();
            }
        });

        // Mobile menu
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuPanel = document.getElementById('mobile-menu-panel');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const mobileMenuClose = document.getElementById('mobile-menu-close');

        function openMobileMenu() {
            mobileMenu.classList.remove('hidden');
            requestAnimationFrame(() => {
                mobileMenuPanel.classList.remove('translate-x-full');
                mobileMenuPanel.classList.add('translate-x-0');
            });
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            mobileMenuPanel.classList.add('translate-x-full');
            mobileMenuPanel.classList.remove('translate-x-0');
            document.body.style.overflow = '';
            setTimeout(() => mobileMenu.classList.add('hidden'), 300);
        }

        mobileMenuBtn?.addEventListener('click', openMobileMenu);
        mobileMenuClose?.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay?.addEventListener('click', closeMobileMenu);

        // Scroll animations — scoped per section
        document.querySelectorAll('section, [data-animate]').forEach(section => {
            if (!section.hasAttribute('data-animate') && !section.querySelector('[data-animate]')) return;
            const items = section.hasAttribute('data-animate') ? [section] : section.querySelectorAll('[data-animate]');
            items.forEach((el, i) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(25px)';
                el.style.transition = `opacity 0.5s ease-out ${i * 0.1}s, transform 0.5s ease-out ${i * 0.1}s`;
            });
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const section = entry.target.closest('section') || entry.target;
                    const items = section.hasAttribute('data-animate') ? [section] : section.querySelectorAll('[data-animate]');
                    items.forEach(el => {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.05, rootMargin: '0px 0px -30px 0px' });

        document.querySelectorAll('section').forEach(section => {
            if (section.querySelector('[data-animate]') || section.hasAttribute('data-animate')) {
                observer.observe(section);
            }
        });

        // Counters
        document.querySelectorAll('.counter').forEach(counter => {
            const counterObserver = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = parseInt(counter.getAttribute('data-target'));
                        const duration = 2000;
                        const step = target / (duration / 16);
                        let current = 0;
                        const update = () => {
                            current += step;
                            if (current < target) {
                                counter.textContent = Math.floor(current) + (target >= 100 ? '+' : '');
                                requestAnimationFrame(update);
                            } else {
                                counter.textContent = target + (target >= 100 ? '+' : '');
                            }
                        };
                        update();
                        counterObserver.unobserve(counter);
                    }
                });
            }, { threshold: 0.5 });
            counterObserver.observe(counter);
        });

        // FAQ accordion
        document.querySelectorAll('.accordion-button').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.closest('.accordion-item');
                const body = item.querySelector('.accordion-body');
                const isOpen = btn.getAttribute('aria-expanded') === 'true';

                document.querySelectorAll('.accordion-item').forEach(other => {
                    if (other !== item) {
                        other.querySelector('.accordion-button')?.setAttribute('aria-expanded', 'false');
                        other.querySelector('.accordion-body').classList.add('collapsed');
                        other.querySelector('.accordion-body').style.maxHeight = null;
                    }
                });

                if (isOpen) {
                    body.classList.add('collapsed');
                    body.style.maxHeight = null;
                } else {
                    body.classList.remove('collapsed');
                    body.style.maxHeight = body.scrollHeight + 'px';
                }
            });
        });
    </script>

    {{-- Mobile Bottom Nav --}}
    <nav class="lg:hidden fixed bottom-0 left-0 right-0 z-[1001] px-3 pb-3 pt-1 pointer-events-none">
        <div class="flex items-center justify-around rounded-2xl px-2 py-2 pointer-events-auto" style="background: rgba(255,255,255,0.88); backdrop-filter: blur(20px) saturate(180%); -webkit-backdrop-filter: blur(20px) saturate(180%); border: 1px solid rgba(255,255,255,0.6); box-shadow: 0 -2px 20px rgba(0,0,0,0.08);">
            <a href="{{ route('home') }}" class="flex flex-col items-center gap-1 px-3 py-1.5 rounded-xl transition-colors {{ request()->routeIs('home') ? '' : '' }}" style="{{ request()->routeIs('home') ? 'color: var(--color-primary);' : 'color: var(--color-text-muted);' }}">
                <i class="fa-solid fa-house text-base"></i>
                <span class="text-[10px] font-semibold">Home</span>
            </a>
            <a href="{{ route('about') }}" class="flex flex-col items-center gap-1 px-3 py-1.5 rounded-xl transition-colors" style="{{ request()->routeIs('about') ? 'color: var(--color-primary);' : 'color: var(--color-text-muted);' }}">
                <i class="fa-solid fa-building text-base"></i>
                <span class="text-[10px] font-semibold">About</span>
            </a>
            <a href="{{ route('division.show', 'travel') }}" class="flex flex-col items-center gap-1 px-3 py-1.5 rounded-xl transition-colors" style="{{ request()->routeIs('division.*') ? 'color: var(--color-primary);' : 'color: var(--color-text-muted);' }}">
                <i class="fa-solid fa-layer-group text-base"></i>
                <span class="text-[10px] font-semibold">Divisions</span>
            </a>
            <a href="{{ route('contact') }}" class="flex flex-col items-center gap-1 px-3 py-1.5 rounded-xl transition-colors" style="{{ request()->routeIs('contact') ? 'color: var(--color-primary);' : 'color: var(--color-text-muted);' }}">
                <i class="fa-solid fa-envelope text-base"></i>
                <span class="text-[10px] font-semibold">Contact</span>
            </a>
            <a href="{{ route('consulting') }}" class="flex flex-col items-center gap-1 px-3 py-1.5 rounded-xl font-bold transition-colors" style="color: var(--color-primary);">
                <i class="fa-solid fa-headset text-base"></i>
                <span class="text-[10px] font-bold">Consult</span>
            </a>
        </div>
    </nav>

    @stack('scripts')
</body>
</html>
