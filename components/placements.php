<?php include_once('site_identity.php'); ?>

<section id="placement" class="placements-mba-section">
  <div class="container">
    <div class="placements-header text-center">
      <div class="placements-badge">MBA Admission Success Stories</div>
      <h2 class="placements-title">Transforming Careers Through <span class="highlight-text">Expert MBA Guidance</span></h2>
      <p class="placements-subtitle">
        Helping aspiring managers secure admission in top MBA colleges across India through personalized counseling, 
        entrance exam preparation, and strategic application support by <?php echo $site_identity['site_name']; ?>.
      </p>
    </div>

    <!-- Placement Stats Slider -->
    <div class="placements-stats-slider">
      <div class="slider-container">
        <div class="slider-track">
          <div class="stat-box success">
            <div class="stat-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <div class="stat-number">95%</div>
            <div class="stat-label">MBA Admission Success Rate</div>
            <div class="stat-description">Students placed in their preferred MBA colleges</div>
          </div>

          <div class="stat-box primary">
            <div class="stat-icon">
              <i class="fas fa-university"></i>
            </div>
            <div class="stat-number">150+</div>
            <div class="stat-label">Top MBA College Partners</div>
            <div class="stat-description">Including IIMs, XLRI, NMIMS, and more</div>
          </div>

          <div class="stat-box info">
            <div class="stat-icon">
              <i class="fas fa-user-graduate"></i>
            </div>
            <div class="stat-number">3000+</div>
            <div class="stat-label">MBA Aspirants Guided</div>
            <div class="stat-description">Successfully mentored for MBA admissions</div>
          </div>

          <div class="stat-box warning">
            <div class="stat-icon">
              <i class="fas fa-award"></i>
            </div>
            <div class="stat-number">15+</div>
            <div class="stat-label">Years MBA Counseling Experience</div>
            <div class="stat-description">Specialized in MBA admission guidance</div>
          </div>
        </div>
        
        <!-- Slider Navigation -->
        <div class="slider-nav">
          <button class="slider-btn prev-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="slider-btn next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
        
        <!-- Slider Dots -->
        <div class="slider-dots">
          <span class="dot active" data-slide="0"></span>
          <span class="dot" data-slide="1"></span>
          <span class="dot" data-slide="2"></span>
          <span class="dot" data-slide="3"></span>
        </div>
      </div>
    </div>

    <div class="placements-features">
      <div class="feature-row">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-bullseye"></i>
          </div>
          <h4>Profile-Based College Selection</h4>
          <p>Match your academic profile and career goals with the right MBA institutions</p>
        </div>
        
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <h4>Application Assistance</h4>
          <p>Complete support for MBA application forms and documentation</p>
        </div>
      </div>
      
      <div class="feature-row">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-brain"></i>
          </div>
          <h4>Entrance Exam Preparation</h4>
          <p>Expert guidance for CAT, MAT, XAT, CMAT, and other MBA entrance tests</p>
        </div>
        
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-comments"></i>
          </div>
          <h4>GD/PI Training</h4>
          <p>Comprehensive preparation for Group Discussion and Personal Interview rounds</p>
        </div>
      </div>
    </div>

    <div class="placements-cta text-center">
      <h3 class="cta-title">Start Your MBA Journey Today</h3>
      <p class="cta-subtitle">Get personalized guidance from expert MBA counselors</p>
      <div class="cta-buttons">
        <a data-bs-target="#popupForm" data-bs-toggle="modal" class="btn-primary-mba">
          <i class="fas fa-rocket"></i> Get Free MBA Counseling
        </a>
        <a href="tel:<?php echo $site_identity['phone']; ?>" class="btn-secondary-mba">
          <i class="fas fa-phone"></i> Call Now
        </a>
      </div>
      <p class="helpline-text">
        <i class="fas fa-headset"></i> MBA Admission Helpline: <strong><?php echo $site_identity['phone']; ?></strong>
      </p>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const sliderTrack = document.querySelector('.slider-track');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  const dots = document.querySelectorAll('.dot');
  const statBoxes = document.querySelectorAll('.stat-box');
  
  let currentSlide = 0;
  const totalSlides = statBoxes.length;
  
  // Calculate how many slides to show based on screen size
  function getSlidesPerView() {
    if (window.innerWidth <= 768) return 1;
    if (window.innerWidth <= 992) return 2;
    return 4;
  }
  
  function updateSlider() {
    const slidesPerView = getSlidesPerView();
    const maxSlide = Math.max(0, totalSlides - slidesPerView);
    currentSlide = Math.min(currentSlide, maxSlide);
    
    const slideWidth = 100 / slidesPerView;
    const offset = currentSlide * slideWidth;
    
    sliderTrack.style.transform = `translateX(-${offset}%)`;
    
    // Update dots
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === currentSlide);
    });
    
    // Update button states
    prevBtn.disabled = currentSlide === 0;
    nextBtn.disabled = currentSlide >= maxSlide;
  }
  
  function nextSlide() {
    const slidesPerView = getSlidesPerView();
    const maxSlide = Math.max(0, totalSlides - slidesPerView);
    if (currentSlide < maxSlide) {
      currentSlide++;
      updateSlider();
    }
  }
  
  function prevSlide() {
    if (currentSlide > 0) {
      currentSlide--;
      updateSlider();
    }
  }
  
  function goToSlide(slideIndex) {
    currentSlide = slideIndex;
    updateSlider();
  }
  
  // Event listeners
  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);
  
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => goToSlide(index));
  });
  
  // Touch/swipe support
  let startX = 0;
  let isDragging = false;
  
  sliderTrack.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
    isDragging = true;
  });
  
  sliderTrack.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
  });
  
  sliderTrack.addEventListener('touchend', (e) => {
    if (!isDragging) return;
    isDragging = false;
    
    const endX = e.changedTouches[0].clientX;
    const diff = startX - endX;
    
    if (Math.abs(diff) > 50) {
      if (diff > 0) {
        nextSlide();
      } else {
        prevSlide();
      }
    }
  });
  
  // Mouse drag support
  sliderTrack.addEventListener('mousedown', (e) => {
    startX = e.clientX;
    isDragging = true;
    sliderTrack.style.cursor = 'grabbing';
  });
  
  sliderTrack.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
  });
  
  sliderTrack.addEventListener('mouseup', (e) => {
    if (!isDragging) return;
    isDragging = false;
    sliderTrack.style.cursor = 'grab';
    
    const endX = e.clientX;
    const diff = startX - endX;
    
    if (Math.abs(diff) > 50) {
      if (diff > 0) {
        nextSlide();
      } else {
        prevSlide();
      }
    }
  });
  
  sliderTrack.addEventListener('mouseleave', () => {
    isDragging = false;
    sliderTrack.style.cursor = 'grab';
  });
  
  // Handle window resize
  window.addEventListener('resize', () => {
    updateSlider();
  });
  
  // Auto-play (optional)
  let autoPlayInterval;
  
  function startAutoPlay() {
    autoPlayInterval = setInterval(() => {
      const slidesPerView = getSlidesPerView();
      const maxSlide = Math.max(0, totalSlides - slidesPerView);
      
      if (currentSlide >= maxSlide) {
        currentSlide = 0;
      } else {
        currentSlide++;
      }
      
      updateSlider();
    }, 5000);
  }
  
  function stopAutoPlay() {
    clearInterval(autoPlayInterval);
  }
  
  // Start auto-play
  startAutoPlay();
  
  // Pause on hover
  const sliderContainer = document.querySelector('.slider-container');
  sliderContainer.addEventListener('mouseenter', stopAutoPlay);
  sliderContainer.addEventListener('mouseleave', startAutoPlay);
  
  // Initialize slider
  updateSlider();
});
</script>


