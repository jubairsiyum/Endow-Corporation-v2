{{--
    ScrollStack Blade Component
    ============================
    Premium reusable card-stacking section with GSAP ScrollTrigger.
    All cards overlap in the same position. The viewport is pinned
    while the user scrolls, and cards transition: front card scales
    down, next card scales up to full size.

    Usage:
        <x-scroll-stack
            subtitle="Endow Technologies"
            heading="Innovate. Transform. <span class='gradient-text'>Lead.</span>"
            description="Cutting-edge solutions..."
            :items="$cards"
        />

    Item shape:
        image, icon, title, description, button_text, button_url, badge
--}}

@props([
    'subtitle'    => '',
    'heading'     => '',
    'description' => '',
    'items'       => [],
    'sectionClass'=> '',
    'stackId'     => null,
    'bgGradient'  => 'linear-gradient(160deg, #f8f5f2 0%, #f0ece6 30%, #f5f2ef 60%, #eae5df 100%)',
])

@php
    $stackId  = $stackId ?? ('scroll-stack-' . \Illuminate\Support\Str::random(8));
    $cards    = is_array($items) ? $items : [];
@endphp

<section class="scroll-stack-section {{ $sectionClass }}" data-no-animate
         style="background: {{ $bgGradient }}; position: relative;">

    {{-- Ambient blobs --}}
    <div class="absolute top-0 right-0 w-[700px] h-[500px] pointer-events-none"
         style="background: radial-gradient(ellipse at 70% 30%, rgba(212,32,44,0.06) 0%, transparent 70%);"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[400px] pointer-events-none"
         style="background: radial-gradient(ellipse at 20% 80%, rgba(212,32,44,0.04) 0%, transparent 70%);"></div>

    <div class="max-w-7xl mx-auto px-6 py-14 lg:py-20 relative z-10">
        {{-- Section Header --}}
        <div class="text-center mb-10 lg:mb-14">
            @if($subtitle)
                <div class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6"
                     style="color: var(--color-primary); letter-spacing: 0.15em;">
                    <span style="width:30px; height:1px; background:var(--color-primary);"></span>
                    {{ $subtitle }}
                    <span style="width:30px; height:1px; background:var(--color-primary);"></span>
                </div>
            @endif
            <h2 class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-6 tracking-tight"
                style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.08;">
                {!! $heading !!}
            </h2>
            @if($description)
                <p class="text-base sm:text-lg max-w-xl mx-auto"
                   style="color: var(--color-text-muted); line-height: 1.7;">
                    {{ $description }}
                </p>
            @endif
        </div>

        {{-- ============================================ --}}
        {{-- VIEWPORT — pinned by GSAP. Cards overlap here. --}}
        {{-- ============================================ --}}
        <div class="scroll-stack-viewport"
             data-scroll-stack="{{ $stackId }}">

            @foreach($cards as $index => $card)
                @php
                    $buttonUrl = $card['button_url'] ?? '#';
                    if (!\Illuminate\Support\Str::startsWith($buttonUrl, ['http://', 'https://', '/', '#'])) {
                        try { $buttonUrl = route($buttonUrl); } catch (\Exception $e) { $buttonUrl = '#'; }
                    }
                    $badgeText = $card['badge'] ?? sprintf('%02d', $index + 1);
                @endphp

                <div class="scroll-stack-card"
                     data-card-index="{{ $index }}">

                    <div class="scroll-stack-card-inner">
                        {{-- Image Column --}}
                        <div class="scroll-stack-image">
                            <img src="{{ $card['image'] ?? 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&h=600&fit=crop' }}"
                                 alt="{{ $card['title'] ?? '' }}"
                                 loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                 onerror="this.onerror=null; this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22600%22><rect fill=%22%230d1117%22 width=%22800%22 height=%22600%22/></svg>';">

                            @if(!empty($card['icon']))
                                <div class="scroll-stack-glass-icon">
                                    <i class="{{ $card['icon'] }}"></i>
                                </div>
                            @endif
                        </div>

                        {{-- Content Column --}}
                        <div class="scroll-stack-content">
                            <span class="scroll-stack-badge">{{ $badgeText }}</span>
                            <h3 class="scroll-stack-title">{{ $card['title'] ?? '' }}</h3>
                            <p class="scroll-stack-description">{{ $card['description'] ?? '' }}</p>

                            @if(!empty($card['button_text']))
                                <a href="{{ $buttonUrl }}" class="scroll-stack-cta"
                                   @if(\Illuminate\Support\Str::startsWith($buttonUrl, ['http://', 'https://'])) target="_blank" rel="noopener noreferrer" @endif>
                                    <span>{{ $card['button_text'] }}</span>
                                    <span class="scroll-stack-arrow"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
