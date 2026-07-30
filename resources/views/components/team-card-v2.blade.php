{{--
    Team Card v2 — Clean Professional Card
    Usage: @include('components.team-card-v2', ['member' => $member])
    Requires: $member['name'], $member['role'], $member['photo'], $member['color'], $member['division']
    Requires: $socialIcons array in scope
--}}

<div class="team-card-pro group w-[240px] flex-shrink-0">
    {{-- Outer shell: single rounded rectangle with no internal gap --}}
    <div class="relative rounded-2xl overflow-hidden flex flex-col transition-all duration-300 group-hover:-translate-y-1.5 group-hover:shadow-2xl"
         style="box-shadow: 0 4px 24px rgba(0,0,0,0.08), 0 1px 4px rgba(0,0,0,0.04); background: white;">

        {{-- ── Photo Area ─────────────────────────────────────── --}}
        <div class="relative overflow-hidden" style="height: 272px; flex-shrink: 0; line-height: 0; font-size: 0;">
            <img src="{{ asset($member['photo']) }}"
                 alt="{{ $member['name'] }} — {{ $member['role'] }}, {{ $member['division'] }}"
                 class="block w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                 loading="lazy"
                 width="480"
                 height="544">

            {{-- Bottom gradient fade blending into the colored info panel --}}
            <div class="absolute bottom-0 left-0 right-0 pointer-events-none"
                 style="height: 64px; background: linear-gradient(to bottom, transparent 0%, {{ $member['color'] }} 100%);"></div>
        </div>

        {{-- ── Info Panel ──────────────────────────────────────── --}}
        {{-- margin-top: -1px eliminates any sub-pixel rendering gap --}}
        <div class="flex flex-col items-center text-center px-5 pt-4 pb-5"
             style="background: {{ $member['color'] }}; margin-top: -1px;">

            {{-- Division badge --}}
            <span class="inline-flex items-center gap-1.5 text-[9px] font-bold uppercase tracking-[0.07em] px-3 py-1 rounded-full mb-3"
                  style="background: rgba(255,255,255,0.18); color: #ffffff; border: 1px solid rgba(255,255,255,0.28); white-space: nowrap;">
                @if($member['division'] === 'Endow Corporation')
                    <i class="fa-solid fa-gem text-[8px]"></i>
                @elseif($member['division'] === 'Endow Global Education')
                    <i class="fa-solid fa-graduation-cap text-[8px]"></i>
                @elseif($member['division'] === 'Endow Travel')
                    <i class="fa-solid fa-plane text-[8px]"></i>
                @else
                    <i class="fa-solid fa-briefcase text-[8px]"></i>
                @endif
                {{ $member['division'] }}
            </span>

            {{-- Name --}}
            <h3 class="text-[15px] font-bold text-white leading-snug mb-0.5"
                style="letter-spacing: -0.01em;">
                {{ $member['name'] }}
            </h3>

            {{-- Role --}}
            <p class="text-[11px] font-medium mb-4 leading-snug"
               style="color: rgba(255,255,255,0.82);">
                {{ $member['role'] }}
            </p>

            {{-- Social icons --}}
            <div class="flex items-center justify-center gap-2">
                @foreach($socialIcons as $s)
                    <a href="{{ $s['url'] }}" target="_blank" rel="noopener noreferrer"
                       class="w-7 h-7 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 hover:brightness-110"
                       style="background: rgba(255,255,255,0.2); color: #ffffff; border: 1px solid rgba(255,255,255,0.25);"
                       aria-label="Social link">
                        <i class="{{ $s['icon'] }} text-[10px]"></i>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</div>