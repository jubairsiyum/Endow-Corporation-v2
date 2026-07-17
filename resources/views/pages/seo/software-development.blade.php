@extends('layouts.app')

@section('title', 'Custom Software Development – Endow Technologies')
@section('meta_title', 'Custom Software Development – Endow Technologies')
@section('meta_description', 'Custom web and mobile app development by Endow Technologies. Scalable, innovative software solutions for your business.')

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
                <li class="text-white font-medium">Software Development</li>
            </ol>
        </nav>
        <div class="flex items-center gap-5">
            <div class="w-14 h-14 rounded-xl flex items-center justify-center" style="background: rgba(255,41,87,0.15); border: 1px solid rgba(255,41,87,0.2);">
                <i class="fa-solid fa-code text-xl" style="color: var(--color-primary);"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">Software <span class="gradient-text">Development</span></h1>
                <p class="text-white/50 text-lg mt-1">Custom-built solutions for your unique challenges</p>
            </div>
        </div>
    </div>
</section>

{{-- Development Services --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-code"></i>
                Our Services
            </div>
            <h2 class="section-heading">Development <span class="gradient-text">Services</span></h2>
            <p class="text-base max-w-2xl mx-auto" style="color: var(--color-text);">From web platforms to enterprise systems, we build scalable software that drives business growth.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-globe', 'title' => 'Web Application Development', 'desc' => 'Modern, responsive web applications built with cutting-edge frameworks. From single-page apps to complex SaaS platforms, we deliver performant and maintainable solutions.', 'tags' => ['React', 'Vue', 'Laravel', 'Node.js']],
                ['icon' => 'fa-solid fa-mobile-screen-button', 'title' => 'Mobile App Development', 'desc' => 'Native and cross-platform mobile applications for iOS and Android. Fluid user experiences that engage your audience wherever they are.', 'tags' => ['React Native', 'Flutter', 'Swift', 'Kotlin']],
                ['icon' => 'fa-solid fa-plug', 'title' => 'API Development & Integration', 'desc' => 'Robust RESTful and GraphQL APIs that connect your systems, enable third-party integrations, and power your digital ecosystem.', 'tags' => ['REST', 'GraphQL', 'gRPC', 'Webhooks']],
                ['icon' => 'fa-solid fa-building', 'title' => 'Enterprise Software', 'desc' => 'Large-scale enterprise solutions including ERP, CRM, and custom business systems. Built for reliability, security, and seamless team adoption.', 'tags' => ['ERP', 'CRM', 'Workflow', 'Analytics']],
            ] as $index => $service)
                <div data-animate class="service-card" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="service-icon mb-6">
                        <i class="{{ $service['icon'] }}"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $service['title'] }}</h3>
                    <p class="text-sm leading-relaxed mb-4" style="color: var(--color-text);">{{ $service['desc'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($service['tags'] as $tag)
                            <span class="px-3 py-1 rounded-full text-xs font-medium" style="background: rgba(212,32,44,0.06); color: var(--color-primary);">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Tech Stack --}}
<section class="section-gap pitch-dark">
    <div class="absolute top-0 right-0 w-[400px] h-[400px] opacity-10" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(80px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center">
                <i class="fa-solid fa-layer-group"></i>
                Technology
            </div>
            <h2 class="section-heading text-white">Our Tech <span class="gradient-text">Stack</span></h2>
            <p class="text-base max-w-2xl mx-auto" style="color: rgba(255,255,255,0.5);">We work with the technologies that best fit your project requirements, ensuring optimal performance and scalability.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4" data-animate>
            @foreach([
                ['icon' => 'fa-brands fa-react', 'name' => 'React', 'color' => '#61DAFB'],
                ['icon' => 'fa-brands fa-vuejs', 'name' => 'Vue.js', 'color' => '#42B883'],
                ['icon' => 'fa-brands fa-node-js', 'name' => 'Node.js', 'color' => '#339933'],
                ['icon' => 'fa-brands fa-php', 'name' => 'PHP', 'color' => '#777BB4'],
                ['icon' => 'fa-brands fa-python', 'name' => 'Python', 'color' => '#3776AB'],
                ['icon' => 'fa-brands fa-laravel', 'name' => 'Laravel', 'color' => '#FF2D20'],
                ['icon' => 'fa-brands fa-apple', 'name' => 'iOS', 'color' => '#A2AAAD'],
                ['icon' => 'fa-brands fa-android', 'name' => 'Android', 'color' => '#3DDC84'],
                ['icon' => 'fa-solid fa-database', 'name' => 'PostgreSQL', 'color' => '#4169E1'],
                ['icon' => 'fa-solid fa-database', 'name' => 'MongoDB', 'color' => '#47A248'],
                ['icon' => 'fa-brands fa-docker', 'name' => 'Docker', 'color' => '#2496ED'],
                ['icon' => 'fa-brands fa-aws', 'name' => 'AWS', 'color' => '#FF9900'],
            ] as $tech)
                <div data-animate class="p-5 rounded-xl text-center transition-all" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);" onmouseover="this.style.borderColor='{{ $tech['color'] }}44'; this.style.background='rgba(255,255,255,0.05)';" onmouseout="this.style.borderColor='rgba(255,255,255,0.06)'; this.style.background='rgba(255,255,255,0.03)';">
                    <i class="{{ $tech['icon'] }} text-2xl mb-2 block" style="color: {{ $tech['color'] }};"></i>
                    <p class="text-xs font-semibold" style="color: rgba(255,255,255,0.7);">{{ $tech['name'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Development Process --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-diagram-project"></i>
                Process
            </div>
            <h2 class="section-heading">Development <span class="gradient-text">Process</span></h2>
            <p class="text-base max-w-2xl mx-auto" style="color: var(--color-text);">Our proven six-step process ensures transparent communication, quality deliverables, and on-time completion.</p>
        </div>

        <div class="relative">
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-px -translate-y-1/2" style="background: linear-gradient(90deg, transparent 0%, var(--color-border-dashed) 10%, var(--color-border-dashed) 90%, transparent 100%);"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10" data-animate>
                @foreach([
                    ['step' => '01', 'icon' => 'fa-solid fa-comments', 'title' => 'Discovery', 'desc' => 'We dive deep into your business requirements, user needs, and technical constraints to define the project scope.'],
                    ['step' => '02', 'icon' => 'fa-solid fa-pen-ruler', 'title' => 'UI/UX Design', 'desc' => 'Creating intuitive wireframes and high-fidelity designs focused on user experience and brand consistency.'],
                    ['step' => '03', 'icon' => 'fa-solid fa-code', 'title' => 'Development', 'desc' => 'Agile sprints with clean, documented code. Regular demos and iterations to keep you in the loop.'],
                    ['step' => '04', 'icon' => 'fa-solid fa-vial', 'title' => 'Quality Assurance', 'desc' => 'Rigorous manual and automated testing across devices and browsers to ensure bug-free delivery.'],
                    ['step' => '05', 'icon' => 'fa-solid fa-rocket', 'title' => 'Deployment', 'desc' => 'Zero-downtime deployment with CI/CD pipelines, environment configuration, and performance monitoring.'],
                    ['step' => '06', 'icon' => 'fa-solid fa-headset', 'title' => 'Support & Maintenance', 'desc' => 'Ongoing support, performance optimization, feature updates, and security patches post-launch.'],
                ] as $index => $step)
                    <div data-animate class="text-center relative" style="animation-delay: {{ $index * 0.08 }}s;">
                        <div class="w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-5 relative z-10" style="background: white; border: 2px solid var(--color-border); transition: all 0.3s;" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.boxShadow='0 8px 30px rgba(212,32,44,0.1)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.boxShadow='none';">
                            <i class="{{ $step['icon'] }} text-xl" style="color: var(--color-primary);"></i>
                        </div>
                        <div class="text-xs font-bold mb-2" style="color: var(--color-primary); letter-spacing: 2px;">STEP {{ $step['step'] }}</div>
                        <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $step['title'] }}</h3>
                        <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="section-gap" style="background-color: var(--color-section-alt);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-star"></i>
                    Why Choose Us
                </div>
                <h2 class="section-heading">Why Choose <span class="gradient-text">Endow Technologies?</span></h2>
                <p class="text-base leading-relaxed mb-8" style="color: var(--color-text);">
                    We don't just write code — we build digital products that solve real business problems and deliver measurable ROI.
                </p>

                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'fa-solid fa-trophy', 'title' => 'Proven Track Record', 'desc' => '940+ successful projects delivered across 30+ countries with a 98% client satisfaction rate.'],
                        ['icon' => 'fa-solid fa-users', 'title' => 'Expert Team', 'desc' => '25+ skilled engineers, designers, and project managers with deep domain expertise.'],
                        ['icon' => 'fa-solid fa-arrows-rotate', 'title' => 'Agile Methodology', 'desc' => 'Flexible sprint-based development with transparent communication and regular milestones.'],
                        ['icon' => 'fa-solid fa-lock', 'title' => 'Security First', 'desc' => 'OWASP best practices, code audits, and security reviews baked into every project phase.'],
                    ] as $reason)
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(212,32,44,0.08);">
                                <i class="{{ $reason['icon'] }} text-sm" style="color: var(--color-primary);"></i>
                            </div>
                            <div>
                                <h4 class="text-base font-bold mb-1" style="color: var(--color-text-heading);">{{ $reason['title'] }}</h4>
                                <p class="text-sm" style="color: var(--color-text);">{{ $reason['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div data-animate class="relative">
                <div class="img-placeholder" style="height: 420px;">
                    <i class="fa-solid fa-laptop-code text-5xl mb-3"></i>
                    <span>Software Development Team</span>
                </div>
                <div class="absolute -bottom-5 -left-5 bg-white rounded-xl p-5" style="box-shadow: 0 12px 40px rgba(0,0,0,0.08); border-left: 3px solid var(--color-primary);">
                    <p class="text-3xl font-bold" style="color: var(--color-primary);">940+</p>
                    <p class="text-xs font-medium" style="color: var(--color-text-muted);">Projects Delivered</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section>
    <div class="stat-bar flex flex-wrap items-center" style="margin-bottom: 0;">
        <div class="w-full p-10 lg:p-14 text-center">
            <h2 data-animate class="text-3xl md:text-4xl font-medium text-white mb-6" style="letter-spacing: -0.03em;">Let's Build Something <span style="color: #ffcc00;">Extraordinary</span></h2>
            <p data-animate class="text-white/70 text-base mb-8 max-w-2xl mx-auto">From concept to launch, Endow Technologies delivers custom software that scales with your business ambitions.</p>
            <div data-animate class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Start Your Project</span></span>
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
                <p class="text-white/60 text-base leading-relaxed mb-10">Ready to bring your software idea to life? Schedule a consultation with our development team to discuss your project.</p>
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
                                <option value="Web Development">Web Development</option>
                                <option value="Mobile App Development">Mobile App Development</option>
                                <option value="API Development">API Development</option>
                                <option value="Enterprise Software">Enterprise Software</option>
                                <option value="Custom Software">Custom Software</option>
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
                        <textarea name="message" rows="4" placeholder="Tell us about your software development project..." class="input-field resize-none">{{ old('message') }}</textarea>
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
