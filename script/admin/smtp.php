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
            <h1>SMTP Settings</h1>
        </div>

    </div>
    <div class="row">


        <div class="tile">
            <div class="tile-body">
                <form class="app_frm" method="POST" autocomplete="OFF" action="admin/core/update_smtp">
                    <?php
                    try {
                        $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $stmt = $conn->prepare("SELECT * FROM tbl_smtp");
                        $stmt->execute();
                        $result = $stmt->fetchAll();


                        foreach ($result as $row) {
                    ?>
                            <div class="form-group mb-2">
                                <label class="control-label">SMTP Server</label>
                                <input required type="text" name="mail_server" value="<?php echo $row[1]; ?>" class="form-control" placeholder="Enter SMTP Server">
                            </div>

                            <div class="form-group mb-2">
                                <label class="control-label">SMTP Username</label>
                                <input required type="text" name="mail_username" value="<?php echo $row[2]; ?>" class="form-control" placeholder="Enter SMTP Username">
                            </div>

                            <div class="form-group mb-2">
                                <label class="control-label">SMTP Password</label>
                                <input required type="text" name="mail_password" value="<?php echo $row[3]; ?>" class="form-control" placeholder="Enter SMTP Password">
                            </div>

                            <div class="form-group mb-2">
                                <label class="control-label">SMTP Port</label>
                                <input required type="text" name="mail_port" value="<?php echo $row[4]; ?>" class="form-control" placeholder="Enter SMTP Port">
                            </div>

                            <div class="form-group mb-3">
                                <label class="control-label">Security connection</label>
                                <select class="form-control" name="mail_security" required>
                                    <option value="" selected disabled>Select One</option>
                                    <option <?php if ($row[5] == "ssl") {
                                                print ' selected ';
                                            } ?> value="ssl">SSL</option>
                                    <option <?php if ($row[5] == "tls") {
                                                print ' selected ';
                                            } ?> value="tls">TLS</option>
                                </select>
                            </div>

                            <div class="box-footer">
                                <button type="submit" name="submit" value="1" class="btn btn-primary app_btn">Update</button>
                            </div>
                </form>
        <?php
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