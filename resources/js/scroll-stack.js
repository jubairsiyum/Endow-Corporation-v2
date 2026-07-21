/**
 * ScrollStack — True Card Stacking via GSAP ScrollTrigger
 * ============================================================
 *
 * Cards are anchored to the bottom of the viewport. As you scroll,
 * the active card shrinks and moves UP (transform-origin: top),
 * while the next card slides UP from below to cover it.
 * This creates a perfect "deck of cards" stacking effect where
 * older cards peek out from the top.
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
    // ── Module-level refs for cleanup ──
    const allScrollTriggers = [];
    let mobileObserver = null;

    // ── Respect reduced motion ──
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        initMobileFallback();
        return;
    }

    const stacks = document.querySelectorAll('[data-scroll-stack]');
    if (!stacks.length) return;

    function getDeviceTier() {
        const w = window.innerWidth;
        if (w >= 992) return 'desktop';
        if (w >= 768) return 'tablet';
        return 'mobile'; // <768
    }

    function mountStack(stack) {
        const cards = Array.from(stack.querySelectorAll('.scroll-stack-card'));
        const cardCount = cards.length;
        if (cardCount < 2) return;

        const deviceTier = getDeviceTier();
        if (deviceTier === 'mobile') return;

        const stackId = stack.getAttribute('data-scroll-stack');
        
        // ── Visual Parameters ──
        const isDesktop = deviceTier === 'desktop';
        const scaleStep = isDesktop ? 0.015 : 0.01;
        const yStep = isDesktop ? 15 : 10;

        // ── Clear any residual mobile styles first ──
        cards.forEach((card) => {
            card.classList.remove('scroll-stack-visible');
        });

        // ── Set initial state ──
        cards.forEach((card, i) => {
            gsap.set(card, {
                yPercent: i === 0 ? 0 : 100,
                y: 0,
                scale: 1,
                opacity: 1,
                zIndex: i === 0 ? cardCount : 1,
                transformOrigin: 'center top',
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
        const scrollPerCard = vh * 0.7;
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
            // We use 'none' for linear tracking with scrub, looks best for true stack
            defaults: { ease: 'none' },
        });

        const seg = transitions > 0 ? 1 / transitions : 1;

        for (let i = 0; i < transitions; i++) {
            const pos = i * seg;

            // Incoming card: gets highest zIndex, slides up from bottom
            tl.set(cards[i + 1], { zIndex: cardCount + i + 10 }, pos);
            tl.fromTo(cards[i + 1],
                { yPercent: 100, scale: 1, y: 0 },
                { yPercent: 0, scale: 1, y: 0, duration: seg, ease: 'power2.out' },
                pos
            );

            // All previously active cards (0 to i) move deeper into the stack
            for (let j = 0; j <= i; j++) {
                const currentDepth = i - j;
                const nextDepth = currentDepth + 1;
                
                tl.to(cards[j], {
                    scale: 1 - (nextDepth * scaleStep),
                    y: -(nextDepth * yStep),
                    duration: seg,
                    ease: 'power2.out',
                }, pos);
            }
        }

        allScrollTriggers.push(tl.scrollTrigger);
    }

    function initMobileFallback() {
        // Disconnect previous observer to avoid leaks
        if (mobileObserver) {
            mobileObserver.disconnect();
            mobileObserver = null;
        }

        const mobileStacks = document.querySelectorAll('[data-scroll-stack]');
        if (!mobileStacks.length) return;

        mobileObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('scroll-stack-visible');
                        mobileObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.06, rootMargin: '0px 0px -50px 0px' }
        );

        mobileStacks.forEach(stack => {
            const cards = stack.querySelectorAll('.scroll-stack-card');
            cards.forEach(card => {
                // Ensure card starts hidden for the fade-up effect
                card.classList.remove('scroll-stack-visible', 'scroll-stack-card--active');
                // Observe
                mobileObserver.observe(card);
            });
        });
    }

    function destroyAll() {
        // Kill all GSAP ScrollTriggers
        allScrollTriggers.forEach(t => t.kill());
        allScrollTriggers.length = 0;

        // Disconnect mobile observer
        if (mobileObserver) {
            mobileObserver.disconnect();
            mobileObserver = null;
        }

        // Clean up all cards: clear GSAP inline styles, reset classes
        const allStacks = document.querySelectorAll('[data-scroll-stack]');
        allStacks.forEach(stack => {
            const cards = stack.querySelectorAll('.scroll-stack-card');
            cards.forEach(card => {
                gsap.set(card, { clearProps: 'all' });
                card.style.willChange = '';
                card.classList.remove('scroll-stack-card--active', 'scroll-stack-visible');
            });
        });
    }

    // ── Mount ──
    const initialStacks = document.querySelectorAll('[data-scroll-stack]');
    initialStacks.forEach(stack => mountStack(stack));
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
                    const activeStacks = document.querySelectorAll('[data-scroll-stack]');
                    activeStacks.forEach(stack => mountStack(stack));
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
