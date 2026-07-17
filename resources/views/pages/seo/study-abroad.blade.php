@extends('layouts.app')

@section('title', 'Study Abroad Programs – Endow Global Education')
@section('meta_title', 'Study Abroad Programs – Endow Global Education')
@section('meta_description', 'Study abroad programs with Endow Global Education. Access top universities worldwide, scholarship guidance, and comprehensive student support.')
@section('meta_keywords', 'study abroad, international education, overseas study, global education, university abroad, student support')

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
                <li class="text-white font-medium">Study Abroad</li>
            </ol>
        </nav>
        <div class="flex items-center gap-5">
            <div class="w-14 h-14 rounded-xl flex items-center justify-center" style="background: rgba(212,32,44,0.15); border: 1px solid rgba(212,32,44,0.2);">
                <i class="fa-solid fa-plane-departure text-xl" style="color: var(--color-primary);"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">Study <span class="gradient-text">Abroad Programs</span></h1>
                <p class="text-white/50 text-lg mt-1">Your gateway to world-class education across the globe</p>
            </div>
        </div>
    </div>
</section>

{{-- Why Study Abroad --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-globe"></i>
                Why Study Abroad
            </div>
            <h2 class="section-heading">Why <span class="gradient-text">Study Abroad?</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">Studying abroad opens doors to new cultures, academic excellence, and career opportunities that shape your future.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Academic Excellence', 'desc' => 'Access world-renowned universities and programs that are recognized globally, giving you a competitive edge in your career.'],
                ['icon' => 'fa-solid fa-earth-americas', 'title' => 'Cultural Immersion', 'desc' => 'Experience new cultures, traditions, and perspectives that broaden your worldview and develop essential cross-cultural skills.'],
                ['icon' => 'fa-solid fa-briefcase', 'title' => 'Career Advancement', 'desc' => 'International education significantly boosts your employability, with employers valuing the skills gained from studying abroad.'],
            ] as $index => $feature)
                <div class="service-card text-center">
                    <div class="service-icon mx-auto mb-6">
                        <i class="{{ $feature['icon'] }}"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3" style="color: var(--color-text-heading);">{{ $feature['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Popular Destinations --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-map-location-dot"></i>
                Destinations
            </div>
            <h2 class="section-heading">Popular <span class="gradient-text">Destinations</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">Explore top study destinations chosen by thousands of international students every year.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" data-animate>
            @foreach([
                ['name' => 'United States', 'icon' => 'fa-solid fa-flag-usa', 'universities' => '4,000+'],
                ['name' => 'United Kingdom', 'icon' => 'fa-solid fa-landmark', 'universities' => '160+'],
                ['name' => 'Canada', 'icon' => 'fa-solid fa-maple-leaf', 'universities' => '100+'],
                ['name' => 'Australia', 'icon' => 'fa-solid fa-star', 'universities' => '40+'],
                ['name' => 'Germany', 'icon' => 'fa-solid fa-graduation-cap', 'universities' => '100+'],
                ['name' => 'South Korea', 'icon' => 'fa-solid fa-torii-gate', 'universities' => '300+'],
                ['name' => 'Japan', 'icon' => 'fa-solid fa-torii-gate', 'universities' => '700+'],
                ['name' => 'New Zealand', 'icon' => 'fa-solid fa-mountain-sun', 'universities' => '8+'],
            ] as $index => $dest)
                <div class="service-card text-center group cursor-pointer">
                    <div class="w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center transition-all" style="background: rgba(212,32,44,0.08);">
                        <i class="{{ $dest['icon'] }} text-2xl" style="color: var(--color-primary);"></i>
                    </div>
                    <h3 class="text-base font-semibold mb-1" style="color: var(--color-text-heading);">{{ $dest['name'] }}</h3>
                    <p class="text-xs" style="color: var(--color-text-muted);">{{ $dest['universities'] }} Universities</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Our Process --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-list-ol"></i>
                Our Process
            </div>
            <h2 class="section-heading">How We <span class="gradient-text">Guide You</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">A streamlined process to help you achieve your dream of studying abroad.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[30px]" data-animate>
            @foreach([
                ['step' => '01', 'icon' => 'fa-solid fa-comments', 'title' => 'Initial Consultation', 'desc' => 'We assess your academic profile, career goals, and preferences to create a personalized study plan.'],
                ['step' => '02', 'icon' => 'fa-solid fa-university', 'title' => 'University Selection', 'desc' => 'We help you shortlist and apply to universities that match your academic aspirations and budget.'],
                ['step' => '03', 'icon' => 'fa-solid fa-file-lines', 'title' => 'Application & Visa', 'desc' => 'Our team handles your application documents, essay reviews, and visa processing from start to finish.'],
                ['step' => '04', 'icon' => 'fa-solid fa-plane-departure', 'title' => 'Pre-Departure', 'desc' => 'We prepare you for your journey with orientation sessions, travel arrangements, and accommodation support.'],
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
    </div>
</section>

{{-- Programs We Offer --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-book-open"></i>
                Programs
            </div>
            <h2 class="section-heading">Programs We <span class="gradient-text">Offer</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">From undergraduate degrees to postgraduate studies, we cover a wide range of academic programs.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-user-graduate', 'title' => 'Undergraduate Programs', 'desc' => 'Bachelor\'s degree programs in Business, Engineering, Computer Science, Arts, and more at top-ranked universities.'],
                ['icon' => 'fa-solid fa-award', 'title' => 'Postgraduate Programs', 'desc' => 'Master\'s and MBA programs with specializations in Management, Data Science, AI, and International Relations.'],
                ['icon' => 'fa-solid fa-flask', 'title' => 'Research Programs', 'desc' => 'PhD and research-based programs in collaboration with leading global research institutions and labs.'],
                ['icon' => 'fa-solid fa-language', 'title' => 'Foundation Programs', 'desc' => 'Preparatory and pathway programs designed to bridge academic gaps and prepare you for degree studies.'],
                ['icon' => 'fa-solid fa-certificate', 'title' => 'Professional Certifications', 'desc' => 'Industry-recognized certification programs in IT, Project Management, Finance, and Healthcare.'],
                ['icon' => 'fa-solid fa-book', 'title' => 'Short-Term Courses', 'desc' => 'Intensive summer schools, winter courses, and professional development workshops at international campuses.'],
            ] as $index => $program)
                <div class="service-card">
                    <div class="service-icon mb-5">
                        <i class="{{ $program['icon'] }}"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $program['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $program['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonials --}}
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
                <div class="testimonial-card">
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
                            <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(212,32,44,0.08);">
                                <i class="{{ $t['icon'] }} text-sm" style="color: var(--color-primary);"></i>
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

{{-- CTA --}}
<section class="px-[15px]">
    <div class="stat-bar flex flex-wrap items-center" style="margin-bottom: 0;">
        <div class="w-full p-10 lg:p-14 text-center">
            <h2 data-animate class="text-3xl md:text-4xl font-medium text-white mb-6" style="letter-spacing: -0.03em;">Ready to Start Your <span class="gradient-text">Study Abroad</span> Journey?</h2>
            <p data-animate class="text-white/70 text-base mb-8 max-w-2xl mx-auto">Let Endow Global Education guide you to the perfect university and program. Your future starts with a single step.</p>
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
                <p class="text-white/60 text-base leading-relaxed mb-10">Ready to take the next step in your study abroad journey? Schedule a consultation with our education experts to explore your options.</p>
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
                    <input type="hidden" name="page" value="study-abroad">
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
                                <option value="Education Services">Education Services</option>
                                <option value="Scholarship Guidance">Scholarship Guidance</option>
                                <option value="Language Training">Language Training</option>
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
                        <textarea name="message" rows="4" placeholder="Tell us about your study abroad goals..." class="input-field resize-none">{{ old('message') }}</textarea>
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