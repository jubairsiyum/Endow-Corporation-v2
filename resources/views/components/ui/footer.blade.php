{{-- Footer --}}
<footer style="background: linear-gradient(180deg, #070707 0%, #0a0a0a 100%); position: relative; overflow: hidden;">
    {{-- Subtle top accent line --}}
    <div class="absolute top-0 left-0 right-0 h-px" style="background: linear-gradient(90deg, transparent, rgba(212,32,44,0.4), transparent);"></div>

    {{-- Background geometric accents --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute w-72 h-72 rounded-full opacity-[0.015]" style="background: radial-gradient(circle, rgba(212,32,44,0.3), transparent 70%); top: -100px; right: -80px;"></div>
        <div class="absolute w-96 h-96 rounded-full opacity-[0.01]" style="background: radial-gradient(circle, rgba(255,255,255,0.2), transparent 70%); bottom: -120px; left: -100px;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 pt-24 pb-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            {{-- Brand --}}
            <div>
                {{-- Logo with Text — matching navbar design --}}
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3 mb-6 group">
                    <img src="{{ asset('images/endow-logo.png') }}" alt="Endow Corporation" style="height: 40px; width: auto; filter: brightness(0) invert(1); opacity: 0.95;">
                    <div class="leading-none">
                        <div class="text-base font-bold tracking-[3.5px] text-white/90" style="line-height: 1.15;">ENDOW</div>
                        <div class="font-semibold text-white/50" style="line-height: 1.15; font-size: 10px; letter-spacing: 1.8px;">Corporation</div>
                    </div>
                </a>
                <p class="text-sm leading-relaxed mb-6" style="color: rgba(255,255,255,0.35); max-width: 280px; letter-spacing: -0.01em;">
                    A global leader in travel, education, technology, and healthcare solutions. Empowering businesses worldwide.
                </p>
                <div class="flex items-center gap-2.5">
                    @foreach([
                        ['icon' => 'fa-brands fa-facebook-f', 'url' => 'https://www.facebook.com/endowcorporation'],
                        ['icon' => 'fa-brands fa-linkedin-in', 'url' => 'https://www.linkedin.com/company/endow-corporation/'],
                        ['icon' => 'fa-brands fa-instagram', 'url' => 'https://www.instagram.com/endowcorporation'],
                        ['icon' => 'fa-brands fa-youtube', 'url' => 'https://www.youtube.com/@endowcorporation'],
                    ] as $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                           class="w-9 h-9 rounded-lg flex items-center justify-center transition-all duration-300"
                           style="background: rgba(255,255,255,0.05); color: rgba(255,255,255,0.35); border: 1px solid rgba(255,255,255,0.06);"
                           onmouseover="this.style.backgroundColor='var(--color-primary)'; this.style.color='white'; this.style.borderColor='var(--color-primary)';"
                           onmouseout="this.style.backgroundColor='rgba(255,255,255,0.05)'; this.style.color='rgba(255,255,255,0.35)'; this.style.borderColor='rgba(255,255,255,0.06)';">
                            <i class="{{ $social['icon'] }}" style="font-size: 13px;"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Education --}}
            <div>
                <h5 class="text-xs font-bold mb-7 uppercase tracking-[2.5px]" style="color: rgba(255,255,255,0.6); letter-spacing: 0.15em;">
                    <span style="position: relative; padding-bottom: 8px; border-bottom: 2px solid var(--color-primary);">Education</span>
                </h5>
                <ul class="space-y-3.5">
                    @foreach([
                        ['label' => 'Global Education', 'url' => route('division.show', 'education')],
                        ['label' => 'Study Abroad', 'url' => route('seo.study-abroad')],
                        ['label' => 'Scholarships', 'url' => route('seo.scholarships')],
                        ['label' => 'Language Training', 'url' => route('seo.language-training')],
                    ] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="footer-link text-sm transition-all duration-200 inline-flex items-center gap-2" style="color: rgba(255,255,255,0.35);">
                                <span class="footer-link-arrow text-[10px]" style="color: var(--color-primary);">→</span>
                                <span>{{ $link['label'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Technology --}}
            <div>
                <h5 class="text-xs font-bold mb-7 uppercase tracking-[2.5px]" style="color: rgba(255,255,255,0.6); letter-spacing: 0.15em;">
                    <span style="position: relative; padding-bottom: 8px; border-bottom: 2px solid var(--color-primary);">Technology</span>
                </h5>
                <ul class="space-y-3.5">
                    @foreach([
                        ['label' => 'Technologies', 'url' => route('division.show', 'technology')],
                        ['label' => 'AI & Automation', 'url' => route('seo.ai-automation')],
                        ['label' => 'Cloud Computing', 'url' => route('seo.cloud-computing')],
                        ['label' => 'Software Development', 'url' => route('seo.software-development')],
                    ] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="footer-link text-sm transition-all duration-200 inline-flex items-center gap-2" style="color: rgba(255,255,255,0.35);">
                                <span class="footer-link-arrow text-[10px]" style="color: var(--color-primary);">→</span>
                                <span>{{ $link['label'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h5 class="text-xs font-bold mb-7 uppercase tracking-[2.5px]" style="color: rgba(255,255,255,0.6); letter-spacing: 0.15em;">
                    <span style="position: relative; padding-bottom: 8px; border-bottom: 2px solid var(--color-primary);">Contact</span>
                </h5>
                <ul class="space-y-5">
                    <li class="flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5" style="background: rgba(212,32,44,0.1); border: 1px solid rgba(212,32,44,0.15);">
                            <i class="fa-solid fa-phone text-xs" style="color: var(--color-primary-light);"></i>
                        </div>
                        <div>
                            <a href="tel:0226322559" class="text-sm block transition-colors duration-200" style="color: rgba(255,255,255,0.35);" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.35)'">02-2632-2559</a>
                            <a href="tel:+821057672559" class="text-sm block transition-colors duration-200" style="color: rgba(255,255,255,0.35);" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.35)'">+82 10-5767-2559</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5" style="background: rgba(212,32,44,0.1); border: 1px solid rgba(212,32,44,0.15);">
                            <i class="fa-regular fa-envelope text-xs" style="color: var(--color-primary-light);"></i>
                        </div>
                        <a href="mailto:contact@endowcorporation.com" class="text-sm transition-colors duration-200 break-all" style="color: rgba(255,255,255,0.35);" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.35)'">contact@endowcorporation.com</a>
                    </li>
                    <li class="flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5" style="background: rgba(212,32,44,0.1); border: 1px solid rgba(212,32,44,0.15);">
                            <i class="fa-solid fa-location-dot text-xs" style="color: var(--color-primary-light);"></i>
                        </div>
                        <span class="text-sm leading-relaxed" style="color: rgba(255,255,255,0.35);">Room 311, River Tower Officetel,<br>Seoul, South Korea</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4" style="border-top: 1px solid rgba(255,255,255,0.06);">
            <p class="text-xs" style="color: rgba(255,255,255,0.2);">&copy; {{ date('Y') }} Endow Corporation. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="{{ route('seo.privacy-policy') }}" class="text-xs transition-colors duration-200" style="color: rgba(255,255,255,0.2);" onmouseover="this.style.color='rgba(255,255,255,0.6)'" onmouseout="this.style.color='rgba(255,255,255,0.2)'">Privacy Policy</a>
                <a href="{{ route('seo.terms-of-service') }}" class="text-xs transition-colors duration-200" style="color: rgba(255,255,255,0.2);" onmouseover="this.style.color='rgba(255,255,255,0.6)'" onmouseout="this.style.color='rgba(255,255,255,0.2)'">Terms of Service</a>
                <a href="{{ route('about') }}" class="text-xs transition-colors duration-200" style="color: rgba(255,255,255,0.2);" onmouseover="this.style.color='rgba(255,255,255,0.6)'" onmouseout="this.style.color='rgba(255,255,255,0.2)'">About Us</a>
            </div>
            </div>
        </div>
    </div>
</footer>
