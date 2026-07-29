/**
 * DomeGallery — Vanilla JS 3D Spherical Image Gallery
 * No dependencies required. Drop-in replacement for the React Bits DomeGallery.
 */
class DomeGallery {
  static DEFAULTS = {
    maxVerticalRotationDeg: 5,
    dragSensitivity: 20,
    enlargeTransitionMs: 300,
    segments: 35,
    dragDampening: 2,
    openedImageWidth: '250px',
    openedImageHeight: '350px',
    imageBorderRadius: '30px',
    openedImageBorderRadius: '30px',
    grayscale: false,
    fit: 0.5,
    fitBasis: 'auto',
    minRadius: 600,
    maxRadius: Infinity,
    padFactor: 0.25,
    overlayBlurColor: '#0a0a0a',
  };

  constructor(container, images = [], options = {}) {
    this.container = container;
    this.options = { ...DomeGallery.DEFAULTS, ...options };
    this.images = images.length > 0 ? images : this._defaultImages();
    this.rotation = { x: 0, y: 0 };
    this.dragging = false;
    this.moved = false;
    this.startRot = { x: 0, y: 0 };
    this.startPos = null;
    this.inertiaRAF = null;
    this.opening = false;
    this.openStartedAt = 0;
    this.lastDragEndAt = 0;
    this.scrollLocked = false;
    this.focusedEl = null;
    this.originalTilePos = null;
    this.lockedRadius = null;

    this._build();
    this._bindEvents();
    this._observeResize();
  }

  _defaultImages() {
    return [
      'https://images.unsplash.com/photo-1755331039789-7e5680e26e8f?q=80&w=774&auto=format&fit=crop',
      'https://images.unsplash.com/photo-1755569309049-98410b94f66d?q=80&w=772&auto=format&fit=crop',
      'https://images.unsplash.com/photo-1755497595318-7e5e3523854f?q=80&w=774&auto=format&fit=crop',
      'https://images.unsplash.com/photo-1755353985163-c2a0fe5ac3d8?q=80&w=774&auto=format&fit=crop',
      'https://images.unsplash.com/photo-1745965976680-d00be7dc0377?q=80&w=774&auto=format&fit=crop',
    ];
  }

  /* ------------------------------------------------------------------ */
  /*  Helpers                                                            */
  /* ------------------------------------------------------------------ */

  _clamp(v, min, max) { return Math.min(Math.max(v, min), max); }
  _normalizeAngle(d) { return ((d % 360) + 360) % 360; }
  _wrapAngleSigned(deg) {
    const a = (((deg + 180) % 360) + 360) % 360;
    return a - 180;
  }
  _getDataNumber(el, name, fallback) {
    const val = el.dataset[name];
    const n = val == null ? NaN : parseFloat(val);
    return Number.isFinite(n) ? n : fallback;
  }

  /* ------------------------------------------------------------------ */
  /*  Build items grid                                                   */
  /* ------------------------------------------------------------------ */

  _buildItems() {
    const seg = this.options.segments;
    const pool = this.images;
    const xCols = Array.from({ length: seg }, (_, i) => -37 + i * 2);
    const evenYs = [-4, -2, 0, 2, 4];
    const oddYs = [-3, -1, 1, 3, 5];

    const coords = xCols.flatMap((x, c) => {
      const ys = c % 2 === 0 ? evenYs : oddYs;
      return ys.map(y => ({ x, y, sizeX: 2, sizeY: 2 }));
    });

    const totalSlots = coords.length;
    if (pool.length === 0) {
      return coords.map(c => ({ ...c, src: '', alt: '' }));
    }

    const normalized = pool.map(img => {
      if (typeof img === 'string') return { src: img, alt: '' };
      return { src: img.src || '', alt: img.alt || '' };
    });

    const used = Array.from({ length: totalSlots }, (_, i) => normalized[i % normalized.length]);

    // Deduplicate adjacent tiles
    for (let i = 1; i < used.length; i++) {
      if (used[i].src === used[i - 1].src) {
        for (let j = i + 1; j < used.length; j++) {
          if (used[j].src !== used[i].src) {
            const tmp = used[i];
            used[i] = used[j];
            used[j] = tmp;
            break;
          }
        }
      }
    }

    return coords.map((c, i) => ({
      ...c,
      src: used[i].src,
      alt: used[i].alt,
    }));
  }

