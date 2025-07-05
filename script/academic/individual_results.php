<?php
chdir('../');
session_start();
require_once('db/config.php');
require_once('const/school.php');
require_once('const/check_session.php');
if ($res == "1" && $level == "1") {
} else {
    header("location:../");
}
include "inc.php";
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Individual Results</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 center_form">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <h3 class="tile-title">Individual Results</h3>
                        <form enctype="multipart/form-data" action="academic/core/start_edit" class="app_frm" method="POST" autocomplete="OFF">

                            <div class="mb-2">
                                <label class="form-label">Select Student</label>
                                <select class="form-control select2" name="student" required style="width: 100%;">
                                    <option value="" selected disabled> Select One</option>
                                    <?php
                                    try {
                                        $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        $stmt = $conn->prepare("SELECT * FROM tbl_students");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();

                                        foreach ($result as $row) {
                                    ?>
                                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1] . ' ' . $row[2] . ' ' . $row[3] . ' (' . $row[0] . ')'; ?> </option>
                                    <?php
                                        }
                                    } catch (PDOException $e) {
                                        echo "Connection failed: " . $e->getMessage();
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Select Term</label>
                                <select class="form-control select2" name="term" required style="width: 100%;">
                                    <option selected disabled value="">Select One</option>
                                    <?php
                                    try {
                                        $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        $stmt = $conn->prepare("SELECT * FROM tbl_terms WHERE status = '1'");
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

                            <div class="">
                                <button class="btn btn-primary app_btn" type="submit">View Results</button>
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