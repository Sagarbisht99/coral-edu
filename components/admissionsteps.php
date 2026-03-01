<?php
include_once('site_identity.php');
?>

<section id="admissions" class="ibi-admission-steps">
  <div class="container">
    <div class="section-header text-center mb-5">
      <div class="section-badge">Admissions Open 2025-26</div>
      <h2 class="section-title">The <span>Coral Admission</span> Guidance Process</h2>
      <p class="section-subtitle mx-auto">
        A simplified and transparent admission support process designed to help students secure 
        the right college based on profile, budget, and career goals.
      </p>
    </div>

    <div class="steps-timeline">
      <div class="step-connector"></div>

      <!-- Step 1 -->
      <div class="step-item">
        <div class="step-number">1</div>
        <div class="step-content">
          <div class="step-header">
            <div class="step-icon"><i class="fas fa-phone-alt"></i></div>
            <h3 class="step-title">Initial Counseling</h3>
          </div>
          <p class="step-description">
            Connect with our admission advisor to discuss academic background, preferred course, 
            location, and budget requirements.
          </p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="step-item">
        <div class="step-number">2</div>
        <div class="step-content">
          <div class="step-header">
            <div class="step-icon"><i class="fas fa-search"></i></div>
            <h3 class="step-title">College Shortlisting</h3>
          </div>
          <p class="step-description">
            Based on your profile, we shortlist suitable AICTE/UGC approved colleges 
            and explain eligibility, fee structure, and placement records.
          </p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="step-item">
        <div class="step-number">3</div>
        <div class="step-content">
          <div class="step-header">
            <div class="step-icon"><i class="fas fa-file-upload"></i></div>
            <h3 class="step-title">Application & Documentation</h3>
          </div>
          <p class="step-description">
            Our team assists in application form filling, document submission, 
            and scholarship or entrance score processing (if applicable).
          </p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="step-item">
        <div class="step-number">4</div>
        <div class="step-content">
          <div class="step-header">
            <div class="step-icon"><i class="fas fa-university"></i></div>
            <h3 class="step-title">Admission Confirmation</h3>
          </div>
          <p class="step-description">
            Once eligibility is approved by the institution, you receive admission confirmation 
            and fee structure details for seat booking.
          </p>
        </div>
      </div>

      <!-- Step 5 -->
      <div class="step-item">
        <div class="step-number">5</div>
        <div class="step-content">
          <div class="step-header">
            <div class="step-icon"><i class="fas fa-rupee-sign"></i></div>
            <h3 class="step-title">Fee Payment & Loan Assistance</h3>
          </div>
          <p class="step-description">
            Guidance on secure fee payment process along with education loan 
            and EMI support options.
          </p>
        </div>
      </div>

      <!-- Step 6 -->
      <div class="step-item">
        <div class="step-number">6</div>
        <div class="step-content">
          <div class="step-header">
            <div class="step-icon"><i class="fas fa-check-circle"></i></div>
            <h3 class="step-title">Onboarding & Continuous Support</h3>
          </div>
          <p class="step-description">
            Assistance with reporting, hostel guidance, and ongoing academic support 
            even after admission confirmation.
          </p>
        </div>
      </div>

    </div>

    <div class="helpline">
      <i class="fas fa-headset"></i>
      <span>
        Admission Helpline:
        <strong><?php echo $site_identity['phone']; ?></strong> |
        <strong><?php echo $site_identity['email']; ?></strong>
      </span>
    </div>

  </div>
</section>