  _computeItemBaseRotation(offsetX, offsetY, sizeX, sizeY) {
    const unit = 360 / this.options.segments / 2;
    const rotateY = unit * (offsetX + (sizeX - 1) / 2);
    const rotateX = unit * (offsetY - (sizeY - 1) / 2);
    return { rotateX, rotateY };
  }

  /* ------------------------------------------------------------------ */
  /*  Build DOM                                                          */
  /* ------------------------------------------------------------------ */

  _build() {
    this.container.classList.add('dg-root');
    this.container.style.setProperty('--dg-segments-x', this.options.segments);
    this.container.style.setProperty('--dg-segments-y', this.options.segments);

    this.items = this._buildItems();

    this.container.innerHTML = `
      <main class="dg-main">
        <div class="dg-stage">
          <div class="dg-sphere">
            ${this.items.map((it, i) => `
              <div class="dg-item"
                   data-src="${it.src}"
                   data-offset-x="${it.x}"
                   data-offset-y="${it.y}"
                   data-size-x="${it.sizeX}"
                   data-size-y="${it.sizeY}"
                   style="--dg-offset-x:${it.x};--dg-offset-y:${it.y};--dg-item-size-x:${it.sizeX};--dg-item-size-y:${it.sizeY};">
                <div class="dg-item__image" role="button" tabindex="0" aria-label="${it.alt || 'Open image'}">
                  <img src="${it.src}" draggable="false" alt="${it.alt || ''}" />
                </div>
              </div>
            `).join('')}
          </div>
        </div>
        <div class="dg-overlay"></div>
        <div class="dg-overlay dg-overlay--blur"></div>
        <div class="dg-edge-fade dg-edge-fade--top"></div>
        <div class="dg-edge-fade dg-edge-fade--bottom"></div>
        <div class="dg-viewer">
          <div class="dg-scrim"></div>
          <div class="dg-frame"></div>
        </div>
      </main>
    `;

    this.mainEl = this.container.querySelector('.dg-main');
    this.sphereEl = this.container.querySelector('.dg-sphere');
    this.frameEl = this.container.querySelector('.dg-frame');
    this.viewerEl = this.container.querySelector('.dg-viewer');
    this.scrimEl = this.container.querySelector('.dg-scrim');
  }

  /* ------------------------------------------------------------------ */
  /*  Apply transform                                                    */
  /* ------------------------------------------------------------------ */

  _applyTransform(xDeg, yDeg) {
    if (this.sphereEl) {
      this.sphereEl.style.transform =
        `translateZ(calc(var(--dg-radius) * -1)) rotateX(${xDeg}deg) rotateY(${yDeg}deg)`;
    }
  }

  /* ------------------------------------------------------------------ */
  /*  Resize observer                                                    */
  /* ------------------------------------------------------------------ */

