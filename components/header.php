<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P343MRZ5" height="0" width="0"
    style="display: none; visibility: hidden">
  </iframe>
</noscript>

<?php include 'site_identity.php'; ?>

<header class="modern-header">
  <!-- <div class="header-top">
    <div class="container">
      <div class="header-contact">
        <span class="contact-item">
          <i class="fas fa-phone"></i>
          <a href="tel:<?= preg_replace('/\s+/', '', $site_identity['phone']); ?>"><?= $site_identity['phone']; ?></a>
        </span>
        <span class="contact-item">
          <i class="fas fa-envelope"></i>
          <a href="mailto:<?= $site_identity['email']; ?>"><?= $site_identity['email']; ?></a>
        </span>
      </div>
      <div class="header-social">
        <a href="<?= $site_identity['facebook']; ?>" class="social-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="<?= $site_identity['instagram']; ?>" class="social-link" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="<?= $site_identity['linkedin']; ?>" class="social-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div> -->

  <div class="header-main">
    <div class="container">
      <div class="header-content">
        <!-- Logo -->
        <a href="index.php" class="header-logo">
          <img src="<?= $site_identity['logo']; ?>" alt="<?= $site_identity['site_name']; ?>" class="logo-img">
          <!-- <div class="logo-text">
            <h3>Coral Educational</h3>
            <span>Consultancy</span>
          </div> -->
        </a>

        <!-- Desktop Navigation -->
        <nav class="main-nav">
          <ul class="nav-menu">
            <!-- <li><a href="#home" class="nav-link">MBA Guidance</a></li>
            <li><a href="#mba-guidance" class="nav-link">How We Help</a></li>
            <li><a href="#admissions" class="nav-link">Admissions</a></li>
            <li><a href="#placement" class="nav-link">Placement</a></li>
            <li><a href="#about-ibi" class="nav-link">About</a></li>
            <li><a href="#faq" class="nav-link">FAQ</a></li> -->
          </ul>
        </nav>

        <!-- Desktop CTA -->
        <div class="header-actions">
          <a data-bs-target="#popupForm" data-bs-toggle="modal" class="cta-button primary">
            <i class="fas fa-rocket"></i>
            Get Free MBA Counseling
          </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" id="mobileMenuToggle">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-header">
      <div class="mobile-logo">
        <img src="<?= $site_identity['logo']; ?>" alt="<?= $site_identity['site_name']; ?>" class="mobile-logo-img">
        <span><?= $site_identity['site_name']; ?></span>
      </div>
      <button class="mobile-menu-close" id="mobileMenuClose">
        <i class="fas fa-times"></i>
      </button>
    </div>
    
    <nav class="mobile-nav">
      <ul class="mobile-nav-menu">
        <li><a href="#home" class="mobile-nav-link">MBA Guidance</a></li>
        <li><a href="#mba-guidance" class="mobile-nav-link">How We Help</a></li>
        <li><a href="#programmes" class="mobile-nav-link">Programmes</a></li>
        <li><a href="#admissions" class="mobile-nav-link">Admissions</a></li>
        <li><a href="#fees-admissions" class="mobile-nav-link">Fees</a></li>
        <li><a href="#placement" class="mobile-nav-link">Placement</a></li>
        <li><a href="#faq" class="mobile-nav-link">FAQ</a></li>
      </ul>
      
      <div class="mobile-menu-footer">
        <a data-bs-target="#popupForm" data-bs-toggle="modal" class="mobile-cta-button">
          <i class="fas fa-rocket"></i>
          Get Free MBA Counseling
        </a>
        
        <div class="mobile-contact">
          <div class="mobile-contact-item">
            <i class="fas fa-phone"></i>
            <a href="tel:<?= preg_replace('/\s+/', '', $site_identity['phone']); ?>"><?= $site_identity['phone']; ?></a>
          </div>
          <div class="mobile-contact-item">
            <i class="fas fa-envelope"></i>
            <a href="mailto:<?= $site_identity['email']; ?>"><?= $site_identity['email']; ?></a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>