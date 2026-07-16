@extends('layouts.app')

@section('title', 'About Us – Endow Corporation')
@section('meta_title', 'About Us – Endow Corporation')
@section('meta_description', 'Learn about Endow Corporation - a global leader in travel, education, technology, and healthcare solutions.')

@section('content')

{{-- Hero --}}
<section class="section-gap" style="background-color: var(--color-dark); border-radius: 12px; margin: 15px 15px 0; position: relative; overflow: hidden;">
    <div class="absolute top-[10%] right-[5%] w-[300px] h-[300px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(65px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 py-16">
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm" style="color: #a9b8b8;">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium">About Us</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl lg:text-[68px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">About Us</h1>
    </div>
</section>

{{-- Mission --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-bullseye"></i>
                Our Mission
            </div>
            <p class="text-xl leading-relaxed" style="color: var(--color-text);">
                At Endow Corporation, we make innovation simple and excellence achievable. Through our four divisions, we help businesses grow, connect, and succeed.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Global Reach', 'desc' => 'Through Travel, Education, and Technology, we help businesses grow and thrive across 30+ countries.'],
                ['icon' => 'fa-solid fa-heart', 'title' => 'Meaningful Impact', 'desc' => 'Committed to quality, we create meaningful connections and opportunities for lasting success.'],
            ] as $index => $point)
                <div class="service-card">
                    <div class="service-icon mb-6">
                        <i class="{{ $point['icon'] }}"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3" style="color: var(--color-text-heading);">{{ $point['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $point['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Divisions --}}
<section class="section-gap" style="background-color: #d8e5e5; border-radius: 12px; margin: 0 15px;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-building"></i>
                Our Divisions
            </div>
            <h2 class="section-heading">Four Pillars of <span style="color: var(--color-primary);">Excellence</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]" data-animate>
            @foreach([
                ['route' => 'travel', 'icon' => 'fa-solid fa-plane-departure', 'name' => 'Endow Travel', 'desc' => 'Seamless travel solutions for business and leisure.', 'color' => 'var(--color-primary)', 'link' => 'https://endowtravel.com/'],
                ['route' => 'education', 'icon' => 'fa-solid fa-graduation-cap', 'name' => 'Global Education', 'desc' => 'World-class educational programs and partnerships.', 'color' => '#7C5CFC', 'link' => 'https://endowglobaledu.com/'],
                ['route' => 'technology', 'icon' => 'fa-solid fa-microchip', 'name' => 'Technologies', 'desc' => 'Innovative tech solutions for digital transformation.', 'color' => '#3b82f6', 'link' => 'https://endowtech.net/'],
                ['route' => 'hospital-tourism', 'icon' => 'fa-solid fa-heart-pulse', 'name' => 'Hospital Tourism', 'desc' => 'Healthcare travel across 30+ countries.', 'color' => '#10b981'],
            ] as $index => $div)
                <div class="service-card group">
                    <a href="{{ isset($div['link']) ? $div['link'] : route('division.show', $div['route']) }}" {{ isset($div['link']) ? 'target="_blank" rel="noopener noreferrer"' : '' }} class="block">
                        <div class="flex items-start justify-between mb-4">
                            <div class="service-icon">
                                <i class="{{ $div['icon'] }}"></i>
                            </div>
                            <i class="fa-solid fa-arrow-right text-lg transition-transform group-hover:translate-x-1" style="color: var(--color-primary);"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2" style="color: var(--color-text-heading);">{{ $div['name'] }}</h3>
                        <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $div['desc'] }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-quote-left"></i>
                Testimonials
            </div>
            <h2 class="section-heading">What Our Clients <span style="color: var(--color-primary);">Say</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px]" data-animate>
            @foreach([
                ['text' => 'Endow Travel made our business trips effortless! Their attention to detail ensured every journey was smooth.', 'name' => 'Corporate Client', 'role' => 'Travel Division', 'icon' => 'fa-solid fa-plane-departure'],
                ['text' => 'With Endow Global Education, I gained access to programs that completely transformed my career.', 'name' => 'Education Client', 'role' => 'Education Division', 'icon' => 'fa-solid fa-graduation-cap'],
                ['text' => 'Endow Technologies delivered cutting-edge solutions that revolutionized our operations.', 'name' => 'Tech Client', 'role' => 'Technology Division', 'icon' => 'fa-solid fa-microchip'],
            ] as $index => $t)
                <div class="testimonial-card {{ $index === 0 ? 'active' : '' }}">
                    <div class="mb-4" style="color: var(--color-primary); font-size: 36px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="text-base leading-relaxed mb-6" style="color: var(--color-text);">"{{ $t['text'] }}"</p>
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fa-solid fa-star text-sm" style="color: #fbbf24;"></i>
                        @endfor
                    </div>
                    <div class="pt-6" style="border-top: 1px dashed var(--color-border-dashed);">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(255,41,87,0.08);">
                                <i class="{{ $t['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold" style="color: var(--color-text-heading);">{{ $t['name'] }}</p>
                                <p class="text-xs" style="color: var(--color-text-muted);">{{ $t['role'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
