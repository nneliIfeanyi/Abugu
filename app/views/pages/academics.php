<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="academics-page">

    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(<?php echo URLROOT; ?>/assets/img/education/grp1.png);">
            <div class="container position-relative">
                <h1>Academics</h1>
                <p>Discover Our Academic Programs</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="<?php echo URLROOT; ?>/">Home</a></li>
                        <li class="current">Academics</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Academics Section -->
        <section id="academics" class="academics section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="programs-navigation" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-12">
                            <div class="program-tabs">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                   <!--  <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#academics-all" type="button" role="tab">
                                            <span class="icon"><i class="bi bi-grid-3x3-gap"></i></span>
                                            <span class="text">All Programs</span>
                                        </button>
                                    </li> -->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="undergraduate-tab" data-bs-toggle="tab" data-bs-target="#academics-undergraduate" type="button" role="tab">
                                            <span class="icon"><i class="bi bi-mortarboard"></i></span>
                                            <span class="text">ND/HND</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="graduate-tab" data-bs-toggle="tab" data-bs-target="#academics-graduate" type="button" role="tab">
                                            <span class="icon"><i class="bi bi-book"></i></span>
                                            <span class="text">PGDA</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content programs-content" data-aos="fade-up" data-aos-delay="200">
                    <!-- POST GRADUATE TAB -->
                    <div class="tab-pane fade" id="academics-graduate" role="tabpanel">
                        <div class="row g-4">
                            <!-- Program Item -->
                            <?php foreach ($data['graduate'] as $graduate) :?>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="program-item undergraduate">
                                    <div class="program-header">
                                        <span class="program-type">Postgraduate</span>
                                    </div>
                                    <div class="program-body">
                                        <h3><?php echo $graduate[0] ;?></h3>
                                        <ul class="program-details">
                                            <li><i class="bi bi-clock"></i> <?php echo $graduate[1] ;?></li>
                                            <li><i class="bi bi-mortarboard-fill"></i> <?php echo $graduate[2] ;?></li>
                                            <li><i class="bi bi-calendar-check"></i> <?php echo $graduate[3] ;?></li>
                                        </ul>
                                    </div>
                                   <!--  <div class="program-footer">
                                        <a href="#" class="program-link">View Program <i class="bi bi-arrow-right"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        <?php endforeach;?>
                        </div>
                    </div>

                    <!-- ND HND UNDERGRADUATE TAB -->
                    <div class="tab-pane fade show active" id="academics-undergraduate" role="tabpanel">
                        <div class="row g-4">
                            <!-- Program Item -->
                            <?php foreach ($data['undergraduate'] as $undergraduate) :?>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="program-item undergraduate">
                                    <div class="program-header">
                                        <span class="program-type">Undergraduate</span>
                                    </div>
                                    <div class="program-body">
                                        <h3><?php echo $undergraduate[0] ;?></h3>
                                        <ul class="program-details">
                                            <li><i class="bi bi-clock"></i> <?php echo $undergraduate[1] ;?></li>
                                            <li><i class="bi bi-mortarboard-fill"></i> <?php echo $undergraduate[2] ;?></li>
                                            <li><i class="bi bi-calendar-check"></i> <?php echo $undergraduate[3] ;?></li>
                                        </ul>
                                    </div>
                                   <!--  <div class="program-footer">
                                        <a href="#" class="program-link">View Program <i class="bi bi-arrow-right"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        <?php endforeach;?>
                        </div>
                    </div>
                </div>
<!--  ###########################################
        ###############################################
            ################################################# -->
                <div class="stats-wrapper" data-aos="fade-up">
                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="100">
                            <div class="stats-content">
                                <span class="subtitle">By The Numbers</span>
                                <h2>Our Academic Excellence</h2>
                                <p>A dynamic learning community committed to Excellence Gowth And Student Success__ Educating Minds, Inspiring Hearts.</p>
                                <a href="<?php echo URLROOT; ?>/pages/about" class="btn-about">About Our Institution</a>
                            </div>
                        </div>
                        <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                            <div class="stats-grid">
                                <div class="stat-card" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="stat-icon">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="stat-number">
                                        <span data-purecounter-start="0" data-purecounter-end="92" data-purecounter-duration="1" class="purecounter"></span>%
                                    </div>
                                    <div class="stat-title">Student Satisfaction</div>
                                </div>

                                <div class="stat-card" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="stat-icon">
                                        <i class="bi bi-journal-bookmark-fill"></i>
                                    </div>
                                    <div class="stat-number">
                                        <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>+
                                    </div>
                                    <div class="stat-title">Academic Programs</div>
                                </div>

                                <div class="stat-card" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="stat-icon">
                                        <i class="bi bi-award-fill"></i>
                                    </div>
                                    <div class="stat-number">
                                        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>+
                                    </div>
                                    <div class="stat-title">Research Centers</div>
                                </div>

                                <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="stat-icon">
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </div>
                                    <div class="stat-number">
                                        <span data-purecounter-start="0" data-purecounter-end="91" data-purecounter-duration="1" class="purecounter"></span>%
                                    </div>
                                    <div class="stat-title">Graduation Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Academics Section -->

    </main>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>