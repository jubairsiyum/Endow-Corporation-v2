@extends('layouts.app')

@section('title', 'Contact Us – Endow Corporation')
@section('meta_title', 'Contact Us – Endow Corporation')
@section('meta_description', 'Get in touch with Endow Corporation. Contact us for travel, education, and technology consulting services. We are available 24/7.')
@section('og_title', 'Contact Us – Endow Corporation')
@section('og_description', 'Get in touch with Endow Corporation. Contact us for travel, education, and technology consulting services.')

@section('head')
{{-- JSON-LD LocalBusiness --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Endow Corporation",
    "image": "https://endowcorporation.com/wp-content/uploads/2025/01/lg.png",
    "telephone": "+82-2-2632-2559",
    "email": "contact@endowcorporation.com",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Room 311, River Tower Officetel, 50 Beodeunaru-ro",
        "addressLocality": "Yeongdeungpo-gu",
        "addressRegion": "Seoul",
        "postalCode": "07248",
        "addressCountry": "KR"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 37.5264,
        "longitude": 126.9103
    },
    "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
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
<x-sections.hero title="Contact" breadcrumb="Contact" />

{{-- Contact Cards --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            {{-- Live Chat --}}
            <div class="card p-8 text-center group" data-animate>
                <div class="w-16 h-16 mx-auto mb-6 bg-primary/10 rounded-full flex items-center justify-center
                            group-hover:bg-primary group-hover:scale-110 transition-all duration-300">
                    <i class="far fa-comments text-2xl text-primary group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2">Live Chat</h3>
                <p class="text-text-muted mb-4">Available 24/7</p>
                <a href="https://wa.link/2tzhly" target="_blank" rel="noopener noreferrer"
                   class="btn-primary w-full text-center">
                    <i class="fab fa-whatsapp mr-2"></i> Let's Chat
                </a>
            </div>

            {{-- Call Us --}}
            <div class="card p-8 text-center group" data-animate style="animation-delay: 0.1s">
                <div class="w-16 h-16 mx-auto mb-6 bg-primary/10 rounded-full flex items-center justify-center
                            group-hover:bg-primary group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-phone-alt text-2xl text-primary group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2">Call Us</h3>
                <p class="text-text-muted mb-4">02-2632-2559 (Landline)<br>+82 10-5767-2559 (CEO)</p>
                <a href="tel:+821057672559" class="btn-primary w-full text-center">
                    <i class="fas fa-phone-alt mr-2"></i> Call Us
                </a>
            </div>

            {{-- Mail Us --}}
            <div class="card p-8 text-center group" data-animate style="animation-delay: 0.2s">
                <div class="w-16 h-16 mx-auto mb-6 bg-primary/10 rounded-full flex items-center justify-center
                            group-hover:bg-primary group-hover:scale-110 transition-all duration-300">
                    <i class="far fa-envelope text-2xl text-primary group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2">Mail Us</h3>
                <p class="text-text-muted mb-4">contact@endowcorporation.com</p>
                <a href="mailto:contact@endowcorporation.com" class="btn-primary w-full text-center">
                    <i class="fas fa-envelope mr-2"></i> Drop Us A Line
                </a>
            </div>
        </div>

        {{-- Contact Form & Map --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {{-- Form --}}
            <div data-animate>
                <h3 class="text-2xl font-bold text-dark mb-6">Send Us a Message</h3>

                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700">
                        <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-dark mb-2">NAME</label>
                        <input type="text" id="name" name="name" placeholder="John Smith"
                               value="{{ old('name') }}" class="input-field">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-dark mb-2">EMAIL *</label>
                            <input type="email" id="email" name="email" placeholder="e.g., john@example.com" required
                                   value="{{ old('email') }}" class="input-field">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-dark mb-2">PHONE NUMBER</label>
                            <input type="tel" id="phone" name="phone" placeholder="+1(00)"
                                   value="{{ old('phone') }}" class="input-field">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-dark mb-2">MESSAGE *</label>
                        <textarea id="message" name="message" rows="5" placeholder="Type here..." required
                                  class="input-field resize-none">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary">
                        <i class="fas fa-paper-plane mr-2"></i> Submit
                    </button>
                </form>
            </div>

            {{-- Map --}}
            <div data-animate style="animation-delay: 0.2s">
                <h3 class="text-2xl font-bold text-dark mb-6">Find Us</h3>
                <div class="rounded-2xl overflow-hidden shadow-lg h-[400px] lg:h-full min-h-[400px]">
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
                <div class="mt-4 flex items-start space-x-3 text-text-light">
                    <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                    <p>Room 311, River Tower Officetel, 50 Beodeunaru-ro, Yeongdeungpo-dong 2-ga, Yeongdeungpo-gu, Seoul 07248, South Korea</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
