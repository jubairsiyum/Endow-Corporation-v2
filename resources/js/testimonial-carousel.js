/**
 * Testimonial Carousel — 3-at-a-time, auto-advancing pages
 * =========================================================
 *
 * Desktop (>=992px): 3 cards per page
 * Tablet (768-991px): 2 cards per page
 * Mobile (<768px):    1 card per page
 *
 * Pages auto-rotate every 5s. Prev/Next arrows, dot indicators,
 * swipe, keyboard, pause-on-hover.
 */

export function initTestimonialCarousel() {
    const track = document.querySelector('.testimonial-track');
    if (!track) return;

    const cards = track.querySelectorAll('.testimonial-card-premium');
    const dotsContainer = document.querySelector('.testimonial-dots');
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    const container = track.parentElement;

    if (!cards.length) return;

    let currentPage = 0;
    let totalPages = 1;
    let cardsPerView = 3;
    let autoTimer = null;
    const interval = 5000;

    function getCardsPerView() {
        const w = window.innerWidth;
        if (w >= 992) return 3;
        if (w >= 768) return 2;
        return 1;
    }

    function buildDots() {
        if (!dotsContainer) return;
        dotsContainer.innerHTML = '';
        for (let i = 0; i < totalPages; i++) {
            const dot = document.createElement('button');
            dot.className = `testimonial-dot${i === 0 ? ' testimonial-dot--active' : ''}`;
            dot.setAttribute('data-index', i);
            dot.setAttribute('aria-label', `Go to page ${i + 1}`);
            dot.style.cssText = 'width:10px;height:10px;border-radius:50%;border:none;cursor:pointer;transition:all 0.3s ease;';
            dot.style.background = i === 0 ? 'var(--color-primary, #D4202C)' : 'rgba(0,0,0,0.15)';
            dot.addEventListener('click', () => { goTo(i); startAuto(); });
            dotsContainer.appendChild(dot);
        }
    }

    function updateDots() {
        const dots = dotsContainer?.querySelectorAll('.testimonial-dot');
        dots?.forEach((dot, i) => {
            dot.classList.toggle('testimonial-dot--active', i === currentPage);
            dot.style.background = i === currentPage
                ? 'var(--color-primary, #D4202C)'
                : 'rgba(0,0,0,0.15)';
        });
    }

    function recalc() {
        cardsPerView = getCardsPerView();
        totalPages = Math.ceil(cards.length / cardsPerView);
        currentPage = Math.min(currentPage, totalPages - 1);
        buildDots();
        goTo(currentPage);
    }

    function goTo(page) {
        if (page < 0 || page >= totalPages) return;
        currentPage = page;

        // Scroll the wrapper horizontally so the first card of this page is visible.
        // Cards are flex items; we translate by the offset of the first card on this page.
        const firstCardIndex = currentPage * cardsPerView;
        const firstCard = cards[firstCardIndex];
        if (!firstCard) return;

        const containerRect = container.getBoundingClientRect();
        const cardRect = firstCard.getBoundingClientRect();
        // Calculate how far the track needs to move so that firstCard aligns at the left
        const currentOffset = cardRect.left - containerRect.left;
        const trackCurrentTransform = parseFloat(track.style.transform?.replace(/[^\-0-9.]/g, '') || '0');
        const newOffset = trackCurrentTransform - currentOffset;

        track.style.transform = `translateX(${newOffset}px)`;
        track.style.transition = 'transform 0.5s cubic-bezier(0.22, 0.61, 0.36, 1)';

        updateDots();
    }

    function next() {
        goTo((currentPage + 1) % totalPages);
    }

    function prev() {
        goTo((currentPage - 1 + totalPages) % totalPages);
    }

    function startAuto() {
        stopAuto();
        autoTimer = setInterval(next, interval);
    }

    function stopAuto() {
        if (autoTimer) { clearInterval(autoTimer); autoTimer = null; }
    }

    // ── Controls ──
    prevBtn?.addEventListener('click', () => { prev(); startAuto(); });
    nextBtn?.addEventListener('click', () => { next(); startAuto(); });

    container?.addEventListener('mouseenter', stopAuto);
    container?.addEventListener('mouseleave', startAuto);

    // ── Touch / swipe ──
    let touchStartX = 0;
    container?.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    container?.addEventListener('touchend', (e) => {
        const diff = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) next();
            else prev();
            startAuto();
        }
    });

    // ── Keyboard ──
    document.addEventListener('keydown', (e) => {
        const rect = container?.getBoundingClientRect();
        if (!rect || rect.bottom < 0 || rect.top > window.innerHeight) return;
        if (e.key === 'ArrowRight') { next(); startAuto(); }
        if (e.key === 'ArrowLeft') { prev(); startAuto(); }
    });

    // ── Responsive rebuild ──
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(recalc, 250);
    }, { passive: true });

    // ── Start ──
    recalc();
    startAuto();
}

// Auto-init
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTestimonialCarousel);
} else {
    setTimeout(initTestimonialCarousel, 20);
}
