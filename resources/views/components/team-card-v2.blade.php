<div class="team-centered-card group w-[250px] flex-shrink-0">
    <div class="rounded-2xl overflow-hidden bg-white h-full flex flex-col transition-all duration-300 hover:-translate-y-1.5"
         style="box-shadow: 0 4px 20px rgba(0,0,0,0.06), 0 1px 3px rgba(0,0,0,0.04);">

        {{-- Photo — B&W → color on hover --}}
        <div class="relative overflow-hidden flex-shrink-0" style="height: 285px;">
            <img src="{{ asset($member['photo']) }}"
                 alt="{{ $member['name'] }} — {{ $member['role'] }}"
                 class="team-card-photo absolute inset-0 w-full h-full object-cover object-top transition-all duration-500 group-hover:scale-105"
                 loading="lazy" width="400" height="500">
            <div class="absolute bottom-0 left-0 right-0 h-14 pointer-events-none"
                 style="background: linear-gradient(to top, rgba(0,0,0,0.15) 0%, transparent 100%);"></div>
        </div>

        {{-- Gradient Info Panel --}}
        <div class="px-5 py-4 text-center flex flex-col justify-center flex-1"
             style="background: linear-gradient(135deg, {{ $member['color'] }} 0%, {{ $member['color'] }}dd 100%); min-height: 110px;">

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
                       class="w-7 h-7 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-0.5"
                       style="background: rgba(255,255,255,0.22); color: #ffffff;"
                       aria-label="Social link">
                        <i class="{{ $s['icon'] }} text-[10px]"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
