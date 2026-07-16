{{-- Floating Pill Navigation --}}
<div id="navbar-wrapper" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 pt-4 px-4 sm:px-6 lg:px-8">
    <nav id="navbar" class="max-w-6xl mx-auto transition-all duration-500 rounded-full"
         style="background: rgba(255,255,255,0.72); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.6); box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
        <div class="flex items-center justify-between h-16 px-2 sm:px-6">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                <div class="w-8 h-8 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, #FF2957, #7C5CFC);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                </div>
                <span class="font-heading text-lg font-bold text-dark hidden sm:block" style="letter-spacing: -0.03em;">Endow</span>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center">
                <div class="pill-nav">
                    <a href="{{ route('home') }}" class="pill-nav-item {{ request()->routeIs('home') ? 'pill-nav-item-active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="pill-nav-item {{ request()->routeIs('about') ? 'pill-nav-item-active' : '' }}">About</a>

                    {{-- Divisions Dropdown --}}
                    <div x-data="{ open: false }" class="relative" @click.away="open = false">
                        <button @click="open = !open" class="pill-nav-item flex items-center gap-1 {{ request()->routeIs('division.*') ? 'pill-nav-item-active' : '' }}">
                            Divisions
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" :class="open ? 'rotate-180' : ''" class="transition-transform duration-200"><path d="m6 9 6 6 6-6"/></svg>
                        </button>
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                             class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-64 p-2 rounded-2xl"
                             style="background: rgba(255,255,255,0.92); backdrop-filter: blur(24px); border: 1px solid rgba(255,255,255,0.6); box-shadow: 0 16px 48px -12px rgba(0,0,0,0.12);">
                            @foreach([
                                ['route' => 'travel', 'icon' => 'plane', 'name' => 'Endow Travel', 'desc' => 'Travel solutions worldwide'],
                                ['route' => 'education', 'icon' => 'graduation-cap', 'name' => 'Global Education', 'desc' => 'World-class learning'],
                                ['route' => 'technology', 'icon' => 'cpu', 'name' => 'Technologies', 'desc' => 'Cutting-edge tech solutions'],
                                ['route' => 'hospital-tourism', 'icon' => 'heart-pulse', 'name' => 'Hospital Tourism', 'desc' => 'Healthcare travel services'],
                            ] as $division)
                                <a href="{{ route('division.show', $division['route']) }}"
                                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 hover:bg-black/5 group">
                                    <div class="w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                                         style="background: linear-gradient(135deg, rgba(255,41,87,0.1), rgba(124,92,252,0.1));">
                                        <i data-lucide="{{ $division['icon'] }}" class="w-4 h-4 text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-dark">{{ $division['name'] }}</p>
                                        <p class="text-xs text-text-muted">{{ $division['desc'] }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="pill-nav-item {{ request()->routeIs('contact') ? 'pill-nav-item-active' : '' }}">Contact</a>
                </div>
            </div>

            {{-- Right: CTA + Mobile Toggle --}}
            <div class="flex items-center gap-3">
                <a href="{{ route('consulting') }}" class="hidden sm:inline-flex btn-primary text-sm py-2.5 px-5">
                    Book Consultation
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>

                {{-- Mobile Hamburger --}}
                <button id="mobile-menu-btn" class="lg:hidden w-10 h-10 flex items-center justify-center rounded-xl transition-colors hover:bg-black/5" aria-label="Menu">
                    <div class="w-5 h-4 flex flex-col justify-between">
                        <span id="bar1" class="w-full h-0.5 bg-dark rounded-full transition-all duration-300 origin-center"></span>
                        <span id="bar2" class="w-full h-0.5 bg-dark rounded-full transition-all duration-300"></span>
                        <span id="bar3" class="w-full h-0.5 bg-dark rounded-full transition-all duration-300 origin-center"></span>
                    </div>
                </button>
            </div>
        </div>
    </nav>
</div>

{{-- Mobile Menu --}}
<div id="mobile-menu" class="hidden fixed inset-0 z-50">
    <div id="mobile-menu-overlay" class="absolute inset-0 bg-black/20 backdrop-blur-sm"></div>
    <div id="mobile-menu-panel" class="absolute right-0 top-0 h-full w-80 max-w-[85vw] p-6 transform translate-x-full transition-transform duration-300"
         style="background: rgba(255,255,255,0.95); backdrop-filter: blur(24px); border-left: 1px solid rgba(255,255,255,0.6); box-shadow: -8px 0 32px rgba(0,0,0,0.1);">
        <div class="flex items-center justify-between mb-10">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, #FF2957, #7C5CFC);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                </div>
                <span class="font-heading text-lg font-bold text-dark" style="letter-spacing: -0.03em;">Endow</span>
            </a>
            <button id="mobile-menu-close" class="w-10 h-10 flex items-center justify-center rounded-xl hover:bg-black/5 transition-colors" aria-label="Close menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>

        <div class="space-y-1">
            @php
                $mobileLinks = [
                    ['route' => 'home', 'label' => 'Home'],
                    ['route' => 'about', 'label' => 'About Us'],
                    ['route' => 'contact', 'label' => 'Contact'],
                ];
            @endphp
            @foreach($mobileLinks as $link)
                <a href="{{ route($link['route']) }}"
                   class="block px-4 py-3 rounded-xl text-sm font-medium transition-all {{ request()->routeIs($link['route']) ? 'bg-dark text-white' : 'text-text-secondary hover:bg-black/5 hover:text-dark' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach

            <div class="pt-4 pb-2 px-4">
                <p class="text-xs font-bold uppercase tracking-widest text-text-muted mb-3">Divisions</p>
            </div>
            @foreach([
                ['route' => 'travel', 'label' => 'Endow Travel'],
                ['route' => 'education', 'label' => 'Global Education'],
                ['route' => 'technology', 'label' => 'Technologies'],
                ['route' => 'hospital-tourism', 'label' => 'Hospital Tourism'],
            ] as $division)
                <a href="{{ route('division.show', $division['route']) }}"
                   class="block px-4 py-3 rounded-xl text-sm font-medium transition-all {{ request()->routeIs('division.show', $division['route']) ? 'bg-dark text-white' : 'text-text-secondary hover:bg-black/5 hover:text-dark' }}">
                    {{ $division['label'] }}
                </a>
            @endforeach
        </div>

        <div class="absolute bottom-8 left-6 right-6">
            <a href="{{ route('consulting') }}" class="btn-primary w-full text-center text-sm py-3">
                Book Consultation
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</div>
