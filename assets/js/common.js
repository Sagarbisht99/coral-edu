/**
 * Common Script File - Coral Educational Services
 * Consolidated JavaScript for all components
 */

// ========================================
// HEADER NAVIGATION
// ========================================
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("iibsMenuToggle");
    const navMenu = document.querySelector(".iibs-nav");
    const body = document.body;

    // Toggle menu with hamburger button - handle both click and touch
    const toggleMenu = (e) => {
        e.preventDefault();
        e.stopPropagation();

        if (navMenu.classList.contains("active")) {
            // Close menu
            navMenu.classList.remove("active");
            body.classList.remove("menu-open");
            toggleBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
        } else {
            // Open menu
            navMenu.classList.add("active");
            body.classList.add("menu-open");
            toggleBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
        }
    };

    // Add only click event listener (touchstart can cause conflicts)
    toggleBtn.addEventListener("click", toggleMenu);

    // Close menu on link click
    document.querySelectorAll(".iibs-nav a").forEach(link => {
        link.addEventListener("click", () => {
            navMenu.classList.remove("active");
            body.classList.remove("menu-open");
            toggleBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
        });
    });

    // Close menu when clicking outside (with proper error handling)
    document.addEventListener("click", (e) => {
        try {
            if (navMenu && navMenu.classList && navMenu.classList.contains("active") &&
                !navMenu.contains(e.target) &&
                !toggleBtn.contains(e.target)) {
                navMenu.classList.remove("active");
                body.classList.remove("menu-open");
                toggleBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
            }
        } catch (error) {
            console.warn('Error in outside click handler:', error);
        }
    });

    // Close menu on escape key (with proper error handling)
    document.addEventListener("keydown", (e) => {
        try {
            if (e.key === "Escape" && navMenu && navMenu.classList && navMenu.classList.contains("active")) {
                navMenu.classList.remove("active");
                body.classList.remove("menu-open");
                toggleBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
            }
        } catch (error) {
            console.warn('Error in escape key handler:', error);
        }
    });
});

// ========================================
// TESTIMONIALS SWIPER
// ========================================
document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".testimonialsSwiper", {
        loop: true,
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
        },
        slidesPerView: 3,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 15 },
            576: { slidesPerView: 2, spaceBetween: 15 },
            768: { slidesPerView: 2, spaceBetween: 20 },
            992: { slidesPerView: 3, spaceBetween: 20 }
        },
    });
});

// ========================================
// PROGRAMS SLIDER
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.programs-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 15 },
            576: { slidesPerView: 2, spaceBetween: 15 },
            768: { slidesPerView: 3, spaceBetween: 20 },
            992: { slidesPerView: 3, spaceBetween: 20 },
            1200: { slidesPerView: 3, spaceBetween: 30 }
        }
    });
});

// ========================================
// STATS COUNTER ANIMATION
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-value, .secondary-value');

    function animateCounter(counter) {
        const target = parseFloat(counter.getAttribute('data-count'));
        const duration = 2000; // 2 seconds
        const start = performance.now();
        const startValue = 0;

        function updateCounter(currentTime) {
            const elapsed = currentTime - start;
            const progress = Math.min(elapsed / duration, 1);

            // Easing function for smooth animation
            const easeOutCubic = 1 - Math.pow(1 - progress, 3);
            const currentValue = startValue + (target - startValue) * easeOutCubic;

            if (counter.classList.contains('stat-value')) {
                // Format as percentage for stat-value
                counter.textContent = Math.round(currentValue) + (target % 1 === 0 ? '+' : '%');
            } else {
                // Format with + for secondary-value
                counter.textContent = Math.round(currentValue) + '+';
            }

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            }
        }

        requestAnimationFrame(updateCounter);
    }

    function handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }

    const observer = new IntersectionObserver(handleIntersection, {
        threshold: 0.5
    });

    counters.forEach(counter => {
        counter.textContent = '0';
        observer.observe(counter);
    });
});

// ========================================
// FAQ FUNCTIONALITY
// ========================================
document.addEventListener('DOMContentLoaded', function () {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const faqItems = document.querySelectorAll('.accordion-item');
    const searchInput = document.getElementById('faqSearch');
    const searchBtn = document.querySelector('.search-btn');

    // Category Filter Functionality
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-category');

            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Filter FAQ items
            faqItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                if (category === 'all' || itemCategory === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            // Update Count
            const visible = document.querySelectorAll('.accordion-item[style="display: block"]').length;
            const countElement = document.getElementById('faqCount');
            if (countElement) {
                countElement.innerText = `${visible} questions found`;
            }
        });
    });

    // Search Functionality
    function performSearch() {
        const searchTerm = searchInput.value.toLowerCase().trim();

        faqItems.forEach(item => {
            const question = item.querySelector('.question-text').textContent.toLowerCase();
            const answer = item.querySelector('.accordion-body').textContent.toLowerCase();

            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });

        // Update count
        const visible = document.querySelectorAll('.accordion-item[style="display: block"]').length;
        const countElement = document.getElementById('faqCount');
        if (countElement) {
            countElement.innerText = `${visible} questions found`;
        }

        // Reset active category to "All Questions" when searching
        if (searchTerm !== '') {
            categoryBtns.forEach(b => b.classList.remove('active'));
            const allBtn = document.querySelector('[data-category="all"]');
            if (allBtn) {
                allBtn.classList.add('active');
            }
        }
    }

    // Search button click
    if (searchBtn) {
        searchBtn.addEventListener('click', performSearch);
    }

    // Search input enter key
    if (searchInput) {
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                performSearch();
            }
        });

        // Live search as user types
        searchInput.addEventListener('input', function() {
            performSearch();
        });
    }
});

// ========================================
// CAMPUS LIFE TABS
// ========================================
document.addEventListener('DOMContentLoaded', function () {
    // Tab Switcher
    const btns = document.querySelectorAll('.ibi-campus-life .tab-btn');
    const panes = document.querySelectorAll('.ibi-campus-life .tab-pane');

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons and panes
            btns.forEach(b => b.classList.remove('active'));
            panes.forEach(p => p.classList.remove('active'));

            // Add active class to clicked button
            btn.classList.add('active');

            // Show corresponding pane
            const targetId = btn.getAttribute('data-tab');
            const targetPane = document.getElementById(targetId);
            if (targetPane) {
                targetPane.classList.add('active');
            }
        });
    });

    // Simple Auto-Slideshow for tabs with multiple images
    setInterval(() => {
        const activePane = document.querySelector('.ibi-campus-life .tab-pane.active');
        const slides = activePane.querySelectorAll('.gallery-slide');
        if (slides.length > 1) {
            let activeIdx = Array.from(slides).findIndex(s => s.classList.contains('active'));
            slides[activeIdx].classList.remove('active');
            activeIdx = (activeIdx + 1) % slides.length;
            slides[activeIdx].classList.add('active');
        }
    }, 4000); // Change slide every 4 seconds
});

// ========================================
// WHATSAPP FLOATING BUTTON
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    // WhatsApp button functionality is handled by the HTML structure
    // This ensures the button is properly initialized
    const whatsappBtn = document.querySelector('.whatsappBtn');
    if (whatsappBtn) {
        // Add any additional WhatsApp button functionality here if needed
    }
});

// ========================================
// GENERAL UTILITIES
// ========================================
// Add any common utility functions here that might be needed across components

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});
