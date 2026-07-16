@extends('layouts.app')

@section('title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('meta_title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('meta_description', 'Endow Corporation is a global leader in travel, education, and technology solutions. Empowering businesses worldwide with innovative consulting services.')
@section('og_title', 'Endow Corporation – Navigating Knowledge, Embracing Adventure')
@section('og_description', 'Endow Corporation is a global leader in travel, education, and technology solutions. Empowering businesses worldwide with innovative consulting services.')

@section('head')
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

{{-- Modern Hero Section --}}
<section class="relative min-h-[92vh] flex items-center overflow-hidden">
    {{-- Mesh Gradient Background --}}
    <div class="absolute inset-0 gradient-hero"></div>

    {{-- Animated Orbs --}}
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/20 rounded-full blur-3xl floating"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-accent-violet/15 rounded-full blur-3xl float-delayed"></div>
    <div class="absolute top-1/2 right-1/3 w-64 h-64 bg-accent-cyan/10 rounded-full blur-3xl floating" style="animation-delay: -2s;"></div>

    {{-- Grid Pattern --}}
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Left: Content --}}
            <div>
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full border border-white/10 text-white/80 text-sm mb-8 animate-fade-in-up">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    Empowering Businesses Since 2018
                </div>

                {{-- Headline --}}
                <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white leading-[1.1] mb-6 animate-fade-in-up delay-100" style="letter-spacing: -0.03em;">
                    Empowering
                    <span class="relative inline-block">
                        <span class="relative z-10 bg-clip-text text-transparent bg-gradient-to-r from-primary via-accent to-accent-violet">Businesses</span>
                        <span class="absolute -bottom-1 left-0 right-0 h-3 bg-primary/20 rounded-full blur-sm"></span>
                    </span>
                    Globally!
                </h1>

                {{-- Subtitle --}}
                <p class="text-lg md:text-xl text-white/70 leading-relaxed mb-10 max-w-lg animate-fade-in-up delay-200 text-balance">
                    Explore Excellence in Travel, Education, Technology, and Healthcare Solutions. Your trusted partner for global success.
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-wrap gap-4 animate-fade-in-up delay-300">
                    <a href="{{ route('consulting') }}" class="btn-primary text-base">
                        <i class="fas fa-arrow-right"></i> Get Consulting
                    </a>
                    <a href="https://www.youtube.com/embed/-BVtp86Ks9E" target="_blank" rel="noopener noreferrer" class="btn-glass text-base">
                        <i class="fas fa-play text-sm"></i> Watch Video
                    </a>
                </div>

                {{-- Trust Indicators --}}
                <div class="flex items-center gap-8 mt-12 animate-fade-in-up delay-400">
                    <div class="flex -space-x-2">
                        @foreach(range(1, 4) as $i)
                            <div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-sm border-2 border-dark flex items-center justify-center">
                                <i class="fas fa-user text-white/60 text-xs"></i>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <div class="flex items-center gap-1 mb-0.5">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                            @endfor
                        </div>
                        <p class="text-white/50 text-sm">Trusted by 810+ clients worldwide</p>
                    </div>
                </div>
            </div>

            {{-- Right: Glassmorphic Feature Cards --}}
            <div class="relative hidden lg:block animate-fade-in-right delay-200">
                <div class="relative">
                    {{-- Main Card --}}
                    <div class="glass-dark p-8 rounded-3xl">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-primary to-accent rounded-2xl flex items-center justify-center shadow-lg shadow-primary/25">
                                <i class="fas fa-globe text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-lg">Global Solutions</h3>
                                <p class="text-white/50 text-sm">30+ countries served</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white/5 rounded-2xl p-4 border border-white/5">
                                <div class="text-3xl font-bold text-white mb-1">940+</div>
                                <div class="text-white/40 text-sm">Projects Done</div>
                            </div>
                            <div class="bg-white/5 rounded-2xl p-4 border border-white/5">
                                <div class="text-3xl font-bold text-white mb-1">7+</div>
                                <div class="text-white/40 text-sm">Years Experience</div>
                            </div>
                            <div class="bg-white/5 rounded-2xl p-4 border border-white/5">
                                <div class="text-3xl font-bold text-white mb-1">25+</div>
                                <div class="text-white/40 text-sm">Team Members</div>
                            </div>
                            <div class="bg-white/5 rounded-2xl p-4 border border-white/5">
                                <div class="text-3xl font-bold text-white mb-1">810+</div>
                                <div class="text-white/40 text-sm">Happy Clients</div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating Mini Cards --}}
                    <div class="absolute -top-6 -right-6 glass-card p-4 rounded-2xl floating">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-500/20 rounded-xl flex items-center justify-center">
                                <i class="fas fa-check text-green-400 text-sm"></i>
                            </div>
                            <div>
                                <p class="text-dark font-semibold text-sm">ISO Certified</p>
                                <p class="text-text-muted text-xs">Quality Assured</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 glass-card p-4 rounded-2xl float-delayed">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center">
                                <i class="fas fa-headset text-primary text-sm"></i>
                            </div>
                            <div>
                                <p class="text-dark font-semibold text-sm">24/7 Support</p>
                                <p class="text-text-muted text-xs">Always available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center pt-2">
            <div class="w-1 h-2 bg-white/50 rounded-full"></div>
        </div>
    </div>
