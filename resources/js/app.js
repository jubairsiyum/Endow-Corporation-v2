// ── Scroll Stack — GSAP ScrollTrigger Card Stacking ──
import './scroll-stack.js';

// ── Premium Services Section — Spotlight + Entrance ──
(function () {
    const cards = document.querySelectorAll('.service-card-v3');
    if (!cards.length) return;

    // Cursor-following spotlight
    cards.forEach(card => {
        const spotlight = card.querySelector('.service-spotlight');
        if (!spotlight) return;

        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            spotlight.style.opacity = '1';
            spotlight.style.background = `radial-gradient(circle 200px at ${x}% ${y}%, rgba(212,32,44,0.12) 0%, transparent 70%)`;
        });

        card.addEventListener('mouseleave', () => {
            spotlight.style.opacity = '0';
        });
    });

    // Staggered entrance — Intersection Observer
    const observerOptions = { threshold: 0.15, rootMargin: '0px 0px -40px 0px' };

    const entranceObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('service-card-visible');
                entranceObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    cards.forEach(card => entranceObserver.observe(card));
})();

// ── Premium Hero Carousel ──
// Spring-eased vertical transitions, pill progress indicators, staggered text reveals
(function () {
    const carousel = document.getElementById('hero-carousel');
    if (!carousel) return;

    const slides = carousel.querySelectorAll('.hero-slide');
    const pills = carousel.querySelectorAll('.hero-pill');
    const scrollGroup = carousel.querySelector('.hero-scroll-group');
    const totalSlides = slides.length;
    let currentIndex = 0;
    let autoPlayTimer = null;
    let progressTimer = null;
    let isTransitioning = false;
    const autoPlayDelay = 5000;
    const transitionDuration = 800; // ms — matches CSS easing

    // Respect reduced motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function lockTransition() {
        isTransitioning = true;
        setTimeout(() => { isTransitioning = false; }, transitionDuration + 50);
    }

    // Animate pill progress bar
    function startPillProgress(pill) {
        const progressBar = pill.querySelector('.hero-pill-progress');
        if (!progressBar) return;
        // Reset
        progressBar.style.transition = 'none';
        progressBar.style.width = '0%';
        // Force reflow
        progressBar.offsetHeight;
        // Animate
        if (prefersReducedMotion) {
            progressBar.style.transition = 'width 5s linear';
        } else {
            progressBar.style.transition = 'width 5s linear';
        }
        progressBar.style.width = '100%';
    }

    function resetPillProgress(pill) {
        const progressBar = pill.querySelector('.hero-pill-progress');
        if (!progressBar) return;
        progressBar.style.transition = 'none';
        progressBar.style.width = '0%';
    }

    function clearAllPillProgress() {
        pills.forEach(p => {
            const bar = p.querySelector('.hero-pill-progress');
            if (bar) { bar.style.transition = 'none'; bar.style.width = '0%'; }
        });
    }

    function goToSlide(index) {
        if (isTransitioning || index === currentIndex || index < 0 || index >= totalSlides) return;
        lockTransition();

        const outgoingSlide = slides[currentIndex];
        const incomingSlide = slides[index];

        // Remove visible class from outgoing
        outgoingSlide.classList.remove('hero-slide-visible');

        // Animate outgoing: slide up and fade
        outgoingSlide.style.transition = `transform ${transitionDuration}ms cubic-bezier(0.22, 0.61, 0.36, 1), opacity ${transitionDuration * 0.6}ms ease-out`;
        outgoingSlide.style.transform = 'translateY(-100%)';
        outgoingSlide.style.opacity = '0';
        outgoingSlide.style.pointerEvents = 'none';
        outgoingSlide.style.zIndex = '1';

        // Animate incoming: from bottom to center
        incomingSlide.style.transition = `transform ${transitionDuration}ms cubic-bezier(0.22, 0.61, 0.36, 1), opacity ${transitionDuration * 0.6}ms ease-out ${transitionDuration * 0.2}ms`;
        incomingSlide.style.transform = 'translateY(0)';
        incomingSlide.style.opacity = '1';
        incomingSlide.style.pointerEvents = 'auto';
        incomingSlide.style.zIndex = '2';

        // After transition completes, clean up and add visible class for text animations
        setTimeout(() => {
            // Reset outgoing slide position for next cycle (will come from bottom)
            outgoingSlide.style.transition = 'none';
            outgoingSlide.style.transform = 'translateY(100%)';

            // Add visible class to incoming for text stagger animations
            incomingSlide.classList.add('hero-slide-visible');
        }, transitionDuration);

        // Update pills
        updatePills(index);

        // Hide scroll indicator on non-first slides
        if (scrollGroup) {
            if (index === 0) {
                scrollGroup.classList.remove('hero-scroll-hidden');
            } else {
                scrollGroup.classList.add('hero-scroll-hidden');
            }
        }

        // Reset and start progress on new pill
        clearAllPillProgress();
        startPillProgress(pills[index]);

        currentIndex = index;
    }

    function updatePills(activeIndex) {
        pills.forEach((pill, i) => {
            if (i === activeIndex) {
                pill.style.width = '32px';
                pill.style.background = 'var(--color-primary)';
            } else {
                pill.style.width = '8px';
                pill.style.background = 'rgba(255,255,255,0.25)';
            }
        });
    }

    function nextSlide() {
        const next = (currentIndex + 1) % totalSlides;
        goToSlide(next);
    }

    // Pill clicks
    pills.forEach(pill => {
        pill.addEventListener('click', () => {
            const index = parseInt(pill.getAttribute('data-index'), 10);
            goToSlide(index);
            resetAutoPlay();
        });
    });

    // Auto-play
    function startAutoPlay() {
        stopAutoPlay();
        autoPlayTimer = setInterval(nextSlide, autoPlayDelay);
        // Start progress on current pill
        startPillProgress(pills[currentIndex]);
    }

    function stopAutoPlay() {
        if (autoPlayTimer) {
            clearInterval(autoPlayTimer);
            autoPlayTimer = null;
        }
        clearAllPillProgress();
    }

    function resetAutoPlay() {
        stopAutoPlay();
        startAutoPlay();
    }

    // Pause on hover
    carousel.addEventListener('mouseenter', () => {
        stopAutoPlay();
    });
    carousel.addEventListener('mouseleave', () => {
        startAutoPlay();
    });

    // Touch / swipe
    let touchStartY = 0;
    carousel.addEventListener('touchstart', (e) => {
        touchStartY = e.changedTouches[0].screenY;
    }, { passive: true });

    carousel.addEventListener('touchend', (e) => {
        const touchEndY = e.changedTouches[0].screenY;
        const diff = touchStartY - touchEndY;
        if (Math.abs(diff) > 60) {
            if (diff > 0) {
                nextSlide();
            } else {
                const prev = (currentIndex - 1 + totalSlides) % totalSlides;
                goToSlide(prev);
            }
            resetAutoPlay();
        }
    });

    // Keyboard
    document.addEventListener('keydown', (e) => {
        const rect = carousel.getBoundingClientRect();
        const isVisible = rect.bottom > 0 && rect.top < window.innerHeight;
        if (!isVisible) return;
        if (e.key === 'ArrowDown' || e.key === 'ArrowRight') {
            e.preventDefault();
            nextSlide();
            resetAutoPlay();
        } else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') {
            e.preventDefault();
            const prev = (currentIndex - 1 + totalSlides) % totalSlides;
            goToSlide(prev);
            resetAutoPlay();
        }
    });

    // Mouse position tracking for glow effect on primary buttons
    document.querySelectorAll('.hero-btn-primary').forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            btn.style.setProperty('--mouse-x', x + '%');
            btn.style.setProperty('--mouse-y', y + '%');
        });
    });

    // Initialize
    slides[0].classList.add('hero-slide-visible');
    startAutoPlay();

    // Page load: subtle scale-in for hero background
    if (!prefersReducedMotion) {
        const bgCanvas = carousel.querySelector('.hero-bg-canvas');
        if (bgCanvas) {
            bgCanvas.style.transform = 'scale(1.03)';
            bgCanvas.style.transition = 'transform 1.2s cubic-bezier(0.22, 0.61, 0.36, 1)';
            requestAnimationFrame(() => {
                bgCanvas.style.transform = 'scale(1)';
            });
        }

        // Navbar fade-down on load (header starts at translateY(-10px) if we add the style)
        const header = document.getElementById('main-header');
        if (header) {
            header.style.opacity = '0';
            header.style.transform = 'translateY(-10px)';
            header.style.transition = 'opacity 0.6s ease-out 0.1s, transform 0.6s cubic-bezier(0.22, 0.61, 0.36, 1) 0.1s';
            requestAnimationFrame(() => {
                header.style.opacity = '1';
                header.style.transform = 'translateY(0)';
            });
        }
    }
})();
