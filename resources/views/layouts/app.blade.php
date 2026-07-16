<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Primary Meta Tags --}}
    <title>@yield('title', 'Endow Corporation – Empowering Businesses Globally')</title>
    <meta name="title" content="@yield('meta_title', 'Endow Corporation – Empowering Businesses Globally')">
    <meta name="description" content="@yield('meta_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions. Empowering businesses worldwide with innovative consulting services.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Endow Corporation, travel, education, technology, consulting, global business solutions, medical tourism')">
    <meta name="author" content="Endow Corporation">
    <meta name="robots" content="index, follow">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Endow Corporation – Empowering Businesses Globally')">
    <meta property="og:description" content="@yield('og_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
    <meta property="og:site_name" content="Endow Corporation">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('og_title', 'Endow Corporation – Empowering Businesses Globally')">
    <meta property="twitter:description" content="@yield('og_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

    {{-- Google Fonts: Space Grotesk + Plus Jakarta Sans --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    {{-- Font Awesome (fallback for social icons) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Vite CSS --}}
    @vite(['resources/css/app.css'])

    @stack('structured-data')
    @yield('head')

    <style>
        [x-cloak] { display: none !important; }
        .opacity-0-init { opacity: 0; transform: translateY(20px); }
    </style>
</head>
<body class="antialiased">
    @include('components.ui.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.ui.footer')

    {{-- Back to Top --}}
    <button id="back-to-top"
            class="fixed bottom-6 right-6 z-50 w-12 h-12 rounded-full flex items-center justify-center opacity-0 invisible transition-all duration-300 hover:-translate-y-0.5 focus:outline-none"
            style="background: linear-gradient(135deg, #FF2957, #7C5CFC); box-shadow: 0 4px 20px rgba(255, 41, 87, 0.3);"
            aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
    </button>

    {{-- WhatsApp Float --}}
    <a href="https://wa.link/2tzhly" target="_blank" rel="noopener noreferrer"
       class="fixed bottom-6 left-6 z-50 w-14 h-14 bg-[#25D366] text-white rounded-full shadow-xl flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-[#25D366]/30"
       aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    @vite(['resources/js/app.js'])

    <script>
        // Initialize Lucide icons
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Back to top
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTop.classList.remove('opacity-0', 'invisible');
                backToTop.classList.add('opacity-100', 'visible');
            } else {
                backToTop.classList.add('opacity-0', 'invisible');
                backToTop.classList.remove('opacity-100', 'visible');
            }
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Navbar shrink on scroll
        const navbarWrapper = document.getElementById('navbar-wrapper');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbarWrapper.classList.add('navbar-scrolled');
            } else {
                navbarWrapper.classList.remove('navbar-scrolled');
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

        if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileMenu);
        if (mobileMenuClose) mobileMenuClose.addEventListener('click', closeMobileMenu);
        if (mobileMenuOverlay) mobileMenuOverlay.addEventListener('click', closeMobileMenu);

        // Scroll animations with staggered reveal
        const observerOptions = { threshold: 0.08, rootMargin: '0px 0px -40px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    const delay = entry.target.dataset.delay || 0;
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, delay);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('[data-animate]').forEach((el, i) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(24px)';
            el.style.transition = 'opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
            if (!el.dataset.delay) {
                el.dataset.delay = (i % 5) * 80;
            }
            observer.observe(el);
        });

        // Animated counters
        const counters = document.querySelectorAll('.counter');
        if (counters.length > 0) {
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.getAttribute('data-target'));
                        const duration = 2000;
                        const step = target / (duration / 16);
                        let current = 0;
                        const updateCounter = () => {
                            current += step;
                            if (current < target) {
                                counter.textContent = Math.floor(current) + (target >= 100 ? '+' : '');
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.textContent = target + (target >= 100 ? '+' : '');
                            }
                        };
                        updateCounter();
                        counterObserver.unobserve(counter);
                    }
                });
            }, { threshold: 0.5 });
            counters.forEach(counter => counterObserver.observe(counter));
        }

        // FAQ accordion
        document.querySelectorAll('.faq-toggle').forEach(toggle => {
            toggle.addEventListener('click', () => {
                const faqItem = toggle.closest('.accordion-item');
                const content = faqItem.querySelector('.faq-content');
                const icon = toggle.querySelector('.faq-chevron');
                const isOpen = !content.classList.contains('hidden');

                // Close all others
                document.querySelectorAll('.accordion-item').forEach(item => {
                    if (item !== faqItem) {
                        item.querySelector('.faq-content').classList.add('hidden');
                        item.querySelector('.faq-toggle').setAttribute('aria-expanded', 'false');
                        const otherIcon = item.querySelector('.faq-chevron');
                        if (otherIcon) otherIcon.style.transform = '';
                        item.classList.remove('active');
                    }
                });

                content.classList.toggle('hidden');
                toggle.setAttribute('aria-expanded', !isOpen);
                if (icon) icon.style.transform = isOpen ? '' : 'rotate(180deg)';
                faqItem.classList.toggle('active');
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
