/**
 * ScrollStack — Card Stacking via GSAP ScrollTrigger
 * ============================================================
 *
 * All cards are absolutely positioned in the SAME spot, overlapping.
 * The viewport is pinned and centered on screen. As the user scrolls,
 * the INCOMING card slides UP from below and COVERS the current card.
 * The outgoing card stays in place and subtly recedes (scales down).
 *
 * This "cover" transition means you only ever see ONE full card
 * plus the incoming card sliding over it — no split screen, no
 * ghost overlap, no crossfade artifacts.
 *
 * Desktop (>=992px): Full pinned stack with GSAP scroll-driven timeline
 * Tablet (768-991px):  Same, with reduced motion
 * Mobile (<768px):    No pinning, IntersectionObserver fade-up
 *
 * Respects prefers-reduced-motion.
 * Dependencies: gsap, gsap/ScrollTrigger
 */

import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initScrollStacks() {
    // ── Respect reduced motion ──
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        initMobileFallback();
        return;
    }

    const stacks = document.querySelectorAll('[data-scroll-stack]');
    if (!stacks.length) return;

    const allScrollTriggers = [];

    function getDeviceTier() {
        const w = window.innerWidth;
        if (w >= 992) return 'desktop';
        if (w >= 768) return 'tablet';
        return 'mobile';
    }

    function mountStack(stack) {
        const cards = Array.from(stack.querySelectorAll('.scroll-stack-card'));
        const cardCount = cards.length;
        if (cardCount < 2) return;

        const deviceTier = getDeviceTier();
        if (deviceTier === 'mobile') return;

        const stackId = stack.getAttribute('data-scroll-stack');

        // ── Set initial state ──
        // Card 0: visible, in place, on top initially
        // All others: parked BELOW the viewport (yPercent: 100), hidden beneath card 0
        cards.forEach((card, i) => {
            gsap.set(card, {
                yPercent: i === 0 ? 0 : 100,
                scale: 1,
                opacity: 1,
                zIndex: i === 0 ? cardCount : 1,
                transformOrigin: 'center center',
                force3D: true,
            });
            card.style.willChange = 'transform';

            if (i === 0) {
                card.classList.add('scroll-stack-card--active');
            } else {
                card.classList.remove('scroll-stack-card--active');
            }
        });

        // ── Pin duration ──
        const vh = window.innerHeight;
        const scrollPerCard = vh * 0.65;
        const transitions = cardCount - 1;
        const totalScroll = Math.max(transitions, 1) * scrollPerCard;

        // ── Build timeline ──
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: stack,
                start: 'center center',
                end: `+=${totalScroll}`,
                pin: true,
                pinSpacing: true,
                scrub: 0.8,
                anticipatePin: 1,
                id: `${stackId}-pin`,
                onUpdate: (self) => {
                    const progress = self.progress;
                    const activeIndex = Math.min(
                        Math.floor(progress * transitions + 0.5),
                        cardCount - 1
                    );
                    cards.forEach((card, i) => {
                        card.classList.toggle('scroll-stack-card--active', i === activeIndex);
                    });
                },
            },
            defaults: { ease: 'power2.inOut' },
        });

        // ── Build transition segments ──
        // "COVER" pattern:
        //   - Outgoing card STAYS IN PLACE but scales down slightly + fades a bit
        //     (it recedes visually, like being pushed back in a stack)
        //   - Incoming card slides UP from below (yPercent 100 → 0) and COVERS it
        //   - Incoming card always has HIGHER z-index → it covers the outgoing card
        //   - You only ever see: the full outgoing card + incoming card sliding over it
        //   - NO split screen, NO crossfade overlap, clean cover transition
        const seg = transitions > 0 ? 1 / transitions : 1;

        for (let i = 0; i < transitions; i++) {
            const pos = i * seg;

            // Give incoming card the HIGHEST z-index so it covers everything below
            tl.set(cards[i + 1], { zIndex: cardCount + i + 10 }, pos);

            // Outgoing card: stay in place, scale down slightly, fade a bit
            // (it peeks out from behind the incoming card during transition, giving depth)
            tl.to(cards[i], {
                scale: 0.92,
                opacity: 0.5,
                duration: seg,
                ease: 'power2.in',
            }, pos);

            // Incoming card: slide UP from below, covering the outgoing card
            tl.fromTo(cards[i + 1],
                { yPercent: 100, scale: 1, opacity: 1 },
                { yPercent: 0, scale: 1, opacity: 1, duration: seg, ease: 'power2.out' },
                pos
            );
        }

        allScrollTriggers.push(tl.scrollTrigger);
    }

    function initMobileFallback() {
        const cards = document.querySelectorAll('.scroll-stack-card');
        if (!cards.length) return;

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('scroll-stack-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.1, rootMargin: '0px 0px -20px 0px' }
        );
        cards.forEach(card => observer.observe(card));
    }

    function destroyAll() {
        allScrollTriggers.forEach(t => t.kill());
        allScrollTriggers.length = 0;

        stacks.forEach(stack => {
            const cards = stack.querySelectorAll('.scroll-stack-card');
            cards.forEach(card => {
                gsap.set(card, { clearProps: 'all' });
                card.style.willChange = '';
                card.classList.remove('scroll-stack-card--active');
            });
        });
    }

    // ── Mount ──
    stacks.forEach(stack => mountStack(stack));
    initMobileFallback();

    // ── Responsive rebuild ──
    let lastTier = getDeviceTier();
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            const newTier = getDeviceTier();
            if (newTier !== lastTier) {
                destroyAll();
                lastTier = newTier;
                if (newTier === 'mobile') {
                    initMobileFallback();
                } else {
                    stacks.forEach(stack => mountStack(stack));
                }
            }
            ScrollTrigger.refresh();
        }, 300);
    }, { passive: true });

    window.addEventListener('load', () => ScrollTrigger.refresh(), { once: true });
}

// Auto-init
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initScrollStacks);
} else {
    setTimeout(initScrollStacks, 10);
}
