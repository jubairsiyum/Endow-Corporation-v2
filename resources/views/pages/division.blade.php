@extends('layouts.app')

@section('title', $division['name'] . ' – Endow Corporation')
@section('meta_title', $division['name'] . ' – Endow Corporation')
@section('meta_description', $division['meta_description'])

@section('content')

{{-- ============================================ --}}
{{-- HERO — Modern Split Layout --}}
{{-- ============================================ --}}
@php
    $heroColor = match($division['color'] ?? 'primary') {
        'accent-blue'   => '#3b82f6',
        'accent-violet' => '#7c3aed',
        'accent-cyan'   => '#06b6d4',
        default         => '#D4202C',
    };
    $heroAccent = match($division['color'] ?? 'primary') {
        'accent-blue'   => '#60a5fa',
        'accent-violet' => '#a78bfa',
        'accent-cyan'   => '#22d3ee',
        default         => '#e83542',
    };
    $heroIcon = match($division['icon'] ?? 'building') {
        'plane'          => 'fa-solid fa-plane-departure',
        'graduation-cap' => 'fa-solid fa-graduation-cap',
        'cpu'            => 'fa-solid fa-microchip',
        'heart-pulse'    => 'fa-solid fa-heart-pulse',
        default          => 'fa-solid fa-building',
    };
    $stats = $division['highlights'] ?? [];
@endphp

<section class="relative overflow-hidden" style="background: #080808; min-height: 85vh; display: flex; align-items: center;">
    {{-- Background Layers --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, rgba(255,255,255,0.8) 1px, transparent 1px); background-size: 32px 32px;"></div>
        <div class="absolute" style="top: -15%; right: -8%; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, {{ $heroColor }}1a 0%, transparent 70%); filter: blur(60px);"></div>
        <div class="absolute" style="bottom: -10%; left: -5%; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, {{ $heroColor }}0d 0%, transparent 70%); filter: blur(50px);"></div>
        <div class="absolute top-0 right-0 w-px h-64 opacity-10" style="background: linear-gradient(to bottom, {{ $heroAccent }}cc, transparent); transform: rotate(25deg); transform-origin: top right;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-24 lg:py-32 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            {{-- LEFT: Content --}}
            <div class="lg:col-span-7">
                <nav class="mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center gap-2 text-[13px] px-4 py-2 rounded-full" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.06); color: rgba(255,255,255,0.4);">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><span class="mx-1 opacity-30">/</span></li>
                        <li class="text-white font-medium">{{ $division['name'] }}</li>
                    </ol>
                </nav>

                <div class="inline-flex items-center gap-2.5 mb-6 px-4 py-1.5 rounded-full text-[11px] font-bold uppercase tracking-[2.5px]" style="background: {{ $heroColor }}1a; color: {{ $heroAccent }}; border: 1px solid {{ $heroColor }}33; letter-spacing: 0.12em;">
                    <span class="w-1.5 h-1.5 rounded-full" style="background: {{ $heroAccent }};"></span>
                    {{ $division['name'] }}
                </div>

                <h1 class="text-[42px] sm:text-[52px] lg:text-[64px] font-extrabold text-white leading-[1.05] tracking-tight mb-6" style="letter-spacing: -0.035em;">
                    {{ explode(' ', $division['name'])[0] ?? $division['name'] }}<br>
                    <span style="background: linear-gradient(135deg, {{ $heroAccent }} 0%, {{ $heroColor }} 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">{{ trim(substr($division['name'], strlen(explode(' ', $division['name'])[0] ?? ''))) }}</span>
                </h1>

                <p class="text-base sm:text-lg leading-relaxed max-w-xl mb-10" style="color: rgba(255,255,255,0.45); line-height: 1.75;">
                    {{ $division['tagline'] }}. {{ $division['meta_description'] }}
                </p>

                @if(count($stats))
                <div class="flex flex-wrap items-center gap-6 sm:gap-10 mb-10">
                    @foreach(array_slice($stats, 0, 3) as $stat)
                        <div class="text-center sm:text-left">
                            <div class="text-[28px] sm:text-[34px] font-extrabold text-white tracking-tight" style="letter-spacing: -0.03em; line-height: 1;">{{ $stat['value'] }}</div>
                            <div class="text-[11px] font-semibold uppercase tracking-[1.5px] mt-1" style="color: rgba(255,255,255,0.3);">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
                @endif

                <a href="{{ $division['cta']['url'] ?? route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>{{ $division['cta']['text'] ?? 'Get Started' }}</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>

            {{-- RIGHT: Visual Element --}}
            <div class="lg:col-span-5 hidden lg:flex items-center justify-center relative">
                <div class="relative w-[320px] h-[380px]">
                    <div class="absolute top-0 right-0 w-[260px] h-[300px] rounded-3xl overflow-hidden shadow-2xl transform rotate-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); backdrop-filter: blur(10px);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4" style="background: {{ $heroColor }}22; border: 1px solid {{ $heroColor }}33;">
                                    <i class="{{ $heroIcon }} text-3xl" style="color: {{ $heroAccent }};"></i>
                                </div>
                                <div class="w-32 h-1 rounded-full mx-auto mb-3 opacity-20" style="background: white;"></div>
                                <div class="w-24 h-1 rounded-full mx-auto mb-3 opacity-10" style="background: white;"></div>
                                <div class="w-16 h-1 rounded-full mx-auto opacity-10" style="background: white;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-[200px] h-[240px] rounded-3xl overflow-hidden shadow-xl transform -rotate-6" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="{{ $heroIcon }} text-5xl opacity-10" style="color: white;"></i>
                        </div>
                    </div>
                    <div class="absolute top-[20%] left-[10%] flex gap-1.5">
                        <span class="w-2 h-2 rounded-full" style="background: {{ $heroAccent }};"></span>
                        <span class="w-2 h-2 rounded-full opacity-40" style="background: {{ $heroColor }};"></span>
                        <span class="w-2 h-2 rounded-full opacity-20" style="background: white;"></span>
                    </div>
                    <div class="absolute bottom-[25%] right-[5%] flex gap-1.5">
                        <span class="w-2 h-2 rounded-full opacity-30" style="background: white;"></span>
                        <span class="w-2 h-2 rounded-full" style="background: {{ $heroAccent }};"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Highlights --}}
