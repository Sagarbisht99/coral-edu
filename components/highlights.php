<section class="ibi-highlights py-5" id="why-choose">
  <div class="container">

    <div class="section-header text-center mb-5">
      <span class="section-tag">Educational Excellence</span>
      <h2 class="section-title mt-2 mb-3">Why Choose Coral Educational Consultancy?</h2>
      <p class="section-subtitle mx-auto">
        Your trusted partner in finding the perfect educational institution for your career journey.
      </p>
    </div>

    <!-- Trust Signals Section -->
    <div class="trust-signals mb-5">
      <div class="trust-container">
        
        <!-- Experience Counter -->
        <div class="trust-item">
          <div class="trust-icon">
            <i class="fas fa-award"></i>
          </div>
          <div class="trust-content">
            <h3 class="trust-number">15+</h3>
            <p class="trust-label">Years of MBA Counselling Experience</p>
          </div>
        </div>

        <!-- Partner Colleges -->
        <div class="trust-item">
          <div class="trust-icon">
            <i class="fas fa-university"></i>
          </div>
          <div class="trust-content">
            <h3 class="trust-label">Partner MBA Colleges</h3>
            <div class="college-logos">
              <img src="https://picsum.photos/seed/mba-college-1/80/40" alt="Partner College" class="college-logo">
              <img src="https://picsum.photos/seed/mba-college-2/80/40" alt="Partner College" class="college-logo">
              <img src="https://picsum.photos/seed/mba-college-3/80/40" alt="Partner College" class="college-logo">
              <img src="https://picsum.photos/seed/mba-college-4/80/40" alt="Partner College" class="college-logo">
            </div>
          </div>
        </div>

        <!-- Placement Companies -->
        <div class="trust-item">
          <div class="trust-icon">
            <i class="fas fa-building"></i>
          </div>
          <div class="trust-content">
            <h3 class="trust-label">Top Placement Companies</h3>
            <div class="company-logos">
              <img src="https://picsum.photos/seed/company-1/60/30" alt="Company" class="company-logo">
              <img src="https://picsum.photos/seed/company-2/60/30" alt="Company" class="company-logo">
              <img src="https://picsum.photos/seed/company-3/60/30" alt="Company" class="company-logo">
              <img src="https://picsum.photos/seed/company-4/60/30" alt="Company" class="company-logo">
              <img src="https://picsum.photos/seed/company-5/60/30" alt="Company" class="company-logo">
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Counselors Section -->
    <!-- <div class="counselors-section mb-5">
      <div class="section-header text-center mb-4">
        <h3 class="counselors-title">Meet Our Expert Counselors</h3>
        <p class="counselors-subtitle">Learn from the best in MBA admissions consulting</p>
      </div>
      <div class="counselors-grid">
        <div class="counselor-card">
          <img src="https://picsum.photos/seed/counselor-1/150/150" alt="Counselor" class="counselor-photo">
          <h4 class="counselor-name">Dr. Rajesh Sharma</h4>
          <p class="counselor-designation">Senior MBA Counselor</p>
          <p class="counselor-experience">12+ Years Experience</p>
        </div>
        <div class="counselor-card">
          <img src="https://picsum.photos/seed/counselor-2/150/150" alt="Counselor" class="counselor-photo">
          <h4 class="counselor-name">Priya Nair</h4>
          <p class="counselor-designation">Career Guidance Expert</p>
          <p class="counselor-experience">8+ Years Experience</p>
        </div>
        <div class="counselor-card">
          <img src="https://picsum.photos/seed/counselor-3/150/150" alt="Counselor" class="counselor-photo">
          <h4 class="counselor-name">Amit Kumar</h4>
          <p class="counselor-designation">Admissions Specialist</p>
          <p class="counselor-experience">10+ Years Experience</p>
        </div>
      </div>
    </div> -->

    </div>
      </div>
    </div>

    <!-- Student Testimonials Section - Moved to End -->
 
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('highlightsTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dotsContainer = document.getElementById('sliderDots');

    const cards = document.querySelectorAll('.highlight-card');
    const totalCards = cards.length;

    // Calculate cards per slide based on viewport
    function getCardsPerSlide() {
      if (window.innerWidth <= 768) return 1;
      return 2;
    }

    let currentIndex = 0;
    let cardsPerSlide = getCardsPerSlide();
    const maxIndex = Math.max(0, totalCards - cardsPerSlide);

    // Create dots
    function createDots() {
      dotsContainer.innerHTML = '';
      const numSlides = Math.ceil(totalCards / cardsPerSlide);

      for (let i = 0; i < numSlides; i++) {
        const dot = document.createElement('button');
        dot.className = 'dot';
        if (i === 0) dot.classList.add('active');
        dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
        dot.addEventListener('click', () => goToSlide(i * cardsPerSlide));
        dotsContainer.appendChild(dot);
      }
    }

    // Update slider position
    function updateSlider() {
      const cardWidth = cards[0].offsetWidth + 20; // card width + margin
      const offset = currentIndex * cardWidth;
      track.style.transform = `translateX(-${offset}px)`;

      // Update buttons
      prevBtn.disabled = currentIndex === 0;
      nextBtn.disabled = currentIndex >= maxIndex;

      // Update dots
      const currentSlide = Math.floor(currentIndex / cardsPerSlide);
      document.querySelectorAll('.dot').forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlide);
      });
    }

    // Go to specific slide
    function goToSlide(index) {
      currentIndex = Math.min(Math.max(0, index), maxIndex);
      updateSlider();
    }

    // Button event listeners
    prevBtn.addEventListener('click', () => {
      goToSlide(currentIndex - 1);
    });

    nextBtn.addEventListener('click', () => {
      goToSlide(currentIndex + 1);
    });

    // Handle window resize
    window.addEventListener('resize', () => {
      const newCardsPerSlide = getCardsPerSlide();
      if (newCardsPerSlide !== cardsPerSlide) {
        cardsPerSlide = newCardsPerSlide;
        currentIndex = 0;
        createDots();
        updateSlider();
      }
    });

    // Auto-play functionality
    let autoplayInterval;

    function startAutoplay() {
      autoplayInterval = setInterval(() => {
        if (currentIndex >= maxIndex) {
          currentIndex = 0;
        } else {
          currentIndex++;
        }
        updateSlider();
      }, 5000);
    }

    function stopAutoplay() {
      clearInterval(autoplayInterval);
    }

    // Pause on hover
    const sliderContainer = document.querySelector('.highlights-slider-container');
    sliderContainer.addEventListener('mouseenter', stopAutoplay);
    sliderContainer.addEventListener('mouseleave', startAutoplay);

    // Initialize
    createDots();
    updateSlider();
    startAutoplay();

    // Touch/swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    track.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
      stopAutoplay();
    });

    track.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
      startAutoplay();
    });

    function handleSwipe() {
      const swipeThreshold = 50;
      const diff = touchStartX - touchEndX;

      if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
          // Swipe left - next slide
          goToSlide(currentIndex + 1);
        } else {
          // Swipe right - previous slide
          goToSlide(currentIndex - 1);
        }
      }
    }
  });
</script>