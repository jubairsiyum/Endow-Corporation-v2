<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function consulting()
    {
        return view('pages.consulting');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function division($slug)
    {
        $divisions = $this->getDivisions();

        if (!isset($divisions[$slug])) {
            abort(404);
        }

        $division = $divisions[$slug];

        $appointmentTexts = [
            'travel' => 'Let us help you plan your perfect journey! Schedule a quick consultation with our experts to discuss your travel needs and get personalized recommendations.',
            'education' => "Ready to take the next step in your educational journey? Book a consultation with our experts to explore study programs, scholarship opportunities, and visa assistance.",
            'technology' => "Let's discuss how technology can accelerate your business. Schedule a session with our experts today!",
            'hospital-tourism' => "Planning medical travel? Book a free consultation with our healthcare travel experts. We'll help you find the best hospitals, doctors, and treatment packages worldwide.",
        ];

        return view('pages.division', [
            'division' => $division,
            'appointment_text' => $appointmentTexts[$slug] ?? '',
        ]);
    }

    private function getDivisions(): array
    {
        return [
            'travel' => [
                'name' => 'Endow Travel',
                'tagline' => 'Where the journey begins',
                'meta_description' => 'Discover seamless travel solutions with Endow Travel. Personalized itineraries, corporate travel, and exclusive deals for every journey.',
                'icon' => 'plane',
                'color' => 'primary',
                'services' => [
                    ['title' => 'Tailored Travel Plans', 'description' => 'Personalized itineraries crafted to meet your unique preferences and needs.', 'icon' => 'map-pin'],
                    ['title' => 'Exclusive Deals & Discounts', 'description' => 'Access unbeatable offers on flights, hotels, and holiday packages.', 'icon' => 'tag'],
                    ['title' => 'Corporate Travel Solutions', 'description' => 'Streamlined travel management for business professionals with priority services.', 'icon' => 'briefcase'],
                    ['title' => '24/7 Customer Support', 'description' => 'Our dedicated team is always ready to assist you, no matter where you are.', 'icon' => 'headphones'],
                    ['title' => 'Hassle-Free Visa Assistance', 'description' => 'Simplified visa processing and guidance for international travelers.', 'icon' => 'stamp'],
                    ['title' => 'Luxury & Leisure Tours', 'description' => 'Handpicked premium destinations for unforgettable experiences.', 'icon' => 'gem'],
                ],
            ],
            'education' => [
                'name' => 'Endow Global Education',
                'tagline' => 'Global Vision, Guided Path',
                'meta_description' => 'Transform your education journey with Endow Global Education. World-class study programs, scholarships, and international student support.',
                'icon' => 'graduation-cap',
                'color' => 'accent-blue',
                'services' => [
                    ['title' => 'World-Class Study Programs', 'description' => 'Access globally recognized educational programs tailored for career growth and academic excellence.', 'icon' => 'book-open'],
                    ['title' => 'International Student Support', 'description' => 'Comprehensive assistance for admissions, visas, and settling into a new country.', 'icon' => 'globe'],
                    ['title' => 'Cultural Exchange Opportunities', 'description' => 'Participate in immersive programs that promote global understanding and cultural diversity.', 'icon' => 'users'],
                    ['title' => 'Scholarship Guidance', 'description' => 'Explore and apply for scholarships to make quality education more affordable.', 'icon' => 'award'],
                    ['title' => 'Language Training & Certifications', 'description' => 'Prepare for success with expert language training and internationally accepted certifications.', 'icon' => 'languages'],
                    ['title' => 'Collaborations with Leading Institutions', 'description' => 'Partnerships with top universities and organizations worldwide for unparalleled learning.', 'icon' => 'building-2'],
                ],
            ],
            'technology' => [
                'name' => 'Endow Technologies',
                'tagline' => 'Innovate. Transform. Lead.',
                'meta_description' => 'Cutting-edge technology solutions with Endow Technologies. Software development, AI, cloud computing, and digital transformation.',
                'icon' => 'cpu',
                'color' => 'accent-violet',
                'services' => [
                    ['title' => 'Cutting-Edge Software Solutions', 'description' => 'Delivering innovative and scalable software tailored to business needs.', 'icon' => 'code', 'link' => 'https://endowtech.net/'],
                    ['title' => 'AI & Automation Integration', 'description' => 'Enhancing efficiency with AI-driven automation and smart technologies.', 'icon' => 'brain', 'link' => 'https://endowtech.net/'],
                    ['title' => 'Cloud Computing & Security', 'description' => 'Secure and scalable cloud solutions for seamless business operations.', 'icon' => 'cloud', 'link' => 'https://endowtech.net/'],
                    ['title' => 'Custom Web & Mobile App Development', 'description' => 'Creating high-performance web and mobile applications for diverse industries.', 'icon' => 'smartphone', 'link' => 'https://endowtech.net/app-development/'],
                    ['title' => 'IT Consulting & Digital Transformation', 'description' => 'Helping businesses adopt the latest tech for improved efficiency and growth.', 'icon' => 'settings', 'link' => 'https://endowtech.net/'],
                    ['title' => 'Data Analytics & Business Intelligence', 'description' => 'Leveraging data to drive smarter decision-making and business insights.', 'icon' => 'bar-chart-3', 'link' => 'https://endowtech.net/'],
                ],
                'cta' => [
                    'heading' => 'Ready to Transform Your Business?',
                    'description' => 'Discover how Endow Technologies can help you leverage cutting-edge technology.',
                    'url' => 'https://endowtech.net/',
                    'text' => 'Visit Endow Tech',
                ],
            ],
            'hospital-tourism' => [
                'name' => 'Hospital Tourism',
                'tagline' => 'World-Class Healthcare, Personalized Journey',
                'meta_description' => 'Medical travel services with Endow Corporation. Access world-class hospitals, expert doctors, and comprehensive treatment packages globally.',
                'icon' => 'heart-pulse',
                'color' => 'accent-cyan',
                'services' => [
                    ['title' => 'International Hospital Network', 'description' => 'Access to JCI-accredited hospitals and medical centers across 30+ countries with world-class facilities.', 'icon' => 'building-2'],
                    ['title' => 'Expert Doctor Matching', 'description' => 'We connect you with top specialists and surgeons based on your specific medical needs and preferences.', 'icon' => 'stethoscope'],
                    ['title' => 'Treatment Package Coordination', 'description' => 'Comprehensive packages including surgery, accommodation, transportation, and post-operative care.', 'icon' => 'package'],
                    ['title' => 'Medical Visa Assistance', 'description' => 'Streamlined medical visa processing with documentation support for patients and companions.', 'icon' => 'stamp'],
                    ['title' => 'Second Opinion Services', 'description' => 'Get expert medical opinions from leading specialists before making treatment decisions.', 'icon' => 'clipboard-list'],
                    ['title' => 'Post-Treatment Follow-Up', 'description' => 'Continued care coordination and telemedicine follow-ups after returning to your home country.', 'icon' => 'heart'],
                ],
                'highlights' => [
                    ['value' => '500+', 'label' => 'Partner Hospitals'],
                    ['value' => '30+', 'label' => 'Countries'],
                    ['value' => '50,000+', 'label' => 'Patients Served'],
                    ['value' => '40%', 'label' => 'Cost Savings'],
                ],
                'cta' => [
                    'heading' => 'Your Health Journey Starts Here',
                    'description' => 'Get a free consultation and personalized treatment plan from our medical travel experts.',
                    'url' => '/get-consulting',
                    'text' => 'Get Free Consultation',
                ],
            ],
        ];
    }
}
