@extends('layouts.app')

@section('title', 'Privacy Policy – Endow Corporation')
@section('meta_title', 'Privacy Policy – Endow Corporation')
@section('meta_description', 'Privacy Policy for Endow Corporation. Learn how we collect, use, and protect your personal information.')

@section('content')

{{-- Hero --}}
<section class="section-gap-hero" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-[10%] right-[5%] w-[300px] h-[300px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(65px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 py-16">
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm" style="color: #a9b8b8;">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium">Privacy Policy</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">Privacy Policy</h1>
    </div>
</section>

{{-- Content --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-4xl mx-auto px-6">

        <div class="mb-10" data-animate>
            <p class="text-sm font-medium" style="color: var(--color-text-muted);">
                <i class="fa-regular fa-calendar mr-1"></i> Last Updated: July 16, 2026
            </p>
            <p class="text-base leading-relaxed mt-4" style="color: var(--color-text);">
                At Endow Corporation, we value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your data when you visit our website and use our services across our divisions — Endow Travel, Endow Global Education, and Endow Technologies.
            </p>
        </div>

        {{-- Section 1 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                1. Information We Collect
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                We may collect the following types of information when you interact with our website or services:
            </p>
            <ul class="space-y-3 ml-1">
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-check-circle text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Personal Identification Information:</strong> Name, email address, phone number, and mailing address when you fill out forms, book consultations, or subscribe to our newsletter.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-check-circle text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Travel &amp; Education Data:</strong> Passport details, visa information, academic records, and program preferences when you use our travel or education services.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-check-circle text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Technical Data:</strong> IP address, browser type, operating system, device identifiers, and browsing behavior collected automatically through cookies and analytics tools.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-check-circle text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Communication Data:</strong> Records of your correspondence with us, including support inquiries, feedback, and consultation notes.</span>
                </li>
            </ul>
        </div>

        {{-- Section 2 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                2. How We Use Your Information
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                We use the information we collect for the following purposes:
            </p>
            <ul class="space-y-3 ml-1">
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-angle-right text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">To provide, operate, and maintain our travel, education, and technology services.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-angle-right text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">To process bookings, consultations, and service requests.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-angle-right text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">To send administrative information, updates, and promotional communications (with your consent).</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-angle-right text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">To personalize your experience and improve our website functionality.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-angle-right text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">To comply with legal obligations and protect our rights.</span>
                </li>
            </ul>
        </div>

        {{-- Section 3 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                3. Data Sharing &amp; Disclosure
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                We do not sell your personal information. We may share your data with:
            </p>
            <ul class="space-y-3 ml-1">
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-users text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Service Providers:</strong> Trusted third-party vendors who assist in operating our website, processing payments, or delivering services (e.g., airlines, universities, cloud hosting providers).</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-building text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Division Partners:</strong> Partner institutions and organizations within the Endow Travel, Education, and Technology networks, as necessary to fulfill your service requests.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-gavel text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Legal Authorities:</strong> When required by law, regulation, or legal process, or to protect the rights, property, or safety of Endow Corporation and its users.</span>
                </li>
            </ul>
        </div>

        {{-- Section 4 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                4. Data Security
            </h2>
            <p class="text-base leading-relaxed" style="color: var(--color-text);">
                We implement industry-standard security measures to protect your personal information, including encrypted data transmission (SSL/TLS), secure server infrastructure, regular security audits, and strict access controls. While no method of transmission over the Internet is 100% secure, we take all reasonable steps to safeguard your data against unauthorized access, alteration, disclosure, or destruction.
            </p>
        </div>

        {{-- Section 5 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                5. Cookies &amp; Tracking
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                Our website uses cookies and similar tracking technologies to enhance your browsing experience. These include:
            </p>
            <ul class="space-y-3 ml-1">
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-cookie-bite text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Essential Cookies:</strong> Required for basic website functionality and security.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-chart-line text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Analytics Cookies:</strong> Help us understand how visitors interact with our website to improve performance.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-sliders text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Preference Cookies:</strong> Remember your settings and preferences for a personalized experience.</span>
                </li>
            </ul>
            <p class="text-base leading-relaxed mt-4" style="color: var(--color-text);">
                You can control cookie preferences through your browser settings. Disabling certain cookies may affect website functionality.
            </p>
        </div>

        {{-- Section 6 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                6. Your Rights
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                Depending on your location, you may have the following rights regarding your personal data:
            </p>
            <ul class="space-y-3 ml-1">
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-shield-halved text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Access &amp; Portability:</strong> Request a copy of the personal data we hold about you.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-pen-to-square text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Correction:</strong> Request correction of inaccurate or incomplete data.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-trash-can text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Deletion:</strong> Request deletion of your personal data, subject to legal obligations.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-ban text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Opt-Out:</strong> Unsubscribe from marketing communications at any time.</span>
                </li>
            </ul>
        </div>

        {{-- Section 7 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                7. Contact Us for Privacy Concerns
            </h2>
            <p class="text-base leading-relaxed mb-6" style="color: var(--color-text);">
                If you have any questions, concerns, or requests regarding this Privacy Policy or how we handle your personal data, please contact us:
            </p>
            <div class="rounded-xl p-6" style="background: rgba(212,32,44,0.04); border: 1px solid rgba(212,32,44,0.08);">
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <i class="fa-regular fa-envelope" style="color: var(--color-primary);"></i>
                        <a href="mailto:contact@endowcorporation.com" class="text-base font-medium transition-colors" style="color: var(--color-text-heading);" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='var(--color-text-heading)'">contact@endowcorporation.com</a>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-phone" style="color: var(--color-primary);"></i>
                        <a href="tel:+821057672559" class="text-base font-medium transition-colors" style="color: var(--color-text-heading);" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='var(--color-text-heading)'">+82 10-5767-2559</a>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot mt-1" style="color: var(--color-primary);"></i>
                        <span class="text-base" style="color: var(--color-text);">Room 311, River Tower Officetel, 50 Beodeunaru-ro, Yeongdeungpo-gu, Seoul 07248, South Korea</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
