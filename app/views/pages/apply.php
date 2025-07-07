<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="admissions-page">

    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(<?php echo URLROOT; ?>/assets/img/capture2.png);">
            <div class="container position-relative">
                <h1>Application</h1>
                <p>We are excited to welcome new students into our vibrant learning community.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="<?php echo URLROOT; ?>/pages">Home</a></li>
                        <li class="current">Application</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <section id="admissions" class="admissions section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="card-title">Registration Form</h3>
                        <p>Please fill out the form below with accurate details to begin your enrollment.</p>
                        <div class="tab-content programs-content mt-4" data-aos="fade-up" data-aos-delay="200">
                           
                           <form action="<?php echo URLROOT?>/users/register" autocomplete="OFF" method="POST">
                            <?php

                                $regno = 'SMP/2025_'.rand(100,999);

                            ?>
                            <div class="tab-pane fade show active" id="step1" role="tabpanel">
                                <div class="row g-4">
                                    <input type="hidden" name="regno" value="<?php echo $regno;?>">
                                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                       <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $data['fname']?>" required="">
                                    </div>
                                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                        <input type="text" name="mname" class="form-control" placeholder="Middle Name" value="<?php echo $data['mname']?>" required="">
                                    </div>
                                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                         <input type="text" name="lname" class="form-control" placeholder="SurName" value="<?php echo $data['lname']?>" required="">
                                     </div>
                                      

                                      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                          <select name="sex" class="form-select" required="">
                                              <option value="" selected="" disabled="">Gender</option>
                                              <option value="male">Male</option>
                                              <option value="female">Female</option>
                                          </select>
                                      </div>
                                      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                          <select name="programme" class="form-select" required="">
                                              <option value="" selected="" disabled="">Program of Interest</option>
                                              <option value="ND">ND</option>
                                              <option value="HND">HND</option>
                                              <option value="PGDA">PGDA</option>
                                          </select>
                                      </div>
                                      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                         <input type="email" name="email" class="form-control  <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" placeholder="Email Address" required="">
                                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                      </div>
                                      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                          <input type="password" name="password" class="form-control  <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" placeholder="Your Password" required="">
                                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                      </div>
                                      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                          <input type="password" name="c_password" class="form-control  <?php echo (!empty($data['c_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['c_password']; ?>" placeholder="Retype Password" required="">
                                        <span class="invalid-feedback"><?php echo $data['c_password_err']; ?></span>
                                      </div>
                                       <div class="text-center">
                                        <button type="submit" class="btn btn-success">Continue</button>
                                     </div>
                                </div>
                            </div>
                           </form>
                        </div>
                 </div>
             </div>
         </div>
     </section>

    </main>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>