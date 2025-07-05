<?php
chdir('../');
session_start();
require_once('db/config.php');
require_once('const/school.php');
require_once('const/check_session.php');

if ($res == "1" && $level == "0") {
} else {
    header("location:../");
}
include "inc.php";
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>System Settings</h1>
        </div>

    </div>
    <div class="row">


        <div class="tile">
            <div class="tile-body">
                <form class="app_frm" method="POST" enctype="multipart/form-data" autocomplete="OFF" action="admin/core/update_system">
                    <div class="form-group mb-2">
                        <label class="control-label">School Name</label>
                        <input required type="text" name="name" value="<?php echo WBName; ?>" class="form-control" placeholder="Enter School Name">
                    </div>

                    <div class="form-group mb-3">
                        <label class="control-label">School Logo</label>
                        <input type="file" name="company_logo" class="form-control">
                    </div>
                    <input type="hidden" name="old_logo" value="<?php echo WBLogo; ?>">
                    <div class="box-footer">
                        <button type="submit" name="submit" value="1" class="btn btn-primary app_btn">Update</button>
                    </div>
                </form>


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
<?php require_once('const/check-reply.php'); ?>
</body>

</html>