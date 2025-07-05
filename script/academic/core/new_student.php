<?php
chdir('../../');
session_start();
require_once('db/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$reg_no = $_POST['regno'];
$fname = ucfirst($_POST['fname']);
$mname = ucfirst($_POST['mname']);
$lname = ucfirst($_POST['lname']);
$email = $_POST['email'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$role = '3';
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$status = '1';
$photo = serialize($_FILES["image"]);



try {
$conn = new PDO('mysql:host='.DBHost.';dbname='.DBName.';charset='.DBCharset.';collation='.DBCollation.';prefix='.DBPrefix.'', DBUser, DBPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT id, email FROM tbl_staff WHERE email = ? OR id = ? UNION SELECT id, email FROM tbl_students WHERE email = ? OR id = ?");
$stmt->execute([$email, $reg_no, $email, $reg_no]);
$result = $stmt->fetchAll();

if (count($result) > 0) {
$_SESSION['reply'] = array (array("error",'Email or registration number is used'));
header("location:../register_students");
}else{


if($_FILES['image']['name'] == "")  {
$img = 'DEFAULT';
}else{

$target_dir = "images/students/";
$img_ = unserialize($photo);
$target_file = $target_dir . basename($img_["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$destn_file = 'avator_'.time().'.'.$imageFileType.'';
$destn_upload = $target_dir . $destn_file;

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
$img = 'DEFAULT';
}else{
if (move_uploaded_file($img_["tmp_name"], $destn_upload)) {
$img = $destn_file;
}else{
$img = 'DEFAULT';
}
}

}

$stmt = $conn->prepare("INSERT INTO tbl_students (id, fname, mname, lname, gender, email, class, password, display_image) VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->execute([$reg_no, $fname, $mname, $lname, $gender, $email, $class, $pass, $img]);

$_SESSION['reply'] = array (array("success",'Student registered successfully'));
header("location:../register_students");
}

}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}



}else{
header("location:../");
}
?>
