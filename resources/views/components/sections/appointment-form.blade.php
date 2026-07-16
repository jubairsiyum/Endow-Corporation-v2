{{-- Appointment / Contact Form Section --}}
<section class="py-20 bg-surface-alt" {{ isset($id) ? "id={$id}" : '' }}>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            {{-- Left: Info --}}
            <div data-animate>
                <span class="section-label">{{ $label ?? 'BOOK NOW' }}</span>
                <h2 class="section-heading mb-6">
                    {!! $heading ?? 'Book an <span class="text-gradient">Appointment</span>' !!}
                </h2>
                <p class="text-text-light leading-relaxed mb-8">
                    {{ $description ?? '' }}
                </p>

                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone-alt text-primary"></i>
                        </div>
                        <div>
                            <p class="text-sm text-text-muted">Call us</p>
                            <a href="tel:0226322559" class="font-semibold text-dark hover:text-primary transition-colors">
                                02-2632-2559
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="far fa-envelope text-primary"></i>
                        </div>
                        <div>
                            <p class="text-sm text-text-muted">Email us</p>
                            <a href="mailto:contact@endowcorporation.com" class="font-semibold text-dark hover:text-primary transition-colors">
                                contact@endowcorporation.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
            <div class="card p-8" data-animate style="animation-delay: 0.2s">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700">
                        <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                    </div>
                @endif

                <form action="{{ $formAction ?? route('appointment.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="page" value="{{ request()->route()->getName() }}">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-dark mb-2">NAME *</label>
                            <input type="text" id="name" name="name" placeholder="John Smith" required
                                   value="{{ old('name') }}"
                                   class="input-field">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="service_type" class="block text-sm font-medium text-dark mb-2">SERVICE TYPE</label>
                            <select id="service_type" name="service_type" class="input-field">
                                <option value="">Select...</option>
                                <option value="Travel Services" {{ old('service_type') === 'Travel Services' ? 'selected' : '' }}>Travel Services</option>
                                <option value="Education Services" {{ old('service_type') === 'Education Services' ? 'selected' : '' }}>Education Services</option>
                                <option value="Custom Software Development" {{ old('service_type') === 'Custom Software Development' ? 'selected' : '' }}>Custom Software Development</option>
                            </select>
                            @error('service_type')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-dark mb-2">EMAIL *</label>
                            <input type="email" id="email" name="email" placeholder="e.g., john@example.com" required
                                   value="{{ old('email') }}"
                                   class="input-field">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-dark mb-2">PHONE NUMBER *</label>
                            <input type="tel" id="phone" name="phone" placeholder="+880" required
                                   value="{{ old('phone') }}"
                                   class="input-field">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-dark mb-2">MESSAGE (OPTIONAL)</label>
                        <textarea id="message" name="message" rows="4" placeholder="Type here..."
                                  class="input-field resize-none">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full">
                        <i class="fas fa-paper-plane mr-2"></i> Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
