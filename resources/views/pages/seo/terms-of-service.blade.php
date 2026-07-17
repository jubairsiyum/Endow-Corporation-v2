@extends('layouts.app')

@section('title', 'Terms of Service – Endow Corporation')
@section('meta_title', 'Terms of Service – Endow Corporation')
@section('meta_description', 'Terms of Service for Endow Corporation. Read our terms and conditions for using our services.')

@section('content')

{{-- Hero --}}
<section class="section-gap" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-[10%] right-[5%] w-[300px] h-[300px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(65px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 py-16">
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm" style="color: #a9b8b8;">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium">Terms of Service</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">Terms of Service</h1>
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
                Welcome to Endow Corporation. These Terms of Service govern your use of our website and services provided through our divisions — Endow Travel, Endow Global Education, and Endow Technologies. By accessing our website or using our services, you agree to be bound by these terms.
            </p>
        </div>

        {{-- Section 1 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                1. Acceptance of Terms
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                By accessing or using the Endow Corporation website and its services, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service and our Privacy Policy. If you do not agree to these terms, please do not use our website or services.
            </p>
            <p class="text-base leading-relaxed" style="color: var(--color-text);">
                These terms apply to all visitors, users, and clients who access or use our services. We reserve the right to update or modify these terms at any time without prior notice. Continued use of our services constitutes acceptance of any changes.
            </p>
        </div>

        {{-- Section 2 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                2. Services Description
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                Endow Corporation provides professional services through its specialized divisions:
            </p>
            <ul class="space-y-3 ml-1">
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-plane-departure text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Endow Travel:</strong> Travel planning, corporate travel management, visa assistance, and leisure tour services.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-graduation-cap text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Endow Global Education:</strong> Educational consulting, study program facilitation, scholarship guidance, and language training services.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-microchip text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);"><strong style="color: var(--color-text-heading);">Endow Technologies:</strong> Software development, IT consulting, cloud solutions, AI integration, and digital transformation services.</span>
                </li>
            </ul>
            <p class="text-base leading-relaxed mt-4" style="color: var(--color-text);">
                Service availability, pricing, and specifications may change without notice. We reserve the right to modify, suspend, or discontinue any service at our discretion.
            </p>
        </div>

        {{-- Section 3 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                3. User Responsibilities
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                When using our website and services, you agree to:
            </p>
            <ul class="space-y-3 ml-1">
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-circle-check text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">Provide accurate, current, and complete information when requested.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-circle-check text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">Maintain the confidentiality of any account credentials or access information.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-circle-check text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">Use our services only for lawful purposes and in compliance with all applicable laws.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-circle-check text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">Not attempt to gain unauthorized access to any portion of our website or systems.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-circle-check text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">Not use our website or services for any fraudulent, harmful, or malicious purpose.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-circle-check text-sm mt-1" style="color: var(--color-primary);"></i>
                    <span class="text-base" style="color: var(--color-text);">Promptly notify us of any unauthorized use of your account or security breach.</span>
                </li>
            </ul>
        </div>

        {{-- Section 4 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                4. Intellectual Property
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                All content on this website — including but not limited to text, graphics, logos, images, software, and design elements — is the property of Endow Corporation or its licensors and is protected by international intellectual property laws.
            </p>
            <p class="text-base leading-relaxed" style="color: var(--color-text);">
                You are granted a limited, non-exclusive, non-transferable license to access and use the website for personal or internal business purposes. You may not reproduce, distribute, modify, create derivative works of, publicly display, or commercially exploit any content without prior written consent from Endow Corporation.
            </p>
        </div>

        {{-- Section 5 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                5. Limitation of Liability
            </h2>
            <p class="text-base leading-relaxed mb-4" style="color: var(--color-text);">
                To the maximum extent permitted by law, Endow Corporation shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or related to your use of our website or services.
            </p>
            <p class="text-base leading-relaxed" style="color: var(--color-text);">
                This includes, but is not limited to, loss of profits, data, business opportunities, or goodwill. Our total aggregate liability for any claims arising from the use of our services shall not exceed the amount paid by you to Endow Corporation for the specific service in question during the twelve (12) months preceding the claim.
            </p>
        </div>

        {{-- Section 6 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                6. Governing Law
            </h2>
            <p class="text-base leading-relaxed" style="color: var(--color-text);">
                These Terms of Service shall be governed by and construed in accordance with the laws of the Republic of Korea. Any disputes arising under or in connection with these terms shall be subject to the exclusive jurisdiction of the courts located in Seoul, South Korea.
            </p>
        </div>

        {{-- Section 7 --}}
        <div class="mb-10" data-animate>
            <h2 class="text-2xl font-semibold mb-4" style="color: var(--color-text-heading);">
                7. Contact Information
            </h2>
            <p class="text-base leading-relaxed mb-6" style="color: var(--color-text);">
                If you have any questions about these Terms of Service, please contact us:
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
