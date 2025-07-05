<?php
chdir('../../');
session_start();
require_once('db/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$subject = $_POST['subject'];
$class = serialize($_POST['class']);
$teacher = $_POST['teacher'];
$reg_date = date('Y-m-d G:i:s');
$matches = implode(',', $_POST['class']);
$matches = preg_replace('/[A-Z0-9]/', '?', $matches);
$arr = array($subject);
$id = $_POST['id'];

foreach ($_POST['class'] as $value) {
array_push($arr, $value);
}

try {
$conn = new PDO('mysql:host='.DBHost.';dbname='.DBName.';charset='.DBCharset.';collation='.DBCollation.';prefix='.DBPrefix.'', DBUser, DBPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $conn->prepare("UPDATE tbl_subject_combinations SET class=?, subject=?, teacher=? WHERE id = ?");
$stmt->execute([$class, $subject, $teacher, $id]);

$_SESSION['reply'] = array (array("success",'Subject combination updated successfully'));
header("location:../combinations");


}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}


}else{
header("location:../");
}
?>
