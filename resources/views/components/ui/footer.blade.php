{{-- Premium Dark Footer --}}
<footer class="relative overflow-hidden" style="background: linear-gradient(180deg, #0F172A 0%, #0a0f1e 100%);">
    {{-- Subtle glow --}}
    <div class="absolute top-0 left-1/4 w-96 h-96 rounded-full opacity-20" style="background: radial-gradient(circle, rgba(255,41,87,0.3) 0%, transparent 70%); filter: blur(80px);"></div>
    <div class="absolute top-0 right-1/4 w-96 h-96 rounded-full opacity-15" style="background: radial-gradient(circle, rgba(124,92,252,0.3) 0%, transparent 70%); filter: blur(80px);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-8 relative z-10">
        {{-- Top: Brand + Newsletter --}}
        <div class="grid lg:grid-cols-2 gap-12 mb-16">
            <div>
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 mb-5">
                    <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, #FF2957, #7C5CFC);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                    </div>
                    <span class="font-heading text-xl font-bold text-white" style="letter-spacing: -0.03em;">Endow Corporation</span>
                </a>
                <p class="text-white/50 text-sm leading-relaxed max-w-sm mb-6">
                    A global leader in travel, education, technology, and healthcare. Empowering businesses worldwide with innovative solutions.
                </p>
                <div class="flex items-center gap-3">
                    @foreach([
                        ['icon' => 'fab fa-facebook-f', 'url' => 'https://www.facebook.com/endowcorporation?mibextid=ZbWKwL'],
                        ['icon' => 'fab fa-linkedin-in', 'url' => 'https://www.linkedin.com/company/endow-corporation/'],
                        ['icon' => 'fab fa-instagram', 'url' => 'https://www.instagram.com/endowcorporation'],
                        ['icon' => 'fab fa-youtube', 'url' => 'https://www.youtube.com/@endowcorporation'],
                    ] as $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                           class="w-10 h-10 rounded-xl flex items-center justify-center text-white/40 transition-all duration-300 hover:text-white hover:-translate-y-0.5"
                           style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.08);"
                           aria-label="{{ basename($social['url']) }}">
                            <i class="{{ $social['icon'] }} text-sm"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="lg:pl-12">
                <h3 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Stay Updated</h3>
                <p class="text-white/40 text-sm mb-4">Get the latest news and insights. No spam, ever.</p>
                <form action="{{ route('newsletter.store') }}" method="POST" class="flex gap-2">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email" required
                           class="flex-1 px-5 py-3 rounded-full text-sm outline-none transition-all duration-200 focus:ring-2 focus:ring-primary/30"
                           style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.1); color: white;">
                    <button type="submit" class="btn-primary py-3 px-6 text-sm whitespace-nowrap">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        {{-- Links Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
            <div>
                <h4 class="text-white font-bold text-sm mb-5">Company</h4>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'About Us', 'url' => route('about')],
                        ['label' => 'Contact', 'url' => route('contact')],
                        ['label' => 'Consulting', 'url' => route('consulting')],
                    ] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-white/40 text-sm hover:text-white transition-colors duration-200">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold text-sm mb-5">Divisions</h4>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'Endow Travel', 'url' => route('division.show', 'travel')],
                        ['label' => 'Global Education', 'url' => route('division.show', 'education')],
                        ['label' => 'Technologies', 'url' => route('division.show', 'technology')],
                        ['label' => 'Hospital Tourism', 'url' => route('division.show', 'hospital-tourism')],
                    ] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-white/40 text-sm hover:text-white transition-colors duration-200">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold text-sm mb-5">Services</h4>
                <ul class="space-y-3">
                    @foreach(['Travel Planning', 'Education Consulting', 'Software Development', 'Healthcare Travel'] as $service)
                        <li>
                            <span class="text-white/40 text-sm">{{ $service }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold text-sm mb-5">Contact</h4>
                <ul class="space-y-3">
                    <li class="flex items-start gap-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/30 mt-0.5 flex-shrink-0"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span class="text-white/40 text-sm">Seoul, South Korea</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/30 mt-0.5 flex-shrink-0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <div>
                            <a href="tel:0226322559" class="text-white/40 text-sm hover:text-white transition-colors block">02-2632-2559</a>
                            <a href="tel:+821057672559" class="text-white/40 text-sm hover:text-white transition-colors block">+82 10-5767-2559</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white/30 mt-0.5 flex-shrink-0"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        <a href="mailto:contact@endowcorporation.com" class="text-white/40 text-sm hover:text-white transition-colors break-all">contact@endowcorporation.com</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom --}}
        <div class="pt-8 border-t border-white/8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-white/30 text-sm">&copy; {{ date('Y') }} Endow Corporation. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="text-white/30 text-sm hover:text-white/60 transition-colors">Privacy Policy</a>
                    <a href="#" class="text-white/30 text-sm hover:text-white/60 transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
