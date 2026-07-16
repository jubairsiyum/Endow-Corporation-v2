@extends('layouts.app')

@section('title', 'Contact Us – Endow Corporation')
@section('meta_title', 'Contact Us – Endow Corporation')
@section('meta_description', 'Get in touch with Endow Corporation. Contact us for travel, education, technology, and hospital tourism consulting services. We are available 24/7.')
@section('og_title', 'Contact Us – Endow Corporation')
@section('og_description', 'Get in touch with Endow Corporation. Contact us for travel, education, technology, and hospital tourism consulting services.')

@section('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Endow Corporation",
    "image": "https://endowcorporation.com/wp-content/uploads/2025/01/lg.png",
    "telephone": "+82-2-2632-2559",
    "email": "contact@endowcorporation.com",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Room 311, River Tower Officetel, 50 Beodeunaru-ro",
        "addressLocality": "Yeongdeungpo-gu",
        "addressRegion": "Seoul",
        "postalCode": "07248",
        "addressCountry": "KR"
    },
    "geo": {
        "@@type": "GeoCoordinates",
        "latitude": 37.5264,
        "longitude": 126.9103
    },
    "openingHoursSpecification": [
        {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Saturday"],
            "opens": "08:00",
            "closes": "18:00"
        }
    ]
}
</script>
@endsection

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 overflow-hidden gradient-hero">
    <div class="absolute top-20 left-20 w-72 h-72 rounded-full floating opacity-30" style="background: radial-gradient(circle, rgba(124,92,252,0.15) 0%, transparent 70%); filter: blur(40px);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <nav aria-label="Breadcrumb" class="mb-8">
            <ol class="flex items-center gap-2 text-sm" style="color: var(--color-text-muted);">
                <li><a href="{{ route('home') }}" class="hover:text-dark transition-colors">Home</a></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></li>
                <li class="text-dark font-medium">Contact Us</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-6xl font-bold text-dark" style="letter-spacing: -0.04em;">Contact Us</h1>
    </div>
</section>

{{-- Contact Cards --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-20">
            @foreach([
                ['icon' => 'message-circle', 'title' => 'Live Chat', 'detail' => 'Available 24/7', 'cta' => "Let's Chat", 'link' => 'https://wa.link/2tzhly', 'external' => true, 'color' => '#FF2957'],
                ['icon' => 'phone', 'title' => 'Call Us', 'detail' => '02-2632-2559 (Landline)<br>+82 10-5767-2559 (CEO)', 'cta' => 'Call Us', 'link' => 'tel:+821057672559', 'color' => '#7C5CFC'],
                ['icon' => 'mail', 'title' => 'Mail Us', 'detail' => 'contact@endowcorporation.com', 'cta' => 'Drop Us A Line', 'link' => 'mailto:contact@endowcorporation.com', 'color' => '#3b82f6'],
            ] as $index => $card)
                <div class="bento-card p-8 text-center" style="animation-delay: {{ $index * 0.1 }}s" data-animate>
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mx-auto mb-6" style="background: {{ $card['color'] }}10;">
                        <i data-lucide="{{ $card['icon'] }}" style="width: 24px; height: 24px; color: {{ $card['color'] }};"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">{{ $card['title'] }}</h3>
                    <p class="text-sm mb-6" style="color: var(--color-text-secondary);">{!! $card['detail'] !!}</p>
                    <a href="{{ $card['link'] }}" {{ $card['external'] ?? false ? 'target="_blank" rel="noopener noreferrer"' : '' }} class="btn-primary w-full text-center text-sm py-3">
                        {{ $card['cta'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Contact Form & Map --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {{-- Form --}}
            <div data-animate>
                <span class="section-label">Message</span>
                <h2 class="section-heading mb-6">Send Us a <span class="text-gradient">Message</span></h2>

                @if(session('success'))
                    <div class="mb-6 p-4 rounded-2xl flex items-center gap-3" style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.15);">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(16,185,129,0.15);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-semibold text-dark mb-2">Name</label>
                        <input type="text" id="name" name="name" placeholder="John Smith" value="{{ old('name') }}" class="input-field">
                        @error('name') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="email" class="block text-sm font-semibold text-dark mb-2">Email *</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                            @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-dark mb-2">Phone</label>
                            <input type="tel" id="phone" name="phone" placeholder="+880" value="{{ old('phone') }}" class="input-field">
                            @error('phone') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-dark mb-2">Message *</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us about your needs..." required class="input-field resize-none">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full py-4 text-base">
                        Submit
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </button>
                </form>
            </div>

            {{-- Map --}}
            <div data-animate style="animation-delay: 0.15s;">
                <span class="section-label">Location</span>
                <h2 class="section-heading mb-6">Find <span class="text-gradient">Us</span></h2>
                <div class="rounded-3xl overflow-hidden shadow-xl h-[400px] lg:h-full min-h-[400px]" style="box-shadow: 0 32px 64px -16px rgba(0,0,0,0.1);">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.5!2d126.9103!3d37.5264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDMxJzM1LjAiTiAxMjbCsDU0JzM3LjEiRQ!5e0!3m2!1sen!2skr!4v1234567890"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Endow Corporation Location">
                    </iframe>
                </div>
                <div class="mt-5 flex items-start gap-3">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(255,41,87,0.1), rgba(124,92,252,0.1));">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FF2957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-dark">Our Office</p>
                        <p class="text-sm text-text-secondary">Room 311, River Tower Officetel, 50 Beodeunaru-ro, Yeongdeungpo-gu, Seoul 07248, South Korea</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
