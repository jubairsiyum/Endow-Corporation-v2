@extends('layouts.app')

@section('title', 'Scholarship Guidance – Endow Global Education')
@section('meta_title', 'Scholarship Guidance – Endow Global Education')
@section('meta_description', 'Find and apply for scholarships worldwide with Endow Global Education. Expert guidance on funding your education.')
@section('meta_keywords', 'scholarships, study abroad funding, scholarship guidance, financial aid, education grants, student scholarships')

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
                <li class="text-white font-medium">Scholarships</li>
            </ol>
        </nav>
        <div class="flex items-center gap-5">
            <div class="w-14 h-14 rounded-xl flex items-center justify-center" style="background: rgba(212,32,44,0.15); border: 1px solid rgba(212,32,44,0.2);">
                <i class="fa-solid fa-award text-xl" style="color: var(--color-primary);"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">Scholarship <span class="gradient-text">Guidance</span></h1>
                <p class="text-white/50 text-lg mt-1">Expert support to fund your international education dreams</p>
            </div>
        </div>
    </div>
</section>

{{-- Types of Scholarships --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                Scholarship Types
            </div>
            <h2 class="section-heading">Types of <span class="gradient-text">Scholarships</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">We help you identify and apply for scholarships that match your profile and academic goals.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-trophy', 'title' => 'Merit-Based Scholarships', 'desc' => 'Awarded to students with outstanding academic records, leadership qualities, and extracurricular achievements. These scholarships recognize excellence and potential.', 'color' => '#fbbf24'],
                ['icon' => 'fa-solid fa-hand-holding-heart', 'title' => 'Need-Based Scholarships', 'desc' => 'Financial assistance for students who demonstrate financial need. These scholarships ensure that talented students are not held back by economic constraints.', 'color' => '#10b981'],
                ['icon' => 'fa-solid fa-flask', 'title' => 'Research Scholarships', 'desc' => 'Funding for graduate students pursuing research in STEM, humanities, or social sciences. Often includes stipends, tuition waivers, and research grants.', 'color' => '#8b5cf6'],
                ['icon' => 'fa-solid fa-person-running', 'title' => 'Athletic Scholarships', 'desc' => 'For students who excel in sports and wish to continue their athletic career while pursuing higher education at universities with strong sports programs.', 'color' => '#3b82f6'],
            ] as $index => $type)
                <div class="service-card">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center" style="background: {{ $type['color'] }}15;">
                            <i class="{{ $type['icon'] }} text-xl" style="color: {{ $type['color'] }};"></i>
                        </div>
                        <h3 class="text-xl font-semibold" style="color: var(--color-text-heading);">{{ $type['title'] }}</h3>
                    </div>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $type['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- How We Help --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-route"></i>
                Our Process
            </div>
            <h2 class="section-heading">How We <span class="gradient-text">Help You</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">From identifying opportunities to securing your scholarship, we guide you every step of the way.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[30px]" data-animate>
            @foreach([
                ['step' => '01', 'icon' => 'fa-solid fa-magnifying-glass-chart', 'title' => 'Scholarship Search', 'desc' => 'We analyze your profile and match you with the best scholarship opportunities from universities and organizations worldwide.'],
                ['step' => '02', 'icon' => 'fa-solid fa-file-pen', 'title' => 'Application Support', 'desc' => 'Our experts help you craft compelling personal statements, essays, and application documents that stand out.'],
                ['step' => '03', 'icon' => 'fa-solid fa-comments', 'title' => 'Interview Prep', 'desc' => 'We conduct mock interviews and provide coaching to help you perform confidently in scholarship interviews.'],
                ['step' => '04', 'icon' => 'fa-solid fa-check-double', 'title' => 'Award & Enrollment', 'desc' => 'Once awarded, we assist with acceptance procedures, enrollment, and ensure smooth transition to your chosen university.'],
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

{{-- Top Scholarship Programs --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-star"></i>
                Top Programs
            </div>
            <h2 class="section-heading">Top Scholarship <span class="gradient-text">Programs</span></h2>
            <p class="mt-4 text-base max-w-2xl mx-auto" style="color: var(--color-text);">We help students access prestigious scholarships from around the world.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]" data-animate>
            @foreach([
                ['icon' => 'fa-solid fa-landmark', 'title' => 'Government Scholarships', 'desc' => 'Fully-funded programs from governments worldwide including Fulbright (USA), Chevening (UK), DAAD (Germany), MEXT (Japan), and GKS (South Korea).', 'tag' => 'Fully Funded'],
                ['icon' => 'fa-solid fa-building-columns', 'title' => 'University Scholarships', 'desc' => 'Merit and need-based awards from top universities including Harvard, MIT, Oxford, Cambridge, and Seoul National University.', 'tag' => 'Partial – Full'],
                ['icon' => 'fa-solid fa-building', 'title' => 'Organization Grants', 'desc' => 'Funding from international organizations, foundations, and NGOs dedicated to supporting global education and development.', 'tag' => 'Varies'],
                ['icon' => 'fa-solid fa-globe', 'title' => 'Country-Specific Awards', 'desc' => 'Scholarships tailored for students from specific regions or nationalities, providing targeted financial support for international study.', 'tag' => 'Regional'],
                ['icon' => 'fa-solid fa-lightbulb', 'title' => 'Innovation & Tech Grants', 'desc' => 'Specialized funding for students in STEM fields, AI research, data science, and emerging technologies at leading institutions.', 'tag' => 'STEM Focus'],
                ['icon' => 'fa-solid fa-handshake', 'title' => 'Partnership Programs', 'desc' => 'Exclusive scholarships through Endow Corporation\'s partnerships with universities and educational institutions globally.', 'tag' => 'Exclusive'],
            ] as $index => $prog)
                <div class="service-card">
                    <div class="flex items-center justify-between mb-4">
                        <div class="service-icon">
                            <i class="{{ $prog['icon'] }}"></i>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full" style="background: rgba(212,32,44,0.08); color: var(--color-primary);">{{ $prog['tag'] }}</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $prog['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $prog['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="section-gap" style="background-color: #f5f7f7;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-circle-question"></i>
                FAQs
            </div>
            <h2 class="section-heading">Frequently Asked <span class="gradient-text">Questions</span></h2>
        </div>

        <div class="max-w-3xl mx-auto" data-animate>
            @foreach([
                ['q' => 'When should I start applying for scholarships?', 'a' => 'Ideally, begin your scholarship search 12-18 months before your intended start date. Many deadlines fall between October and February for the following academic year. Early preparation gives you the best chance of success.'],
                ['q' => 'Can I apply for multiple scholarships simultaneously?', 'a' => 'Yes! We encourage students to apply for multiple scholarships to maximize their chances. Our team helps you manage multiple applications without conflicts and ensures each one is tailored to the specific requirements.'],
                ['q' => 'What documents are typically required for scholarship applications?', 'a' => 'Common requirements include academic transcripts, letters of recommendation, personal statements, test scores (GRE, GMAT, IELTS/TOEFL), resume/CV, and proof of financial need. We help you prepare all documents to the highest standard.'],
                ['q' => 'Do you help with scholarship interviews?', 'a' => 'Absolutely. We offer comprehensive interview preparation including mock interviews, feedback sessions, and coaching on presentation skills to help you make a strong impression on scholarship committees.'],
                ['q' => 'What are the chances of getting a full scholarship?', 'a' => 'With a strong academic profile, compelling application, and expert guidance from our team, many of our students secure partial to full scholarships. We assess your profile honestly and recommend the most realistic opportunities.'],
            ] as $index => $faq)
                <div class="accordion-item mb-3" style="background: white; border-radius: 12px; overflow: hidden; border: 1px solid rgba(0,0,0,0.06);">
                    <button class="accordion-button w-full flex items-center justify-between p-5 text-left" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                        <span class="text-sm font-semibold pr-4" style="color: var(--color-text-heading);">{{ $faq['q'] }}</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform" style="color: var(--color-primary); {{ $index === 0 ? 'transform: rotate(180deg);' : '' }}"></i>
                    </button>
                    <div class="accordion-body {{ $index !== 0 ? 'collapsed' : '' }}" style="{{ $index === 0 ? 'max-height: 200px;' : '' }}">
                        <div class="px-5 pb-5">
                            <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $faq['a'] }}</p>
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
            <h2 data-animate class="text-3xl md:text-4xl font-medium text-white mb-6" style="letter-spacing: -0.03em;">Don't Let Financial Barriers Stop You.</h2>
            <p data-animate class="text-white/70 text-base mb-8 max-w-2xl mx-auto">Our scholarship experts have helped students secure millions in funding. Let us help you find the right scholarship for your education.</p>
            <div data-animate class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('consulting') }}" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Find Scholarships</span></span>
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
                <p class="text-white/60 text-base leading-relaxed mb-10">Need help finding the right scholarship? Schedule a free consultation with our education experts to explore your funding options.</p>
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
                    <input type="hidden" name="page" value="scholarships">
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
                                <option value="Scholarship Guidance" selected>Scholarship Guidance</option>
                                <option value="Study Abroad">Study Abroad</option>
                                <option value="Education Services">Education Services</option>
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
                        <textarea name="message" rows="4" placeholder="Tell us about your scholarship needs..." class="input-field resize-none">{{ old('message') }}</textarea>
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