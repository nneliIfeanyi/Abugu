<?php require '../inc/header.php'; ?>

<body class="admissions-page">

    <?php require '../inc/navbar.php'; ?>
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
                           
                           <form action="<?php echo URLROOT?>/inc/process.php" method="POST">
                            <?php

                                $reg_no = 'SMP/2025_'.rand(10,10000);
                                $password = '123456';

                            ?>
                            <div class="tab-pane fade show active" id="step1" role="tabpanel">
                                <div class="row g-4">
                                    <input type="hidden" name="regno" value="<?php echo $reg_no;?>">
                                    <input type="hidden" name="password" value="<?php echo $password;?>">
                                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                       <input type="text" name="fname" class="form-control" placeholder="First Name" required=""> 
                                    </div>
                                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                        <input type="text" name="mname" class="form-control" placeholder="Middle Name" required="">
                                    </div>
                                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                         <input type="text" name="lname" class="form-control" placeholder="SurName" required="">
                                     </div>
                                      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                          <input type="email" name="email" class="form-control" placeholder="Email Address" required="">
                                      </div>
                                     <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                          <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                      </div>

                                      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                          <input type="tel" name="residence" class="form-control" placeholder="Address">
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
                                       <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Continue</button>
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
    <?php require '../inc/footer.php'; ?>
</body>

</html>