</section>

{{-- Services Bento Grid --}}
<section class="py-24 gradient-mesh">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">What We Do</span>
            <h2 class="section-heading mb-4">
                Our <span class="text-gradient">Divisions</span>
            </h2>
            <p class="section-subheading mx-auto">
                Four pillars of excellence delivering comprehensive solutions across the globe
            </p>
        </div>

        <div class="bento-grid" data-animate>
            {{-- Travel --}}
            <div class="bento-card group">
                <div class="w-14 h-14 bg-gradient-to-br from-primary/10 to-primary/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-plane-departure text-primary text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2">Endow Travel</h3>
                <p class="text-text-light text-sm leading-relaxed mb-6">Tailored travel solutions for businesses and individuals. From corporate trips to luxury vacations.</p>
                <a href="{{ route('division.show', 'travel') }}" class="inline-flex items-center gap-2 text-primary font-semibold text-sm group-hover:gap-3 transition-all">
                    Explore <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>

            {{-- Education --}}
            <div class="bento-card group">
                <div class="w-14 h-14 bg-gradient-to-br from-accent-blue/10 to-accent-blue/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-graduation-cap text-accent-blue text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2">Global Education</h3>
                <p class="text-text-light text-sm leading-relaxed mb-6">Transforming education through technology. World-class programs and international partnerships.</p>
                <a href="{{ route('division.show', 'education') }}" class="inline-flex items-center gap-2 text-accent-blue font-semibold text-sm group-hover:gap-3 transition-all">
                    Learn More <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>

            {{-- Technology --}}
            <div class="bento-card group">
                <div class="w-14 h-14 bg-gradient-to-br from-accent-violet/10 to-accent-violet/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-microchip text-accent-violet text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2">Technologies</h3>
                <p class="text-text-light text-sm leading-relaxed mb-6">Cutting-edge tech solutions. AI, cloud computing, and digital transformation for modern businesses.</p>
                <a href="{{ route('division.show', 'technology') }}" class="inline-flex items-center gap-2 text-accent-violet font-semibold text-sm group-hover:gap-3 transition-all">
                    Discover <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>

            {{-- Hospital Tourism --}}
            <div class="bento-card group md:col-span-2 lg:col-span-3 bg-gradient-to-r from-accent-cyan/5 to-transparent border-accent-cyan/10">
                <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                    <div class="flex-1">
                        <div class="w-14 h-14 bg-gradient-to-br from-accent-cyan/10 to-accent-cyan/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-heartbeat text-accent-cyan text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-2">Hospital Tourism</h3>
                        <p class="text-text-light text-sm leading-relaxed mb-6 max-w-2xl">Access world-class medical facilities across 30+ countries. Comprehensive healthcare travel with expert coordination, visa assistance, and post-treatment follow-up care.</p>
                        <a href="{{ route('division.show', 'hospital-tourism') }}" class="inline-flex items-center gap-2 text-accent-cyan font-semibold text-sm group-hover:gap-3 transition-all">
                            Learn More <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                    <div class="flex gap-6 md:gap-8">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-dark">500+</div>
                            <div class="text-xs text-text-muted">Hospitals</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-dark">30+</div>
                            <div class="text-xs text-text-muted">Countries</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-dark">40%</div>
                            <div class="text-xs text-text-muted">Cost Savings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About Section with Glass Card --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <span class="section-label">About Us</span>
                <h2 class="section-heading mb-6">
                    A Legacy of <span class="text-gradient">Excellence</span>
                </h2>
                <p class="text-text-light leading-relaxed mb-8 text-balance">
                    With a passion for innovation and a commitment to excellence, Endow Corporation is a global leader in Travel, Education, Technology, and Healthcare. We transform ideas into reality and empower businesses to reach new heights.
                </p>

                <div class="grid grid-cols-2 gap-4 mb-8">
                    @foreach(['Innovation', 'Excellence', 'Global Reach', 'Customer Focus', 'Sustainability', 'Expertise'] as $index => $item)
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-surface-alt/50 hover:bg-primary/5 transition-colors group" data-animate style="animation-delay: {{ $index * 0.05 }}s">
                            <div class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors flex-shrink-0">
                                <i class="fas fa-check text-xs text-primary"></i>
                            </div>
                            <span class="font-medium text-dark text-sm">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('about') }}" class="btn-primary">
                    <i class="fas fa-arrow-right"></i> Learn More
                </a>
            </div>

            <div class="relative" data-animate style="animation-delay: 0.2s">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/about-section.png') }}" alt="About Endow Corporation" class="w-full h-auto" loading="lazy" onerror="this.parentElement.classList.add('bg-gradient-to-br','from-primary/10','to-accent-violet/10','h-96');this.style.display='none'">
                </div>
                {{-- Floating Stats Card --}}
                <div class="absolute -bottom-6 -left-6 glass-card p-5 rounded-2xl floating">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-accent rounded-xl flex items-center justify-center">
                            <i class="fas fa-trophy text-white"></i>
                        </div>
                        <div>
                            <p class="text-dark font-bold text-lg">Award Winning</p>
                            <p class="text-text-muted text-xs">Best Consulting 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="py-24 gradient-mesh">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1" data-animate>
                <span class="section-label">Why Choose Us</span>
                <h2 class="section-heading mb-6">
                    We Are a Globally Recognized <span class="text-gradient">Consulting Leader</span>
                </h2>
                <p class="text-text-light leading-relaxed mb-8 text-balance">
                    Endow Corporation is celebrated for its excellence in delivering innovative solutions in Travel, Education, Technology, and Healthcare. Our award-winning services empower businesses and individuals to achieve their full potential.
                </p>

                <div class="space-y-6 mb-8">
                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/50 backdrop-blur-sm border border-border/50 hover:shadow-lg transition-all group">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary/10 to-primary/5 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fas fa-chart-line text-primary"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-dark mb-1">Best Business Consulting</h4>
                            <p class="text-text-light text-sm">Our expert team delivers innovative strategies and actionable insights to drive your success.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/50 backdrop-blur-sm border border-border/50 hover:shadow-lg transition-all group">
                        <div class="w-12 h-12 bg-gradient-to-br from-accent-blue/10 to-accent-blue/5 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fas fa-headset text-accent-blue"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-dark mb-1">24/7 Customer Support</h4>
                            <p class="text-text-light text-sm">We are always available to provide unparalleled support and assistance whenever you need it.</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="btn-primary">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>

            <div class="order-1 lg:order-2 relative" data-animate style="animation-delay: 0.2s">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/why-choose-us.jpg') }}" alt="Why Choose Endow Corporation" class="w-full h-auto" loading="lazy" onerror="this.parentElement.classList.add('bg-gradient-to-br','from-dark/10','to-accent-violet/10','h-96');this.style.display='none'">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="py-20 gradient-dark relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 50%, rgba(245,37,73,0.4) 0%, transparent 50%), radial-gradient(circle at 80% 50%, rgba(99,102,241,0.3) 0%, transparent 50%);"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['icon' => 'fas fa-briefcase', 'value' => 7, 'label' => 'Years Experience', 'color' => 'primary'],
                ['icon' => 'fas fa-users', 'value' => 25, 'label' => 'Team Members', 'color' => 'accent-blue'],
                ['icon' => 'fas fa-project-diagram', 'value' => 940, 'label' => 'Projects Done', 'color' => 'accent-violet'],
                ['icon' => 'fas fa-star', 'value' => 810, 'label' => 'Happy Clients', 'color' => 'accent-cyan'],
            ] as $index => $stat)
                <div class="text-center" data-animate style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="w-16 h-16 mx-auto mb-4 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center">
                        <i class="{{ $stat['icon'] }} text-2xl text-{{ $stat['color'] }}"></i>
                    </div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2 counter" data-target="{{ $stat['value'] }}">0</div>
                    <p class="text-white/50 text-sm uppercase tracking-wider">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA Banner --}}
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 gradient-hero opacity-90"></div>
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-animate>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 text-balance">
            Let's Discuss How We Can Help You <span class="text-gradient">Succeed!</span>
        </h2>
        <p class="text-white/80 text-lg leading-relaxed mb-10 max-w-3xl mx-auto text-balance">
            Whether you're looking for tailored solutions in Travel, Education, Technology, or Healthcare, our team is ready to guide you every step of the way.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('consulting') }}" class="btn-white text-base">
                <i class="fas fa-arrow-right"></i> Get a Personalized Quote
            </a>
            <a href="{{ route('contact') }}" class="btn-glass text-base">
                <i class="fas fa-phone"></i> Schedule a Call
            </a>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="py-24 bg-white" id="faq">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <div data-animate>
                <span class="section-label">FAQs</span>
                <h2 class="section-heading mb-8">
                    Frequently Asked <span class="text-gradient">Questions</span>
                </h2>

                <div class="space-y-3">
                    @foreach([
                        ['question' => 'What services does Endow Corporation provide?', 'answer' => 'We specialize in four core areas: Travel, Education, Technology, and Hospital Tourism. From providing tailored travel solutions to offering cutting-edge technology and educational consulting, we help businesses and individuals achieve their goals.'],
                        ['question' => 'What kind of travel solutions do you offer?', 'answer' => 'We provide personalized travel planning for individuals, corporate travel solutions, and assistance with international travel arrangements.'],
                        ['question' => 'Do you handle business travel for organizations?', 'answer' => 'Yes, we specialize in creating cost-effective and efficient travel plans for businesses, including flights, accommodations, and itinerary management.'],
                        ['question' => 'How can Endow Corporation help with education needs?', 'answer' => 'We offer innovative educational tools, resources, and consulting services for institutions, teachers, and students to enhance learning experiences.'],
                        ['question' => 'What is Hospital Tourism?', 'answer' => 'Hospital Tourism is our medical travel service that connects patients with world-class hospitals and specialists across 30+ countries. We handle everything from hospital selection and doctor matching to visa assistance and post-treatment care.'],
                    ] as $index => $faq)
                        <div class="faq-item border border-border rounded-2xl overflow-hidden {{ $index === 0 ? 'faq-active bg-primary/5 border-primary/20' : '' }}">
                            <button class="faq-toggle w-full flex items-center justify-between px-6 py-5 text-left transition-colors {{ $index === 0 ? '' : 'hover:bg-surface-alt' }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                                <span class="font-semibold text-dark pr-4">{{ $faq['question'] }}</span>
                                <i class="fas fa-chevron-down text-primary text-sm transition-transform duration-300 faq-icon {{ $index === 0 ? 'rotate-180' : '' }}"></i>
                            </button>
                            <div class="faq-content px-6 {{ $index === 0 ? '' : 'hidden' }}">
                                <p class="text-text-light pb-5 leading-relaxed">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="relative" data-animate style="animation-delay: 0.2s">
                <div class="sticky top-28">
                    <div class="card p-8 text-center">
                        <div class="w-20 h-20 mx-auto mb-6 bg-primary/10 rounded-3xl flex items-center justify-center">
                            <i class="fas fa-question text-3xl text-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Still have questions?</h3>
                        <p class="text-text-light text-sm mb-6">Can't find the answer you're looking for? Chat with our team.</p>
                        <a href="{{ route('contact') }}" class="btn-primary w-full text-center">
                            <i class="fas fa-comments"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
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
                <p class="text-text-light leading-relaxed mb-8 text-balance">
                    Ready to take the next step? Let's connect! Whether you're looking for expert consulting in Travel, Education, Technology, or Healthcare, our team is here to help.
                </p>
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
                                <option value="Custom Software Development" {{ old('service_type') === 'Custom Software Development' ? 'selected' : '' }}>Custom Software Development</option>
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
