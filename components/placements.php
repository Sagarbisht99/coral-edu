<?php include_once('site_identity.php'); ?>

<section id="placement" class="ibi-placements-theme">
  <div class="container">
    <div class="placements-header text-center">
      <div class="theme-badge">Trusted Admission Guidance Network</div>
      <h2 class="theme-title">Coral Education Student Success <span class="gold-text">2025-26</span></h2>
      <p class="theme-subtitle">
        Guiding students towards top colleges in Management, Engineering, and Law through expert counseling,
        verified institutions, and dedicated admission support powered by <?php echo $site_identity['site_name']; ?>.
      </p>
    </div>

    <div class="theme-stats-flex">
      <div class="theme-card stat-card">
        <div class="stat-number gold-text">95%</div>
        <div class="stat-label">Successful Admission Rate</div>
      </div>

      <div class="theme-card stat-card">
        <div class="stat-number">200+</div>
        <div class="stat-label">Partner Colleges Across India</div>
      </div>

      <div class="theme-card stat-card">
        <div class="stat-number gold-text">5000+</div>
        <div class="stat-label">Students Guided</div>
      </div>

      <div class="theme-card stat-card">
        <div class="stat-number">10+</div>
        <div class="stat-label">Years of Counseling Experience</div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a data-bs-target="#popupForm" data-bs-toggle="modal" class="theme-cta">Apply for 2025 Admissions</a>
      <p class="mt-3 text-dim">
        Admission Helpline: <strong><?php echo $site_identity['phone']; ?></strong>
      </p>
    </div>
  </div>
</section>

<style>
    .theme-cta:hover {
  background: linear-gradient(135deg, #ea580c, #f59e0b) ;
  color: #1a1d21 ;
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(245, 158, 11, 0.4);
  cursor: pointer;
}

.stat-card:hover {
  background: #2a2d31;
  border-color: #f59e0b;
  box-shadow: 0 15px 35px rgba(245, 158, 11, 0.2);
  cursor: pointer;
}
</style>


