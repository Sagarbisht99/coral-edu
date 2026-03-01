<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P343MRZ5" height="0" width="0"
    style="display: none; visibility: hidden">
  </iframe>
</noscript>

<header class="iibs-header">
  <div class="container d-flex align-items-center justify-content-between py-3">

    <!-- Logo --> 
    <a href="index.php" class="iibs-logo d-flex align-items-center">
      <img src="assets/img/logo/logo.png" alt="IIBS Bangalore" class="me-2" width="150">
    </a>

    <!-- Navigation -->
    <nav class="iibs-nav">
      <ul class="nav-list d-flex align-items-center mb-0">
        <li><a href="#home">Home</a></li>
        <li><a href="#campus">Campus</a></li>
        <li><a href="#programmes">Programmes</a></li>
        <li><a href="#admissions">Admissions</a></li>
        <li><a href="#fees-admissions">Fees</a></li>
        <li><a href="#placement">Placement</a></li>
        <li><a href="#faq">FAQ</a></li>
        
        <!-- Mobile CTA Button -->
        <li class="d-lg-none">
          <a data-bs-target="#popupForm" data-bs-toggle="modal" class="thm-btn apply-btn">
            Apply Now
          </a>
        </li>
      </ul>
    </nav>

    <!-- Desktop CTA Button -->
    <a data-bs-target="#popupForm" data-bs-toggle="modal"
      class="thm-btn apply-btn d-none d-lg-inline-block">
      Apply Now
    </a>

    <!-- Hamburger Button (mobile) -->
    <button class="navbar-toggler d-lg-none" type="button" id="iibsMenuToggle">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>
</header>

<style>
/* Navigation Links Hover Effect */
.iibs-nav .nav-list li a {
  color: #333;
  text-decoration: none;
  font-weight: 500;
  position: relative;
  transition: color 0.3s ease;
  padding-bottom: 2px;
}

.iibs-nav .nav-list li a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--ibi-navy), var(--ibi-gold));
  transition: width 0.3s ease;
}

.iibs-nav .nav-list li a:hover {
  color: var(--ibi-navy);
}

.iibs-nav .nav-list li a:hover::after {
  width: 100%;
}

/* Mobile menu - improved contrast and responsiveness */
@media (max-width: 991px) {
  .iibs-nav .nav-list li a::after {
    display: none;
  }

  .iibs-nav .nav-list li a:hover {
    background-color: rgba(30, 58, 138, 0.1);
    color: var(--ibi-navy);
    border-radius: 6px;
  }

  /* Mobile menu overlay */
  .iibs-nav.active {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  }

  .iibs-nav.active .nav-list li a {
    color: #333 !important;
    padding: 12px 20px;
    display: block;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  }

  .iibs-nav.active .nav-list li a:hover {
    background-color: var(--ibi-navy);
    color: white !important;
  }

  /* Mobile header adjustments */
  .iibs-header .container {
    padding: 0 1rem;
  }

  .iibs-logo img {
    width: 120px;
  }

  .navbar-toggler {
    border: none;
    background: transparent;
    color: var(--ibi-navy);
    font-size: 1.5rem;
    padding: 0.5rem;
    border-radius: 6px;
    transition: all 0.3s ease;
  }

  .navbar-toggler:hover {
    background-color: rgba(30, 58, 138, 0.1);
  }
}

/* Extra small mobile devices */
@media (max-width: 576px) {
  .iibs-header .container {
    padding: 0 0.75rem;
  }

  .iibs-logo img {
    width: 100px;
  }

  .thm-btn.apply-btn {
    font-size: 0.9rem;
    padding: 0.5rem 1rem;
  }

  .iibs-nav.active .nav-list li a {
    padding: 15px 20px;
    font-size: 1rem;
  }
}
</style>