  _observeResize() {
    const updateSize = () => {
      const cr = this.container.getBoundingClientRect();
      const w = Math.max(1, cr.width),
        h = Math.max(1, cr.height);
      const minDim = Math.min(w, h),
        maxDim = Math.max(w, h),
        aspect = w / h;
      let basis;
      switch (this.options.fitBasis) {
        case 'min': basis = minDim; break;
        case 'max': basis = maxDim; break;
        case 'width': basis = w; break;
        case 'height': basis = h; break;
        default: basis = aspect >= 1.3 ? w : minDim;
      }
      let radius = basis * this.options.fit;
      const heightGuard = h * 1.35;
      radius = Math.min(radius, heightGuard);
      radius = this._clamp(radius, this.options.minRadius, this.options.maxRadius);
      this.lockedRadius = Math.round(radius);

      const viewerPad = Math.max(8, Math.round(minDim * this.options.padFactor));
      this.container.style.setProperty('--dg-radius', `${this.lockedRadius}px`);
      this.container.style.setProperty('--dg-viewer-pad', `${viewerPad}px`);
      this.container.style.setProperty('--dg-overlay-blur-color', this.options.overlayBlurColor);
      this.container.style.setProperty('--dg-tile-radius', this.options.imageBorderRadius);
      this.container.style.setProperty('--dg-enlarge-radius', this.options.openedImageBorderRadius);
      this.container.style.setProperty('--dg-image-filter', this.options.grayscale ? 'grayscale(1)' : 'none');

      this._applyTransform(this.rotation.x, this.rotation.y);

      // Reposition enlarge overlay if open
      const enlarged = this.viewerEl.querySelector('.dg-enlarge');
      if (enlarged && this.frameEl && this.mainEl) {
        const frameR = this.frameEl.getBoundingClientRect();
        const mainR = this.mainEl.getBoundingClientRect();
        if (this.options.openedImageWidth && this.options.openedImageHeight) {
          const tempDiv = document.createElement('div');
          tempDiv.style.cssText = `position:absolute;width:${this.options.openedImageWidth};height:${this.options.openedImageHeight};visibility:hidden;`;
          document.body.appendChild(tempDiv);
          const tempR = tempDiv.getBoundingClientRect();
          document.body.removeChild(tempDiv);
          enlarged.style.left = `${frameR.left - mainR.left + (frameR.width - tempR.width) / 2}px`;
          enlarged.style.top = `${frameR.top - mainR.top + (frameR.height - tempR.height) / 2}px`;
        } else {
          enlarged.style.left = `${frameR.left - mainR.left}px`;
          enlarged.style.top = `${frameR.top - mainR.top}px`;
          enlarged.style.width = `${frameR.width}px`;
          enlarged.style.height = `${frameR.height}px`;
        }
      }
    };

    if (window.ResizeObserver) {
      this._ro = new ResizeObserver(() => updateSize());
      this._ro.observe(this.container);
    }
    // Initial call
    updateSize();
  }

  /* ------------------------------------------------------------------ */
  /*  Inertia                                                            */
  /* ------------------------------------------------------------------ */

  _stopInertia() {
    if (this.inertiaRAF) {
      cancelAnimationFrame(this.inertiaRAF);
      this.inertiaRAF = null;
    }
  }

  _startInertia(vx, vy) {
    const MAX_V = 1.4;
    let vX = this._clamp(vx, -MAX_V, MAX_V) * 80;
    let vY = this._clamp(vy, -MAX_V, MAX_V) * 80;
    let frames = 0;
    const d = this._clamp(this.options.dragDampening, 0, 1);
    const frictionMul = 0.94 + 0.055 * d;
    const stopThreshold = 0.015 - 0.01 * d;
    const maxFrames = Math.round(90 + 270 * d);
    const step = () => {
      vX *= frictionMul;
      vY *= frictionMul;
      if (Math.abs(vX) < stopThreshold && Math.abs(vY) < stopThreshold) {
        this.inertiaRAF = null;
        return;
      }
      if (++frames > maxFrames) {
        this.inertiaRAF = null;
        return;
      }
      const nextX = this._clamp(
        this.rotation.x - vY / 200,
        -this.options.maxVerticalRotationDeg,
        this.options.maxVerticalRotationDeg
      );
      const nextY = this._wrapAngleSigned(this.rotation.y + vX / 200);
      this.rotation = { x: nextX, y: nextY };
      this._applyTransform(nextX, nextY);
      this.inertiaRAF = requestAnimationFrame(step);
    };
    this._stopInertia();
    this.inertiaRAF = requestAnimationFrame(step);
  }

  /* ------------------------------------------------------------------ */
  /*  Scroll lock                                                        */
  /* ------------------------------------------------------------------ */

  _lockScroll() {
    if (this.scrollLocked) return;
    this.scrollLocked = true;
    document.body.classList.add('dg-scroll-lock');
  }

  _unlockScroll() {
    if (!this.scrollLocked) return;
    if (this.container.getAttribute('data-enlarging') === 'true') return;
    this.scrollLocked = false;
    document.body.classList.remove('dg-scroll-lock');
  }

  /* ------------------------------------------------------------------ */
  /*  Open / Close enlarged image                                        */
  /* ------------------------------------------------------------------ */

