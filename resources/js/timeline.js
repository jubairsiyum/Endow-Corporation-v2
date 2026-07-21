/**
 * Timeline — Progressive Scroll Reveal Animations
 * ===============================================
 *
 * Uses Intersection Observer for lightweight, performant scroll-triggered
 * animations. Each timeline item fades in and the center line's progress
 * overlay builds downward as items come into view.
 *
 * Features:
 *   - Item fade + slide-up on scroll into view
 *   - Center line progress fill
 *   - Dot pulse (CSS-driven after visible class is added)
 *   - Year badge pop (CSS keyframe on visible)
 *   - Connecting arm expand
 *
 * Respects prefers-reduced-motion.
 */

export function initTimeline() {
    const wrapper = document.querySelector('.timeline-wrapper');
    if (!wrapper) return;

    const items = wrapper.querySelectorAll('.timeline-item');
    const line = wrapper.querySelector('.timeline-line');
    if (!items.length || !line) return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ── Observer for items ──
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -60px 0px',
    };

    const itemObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('timeline-item--visible');
                itemObserver.unobserve(entry.target);
                updateLineProgress();
            }
        });
    }, observerOptions);

    items.forEach((item) => {
        if (prefersReducedMotion) {
            // Instant reveal
            item.style.opacity = '1';
            item.style.transform = 'none';
            item.classList.add('timeline-item--visible');
        } else {
            itemObserver.observe(item);
        }
    });

    // ── Line Progress: grows downward as items become visible ──
    function updateLineProgress() {
        const visibleItems = wrapper.querySelectorAll('.timeline-item--visible');
        const totalItems = items.length;
        if (totalItems === 0) return;

        const lastVisible = visibleItems[visibleItems.length - 1];
        if (!lastVisible) return;

        const wrapperRect = wrapper.getBoundingClientRect();
        const itemRect = lastVisible.getBoundingClientRect();

        // Calculate where the last visible item's dot sits relative to the wrapper
        const dotCenter = itemRect.top + 28 - wrapperRect.top; // top offset + approx dot position
        const wrapperHeight = wrapper.offsetHeight;

        let progressPercent = Math.min((dotCenter / wrapperHeight) * 100, 100);
        progressPercent = Math.max(progressPercent, 0);

        const pseudoEl = line.querySelector('::after');
        // We control ::after via CSS custom property since we can't style pseudo-elements directly in JS
        line.style.setProperty('--timeline-progress', `${progressPercent}%`);

        // Fallback: directly animate a child element or use the after height trick
        // Since we use ::after with transition on height, we update it via a child div approach
        // Let's use a real element instead — update the line approach
        const progressBar = line.querySelector('.timeline-line-progress');
        if (progressBar) {
            progressBar.style.height = `${progressPercent}%`;
        }
    }

    // ── Initial line progress for any items already visible on load ──
    // (handled by reduced-motion path + CSS transition)

    // ── Check visible items on scroll (for line progress after observer fires) ──
    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(() => {
                updateLineProgress();
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    // Initial update
    setTimeout(updateLineProgress, 100);
}

// ── Auto-initialize ──
if (typeof document !== 'undefined') {
    document.addEventListener('DOMContentLoaded', initTimeline);
    setTimeout(initTimeline, 30);
}
