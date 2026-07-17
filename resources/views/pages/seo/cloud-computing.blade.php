@extends('layouts.app')

@section('title', 'Cloud Computing & Security – Endow Technologies')
@section('meta_title', 'Cloud Computing & Security – Endow Technologies')
@section('meta_description', 'Secure and scalable cloud solutions from Endow Technologies. AWS, Azure, GCP migration and management.')

@section('content')

{{-- Hero --}}
<section class="section-gap-hero" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-[10%] right-[5%] w-[300px] h-[300px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(65px);"></div>
    <div class="absolute bottom-[10%] left-[5%] w-[250px] h-[250px] rounded-full opacity-10" style="background: #ff6b6b; filter: blur(60px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 py-16">
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm" style="color: #a9b8b8;">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li><a href="{{ route('division.show', 'technology') }}" class="hover:text-white transition-colors">Technologies</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium">Cloud Computing & Security</li>
            </ol>
        </nav>
        <div class="flex items-center gap-5">
            <div class="w-14 h-14 rounded-xl flex items-center justify-center" style="background: rgba(255,41,87,0.15); border: 1px solid rgba(255,41,87,0.2);">
                <i class="fa-solid fa-cloud text-xl" style="color: var(--color-primary);"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">Cloud Computing <span class="gradient-text">& Security</span></h1>
                <p class="text-white/50 text-lg mt-1">Secure, scalable, and efficient cloud infrastructure</p>
            </div>
        </div>
    </div>
</section>

{{-- Cloud Services --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-cloud"></i>
                Our Services
            </div>
            <h2 class="section-heading">Cloud <span class="gradient-text">Services</span></h2>
            <p class="text-base max-w-2xl mx-auto" style="color: var(--color-text);">End-to-end cloud solutions designed to migrate, manage, secure, and optimize your digital infrastructure.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-cloud-arrow-up', 'title' => 'Cloud Migration', 'desc' => 'Seamless transition from on-premise to cloud with zero downtime and full data integrity.'],
                ['icon' => 'fa-solid fa-server', 'title' => 'Cloud Management', 'desc' => '24/7 monitoring, resource management, and performance optimization for your cloud environment.'],
                ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Cloud Security', 'desc' => 'Enterprise-grade security with threat detection, encryption, and compliance management.'],
                ['icon' => 'fa-solid fa-gauge-high', 'title' => 'Cost Optimization', 'desc' => 'Right-sizing resources, auto-scaling, and reserved instance strategies to minimize cloud spend.'],
            ] as $index => $service)
                <div data-animate class="service-card" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="service-icon mb-6">
                        <i class="{{ $service['icon'] }}"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $service['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $service['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Cloud Platforms --}}
<section class="section-gap pitch-dark">
    <div class="absolute top-0 left-0 w-[400px] h-[400px] opacity-10" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(80px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center">
                <i class="fa-solid fa-layer-group"></i>
                Platforms
            </div>
            <h2 class="section-heading text-white">Cloud Platforms We <span class="gradient-text">Work With</span></h2>
            <p class="text-base max-w-2xl mx-auto" style="color: rgba(255,255,255,0.5);">We are certified partners across all major cloud providers, delivering expertise wherever your infrastructure lives.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-animate>
            @foreach([
                ['icon' => 'fa-brands fa-aws', 'name' => 'Amazon Web Services', 'services' => ['EC2 & Lambda', 'S3 Storage', 'RDS & DynamoDB', 'CloudFront CDN', 'IAM & Security'], 'color' => '#FF9900'],
                ['icon' => 'fa-brands fa-microsoft', 'name' => 'Microsoft Azure', 'services' => ['Azure Virtual Machines', 'Azure Functions', 'Blob Storage', 'Azure SQL', 'Entra ID'], 'color' => '#0078D4'],
                ['icon' => 'fa-brands fa-google', 'name' => 'Google Cloud Platform', 'services' => ['Compute Engine', 'Cloud Functions', 'Cloud Storage', 'BigQuery', 'Cloud IAM'], 'color' => '#4285F4'],
            ] as $index => $platform)
                <div data-animate class="p-8 rounded-2xl transition-all" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);" onmouseover="this.style.borderColor='{{ $platform['color'] }}33';" onmouseout="this.style.borderColor='rgba(255,255,255,0.06)';">
                    <div class="flex items-center gap-4 mb-6">
                        <i class="{{ $platform['icon'] }} text-3xl" style="color: {{ $platform['color'] }};"></i>
                        <h3 class="text-xl font-bold text-white">{{ $platform['name'] }}</h3>
                    </div>
                    <ul class="space-y-3">
                        @foreach($platform['services'] as $svc)
                            <li class="flex items-center gap-3 text-sm" style="color: rgba(255,255,255,0.6);">
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

