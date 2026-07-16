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
        $divisions = [
            'travel' => [
                'name' => 'Endow Travel',
                'tagline' => 'Where the journey begins',
                'meta_description' => 'Discover seamless travel solutions with Endow Travel. Personalized itineraries, corporate travel, and exclusive deals for every journey.',
                'services' => [
                    ['title' => 'Tailored Travel Plans', 'description' => 'Personalized itineraries crafted to meet your unique preferences and needs.', 'icon' => 'fas fa-map-marked-alt'],
                    ['title' => 'Exclusive Deals & Discounts', 'description' => 'Access unbeatable offers on flights, hotels, and holiday packages.', 'icon' => 'fas fa-tags'],
                    ['title' => 'Corporate Travel Solutions', 'description' => 'Streamlined travel management for business professionals with priority services.', 'icon' => 'fas fa-briefcase'],
                    ['title' => '24/7 Customer Support', 'description' => 'Our dedicated team is always ready to assist you, no matter where you are.', 'icon' => 'fas fa-headset'],
                    ['title' => 'Hassle-Free Visa Assistance', 'description' => 'Simplified visa processing and guidance for international travelers.', 'icon' => 'fas fa-passport'],
                    ['title' => 'Luxury & Leisure Tours', 'description' => 'Handpicked premium destinations for unforgettable experiences.', 'icon' => 'fas fa-gem'],
                ],
            ],
            'education' => [
                'name' => 'Endow Global Education',
                'tagline' => 'Global Vision, Guided Path',
                'meta_description' => 'Transform your education journey with Endow Global Education. World-class study programs, scholarships, and international student support.',
                'services' => [
                    ['title' => 'World-Class Study Programs', 'description' => 'Access globally recognized educational programs tailored for career growth and academic excellence.', 'icon' => 'fas fa-book-open'],
                    ['title' => 'International Student Support', 'description' => 'Comprehensive assistance for admissions, visas, and settling into a new country.', 'icon' => 'fas fa-globe-americas'],
                    ['title' => 'Cultural Exchange Opportunities', 'description' => 'Participate in immersive programs that promote global understanding and cultural diversity.', 'icon' => 'fas fa-people-arrows'],
                    ['title' => 'Scholarship Guidance', 'description' => 'Explore and apply for scholarships to make quality education more affordable.', 'icon' => 'fas fa-award'],
                    ['title' => 'Language Training & Certifications', 'description' => 'Prepare for success with expert language training and internationally accepted certifications.', 'icon' => 'fas fa-language'],
                    ['title' => 'Collaborations with Leading Institutions', 'description' => 'Partnerships with top universities and organizations worldwide for unparalleled learning opportunities.', 'icon' => 'fas fa-university'],
                ],
            ],
            'technology' => [
                'name' => 'Endow Technologies',
                'tagline' => 'Innovate. Transform. Lead.',
                'meta_description' => 'Cutting-edge technology solutions with Endow Technologies. Software development, AI, cloud computing, and digital transformation services.',
                'services' => [
                    ['title' => 'Cutting-Edge Software Solutions', 'description' => 'Delivering innovative and scalable software tailored to business needs.', 'icon' => 'fas fa-code', 'link' => 'https://endowtech.net/'],
                    ['title' => 'AI & Automation Integration', 'description' => 'Enhancing efficiency with AI-driven automation and smart technologies.', 'icon' => 'fas fa-robot', 'link' => 'https://endowtech.net/'],
                    ['title' => 'Cloud Computing & Security', 'description' => 'Secure and scalable cloud solutions for seamless business operations.', 'icon' => 'fas fa-cloud', 'link' => 'https://endowtech.net/'],
                    ['title' => 'Custom Web & Mobile App Development', 'description' => 'Creating high-performance web and mobile applications for diverse industries.', 'icon' => 'fas fa-mobile-alt', 'link' => 'https://endowtech.net/app-development/'],
                    ['title' => 'IT Consulting & Digital Transformation', 'description' => 'Helping businesses adopt the latest tech for improved efficiency and growth.', 'icon' => 'fas fa-cogs', 'link' => 'https://endowtech.net/'],
                    ['title' => 'Data Analytics & Business Intelligence', 'description' => 'Leveraging data to drive smarter decision-making and business insights.', 'icon' => 'fas fa-chart-bar', 'link' => 'https://endowtech.net/'],
                ],
                'cta' => [
                    'heading' => 'Ready to Transform Your Business?',
                    'description' => 'Discover how Endow Technologies can help you leverage cutting-edge technology for competitive advantage.',
                    'url' => 'https://endowtech.net/',
                    'text' => 'Visit Endow Tech',
                ],
            ],
        ];

        if (! isset($divisions[$slug])) {
            abort(404);
        }

        $division = $divisions[$slug];

        $appointmentTexts = [
            'travel' => 'Let us help you plan your perfect journey! Schedule a quick consultation with our experts to discuss your travel needs and get personalized recommendations.',
            'education' => "Ready to take the next step in your educational journey? Book a consultation with our experts to explore study programs, scholarship opportunities, and visa assistance. Let's make your global education dream a reality!",
            'technology' => "Let's discuss how technology can accelerate your business. Schedule a session with our experts today!",
        ];

        return view('pages.division', [
            'division' => $division,
            'appointment_text' => $appointmentTexts[$slug],
        ]);
    }
}
