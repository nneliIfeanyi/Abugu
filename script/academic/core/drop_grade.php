<?php
chdir('../../');
session_start();
require_once('db/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

$id = $_GET['id'];

try {
$conn = new PDO('mysql:host='.DBHost.';dbname='.DBName.';charset='.DBCharset.';collation='.DBCollation.';prefix='.DBPrefix.'', DBUser, DBPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("DELETE FROM tbl_grade_system WHERE id = ?");
$stmt->execute([$id]);

$_SESSION['reply'] = array (array("success",'Grade deleted'));
header("location:../grading-system");

}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}


}else{
header("location:../");
}
?>
