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
if (!isset($_SESSION['student_list'])) {
    header("location:./");
}
$students = $_SESSION['student_list'];
//$matches = implode(',', $students);
//$matches = preg_replace('/[A-Z0-9]/', '?', $matches);
$matches = str_split(str_repeat("?", count($students)));
$matches = implode(',', $matches);
// print_r($matches);
// exit;
include "inc.php";
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Manage Students</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <h3 class="tile-title">Manage Students</h3>
                        <table class="table table-hover table-bordered" id="srmsTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Registration Number</th>
                                    <th>Firstname</th>
                                    <th>Middlename</th>
                                    <th>Lastname</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Class</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                try {
                                    $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $empty_classes = array();

                                    $stmt = $conn->prepare("SELECT * FROM tbl_classes");
                                    $stmt->execute();
                                    $classes = $stmt->fetchAll();

                                    foreach ($classes as $value) {
                                        $empty_classes[$value[0]] = $value[1];
                                    }


                                    $stmt = $conn->prepare("SELECT * FROM tbl_students WHERE class IN ($matches)");
                                    $stmt->execute($students);
                                    $result = $stmt->fetchAll();

                                    foreach ($result as $row) {
                                ?>

                                        <tr>
                                            <td width="10">
                                                <?php
                                                if ($row[9] == "DEFAULT") {
                                                ?><img src="images/students/<?php echo $row[4]; ?>.png" class="avatar_img_sm"><?php
                                                                            } else {
                                                                                ?><img src="images/students/<?php echo $row[9]; ?>" class="avatar_img_sm"><?php
                                                                            }
                                                                            ?>
                                            </td>
                                            <td><?php echo $row[0]; ?></td>
                                            <td><?php echo $row[1]; ?></td>
                                            <td><?php echo $row[2]; ?></td>
                                            <td><?php echo $row[3]; ?></td>
                                            <td><?php echo $row[4]; ?></td>
                                            <td><?php echo $row[5]; ?></td>
                                            <td><?php echo $empty_classes[$row[6]]; ?></td>

                                            <td align="center" width="130">

                                                <textarea style="display:none;" id="fname_<?php echo $row[0]; ?>"><?php echo $row[1]; ?></textarea>
                                                <textarea style="display:none;" id="mname_<?php echo $row[0]; ?>"><?php echo $row[2]; ?></textarea>
                                                <textarea style="display:none;" id="lname_<?php echo $row[0]; ?>"><?php echo $row[3]; ?></textarea>
                                                <textarea style="display:none;" id="gender_<?php echo $row[0]; ?>"><?php echo $row[4]; ?></textarea>

                                                <textarea style="display:none;" id="email_<?php echo $row[0]; ?>"><?php echo $row[5]; ?></textarea>
                                                <textarea style="display:none;" id="class_<?php echo $row[0]; ?>"><?php echo $row[6]; ?></textarea>
                                                <textarea style="display:none;" id="img_<?php echo $row[0]; ?>"><?php echo $row[9]; ?></textarea>
                                                <textarea style="display:none;" id="status_<?php echo $row[0]; ?>"><?php echo $row[10]; ?></textarea>

                                                <a onclick="set_student('<?php echo $row[0]; ?>');" class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                                                <a onclick="del('admin/core/drop_student?id=<?php echo $row[0]; ?>&img=<?php echo $row[9]; ?>', 'Delete Student?');" class="btn btn-danger btn-sm" href="javascript:void(0);">Delete</a>
                                            </td>

                                        </tr>
                                <?php
                                    }
                                } catch (PDOException $e) {
                                    echo "Connection failed: " . $e->getMessage();
                                }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Student</h5>
                </div>
                <div class="modal-body">

                    <form enctype="multipart/form-data" action="admin/core/update_student" class="app_frm" method="POST" autocomplete="OFF">
                        <div class="mb-2">
                            <label class="form-label">First Name</label>
                            <input id="fname" name="fname" required class="form-control" onkeypress="return lettersOnly(event)" type="text" placeholder="Enter first name">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Middle Name</label>
                            <input id="mname" name="mname" required class="form-control" onkeypress="return lettersOnly(event)" type="text" placeholder="Enter middle name">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Last Name</label>
                            <input id="lname" name="lname" required class="form-control" onkeypress="return lettersOnly(event)" type="text" placeholder="Enter last name">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Gender</label>
                            <select id="gender" class="form-control" name="gender" required>
                                <option selected disabled value="">Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Select Class</label>
                            <select id="class" class="form-control select2" name="class" required style="width: 100%;">
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
                            <input id="email" name="email" required class="form-control" type="text" placeholder="Enter email address">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Display Image (Optional)</label>
                            <input name="image" class="form-control" type="file" accept=".png, .jpg, .jpeg">
                        </div>

                        <input type="hidden" name="old_photo" id="photo">
                        <input type="hidden" name="id" id="id">
                        <div class="">
                            <button class="btn btn-primary app_btn" type="submit">Save</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>

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

</script>
</body>

</html>