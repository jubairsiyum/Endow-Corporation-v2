{{-- Footer --}}
<footer class="gradient-dark text-white pt-20 pb-8 relative overflow-hidden">
    {{-- Decorative Shape --}}
    <div class="absolute top-0 right-0 w-48 h-48 opacity-5">
        <img src="{{ asset('images/site-footer-shape-2.png') }}" alt="" class="w-full h-full object-contain" loading="lazy">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            {{-- Column 1: Brand --}}
            <div class="space-y-6">
                <a href="{{ route('home') }}" class="inline-block">
                    <img src="{{ asset('images/footer-logo.png') }}" alt="Endow Corporation" class="h-20 w-auto" loading="lazy">
                </a>
                <p class="text-gray-400 leading-relaxed">
                    Endow Corporation is a global leader in travel, education, and technology. Inspiring progress, one step at a time.
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/endowcorporation?mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer"
                       class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition-colors"
                       aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/endow-corporation/" target="_blank" rel="noopener noreferrer"
                       class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition-colors"
                       aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.instagram.com/endowcorporation" target="_blank" rel="noopener noreferrer"
                       class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition-colors"
                       aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@endowcorporation" target="_blank" rel="noopener noreferrer"
                       class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-primary transition-colors"
                       aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            {{-- Column 2: Company Links --}}
            <div>
                <h4 class="text-lg font-bold mb-6">Company Links</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-400 hover:text-primary transition-colors flex items-center space-x-2">
                            <i class="fas fa-chevron-right text-xs text-primary"></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('division.show', 'travel') }}" class="text-gray-400 hover:text-primary transition-colors flex items-center space-x-2">
                            <i class="fas fa-chevron-right text-xs text-primary"></i>
                            <span>Endow Travel</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('division.show', 'education') }}" class="text-gray-400 hover:text-primary transition-colors flex items-center space-x-2">
                            <i class="fas fa-chevron-right text-xs text-primary"></i>
                            <span>Endow Global Education</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('division.show', 'technology') }}" class="text-gray-400 hover:text-primary transition-colors flex items-center space-x-2">
                            <i class="fas fa-chevron-right text-xs text-primary"></i>
                            <span>Endow Technologies</span>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 3: Contact --}}
            <div>
                <h4 class="text-lg font-bold mb-6">You've Questions</h4>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                        <span class="text-gray-400 text-sm">
                            Room 311, River Tower Officetel, 50 Beodeunaru-ro, Yeongdeungpo-dong 2-ga, Yeongdeungpo-gu, Seoul 07248, South Korea
                        </span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-phone-alt text-primary mt-1"></i>
                        <div class="text-gray-400 text-sm">
                            <a href="tel:0226322559" class="block hover:text-primary transition-colors">02-2632-2559 (Landline)</a>
                            <a href="tel:+821057672559" class="block hover:text-primary transition-colors">+82 10-5767-2559 (CEO)</a>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="far fa-envelope text-primary mt-1"></i>
                        <a href="mailto:contact@endowcorporation.com" class="text-gray-400 text-sm hover:text-primary transition-colors">
                            contact@endowcorporation.com
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 4: Newsletter --}}
            <div>
                <h4 class="text-lg font-bold mb-6">Newsletter</h4>
                <p class="text-gray-400 text-sm mb-4">
                    Sign up for our latest news & articles. We won't give you spam mails.
                </p>
                <form action="{{ route('newsletter.store') }}" method="POST" class="flex">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email" required
                           class="flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-l-lg text-white placeholder-gray-400
                                  focus:outline-none focus:border-primary transition-colors">
                    <button type="submit" class="px-4 py-3 bg-primary rounded-r-lg hover:bg-primary-dark transition-colors"
                            aria-label="Subscribe">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
                @error('email')
                    <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Copyright --}}
        <div class="border-t border-white/10 pt-8 text-center">
            <p class="text-gray-400 text-sm">
                &copy; Copyright Endow Corporation {{ date('Y') }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>
