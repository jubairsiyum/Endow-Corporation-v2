@extends('layouts.app')

@section('title', 'Endow Travel | Corporate & Leisure Travel Solutions Worldwide')
@section('meta_title', 'Endow Travel | Corporate & Leisure Travel Solutions Worldwide')
@section('meta_description', 'Endow Travel offers tailored corporate and leisure travel solutions. Personalized itineraries, visa assistance, exclusive deals, and 24/7 support across 30+ countries. Based in Seoul, South Korea.')

@section('content')

{{-- ============================================ --}}
{{-- HERO — Modern Split Layout --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="background: #080808; min-height: 85vh; display: flex; align-items: center;">
    {{-- Background Layers --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, rgba(255,255,255,0.8) 1px, transparent 1px); background-size: 32px 32px;"></div>
        {{-- Large ambient orbs --}}
        <div class="absolute" style="top: -15%; right: -8%; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(212,32,44,0.12) 0%, transparent 70%); filter: blur(60px);"></div>
        <div class="absolute" style="bottom: -10%; left: -5%; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(245,158,11,0.08) 0%, transparent 70%); filter: blur(50px);"></div>
        {{-- Diagonal accent line --}}
        <div class="absolute top-0 right-0 w-px h-64 opacity-10" style="background: linear-gradient(to bottom, rgba(212,32,44,0.8), transparent); transform: rotate(25deg); transform-origin: top right;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-24 lg:py-32 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            {{-- LEFT: Content --}}
            <div class="lg:col-span-7">
                {{-- Breadcrumb --}}
                <nav class="mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center gap-2 text-[13px] px-4 py-2 rounded-full" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.06); color: rgba(255,255,255,0.4);">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><span class="mx-1 opacity-30">/</span></li>
                        <li class="text-white font-medium">Endow Travel</li>
                    </ol>
                </nav>

                {{-- Division Label --}}
                <div class="inline-flex items-center gap-2.5 mb-6 px-4 py-1.5 rounded-full text-[11px] font-bold uppercase tracking-[2.5px]" style="background: rgba(212,32,44,0.12); color: #e83542; border: 1px solid rgba(212,32,44,0.2); letter-spacing: 0.12em;">
                    <span class="w-1.5 h-1.5 rounded-full" style="background: #e83542;"></span>
                    Endow Travel
                </div>

                {{-- Heading --}}
                <h1 class="text-[42px] sm:text-[52px] lg:text-[64px] font-extrabold text-white leading-[1.05] tracking-tight mb-6" style="letter-spacing: -0.035em;">
                    Where the<br>
                    <span style="background: linear-gradient(135deg, #e83542 0%, #f59e0b 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Journey Begins</span>
                </h1>

                {{-- Description --}}
                <p class="text-base sm:text-lg leading-relaxed max-w-xl mb-10" style="color: rgba(255,255,255,0.45); line-height: 1.75;">
                    From corporate travel management to dream vacations, Endow Travel delivers personalized itineraries, exclusive deals, and dedicated support across 30+ countries. Every journey starts with a conversation.
                </p>

                {{-- Inline Stats --}}
                <div class="flex flex-wrap items-center gap-6 sm:gap-10 mb-10">
                    @foreach([
                        ['value' => '30+', 'label' => 'Countries'],
                        ['value' => '500+', 'label' => 'Trips Organized'],
                        ['value' => '200+', 'label' => 'Corporate Clients'],
                    ] as $stat)
                        <div class="text-center sm:text-left">
                            <div class="text-[28px] sm:text-[34px] font-extrabold text-white tracking-tight" style="letter-spacing: -0.03em; line-height: 1;">{{ $stat['value'] }}</div>
                            <div class="text-[11px] font-semibold uppercase tracking-[1.5px] mt-1" style="color: rgba(255,255,255,0.3);">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>

                {{-- CTA --}}
                <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Plan Your Journey</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>

            {{-- RIGHT: Visual Element --}}
            <div class="lg:col-span-5 hidden lg:flex items-center justify-center relative">
                {{-- Floating decorative card --}}
                <div class="relative w-[320px] h-[380px]">
                    {{-- Glass card 1 --}}
                    <div class="absolute top-0 right-0 w-[260px] h-[300px] rounded-3xl overflow-hidden shadow-2xl transform rotate-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); backdrop-filter: blur(10px);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4" style="background: rgba(212,32,44,0.15); border: 1px solid rgba(212,32,44,0.25);">
                                    <i class="fa-solid fa-plane-departure text-3xl" style="color: #e83542;"></i>
                                </div>
                                <div class="w-32 h-1 rounded-full mx-auto mb-3 opacity-20" style="background: white;"></div>
                                <div class="w-24 h-1 rounded-full mx-auto mb-3 opacity-10" style="background: white;"></div>
                                <div class="w-16 h-1 rounded-full mx-auto opacity-10" style="background: white;"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Glass card 2 (offset) --}}
                    <div class="absolute bottom-0 left-0 w-[200px] h-[240px] rounded-3xl overflow-hidden shadow-xl transform -rotate-6" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fa-solid fa-earth-americas text-5xl opacity-10" style="color: white;"></i>
                        </div>
                    </div>
                    {{-- Accent dot cluster --}}
                    <div class="absolute top-[20%] left-[10%] flex gap-1.5">
                        <span class="w-2 h-2 rounded-full" style="background: #e83542;"></span>
                        <span class="w-2 h-2 rounded-full opacity-40" style="background: #f59e0b;"></span>
                        <span class="w-2 h-2 rounded-full opacity-20" style="background: white;"></span>
                    </div>
                    <div class="absolute bottom-[25%] right-[5%] flex gap-1.5">
                        <span class="w-2 h-2 rounded-full opacity-30" style="background: white;"></span>
                        <span class="w-2 h-2 rounded-full" style="background: #e83542;"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- INTRO: Who We Are --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-compass"></i>
                    Who We Are
                </div>
                <h2 class="section-heading">Your Trusted Partner for <span class="gradient-text">Global Travel</span></h2>
                <div class="space-y-5">
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        Endow Travel is the flagship division of Endow Corporation, headquartered in Seoul, South Korea. Since 2018, we have been designing seamless travel experiences for individuals, families, and corporate clients across Asia, Europe, the Middle East, and the Americas.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        What sets us apart is our commitment to personalization. We do not offer cookie-cutter packages. Every itinerary is crafted around your preferences, schedule, and budget. From flight bookings and hotel reservations to visa processing and on-ground logistics, we handle every detail so you can focus on enjoying the journey.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        With a network spanning 30+ countries, partnerships with major airlines and hotel chains, and a team of dedicated travel consultants available around the clock, Endow Travel turns every trip into a memorable experience.
                    </p>
                </div>
            </div>

            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="height: 380px; min-height: 260px; box-shadow: 0 24px 64px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/services/travel-hero.jpg') }}"
                         alt="Endow Travel corporate and leisure travel solutions worldwide"
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
{{-- CORE SERVICES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f0f0f0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-suitcase"></i>
                What We Offer
            </div>
            <h2 class="section-heading">Comprehensive <span class="gradient-text">Travel Services</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                Everything you need for a smooth, worry-free journey, all under one roof.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7" data-animate>
            @php
                $services = [
                    [
                        'icon' => 'fa-solid fa-route',
                        'title' => 'Tailored Travel Plans',
                        'desc' => 'Custom itineraries designed around your interests, budget, and timeline. We handle flights, accommodations, transfers, and activities.',
                        'accent' => 'rgba(212,32,44,0.08)',
                        'accentBorder' => 'rgba(212,32,44,0.12)',
                        'iconColor' => '#D4202C',
                    ],
                    [
                        'icon' => 'fa-solid fa-building',
                        'title' => 'Corporate Travel Management',
                        'desc' => 'End-to-end business travel solutions including group bookings, expense optimization, priority check-ins, and detailed reporting.',
                        'accent' => 'rgba(245,158,11,0.08)',
                        'accentBorder' => 'rgba(245,158,11,0.15)',
                        'iconColor' => '#d97706',
                    ],
                    [
                        'icon' => 'fa-solid fa-tag',
                        'title' => 'Exclusive Deals & Discounts',
                        'desc' => 'Access negotiated rates on flights, hotels, and holiday packages through our extensive partner network across 30+ countries.',
                        'accent' => 'rgba(16,185,129,0.08)',
                        'accentBorder' => 'rgba(16,185,129,0.15)',
                        'iconColor' => '#059669',
                    ],
                    [
                        'icon' => 'fa-solid fa-passport',
                        'title' => 'Visa Assistance',
                        'desc' => 'Simplified visa processing with documentation review, application guidance, and embassy coordination for hassle-free approvals.',
                        'accent' => 'rgba(124,58,237,0.08)',
                        'accentBorder' => 'rgba(124,58,237,0.15)',
                        'iconColor' => '#7c3aed',
                    ],
                    [
                        'icon' => 'fa-solid fa-headset',
                        'title' => '24/7 Travel Support',
                        'desc' => 'Round-the-clock assistance from our dedicated team. Whether you need to reschedule or face an emergency, we are here for you.',
                        'accent' => 'rgba(59,130,246,0.08)',
                        'accentBorder' => 'rgba(59,130,246,0.15)',
                        'iconColor' => '#2563eb',
                    ],
                    [
                        'icon' => 'fa-solid fa-umbrella-beach',
                        'title' => 'Luxury & Leisure Tours',
                        'desc' => 'Curated premium experiences at handpicked destinations. Private tours, luxury resorts, and exclusive cultural immersions.',
                        'accent' => 'rgba(236,72,153,0.08)',
                        'accentBorder' => 'rgba(236,72,153,0.15)',
                        'iconColor' => '#db2777',
                    ],
                ];
            @endphp

            @foreach($services as $svc)
                <div class="rounded-2xl p-7 transition-all duration-300 hover:-translate-y-1" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                    <div class="w-[52px] h-[52px] rounded-[14px] flex items-center justify-center mb-5" style="background: {{ $svc['accent'] }}; border: 1px solid {{ $svc['accentBorder'] }};">
                        <i class="{{ $svc['icon'] }} text-xl" style="color: {{ $svc['iconColor'] }};"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $svc['title'] }}</h3>
                    <p class="text-sm leading-[1.75]" style="color: var(--color-text);">{{ $svc['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- WHY ENDOW TRAVEL --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="height: 380px; min-height: 260px; box-shadow: 0 24px 64px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/services/travel-why.jpg') }}"
                         alt="Why choose Endow Travel for your next journey"
                         class="w-full h-full object-cover"
                         loading="lazy"
                         width="800"
                         height="600">
                </div>
            </div>

            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-star"></i>
                    Why Endow Travel
                </div>
                <h2 class="section-heading">Six Reasons Clients <span class="gradient-text">Choose Us</span></h2>
                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'fa-solid fa-globe', 'title' => 'Global Network, Local Expertise', 'desc' => 'Operating across 30+ countries with deep knowledge of local cultures, regulations, and hidden gems.'],
                        ['icon' => 'fa-solid fa-pen-to-square', 'title' => 'Fully Personalized Itineraries', 'desc' => 'No two trips are alike. Every plan is built from scratch based on your preferences, pace, and purpose.'],
                        ['icon' => 'fa-solid fa-handshake', 'title' => 'Trusted Partner Network', 'desc' => 'Long-standing relationships with airlines, hotels, and ground operators mean better prices and priority service for our clients.'],
                        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Travel Protection & Peace of Mind', 'desc' => 'Comprehensive travel insurance options, real-time alerts, and contingency planning for every booking.'],
                        ['icon' => 'fa-solid fa-clock', 'title' => 'Time-Saving Convenience', 'desc' => 'From research and booking to changes and cancellations, we manage everything so you save hours of planning.'],
                        ['icon' => 'fa-solid fa-heart', 'title' => 'Genuine Care & Hospitality', 'desc' => 'Our team treats every client like family. We remember your preferences and go the extra mile to exceed expectations.'],
                    ] as $item)
                        <div class="flex items-start gap-4 p-5 rounded-xl transition-all duration-300 hover:shadow-md" style="background: white; border: 1px solid #E5E7EB;">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(212,32,44,0.1) 0%, rgba(212,32,44,0.02) 100%);">
                                <i class="{{ $item['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                            </div>
                            <div>
                                <h4 class="text-base font-bold mb-1" style="color: var(--color-text-heading);">{{ $item['title'] }}</h4>
                                <p class="text-sm" style="color: var(--color-text);">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- STATS --}}
{{-- ============================================ --}}
<section style="background: var(--color-dark); padding: 60px 0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" data-animate>
            @foreach([
                ['value' => '30+', 'label' => 'Countries Covered', 'icon' => 'fa-solid fa-earth-americas'],
                ['value' => '500+', 'label' => 'Trips Organized', 'icon' => 'fa-solid fa-plane'],
                ['value' => '200+', 'label' => 'Corporate Clients', 'icon' => 'fa-solid fa-building'],
                ['value' => '98%', 'label' => 'Client Satisfaction', 'icon' => 'fa-solid fa-face-smile'],
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
{{-- DESTINATIONS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f0f0f0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-map-location-dot"></i>
                Popular Destinations
            </div>
            <h2 class="section-heading">Where Would You Like to <span class="gradient-text">Explore?</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                From the vibrant streets of Seoul to the serene landscapes of Southeast Asia, we cover destinations that inspire.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5" data-animate>
            @php
                $destinations = [
                    ['name' => 'South Korea', 'icon' => 'fa-solid fa-landmark'],
                    ['name' => 'Japan', 'icon' => 'fa-solid fa-torii-gate'],
                    ['name' => 'Thailand', 'icon' => 'fa-solid fa-umbrella-beach'],
                    ['name' => 'Malaysia', 'icon' => 'fa-solid fa-building-columns'],
                    ['name' => 'Vietnam', 'icon' => 'fa-solid fa-mountain'],
                    ['name' => 'UAE / Dubai', 'icon' => 'fa-solid fa-city'],
                ];
            @endphp

            @foreach($destinations as $dest)
                <div class="rounded-2xl p-6 text-center transition-all duration-300 hover:-translate-y-1" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-3" style="background: rgba(212,32,44,0.06);">
                        <i class="{{ $dest['icon'] }} text-lg" style="color: var(--color-primary);"></i>
                    </div>
                    <h3 class="text-sm font-bold" style="color: var(--color-text-heading);">{{ $dest['name'] }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CTA --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="background: linear-gradient(160deg, #faf9f8 0%, #f3f1ef 40%, #f8f6f5 100%);">
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full opacity-[0.06]" style="background: radial-gradient(circle, var(--color-primary) 0%, transparent 70%);"></div>
    <div class="absolute -bottom-24 -left-24 w-[400px] h-[400px] rounded-full opacity-[0.04]" style="background: radial-gradient(circle, var(--color-primary-dark) 0%, transparent 70%);"></div>

    <div class="max-w-4xl mx-auto px-6 py-24 text-center relative z-10">
        <div data-animate class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            Let's Plan Your Trip
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
        </div>

        <h2 data-animate class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-6 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
            Ready to Start Your<br class="hidden sm:block"> Next <span class="gradient-text">Adventure?</span>
        </h2>

        <p data-animate class="text-base sm:text-lg max-w-xl mx-auto mb-10" style="color: var(--color-text); line-height: 1.7;">
            Whether it is a corporate trip, a family vacation, or a solo getaway, our travel specialists are ready to craft the perfect itinerary for you.
        </p>

        <div data-animate class="flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                <span class="btn-text"><span>Plan My Trip</span></span>
                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full text-sm font-semibold transition-all duration-300 hover:-translate-y-0.5" style="background: white; color: var(--color-text-heading); border: 1.5px solid var(--color-border); box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
                <i class="fa-regular fa-comment text-sm" style="color: var(--color-primary);"></i>
                Contact Us
            </a>
        </div>

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
                <span>24/7 Support</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>Visa Assistance</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- APPOINTMENT FORM --}}
{{-- ============================================ --}}
<section class="section-gap relative overflow-hidden" style="background: linear-gradient(180deg, #fefefe 0%, #f8f7f6 100%);">
    <div class="absolute inset-0 pointer-events-none opacity-[0.018]" style="background-image: radial-gradient(circle, #0a0a0a 1px, transparent 1px); background-size: 28px 28px;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16 lg:mb-20" data-animate>
            <div class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Book a Consultation
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-5 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
                Schedule Your <span class="gradient-text">Travel Planning</span> Session
            </h2>
            <p class="text-base max-w-lg mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">
                Tell us about your travel needs and our specialists will create a personalized plan tailored to your preferences and budget.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14">
            {{-- Left: Contact Info --}}
            <div data-animate class="lg:col-span-2 space-y-5">
                @php
                    $contactCards = [
                        ['icon' => 'fa-solid fa-phone', 'label' => 'Call Us', 'value' => '02-2632-2559', 'href' => 'tel:0226322559', 'sub' => 'Mon to Sat, 8am to 6pm KST'],
                        ['icon' => 'fa-regular fa-envelope', 'label' => 'Email Us', 'value' => 'travel@endowcorporation.com', 'href' => 'mailto:travel@endowcorporation.com', 'sub' => 'We reply within 24 hours'],
                        ['icon' => 'fa-solid fa-location-dot', 'label' => 'Visit Us', 'value' => 'Seoul, South Korea', 'href' => null, 'sub' => 'Serving travelers worldwide'],
                    ];
                @endphp

                @foreach($contactCards as $card)
                    <div class="group flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 hover:-translate-y-0.5" style="background: white; border: 1px solid var(--color-border); box-shadow: 0 1px 4px rgba(0,0,0,0.03);">
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.06);">
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

                <div class="mt-8 p-5 rounded-2xl flex items-center gap-4" style="background: linear-gradient(135deg, rgba(212,32,44,0.04) 0%, rgba(212,32,44,0.01) 100%); border: 1px dashed rgba(212,32,44,0.15);">
                    <div class="text-3xl font-extrabold tracking-tight" style="color: var(--color-primary);">7+</div>
                    <div>
                        <p class="text-sm font-semibold" style="color: var(--color-text-heading);">Years of Travel Expertise</p>
                        <p class="text-xs mt-0.5" style="color: var(--color-text-muted);">500+ successful trips organized</p>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
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
                        <input type="hidden" name="page" value="travel">

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
                                <label for="email" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Email Address <span style="color: var(--color-primary);">*</span></label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="phone" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+82 10 1234 5678" value="{{ old('phone') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                            </div>
                            <div>
                                <label for="service_type" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Travel Type</label>
                                <select id="service_type" name="service_type"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                    <option value="">Select travel type...</option>
                                    <option value="corporate">Corporate Travel</option>
                                    <option value="leisure">Leisure & Vacation</option>
                                    <option value="group">Group Tour</option>
                                    <option value="luxury">Luxury Travel</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Tell us about your travel needs <span style="color: var(--color-primary);">*</span></label>
                            <textarea id="message" name="message" rows="4" placeholder="Destinations you are interested in, preferred dates, number of travelers, budget range, or any special requirements..." required
                                class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none resize-none"
                                style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">{{ old('message') }}</textarea>
                            @error('message') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="btn-primary btn-primary-lg w-full sm:w-auto justify-center">
                            <span class="btn-text"><span>Submit Inquiry</span></span>
                            <span class="btn-icon"><i class="fa-solid fa-paper-plane"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
