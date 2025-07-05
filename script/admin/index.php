<?php
chdir('../');
session_start();
require_once('db/config.php');
require_once('const/school.php');
require_once('const/check_session.php');
require_once('const/academic_dashboard.php');
if ($res == "1" && $level == "0") {
} else {
    header("location:../");
}
include "inc.php";
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Dashboard</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon feather icon-folder fs-1"></i>
                <div class="info">
                    <h4>Academic Terms</h4>
                    <p><b><?php echo number_format($academic_terms); ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon feather icon-user fs-1"></i>
                <div class="info">
                    <h4>Teachers</h4>
                    <p><b><?php echo number_format($teachers); ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon feather icon-users fs-1"></i>
                <div class="info">
                    <h4>Students</h4>
                    <p><b><?php echo number_format($my_students); ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon feather icon-book-open fs-1"></i>
                <div class="info">
                    <h4>Subjects</h4>
                    <p><b><?php echo number_format($subjects); ?></b></p>
                </div>
            </div>
        </div>



    </div>

</main>

<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="loader/waitMe.js"></script>
<script src="js/forms.js"></script>
<script src="js/sweetalert2@11.js"></script>

</body>

</html>