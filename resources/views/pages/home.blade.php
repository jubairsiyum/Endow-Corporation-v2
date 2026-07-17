@extends('layouts.app')

@section('title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('meta_title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('meta_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions. Empowering businesses worldwide.')

@section('content')

{{-- ============================================ --}}
{{-- HERO — Single Column Centered --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden section-gap-hero" style="background: linear-gradient(160deg, #0a0a0a 0%, #1a0a0c 40%, #0a0a0a 100%); min-height: 92vh; display: flex; align-items: center;">
    {{-- Gradient orbs --}}
    <div class="absolute top-[10%] left-[5%] w-[600px] h-[600px] rounded-full opacity-15" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(100px);"></div>
    <div class="absolute bottom-[10%] right-[8%] w-[450px] h-[450px] rounded-full opacity-10" style="background: radial-gradient(circle, #ff6b6b, transparent 70%); filter: blur(80px);"></div>
    <div class="absolute top-[50%] left-[50%] w-[300px] h-[300px] rounded-full opacity-5" style="background: radial-gradient(circle, white, transparent 70%); filter: blur(60px); transform: translate(-50%, -50%);"></div>
    <div class="absolute inset-0 opacity-[0.025]" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="max-w-4xl mx-auto px-6 py-16 md:py-24 relative z-10 w-full text-center">
        {{-- Badge --}}
        <div class="animate-hero-1 inline-flex items-center gap-2.5 mb-8 text-[11px] font-bold uppercase tracking-[3px] px-5 py-2.5 rounded-full" style="color: var(--color-primary-light); border: 1px solid rgba(212,32,44,0.25); background: rgba(212,32,44,0.06);">
            <i class="fa-solid fa-bolt" style="font-size: 10px;"></i>
            Empowering Businesses Globally
        </div>

        {{-- Headline --}}
        <h1 class="animate-hero-2 text-white text-4xl md:text-5xl lg:text-[64px] font-bold leading-[1.05] mb-8" style="letter-spacing: -0.04em;">
            Navigating <span class="gradient-text">Knowledge,</span><br>Embracing Adventure
        </h1>

        {{-- Description --}}
        <p class="animate-hero-3 text-lg md:text-xl max-w-2xl mx-auto mb-12 leading-relaxed" style="color: rgba(255,255,255,0.5);">
            A global leader in Travel, Education, Technology, and Healthcare solutions. We connect businesses with excellence across 30+ countries.
        </p>

        {{-- CTAs --}}
        <div class="animate-hero-4 flex flex-wrap items-center justify-center gap-4 mb-16">
            <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                <span class="btn-text"><span>Get Consulting</span></span>
                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="{{ route('about') }}" class="btn-outline">
                Learn More
            </a>
        </div>

        {{-- Dashed divider --}}
        <div class="animate-hero-5 max-w-lg mx-auto dashed-border-dark rounded-xl px-8 py-5 flex items-center justify-between" style="background: rgba(255,255,255,0.03);">
            <div class="flex items-center gap-8 text-sm font-medium" style="color: rgba(255,255,255,0.5);">
                <span class="flex items-center gap-2"><i class="fa-solid fa-check" style="color: var(--color-primary);"></i> Travel</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-check" style="color: var(--color-primary);"></i> Education</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-check" style="color: var(--color-primary);"></i> Technology</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-check" style="color: var(--color-primary);"></i> Healthcare</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- SERVICES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[48px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-briefcase"></i>
                Our Services
            </div>
            <h2 class="section-heading">What We <span class="gradient-text">Offer</span></h2>
            <p class="text-base max-w-2xl mx-auto" style="color: var(--color-text);">Comprehensive solutions across four core divisions, delivering excellence worldwide.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['icon' => 'fa-solid fa-plane-departure', 'title' => 'Endow Travel', 'description' => 'Tailored travel solutions for businesses and individuals. Personalized itineraries and exclusive deals.', 'route' => 'travel'],
                ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Global Education', 'description' => 'Transforming education through world-class programs, scholarship guidance, and student support.', 'route' => 'education'],
                ['icon' => 'fa-solid fa-microchip', 'title' => 'Technologies', 'description' => 'Cutting-edge tech solutions including AI, cloud computing, custom development, and digital transformation.', 'route' => 'technology'],
                ['icon' => 'fa-solid fa-heart-pulse', 'title' => 'Hospital Tourism', 'description' => 'Access world-class medical facilities across 30+ countries with comprehensive healthcare travel coordination.', 'route' => 'hospital-tourism'],
                ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Global Reach', 'description' => 'Operating across 30+ countries with deep local knowledge and international standards.', 'route' => 'about'],
                ['icon' => 'fa-solid fa-handshake', 'title' => 'Consulting', 'description' => 'Expert consulting services to help businesses grow, connect, and succeed in the global market.', 'route' => 'consulting'],
            ] as $index => $service)
                <a href="{{ route('division.show', $service['route']) }}" data-animate class="service-card group block" style="animation-delay: {{ $index * 0.08 }}s;">
                    <div class="service-icon mb-5">
                        <i class="{{ $service['icon'] }}"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2 transition-colors" style="color: var(--color-text-heading);" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='var(--color-text-heading)'">{{ $service['title'] }}</h3>
                    <p class="text-sm leading-relaxed mb-5" style="color: var(--color-text);">{{ $service['description'] }}</p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold transition-all" style="color: var(--color-primary);">
                        Learn More <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                    </span>
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
                <div class="img-placeholder" style="height: 420px;">
                    <i class="fa-solid fa-building-columns text-5xl mb-3"></i>
                    <span>Endow Corporation Office</span>
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