  _openItem(el) {
    if (this.opening) return;
    this.opening = true;
    this.openStartedAt = performance.now();
    this._lockScroll();

    const parent = el.parentElement;
    this.focusedEl = el;
    el.setAttribute('data-focused', 'true');

    const offsetX = this._getDataNumber(parent, 'offsetX', 0);
    const offsetY = this._getDataNumber(parent, 'offsetY', 0);
    const sizeX = this._getDataNumber(parent, 'sizeX', 2);
    const sizeY = this._getDataNumber(parent, 'sizeY', 2);
    const parentRot = this._computeItemBaseRotation(offsetX, offsetY, sizeX, sizeY);
    const parentY = this._normalizeAngle(parentRot.rotateY);
    const globalY = this._normalizeAngle(this.rotation.y);
    let rotY = -(parentY + globalY) % 360;
    if (rotY < -180) rotY += 360;
    const rotX = -parentRot.rotateX - this.rotation.x;

    parent.style.setProperty('--dg-rot-y-delta', `${rotY}deg`);
    parent.style.setProperty('--dg-rot-x-delta', `${rotX}deg`);

    // Reference div
    const refDiv = document.createElement('div');
    refDiv.className = 'dg-item__image dg-item__image--reference';
    refDiv.style.opacity = '0';
    refDiv.style.transform = `rotateX(${-parentRot.rotateX}deg) rotateY(${-parentRot.rotateY}deg)`;
    parent.appendChild(refDiv);

    void refDiv.offsetHeight;

    const tileR = refDiv.getBoundingClientRect();
    const mainR = this.mainEl.getBoundingClientRect();
    const frameR = this.frameEl.getBoundingClientRect();

    if (!mainR || !frameR || tileR.width <= 0 || tileR.height <= 0) {
      this.opening = false;
      this.focusedEl = null;
      parent.removeChild(refDiv);
      this._unlockScroll();
      return;
    }

    this.originalTilePos = {
      left: tileR.left,
      top: tileR.top,
      width: tileR.width,
      height: tileR.height,
    };

    el.style.visibility = 'hidden';
    el.style.zIndex = '0';

    const overlay = document.createElement('div');
    overlay.className = 'dg-enlarge';
    overlay.style.position = 'absolute';
    overlay.style.left = `${frameR.left - mainR.left}px`;
    overlay.style.top = `${frameR.top - mainR.top}px`;
    overlay.style.width = `${frameR.width}px`;
    overlay.style.height = `${frameR.height}px`;
    overlay.style.opacity = '0';
    overlay.style.zIndex = '30';
    overlay.style.willChange = 'transform, opacity';
    overlay.style.transformOrigin = 'top left';
    overlay.style.transition = `transform ${this.options.enlargeTransitionMs}ms ease, opacity ${this.options.enlargeTransitionMs}ms ease`;

    const rawSrc = parent.dataset.src || el.querySelector('img')?.src || '';
    const img = document.createElement('img');
    img.src = rawSrc;
    overlay.appendChild(img);
    this.viewerEl.appendChild(overlay);

    const tx0 = tileR.left - frameR.left;
    const ty0 = tileR.top - frameR.top;
    const sx0 = tileR.width / frameR.width;
    const sy0 = tileR.height / frameR.height;
    const validSx0 = isFinite(sx0) && sx0 > 0 ? sx0 : 1;
    const validSy0 = isFinite(sy0) && sy0 > 0 ? sy0 : 1;

    overlay.style.transform = `translate(${tx0}px, ${ty0}px) scale(${validSx0}, ${validSy0})`;

    setTimeout(() => {
      if (!overlay.parentElement) return;
      overlay.style.opacity = '1';
      overlay.style.transform = 'translate(0px, 0px) scale(1, 1)';
      this.container.setAttribute('data-enlarging', 'true');
    }, 16);

    // Optional: resize to openedImageWidth/Height after first transition
    const wantsResize = this.options.openedImageWidth || this.options.openedImageHeight;
    if (wantsResize) {
      const onFirstEnd = (ev) => {
        if (ev.propertyName !== 'transform') return;
        overlay.removeEventListener('transitionend', onFirstEnd);
        const prevTransition = overlay.style.transition;
        overlay.style.transition = 'none';
        const tempW = this.options.openedImageWidth || `${frameR.width}px`;
        const tempH = this.options.openedImageHeight || `${frameR.height}px`;
        overlay.style.width = tempW;
        overlay.style.height = tempH;
        const newRect = overlay.getBoundingClientRect();
        overlay.style.width = `${frameR.width}px`;
        overlay.style.height = `${frameR.height}px`;
        void overlay.offsetWidth;
        overlay.style.transition = `left ${this.options.enlargeTransitionMs}ms ease, top ${this.options.enlargeTransitionMs}ms ease, width ${this.options.enlargeTransitionMs}ms ease, height ${this.options.enlargeTransitionMs}ms ease`;
        const centeredLeft = frameR.left - mainR.left + (frameR.width - newRect.width) / 2;
        const centeredTop = frameR.top - mainR.top + (frameR.height - newRect.height) / 2;
        requestAnimationFrame(() => {
          overlay.style.left = `${centeredLeft}px`;
          overlay.style.top = `${centeredTop}px`;
          overlay.style.width = tempW;
          overlay.style.height = tempH;
        });
        const cleanupSecond = () => {
          overlay.removeEventListener('transitionend', cleanupSecond);
          overlay.style.transition = prevTransition;
        };
        overlay.addEventListener('transitionend', cleanupSecond, { once: true });
      };
      overlay.addEventListener('transitionend', onFirstEnd);
    }
  }

