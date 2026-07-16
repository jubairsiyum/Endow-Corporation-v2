{{-- Service Card --}}
<div class="card card-hover group" data-animate style="animation-delay: {{ $delay ?? '0s' }}">
    <div class="p-8">
        {{-- Number --}}
        <div class="text-5xl font-bold text-primary/10 mb-4 group-hover:text-primary/30 transition-colors">
            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
        </div>

        {{-- Icon --}}
        @if(isset($icon))
            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4
                        group-hover:bg-primary group-hover:scale-110 transition-all duration-300">
                <i class="{{ $icon }} text-xl text-primary group-hover:text-white transition-colors"></i>
            </div>
        @endif

        {{-- Title --}}
        <h3 class="text-xl font-bold text-dark mb-3 group-hover:text-primary transition-colors">
            {{ $title ?? '' }}
        </h3>

        {{-- Description --}}
        <p class="text-text-light leading-relaxed mb-4">{{ $description ?? '' }}</p>

        {{-- CTA Link --}}
        @if(isset($link))
            <a href="{{ $link }}" class="inline-flex items-center text-primary font-semibold hover:text-primary-dark transition-colors">
                {{ $linkText ?? 'Learn More' }}
                <i class="fas fa-arrow-right ml-2 text-sm transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        @endif
    </div>
</div>
