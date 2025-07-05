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
            <h1>Register Students</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 center_form">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <h3 class="tile-title">Register Students</h3>
                        <form enctype="multipart/form-data" action="admin/core/new_student" class="app_frm" method="POST" autocomplete="OFF">
                            <div class="mb-2">
                                <label class="form-label">Registration Number</label>
                                <input name="regno" required class="form-control" type="text" placeholder="Enter registration number">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">First Name</label>
                                <input name="fname" required class="form-control" type="text" onkeypress="return lettersOnly(event)" placeholder="Enter first name">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Middle Name</label>
                                <input name="mname" required class="form-control" type="text" onkeypress="return lettersOnly(event)" placeholder="Enter middle name">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Last Name</label>
                                <input name="lname" required class="form-control" type="text" onkeypress="return lettersOnly(event)" placeholder="Enter last name">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option selected disabled value="">Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Select Class</label>
                                <select class="form-control select2" name="class" required style="width: 100%;">
                                    <option value="" selected disabled> Select One</option>
                                    <?php
                                    try {
                                        $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        $stmt = $conn->prepare("SELECT * FROM tbl_classes");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();

                                        foreach ($result as $row) {
                                    ?>
                                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?> </option>
                                    <?php
                                        }
                                    } catch (PDOException $e) {
                                        echo "Connection failed: " . $e->getMessage();
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Email</label>
                                <input name="email" required class="form-control" type="text" placeholder="Enter email address">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="npass" name="password" placeholder="***************">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cnpass" placeholder="***************">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Display Image (Optional)</label>
                                <input name="image" class="form-control" type="file" accept=".png, .jpg, .jpeg">
                            </div>

                            <div class="">
                                <button id="sub_btnp2" class="btn btn-primary app_btn" type="submit">Register Student</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

</main>

<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="loader/waitMe.js"></script>
<script src="js/sweetalert2@11.js"></script>
<script src="js/forms.js"></script>
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.html"></script>
<script type="text/javascript">
    $('#srmsTable').DataTable({
        "sort": false
    });
</script>
<script src="select2/dist/js/select2.full.min.js"></script>
<?php require_once('const/check-reply.php'); ?>
<script>
    $('.select2').select2()
</script>
</body>

</html>