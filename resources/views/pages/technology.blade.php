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
{{-- MISSION — Full-bleed Typographic Statement --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="padding: 120px 0; background: #fbfafa;">
    {{-- Subtle dot texture --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.015]" aria-hidden="true" style="background-image: radial-gradient(circle, #0a0a0a 1px, transparent 1px); background-size: 24px 24px;"></div>
    {{-- Decorative top/bottom rules --}}
    <div class="absolute top-0 left-[10%] right-[10%] h-px pointer-events-none" style="background: linear-gradient(90deg, transparent, rgba(124,58,237,0.08), transparent);"></div>
    <div class="absolute bottom-0 left-[10%] right-[10%] h-px pointer-events-none" style="background: linear-gradient(90deg, transparent, rgba(124,58,237,0.08), transparent);"></div>

    <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
        <div data-animate class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-8" style="color: #7c3aed; letter-spacing: 0.15em;">
            <span class="w-6 h-px" style="background: #7c3aed;"></span>
            Our Mission
            <span class="w-6 h-px" style="background: #7c3aed;"></span>
        </div>

        <h2 data-animate class="text-[40px] sm:text-[52px] lg:text-[64px] font-extrabold leading-[1.08] tracking-tight mb-6" style="color: #0a0a0a; letter-spacing: -0.035em;">
            We build the technology<br>
            <span class="gradient-text">that powers tomorrow's businesses</span>
        </h2>

        <p data-animate class="text-base sm:text-lg max-w-2xl mx-auto leading-relaxed" style="color: rgba(0,0,0,0.55); line-height: 1.8;">
            Endow Technologies is the innovation engine of Endow Corporation — a Seoul-based team of engineers, data scientists, and strategists. We architect AI, cloud, and software solutions that solve real business problems. We don't just write code. We build outcomes.
        </p>

        {{-- Inline stats anchored below --}}
        <div data-animate class="flex flex-wrap items-center justify-center gap-10 sm:gap-16 mt-14 pt-12" style="border-top: 1px solid rgba(0,0,0,0.06);">
            @foreach([
                ['value' => '200+', 'label' => 'Projects Delivered'],
                ['value' => '25+', 'label' => 'Tech Experts'],
                ['value' => '30+', 'label' => 'Countries Served'],
            ] as $stat)
                <div class="text-center">
                    <div class="text-[32px] sm:text-[40px] font-extrabold tracking-tight" style="color: #7c3aed; letter-spacing: -0.03em; line-height: 1;">{{ $stat['value'] }}</div>
                    <div class="text-[11px] font-semibold uppercase tracking-[2px] mt-1.5" style="color: rgba(0,0,0,0.3);">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- SERVICES — Scroll-Stack Interactive Cards --}}
{{-- ============================================ --}}
<section class="scroll-stack-section section-gap" style="background-color: #fbfafa;" data-scroll-stack="tech-services">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-14" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                What We Build
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="section-heading">Comprehensive <span class="gradient-text">Tech Solutions</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                End-to-end services engineered to accelerate your digital transformation. Scroll to explore each domain.
            </p>
        </div>

        <div class="scroll-stack-viewport">
            @php
                $stackCards = [
                    [
                        'title' => 'AI & Intelligent Automation',
                        'desc' => 'Machine learning, NLP, computer vision, and intelligent process automation that reduce costs by 40% and accelerate operations 3x.',
                        'icon' => 'fa-solid fa-brain',
                        'accent' => '#7c3aed',
                        'features' => ['Predictive analytics & ML models', 'Natural language processing', 'Intelligent document processing', 'Process automation pipelines'],
                        'link' => route('seo.ai-automation'),
                        'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&h=600&fit=crop',
                    ],
                    [
                        'title' => 'Cloud Infrastructure & Security',
                        'desc' => 'Scalable multi-cloud architecture, enterprise-grade security compliance, and seamless migration strategies with 99.9% uptime guarantee.',
                        'icon' => 'fa-solid fa-cloud',
                        'accent' => '#3b82f6',
                        'features' => ['Multi-cloud architecture design', 'SOC 2 & ISO 27001 compliance', 'Zero-trust security framework', 'Disaster recovery & backup'],
                        'link' => route('seo.cloud-computing'),
                        'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=600&fit=crop',
                    ],
                    [
                        'title' => 'Custom Software & Applications',
                        'desc' => 'High-performance web, mobile, and desktop applications built with modern frameworks and engineered for scale, security, and exceptional UX.',
                        'icon' => 'fa-solid fa-laptop-code',
                        'accent' => '#10b981',
                        'features' => ['Web & mobile app development', 'API & microservice architecture', 'Real-time data dashboards', 'Legacy system modernization'],
                        'link' => route('seo.software-development'),
                        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop',
                    ],
                ];
            @endphp

            @foreach($stackCards as $i => $card)
                <div class="scroll-stack-card" style="z-index: {{ count($stackCards) - $i }};">
                    <div class="scroll-stack-card-inner">
                        {{-- Content Side --}}
                        <div class="scroll-stack-content">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-[14px] flex items-center justify-center flex-shrink-0" style="background: {{ $card['accent'] }}15; border: 1px solid {{ $card['accent'] }}25;">
                                    <i class="{{ $card['icon'] }} text-lg" style="color: {{ $card['accent'] }};"></i>
                                </div>
                                <span class="text-[10px] font-bold tracking-[2.5px] uppercase" style="color: var(--color-primary);">0{{ $i + 1 }} — Service</span>
                            </div>

                            <h3 class="text-[26px] sm:text-[32px] lg:text-[36px] font-extrabold tracking-tight mb-3" style="color: var(--color-text-heading); letter-spacing: -0.03em; line-height: 1.15;">
                                {{ $card['title'] }}
                            </h3>

                            <p class="text-[15px] leading-relaxed mb-6" style="color: var(--color-text); max-width: 90%;">
                                {{ $card['desc'] }}
                            </p>

                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2.5 mb-8">
                                @foreach($card['features'] as $feat)
                                    <li class="flex items-center gap-3 text-sm" style="color: rgba(0,0,0,0.6);">
                                        <span class="w-2 h-2 rounded-full flex-shrink-0" style="background: {{ $card['accent'] }};"></span>
                                        {{ $feat }}
                                    </li>
                                @endforeach
                            </ul>

                            <a href="{{ $card['link'] }}" class="inline-flex items-center gap-2.5 text-[14px] font-semibold transition-all hover:gap-3.5 px-5 py-2.5 rounded-full" style="color: white; background: var(--color-primary); width: fit-content;">
                                Learn More
                                <i class="fa-solid fa-arrow-right text-[11px]"></i>
                            </a>
                        </div>

                        {{-- Image Side --}}
                        <div class="scroll-stack-image">
                            <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" loading="lazy" width="800" height="600">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- WHY ENDOW TECHNOLOGIES — Light Interactive Cards --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="padding: 100px 0; background: #fefefe;">
    {{-- Subtle pattern overlay --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.025]" aria-hidden="true" style="background-image: radial-gradient(circle, #0a0a0a 1px, transparent 1px); background-size: 28px 28px;"></div>
    {{-- Decorative top rule --}}
    <div class="absolute top-0 left-[10%] right-[10%] h-px pointer-events-none" style="background: linear-gradient(90deg, transparent, rgba(124,58,237,0.12), transparent);"></div>

    {{-- Entrance animation styles --}}
    <style>
        @keyframes whyBounceIn {
            0% { opacity: 0; transform: translateY(28px) scale(0.96); }
            60% { opacity: 1; transform: translateY(-4px) scale(1.01); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }
        .why-light-card {
            opacity: 0;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }
        .why-light-card.visible {
            animation: whyBounceIn 0.55s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }
        .why-light-card:nth-child(1).visible { animation-delay: 0.04s; }
        .why-light-card:nth-child(2).visible { animation-delay: 0.1s; }
        .why-light-card:nth-child(3).visible { animation-delay: 0.16s; }
        .why-light-card:nth-child(4).visible { animation-delay: 0.22s; }
        .why-light-card:nth-child(5).visible { animation-delay: 0.28s; }
        .why-light-card:nth-child(6).visible { animation-delay: 0.34s; }
    </style>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        {{-- Header --}}
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Why Endow Technologies
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="text-[36px] sm:text-[44px] lg:text-[52px] font-extrabold tracking-tight mb-4" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.1;">
                Six Reasons Businesses<br class="hidden sm:block">
                <span class="gradient-text">Choose Us</span>
            </h2>
            <p class="text-[15px] max-w-xl mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">
                Every engagement is built on deep expertise, proven delivery, and a relentless focus on outcomes that move your business forward.
            </p>
        </div>

        {{-- Interactive Card Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['icon' => 'fa-solid fa-brain', 'title' => 'Deep Technical Expertise', 'desc' => 'AI/ML specialists, cloud architects, and full-stack engineers with proven track records across 200+ projects.', 'badge' => '10+ Years', 'color' => '#7c3aed'],
                ['icon' => 'fa-solid fa-rocket', 'title' => 'Agile & Fast Delivery', 'desc' => 'Working software in weeks, not months. Rapid iterations with continuous feedback loops.', 'badge' => '2-Week Sprints', 'color' => '#3b82f6'],
                ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Enterprise-Grade Security', 'desc' => 'SOC 2-aligned practices, encrypted pipelines, and secure development lifecycles baked in from day one.', 'badge' => '99.9% Secure', 'color' => '#10b981'],
                ['icon' => 'fa-solid fa-scale-balanced', 'title' => 'Scalable Architecture', 'desc' => 'From startup MVPs to platforms handling millions of daily transactions — built to grow with you.', 'badge' => '100+ Projects', 'color' => '#f59e0b'],
                ['icon' => 'fa-solid fa-hand-holding-dollar', 'title' => 'Cost-Effective Innovation', 'desc' => '40% average cost reduction through intelligent automation and efficient delivery models.', 'badge' => '40% Savings', 'color' => '#ef4444'],
                ['icon' => 'fa-solid fa-headset', 'title' => 'Dedicated Support & Maintenance', 'desc' => '24/7 monitoring, proactive maintenance, and rapid incident response to keep you running.', 'badge' => '24/7 Support', 'color' => '#8b5cf6'],
            ] as $i => $item)
                <div class="why-light-card group relative rounded-2xl p-6 overflow-hidden cursor-default"
                     style="background: white; border: 1px solid var(--color-border); box-shadow: 0 1px 4px rgba(0,0,0,0.03);"
                     onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 32px rgba(0,0,0,0.08)'; this.style.borderColor='{{ $item['color'] }}40';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 1px 4px rgba(0,0,0,0.03)'; this.style.borderColor='var(--color-border)';">
                    {{-- Accent top line --}}
                    <div class="absolute top-0 left-4 right-4 h-[3px] rounded-b transition-all duration-300 opacity-0 group-hover:opacity-100" style="background: {{ $item['color'] }};"></div>

                    {{-- Icon + Badge row --}}
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center transition-all duration-300 group-hover:scale-110" style="background: {{ $item['color'] }}10; border: 1px solid {{ $item['color'] }}20;">
                            <i class="{{ $item['icon'] }} text-sm" style="color: {{ $item['color'] }};"></i>
                        </div>
                        <span class="text-[10px] font-bold px-2.5 py-1 rounded-full transition-all duration-300" style="background: {{ $item['color'] }}08; border: 1px solid {{ $item['color'] }}15; color: {{ $item['color'] }};">
                            {{ $item['badge'] }}
                        </span>
                    </div>

                    {{-- Title --}}
                    <h4 class="text-[16px] font-bold mb-2" style="color: var(--color-text-heading); letter-spacing: -0.01em;">{{ $item['title'] }}</h4>

                    {{-- Description --}}
                    <p class="text-[13px] leading-relaxed" style="color: var(--color-text-muted);">{{ $item['desc'] }}</p>

                    {{-- Interactive indicator --}}
                    <div class="mt-4 flex items-center gap-2 text-[11px] font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300" style="color: {{ $item['color'] }};">
                        <span>Learn more</span>
                        <i class="fa-solid fa-arrow-right text-[9px] transition-transform duration-300 group-hover:translate-x-1"></i>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Bottom stat strip --}}
        <div data-animate class="flex flex-wrap items-center justify-center gap-10 sm:gap-16 mt-14 pt-12" style="border-top: 1px solid var(--color-border);">
            @foreach([
                ['value' => '200+', 'label' => 'Projects Delivered'],
                ['value' => '25+', 'label' => 'Tech Experts'],
                ['value' => '30+', 'label' => 'Countries Served'],
                ['value' => '99.9%', 'label' => 'Uptime SLA'],
            ] as $stat)
                <div class="text-center group cursor-default">
                    <div class="text-[32px] sm:text-[40px] font-extrabold tracking-tight transition-all duration-300 group-hover:scale-105" style="color: var(--color-primary); letter-spacing: -0.03em; line-height: 1;">{{ $stat['value'] }}</div>
                    <div class="text-[11px] font-semibold uppercase tracking-[2px] mt-1.5" style="color: var(--color-text-muted);">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
    (function() {
        var cards = document.querySelectorAll('.why-light-card');
        if (!cards.length) return;
        var obs = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    cards.forEach(function(c) { c.classList.add('visible'); });
                    obs.disconnect();
                }
            });
        }, { threshold: 0.1 });
        obs.observe(cards[0].closest('section') || cards[0]);
    })();
    </script>
