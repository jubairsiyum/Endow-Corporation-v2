@extends('layouts.app')

@section('title', 'Contact Us – Endow Corporation')
@section('meta_title', 'Contact Us – Endow Corporation')
@section('meta_description', 'Get in touch with Endow Corporation. Contact us for travel, education, technology, and hospital tourism consulting services.')

@section('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Endow Corporation",
    "telephone": "+82-2-2632-2559",
    "email": "contact@endowcorporation.com",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Room 311, River Tower Officetel, 50 Beodeunaru-ro",
        "addressLocality": "Yeongdeungpo-gu",
        "addressRegion": "Seoul",
        "postalCode": "07248",
        "addressCountry": "KR"
    }
}
</script>
@endsection

@section('content')

{{-- Hero --}}
<section class="section-gap" style="background-color: var(--color-dark); border-radius: 12px; margin: 15px 15px 0; position: relative; overflow: hidden;">
    <div class="absolute bottom-[10%] left-[5%] w-[300px] h-[300px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(65px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 py-16">
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm" style="color: #a9b8b8;">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium">Contact Us</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl lg:text-[68px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">Contact Us</h1>
    </div>
</section>

{{-- Contact Cards --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px] mb-20">
            @foreach([
                ['icon' => 'fa-brands fa-whatsapp', 'title' => 'Live Chat', 'detail' => 'Available 24/7', 'cta' => "Let's Chat", 'link' => 'https://wa.link/2tzhly', 'ext' => true],
                ['icon' => 'fa-solid fa-phone', 'title' => 'Call Us', 'detail' => '02-2632-2559 (Landline)<br>+82 10-5767-2559 (CEO)', 'cta' => 'Call Us', 'link' => 'tel:+821057672559'],
                ['icon' => 'fa-regular fa-envelope', 'title' => 'Mail Us', 'detail' => 'contact@endowcorporation.com', 'cta' => 'Drop Us A Line', 'link' => 'mailto:contact@endowcorporation.com'],
            ] as $index => $card)
                <div data-animate class="service-card text-center">
                    <div class="service-icon mx-auto mb-6">
                        <i class="{{ $card['icon'] }}"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2" style="color: var(--color-text-heading);">{{ $card['title'] }}</h3>
                    <p class="text-sm mb-6" style="color: var(--color-text);">{!! $card['detail'] !!}</p>
                    <a href="{{ $card['link'] }}" {{ ($card['ext'] ?? false) ? 'target="_blank" rel="noopener noreferrer"' : '' }} class="btn-primary w-full justify-center">
                        <span class="btn-text"><span>{{ $card['cta'] }}</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Form & Map --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-envelope"></i>
                    Message
                </div>
                <h2 class="section-heading">Send Us a <span style="color: var(--color-primary);">Message</span></h2>

                @if(session('success'))
                    <div class="mb-6 p-4 rounded-lg flex items-center gap-3" style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.15);">
                        <i class="fa-solid fa-check-circle" style="color: #10b981;"></i>
                        <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Name</label>
                        <input type="text" name="name" placeholder="John Smith" value="{{ old('name') }}" class="input-field">
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Email *</label>
                            <input type="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Phone</label>
                            <input type="tel" name="phone" placeholder="+880" value="{{ old('phone') }}" class="input-field">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2" style="color: var(--color-text-heading);">Message *</label>
                        <textarea name="message" rows="5" placeholder="Tell us about your needs..." required class="input-field resize-none">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="btn-primary">
                        <span class="btn-text"><span>Submit</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </button>
                </form>
            </div>

            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-location-dot"></i>
                    Location
                </div>
                <h2 class="section-heading">Find <span style="color: var(--color-primary);">Us</span></h2>
                <div class="rounded-xl overflow-hidden mb-5" style="min-height: 360px; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.5!2d126.9103!3d37.5264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDMxJzM1LjAiTiAxMjbCsDU0JzM3LjEiRQ!5e0!3m2!1sen!2skr!4v1234567890"
                        width="100%" height="100%" style="border:0; min-height: 360px;" allowfullscreen="" loading="lazy"
                        title="Endow Corporation Location">
                    </iframe>
                </div>
                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-location-dot text-sm mt-1" style="color: var(--color-primary);"></i>
                    <p class="text-sm" style="color: var(--color-text);">Room 311, River Tower Officetel, 50 Beodeunaru-ro, Yeongdeungpo-gu, Seoul 07248, South Korea</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
