@extends('layouts.app')

@section('title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('meta_title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('meta_description', 'Endow Corporation is a global leader in travel, education, and technology solutions. Empowering businesses worldwide with innovative consulting services.')
@section('og_title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('og_description', 'Endow Corporation is a global leader in travel, education, and technology solutions. Empowering businesses worldwide with innovative consulting services.')

@section('head')
{{-- JSON-LD Organization --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Organization",
    "name": "Endow Corporation",
    "url": "https://endowcorporation.com",
    "logo": "https://endowcorporation.com/wp-content/uploads/2025/01/lg.png",
    "description": "Global leader in travel, education, and technology solutions.",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Room 311, River Tower Officetel, 50 Beodeunaru-ro",
        "addressLocality": "Yeongdeungpo-gu",
        "addressRegion": "Seoul",
        "postalCode": "07248",
        "addressCountry": "KR"
    },
    "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": "+82-2-2632-2559",
        "contactType": "customer service",
        "availableLanguage": ["English", "Korean"]
    },
    "sameAs": [
        "https://www.facebook.com/endowcorporation",
        "https://www.linkedin.com/company/endow-corporation/",
        "https://www.instagram.com/endowcorporation",
        "https://www.youtube.com/@endowcorporation"
    ]
}
</script>
@endsection

@section('content')

{{-- Hero Section --}}
<section class="relative gradient-dark py-24 lg:py-32 overflow-hidden min-h-[90vh] flex items-center">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, rgba(245,37,73,0.4) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(245,37,73,0.3) 0%, transparent 50%);"></div>
    </div>

    {{-- Decorative Shapes --}}
    <div class="absolute top-20 left-20 w-24 h-24 opacity-10 animate-zoom-in">
        <img src="{{ asset('images/main-slider-shape-1.png') }}" alt="" class="w-full h-full object-contain">
    </div>
    <div class="absolute bottom-20 right-20 w-16 h-16 opacity-10 animate-zoom-in delay-300">
        <img src="{{ asset('images/about-one-shape-4.png') }}" alt="" class="w-full h-full object-contain">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            {{-- Pre-title --}}
            <p class="text-primary font-semibold text-lg mb-4 animate-fade-in-up">Endow Corporation</p>

            {{-- Main Headline --}}
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight animate-fade-in-up delay-100">
                Empowering
                <span class="bg-hero-highlight text-white px-4 py-1 rounded-lg inline-block">Businesses</span>
                Globally!
            </h1>

            {{-- Subtitle --}}
            <p class="text-xl text-gray-300 mb-10 animate-fade-in-up delay-200">
                Explore Excellence in Travel, Education, and Technology Solutions.
            </p>

            {{-- CTA Buttons --}}
            <div class="flex flex-wrap gap-4 animate-fade-in-up delay-300">
                <a href="{{ route('consulting') }}" class="btn-primary text-lg">
                    <i class="fas fa-arrow-right mr-2"></i> Get Consulting
                </a>
                <a href="https://www.youtube.com/embed/-BVtp86Ks9E" target="_blank" rel="noopener noreferrer"
                   class="btn-outline border-white text-white hover:bg-white hover:text-dark text-lg group">
                    <i class="fas fa-play-circle mr-2 group-hover:scale-110 transition-transform"></i> Watch Video
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Features Section --}}
<x-sections.features
    label="FEATURES"
    heading='Why Choose <span class="text-gradient">Endow Corporation?</span>'
    :features="[
        ['icon' => 'fas fa-globe', 'title' => 'Global Expertise', 'description' => 'Delivering world-class solutions across industries with a global perspective and local expertise.'],
        ['icon' => 'fas fa-bullseye', 'title' => 'Innovative Approach', 'description' => 'Revolutionizing the way businesses operate with cutting-edge strategies and modern solutions.'],
        ['icon' => 'fas fa-users', 'title' => 'Customer-Centric', 'description' => 'Building lasting partnerships to drive success and deliver measurable results for our clients.'],
    ]"
