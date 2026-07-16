{{-- Stats / Counters Section --}}
<section class="py-20 gradient-dark relative overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 50%, rgba(245,37,73,0.4) 0%, transparent 50%), radial-gradient(circle at 80% 50%, rgba(245,37,73,0.3) 0%, transparent 50%);"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($stats as $index => $stat)
                <div class="text-center" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="w-16 h-16 mx-auto mb-4 bg-white/10 rounded-full flex items-center justify-center">
                        <i class="{{ $stat['icon'] }} text-2xl text-primary"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2 counter" data-target="{{ $stat['value'] }}">
                        0
                    </div>
                    <p class="text-gray-400 text-sm uppercase tracking-wider">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
