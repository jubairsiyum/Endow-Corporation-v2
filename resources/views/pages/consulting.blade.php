@extends('layouts.app')

@section('title', 'Get Consulting – Endow Corporation')
@section('meta_title', 'Get Consulting – Endow Corporation')
@section('meta_description', 'Schedule a consultation with Endow Corporation. Expert consulting in travel, education, technology, and hospital tourism to help your business succeed.')
@section('og_title', 'Get Consulting – Endow Corporation')
@section('og_description', 'Schedule a consultation with Endow Corporation. Expert consulting in travel, education, technology, and hospital tourism.')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden gradient-hero">
    <div class="absolute top-20 right-20 w-72 h-72 rounded-full floating opacity-30" style="background: radial-gradient(circle, rgba(255,41,87,0.15) 0%, transparent 70%); filter: blur(40px);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <nav aria-label="Breadcrumb" class="mb-8">
            <ol class="flex items-center gap-2 text-sm" style="color: var(--color-text-muted);">
                <li><a href="{{ route('home') }}" class="hover:text-dark transition-colors">Home</a></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></li>
                <li class="text-dark font-medium">Get Consulting</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-6xl font-bold text-dark" style="letter-spacing: -0.04em;">Consultation</h1>
    </div>
</section>

{{-- Features --}}
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Features</span>
            <h2 class="section-heading mb-4">Why Choose <span class="text-gradient">Endow Corporation?</span></h2>
            <p class="section-subheading mx-auto text-balance">We deliver world-class solutions that drive real results for businesses worldwide.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6" data-animate>
            @foreach([
                ['icon' => 'globe', 'title' => 'Global Expertise', 'description' => 'Delivering world-class solutions across 30+ countries with deep local knowledge.', 'color' => '#FF2957'],
                ['icon' => 'target', 'title' => 'Innovative Approach', 'description' => 'Revolutionizing how businesses operate with cutting-edge strategies.', 'color' => '#7C5CFC'],
                ['icon' => 'heart', 'title' => 'Customer-Centric', 'description' => 'Building lasting partnerships focused on your success.', 'color' => '#3b82f6'],
                ['icon' => 'shield', 'title' => 'Trusted & Secure', 'description' => 'Enterprise-grade security and compliance standards.', 'color' => '#10b981'],
            ] as $index => $feature)
                <div class="bento-card group" style="animation-delay: {{ $index * 0.1 }}s" data-animate>
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-5 transition-transform duration-300 group-hover:scale-110" style="background: {{ $feature['color'] }}10;">
                        <i data-lucide="{{ $feature['icon'] }}" style="width: 24px; height: 24px; color: {{ $feature['color'] }};"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text-secondary);">{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Appointment Form --}}
<section class="py-24 md:py-32 gradient-mesh" id="appointment">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <span class="section-label">Book Now</span>
                <h2 class="section-heading mb-6">Book an <span class="text-gradient">Appointment</span></h2>
                <p class="text-text-secondary leading-relaxed mb-10 text-balance">Ready to take the next step? Let's connect! Whether you're looking for expert consulting in Travel, Education, Technology, or Hospital Tourism, our team is here to help.</p>
                <div class="space-y-5">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(255,41,87,0.1), rgba(255,41,87,0.05));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FF2957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-text-muted mb-0.5">Call us</p>
                            <a href="tel:0226322559" class="font-semibold text-dark hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(124,92,252,0.1), rgba(124,92,252,0.05));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7C5CFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-text-muted mb-0.5">Email us</p>
                            <a href="mailto:contact@endowcorporation.com" class="font-semibold text-dark hover:text-primary transition-colors">contact@endowcorporation.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div data-animate style="animation-delay: 0.15s;">
                <div class="glass-card p-8 md:p-10">
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-2xl flex items-center gap-3" style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.15);">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(16,185,129,0.15);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('appointment.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <input type="hidden" name="page" value="{{ request()->route()->getName() }}">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-dark mb-2">Name *</label>
                                <input type="text" id="name" name="name" placeholder="John Smith" required value="{{ old('name') }}" class="input-field">
                                @error('name') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="service_type" class="block text-sm font-semibold text-dark mb-2">Service Type</label>
                                <select id="service_type" name="service_type" class="input-field">
                                    <option value="">Select...</option>
                                    <option value="Travel Services" {{ old('service_type') === 'Travel Services' ? 'selected' : '' }}>Travel Services</option>
                                    <option value="Education Services" {{ old('service_type') === 'Education Services' ? 'selected' : '' }}>Education Services</option>
                                    <option value="Technology Services" {{ old('service_type') === 'Technology Services' ? 'selected' : '' }}>Technology Services</option>
                                    <option value="Hospital Tourism" {{ old('service_type') === 'Hospital Tourism' ? 'selected' : '' }}>Hospital Tourism</option>
                                </select>
                                @error('service_type') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-sm font-semibold text-dark mb-2">Email *</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                                @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-dark mb-2">Phone *</label>
                                <input type="tel" id="phone" name="phone" placeholder="+880" required value="{{ old('phone') }}" class="input-field">
                                @error('phone') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-dark mb-2">Message (Optional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your needs..." class="input-field resize-none">{{ old('message') }}</textarea>
                            @error('message') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                        </div>
                        <button type="submit" class="btn-primary w-full py-4 text-base">
                            Submit Request
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
