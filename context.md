# Endow Corporation — Full Website Content Management Document

> **Source:** [https://endowcorporation.com/](https://endowcorporation.com/)  
> **Extracted on:** 2026-07-16  
> **Purpose:** Complete content inventory for rebuilding the website using Laravel + Blade

---

## Table of Contents

1. [Global / Shared Elements](#1-global--shared-elements)
2. [Home Page](#2-home-page)
3. [About Us Page](#3-about-us-page)
4. [Endow Travel (Division Page)](#4-endow-travel-division-page)
5. [Endow Global Education (Division Page)](#5-endow-global-education-division-page)
6. [Endow Technologies (Division Page)](#6-endow-technologies-division-page)
7. [Contact Us Page](#7-contact-us-page)
8. [Get Consulting Page](#8-get-consulting-page)
9. [Image Assets Inventory](#9-image-assets-inventory)
10. [Brand & Design Tokens](#10-brand--design-tokens)

---

## 1. Global / Shared Elements

### 1.1 Site Identity

| Property | Value |
|---|---|
| **Site Title** | Endow Corporation |
| **Tagline** | Navigating Knowledge, Embracing Adventure |
| **Favicon** | `https://endowcorporation.com/wp-content/uploads/2025/01/cropped-v4-32x32.png` |
| **Logo** | `https://endowcorporation.com/wp-content/uploads/2025/01/lg.png` (3341×1113) |
| **Footer Logo** | `https://endowcorporation.com/wp-content/uploads/2025/01/Endow-Corporation-1024x1024.png` |

### 1.2 Top Bar (Desktop Only)

| Icon | Content |
|---|---|
| 🕐 Clock | Saturday to Thursday 8:00am to 6:00pm |
| ✉️ Email | contact@endowcorporation.com |
| 📍 Address (Korean) | 서울특별시 영등포구 버드나루로 50 (영등포동2가, 리버타워오피스텔) 311호 Postal Code: 07248 |

### 1.3 Header / Navigation

**Main Menu:**

| Menu Item | URL | Type |
|---|---|---|
| Home | `/` | Link |
| About Us | `/about-us/` | Link |
| Divisions | `#` | Dropdown Parent |
| — Endow Travel | `/endow-travels/` | Submenu |
| — Endow Global Education | `/endow-global-education/` | Submenu |
| — Endow Technologies | `/endow-technologies/` | Submenu |
| Contact Us | `/contact-us/` | Link |

**Header Contact Widget (Desktop):**
- Label: "Need help?"
- Landline: `02-2632-2559` (tel link: `tel:0226322559`)

**CTA Button:** "Get Consulting" → `/get-consulting/`

### 1.4 Social Media Links

| Platform | URL |
|---|---|
| Facebook | `https://www.facebook.com/endowcorporation?mibextid=ZbWKwL` |
| LinkedIn | `https://www.linkedin.com/company/endow-corporation/` |
| Instagram | `https://www.instagram.com/endowcorporation` |
| YouTube | `https://www.youtube.com/@endowcorporation` |

### 1.5 Footer

**Column 1 — Brand:**
- Footer Logo (circular emblem, 1080×1080)
- Tagline: "Endow Corporation is a global leader in travel, education, and technology. Inspiring progress, one step at a time."
- Social icons (Facebook, LinkedIn, Instagram, YouTube)

**Column 2 — Company Links:**
- About Us → `/about-us/`
- Endow Travel → `/endow-travels/`
- Endow Global Education → `/endow-global-education/`
- Endow Technologies → `/endow-technologies/`

**Column 3 — Contact ("You've Questions"):**
- **Location:** Room 311, River Tower Officetel, 50 Beodeunaru-ro, Yeongdeungpo-dong 2-ga, Yeongdeungpo-gu, Seoul 07248, South Korea
- **Get a quote:** 02-2632-2559 (Landline) / +82 10-5767-2559 (CEO)
- **Send a mail:** contact@endowcorporation.com

**Column 4 — Newsletter:**
- Heading: "Newsletter"
- Text: "Sign up for our latest news & articles. We won't give you spam mails."
- Form: Email input + Submit (paper plane icon)

**Copyright:** © Copyright Endow Corporation 2025. All rights reserved.

---

## 2. Home Page

**Route:** `/`  
**Title:** Endow Corporation – Navigating Knowledge, Embracing Adventure

### 2.1 Hero Section

- **Pre-title:** Endow Corporation
- **Main Headline:** Empowering **Businesses** Globally!
  - "Businesses" has highlight styling: red background (#ff4d4d), white text, rounded corners
- **Subtitle:** Explore Excellence in Travel, Education, and Technology Solutions.
- **CTA Button:** "Get Consulting" → `/get-consulting/`
- **Video CTA:** "Watch Video" → YouTube embed: `https://www.youtube.com/embed/-BVtp86Ks9E`
- **Background:** Dark theme with decorative shape `main-slider-shape-1.png`

### 2.2 Features Section — "Why Choose Endow Corporation?"

- **Section Label:** FEATURES
- **Heading:** Why Choose **Endow Corporation?** (accent color #F52549)

| Feature | Icon | Description | Image |
|---|---|---|---|
| Global Expertise | Globe (fas-globe) | Delivering world-class solutions on industries. | `2026/05/1.png` |
| Innovative Approach | Target (icon-target-2) | Revolutionizing the way businesses operate. | `2026/05/3.png` |
| Customer-Centric | Management (icon-management) | Building partnerships to drive success. | `2026/05/4.png` |

### 2.3 About Us Section

- **Section Label:** ABOUT US
- **Heading:** A Legacy of **Excellence** (#F52549)
- **Description:** With a passion for innovation and a commitment to excellence, Endow Corporation is a global leader in Travel, Education, and Technology.
- **Checklist:**
  - ✅ Innovation
  - ✅ Excellence
  - ✅ Global Reach
  - ✅ Customer Focus
  - ✅ Sustainability
  - ✅ Expertise
- **CTA Button:** "Learn More" → `/about-us/`
- **Image:** `2026/05/2.png` (1024×1024)
- **Decorative shapes:** `about-one-shape-1.png`, `about-one-shape-4.png`

### 2.4 Divisions Section — "Explore Our Divisions"

- **Section Label:** FEATURED SERVICES
- **Heading:** Explore Our **Divisions** (#F52549)

| Division | Icon | Description | CTA | External URL |
|---|---|---|---|---|
| Endow Travel | plane-departure | Tailored travel solutions for businesses and individuals. | Explore Now → | `https://endowtravel.com/` |
| Endow Global Education | university | Transforming the education experience through technology. | Learn More → | `https://endowglobaledu.com/` |
| Endow Technologies | technology-11 | Cutting-edge technological solutions to revolutionize businesses. | Learn More → | `https://endowtech.net/` |

### 2.5 CTA Banner — "Let's Discuss How We Can Help You Succeed!"

- **Heading:** Let's Discuss How We Can Help You **Succeed!** (#F52549)
- **Description:** At **Endow Corporation**, we're dedicated to transforming your vision into reality. Whether you're looking for tailored solutions in **Travel**, **Education**, or **Technology**, our team is ready to guide you every step of the way. Let's collaborate to build innovative strategies and achieve your goals.
- **CTA Button:** "Get a Personalized Quote" → `/get-consulting/`

### 2.6 "Why Choose Us" Section

- **Section Label:** WHY CHOOSE US
- **Heading:** We Are a Globally Recognized Business **Consulting Leader** (#F52549)
- **Description:** Endow Corporation is celebrated for its excellence in delivering innovative solutions in **Travel**, **Education**, and **Technology**. Our award-winning services empower businesses and individuals to achieve their full potential with confidence and precision.

| Feature | Icon | Description |
|---|---|---|
| Best Business Consulting | icon-management | Our expert team delivers innovative strategies and actionable insights to drive your success. |
| 24/7 Customer Support | icon-customer-support-2 | We are always available to provide unparalleled support and assistance whenever you need it. |

- **CTA Button:** "Contact Us" → `/contact-us/`
- **Image:** `661167309_916418771210116_1619615474324981789_n.jpg` (2048×1536)

### 2.7 Stats / Counters Section

| Metric | Value | Icon |
|---|---|---|
| Years of Experience | 7 | icon-consult |
| Team Members | 25 | icon-management |
| Successful Projects | 940+ | icon-Profile |
| Satisfied Clients | 810+ | icon-Rating |

### 2.8 FAQ Section

- **Section Label:** FAQs
- **Heading:** Frequently asked questions
- **Image:** `615397688_853485264170134_2193055346309236117_n.jpg` (2048×1536)

| # | Question | Answer |
|---|---|---|
| 1 | What services does Endow Corporation provide? | We specialize in three core areas: Travel, Education, and Technology. From providing tailored travel solutions to offering cutting-edge technology and educational consulting, we help businesses and individuals achieve their goals. |
| 2 | What kind of travel solutions do you offer? | We provide personalized travel planning for individuals, corporate travel solutions, and assistance with international travel arrangements. |
| 3 | Do you handle business travel for organizations? | Yes, we specialize in creating cost-effective and efficient travel plans for businesses, including flights, accommodations, and itinerary management. |
| 4 | How can Endow Corporation help with education needs? | We offer innovative educational tools, resources, and consulting services for institutions, teachers, and students to enhance learning experiences. |
| 5 | Do you work with international education systems? | Yes, we provide solutions tailored to global education standards and assist with international education programs. |

### 2.9 Appointment / Contact Form Section

- **Heading:** Book an **Appointment** (#F52549)
- **Description:** Ready to take the next step? Let's connect! Whether you're looking for expert consulting in **Travel**, **Education**, or **Technology**, our team is here to help. Schedule an appointment today to discuss your needs and explore tailored solutions that drive success.

**Form Fields:**

| Field | Type | Placeholder | Required | Width |
|---|---|---|---|---|
| NAME | text | John Smith | ✅ | 50% |
| SERVICE TYPE | select | Select... | ❌ | 50% |
| EMAIL | email | e.g | ✅ | 50% |
| PHONE NUMBER | tel | +880 | ✅ | 50% |
| MESSAGE (optional) | textarea | Type here | ✅ | 100% |

**Service Type Options:**
- Select...
- Travel Services
- Education Services
- Custom Software Development

**Submit Button:** "Submit"

---

## 3. About Us Page

**Route:** `/about-us/`  
**Title:** About Us – Endow Corporation

### 3.1 Page Hero / Breadcrumb

- **Breadcrumb:** home → About
- **URL path displayed:** `http://endowcorporation.com`

### 3.2 About Section

- **Section Label:** ABOUT US
- **Main Text:** At Endow Corporation, we make innovation simple and excellence achievable. Through Endow Travel, Global Education, and Technologies, we're here to help businesses grow, connect, and succeed. Let's create something extraordinary together.
- **Supporting Points:**
  - Through Travel, Education, and Technology, we help businesses grow and thrive.
  - Committed to quality, we create meaningful connections and opportunities.

### 3.3 Features / Divisions Grid

- **Section Label:** FEATURES

| Division | Description | External Link |
|---|---|---|
| Endow Travel | Discover seamless travel solutions that cater to both business and leisure. From personalized itineraries to exclusive experiences, we ensure every journey is extraordinary. | `https://endowtravel.com/` |
| Endow Global Education | Open doors to global opportunities through world-class educational programs, partnerships, and resources that inspire growth and learning. | `https://endowglobaledu.com/` |
| Endow Technologies | Stay ahead with innovative tech solutions that drive digital transformation, improve efficiency, and power your business forward. | — |

### 3.4 Testimonials Section

- **Section Label:** TESTIMONIALS
- **Heading:** What Our Client's Says About Our Best Work.

| # | Testimonial Text |
|---|---|
| 1 | Endow Travel made our business trips effortless! Their attention to detail and personalized service ensured every journey was smooth and productive. Highly recommend! |
| 2 | With Endow Global Education, I gained access to programs that completely transformed my career. Their support and resources helped me achieve my goals faster than I imagined. |
| 3 | Endow Technologies delivered cutting-edge solutions that revolutionized our operations. Their team truly understands the needs of modern businesses. |

### 3.5 Team Section

- **Heading:** Meet Our Experts
- **Section Label:** TEAM MEMBERS

| Role | Social Links |
|---|---|
| CEO | Facebook, X-twitter, Instagram |
| Strategic Director | Facebook, X-twitter, Instagram |
| Senior Consultant | (no social links listed) |

> **Note:** No actual names or photos were extracted from the live site. Team member names/images need to be confirmed.

---

## 4. Endow Travel (Division Page)

**Route:** `/endow-travels/`  
**Title:** Endow Travels – Endow Corporation

### 4.1 Page Hero

- **Tagline:** Where the journey begins

### 4.2 Featured Services

- **Section Label:** FEATURED SERVICES

| # | Service | Description |
|---|---|---|
| 1 | Tailored Travel Plans | Personalized itineraries crafted to meet your unique preferences and needs. |
| 2 | Exclusive Deals & Discounts | Access unbeatable offers on flights, hotels, and holiday packages. |
| 3 | Corporate Travel Solutions | Streamlined travel management for business professionals with priority services. |
| 4 | 24/7 Customer Support | Our dedicated team is always ready to assist you, no matter where you are. |
| 5 | Hassle-Free Visa Assistance | Simplified visa processing and guidance for international travelers. |
| 6 | Luxury & Leisure Tours | Handpicked premium destinations for unforgettable experiences. |

Each service has a "Learn More" link.

### 4.3 Appointment Section

- **Heading:** Book an Appointment
- **Text:** Let us help you plan your perfect journey! Schedule a quick consultation with our experts to discuss your travel needs and get personalized recommendations.
- **Form:** Same appointment form structure as homepage.

---

## 5. Endow Global Education (Division Page)

**Route:** `/endow-global-education/`  
**Title:** Endow Global Education – Endow Corporation

### 5.1 Page Hero

- **Tagline:** Global Vision, Guided Path

### 5.2 Featured Services

- **Section Label:** FEATURED SERVICES

| # | Service | Description |
|---|---|---|
| 1 | World-Class Study Programs | Access globally recognized educational programs tailored for career growth and academic excellence. |
| 2 | International Student Support | Comprehensive assistance for admissions, visas, and settling into a new country. |
| 3 | Cultural Exchange Opportunities | Participate in immersive programs that promote global understanding and cultural diversity. |
| 4 | Scholarship Guidance | Explore and apply for scholarships to make quality education more affordable. |
| 5 | Language Training & Certifications | Prepare for success with expert language training and internationally accepted certifications. |
| 6 | Collaborations with Leading Institutions | Partnerships with top universities and organizations worldwide for unparalleled learning opportunities. |

Each service has a "Learn More" link.

### 5.3 Appointment Section

- **Heading:** Book an Appointment
- **Text:** Ready to take the next step in your educational journey? Book a consultation with our experts to explore study programs, scholarship opportunities, and visa assistance. Let's make your global education dream a reality!
- **Form:** Same appointment form structure.

---

## 6. Endow Technologies (Division Page)

**Route:** `/endow-technologies/`  
**Title:** Endow Technologies – Endow Corporation

### 6.1 Page Hero

- **Tagline:** Innovate. Transform. Lead.

### 6.2 Featured Services

- **Section Label:** FEATURED SERVICES

| # | Service | Description | CTA Link |
|---|---|---|---|
| 1 | Cutting-Edge Software Solutions | Delivering innovative and scalable software tailored to business needs. | `https://endowtech.net/` |
| 2 | AI & Automation Integration | Enhancing efficiency with AI-driven automation and smart technologies. | `https://endowtech.net/` |
| 3 | Cloud Computing & Security | Secure and scalable cloud solutions for seamless business operations. | `https://endowtech.net/` |
| 4 | Custom Web & Mobile App Development | Creating high-performance web and mobile applications for diverse industries. | `https://endowtech.net/app-development/` |
| 5 | IT Consulting & Digital Transformation | Helping businesses adopt the latest tech for improved efficiency and growth. | `https://endowtech.net/` |
| 6 | Data Analytics & Business Intelligence | Leveraging data to drive smarter decision-making and business insights. | `https://endowtech.net/` |

**Extra CTA:** "Visit Endow Tech." → `https://endowtech.net/`

### 6.3 Appointment Section

- **Heading:** Book an Appointment
- **Text:** Let's discuss how technology can accelerate your business. Schedule a session with our experts today!
- **Form:** Same appointment form structure.

---

## 7. Contact Us Page

**Route:** `/contact-us/`  
**Title:** Contact Us – Endow Corporation

### 7.1 Page Hero / Breadcrumb

- **Breadcrumb:** home → Contact
- **Page Heading:** Contact

### 7.2 Contact Cards (3 cards in a row)

| Card | Icon | Heading | Detail | CTA |
|---|---|---|---|---|
| Live Chat | far-comments | Live Chat | Available 24/7 | "Let's Chat" → `https://wa.link/2tzhly` (WhatsApp) |
| Call Us | icon-phone1 | Call Us | 02-2632-2559 (Landline) / +82 10-5767-2559 (CEO) | "Call Us" → `tel:+82 10-5767-2559` |
| Mail Us | icon-phone1 | Mail Us | contact@endowcorporation.com | "Drop Us A Line" → `mailto:contact@endowcorporation.com` |

### 7.3 Contact Form

**Form Name:** Contact Us Form

| Field | Type | Placeholder | Required | Width |
|---|---|---|---|---|
| NAME | text | John Smith | ❌ | 100% |
| EMAIL | email | e.g | ✅ | 50% |
| PHONE NUMBER | number | +1(00) | ❌ | 50% |
| MESSAGE (optional) | text | Type here | ✅ | 100% |

**Submit Button:** "Submit"

### 7.4 Google Maps Embed

- **Address:** Room 311, River Tower Officetel, 50 Beodeunaru-ro, Yeongdeungpo-dong 2-ga, Yeongdeungpo-gu, Seoul 07248, South Korea.
- **Zoom Level:** 14
- **Map Type:** m (roadmap)

---

## 8. Get Consulting Page

**Route:** `/get-consulting/`  
**Title:** Get Consulting – Endow Corporation

### 8.1 Page Hero / Breadcrumb

- **Breadcrumb:** home → Get Consulting
- **Page Heading:** Consultation

### 8.2 Features Section — "Why Choose Endow Corporation?"

- **Section Label:** FEATURES
- **Heading:** Why Choose Endow Corporation?

| Feature | Description |
|---|---|
| Global Expertise | Delivering world-class solutions on industries. |
| Innovative Approach | Revolutionizing the way businesses operate. |
| Customer-Centric | Building partnerships to drive success. |

### 8.3 Appointment Section

- **Heading:** Book an Appointment
- **Text:** Ready to take the next step? Let's connect! Whether you're looking for expert consulting in Travel, Education, or Technology, our team is here to help. Schedule an appointment today to discuss your needs and explore tailored solutions that drive success.
- **Form:** Same appointment form structure as homepage.

---

## 9. Image Assets Inventory

### Logos & Branding

| Asset | URL | Dimensions |
|---|---|---|
| Main Logo | `wp-content/uploads/2025/01/lg.png` | 3341×1113 |
| Footer Emblem | `wp-content/uploads/2025/01/Endow-Corporation-1024x1024.png` | 1080×1080 |
| Favicon 32px | `wp-content/uploads/2025/01/cropped-v4-32x32.png` | 32×32 |
| Favicon 192px | `wp-content/uploads/2025/01/cropped-v4-192x192.png` | 192×192 |
| Apple Touch Icon | `wp-content/uploads/2025/01/cropped-v4-180x180.png` | 180×180 |

### Decorative Shapes

| Asset | URL | Usage |
|---|---|---|
| main-slider-shape-1.png | `wp-content/uploads/2025/01/main-slider-shape-1.png` | Hero & section decorations (60×60) |
| about-one-shape-1.png | `wp-content/uploads/2025/01/about-one-shape-1.png` | About section decoration (198×175) |
| about-one-shape-4.png | `wp-content/uploads/2025/01/about-one-shape-4.png` | Multiple section decoration (70×70) |
| why-choose-one-shape-2.png | `wp-content/uploads/2025/01/why-choose-one-shape-2.png` | Why Choose section decoration (202×221) |
| site-footer-shape-2.png | `wp-content/uploads/2025/01/site-footer-shape-2.png` | Footer decoration (100×200) |

### Content Images

| Asset | URL | Dimensions | Used On |
|---|---|---|---|
| Feature 1 | `wp-content/uploads/2026/05/1.png` | 1024×1024 | Home Features (Global Expertise) |
| Feature 2 | `wp-content/uploads/2026/05/2.png` | 1024×1024 | Home About Section |
| Feature 3 | `wp-content/uploads/2026/05/3.png` | 1024×1024 | Home Features (Innovative Approach) |
| Feature 4 | `wp-content/uploads/2026/05/4.png` | 1024×1024 | Home Features (Customer-Centric) |
| Team/Office Photo 1 | `wp-content/uploads/2026/05/661167309_916418771210116_1619615474324981789_n.jpg` | 2048×1536 | Why Choose Us section |
| Team/Office Photo 2 | `wp-content/uploads/2026/05/615397688_853485264170134_2193055346309236117_n.jpg` | 2048×1536 | FAQ section |

---

## 10. Brand & Design Tokens

### Color Palette

| Usage | Color | Hex |
|---|---|---|
| Primary Accent / CTA | Red-Pink | `#F52549` |
| Hero Highlight BG | Red | `#FF4D4D` |
| Scrollbar Gradient Start | Red | `#F70504` |
| Scrollbar Gradient End | Red-Pink | `#F52549` |
| Dark Background | Near Black | `#1a1a2e` (approx.) |
| White Text | White | `#FFFFFF` |
| Body Background | White/Light Gray | `#FFFFFF` |

### Typography

| Font | Usage | Source |
|---|---|---|
| Inter Tight | Primary headings/body | Google Fonts (locally hosted) |
| Roboto | Secondary / body text | Google Fonts (locally hosted) |
| DM Sans | Header contact widget | Google Fonts (CDN) |

### Animations (Used in Original)

| Animation | CSS Class | Usage |
|---|---|---|
| Fade In Up | `fadeInUp` | Hero text, buttons, sections |
| Fade In | `fadeIn` | Features section |
| Zoom In | `zoomIn` | About image, decorative elements |
| Fade In Right | `fadeInRight` | About text section |
| Fade In Left | `fadeInLeft` | Division cards |

### Key External URLs

| Service | URL |
|---|---|
| Endow Travel (external) | `https://endowtravel.com/` |
| Endow Global Education (external) | `https://endowglobaledu.com/` |
| Endow Technologies (external) | `https://endowtech.net/` |
| WhatsApp Chat | `https://wa.link/2tzhly` |
| YouTube Channel | `https://www.youtube.com/@endowcorporation` |
| YouTube Intro Video | `https://www.youtube.com/embed/-BVtp86Ks9E` |

---

## Notes for Laravel Implementation

1. **Page Structure:** The site has 7 distinct pages — Home, About Us, 3 Division pages (Travel, Education, Technologies), Contact Us, and Get Consulting.
2. **Shared Layouts:** Header (top bar + navbar) and Footer are globally shared via Elementor templates. In Laravel, these become `layouts/app.blade.php`.
3. **Forms:** There are appointment/contact forms on almost every page. Consider a single reusable Blade component.
4. **Division Pages:** All 3 division pages share the same layout pattern (Hero → 6 Service Cards → Appointment Form). A single Blade template with dynamic data would work well.
5. **Responsive:** The current site uses 3 breakpoints — Desktop (1025+), Tablet (768-1024), Mobile (0-767).
6. **Current Platform:** WordPress 7.0.1 + Elementor 4.0.8 + Hello Elementor theme.
