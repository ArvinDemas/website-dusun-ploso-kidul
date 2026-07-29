/**
 * Plosokidul Theme — assets/js/main.js
 *
 * Logika interaksi utama tema:
 * 1. Hamburger Menu Toggle
 * 2. Sticky Header Scroll Shrink
 * 3. Hero Video Lazy-Load
 * 4. IntersectionObserver: Scroll Fade-In
 * 5. IntersectionObserver: Animated Counter (KPI Statistik)
 *
 * Prinsip performa (dari skill application-performance-performance-optimization):
 * - Scroll listener menggunakan { passive: true }
 * - requestAnimationFrame untuk scroll handler
 * - Video di-load 600ms SETELAH event 'load' selesai
 * - IntersectionObserver menggantikan scroll listener untuk trigger animasi
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

(function () {
    'use strict';

    // =========================================================================
    // HELPER FUNCTIONS
    // =========================================================================

    /**
     * Easing easeOutQuart — percepat di awal, perlambat di akhir
     * Memberikan kesan alami seperti angka "mendarat" pada target
     */
    function easeOutQuart(t) {
        return 1 - Math.pow(1 - t, 4);
    }

    /**
     * Animasi angka dari 0 → target
     * @param {HTMLElement} el       — Elemen yang menampilkan angka
     * @param {number}      target   — Angka akhir
     * @param {string}      suffix   — Satuan di belakang angka (misal: " KK", " Ha")
     * @param {number}      duration — Durasi animasi dalam ms (default: 1800)
     */
    function animateCounter(el, target, suffix, duration) {
        duration = duration || 1800;
        const start = performance.now();

        function tick(now) {
            var elapsed  = now - start;
            var progress = Math.min(elapsed / duration, 1);
            var eased    = easeOutQuart(progress);
            var current  = Math.floor(eased * target);

            // Format angka dengan pemisah ribuan bahasa Indonesia (titik)
            el.textContent = current.toLocaleString('id-ID');

            if (progress < 1) {
                requestAnimationFrame(tick);
            } else {
                // Pastikan nilai akhir tepat
                el.textContent = target.toLocaleString('id-ID');
            }
        }

        requestAnimationFrame(tick);
    }

    // =========================================================================
    // DOM READY
    // =========================================================================
    document.addEventListener('DOMContentLoaded', function () {

        // =====================================================================
        // 1. HAMBURGER MENU TOGGLE
        // =====================================================================
        var menuToggle = document.querySelector('.menu-toggle');
        var mainNav    = document.getElementById('site-navigation');
        var primaryMenu = document.getElementById('primary-menu');

        if (menuToggle && mainNav) {
            menuToggle.addEventListener('click', function () {
                var isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
                menuToggle.classList.toggle('is-active');
                mainNav.classList.toggle('is-open');
                if (primaryMenu) primaryMenu.classList.toggle('is-active');
                menuToggle.setAttribute('aria-expanded', String(!isExpanded));
                document.body.classList.toggle('nav-menu-open');
            });

            document.querySelectorAll('#site-navigation a').forEach(function (link) {
                link.addEventListener('click', function () {
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuToggle.classList.remove('is-active');
                    mainNav.classList.remove('is-open');
                    if (primaryMenu) primaryMenu.classList.remove('is-active');
                    document.body.classList.remove('nav-menu-open');
                });
            });
        }

        // =====================================================================
        // 2. STICKY HEADER SCROLL SHRINK
        // =====================================================================
        var masthead = document.getElementById('masthead');
        var lastScroll = 0;
        var ticking = false;

        if (masthead) {
            window.addEventListener('scroll', function () {
                lastScroll = window.scrollY;
                if (!ticking) {
                    requestAnimationFrame(function () {
                        masthead.classList.toggle('header-scrolled', lastScroll > 50);
                        ticking = false;
                    });
                    ticking = true;
                }
            }, { passive: true });
        }

        // =====================================================================
        // 4. SCROLL FADE-IN — IntersectionObserver
        // Memicu .is-visible pada .fade-in-section saat 15% elemen masuk viewport
        // rootMargin bawah -60px agar animasi tidak terlalu cepat
        // =====================================================================
        if ('IntersectionObserver' in window) {
            var fadeObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        fadeObserver.unobserve(entry.target); // Hanya trigger sekali
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -60px 0px'
            });

            document.querySelectorAll('.fade-in-section').forEach(function (el) {
                fadeObserver.observe(el);
            });
        } else {
            // Fallback browser lama: tampilkan semua langsung tanpa animasi
            document.querySelectorAll('.fade-in-section').forEach(function (el) {
                el.classList.add('is-visible');
            });
        }

        // =====================================================================
        // 5. ANIMATED COUNTER — IntersectionObserver
        // Memicu counter HANYA SEKALI saat 30% kartu statistik masuk viewport
        // prefers-reduced-motion: jika aktif, langsung tampilkan angka akhir
        // =====================================================================
        var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if ('IntersectionObserver' in window) {
            var counterObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        var card   = entry.target;
                        var target = parseInt(card.getAttribute('data-target'), 10);
                        var suffix = card.getAttribute('data-suffix') || '';
                        var numEl  = card.querySelector('.stat-number');

                        if (numEl && !isNaN(target)) {
                            if (prefersReducedMotion) {
                                // Tampilkan langsung tanpa animasi
                                numEl.textContent = target.toLocaleString('id-ID');
                            } else {
                                animateCounter(numEl, target, suffix, 1800);
                            }
                        }

                        counterObserver.unobserve(card); // Henti observasi — counter 1x saja
                    }
                });
            }, {
                threshold: 0.3  // Trigger saat 30% kartu terlihat
            });

            document.querySelectorAll('[data-counter]').forEach(function (card) {
                counterObserver.observe(card);
            });
        } else {
            // Fallback: tampilkan angka akhir langsung
            document.querySelectorAll('[data-counter]').forEach(function (card) {
                var target = parseInt(card.getAttribute('data-target'), 10);
                var numEl  = card.querySelector('.stat-number');
                if (numEl && !isNaN(target)) {
                    numEl.textContent = target.toLocaleString('id-ID');
                }
            });
        }

    }); // END DOMContentLoaded

    // =========================================================================
    // 3. HERO VIDEO LAZY-LOAD
    // Di-load 600ms setelah event 'load' selesai agar LCP tidak terganggu
    // =========================================================================
    window.addEventListener('load', function () {
        var heroVideo = document.getElementById('hero-video');
        if (!heroVideo) return;

        var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReducedMotion) return;

        setTimeout(function () {
            var videoSrc = heroVideo.getAttribute('data-src');
            if (!videoSrc) return;

            var source = heroVideo.querySelector('source[data-src]');
            if (source) source.src = source.getAttribute('data-src');

            heroVideo.src = videoSrc;
            heroVideo.load();

            heroVideo.addEventListener('canplaythrough', function () {
                heroVideo.play()
                    .then(function () {
                        heroVideo.classList.add('is-playing');
                    })
                    .catch(function () {
                        // Poster image tetap tampil jika autoplay diblokir
                    });
            }, { once: true });

        }, 600);
    });

})();
