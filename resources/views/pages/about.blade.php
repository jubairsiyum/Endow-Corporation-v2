@extends('layouts.app')

@section('title', 'About Us – Endow Corporation')
@section('meta_title', 'About Us – Endow Corporation')
@section('meta_description', 'Learn about Endow Corporation - a global leader in travel, education, and technology solutions. Discover our mission, values, and commitment to excellence.')
@section('og_title', 'About Us – Endow Corporation')
@section('og_description', 'Learn about Endow Corporation - a global leader in travel, education, and technology solutions.')

@section('content')

{{-- Hero --}}
<x-sections.hero title="About Us" breadcrumb="About" />

{{-- About Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center" data-animate>
            <span class="section-label">ABOUT US</span>
            <p class="text-xl text-text-light leading-relaxed mb-8">
                At Endow Corporation, we make innovation simple and excellence achievable. Through Endow Travel, Global Education, and Technologies, we're here to help businesses grow, connect, and succeed. Let's create something extraordinary together.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left max-w-3xl mx-auto">
                <div class="flex items-start space-x-3">
                    <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <i class="fas fa-check text-xs text-primary"></i>
                    </div>
                    <p class="text-text-light">Through Travel, Education, and Technology, we help businesses grow and thrive.</p>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <i class="fas fa-check text-xs text-primary"></i>
                    </div>
                    <p class="text-text-light">Committed to quality, we create meaningful connections and opportunities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Divisions Grid --}}
<section class="py-20 bg-surface-alt">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">FEATURES</span>
            <h2 class="section-heading">Our <span class="text-gradient">Divisions</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Endow Travel --}}
            <div class="card card-hover p-8" data-animate>
                <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-plane-departure text-2xl text-primary"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-3">Endow Travel</h3>
                <p class="text-text-light leading-relaxed mb-4">
                    Discover seamless travel solutions that cater to both business and leisure. From personalized itineraries to exclusive experiences, we ensure every journey is extraordinary.
                </p>
                <a href="https://endowtravel.com/" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center text-primary font-semibold hover:text-primary-dark transition-colors">
                    Explore <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                </a>
            </div>

            {{-- Endow Global Education --}}
            <div class="card card-hover p-8" data-animate style="animation-delay: 0.1s">
                <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-graduation-cap text-2xl text-primary"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-3">Endow Global Education</h3>
                <p class="text-text-light leading-relaxed mb-4">
                    Open doors to global opportunities through world-class educational programs, partnerships, and resources that inspire growth and learning.
                </p>
                <a href="https://endowglobaledu.com/" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center text-primary font-semibold hover:text-primary-dark transition-colors">
                    Explore <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                </a>
            </div>

            {{-- Endow Technologies --}}
            <div class="card card-hover p-8" data-animate style="animation-delay: 0.2s">
                <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-microchip text-2xl text-primary"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-3">Endow Technologies</h3>
                <p class="text-text-light leading-relaxed mb-4">
                    Stay ahead with innovative tech solutions that drive digital transformation, improve efficiency, and power your business forward.
                </p>
                <a href="https://endowtech.net/" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center text-primary font-semibold hover:text-primary-dark transition-colors">
                    Explore <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">TESTIMONIALS</span>
            <h2 class="section-heading">What Our Client's Says About Our <span class="text-gradient">Best Work</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                'Endow Travel made our business trips effortless! Their attention to detail and personalized service ensured every journey was smooth and productive. Highly recommend!',
                'With Endow Global Education, I gained access to programs that completely transformed my career. Their support and resources helped me achieve my goals faster than I imagined.',
                'Endow Technologies delivered cutting-edge solutions that revolutionized our operations. Their team truly understands the needs of modern businesses.',
            ] as $index => $testimonial)
                <div class="card p-8" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="flex items-center space-x-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-yellow-400 text-sm"></i>
                        @endfor
                    </div>
                    <p class="text-text-light leading-relaxed mb-6">"{{ $testimonial }}"</p>
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-primary"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-dark">Client {{ $index + 1 }}</p>
                            <p class="text-sm text-text-muted">{{ ['Travel', 'Education', 'Technology'][$index] }} Division</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Team Section --}}
<section class="py-20 bg-surface-alt">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">TEAM MEMBERS</span>
            <h2 class="section-heading">Meet Our <span class="text-gradient">Experts</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['role' => 'CEO', 'social' => ['facebook', 'twitter', 'instagram']],
                ['role' => 'Strategic Director', 'social' => ['facebook', 'twitter', 'instagram']],
                ['role' => 'Senior Consultant', 'social' => []],
            ] as $index => $member)
                <div class="card card-hover text-center p-8" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fas fa-user text-4xl text-primary"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-1">{{ $member['role'] }}</h3>
                    <p class="text-text-muted text-sm mb-4">{{ $member['role'] }}</p>
                    @if(count($member['social']) > 0)
                        <div class="flex justify-center space-x-3">
                            @foreach($member['social'] as $platform)
                                <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-colors text-text-muted">
                                    <i class="fab fa-{{ $platform }} text-sm"></i>
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
