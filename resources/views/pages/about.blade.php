@extends('layouts.app')

@section('title', 'About Us – Endow Corporation | Global Leader in Travel, Education, Technology & Healthcare')
@section('meta_title', 'About Us – Endow Corporation | Global Leader in Travel, Education, Technology & Healthcare')
@section('meta_description', 'Discover Endow Corporation — a global conglomerate operating across Travel, Education, Technology, and Hospital Tourism. Serving 30+ countries with innovative solutions since 2018.')

@section('content')

{{-- ============================================ --}}
{{-- HERO --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="background: var(--color-dark); padding: 140px 0 100px;">
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute top-[10%] right-[5%] w-[400px] h-[400px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(80px);"></div>
        <div class="absolute bottom-[10%] left-[10%] w-[300px] h-[300px] rounded-full opacity-10" style="background: #7c3aed; filter: blur(70px);"></div>
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <nav class="mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2 text-sm" style="color: rgba(255,255,255,0.4);">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium">About Us</li>
            </ol>
        </nav>

        <div class="max-w-3xl">
            <div class="section-subtitle" style="color: var(--color-primary-light);">
                <i class="fa-solid fa-building"></i>
                About Endow Corporation
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-[56px] font-bold text-white mb-6" style="letter-spacing: -0.03em; line-height: 1.1;">
                Navigating Knowledge,<br>Embracing <span style="color: var(--color-primary-light);">Adventure</span>
            </h1>
            <p class="text-lg md:text-xl leading-relaxed max-w-2xl" style="color: rgba(255,255,255,0.5); line-height: 1.7;">
                A global conglomerate empowering businesses and individuals across Travel, Education, Technology, and Healthcare — serving clients in 30+ countries with innovation, excellence, and trust.
            </p>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- COMPANY STORY — Rich SEO Content --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-book-open"></i>
                    Our Story
                </div>
                <h2 class="section-heading">Building a Global Legacy of <span class="gradient-text">Innovation & Excellence</span></h2>
                <div class="space-y-5">
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        Endow Corporation was founded with a singular vision — to bridge the gap between businesses and global opportunities. What started as a travel consultancy has evolved into a multinational conglomerate operating across four strategic divisions: <strong>Travel</strong>, <strong>Education</strong>, <strong>Technology</strong>, and <strong>Hospital Tourism</strong>.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        Headquartered in Seoul, South Korea, we leverage deep local expertise and a vast international network to deliver end-to-end solutions. Our team of 25+ professionals has successfully delivered 940+ projects for 810+ satisfied clients across Asia, Europe, the Middle East, and the Americas.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        At Endow, we believe that true excellence lies in understanding our clients' unique challenges and crafting tailored strategies that drive measurable results. Whether it's a corporate travel program, a study abroad scholarship, a cloud migration, or a medical tourism journey — we deliver with precision, care, and integrity.
                    </p>
                </div>
            </div>

            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="height: 480px; box-shadow: 0 24px 64px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/Endow About.png') }}"
                         alt="Endow Corporation — Global leader in travel, education, technology, and healthcare solutions"
                         class="w-full h-full object-cover"
                         loading="eager"
                         width="800"
                         height="600">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- MISSION, VISION, VALUES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f0f0f0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[48px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-bullseye"></i>
                Our Purpose
            </div>
            <h2 class="section-heading">Mission, Vision & <span class="gradient-text">Values</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-7" data-animate>
            {{-- Mission --}}
            <div class="rounded-2xl p-8 text-center" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                <div class="w-14 h-14 rounded-[14px] flex items-center justify-center mx-auto mb-5" style="background: rgba(212,32,44,0.08); border: 1px solid rgba(212,32,44,0.12);">
                    <i class="fa-solid fa-bullseye text-lg" style="color: var(--color-primary);"></i>
                </div>
                <h3 class="text-lg font-bold mb-3" style="color: var(--color-text-heading);">Our Mission</h3>
                <p class="text-sm leading-[1.8]" style="color: var(--color-text);">
                    To empower businesses and individuals with innovative, end-to-end solutions across Travel, Education, Technology, and Healthcare — driving growth, connectivity, and lasting success on a global scale.
                </p>
            </div>

            {{-- Vision --}}
            <div class="rounded-2xl p-8 text-center" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                <div class="w-14 h-14 rounded-[14px] flex items-center justify-center mx-auto mb-5" style="background: rgba(124,58,237,0.08); border: 1px solid rgba(124,58,237,0.12);">
                    <i class="fa-solid fa-eye text-lg" style="color: #7c3aed;"></i>
                </div>
                <h3 class="text-lg font-bold mb-3" style="color: var(--color-text-heading);">Our Vision</h3>
                <p class="text-sm leading-[1.8]" style="color: var(--color-text);">
                    To be the world's most trusted global conglomerate — recognized for excellence, innovation, and meaningful impact across every market we serve.
                </p>
            </div>

            {{-- Values --}}
            <div class="rounded-2xl p-8 text-center" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                <div class="w-14 h-14 rounded-[14px] flex items-center justify-center mx-auto mb-5" style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.12);">
                    <i class="fa-solid fa-gem text-lg" style="color: #059669;"></i>
                </div>
                <h3 class="text-lg font-bold mb-3" style="color: var(--color-text-heading);">Our Values</h3>
                <p class="text-sm leading-[1.8]" style="color: var(--color-text);">
                    Innovation, Excellence, Global Reach, Customer Focus, Sustainability, and Integrity — the principles that guide every decision we make.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- STATS BAR --}}
{{-- ============================================ --}}
<section style="background: var(--color-dark); padding: 60px 0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" data-animate>
            @foreach([
                ['value' => '7+', 'label' => 'Years of Experience', 'icon' => 'fa-solid fa-calendar-check'],
                ['value' => '25+', 'label' => 'Team Members', 'icon' => 'fa-solid fa-users'],
                ['value' => '940+', 'label' => 'Projects Delivered', 'icon' => 'fa-solid fa-diagram-project'],
                ['value' => '810+', 'label' => 'Satisfied Clients', 'icon' => 'fa-solid fa-face-smile'],
            ] as $stat)
                <div>
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4" style="background: rgba(212,32,44,0.1); border: 1px solid rgba(212,32,44,0.15);">
                        <i class="{{ $stat['icon'] }} text-sm" style="color: var(--color-primary-light);"></i>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1" style="letter-spacing: -0.03em;">{{ $stat['value'] }}</div>
                    <div class="text-sm" style="color: rgba(255,255,255,0.45);">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- OUR DIVISIONS --}}
{{-- ============================================ --}}
<section id="divisions-about" class="relative overflow-hidden" style="padding: 100px 0 120px; background: #fafafa;">
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute" style="width: 600px; height: 600px; top: -120px; right: -150px; background: radial-gradient(circle, rgba(212,32,44,0.04) 0%, transparent 70%); filter: blur(60px);"></div>
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    <div class="max-w-[1200px] mx-auto px-6 sm:px-8 lg:px-10 relative z-10">
        <div class="text-center mb-16 sm:mb-20" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-building"></i>
                Our Divisions
            </div>
            <h2 class="section-heading" style="font-size: clamp(34px, 4.5vw, 52px); margin-bottom: 20px;">Four Pillars of <span class="gradient-text">Excellence</span></h2>
            <p class="text-base sm:text-lg max-w-[680px] mx-auto" style="color: var(--color-text); line-height: 1.75;">
                Each division operates with singular focus — together they deliver end-to-end global solutions across 30+ countries.
            </p>
        </div>

        @php
            $divisions = [
                [
                    'route' => 'technology',
                    'name' => 'Endow Technologies',
                    'desc' => 'AI, cloud, custom software — cutting-edge digital transformation engineered to accelerate your business growth.',
                    'icon' => 'fa-solid fa-microchip',
                    'accent' => 'rgba(245,158,11,0.08)',
                    'accentBorder' => 'rgba(245,158,11,0.15)',
                    'iconColor' => '#d97706',
                ],
                [
                    'route' => 'education',
                    'name' => 'Global Education',
                    'desc' => 'World-class study programs, scholarship guidance, language training — opening doors to global academic opportunities.',
                    'icon' => 'fa-solid fa-graduation-cap',
                    'accent' => 'rgba(124,58,237,0.08)',
                    'accentBorder' => 'rgba(124,58,237,0.15)',
                    'iconColor' => '#7c3aed',
                ],
                [
                    'route' => 'hospital-tourism',
                    'name' => 'Hospital Tourism',
                    'desc' => 'World-class medical travel across 30+ countries — connecting patients with accredited hospitals and expert specialists.',
                    'icon' => 'fa-solid fa-heart-pulse',
                    'accent' => 'rgba(16,185,129,0.08)',
                    'accentBorder' => 'rgba(16,185,129,0.15)',
                    'iconColor' => '#059669',
                ],
                [
                    'route' => 'travel',
                    'name' => 'Endow Travel',
                    'desc' => 'Tailored corporate & leisure travel with personalized itineraries, visa processing, and dedicated 24/7 support worldwide.',
                    'icon' => 'fa-solid fa-plane-departure',
                    'accent' => 'rgba(212,32,44,0.08)',
                    'accentBorder' => 'rgba(212,32,44,0.15)',
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
                    <div class="div-card-surface absolute inset-0 rounded-[22px]"
                         style="background: white; border: 1px solid rgba(0,0,0,0.06); box-shadow: 0 1px 3px rgba(0,0,0,0.04), 0 8px 32px rgba(0,0,0,0.02);"></div>
                    <div class="div-card-glow absolute inset-0 rounded-[22px] pointer-events-none opacity-0 transition-opacity duration-300"
                         style="background: radial-gradient(ellipse at 50% 0%, {{ $div['accent'] }} 0%, transparent 70%);"></div>
                    <div class="relative z-10 p-8 sm:p-9 lg:p-10 flex flex-col h-full min-h-[240px]">
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
                        <div class="flex-1">
                            <h3 class="text-lg sm:text-xl font-bold mb-2.5 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $div['name'] }}</h3>
                            <p class="text-sm sm:text-[15px] leading-[1.75]" style="color: var(--color-text);">{{ $div['desc'] }}</p>
                        </div>
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
                <p class="text-base leading-[1.8] mb-8" style="color: var(--color-text);">
                    Our award-winning services empower businesses and individuals to achieve their full potential with confidence and precision. Here's why 810+ clients trust Endow Corporation.
                </p>

                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Global Expertise', 'desc' => 'Solutions across 30+ countries with deep local knowledge and international standards compliance.'],
                        ['icon' => 'fa-solid fa-headset', 'title' => '24/7 Customer Support', 'desc' => 'Always available to provide unparalleled support and assistance whenever you need it.'],
                        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Trusted & Secure', 'desc' => 'Enterprise-grade security, data protection, and compliance standards across all divisions.'],
                        ['icon' => 'fa-solid fa-lightbulb', 'title' => 'Innovation-Driven', 'desc' => 'Cutting-edge technology and forward-thinking strategies that keep you ahead of the competition.'],
                    ] as $f)
                        <div class="flex items-start gap-4 p-5 rounded-xl transition-all duration-300 hover:shadow-md" style="background: white; border: 1px solid #E5E7EB;">
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
                <div class="rounded-2xl overflow-hidden" style="height: 480px; box-shadow: 0 24px 64px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/Endow Corporation as a Visionary Leader.png') }}"
                         alt="Why choose Endow Corporation — expert team delivering global solutions"
                         class="w-full h-full object-cover"
                         loading="lazy"
                         width="800"
                         height="600">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- OUR JOURNEY — Timeline --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f0f0f0;">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-[48px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-road"></i>
                Our Journey
            </div>
            <h2 class="section-heading">Milestones of <span class="gradient-text">Growth</span></h2>
        </div>

        <div class="relative" data-animate>
            {{-- Center line --}}
            <div class="absolute left-1/2 top-0 bottom-0 w-px -translate-x-1/2" style="background: linear-gradient(180deg, transparent, rgba(212,32,44,0.2), rgba(212,32,44,0.2), transparent);"></div>

            @php
                $timeline = [
                    ['year' => '2018', 'title' => 'Foundation', 'desc' => 'Endow Corporation established in Seoul, South Korea — starting with a vision to bridge businesses with global opportunities.'],
                    ['year' => '2019', 'title' => 'Travel Division Launch', 'desc' => 'Endow Travel launched, offering corporate and leisure travel solutions with personalized itineraries across Asia.'],
                    ['year' => '2020', 'title' => 'Education Goes Global', 'desc' => 'Endow Global Education established — partnering with 50+ international institutions for study abroad programs.'],
                    ['year' => '2021', 'title' => 'Technology Division', 'desc' => 'Endow Technologies launched — delivering AI, cloud, and custom software solutions to enterprise clients.'],
                    ['year' => '2022', 'title' => 'Hospital Tourism', 'desc' => 'Hospital Tourism division launched — connecting patients with accredited hospitals across 30+ countries.'],
                    ['year' => '2023', 'title' => '100+ Projects Milestone', 'desc' => 'Surpassed 100 completed projects with a 98% client satisfaction rate across all four divisions.'],
                    ['year' => '2024', 'title' => 'Global Expansion', 'desc' => 'Expanded operations to 30+ countries with 25+ team members and 810+ satisfied clients worldwide.'],
                ];
            @endphp

            <div class="space-y-12">
                @foreach($timeline as $index => $event)
                    <div class="relative flex items-start gap-8 {{ $index % 2 === 0 ? 'flex-row' : 'flex-row-reverse' }} md:gap-0">
                        {{-- Content --}}
                        <div class="w-full md:w-[calc(50%-40px)] {{ $index % 2 === 0 ? 'md:text-right md:pr-12' : 'md:text-left md:pl-12' }}">
                            <span class="text-xs font-bold uppercase tracking-[2px] mb-2 block" style="color: var(--color-primary);">{{ $event['year'] }}</span>
                            <h4 class="text-lg font-bold mb-2" style="color: var(--color-text-heading);">{{ $event['title'] }}</h4>
                            <p class="text-sm leading-[1.75]" style="color: var(--color-text);">{{ $event['desc'] }}</p>
                        </div>

                        {{-- Dot --}}
                        <div class="absolute left-1/2 -translate-x-1/2 w-3 h-3 rounded-full border-2 z-10 hidden md:block" style="background: white; border-color: var(--color-primary);"></div>

                        {{-- Spacer for other side --}}
                        <div class="hidden md:block w-[calc(50%-40px)]"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TESTIMONIALS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[48px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-quote-left"></i>
                Testimonials
            </div>
            <h2 class="section-heading">What Our Clients <span class="gradient-text">Say</span></h2>
            <p class="text-base max-w-[600px] mx-auto mt-4" style="color: var(--color-text); line-height: 1.7;">
                Hear from businesses and individuals who have transformed their operations with Endow Corporation.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-7" data-animate>
            @php
                $testimonials = [
                    ['text' => 'Endow Travel made our business trips effortless! Their attention to detail and personalized service ensured every journey was smooth and productive. Highly recommend for corporate travel management.', 'name' => 'Corporate Client', 'role' => 'Travel Division', 'icon' => 'fa-solid fa-plane-departure', 'stars' => 5],
                    ['text' => 'With Endow Global Education, I gained access to programs that completely transformed my career. Their support and resources helped me achieve my goals faster than I imagined.', 'name' => 'Education Client', 'role' => 'Education Division', 'icon' => 'fa-solid fa-graduation-cap', 'stars' => 5],
                    ['text' => 'Endow Technologies delivered cutting-edge solutions that revolutionized our operations. Their team truly understands the needs of modern businesses and delivers with precision.', 'name' => 'Tech Client', 'role' => 'Technology Division', 'icon' => 'fa-solid fa-microchip', 'stars' => 5],
                ];
            @endphp

            @foreach($testimonials as $index => $t)
                <div class="rounded-2xl p-7 transition-all duration-300 hover:shadow-lg" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                    <div class="mb-4" style="color: var(--color-primary); font-size: 28px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="text-sm leading-[1.8] mb-6" style="color: var(--color-text);">"{{ $t['text'] }}"</p>
                    <div class="flex items-center gap-1 mb-5">
                        @for($i = 0; $i < $t['stars']; $i++)
                            <i class="fa-solid fa-star text-xs" style="color: #fbbf24;"></i>
                        @endfor
                    </div>
                    <div class="pt-5" style="border-top: 1px solid #E5E7EB;">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background: rgba(212,32,44,0.08);">
                                <i class="{{ $t['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                            </div>
                            <div>
                                <p class="text-sm font-bold" style="color: var(--color-text-heading);">{{ $t['name'] }}</p>
                                <p class="text-xs" style="color: var(--color-text-muted);">{{ $t['role'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- SEO CONTENT BLOCK --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f0f0f0;">
    <div class="max-w-4xl mx-auto px-6">
        <div data-animate>
            <div class="text-center mb-10">
                <h2 class="section-heading" style="font-size: clamp(28px, 3.5vw, 40px);">Endow Corporation — <span class="gradient-text">Global Solutions, Local Expertise</span></h2>
            </div>

            <div class="space-y-6 text-base leading-[1.85]" style="color: var(--color-text);">
                <h3 class="text-xl font-bold" style="color: var(--color-text-heading);">Who We Are</h3>
                <p>
                    Endow Corporation is a South Korea-based global conglomerate specializing in four core verticals: <strong>Travel</strong>, <strong>Education</strong>, <strong>Technology</strong>, and <strong>Hospital Tourism</strong>. Founded in 2018 and headquartered in Seoul's Yeongdeungpo district, we have grown from a boutique travel consultancy into a multinational enterprise serving clients across 30+ countries.
                </p>

                <h3 class="text-xl font-bold" style="color: var(--color-text-heading);">What We Do</h3>
                <p>
                    Our <strong>Travel Division</strong> provides end-to-end corporate and leisure travel management — from flight bookings and hotel accommodations to visa processing and 24/7 on-ground support. We serve businesses of all sizes, ensuring cost-effective, seamless travel experiences.
                </p>
                <p>
                    Through <strong>Endow Global Education</strong>, we connect students with world-class study abroad programs, scholarship opportunities, language training, and comprehensive support services. Our partnerships with 100+ international institutions open doors to academic excellence worldwide.
                </p>
                <p>
                    <strong>Endow Technologies</strong> delivers cutting-edge digital transformation services including custom software development, AI and automation integration, cloud infrastructure, and cybersecurity solutions. We help businesses modernize their operations and scale efficiently.
                </p>
                <p>
                    Our <strong>Hospital Tourism Division</strong> coordinates medical travel across a network of accredited hospitals in 30+ countries. From specialist consultations to post-care follow-up, we manage the entire healthcare journey for patients seeking world-class treatment abroad.
                </p>

                <h3 class="text-xl font-bold" style="color: var(--color-text-heading);">Our Global Presence</h3>
                <p>
                    With a headquarters in Seoul, South Korea, and operations spanning Asia, Europe, the Middle East, and the Americas, Endow Corporation combines deep local knowledge with international standards. Our multilingual team of 25+ professionals has successfully delivered 940+ projects for 810+ satisfied clients — maintaining a 98% satisfaction rate.
                </p>

                <h3 class="text-xl font-bold" style="color: var(--color-text-heading);">Our Commitment</h3>
                <p>
                    At Endow Corporation, we are driven by innovation, guided by integrity, and committed to excellence. Every solution we deliver is tailored to our clients' unique needs — because we believe that true success lies in understanding challenges and crafting strategies that create lasting impact. Let's build something extraordinary together.
                </p>
            </div>
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
                    <input type="hidden" name="page" value="about">
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
