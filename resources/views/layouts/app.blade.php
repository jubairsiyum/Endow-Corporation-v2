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

    {{-- Top Bar --}}
    <div class="hidden lg:block" style="background: linear-gradient(90deg, var(--color-dark) 0%, var(--color-dark-2) 100%); border-bottom: 1px solid rgba(255,255,255,0.06);">
        <div class="max-w-7xl mx-auto px-6 py-2 flex items-center justify-between">
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2 text-xs font-medium" style="color: rgba(255,255,255,0.45);">
                    <i class="fa-regular fa-clock" style="color: var(--color-primary); font-size: 10px;"></i>
                    <span>Sat – Thu, 8:00am – 6:00pm</span>
                </div>
                <div class="w-px h-3" style="background: rgba(255,255,255,0.1);"></div>
                <a href="mailto:contact@endowcorporation.com" class="flex items-center gap-2 text-xs font-medium transition-colors" style="color: rgba(255,255,255,0.45);" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.45)'">
                    <i class="fa-regular fa-envelope" style="color: var(--color-primary); font-size: 10px;"></i>
                    contact@endowcorporation.com
                </a>
                <div class="w-px h-3" style="background: rgba(255,255,255,0.1);"></div>
                <div class="flex items-center gap-2 text-xs font-medium" style="color: rgba(255,255,255,0.45);">
                    <i class="fa-solid fa-location-dot" style="color: var(--color-primary); font-size: 10px;"></i>
                    Seoul, South Korea
                </div>
            </div>
            <div class="flex items-center gap-1.5">
                @foreach([
                    ['icon' => 'fa-brands fa-facebook-f', 'url' => 'https://www.facebook.com/endowcorporation'],
                    ['icon' => 'fa-brands fa-linkedin-in', 'url' => 'https://www.linkedin.com/company/endow-corporation/'],
                    ['icon' => 'fa-brands fa-instagram', 'url' => 'https://www.instagram.com/endowcorporation'],
                    ['icon' => 'fa-brands fa-youtube', 'url' => 'https://www.youtube.com/@endowcorporation'],
                ] as $social)
                    <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                       class="w-6 h-6 rounded flex items-center justify-center transition-all"
                       style="color: rgba(255,255,255,0.3);"
                       onmouseover="this.style.color='white'; this.style.backgroundColor='rgba(255,255,255,0.08)';"
                       onmouseout="this.style.color='rgba(255,255,255,0.3)'; this.style.backgroundColor='transparent';"
                       aria-label="Social">
                        <i class="{{ $social['icon'] }}" style="font-size: 10px;"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Header --}}
    <header id="main-header" class="transition-all duration-300" style="background: white; position: relative; z-index: 100; border-bottom: 1px solid var(--color-border);">
        <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex-shrink-0">
                <img src="{{ asset('images/endow-logo.png') }}" alt="Endow Corporation" style="height: 42px; width: auto;">
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden lg:flex items-center gap-8">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>

                {{-- Divisions --}}
                <div x-data="{ open: false }" class="relative" @click.away="open = false">
                    <button @click="open = !open" class="nav-link flex items-center gap-1.5 {{ request()->routeIs('division.*') ? 'active' : '' }}">
                        Divisions
                        <i class="fa-solid fa-chevron-down text-[10px] transition-transform" :class="open ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-0 mt-3 w-64 p-2 rounded-xl bg-white border border-gray-100"
                         style="box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                        @foreach([
                            ['route' => 'travel', 'icon' => 'fa-solid fa-plane-departure', 'name' => 'Endow Travel'],
                            ['route' => 'education', 'icon' => 'fa-solid fa-graduation-cap', 'name' => 'Global Education'],
                            ['route' => 'technology', 'icon' => 'fa-solid fa-microchip', 'name' => 'Technologies'],
                            ['route' => 'hospital-tourism', 'icon' => 'fa-solid fa-heart-pulse', 'name' => 'Hospital Tourism'],
                        ] as $division)
                            <a href="{{ route('division.show', $division['route']) }}"
                               class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors hover:bg-gray-50">
                                <i class="{{ $division['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                                <span class="text-sm font-medium" style="color: var(--color-text);">{{ $division['name'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </nav>

            {{-- CTA + Hamburger --}}
            <div class="flex items-center gap-4">
                <a href="{{ route('consulting') }}" class="btn-primary hidden sm:inline-flex">
                    <span class="btn-text"><span>Let's Talk</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>

                <button id="mobile-menu-btn" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-lg hover:bg-gray-100 transition-colors" aria-label="Menu">
                    <span class="w-5 h-0.5 bg-dark rounded-full transition-all" id="bar1"></span>
                    <span class="w-5 h-0.5 bg-dark rounded-full transition-all" id="bar2"></span>
                    <span class="w-5 h-0.5 bg-dark rounded-full transition-all" id="bar3"></span>
                </button>
            </div>
        </div>
    </header>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden fixed inset-0 z-50">
        <div id="mobile-menu-overlay" class="absolute inset-0 bg-black/30" style="backdrop-filter: blur(4px);"></div>
        <div id="mobile-menu-panel" class="absolute right-0 top-0 h-full w-80 max-w-[85vw] p-8 transform translate-x-full transition-transform duration-300 bg-white" style="box-shadow: -4px 0 24px rgba(0,0,0,0.1);">
            <div class="flex items-center justify-between mb-10">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img src="{{ asset('images/endow-logo.png') }}" alt="Endow Corporation" class="h-10 w-auto">
                </a>
                <button id="mobile-menu-close" class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 transition-colors" aria-label="Close">
                    <i class="fa-solid fa-xmark text-lg" style="color: var(--color-text);"></i>
                </button>
            </div>

            <nav class="space-y-1">
                @foreach([
                    ['route' => 'home', 'label' => 'Home'],
                    ['route' => 'about', 'label' => 'About Us'],
                    ['route' => 'contact', 'label' => 'Contact'],
                ] as $link)
                    <a href="{{ route($link['route']) }}"
                       class="block px-4 py-3 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs($link['route']) ? 'text-white' : 'hover:bg-gray-50' }}"
                       @if(request()->routeIs($link['route'])) style="background: var(--color-primary);" @else style="color: var(--color-text);" @endif>
                        {{ $link['label'] }}
                    </a>
                @endforeach

                <div class="pt-6 pb-2 px-4">
                    <p class="text-xs font-bold uppercase tracking-widest" style="color: var(--color-text-muted);">Divisions</p>
                </div>

                @foreach([
                    ['route' => 'travel', 'label' => 'Endow Travel'],
                    ['route' => 'education', 'label' => 'Global Education'],
                    ['route' => 'technology', 'label' => 'Technologies'],
                    ['route' => 'hospital-tourism', 'label' => 'Hospital Tourism'],
                ] as $division)
                    <a href="{{ route('division.show', $division['route']) }}"
                       class="block px-4 py-3 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('division.show', $division['route']) ? 'text-white' : 'hover:bg-gray-50' }}"
                       @if(request()->routeIs('division.show', $division['route'])) style="background: var(--color-primary);" @else style="color: var(--color-text);" @endif>
                        {{ $division['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="absolute bottom-8 left-8 right-8">
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
            style="background-color: var(--color-primary); box-shadow: 0 4px 20px rgba(255,41,87,0.3);"
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
        const headerTopBar = header.previousElementSibling;
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.style.position = 'fixed';
                header.style.top = '0';
                header.style.left = '0';
                header.style.right = '0';
                header.style.zIndex = '1002';
                header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.08)';
                header.style.width = '100%';
                header.style.borderBottom = '1px solid var(--color-border)';
                if (headerTopBar) headerTopBar.style.display = 'none';
            } else {
                header.style.position = 'relative';
                header.style.boxShadow = 'none';
                header.style.width = '';
                header.style.borderBottom = '1px solid var(--color-border)';
                if (headerTopBar) headerTopBar.style.display = '';
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

        // FAQ accordion (Bootstrap-compatible)
        document.querySelectorAll('.accordion-button').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.closest('.accordion-item');
                const body = item.querySelector('.accordion-body');
                const isOpen = btn.getAttribute('aria-expanded') === 'true';

                // Close all others
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

    @stack('scripts')
</body>
</html>
