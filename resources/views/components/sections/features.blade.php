{{-- Features Section --}}
<section class="py-20 bg-white" {{ isset($id) ? "id={$id}" : '' }}>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16" data-animate>
            <span class="section-label">{{ $label ?? 'FEATURES' }}</span>
            <h2 class="section-heading">
                {!! $heading ?? 'Features' !!}
            </h2>
        </div>

        {{-- Features Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-{{ count($features) > 3 ? '3' : count($features) }} gap-8">
            @foreach($features as $index => $feature)
                <div class="card card-hover p-8 text-center group" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    @if(isset($feature['image']))
                        <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-primary/10 flex items-center justify-center
                                    group-hover:bg-primary group-hover:scale-110 transition-all duration-300">
                            <img src="{{ asset($feature['image']) }}" alt="{{ $feature['title'] ?? '' }}"
                                 class="w-12 h-12 object-contain" loading="lazy">
                        </div>
                    @elseif(isset($feature['icon']))
                        <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-primary/10 flex items-center justify-center
                                    group-hover:bg-primary group-hover:scale-110 transition-all duration-300">
                            <i class="{{ $feature['icon'] }} text-3xl text-primary group-hover:text-white transition-colors"></i>
                        </div>
                    @endif

                    <h3 class="text-xl font-bold text-dark mb-3">{{ $feature['title'] ?? '' }}</h3>
                    <p class="text-text-light leading-relaxed">{{ $feature['description'] ?? '' }}</p>

                    @if(isset($feature['link']))
                        <a href="{{ $feature['link'] }}" class="inline-flex items-center mt-4 text-primary font-semibold hover:text-primary-dark transition-colors">
                            {{ $feature['link_text'] ?? 'Learn More' }}
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