/>

{{-- About Us Section --}}
<section class="py-20 bg-surface-alt overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            {{-- Image --}}
            <div class="relative" data-animate>
                <div class="relative z-10">
                    <img src="{{ asset('images/about-section.png') }}" alt="About Endow Corporation"
                         class="w-full rounded-2xl shadow-2xl" loading="lazy">
                </div>
                {{-- Decorative Shape --}}
                <div class="absolute -top-6 -left-6 w-32 h-32 opacity-20">
                    <img src="{{ asset('images/about-one-shape-1.png') }}" alt="" class="w-full h-full object-contain" loading="lazy">
                </div>
                <div class="absolute -bottom-4 -right-4 w-16 h-16 opacity-20">
                    <img src="{{ asset('images/about-one-shape-4.png') }}" alt="" class="w-full h-full object-contain" loading="lazy">
                </div>
            </div>

            {{-- Content --}}
            <div data-animate style="animation-delay: 0.2s">
                <span class="section-label">ABOUT US</span>
                <h2 class="section-heading mb-6">
                    A Legacy of <span class="text-gradient">Excellence</span>
                </h2>
                <p class="text-text-light leading-relaxed mb-8">
                    With a passion for innovation and a commitment to excellence, Endow Corporation is a global leader in Travel, Education, and Technology. We transform ideas into reality and empower businesses to reach new heights.
                </p>

                {{-- Checklist --}}
                <div class="grid grid-cols-2 gap-4 mb-8">
                    @foreach(['Innovation', 'Excellence', 'Global Reach', 'Customer Focus', 'Sustainability', 'Expertise'] as $item)
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-xs text-primary"></i>
                            </div>
                            <span class="font-medium text-dark">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('about') }}" class="btn-primary">
                    <i class="fas fa-arrow-right mr-2"></i> Learn More
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Divisions Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">FEATURED SERVICES</span>
            <h2 class="section-heading">
                Explore Our <span class="text-gradient">Divisions</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Endow Travel --}}
            <div class="card card-hover group text-center p-8" data-animate>
                <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-primary/10 flex items-center justify-center
                            group-hover:bg-primary group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-plane-departure text-3xl text-primary group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-3">Endow Travel</h3>
                <p class="text-text-light mb-6">Tailored travel solutions for businesses and individuals.</p>
                <a href="https://endowtravel.com/" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center text-primary font-semibold hover:text-primary-dark transition-colors">
                    Explore Now <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                </a>
            </div>

            {{-- Endow Global Education --}}
            <div class="card card-hover group text-center p-8" data-animate style="animation-delay: 0.1s">
                <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-primary/10 flex items-center justify-center
                            group-hover:bg-primary group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-graduation-cap text-3xl text-primary group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-3">Endow Global Education</h3>
                <p class="text-text-light mb-6">Transforming the education experience through technology.</p>
                <a href="https://endowglobaledu.com/" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center text-primary font-semibold hover:text-primary-dark transition-colors">
                    Learn More <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                </a>
            </div>

            {{-- Endow Technologies --}}
            <div class="card card-hover group text-center p-8" data-animate style="animation-delay: 0.2s">
                <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-primary/10 flex items-center justify-center
                            group-hover:bg-primary group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-microchip text-3xl text-primary group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-3">Endow Technologies</h3>
                <p class="text-text-light mb-6">Cutting-edge technological solutions to revolutionize businesses.</p>
                <a href="https://endowtech.net/" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center text-primary font-semibold hover:text-primary-dark transition-colors">
                    Learn More <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- CTA Banner --}}
<x-sections.cta-banner
    heading="Let's Discuss How We Can Help You <span class='text-white'>Succeed!</span>"
    description="At Endow Corporation, we're dedicated to transforming your vision into reality. Whether you're looking for tailored solutions in Travel, Education, or Technology, our team is ready to guide you every step of the way. Let's collaborate to build innovative strategies and achieve your goals."
    cta-url="{{ route('consulting') }}"
    cta-text="Get a Personalized Quote"