@if(isset($division['highlights']))
<section class="py-16" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach($division['highlights'] as $index => $h)
                <div data-animate class="text-center" style="animation-delay: {{ $index * 0.1 }}s;">
                    <p class="text-4xl md:text-5xl font-medium" style="color: var(--color-primary); letter-spacing: -0.03em;">{{ $h['value'] }}</p>
                    <p class="text-sm mt-1" style="color: var(--color-text-muted);">{{ $h['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Services --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-briefcase"></i>
                Our Services
            </div>
            <h2 class="section-heading">What We <span style="color: var(--color-primary);">Offer</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]" data-animate>
            @foreach($division['services'] as $index => $service)
                <div class="service-card">
                    <div class="service-icon mb-6">
                        <i class="{{ $service['icon'] }}"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $service['title'] }}</h3>
                    <p class="text-sm leading-relaxed mb-4" style="color: var(--color-text);">{{ $service['description'] }}</p>
                    @if(isset($service['link']))
                        <a href="{{ $service['link'] }}" target="_blank" rel="noopener noreferrer" class="text-sm font-medium inline-flex items-center gap-2" style="color: var(--color-primary);">
                            Learn More <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
@if(isset($division['cta']))
<section class="px-[15px]">
    <div class="stat-bar flex flex-wrap items-center" style="margin-bottom: 0;">
        <div class="w-full p-10 lg:p-14 text-center">
            <h2 data-animate class="text-3xl md:text-4xl font-medium text-white mb-6" style="letter-spacing: -0.03em;">{{ $division['cta']['heading'] }}</h2>
            <p data-animate class="text-white/70 text-base mb-8 max-w-2xl mx-auto">{{ $division['cta']['description'] }}</p>
            <a href="{{ $division['cta']['url'] }}" class="btn-primary btn-primary-lg">
                <span class="btn-text"><span>{{ $division['cta']['text'] }}</span></span>
                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>
@endif

{{-- Appointment --}}
<section class="section-gap" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-0 left-0 w-[300px] h-[300px] opacity-10" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(60px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-calendar-check"></i>
                    Book Now
                </div>
                <h2 class="section-heading text-white">Book an <span style="color: var(--color-primary);">Appointment</span></h2>
                <p class="text-white/60 text-base leading-relaxed mb-10">{{ $appointment_text }}</p>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(255,41,87,0.15);">
                            <i class="fa-solid fa-phone text-sm" style="color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider" style="color: #a9b8b8;">Call us</p>
                            <a href="tel:0226322559" class="text-white font-medium text-sm hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(255,41,87,0.15);">
                            <i class="fa-regular fa-envelope text-sm" style="color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider" style="color: #a9b8b8;">Email us</p>
                            <a href="mailto:contact@endowcorporation.com" class="text-white font-medium text-sm hover:text-primary transition-colors">contact@endowcorporation.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-animate class="bg-white rounded-xl p-8 md:p-10" style="box-shadow: 0 20px 60px rgba(0,0,0,0.2);">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-lg flex items-center gap-3" style="background: rgba(16,185,129,0.08);">
                        <i class="fa-solid fa-check-circle" style="color: #10b981;"></i>
                        <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                    </div>
                @endif
                <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="page" value="{{ request()->route()->getName() }}">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Name *</label>
                            <input type="text" name="name" placeholder="John Smith" required value="{{ old('name') }}" class="input-field">
                            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Service Type</label>
                            <select name="service_type" class="input-field" style="appearance: auto;">
                                <option value="">Select...</option>
                                <option value="Travel Services">Travel Services</option>
                                <option value="Education Services">Education Services</option>
                                <option value="Technology Services">Technology Services</option>
                                <option value="Hospital Tourism">Hospital Tourism</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Email *</label>
                            <input type="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Phone *</label>
                            <input type="tel" name="phone" placeholder="+880" required value="{{ old('phone') }}" class="input-field">
                            @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Message (Optional)</label>
                        <textarea name="message" rows="4" placeholder="Tell us about your needs..." class="input-field resize-none">{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="btn-primary">
                        <span class="btn-text"><span>Submit Request</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
