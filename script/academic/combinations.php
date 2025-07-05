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
      <h1>Subject Combinations</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addModal">Add</button></li>
    </ul>
  </div>

  <div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add Subject Combinations</h5>
        </div>
        <div class="modal-body">
          <form class="app_frm" method="POST" autocomplete="OFF" action="academic/core/new_comb">


            <div class="mb-2">
              <label class="form-label">Select Subject</label>
              <select class="form-control select2" name="subject" required style="width: 100%;">
                <option selected disabled value="">Select one</option>
                <?php
                try {
                  $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $stmt = $conn->prepare("SELECT * FROM tbl_subjects ORDER BY name");
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
              <label class="form-label">Select Class</label>
              <select multiple="true" class="form-control select2" name="class[]" required style="width: 100%;">
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

            <div class="mb-3">
              <label class="form-label">Select Teacher</label>
              <select class="form-control select2" name="teacher" required style="width: 100%;">
                <option selected disabled value="">Select one</option>
                <?php
                try {
                  $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $stmt = $conn->prepare("SELECT * FROM tbl_staff WHERE level = '2'");
                  $stmt->execute();
                  $result = $stmt->fetchAll();

                  foreach ($result as $row) {
                ?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[1] . ' ' . $row[2]; ?> </option>
                <?php
                  }
                } catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
                }
                ?>
              </select>
            </div>

            <button type="submit" name="submit" value="1" class="btn btn-primary app_btn">Add</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Subject Combination</h5>
        </div>
        <div class="modal-body" id="comb_feedback">

        </div>

      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <h3 class="tile-title">Subject Combinations</h3>
            <table class="table table-hover table-bordered" id="srmsTable">
              <thead>
                <tr>
                  <th>Subject</th>
                  <th>Teacher</th>
                  <th>Classes</th>
                  <th>Added On</th>
                  <th width="120" align="center"></th>
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


                  $stmt = $conn->prepare("SELECT * FROM tbl_subject_combinations
  LEFT JOIN tbl_subjects ON tbl_subject_combinations.subject = tbl_subjects.id
  LEFT JOIN tbl_staff ON tbl_subject_combinations.teacher = tbl_staff.id");
                  $stmt->execute();
                  $result = $stmt->fetchAll();

                  foreach ($result as $row) {
                    $class_list = unserialize($row[1]);
                ?>

                    <tr>
                      <td><?php echo $row[6]; ?></td>
                      <td><?php echo $row[8] . ' ' . $row[9]; ?></td>
                      <td>
                        <?php
                        $st = 1;
                        foreach ($class_list as $value2) {
                          if ($st < count($class_list)) {
                            print '' . $empty_classes[$value2] . ', ';
                          } else {
                            print '' . $empty_classes[$value2] . '';
                          }
                          $st++;
                        }
                        ?>
                      </td>
                      <td><?php echo $row[4]; ?></td>
                      <td align="center">
                        <a onclick="set_combination('<?php echo $row[0]; ?>');" class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                        <a onclick="del('academic/core/drop_comb?id=<?php echo $row[0]; ?>', 'Delete Subject Combination?');" class="btn btn-danger btn-sm" href="javascript:void(0);">Delete</a>
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
  $('.select2').select2({
    dropdownParent: $("#addModal")
  })
</script>
</body>

</html>