  _closeItem() {
    if (performance.now() - this.openStartedAt < 250) return;
    const el = this.focusedEl;
    if (!el) return;
    const parent = el.parentElement;
    const overlay = this.viewerEl.querySelector('.dg-enlarge');
    if (!overlay) return;
    const refDiv = parent.querySelector('.dg-item__image--reference');
    const originalPos = this.originalTilePos;

    if (!originalPos) {
      overlay.remove();
      if (refDiv) refDiv.remove();
      parent.style.setProperty('--dg-rot-y-delta', '0deg');
      parent.style.setProperty('--dg-rot-x-delta', '0deg');
      el.style.visibility = '';
      el.style.zIndex = '';
      this.focusedEl = null;
      this.container.removeAttribute('data-enlarging');
      this.opening = false;
      this._unlockScroll();
      return;
    }

    const currentRect = overlay.getBoundingClientRect();
    const rootRect = this.container.getBoundingClientRect();

    const overlayRel = {
      left: currentRect.left - rootRect.left,
      top: currentRect.top - rootRect.top,
      width: currentRect.width,
      height: currentRect.height,
    };
    const origRel = {
      left: originalPos.left - rootRect.left,
      top: originalPos.top - rootRect.top,
      width: originalPos.width,
      height: originalPos.height,
    };

    const animEl = document.createElement('div');
    animEl.className = 'dg-enlarge-closing';
    animEl.style.cssText = `position:absolute;left:${overlayRel.left}px;top:${overlayRel.top}px;width:${overlayRel.width}px;height:${overlayRel.height}px;z-index:9999;border-radius:var(--dg-enlarge-radius,32px);overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.35);transition:all ${this.options.enlargeTransitionMs}ms ease-out;pointer-events:none;margin:0;transform:none;`;
    const origImg = overlay.querySelector('img');
    if (origImg) {
      const cloned = origImg.cloneNode();
      cloned.style.cssText = 'width:100%;height:100%;object-fit:cover;';
      animEl.appendChild(cloned);
    }
    overlay.remove();
    this.container.appendChild(animEl);

    void animEl.getBoundingClientRect();
    requestAnimationFrame(() => {
      animEl.style.left = `${origRel.left}px`;
      animEl.style.top = `${origRel.top}px`;
      animEl.style.width = `${origRel.width}px`;
      animEl.style.height = `${origRel.height}px`;
      animEl.style.opacity = '0';
    });

    const cleanup = () => {
      animEl.remove();
      this.originalTilePos = null;
      if (refDiv) refDiv.remove();
      parent.style.transition = 'none';
      el.style.transition = 'none';
      parent.style.setProperty('--dg-rot-y-delta', '0deg');
      parent.style.setProperty('--dg-rot-x-delta', '0deg');
      requestAnimationFrame(() => {
        el.style.visibility = '';
        el.style.opacity = '0';
        el.style.zIndex = '';
        this.focusedEl = null;
        this.container.removeAttribute('data-enlarging');
        requestAnimationFrame(() => {
          parent.style.transition = '';
          el.style.transition = 'opacity 300ms ease-out';
          requestAnimationFrame(() => {
            el.style.opacity = '1';
            setTimeout(() => {
              el.style.transition = '';
              el.style.opacity = '';
              this.opening = false;
              if (!this.dragging && this.container.getAttribute('data-enlarging') !== 'true') {
                document.body.classList.remove('dg-scroll-lock');
              }
            }, 300);
          });
        });
      });
    };
    animEl.addEventListener('transitionend', cleanup, { once: true });
  }

