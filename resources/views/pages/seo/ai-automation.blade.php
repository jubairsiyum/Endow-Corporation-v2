@extends('layouts.app')

@section('title', 'AI & Automation Solutions | Machine Learning, NLP & Computer Vision | Endow Technologies')
@section('meta_title', 'AI & Automation Solutions | Machine Learning, NLP & Computer Vision | Endow Technologies')
@section('meta_description', 'Endow Technologies delivers enterprise AI and automation solutions including machine learning, natural language processing, computer vision, and intelligent process automation. Reduce costs by 40% with our AI-driven approach.')
@section('meta_keywords', 'AI solutions, machine learning, NLP, computer vision, process automation, artificial intelligence services, AI consulting, Endow Technologies, Seoul AI company')
@section('og_title', 'AI & Automation Solutions | Endow Technologies')
@section('og_description', 'Transform your business with enterprise AI. ML, NLP, computer vision, and intelligent automation from Seoul-based Endow Technologies.')

@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "AI & Automation Solutions",
    "provider": { "@type": "Organization", "name": "Endow Technologies" },
    "description": "Enterprise AI and automation solutions including machine learning, NLP, computer vision, and process automation.",
    "serviceType": "AI & Automation",
    "areaServed": { "@type": "Country", "name": "South Korea" }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "Technology", "item": "{{ url('/technology') }}" },
        { "@type": "ListItem", "position": 3, "name": "AI & Automation", "item": "{{ url()->current() }}" }
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
        <div class="absolute" style="top: -15%; right: -8%; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(124,58,237,0.10) 0%, transparent 70%); filter: blur(60px);"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-20 lg:py-28 relative z-10 w-full">
        <nav class="mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center gap-2 text-[13px] px-4 py-2 rounded-full" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.06); color: rgba(255,255,255,0.4);">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><span class="mx-1 opacity-30">/</span></li>
                <li><a href="{{ route('technology') }}" class="hover:text-white transition-colors">Technology</a></li>
                <li><span class="mx-1 opacity-30">/</span></li>
                <li class="text-white font-medium">AI & Automation</li>
            </ol>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <h1 class="text-[42px] sm:text-[52px] lg:text-[64px] font-extrabold text-white leading-[1.05] tracking-tight mb-6" style="letter-spacing: -0.035em;">
                    AI & Intelligent<br>
                    <span style="background: linear-gradient(135deg, #a78bfa 0%, #fbbf24 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Automation</span>
                </h1>
                <p class="text-base sm:text-lg leading-relaxed max-w-xl mb-8" style="color: rgba(255,255,255,0.45); line-height: 1.75;">
                    Deploy machine learning models, natural language processing, computer vision, and intelligent process automation that reduce operational costs by up to 40% and accelerate workflows by 3x.
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                        <span class="btn-text"><span>Get AI Consulting</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="#appointment" class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-full text-sm font-semibold transition-all hover:-translate-y-0.5" style="background: rgba(255,255,255,0.06); color: white; border: 1px solid rgba(255,255,255,0.1);">
                        Book a Call
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5 hidden lg:flex items-center justify-center">
                <div class="w-48 h-48 rounded-[32px] flex items-center justify-center" style="background: linear-gradient(135deg, rgba(124,58,237,0.15) 0%, rgba(245,158,11,0.05) 100%); border: 1px solid rgba(255,255,255,0.08);">
                    <i class="fa-solid fa-brain text-6xl" style="color: #a78bfa;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CAPABILITIES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #fefefe;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Capabilities
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="section-heading">AI Solutions <span class="gradient-text">That Deliver ROI</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                From predictive analytics to intelligent document processing, our AI capabilities span the full spectrum of modern artificial intelligence.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-animate>
            @php
                $aiServices = [
                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Machine Learning & Predictive Analytics',
                        'desc' => 'Custom ML models trained on your data to forecast trends, optimize decisions, detect anomalies, and automate complex analytical workflows with measurable accuracy improvements.',
                        'accent' => '#7c3aed',
                        'outcomes' => ['Demand forecasting models', 'Anomaly detection systems', 'Recommendation engines', 'Customer churn prediction'],
                    ],
                    [
                        'icon' => 'fa-solid fa-comment-dots',
                        'title' => 'Natural Language Processing',
                        'desc' => 'Advanced NLP solutions that understand, interpret, and generate human language. Deploy intelligent chatbots, sentiment analysis, and document understanding at enterprise scale.',
                        'accent' => '#3b82f6',
                        'outcomes' => ['Intelligent chatbots & assistants', 'Sentiment analysis engines', 'Document classification', 'Multilingual text processing'],
                    ],
                    [
                        'icon' => 'fa-solid fa-eye',
                        'title' => 'Computer Vision Systems',
                        'desc' => 'Image and video analysis systems for quality inspection, object detection, facial recognition, and medical imaging. Real-time processing at production scale.',
                        'accent' => '#10b981',
                        'outcomes' => ['Quality control automation', 'Object & defect detection', 'Facial recognition systems', 'Medical image analysis'],
                    ],
                    [
                        'icon' => 'fa-solid fa-gears',
                        'title' => 'Intelligent Process Automation',
                        'desc' => 'End-to-end workflow automation combining RPA with AI decision engines. Eliminate manual bottlenecks, reduce errors, and accelerate business processes across departments.',
                        'accent' => '#f59e0b',
                        'outcomes' => ['Document processing pipelines', 'Automated data extraction', 'Intelligent routing systems', 'Workflow orchestration'],
                    ],
                ];
            @endphp

            @foreach($aiServices as $svc)
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
                            <p class="text-[14px] leading-relaxed mb-4" style="color: var(--color-text);">{{ $svc['desc'] }}</p>
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($svc['outcomes'] as $outcome)
                                    <div class="flex items-center gap-2 text-[12px]" style="color: var(--color-text-muted);">
                                        <i class="fa-solid fa-check text-[10px]" style="color: {{ $svc['accent'] }};"></i>
                                        {{ $outcome }}
                                    </div>
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
{{-- IMPACT METRICS --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="padding: 100px 0; background: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                    <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                    Business Impact
                    <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                </div>
                <h2 class="text-[36px] sm:text-[44px] font-extrabold tracking-tight mb-4" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.15;">
                    How AI Transforms <span class="gradient-text">Business Performance</span>
                </h2>
                <p class="text-base leading-relaxed mb-10" style="color: var(--color-text);">
                    Organizations that integrate AI into their operations see measurable improvements across cost, speed, accuracy, and customer satisfaction. Our clients report the following average outcomes.
                </p>
                <div class="grid grid-cols-2 gap-5">
                    @foreach([
                        ['value' => '40%', 'label' => 'Cost Reduction', 'icon' => 'fa-solid fa-piggy-bank', 'color' => '#7c3aed'],
                        ['value' => '3x', 'label' => 'Faster Operations', 'icon' => 'fa-solid fa-bolt', 'color' => '#3b82f6'],
                        ['value' => '85%', 'label' => 'Task Accuracy', 'icon' => 'fa-solid fa-bullseye', 'color' => '#10b981'],
                        ['value' => '60%', 'label' => 'Time Saved', 'icon' => 'fa-solid fa-clock', 'color' => '#f59e0b'],
                    ] as $stat)
                        <div class="rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1" style="background: white; border: 1px solid var(--color-border); box-shadow: 0 1px 4px rgba(0,0,0,0.03);">
                            <i class="{{ $stat['icon'] }} text-lg mb-3 block" style="color: {{ $stat['color'] }};"></i>
                            <div class="text-[32px] font-extrabold tracking-tight mb-1" style="color: {{ $stat['color'] }}; line-height: 1;">{{ $stat['value'] }}</div>
                            <p class="text-[12px] font-semibold uppercase tracking-[1.5px]" style="color: var(--color-text-muted);">{{ $stat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="box-shadow: 0 4px 24px rgba(0,0,0,0.06);">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=700&h=500&fit=crop"
                         alt="AI and machine learning infrastructure at Endow Technologies"
                         class="w-full h-auto"
                         loading="lazy" width="700" height="500">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- INDUSTRIES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #ffffff;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Industries
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="section-heading">AI Expertise Across <span class="gradient-text">Every Sector</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                Deep domain knowledge combined with AI expertise to deliver industry-specific solutions that create measurable impact.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-heart-pulse', 'title' => 'Healthcare', 'desc' => 'Diagnostic AI, patient data analytics, medical imaging, and automated clinical documentation systems.', 'color' => '#ef4444'],
                ['icon' => 'fa-solid fa-building-columns', 'title' => 'Finance & Banking', 'desc' => 'Fraud detection, algorithmic trading signals, risk assessment, and regulatory compliance automation.', 'color' => '#3b82f6'],
                ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'Retail & E-Commerce', 'desc' => 'Personalization engines, demand forecasting, inventory optimization, and dynamic pricing models.', 'color' => '#f59e0b'],
                ['icon' => 'fa-solid fa-warehouse', 'title' => 'Manufacturing', 'desc' => 'Predictive maintenance, quality control computer vision, and supply chain optimization systems.', 'color' => '#8b5cf6'],
                ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Education', 'desc' => 'Adaptive learning platforms, automated grading, student performance analytics, and content personalization.', 'color' => '#10b981'],
                ['icon' => 'fa-solid fa-truck-fast', 'title' => 'Logistics', 'desc' => 'Route optimization AI, warehouse automation, demand prediction, and real-time shipment tracking.', 'color' => '#06b6d4'],
            ] as $ind)
                <div class="group rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
                     style="background: #fafafc; border: 1px solid #eeeef0;"
                     onmouseover="this.style.borderColor='{{ $ind['color'] }}30'; this.style.boxShadow='0 8px 24px rgba(0,0,0,0.05)';"
                     onmouseout="this.style.borderColor='#eeeef0'; this.style.boxShadow='none';">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3 transition-all duration-300 group-hover:scale-110" style="background: {{ $ind['color'] }}10;">
                        <i class="{{ $ind['icon'] }} text-sm" style="color: {{ $ind['color'] }};"></i>
                    </div>
                    <h4 class="text-[15px] font-bold mb-1.5" style="color: var(--color-text-heading); letter-spacing: -0.01em;">{{ $ind['title'] }}</h4>
                    <p class="text-[13px] leading-relaxed" style="color: var(--color-text-muted);">{{ $ind['desc'] }}</p>
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
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Case Studies
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="section-heading">Proven <span class="gradient-text">AI Results</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                Real outcomes from AI deployments across industries. Measurable impact on revenue, efficiency, and customer experience.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-animate>
            @foreach([
                ['metric' => '35%', 'label' => 'Revenue Increase', 'title' => 'E-Commerce Personalization AI', 'desc' => 'AI-driven product recommendation engine for a major online retailer, boosting conversions by 35% and increasing average order value by 22%.', 'icon' => 'fa-solid fa-cart-shopping', 'accent' => '#7c3aed'],
                ['metric' => '50%', 'label' => 'Downtime Reduction', 'title' => 'Predictive Maintenance for Manufacturing', 'desc' => 'ML-powered sensor analytics deployed across production lines, preventing equipment failures and reducing unplanned downtime by half.', 'icon' => 'fa-solid fa-industry', 'accent' => '#10b981'],
                ['metric' => '70%', 'label' => 'Query Resolution', 'title' => 'Customer Service NLP Chatbot', 'desc' => 'Intelligent NLP chatbot handling thousands of daily inquiries, resolving 70% of customer queries without human intervention.', 'icon' => 'fa-solid fa-headset', 'accent' => '#3b82f6'],
            ] as $case)
                <div class="group rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-xl" style="background: white; box-shadow: 0 4px 24px rgba(0,0,0,0.04);">
                    <div class="pt-8 px-8">
                        <div class="text-[44px] font-extrabold tracking-tight leading-none mb-2" style="color: {{ $case['accent'] }}; letter-spacing: -0.04em;">{{ $case['metric'] }}</div>
                        <div class="text-[11px] font-bold uppercase tracking-[2px] mb-4" style="color: rgba(0,0,0,0.3);">{{ $case['label'] }}</div>
                        <div class="w-10 h-[3px] rounded-full mb-5" style="background: {{ $case['accent'] }};"></div>
                    </div>
                    <div class="px-8 pb-8">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center" style="background: {{ $case['accent'] }}10;">
                                <i class="{{ $case['icon'] }} text-xs" style="color: {{ $case['accent'] }};"></i>
                            </div>
                            <h3 class="text-[16px] font-bold" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $case['title'] }}</h3>
                        </div>
                        <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $case['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CTA + APPOINTMENT --}}
{{-- ============================================ --}}
<section class="section-gap relative overflow-hidden" style="background: linear-gradient(160deg, #faf9f8 0%, #f3f1ef 40%, #f8f6f5 100%);">
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full opacity-[0.06]" style="background: radial-gradient(circle, #7c3aed 0%, transparent 70%);"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <div data-animate class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            Get Started
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
        </div>
        <h2 data-animate class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-6 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
            Ready to <span class="gradient-text">Deploy AI</span> in Your Business?
        </h2>
        <p data-animate class="text-base sm:text-lg max-w-xl mx-auto mb-10" style="color: var(--color-text); line-height: 1.7;">
            Partner with Endow Technologies to integrate AI and automation solutions that drive measurable growth and operational efficiency.
        </p>
        <div data-animate class="flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                <span class="btn-text"><span>Get AI Consulting</span></span>
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
                Schedule Your <span class="gradient-text">AI Strategy</span> Session
            </h2>
            <p class="text-base max-w-lg mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">
                Discuss how artificial intelligence can accelerate your business. Our experts will design a tailored solution for your needs.
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
                        <input type="hidden" name="page" value="ai-automation">
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
                                    <option value="AI & Automation">AI & Automation</option>
                                    <option value="Machine Learning">Machine Learning</option>
                                    <option value="Natural Language Processing">Natural Language Processing</option>
                                    <option value="Computer Vision">Computer Vision</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Message (Optional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your AI project, data requirements, or automation goals..."
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
