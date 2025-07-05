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
            <h1>Academic Account</h1>
        </div>

    </div>
    <div class="row">


        <div class="tile">
            <div class="tile-body">

                <?php
                try {
                    $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT * FROM tbl_staff WHERE level = '1'");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    if (count($result) < 1) {
                ?>
                        <form class="app_frm" method="POST" autocomplete="OFF" action="admin/core/new_user">
                            <div class="mb-2">
                                <label class="form-label">First Name</label>
                                <input required name="fname" class="form-control" type="text" onkeypress="return lettersOnly(event)" placeholder="Enter first name">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Last Name</label>
                                <input required name="lname" class="form-control" type="text" onkeypress="return lettersOnly(event)" placeholder="Enter last name">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Email Address</label>
                                <input required name="email" class="form-control" type="email" placeholder="Enter email address">
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
                                <label class="form-label">Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option selected disabled value="">Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <button id="sub_btnp2" type="submit" name="submit" value="1" class="btn btn-primary app_btn">Add</button>
                        </form>
                        <?php
                    } else {

                        foreach ($result as $row) {
                        ?>
                            <div class="mb-2">
                                <label class="form-label">First Name</label>
                                <input value="<?php echo $row[1]; ?>" disabled name="fname" class="form-control" type="text" placeholder="Enter first name">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Last Name</label>
                                <input value="<?php echo $row[2]; ?>" disabled required name="lname" class="form-control" type="text" placeholder="Enter last name">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Email Address</label>
                                <input value="<?php echo $row[4]; ?>" disabled required name="email" class="form-control" type="email" placeholder="Enter email address">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <select disabled class="form-control" name="gender" required>
                                    <option selected disabled value="">Select gender</option>
                                    <option <?php if ($row[4] == "Male") {
                                                print ' selected ';
                                            } ?> value="Male">Male</option>
                                    <option <?php if ($row[4] == "Female") {
                                                print ' selected ';
                                            } ?> value="Female">Female</option>
                                </select>
                            </div>

                            <div class="box-footer">
                                <a onclick="del('admin/core/drop_user?id=<?php echo $row[0]; ?>', 'Delete Academic?');" href="javascript:void(0);" class="btn btn-danger">Delete</a>
                            </div>
                <?php
                        }
                    }
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                ?>


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