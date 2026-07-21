@extends('layouts.app')

@section('title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('meta_title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('meta_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions. Empowering businesses worldwide.')

@section('content')

{{-- ============================================ --}}
{{-- HERO — Premium Vertical Carousel --}}
{{-- ============================================ --}}
<section id="hero-carousel" class="hero-carousel relative overflow-hidden will-change-transform" style="height: 100vh; min-height: 700px; background: #0a0a0a;">
    {{-- Sophisticated Corporate Background --}}
    <div class="hero-bg-canvas absolute inset-0 pointer-events-none" aria-hidden="true">
        {{-- Gradient Mesh — layered soft atmospheric gradients --}}
        <div class="hero-grad-mesh absolute inset-0"></div>

        {{-- Geometric Diamond Accents — rotating subtly --}}
        <div class="hero-geo hero-geo-1 absolute w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 opacity-[0.025]" style="border: 1px solid rgba(255,255,255,0.45); top: 12%; right: -4%; transform: rotate(45deg);"></div>
        <div class="hero-geo hero-geo-2 absolute w-28 h-28 sm:w-40 sm:h-40 lg:w-52 lg:h-52 opacity-[0.02]" style="border: 1px solid rgba(255,255,255,0.35); bottom: 28%; left: -3%; transform: rotate(45deg);"></div>
        <div class="hero-geo hero-geo-3 absolute w-20 h-20 sm:w-28 sm:h-28 lg:w-36 lg:h-36 opacity-[0.018]" style="border: 1px solid rgba(212,32,44,0.35); top: 50%; right: 22%; transform: rotate(45deg);"></div>

        {{-- Thin Accent Lines — drifting slowly --}}
        <div class="hero-line hero-line-1 absolute h-px opacity-[0.035]" style="width: 280px; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent); top: 28%; left: 8%;"></div>
        <div class="hero-line hero-line-2 absolute w-px opacity-[0.025]" style="height: 180px; background: linear-gradient(180deg, transparent, rgba(255,255,255,0.4), transparent); top: 45%; right: 12%;"></div>
        <div class="hero-line hero-line-3 absolute h-px opacity-[0.02] hidden sm:block" style="width: 200px; background: linear-gradient(90deg, transparent, rgba(212,32,44,0.5), transparent); bottom: 35%; right: 25%;"></div>

        {{-- Network Nodes — subtle glowing connection points --}}
        <div class="hero-node hero-node-1 absolute w-1.5 h-1.5 rounded-full opacity-0 sm:opacity-100" style="background: var(--color-primary); top: 18%; left: 72%; box-shadow: 0 0 10px rgba(212,32,44,0.5), 0 0 20px rgba(212,32,44,0.2);"></div>
        <div class="hero-node hero-node-2 absolute w-1 h-1 rounded-full opacity-0 sm:opacity-100" style="background: rgba(255,255,255,0.6); top: 62%; left: 18%; box-shadow: 0 0 8px rgba(255,255,255,0.3);"></div>
        <div class="hero-node hero-node-3 absolute w-1.5 h-1.5 rounded-full opacity-0 sm:opacity-100" style="background: var(--color-primary-light); bottom: 25%; left: 55%; box-shadow: 0 0 12px rgba(212,32,44,0.4), 0 0 24px rgba(212,32,44,0.15);"></div>
    </div>

    {{-- Refined Dot Matrix with Vignette --}}
    <div class="hero-dot-grid absolute inset-0 pointer-events-none" aria-hidden="true"></div>
    <div class="hero-vignette absolute inset-0 pointer-events-none" aria-hidden="true"></div>

    @php
        $slides = [
            [
                'badge' => 'Global Leader',
                'badge_icon' => 'fa-solid fa-bolt',
                'headline' => 'Navigating <span class="hero-accent-text">Knowledge,</span><br class="hidden sm:block">Embracing Adventure',
                'desc' => 'A global leader in Travel, Education, Technology, and Healthcare. Connecting businesses with excellence across 30+ countries.',
                'primary_btn' => ['text' => 'Get Consulting', 'url' => 'consulting'],
                'outline_btn' => ['text' => 'About Us', 'url' => 'about'],
            ],
            [
                'badge' => 'Global Education',
                'badge_icon' => 'fa-solid fa-graduation-cap',
                'headline' => 'World-Class <span class="hero-accent-text" style="--accent: #a78bfa;">Education</span><br class="hidden sm:block">Without Borders',
                'desc' => 'Transforming futures through study abroad programs, scholarship guidance, and comprehensive student support.',
                'primary_btn' => ['text' => 'Explore Education', 'url' => 'division.show', 'param' => 'education'],
                'outline_btn' => ['text' => 'Scholarships', 'url' => 'about'],
            ],
            [
                'badge' => 'Endow Technologies',
                'badge_icon' => 'fa-solid fa-microchip',
                'headline' => 'Innovate. Transform.<br class="hidden sm:block"><span class="hero-accent-text" style="--accent: #fbbf24;">Lead.</span>',
                        'desc' => 'AI, cloud, custom software, and digital transformation, cutting-edge tech to power your business forward.',
                'primary_btn' => ['text' => 'Explore Tech', 'url' => 'division.show', 'param' => 'technology'],
                'outline_btn' => ['text' => 'Our Services', 'url' => 'about'],
            ],
            [
                'badge' => 'Endow Travel',
                'badge_icon' => 'fa-solid fa-plane-departure',
                'headline' => 'Seamless <span class="hero-accent-text" style="--accent: #34d399;">Travel</span><br class="hidden sm:block">Worldwide',
                'desc' => 'Tailored corporate and leisure travel with personalized itineraries, visa processing, and 24/7 support.',
                'primary_btn' => ['text' => 'Explore Travel', 'url' => 'division.show', 'param' => 'travel'],
                'outline_btn' => ['text' => 'Our Destinations', 'url' => 'about'],
            ],
        ];
    @endphp

    {{-- Slides --}}
    <div id="hero-slides" class="hero-slides absolute inset-0">
        @foreach($slides as $index => $slide)
            <div class="hero-slide absolute inset-0 flex items-center justify-center"
                 data-index="{{ $index }}"
                 style="transform: translateY({{ $index === 0 ? '0' : '100%' }}); opacity: {{ $index === 0 ? '1' : '0' }}; pointer-events: {{ $index === 0 ? 'auto' : 'none' }}; z-index: {{ $index === 0 ? '2' : '1' }}; will-change: transform, opacity;">

                {{-- Slide background gradient (subtle, mostly handled by shared blobs) --}}
                <div class="absolute inset-0 opacity-30 pointer-events-none" style="background: radial-gradient(ellipse at 50% 40%, rgba(212,32,44,0.08) 0%, transparent 70%);"></div>

                {{-- Content --}}
                <div class="max-w-5xl mx-auto px-6 sm:px-8 pt-24 pb-28 sm:pt-28 sm:pb-32 relative z-10 w-full text-center">
                    {{-- Badge --}}
                    <div class="hero-badge inline-flex items-center gap-2 sm:gap-2.5 mb-8 sm:mb-10 text-[10px] sm:text-[11px] font-bold uppercase tracking-[3px] px-5 py-2.5 rounded-full" style="color: var(--color-primary-light); border: 1px solid rgba(212,32,44,0.2); background: rgba(212,32,44,0.06); backdrop-filter: blur(8px);">
                        <i class="{{ $slide['badge_icon'] }}" style="font-size: 10px;"></i>
                        {{ $slide['badge'] }}
                    </div>

                    {{-- Headline --}}
                    <h1 class="hero-heading text-white mb-8 sm:mb-10" style="font-size: clamp(2.25rem, 5vw, 4.5rem); font-weight: 800; line-height: 1.08; letter-spacing: -0.04em;">
                        {!! $slide['headline'] !!}
                    </h1>

                    {{-- Description --}}
                    <p class="hero-desc max-w-xl sm:max-w-2xl mx-auto mb-12 sm:mb-14 px-2 sm:px-0" style="font-size: clamp(1rem, 2vw, 1.25rem); line-height: 1.7; color: rgba(255,255,255,0.45); letter-spacing: -0.01em;">
                        {{ $slide['desc'] }}
                    </p>

                    {{-- CTAs --}}
                    <div class="hero-ctas flex flex-wrap items-center justify-center gap-4 sm:gap-5">
                        @php
                            $primaryUrl = isset($slide['primary_btn']['param'])
                                ? route($slide['primary_btn']['url'], $slide['primary_btn']['param'])
                                : route($slide['primary_btn']['url']);
                        @endphp
                        <a href="{{ $primaryUrl }}" class="hero-btn-primary group">
                            <span class="relative z-10">{{ $slide['primary_btn']['text'] }}</span>
                            <span class="hero-btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            <span class="hero-btn-glow"></span>
                        </a>
                        <a href="{{ route($slide['outline_btn']['url']) }}" class="hero-btn-ghost group">
                            <span>{{ $slide['outline_btn']['text'] }}</span>
                            <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Combined Scroll Indicator + Pagination Pills --}}
    <div class="hero-scroll-group absolute bottom-8 sm:bottom-12 left-1/2 -translate-x-1/2 z-30 flex flex-col items-center gap-4">
        {{-- Pill Pagination --}}
        <div class="hero-pills flex items-center gap-2.5">
            @foreach($slides as $index => $slide)
                <button class="hero-pill relative overflow-hidden border-0 cursor-pointer"
                        data-index="{{ $index }}"
                        aria-label="Slide {{ $index + 1 }}"
                        style="width: {{ $index === 0 ? '28px' : '8px' }}; height: 8px; border-radius: 999px; background: {{ $index === 0 ? 'var(--color-primary)' : 'rgba(255,255,255,0.2)' }}; transition: width 0.4s cubic-bezier(0.25, 0.8, 0.25, 1.2), background 0.35s ease;">
                    @if($index === 0)
                        <span class="hero-pill-progress absolute inset-0 rounded-full" style="background: rgba(255,255,255,0.25); width: 0%;"></span>
                    @endif
                </button>
            @endforeach
        </div>

        {{-- Premium Mouse Scroll Icon --}}
        <div class="hero-mouse-wrap flex flex-col items-center gap-2.5">
            <span class="hero-scroll-label text-[10px] font-bold uppercase tracking-[5px]" style="color: rgba(255,255,255,0.3);">Scroll</span>
            <div class="hero-mouse-outline relative w-[26px] h-[42px] rounded-full flex items-start justify-center pt-[10px]" style="border: 2px solid rgba(255,255,255,0.18);">
                {{-- Scroll wheel that animates downward --}}
                <div class="hero-mouse-wheel w-[3px] h-[7px] rounded-full" style="background: rgba(255,255,255,0.5);"></div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- SERVICES — Premium Enterprise Showcase --}}
{{-- ============================================ --}}
<section class="services-section relative overflow-hidden" style="background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(212,32,44,0.025) 0%, transparent 60%), var(--color-body-bg);">
    {{-- Subtle grid texture --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.025]" style="background-image: radial-gradient(circle, #0a0a0a 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="max-w-7xl mx-auto px-6 py-28 lg:py-36 relative z-10">
        {{-- Section Header — elegant typography with generous whitespace --}}
        <div class="text-center mb-20 lg:mb-24" data-animate>
            <div class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-6 h-px" style="background: var(--color-primary);"></span>
                Our Services
                <span class="w-6 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="text-[36px] sm:text-[44px] lg:text-[52px] font-extrabold mb-6 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.08;">
                Solutions That <span class="gradient-text">Drive Results</span>
            </h2>
            <p class="text-base sm:text-lg max-w-xl mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">Four specialized divisions engineered to deliver excellence across every frontier.</p>
        </div>

        {{-- Cards Grid — 4 columns at lg, generous gap --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $services = [
                    [
                        'num' => '01',
                        'icon' => 'fa-solid fa-plane-departure',
                        'title' => 'Endow Travel',
                        'description' => 'Tailored corporate and leisure travel with personalized itineraries, visa processing, and dedicated 24/7 support worldwide.',
                        'route' => 'travel',
                        'photo' => asset('images/services/travel-photo.jpg'),
                        'fallback' => asset('images/services/travel-bg.svg'),
                    ],
                    [
                        'num' => '02',
                        'icon' => 'fa-solid fa-graduation-cap',
                        'title' => 'Global Education',
                        'description' => 'World-class study programs, scholarship guidance, language training, and comprehensive student support, unlocking global opportunities.',
                        'route' => 'education',
                        'photo' => asset('images/services/733542680_989042620614397_7628936787862668773_n.jpg'),
                        'fallback' => asset('images/services/education-bg.svg'),
                    ],
                    [
                        'num' => '03',
                        'icon' => 'fa-solid fa-microchip',
                        'title' => 'Endow Technologies',
                        'description' => 'AI, cloud, custom software, and digital transformation, cutting-edge tech engineered to power your business and accelerate growth.',
                        'route' => 'technology',
                        'photo' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&h=500&fit=crop',
                        'fallback' => asset('images/services/technology-bg.svg'),
                    ],
                    [
                        'num' => '04',
                        'icon' => 'fa-solid fa-heart-pulse',
                        'title' => 'Hospital Tourism',
                        'description' => 'Premium healthcare treatments in South Korea with world-class facilities. End-to-end medical travel coordination and continuous 24/7 support.',
                        'route' => 'hospital-tourism',
                        'photo' => 'https://images.unsplash.com/photo-1559757175-5700dde675bc?w=800&h=500&fit=crop',
                        'fallback' => asset('images/services/healthcare-bg.svg'),
                    ],
                ];
            @endphp

            @foreach($services as $index => $service)
                <a href="{{ route('division.show', $service['route']) }}"
                   class="service-card-v3 group relative flex flex-col overflow-hidden cursor-pointer"
                   data-index="{{ $index }}"
                   style="border-radius: 26px; min-height: 420px; background: #0d0d0d; border: 1px solid rgba(255,255,255,0.06); transition: transform 0.5s cubic-bezier(0.22, 0.61, 0.36, 1), box-shadow 0.5s ease, border-color 0.5s ease;">

                    {{-- Image Container — full height with zoom --}}
                    <div class="absolute inset-0 overflow-hidden" style="border-radius: 26px;">
                        <img src="{{ $service['photo'] }}"
                             alt="{{ $service['title'] }}"
                             class="absolute inset-0 w-full h-full object-cover transition-transform duration-800 ease-out"
                             loading="lazy"
                             onerror="this.onerror=null; this.src='{{ $service['fallback'] }}';"
                             style="will-change: transform;">
                    </div>

                    {{-- Multi-layer Gradient Overlays — depth and readability --}}
                    <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(10,10,10,0.15) 0%, rgba(10,10,10,0.25) 30%, rgba(10,10,10,0.7) 60%, rgba(10,10,10,0.94) 100%); border-radius: 26px;"></div>
                    <div class="absolute inset-0 opacity-0 transition-opacity duration-600" style="background: linear-gradient(180deg, rgba(10,10,10,0.05) 0%, rgba(10,10,10,0.15) 40%, rgba(10,10,10,0.75) 65%, rgba(10,10,10,0.96) 100%); border-radius: 26px;"></div>

                    {{-- Border Glow — animated on hover --}}
                    <div class="service-border-glow absolute inset-0 pointer-events-none opacity-0 transition-opacity duration-600" style="border-radius: 26px; border: 2px solid var(--color-primary); box-shadow: inset 0 0 30px rgba(212,32,44,0.1), 0 0 25px rgba(212,32,44,0.15);"></div>

                    {{-- Spotlight — cursor-following radial glow --}}
                    <div class="service-spotlight absolute inset-0 pointer-events-none opacity-0 transition-opacity duration-400" style="border-radius: 26px;"></div>

                    {{-- Content — pinned to bottom --}}
                    <div class="relative z-10 flex flex-col justify-end flex-1 p-6 sm:p-7">
                        {{-- Number Prefix — elegant monospace --}}
                        <div class="text-[10px] font-bold tracking-[3px] mb-4" style="color: rgba(255,255,255,0.25); font-family: 'Inter', monospace; letter-spacing: 0.2em;">{{ $service['num'] }}</div>

                        {{-- Glass Icon --}}
                        <div class="service-glass-icon w-12 h-12 rounded-2xl flex items-center justify-center mb-5 transition-all duration-500 group-hover:scale-110" style="background: rgba(212,32,44,0.15); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(212,32,44,0.2); box-shadow: 0 0 20px rgba(212,32,44,0.1);">
                            <i class="{{ $service['icon'] }}" style="font-size: 18px; color: var(--color-primary-light);"></i>
                        </div>

                        {{-- Title — refined typography --}}
                        <h3 class="text-xl font-bold mb-3 transition-colors duration-400 text-white" style="letter-spacing: -0.02em; line-height: 1.15;">
                            {{ $service['title'] }}
                        </h3>

                        {{-- Description — always visible, subtle --}}
                        <p class="text-sm leading-relaxed mb-5 transition-all duration-500" style="color: rgba(255,255,255,0.5); line-height: 1.6;">
                            {{ $service['description'] }}
                        </p>

                        {{-- CTA — animated arrow --}}
                        <span class="service-cta inline-flex items-center gap-2 text-sm font-semibold transition-all duration-400" style="color: var(--color-primary-light);">
                            <span>Explore Division</span>
                            <i class="fa-solid fa-arrow-right text-xs transition-all duration-400"></i>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- STATS BAR --}}
{{-- ============================================ --}}
<section class="px-6 lg:px-[max(1.5rem,calc((100vw-80rem)/2))] -mt-[50px] relative z-10 mb-[50px]">
    <div class="max-w-7xl mx-auto">
        <div class="stat-bar flex flex-wrap">
            @foreach([
                ['number' => '7', 'suffix' => '+', 'label' => 'Years of Experience'],
                ['number' => '25', 'suffix' => '+', 'label' => 'Team Members'],
                ['number' => '940', 'suffix' => '+', 'label' => 'Successful Projects'],
                ['number' => '810', 'suffix' => '+', 'label' => 'Satisfied Clients'],
            ] as $stat)
                <div class="stat-item w-full md:w-1/2 lg:w-1/4">
                    <div class="stat-number counter" data-target="{{ $stat['number'] }}">0{{ $stat['suffix'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- ABOUT --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Left: Visual --}}
            <div data-animate class="relative">
                <div class="rounded-xl overflow-hidden" style="height: 420px;">
                    <img src="{{ asset('images/ec excellence.png') }}"
                         alt="Endow Corporation Excellence"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
                <div class="absolute -bottom-5 -right-5 bg-white rounded-xl p-5" style="box-shadow: 0 12px 40px rgba(0,0,0,0.08); border-left: 3px solid var(--color-primary);">
                    <p class="text-3xl font-bold" style="color: var(--color-primary);">7+</p>
                    <p class="text-xs font-medium" style="color: var(--color-text-muted);">Years of Excellence</p>
                </div>
            </div>

            {{-- Right: Content --}}
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-info-circle"></i>
                    About Us
                </div>
                <h2 class="section-heading">A Legacy of <span class="gradient-text">Excellence</span></h2>
                <p class="text-base leading-relaxed mb-8" style="color: var(--color-text);">
                    With a passion for innovation and a commitment to excellence, Endow Corporation is a global leader in Travel, Education, Technology, and Healthcare solutions.
                </p>

                <div class="space-y-4 mb-8">
                    @foreach(['Innovation', 'Excellence', 'Global Reach', 'Customer Focus'] as $point)
                        <div class="about-check-pill flex items-center gap-3 p-2 rounded-lg cursor-default" style="background: transparent;">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0 feature-icon-premium" style="background: rgba(212,32,44,0.08);">
                                <i class="fa-solid fa-check text-xs" style="color: var(--color-primary);"></i>
                            </div>
                            <span class="text-sm font-semibold" style="color: var(--color-text-heading);">{{ $point }}</span>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('about') }}" class="btn-primary">
                    <span class="btn-text"><span>Learn More</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- DIVISIONS — Premium Enterprise Showcase --}}
{{-- ============================================ --}}
<section id="divisions-section" class="relative overflow-hidden" style="padding: 100px 0 120px; background: #fafafa;">

    {{-- Background Treatment --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        {{-- Radial gradient accents --}}
        <div class="absolute" style="width: 600px; height: 600px; top: -120px; right: -150px; background: radial-gradient(circle, rgba(212,32,44,0.04) 0%, transparent 70%); filter: blur(60px);"></div>
        <div class="absolute" style="width: 500px; height: 500px; bottom: -100px; left: -120px; background: radial-gradient(circle, rgba(212,32,44,0.03) 0%, transparent 70%); filter: blur(50px);"></div>
        {{-- Faint grid --}}
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    <div class="max-w-[1200px] mx-auto px-6 sm:px-8 lg:px-10 relative z-10">

        {{-- Section Header --}}
        <div class="text-center mb-16 sm:mb-20 div-header" data-animate-div>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-building"></i>
                Our Divisions
            </div>
            <h2 class="section-heading" style="font-size: clamp(34px, 4.5vw, 52px); margin-bottom: 20px;">Four Pillars of <span class="gradient-text">Excellence</span></h2>
            <p class="text-base sm:text-lg max-w-[680px] mx-auto" style="color: var(--color-text); line-height: 1.75;">
                Each division operates with singular focus, together they deliver end-to-end global solutions across 30+ countries.
            </p>
        </div>

        {{-- Divisions Grid --}}
            @php
                $divisions = [
                    [
                        'route' => 'technology',
                        'name' => 'Endow Technologies',
                        'desc' => 'AI, cloud, custom software, cutting-edge digital transformation engineered to accelerate your business growth.',
                        'icon' => 'fa-solid fa-microchip',
                        'accent' => 'rgba(245,158,11,0.08)',
                        'accentBorder' => 'rgba(245,158,11,0.15)',
                        'accentHover' => 'rgba(245,158,11,0.12)',
                        'iconColor' => '#d97706',
                    ],
                    [
                        'route' => 'education',
                        'name' => 'Global Education',
                        'desc' => 'World-class study programs, scholarship guidance, language training, opening doors to global academic opportunities.',
                        'icon' => 'fa-solid fa-graduation-cap',
                        'accent' => 'rgba(124,58,237,0.08)',
                        'accentBorder' => 'rgba(124,58,237,0.15)',
                        'accentHover' => 'rgba(124,58,237,0.12)',
                        'iconColor' => '#7c3aed',
                    ],
                    [
                        'route' => 'hospital-tourism',
                        'name' => 'Hospital Tourism',
                        'desc' => 'Premium medical travel connecting patients with South Korea\'s world-class hospitals and expert specialists.',
                        'icon' => 'fa-solid fa-heart-pulse',
                        'accent' => 'rgba(16,185,129,0.08)',
                        'accentBorder' => 'rgba(16,185,129,0.15)',
                        'accentHover' => 'rgba(16,185,129,0.12)',
                        'iconColor' => '#059669',
                    ],
                    [
                        'route' => 'travel',
                        'name' => 'Endow Travel',
                        'desc' => 'Tailored corporate & leisure travel with personalized itineraries, visa processing, and dedicated 24/7 support worldwide.',
                        'icon' => 'fa-solid fa-plane-departure',
                        'accent' => 'rgba(212,32,44,0.08)',
                        'accentBorder' => 'rgba(212,32,44,0.15)',
                        'accentHover' => 'rgba(212,32,44,0.12)',
                        'iconColor' => '#D4202C',
                    ],
                ];
            @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-7">
            @foreach($divisions as $index => $div)
                <a href="{{ route('division.show', $div['route']) }}"
                   class="div-card group relative rounded-[22px] overflow-hidden block"
                   data-animate-div
                   style="animation-delay: {{ $index * 100 }}ms;"
                   role="article"
                   aria-label="{{ $div['name'] }}">

                    {{-- Card surface --}}
                    <div class="div-card-surface absolute inset-0 rounded-[22px]"
                         style="background: white; border: 1px solid rgba(0,0,0,0.06); box-shadow: 0 1px 3px rgba(0,0,0,0.04), 0 8px 32px rgba(0,0,0,0.02);"></div>

                    {{-- Hover glow --}}
                    <div class="div-card-glow absolute inset-0 rounded-[22px] pointer-events-none opacity-0 transition-opacity duration-300"
                         style="background: radial-gradient(ellipse at 50% 0%, {{ $div['accent'] }} 0%, transparent 70%);"></div>

                    <div class="relative z-10 p-8 sm:p-9 lg:p-10 flex flex-col h-full min-h-[240px]">
                        {{-- Top row: Icon + Arrow --}}
                        <div class="flex items-start justify-between mb-6">
                            <div class="div-icon-wrap w-[52px] h-[52px] rounded-[14px] flex items-center justify-center transition-all duration-300"
                                 style="background: {{ $div['accent'] }}; border: 1px solid {{ $div['accentBorder'] }};">
                                <i class="{{ $div['icon'] }} text-xl transition-transform duration-300" style="color: {{ $div['iconColor'] }};"></i>
                            </div>
                            <div class="div-arrow-wrap w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300"
                                 style="background: rgba(0,0,0,0.03); border: 1px solid rgba(0,0,0,0.06);">
                                <i class="fa-solid fa-arrow-right text-xs transition-all duration-300" style="color: var(--color-text-muted);"></i>
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="flex-1">
                            <h3 class="text-lg sm:text-xl font-bold mb-2.5 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $div['name'] }}</h3>
                            <p class="text-sm sm:text-[15px] leading-[1.75]" style="color: var(--color-text);">{{ $div['desc'] }}</p>
                        </div>

                        {{-- Bottom CTA --}}
                        <div class="mt-6 pt-5 flex items-center gap-2 text-sm font-semibold transition-all duration-300" style="border-top: 1px solid rgba(0,0,0,0.05); color: var(--color-text-muted);">
                            <span class="div-cta-text">Learn more</span>
                            <i class="fa-solid fa-arrow-right text-[11px] transition-transform duration-300 div-cta-arrow"></i>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- ENDOW TECHNOLOGIES — Scroll Stack --}}
{{-- ============================================ --}}
<x-scroll-stack
    heading="Innovate. Transform. <span class='gradient-text'>Lead.</span>"
    subtitle="Endow Technologies"
    description="Cutting-edge solutions engineered to accelerate your digital transformation."
    section-class="section-gap-tech"
    stack-id="technologies-stack"
    bg-gradient="linear-gradient(160deg, #fef1f0 0%, #fcd6d3 28%, #fef4f3 55%, #facbc7 100%)"
    :items="[
        [
            'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&h=600&fit=crop',
            'icon' => 'fa-solid fa-code',
            'title' => 'Software Development',
            'description' => 'Custom-built, scalable platforms engineered for performance. From enterprise SaaS to internal tooling, we build software that drives your business forward with clean architecture and modern stacks.',
            'button_text' => 'Explore Endow Tech',
            'button_url' => '/technology',
            'badge' => '01',
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&h=600&fit=crop',
            'icon' => 'fa-solid fa-robot',
            'title' => 'AI Solutions',
            'description' => 'Intelligent workflows that reduce overhead and multiply output. Machine learning models, RPA pipelines, and predictive analytics designed to give you a competitive edge.',
            'button_text' => 'Explore Endow Tech',
            'button_url' => '/technology',
            'badge' => '02',
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1561736778-92e52a7769ef?w=800&h=600&fit=crop',
            'icon' => 'fa-solid fa-cloud',
            'title' => 'Cloud Services',
            'description' => 'Secure, scalable infrastructure engineered for zero-downtime. AWS, Azure, and GCP deployments with enterprise-grade security, monitoring, and disaster recovery.',
            'button_text' => 'Explore Endow Tech',
            'button_url' => '/technology',
            'badge' => '03',
        ],
    ]"
