@extends('layouts.app')

@section('title', 'About Us – Endow Corporation')
@section('meta_title', 'About Us – Endow Corporation')
@section('meta_description', 'Learn about Endow Corporation - a global leader in travel, education, technology, and healthcare solutions.')

@section('content')

{{-- Hero --}}
<section class="relative min-h-[40vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
        <nav aria-label="Breadcrumb" class="mb-6">
            <ol class="flex items-center gap-2 text-sm text-white/50">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-white">About Us</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl font-bold text-white">About Us</h1>
    </div>
</section>

{{-- About Section --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center mb-16" data-animate>
            <span class="section-label">About Us</span>
            <p class="text-xl text-text-light leading-relaxed text-balance">
                At Endow Corporation, we make innovation simple and excellence achievable. Through Endow Travel, Global Education, Technologies, and Hospital Tourism, we're here to help businesses grow, connect, and succeed. Let's create something extraordinary together.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-16">
            @foreach([
                ['icon' => 'fas fa-globe', 'title' => 'Global Reach', 'description' => 'Through Travel, Education, and Technology, we help businesses grow and thrive across 30+ countries.', 'color' => 'primary'],
                ['icon' => 'fas fa-heart', 'title' => 'Meaningful Impact', 'description' => 'Committed to quality, we create meaningful connections and opportunities for lasting success.', 'color' => 'accent-cyan'],
            ] as $index => $point)
                <div class="card p-8 hover:shadow-xl transition-all group" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="w-14 h-14 bg-{{ $point['color'] }}/10 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <i class="{{ $point['icon'] }} text-xl text-{{ $point['color'] }}"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">{{ $point['title'] }}</h3>
                    <p class="text-text-light text-sm leading-relaxed">{{ $point['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Divisions --}}
<section class="py-24 gradient-mesh">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Our Divisions</span>
            <h2 class="section-heading">Four Pillars of <span class="text-gradient">Excellence</span></h2>
        </div>

        <div class="bento-grid" data-animate>
            @foreach([
                ['route' => 'travel', 'icon' => 'fas fa-plane-departure', 'name' => 'Endow Travel', 'description' => 'Discover seamless travel solutions that cater to both business and leisure. From personalized itineraries to exclusive experiences.', 'color' => 'primary', 'link' => 'https://endowtravel.com/'],
                ['route' => 'education', 'icon' => 'fas fa-graduation-cap', 'name' => 'Global Education', 'description' => 'Open doors to global opportunities through world-class educational programs, partnerships, and resources.', 'color' => 'accent-blue', 'link' => 'https://endowglobaledu.com/'],
                ['route' => 'technology', 'icon' => 'fas fa-microchip', 'name' => 'Technologies', 'description' => 'Stay ahead with innovative tech solutions that drive digital transformation, improve efficiency, and power your business.', 'color' => 'accent-violet', 'link' => 'https://endowtech.net/'],
                ['route' => 'hospital-tourism', 'icon' => 'fas fa-heartbeat', 'name' => 'Hospital Tourism', 'description' => 'Access world-class medical facilities across 30+ countries. Comprehensive healthcare travel with expert coordination.', 'color' => 'accent-cyan'],
            ] as $index => $division)
                <div class="bento-card group" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="w-14 h-14 bg-{{ $division['color'] }}/10 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <i class="{{ $division['icon'] }} text-xl text-{{ $division['color'] }}"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">{{ $division['name'] }}</h3>
                    <p class="text-text-light text-sm leading-relaxed mb-4">{{ $division['description'] }}</p>
                    <a href="{{ isset($division['link']) ? $division['link'] : route('division.show', $division['route']) }}" {{ isset($division['link']) ? 'target="_blank" rel="noopener noreferrer"' : '' }} class="inline-flex items-center gap-2 text-{{ $division['color'] }} font-semibold text-sm group-hover:gap-3 transition-all">
                        {{ isset($division['link']) ? 'Visit Site' : 'Learn More' }} <i class="fas fa-{{ isset($division['link']) ? 'external-link-alt' : 'arrow-right' }} text-xs"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Testimonials</span>
            <h2 class="section-heading">What Our Clients <span class="text-gradient">Say</span></h2>
        </div>

        <div class="bento-grid" data-animate>
            @foreach([
                ['text' => 'Endow Travel made our business trips effortless! Their attention to detail and personalized service ensured every journey was smooth and productive.', 'division' => 'Travel', 'icon' => 'fas fa-plane-departure', 'color' => 'primary'],
                ['text' => 'With Endow Global Education, I gained access to programs that completely transformed my career. Their support and resources helped me achieve my goals faster than I imagined.', 'division' => 'Education', 'icon' => 'fas fa-graduation-cap', 'color' => 'accent-blue'],
                ['text' => 'Endow Technologies delivered cutting-edge solutions that revolutionized our operations. Their team truly understands the needs of modern businesses.', 'division' => 'Technology', 'icon' => 'fas fa-microchip', 'color' => 'accent-violet'],
            ] as $index => $testimonial)
                <div class="card p-8" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-yellow-400 text-sm"></i>
                        @endfor
                    </div>
                    <p class="text-text-light leading-relaxed mb-6 text-sm">"{{ $testimonial['text'] }}"</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-{{ $testimonial['color'] }}/10 rounded-full flex items-center justify-center">
                            <i class="{{ $testimonial['icon'] }} text-{{ $testimonial['color'] }} text-sm"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-dark text-sm">Client</p>
                            <p class="text-xs text-text-muted">{{ $testimonial['division'] }} Division</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Team --}}
<section class="py-24 gradient-mesh">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Team</span>
            <h2 class="section-heading">Meet Our <span class="text-gradient">Experts</span></h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8" data-animate>
            @foreach(['CEO', 'Strategic Director', 'Senior Consultant'] as $index => $role)
                <div class="card text-center p-8 hover:shadow-xl transition-all group" style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="w-24 h-24 mx-auto mb-5 bg-gradient-to-br from-primary/10 to-accent-violet/10 rounded-full flex items-center justify-center group-hover:scale-105 transition-transform">
                        <i class="fas fa-user text-3xl text-primary/40"></i>
                    </div>
                    <h3 class="font-bold text-dark mb-1">{{ $role }}</h3>
                    <p class="text-text-muted text-sm">Endow Corporation</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
