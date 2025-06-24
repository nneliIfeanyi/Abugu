<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="admissions-page">

  <?php require APPROOT . '/views/inc/navbar.php'; ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
      <div class="container position-relative">
        <h1>Admissions</h1>
        <p>We are excited to welcome new students into our vibrant learning community.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Admissions</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Admissions Section -->
    <section id="admissions" class="admissions section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 g-lg-5">
          <div class="col-lg-6">
            <div class="admissions-info" data-aos="fade-up">
              <h2>Begin Your Academic Journey Today</h2>
              <p>Start your path to academic success with a quick and easy application process. We're here to guide you every step of the way</p>

              <div class="admissions-steps mt-5">
                <h3>How to Apply</h3>
                <div class="steps-wrapper mt-4">
                  <div class="step-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <div class="step-content">
                      <h4>Submit Application</h4>
                      <p>Fill out your personal details in the application form and ensure to provide accurate information about yourself.</p>
                    </div>
                  </div>

                  <div class="step-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <div class="step-content">
                      <h4>Send Documents</h4>
                      <p>You are to upload clear copies of all required documents, including academic records, birth certificate, passport photograph, etc.</p>
                    </div>
                  </div>

                  <div class="step-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <div class="step-content">
                      <h4>Interview Process</h4>
                      <p>After reviewing your application, eligible candidates would be contacted for an interview. This will help us get to know you better and access your readiness for our academic programmes.</p>
                    </div>
                  </div>

                  <div class="step-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">4</div>
                    <div class="step-content">
                      <h4>Receive Decision</h4>
                      <p>Once the interview and review process is cpmplete, you'll be notified of your admission status via email or phone. Decisions are typically made within a few days of your interview.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="deadlines mt-5" data-aos="fade-up">
                <h3>Key Admission Deadlines</h3>
                <div class="deadline-grid mt-4">
                  <div class="deadline-item">
                    <h4>Fall Semester</h4>
                    <div class="date">March 15, 2023</div>
                  </div>
                  <div class="deadline-item">
                    <h4>Spring Semester</h4>
                    <div class="date">October 1, 2023</div>
                  </div>
                  <div class="deadline-item">
                    <h4>Summer Session</h4>
                    <div class="date">January 30, 2024</div>
                  </div>
                  <div class="deadline-item">
                    <h4>Early Decision</h4>
                    <div class="date">November 15, 2023</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="admissions-requirements" data-aos="fade-up">
              <h3>Admission Requirements</h3>
              <div class="requirements-list mt-4">
                <div class="requirement-item" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box">
                    <i class="bi bi-mortarboard-fill"></i>
                  </div>
                  <div>
                    <h4>Academic Records</h4>
                    <p>Applicants are required to submit their most recent academic records. These help us evaluate your educational background and ensure proper placement within our programmes.</p>
                  </div>
                </div>

                <div class="requirement-item" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                  </div>
                  <div>
                    <h4>Recommendation Letters</h4>
                    <p>Applicants may be asked to submit one or two recommendation letters from teachers or mentors These letters provide insight about your character, work ethic and academic potential.</p>
                  </div>
                </div>

                <div class="requirement-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box">
                    <i class="bi bi-journal-richtext"></i>
                  </div>
                  <div>
                    <h4>Personal Statement</h4>
                    <p>Your personal statement is a chance to tell us about yourself __ your goals, interest, and why you want to join our school. Keep it honest, clear and not more than few paragraphs.</p>
                  </div>
                </div>

                <div class="requirement-item" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box">
                    <i class="bi bi-graph-up"></i>
                  </div>
                  <div>
                    <h4>Standardized Tests</h4>
                    <p>If applicable, Applicants should submit results from any standardized test taken, such as entrance exam or national assesments. These scores help us assess academic readiness and placement.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="request-info mt-5" data-aos="fade-up">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Request Information</h3>
                  <p>If you'd like to learn more before applying, feel free to request additional information. Our admission team is ready to answer your questions.</p>

                  <form class="php-email-form mt-4" action="forms/contact.php">
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control" placeholder="Full Name" required="">
                    </div>
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="">
                    </div>
                    <div class="mb-3">
                      <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="mb-3">
                      <select name="subject" class="form-select" required="">
                        <option value="" selected="" disabled="">Program of Interest</option>
                        <option value="Undergraduate">Undergraduate</option>
                        <option value="Graduate">Graduate</option>
                        <option value="Doctoral">Doctoral</option>
                        <option value="Certificate">Certificate</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <textarea name="message" class="form-control" rows="3" placeholder="Questions or Comments" required=""></textarea>
                    </div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your request has been sent. Thank you!</div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit Request</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="cta-wrapper mt-5" data-aos="fade-up">
          <div class="row g-0">
            <div class="col-md-6 mx-auto">
              <div class="cta-item apply">
                <i class="bi bi-file-earmark-check"></i>
                <h3>Ready to Apply?</h3>
                <p>Just hit the <strong>Start Application</strong> button below, and ensure you provide accurate information, don't hesistate to reach out if you need assistance.</p>
                <a href="<?php echo URLROOT; ?>/pages/apply" class="btn btn-primary">Start Application</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Admissions Section -->

  </main>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>