/>

{{-- ============================================ --}}
{{-- GLOBAL EDUCATION — Scroll Stack --}}
{{-- ============================================ --}}
<x-scroll-stack
    heading="Global Vision, <span class='gradient-text'>Guided Path</span>"
    subtitle="Endow Global Education"
    description="Opening doors to global opportunities through world-class programs and resources."
    section-class="section-gap-edu"
    stack-id="education-stack"
    bg-gradient="linear-gradient(160deg, #eeeaff 0%, #d8d0ff 28%, #eeebff 55%, #cfc5ff 100%)"
    :items="[
        [
            'image' => 'https://images.unsplash.com/photo-1523050854058-8df90910e6831?w=800&h=600&fit=crop',
            'icon' => 'fa-solid fa-plane-departure',
            'title' => 'Study Abroad',
            'description' => 'Globally recognized programs tailored for career growth. Access top-tier universities and institutions worldwide with comprehensive academic guidance and placement support.',
            'button_text' => 'Explore Global Education',
            'button_url' => '/education',
            'badge' => '01',
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=800&h=600&fit=crop',
            'icon' => 'fa-solid fa-language',
            'title' => 'Language Institute',
            'description' => 'Master new languages with immersive, expert-led programs. From beginner to advanced, our language institute prepares you for global communication and academic success.',
            'button_text' => 'Explore Global Education',
            'button_url' => '/education',
            'badge' => '02',
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?w=800&h=600&fit=crop',
            'icon' => 'fa-solid fa-award',
            'title' => 'Scholarship Program',
            'description' => 'Making quality education more affordable. We connect students with merit-based and need-based scholarships, grants, and financial aid opportunities across 30+ countries.',
            'button_text' => 'Explore Global Education',
            'button_url' => '/education',
            'badge' => '03',
        ],
    ]"
