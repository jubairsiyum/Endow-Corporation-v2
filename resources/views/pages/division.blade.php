@extends('layouts.app')

@section('title', $division['name'] . ' – Endow Corporation')
@section('meta_title', $division['name'] . ' – Endow Corporation')
@section('meta_description', $division['meta_description'])
@section('og_title', $division['name'] . ' – Endow Corporation')
@section('og_description', $division['meta_description'])

@section('content')

{{-- Hero --}}
<x-sections.hero
    title="{{ $division['name'] }}"
    breadcrumb="{{ $division['name'] }}"
    tagline="{{ $division['tagline'] }}"
/>

{{-- Services --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <span class="section-label">FEATURED SERVICES</span>
            <h2 class="section-heading">Our <span class="text-gradient">Services</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($division['services'] as $index => $service)
                <x-sections.service-card
                    :index="$index"
                    :title="$service['title']"
                    :description="$service['description']"
                    :icon="$service['icon'] ?? null"
                    :link="$service['link'] ?? null"
                    link-text="Learn More"
                    :delay="($index * 0.1) . 's'"
                />
            @endforeach
        </div>
    </div>
</section>

{{-- Extra CTA (for Technology division) --}}
@if(isset($division['cta']))
    <x-sections.cta-banner
        heading="{{ $division['cta']['heading'] }}"
        description="{{ $division['cta']['description'] }}"
        cta-url="{{ $division['cta']['url'] }}"
        cta-text="{{ $division['cta']['text'] }}"
    />
@endif

{{-- Appointment Form --}}
<x-sections.appointment-form
    label="BOOK NOW"
    heading='Book an <span class="text-gradient">Appointment</span>'
    description="{{ $appointment_text }}"
/>

@endsection
