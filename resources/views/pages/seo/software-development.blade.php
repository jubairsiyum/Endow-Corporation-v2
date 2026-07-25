@extends('layouts.app')

@section('title', 'Custom Software Development | Web, Mobile & Enterprise Apps | Endow Technologies')
@section('meta_title', 'Custom Software Development | Web, Mobile & Enterprise Apps | Endow Technologies')
@section('meta_description', 'Endow Technologies delivers custom software development including web applications, mobile apps, API architecture, and enterprise solutions. Modern frameworks, agile delivery, scalable outcomes.')
@section('meta_keywords', 'custom software development, web application development, mobile app development, API development, enterprise software, Laravel, React, Endow Technologies, Seoul software company')
@section('og_title', 'Custom Software Development | Endow Technologies')
@section('og_description', 'Custom web, mobile, and enterprise software built with modern frameworks. Agile delivery from concept to production by Seoul-based Endow Technologies.')

@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Custom Software Development",
    "provider": { "@@type": "Organization", "name": "Endow Technologies" },
    "description": "Custom web, mobile, and enterprise software development using modern frameworks and agile methodologies.",
    "serviceType": "Software Development",
    "areaServed": { "@@type": "Country", "name": "South Korea" }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Technology", "item": "{{ url('/technology') }}" },
        { "@@type": "ListItem", "position": 3, "name": "Custom Software Development", "item": "{{ url()->current() }}" }
    ]
}
</script>
@endpush

@section('content')

