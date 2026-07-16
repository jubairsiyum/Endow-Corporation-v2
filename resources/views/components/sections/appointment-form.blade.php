{{-- Appointment / Contact Form Section --}}
<section class="py-24 md:py-32 gradient-mesh" {{ isset($id) ? "id={$id}" : '' }}>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Left: Info --}}
            <div data-animate>
                <span class="section-label">{{ $label ?? 'Book Now' }}</span>
                <h2 class="section-heading mb-6">
                    {!! $heading ?? 'Book an <span class="text-gradient">Appointment</span>' !!}
                </h2>
                <p class="text-text-secondary leading-relaxed mb-10 text-balance">
                    {{ $description ?? '' }}
                </p>

                <div class="space-y-5">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(255,41,87,0.1), rgba(255,41,87,0.05));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FF2957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-text-muted mb-0.5">Call us</p>
                            <a href="tel:0226322559" class="font-semibold text-dark hover:text-primary transition-colors">02-2632-2559</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, rgba(124,92,252,0.1), rgba(124,92,252,0.05));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7C5CFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-text-muted mb-0.5">Email us</p>
                            <a href="mailto:contact@endowcorporation.com" class="font-semibold text-dark hover:text-primary transition-colors">contact@endowcorporation.com</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
            <div data-animate style="animation-delay: 0.15s;">
                <div class="glass-card p-8 md:p-10">
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-2xl flex items-center gap-3" style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.15);">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background: rgba(16,185,129,0.15);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <p class="text-sm font-medium" style="color: #065f46;">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ $formAction ?? route('appointment.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <input type="hidden" name="page" value="{{ request()->route()->getName() }}">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-dark mb-2">Name *</label>
                                <input type="text" id="name" name="name" placeholder="John Smith" required value="{{ old('name') }}" class="input-field">
                                @error('name') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="service_type" class="block text-sm font-semibold text-dark mb-2">Service Type</label>
                                <select id="service_type" name="service_type" class="input-field">
                                    <option value="">Select...</option>
                                    <option value="Travel Services" {{ old('service_type') === 'Travel Services' ? 'selected' : '' }}>Travel Services</option>
                                    <option value="Education Services" {{ old('service_type') === 'Education Services' ? 'selected' : '' }}>Education Services</option>
                                    <option value="Technology Services" {{ old('service_type') === 'Technology Services' ? 'selected' : '' }}>Technology Services</option>
                                    <option value="Hospital Tourism" {{ old('service_type') === 'Hospital Tourism' ? 'selected' : '' }}>Hospital Tourism</option>
                                </select>
                                @error('service_type') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-sm font-semibold text-dark mb-2">Email *</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required value="{{ old('email') }}" class="input-field">
                                @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-dark mb-2">Phone *</label>
                                <input type="tel" id="phone" name="phone" placeholder="+880" required value="{{ old('phone') }}" class="input-field">
                                @error('phone') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-dark mb-2">Message (Optional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us about your needs..." class="input-field resize-none">{{ old('message') }}</textarea>
                            @error('message') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="btn-primary w-full py-4 text-base">
                            Submit Request
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
