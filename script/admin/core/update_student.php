<?php
chdir('../../');
session_start();
require_once('db/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$reg_no = $_POST['id'];
$fname = ucfirst($_POST['fname']);
$mname = ucfirst($_POST['mname']);
$lname = ucfirst($_POST['lname']);
$email = $_POST['email'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$role = '3';
$status = '1';
$photo = serialize($_FILES["image"]);



try {
$conn = new PDO('mysql:host='.DBHost.';dbname='.DBName.';charset='.DBCharset.';collation='.DBCollation.';prefix='.DBPrefix.'', DBUser, DBPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT id, email FROM tbl_staff WHERE email = ? AND id != ?
  UNION SELECT id, email FROM tbl_students WHERE email = ? AND id != ?");
$stmt->execute([$email, $reg_no, $email, $reg_no]);
$result = $stmt->fetchAll();

if (count($result) > 0) {
$_SESSION['reply'] = array (array("error",'Email is used'));
header("location:../students");
}else{


if($_FILES['image']['name'] == "")  {
$img = $_POST['old_photo'];
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
unlink('images/students/'.$_POST['old_photo'].'');
}else{
$img = 'DEFAULT';
}
}

}

$stmt = $conn->prepare("UPDATE tbl_students SET fname=?, mname=?, lname=?, gender=?, email=?, class=?, display_image=? WHERE id = ?");
$stmt->execute([$fname, $mname, $lname, $gender, $email, $class, $img, $reg_no]);

$_SESSION['reply'] = array (array("success",'Student updated successfully'));
header("location:../students");
}

}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}



}else{
header("location:../");
}
?>