/>

{{-- Why Choose Us Section --}}
<section class="py-20 bg-surface-alt overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            {{-- Content --}}
            <div data-animate>
                <span class="section-label">WHY CHOOSE US</span>
                <h2 class="section-heading mb-6">
                    We Are a Globally Recognized Business <span class="text-gradient">Consulting Leader</span>
                </h2>
                <p class="text-text-light leading-relaxed mb-8">
                    Endow Corporation is celebrated for its excellence in delivering innovative solutions in Travel, Education, and Technology. Our award-winning services empower businesses and individuals to achieve their full potential with confidence and precision.
                </p>

                <div class="space-y-6 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-chart-line text-xl text-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-dark mb-1">Best Business Consulting</h4>
                            <p class="text-text-light text-sm">Our expert team delivers innovative strategies and actionable insights to drive your success.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-headset text-xl text-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-dark mb-1">24/7 Customer Support</h4>
                            <p class="text-text-light text-sm">We are always available to provide unparalleled support and assistance whenever you need it.</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="btn-primary">
                    <i class="fas fa-envelope mr-2"></i> Contact Us
                </a>
            </div>

            {{-- Image --}}
            <div class="relative" data-animate style="animation-delay: 0.2s">
                <img src="{{ asset('images/why-choose-us.jpg') }}" alt="Why Choose Endow Corporation"
                     class="w-full rounded-2xl shadow-2xl" loading="lazy">
                <div class="absolute -bottom-4 -right-4 w-24 h-24 opacity-20">
                    <img src="{{ asset('images/why-choose-one-shape-2.png') }}" alt="" class="w-full h-full object-contain" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Stats Section --}}
<x-sections.stats
    :stats="[
        ['icon' => 'fas fa-briefcase', 'value' => 7, 'label' => 'Years of Experience'],
        ['icon' => 'fas fa-users', 'value' => 25, 'label' => 'Team Members'],
        ['icon' => 'fas fa-project-diagram', 'value' => 940, 'label' => 'Successful Projects'],
        ['icon' => 'fas fa-star', 'value' => 810, 'label' => 'Satisfied Clients'],
    ]"
/>

{{-- FAQ Section --}}
<x-sections.faq
    label="FAQs"
    heading='Frequently asked <span class="text-gradient">questions</span>'
    image="images/faq-image.jpg"
    :faqs="[
        ['question' => 'What services does Endow Corporation provide?', 'answer' => 'We specialize in three core areas: Travel, Education, and Technology. From providing tailored travel solutions to offering cutting-edge technology and educational consulting, we help businesses and individuals achieve their goals.'],
        ['question' => 'What kind of travel solutions do you offer?', 'answer' => 'We provide personalized travel planning for individuals, corporate travel solutions, and assistance with international travel arrangements.'],
        ['question' => 'Do you handle business travel for organizations?', 'answer' => 'Yes, we specialize in creating cost-effective and efficient travel plans for businesses, including flights, accommodations, and itinerary management.'],
        ['question' => 'How can Endow Corporation help with education needs?', 'answer' => 'We offer innovative educational tools, resources, and consulting services for institutions, teachers, and students to enhance learning experiences.'],
        ['question' => 'Do you work with international education systems?', 'answer' => 'Yes, we provide solutions tailored to global education standards and assist with international education programs.'],
    ]"
/>

{{-- Appointment Form --}}
<x-sections.appointment-form
    label="BOOK NOW"
    heading='Book an <span class="text-gradient">Appointment</span>'
    description="Ready to take the next step? Let's connect! Whether you're looking for expert consulting in Travel, Education, or Technology, our team is here to help. Schedule an appointment today to discuss your needs and explore tailored solutions that drive success."
/>

@endsection