{{-- ============================================ --}}
{{-- HERO --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="background: #080808; min-height: 70vh; display: flex; align-items: center;">
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, rgba(255,255,255,0.8) 1px, transparent 1px); background-size: 32px 32px;"></div>
        <div class="absolute" style="top: -15%; right: -8%; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(16,185,129,0.10) 0%, transparent 70%); filter: blur(60px);"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 py-20 lg:py-28 relative z-10 w-full">
        <nav class="mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center gap-2 text-[13px] px-4 py-2 rounded-full" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.06); color: rgba(255,255,255,0.4);">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><span class="mx-1 opacity-30">/</span></li>
                <li><a href="{{ route('technology') }}" class="hover:text-white transition-colors">Technology</a></li>
                <li><span class="mx-1 opacity-30">/</span></li>
                <li class="text-white font-medium">Software Development</li>
            </ol>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <h1 class="text-[42px] sm:text-[52px] lg:text-[64px] font-extrabold text-white leading-[1.05] tracking-tight mb-6" style="letter-spacing: -0.035em;">
                    Custom Software<br>
                    <span style="background: linear-gradient(135deg, #34d399 0%, #fbbf24 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Development</span>
                </h1>
                <p class="text-base sm:text-lg leading-relaxed max-w-xl mb-8" style="color: rgba(255,255,255,0.45); line-height: 1.75;">
                    High-performance web, mobile, and enterprise applications built with modern frameworks. Agile delivery, scalable architecture, and exceptional user experiences from concept to production.
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                        <span class="btn-text"><span>Start Your Project</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="#appointment" class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-full text-sm font-semibold transition-all hover:-translate-y-0.5" style="background: rgba(255,255,255,0.06); color: white; border: 1px solid rgba(255,255,255,0.1);">
                        Book a Call
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5 hidden lg:flex items-center justify-center">
                <div class="w-48 h-48 rounded-[32px] flex items-center justify-center" style="background: linear-gradient(135deg, rgba(16,185,129,0.15) 0%, rgba(245,158,11,0.05) 100%); border: 1px solid rgba(255,255,255,0.08);">
                    <i class="fa-solid fa-laptop-code text-6xl" style="color: #34d399;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- DEVELOPMENT SERVICES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #fefefe;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Services
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="section-heading">Development <span class="gradient-text">Services</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                From web platforms to enterprise systems, we build scalable software that drives business growth using modern technologies and agile practices.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-animate>
            @php
                $devServices = [
                    [
                        'icon' => 'fa-solid fa-globe',
                        'title' => 'Web Application Development',
                        'desc' => 'Modern, responsive web applications built with React, Vue, Laravel, and Node.js. From single-page apps to complex SaaS platforms with millions of users.',
                        'accent' => '#3b82f6',
                        'tags' => ['React', 'Vue.js', 'Laravel', 'Node.js', 'Next.js'],
                    ],
                    [
                        'icon' => 'fa-solid fa-mobile-screen-button',
                        'title' => 'Mobile App Development',
                        'desc' => 'Native and cross-platform mobile applications for iOS and Android. Fluid user experiences with offline support, push notifications, and seamless API integration.',
                        'accent' => '#10b981',
                        'tags' => ['React Native', 'Flutter', 'Swift', 'Kotlin', 'Expo'],
                    ],
                    [
                        'icon' => 'fa-solid fa-plug',
                        'title' => 'API Development & Integration',
                        'desc' => 'Robust RESTful and GraphQL APIs that connect your systems, enable third-party integrations, and power your entire digital ecosystem with secure authentication.',
                        'accent' => '#7c3aed',
                        'tags' => ['REST', 'GraphQL', 'gRPC', 'OAuth 2.0', 'Webhooks'],
                    ],
                    [
                        'icon' => 'fa-solid fa-building',
                        'title' => 'Enterprise Software Solutions',
                        'desc' => 'Large-scale enterprise systems including ERP, CRM, and custom business platforms. Built for reliability, security, and seamless team adoption across departments.',
                        'accent' => '#f59e0b',
                        'tags' => ['ERP', 'CRM', 'Workflow Engine', 'Analytics', 'SSO'],
                    ],
                ];
            @endphp

            @foreach($devServices as $svc)
                <div class="group rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                     style="background: #fafafc; border: 1px solid #eeeef0;"
                     onmouseover="this.style.borderColor='{{ $svc['accent'] }}30'; this.style.boxShadow='0 8px 28px rgba(0,0,0,0.06)';"
                     onmouseout="this.style.borderColor='#eeeef0'; this.style.boxShadow='none';">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 rounded-[14px] flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:scale-110" style="background: {{ $svc['accent'] }}10; border: 1px solid {{ $svc['accent'] }}20;">
                            <i class="{{ $svc['icon'] }} text-lg" style="color: {{ $svc['accent'] }};"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-[17px] font-bold mb-2.5" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $svc['title'] }}</h3>
                            <p class="text-[14px] leading-relaxed mb-5" style="color: var(--color-text);">{{ $svc['desc'] }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($svc['tags'] as $tag)
                                    <span class="px-3 py-1 rounded-full text-[11px] font-semibold" style="background: {{ $svc['accent'] }}08; color: {{ $svc['accent'] }}; border: 1px solid {{ $svc['accent'] }}15;">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TECH STACK --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="padding: 100px 0; background: #08080c;">
    <div class="absolute pointer-events-none" aria-hidden="true" style="top: -10%; right: -5%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(16,185,129,0.05) 0%, transparent 70%); filter: blur(80px);"></div>
    <div class="absolute inset-0 pointer-events-none opacity-[0.02]" aria-hidden="true" style="background-image: radial-gradient(circle, rgba(255,255,255,0.6) 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: #34d399; letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: #34d399;"></span>
                Technology
                <span class="w-5 h-px" style="background: #34d399;"></span>
            </div>
            <h2 class="text-[36px] sm:text-[44px] lg:text-[52px] font-extrabold text-white tracking-tight mb-4" style="letter-spacing: -0.035em; line-height: 1.15;">
                Modern <span class="gradient-text">Tech Stack</span>
            </h2>
            <p class="text-[15px] max-w-lg mx-auto" style="color: rgba(255,255,255,0.45); line-height: 1.7;">
                We select the best technologies for each project, ensuring optimal performance, maintainability, and long-term scalability.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3" data-animate>
            @foreach([
                ['icon' => 'fa-brands fa-react', 'name' => 'React', 'color' => '#61DAFB'],
                ['icon' => 'fa-brands fa-vuejs', 'name' => 'Vue.js', 'color' => '#42B883'],
                ['icon' => 'fa-brands fa-node-js', 'name' => 'Node.js', 'color' => '#339933'],
                ['icon' => 'fa-brands fa-php', 'name' => 'PHP', 'color' => '#777BB4'],
                ['icon' => 'fa-brands fa-python', 'name' => 'Python', 'color' => '#3776AB'],
                ['icon' => 'fa-brands fa-laravel', 'name' => 'Laravel', 'color' => '#FF2D20'],
                ['icon' => 'fa-solid fa-database', 'name' => 'PostgreSQL', 'color' => '#4169E1'],
                ['icon' => 'fa-solid fa-database', 'name' => 'MongoDB', 'color' => '#47A248'],
                ['icon' => 'fa-brands fa-docker', 'name' => 'Docker', 'color' => '#2496ED'],
                ['icon' => 'fa-brands fa-aws', 'name' => 'AWS', 'color' => '#FF9900'],
                ['icon' => 'fa-brands fa-figma', 'name' => 'Figma', 'color' => '#F24E1E'],
                ['icon' => 'fa-brands fa-github', 'name' => 'GitHub', 'color' => '#ffffff'],
            ] as $tech)
                <div class="rounded-xl p-4 text-center transition-all duration-300 hover:-translate-y-1"
                     style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);"
                     onmouseover="this.style.borderColor='{{ $tech['color'] }}44'; this.style.background='rgba(255,255,255,0.05)';"
                     onmouseout="this.style.borderColor='rgba(255,255,255,0.06)'; this.style.background='rgba(255,255,255,0.03)';">
                    <i class="{{ $tech['icon'] }} text-2xl mb-2 block" style="color: {{ $tech['color'] }};"></i>
                    <p class="text-[11px] font-semibold" style="color: rgba(255,255,255,0.6);">{{ $tech['name'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- DEVELOPMENT PROCESS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #ffffff;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Process
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="section-heading">Our Development <span class="gradient-text">Process</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                A proven six-phase methodology ensuring transparent communication, quality deliverables, and on-time project completion.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate>
            @foreach([
                ['step' => '01', 'icon' => 'fa-solid fa-comments', 'title' => 'Discovery', 'desc' => 'Deep dive into business requirements, user needs, and technical constraints to define clear project scope and success criteria.', 'color' => '#7c3aed'],
                ['step' => '02', 'icon' => 'fa-solid fa-pen-ruler', 'title' => 'UI/UX Design', 'desc' => 'Wireframes and high-fidelity prototypes focused on intuitive user experience, accessibility, and brand consistency.', 'color' => '#3b82f6'],
                ['step' => '03', 'icon' => 'fa-solid fa-code', 'title' => 'Development', 'desc' => 'Agile sprints with clean, documented code. Weekly demos and iterative feedback loops to keep you in control.', 'color' => '#10b981'],
                ['step' => '04', 'icon' => 'fa-solid fa-vial', 'title' => 'Quality Assurance', 'desc' => 'Manual and automated testing across devices and browsers. Performance audits and security vulnerability scans.', 'color' => '#f59e0b'],
                ['step' => '05', 'icon' => 'fa-solid fa-rocket', 'title' => 'Deployment', 'desc' => 'Zero-downtime CI/CD deployment with environment configuration, monitoring setup, and performance benchmarking.', 'color' => '#ef4444'],
                ['step' => '06', 'icon' => 'fa-solid fa-headset', 'title' => 'Support & Maintenance', 'desc' => 'Ongoing support, performance optimization, feature updates, and security patches to keep your software running smoothly.', 'color' => '#8b5cf6'],
            ] as $i => $step)
                <div class="group rounded-2xl p-7 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                     style="background: #fafafc; border: 1px solid #eeeef0;"
                     onmouseover="this.style.borderColor='{{ $step['color'] }}30'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.06)';"
                     onmouseout="this.style.borderColor='#eeeef0'; this.style.boxShadow='none';">
                    <div class="text-4xl font-extrabold mb-3" style="color: {{ $step['color'] }}15; letter-spacing: -0.04em; line-height: 1;">{{ $step['step'] }}</div>
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110" style="background: {{ $step['color'] }}10;">
                        <i class="{{ $step['icon'] }} text-base" style="color: {{ $step['color'] }};"></i>
                    </div>
                    <h3 class="text-[16px] font-bold mb-2" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $step['title'] }}</h3>
                    <p class="text-[13px] leading-relaxed" style="color: var(--color-text-muted);">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- WHY CHOOSE US --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                    <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                    Why Choose Us
                    <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                </div>
                <h2 class="text-[36px] sm:text-[44px] font-extrabold tracking-tight mb-4" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.15;">
                    Why Choose <span class="gradient-text">Endow Technologies?</span>
                </h2>
                <p class="text-base leading-relaxed mb-10" style="color: var(--color-text);">
                    We build digital products that solve real business problems and deliver measurable ROI. Every project is backed by deep technical expertise and a commitment to quality.
                </p>
                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'fa-solid fa-trophy', 'title' => 'Proven Track Record', 'desc' => '200+ successful projects delivered across 30+ countries with a 98% client satisfaction rate and repeat engagements.', 'color' => '#f59e0b'],
                        ['icon' => 'fa-solid fa-users', 'title' => 'Expert Engineering Team', 'desc' => '25+ skilled engineers, designers, and project managers with deep domain expertise across industries and technologies.', 'color' => '#3b82f6'],
                        ['icon' => 'fa-solid fa-arrows-rotate', 'title' => 'Agile Methodology', 'desc' => 'Flexible sprint-based development with transparent communication, regular demos, and milestone-driven delivery.', 'color' => '#10b981'],
                        ['icon' => 'fa-solid fa-lock', 'title' => 'Security First Approach', 'desc' => 'OWASP best practices, code audits, dependency scanning, and security reviews embedded into every project phase.', 'color' => '#7c3aed'],
                    ] as $reason)
                        <div class="flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 hover:-translate-y-0.5"
                             style="background: white; border: 1px solid #eeeef0;"
                             onmouseover="this.style.borderColor='{{ $reason['color'] }}30'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.04)';"
                             onmouseout="this.style.borderColor='#eeeef0'; this.style.boxShadow='none';">
                            <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0" style="background: {{ $reason['color'] }}10;">
                                <i class="{{ $reason['icon'] }} text-sm" style="color: {{ $reason['color'] }};"></i>
                            </div>
                            <div>
                                <h4 class="text-[15px] font-bold mb-1" style="color: var(--color-text-heading);">{{ $reason['title'] }}</h4>
                                <p class="text-[13px] leading-relaxed" style="color: var(--color-text-muted);">{{ $reason['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="box-shadow: 0 4px 24px rgba(0,0,0,0.06);">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=700&h=500&fit=crop"
                         alt="Software development team at Endow Technologies building custom applications"
                         class="w-full h-auto"
                         loading="lazy" width="700" height="500">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CTA + APPOINTMENT --}}
{{-- ============================================ --}}
<section class="section-gap relative overflow-hidden" style="background: linear-gradient(160deg, #faf9f8 0%, #f3f1ef 40%, #f8f6f5 100%);">
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full opacity-[0.06]" style="background: radial-gradient(circle, #10b981 0%, transparent 70%);"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <div data-animate class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            Get Started
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
        </div>
        <h2 data-animate class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-6 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
            Let's Build Something <span class="gradient-text">Extraordinary</span>
        </h2>
        <p data-animate class="text-base sm:text-lg max-w-xl mx-auto mb-10" style="color: var(--color-text); line-height: 1.7;">
            From concept to launch, Endow Technologies delivers custom software that scales with your business ambitions and delights your users.
        </p>
        <div data-animate class="flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                <span class="btn-text"><span>Start Your Project</span></span>
                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full text-sm font-semibold transition-all duration-300 hover:-translate-y-0.5" style="background: white; color: var(--color-text-heading); border: 1.5px solid var(--color-border); box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
                <i class="fa-regular fa-comment text-sm" style="color: var(--color-primary);"></i>
                Contact Us
            </a>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- APPOINTMENT FORM --}}
{{-- ============================================ --}}
<section id="appointment" class="section-gap relative overflow-hidden" style="background: linear-gradient(180deg, #fefefe 0%, #f8f7f6 100%);">
    <div class="absolute inset-0 pointer-events-none opacity-[0.018]" style="background-image: radial-gradient(circle, #0a0a0a 1px, transparent 1px); background-size: 28px 28px;"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16 lg:mb-20" data-animate>
            <div class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Book a Consultation
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-5 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
                Schedule Your <span class="gradient-text">Project Discussion</span>
            </h2>
            <p class="text-base max-w-lg mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">
                Ready to bring your software idea to life? Schedule a consultation with our development team to discuss your project requirements.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14">
            <div data-animate class="lg:col-span-2 space-y-5">
                @foreach([
                    ['icon' => 'fa-solid fa-phone', 'label' => 'Call Us', 'value' => '02-2632-2559', 'href' => 'tel:0226322559', 'sub' => 'Mon to Sat, 8am to 6pm KST'],
                    ['icon' => 'fa-regular fa-envelope', 'label' => 'Email Us', 'value' => 'contact@endowcorporation.com', 'href' => 'mailto:contact@endowcorporation.com', 'sub' => 'We reply within 24 hours'],
                    ['icon' => 'fa-solid fa-location-dot', 'label' => 'Visit Us', 'value' => 'Seoul, South Korea', 'href' => null, 'sub' => 'Serving clients worldwide'],
                ] as $card)
                    <div class="group flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 hover:-translate-y-0.5" style="background: white; border: 1px solid var(--color-border); box-shadow: 0 1px 4px rgba(0,0,0,0.03);">
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.06);">
                            <i class="{{ $card['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[11px] font-bold uppercase tracking-wider mb-1" style="color: var(--color-text-muted);">{{ $card['label'] }}</p>
                            @if($card['href'])
                                <a href="{{ $card['href'] }}" class="block text-[15px] font-semibold transition-colors hover:text-[color:var(--color-primary)] truncate" style="color: var(--color-text-heading);">{{ $card['value'] }}</a>
                            @else
                                <p class="text-[15px] font-semibold truncate" style="color: var(--color-text-heading);">{{ $card['value'] }}</p>
                            @endif
                            <p class="text-xs mt-0.5" style="color: var(--color-text-muted);">{{ $card['sub'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div data-animate class="lg:col-span-3">
                <div class="rounded-2xl p-8 md:p-10" style="background: white; border: 1px solid var(--color-border); box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                    @if(session('success'))
                        <div class="mb-7 p-4 rounded-xl flex items-center gap-3" style="background: rgba(16,185,129,0.06); border: 1px solid rgba(16,185,129,0.12);">
                            <i class="fa-solid fa-check-circle text-base" style="color: #10b981;"></i>
                            <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                        </div>
                    @endif
                    <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="page" value="software-development">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Full Name <span style="color: var(--color-primary);">*</span></label>
                                <input type="text" id="name" name="name" placeholder="John Smith" required value="{{ old('name') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                @error('name') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Email Address <span style="color: var(--color-primary);">*</span></label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="phone" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+82 10 1234 5678" value="{{ old('phone') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                            </div>
                            <div>
                                <label for="service_type" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Service Type</label>
                                <select id="service_type" name="service_type"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none appearance-auto"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                    <option value="">Select a service...</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Mobile App Development">Mobile App Development</option>
                                    <option value="API Development">API Development</option>
                                    <option value="Enterprise Software">Enterprise Software</option>
                                    <option value="Custom Software">Custom Software</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Message (Optional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your software project, technology preferences, timeline, or business goals..."
                                class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none resize-none"
                                style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="btn-primary btn-primary-lg w-full justify-center">
                            <span class="btn-text"><span>Submit Request</span></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection