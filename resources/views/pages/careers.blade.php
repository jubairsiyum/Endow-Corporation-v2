@extends('layouts.app')

@section('title', 'Careers – Endow Corporation')
@section('meta_title', 'Careers – Endow Corporation')
@section('meta_description', 'Join Endow Corporation. Explore career opportunities in travel, education, technology, and healthcare. Global exposure, innovation, and growth await you.')

@section('content')

{{-- Hero --}}
<section class="section-gap-hero" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute bottom-[10%] right-[8%] w-[300px] h-[300px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(65px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 py-16">
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm" style="color: #a9b8b8;">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium">Careers</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">Join Our <span class="gradient-text">Team</span></h1>
        <p class="mt-6 text-lg max-w-2xl" style="color: rgba(255,255,255,0.6); line-height: 1.7;">Be part of a global leader in travel, education, technology, and healthcare. We're always looking for talented individuals to join our mission.</p>
    </div>
</section>

{{-- Why Work With Us --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-star"></i>
                Why Join Us
            </div>
            <h2 class="section-heading">Why Work With <span style="color: var(--color-primary);">Endow</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-globe', 'title' => 'Global Exposure', 'desc' => 'Work with teams across 30+ countries and gain international experience.'],
                ['icon' => 'fa-solid fa-rocket', 'title' => 'Innovation Drive', 'desc' => 'Be part of cutting-edge projects in AI, cloud computing, and digital transformation.'],
                ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Growth & Learning', 'desc' => 'Continuous learning opportunities, mentorship programs, and career advancement paths.'],
                ['icon' => 'fa-solid fa-heart', 'title' => 'Work-Life Balance', 'desc' => 'Flexible schedules, remote work options, and a supportive work environment.'],
            ] as $feature)
                <div data-animate class="service-card" style="background: var(--color-dark); border-color: rgba(255,255,255,0.08);">
                    <div class="service-icon mb-5">
                        <i class="{{ $feature['icon'] }}"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2" style="color: #ffffff;">{{ $feature['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: rgba(255,255,255,0.55);">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Open Positions --}}
<section class="section-gap pitch-dark">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-briefcase"></i>
                Open Positions
            </div>
            <h2 class="section-heading">Current <span style="color: var(--color-primary);">Openings</span></h2>
        </div>

        <div class="grid grid-cols-1 gap-[24px]" data-animate>
            @foreach([
                [
                    'title' => 'Senior Software Engineer',
                    'department' => 'Technology',
                    'dept_color' => '#3b82f6',
                    'type' => 'Full-time',
                    'location' => 'Seoul / Remote',
                    'desc' => 'Lead development of scalable software solutions and contribute to our growing technology portfolio.',
                ],
                [
                    'title' => 'AI/ML Specialist',
                    'department' => 'Technology',
                    'dept_color' => '#3b82f6',
                    'type' => 'Full-time',
                    'location' => 'Seoul',
                    'desc' => 'Design and implement machine learning models and AI-driven automation for enterprise clients.',
                ],
                [
                    'title' => 'Education Consultant',
                    'department' => 'Global Education',
                    'dept_color' => '#7C5CFC',
                    'type' => 'Full-time',
                    'location' => 'Seoul / Remote',
                    'desc' => 'Guide students and institutions through global education programs, partnerships, and scholarship opportunities.',
                ],
                [
                    'title' => 'Travel Operations Manager',
                    'department' => 'Travel',
                    'dept_color' => 'var(--color-primary)',
                    'type' => 'Full-time',
                    'location' => 'Seoul',
                    'desc' => 'Oversee travel operations, manage vendor relationships, and ensure seamless service delivery for corporate clients.',
                ],
                [
                    'title' => 'Cloud Solutions Architect',
                    'department' => 'Technology',
                    'dept_color' => '#3b82f6',
                    'type' => 'Full-time',
                    'location' => 'Remote',
                    'desc' => 'Architect and deploy secure, scalable cloud infrastructure for enterprise-grade applications.',
                ],
            ] as $job)
                <div class="service-card flex flex-col md:flex-row md:items-center gap-6" style="background: var(--color-dark-2); border-color: rgba(255,255,255,0.08);">
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-3 mb-3">
                            <h3 class="text-lg font-semibold" style="color: #ffffff;">{{ $job['title'] }}</h3>
                            <span class="text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider" style="background: rgba(255,255,255,0.08); color: {{ $job['dept_color'] }};">{{ $job['department'] }}</span>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 mb-3 text-xs" style="color: rgba(255,255,255,0.45);">
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-clock"></i> {{ $job['type'] }}</span>
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-location-dot"></i> {{ $job['location'] }}</span>
                        </div>
                        <p class="text-sm" style="color: rgba(255,255,255,0.5);">{{ $job['desc'] }}</p>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="mailto:contact@endowcorporation.com?subject=Application: {{ urlencode($job['title']) }}" class="btn-primary">
                            <span class="btn-text"><span>Apply Now</span></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Benefits --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-gift"></i>
                Benefits
            </div>
            <h2 class="section-heading">Our Benefits <span style="color: var(--color-primary);">Package</span></h2>
        </div>

        <div class="stat-bar rounded-2xl overflow-hidden" data-animate>
            @foreach([
                ['number' => '30+', 'label' => 'Countries', 'sub' => 'Global Opportunities'],
                ['number' => '100%', 'label' => 'Health Coverage', 'sub' => 'Medical & Dental'],
                ['number' => '25', 'label' => 'Days PTO', 'sub' => 'Paid Time Off'],
                ['number' => '24/7', 'label' => 'Flexibility', 'sub' => 'Work-Life Balance'],
            ] as $stat)
                <div class="stat-item">
                    <div class="stat-number">{{ $stat['number'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                    <p class="text-xs mt-1" style="color: rgba(255,255,255,0.4);">{{ $stat['sub'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section-gap" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-0 left-0 w-[300px] h-[300px] opacity-10" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(60px);"></div>
    <div class="max-w-4xl mx-auto px-6 relative z-10 text-center" data-animate>
        <h2 class="section-heading text-white">Ready to Make an <span style="color: var(--color-primary);">Impact</span>?</h2>
        <p class="text-lg mb-10 mx-auto max-w-2xl" style="color: rgba(255,255,255,0.6); line-height: 1.7;">Send your resume and cover letter to our HR team. We'd love to hear from you and explore how you can contribute to our mission.</p>
        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="mailto:contact@endowcorporation.com?subject=Job Application" class="btn-primary">
                <span class="btn-text"><span>Apply via Email</span></span>
                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="{{ route('contact') }}" class="btn-outline">Contact Us</a>
        </div>
    </div>
</section>

@endsection
