@extends('layouts.app')

@section('title', 'Contact Us – Endow Corporation')
@section('meta_title', 'Contact Us – Endow Corporation')
@section('meta_description', 'Get in touch with Endow Corporation. Contact us for travel, education, technology, and hospital tourism consulting services. We are available 24/7.')
@section('og_title', 'Contact Us – Endow Corporation')
@section('og_description', 'Get in touch with Endow Corporation. Contact us for travel, education, technology, and hospital tourism consulting services.')

@section('head')
{{-- JSON-LD LocalBusiness --}}
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
<section class="relative min-h-[40vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
        <nav aria-label="Breadcrumb" class="mb-6">
            <ol class="flex items-center gap-2 text-sm text-white/50">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-white">Contact Us</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl font-bold text-white">Contact Us</h1>
    </div>
</section>

{{-- Contact Cards --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-20">
            @foreach([
                ['icon' => 'fab fa-whatsapp', 'title' => 'Live Chat', 'detail' => 'Available 24/7', 'cta' => "Let's Chat", 'link' => 'https://wa.link/2tzhly', 'external' => true],
                ['icon' => 'fas fa-phone-alt', 'title' => 'Call Us', 'detail' => '02-2632-2559 (Landline)<br>+82 10-5767-2559 (CEO)', 'cta' => 'Call Us', 'link' => 'tel:+821057672559'],
                ['icon' => 'far fa-envelope', 'title' => 'Mail Us', 'detail' => 'contact@endowcorporation.com', 'cta' => 'Drop Us A Line', 'link' => 'mailto:contact@endowcorporation.com'],
            ] as $index => $card)
                <div class="glass-card p-8 text-center group hover:shadow-xl transition-all duration-300" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-primary/10 to-primary/5 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="{{ $card['icon'] }} text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-2">{{ $card['title'] }}</h3>
                    <p class="text-text-muted text-sm mb-6">{!! $card['detail'] !!}</p>
                    <a href="{{ $card['link'] }}" {{ $card['external'] ?? false ? 'target="_blank" rel="noopener noreferrer"' : '' }} class="btn-primary w-full text-center">
                        <i class="{{ $card['icon'] }}"></i> {{ $card['cta'] }}
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Contact Form & Map --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {{-- Form --}}
            <div data-animate>
                <h2 class="text-2xl font-bold text-dark mb-6">Send Us a <span class="text-gradient">Message</span></h2>

                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-2xl text-green-700 flex items-center gap-3">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-green-600 text-sm"></i>
                        </div>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-dark mb-2">Name</label>
                        <input type="text" id="name" name="name" placeholder="John Smith" value="{{ old('name') }}" class="input-field">
                        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="email" class="block text-sm font-medium text-dark mb-2">Email *</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-dark mb-2">Phone</label>
                            <input type="tel" id="phone" name="phone" placeholder="+880" value="{{ old('phone') }}" class="input-field">
                            @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-dark mb-2">Message *</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us about your needs..." required class="input-field resize-none">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full">
                        <i class="fas fa-paper-plane"></i> Submit
                    </button>
                </form>
            </div>

            {{-- Map --}}
            <div data-animate style="animation-delay: 0.2s">
                <h2 class="text-2xl font-bold text-dark mb-6">Find <span class="text-gradient">Us</span></h2>
                <div class="rounded-2xl overflow-hidden shadow-xl h-[400px] lg:h-full min-h-[400px]">
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
                <div class="mt-4 flex items-start gap-3 text-text-light">
                    <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-dark text-sm">Our Office</p>
                        <p class="text-sm text-text-light">Room 311, River Tower Officetel, 50 Beodeunaru-ro, Yeongdeungpo-dong 2-ga, Yeongdeungpo-gu, Seoul 07248, South Korea</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
