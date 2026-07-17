@extends('layouts.app')

@section('title', 'AI & Automation Solutions – Endow Technologies')
@section('meta_title', 'AI & Automation Solutions – Endow Technologies')
@section('meta_description', 'Transform your business with AI and automation solutions from Endow Technologies. Smart technologies for improved efficiency.')

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
                <li class="text-white font-medium">AI & Automation</li>
            </ol>
        </nav>
        <div class="flex items-center gap-5">
            <div class="w-14 h-14 rounded-xl flex items-center justify-center" style="background: rgba(255,41,87,0.15); border: 1px solid rgba(255,41,87,0.2);">
                <i class="fa-solid fa-robot text-xl" style="color: var(--color-primary);"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">AI & <span class="gradient-text">Automation</span></h1>
                <p class="text-white/50 text-lg mt-1">Transforming businesses with intelligent solutions</p>
            </div>
        </div>
    </div>
</section>

{{-- What We Offer --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-brain"></i>
                What We Offer
            </div>
            <h2 class="section-heading">Intelligent <span class="gradient-text">Solutions</span></h2>
            <p class="text-base max-w-2xl mx-auto" style="color: var(--color-text);">Leverage the power of artificial intelligence and automation to streamline operations and unlock new possibilities.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-network-wired', 'title' => 'Machine Learning', 'desc' => 'Custom ML models that learn from your data to predict trends, optimize decisions, and automate complex tasks.'],
                ['icon' => 'fa-solid fa-gears', 'title' => 'Process Automation', 'desc' => 'End-to-end workflow automation that eliminates repetitive tasks and accelerates operational efficiency.'],
                ['icon' => 'fa-solid fa-comment-dots', 'title' => 'Natural Language Processing', 'desc' => 'Advanced NLP solutions for sentiment analysis, chatbots, document processing, and language understanding.'],
                ['icon' => 'fa-solid fa-eye', 'title' => 'Computer Vision', 'desc' => 'Image and video analysis systems for quality control, surveillance, medical imaging, and visual inspection.'],
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

{{-- How AI Transforms Business --}}
<section class="section-gap pitch-dark">
    <div class="absolute top-0 right-0 w-[400px] h-[400px] opacity-10" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(80px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="section-subtitle" style="color: var(--color-primary);">
                    <i class="fa-solid fa-chart-line"></i>
                    Impact
                </div>
                <h2 class="section-heading text-white">How AI <span class="gradient-text">Transforms</span> Business</h2>
                <p class="text-base leading-relaxed mb-10" style="color: rgba(255,255,255,0.5);">
                    Artificial intelligence is reshaping every industry. Our AI solutions help businesses operate smarter, faster, and more cost-effectively.
                </p>

                <div class="grid grid-cols-2 gap-6">
                    @foreach([
                        ['value' => '40%', 'label' => 'Cost Reduction', 'icon' => 'fa-solid fa-piggy-bank'],
                        ['value' => '3x', 'label' => 'Faster Processing', 'icon' => 'fa-solid fa-bolt'],
                        ['value' => '85%', 'label' => 'Task Accuracy', 'icon' => 'fa-solid fa-bullseye'],
                        ['value' => '60%', 'label' => 'Time Saved', 'icon' => 'fa-solid fa-clock'],
                    ] as $stat)
                        <div class="p-5 rounded-xl" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.06);">
                            <i class="{{ $stat['icon'] }} text-lg mb-3 block" style="color: var(--color-primary);"></i>
                            <p class="text-3xl font-bold text-white mb-1" style="letter-spacing: -0.03em;">{{ $stat['value'] }}</p>
                            <p class="text-xs font-medium" style="color: rgba(255,255,255,0.5);">{{ $stat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div data-animate class="relative">
                <div class="img-placeholder" style="height: 420px;">
                    <i class="fa-solid fa-microchip text-5xl mb-3"></i>
                    <span>AI Technology Infrastructure</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Industries We Serve --}}
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
                ['icon' => 'fa-solid fa-heart-pulse', 'title' => 'Healthcare', 'desc' => 'Diagnostic assistance, patient data analysis, and medical imaging AI.'],
                ['icon' => 'fa-solid fa-building-columns', 'title' => 'Finance', 'desc' => 'Fraud detection, algorithmic trading, and risk assessment automation.'],
                ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'Retail', 'desc' => 'Personalized recommendations, demand forecasting, and inventory optimization.'],
                ['icon' => 'fa-solid fa-warehouse', 'title' => 'Manufacturing', 'desc' => 'Predictive maintenance, quality control, and supply chain optimization.'],
                ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Education', 'desc' => 'Adaptive learning platforms, automated grading, and student analytics.'],
                ['icon' => 'fa-solid fa-truck-fast', 'title' => 'Logistics', 'desc' => 'Route optimization, warehouse automation, and delivery prediction.'],
            ] as $index => $industry)
                <div data-animate class="flex items-start gap-5 p-6 rounded-xl transition-all" style="background: white; border: 1px solid var(--color-border);" onmouseover="this.style.borderColor='rgba(212,32,44,0.15)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.04)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.boxShadow='none';">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(212,32,44,0.1) 0%, rgba(212,32,44,0.02) 100%);">
                        <i class="{{ $industry['icon'] }} text-sm" style="color: var(--color-primary);"></i>
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

{{-- Case Studies --}}
<section class="section-gap" style="background-color: var(--color-section-alt);">
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
                ['title' => 'E-Commerce Personalization', 'result' => '35% Revenue Increase', 'desc' => 'Implemented AI-driven product recommendation engine for a major online retailer, boosting conversions and average order value.', 'icon' => 'fa-solid fa-cart-shopping'],
                ['title' => 'Predictive Maintenance', 'result' => '50% Downtime Reduction', 'desc' => 'Deployed ML-powered sensor analytics for a manufacturing client, preventing equipment failures before they occur.', 'icon' => 'fa-solid fa-wrench'],
                ['title' => 'Customer Service Automation', 'result' => '70% Query Resolution', 'desc' => 'Built an NLP chatbot handling thousands of daily inquiries, reducing support costs while improving response times.', 'icon' => 'fa-solid fa-headset'],
            ] as $index => $case)
                <div data-animate class="service-card" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="service-icon mb-6">
                        <i class="{{ $case['icon'] }}"></i>
                    </div>
                    <div class="inline-block px-3 py-1 rounded-full text-xs font-bold mb-3" style="background: rgba(212,32,44,0.08); color: var(--color-primary);">{{ $case['result'] }}</div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $case['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $case['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section>
    <div class="stat-bar flex flex-wrap items-center" style="margin-bottom: 0;">
        <div class="w-full p-10 lg:p-14 text-center">
            <h2 data-animate class="text-3xl md:text-4xl font-medium text-white mb-6" style="letter-spacing: -0.03em;">Ready to Embrace <span style="color: #ffcc00;">AI-Powered</span> Innovation?</h2>
            <p data-animate class="text-white/70 text-base mb-8 max-w-2xl mx-auto">Partner with Endow Technologies to integrate artificial intelligence and automation into your business operations.</p>
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
                <p class="text-white/60 text-base leading-relaxed mb-10">Let's discuss how AI and automation can accelerate your business. Schedule a consultation with our experts today.</p>
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
                                <option value="AI & Automation">AI & Automation</option>
                                <option value="Cloud Computing">Cloud Computing</option>
                                <option value="Software Development">Software Development</option>
                                <option value="IT Consulting">IT Consulting</option>
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
                        <textarea name="message" rows="4" placeholder="Tell us about your AI & automation needs..." class="input-field resize-none">{{ old('message') }}</textarea>
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
