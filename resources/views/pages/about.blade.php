@extends('layouts.app')

@section('title', 'About Us – Endow Corporation')
@section('meta_title', 'About Us – Endow Corporation')
@section('meta_description', 'Learn about Endow Corporation - a global leader in travel, education, technology, and healthcare solutions.')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden gradient-hero">
    <div class="absolute top-20 right-20 w-72 h-72 rounded-full floating opacity-30" style="background: radial-gradient(circle, rgba(255,41,87,0.15) 0%, transparent 70%); filter: blur(40px);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <nav aria-label="Breadcrumb" class="mb-8">
            <ol class="flex items-center gap-2 text-sm" style="color: var(--color-text-muted);">
                <li><a href="{{ route('home') }}" class="hover:text-dark transition-colors">Home</a></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></li>
                <li class="text-dark font-medium">About Us</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-6xl font-bold text-dark" style="letter-spacing: -0.04em;">About Us</h1>
    </div>
</section>

{{-- Mission --}}
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16" data-animate>
            <span class="section-label">Our Mission</span>
            <p class="text-xl md:text-2xl text-text-secondary leading-relaxed text-balance">
                At Endow Corporation, we make innovation simple and excellence achievable. Through Endow Travel, Global Education, Technologies, and Hospital Tourism, we help businesses grow, connect, and succeed.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6" data-animate>
            @foreach([
                ['icon' => 'globe', 'title' => 'Global Reach', 'description' => 'Through Travel, Education, and Technology, we help businesses grow and thrive across 30+ countries.', 'color' => '#FF2957'],
                ['icon' => 'heart', 'title' => 'Meaningful Impact', 'description' => 'Committed to quality, we create meaningful connections and opportunities for lasting success.', 'color' => '#7C5CFC'],
            ] as $index => $point)
                <div class="bento-card p-8" style="animation-delay: {{ $index * 0.1 }}s" data-animate>
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6" style="background: {{ $point['color'] }}10;">
                        <i data-lucide="{{ $point['icon'] }}" style="width: 24px; height: 24px; color: {{ $point['color'] }};"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">{{ $point['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text-secondary);">{{ $point['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Divisions --}}
<section class="py-24 md:py-32 gradient-mesh">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Our Divisions</span>
            <h2 class="section-heading mb-4">Four Pillars of <span class="text-gradient">Excellence</span></h2>
            <p class="section-subheading mx-auto text-balance">Specialized divisions delivering world-class solutions across the globe.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6" data-animate>
            @foreach([
                ['route' => 'travel', 'icon' => 'plane', 'name' => 'Endow Travel', 'description' => 'Discover seamless travel solutions for business and leisure. Personalized itineraries to exclusive experiences.', 'color' => '#FF2957', 'link' => 'https://endowtravel.com/'],
                ['route' => 'education', 'icon' => 'graduation-cap', 'name' => 'Global Education', 'description' => 'Open doors to global opportunities through world-class educational programs and partnerships.', 'color' => '#7C5CFC', 'link' => 'https://endowglobaledu.com/'],
                ['route' => 'technology', 'icon' => 'cpu', 'name' => 'Technologies', 'description' => 'Innovative tech solutions that drive digital transformation, improve efficiency, and power your business.', 'color' => '#3b82f6', 'link' => 'https://endowtech.net/'],
                ['route' => 'hospital-tourism', 'icon' => 'heart-pulse', 'name' => 'Hospital Tourism', 'description' => 'Access world-class medical facilities across 30+ countries with comprehensive healthcare travel coordination.', 'color' => '#10b981'],
            ] as $index => $division)
                <div class="bento-card group p-8" style="animation-delay: {{ $index * 0.1 }}s" data-animate>
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110" style="background: {{ $division['color'] }}10;">
                        <i data-lucide="{{ $division['icon'] }}" style="width: 24px; height: 24px; color: {{ $division['color'] }};"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">{{ $division['name'] }}</h3>
                    <p class="text-sm leading-relaxed mb-5" style="color: var(--color-text-secondary);">{{ $division['description'] }}</p>
                    <a href="{{ isset($division['link']) ? $division['link'] : route('division.show', $division['route']) }}" {{ isset($division['link']) ? 'target="_blank" rel="noopener noreferrer"' : '' }} class="inline-flex items-center gap-2 text-sm font-semibold transition-all duration-300" style="color: {{ $division['color'] }};">
                        {{ isset($division['link']) ? 'Visit Site' : 'Learn More' }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-hover:translate-x-1"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Testimonials</span>
            <h2 class="section-heading mb-4">What Our Clients <span class="text-gradient">Say</span></h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6" data-animate>
            @foreach([
                ['text' => 'Endow Travel made our business trips effortless! Their attention to detail ensured every journey was smooth and productive.', 'division' => 'Travel', 'icon' => 'plane', 'color' => '#FF2957'],
                ['text' => 'With Endow Global Education, I gained access to programs that completely transformed my career. Their support helped me achieve my goals.', 'division' => 'Education', 'icon' => 'graduation-cap', 'color' => '#7C5CFC'],
                ['text' => 'Endow Technologies delivered cutting-edge solutions that revolutionized our operations. Their team truly understands modern businesses.', 'division' => 'Technology', 'icon' => 'cpu', 'color' => '#3b82f6'],
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
                            <p class="text-sm font-bold text-dark">Client</p>
                            <p class="text-xs text-text-muted">{{ $testimonial['division'] }} Division</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Team --}}
<section class="py-24 md:py-32 gradient-mesh">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Team</span>
            <h2 class="section-heading mb-4">Meet Our <span class="text-gradient">Experts</span></h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6" data-animate>
            @foreach(['CEO', 'Strategic Director', 'Senior Consultant'] as $index => $role)
                <div class="bento-card text-center p-8" style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="w-20 h-20 mx-auto mb-5 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, rgba(255,41,87,0.1), rgba(124,92,252,0.1));">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="color: var(--color-text-muted);"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <h3 class="font-bold text-dark mb-1">{{ $role }}</h3>
                    <p class="text-sm text-text-muted">Endow Corporation</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
