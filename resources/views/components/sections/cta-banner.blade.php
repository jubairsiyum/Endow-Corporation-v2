{{-- CTA Banner --}}
<section class="py-20 gradient-primary relative overflow-hidden">
    {{-- Decorative Shapes --}}
    <div class="absolute top-10 left-10 w-20 h-20 opacity-10">
        <img src="{{ asset('images/main-slider-shape-1.png') }}" alt="" class="w-full h-full object-contain" loading="lazy">
    </div>
    <div class="absolute bottom-10 right-10 w-16 h-16 opacity-10">
        <img src="{{ asset('images/about-one-shape-4.png') }}" alt="" class="w-full h-full object-contain" loading="lazy">
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-animate>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
            {!! $heading ?? '' !!}
        </h2>
        <p class="text-white/90 text-lg leading-relaxed mb-8 max-w-3xl mx-auto">
            {{ $description ?? '' }}
        </p>
        <a href="{{ $ctaUrl ?? route('consulting') }}" class="btn-white">
            <i class="fas fa-arrow-right mr-2"></i>
            {{ $ctaText ?? 'Get a Personalized Quote' }}
        </a>
    </div>
</section>