  /* ------------------------------------------------------------------ */
  /*  Event binding                                                      */
  /* ------------------------------------------------------------------ */

  _bindEvents() {
    // Drag (pointer events)
    this.mainEl.addEventListener('pointerdown', (e) => {
      if (this.focusedEl) return;
      this._stopInertia();
      this.dragging = true;
      this.moved = false;
      this.startRot = { ...this.rotation };
      this.startPos = { x: e.clientX, y: e.clientY };
      this.mainEl.classList.add('dg-dragging');
    });

    window.addEventListener('pointermove', (e) => {
      if (!this.dragging || !this.startPos) return;
      if (this.focusedEl) return;
      const dx = e.clientX - this.startPos.x;
      const dy = e.clientY - this.startPos.y;
      const dist2 = dx * dx + dy * dy;
      if (!this.moved && dist2 > 16) this.moved = true;

      const nextX = this._clamp(
        this.startRot.x - dy / this.options.dragSensitivity,
        -this.options.maxVerticalRotationDeg,
        this.options.maxVerticalRotationDeg
      );
      const nextY = this._wrapAngleSigned(
        this.startRot.y + dx / this.options.dragSensitivity
      );

      if (this.rotation.x !== nextX || this.rotation.y !== nextY) {
        this.rotation = { x: nextX, y: nextY };
        this._applyTransform(nextX, nextY);
      }
    });

    window.addEventListener('pointerup', (e) => {
      if (!this.dragging) return;
      this.dragging = false;
      this.mainEl.classList.remove('dg-dragging');

      if (this.startPos) {
        const dx = e.clientX - this.startPos.x;
        const dy = e.clientY - this.startPos.y;
        const vx = this._clamp(dx / this.options.dragSensitivity * 0.02, -1.2, 1.2);
        const vy = this._clamp(dy / this.options.dragSensitivity * 0.02, -1.2, 1.2);
        if (Math.abs(vx) > 0.005 || Math.abs(vy) > 0.005) {
          this._startInertia(vx, vy);
        }
      }
      if (this.moved) this.lastDragEndAt = performance.now();
      this.moved = false;
      this.startPos = null;
    });

    // Click on tiles
    this.container.addEventListener('click', (e) => {
      const tile = e.target.closest('.dg-item__image');
      if (!tile) return;
      if (this.dragging || this.moved) return;
      if (performance.now() - this.lastDragEndAt < 80) return;
      if (this.opening) return;
      e.preventDefault();
      this._openItem(tile);
    });

    // Scrim close
    this.scrimEl.addEventListener('click', () => {
      this._closeItem();
    });

    // Escape key
    this._onKeyDown = (e) => {
      if (e.key === 'Escape') this._closeItem();
    };
    window.addEventListener('keydown', this._onKeyDown);
  }

  /* ------------------------------------------------------------------ */
  /*  Destroy                                                            */
  /* ------------------------------------------------------------------ */

  destroy() {
    this._stopInertia();
    if (this._ro) this._ro.disconnect();
    window.removeEventListener('keydown', this._onKeyDown);
    document.body.classList.remove('dg-scroll-lock');
    this.container.innerHTML = '';
    this.container.classList.remove('dg-root');
  }
}

// Auto-initialize on elements with data-dome-gallery attribute
function initDomeGalleries() {
  const elements = document.querySelectorAll('[data-dome-gallery]');
  elements.forEach(el => {
    // Skip already-initialized galleries
    if (el.classList.contains('dg-root')) return;

    let images = [];
    try {
      images = JSON.parse(el.getAttribute('data-dome-gallery-images') || '[]');
    } catch (e) {
      console.warn('DomeGallery: Invalid images JSON');
    }

    const options = {};
    const optsStr = el.getAttribute('data-dome-gallery-options');
    if (optsStr) {
      try { Object.assign(options, JSON.parse(optsStr)); } catch (e) {}
    }

    new DomeGallery(el, images, options);
  });
}

// Handle both cases: DOM not yet ready, or already loaded (module scripts may
// execute after DOMContentLoaded on production when cached by the browser).
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initDomeGalleries);
} else {
  initDomeGalleries();
}

// Expose globally
window.DomeGallery = DomeGallery;
