<div class="team-centered-card group max-w-[185px]">
    <div class="rounded-2xl overflow-hidden bg-white transition-all duration-400 hover:-translate-y-1.5"
         style="box-shadow: 0 4px 20px rgba(0,0,0,0.06), 0 1px 3px rgba(0,0,0,0.04);">

        {{-- Photo — black & white --}}
        <div class="relative overflow-hidden" style="aspect-ratio: 1/1.15;">
            <img src="{{ $member['photo'] }}"
                 alt="{{ $member['name'] }} — {{ $member['role'] }}"
                 class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-500 group-hover:scale-105"
                 style="filter: grayscale(100%);"
                 loading="lazy" width="400" height="460">
            <div class="absolute bottom-0 left-0 right-0 h-12 pointer-events-none"
                 style="background: linear-gradient(to top, rgba(255,255,255,0.25) 0%, transparent 100%);"></div>
        </div>

        {{-- Gradient Info Panel --}}
        <div class="px-4 pt-4 pb-5 text-center" style="background: {{ $member['gradient'] }};">
            <h3 class="text-[14px] font-bold text-white mb-0.5 tracking-tight truncate"
                style="letter-spacing: -0.01em; line-height: 1.2;">
                {{ $member['name'] }}
            </h3>
            <p class="text-[11px] font-medium text-white mb-2.5 truncate"
               style="letter-spacing: 0.01em;">
                {{ $member['role'] }}
            </p>
            <span class="inline-block text-[9px] font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full mb-3"
                  style="background: rgba(255,255,255,0.2); color: #ffffff;">
                {{ $member['division'] }}
            </span>
            <div class="flex items-center justify-center gap-1.5">
                @foreach($socialIcons as $s)
                    <a href="{{ $s['url'] }}" target="_blank" rel="noopener noreferrer"
                       class="w-6 h-6 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-0.5"
                       style="background: rgba(255,255,255,0.22); color: #ffffff;"
                       aria-label="Social">
                        <i class="{{ $s['icon'] }} text-[9px]"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
