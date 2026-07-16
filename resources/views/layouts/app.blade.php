<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Primary Meta Tags --}}
    <title>@yield('title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')</title>
    <meta name="title" content="@yield('meta_title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')">
    <meta name="description" content="@yield('meta_description', 'Endow Corporation is a global leader in travel, education, and technology solutions. Empowering businesses worldwide with innovative consulting services.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Endow Corporation, travel, education, technology, consulting, global business solutions')">
    <meta name="author" content="Endow Corporation">
    <meta name="robots" content="index, follow">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')">
    <meta property="og:description" content="@yield('og_description', 'Endow Corporation is a global leader in travel, education, and technology solutions.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
    <meta property="og:site_name" content="Endow Corporation">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('og_title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')">
    <meta property="twitter:description" content="@yield('og_description', 'Endow Corporation is a global leader in travel, education, and technology solutions.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- Vite CSS --}}
    @vite(['resources/css/app.css'])

    {{-- JSON-LD Structured Data --}}
    @stack('structured-data')

    @yield('head')
</head>
<body class="antialiased">
    @include('components.ui.top-bar')
    @include('components.ui.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.ui.footer')

    {{-- Back to Top --}}
    <button id="back-to-top" class="fixed bottom-6 right-6 z-50 w-12 h-12 bg-primary text-white rounded-full shadow-lg
            flex items-center justify-center opacity-0 invisible transition-all duration-300 hover:bg-primary-dark
            hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
            aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    {{-- WhatsApp Float --}}
    <a href="https://wa.link/2tzhly" target="_blank" rel="noopener noreferrer"
       class="fixed bottom-6 left-6 z-50 w-14 h-14 bg-green-500 text-white rounded-full shadow-lg
              flex items-center justify-center transition-all duration-300 hover:bg-green-600 hover:shadow-xl
              hover:scale-110 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
       aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    @vite(['resources/js/app.js'])

    <script>
        // Back to top button
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
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

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('[data-animate]').forEach(el => {
            el.style.opacity = '0';
            observer.observe(el);
        });
    </script>

    @stack('scripts')
</body>
</html>
