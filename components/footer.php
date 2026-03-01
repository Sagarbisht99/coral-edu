<?php include 'site_identity.php'; ?>

<footer class="footer py-100 bg-dark text-light position-relative">
  <div class="container">
    <div class="row gy-5">

      <!-- About -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-widget">
          <div class="footer-logo mb-3">
            <a href="index.php">
              <img src="<?= $site_identity['logo']; ?>" alt="<?= $site_identity['site_name']; ?>"
                class="bg-white p-2 rounded shadow-sm" width="150">
            </a>
          </div>

          <p class="small text-light opacity-75 mb-4">
            <strong><?= $site_identity['site_name']; ?></strong> is a premier management institute 
            offering industry-integrated PGDM programs. We are committed to providing quality education 
            and shaping future business leaders through academic excellence and corporate exposure.
          </p>

          <a type="button" data-bs-toggle="modal" data-bs-target="#popupForm"
            class="btn btn-primary rounded-pill px-4 py-2 fw-semibold">
            <i class="fa-solid fa-user-graduate me-2"></i> Admission Enquiry
          </a>
        </div>
      </div>

      <!-- Important Links -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-widget">
          <h5 class="text-uppercase text-primary mb-3">Important Links</h5>
          <ul class="list-unstyled small">
            <li class="mb-2">
              <a href="terms.php" class="text-light text-decoration-none d-flex align-items-center">
                <i class="fa-solid fa-file-contract me-2"></i> Terms & Conditions
              </a>
            </li>
            <li class="mb-2">
              <a href="privacy.php" class="text-light text-decoration-none d-flex align-items-center">
                <i class="fa-solid fa-shield-halved me-2"></i> Privacy Policy
              </a>
            </li>
            <li class="mb-2">
              <a href="#admissions" class="text-light text-decoration-none d-flex align-items-center">
                <i class="fa-solid fa-graduation-cap me-2"></i> Admissions
              </a>
            </li>
            <li class="mb-2">
              <a href="#placement" class="text-light text-decoration-none d-flex align-items-center">
                <i class="fa-solid fa-briefcase me-2"></i> Placements
              </a>
            </li>
            <li class="mb-2">
              <a href="#campus" class="text-light text-decoration-none d-flex align-items-center">
                <i class="fa-solid fa-building-columns me-2"></i> Campus Life
              </a>
            </li>
         
          </ul>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-widget">
          <h5 class="text-uppercase text-primary mb-3">Contact Us</h5>
          <ul class="list-unstyled small mb-3">
            <li class="mb-2">
              <i class="fa-solid fa-location-dot me-2 text-primary"></i>
              <?= $site_identity['address']; ?>
            </li>
            <li class="mb-2">
              <i class="fa-solid fa-phone me-2 text-primary"></i>
              <a href="tel:<?= preg_replace('/\s+/', '', $site_identity['phone']); ?>"
                class="text-light"><?= $site_identity['phone']; ?></a>
            </li>
            <li class="mb-2">
              <i class="fa-solid fa-envelope me-2 text-primary"></i>
              <a href="mailto:<?= $site_identity['email']; ?>"
                class="text-light"><?= $site_identity['email']; ?></a>
            </li>
          </ul>

          <ul class="social-links list-inline mt-3 mb-0">
            <li class="list-inline-item me-2">
              <a href="<?= $site_identity['whatsapp']; ?>" target="_blank" class="text-success">
                <i class="fab fa-whatsapp fa-lg"></i>
              </a>
            </li>
            <li class="list-inline-item me-2">
              <a href="<?= $site_identity['facebook']; ?>" target="_blank" class="text-light">
                <i class="fab fa-facebook-f fa-lg"></i>
              </a>
            </li>
            <li class="list-inline-item me-2">
              <a href="<?= $site_identity['instagram']; ?>" target="_blank" class="text-light">
                <i class="fab fa-instagram fa-lg"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?= $site_identity['youtube']; ?>" target="_blank" class="text-light">
                <i class="fab fa-youtube fa-lg"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <hr class="mt-5 mb-3 text-light opacity-25">
    <div class="text-center small opacity-75">
      <p class="mb-2"> <?= date('Y'); ?> <?= $site_identity['site_name']; ?>. All Rights Reserved.</p>
      
      <!-- Disclaimer -->
      <div class="mb-3 p-3 rounded" style="background-color: rgba(255, 255, 255, 0.05); border-left: 3px solid #ea580c;">
        <p class="mb-0 fw-semibold text-warning">Disclaimer:</p>
        <p class="mb-0 small">
          <?= $site_identity['site_name']; ?> is committed to maintaining academic integrity and transparency. 
          The information provided on this website is for general guidance purposes only. 
          Admission details, fee structures, and program offerings are subject to change as per regulatory guidelines. 
          Visitors are advised to verify information directly with the admissions office.
        </p>
      </div>
      
      <!-- Legal Links -->
      <p class="mb-0">
        <a href="terms.php" class="text-light text-decoration-none">Terms & Conditions</a>
        <span class="mx-2">|</span>
        <a href="privacy.php" class="text-light text-decoration-none">Privacy Policy</a>
      </p>
    </div>
  </div>
</footer>





</div>


<a href="https://wa.me/<?= preg_replace('/\D/', '', $site_identity['phone']); ?>?text=Hello%2C%20I%20wanted%20to%20enquire%20about%20Admission%20in%20<?= urlencode($site_identity['site_name']); ?>%20for%20MBA%2FPGDM."
  target="_blank" class="whatsappBtn" aria-label="Chat on WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>