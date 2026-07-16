{{-- Navbar --}}
<header class="sticky top-0 z-40 bg-white shadow-md transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex-shrink-0" aria-label="Endow Corporation Home">
                <img src="{{ asset('images/logo.png') }}" alt="Endow Corporation Logo" class="h-12 w-auto">
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center space-x-8" aria-label="Main navigation">
                <a href="{{ route('home') }}"
                   class="text-dark font-medium hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}"
                   class="text-dark font-medium hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary' : '' }}">
                    About Us
                </a>

                {{-- Divisions Dropdown --}}
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-dark font-medium hover:text-primary transition-colors
                                   {{ request()->routeIs('division.*') ? 'text-primary' : '' }}">
                        <span>Divisions</span>
                        <i class="fas fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-64 bg-white rounded-xl shadow-xl border border-gray-100
                                opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">
                        <div class="py-2">
                            <a href="{{ route('division.show', 'travel') }}"
                               class="flex items-center px-4 py-3 text-dark hover:bg-primary/5 hover:text-primary transition-colors">
                                <i class="fas fa-plane-departure w-8 text-primary"></i>
                                <span class="font-medium">Endow Travel</span>
                            </a>
                            <a href="{{ route('division.show', 'education') }}"
                               class="flex items-center px-4 py-3 text-dark hover:bg-primary/5 hover:text-primary transition-colors">
                                <i class="fas fa-graduation-cap w-8 text-primary"></i>
                                <span class="font-medium">Endow Global Education</span>
                            </a>
                            <a href="{{ route('division.show', 'technology') }}"
                               class="flex items-center px-4 py-3 text-dark hover:bg-primary/5 hover:text-primary transition-colors">
                                <i class="fas fa-microchip w-8 text-primary"></i>
                                <span class="font-medium">Endow Technologies</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}"
                   class="text-dark font-medium hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary' : '' }}">
                    Contact Us
                </a>
            </nav>

            {{-- Header Contact Widget (Desktop) --}}
            <div class="hidden lg:flex items-center space-x-6">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-phone-alt text-primary"></i>
                    </div>
                    <div>
                        <p class="text-xs text-text-muted">Need help?</p>
                        <a href="tel:0226322559" class="text-dark font-bold hover:text-primary transition-colors">
                            02-2632-2559
                        </a>
                    </div>
                </div>
                <a href="{{ route('consulting') }}" class="btn-primary">
                    Get Consulting
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" class="lg:hidden w-10 h-10 flex items-center justify-center text-dark"
                    aria-label="Toggle menu" aria-expanded="false">
                <i class="fas fa-bars text-xl" id="menu-icon"></i>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-100">
        <div class="px-4 py-4 space-y-2">
            <a href="{{ route('home') }}"
               class="block px-4 py-3 rounded-lg font-medium transition-colors
                      {{ request()->routeIs('home') ? 'bg-primary/10 text-primary' : 'text-dark hover:bg-gray-50' }}">
                Home
            </a>
            <a href="{{ route('about') }}"
               class="block px-4 py-3 rounded-lg font-medium transition-colors
                      {{ request()->routeIs('about') ? 'bg-primary/10 text-primary' : 'text-dark hover:bg-gray-50' }}">
                About Us
            </a>

            {{-- Divisions --}}
            <div>
                <button id="mobile-divisions-btn"
                        class="w-full flex items-center justify-between px-4 py-3 rounded-lg font-medium text-dark hover:bg-gray-50 transition-colors">
                    <span>Divisions</span>
                    <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-divisions-icon"></i>
                </button>
                <div id="mobile-divisions-submenu" class="hidden pl-4 space-y-1">
                    <a href="{{ route('division.show', 'travel') }}"
                       class="block px-4 py-2 rounded-lg text-sm transition-colors
                              {{ request()->routeIs('division.show', 'travel') ? 'text-primary' : 'text-text-light hover:text-primary' }}">
                        <i class="fas fa-plane-departure w-6"></i> Endow Travel
                    </a>
                    <a href="{{ route('division.show', 'education') }}"
                       class="block px-4 py-2 rounded-lg text-sm transition-colors
                              {{ request()->routeIs('division.show', 'education') ? 'text-primary' : 'text-text-light hover:text-primary' }}">
                        <i class="fas fa-graduation-cap w-6"></i> Endow Global Education
                    </a>
                    <a href="{{ route('division.show', 'technology') }}"
                       class="block px-4 py-2 rounded-lg text-sm transition-colors
                              {{ request()->routeIs('division.show', 'technology') ? 'text-primary' : 'text-text-light hover:text-primary' }}">
                        <i class="fas fa-microchip w-6"></i> Endow Technologies
                    </a>
                </div>
            </div>

            <a href="{{ route('contact') }}"
               class="block px-4 py-3 rounded-lg font-medium transition-colors
                      {{ request()->routeIs('contact') ? 'bg-primary/10 text-primary' : 'text-dark hover:bg-gray-50' }}">
                Contact Us
            </a>

            <div class="pt-2 border-t border-gray-100">
                <a href="{{ route('consulting') }}" class="btn-primary w-full text-center">
                    Get Consulting
                </a>
            </div>
        </div>
    </div>
</header>
