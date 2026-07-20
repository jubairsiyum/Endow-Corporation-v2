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
                'desc' => 'AI, cloud, custom software, and digital transformation — cutting-edge tech to power your business forward.',
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
                        'description' => 'World-class study programs, scholarship guidance, language training, and comprehensive student support — unlocking global opportunities.',
                        'route' => 'education',
                        'photo' => asset('images/services/733542680_989042620614397_7628936787862668773_n.jpg'),
                        'fallback' => asset('images/services/education-bg.svg'),
                    ],
                    [
                        'num' => '03',
                        'icon' => 'fa-solid fa-microchip',
                        'title' => 'Endow Technologies',
                        'description' => 'AI, cloud, custom software, and digital transformation — cutting-edge tech engineered to power your business and accelerate growth.',
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
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.08);">
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
{{-- DIVISIONS --}}
{{-- ============================================ --}}
<section class="section-gap pitch-dark">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[48px]" data-animate>
            <div class="section-subtitle justify-center">
                <i class="fa-solid fa-building"></i>
                Our Divisions
            </div>
            <h2 class="section-heading">Explore Our <span class="gradient-text">Divisions</span></h2>
            <p class="text-base max-w-2xl mx-auto" style="color: rgba(255,255,255,0.5);">Four specialized divisions working together to deliver comprehensive global solutions.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php
                $divisions = [
                    ['route' => 'travel', 'name' => 'Endow Travel', 'desc' => 'Tailored travel solutions for businesses and individuals.', 'icon' => 'fa-solid fa-plane-departure', 'tags' => ['Corporate Travel', 'Leisure', 'Visa']],
                    ['route' => 'education', 'name' => 'Global Education', 'desc' => 'World-class educational programs and scholarship guidance.', 'icon' => 'fa-solid fa-graduation-cap', 'tags' => ['Study Abroad', 'Scholarships', 'Language']],
                    ['route' => 'technology', 'name' => 'Technologies', 'desc' => 'Cutting-edge tech solutions for digital transformation.', 'icon' => 'fa-solid fa-microchip', 'tags' => ['AI', 'Cloud', 'Software']],
                    ['route' => 'hospital-tourism', 'name' => 'Hospital Tourism', 'desc' => 'World-class healthcare travel across 30+ countries.', 'icon' => 'fa-solid fa-heart-pulse', 'tags' => ['Medical Travel', 'Expert Care', 'Global']],
                ];
            @endphp

            @foreach($divisions as $index => $div)
                <a href="{{ route('division.show', $div['route']) }}" data-animate class="group p-7 rounded-2xl transition-all duration-300" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);" onmouseover="this.style.borderColor='rgba(212,32,44,0.3)'; this.style.background='rgba(255,255,255,0.05)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.06)'; this.style.background='rgba(255,255,255,0.03)';">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.1); border: 1px solid rgba(212,32,44,0.15);">
                            <i class="{{ $div['icon'] }} text-lg" style="color: var(--color-primary-light);"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-lg font-bold text-white">{{ $div['name'] }}</h3>
                                <i class="fa-solid fa-arrow-right text-sm transition-transform group-hover:translate-x-1" style="color: var(--color-primary);"></i>
                            </div>
                            <p class="text-sm mb-3" style="color: rgba(255,255,255,0.5);">{{ $div['desc'] }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($div['tags'] as $tag)
                                    <span class="px-3 py-1 rounded-full text-xs font-medium" style="background: rgba(212,32,44,0.1); color: var(--color-primary-light);">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- ENDOW TECHNOLOGIES HIGHLIGHT --}}
{{-- ============================================ --}}
<section class="section-gap overflow-hidden" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            {{-- Left: Content --}}
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-microchip"></i>
                    Endow Technologies
                </div>
                <h2 class="section-heading">Innovate. Transform. <span class="gradient-text">Lead.</span></h2>
                <p class="text-base leading-relaxed mb-8" style="color: var(--color-text);">
                    Stay ahead with cutting-edge technology solutions that drive digital transformation, improve efficiency, and power your business forward.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    @foreach([
                        ['icon' => 'fa-solid fa-code', 'title' => 'Software Solutions', 'desc' => 'Scalable, custom-built platforms'],
                        ['icon' => 'fa-solid fa-robot', 'title' => 'AI & Automation', 'desc' => 'Smart workflows, reduced overhead'],
                        ['icon' => 'fa-solid fa-cloud', 'title' => 'Cloud & Security', 'desc' => 'Secure, scalable infrastructure'],
                        ['icon' => 'fa-solid fa-mobile-screen', 'title' => 'App Development', 'desc' => 'High-performance web & mobile'],
                    ] as $feature)
                        <div class="flex items-start gap-3 p-4 rounded-xl transition-all" style="background: white; border: 1px solid var(--color-border);" onmouseover="this.style.borderColor='rgba(212,32,44,0.15)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.04)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.boxShadow='none';">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.08);">
                                <i class="{{ $feature['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold mb-0.5" style="color: var(--color-text-heading);">{{ $feature['title'] }}</h4>
                                <p class="text-xs" style="color: var(--color-text-muted);">{{ $feature['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('division.show', 'technology') }}" class="btn-primary">
                    <span class="btn-text"><span>Explore Endow Tech</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>

            {{-- Right: Visual --}}
            <div data-animate class="relative">
                <div class="rounded-2xl overflow-hidden" style="background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%); aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center;">
                    <div class="text-center px-8">
                        <div class="w-20 h-20 rounded-2xl mx-auto mb-6 flex items-center justify-center" style="background: rgba(212,32,44,0.15); border: 1px solid rgba(212,32,44,0.2);">
                            <i class="fa-solid fa-microchip text-3xl" style="color: var(--color-primary-light);"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Endow Technologies</h3>
                        <p class="text-sm" style="color: rgba(255,255,255,0.5);">Powering digital transformation worldwide</p>
                        <div class="flex items-center justify-center gap-3 mt-6">
                            @foreach(['AI', 'Cloud', 'Dev', 'Data'] as $tag)
                                <span class="px-3 py-1 rounded-full text-xs font-medium" style="background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.5);">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-4 -left-4 bg-white rounded-xl p-4" style="box-shadow: 0 12px 40px rgba(0,0,0,0.08);">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: rgba(16,185,129,0.1);">
                            <i class="fa-solid fa-arrow-trend-up text-sm" style="color: #10b981;"></i>
                        </div>
                        <div>
                            <p class="text-lg font-bold" style="color: var(--color-text-heading);">98%</p>
                            <p class="text-[11px]" style="color: var(--color-text-muted);">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- ENDOW GLOBAL EDUCATION HIGHLIGHT --}}
{{-- ============================================ --}}
<section class="section-gap pitch-dark overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] opacity-10 pointer-events-none" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(120px);"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            {{-- Left: Visual --}}
            <div data-animate class="relative order-2 lg:order-1">
                <div class="rounded-2xl overflow-hidden" style="background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%); border: 1px solid rgba(255,255,255,0.06); aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center;">
                    <div class="text-center px-8">
                        <div class="w-20 h-20 rounded-2xl mx-auto mb-6 flex items-center justify-center" style="background: rgba(212,32,44,0.15); border: 1px solid rgba(212,32,44,0.2);">
                            <i class="fa-solid fa-graduation-cap text-3xl" style="color: var(--color-primary-light);"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Endow Global Education</h3>
                        <p class="text-sm" style="color: rgba(255,255,255,0.5);">Opening doors to global opportunities</p>
                        <div class="flex items-center justify-center gap-3 mt-6">
                            @foreach(['Study', 'Scholarships', 'Language', 'Visa'] as $tag)
                                <span class="px-3 py-1 rounded-full text-xs font-medium" style="background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.5);">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-4 -right-4 bg-white rounded-xl p-4" style="box-shadow: 0 12px 40px rgba(0,0,0,0.08);">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: rgba(16,185,129,0.1);">
                            <i class="fa-solid fa-earth-americas text-sm" style="color: #10b981;"></i>
                        </div>
                        <div>
                            <p class="text-lg font-bold" style="color: var(--color-text-heading);">30+</p>
                            <p class="text-[11px]" style="color: var(--color-text-muted);">Countries Reached</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Content --}}
            <div data-animate class="order-1 lg:order-2">
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-graduation-cap"></i>
                    Endow Global Education
                </div>
                <h2 class="section-heading">Global Vision, <span class="gradient-text">Guided Path</span></h2>
                <p class="text-base leading-relaxed mb-8" style="color: rgba(255,255,255,0.5);">
                    Open doors to global opportunities through world-class educational programs, partnerships, and resources that inspire growth and learning.
                </p>

                <div class="space-y-4 mb-8">
                    @foreach([
                        ['icon' => 'fa-solid fa-landmark', 'title' => 'World-Class Study Programs', 'desc' => 'Globally recognized programs tailored for career growth.'],
                        ['icon' => 'fa-solid fa-hand-holding-heart', 'title' => 'Student Support', 'desc' => 'Comprehensive assistance for admissions, visas, and settling in.'],
                        ['icon' => 'fa-solid fa-award', 'title' => 'Scholarship Guidance', 'desc' => 'Making quality education more affordable and accessible.'],
                    ] as $feature)
                        <div class="flex items-start gap-4 p-4 rounded-xl" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.1);">
                                <i class="{{ $feature['icon'] }} text-sm" style="color: var(--color-primary-light);"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold mb-0.5 text-white">{{ $feature['title'] }}</h4>
                                <p class="text-xs" style="color: rgba(255,255,255,0.5);">{{ $feature['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('division.show', 'education') }}" class="btn-primary">
                    <span class="btn-text"><span>Explore Global Education</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>

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
                        <div class="flex items-start gap-4 p-5 rounded-xl transition-all" style="background: white; border: 1px solid var(--color-border);" onmouseover="this.style.borderColor='rgba(212,32,44,0.15)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.04)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.boxShadow='none';">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(212,32,44,0.1) 0%, rgba(212,32,44,0.02) 100%);">
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
                <div class="img-placeholder" style="height: 420px;">
                    <i class="fa-solid fa-users-gear text-5xl mb-3"></i>
                    <span>Our Expert Team</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TESTIMONIALS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f0f0f0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[48px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-quote-left"></i>
                Testimonials
            </div>
            <h2 class="section-heading">What Our Clients <span class="gradient-text">Say</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['text' => 'Endow Travel made our business trips effortless! Their attention to detail ensured every journey was smooth and productive.', 'name' => 'Corporate Client', 'role' => 'Travel Division', 'icon' => 'fa-solid fa-plane-departure'],
                ['text' => 'With Endow Global Education, I gained access to programs that completely transformed my career. Their support was incredible.', 'name' => 'Education Client', 'role' => 'Education Division', 'icon' => 'fa-solid fa-graduation-cap'],
                ['text' => 'Endow Technologies delivered cutting-edge solutions that revolutionized our operations. Truly understands modern business.', 'name' => 'Tech Client', 'role' => 'Technology Division', 'icon' => 'fa-solid fa-microchip'],
            ] as $index => $testimonial)
                <div data-animate class="testimonial-card {{ $index === 0 ? 'active' : '' }}">
                    <div class="mb-4" style="color: var(--color-primary); font-size: 32px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="text-sm leading-relaxed mb-6" style="color: var(--color-text);">"{{ $testimonial['text'] }}"</p>
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
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
        </div>

        <div class="accordion" data-animate>
            @foreach([
                ['q' => 'What services does Endow Corporation provide?', 'a' => 'We specialize in four core areas: Travel, Education, Technology, and Hospital Tourism. From tailored travel solutions to cutting-edge technology and educational consulting, we help businesses and individuals achieve their goals.'],
                ['q' => 'What kind of travel solutions do you offer?', 'a' => 'We provide personalized travel planning for individuals, corporate travel solutions, and assistance with international travel arrangements including visa processing and itinerary management.'],
                ['q' => 'Do you handle business travel for organizations?', 'a' => 'Yes, we specialize in creating cost-effective and efficient travel plans for businesses, including flights, accommodations, and full itinerary management with dedicated 24/7 support.'],
                ['q' => 'How can Endow Corporation help with education needs?', 'a' => 'We offer innovative educational tools, resources, and consulting services for institutions, teachers, and students to enhance learning experiences, including study abroad programs and scholarship guidance.'],
                ['q' => 'Do you work with international education systems?', 'a' => 'Yes, we provide solutions tailored to global education standards and assist with international education programs across multiple countries and academic frameworks.'],
            ] as $index => $faq)
                <div class="accordion-item mb-4 {{ $index === 0 ? 'active' : '' }}">
                    <button class="accordion-button w-full text-left flex items-center justify-between rounded-xl {{ $index !== 0 ? 'collapsed' : '' }}"
                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                        <span>{{ $faq['q'] }}</span>
                    </button>
                    <div class="accordion-body {{ $index !== 0 ? 'collapsed' : '' }}" style="{{ $index === 0 ? '' : 'max-height: none;' }}">
                        <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $faq['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CTA --}}
{{-- ============================================ --}}
<section>
    <div class="stat-bar flex flex-wrap items-center" style="margin-bottom: 0;">
        <div class="w-full lg:w-1/2 p-10 lg:p-14">
            <h2 data-animate class="text-3xl md:text-4xl lg:text-[44px] font-bold text-white leading-tight mb-6" style="letter-spacing: -0.03em;">
                Let's Discuss How We Can Help You <span style="color: #ffcc00;">Succeed!</span>
            </h2>
            <p data-animate class="text-white/60 text-base leading-relaxed mb-8 max-w-lg">
                Whether you're looking for tailored solutions in Travel, Education, Technology, or Healthcare, our team is ready to guide you every step of the way.
            </p>
            <div data-animate class="flex flex-wrap gap-4">
                <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Get a Quote</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <a href="{{ route('contact') }}" class="btn-outline">
                    Contact Us
                </a>
            </div>
        </div>
        <div class="w-full lg:w-1/2 hidden lg:flex items-center justify-center p-10">
            <img src="{{ asset('images/endow-logo.png') }}" alt="Endow Corporation" class="max-h-44 opacity-25" style="filter: brightness(0) invert(1);">
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- APPOINTMENT FORM --}}
{{-- ============================================ --}}
<section class="section-gap pitch-dark">
    <div class="absolute top-0 left-0 w-[400px] h-[400px] opacity-10" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(80px);"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            {{-- Left: Info --}}
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-calendar-check"></i>
                    Book Now
                </div>
                <h2 class="section-heading">Book an <span class="gradient-text">Appointment</span></h2>
                <p class="text-base leading-relaxed mb-10" style="color: rgba(255,255,255,0.5);">
                    Ready to take the next step? Let's connect! Our team is here to help with Travel, Education, Technology, or Healthcare consulting.
                </p>

                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.1); border: 1px solid rgba(212,32,44,0.15);">
                            <i class="fa-solid fa-phone text-sm" style="color: var(--color-primary-light);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-0.5" style="color: rgba(255,255,255,0.4);">Call us</p>
                            <a href="tel:0226322559" class="text-white font-semibold text-sm hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.1); border: 1px solid rgba(212,32,44,0.15);">
                            <i class="fa-regular fa-envelope text-sm" style="color: var(--color-primary-light);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-0.5" style="color: rgba(255,255,255,0.4);">Email us</p>
                            <a href="mailto:contact@endowcorporation.com" class="text-white font-semibold text-sm hover:text-primary transition-colors">contact@endowcorporation.com</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.1); border: 1px solid rgba(212,32,44,0.15);">
                            <i class="fa-regular fa-clock text-sm" style="color: var(--color-primary-light);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-0.5" style="color: rgba(255,255,255,0.4);">Business hours</p>
                            <p class="text-white font-semibold text-sm">Sat – Thu, 8:00am – 6:00pm</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
            <div data-animate class="bg-white rounded-2xl p-8 md:p-10" style="box-shadow: 0 24px 64px rgba(0,0,0,0.3);">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl flex items-center gap-3" style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.15);">
                        <i class="fa-solid fa-check-circle" style="color: #10b981;"></i>
                        <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="page" value="{{ request()->route()->getName() }}">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold mb-2" style="color: var(--color-text-heading);">Name *</label>
                            <input type="text" id="name" name="name" placeholder="John Smith" required value="{{ old('name') }}" class="input-field">
                            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="service_type" class="block text-sm font-semibold mb-2" style="color: var(--color-text-heading);">Service Type</label>
                            <select id="service_type" name="service_type" class="input-field" style="appearance: auto;">
                                <option value="">Select...</option>
                                <option value="Travel Services">Travel Services</option>
                                <option value="Education Services">Education Services</option>
                                <option value="Technology Services">Technology Services</option>
                                <option value="Hospital Tourism">Hospital Tourism</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-semibold mb-2" style="color: var(--color-text-heading);">Email *</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold mb-2" style="color: var(--color-text-heading);">Phone *</label>
                            <input type="tel" id="phone" name="phone" placeholder="+880" required value="{{ old('phone') }}" class="input-field">
                            @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold mb-2" style="color: var(--color-text-heading);">Message (Optional)</label>
                        <textarea id="message" name="message" rows="4" placeholder="Tell us about your needs..." class="input-field resize-none">{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="btn-primary">
                        <span class="btn-text"><span>Submit Request</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
