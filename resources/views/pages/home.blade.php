@extends('layouts.app')

@section('title', 'Endow Corporation – Empowering Businesses Globally')
@section('meta_title', 'Endow Corporation – Empowering Businesses Globally')
@section('meta_description', 'Endow Corporation is a global leader in travel, education, technology, and healthcare solutions.')

@section('content')

{{-- ============================================ --}}
{{-- HERO --}}
{{-- ============================================ --}}
<section class="px-[15px] mt-0">
    <div class="max-w-7xl mx-auto flex flex-wrap gap-[30px] min-h-[700px]">
        {{-- Left: Dark Content --}}
        <div class="w-full lg:w-[calc(50%-15px)] rounded-xl overflow-hidden relative flex flex-col justify-center p-12 lg:p-[70px]" style="background-color: var(--color-dark);">
            {{-- Decorative blur --}}
            <div class="absolute top-[5%] left-[5%] w-[350px] h-[350px] rounded-full opacity-20" style="background: var(--color-primary); filter: blur(65px);"></div>

            {{-- Subtitle --}}
            <div data-animate class="inline-flex items-center gap-2 mb-5 text-xs font-bold uppercase tracking-[1.4px] dashed-border-dark rounded px-3 py-1 w-fit" style="color: var(--color-primary); border-radius: 4px;">
                <i class="fa-solid fa-award"></i>
                Endow Corporation
            </div>

            {{-- Headline --}}
            <h1 data-animate class="text-white text-4xl md:text-5xl lg:text-[68px] font-medium leading-[1.135] mb-8" style="letter-spacing: -0.03em;">
                Empowering <span style="color: var(--color-primary);">Businesses</span> Globally!
            </h1>

            {{-- Dashed separator with arrow --}}
            <div data-animate class="flex items-center gap-6 dashed-border-dark rounded px-5 py-4">
                <p class="text-white/70 text-sm leading-relaxed flex-1">
                    Explore excellence in travel, education, technology, and healthcare solutions.
                </p>
                <a href="{{ route('consulting') }}" class="text-white text-4xl lg:text-[60px] transition-transform hover:translate-x-4" style="transform: rotate(-45deg); line-height: 1;">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        {{-- Right: Visual --}}
        <div class="w-full lg:w-[calc(50%-15px)] rounded-xl relative overflow-hidden" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
            {{-- Dashboard mockup --}}
            <div class="absolute inset-0 flex items-center justify-center p-8">
                <div class="w-full max-w-md bg-white rounded-xl p-6" style="box-shadow: 0 20px 60px rgba(0,0,0,0.08);">
                    <div class="flex items-center gap-2 mb-5">
                        <div class="w-3 h-3 rounded-full bg-red-400"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-green-400"></div>
                    </div>
                    <div class="grid grid-cols-3 gap-3 mb-4">
                        @foreach([
                            ['label' => 'Travel', 'value' => '240+', 'color' => '#FF2957'],
                            ['label' => 'Education', 'value' => '180+', 'color' => '#7C5CFC'],
                            ['label' => 'Technology', 'value' => '320+', 'color' => '#3b82f6'],
                        ] as $card)
                            <div class="p-3 rounded-lg" style="background: {{ $card['color'] }}08; border: 1px solid {{ $card['color'] }}15;">
                                <p class="text-xs" style="color: var(--color-text-muted);">{{ $card['label'] }}</p>
                                <p class="text-lg font-semibold" style="color: var(--color-text-heading);">{{ $card['value'] }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="h-28 rounded-lg flex items-end p-3 gap-1.5" style="background: linear-gradient(135deg, rgba(255,41,87,0.04), rgba(124,92,252,0.04));">
                        @foreach([55, 40, 70, 50, 80, 60, 85, 45, 65, 75, 55, 90] as $h)
                            <div class="flex-1 rounded-t" style="height: {{ $h }}%; background: linear-gradient(to top, rgba(255,41,87,0.25), rgba(124,92,252,0.25));"></div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Floating customer box --}}
            <div class="absolute bottom-8 left-8 right-8 bg-white rounded-xl p-5 flex items-center gap-4" style="box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                <div class="flex -space-x-2">
                    @foreach(['#FF2957', '#7C5CFC', '#3b82f6'] as $color)
                        <div class="w-10 h-10 rounded-full border-2 border-white flex items-center justify-center" style="background: {{ $color }};">
                            <i class="fa-solid fa-user text-white" style="font-size: 12px;"></i>
                        </div>
                    @endforeach
                </div>
                <div>
                    <p class="text-2xl font-semibold" style="color: var(--color-text-heading);">30K+</p>
                    <p class="text-xs" style="color: var(--color-text-muted);">Satisfied Clients Worldwide</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- SERVICES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle" style="color: var(--color-primary);">
                <i class="fa-solid fa-briefcase"></i>
                Our Services
            </div>
            <h2 class="section-heading">What We <span style="color: var(--color-primary);">Offer</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]">
            @foreach([
                ['icon' => 'fa-solid fa-plane-departure', 'title' => 'Endow Travel', 'description' => 'Tailored travel solutions for businesses and individuals. Personalized itineraries and exclusive deals.', 'route' => 'travel'],
                ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Global Education', 'description' => 'Transforming education through world-class programs, scholarship guidance, and student support.', 'route' => 'education'],
                ['icon' => 'fa-solid fa-microchip', 'title' => 'Technologies', 'description' => 'Cutting-edge tech solutions including AI, cloud computing, custom development, and digital transformation.', 'route' => 'technology'],
                ['icon' => 'fa-solid fa-heart-pulse', 'title' => 'Hospital Tourism', 'description' => 'Access world-class medical facilities across 30+ countries with comprehensive healthcare travel coordination.', 'route' => 'hospital-tourism'],
                ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Global Reach', 'description' => 'Operating across 30+ countries with deep local knowledge and international standards.', 'route' => 'about'],
                ['icon' => 'fa-solid fa-handshake', 'title' => 'Consulting', 'description' => 'Expert consulting services to help businesses grow, connect, and succeed in the global market.', 'route' => 'consulting'],
            ] as $index => $service)
                <div data-animate class="service-card" style="animation-delay: {{ $index * 0.1 }}s;">
                    <a href="{{ route('division.show', $service['route']) }}" class="block">
                        <div class="service-icon mb-6">
                            <i class="{{ $service['icon'] }}"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 transition-colors" style="color: var(--color-text-heading);" onmouseover="this.style.color='#FF2957'" onmouseout="this.style.color='var(--color-text-heading)'">{{ $service['title'] }}</h3>
                        <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $service['description'] }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- STATS BAR --}}
{{-- ============================================ --}}
<section class="px-[15px] -mt-[60px] relative z-10 mb-[60px]">
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
<section class="section-gap" style="background-color: #d8e5e5; border-radius: 12px; margin: 0 15px;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            {{-- Left: Visual --}}
            <div data-animate class="relative">
                <div class="rounded-xl overflow-hidden" style="box-shadow: 0 20px 60px rgba(0,0,0,0.1);">
                    <div class="bg-white p-6">
                        <div class="grid grid-cols-2 gap-4">
                            @foreach([
                                ['value' => '7+', 'label' => 'Years', 'icon' => 'fa-solid fa-calendar'],
                                ['value' => '25+', 'label' => 'Team', 'icon' => 'fa-solid fa-users'],
                                ['value' => '940+', 'label' => 'Projects', 'icon' => 'fa-solid fa-briefcase'],
                                ['value' => '810+', 'label' => 'Clients', 'icon' => 'fa-solid fa-face-smile'],
                            ] as $stat)
                                <div class="p-5 rounded-lg text-center" style="background: var(--color-section-alt);">
                                    <div class="w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-3" style="background: rgba(255,41,87,0.1);">
                                        <i class="{{ $stat['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                                    </div>
                                    <p class="text-2xl font-semibold" style="color: var(--color-text-heading);">{{ $stat['value'] }}</p>
                                    <p class="text-xs mt-1" style="color: var(--color-text-muted);">{{ $stat['label'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Content --}}
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-info-circle"></i>
                    About Us
                </div>
                <h2 class="section-heading">A Legacy of <span style="color: var(--color-primary);">Excellence</span></h2>
                <p class="text-base leading-relaxed mb-8" style="color: var(--color-text);">
                    With a passion for innovation and a commitment to excellence, Endow Corporation is a global leader in Travel, Education, Technology, and Healthcare solutions.
                </p>

                <div class="space-y-4 mb-8">
                    @foreach(['Innovation', 'Excellence', 'Global Reach', 'Customer Focus'] as $point)
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(255,41,87,0.1);">
                                <i class="fa-solid fa-check text-xs" style="color: var(--color-primary);"></i>
                            </div>
                            <span class="text-sm font-medium" style="color: var(--color-text-heading);">{{ $point }}</span>
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
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle" style="color: var(--color-primary);">
                <i class="fa-solid fa-building"></i>
                Our Divisions
            </div>
            <h2 class="section-heading">Explore Our <span style="color: var(--color-primary);">Divisions</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]">
            @php
                $divisions = [
                    ['route' => 'travel', 'name' => 'Endow Travel', 'desc' => 'Tailored travel solutions for businesses and individuals.', 'icon' => 'fa-solid fa-plane-departure', 'tags' => ['Corporate Travel', 'Leisure', 'Visa']],
                    ['route' => 'education', 'name' => 'Global Education', 'desc' => 'World-class educational programs and scholarship guidance.', 'icon' => 'fa-solid fa-graduation-cap', 'tags' => ['Study Abroad', 'Scholarships', 'Language']],
                    ['route' => 'technology', 'name' => 'Technologies', 'desc' => 'Cutting-edge tech solutions for digital transformation.', 'icon' => 'fa-solid fa-microchip', 'tags' => ['AI', 'Cloud', 'Software']],
                    ['route' => 'hospital-tourism', 'name' => 'Hospital Tourism', 'desc' => 'World-class healthcare travel across 30+ countries.', 'icon' => 'fa-solid fa-heart-pulse', 'tags' => ['Medical Travel', 'Expert Care', 'Global']],
                ];
            @endphp

            @foreach($divisions as $index => $div)
                <a href="{{ route('division.show', $div['route']) }}" data-animate class="service-card group flex flex-col" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="flex items-start justify-between mb-4">
                        <div class="service-icon">
                            <i class="{{ $div['icon'] }}"></i>
                        </div>
                        <i class="fa-solid fa-arrow-right text-lg transition-transform group-hover:translate-x-1" style="color: var(--color-primary);"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2" style="color: var(--color-text-heading);">{{ $div['name'] }}</h3>
                    <p class="text-sm leading-relaxed mb-4 flex-1" style="color: var(--color-text);">{{ $div['desc'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($div['tags'] as $tag)
                            <span class="px-3 py-1 rounded text-xs font-medium" style="background: rgba(255,41,87,0.06); color: var(--color-primary);">{{ $tag }}</span>
                        @endforeach
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TESTIMONIALS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #d8e5e5; border-radius: 12px; margin: 0 15px; overflow: hidden;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle" style="color: var(--color-primary);">
                <i class="fa-solid fa-quote-left"></i>
                Testimonials
            </div>
            <h2 class="section-heading">What Our Clients <span style="color: var(--color-primary);">Say</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px]">
            @foreach([
                ['text' => 'Endow Travel made our business trips effortless! Their attention to detail and personalized service ensured every journey was smooth and productive.', 'name' => 'Corporate Client', 'role' => 'Travel Division', 'icon' => 'fa-solid fa-plane-departure'],
                ['text' => 'With Endow Global Education, I gained access to programs that completely transformed my career. Their support helped me achieve my goals faster.', 'name' => 'Education Client', 'role' => 'Education Division', 'icon' => 'fa-solid fa-graduation-cap'],
                ['text' => 'Endow Technologies delivered cutting-edge solutions that revolutionized our operations. Their team truly understands modern businesses.', 'name' => 'Tech Client', 'role' => 'Technology Division', 'icon' => 'fa-solid fa-microchip'],
            ] as $index => $testimonial)
                <div data-animate class="testimonial-card {{ $index === 0 ? 'active' : '' }}">
                    <div class="mb-4" style="color: var(--color-primary); font-size: 36px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="text-base leading-relaxed mb-6" style="color: var(--color-text);">"{{ $testimonial['text'] }}"</p>
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fa-solid fa-star text-sm" style="color: #fbbf24;"></i>
                        @endfor
                    </div>
                    <div class="pt-6" style="border-top: 1px dashed var(--color-border-dashed);">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(255,41,87,0.08);">
                                    <i class="{{ $testimonial['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold" style="color: var(--color-text-heading);">{{ $testimonial['name'] }}</p>
                                    <p class="text-xs" style="color: var(--color-text-muted);">{{ $testimonial['role'] }}</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-quote-right text-3xl" style="color: rgba(255,41,87,0.1);"></i>
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
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle" style="color: var(--color-primary);">
                <i class="fa-solid fa-circle-question"></i>
                FAQs
            </div>
            <h2 class="section-heading">Frequently Asked <span style="color: var(--color-primary);">Questions</span></h2>
        </div>

        <div class="accordion" data-animate>
            @foreach([
                ['q' => 'What services does Endow Corporation provide?', 'a' => 'We specialize in four core areas: Travel, Education, Technology, and Hospital Tourism. From tailored travel solutions to cutting-edge technology and educational consulting, we help businesses and individuals achieve their goals.'],
                ['q' => 'What kind of travel solutions do you offer?', 'a' => 'We provide personalized travel planning for individuals, corporate travel solutions, and assistance with international travel arrangements including visa processing and itinerary management.'],
                ['q' => 'Do you handle business travel for organizations?', 'a' => 'Yes, we specialize in creating cost-effective and efficient travel plans for businesses, including flights, accommodations, and full itinerary management with dedicated 24/7 support.'],
                ['q' => 'How can Endow Corporation help with education needs?', 'a' => 'We offer innovative educational tools, resources, and consulting services for institutions, teachers, and students to enhance learning experiences, including study abroad programs and scholarship guidance.'],
                ['q' => 'Do you work with international education systems?', 'a' => 'Yes, we provide solutions tailored to global education standards and assist with international education programs across multiple countries and academic frameworks.'],
            ] as $index => $faq)
                <div class="accordion-item mb-5 rounded-lg overflow-hidden {{ $index === 0 ? 'active' : '' }}">
                    <button class="accordion-button w-full text-left flex items-center justify-between rounded-lg {{ $index !== 0 ? 'collapsed' : '' }}"
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
<section class="px-[15px]">
    <div class="stat-bar flex flex-wrap items-center" style="margin-bottom: 0; border-radius: 12px;">
        <div class="w-full lg:w-1/2 p-10 lg:p-14">
            <h2 data-animate class="text-3xl md:text-4xl lg:text-5xl font-medium text-white leading-tight mb-6" style="letter-spacing: -0.03em;">
                Let's Discuss How We Can Help You <span class="text-yellow-300">Succeed!</span>
            </h2>
            <p data-animate class="text-white/70 text-base leading-relaxed mb-8 max-w-lg">
                Whether you're looking for tailored solutions in Travel, Education, Technology, or Healthcare, our team is ready to guide you every step of the way.
            </p>
            <div data-animate class="flex flex-wrap gap-4">
                <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Get a Quote</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <a href="{{ route('contact') }}" class="btn-outline border-white/30 text-white hover:border-white">
                    Contact Us
                </a>
            </div>
        </div>
        <div class="w-full lg:w-1/2 hidden lg:block relative min-h-[400px]">
            <div class="absolute inset-0 flex items-center justify-center p-8">
                <div class="w-full max-w-sm bg-white/10 rounded-xl p-6 backdrop-blur-sm border border-white/10">
                    <div class="grid grid-cols-2 gap-3">
                        @foreach([
                            ['label' => 'Travel', 'value' => '240+', 'icon' => 'fa-solid fa-plane'],
                            ['label' => 'Education', 'value' => '180+', 'icon' => 'fa-solid fa-graduation-cap'],
                            ['label' => 'Technology', 'value' => '320+', 'icon' => 'fa-solid fa-microchip'],
                            ['label' => 'Healthcare', 'value' => '200+', 'icon' => 'fa-solid fa-heart-pulse'],
                        ] as $card)
                            <div class="p-3 rounded-lg text-center" style="background: rgba(255,255,255,0.08);">
                                <i class="{{ $card['icon'] }} text-lg mb-2" style="color: var(--color-primary);"></i>
                                <p class="text-xl font-semibold text-white">{{ $card['value'] }}</p>
                                <p class="text-xs text-white/50">{{ $card['label'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- APPOINTMENT FORM --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-dark); border-radius: 12px; margin: 60px 15px 0; position: relative; overflow: hidden;">
    {{-- Decorative --}}
    <div class="absolute top-0 left-0 w-[300px] h-[300px] opacity-10" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(60px);"></div>

    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {{-- Left: Info --}}
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-calendar-check"></i>
                    Book Now
                </div>
                <h2 class="section-heading text-white">Book an <span style="color: var(--color-primary);">Appointment</span></h2>
                <p class="text-white/60 text-base leading-relaxed mb-10">
                    Ready to take the next step? Let's connect! Whether you're looking for expert consulting in Travel, Education, Technology, or Healthcare, our team is here to help.
                </p>

                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background: rgba(255,41,87,0.15);">
                            <i class="fa-solid fa-phone text-sm" style="color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-0.5" style="color: #a9b8b8;">Call us</p>
                            <a href="tel:0226322559" class="text-white font-medium text-sm hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background: rgba(255,41,87,0.15);">
                            <i class="fa-regular fa-envelope text-sm" style="color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-0.5" style="color: #a9b8b8;">Email us</p>
                            <a href="mailto:contact@endowcorporation.com" class="text-white font-medium text-sm hover:text-primary transition-colors">contact@endowcorporation.com</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background: rgba(255,41,87,0.15);">
                            <i class="fa-regular fa-clock text-sm" style="color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider mb-0.5" style="color: #a9b8b8;">Business hours</p>
                            <p class="text-white font-medium text-sm">Sat – Thu, 8:00am – 6:00pm</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
            <div data-animate class="bg-white rounded-xl p-8 md:p-10" style="box-shadow: 0 20px 60px rgba(0,0,0,0.2);">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-lg flex items-center gap-3" style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.15);">
                        <i class="fa-solid fa-check-circle" style="color: #10b981;"></i>
                        <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="page" value="{{ request()->route()->getName() }}">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Name *</label>
                            <input type="text" id="name" name="name" placeholder="John Smith" required value="{{ old('name') }}" class="input-field">
                            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="service_type" class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Service Type</label>
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
                            <label for="email" class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Email *</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Phone *</label>
                            <input type="tel" id="phone" name="phone" placeholder="+880" required value="{{ old('phone') }}" class="input-field">
                            @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Message (Optional)</label>
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