{{-- Benefits --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-circle-check"></i>
                    Benefits
                </div>
                <h2 class="section-heading">Why Move to the <span class="gradient-text">Cloud?</span></h2>
                <p class="text-base leading-relaxed mb-10" style="color: var(--color-text);">
                    Cloud computing delivers unmatched flexibility, performance, and security for modern businesses. Here's what you gain.
                </p>

                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'fa-solid fa-coins', 'title' => 'Cost Efficiency', 'desc' => 'Pay only for what you use. Eliminate hardware costs and reduce IT overhead with scalable pricing.'],
                        ['icon' => 'fa-solid fa-arrows-up-down', 'title' => 'Infinite Scalability', 'desc' => 'Scale resources up or down instantly based on demand, ensuring peak performance at all times.'],
                        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Enterprise Security', 'desc' => 'Multi-layered security with encryption, firewalls, DDoS protection, and compliance certifications.'],
                        ['icon' => 'fa-solid fa-bolt', 'title' => 'High Performance', 'desc' => 'Global data centers deliver low-latency access and 99.99% uptime guarantees for mission-critical apps.'],
                    ] as $benefit)
                        <div class="flex items-start gap-4 p-5 rounded-xl transition-all" style="background: white; border: 1px solid var(--color-border);" onmouseover="this.style.borderColor='rgba(212,32,44,0.15)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.04)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.boxShadow='none';">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(212,32,44,0.1) 0%, rgba(212,32,44,0.02) 100%);">
                                <i class="{{ $benefit['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                            </div>
                            <div>
                                <h4 class="text-base font-bold mb-1" style="color: var(--color-text-heading);">{{ $benefit['title'] }}</h4>
                                <p class="text-sm" style="color: var(--color-text);">{{ $benefit['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div data-animate class="relative">
                <div class="img-placeholder" style="height: 480px;">
                    <i class="fa-solid fa-cloud-arrow-up text-5xl mb-3"></i>
                    <span>Cloud Infrastructure</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Process --}}
<section class="section-gap" style="background-color: var(--color-section-alt);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-diagram-project"></i>
                Process
            </div>
            <h2 class="section-heading">Our Cloud <span class="gradient-text">Process</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[30px]" data-animate>
            @foreach([
                ['step' => '01', 'icon' => 'fa-solid fa-magnifying-glass-chart', 'title' => 'Assessment', 'desc' => 'Evaluate your current infrastructure, workloads, and business goals to design the optimal cloud strategy.'],
                ['step' => '02', 'icon' => 'fa-solid fa-pencil-ruler', 'title' => 'Architecture Design', 'desc' => 'Design a scalable, secure, and cost-effective cloud architecture tailored to your requirements.'],
                ['step' => '03', 'icon' => 'fa-solid fa-cloud-arrow-up', 'title' => 'Migration', 'desc' => 'Execute a phased migration with minimal disruption, data validation, and rollback contingencies.'],
                ['step' => '04', 'icon' => 'fa-solid fa-chart-line', 'title' => 'Optimize & Manage', 'desc' => 'Continuous monitoring, performance tuning, security audits, and cost optimization post-migration.'],
            ] as $index => $step)
                <div data-animate class="text-center service-card" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="text-5xl font-bold mb-4" style="color: rgba(212,32,44,0.08); letter-spacing: -0.03em;">{{ $step['step'] }}</div>
                    <div class="service-icon mx-auto mb-5">
                        <i class="{{ $step['icon'] }}"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $step['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section>
    <div class="stat-bar flex flex-wrap items-center" style="margin-bottom: 0;">
        <div class="w-full p-10 lg:p-14 text-center">
            <h2 data-animate class="text-3xl md:text-4xl font-medium text-white mb-6" style="letter-spacing: -0.03em;">Ready to Elevate Your Business to the <span style="color: #ffcc00;">Cloud?</span></h2>
            <p data-animate class="text-white/70 text-base mb-8 max-w-2xl mx-auto">Partner with Endow Technologies for secure, scalable, and cost-effective cloud solutions tailored to your needs.</p>
            <div data-animate class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Get Started</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <a href="{{ route('contact') }}" class="btn-outline">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Appointment --}}
<section class="section-gap" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-0 left-0 w-[300px] h-[300px] opacity-10" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(60px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-calendar-check"></i>
                    Book Now
                </div>
                <h2 class="section-heading text-white">Book an <span style="color: var(--color-primary);">Appointment</span></h2>
                <p class="text-white/60 text-base leading-relaxed mb-10">Let's discuss how cloud computing can transform your business. Schedule a consultation with our cloud architects today.</p>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(255,41,87,0.15);">
                            <i class="fa-solid fa-phone text-sm" style="color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider" style="color: #a9b8b8;">Call us</p>
                            <a href="tel:0226322559" class="text-white font-medium text-sm hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(255,41,87,0.15);">
                            <i class="fa-regular fa-envelope text-sm" style="color: var(--color-primary);"></i>
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
                    <input type="hidden" name="page" value="{{ request()->route()->getName() }}">
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
                                <option value="Cloud Migration">Cloud Migration</option>
                                <option value="Cloud Management">Cloud Management</option>
                                <option value="Cloud Security">Cloud Security</option>
                                <option value="Cloud Optimization">Cloud Optimization</option>
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
                        <textarea name="message" rows="4" placeholder="Tell us about your cloud computing needs..." class="input-field resize-none">{{ old('message') }}</textarea>
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
