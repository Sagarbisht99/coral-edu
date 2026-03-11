<section class="ibi-testimonials-section py-120" id="testimonials">
  <div class="container">
    <div class="title-text text-center mb-60">
      <div class="section-badge">Student Success Stories</div>
      <h2 class="section-title">What Our <span >Students Say</span></h2>
      <p class="section-subtitle">
        Real experiences from students who transformed their careers with our guidance
      </p>
    </div>

    <div class="swiper testimonialsSwiper">
      <div class="swiper-wrapper">
        <?php
       $testimonials = [
  ['image'=>'assets/img/testimonials/amar-prabhu.png','name'=>'Amar Prabhu','course'=>'PGDM','text'=>'Since the beginning of my journey at Coral Edu, the ultimate motive for me and my peers was to achieve a steady rate of progress.'],
  ['image'=>'assets/img/testimonials/seelam-surya-kaivalya.png','name'=>'Seelam Surya Kaivalya','course'=>'PGDM','text'=>'Choosing Coral Edu was one of my best decisions — it opened up new career possibilities and confidence.'],
  ['image'=>'assets/img/testimonials/suniti-das.png','name'=>'Suniti Das','course'=>'PGDM','text'=>'Coral Edu is one of the best decisions of my life. The exposure and mentoring shaped my personality.'],
  ['image'=>'assets/img/testimonials/md-izhar.png','name'=>'Md IZHAR','course'=>'PGDM','text'=>'It was a great experience at Coral Edu. The MOM program is a booster for me in the beginning days.'],
  ['image'=>'assets/img/testimonials/bhupendra-kumar.png','name'=>'Bhupendra Kumar','course'=>'PGDM','text'=>'The faculty at Coral Edu are among the best; every class inspires learning and innovation.'],
  
];

        foreach ($testimonials as $t): ?>
          <div class="swiper-slide">
            <div class="testimonial-card">
  <div class="testimonial-header">
    <div class="student-avatar">
      <img src="<?= htmlspecialchars($t['image']); ?>" alt="<?= htmlspecialchars($t['name']); ?>">
    </div>
    <div class="student-info">
      <h4 class="student-name"><?= htmlspecialchars($t['name']); ?></h4>
      <div class="student-course"><?= htmlspecialchars($t['course']); ?></div>

      <!-- ⭐ Rating -->
      <div class="student-rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>
  </div>

  <div class="testimonial-content">
    <div class="quote-icon">
      <i class="fas fa-quote-left"></i>
    </div>
    <p class="testimonial-text"><?= htmlspecialchars($t['text']); ?></p>
  </div>

  <div class="testimonial-footer">
    <button class="btn-primary-modern" data-bs-toggle="modal" data-bs-target="#popupForm">
      <i class="fas fa-user-graduate me-2"></i> Start Your Journey
    </button>
  </div>
</div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination mt-4"></div>
    </div>

  </div>
</section>

<style>
/* Testimonials Section Theme */
/* ============================= */
/* Section Background */
/* ============================= */

.ibi-testimonials-section {
  background: #fef3c7;
  position: relative;
  overflow: hidden;
  padding-top: 60px;
  padding-left: 80px;
  padding-right: 80px;
}

/* ============================= */
/* Premium Testimonial Card */
/* ============================= */

.testimonial-card {
  background: #ffffff;
  border-radius: 22px;
  padding: 2.2rem;
  position: relative;
  display: flex;
  flex-direction: column;
  min-height: 480px;
  border: 1px solid rgba(30, 58, 138, 0.08);
  /* box-shadow: 0 15px 50px rgba(30, 58, 138, 0.12); */
  transition: all 0.4s ease;
  overflow: hidden;
}

/* Top Accent Line */
.testimonial-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 6px;
  width: 100%;
  background: linear-gradient(90deg, #1e3a8a, #f59e0b);
}

/* Hover Effect */
.testimonial-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 70px rgba(30, 58, 138, 0.18);
}

/* ============================= */
/* Header */
/* ============================= */

.testimonial-header {
  display: flex;
  align-items: center;
  gap: 1.2rem;
  margin-bottom: 1.8rem;
}

/* 🔥 Bigger Image */
.student-avatar {
  width: 95px;
  height: 95px;
  border-radius: 50%;
  overflow: hidden;
  border: 4px solid #f59e0b;
  flex-shrink: 0;
  box-shadow: 0 8px 20px rgba(245, 158, 11, 0.35);
  transition: 0.4s ease;
}

.student-avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Image Hover Zoom */
.testimonial-card:hover .student-avatar {
  transform: scale(1.08);
}

.student-name {
  color: #1e3a8a;
  font-size: 1.3rem;
  font-weight: 700;
  margin-bottom: 0.3rem;
}

.student-course {
  color: #f59e0b;
  font-size: 0.9rem;
  font-weight: 600;
  background: rgba(245, 158, 11, 0.1);
  padding: 4px 12px;
  border-radius: 30px;
  display: inline-block;
  margin-bottom: 0.4rem;
}

/* ⭐ Stars */
.student-rating {
  display: flex;
  gap: 4px;
}

.student-rating i {
  color: #f59e0b;
  font-size: 0.9rem;
}

/* ============================= */
/* Content */
/* ============================= */

.testimonial-content {
  flex: 1;
  margin-bottom: 1.8rem;
}

.quote-icon {
  width: 48px;
  height: 48px;
  background: linear-gradient(135deg, #1e3a8a, #f59e0b);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 1.2rem;
  margin-bottom: 1rem;
  box-shadow: 0 6px 18px rgba(30, 58, 138, 0.25);
}

.testimonial-text {
  font-size: 1rem;
  line-height: 1.8;
  color: #444;
  font-style: italic;
}

/* ============================= */
/* Button */
/* ============================= */

.btn-primary-modern {
  background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
  color: #ffffff;
  border-radius: 10px;
  padding: 0.8rem 1.6rem;
  font-weight: 600;
  transition: 0.3s ease;
}

.btn-primary-modern:hover {
  background: linear-gradient(135deg, #f59e0b 0%, #ea580c 100%);
  transform: translateY(-3px);
  box-shadow: 0 12px 30px rgba(245, 158, 11, 0.4);
}

</style>
