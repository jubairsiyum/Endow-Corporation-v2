@extends('layouts.app')

@section('title', 'Endow Corporation – Empowering Businesses Globally')
@section('meta_title', 'Endow Corporation – Empowering Businesses Globally')
@section('meta_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions. Empowering businesses worldwide with innovative consulting services.')

@section('content')

{{-- ============================================ --}}
{{-- HERO SECTION --}}
{{-- ============================================ --}}
<section class="relative min-h-screen flex items-center overflow-hidden gradient-hero">
    {{-- Animated blobs --}}
    <div class="absolute top-20 right-20 w-72 h-72 rounded-full floating opacity-40" style="background: radial-gradient(circle, rgba(255,41,87,0.2) 0%, transparent 70%); filter: blur(40px);"></div>
    <div class="absolute bottom-32 left-10 w-96 h-96 rounded-full float-delayed opacity-30" style="background: radial-gradient(circle, rgba(124,92,252,0.15) 0%, transparent 70%); filter: blur(60px);"></div>
    <div class="absolute top-1/3 right-1/3 w-64 h-64 rounded-full opacity-20" style="background: radial-gradient(circle, rgba(59,130,246,0.2) 0%, transparent 70%); filter: blur(50px); animation: floating 8s ease-in-out infinite; animation-delay: -2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Left: Content --}}
            <div>
                {{-- Badge --}}
                <div data-animate class="inline-flex items-center gap-2 px-4 py-2 rounded-full mb-8"
                     style="background: rgba(255,41,87,0.08); border: 1px solid rgba(255,41,87,0.15);">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-sm font-semibold" style="color: var(--color-primary);">Empowering Businesses Since 2017</span>
                </div>

                <h1 data-animate class="text-5xl sm:text-6xl lg:text-7xl font-bold text-dark leading-none mb-6" style="letter-spacing: -0.04em;">
                    Empowering
                    <span class="text-gradient">Businesses</span>
                    Globally
                </h1>

                <p data-animate class="text-lg text-text-secondary leading-relaxed max-w-lg mb-10 text-balance">
                    Explore excellence in travel, education, technology, and healthcare solutions. We help businesses connect, grow, and succeed worldwide.
                </p>

                <div data-animate class="flex flex-wrap items-center gap-4 mb-12">
                    <a href="{{ route('consulting') }}" class="btn-primary text-base py-4 px-8">
                        Get Consulting
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="{{ route('about') }}" class="btn-secondary text-base py-4 px-8">
                        Learn More
                    </a>
                </div>

                {{-- Floating stat cards --}}
                <div data-animate class="flex flex-wrap gap-4">
                    <div class="stat-card flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, rgba(255,41,87,0.1), rgba(255,41,87,0.05));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FF2957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-dark text-lg leading-none animate-counter" data-target="810">0</p>
                            <p class="text-xs text-text-muted mt-0.5">Happy Clients</p>
                        </div>
                    </div>
                    <div class="stat-card flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, rgba(124,92,252,0.1), rgba(124,92,252,0.05));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7C5CFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-dark text-lg leading-none animate-counter" data-target="7">0</p>
                            <p class="text-xs text-text-muted mt-0.5">Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Dashboard Mockup --}}
            <div data-animate class="relative hidden lg:block" style="animation-delay: 0.2s;">
                {{-- Main mockup card --}}
                <div class="relative rounded-3xl p-1" style="background: linear-gradient(135deg, rgba(255,41,87,0.2), rgba(124,92,252,0.2), rgba(59,130,246,0.15));">
                    <div class="rounded-3xl bg-white p-6 shadow-2xl" style="box-shadow: 0 32px 64px -16px rgba(0,0,0,0.12);">
                        {{-- Mockup header --}}
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            <div class="flex-1 h-8 rounded-full bg-gray-100 ml-4 flex items-center px-4">
                                <span class="text-xs text-text-muted">endowcorporation.com</span>
                            </div>
                        </div>
                        {{-- Mockup content --}}
                        <div class="grid grid-cols-3 gap-4 mb-4">
                            @foreach([
                                ['icon' => 'plane', 'label' => 'Travel', 'color' => '#FF2957', 'value' => '240+'],
                                ['icon' => 'graduation-cap', 'label' => 'Education', 'color' => '#7C5CFC', 'value' => '180+'],
                                ['icon' => 'cpu', 'label' => 'Technology', 'color' => '#3b82f6', 'value' => '320+'],
                            ] as $card)
                                <div class="p-4 rounded-2xl" style="background: {{ $card['color'] }}08; border: 1px solid {{ $card['color'] }}15;">
                                    <div class="w-8 h-8 rounded-lg flex items-center justify-center mb-3" style="background: {{ $card['color'] }}15;">
                                        <i data-lucide="{{ $card['icon'] }}" style="width: 16px; height: 16px; color: {{ $card['color'] }};"></i>
                                    </div>
                                    <p class="text-xs text-text-muted">{{ $card['label'] }}</p>
                                    <p class="font-bold text-dark text-lg">{{ $card['value'] }}</p>
                                    <p class="text-xs text-text-muted">Projects</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="h-32 rounded-2xl" style="background: linear-gradient(135deg, rgba(255,41,87,0.06) 0%, rgba(124,92,252,0.06) 50%, rgba(59,130,246,0.04) 100%);">
                            <div class="flex items-end h-full p-4 gap-2">
                                @foreach([60, 45, 75, 55, 85, 65, 90, 50, 70, 80, 60, 95] as $i => $h)
                                    <div class="flex-1 rounded-t-md transition-all duration-500"
                                         style="height: {{ $h }}%; background: linear-gradient(to top, rgba(255,41,87,0.3), rgba(124,92,252,0.3)); animation-delay: {{ $i * 0.05 }}s;"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Floating badge 1 --}}
                <div class="absolute -top-4 -left-6 glass-card px-4 py-3 floating" style="animation-delay: 0s;">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center" style="background: linear-gradient(135deg, #10b981, #059669);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-dark">940+</p>
                            <p class="text-xs text-text-muted">Projects Done</p>
                        </div>
                    </div>
                </div>

                {{-- Floating badge 2 --}}
                <div class="absolute -bottom-4 -right-6 glass-card px-4 py-3 float-delayed" style="animation-delay: -1.5s;">
                    <div class="flex items-center gap-2">
                        <div class="flex -space-x-1.5">
                            @foreach(['#FF2957', '#7C5CFC', '#3b82f6'] as $color)
                                <div class="w-7 h-7 rounded-full border-2 border-white flex items-center justify-center" style="background: {{ $color }};">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                </div>
                            @endforeach
                        </div>
                        <div>
                            <p class="text-xs font-bold text-dark">30+</p>
                            <p class="text-xs text-text-muted">Countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TRUST BAR --}}
{{-- ============================================ --}}
<section class="py-12 border-b border-border-light bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p data-animate class="text-center text-xs font-bold uppercase tracking-widest text-text-muted mb-8">Trusted by businesses across <span class="text-gradient">30+ countries</span></p>
        <div data-animate class="flex flex-wrap items-center justify-center gap-10 md:gap-16 opacity-40">
            @foreach(['Travel', 'Education', 'Technology', 'Healthcare', 'Consulting'] as $i => $industry)
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center" style="background: var(--color-surface-alt);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <span class="text-sm font-semibold text-dark">{{ $industry }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- FEATURES SECTION --}}
{{-- ============================================ --}}
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Features</span>
            <h2 class="section-heading mb-4">Why Choose <span class="text-gradient">Endow Corporation?</span></h2>
            <p class="section-subheading mx-auto text-balance">We deliver world-class solutions that drive real results for businesses worldwide.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" data-animate>
            @foreach([
                ['icon' => 'globe', 'title' => 'Global Expertise', 'description' => 'Delivering world-class solutions across 30+ countries with deep local knowledge and international standards.', 'color' => '#FF2957'],
                ['icon' => 'target', 'title' => 'Innovative Approach', 'description' => 'Revolutionizing how businesses operate with cutting-edge strategies, modern tools, and data-driven insights.', 'color' => '#7C5CFC'],
                ['icon' => 'heart', 'title' => 'Customer-Centric', 'description' => 'Building lasting partnerships focused on your success with dedicated support and measurable outcomes.', 'color' => '#3b82f6'],
            ] as $index => $feature)
                <div class="bento-card group" style="animation-delay: {{ $index * 0.1 }}s" data-animate>
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110"
                         style="background: {{ $feature['color'] }}10;">
                        <i data-lucide="{{ $feature['icon'] }}" style="width: 24px; height: 24px; color: {{ $feature['color'] }};"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text-secondary);">{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- ABOUT SECTION --}}
{{-- ============================================ --}}
<section class="py-24 md:py-32 gradient-mesh">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Left: Content --}}
            <div data-animate>
                <span class="section-label">About Us</span>
                <h2 class="section-heading mb-6">A Legacy of <span class="text-gradient">Excellence</span></h2>
                <p class="text-text-secondary leading-relaxed mb-8 text-balance">
                    With a passion for innovation and a commitment to excellence, Endow Corporation is a global leader in Travel, Education, Technology, and Healthcare solutions.
                </p>

                <div class="grid grid-cols-2 gap-4 mb-8">
                    @foreach([
                        ['icon' => 'zap', 'label' => 'Innovation'],
                        ['icon' => 'award', 'label' => 'Excellence'],
                        ['icon' => 'globe', 'label' => 'Global Reach'],
                        ['icon' => 'heart', 'label' => 'Customer Focus'],
                        ['icon' => 'leaf', 'label' => 'Sustainability'],
                        ['icon' => 'star', 'label' => 'Expertise'],
                    ] as $point)
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(255,41,87,0.08);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#FF2957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <span class="text-sm font-medium text-dark">{{ $point['label'] }}</span>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('about') }}" class="btn-primary">
                    Learn More About Us
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Right: Visual --}}
            <div data-animate class="relative" style="animation-delay: 0.15s;">
                <div class="rounded-3xl p-1" style="background: linear-gradient(135deg, rgba(255,41,87,0.15), rgba(124,92,252,0.15));">
                    <div class="rounded-3xl bg-white p-8 shadow-2xl" style="box-shadow: 0 32px 64px -16px rgba(0,0,0,0.1);">
                        {{-- Achievement cards --}}
                        <div class="grid grid-cols-2 gap-4">
                            @foreach([
                                ['value' => '7+', 'label' => 'Years', 'icon' => 'calendar', 'color' => '#FF2957'],
                                ['value' => '25+', 'label' => 'Team', 'icon' => 'users', 'color' => '#7C5CFC'],
                                ['value' => '940+', 'label' => 'Projects', 'icon' => 'briefcase', 'color' => '#3b82f6'],
                                ['value' => '810+', 'label' => 'Clients', 'icon' => 'smile', 'color' => '#10b981'],
                            ] as $stat)
                                <div class="p-5 rounded-2xl text-center" style="background: {{ $stat['color'] }}06; border: 1px solid {{ $stat['color'] }}10;">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mx-auto mb-3" style="background: {{ $stat['color'] }}12;">
                                        <i data-lucide="{{ $stat['icon'] }}" style="width: 18px; height: 18px; color: {{ $stat['color'] }};"></i>
                                    </div>
                                    <p class="text-2xl font-bold text-dark">{{ $stat['value'] }}</p>
                                    <p class="text-xs text-text-muted mt-1">{{ $stat['label'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Floating badge --}}
                <div class="absolute -bottom-4 -left-4 glass-card px-4 py-3 floating">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center" style="background: linear-gradient(135deg, #FF2957, #7C5CFC);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-dark">Award Winning</p>
                            <p class="text-xs text-text-muted">Service Quality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- DIVISIONS SECTION --}}
{{-- ============================================ --}}
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Our Divisions</span>
            <h2 class="section-heading mb-4">Explore Our <span class="text-gradient">Divisions</span></h2>
            <p class="section-subheading mx-auto text-balance">Four specialized divisions delivering excellence across the globe.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6" data-animate>
            @php
                $divisions = [
                    [
                        'route' => 'travel',
                        'name' => 'Endow Travel',
                        'description' => 'Tailored travel solutions for businesses and individuals. From personalized itineraries to exclusive corporate travel management.',
                        'icon' => 'plane',
                        'color' => '#FF2957',
                        'tags' => ['Corporate Travel', 'Leisure', 'Visa Assistance'],
                    ],
                    [
                        'route' => 'education',
                        'name' => 'Global Education',
                        'description' => 'Transforming education through world-class programs, scholarship guidance, and international student support services.',
                        'icon' => 'graduation-cap',
                        'color' => '#7C5CFC',
                        'tags' => ['Study Abroad', 'Scholarships', 'Language Training'],
                    ],
                    [
                        'route' => 'technology',
                        'name' => 'Technologies',
                        'description' => 'Cutting-edge technological solutions including AI, cloud computing, custom development, and digital transformation.',
                        'icon' => 'cpu',
                        'color' => '#3b82f6',
                        'tags' => ['AI & Automation', 'Cloud', 'Custom Software'],
                    ],
                    [
                        'route' => 'hospital-tourism',
                        'name' => 'Hospital Tourism',
                        'description' => 'Access world-class medical facilities across 30+ countries with comprehensive healthcare travel coordination.',
                        'icon' => 'heart-pulse',
                        'color' => '#10b981',
                        'tags' => ['Medical Travel', '30+ Countries', 'Expert Care'],
                    ],
                ];
            @endphp

            @foreach($divisions as $index => $division)
                <a href="{{ route('division.show', $division['route']) }}"
                   class="group bento-card relative overflow-hidden p-8 transition-all duration-400"
                   style="animation-delay: {{ $index * 0.1 }}s;"
                   data-animate>
                    <div class="relative z-10">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center transition-transform duration-300 group-hover:scale-110"
                                 style="background: {{ $division['color'] }}10;">
                                <i data-lucide="{{ $division['icon'] }}" style="width: 24px; height: 24px; color: {{ $division['color'] }};"></i>
                            </div>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300"
                                 style="background: {{ $division['color'] }}10;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="{{ $division['color'] }}" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-2">{{ $division['name'] }}</h3>
                        <p class="text-sm leading-relaxed mb-5" style="color: var(--color-text-secondary);">{{ $division['description'] }}</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach($division['tags'] as $tag)
                                <span class="px-3 py-1 rounded-full text-xs font-medium" style="background: {{ $division['color'] }}08; color: {{ $division['color'] }};">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CTA SECTION --}}
{{-- ============================================ --}}
<section class="py-24 md:py-32 relative overflow-hidden" style="background: linear-gradient(135deg, #0F172A 0%, #1a1040 50%, #0F172A 100%);">
    <div class="absolute top-0 left-1/3 w-96 h-96 rounded-full opacity-30" style="background: radial-gradient(circle, rgba(255,41,87,0.3) 0%, transparent 70%); filter: blur(80px);"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 rounded-full opacity-20" style="background: radial-gradient(circle, rgba(124,92,252,0.3) 0%, transparent 70%); filter: blur(80px);"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-animate>
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight" style="letter-spacing: -0.03em;">
            Let's Discuss How We Can<br>Help You <span class="text-gradient">Succeed!</span>
        </h2>
        <p class="text-white/60 text-lg leading-relaxed mb-10 max-w-2xl mx-auto text-balance">
            At Endow Corporation, we're dedicated to transforming your vision into reality. Whether you're looking for tailored solutions in Travel, Education, Technology, or Healthcare, our team is ready to guide you.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('consulting') }}" class="btn-primary text-base py-4 px-8">
                Get a Personalized Quote
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-7 py-4 text-white/70 font-semibold rounded-full border border-white/15 hover:bg-white/5 hover:text-white transition-all duration-300">
                Contact Us
            </a>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TESTIMONIALS --}}
{{-- ============================================ --}}
<section class="py-24 md:py-32 gradient-mesh">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Testimonials</span>
            <h2 class="section-heading mb-4">What Our Clients <span class="text-gradient">Say</span></h2>
            <p class="section-subheading mx-auto">Real feedback from businesses we've helped succeed.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6" data-animate>
            @foreach([
                [
                    'text' => 'Endow Travel made our business trips effortless! Their attention to detail and personalized service ensured every journey was smooth and productive.',
                    'name' => 'Corporate Client',
                    'role' => 'Travel Division',
                    'color' => '#FF2957',
                    'icon' => 'plane',
                ],
                [
                    'text' => 'With Endow Global Education, I gained access to programs that completely transformed my career. Their support helped me achieve my goals faster than I imagined.',
                    'name' => 'Education Client',
                    'role' => 'Education Division',
                    'color' => '#7C5CFC',
                    'icon' => 'graduation-cap',
                ],
                [
                    'text' => 'Endow Technologies delivered cutting-edge solutions that revolutionized our operations. Their team truly understands the needs of modern businesses.',
                    'name' => 'Tech Client',
                    'role' => 'Technology Division',
                    'color' => '#3b82f6',
                    'icon' => 'cpu',
                ],
            ] as $index => $testimonial)
                <div class="testimonial-card" style="animation-delay: {{ $index * 0.1 }}s" data-animate>
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24" stroke="#fbbf24" stroke-width="1"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        @endfor
                    </div>
                    <p class="text-sm leading-relaxed mb-6" style="color: var(--color-text-secondary);">"{{ $testimonial['text'] }}"</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background: {{ $testimonial['color'] }}12;">
                            <i data-lucide="{{ $testimonial['icon'] }}" style="width: 16px; height: 16px; color: {{ $testimonial['color'] }};"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-dark">{{ $testimonial['name'] }}</p>
                            <p class="text-xs text-text-muted">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- FAQ SECTION --}}
{{-- ============================================ --}}
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">FAQs</span>
            <h2 class="section-heading mb-4">Frequently Asked <span class="text-gradient">Questions</span></h2>
            <p class="section-subheading mx-auto">Everything you need to know about our services.</p>
        </div>

        <div class="space-y-3" data-animate>
            @foreach([
                ['q' => 'What services does Endow Corporation provide?', 'a' => 'We specialize in four core areas: Travel, Education, Technology, and Hospital Tourism. From providing tailored travel solutions to offering cutting-edge technology and educational consulting, we help businesses and individuals achieve their goals.'],
                ['q' => 'What kind of travel solutions do you offer?', 'a' => 'We provide personalized travel planning for individuals, corporate travel solutions, and assistance with international travel arrangements including visa processing and itinerary management.'],
                ['q' => 'Do you handle business travel for organizations?', 'a' => 'Yes, we specialize in creating cost-effective and efficient travel plans for businesses, including flights, accommodations, and full itinerary management with dedicated support.'],
                ['q' => 'How can Endow Corporation help with education needs?', 'a' => 'We offer innovative educational tools, resources, and consulting services for institutions, teachers, and students to enhance learning experiences, including study abroad programs and scholarship guidance.'],
                ['q' => 'Do you work with international education systems?', 'a' => 'Yes, we provide solutions tailored to global education standards and assist with international education programs across multiple countries and academic frameworks.'],
            ] as $index => $faq)
                <div class="accordion-item {{ $index === 0 ? 'active' : '' }}">
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                        <span class="text-sm font-semibold text-dark pr-4">{{ $faq['q'] }}</span>
                        <svg class="faq-chevron w-5 h-5 flex-shrink-0 transition-transform duration-300 {{ $index === 0 ? 'rotate-180' : '' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <div class="faq-content {{ $index === 0 ? '' : 'hidden' }}">
                        <div class="px-6 pb-6">
                            <p class="text-sm leading-relaxed" style="color: var(--color-text-secondary);">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- APPOINTMENT FORM --}}
{{-- ============================================ --}}
<section class="py-24 md:py-32 gradient-mesh" id="appointment">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Left: Info --}}
            <div data-animate>
                <span class="section-label">Book Now</span>
                <h2 class="section-heading mb-6">Book an <span class="text-gradient">Appointment</span></h2>
                <p class="text-text-secondary leading-relaxed mb-10 text-balance">
                    Ready to take the next step? Let's connect! Whether you're looking for expert consulting in Travel, Education, Technology, or Healthcare, our team is here to help.
                </p>

                <div class="space-y-5">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(255,41,87,0.1), rgba(255,41,87,0.05));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FF2957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-text-muted mb-0.5">Call us</p>
                            <a href="tel:0226322559" class="font-semibold text-dark hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(124,92,252,0.1), rgba(124,92,252,0.05));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7C5CFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-text-muted mb-0.5">Email us</p>
                            <a href="mailto:contact@endowcorporation.com" class="font-semibold text-dark hover:text-primary transition-colors">contact@endowcorporation.com</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(59,130,246,0.1), rgba(59,130,246,0.05));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-text-muted mb-0.5">Business hours</p>
                            <p class="font-semibold text-dark">Sat – Thu, 8:00am – 6:00pm</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
            <div data-animate style="animation-delay: 0.15s;">
                <div class="glass-card p-8 md:p-10">
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-2xl flex items-center gap-3" style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.15);">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(16,185,129,0.15);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('appointment.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <input type="hidden" name="page" value="{{ request()->route()->getName() }}">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-dark mb-2">Name *</label>
                                <input type="text" id="name" name="name" placeholder="John Smith" required value="{{ old('name') }}" class="input-field">
                                @error('name') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="service_type" class="block text-sm font-semibold text-dark mb-2">Service Type</label>
                                <select id="service_type" name="service_type" class="input-field">
                                    <option value="">Select...</option>
                                    <option value="Travel Services" {{ old('service_type') === 'Travel Services' ? 'selected' : '' }}>Travel Services</option>
                                    <option value="Education Services" {{ old('service_type') === 'Education Services' ? 'selected' : '' }}>Education Services</option>
                                    <option value="Technology Services" {{ old('service_type') === 'Technology Services' ? 'selected' : '' }}>Technology Services</option>
                                    <option value="Hospital Tourism" {{ old('service_type') === 'Hospital Tourism' ? 'selected' : '' }}>Hospital Tourism</option>
                                </select>
                                @error('service_type') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-sm font-semibold text-dark mb-2">Email *</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                                @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-dark mb-2">Phone *</label>
                                <input type="tel" id="phone" name="phone" placeholder="+880" required value="{{ old('phone') }}" class="input-field">
                                @error('phone') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-dark mb-2">Message (Optional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your needs..." class="input-field resize-none">{{ old('message') }}</textarea>
                            @error('message') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                        </div>
                        <button type="submit" class="btn-primary w-full py-4 text-base">
                            Submit Request
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
