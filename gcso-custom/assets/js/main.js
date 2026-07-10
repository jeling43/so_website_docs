/**
 * GCSO Custom Theme - Main JavaScript
 *
 * Handles:
 * - Mobile navigation
 * - Dropdown menus (keyboard accessible)
 * - Search overlay
 * - Emergency bar dismissal
 * - Sticky header (optional)
 * - Accessible accordion behavior
 *
 * @package GCSO_Custom
 */

(function () {
    'use strict';

    /**
     * DOM Ready wrapper
     */
    function ready(fn) {
        if (document.readyState !== 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    ready(function () {
        initMobileMenu();
        initSearchOverlay();
        initDropdownNav();
        initEmergencyBar();
        initAccordions();
        initHeroCarousel();
    });

    /**
     * Mobile Menu
     */
    function initMobileMenu() {
        const toggle = document.querySelector('.gcso-mobile-toggle');
        const menu = document.getElementById('gcso-mobile-menu');
        const closeBtn = document.querySelector('.gcso-mobile-menu__close');
        const backdrop = document.querySelector('.gcso-mobile-menu__backdrop');

        if (!toggle || !menu) return;

        function openMenu() {
            menu.setAttribute('aria-hidden', 'false');
            backdrop.setAttribute('aria-hidden', 'false');
            toggle.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';

            // Focus the close button
            setTimeout(function () {
                if (closeBtn) closeBtn.focus();
            }, 100);

            // Trap focus
            trapFocus(menu);
        }

        function closeMenu() {
            menu.setAttribute('aria-hidden', 'true');
            backdrop.setAttribute('aria-hidden', 'true');
            toggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            toggle.focus();
        }

        toggle.addEventListener('click', function () {
            var isOpen = menu.getAttribute('aria-hidden') === 'false';
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', closeMenu);
        }

        if (backdrop) {
            backdrop.addEventListener('click', closeMenu);
        }

        // Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && menu.getAttribute('aria-hidden') === 'false') {
                closeMenu();
            }
        });

        // Handle sub-menu toggles on mobile
        var menuItems = menu.querySelectorAll('.menu-item-has-children > a');
        menuItems.forEach(function (item) {
            var subMenu = item.nextElementSibling;
            if (!subMenu || !subMenu.classList.contains('sub-menu')) return;

            // Create toggle button
            var toggleBtn = document.createElement('button');
            toggleBtn.className = 'gcso-mobile-submenu-toggle';
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.setAttribute('aria-label', 'Toggle submenu');
            toggleBtn.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M7 10l5 5 5-5z"/></svg>';

            item.parentNode.insertBefore(toggleBtn, subMenu);

            // Hide sub-menu initially
            subMenu.style.display = 'none';

            toggleBtn.addEventListener('click', function () {
                var expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', String(!expanded));
                subMenu.style.display = expanded ? 'none' : 'block';
            });
        });
    }

    /**
     * Search Overlay
     */
    function initSearchOverlay() {
        const toggleBtn = document.querySelector('.gcso-search-toggle');
        const overlay = document.getElementById('gcso-search-overlay');
        const closeBtn = document.querySelector('.gcso-search-overlay__close');

        if (!toggleBtn || !overlay) return;

        function openSearch() {
            overlay.setAttribute('aria-hidden', 'false');
            toggleBtn.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';

            var input = overlay.querySelector('input[type="search"]');
            if (input) {
                setTimeout(function () { input.focus(); }, 100);
            }
        }

        function closeSearch() {
            overlay.setAttribute('aria-hidden', 'false');
            overlay.setAttribute('aria-hidden', 'true');
            toggleBtn.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            toggleBtn.focus();
        }

        toggleBtn.addEventListener('click', openSearch);

        if (closeBtn) {
            closeBtn.addEventListener('click', closeSearch);
        }

        // Close on escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && overlay.getAttribute('aria-hidden') === 'false') {
                closeSearch();
            }
        });

        // Close on click outside
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                closeSearch();
            }
        });
    }

    /**
     * Desktop Dropdown Navigation - Keyboard Support
     */
    function initDropdownNav() {
        var navItems = document.querySelectorAll('.gcso-primary-nav__list > .menu-item-has-children');

        navItems.forEach(function (item) {
            var link = item.querySelector(':scope > a');
            var subMenu = item.querySelector(':scope > .sub-menu');

            if (!link || !subMenu) return;

            // Allow keyboard toggle
            link.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    var isVisible = subMenu.style.visibility === 'visible' ||
                        getComputedStyle(subMenu).visibility === 'visible';
                    if (!isVisible) {
                        subMenu.style.opacity = '1';
                        subMenu.style.visibility = 'visible';
                        subMenu.style.transform = 'translateY(0)';
                        var firstLink = subMenu.querySelector('a');
                        if (firstLink) firstLink.focus();
                    }
                }

                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    var firstLink = subMenu.querySelector('a');
                    if (firstLink) firstLink.focus();
                }
            });

            // Navigate within sub-menu
            var subLinks = subMenu.querySelectorAll('a');
            subLinks.forEach(function (subLink, index) {
                subLink.addEventListener('keydown', function (e) {
                    if (e.key === 'ArrowDown') {
                        e.preventDefault();
                        if (subLinks[index + 1]) subLinks[index + 1].focus();
                    }
                    if (e.key === 'ArrowUp') {
                        e.preventDefault();
                        if (index === 0) {
                            link.focus();
                        } else {
                            subLinks[index - 1].focus();
                        }
                    }
                    if (e.key === 'Escape') {
                        link.focus();
                        subMenu.style.opacity = '';
                        subMenu.style.visibility = '';
                        subMenu.style.transform = '';
                    }
                });
            });

            // Close on focus out
            item.addEventListener('focusout', function (e) {
                setTimeout(function () {
                    if (!item.contains(document.activeElement)) {
                        subMenu.style.opacity = '';
                        subMenu.style.visibility = '';
                        subMenu.style.transform = '';
                    }
                }, 10);
            });
        });
    }

    /**
     * Emergency Bar Dismissal
     */
    function initEmergencyBar() {
        var bar = document.querySelector('.gcso-emergency-bar');
        var closeBtn = bar ? bar.querySelector('.gcso-emergency-bar__close') : null;

        if (!bar || !closeBtn) return;

        closeBtn.addEventListener('click', function () {
            bar.style.display = 'none';
            // Store dismissal in sessionStorage
            try {
                sessionStorage.setItem('gcso_emergency_dismissed', '1');
            } catch (e) {
                // Silent fail
            }
        });

        // Check if previously dismissed
        try {
            if (sessionStorage.getItem('gcso_emergency_dismissed') === '1') {
                bar.style.display = 'none';
            }
        } catch (e) {
            // Silent fail
        }
    }

    /**
     * Accessible Accordions
     */
    function initAccordions() {
        var triggers = document.querySelectorAll('[data-accordion-trigger]');

        triggers.forEach(function (trigger) {
            var contentId = trigger.getAttribute('aria-controls');
            var content = document.getElementById(contentId);

            if (!content) return;

            trigger.addEventListener('click', function () {
                var expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', String(!expanded));
                content.hidden = expanded;
            });

            trigger.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });
    }

    /**
     * Hero Carousel
     */
    function initHeroCarousel() {
        var carousel = document.querySelector('.gcso-hero-carousel');
        if (!carousel) return;

        var slides = carousel.querySelectorAll('.gcso-hero-carousel__slide');
        var dots = carousel.querySelectorAll('.gcso-hero-carousel__dot');
        var prevBtn = carousel.querySelector('.gcso-hero-carousel__arrow--prev');
        var nextBtn = carousel.querySelector('.gcso-hero-carousel__arrow--next');

        if (slides.length <= 1) return;

        var currentSlide = 0;
        var slideCount = slides.length;
        var autoplayInterval = null;
        var autoplayDelay = 6000;
        var isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        function goToSlide(index) {
            if (index < 0) index = slideCount - 1;
            if (index >= slideCount) index = 0;

            slides[currentSlide].classList.remove('is-active');
            if (dots[currentSlide]) {
                dots[currentSlide].classList.remove('is-active');
                dots[currentSlide].setAttribute('aria-selected', 'false');
            }

            currentSlide = index;

            slides[currentSlide].classList.add('is-active');
            if (dots[currentSlide]) {
                dots[currentSlide].classList.add('is-active');
                dots[currentSlide].setAttribute('aria-selected', 'true');
            }
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function prevSlide() {
            goToSlide(currentSlide - 1);
        }

        function startAutoplay() {
            if (isReducedMotion) return;
            stopAutoplay();
            autoplayInterval = setInterval(nextSlide, autoplayDelay);
        }

        function stopAutoplay() {
            if (autoplayInterval) {
                clearInterval(autoplayInterval);
                autoplayInterval = null;
            }
        }

        // Arrow buttons
        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                nextSlide();
                stopAutoplay();
                startAutoplay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                prevSlide();
                stopAutoplay();
                startAutoplay();
            });
        }

        // Dot buttons
        dots.forEach(function (dot) {
            dot.addEventListener('click', function () {
                var slideIndex = parseInt(this.getAttribute('data-slide'), 10);
                goToSlide(slideIndex);
                stopAutoplay();
                startAutoplay();
            });
        });

        // Keyboard navigation
        carousel.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                stopAutoplay();
                startAutoplay();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                stopAutoplay();
                startAutoplay();
            }
        });

        // Pause on hover
        carousel.addEventListener('mouseenter', stopAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);

        // Pause on focus within
        carousel.addEventListener('focusin', stopAutoplay);
        carousel.addEventListener('focusout', function (e) {
            if (!carousel.contains(e.relatedTarget)) {
                startAutoplay();
            }
        });

        // Start autoplay
        startAutoplay();
    }

    /**
     * Focus Trap Utility
     */
    function trapFocus(element) {
        var focusableElements = element.querySelectorAll(
            'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])'
        );
        var firstFocusable = focusableElements[0];
        var lastFocusable = focusableElements[focusableElements.length - 1];

        element.addEventListener('keydown', function (e) {
            if (e.key !== 'Tab') return;

            if (e.shiftKey) {
                if (document.activeElement === firstFocusable) {
                    e.preventDefault();
                    lastFocusable.focus();
                }
            } else {
                if (document.activeElement === lastFocusable) {
                    e.preventDefault();
                    firstFocusable.focus();
                }
            }
        });
    }

})();
