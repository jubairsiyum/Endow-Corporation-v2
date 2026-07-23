@extends('layouts.app')

@section('title', 'Endow Global Education | Study Abroad, Scholarships & Language Training')
@section('meta_title', 'Endow Global Education | Study Abroad, Scholarships & Language Training')
@section('meta_description', 'Endow Global Education empowers students worldwide with study abroad programs, scholarship guidance, language training, and comprehensive student support. Serving 30+ countries from Seoul, South Korea.')

@section('content')

{{-- ============================================ --}}
{{-- HERO — Modern Split Layout --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="background: #080808; min-height: 85vh; display: flex; align-items: center;">
    {{-- Background Layers --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, rgba(255,255,255,0.8) 1px, transparent 1px); background-size: 32px 32px;"></div>
        {{-- Large ambient orbs --}}
        <div class="absolute" style="top: -15%; right: -8%; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(59,130,246,0.12) 0%, transparent 70%); filter: blur(60px);"></div>
        <div class="absolute" style="bottom: -10%; left: -5%; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(124,58,237,0.08) 0%, transparent 70%); filter: blur(50px);"></div>
        {{-- Diagonal accent line --}}
        <div class="absolute top-0 right-0 w-px h-64 opacity-10" style="background: linear-gradient(to bottom, #60a5fa, transparent); transform: rotate(25deg); transform-origin: top right;"></div>
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
                        <li class="text-white font-medium">Global Education</li>
                    </ol>
                </nav>

                {{-- Heading --}}
                <h1 class="text-[42px] sm:text-[52px] lg:text-[64px] font-extrabold text-white leading-[1.05] tracking-tight mb-6" style="letter-spacing: -0.035em;">
                    Global Vision,<br>
                    <span style="background: linear-gradient(135deg, #60a5fa 0%, #a78bfa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Guided Path</span>
                </h1>

                {{-- Description --}}
                <p class="text-base sm:text-lg leading-relaxed max-w-xl mb-10" style="color: rgba(255,255,255,0.45); line-height: 1.75;">
                    Endow Global Education opens doors to world-class academic opportunities. From study abroad programs and scholarship guidance to language training and student support, we guide you every step of the way across 30+ countries.
                </p>

                {{-- Inline Stats --}}
                <div class="flex flex-wrap items-center gap-6 sm:gap-10 mb-10">
                    @foreach([
                        ['value' => '30+', 'label' => 'Countries'],
                        ['value' => '100+', 'label' => 'Partner Universities'],
                        ['value' => '500+', 'label' => 'Students Placed'],
                    ] as $stat)
                        <div class="text-center sm:text-left">
                            <div class="text-[28px] sm:text-[34px] font-extrabold text-white tracking-tight" style="letter-spacing: -0.03em; line-height: 1;">{{ $stat['value'] }}</div>
                            <div class="text-[11px] font-semibold uppercase tracking-[1.5px] mt-1" style="color: rgba(255,255,255,0.3);">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>

                {{-- CTA --}}
                <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Start Your Journey</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>

            {{-- RIGHT: Visual Element --}}
            <div class="lg:col-span-5 hidden lg:flex items-center justify-center relative">
                {{-- Floating decorative card --}}
                <div class="relative w-[320px] h-[380px]">
                    {{-- Glass card 1 --}}
                    <div class="absolute top-0 right-0 w-[260px] h-[300px] rounded-3xl overflow-hidden shadow-2xl transform rotate-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); backdrop-filter: blur(10px);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4" style="background: rgba(59,130,246,0.15); border: 1px solid rgba(59,130,246,0.25);">
                                    <i class="fa-solid fa-graduation-cap text-3xl" style="color: #60a5fa;"></i>
                                </div>
                                <div class="w-32 h-1 rounded-full mx-auto mb-3 opacity-20" style="background: white;"></div>
                                <div class="w-24 h-1 rounded-full mx-auto mb-3 opacity-10" style="background: white;"></div>
                                <div class="w-16 h-1 rounded-full mx-auto opacity-10" style="background: white;"></div>
                            </div>
                        </div>
                    </div>
                    {{-- Glass card 2 (offset) --}}
                    <div class="absolute bottom-0 left-0 w-[200px] h-[240px] rounded-3xl overflow-hidden shadow-xl transform -rotate-6" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fa-solid fa-book-open text-5xl opacity-10" style="color: white;"></i>
                        </div>
                    </div>
                    {{-- Accent dot cluster --}}
                    <div class="absolute top-[20%] left-[10%] flex gap-1.5">
                        <span class="w-2 h-2 rounded-full" style="background: #60a5fa;"></span>
                        <span class="w-2 h-2 rounded-full opacity-40" style="background: #a78bfa;"></span>
                        <span class="w-2 h-2 rounded-full opacity-20" style="background: white;"></span>
                    </div>
                    <div class="absolute bottom-[25%] right-[5%] flex gap-1.5">
                        <span class="w-2 h-2 rounded-full opacity-30" style="background: white;"></span>
                        <span class="w-2 h-2 rounded-full" style="background: #60a5fa;"></span>
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
                    <i class="fa-solid fa-building-columns"></i>
                    Who We Are
                </div>
                <h2 class="section-heading">Your Gateway to <span class="gradient-text">Global Education</span></h2>
                <div class="space-y-5">
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        Endow Global Education is the education division of Endow Corporation, headquartered in Seoul, South Korea. We are dedicated to transforming lives through access to world-class education, connecting ambitious students with top-tier academic opportunities across the globe.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        Our comprehensive approach covers every aspect of the international education journey. From identifying the right university and program to securing scholarships, navigating visa processes, and preparing for life abroad, our team of experienced education consultants provides end-to-end guidance tailored to each student's unique goals.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        We partner with over 100 leading universities and educational institutions worldwide, giving our students access to exclusive programs, priority admissions, and scholarship opportunities not available elsewhere. Since our founding, we have successfully placed over 500 students in programs across 30+ countries.
                    </p>
                </div>
            </div>

            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="height: 380px; min-height: 260px; box-shadow: 0 24px 64px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/services/733542680_989042620614397_7628936787862668773_n.jpg') }}"
                         alt="Endow Global Education, study abroad, scholarships, and language training programs"
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
                <i class="fa-solid fa-graduation-cap"></i>
                What We Offer
            </div>
            <h2 class="section-heading">Comprehensive <span class="gradient-text">Education Services</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                Everything you need to achieve your academic dreams, all under one roof.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7" data-animate>
            @php
                $services = [
                    [
                        'icon' => 'fa-solid fa-plane-departure',
                        'title' => 'Study Abroad Programs',
                        'desc' => 'Access globally recognized universities and programs. We handle admissions, applications, and pre-departure preparation for a seamless transition.',
                        'accent' => 'rgba(59,130,246,0.08)',
                        'accentBorder' => 'rgba(59,130,246,0.12)',
                        'iconColor' => '#3b82f6',
                        'link' => route('seo.study-abroad'),
                    ],
                    [
                        'icon' => 'fa-solid fa-award',
                        'title' => 'Scholarship Guidance',
                        'desc' => 'Expert support to identify and apply for merit-based, need-based, and government scholarships that make quality education affordable.',
                        'accent' => 'rgba(16,185,129,0.08)',
                        'accentBorder' => 'rgba(16,185,129,0.15)',
                        'iconColor' => '#059669',
                        'link' => route('seo.scholarships'),
                    ],
                    [
                        'icon' => 'fa-solid fa-language',
                        'title' => 'Language Training & Certifications',
                        'desc' => 'Master English, Korean, Japanese, Chinese, and more with certified instructors. Prepare for IELTS, TOEFL, TOPIK, JLPT, and other certifications.',
                        'accent' => 'rgba(124,58,237,0.08)',
                        'accentBorder' => 'rgba(124,58,237,0.15)',
                        'iconColor' => '#7c3aed',
                        'link' => route('seo.language-training'),
                    ],
                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Student Support Services',
                        'desc' => 'Comprehensive assistance for admissions, visas, accommodation, and settling into a new country. We are with you every step of the way.',
                        'accent' => 'rgba(245,158,11,0.08)',
                        'accentBorder' => 'rgba(245,158,11,0.15)',
                        'iconColor' => '#d97706',
                    ],
                    [
                        'icon' => 'fa-solid fa-globe',
                        'title' => 'Cultural Exchange Programs',
                        'desc' => 'Participate in immersive programs that promote global understanding, cultural diversity, and lifelong international friendships.',
                        'accent' => 'rgba(236,72,153,0.08)',
                        'accentBorder' => 'rgba(236,72,153,0.15)',
                        'iconColor' => '#db2777',
                    ],
                    [
                        'icon' => 'fa-solid fa-building-columns',
                        'title' => 'University Partnerships',
                        'desc' => 'Exclusive partnerships with 100+ leading institutions worldwide, giving you access to priority admissions and special scholarship programs.',
                        'accent' => 'rgba(14,165,233,0.08)',
                        'accentBorder' => 'rgba(14,165,233,0.15)',
                        'iconColor' => '#0284c7',
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
                        <a href="{{ $svc['link'] }}" class="inline-flex items-center gap-2 text-sm font-medium mt-4" style="color: var(--color-primary);">
                            Learn More <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- WHY ENDOW GLOBAL EDUCATION --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="height: 380px; min-height: 260px; box-shadow: 0 24px 64px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/services/education-why.jpg') }}"
                         alt="Why choose Endow Global Education for your international education journey"
                         class="w-full h-full object-cover"
                         loading="lazy"
                         width="800"
                         height="600">
                </div>
            </div>

            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-star"></i>
                    Why Endow Global Education
                </div>
                <h2 class="section-heading">Six Reasons Students <span class="gradient-text">Choose Us</span></h2>
                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'fa-solid fa-globe', 'title' => 'Global Reach, Personal Touch', 'desc' => 'Serving 30+ countries with personalized guidance tailored to each student\'s unique aspirations and academic profile.'],
                        ['icon' => 'fa-solid fa-handshake', 'title' => '100+ University Partners', 'desc' => 'Direct partnerships with leading institutions mean priority processing, exclusive scholarships, and faster admissions.'],
                        ['icon' => 'fa-solid fa-file-lines', 'title' => 'End-to-End Application Support', 'desc' => 'From document preparation and essay reviews to interview coaching and visa processing, we handle every detail.'],
                        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Trusted & Proven Track Record', 'desc' => 'Over 500 students successfully placed with a 98% visa approval rate and 92% scholarship application success rate.'],
                        ['icon' => 'fa-solid fa-clock', 'title' => 'Time-Saving Expertise', 'desc' => 'Our consultants know the deadlines, requirements, and nuances of each university system, saving you months of research.'],
                        ['icon' => 'fa-solid fa-heart', 'title' => 'Genuine Care & Mentorship', 'desc' => 'We don\'t just process applications. We mentor students, build confidence, and celebrate every acceptance letter together.'],
                    ] as $item)
                        <div class="flex items-start gap-4 p-5 rounded-xl transition-all duration-300 hover:shadow-md" style="background: white; border: 1px solid #E5E7EB;">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(59,130,246,0.1) 0%, rgba(59,130,246,0.02) 100%);">
                                <i class="{{ $item['icon'] }} text-sm" style="color: #3b82f6;"></i>
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
{{-- STATS --}}
{{-- ============================================ --}}
<section style="background: var(--color-dark); padding: 60px 0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" data-animate>
            @foreach([
                ['value' => '30+', 'label' => 'Countries Covered', 'icon' => 'fa-solid fa-earth-americas'],
                ['value' => '100+', 'label' => 'Partner Universities', 'icon' => 'fa-solid fa-building-columns'],
                ['value' => '500+', 'label' => 'Students Placed', 'icon' => 'fa-solid fa-user-graduate'],
                ['value' => '98%', 'label' => 'Visa Success Rate', 'icon' => 'fa-solid fa-check-circle'],
            ] as $stat)
                <div>
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4" style="background: rgba(59,130,246,0.1); border: 1px solid rgba(59,130,246,0.15);">
                        <i class="{{ $stat['icon'] }} text-sm" style="color: #60a5fa;"></i>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1" style="letter-spacing: -0.03em;">{{ $stat['value'] }}</div>
                    <div class="text-sm" style="color: rgba(255,255,255,0.45);">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- EDUCATION PATHWAYS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-road"></i>
                Our Pathways
            </div>
            <h2 class="section-heading">Education <span class="gradient-text">Pathways</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                Three specialized pathways designed to meet every student's academic ambitions.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-animate>
            {{-- Study Abroad --}}
            <a href="{{ route('seo.study-abroad') }}" class="group rounded-2xl overflow-hidden transition-all duration-400 hover:-translate-y-2" style="background: white; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                <div class="h-48 overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);">
                        <i class="fa-solid fa-plane-departure text-6xl text-white opacity-30"></i>
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: rgba(59,130,246,0.1);">
                            <i class="fa-solid fa-globe text-sm" style="color: #3b82f6;"></i>
                        </div>
                        <h3 class="text-lg font-bold" style="color: var(--color-text-heading);">Study Abroad</h3>
                    </div>
                    <p class="text-sm leading-relaxed mb-4" style="color: var(--color-text);">
                        Undergraduate, postgraduate, and research programs at top-ranked universities worldwide. Full admissions and visa support.
                    </p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold group-hover:gap-3 transition-all" style="color: #3b82f6;">
                        Explore Programs <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </div>
            </a>

            {{-- Scholarships --}}
            <a href="{{ route('seo.scholarships') }}" class="group rounded-2xl overflow-hidden transition-all duration-400 hover:-translate-y-2" style="background: white; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                <div class="h-48 overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                        <i class="fa-solid fa-award text-6xl text-white opacity-30"></i>
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: rgba(16,185,129,0.1);">
                            <i class="fa-solid fa-trophy text-sm" style="color: #10b981;"></i>
                        </div>
                        <h3 class="text-lg font-bold" style="color: var(--color-text-heading);">Scholarship Guidance</h3>
                    </div>
                    <p class="text-sm leading-relaxed mb-4" style="color: var(--color-text);">
                        Merit-based, need-based, government, and university scholarships. Expert guidance from search to successful award.
                    </p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold group-hover:gap-3 transition-all" style="color: #10b981;">
                        Find Scholarships <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </div>
            </a>

            {{-- Language Training --}}
            <a href="{{ route('seo.language-training') }}" class="group rounded-2xl overflow-hidden transition-all duration-400 hover:-translate-y-2" style="background: white; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                <div class="h-48 overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center" style="background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);">
                        <i class="fa-solid fa-language text-6xl text-white opacity-30"></i>
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: rgba(124,58,237,0.1);">
                            <i class="fa-solid fa-certificate text-sm" style="color: #7c3aed;"></i>
                        </div>
                        <h3 class="text-lg font-bold" style="color: var(--color-text-heading);">Language Training</h3>
                    </div>
                    <p class="text-sm leading-relaxed mb-4" style="color: var(--color-text);">
                        IELTS, TOEFL, TOPIK, JLPT, HSK, and more. Expert-led preparation with a 92% target score achievement rate.
                    </p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold group-hover:gap-3 transition-all" style="color: #7c3aed;">
                        Start Learning <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TESTIMONIALS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-quote-left"></i>
                Testimonials
            </div>
            <h2 class="section-heading">What Our Students <span class="gradient-text">Say</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px]" data-animate>
            @foreach([
                ['text' => 'Endow Global Education made my dream of studying in Canada a reality. From university selection to visa approval, every step was handled professionally.', 'name' => 'Sarah Kim', 'program' => 'MBA – University of Toronto', 'icon' => 'fa-solid fa-graduation-cap'],
                ['text' => 'The scholarship guidance was incredible. They helped me secure a full scholarship for my master\'s program in South Korea. I couldn\'t have done it without them.', 'name' => 'Ahmed Hassan', 'program' => 'MS – KAIST, South Korea', 'icon' => 'fa-solid fa-award'],
                ['text' => 'Their pre-departure orientation and ongoing support made settling into a new country so much easier. Highly recommend their services to any student.', 'name' => 'Priya Sharma', 'program' => 'BSc – University of Melbourne', 'icon' => 'fa-solid fa-book'],
            ] as $index => $t)
                <div class="service-card">
                    <div class="mb-4" style="color: var(--color-primary); font-size: 36px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="text-base leading-relaxed mb-6" style="color: var(--color-text);">"{{ $t['text'] }}"</p>
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fa-solid fa-star text-sm" style="color: #fbbf24;"></i>
                        @endfor
                    </div>
                    <div class="pt-6" style="border-top: 1px dashed var(--color-border-dashed);">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(59,130,246,0.08);">
                                <i class="{{ $t['icon'] }} text-sm" style="color: #3b82f6;"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold" style="color: var(--color-text-heading);">{{ $t['name'] }}</p>
                                <p class="text-xs" style="color: var(--color-text-muted);">{{ $t['program'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CTA --}}
{{-- ============================================ --}}
<section class="px-[15px]">
    <div class="stat-bar flex flex-wrap items-center" style="margin-bottom: 0;">
        <div class="w-full p-10 lg:p-14 text-center">
            <h2 data-animate class="text-3xl md:text-4xl font-medium text-white mb-6" style="letter-spacing: -0.03em;">Ready to Start Your <span class="gradient-text">Education Journey</span>?</h2>
            <p data-animate class="text-white/70 text-base mb-8 max-w-2xl mx-auto">Let Endow Global Education guide you to the perfect university, program, or language certification. Your future starts with a single step.</p>
            <div data-animate class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Get Free Consultation</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <a href="{{ route('contact') }}" class="btn-primary btn-primary-lg" style="background: transparent; border: 1px solid rgba(255,255,255,0.3);">
                    <span class="btn-text"><span>Contact Us</span></span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- APPOINTMENT --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-0 left-0 w-[300px] h-[300px] opacity-10" style="background: radial-gradient(circle, #3b82f6, transparent 70%); filter: blur(60px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-calendar-check"></i>
                    Book Now
                </div>
                <h2 class="section-heading text-white">Book an <span class="gradient-text">Appointment</span></h2>
                <p class="text-white/60 text-base leading-relaxed mb-10">Ready to take the next step in your educational journey? Book a consultation with our experts to explore study programs, scholarship opportunities, and visa assistance.</p>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(59,130,246,0.15);">
                            <i class="fa-solid fa-phone text-sm" style="color: #60a5fa;"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider" style="color: #a9b8b8;">Call us</p>
                            <a href="tel:0226322559" class="text-white font-medium text-sm hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(59,130,246,0.15);">
                            <i class="fa-regular fa-envelope text-sm" style="color: #60a5fa;"></i>
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
                    <input type="hidden" name="page" value="education">
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
                                <option value="Study Abroad" selected>Study Abroad</option>
                                <option value="Scholarship Guidance">Scholarship Guidance</option>
                                <option value="Language Training">Language Training</option>
                                <option value="Education Services">Education Services</option>
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
                        <textarea name="message" rows="4" placeholder="Tell us about your education goals..." class="input-field resize-none">{{ old('message') }}</textarea>
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
