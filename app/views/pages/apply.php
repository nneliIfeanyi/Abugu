<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="admissions-page">

    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
            <div class="container position-relative">
                <h1>Application</h1>
                <p>We are excited to welcome new students into our vibrant learning community.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Application</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <section id="admissions" class="admissions section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 g-lg-5">
                    <div class="col-lg-8 offset-2">

                        <div class="request-info" data-aos="fade-up">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Registration Form</h3>
                                    <p>Please fill out the form below with accurate details to begin your enrollment.</p>

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
                                            <input type="tel" name="address" class="form-control" placeholder="Address">
                                        </div>

                                        <div class="mb-3">
                                            <input type="tel" name="state" class="form-control" placeholder="State of origin">
                                        </div>
                                        <div class="mb-3">
                                            <input type="tel" name="Nationality" class="form-control" placeholder="Nationality">
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
                                            <textarea name="message" class="form-control" rows="3" placeholder="Bio" required=""></textarea>
                                        </div>
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your request has been sent. Thank you!</div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Continue</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>