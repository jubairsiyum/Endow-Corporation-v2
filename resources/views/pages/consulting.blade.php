@extends('layouts.app')

@section('title', 'Get Consulting – Endow Corporation')
@section('meta_title', 'Get Consulting – Endow Corporation')
@section('meta_description', 'Schedule a consultation with Endow Corporation. Expert consulting in travel, education, technology, and hospital tourism to help your business succeed.')
@section('og_title', 'Get Consulting – Endow Corporation')
@section('og_description', 'Schedule a consultation with Endow Corporation. Expert consulting in travel, education, technology, and hospital tourism.')

@section('content')

{{-- Hero --}}
<section class="relative min-h-[40vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
        <nav aria-label="Breadcrumb" class="mb-6">
            <ol class="flex items-center gap-2 text-sm text-white/50">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-white">Get Consulting</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl font-bold text-white">Consultation</h1>
    </div>
</section>

{{-- Features --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Features</span>
            <h2 class="section-heading">Why Choose <span class="text-gradient">Endow Corporation?</span></h2>
        </div>

        <div class="bento-grid" data-animate>
            @foreach([
                ['icon' => 'fas fa-globe', 'title' => 'Global Expertise', 'description' => 'Delivering world-class solutions across 30+ countries with a global perspective and local expertise.'],
                ['icon' => 'fas fa-bullseye', 'title' => 'Innovative Approach', 'description' => 'Revolutionizing the way businesses operate with cutting-edge strategies and modern solutions.'],
                ['icon' => 'fas fa-heart', 'title' => 'Customer-Centric', 'description' => 'Building lasting partnerships to drive success and deliver measurable results for our clients.'],
                ['icon' => 'fas fa-shield-alt', 'title' => 'Trusted & Secure', 'description' => 'Your data and investments are protected with enterprise-grade security and compliance standards.'],
            ] as $index => $feature)
                <div class="bento-card group" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="w-14 h-14 bg-gradient-to-br from-primary/10 to-primary/5 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300">
                        <i class="{{ $feature['icon'] }} text-xl text-primary"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-text-light text-sm leading-relaxed">{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Appointment Form --}}
<section class="py-24 gradient-mesh" id="appointment">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-animate>
                <span class="section-label">Book Now</span>
                <h2 class="section-heading mb-6">
                    Book an <span class="text-gradient">Appointment</span>
                </h2>
                <p class="text-text-light leading-relaxed mb-8 text-balance">Ready to take the next step? Let's connect! Whether you're looking for expert consulting in Travel, Education, Technology, or Hospital Tourism, our team is here to help. Schedule an appointment today to discuss your needs and explore tailored solutions that drive success.</p>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone-alt text-primary"></i>
                        </div>
                        <div>
                            <p class="text-xs text-text-muted uppercase tracking-wider">Call us</p>
                            <a href="tel:0226322559" class="font-semibold text-dark hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="far fa-envelope text-primary"></i>
                        </div>
                        <div>
                            <p class="text-xs text-text-muted uppercase tracking-wider">Email us</p>
                            <a href="mailto:contact@endowcorporation.com" class="font-semibold text-dark hover:text-primary transition-colors">contact@endowcorporation.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-8 shadow-xl" data-animate style="animation-delay: 0.2s">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-2xl text-green-700 flex items-center gap-3">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-green-600 text-sm"></i>
                        </div>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('appointment.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <input type="hidden" name="page" value="{{ request()->route()->getName() }}">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-sm font-medium text-dark mb-2">Name *</label>
                            <input type="text" id="name" name="name" placeholder="John Smith" required value="{{ old('name') }}" class="input-field">
                            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="service_type" class="block text-sm font-medium text-dark mb-2">Service Type</label>
                            <select id="service_type" name="service_type" class="input-field">
                                <option value="">Select...</option>
                                <option value="Travel Services" {{ old('service_type') === 'Travel Services' ? 'selected' : '' }}>Travel Services</option>
                                <option value="Education Services" {{ old('service_type') === 'Education Services' ? 'selected' : '' }}>Education Services</option>
                                <option value="Technology Services" {{ old('service_type') === 'Technology Services' ? 'selected' : '' }}>Technology Services</option>
                                <option value="Hospital Tourism" {{ old('service_type') === 'Hospital Tourism' ? 'selected' : '' }}>Hospital Tourism</option>
                            </select>
                            @error('service_type') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="email" class="block text-sm font-medium text-dark mb-2">Email *</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-dark mb-2">Phone *</label>
                            <input type="tel" id="phone" name="phone" placeholder="+880" required value="{{ old('phone') }}" class="input-field">
                            @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-dark mb-2">Message (Optional)</label>
                        <textarea id="message" name="message" rows="4" placeholder="Tell us about your needs..." class="input-field resize-none">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="btn-primary w-full">
                        <i class="fas fa-paper-plane"></i> Submit Request
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
