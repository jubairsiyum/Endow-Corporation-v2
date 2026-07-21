@extends('layouts.app')

@section('title', 'Language Training & Certifications – Endow Global Education')
@section('meta_title', 'Language Training & Certifications – Endow Global Education')
@section('meta_description', 'Expert language training and internationally recognized certifications. Prepare for IELTS, TOEFL, and more with Endow Global Education.')
@section('meta_keywords', 'language training, IELTS preparation, TOEFL, language certifications, English courses, language learning')

@section('content')

{{-- Hero --}}
<section class="section-gap" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-[10%] right-[5%] w-[300px] h-[300px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(65px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 py-16">
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm" style="color: #a9b8b8;">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Global Education</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium">Language Training</li>
            </ol>
        </nav>
        <div class="flex items-center gap-5">
            <div class="w-14 h-14 rounded-xl flex items-center justify-center" style="background: rgba(212,32,44,0.15); border: 1px solid rgba(212,32,44,0.2);">
                <i class="fa-solid fa-language text-xl" style="color: var(--color-primary);"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">Language <span class="gradient-text">Training</span></h1>
                <p class="text-white/50 text-lg mt-1">Master new languages and earn internationally recognized certifications</p>
            </div>
        </div>
    </div>
</section>

{{-- Languages We Teach --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-comments"></i>
                Languages
            </div>
            <h2 class="section-heading">Languages We <span class="gradient-text">Teach</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">From English proficiency to Asian languages, we offer comprehensive training programs for every level.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-globe', 'title' => 'English', 'desc' => 'Comprehensive English training covering Academic, Business, and conversational English for international communication.', 'levels' => 'Beginner – Advanced'],
                ['icon' => 'fa-solid fa-torii-gate', 'title' => 'Korean (TOPIK)', 'desc' => 'Structured Korean language courses from basic to advanced levels, preparing you for TOPIK certification.', 'levels' => 'TOPIK I – TOPIK II'],
                ['icon' => 'fa-solid fa-torii-gate', 'title' => 'Japanese (JLPT)', 'desc' => 'Japanese language training covering N5 to N1 levels for JLPT certification and business communication.', 'levels' => 'JLPT N5 – N1'],
                ['icon' => 'fa-solid fa-yin-yang', 'title' => 'Chinese (HSK)', 'desc' => 'Mandarin Chinese courses designed for HSK certification, from beginner characters to advanced fluency.', 'levels' => 'HSK 1 – HSK 6'],
                ['icon' => 'fa-solid fa-flag', 'title' => 'German', 'desc' => 'German language programs for academic and professional purposes, preparing for TestDaF and DSH exams.', 'levels' => 'A1 – C2'],
                ['icon' => 'fa-solid fa-wine-glass', 'title' => 'French', 'desc' => 'French language courses from beginner to advanced, with preparation for DELF, DALF, and TCF certifications.', 'levels' => 'A1 – C2'],
            ] as $index => $lang)
                <div class="service-card text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-5 flex items-center justify-center" style="background: rgba(212,32,44,0.08);">
                        <i class="{{ $lang['icon'] }} text-2xl" style="color: var(--color-primary);"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2" style="color: var(--color-text-heading);">{{ $lang['title'] }}</h3>
                    <p class="text-sm leading-relaxed mb-3" style="color: var(--color-text);">{{ $lang['desc'] }}</p>
                    <span class="inline-block text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full" style="background: rgba(212,32,44,0.08); color: var(--color-primary);">{{ $lang['levels'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Certification Programs --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-certificate"></i>
                Certifications
            </div>
            <h2 class="section-heading">Certification <span class="gradient-text">Programs</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">Prepare for internationally recognized language certifications with our expert-led programs.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-pen-fancy', 'title' => 'IELTS Preparation', 'desc' => 'Comprehensive preparation for IELTS Academic and General Training. Our proven methods help students achieve band scores of 7.0+. Includes practice tests, writing workshops, and speaking sessions.', 'features' => ['Mock Tests Weekly', 'Writing Workshops', 'Speaking Practice', 'Score Guarantee'], 'color' => '#3b82f6'],
                ['icon' => 'fa-solid fa-laptop', 'title' => 'TOEFL Preparation', 'desc' => 'Strategic preparation for TOEFL iBT covering Reading, Listening, Speaking, and Writing sections. Access to official ETS practice materials and personalized coaching.', 'features' => ['Official ETS Materials', 'Computer Lab Access', 'Score Tracking', 'Flexible Schedule'], 'color' => '#10b981'],
                ['icon' => 'fa-solid fa-book-open', 'title' => 'TOPIK (Korean)', 'desc' => 'Structured preparation for Test of Proficiency in Korean (TOPIK) levels 1-6. Covering grammar, vocabulary, reading, listening, and writing for each level.', 'features' => ['Level-Based Classes', 'Past Paper Practice', 'Korean Cultural Immersion', 'TOPIK Guarantee'], 'color' => '#8b5cf6'],
                ['icon' => 'fa-solid fa-closed-captioning', 'title' => 'Other Certifications', 'desc' => 'Preparation programs for JLPT (Japanese), HSK (Chinese), TestDaF (German), DELF/DALF (French), and more international language certifications.', 'features' => ['Multiple Languages', 'Expert Instructors', 'Flexible Timing', 'High Pass Rate'], 'color' => '#f59e0b'],
            ] as $index => $cert)
                <div class="service-card">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center" style="background: {{ $cert['color'] }}15;">
                            <i class="{{ $cert['icon'] }} text-xl" style="color: {{ $cert['color'] }};"></i>
                        </div>
                        <h3 class="text-xl font-semibold" style="color: var(--color-text-heading);">{{ $cert['title'] }}</h3>
                    </div>
                    <p class="text-sm leading-relaxed mb-5" style="color: var(--color-text);">{{ $cert['desc'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($cert['features'] as $feature)
                            <span class="text-[10px] font-medium px-3 py-1 rounded-full" style="background: rgba(212,32,44,0.06); color: var(--color-text-muted);">
                                <i class="fa-solid fa-check text-[8px] mr-1" style="color: var(--color-primary);"></i>{{ $feature }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-star"></i>
                Why Choose Us
            </div>
            <h2 class="section-heading">Why Choose <span class="gradient-text">Our Training?</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-chalkboard-user', 'title' => 'Expert Instructors', 'desc' => 'Native and certified language instructors with years of teaching experience.'],
                ['icon' => 'fa-solid fa-users', 'title' => 'Small Class Sizes', 'desc' => 'Intimate classes of 8-12 students ensuring personalized attention and faster progress.'],
                ['icon' => 'fa-solid fa-certificate', 'title' => 'High Pass Rate', 'desc' => 'Over 92% of our students achieve their target scores on the first attempt.'],
                ['icon' => 'fa-solid fa-clock', 'title' => 'Flexible Schedule', 'desc' => 'Morning, evening, and weekend classes to fit your busy lifestyle and study plans.'],
            ] as $index => $feature)
                <div class="service-card text-center">
                    <div class="service-icon mx-auto mb-5">
                        <i class="{{ $feature['icon'] }}"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $feature['title'] }}</h3>
                    <p class="text-sm" style="color: var(--color-text);">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Schedule / Process --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-calendar-days"></i>
                Getting Started
            </div>
            <h2 class="section-heading">How to <span class="gradient-text">Get Started</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">Begin your language learning journey with just a few simple steps.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]" data-animate>
            @foreach([
                ['step' => '01', 'icon' => 'fa-solid fa-clipboard-check', 'title' => 'Take a Placement Test', 'desc' => 'We assess your current language level through a quick and comprehensive placement test to determine the right course for you.'],
                ['step' => '02', 'icon' => 'fa-solid fa-calendar-check', 'title' => 'Choose Your Schedule', 'desc' => 'Select from flexible class timings, morning, evening, or weekend sessions, that best fit your personal and professional commitments.'],
                ['step' => '03', 'icon' => 'fa-solid fa-rocket', 'title' => 'Start Learning', 'desc' => 'Begin your language training with expert instructors, interactive curriculum, and access to our digital learning platform.'],
            ] as $index => $step)
                <div class="service-card text-center relative">
                    <div class="absolute -top-3 -right-3 w-10 h-10 rounded-full flex items-center justify-center text-white text-xs font-bold" style="background: var(--color-primary);">{{ $step['step'] }}</div>
                    <div class="service-icon mx-auto mb-5">
                        <i class="{{ $step['icon'] }}"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $step['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center" data-animate>
            <div class="inline-flex items-center gap-3 px-6 py-3 rounded-full" style="background: rgba(212,32,44,0.06); border: 1px solid rgba(212,32,44,0.12);">
                <i class="fa-solid fa-info-circle text-sm" style="color: var(--color-primary);"></i>
                <span class="text-sm" style="color: var(--color-text);">New batches start every month. <strong style="color: var(--color-text-heading);">Limited seats available.</strong></span>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="px-[15px]">
    <div class="stat-bar flex flex-wrap items-center" style="margin-bottom: 0;">
        <div class="w-full p-10 lg:p-14 text-center">
            <h2 data-animate class="text-3xl md:text-4xl font-medium text-white mb-6" style="letter-spacing: -0.03em;">Start Your Language <span class="gradient-text">Journey</span> Today</h2>
            <p data-animate class="text-white/70 text-base mb-8 max-w-2xl mx-auto">Master a new language and earn certifications that open doors to global education and career opportunities.</p>
            <div data-animate class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Enroll Now</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <a href="{{ route('contact') }}" class="btn-primary btn-primary-lg" style="background: transparent; border: 1px solid rgba(255,255,255,0.3);">
                    <span class="btn-text"><span>Contact Us</span></span>
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
                <h2 class="section-heading text-white">Book an <span class="gradient-text">Appointment</span></h2>
                <p class="text-white/60 text-base leading-relaxed mb-10">Interested in our language training programs? Schedule a free consultation to discuss your learning goals and find the perfect course.</p>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(212,32,44,0.15);">
                            <i class="fa-solid fa-phone text-sm" style="color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider" style="color: #a9b8b8;">Call us</p>
                            <a href="tel:0226322559" class="text-white font-medium text-sm hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(212,32,44,0.15);">
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
                    <input type="hidden" name="page" value="language-training">
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
                                <option value="Language Training" selected>Language Training</option>
                                <option value="IELTS Preparation">IELTS Preparation</option>
                                <option value="TOEFL Preparation">TOEFL Preparation</option>
                                <option value="Korean (TOPIK)">Korean (TOPIK)</option>
                                <option value="Japanese (JLPT)">Japanese (JLPT)</option>
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
                        <textarea name="message" rows="4" placeholder="Tell us about your language learning goals..." class="input-field resize-none">{{ old('message') }}</textarea>
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