</section>

{{-- ============================================ --}}
{{-- PROCESS — Light Animated Interactive Timeline --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="padding: 120px 0; background: #fefefe;">
    {{-- Subtle dot texture --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.018]" aria-hidden="true" style="background-image: radial-gradient(circle, #0a0a0a 1px, transparent 1px); background-size: 26px 26px;"></div>
    {{-- Decorative top rule --}}
    <div class="absolute top-0 left-[10%] right-[10%] h-px pointer-events-none" style="background: linear-gradient(90deg, transparent, rgba(212,32,44,0.1), transparent);"></div>

    <style>
        @keyframes processStepIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes processPulse { 0%, 100% { box-shadow: 0 0 0 0 rgba(212,32,44,0.15); } 50% { box-shadow: 0 0 0 10px rgba(212,32,44,0); } }
        .process-step { opacity: 0; }
        .process-step.visible { animation: processStepIn 0.5s ease forwards; }
        .process-step:nth-child(1).visible { animation-delay: 0.05s; }
        .process-step:nth-child(2).visible { animation-delay: 0.15s; }
        .process-step:nth-child(3).visible { animation-delay: 0.25s; }
        .process-step:nth-child(4).visible { animation-delay: 0.35s; }

        .process-num-circle {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .process-step:hover .process-num-circle {
            transform: scale(1.08);
            animation: processPulse 2s ease infinite;
        }
        .process-step:hover .process-num-circle-inner {
            background: var(--color-primary) !important;
            color: white !important;
            border-color: var(--color-primary) !important;
        }
    </style>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        {{-- Header --}}
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                How We Work
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="text-[36px] sm:text-[44px] lg:text-[52px] font-extrabold tracking-tight mb-4" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.1;">
                From concept to<br class="hidden sm:block"><span class="gradient-text">production in weeks</span>
            </h2>
            <p class="text-[15px] max-w-lg mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">
                A lean, transparent process built for speed without compromising quality. Each phase is designed to deliver measurable progress.
            </p>
        </div>

        {{-- Interactive Timeline Steps --}}
        <div class="relative">
            {{-- Animated connecting line (desktop) --}}
            <div class="hidden lg:block absolute left-[10%] right-[10%] pointer-events-none" style="top: 30px; height: 2px;">
                {{-- Base dashed track --}}
                <div class="absolute inset-x-0 top-0 h-[2px] opacity-40" style="background: repeating-linear-gradient(90deg, var(--color-border) 0px, var(--color-border) 5px, transparent 5px, transparent 14px);"></div>
                {{-- Animated flow overlay --}}
                <style>
                    @keyframes connectorFlow {
                        0% { background-position: 0% 0; }
                        100% { background-position: 200% 0; }
                    }
                    .connector-flow {
                        position: absolute; left: 0; right: 0; top: 0; height: 2px;
                        background: repeating-linear-gradient(90deg, 
                            var(--color-primary) 0px, var(--color-primary) 5px, 
                            transparent 5px, transparent 14px);
                        background-size: 200% 100%;
                        animation: connectorFlow 4.5s linear infinite;
                        opacity: 0.55;
                        mask-image: linear-gradient(90deg, transparent 0%, black 12%, black 88%, transparent 100%);
                        -webkit-mask-image: linear-gradient(90deg, transparent 0%, black 12%, black 88%, transparent 100%);
                    }
                </style>
                <div class="connector-flow"></div>
                {{-- Colored connection dots positioned at column centers --}}
                @foreach([
                    ['color' => '#7c3aed', 'left' => 12.5, 'delay' => 0],
                    ['color' => '#3b82f6', 'left' => 37.5, 'delay' => 0.6],
                    ['color' => '#10b981', 'left' => 62.5, 'delay' => 1.2],
                    ['color' => '#f59e0b', 'left' => 87.5, 'delay' => 1.8],
                ] as $k => $dot)
                    <style>
                        @keyframes dotPulse{{ $k }} { 0%,100% { transform: translate(-50%, -50%) scale(1); opacity: 0.75; } 50% { transform: translate(-50%, -50%) scale(1.7); opacity: 1; } }
                    </style>
                    <div class="absolute w-[8px] h-[8px] rounded-full"
                         style="left: {{ $dot['left'] }}%; top: 1px; background: {{ $dot['color'] }}; box-shadow: 0 0 10px {{ $dot['color'] }}50; animation: dotPulse{{ $k }} 2.4s ease-in-out infinite; animation-delay: {{ $dot['delay'] }}s; z-index: 5;"></div>
                @endforeach
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6">
                @foreach([
                    ['num' => '01', 'icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Discovery', 'desc' => 'We learn your business, goals, and technical landscape. No assumptions — just deep understanding.', 'color' => '#7c3aed'],
                    ['num' => '02', 'icon' => 'fa-solid fa-pencil-ruler', 'title' => 'Architecture', 'desc' => 'We design a solution blueprint — tech stack, timeline, and milestones aligned to your budget.', 'color' => '#3b82f6'],
                    ['num' => '03', 'icon' => 'fa-solid fa-code', 'title' => 'Development', 'desc' => 'Agile sprints with weekly demos. You see progress in real time — not in PowerPoint slides.', 'color' => '#10b981'],
                    ['num' => '04', 'icon' => 'fa-solid fa-rocket', 'title' => 'Deploy & Scale', 'desc' => 'Production launch with monitoring, documentation, and ongoing support built right in.', 'color' => '#f59e0b'],
                ] as $i => $step)
                    <div class="process-step group text-center lg:text-center">
                        {{-- Number circle — connector anchor --}}
                        <div class="flex items-center justify-center mb-6 relative z-10">
                            <div class="process-num-circle w-[60px] h-[60px] rounded-full flex items-center justify-center relative bg-white"
                                 style="background: {{ $step['color'] }}08; border: 2px solid {{ $step['color'] }}15;">
                                <div class="process-num-circle-inner w-[52px] h-[52px] rounded-full flex items-center justify-center text-lg font-extrabold transition-all duration-300"
                                     style="background: white; border: 1.5px solid var(--color-border); color: {{ $step['color'] }};">
                                    {{ $step['num'] }}
                                </div>
                                {{-- Connector node glow ring --}}
                                <div class="absolute inset-[-3px] rounded-full pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-300" style="border: 2px solid {{ $step['color'] }}30; box-shadow: 0 0 12px {{ $step['color'] }}20;"></div>
                            </div>
                        </div>

                        {{-- Content card --}}
                        <div class="rounded-2xl p-6 transition-all duration-300 group-hover:-translate-y-1 group-hover:shadow-lg"
                             style="background: #fafafc; border: 1px solid var(--color-border); box-shadow: 0 1px 3px rgba(0,0,0,0.03);"
                             onmouseover="this.style.borderColor='{{ $step['color'] }}30'; this.style.boxShadow='0 8px 28px rgba(0,0,0,0.06)';"
                             onmouseout="this.style.borderColor='var(--color-border)'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.03)';">
                            {{-- Step icon --}}
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3 mx-auto transition-all duration-300 group-hover:scale-110" style="background: {{ $step['color'] }}10;">
                                <i class="{{ $step['icon'] }} text-sm" style="color: {{ $step['color'] }};"></i>
                            </div>

                            <h3 class="text-lg font-bold mb-2.5" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $step['title'] }}</h3>
                            <p class="text-[13px] leading-relaxed" style="color: var(--color-text-muted);">{{ $step['desc'] }}</p>

                            {{-- Progress indicator --}}
                            <div class="mt-4 h-[3px] rounded-full overflow-hidden" style="background: #eee;">
                                <div class="h-full rounded-full transition-all duration-500 group-hover:w-full" style="width: {{ ($i + 1) * 25 }}%; background: {{ $step['color'] }};"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Bottom CTA --}}
        <div data-animate class="text-center mt-14">
            <p class="text-sm mb-4" style="color: var(--color-text-muted);">
                Ready to start your project? Let's talk about how we can help.
            </p>
            <a href="#appointment" class="inline-flex items-center gap-2.5 text-sm font-semibold px-6 py-3 rounded-full transition-all hover:gap-3.5" style="background: var(--color-primary); color: white;">
                Schedule a Free Consultation
                <i class="fa-solid fa-arrow-right text-[11px]"></i>
            </a>
        </div>
    </div>

    <script>
    (function() {
        var items = document.querySelectorAll('.process-step');
        if (!items.length) return;
        var obs = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    items.forEach(function(el) { el.classList.add('visible'); });
                    obs.disconnect();
                }
            });
        }, { threshold: 0.12 });
        obs.observe(items[0].closest('section'));
    })();
    </script>
