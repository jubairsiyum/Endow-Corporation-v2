@extends('layouts.app')

@section('title', $division['name'] . ' – Endow Corporation')
@section('meta_title', $division['name'] . ' – Endow Corporation')
@section('meta_description', $division['meta_description'])
@section('og_title', $division['name'] . ' – Endow Corporation')
@section('og_description', $division['meta_description'])

@section('content')

{{-- Hero --}}
<section class="relative min-h-[50vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
        {{-- Breadcrumb --}}
        <nav aria-label="Breadcrumb" class="mb-6">
            <ol class="flex items-center gap-2 text-sm text-white/50">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-white">{{ $division['name'] }}</li>
            </ol>
        </nav>
        <div class="flex items-center gap-4 mb-4">
            <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/10">
                <i class="{{ $division['icon'] ?? 'fas fa-building' }} text-2xl text-white"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-white">{{ $division['name'] }}</h1>
                <p class="text-white/60 text-lg mt-1">{{ $division['tagline'] }}</p>
            </div>
        </div>
    </div>
</section>

{{-- Highlights (for Hospital Tourism) --}}
@if(isset($division['highlights']))
<section class="py-16 bg-white border-b border-border-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach($division['highlights'] as $index => $highlight)
                <div class="text-center" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="text-4xl font-bold text-gradient mb-1">{{ $highlight['value'] }}</div>
                    <div class="text-sm text-text-muted">{{ $highlight['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Services --}}
<section class="py-24 gradient-mesh">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">Our Services</span>
            <h2 class="section-heading mb-4">What We <span class="text-gradient">Offer</span></h2>
            <p class="section-subheading mx-auto">Comprehensive solutions tailored to your needs</p>
        </div>

        <div class="bento-grid" data-animate>
            @foreach($division['services'] as $index => $service)
                <div class="bento-card group" style="animation-delay: {{ $index * 0.05 }}s">
                    <div class="w-14 h-14 bg-gradient-to-br from-primary/10 to-primary/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="{{ $service['icon'] }} text-xl text-primary"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">{{ $service['title'] }}</h3>
                    <p class="text-text-light text-sm leading-relaxed mb-4">{{ $service['description'] }}</p>
                    @if(isset($service['link']))
                        <a href="{{ $service['link'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-primary font-semibold text-sm group-hover:gap-3 transition-all">
                            Learn More <i class="fas fa-external-link-alt text-xs"></i>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Extra CTA --}}
@if(isset($division['cta']))
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 gradient-hero opacity-90"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-animate>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">{{ $division['cta']['heading'] }}</h2>
            <p class="text-white/80 text-lg leading-relaxed mb-10">{{ $division['cta']['description'] }}</p>
            <a href="{{ $division['cta']['url'] }}" class="btn-white text-base">
                <i class="fas fa-arrow-right"></i> {{ $division['cta']['text'] }}
            </a>
        </div>
    </section>
@endif

{{-- Appointment Form --}}
<section class="py-24 bg-white" id="appointment">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-animate>
                <span class="section-label">Book Now</span>
                <h2 class="section-heading mb-6">
                    Book an <span class="text-gradient">Appointment</span>
                </h2>
                <p class="text-text-light leading-relaxed mb-8 text-balance">{{ $appointment_text }}</p>
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
