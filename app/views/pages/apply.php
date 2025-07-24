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

                            <form action="<?php echo URLROOT ?>/users/register" autocomplete="OFF" method="POST">
                                <?php

                                $regno = 'SMP/2025_' . rand(100, 999);

                                ?>
                                <div class="tab-pane fade show active" id="step1" role="tabpanel">
                                    <div class="row g-4">
                                        <input type="hidden" name="regno" value="<?php echo $regno; ?>">
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <input type="text" name="fname" class="form-control" placeholder="FIRST NAME" value="<?php echo $data['fname'] ?>" required>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <input type="text" name="mname" class="form-control" placeholder="MIDDLE NAME" value="<?php echo $data['mname'] ?>" required>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <input type="text" name="lname" class="form-control" placeholder="SURNAME" value="<?php echo $data['lname'] ?>" required>
                                        </div>


                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <select name="sex" class="form-select" required>
                                                <option value="" selected="" disabled="">GENDER</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <select name="programme" class="form-select" required>
                                                <option value="" selected="" disabled="">PROGRAM OF INTEREST</option>
                                                <option value="ND">ND</option>
                                                <option value="HND">HND</option>
                                                <option value="PGD">PGD</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <select required id="mainSelect" name="school_of" class="form-select" onchange="updateSubOptions()">
                                                <option value="">SELECT FACULTY</option>
                                                <option value="SCHOOL_OF_APPLIED_ART_AND_SCIENCE">SCHOOL_OF_APPLIED_ART_AND_SCIENCE</option>
                                                <option value="SCHOOL_OF_ENGINEERING">SCHOOL_OF_ENGINEERING</option>
                                                <option value="SCHOOL_OF_ENVIRONMENTAL">SCHOOL_OF_ENVIRONMENTAL</option>
                                                <option value="SCHOOL_OF_BUSINESS_ADMINISTRATION_AND_MANAGEMENT">SCHOOL_OF_BUSINESS_ADMINISTRATION_AND_MANAGEMENT</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <select id="subSelect" required name="department" class="form-select">
                                                <!-- Options will be added dynamically -->
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <select class="form-control" name="modeOfStudy" required style="width: 100%;">
                                                <option value="" selected disabled> MODE OF STUDY</option>
                                                <option value="full-time">Full-Time</option>
                                                <option value="weekend">Weekend</option>
                                                <option value="Evening">Evening</option>
                                                <option value="part-time">Part-time</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <select class="form-control" name="highestQualification" required style="width: 100%;">
                                                <option value="" selected disabled>CURRENT HIGHEST QUALIFICATION</option>
                                                <option value="o'level">Olevel</option>
                                                <option value="ND">National Diploma</option>
                                                <option value="HND">Higher National Diploma</option>
                                                <option value="BD">Bachelor's Degree</option>
                                                <option value="MD">Master's Degree</option>
                                                <option value="DD">Doctorate Degree</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <input type="email" name="email" class="form-control  <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" placeholder="EMAIL" required>
                                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <input type="tel" name="phone" class="form-control" value="<?php echo $data['phone']; ?>" placeholder="PHONE NUMBER" required maxlenght="11" pattrern="\d{11}">
                                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <input type="password" name="password" class="form-control  <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" placeholder="PASSWORD" required>
                                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                        </div>
                                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <input type="password" name="c_password" class="form-control  <?php echo (!empty($data['c_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['c_password']; ?>" placeholder="COMFIRM PASSWORD" required>
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
    <script>
        const subSelect = document.getElementById('subSelect');
        // const subLabel = document.querySelector('label[for="subSelect"]');

        const optionsMap = {
            SCHOOL_OF_APPLIED_ART_AND_SCIENCE: [
                'Computer science department',
                'Science Laboratory and Technology',
                'Mass communication',
                'Food science and Technology',
                'Fishery', 'Statistics'
            ],
            SCHOOL_OF_ENGINEERING: [
                'Computer Engineering',
                'Electrical Electronic Engineering',
                'Mechanical Engineering',
                'Civil Engineering',
                'Agricultural Engineering'
            ],
            SCHOOL_OF_ENVIRONMENTAL: ['Quantity Survey', 'Architectural department ', 'Building Technology', 'Urban and Regional Planning', 'Survey and Geo informatics'],
            SCHOOL_OF_BUSINESS_ADMINISTRATION_AND_MANAGEMENT: ['Business Administration', 'Banking and Finance', 'Marketing', 'Accounting', 'Public Administration']
        };

        function updateSubOptions() {
            const mainValue = document.getElementById('mainSelect').value;

            // Clear existing options
            subSelect.innerHTML = '';

            if (optionsMap[mainValue]) {
                // Add relevant options
                optionsMap[mainValue].forEach(item => {
                    const opt = document.createElement('option');
                    opt.value = item.toLowerCase();
                    opt.textContent = item;
                    subSelect.appendChild(opt);
                });

                // Show second select and label
                subSelect.style.display = 'inline';
            } else {
                // Hide second select if nothing is selected
                subSelect.style.display = 'none';
            }
        }
    </script>
    <script>
        if (performance.navigation.type === 1) {
            sessionStorage.clear();
        }
        // Get all select elements
        const selects = document.querySelectorAll('select');

        selects.forEach((select, index) => {
            // Create a unique key for each select based on index
            const key = `select-${ index}`;

            // Restore saved value if available
            const savedValue = sessionStorage.getItem(key);
            if (savedValue) select.value = savedValue;

            // Save value on change
            select.addEventListener('change', () => {
                sessionStorage.setItem(key, select.value);
            });
            setTimeout(() => {
                sessionStorage.clear();
            }, 5 * 60 * 1000);
        });
    </script>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>