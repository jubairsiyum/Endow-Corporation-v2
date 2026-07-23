@extends('layouts.app')

@section('title', 'Hospital Tourism – Endow Corporation | Medical Treatment in South Korea')
@section('meta_title', 'Hospital Tourism – Endow Corporation | World-Class Medical Treatment in South Korea')
@section('meta_description', 'South Korea\'s world-leading plastic surgery, cancer treatment, organ transplants & complex surgery. Board-certified surgeons, JCI hospitals. Endow Corporation arranges your complete medical journey with personal care.')

@section('content')

{{-- ============================================ --}}
{{-- HERO — Warm, Empathetic Introduction --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden" style="background: #0d0b09; min-height: 85vh; display: flex; align-items: center;">
    {{-- Warm ambient background --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute top-[15%] right-[10%] w-[500px] h-[500px] rounded-full opacity-[0.07]" style="background: radial-gradient(circle, #e85d5d 0%, transparent 70%); filter: blur(70px);"></div>
        <div class="absolute bottom-[10%] left-[5%] w-[400px] h-[400px] rounded-full opacity-[0.05]" style="background: radial-gradient(circle, #06b6d4 0%, transparent 70%); filter: blur(60px);"></div>
        <div class="absolute top-[40%] left-[40%] w-[300px] h-[300px] rounded-full opacity-[0.04]" style="background: radial-gradient(circle, #f59e0b 0%, transparent 70%); filter: blur(50px);"></div>
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: radial-gradient(circle, rgba(255,255,255,0.6) 1px, transparent 1px); background-size: 36px 36px;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-24 lg:py-32 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            {{-- LEFT: Content --}}
            <div class="lg:col-span-7">
                <nav class="mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center gap-2 text-[13px] px-4 py-2 rounded-full" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.06); color: rgba(255,255,255,0.4);">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><span class="mx-1 opacity-30">/</span></li>
                        <li class="text-white font-medium">Hospital Tourism</li>
                    </ol>
                </nav>

                <div class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6 px-4 py-2 rounded-full" style="background: rgba(232,93,93,0.08); border: 1px solid rgba(232,93,93,0.15); color: #f08080; letter-spacing: 0.15em;">
                    <i class="fa-solid fa-heart-pulse text-[10px]"></i>
                    Critical Care &amp; Aesthetic Excellence
                </div>

                <h1 class="text-[42px] sm:text-[52px] lg:text-[64px] font-extrabold text-white leading-[1.05] tracking-tight mb-6" style="letter-spacing: -0.035em;">
                    World-Class Care,<br>
                    <span style="background: linear-gradient(135deg, #f08080 0%, #e85d5d 40%, #06b6d4 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Close to Home</span>
                </h1>

                <p class="text-base sm:text-lg leading-relaxed max-w-xl mb-8" style="color: rgba(255,255,255,0.5); line-height: 1.8;">
                    From life-saving cancer surgery and organ transplants to South Korea's world-renowned plastic and aesthetic surgery — the nation performs over 1 million cosmetic procedures annually, more per capita than anywhere on earth. We connect you with board-certified specialists at JCI-accredited hospitals. Every arrangement is handled with compassion, discretion, and meticulous attention to detail.
                </p>

                <div class="flex flex-wrap items-center gap-4 sm:gap-6 mb-10">
                    @foreach([
                        ['icon' => 'fa-solid fa-certificate', 'text' => 'JCI-Accredited Hospitals'],
                        ['icon' => 'fa-solid fa-user-doctor', 'text' => 'Board-Certified Surgeons'],
                        ['icon' => 'fa-solid fa-shield-heart', 'text' => 'End-to-End Support'],
                    ] as $badge)
                        <div class="flex items-center gap-2 px-4 py-2 rounded-full" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                            <i class="{{ $badge['icon'] }} text-[10px]" style="color: #f08080;"></i>
                            <span class="text-[11px] font-semibold" style="color: rgba(255,255,255,0.55);">{{ $badge['text'] }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-wrap items-center gap-6 sm:gap-10 mb-10">
                    @foreach([
                        ['value' => '500+', 'label' => 'Partner Hospitals'],                        
                        ['value' => '40%', 'label' => 'Avg. Cost Savings'],
                    ] as $stat)
                        <div class="text-center sm:text-left">
                            <div class="text-[28px] sm:text-[34px] font-extrabold text-white tracking-tight" style="letter-spacing: -0.03em; line-height: 1;">{{ $stat['value'] }}</div>
                            <div class="text-[11px] font-semibold uppercase tracking-[1.5px] mt-1" style="color: rgba(255,255,255,0.3);">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>

                <a href="#appointment" class="btn-primary btn-primary-lg">
                    <span class="btn-text"><span>Request Free Consultation</span></span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>

            {{-- RIGHT: Visual Element --}}
            <div class="lg:col-span-5 hidden lg:flex items-center justify-center relative">
                <div class="relative w-[320px] h-[400px]">
                    <div class="absolute top-0 right-0 w-[260px] h-[310px] rounded-3xl overflow-hidden shadow-2xl transform rotate-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); backdrop-filter: blur(10px);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4" style="background: rgba(232,93,93,0.12); border: 1px solid rgba(232,93,93,0.2);">
                                    <i class="fa-solid fa-heart-pulse text-3xl" style="color: #f08080;"></i>
                                </div>
                                <div class="w-28 h-1 rounded-full mx-auto mb-3 opacity-20" style="background: white;"></div>
                                <div class="w-20 h-1 rounded-full mx-auto mb-3 opacity-10" style="background: white;"></div>
                                <div class="w-14 h-1 rounded-full mx-auto opacity-10" style="background: white;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-[200px] h-[260px] rounded-3xl overflow-hidden shadow-xl transform -rotate-6" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fa-solid fa-stethoscope text-5xl opacity-10" style="color: white;"></i>
                        </div>
                    </div>
                    <div class="absolute top-[22%] left-[8%] flex gap-1.5">
                        <span class="w-2 h-2 rounded-full" style="background: #f08080;"></span>
                        <span class="w-2 h-2 rounded-full opacity-40" style="background: #06b6d4;"></span>
                        <span class="w-2 h-2 rounded-full opacity-20" style="background: white;"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- INTRO: We Understand --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="section-subtitle" style="color: #e85d5d;">
                    <i class="fa-solid fa-heart"></i>
                    We Understand
                </div>
                <h2 class="section-heading">You Deserve the <span class="gradient-text">Best Possible Care</span></h2>
                <div class="space-y-5">
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        A serious diagnosis changes everything. The anxiety, the endless research, the uncertainty about whether you are making the right choice — we have walked this path with thousands of families, and we understand the weight of these decisions.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        Endow Corporation was founded to bridge a critical gap: connecting patients who need advanced medical care with South Korea's world-class healthcare system. South Korea is consistently ranked among the top nations globally for cancer survival rates, organ transplant success, and complex surgical outcomes — and it is the undisputed world leader in plastic and aesthetic surgery, performing over a million procedures each year. Yet, accessing this care from abroad can feel overwhelming.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        That is where we come in. We do not just book appointments. We become your dedicated partner — coordinating with hospitals, arranging medical visas, securing accommodations, providing interpreters, and ensuring every detail of your medical journey is handled with compassion and precision. From your first phone call through your full recovery, we are by your side.
                    </p>
                </div>
            </div>

            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="height: 380px; min-height: 260px; box-shadow: 0 24px 64px rgba(0,0,0,0.08);">
                    <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=800&h=500&fit=crop"
                         alt="Modern hospital facility in South Korea with advanced medical equipment"
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
{{-- WHY SOUTH KOREA --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f9f7f5;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="section-subtitle justify-center" style="color: #e85d5d;">
                <i class="fa-solid fa-map-pin"></i>
                Why South Korea
            </div>
            <h2 class="section-heading">Why Patients Choose <span class="gradient-text">South Korea</span></h2>
            <p class="text-base max-w-2xl mx-auto mt-4" style="color: var(--color-text-muted); line-height: 1.7;">
                South Korea has emerged as one of the world's most trusted destinations for complex medical procedures, combining cutting-edge technology with exceptional outcomes at a fraction of Western costs.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" data-animate>
            @php
                $reasons = [
                    [
                        'icon' => 'fa-solid fa-trophy',
                        'title' => 'World-Leading Outcomes',
                        'desc' => 'South Korea ranks #1 globally in 5-year cancer survival rates for stomach, liver, and cervical cancers. Organ transplant success rates exceed 95%.',
                        'accent' => 'rgba(232,93,93,0.08)',
                        'accentBorder' => 'rgba(232,93,93,0.12)',
                        'iconColor' => '#e85d5d',
                    ],
                    [
                        'icon' => 'fa-solid fa-microscope',
                        'title' => 'Advanced Medical Technology',
                        'desc' => 'Korean hospitals feature robotic surgery systems, proton therapy, and AI-assisted diagnostics. Constant investment in the latest medical equipment.',
                        'accent' => 'rgba(6,182,212,0.08)',
                        'accentBorder' => 'rgba(6,182,212,0.12)',
                        'iconColor' => '#06b6d4',
                    ],
                    [
                        'icon' => 'fa-solid fa-piggy-bank',
                        'title' => '40–60% Cost Savings',
                        'desc' => 'Complex surgeries and treatments cost significantly less than in the US, UK, or Australia — without compromising on quality or safety.',
                        'accent' => 'rgba(16,185,129,0.08)',
                        'accentBorder' => 'rgba(16,185,129,0.12)',
                        'iconColor' => '#10b981',
                    ],
                    [
                        'icon' => 'fa-solid fa-star',
                        'title' => 'Plastic Surgery Capital',
                        'desc' => 'South Korea performs more plastic surgeries per capita than any country worldwide. Over 1 million procedures annually with the highest patient satisfaction rates globally.',
                        'accent' => 'rgba(245,158,11,0.08)',
                        'accentBorder' => 'rgba(245,158,11,0.12)',
                        'iconColor' => '#f59e0b',
                    ],
                ];
            @endphp

            @foreach($reasons as $reason)
                <div class="rounded-2xl p-7 transition-all duration-300 hover:-translate-y-1" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                    <div class="w-[52px] h-[52px] rounded-[14px] flex items-center justify-center mb-5" style="background: {{ $reason['accent'] }}; border: 1px solid {{ $reason['accentBorder'] }};">
                        <i class="{{ $reason['icon'] }} text-xl" style="color: {{ $reason['iconColor'] }};"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $reason['title'] }}</h3>
                    <p class="text-sm leading-[1.75]" style="color: var(--color-text);">{{ $reason['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- PLASTIC SURGERY — Korea's Signature Specialty --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="section-subtitle" style="color: #e85d5d;">
                    <i class="fa-solid fa-sparkles"></i>
                    Korea's Specialty
                </div>
                <h2 class="section-heading">World Leaders in <span class="gradient-text">Plastic & Aesthetic Surgery</span></h2>
                <div class="space-y-5">
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        South Korea is undisputedly the global capital of plastic surgery. With over <strong>1 million procedures performed annually</strong> and the highest number of board-certified plastic surgeons per capita, Korean surgeons are sought after by patients from every continent — including celebrities, business leaders, and medical tourists who demand the very best.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        What sets Korean plastic surgery apart is not just technique — it is an entire culture of precision. Korean surgeons perform certain procedures hundreds of times more frequently than their Western counterparts, developing an intuitive mastery that only comes from deep, repetitive experience. This is especially true for facial contouring, rhinoplasty, double eyelid surgery, and the full spectrum of anti-aging procedures.
                    </p>
                    <p class="text-base leading-[1.8]" style="color: var(--color-text);">
                        We connect you exclusively with board-certified surgeons at clinics that meet rigorous safety and quality standards. Whether you seek subtle refinement or transformative change, we ensure you receive honest guidance, transparent pricing, and complete support — from your initial online consultation through your final follow-up.
                    </p>
                </div>
            </div>

            <div data-animate>
                <div class="rounded-2xl overflow-hidden" style="height: 380px; min-height: 260px; box-shadow: 0 24px 64px rgba(0,0,0,0.08);">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&h=500&fit=crop"
                         alt="South Korea world-leading plastic surgery and aesthetic procedures"
                         class="w-full h-full object-cover"
                         loading="lazy"
                         width="800"
                         height="600">
                </div>
            </div>
        </div>

        {{-- Procedure cards --}}
        <div class="mt-16" data-animate>
            <h3 class="text-xl font-bold mb-8 text-center" style="color: var(--color-text-heading);">Popular Plastic & Aesthetic Procedures We Arrange</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $cosmeticProcedures = [
                        [
                            'title' => 'Facial Contouring',
                            'desc' => 'V-line jaw reduction, cheekbone reduction, and chin augmentation. Korean surgeons are the global authority on facial bone restructuring.',
                            'image' => 'https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=600&h=400&fit=crop',
                        ],
                        [
                            'title' => 'Rhinoplasty',
                            'desc' => 'Primary and revision nose surgery using advanced cartilage grafting. Natural, harmonious results tailored to diverse facial structures.',
                            'image' => asset('images/rhinoplasty.jpg'),
                        ],
                        [
                            'title' => 'Eye Surgery',
                            'desc' => 'Double eyelid, ptosis correction, and canthoplasty. The cosmetic procedure Korean surgeons are most celebrated for worldwide.',
                            'image' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=600&h=400&fit=crop',
                        ],
                        [
                            'title' => 'Anti-Aging & Lifting',
                            'desc' => 'Facelift, thread lift, and neck lift. Fat grafting and stem cell therapies for natural, long-lasting rejuvenation.',
                            'image' => 'https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?w=600&h=400&fit=crop',
                        ],
                        [
                            'title' => 'Body Contouring',
                            'desc' => 'Liposuction, tummy tuck, Brazilian butt lift, and thigh lift. Advanced body sculpting with minimal scarring and fast recovery.',
                            'image' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=600&h=400&fit=crop',
                        ],
                        [
                            'title' => 'Breast Surgery',
                            'desc' => 'Augmentation, lift, reduction, and reconstruction using the latest implants and fat transfer for natural-looking results.',
                            'image' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=600&h=400&fit=crop',
                        ],
                        [
                            'title' => 'Hair Restoration',
                            'desc' => 'FUE and FUT transplant with natural hairline design. Korea leads in graft survival rates and undetectable results.',
                            'image' => 'https://images.unsplash.com/photo-1621607512214-68297480165e?w=600&h=400&fit=crop',
                        ],
                        [
                            'title' => 'Skin & Laser Treatments',
                            'desc' => 'Advanced laser resurfacing, scar revision, pigmentation correction, and skin rejuvenation with Korea\'s latest dermatology technology.',
                            'image' => asset('images/laser.jpg'),
                        ],
                    ];
                @endphp

                @foreach($cosmeticProcedures as $proc)
                    <div class="group rounded-2xl overflow-hidden transition-all duration-400 hover:-translate-y-1.5 flex flex-col h-full" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                        {{-- Image --}}
                        <div class="relative h-48 overflow-hidden flex-shrink-0">
                            <img src="{{ $proc['image'] }}"
                                 alt="{{ $proc['title'] }} – plastic surgery in South Korea"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                 loading="lazy"
                                 width="600"
                                 height="400">
                            <div class="absolute inset-0" style="background: linear-gradient(180deg, transparent 40%, rgba(0,0,0,0.35) 100%);"></div>
                        </div>
                        {{-- Content --}}
                        <div class="p-5 flex flex-col flex-1">
                            <h4 class="text-[15px] font-bold mb-2" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $proc['title'] }}</h4>
                            <p class="text-xs leading-[1.7]" style="color: var(--color-text);">{{ $proc['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-12 text-center" data-animate>
            <div class="inline-flex items-center gap-3 px-6 py-3 rounded-full" style="background: rgba(232,93,93,0.06); border: 1px solid rgba(232,93,93,0.12);">
                <i class="fa-solid fa-shield-check text-sm" style="color: #e85d5d;"></i>
                <span class="text-sm" style="color: var(--color-text);">We only work with <strong style="color: var(--color-text-heading);">board-certified plastic surgeons</strong> at clinics with proven safety records and international patient programs.</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- TREATMENTS WE ARRANGE --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="section-subtitle justify-center" style="color: #e85d5d;">
                <i class="fa-solid fa-notes-medical"></i>
                Treatments
            </div>
            <h2 class="section-heading">Complex Treatments We <span class="gradient-text">Arrange</span></h2>
            <p class="text-base max-w-2xl mx-auto mt-4" style="color: var(--color-text-muted); line-height: 1.7;">
                We specialize in facilitating expensive, critical operations that require world-class expertise and facilities. Every treatment plan is coordinated with board-certified Korean specialists.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7" data-animate>
            @php
                $treatments = [
                    [
                        'icon' => 'fa-solid fa-user-pen',
                        'title' => 'Plastic & Reconstructive Surgery',
                        'desc' => 'The full spectrum of cosmetic and reconstructive procedures by Korea\'s most experienced board-certified surgeons — from facial contouring and rhinoplasty to post-trauma reconstruction.',
                        'accent' => 'rgba(245,158,11,0.08)',
                        'border' => 'rgba(245,158,11,0.12)',
                        'color' => '#f59e0b',
                    ],
                    [
                        'icon' => 'fa-solid fa-ribbon',
                        'title' => 'Cancer Treatment & Surgery',
                        'desc' => 'Comprehensive oncology care including tumor resection, chemotherapy, radiation therapy, and immunotherapy. South Korea leads globally in gastric, liver, thyroid, and cervical cancer outcomes.',
                        'accent' => 'rgba(232,93,93,0.08)',
                        'border' => 'rgba(232,93,93,0.12)',
                        'color' => '#e85d5d',
                    ],
                    [
                        'icon' => 'fa-solid fa-heart-circle-bolt',
                        'title' => 'Cardiac & Heart Surgery',
                        'desc' => 'Coronary artery bypass, valve replacement, angioplasty, and complex congenital heart procedures. Korean cardiac surgeons perform thousands of successful procedures annually.',
                        'accent' => 'rgba(232,93,93,0.08)',
                        'border' => 'rgba(232,93,93,0.12)',
                        'color' => '#e85d5d',
                    ],
                    [
                        'icon' => 'fa-solid fa-lungs',
                        'title' => 'Organ Transplant Surgery',
                        'desc' => 'Kidney, liver, and other organ transplants with success rates exceeding 95%. We coordinate donor matching, surgery scheduling, and post-transplant immunosuppressive care.',
                        'accent' => 'rgba(6,182,212,0.08)',
                        'border' => 'rgba(6,182,212,0.12)',
                        'color' => '#06b6d4',
                    ],
                    [
                        'icon' => 'fa-solid fa-brain',
                        'title' => 'Neurosurgery & Spine',
                        'desc' => 'Brain tumor removal, aneurysm clipping, spinal fusion, disc replacement, and minimally invasive spine procedures using robotic navigation systems.',
                        'accent' => 'rgba(6,182,212,0.08)',
                        'border' => 'rgba(6,182,212,0.12)',
                        'color' => '#06b6d4',
                    ],
                    [
                        'icon' => 'fa-solid fa-bone',
                        'title' => 'Orthopedic & Joint Surgery',
                        'desc' => 'Total hip and knee replacement, complex fracture repair, sports medicine procedures, and arthroscopic surgery. Fast-track recovery protocols get you mobile sooner.',
                        'accent' => 'rgba(16,185,129,0.08)',
                        'border' => 'rgba(16,185,129,0.12)',
                        'color' => '#10b981',
                    ],
                    
                ];
            @endphp

            @foreach($treatments as $treatment)
                <div class="rounded-2xl p-7 transition-all duration-300 hover:-translate-y-1" style="background: white; border: 1px solid #E5E7EB; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                    <div class="w-[52px] h-[52px] rounded-[14px] flex items-center justify-center mb-5" style="background: {{ $treatment['accent'] }}; border: 1px solid {{ $treatment['border'] }};">
                        <i class="{{ $treatment['icon'] }} text-xl" style="color: {{ $treatment['color'] }};"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2.5" style="color: var(--color-text-heading); letter-spacing: -0.02em;">{{ $treatment['title'] }}</h3>
                    <p class="text-sm leading-[1.75]" style="color: var(--color-text);">{{ $treatment['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- HOW IT WORKS — Simple Steps --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: #f9f7f5;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-animate>
            <div class="section-subtitle justify-center" style="color: #e85d5d;">
                <i class="fa-solid fa-list-ol"></i>
                Our Process
            </div>
            <h2 class="section-heading">How We <span class="gradient-text">Take Care of You</span></h2>
            <p class="text-base max-w-2xl mx-auto mt-4" style="color: var(--color-text-muted); line-height: 1.7;">
                A simple, transparent process designed to reduce stress and give you confidence at every stage of your medical journey.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8" data-animate>
            @php
                $steps = [
                    [
                        'step' => '01',
                        'icon' => 'fa-solid fa-phone-volume',
                        'title' => 'Talk to Us',
                        'desc' => 'Share your diagnosis and medical history. Our patient coordinators listen carefully, answer your questions, and explain your options in plain, honest language.',
                        'color' => '#e85d5d',
                    ],
                    [
                        'step' => '02',
                        'icon' => 'fa-solid fa-user-doctor',
                        'title' => 'Get Matched',
                        'desc' => 'We identify the best hospitals and surgeons for your specific condition. You receive detailed profiles, success rates, and transparent cost estimates — no surprises.',
                        'color' => '#06b6d4',
                    ],
                    [
                        'step' => '03',
                        'icon' => 'fa-solid fa-plane-arrival',
                        'title' => 'Arrive with Confidence',
                        'desc' => 'We handle medical visas, flights, airport pickup, comfortable accommodation, and hospital admissions. A dedicated interpreter meets you upon arrival.',
                        'color' => '#10b981',
                    ],
                    [
                        'step' => '04',
                        'icon' => 'fa-solid fa-heart-circle-check',
                        'title' => 'Heal & Recover',
                        'desc' => 'During and after treatment, we coordinate follow-ups, medication, and rehabilitation. Even after you return home, our telemedicine support continues.',
                        'color' => '#f59e0b',
                    ],
                ];
            @endphp

            @foreach($steps as $step)
                <div class="service-card text-center relative">
                    <div class="absolute -top-3 -right-3 w-10 h-10 rounded-full flex items-center justify-center text-white text-xs font-bold" style="background: {{ $step['color'] }};">{{ $step['step'] }}</div>
                    <div class="service-icon mx-auto mb-5" style="background: {{ $step['color'] }}10; border-color: {{ $step['color'] }}20;">
                        <i class="{{ $step['icon'] }}" style="color: {{ $step['color'] }};"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2" style="color: var(--color-text-heading);">{{ $step['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--color-text);">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center" data-animate>
            <div class="inline-flex items-center gap-3 px-6 py-3 rounded-full" style="background: rgba(232,93,93,0.06); border: 1px solid rgba(232,93,93,0.12);">
                <i class="fa-solid fa-shield-heart text-sm" style="color: #e85d5d;"></i>
                <span class="text-sm" style="color: var(--color-text);">Every hospital we work with is <strong style="color: var(--color-text-heading);">JCI-accredited</strong> and meets international safety standards.</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- STATS — Trust Builders --}}
{{-- ============================================ --}}
<section style="background: #0d0b09; padding: 60px 0;">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" data-animate>
            @foreach([
                ['value' => '15+', 'label' => 'JCI-Accredited Hospitals', 'icon' => 'fa-solid fa-hospital'],
                ['value' => '1,000+', 'label' => 'Patients Helped', 'icon' => 'fa-solid fa-people-group'],
                ['value' => '95%+', 'label' => 'Surgery Success Rate', 'icon' => 'fa-solid fa-thumbs-up'],
                ['value' => '40%', 'label' => 'Average Cost Savings', 'icon' => 'fa-solid fa-piggy-bank'],
            ] as $stat)
                <div>
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4" style="background: rgba(232,93,93,0.1); border: 1px solid rgba(232,93,93,0.15);">
                        <i class="{{ $stat['icon'] }} text-sm" style="color: #f08080;"></i>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1" style="letter-spacing: -0.03em;">{{ $stat['value'] }}</div>
                    <div class="text-sm" style="color: rgba(255,255,255,0.45);">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- PATIENT STORIES — Real Voices --}}
{{-- ============================================ --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: #e85d5d;">
                <i class="fa-solid fa-feather"></i>
                Real Stories
            </div>
            <h2 class="section-heading">Patients Who <span class="gradient-text">Trusted Us</span></h2>
            <p class="text-base max-w-xl mx-auto mt-4" style="color: var(--color-text-muted); line-height: 1.7;">
                Every journey is personal. Here are some of the people we have had the privilege to help.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px]" data-animate>
            @foreach([
                [
                    'text' => 'When my father was diagnosed with liver cancer, we were terrified. Endow Corporation arranged everything — the hospital, the top hepatobiliary surgeon, our visas, even a Korean-speaking coordinator who stayed with us throughout. The surgery was successful and cost 60% less than what we were quoted at home. I will be grateful forever.',
                    'name' => 'Fatima Al-Rashid',
                    'detail' => 'Father\'s Liver Cancer Surgery – Samsung Medical Center, Seoul',
                    'icon' => 'fa-solid fa-heart',
                ],
                [
                    'text' => 'I needed a double knee replacement and was quoted a 14-month wait in the UK. Through Endow, I was in surgery within 3 weeks at a hospital in Seoul with robotic-assisted technology. The care was exceptional, the staff spoke English, and I was walking within days. Best decision I ever made.',
                    'name' => 'James Whitfield',
                    'detail' => 'Bilateral Knee Replacement – Asan Medical Center, Seoul',
                    'icon' => 'fa-solid fa-person-walking',
                ],
                [
                    'text' => 'I traveled to Seoul for revision rhinoplasty after a disappointing result elsewhere. The surgeon Endow connected me with specialized in exactly my type of case — he had done thousands. The result is so natural that no one can tell I had anything done. The entire experience, from the private clinic to the recovery villa, was five-star.',
                    'name' => 'Elena Voss',
                    'detail' => 'Revision Rhinoplasty – Private Clinic, Gangnam, Seoul',
                    'icon' => 'fa-solid fa-face-smile',
                ],
            ] as $index => $story)
                <div class="service-card">
                    <div class="mb-4" style="color: #e85d5d; font-size: 36px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="text-base leading-relaxed mb-6" style="color: var(--color-text);">"{{ $story['text'] }}"</p>
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fa-solid fa-star text-sm" style="color: #fbbf24;"></i>
                        @endfor
                    </div>
                    <div class="pt-6" style="border-top: 1px dashed var(--color-border-dashed);">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(232,93,93,0.08);">
                                <i class="{{ $story['icon'] }} text-sm" style="color: #e85d5d;"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold" style="color: var(--color-text-heading);">{{ $story['name'] }}</p>
                                <p class="text-xs" style="color: var(--color-text-muted);">{{ $story['detail'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- CTA — Warm, Empathetic Call-to-Action --}}
{{-- ============================================ --}}
<section class="section-gap relative overflow-hidden" style="background: linear-gradient(160deg, #faf9f8 0%, #f5f2f0 40%, #f8f7f6 100%);">
    {{-- Subtle decorative blobs --}}
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full opacity-[0.05]" style="background: radial-gradient(circle, #e85d5d 0%, transparent 70%);"></div>
    <div class="absolute -bottom-24 -left-24 w-[400px] h-[400px] rounded-full opacity-[0.03]" style="background: radial-gradient(circle, #06b6d4 0%, transparent 70%);"></div>

    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <div data-animate class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: #e85d5d; letter-spacing: 0.15em;">
            <span class="w-5 h-px" style="background: #e85d5d;"></span>
            You Are Not Alone
            <span class="w-5 h-px" style="background: #e85d5d;"></span>
        </div>

        <h2 data-animate class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-6 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
            Let's Talk About<br class="hidden sm:block"> <span class="gradient-text">Your Health</span>
        </h2>

        <p data-animate class="text-base sm:text-lg max-w-xl mx-auto mb-10" style="color: var(--color-text); line-height: 1.7;">
            Whether you have a diagnosis already or are simply exploring options, we are here to listen. No pressure, no obligation — just honest guidance from people who genuinely care.
        </p>

        <div data-animate class="flex flex-wrap items-center justify-center gap-4">
            <a href="#appointment" class="btn-primary btn-primary-lg">
                <span class="btn-text"><span>Request Free Consultation</span></span>
                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full text-sm font-semibold transition-all duration-300 hover:-translate-y-0.5" style="background: white; color: var(--color-text-heading); border: 1.5px solid var(--color-border); box-shadow: 0 1px 3px rgba(0,0,0,0.04);">
                <i class="fa-regular fa-envelope text-sm" style="color: #e85d5d;"></i>
                Email Us Directly
            </a>
        </div>

        <div data-animate class="mt-14 flex flex-wrap items-center justify-center gap-8">
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>Free, No-Obligation Chat</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>100% Confidential</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>JCI-Accredited Hospitals</span>
            </div>
            <div class="flex items-center gap-2.5 text-xs" style="color: var(--color-text-muted);">
                <i class="fa-solid fa-check-circle" style="color: #10b981; font-size: 13px;"></i>
                <span>Family Support Throughout</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- APPOINTMENT FORM — Refined Corporate Booking --}}
{{-- ============================================ --}}
<section id="appointment" class="section-gap relative overflow-hidden" style="background: linear-gradient(180deg, #fefefe 0%, #f8f7f6 100%);">
    {{-- Subtle grid texture --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.018]" style="background-image: radial-gradient(circle, #0a0a0a 1px, transparent 1px); background-size: 28px 28px;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20" data-animate>
            <div class="inline-flex items-center gap-2.5 text-[11px] font-bold tracking-[3px] uppercase mb-6" style="color: var(--color-primary); letter-spacing: 0.15em;">
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
                Book a Consultation
                <span class="w-5 h-px" style="background: var(--color-primary);"></span>
            </div>
            <h2 class="text-[32px] sm:text-[40px] lg:text-[48px] font-extrabold mb-5 tracking-tight" style="color: var(--color-text-heading); letter-spacing: -0.035em; line-height: 1.12;">
                Schedule Your <span class="gradient-text">Medical Consultation</span>
            </h2>
            <p class="text-base max-w-lg mx-auto" style="color: var(--color-text-muted); line-height: 1.7;">
                Share your situation with us and our patient coordinators will reach out within 24 hours to discuss how we can help. Everything you share is kept strictly confidential.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14">
            {{-- Left: Contact Info --}}
            <div data-animate class="lg:col-span-2 space-y-5">
                @php
                    $contactCards = [
                        ['icon' => 'fa-solid fa-phone', 'label' => 'Call Us', 'value' => '02-2632-2559', 'href' => 'tel:0226322559', 'sub' => 'Mon to Sat, 8am to 6pm KST'],
                        ['icon' => 'fa-brands fa-whatsapp', 'label' => 'WhatsApp', 'value' => 'Chat With Us', 'href' => 'https://wa.link/2tzhly', 'sub' => 'Quick response, 24/7 available'],
                        ['icon' => 'fa-regular fa-envelope', 'label' => 'Email Us', 'value' => 'contact@endowcorporation.com', 'href' => 'mailto:contact@endowcorporation.com', 'sub' => 'We reply within 24 hours'],
                    ];
                @endphp

                @foreach($contactCards as $card)
                    <div class="group flex items-start gap-4 p-5 rounded-2xl transition-all duration-300 hover:-translate-y-0.5" style="background: white; border: 1px solid var(--color-border); box-shadow: 0 1px 4px rgba(0,0,0,0.03);">
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0 transition-colors duration-300" style="background: rgba(232,93,93,0.06);">
                            <i class="{{ $card['icon'] }} text-sm" style="color: #e85d5d;"></i>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[11px] font-bold uppercase tracking-wider mb-1" style="color: var(--color-text-muted);">{{ $card['label'] }}</p>
                            @if($card['href'])
                                <a href="{{ $card['href'] }}" {{ Str::startsWith($card['href'], 'https') ? 'target="_blank" rel="noopener noreferrer"' : '' }} class="block text-[15px] font-semibold transition-colors hover:text-[color:var(--color-primary)] truncate" style="color: var(--color-text-heading);">{{ $card['value'] }}</a>
                            @else
                                <p class="text-[15px] font-semibold truncate" style="color: var(--color-text-heading);">{{ $card['value'] }}</p>
                            @endif
                            <p class="text-xs mt-0.5" style="color: var(--color-text-muted);">{{ $card['sub'] }}</p>
                        </div>
                    </div>
                @endforeach

                <div class="mt-8 p-5 rounded-2xl flex items-center gap-4" style="background: linear-gradient(135deg, rgba(232,93,93,0.04) 0%, rgba(232,93,93,0.01) 100%); border: 1px dashed rgba(232,93,93,0.15);">
                    <div class="text-3xl font-extrabold tracking-tight" style="color: #e85d5d;">50K+</div>
                    <div>
                        <p class="text-sm font-semibold" style="color: var(--color-text-heading);">Patients Have Trusted Us</p>
                        <p class="text-xs mt-0.5" style="color: var(--color-text-muted);">Across 30+ countries worldwide</p>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
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
                        <input type="hidden" name="page" value="hospital-tourism">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Full Name <span style="color: var(--color-primary);">*</span></label>
                                <input type="text" id="name" name="name" placeholder="Your full name" required value="{{ old('name') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                @error('name') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Email Address <span style="color: var(--color-primary);">*</span></label>
                                <input type="email" id="email" name="email" placeholder="your@email.com" required value="{{ old('email') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="phone" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Phone Number <span style="color: var(--color-primary);">*</span></label>
                                <input type="tel" id="phone" name="phone" placeholder="+82 10 1234 5678" required value="{{ old('phone') }}"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                @error('phone') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="service_type" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Treatment Type</label>
                                <select id="service_type" name="service_type"
                                    class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none appearance-auto"
                                    style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                    onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                    onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">
                                    <option value="">Select treatment area...</option>
                                    <option value="Plastic Surgery - Facial">Plastic Surgery – Facial (Rhinoplasty, Eyes, Contouring)</option>
                                    <option value="Plastic Surgery - Body">Plastic Surgery – Body (Lipo, Breast, Lifting)</option>
                                    <option value="Cancer Treatment">Cancer Treatment & Surgery</option>
                                    <option value="Cardiac Surgery">Cardiac & Heart Surgery</option>
                                    <option value="Organ Transplant">Organ Transplant</option>
                                    <option value="Neurosurgery">Neurosurgery & Spine</option>
                                    <option value="Orthopedic Surgery">Orthopedic & Joint Surgery</option>
                                    <option value="Diagnostics">Advanced Diagnostics / Health Screening</option>
                                    <option value="Other">Other / Not Sure Yet</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-[13px] font-semibold mb-2" style="color: var(--color-text-heading);">Tell us about your situation <span style="color: var(--color-primary);">*</span></label>
                            <textarea id="message" name="message" rows="4" placeholder="Please share your diagnosis (if known), the type of treatment you are seeking, preferred timeline, and any questions you have. Everything you share is confidential." required
                                class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none resize-none"
                                style="background: #fafafa; border: 1.5px solid var(--color-border); color: var(--color-text-heading);"
                                onfocus="this.style.borderColor='var(--color-primary)'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(212,32,44,0.06)';"
                                onblur="this.style.borderColor='var(--color-border)'; this.style.background='#fafafa'; this.style.boxShadow='none';">{{ old('message') }}</textarea>
                            @error('message') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="btn-primary btn-primary-lg w-full sm:w-auto justify-center">
                            <span class="btn-text"><span>Send My Inquiry</span></span>
                            <span class="btn-icon"><i class="fa-solid fa-paper-plane"></i></span>
                        </button>

                        <p class="text-xs text-center" style="color: var(--color-text-muted);">We will respond within 24 hours. Your information is never shared with third parties.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
