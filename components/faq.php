<?php include_once('site_identity.php'); ?>

<section id="faq" class="ibi-faq-section">
  <div class="container">
    <div class="section-header text-center mb-5">
      <div class="section-badge">Help Center</div>
      <h2 class="section-title">Your Questions About <span>Coral Admissions</span> Answered</h2>
      <p class="section-subtitle mx-auto">
        Quick answers to common queries about courses, colleges, eligibility, and admission guidance.
      </p>
    </div>

    <div class="faq-container">
      <div class="faq-categories">
        <div class="categories-header">
          <h3 class="faq-small-text"><i class="fas fa-filter"></i> Browse Topics</h3>
          <p class="faq-small-text">Filter questions by category</p>
        </div>

        <div class="categories-list">
          <button class="category-btn active" data-category="all">
            <i class="fas fa-th-large"></i>
            <span>All Questions</span>
          </button>
          <button class="category-btn" data-category="admissions">
            <i class="fas fa-user-plus"></i>
            <span>Admission Process</span>
          </button>
          <button class="category-btn" data-category="eligibility">
            <i class="fas fa-id-card"></i>
            <span>Eligibility</span>
          </button>
          <button class="category-btn" data-category="courses">
            <i class="fas fa-book-open"></i>
            <span>Courses & Colleges</span>
          </button>
          <button class="category-btn" data-category="fees">
            <i class="fas fa-rupee-sign"></i>
            <span>Fees & Loans</span>
          </button>
          <button class="category-btn" data-category="support">
            <i class="fas fa-headset"></i>
            <span>Student Support</span>
          </button>
        </div>
      </div>

      <div class="faq-accordion">
        <div class="faq-search">
          <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" id="faqSearch" placeholder="Ask about courses, scholarships, or admissions...">
            <button class="search-btn">Find</button>
          </div>
          <div class="search-info">
            <span id="faqCount">5 questions found</span>
          </div>
        </div>

        <div class="accordion" id="ibiFAQ">

          <!-- Q1 -->
          <div class="accordion-item" data-category="admissions">
            <div class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                <div class="faq-question">
                  <span class="question-text">What is the Coral admission guidance process?</span>
                  <span class="question-category">Admission Process</span>
                </div>
              </button>
            </div>
            <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Our process includes profile evaluation, college shortlisting, application assistance, documentation support, 
                admission confirmation, and post-admission guidance. We ensure a smooth and transparent admission journey.
              </div>
            </div>
          </div>

          <!-- Q2 -->
          <div class="accordion-item" data-category="eligibility">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                <div class="faq-question">
                  <span class="question-text">Who is eligible to apply through Coral?</span>
                  <span class="question-category">Eligibility</span>
                </div>
              </button>
            </div>
            <div id="q2" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Students who have completed or are appearing in 12th grade or graduation can apply. 
                Eligibility depends on the selected course and institution guidelines.
              </div>
            </div>
          </div>

          <!-- Q3 -->
          <div class="accordion-item" data-category="courses">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">
                <div class="faq-question">
                  <span class="question-text">Which courses and colleges do you provide admission support for?</span>
                  <span class="question-category">Courses & Colleges</span>
                </div>
              </button>
            </div>
            <div id="q3" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                We provide admission assistance for MBA/PGDM, B.Tech, M.Tech, BBA, BCA, Law, Pharmacy, 
                Design, Paramedical, and other professional programs across reputed AICTE/UGC-approved colleges in India.
              </div>
            </div>
          </div>

          <!-- Q4 -->
          <div class="accordion-item" data-category="fees">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4">
                <div class="faq-question">
                  <span class="question-text">Do you help with scholarships or education loans?</span>
                  <span class="question-category">Fees & Loans</span>
                </div>
              </button>
            </div>
            <div id="q4" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Yes. We assist students in identifying eligible institutional scholarships, 
                guide them through documentation, and support them in securing education loans and flexible payment options.
              </div>
            </div>
          </div>

          <!-- Q5 -->
          <div class="accordion-item" data-category="support">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q5">
                <div class="faq-question">
                  <span class="question-text">Will I receive support after admission confirmation?</span>
                  <span class="question-category">Student Support</span>
                </div>
              </button>
            </div>
            <div id="q5" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Absolutely. Our team continues to assist with reporting procedures, hostel coordination, 
                orientation guidance, and ongoing academic support whenever required.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>