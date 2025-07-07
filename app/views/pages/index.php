<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="index-page">

  <?php require APPROOT . '/views/inc/navbar.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="hero-container">
        <video autoplay="" muted="" loop="" playsinline="" class="video-background">
          <source src="<?php echo URLROOT; ?>/assets/img/education/hero-bg.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="100">
              <div class="hero-content">
                <h1>Empowering Futures Through Education</h1>
                <p>Shaping bold thinkers and future leaders with the skills, confidence, and values they need to thrive in life through transformative learning.</p>
                <div class="cta-buttons">
                  <a href="<?php echo URLROOT; ?>/pages/admissions" class="btn-primary">Start Your Journey</a>
                  <a href="#featured-programs" class="btn-secondary">Discover Programs</a>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
              <div class="stats-card">
                <div class="stats-header">
                  <h3>Why Choose Us</h3>
                  <div class="decoration-line"></div>
                </div>
                <div class="stats-grid">
                  <div class="stat-item">
                    <div class="stat-icon">
                      <i class="bi bi-trophy-fill"></i>
                    </div>
                    <div class="stat-content">
                      <h4>98%</h4>
                      <p>Graduate Employment</p>
                    </div>
                  </div>
                  <div class="stat-item">
                    <div class="stat-icon">
                      <i class="bi bi-globe"></i>
                    </div>
                    <div class="stat-content">
                      <h4>45+</h4>
                      <p>International Partners</p>
                    </div>
                  </div>
                  <div class="stat-item">
                    <div class="stat-icon">
                      <i class="bi bi-mortarboard"></i>
                    </div>
                    <div class="stat-content">
                      <h4>15:1</h4>
                      <p>Student-Faculty Ratio</p>
                    </div>
                  </div>
                  <div class="stat-item">
                    <div class="stat-icon">
                      <i class="bi bi-building"></i>
                    </div>
                    <div class="stat-content">
                      <h4>120+</h4>
                      <p>Degree Programs</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <div class="event-ticker">
        <div class="container">
          <div class="row gy-4">
            <div class="col-md-6 col-xl-4 col-12 ticker-item">
              <span class="date">JAN 15</span>
              <span class="title">Open House Day</span>
              <!-- <a href="javascript:void()" class="btn-register">Past</a> -->
            </div>
            <div class="col-md-6 col-12 col-xl-4  ticker-item">
              <span class="date">APR 29</span>
              <span class="title">Application Workshop</span>
              <!-- <a href="javascript:void()" class="btn-register">Past</a> -->
            </div>
            <div class="col-md-6 col-12 col-xl-4 ticker-item">
              <span class="date">OCT 10</span>
              <span class="title">International Student Orientation</span>
              <!-- <a href="javascript:void()" class="btn-register">Coming Soon</a> -->
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row mb-5">
          <div class="col-lg-6 pe-lg-5" data-aos="fade-right" data-aos-delay="200">
            <h2 class="display-6 fw-bold mb-4">WELCOME TO, <span>ST. MARY'S POLY</span></h2>
            <p class="lead mb-4">We are more than a place of learning __ We are a community with a focus on academic excellence, personal growth, and innovation. We create an environment where every student feels seen, supported and inspired to succeed.</p>
            <div class="d-flex flex-wrap gap-4 mb-4">
              <div class="stat-box">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>+</span>
                <span class="stat-label">Years</span>
              </div>
              <div class="stat-box">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="2500" data-purecounter-duration="1" class="purecounter"></span>+</span>
                <span class="stat-label">Students</span>
              </div>
              <div class="stat-box">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="55" data-purecounter-duration="1" class="purecounter"></span>+</span>
                <span class="stat-label">Faculty</span>
              </div>
            </div>
            <div class="d-flex align-items-center mt-4 signature-block">
              <!-- <img src="assets/img/misc/signature-1.webp" alt="Principal's Signature" width="120"> -->
              <div class="ms-3">
                <p class="mb-0 fw-bold">Rev Dr. Anthony Nwafor</p>
                <p class="mb-0 text-muted">Rector</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="image-stack">
              <div class="image-stack-item image-stack-item-top" data-aos="zoom-in" data-aos-delay="400">
                <img src="assets/img/education/env1.png" alt="Campus Life" class="img-fluid rounded-4 shadow-lg">
              </div>
              <div class="image-stack-item image-stack-item-bottom" data-aos="zoom-in" data-aos-delay="500">
                <img src="assets/img/education/grp3.png" alt="Students" class="img-fluid rounded-4 shadow-lg">
              </div>
            </div>
          </div>
        </div>

        <div class="row mission-vision-row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="value-card h-100">
              <div class="card-icon">
                <i class="bi bi-rocket-takeoff"></i>
              </div>
              <h3>Our Mission</h3>
              <p>To empower every student with knowledge, creativity, and character __ equipping them to thrive academically, grow personally, and contribute meaningfully to the world around them.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="value-card h-100">
              <div class="card-icon">
                <i class="bi bi-eye"></i>
              </div>
              <h3>Our Vision</h3>
              <p>To be a leading educational institution recognized for nuturing a generation to grow in wisdom, character and purpose. Empowered academically to lead meaninful lives and contribute positively to a global society.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="value-card h-100">
              <div class="card-icon">
                <i class="bi bi-star"></i>
              </div>
              <h3>Our Values</h3>
              <p>We uphold <strong>Excellence</strong> encouraging students to reach their full potential in all areas of learning. We value <strong>Creativity</strong> inspiring innovative thinking and self-expression.
                We promote <strong>Resilience</strong> nuturing confidence and perseverance to thrive in a changing world.
              </p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Featured Programs Section -->
    <section id="featured-programs" class="featured-programs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Programs</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="program-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All Programs</li>
            <li data-filter=".filter-ndhnd">ND/HND</li>
            <li data-filter=".filter-pgda">PGDA</li>
            <!-- <li data-filter=".filter-certificate">Certificates</li> -->
          </ul>

          <div class="row g-4 isotope-container">

            <div class="col-lg-6 isotope-item filter-ndhnd" data-aos="zoom-in" data-aos-delay="300">
              <div class="program-item">
                <div class="program-badge">ND/HND</div>
                <div class="row g-0">
                  <div class="col-lg-10 mx-auto">
                    <div class="program-content">
                      <h3>Computer Science</h3>
                      <div class="program-highlights">
                        <span><i class="bi bi-clock"></i> 2 Years</span>
                        <span><i class="bi bi-people-fill"></i> 150 Credits</span>
                        <span><i class="bi bi-calendar3"></i> Full time </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Program Item -->

            <div class="col-lg-6 isotope-item filter-pgda" data-aos="zoom-in" data-aos-delay="100">
              <div class="program-item">
                <div class="program-badge">PGDA</div>
                <div class="row g-0">
                  <div class="col-lg-10 mx-auto">
                    <div class="program-content">
                      <h3>PGDA in Business Administration</h3>
                      <div class="program-highlights">
                        <span><i class="bi bi-clock"></i> 18 Months</span>
                        <span><i class="bi bi-people-fill"></i> 60 Credits</span>
                        <span><i class="bi bi-calendar3"></i> Weekend/Part Time</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Program Item -->

            <div class="col-lg-6 isotope-item filter-ndhnd" data-aos="zoom-in" data-aos-delay="200">
              <div class="program-item">
                <div class="program-badge">ND/HND</div>
                <div class="row g-0">
                  <div class="col-lg-10 mx-auto">
                    <div class="program-content">
                      <h3>Accounting</h3>
                      <div class="program-highlights">
                        <span><i class="bi bi-clock"></i> 2 Years</span>
                        <span><i class="bi bi-people-fill"></i> 64 Credits</span>
                        <span><i class="bi bi-calendar3"></i> Full time &amp; Evening</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Program Item -->

            <div class="col-lg-6 isotope-item filter-ndhnd" data-aos="zoom-in" data-aos-delay="100">
              <div class="program-item">
                <div class="program-badge">ND/HND</div>
                <div class="row g-0">
                  <div class="col-lg-10 mx-auto">
                    <div class="program-content">
                      <h3>Mass Communication</h3>
                      <div class="program-highlights">
                        <span><i class="bi bi-clock"></i> 2 years</span>
                        <span><i class="bi bi-people-fill"></i> 24 Credits</span>
                        <span><i class="bi bi-calendar3"></i> Full time &amp; Evening</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Program Item -->
            <div class="col-lg-6 isotope-item filter-pgda" data-aos="zoom-in" data-aos-delay="100">
              <div class="program-item">
                <div class="program-badge">PGDA</div>
                <div class="row g-0">
                  <div class="col-lg-10 mx-auto">
                    <div class="program-content">
                      <h3>PGDA in Economics</h3>
                      <div class="program-highlights">
                        <span><i class="bi bi-clock"></i> 18 Months</span>
                        <span><i class="bi bi-people-fill"></i> 24 Credits</span>
                        <span><i class="bi bi-calendar3"></i> Weekend &amp; Part time</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Program Item -->
            <div class="col-lg-6 isotope-item filter-ndhnd" data-aos="zoom-in" data-aos-delay="100">
              <div class="program-item">
                <div class="program-badge">ND/HND</div>
                <div class="row g-0">
                  <div class="col-lg-10 mx-auto">
                    <div class="program-content">
                      <h3>Food Science &amp; Technology</h3>
                      <div class="program-highlights">
                        <span><i class="bi bi-clock"></i> 2 years</span>
                        <span><i class="bi bi-people-fill"></i> 150 Credits</span>
                        <span><i class="bi bi-calendar3"></i> Full time &amp; Evening</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Program Item -->

          </div>
        </div>
        <div class="text-center mt-5">
          <a href="<?php echo URLROOT; ?>/pages/academics" class="btn-view-all">View All Programmes</a>
        </div>
      </div>

    </section><!-- /Featured Programs Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="testimonial-masonry">

          <div class="testimonial-item" data-aos="fade-up">
            <div class="testimonial-content">
              <div class="quote-pattern">
                <i class="bi bi-quote"></i>
              </div>
              <p>My time at <strong>St. Mary's Poly</strong> was more than just earning a degree __ It was a journey of personal growth, leadership, and lifelong friendships.</p>
              <div class="client-info">
                <div class="client-image">
                  <img src="<?php echo URLROOT; ?>/assets/img/person/user.jpg" alt="Client">
                </div>
                <div class="client-details">
                  <h3>Rachel Bennett</h3>
                  <span class="position">Class of 2020, HND. Computer Science.</span>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-content">
              <div class="quote-pattern">
                <i class="bi bi-quote"></i>
              </div>
              <p>Attending <strong>St. Mary's Poly</strong> was a transformative experience. The faculty not only provided top-notch academic training but also mentored me to become a confident, purpose driven profesional.</p>
              <div class="client-info">
                <div class="client-image">
                  <img src="<?php echo URLROOT; ?>/assets/img/person/user.jpg" alt="Client">
                </div>
                <div class="client-details">
                  <h3>Fatima K. Musa</h3>
                  <span class="position">Class of 2016, HND Business Administration.</span>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-content">
              <div class="quote-pattern">
                <i class="bi bi-quote"></i>
              </div>
              <p>Studying at <strong>St. Mary's Poly</strong> laid the foundation for who I am today__ both professionally and personally. The lectures was engaging, the campus life was vibrant and the values instilled in me continue to guide my decisions. I'm forever grateful for the experience.</p>
              <div class="client-info">
                <div class="client-image">
                  <img src="<?php echo URLROOT; ?>/assets/img/person/user.jpg" alt="Client">
                </div>
                <div class="client-details">
                  <h3>Emma Thompson</h3>
                  <span class="position">Class of 2020, ND. Library Management</span>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6">
            <div class="stats-overview" data-aos="fade-right" data-aos-delay="200">
              <h2 class="stats-title">Excellence in Education for Over 10 Years</h2>
              <p class="stats-description">For over a decade, we've been dedicated to shaping bright futures through innovative teaching, strong values and a supportive learning environment. Our commitment to excellence has helped countless students grow into confident, capable individuals ready to make a difference.</p>
              <div class="stats-cta">
                <a href="<?php echo URLROOT; ?>/pages/admissions" class="btn btn-primary">Admissions</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="stats-card" data-aos="zoom-in" data-aos-delay="300">
                  <div class="stats-icon">
                    <i class="bi bi-people-fill"></i>
                  </div>
                  <div class="stats-number">
                    <span data-purecounter-start="0" data-purecounter-end="94" data-purecounter-duration="1" class="purecounter"></span>%
                  </div>
                  <div class="stats-label">Graduation Rate</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stats-card" data-aos="zoom-in" data-aos-delay="400">
                  <div class="stats-icon">
                    <i class="bi bi-person-workspace"></i>
                  </div>
                  <div class="stats-number">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>:1
                  </div>
                  <div class="stats-label">Student-Faculty Ratio</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stats-card" data-aos="zoom-in" data-aos-delay="500">
                  <div class="stats-icon">
                    <i class="bi bi-award"></i>
                  </div>
                  <div class="stats-number">
                    <span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1" class="purecounter"></span>+
                  </div>
                  <div class="stats-label">Academic Programs</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stats-card" data-aos="zoom-in" data-aos-delay="600">
                  <div class="stats-icon">
                    <i class="bi bi-cash-stack"></i>
                  </div>
                  <div class="stats-number">$<span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>M
                  </div>
                  <div class="stats-label">Research Funding</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Recent News Section -->
    <section id="recent-news" class="recent-news section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recent News</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="assets/img/education/img-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="javascript:void()">🗳️ Students Elect New Student Union Executives in Peaceful Election</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/person/user.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Ike Victoria</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2025</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="assets/img/education/img-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="javascript:void()">🏆Inter-School Sports Competition Championship</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/person/user.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Monica James</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="assets/img/education/img-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="javascript:void()">🎓 Alumnus Receives National Award for Innovation in Education</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/person/user.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Henry</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>

    </section><!-- /Recent News Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Events</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-6">
            <div class="event-card">
              <div class="event-date">
                <span class="month">FEB</span>
                <span class="day">15</span>
                <span class="year">2025</span>
              </div>
              <div class="event-content">
                <div class="event-tag academic">Academic</div>
                <h3>Science Fair Exhibition</h3>
                <p>Our annual Science Fair Exhibition showcases the creativity and innovation of our students across various scientific disciplines. From groundbreaking experiments to real-world solutions, this event provides a platform for learners to present their research projects, engage with industry experts, and inspire a culture of curiosity and discovery.</p>
                <div class="event-meta">
                  <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>09:00 AM - 03:00 PM</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>Main Auditorium</span>
                  </div>
                </div>
                <div class="event-actions">
                  <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
                  <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to Calendar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="event-card">
              <div class="event-date">
                <span class="month">MAR</span>
                <span class="day">10</span>
                <span class="year">2025</span>
              </div>
              <div class="event-content">
                <div class="event-tag sports">Sports</div>
                <h3>Annual Sports Day</h3>
                <p>The Annual Sports Day is a vibrant celebration of athleticism, teamwork, and school spirit. Students compete in a variety of track and field events, showcasing talent, discipline, and determination. It's a day filled with excitement, friendly rivalry, and community bonding, as the entire institution comes together to cheer on their teams.</p>
                <div class="event-meta">
                  <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>08:30 AM - 05:00 PM</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>School Playground</span>
                  </div>
                </div>
                <div class="event-actions">
                  <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
                  <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to Calendar</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="text-center mt-5">
          <a href="#" class="btn-view-all">View All Events</a>
        </div> -->

      </div>

    </section><!-- /Events Section -->

  </main>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>