</section>

{{-- ============================================ --}}
{{-- TECHNOLOGY SOLUTIONS — Full-background Platform Cards --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: #7c3aed; letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: #7c3aed;"></span>
                Technology Domains
                <span class="w-5 h-px" style="background: #7c3aed;"></span>
            </div>
            <h2 class="section-heading">Three Platforms, <span class="gradient-text">One Ecosystem</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                Purpose-built technology stacks that work together to transform your business.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-animate>
            @php
                $platforms = [
                    [
                        'gradient' => 'linear-gradient(135deg, #7c3aed 0%, #4c1d95 100%)',
                        'light' => '#7c3aed',
                        'icon' => 'fa-solid fa-robot',
                        'title' => 'AI & Automation',
                        'desc' => 'Intelligent systems that learn, predict, and automate. From NLP chatbots to computer vision pipelines — deploy AI that drives measurable ROI.',
                        'features' => ['ML model deployment', 'Natural language processing', 'Computer vision', 'Process automation'],
                        'cta' => 'Explore AI Platform',
                        'link' => route('seo.ai-automation'),
                    ],
                    [
                        'gradient' => 'linear-gradient(135deg, #2563eb 0%, #1e40af 100%)',
                        'light' => '#3b82f6',
                        'icon' => 'fa-solid fa-cloud-arrow-up',
                        'title' => 'Cloud & Security',
                        'desc' => 'Enterprise infrastructure built for scale. Multi-cloud architecture, zero-trust security, and migration strategies with 99.9% uptime guarantee.',
                        'features' => ['Multi-cloud architecture', 'Zero-trust security', 'Seamless migration', '99.9% uptime SLA'],
                        'cta' => 'Explore Cloud Platform',
                        'link' => route('seo.cloud-computing'),
                    ],
                    [
                        'gradient' => 'linear-gradient(135deg, #059669 0%, #047857 100%)',
                        'light' => '#10b981',
                        'icon' => 'fa-solid fa-code',
                        'title' => 'Custom Software',
                        'desc' => 'Full-stack web, mobile, and desktop applications engineered for performance, security, and exceptional user experiences at any scale.',
                        'features' => ['Web & mobile apps', 'API architecture', 'Real-time systems', 'Legacy modernization'],
                        'cta' => 'Explore Dev Platform',
                        'link' => route('seo.software-development'),
                    ],
                ];
            @endphp

            @foreach($platforms as $p)
                <a href="{{ $p['link'] }}" class="group relative rounded-2xl overflow-hidden transition-all duration-400 hover:-translate-y-1.5 hover:shadow-2xl">
                    {{-- Full gradient background --}}
                    <div class="absolute inset-0" style="background: {{ $p['gradient'] }};"></div>
                    {{-- Decorative radial glow --}}
                    <div class="absolute -top-20 -right-20 w-[200px] h-[200px] rounded-full opacity-20 pointer-events-none" style="background: radial-gradient(circle, white 0%, transparent 70%);"></div>
                    <div class="absolute -bottom-10 -left-10 w-[150px] h-[150px] rounded-full opacity-10 pointer-events-none" style="background: radial-gradient(circle, white 0%, transparent 70%);"></div>
                    {{-- Dot overlay --}}
                    <div class="absolute inset-0 pointer-events-none opacity-[0.03]" style="background-image: radial-gradient(circle, rgba(255,255,255,0.8) 1px, transparent 1px); background-size: 24px 24px;"></div>

                    <div class="relative z-10 p-8 md:p-10 flex flex-col h-full">
                        {{-- Icon --}}
                        <div class="w-[56px] h-[56px] rounded-[16px] flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-105" style="background: rgba(255,255,255,0.08); backdrop-filter: blur(4px); border: 1px solid rgba(255,255,255,0.06);">
                            <i class="{{ $p['icon'] }} text-2xl text-white"></i>
                        </div>

                        {{-- Content --}}
                        <h3 class="text-xl font-bold text-white mb-3" style="letter-spacing: -0.02em;">{{ $p['title'] }}</h3>
                        <p class="text-sm leading-relaxed mb-6 flex-1" style="color: rgba(255,255,255,0.7);">{{ $p['desc'] }}</p>

                        {{-- Features --}}
                        <ul class="space-y-2 mb-8">
                            @foreach($p['features'] as $feat)
                                <li class="flex items-center gap-2.5 text-[12.5px]" style="color: rgba(255,255,255,0.6);">
                                    <i class="fa-solid fa-check text-[10px]" style="color: rgba(255,255,255,0.8);"></i>
                                    {{ $feat }}
                                </li>
                            @endforeach
                        </ul>

                        {{-- CTA Arrow --}}
                        <div class="inline-flex items-center gap-2 text-sm font-semibold text-white group-hover:gap-3 transition-all">
                            {{ $p['cta'] }}
                            <i class="fa-solid fa-arrow-right text-[11px] transition-transform duration-300 group-hover:translate-x-0.5"></i>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- INDUSTRIES — Professional Sector Cards --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #ffffff;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Industries
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="section-heading">Expertise Across <span class="gradient-text">Every Sector</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                Deep domain knowledge that translates technology into industry-specific outcomes.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-heart-pulse', 'title' => 'Healthcare', 'desc' => 'Diagnostic AI, patient data analytics, and secure medical record systems.'],
                ['icon' => 'fa-solid fa-building-columns', 'title' => 'Finance & Banking', 'desc' => 'Fraud detection, algorithmic trading, and regulatory compliance automation.'],
                ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'Retail & E-Commerce', 'desc' => 'Personalization engines, inventory optimization, and omnichannel platforms.'],
                ['icon' => 'fa-solid fa-warehouse', 'title' => 'Manufacturing', 'desc' => 'Predictive maintenance, quality control AI, and supply chain digitization.'],
                ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Education', 'desc' => 'Adaptive learning platforms, student analytics, and virtual classroom solutions.'],
                ['icon' => 'fa-solid fa-truck-fast', 'title' => 'Logistics', 'desc' => 'Route optimization, fleet management, and real-time shipment tracking.'],
            ] as $index => $ind)
                <div class="group relative rounded-2xl p-5 sm:p-6 text-center transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md"
                     style="background: #fafafc; border: 1px solid #eeeef0;"
                     onmouseover="this.style.borderColor='var(--color-primary)30'; this.style.boxShadow='0 8px 24px rgba(0,0,0,0.05)';"
                     onmouseout="this.style.borderColor='#eeeef0'; this.style.boxShadow='none';">
                    {{-- Icon --}}
                    <div class="w-11 h-11 rounded-xl mx-auto mb-3 flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:shadow-sm"
                         style="background: rgba(212,32,44,0.06);">
                        <i class="{{ $ind['icon'] }} text-base" style="color: var(--color-primary);"></i>
                    </div>
                    {{-- Title --}}
                    <h4 class="text-[13px] font-bold mb-1.5" style="color: var(--color-text-heading); letter-spacing: -0.01em;">{{ $ind['title'] }}</h4>
                    {{-- Description (always visible) --}}
                    <p class="text-[12px] leading-relaxed mt-2.5 max-w-[240px] mx-auto" style="color: rgba(0,0,0,0.55); line-height: 1.5;">{{ $ind['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CASE STUDIES — Metric-forward Story Cards --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: #7c3aed; letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: #7c3aed;"></span>
                Case Studies
                <span class="w-5 h-px" style="background: #7c3aed;"></span>
            </div>
            <h2 class="section-heading">Proven <span class="gradient-text">Results</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                Real outcomes from real engagements. Measurable impact across industries.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-animate>
            @php
                $studies = [
                    ['metric' => '35%', 'label' => 'Revenue Increase', 'title' => 'E-Commerce Personalization AI', 'desc' => 'AI-driven product recommendation engine for a major online retailer, boosting conversions and average order value.', 'icon' => 'fa-solid fa-cart-shopping'],
                    ['metric' => '60%', 'label' => 'Cost Reduction', 'title' => 'Cloud Migration for FinTech', 'desc' => 'Migrated a financial services platform to secure multi-cloud architecture, reducing infrastructure costs while improving scalability.', 'icon' => 'fa-solid fa-cloud'],
                    ['metric' => '50%', 'label' => 'Faster Operations', 'title' => 'Custom ERP for Manufacturer', 'desc' => 'Bespoke ERP system with real-time analytics for a manufacturing client, cutting processing time across all departments.', 'icon' => 'fa-solid fa-industry'],
                ];
            @endphp

            @foreach($studies as $case)
                <div class="group relative rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-xl" style="background: white; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                    {{-- Metric hero area --}}
                    <div class="pt-8 sm:pt-10 px-8 sm:px-10">
                        <div class="text-[44px] sm:text-[52px] font-extrabold tracking-tight leading-none mb-2" style="color: #7c3aed; letter-spacing: -0.04em;">{{ $case['metric'] }}</div>
                        <div class="text-[12px] font-bold uppercase tracking-[2px] mb-5" style="color: rgba(0,0,0,0.3);">{{ $case['label'] }}</div>
                        <div class="w-10 h-[3px] rounded-full mb-6" style="background: linear-gradient(90deg, #7c3aed, #a78bfa);"></div>
                    </div>

                    {{-- Content --}}
                    <div class="px-8 sm:px-10 pb-8 sm:pb-10">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center" style="background: rgba(124,58,237,0.06);">
                                <i class="{{ $case['icon'] }} text-xs" style="color: #7c3aed;"></i>
                            </div>
                            <h3 class="text-[17px] font-bold" style="color: #0a0a0a; letter-spacing: -0.02em;">{{ $case['title'] }}</h3>
                        </div>
                        <p class="text-sm leading-relaxed" style="color: rgba(0,0,0,0.55);">{{ $case['desc'] }}</p>
                    </div>
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