/>

{{-- ============================================ --}}
{{-- WHY CHOOSE US --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-star"></i>
                    Why Choose Us
                </div>
                <h2 class="section-heading">Globally Recognized <span class="gradient-text">Consulting Leader</span></h2>
                <p class="text-base leading-relaxed mb-8" style="color: var(--color-text);">
                    Our award-winning services empower businesses and individuals to achieve their full potential with confidence and precision.
                </p>

                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Global Expertise', 'desc' => 'Solutions across 30+ countries with deep local knowledge.'],
                        ['icon' => 'fa-solid fa-headset', 'title' => '24/7 Customer Support', 'desc' => 'Always available to provide support whenever you need it.'],
                        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Trusted & Secure', 'desc' => 'Enterprise-grade security and compliance standards.'],
                    ] as $f)
                        <div class="feature-card-premium flex items-start gap-4 p-5 rounded-xl" style="background: white; border: 1px solid var(--color-border);">
                            <div class="feature-icon-premium w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(212,32,44,0.1) 0%, rgba(212,32,44,0.02) 100%);">
                                <i class="{{ $f['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                            </div>
                            <div>
                                <h4 class="text-base font-bold mb-1" style="color: var(--color-text-heading);">{{ $f['title'] }}</h4>
                                <p class="text-sm" style="color: var(--color-text);">{{ $f['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div data-animate>
                <div class="rounded-xl overflow-hidden" style="height: 420px;">
                    <img src="{{ asset('images/Endow Corporation as a Visionary Leader.png') }}"
                         alt="Our Expert Team"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TESTIMONIALS — Auto-rotating Carousel --}}
{{-- ============================================ --}}
<section class="section-gap testimonial-section" style="background-color: #f0f0f0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[48px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-quote-left"></i>
                Testimonials
            </div>
            <h2 class="section-heading">What Our Clients <span class="gradient-text">Say</span></h2>
        </div>

        @php
            $allTestimonials = config('testimonials', []);
        @endphp

        @if(!empty($allTestimonials))
            <div class="testimonial-carousel" style="position: relative; overflow: hidden; padding: 0 48px;">
                {{-- Track — pages slide horizontally --}}
                <div class="testimonial-track" style="display: flex; gap: 1.5rem; transition: transform 0.5s cubic-bezier(0.22, 0.61, 0.36, 1); will-change: transform;">
                    @foreach($allTestimonials as $index => $testimonial)
                        <div class="testimonial-card testimonial-card-premium flex-shrink-0 px-4 {{ $index === 0 ? 'active' : '' }}"
                             style="width: 33.333%; min-width: 280px;">
                            <div class="mb-4" style="color: var(--color-primary); font-size: 32px;">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <p class="text-sm leading-relaxed mb-6" style="color: var(--color-text);">"{{ $testimonial['text'] }}"</p>
                            <div class="flex items-center gap-1 mb-4">
                                @for($i = 0; $i < ($testimonial['stars'] ?? 5); $i++)
                                    <i class="fa-solid fa-star text-sm" style="color: #fbbf24;"></i>
                                @endfor
                            </div>
                            <div class="pt-5" style="border-top: 1px solid var(--color-border);">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background: rgba(212,32,44,0.08);">
                                            <i class="{{ $testimonial['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold" style="color: var(--color-text-heading);">{{ $testimonial['name'] }}</p>
                                            <p class="text-xs" style="color: var(--color-text-muted);">{{ $testimonial['role'] }}</p>
                                        </div>
                                    </div>
                                    <i class="fa-solid fa-quote-right text-2xl" style="color: rgba(212,32,44,0.06);"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Arrows --}}
                <button class="testimonial-prev" aria-label="Previous testimonial"
                        style="position: absolute; left: 0; top: 50%; transform: translateY(-50%); z-index: 10; width: 44px; height: 44px; border-radius: 50%; border: 1px solid var(--color-border); background: white; box-shadow: 0 4px 16px rgba(0,0,0,0.08); cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                    <i class="fa-solid fa-chevron-left text-sm" style="color: var(--primary);"></i>
                </button>
                <button class="testimonial-next" aria-label="Next testimonial"
                        style="position: absolute; right: 0; top: 50%; transform: translateY(-50%); z-index: 10; width: 44px; height: 44px; border-radius: 50%; border: 1px solid var(--color-border); background: white; box-shadow: 0 4px 16px rgba(0,0,0,0.08); cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                    <i class="fa-solid fa-chevron-right text-sm" style="color: var(--primary);"></i>
                </button>

                {{-- Dots --}}
                <div class="testimonial-dots" style="display: flex; justify-content: center; gap: 10px; margin-top: 30px;">
                    @foreach($allTestimonials as $index => $t)
                        <button class="testimonial-dot {{ $index === 0 ? 'testimonial-dot--active' : '' }}"
                                data-index="{{ $index }}"
                                aria-label="Go to testimonial {{ $index + 1 }}"
                                style="width: 10px; height: 10px; border-radius: 50%; border: none; background: {{ $index === 0 ? 'var(--color-primary)' : 'rgba(0,0,0,0.15)' }}; cursor: pointer; transition: all 0.3s ease;"></button>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>

