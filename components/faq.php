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
            <span id="faqCount">20 questions found</span>
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

          <!-- Q6 -->
          <div class="accordion-item" data-category="admissions">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q6">
                <div class="faq-question">
                  <span class="question-text">How long does the admission process take?</span>
                  <span class="question-category">Admission Process</span>
                </div>
              </button>
            </div>
            <div id="q6" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                The admission process typically takes 2-4 weeks depending on the institution and course. 
                We ensure timely submission of all documents and follow up regularly for faster processing.
              </div>
            </div>
          </div>

          <!-- Q7 -->
          <div class="accordion-item" data-category="admissions">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q7">
                <div class="faq-question">
                  <span class="question-text">What documents are required for admission?</span>
                  <span class="question-category">Admission Process</span>
                </div>
              </button>
            </div>
            <div id="q7" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Required documents include 10th and 12th mark sheets, graduation certificates (if applicable), 
                ID proof, address proof, passport-size photographs, and entrance exam scorecards if applicable.
              </div>
            </div>
          </div>

          <!-- Q8 -->
          <div class="accordion-item" data-category="admissions">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q8">
                <div class="faq-question">
                  <span class="question-text">Can I apply to multiple colleges through Coral?</span>
                  <span class="question-category">Admission Process</span>
                </div>
              </button>
            </div>
            <div id="q8" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Yes, we help you apply to multiple colleges based on your preferences and eligibility. 
                This increases your chances of securing admission in the best possible institution.
              </div>
            </div>
          </div>

          <!-- Q9 -->
          <div class="accordion-item" data-category="eligibility">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q9">
                <div class="faq-question">
                  <span class="question-text">Are there entrance exam requirements?</span>
                  <span class="question-category">Eligibility</span>
                </div>
              </button>
            </div>
            <div id="q9" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Some courses require entrance exams like JEE, NEET, CAT, MAT, or state-level tests. 
                However, many colleges also offer direct admission based on merit or management quota.
              </div>
            </div>
          </div>

          <!-- Q10 -->
          <div class="accordion-item" data-category="eligibility">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q10">
                <div class="faq-question">
                  <span class="question-text">What is the minimum percentage required?</span>
                  <span class="question-category">Eligibility</span>
                </div>
              </button>
            </div>
            <div id="q10" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Minimum percentage varies by course and institution. Generally, 45-60% in 12th grade for undergraduate 
                and 50-55% in graduation for postgraduate programs. We help identify suitable options based on your scores.
              </div>
            </div>
          </div>

          <!-- Q11 -->
          <div class="accordion-item" data-category="eligibility">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q11">
                <div class="faq-question">
                  <span class="question-text">Can gap year students apply?</span>
                  <span class="question-category">Eligibility</span>
                </div>
              </button>
            </div>
            <div id="q11" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Yes, gap year students can apply. Most colleges accept students with reasonable gap years, 
                provided they can justify the period. We guide you on presenting your case effectively.
              </div>
            </div>
          </div>

          <!-- Q12 -->
          <div class="accordion-item" data-category="courses">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q12">
                <div class="faq-question">
                  <span class="question-text">Do you provide admission for NRI/Foreign students?</span>
                  <span class="question-category">Courses & Colleges</span>
                </div>
              </button>
            </div>
            <div id="q12" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Yes, we assist NRI and foreign students with admission under management/NRI quota. 
                We help with documentation, visa requirements, and special admission procedures.
              </div>
            </div>
          </div>

          <!-- Q13 -->
          <div class="accordion-item" data-category="courses">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q13">
                <div class="faq-question">
                  <span class="question-text">Which locations do you cover for college admissions?</span>
                  <span class="question-category">Courses & Colleges</span>
                </div>
              </button>
            </div>
            <div id="q13" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                We cover colleges across major cities including Delhi NCR, Mumbai, Pune, Bangalore, Hyderabad, 
                Chennai, and other educational hubs. We have partnerships with 500+ colleges nationwide.
              </div>
            </div>
          </div>

          <!-- Q14 -->
          <div class="accordion-item" data-category="courses">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q14">
                <div class="faq-question">
                  <span class="question-text">How do you help in choosing the right college?</span>
                  <span class="question-category">Courses & Colleges</span>
                </div>
              </button>
            </div>
            <div id="q14" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                We consider factors like your academic profile, career goals, budget, location preference, 
                college rankings, placement records, and infrastructure to recommend the most suitable colleges.
              </div>
            </div>
          </div>

          <!-- Q15 -->
          <div class="accordion-item" data-category="fees">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q15">
                <div class="faq-question">
                  <span class="question-text">What is the fee structure for different courses?</span>
                  <span class="question-category">Fees & Loans</span>
                </div>
              </button>
            </div>
            <div id="q15" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Fee structures vary widely - from ₹50,000 to ₹20 lakhs annually depending on the course and college. 
                We provide detailed fee breakdowns and help you find options within your budget.
              </div>
            </div>
          </div>

          <!-- Q16 -->
          <div class="accordion-item" data-category="fees">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q16">
                <div class="faq-question">
                  <span class="question-text">Are there installment payment options?</span>
                  <span class="question-category">Fees & Loans</span>
                </div>
              </button>
            </div>
            <div id="q16" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Most colleges offer installment payment options - usually semester-wise or annual payments. 
                We negotiate flexible payment plans and help you understand the complete fee structure.
              </div>
            </div>
          </div>

          <!-- Q17 -->
          <div class="accordion-item" data-category="fees">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q17">
                <div class="faq-question">
                  <span class="question-text">What types of scholarships are available?</span>
                  <span class="question-category">Fees & Loans</span>
                </div>
              </button>
            </div>
            <div id="q17" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Scholarships include merit-based, need-based, sports quota, minority scholarships, 
                and special category benefits. We help identify all eligible scholarship opportunities.
              </div>
            </div>
          </div>

          <!-- Q18 -->
          <div class="accordion-item" data-category="support">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q18">
                <div class="faq-question">
                  <span class="question-text">Do you provide hostel accommodation assistance?</span>
                  <span class="question-category">Student Support</span>
                </div>
              </button>
            </div>
            <div id="q18" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Yes, we assist with hostel applications, help find safe and affordable accommodation, 
                and coordinate with college authorities for smooth hostel allocation.
              </div>
            </div>
          </div>

          <!-- Q19 -->
          <div class="accordion-item" data-category="support">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q19">
                <div class="faq-question">
                  <span class="question-text">How can I track my admission status?</span>
                  <span class="question-category">Student Support</span>
                </div>
              </button>
            </div>
            <div id="q19" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                We provide regular updates via phone, email, and WhatsApp. You'll also have access to 
                our student portal to track application status, document submission, and admission progress.
              </div>
            </div>
          </div>

          <!-- Q20 -->
          <div class="accordion-item" data-category="support">
            <div class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q20">
                <div class="faq-question">
                  <span class="question-text">What if I face issues after joining the college?</span>
                  <span class="question-category">Student Support</span>
                </div>
              </button>
            </div>
            <div id="q20" class="accordion-collapse collapse" data-bs-parent="#ibiFAQ">
              <div class="accordion-body">
                Our support continues throughout your course. We help with academic issues, 
                coordinate with college authorities, and provide guidance whenever needed.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>