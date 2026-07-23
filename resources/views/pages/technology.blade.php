@extends('layouts.app')

@section('title', 'Endow Technologies | AI, Cloud & Custom Software Development')
@section('meta_title', 'Endow Technologies | AI, Cloud & Custom Software Development')
@section('meta_description', 'Endow Technologies delivers cutting-edge AI, cloud computing, custom software development, and digital transformation solutions. Empowering businesses worldwide from Seoul, South Korea.')

@section('content')

{{-- ============================================ --}}
{{-- HERO — Modern Split Layout --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="background: #080808; min-height: 85vh; display: flex; align-items: center;">
    <style>
        @keyframes tech-float-1 { 0%, 100% { transform: rotate(3deg) translateY(0); } 50% { transform: rotate(3deg) translateY(-10px); } }
        @keyframes tech-float-2 { 0%, 100% { transform: rotate(-5deg) translateY(0); } 50% { transform: rotate(-5deg) translateY(-8px); } }
        .tech-card-1 { animation: tech-float-1 6s ease-in-out infinite; }
        .tech-card-2 { animation: tech-float-2 5s ease-in-out infinite 0.8s; }
    </style>
    {{-- Background Layers --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, rgba(255,255,255,0.8) 1px, transparent 1px); background-size: 32px 32px;"></div>
        {{-- Large ambient orbs --}}
        <div class="absolute" style="top: -15%; right: -8%; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(124,58,237,0.12) 0%, transparent 70%); filter: blur(60px);"></div>
        <div class="absolute" style="bottom: -10%; left: -5%; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(245,158,11,0.08) 0%, transparent 70%); filter: blur(50px);"></div>
        {{-- Diagonal accent line --}}
        <div class="absolute top-0 right-0 w-px h-64 opacity-10" style="background: linear-gradient(to bottom, #a78bfa, transparent); transform: rotate(25deg); transform-origin: top right;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-24 lg:py-32 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            {{-- LEFT: Content --}}
            <div class="lg:col-span-7">
                {{-- Breadcrumb --}}
                <nav class="mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center gap-2 text-[13px] px-4 py-2 rounded-full" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.06); color: rgba(255,255,255,0.4);">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><span class="mx-1 opacity-30">/</span></li>
                        <li class="text-white font-medium">Endow Technologies</li>
                    </ol>
                </nav>

                {{-- Heading --}}
                <h1 class="text-[42px] sm:text-[52px] lg:text-[64px] font-extrabold text-white leading-[1.05] tracking-tight mb-6" style="letter-spacing: -0.035em;">
                    Innovate. Transform.<br>
                    <span style="background: linear-gradient(135deg, #a78bfa 0%, #fbbf24 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Lead.</span>
                </h1>

                {{-- Description --}}
                <p class="text-base sm:text-lg leading-relaxed max-w-xl mb-10" style="color: rgba(255,255,255,0.45); line-height: 1.75;">
                    Endow Technologies delivers AI-powered automation, secure cloud computing, and custom software solutions engineered to accelerate your business. Innovation that transforms industries across 30+ countries.
                </p>

                {{-- Inline Stats --}}
                <div class="flex flex-wrap items-center gap-6 sm:gap-10 mb-10">
                    @foreach([
                        ['value' => '30+', 'label' => 'Countries'],
                        ['value' => '200+', 'label' => 'Projects Delivered'],
                        ['value' => '25+', 'label' => 'Tech Experts'],
                    ] as $stat)
                        <div class="text-center sm:text-left">
                            <div class="text-[28px] sm:text-[34px] font-extrabold text-white tracking-tight" style="letter-spacing: -0.03em; line-height: 1;">{{ $stat['value'] }}</div>
                            <div class="text-[11px] font-semibold uppercase tracking-[1.5px] mt-1" style="color: rgba(255,255,255,0.3);">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>

                {{-- CTA --}}
                <a href="https://endowtech.net/" target="_blank" rel="noopener noreferrer" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Visit Endow Tech</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>

            {{-- RIGHT: Glassmorphism Cards --}}
            <div class="lg:col-span-5 hidden lg:flex items-center justify-center relative" style="min-height: 580px;">
                {{-- Glow effects --}}
                <div class="absolute top-[5%] right-[5%] w-[260px] h-[260px] rounded-full opacity-[0.15] pointer-events-none" style="background: radial-gradient(circle, #a78bfa 0%, transparent 70%); filter: blur(60px);"></div>
                <div class="absolute bottom-[5%] left-[5%] w-[200px] h-[200px] rounded-full opacity-[0.12] pointer-events-none" style="background: radial-gradient(circle, #fbbf24 0%, transparent 70%); filter: blur(50px);"></div>

                {{-- Dots indicator --}}
                <div class="absolute top-[6%] left-[16%] flex gap-2 z-20">
                    <span class="w-2.5 h-2.5 rounded-full" style="background: #a78bfa;"></span>
                    <span class="w-2.5 h-2.5 rounded-full" style="background: #fbbf24;"></span>
                    <span class="w-2.5 h-2.5 rounded-full opacity-30" style="background: #9ca3af;"></span>
                </div>

                <div class="relative w-[360px]" style="height: 560px;">

                    {{-- Card 1: AI & Cloud (top area, tilted right) --}}
                    <div class="absolute top-0 right-[3%] w-[250px] rounded-[24px] overflow-hidden z-10 tech-card-1"
                         style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); transform: rotate(3deg); box-shadow: 0 25px 60px rgba(0,0,0,0.4), inset 0 1px 0 rgba(255,255,255,0.06);">
                        <div class="p-7 pt-9">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-5" style="background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%); box-shadow: 0 8px 24px rgba(124,58,237,0.35);">
                                <i class="fa-solid fa-microchip text-xl text-white"></i>
                            </div>

                            <h3 class="text-white text-base font-bold mb-2" style="letter-spacing: -0.01em;">AI & Cloud Solutions</h3>
                            <p class="text-[12px] leading-relaxed mb-5" style="color: rgba(255,255,255,0.45);">Automation. Intelligence.<br>Scalable Infrastructure.</p>

                            <div class="space-y-2">
                                <div class="h-[3px] rounded-full opacity-15" style="background: white; width: 85%;"></div>
                                <div class="h-[3px] rounded-full opacity-10" style="background: white; width: 60%;"></div>
                                <div class="h-[3px] rounded-full opacity-8" style="background: white; width: 40%;"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2: Custom Software (bottom area, tilted left) --}}
                    <div class="absolute bottom-0 left-[2%] w-[220px] rounded-[24px] overflow-hidden z-20 tech-card-2"
                         style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06); backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); transform: rotate(-5deg); box-shadow: 0 20px 50px rgba(0,0,0,0.35), inset 0 1px 0 rgba(255,255,255,0.05);">
                        <div class="p-6 pt-7">
                            <div class="mb-5">
                                <i class="fa-solid fa-code text-3xl" style="color: rgba(255,255,255,0.15);"></i>
                            </div>

                            <p class="text-[9px] font-bold tracking-[3px] uppercase mb-2" style="color: #fbbf24;">Development</p>
                            <h3 class="text-white text-[15px] font-bold leading-snug mb-4" style="letter-spacing: -0.01em;">Custom Software<br>& Web Apps</h3>

                            <div class="flex items-center gap-3">
                                <div class="flex-1 h-[2px] rounded-full opacity-15" style="background: white;"></div>
                                <div class="w-8 h-8 rounded-full flex items-center justify-center transition-transform hover:scale-110" style="background: #fbbf24;">
                                    <i class="fa-solid fa-arrow-right text-white text-[10px]"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- INTRO: Who We Are --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-microchip"></i>
                    Who We Are
                </div>
                <h2 class="section-heading">Engineering the Future of <span class="gradient-text">Digital Innovation</span></h2>
                <div class="space-y-5">
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        Endow Technologies is the technology powerhouse of Endow Corporation, headquartered in Seoul, South Korea. We specialize in delivering cutting-edge software solutions, AI-driven automation, secure cloud infrastructure, and comprehensive digital transformation services that empower businesses to thrive in the modern digital economy.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        Our team of 25+ engineers, data scientists, and IT consultants combines deep technical expertise with strategic business insight. We don't just write code, we architect solutions that solve real business problems, streamline operations, and unlock new revenue streams for our clients across Asia, Europe, the Middle East, and the Americas.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        From custom web and mobile applications to enterprise-grade cloud migrations and intelligent automation pipelines, Endow Technologies delivers with precision, scalability, and a relentless commitment to quality. Our portfolio spans 200+ successful projects across industries including finance, healthcare, retail, manufacturing, and education.
                    </p>
                </div>
            </div>

            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="height: 380px; min-height: 260px; box-shadow: 0 24px 64px rgba(0,0,0,0.1);">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&h=500&fit=crop"
                         alt="Endow Technologies, AI, cloud computing, and custom software development solutions"
                         class="w-full h-full object-cover"
                         loading="eager"
                         width="800"
                         height="600">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CORE SERVICES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f0f0f0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-code"></i>
                What We Offer
            </div>
            <h2 class="section-heading">Comprehensive <span class="gradient-text">Tech Solutions</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                End-to-end technology services designed to accelerate your digital transformation journey.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7" data-animate>
            @php
                $services = [
                    [
                        'icon' => 'fa-solid fa-brain',
                        'title' => 'AI & Automation',
                        'desc' => 'Intelligent machine learning models, NLP solutions, and process automation that reduce costs by 40% and accelerate operations by 3x.',
                        'accent' => 'rgba(124,58,237,0.08)',
                        'accentBorder' => 'rgba(124,58,237,0.12)',
                        'iconColor' => '#7c3aed',
                        'link' => route('seo.ai-automation'),
                    ],
                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud Computing & Security',
                        'desc' => 'Scalable, secure cloud infrastructure with multi-cloud strategy, migration services, and enterprise-grade security compliance.',
                        'accent' => 'rgba(59,130,246,0.08)',
                        'accentBorder' => 'rgba(59,130,246,0.15)',
                        'iconColor' => '#3b82f6',
                        'link' => route('seo.cloud-computing'),
                    ],
                    [
                        'icon' => 'fa-solid fa-laptop-code',
                        'title' => 'Custom Software Development',
                        'desc' => 'High-performance web, mobile, and desktop applications built with modern frameworks and tailored to your unique business requirements.',
                        'accent' => 'rgba(16,185,129,0.08)',
                        'accentBorder' => 'rgba(16,185,129,0.15)',
                        'iconColor' => '#059669',
                        'link' => route('seo.software-development'),
                    ],
                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'Web & Mobile App Development',
                        'desc' => 'Responsive web apps and native mobile applications for iOS and Android, delivering exceptional user experiences at scale.',
                        'accent' => 'rgba(245,158,11,0.08)',
                        'accentBorder' => 'rgba(245,158,11,0.15)',
                        'iconColor' => '#d97706',
                        'link' => 'https://endowtech.net/app-development/',
                    ],
                    [
                        'icon' => 'fa-solid fa-gears',
                        'title' => 'IT Consulting & Digital Strategy',
                        'desc' => 'Strategic technology advisory, roadmap planning, and digital transformation consulting to align technology with business goals.',
                        'accent' => 'rgba(236,72,153,0.08)',
                        'accentBorder' => 'rgba(236,72,153,0.15)',
                        'iconColor' => '#db2777',
                        'link' => 'https://endowtech.net/',
                    ],
                    [
                        'icon' => 'fa-solid fa-chart-bar',
                        'title' => 'Data Analytics & BI',
                        'desc' => 'Transform raw data into actionable insights with advanced analytics, dashboards, and business intelligence solutions.',
                        'accent' => 'rgba(14,165,233,0.08)',
                        'accentBorder' => 'rgba(14,165,233,0.15)',
                        'iconColor' => '#0284c7',
                        'link' => 'https://endowtech.net/',
                    ],
                ];
            @endphp

            @foreach($services as $svc)
                <div class="rounded-2xl p-7 transition-all duration-300 hover:-translate-y-1" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                    <div class="w-[52px] h-[52px] rounded-[14px] flex items-center justify-center mb-5" style="background: {{ $svc['accent'] }}; border: 1px solid {{ $svc['accentBorder'] }};">
                        <i class="{{ $svc['icon'] }} text-xl" style="color: {{ $svc['iconColor'] }};"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $svc['title'] }}</h3>
                    <p class="text-sm leading-[1.75]" style="color: var(--color-text);">{{ $svc['desc'] }}</p>
                    @if(isset($svc['link']))
                        <a href="{{ $svc['link'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium mt-4" style="color: var(--color-primary);">
                            Learn More <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- WHY ENDOW TECHNOLOGIES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="height: 380px; min-height: 260px; box-shadow: 0 24px 64px rgba(0,0,0,0.1);">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&h=500&fit=crop"
                         alt="Why choose Endow Technologies for your digital transformation"
                         class="w-full h-full object-cover"
                         loading="lazy"
                         width="800"
                         height="600">
                </div>
            </div>

            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-star"></i>
                    Why Endow Technologies
                </div>
                <h2 class="section-heading">Six Reasons Businesses <span class="gradient-text">Choose Us</span></h2>
                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'fa-solid fa-brain', 'title' => 'Deep Technical Expertise', 'desc' => 'Our team includes AI/ML specialists, cloud architects, and full-stack engineers with proven track records at global tech companies.'],
                        ['icon' => 'fa-solid fa-rocket', 'title' => 'Agile & Fast Delivery', 'desc' => 'We ship working software in weeks, not months. Our agile methodology ensures rapid iterations and continuous client feedback.'],
                        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Enterprise-Grade Security', 'desc' => 'SOC 2-aligned practices, encrypted data pipelines, and secure development lifecycle baked into every project from day one.'],
                        ['icon' => 'fa-solid fa-scale-balanced', 'title' => 'Scalable Architecture', 'desc' => 'Solutions designed to grow with your business. From startup MVPs to enterprise platforms handling millions of transactions daily.'],
                        ['icon' => 'fa-solid fa-hand-holding-dollar', 'title' => 'Cost-Effective Innovation', 'desc' => 'Competitive pricing with 40% average cost reduction through automation and efficient offshore-nearshore delivery models.'],
                        ['icon' => 'fa-solid fa-headset', 'title' => 'Dedicated Support & Maintenance', 'desc' => '24/7 monitoring, proactive maintenance, and rapid incident response ensuring your systems run smoothly around the clock.'],
                    ] as $item)
                        <div class="flex items-start gap-4 p-5 rounded-xl transition-all duration-300 hover:shadow-md" style="background: white; border: 1px solid #E5E7EB;">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(124,58,237,0.1) 0%, rgba(124,58,237,0.02) 100%);">
                                <i class="{{ $item['icon'] }} text-sm" style="color: #7c3aed;"></i>
                            </div>
                            <div>
                                <h4 class="text-base font-bold mb-1" style="color: var(--color-text-heading);">{{ $item['title'] }}</h4>
                                <p class="text-sm" style="color: var(--color-text);">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- HOW WE WORK — Premium SaaS Quote Block --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="padding: 100px 0; background: #09090b;">
    {{-- Ambient spotlights --}}
    <div class="absolute pointer-events-none" aria-hidden="true" style="top: 50%; left: 50%; width: 800px; height: 600px; transform: translate(-50%, -50%); background: radial-gradient(ellipse at center, rgba(124,58,237,0.08) 0%, rgba(251,191,36,0.03) 40%, transparent 70%); filter: blur(80px);"></div>
    <div class="absolute pointer-events-none" aria-hidden="true" style="top: 20%; right: 10%; width: 300px; height: 300px; background: radial-gradient(circle, rgba(167,139,250,0.06) 0%, transparent 70%); filter: blur(60px);"></div>
    <div class="absolute pointer-events-none" aria-hidden="true" style="bottom: 15%; left: 8%; width: 250px; height: 250px; background: radial-gradient(circle, rgba(251,191,36,0.04) 0%, transparent 70%); filter: blur(50px);"></div>

    {{-- Animated gradient orbs --}}
    <style>
        @keyframes quote-glow-1 { 0%, 100% { opacity: 0.3; transform: translate(-50%, -50%) scale(1); } 50% { opacity: 0.6; transform: translate(-50%, -50%) scale(1.08); } }
        @keyframes quote-glow-2 { 0%, 100% { opacity: 0.2; transform: translate(0, 0); } 50% { opacity: 0.5; transform: translate(0, -6px); } }
        @keyframes quote-glow-3 { 0%, 100% { opacity: 0.15; transform: translate(0, 0); } 50% { opacity: 0.35; transform: translate(0, 4px); } }
        @keyframes quote-border-shift { 0%, 100% { border-color: rgba(167,139,250,0.08); } 50% { border-color: rgba(251,191,36,0.10); } }
        .quote-spotlight { animation: quote-glow-1 7s ease-in-out infinite; }
        .quote-float-1 { animation: quote-glow-2 6s ease-in-out infinite; }
        .quote-float-2 { animation: quote-glow-3 5s ease-in-out infinite 0.5s; }
    </style>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="max-w-[720px] mx-auto" data-animate>

            {{-- Glassmorphism card with gradient border --}}
            <div class="relative rounded-[24px] p-10 md:p-14 lg:p-16 quote-float-1" style="background: radial-gradient(ellipse at 30% 20%, rgba(124,58,237,0.03) 0%, rgba(255,255,255,0.01) 100%); border: 1px solid rgba(167,139,250,0.08); box-shadow: 0 32px 80px rgba(0,0,0,0.45), 0 0 0 1px rgba(167,139,250,0.04) inset, 0 0 60px rgba(124,58,237,0.03) inset; backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">

                {{-- Large background quotation marks --}}
                <div class="absolute pointer-events-none select-none" aria-hidden="true" style="top: -10px; left: 20px; font-size: 180px; line-height: 1; font-family: Georgia, serif; color: rgba(167,139,250,0.04);">"</div>
                <div class="absolute pointer-events-none select-none" aria-hidden="true" style="bottom: -30px; right: 20px; font-size: 180px; line-height: 1; font-family: Georgia, serif; color: rgba(251,191,36,0.03); transform: rotate(180deg);">"</div>

                {{-- Small label --}}
                <div class="relative z-10 mb-8 flex items-center gap-2.5">
                    <span class="block w-6 h-px" style="background: #a78bfa;"></span>
                    <span class="text-[11px] font-semibold uppercase tracking-[3px]" style="color: rgba(167,139,250,0.6);">Our Philosophy</span>
                </div>

                {{-- Large, bold quote --}}
                <h2 class="relative z-10 text-[44px] sm:text-[52px] lg:text-[58px] font-extrabold leading-[1.08] tracking-tight mb-8" style="letter-spacing: -0.035em;">
                    <span style="background: linear-gradient(135deg, #e4e4e7 0%, #d4d4d8 40%, #a78bfa 70%, #fbbf24 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Software that works.</span><br>
                    <span style="color: #fbbf24; -webkit-text-fill-color: #fbbf24;">For teams that matter.</span>
                </h2>

                {{-- Minimal glowing divider --}}
                <div class="relative z-10 flex items-center gap-3 mb-8">
                    <span class="block h-px flex-1" style="background: linear-gradient(90deg, rgba(167,139,250,0.2), rgba(167,139,250,0.05));"></span>
                    <span class="block w-2 h-2 rounded-full" style="background: #a78bfa; box-shadow: 0 0 8px rgba(167,139,250,0.4);"></span>
                    <span class="block h-px flex-1" style="background: linear-gradient(90deg, rgba(251,191,36,0.05), rgba(251,191,36,0.2));"></span>
                </div>

                {{-- Body text --}}
                <p class="relative z-10 text-[15px] sm:text-base leading-[1.85] mx-auto" style="max-width: 650px; color: rgba(255,255,255,0.55);">
                    No fluff, no jargon. Just a small team of engineers who ship code, solve real problems, and stand behind their work. We've built for startups scaling their first product and for enterprises migrating legacy systems that ran for decades. Every project taught us something.
                </p>

                {{-- Bottom accent line --}}
                <div class="relative z-10 mt-10 pt-8" style="border-top: 1px solid rgba(255,255,255,0.04);">
                    <div class="flex items-center justify-center gap-2 text-xs" style="color: rgba(255,255,255,0.2);">
                        <span class="block w-4 h-px" style="background: rgba(167,139,250,0.2);"></span>
                        <span>Endow Technologies</span>
                        <span class="block w-4 h-px" style="background: rgba(251,191,36,0.2);"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TECHNOLOGY SOLUTIONS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-cubes"></i>
                Our Solutions
            </div>
            <h2 class="section-heading">Technology <span class="gradient-text">Solutions</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                Three specialized technology domains engineered to transform your business.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-animate>
            {{-- AI & Automation --}}
            <a href="{{ route('seo.ai-automation') }}" class="group rounded-2xl overflow-hidden transition-all duration-400 hover:-translate-y-2" style="background: white; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                <div class="h-48 overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center" style="background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);">
                        <i class="fa-solid fa-robot text-6xl text-white opacity-30"></i>
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: rgba(124,58,237,0.1);">
                            <i class="fa-solid fa-brain text-sm" style="color: #7c3aed;"></i>
                        </div>
                        <h3 class="text-lg font-bold" style="color: var(--color-text-heading);">AI & Automation</h3>
                    </div>
                    <p class="text-sm leading-relaxed mb-4" style="color: var(--color-text);">
                        Machine learning models, NLP, computer vision, and intelligent process automation that drive 40% cost reduction and 3x faster processing.
                    </p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold group-hover:gap-3 transition-all" style="color: #7c3aed;">
                        Explore AI <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </div>
            </a>

            {{-- Cloud Computing --}}
            <a href="{{ route('seo.cloud-computing') }}" class="group rounded-2xl overflow-hidden transition-all duration-400 hover:-translate-y-2" style="background: white; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                <div class="h-48 overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);">
                        <i class="fa-solid fa-cloud-arrow-up text-6xl text-white opacity-30"></i>
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: rgba(59,130,246,0.1);">
                            <i class="fa-solid fa-cloud text-sm" style="color: #3b82f6;"></i>
                        </div>
                        <h3 class="text-lg font-bold" style="color: var(--color-text-heading);">Cloud & Security</h3>
                    </div>
                    <p class="text-sm leading-relaxed mb-4" style="color: var(--color-text);">
                        Scalable multi-cloud infrastructure, seamless migration services, and enterprise-grade security with 99.9% uptime SLA.
                    </p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold group-hover:gap-3 transition-all" style="color: #3b82f6;">
                        Explore Cloud <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </div>
            </a>

            {{-- Software Development --}}
            <a href="{{ route('seo.software-development') }}" class="group rounded-2xl overflow-hidden transition-all duration-400 hover:-translate-y-2" style="background: white; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                <div class="h-48 overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                        <i class="fa-solid fa-code text-6xl text-white opacity-30"></i>
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: rgba(16,185,129,0.1);">
                            <i class="fa-solid fa-laptop-code text-sm" style="color: #10b981;"></i>
                        </div>
                        <h3 class="text-lg font-bold" style="color: var(--color-text-heading);">Custom Software</h3>
                    </div>
                    <p class="text-sm leading-relaxed mb-4" style="color: var(--color-text);">
                        High-performance web, mobile, and desktop applications tailored to your unique business needs with modern frameworks.
                    </p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold group-hover:gap-3 transition-all" style="color: #10b981;">
                        Explore Dev <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- INDUSTRIES WE SERVE --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-industry"></i>
                Industries
            </div>
            <h2 class="section-heading">Industries We <span class="gradient-text">Serve</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-heart-pulse', 'title' => 'Healthcare', 'desc' => 'Diagnostic AI, patient data analytics, and secure medical record systems.'],
                ['icon' => 'fa-solid fa-building-columns', 'title' => 'Finance & Banking', 'desc' => 'Fraud detection, algorithmic trading, and regulatory compliance automation.'],
                ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'Retail & E-Commerce', 'desc' => 'Personalization engines, inventory optimization, and omnichannel platforms.'],
                ['icon' => 'fa-solid fa-warehouse', 'title' => 'Manufacturing', 'desc' => 'Predictive maintenance, quality control AI, and supply chain digitization.'],
                ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Education', 'desc' => 'Adaptive learning platforms, student analytics, and virtual classroom solutions.'],
                ['icon' => 'fa-solid fa-truck-fast', 'title' => 'Logistics', 'desc' => 'Route optimization, fleet management, and real-time shipment tracking.'],
            ] as $index => $industry)
                <div data-animate class="flex items-start gap-5 p-6 rounded-xl transition-all" style="background: white; border: 1px solid var(--color-border);" onmouseover="this.style.borderColor='rgba(124,58,237,0.2)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.04)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.boxShadow='none';">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(124,58,237,0.1) 0%, rgba(124,58,237,0.02) 100%);">
                        <i class="{{ $industry['icon'] }} text-sm" style="color: #7c3aed;"></i>
                    </div>
                    <div>
                        <h4 class="text-base font-bold mb-1" style="color: var(--color-text-heading);">{{ $industry['title'] }}</h4>
                        <p class="text-sm" style="color: var(--color-text);">{{ $industry['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CASE STUDIES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-book-open"></i>
                Case Studies
            </div>
            <h2 class="section-heading">Proven <span class="gradient-text">Results</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px]" data-animate>
            @foreach([
                ['title' => 'E-Commerce Personalization AI', 'result' => '35% Revenue Increase', 'desc' => 'Implemented AI-driven product recommendation engine for a major online retailer, boosting conversions and average order value by 35%.', 'icon' => 'fa-solid fa-cart-shopping'],
                ['title' => 'Cloud Migration for FinTech', 'result' => '60% Infrastructure Savings', 'desc' => 'Migrated a financial services platform to secure multi-cloud architecture, reducing infrastructure costs while improving scalability.', 'icon' => 'fa-solid fa-cloud'],
                ['title' => 'Custom ERP for Manufacturer', 'result' => '50% Faster Operations', 'desc' => 'Built a bespoke ERP system with real-time analytics for a manufacturing client, cutting processing time in half across all departments.', 'icon' => 'fa-solid fa-industry'],
            ] as $index => $case)
                <div data-animate class="service-card" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="service-icon mb-6">
                        <i class="{{ $case['icon'] }}"></i>
                    </div>
                    <div class="inline-block px-3 py-1 rounded-full text-xs font-bold mb-3" style="background: rgba(124,58,237,0.08); color: #7c3aed;">{{ $case['result'] }}</div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $case['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $case['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CTA — Refined Corporate Call-to-Action --}}
{{-- ============================================ --}}
<section class="section-gap relative overflow-hidden" style="background: linear-gradient(160deg, #faf9f8 0%, #f3f1ef 40%, #f8f6f5 100%);">
    {{-- Subtle decorative blobs --}}
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full opacity-[0.06]" style="background: radial-gradient(circle, #7c3aed 0%, transparent 70%);"></div>
    <div class="absolute -bottom-24 -left-24 w-[400px] h-[400px] rounded-full opacity-[0.04]" style="background: radial-gradient(circle, #f59e0b 0%, transparent 70%);"></div>

    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <div data-animate class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            Let's Innovate
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
        </div>

        <h2 data-animate class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-6 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
            Ready to <span class="gradient-text">Transform</span><br class="hidden sm:block"> Your Business?
        </h2>

        <p data-animate class="text-base sm:text-lg max-w-xl mx-auto mb-10" style="color: var(--color-text); line-height: 1.7;">
            Partner with Endow Technologies to leverage AI, cloud, and custom software solutions that drive measurable growth and innovation.
        </p>

        <div data-animate class="flex flex-wrap items-center justify-center gap-4">
            <a href="https://endowtech.net/" target="_blank" rel="noopener noreferrer" class="btn-primary btn-primary-lg">
                <span class="btn-text"><span>Visit Endow Tech</span></span>
                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="{{ route('consulting') }}" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full text-sm font-semibold transition-all duration-300 hover:-translate-y-0.5" style="background: white; color: var(--color-text-heading); border: 1.5px solid var(--color-border); box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
                <i class="fa-regular fa-comment text-sm" style="color: var(--color-primary);"></i>
                Get Consulting
            </a>
        </div>

        {{-- Trust badges --}}
        <div data-animate class="mt-14 flex flex-wrap items-center justify-center gap-8">
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>Free Consultation</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>No Obligation</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>200+ Projects Delivered</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>99.9% Uptime SLA</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- APPOINTMENT FORM — Refined Corporate Booking --}}
{{-- ============================================ --}}
<section class="section-gap relative overflow-hidden" style="background: linear-gradient(180deg, #fefefe 0%, #f8f7f6 100%);">
    {{-- Subtle grid texture --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.018]" style="background-image: radial-gradient(circle, #0a0a0a 1px, transparent 1px); background-size: 28px 28px;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20" data-animate>
            <div class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Book a Consultation
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-5 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
                Schedule Your <span class="gradient-text">Tech Strategy</span> Session
            </h2>
            <p class="text-base max-w-lg mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">
                Let's discuss how technology can accelerate your business. Share your goals and our experts will design a solution tailored to your needs.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14">
            {{-- Left: Contact Info --}}
            <div data-animate class="lg:col-span-2 space-y-5">
                @php
                    $contactCards = [
                        ['icon' => 'fa-solid fa-phone', 'label' => 'Call Us', 'value' => '02-2632-2559', 'href' => 'tel:0226322559', 'sub' => 'Mon to Sat, 8am to 6pm KST'],
                        ['icon' => 'fa-regular fa-envelope', 'label' => 'Email Us', 'value' => 'contact@endowcorporation.com', 'href' => 'mailto:contact@endowcorporation.com', 'sub' => 'We reply within 24 hours'],
                        ['icon' => 'fa-solid fa-location-dot', 'label' => 'Visit Us', 'value' => 'Seoul, South Korea', 'href' => null, 'sub' => 'Serving clients worldwide'],
                    ];
                @endphp

                @foreach($contactCards as $card)
                    <div class="group flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 hover:-translate-y-0.5" style="background: white; border: 1px solid var(--color-border); box-shadow: 0 1px 4px rgba(0,0,0,0.03);">
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0 transition-colors duration-300" style="background: rgba(124,58,237,0.06);">
                            <i class="{{ $card['icon'] }} text-sm" style="color: #7c3aed;"></i>
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

                <div class="mt-8 p-5 rounded-2xl flex items-center gap-4" style="background: linear-gradient(135deg, rgba(124,58,237,0.04) 0%, rgba(124,58,237,0.01) 100%); border: 1px dashed rgba(124,58,237,0.15);">
                    <div class="text-3xl font-extrabold tracking-tight" style="color: #7c3aed;">200+</div>
                    <div>
                        <p class="text-sm font-semibold" style="color: var(--color-text-heading);">Projects Delivered</p>
                        <p class="text-xs mt-0.5" style="color: var(--color-text-muted);">Across 30+ countries globally</p>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
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
                        <input type="hidden" name="page" value="technology">

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
                                    <option value="">Select...</option>
                                    <option value="AI & Automation">AI & Automation</option>
                                    <option value="Cloud Computing">Cloud Computing</option>
                                    <option value="Software Development" selected>Software Development</option>
                                    <option value="IT Consulting">IT Consulting</option>
                                    <option value="Technology Services">Technology Services</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Message (Optional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your project, technology stack, or business goals…"
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
