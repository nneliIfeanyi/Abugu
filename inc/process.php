<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['programme'] == 'ND') {
        $class = 3;
    }elseif ($_POST['programme'] == 'HND') {
        $class = 5;
    }else{
        $class = 7;
    }
   $reg_no = $_POST['regno'];
   $fname = ucfirst($_POST['fname']);
   $mname = ucfirst($_POST['mname']);
   $lname = ucfirst($_POST['lname']);
   $email = $_POST['email'];
   $gender = $_POST['sex'];
   $role = '3';
   $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $status = '1';
   //$photo = serialize($_FILES["image"]);
    try {
        $conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO admissions (fname, email) VALUES (?, ?)");
        $stmt->execute([$fname, $email]);
        $stmt = $conn->prepare("INSERT INTO tbl_students (id, fname, mname, lname, gender, email, class, password) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->execute([$reg_no, $fname, $mname, $lname, $gender, $email, $class, $pass]);
        flash('msg','You are now registered and can log in');
        redirect('script');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    redirect('pages/apply');
}
