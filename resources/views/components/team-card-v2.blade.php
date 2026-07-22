<div class="team-centered-card w-[250px] flex-shrink-0">
    <div class="rounded-2xl overflow-hidden bg-white h-full flex flex-col"
         style="box-shadow: 0 4px 20px rgba(0,0,0,0.06), 0 1px 3px rgba(0,0,0,0.04);">

        {{-- Photo — B&W → color on hover --}}
        <div class="relative overflow-hidden flex-shrink-0" style="height: 285px;">
            <img src="{{ asset($member['photo']) }}"
                 alt="{{ $member['name'] }} — {{ $member['role'] }}"
                 class="team-card-photo absolute inset-0 w-full h-full object-cover object-top"
                 loading="lazy" width="400" height="500">
            <div class="absolute bottom-0 left-0 right-0 h-14 pointer-events-none"
                 style="background: linear-gradient(to top, rgba(0,0,0,0.15) 0%, transparent 100%);"></div>
        </div>

        {{-- Gradient Info Panel --}}
        <div class="px-5 py-4 text-center flex flex-col justify-center flex-1"
             style="background: linear-gradient(135deg, {{ $member['color'] }} 0%, {{ $member['color'] }}dd 100%); min-height: 120px;">

            {{-- Division Badge --}}
            @if($member['division'] === 'Endow Corporation')
                <span class="inline-flex items-center gap-1 text-[9px] font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-2 mx-auto"
                      style="background: #ffffff; color: {{ $member['color'] }}; letter-spacing: 0.06em; box-shadow: 0 2px 6px rgba(0,0,0,0.15);">
                    <i class="fa-solid fa-gem text-[8px]"></i>
                    {{ $member['division'] }}
                </span>
            @else
                <span class="inline-block text-[9px] font-semibold uppercase tracking-wider px-2.5 py-0.5 rounded-full mb-2 mx-auto"
                      style="background: rgba(255,255,255,0.2); color: #ffffff; letter-spacing: 0.06em;">
                    {{ $member['division'] }}
                </span>
            @endif

            <h3 class="text-[15px] font-bold text-white mb-0.5 tracking-tight leading-tight"
                style="letter-spacing: -0.01em;">
                {{ $member['name'] }}
            </h3>
            <p class="text-[11px] font-medium text-white mb-3 leading-snug"
               style="opacity: 0.85;">
                {{ $member['role'] }}
            </p>

            <div class="flex items-center justify-center gap-2 mt-auto">
                @foreach($socialIcons as $s)
                    <a href="{{ $s['url'] }}" target="_blank" rel="noopener noreferrer"
                       class="w-7 h-7 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110"
                       style="background: rgba(255,255,255,0.22); color: #ffffff;"
                       aria-label="Social link">
                        <i class="{{ $s['icon'] }} text-[10px]"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
