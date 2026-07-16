{{-- Footer --}}
<footer style="background-color: #d8e5e5; border-radius: 12px; margin: 0 15px; position: relative; overflow: hidden;">
    <div class="max-w-7xl mx-auto px-6 pt-32 pb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-16">
            {{-- Brand --}}
            <div>
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('images/endow-logo.png') }}" alt="Endow Corporation" class="h-12 w-auto">
                </a>
                <p class="text-sm leading-relaxed mb-6" style="color: #67787a; max-width: 280px;">
                    A global leader in travel, education, technology, and healthcare solutions. Empowering businesses worldwide.
                </p>
                <div class="flex items-center gap-3">
                    @foreach([
                        ['icon' => 'fa-brands fa-facebook-f', 'url' => 'https://www.facebook.com/endowcorporation'],
                        ['icon' => 'fa-brands fa-linkedin-in', 'url' => 'https://www.linkedin.com/company/endow-corporation/'],
                        ['icon' => 'fa-brands fa-instagram', 'url' => 'https://www.instagram.com/endowcorporation'],
                        ['icon' => 'fa-brands fa-youtube', 'url' => 'https://www.youtube.com/@endowcorporation'],
                    ] as $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                           class="w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300 hover:-translate-y-0.5"
                           style="background: rgba(12,30,33,0.3); color: #d8e5e5;"
                           onmouseover="this.style.backgroundColor='var(--color-primary)'; this.style.color='white';"
                           onmouseout="this.style.backgroundColor='rgba(12,30,33,0.3)'; this.style.color='#d8e5e5';">
                            <i class="{{ $social['icon'] }}" style="font-size: 14px;"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Services --}}
            <div>
                <h5 class="text-base font-semibold mb-6" style="color: var(--color-text-heading);">Services</h5>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'Endow Travel', 'url' => route('division.show', 'travel')],
                        ['label' => 'Global Education', 'url' => route('division.show', 'education')],
                        ['label' => 'Technologies', 'url' => route('division.show', 'technology')],
                        ['label' => 'Hospital Tourism', 'url' => route('division.show', 'hospital-tourism')],
                    ] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-sm transition-colors" style="color: #67787a;" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='#67787a'">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Company --}}
            <div>
                <h5 class="text-base font-semibold mb-6" style="color: var(--color-text-heading);">Company</h5>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'About Us', 'url' => route('about')],
                        ['label' => 'Contact', 'url' => route('contact')],
                        ['label' => 'Consulting', 'url' => route('consulting')],
                    ] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-sm transition-colors" style="color: #67787a;" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='#67787a'">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h5 class="text-base font-semibold mb-6" style="color: var(--color-text-heading);">Contact</h5>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-phone text-sm mt-1" style="color: var(--color-primary);"></i>
                        <div>
                            <a href="tel:0226322559" class="text-sm block hover:text-primary transition-colors" style="color: #67787a;">02-2632-2559</a>
                            <a href="tel:+821057672559" class="text-sm block hover:text-primary transition-colors" style="color: #67787a;">+82 10-5767-2559</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-regular fa-envelope text-sm mt-1" style="color: var(--color-primary);"></i>
                        <a href="mailto:contact@endowcorporation.com" class="text-sm hover:text-primary transition-colors break-all" style="color: #67787a;">contact@endowcorporation.com</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-sm mt-1" style="color: var(--color-primary);"></i>
                        <span class="text-sm" style="color: #67787a;">Room 311, River Tower Officetel, Seoul, South Korea</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="pt-8" style="border-top: 1px dashed #b0c4c4;">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-sm" style="color: #67787a;">&copy; {{ date('Y') }} Endow Corporation. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="text-sm hover:text-primary transition-colors" style="color: #67787a;">Privacy Policy</a>
                    <a href="#" class="text-sm hover:text-primary transition-colors" style="color: #67787a;">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
