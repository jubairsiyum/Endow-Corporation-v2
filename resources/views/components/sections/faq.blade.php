{{-- FAQ Section --}}
<section class="py-20 bg-white" {{ isset($id) ? "id={$id}" : '' }}>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            {{-- Left: FAQ --}}
            <div data-animate>
                <span class="section-label">{{ $label ?? 'FAQs' }}</span>
                <h2 class="section-heading mb-8">
                    {!! $heading ?? 'Frequently asked <span class="text-gradient">questions</span>' !!}
                </h2>

                <div class="space-y-4">
                    @foreach($faqs as $index => $faq)
                        <div class="faq-item border border-gray-200 rounded-xl overflow-hidden
                                    {{ $index === 0 ? 'faq-active' : '' }}">
                            <button class="faq-toggle w-full flex items-center justify-between px-6 py-4 text-left
                                           hover:bg-gray-50 transition-colors"
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                                <span class="font-semibold text-dark pr-4">{{ $faq['question'] }}</span>
                                <i class="fas fa-chevron-down text-primary transition-transform flex-shrink-0
                                          {{ $index === 0 ? 'rotate-180' : '' }}"></i>
                            </button>
                            <div class="faq-content px-6 {{ $index === 0 ? '' : 'hidden' }}">
                                <p class="text-text-light pb-4 leading-relaxed">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: Image --}}
            @if(isset($image))
                <div class="relative" data-animate style="animation-delay: 0.2s">
                    <div class="card overflow-hidden">
                        <img src="{{ asset($image) }}" alt="FAQ" class="w-full h-auto object-cover" loading="lazy">
                    </div>
                    {{-- Decorative Shape --}}
                    <div class="absolute -bottom-4 -right-4 w-20 h-20 opacity-20">
                        <img src="{{ asset('images/about-one-shape-4.png') }}" alt="" class="w-full h-full object-contain" loading="lazy">
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.querySelectorAll('.faq-toggle').forEach(toggle => {
        toggle.addEventListener('click', () => {
            const faqItem = toggle.closest('.faq-item');
            const content = faqItem.querySelector('.faq-content');
            const icon = toggle.querySelector('i');
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

            // Close all other FAQs
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.querySelector('.faq-content').classList.add('hidden');
                    item.querySelector('.faq-toggle').setAttribute('aria-expanded', 'false');
                    item.querySelector('i').classList.remove('rotate-180');
                    item.classList.remove('faq-active');
                }
            });

            // Toggle current FAQ
            content.classList.toggle('hidden');
            toggle.setAttribute('aria-expanded', !isExpanded);
            icon.classList.toggle('rotate-180');
            faqItem.classList.toggle('faq-active');
        });
    });
</script>
@endpush
