<section id="home" class="hero-section">
  <div class="hero-container">
    <div class="hero-row">
<div class="hero-content-left">
  <div class="admissions-badge">
    <span class="admissions-badge-dot"></span>
    <span class="admissions-badge-text">Admissions Open 2025–27 | Apply Now</span>
  </div>

  <h1 class="hero-title">
    Find the Right MBA College<br>
    <span class="hero-title-highlight">Build Your Future as a Leader</span>
  </h1>

  <p class="hero-subtitle">
    Personalized MBA college guidance to help you grow as a future manager — even with an average entrance exam percentile
  </p>

  <div class="hero-badges">
    <span class="hero-badge">
      <i class="fas fa-user-tie hero-badge-icon"></i> Leadership Development
    </span>
    <span class="hero-badge">
      <i class="fas fa-chart-line hero-badge-icon"></i> Career Growth
    </span>
    <span class="hero-badge">
      <i class="fas fa-handshake hero-badge-icon"></i> Expert Guidance
    </span>
  </div>

  <p class="hero-description">
    Graduates from management institutes can work across finance, marketing, operations, HR, consulting, and more — depending on specialization and interest.
  </p>

  <div class="hero-buttons">
    <button class="hero-apply-btn"
      data-bs-toggle="modal" data-bs-target="#popupForm">
      Get Free MBA Counseling
    </button>
  </div>
</div>

      <div class="hero-content-right">
        <div class="hero-enquiry-card">
          <div class="enquiry-card-body">
            <div class="enquiry-header">
              <h3 class="enquiry-title">Admission Enquiry</h3>
              <p class="enquiry-subtitle">Get a callback from our Expert Counselors</p>
            </div>

            <form action="submit-form.php" method="POST">
              <div class="form-group">
                <input type="text" class="enquiry-input"
                  placeholder="Full Name" required>
              </div>

              <div class="form-row">
                <div class="form-col">
                  <input type="email" class="enquiry-input"
                    placeholder="Email" required>
                </div>
                <div class="form-col">
                  <input type="tel" class="enquiry-input"
                    placeholder="Mobile" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-col">
                  <input type="text" class="enquiry-input"
                    placeholder="City">
                </div>
                <div class="form-col">
                  <select class="enquiry-input" required>
                    <option value="" disabled selected>Select Program</option>
                    <option>MBA</option>
                    <option>PGDM</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <input type="text" class="enquiry-input"
                  placeholder="Specialization">
              </div>

              <button type="submit" class="enquiry-submit-btn">
                Request Call Back <i class="fas fa-phone-alt"></i>
              </button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="modal fade" id="popupForm" tabindex="-1" aria-labelledby="popupFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="popupFormLabel">📋 Enquiry Form</h5> <button type="button"
          class="btn-close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form action="submit-form.php" method="POST" class="mainForm" id="leadForm">
          <!-- Hidden site name for backend -->
          <input type="hidden" name="site_name" value="<?php echo htmlspecialchars($site_identity['site_name']); ?>">

          <div class="row g-3">

            <!-- Full Name -->
            <div class="col-md-6">
              <div class="form-group mb-1">
                <label class="input_title">Full Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your Name" required>
              </div>
            </div>

            <!-- Email -->
            <div class="col-md-6">
              <div class="form-group mb-1">
                <label class="input_title">Your Email</label>
                <input class="form-control" type="email" name="email" placeholder="Your Email" required>
              </div>
            </div>

            <!-- Phone -->
            <div class="col-md-6">
              <div class="form-group mb-1">
                <label class="input_title">Phone / WhatsApp</label>
                <input class="form-control" type="tel" name="phone" placeholder="Enter WhatsApp Number" required>
              </div>
            </div>

            <!-- City -->
            <div class="col-md-6">
              <div class="form-group mb-1">
                <label class="input_title">City</label>
                <input class="form-control" type="text" name="city" placeholder="Enter your City">
              </div>
            </div>

            <!-- Program Type -->
            <div class="col-12">
              <div class="form-group mb-1">
                <label class="input_title">Select Program</label>
                <select name="program" id="input_program" class="form-control" required>
                  <option hidden>Select Program</option>
                  <option value="MBA">MBA</option>
                  <option value="PGDM">PGDM</option>
                </select>
              </div>
            </div>

            <!-- Specialization -->
            <div class="col-12">
              <div class="form-group mb-1">
                <label class="input_title">Select Specialization</label>
                <input list="specializations" name="specialization" id="input_specialization" class="form-control"
                  placeholder="Select or type specialization">
                <datalist id="specializations">
                  <optgroup label="MBA Specializations">
                    <option value="MBA in IT and Systems">
                    <option value="MBA in Logistics & Supply Chain">
                    <option value="MBA in International Business">
                    <option value="MBA in Sales and Marketing">
                    <option value="MBA in Finance">
                    <option value="MBA in Human Resources (HR)">
                    <option value="MBA in Operations Management">
                  </optgroup>
                  <optgroup label="PGDM Specializations">
                    <option value="PGDM in Marketing Management">
                    <option value="PGDM in Finance">
                    <option value="PGDM in Business Analytics">
                    <option value="PGDM in Human Resource Management">
                  </optgroup>
                </datalist>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-primary w-100">
                Send Message <i class="bi bi-send-fill ms-1"></i>
              </button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>