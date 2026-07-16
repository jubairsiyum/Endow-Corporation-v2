{{-- Page Hero with Breadcrumb --}}
<section class="relative gradient-dark py-20 lg:py-28 overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, rgba(245,37,73,0.3) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(245,37,73,0.2) 0%, transparent 50%);"></div>
    </div>

    {{-- Decorative Shape --}}
    <div class="absolute top-10 left-10 w-16 h-16 opacity-10 animate-zoom-in">
        <img src="{{ asset('images/main-slider-shape-1.png') }}" alt="" class="w-full h-full object-contain" loading="lazy">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Breadcrumb --}}
        <nav aria-label="Breadcrumb" class="mb-6">
            <ol class="flex items-center space-x-2 text-sm text-gray-400">
                <li>
                    <a href="{{ route('home') }}" class="hover:text-primary transition-colors">
                        <i class="fas fa-home"></i> home
                    </a>
                </li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-white">{{ $breadcrumb ?? 'Page' }}</li>
            </ol>
        </nav>

        {{-- Page Title --}}
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 animate-fade-in-up">
            {{ $title ?? 'Page' }}
        </h1>

        {{-- Tagline --}}
        @if(isset($tagline))
            <p class="text-xl text-gray-300 animate-fade-in-up delay-100">{{ $tagline }}</p>
        @endif
    </div>
</section>
