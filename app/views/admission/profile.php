<?php require APPROOT . '/views/admission/inc/header.php'; ?>
<?php require APPROOT . '/views/admission/inc/nav.php'; ?>
<?php require APPROOT . '/views/admission/inc/sidebar.php'; ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Admission</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URLROOT ?>/admission">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"><i class="bi bi-person-circle"></i> Candidate Details</h5>
                            <a href="<?php echo URLROOT; ?>/admission" class="btn btn-light btn-sm">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <!-- Profile Photo -->
                            <div class="mb-4">
                                <?php
                                $photo = !empty($data['user']->passport)
                                    ? URLROOT . "/" . $data['user']->passport
                                    : "https://via.placeholder.com/150x150.png?text=No+Photo";
                                ?>
                                <a href="<?php echo $photo; ?>" download>
                                    <img src="<?php echo $photo; ?>" alt="Profile Photo" class="rounded-circle shadow-sm" width="150" height="150">
                                </a>
                            </div>

                            <!-- User Details -->
                            <div class="text-start px-3">
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Full Name:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->fname . ' ' . $data['user']->mname . ' ' . $data['user']->lname); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Reg. No:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->regno); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Email:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->email); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Whatsapp Phone:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->phone); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Alternative Phone:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->phone2); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Sex | DOB</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->sex . ' | ' . $data['user']->dob); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Religion:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->religion); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Nationality:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->nationality); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Residence:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->residence); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Marital Status:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->m_status); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">State of Origin:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->stateOfOrigin); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">LGA:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->lga); ?></div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Mode of Study:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->modeOfStudy); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Highest Qualification:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->highestQualification); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Programme:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->programme); ?></div>
                                </div>

                                <!-- <hr class="shadow-sm"> -->

                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Department:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->department); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">School_of:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->school_of); ?></div>
                                </div>

                                <hr class="shadow-sm">
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Next of Kin:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->next_kin); ?></div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Phone Number:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->phone3); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Address:</div>
                                    <div class="col-sm-8"><?php echo htmlspecialchars($data['user']->address); ?></div>
                                </div>
                                <hr class="shadow-sm">
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">O'Level Doc:</div>
                                    <div class="col-sm-8">
                                        <?php if (!empty($data['user']->originDoc)) : ?>
                                            <a download href="<?php echo URLROOT . '/' . htmlspecialchars($data['user']->originDoc); ?>">
                                                Download
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Birth Cert:</div>
                                    <div class="col-sm-8">
                                        <?php if (!empty($data['user']->birthDoc)) : ?>
                                            <a download href="<?php echo URLROOT . '/' . htmlspecialchars($data['user']->birthDoc); ?>">
                                                Download
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">State of Origin Doc:</div>
                                    <div class="col-sm-8">
                                        <?php if (!empty($data['user']->originDoc)) : ?>
                                            <a download href="<?php echo URLROOT . '/' . htmlspecialchars($data['user']->originDoc); ?>">
                                                Download
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold">Date Registered:</div>
                                    <div class="col-sm-8"><?php echo date("Y-m-d H:i", strtotime($data['user']->created_at)); ?></div>
                                </div>
                                <!-- Add more DB fields here -->
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <a href="javascript:void" class="btn btn-warning">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <a href="javascript:void" class="btn btn-danger">
                                <i class="bi bi-trash"></i> Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require APPROOT . '/views/admission/inc/footer.php'; ?>