{{-- ============================================ --}}
{{-- FAQ --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-3xl mx-auto px-6">
        <div class="text-center mb-[48px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-circle-question"></i>
                FAQs
            </div>
            <h2 class="section-heading">Frequently Asked <span class="gradient-text">Questions</span></h2>
            <p class="text-base max-w-[700px] mx-auto mt-4" style="color: var(--color-text); line-height: 1.7;">Find answers to the most common questions about Endow Corporation's services, technology, and global operations.</p>
        </div>

        <div class="accordion" data-animate role="list">
            @php
                $faqs = [
                    ['q' => 'What does Endow Corporation do?', 'a' => 'We are a global conglomerate operating across four core divisions, Travel, Education, Technology, and Hospital Tourism. From corporate travel management to AI-driven tech solutions, we deliver end-to-end services that help businesses and individuals thrive across 30+ countries.'],
                    ['q' => 'Can you manage end-to-end corporate travel for our organization?', 'a' => 'Absolutely. We handle everything from flights and accommodations to visa processing, itinerary management, and 24/7 on-ground support, all tailored to your company\'s travel policies and budget.'],
                    ['q' => 'What technology solutions does Endow Technologies provide?', 'a' => 'We deliver custom software development, AI and automation integration, cloud infrastructure, and cybersecurity services. Our solutions are built for scalability and designed to accelerate your digital transformation.'],
                    ['q' => 'How does your Hospital Tourism division work?', 'a' => 'We coordinate medical travel to South Korea\'s world-class hospitals. From selecting the right facility and specialist to arranging travel logistics and post-care follow-up, we manage the entire journey for patients seeking premium healthcare abroad.'],
                    ['q' => 'What educational programs and scholarships do you offer?', 'a' => 'We partner with leading global institutions to offer study abroad programs, language training, and scholarship guidance. Our team supports students through admissions, visa processing, and settlement in their new country.'],
                    ['q' => 'How can I get started with Endow Corporation?', 'a' => 'Simply book a free consultation through our website or call us at 02-2632-2559. We\'ll assess your needs, recommend the right division, and build a tailored plan to get started.'],
                ];
            @endphp

            @foreach($faqs as $index => $faq)
                <div class="accordion-item {{ $index === 0 ? 'active' : '' }}" role="listitem">
                    <button class="accordion-button w-full text-left flex items-center justify-between {{ $index !== 0 ? 'collapsed' : '' }}"
                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                            aria-controls="faq-answer-{{ $index }}"
                            id="faq-question-{{ $index }}">
                        <span>{{ $faq['q'] }}</span>
                    </button>
                    <div class="accordion-body" id="faq-answer-{{ $index }}" role="region" aria-labelledby="faq-question-{{ $index }}">
                        <p class="text-sm leading-relaxed">{{ $faq['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CTA — Refined Corporate Call-to-Action --}}
{{-- ============================================ --}}
<section class="section-gap relative overflow-hidden" style="background: linear-gradient(160deg, #faf9f8 0%, #f3f1ef 40%, #f8f6f5 100%);">
    {{-- Subtle decorative blobs --}}
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full opacity-[0.06]" style="background: radial-gradient(circle, var(--color-primary) 0%, transparent 70%);"></div>
    <div class="absolute -bottom-24 -left-24 w-[400px] h-[400px] rounded-full opacity-[0.04]" style="background: radial-gradient(circle, var(--color-primary-dark) 0%, transparent 70%);"></div>

    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <div data-animate class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            Get In Touch
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
        </div>

        <h2 data-animate class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-6 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
            Let's Discuss How We Can<br class="hidden sm:block"> Help You <span class="gradient-text">Succeed</span>
        </h2>

        <p data-animate class="text-base sm:text-lg max-w-xl mx-auto mb-10" style="color: var(--color-text); line-height: 1.7;">
            Whether you're looking for tailored solutions in Travel, Education, Technology, or Healthcare, our team is ready to guide you every step of the way.
        </p>

        <div data-animate class="flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                <span class="btn-text"><span>Get a Quote</span></span>
                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full text-sm font-semibold transition-all duration-300 hover:-translate-y-0.5" style="background: white; color: var(--color-text-heading); border: 1.5px solid var(--color-border); box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
                <i class="fa-regular fa-comment text-sm" style="color: var(--color-primary);"></i>
                Contact Us
            </a>
        </div>

        {{-- Trust badges — subtle social proof --}}
        <div data-animate class="mt-14 flex flex-wrap items-center justify-center gap-8">
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>Free Consultation</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>No Obligation</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>Tailored Solutions</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>24/7 Support</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- APPOINTMENT FORM — Refined Corporate Booking --}}
{{-- ============================================ --}}
<section class="section-gap relative overflow-hidden" style="background: linear-gradient(180deg, #fefefe 0%, #f8f7f6 100%);">
    {{-- Subtle grid texture --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.018]" style="background-image: radial-gradient(circle, #0a0a0a 1px, transparent 1px); background-size: 28px 28px;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20" data-animate>
            <div class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Book Now
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-5 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
                Book an <span class="gradient-text">Appointment</span>
            </h2>
            <p class="text-base max-w-lg mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">
                Ready to take the next step? Let's connect, our team is here to help with Travel, Education, Technology, or Healthcare consulting.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14">
            {{-- Left: Contact Cards (2/5 width) --}}
            <div data-animate class="lg:col-span-2 space-y-5">
                @php
                    $contactCards = [
                        [
                            'icon' => 'fa-solid fa-phone',
                            'label' => 'Call Us',
                            'value' => '02-2632-2559',
                            'href' => 'tel:0226322559',
                            'sub' => 'Mon–Sat, 8am–6pm KST',
                        ],
                        [
                            'icon' => 'fa-regular fa-envelope',
                            'label' => 'Email Us',
                            'value' => 'contact@endowcorporation.com',
                            'href' => 'mailto:contact@endowcorporation.com',
                            'sub' => 'We reply within 24 hours',
                        ],
                        [
                            'icon' => 'fa-solid fa-location-dot',
                            'label' => 'Visit Us',
                            'value' => 'Seoul, South Korea',
                            'href' => null,
                            'sub' => 'Serving clients worldwide',
                        ],
                    ];
                @endphp

                @foreach($contactCards as $card)
                    <div class="group flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 hover:-translate-y-0.5" style="background: white; border: 1px solid var(--color-border); box-shadow: 0 1px 4px rgba(0,0,0,0.03);">
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0 transition-colors duration-300" style="background: rgba(212,32,44,0.06);">
                            <i class="{{ $card['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[11px] font-bold uppercase tracking-wider mb-1" style="color: var(--color-text-muted);">{{ $card['label'] }}</p>
                            @if($card['href'])
                                <a href="{{ $card['href'] }}" class="block text-[15px] font-semibold transition-colors hover:text-[color:var(--color-primary)] truncate" style="color: var(--color-text-heading);">{{ $card['value'] }}</a>
                            @else
                                <p class="text-[15px] font-semibold truncate" style="color: var(--color-text-heading);">{{ $card['value'] }}</p>
                            @endif
                            <p class="text-xs mt-0.5" style="color: var(--color-text-muted);">{{ $card['sub'] }}</p>
                        </div>
                    </div>
                @endforeach

                {{-- Decorative stat badge --}}
                <div class="mt-8 p-5 rounded-2xl flex items-center gap-4" style="background: linear-gradient(135deg, rgba(212,32,44,0.04) 0%, rgba(212,32,44,0.01) 100%); border: 1px dashed rgba(212,32,44,0.15);">
                    <div class="text-3xl font-extrabold tracking-tight" style="color: var(--color-primary);">98%</div>
                    <div>
                        <p class="text-sm font-semibold" style="color: var(--color-text-heading);">Client Satisfaction</p>
                        <p class="text-xs mt-0.5" style="color: var(--color-text-muted);">Based on 810+ happy clients</p>
                    </div>
                </div>
            </div>

            {{-- Right: Form Card (3/5 width) --}}
            <div data-animate class="lg:col-span-3">
                <div class="rounded-2xl p-8 md:p-10" style="background: white; border: 1px solid var(--color-border); box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                    @if(session('success'))
                        <div class="mb-7 p-4 rounded-xl flex items-center gap-3" style="background: rgba(16,185,129,0.06); border: 1px solid rgba(16,185,129,0.12);">
                            <i class="fa-solid fa-check-circle text-base" style="color: #10b981;"></i>
                            <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="page" value="{{ request()->route()->getName() }}">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Full Name <span style="color: var(--color-primary);">*</span></label>
                                <input type="text" id="name" name="name" placeholder="John Smith" required value="{{ old('name') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                @error('name') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="service_type" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Service Type</label>
                                <select id="service_type" name="service_type"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none appearance-auto"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                    <option value="">Select a service...</option>
                                    <option value="Travel Services">Travel Services</option>
                                    <option value="Education Services">Education Services</option>
                                    <option value="Technology Services">Technology Services</option>
                                    <option value="Hospital Tourism">Hospital Tourism</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Email Address <span style="color: var(--color-primary);">*</span></label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Phone Number <span style="color: var(--color-primary);">*</span></label>
                                <input type="tel" id="phone" name="phone" placeholder="+880 1XXX-XXXXXX" required value="{{ old('phone') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                @error('phone') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Message <span style="color: var(--color-text-muted); font-weight: 400;">(optional)</span></label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your needs, goals, or questions..."
                                class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none resize-none"
                                style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="btn-primary w-full sm:w-auto justify-center">
                            <span class="btn-text"><span>Submit Request</span></span>
                            <span class="btn-icon"><i class="fa-solid fa-paper-plane text-xs"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
