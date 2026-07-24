@extends('layouts.app')

@section('title', 'Cloud Computing & Security | AWS, Azure & GCP Solutions | Endow Technologies')
@section('meta_title', 'Cloud Computing & Security | AWS, Azure & GCP Solutions | Endow Technologies')
@section('meta_description', 'Secure, scalable cloud computing solutions from Endow Technologies. We specialize in AWS, Azure, and GCP migration, management, security, and cost optimization with 99.9% uptime guarantee.')
@section('meta_keywords', 'cloud computing, AWS migration, Azure services, GCP solutions, cloud security, cloud infrastructure, cloud migration, Endow Technologies, Seoul cloud company')
@section('og_title', 'Cloud Computing & Security | Endow Technologies')
@section('og_description', 'Enterprise cloud solutions on AWS, Azure, and GCP. Migration, security, and management with 99.9% uptime from Seoul-based Endow Technologies.')

@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Cloud Computing & Security",
    "provider": { "@type": "Organization", "name": "Endow Technologies" },
    "description": "Enterprise cloud computing solutions including migration, management, security, and cost optimization across AWS, Azure, and GCP.",
    "serviceType": "Cloud Computing",
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
        { "@type": "ListItem", "position": 3, "name": "Cloud Computing & Security", "item": "{{ url()->current() }}" }
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
        <div class="absolute" style="top: -15%; right: -8%; width: 600px; height: 600px; border-radius: 50%; background: radial-gradient(circle, rgba(59,130,246,0.10) 0%, transparent 70%); filter: blur(60px);"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-20 lg:py-28 relative z-10 w-full">
        <nav class="mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center gap-2 text-[13px] px-4 py-2 rounded-full" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.06); color: rgba(255,255,255,0.4);">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><span class="mx-1 opacity-30">/</span></li>
                <li><a href="{{ route('technology') }}" class="hover:text-white transition-colors">Technology</a></li>
                <li><span class="mx-1 opacity-30">/</span></li>
                <li class="text-white font-medium">Cloud & Security</li>
            </ol>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <h1 class="text-[42px] sm:text-[52px] lg:text-[64px] font-extrabold text-white leading-[1.05] tracking-tight mb-6" style="letter-spacing: -0.035em;">
                    Cloud Computing<br>
                    <span style="background: linear-gradient(135deg, #60a5fa 0%, #a78bfa 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">& Security</span>
                </h1>
                <p class="text-base sm:text-lg leading-relaxed max-w-xl mb-8" style="color: rgba(255,255,255,0.45); line-height: 1.75;">
                    Multi-cloud architecture, enterprise-grade security compliance, and seamless migration strategies with 99.9% uptime guarantee across AWS, Azure, and Google Cloud Platform.
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                        <span class="btn-text"><span>Get Cloud Consulting</span></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="#appointment" class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-full text-sm font-semibold transition-all hover:-translate-y-0.5" style="background: rgba(255,255,255,0.06); color: white; border: 1px solid rgba(255,255,255,0.1);">
                        Book a Call
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5 hidden lg:flex items-center justify-center">
                <div class="w-48 h-48 rounded-[32px] flex items-center justify-center" style="background: linear-gradient(135deg, rgba(59,130,246,0.15) 0%, rgba(168,85,247,0.05) 100%); border: 1px solid rgba(255,255,255,0.08);">
                    <i class="fa-solid fa-cloud text-6xl" style="color: #60a5fa;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CLOUD SERVICES --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #fefefe;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Services
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="section-heading">Enterprise Cloud <span class="gradient-text">Services</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                End-to-end cloud solutions designed to migrate, manage, secure, and optimize your digital infrastructure across all major platforms.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-animate>
            @php
                $cloudServices = [
                    [
                        'icon' => 'fa-solid fa-cloud-arrow-up',
                        'title' => 'Cloud Migration & Modernization',
                        'desc' => 'Seamless transition from on-premise and legacy infrastructure to cloud with zero data loss, minimal downtime, and full application modernization.',
                        'accent' => '#3b82f6',
                        'outcomes' => ['Lift-and-shift migration', 'Application re-platforming', 'Database migration', 'Hybrid cloud setup'],
                    ],
                    [
                        'icon' => 'fa-solid fa-server',
                        'title' => 'Cloud Management & DevOps',
                        'desc' => '24/7 infrastructure monitoring, automated CI/CD pipelines, resource optimization, and proactive incident response for peak performance.',
                        'accent' => '#10b981',
                        'outcomes' => ['Infrastructure as Code', 'CI/CD pipeline automation', 'Performance monitoring', 'Auto-scaling configuration'],
                    ],
                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Cloud Security & Compliance',
                        'desc' => 'Enterprise-grade security with zero-trust architecture, encryption at rest and in transit, threat detection, and SOC 2 compliance readiness.',
                        'accent' => '#7c3aed',
                        'outcomes' => ['Zero-trust framework', 'SOC 2 & ISO 27001', 'DDoS protection', 'Identity & access management'],
                    ],
                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Cost Optimization & Governance',
                        'desc' => 'Right-sizing resources, reserved instance planning, FinOps governance, and continuous cost monitoring to reduce cloud spend by up to 35%.',
                        'accent' => '#f59e0b',
                        'outcomes' => ['Resource right-sizing', 'Reserved instance strategy', 'Spend anomaly detection', 'Tagging & governance'],
                    ],
                ];
            @endphp

            @foreach($cloudServices as $svc)
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
{{-- PLATFORMS --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="padding: 100px 0; background: #08080c;">
    <div class="absolute pointer-events-none" aria-hidden="true" style="top: -10%; right: -5%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59,130,246,0.06) 0%, transparent 70%); filter: blur(80px);"></div>
    <div class="absolute inset-0 pointer-events-none opacity-[0.02]" aria-hidden="true" style="background-image: radial-gradient(circle, rgba(255,255,255,0.6) 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: #60a5fa; letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: #60a5fa;"></span>
                Platforms
                <span class="w-5 h-px" style="background: #60a5fa;"></span>
            </div>
            <h2 class="text-[36px] sm:text-[44px] lg:text-[52px] font-extrabold text-white tracking-tight mb-4" style="letter-spacing: -0.035em; line-height: 1.15;">
                Certified Across <span class="gradient-text">All Major Clouds</span>
            </h2>
            <p class="text-[15px] max-w-lg mx-auto" style="color: rgba(255,255,255,0.45); line-height: 1.7;">
                We hold certifications and deep partnerships with every major cloud provider, delivering expertise wherever your infrastructure lives.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-animate>
            @foreach([
                ['icon' => 'fa-brands fa-aws', 'name' => 'Amazon Web Services', 'color' => '#FF9900', 'services' => ['EC2 & Lambda compute', 'S3 & Glacier storage', 'RDS & DynamoDB databases', 'CloudFront CDN', 'IAM & Security Hub']],
                ['icon' => 'fa-brands fa-microsoft', 'name' => 'Microsoft Azure', 'color' => '#0078D4', 'services' => ['Azure Virtual Machines', 'Azure Functions', 'Blob & File Storage', 'Azure SQL & Cosmos DB', 'Entra ID & Sentinel']],
                ['icon' => 'fa-brands fa-google', 'name' => 'Google Cloud', 'color' => '#4285F4', 'services' => ['Compute Engine', 'Cloud Functions', 'Cloud Storage', 'BigQuery analytics', 'Cloud IAM & Armor']],
            ] as $platform)
                <div class="rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1"
                     style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);"
                     onmouseover="this.style.borderColor='{{ $platform['color'] }}33'; this.style.background='rgba(255,255,255,0.05)';"
                     onmouseout="this.style.borderColor='rgba(255,255,255,0.06)'; this.style.background='rgba(255,255,255,0.03)';">
                    <div class="flex items-center gap-4 mb-6">
                        <i class="{{ $platform['icon'] }} text-3xl" style="color: {{ $platform['color'] }};"></i>
                        <h3 class="text-xl font-bold text-white">{{ $platform['name'] }}</h3>
                    </div>
                    <ul class="space-y-3">
                        @foreach($platform['services'] as $svc)
                            <li class="flex items-center gap-3 text-sm" style="color: rgba(255,255,255,0.55);">
                                <i class="fa-solid fa-check text-xs" style="color: {{ $platform['color'] }};"></i>
                                {{ $svc }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- BENEFITS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #ffffff;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                    <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                    Benefits
                    <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                </div>
                <h2 class="text-[36px] sm:text-[44px] font-extrabold tracking-tight mb-4" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.15;">
                    Why Move to the <span class="gradient-text">Cloud?</span>
                </h2>
                <p class="text-base leading-relaxed mb-10" style="color: var(--color-text);">
                    Cloud computing delivers unmatched flexibility, performance, and security for modern businesses. Here is what you gain with our managed cloud services.
                </p>
                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'fa-solid fa-coins', 'title' => 'Cost Efficiency', 'desc' => 'Pay only for what you use. Eliminate hardware costs and reduce IT overhead with scalable, usage-based pricing models.', 'color' => '#10b981'],
                        ['icon' => 'fa-solid fa-arrows-up-down', 'title' => 'Infinite Scalability', 'desc' => 'Scale resources up or down instantly based on demand, ensuring peak performance during traffic surges and cost savings during lulls.', 'color' => '#3b82f6'],
                        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Enterprise Security', 'desc' => 'Multi-layered protection with encryption, firewalls, DDoS mitigation, and continuous compliance monitoring.', 'color' => '#7c3aed'],
                        ['icon' => 'fa-solid fa-bolt', 'title' => 'High Availability', 'desc' => 'Global data centers deliver low-latency access and 99.99% uptime with automatic failover and disaster recovery.', 'color' => '#f59e0b'],
                    ] as $benefit)
                        <div class="flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 hover:-translate-y-0.5"
                             style="background: #fafafc; border: 1px solid #eeeef0;"
                             onmouseover="this.style.borderColor='{{ $benefit['color'] }}30'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.04)';"
                             onmouseout="this.style.borderColor='#eeeef0'; this.style.boxShadow='none';">
                            <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0" style="background: {{ $benefit['color'] }}10;">
                                <i class="{{ $benefit['icon'] }} text-sm" style="color: {{ $benefit['color'] }};"></i>
                            </div>
                            <div>
                                <h4 class="text-[15px] font-bold mb-1" style="color: var(--color-text-heading);">{{ $benefit['title'] }}</h4>
                                <p class="text-[13px] leading-relaxed" style="color: var(--color-text-muted);">{{ $benefit['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="box-shadow: 0 4px 24px rgba(0,0,0,0.06);">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=700&h=500&fit=crop"
                         alt="Cloud infrastructure and data center technology at Endow Technologies"
                         class="w-full h-auto"
                         loading="lazy" width="700" height="500">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- PROCESS --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center gap-3 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Process
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="section-heading">Our Cloud <span class="gradient-text">Migration Process</span></h2>
            <p class="text-base max-w-xl mx-auto mt-3" style="color: var(--color-text-muted); line-height: 1.7;">
                A proven four-phase methodology that ensures smooth transitions with zero data loss and minimal business disruption.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" data-animate>
            @foreach([
                ['step' => '01', 'icon' => 'fa-solid fa-magnifying-glass-chart', 'title' => 'Assessment', 'desc' => 'Evaluate your current infrastructure, application dependencies, and business goals to design the optimal cloud strategy.', 'color' => '#3b82f6'],
                ['step' => '02', 'icon' => 'fa-solid fa-pencil-ruler', 'title' => 'Architecture Design', 'desc' => 'Design a scalable, secure, and cost-effective cloud architecture with redundancy, failover, and compliance built in.', 'color' => '#7c3aed'],
                ['step' => '03', 'icon' => 'fa-solid fa-cloud-arrow-up', 'title' => 'Migration Execution', 'desc' => 'Execute a phased migration with data validation, parallel run environments, and instant rollback contingencies.', 'color' => '#f59e0b'],
                ['step' => '04', 'icon' => 'fa-solid fa-chart-line', 'title' => 'Optimize & Manage', 'desc' => 'Continuous monitoring, performance tuning, cost optimization, security audits, and 24/7 support post-migration.', 'color' => '#10b981'],
            ] as $i => $step)
                <div class="group rounded-2xl p-7 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                     style="background: white; border: 1px solid #eeeef0;"
                     onmouseover="this.style.borderColor='{{ $step['color'] }}30'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.06)';"
                     onmouseout="this.style.borderColor='#eeeef0'; this.style.boxShadow='none';">
                    <div class="text-5xl font-extrabold mb-4" style="color: {{ $step['color'] }}15; letter-spacing: -0.04em; line-height: 1;">{{ $step['step'] }}</div>
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110" style="background: {{ $step['color'] }}10;">
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
{{-- CTA + APPOINTMENT --}}
{{-- ============================================ --}}
<section class="section-gap relative overflow-hidden" style="background: linear-gradient(160deg, #faf9f8 0%, #f3f1ef 40%, #f8f6f5 100%);">
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full opacity-[0.06]" style="background: radial-gradient(circle, #3b82f6 0%, transparent 70%);"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <div data-animate class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            Get Started
            <span class="w-5 h-px" style="background: var(--color-primary);"></span>
        </div>
        <h2 data-animate class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-6 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
            Ready to <span class="gradient-text">Migrate to the Cloud?</span>
        </h2>
        <p data-animate class="text-base sm:text-lg max-w-xl mx-auto mb-10" style="color: var(--color-text); line-height: 1.7;">
            Partner with Endow Technologies for secure, scalable, and cost-effective cloud solutions tailored to your infrastructure needs.
        </p>
        <div data-animate class="flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                <span class="btn-text"><span>Get Cloud Consulting</span></span>
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
                Schedule Your <span class="gradient-text">Cloud Strategy</span> Session
            </h2>
            <p class="text-base max-w-lg mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">
                Discuss your cloud infrastructure needs with our architects. We will design a migration and management plan tailored to your business.
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
                        <input type="hidden" name="page" value="cloud-computing">
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
                                    <option value="Cloud Migration">Cloud Migration</option>
                                    <option value="Cloud Management">Cloud Management</option>
                                    <option value="Cloud Security">Cloud Security</option>
                                    <option value="Cost Optimization">Cost Optimization</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Message (Optional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your cloud infrastructure, current setup, or migration goals..."
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