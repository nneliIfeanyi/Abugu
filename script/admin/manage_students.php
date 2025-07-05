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
            <h1>Manage Students</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 center_form">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <h3 class="tile-title">Manage Students</h3>
                        <form class="app_frm" method="POST" autocomplete="OFF" action="admin/core/list_students">

                            <div class="mb-2">
                                <label class="form-label">Select Class</label>
                                <select multiple="true" class="form-control select2" name="class[]" required style="width: 100%;">
                                    <?php
                                    try {
                                        $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                                        $stmt = $conn->prepare("SELECT * FROM tbl_classes");
                                        $stmt->execute($myclasses);
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


                            <button type="submit" name="submit" value="1" class="btn btn-primary app_btn">Manage Students</button>
                        </form>
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
<script src="js/forms.js"></script>
<script src="js/sweetalert2@11.js"></script>
<?php require_once('const/check-reply.php'); ?>
<script src="select2/dist/js/select2.full.min.js"></script>
<?php require_once('const/check-reply.php'); ?>
<script>
    $('.select2').select2()
</script>
</body>

</html>