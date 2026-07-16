@extends('layouts.app')

@section('title', 'Get Consulting – Endow Corporation')
@section('meta_title', 'Get Consulting – Endow Corporation')
@section('meta_description', 'Schedule a consultation with Endow Corporation. Expert consulting in travel, education, and technology to help your business succeed.')
@section('og_title', 'Get Consulting – Endow Corporation')
@section('og_description', 'Schedule a consultation with Endow Corporation. Expert consulting in travel, education, and technology.')

@section('content')

{{-- Hero --}}
<x-sections.hero title="Consultation" breadcrumb="Get Consulting" />

{{-- Features --}}
<x-sections.features
    label="FEATURES"
    heading='Why Choose <span class="text-gradient">Endow Corporation?</span>'
    :features="[
        ['icon' => 'fas fa-globe', 'title' => 'Global Expertise', 'description' => 'Delivering world-class solutions across industries with a global perspective and local expertise.'],
        ['icon' => 'fas fa-bullseye', 'title' => 'Innovative Approach', 'description' => 'Revolutionizing the way businesses operate with cutting-edge strategies and modern solutions.'],
        ['icon' => 'fas fa-users', 'title' => 'Customer-Centric', 'description' => 'Building lasting partnerships to drive success and deliver measurable results for our clients.'],
    ]"
/>

{{-- Appointment Form --}}
<x-sections.appointment-form
    label="BOOK NOW"
    heading='Book an <span class="text-gradient">Appointment</span>'
    description="Ready to take the next step? Let's connect! Whether you're looking for expert consulting in Travel, Education, or Technology, our team is here to help. Schedule an appointment today to discuss your needs and explore tailored solutions that drive success."
/>

@endsection
