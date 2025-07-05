<?php
chdir('../');
session_start();
require_once('db/config.php');
require_once('const/school.php');
require_once('const/check_session.php');
if ($res == "1" && $level == "0") {}else{header("location:../");}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<title>SRMS - Teachers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="../">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="icon" href="images/icon.ico">
<link rel="stylesheet" type="text/css" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">
<link type="text/css" rel="stylesheet" href="loader/waitMe.css">
</head>
<body class="app sidebar-mini">

<header class="app-header"><a class="app-header__logo" href="javascript:void(0);">SRMS</a>
<a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

<ul class="app-nav">

<li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
<ul class="dropdown-menu settings-menu dropdown-menu-right">
<li><a class="dropdown-item" href="admin/profile"><i class="bi bi-person me-2 fs-5"></i> Profile</a></li>
<li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout</a></li>
</ul>
</li>
</ul>
</header>

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
<div class="app-sidebar__user">
<div>
<p class="app-sidebar__user-name"><?php echo $fname.' '.$lname; ?></p>
<p class="app-sidebar__user-designation">Administrator</p>
</div>
</div>
<ul class="app-menu">
<li><a class="app-menu__item" href="admin"><i class="app-menu__icon feather icon-monitor"></i><span class="app-menu__label">Dashboard</span></a></li>
<li><a class="app-menu__item" href="admin/academic"><i class="app-menu__icon feather icon-user"></i><span class="app-menu__label">Academic Account</span></a></li>
<li><a class="app-menu__item  active" href="admin/teachers"><i class="app-menu__icon feather icon-user"></i><span class="app-menu__label">Teachers</span></a></li>

<li class="treeview"><a class="app-menu__item" href="javascript:void(0);" data-toggle="treeview"><i class="app-menu__icon feather icon-users"></i><span class="app-menu__label">Students</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
<ul class="treeview-menu">
<li><a class="treeview-item" href="admin/register_students"><i class="icon bi bi-circle-fill"></i> Register Students</a></li>
<li><a class="treeview-item" href="admin/import_students"><i class="icon bi bi-circle-fill"></i> Import Students</a></li>
<li><a class="treeview-item" href="admin/manage_students"><i class="icon bi bi-circle-fill"></i> Manage Students</a></li>
</ul>
</li>
<li><a class="app-menu__item" href="admin/report"><i class="app-menu__icon feather icon-bar-chart-2"></i><span class="app-menu__label">Report Tool</span></a></li>
<li><a class="app-menu__item" href="admin/smtp"><i class="app-menu__icon feather icon-mail"></i><span class="app-menu__label">SMTP Settings</span></a></li>
<li><a class="app-menu__item" href="admin/system"><i class="app-menu__icon feather icon-settings"></i><span class="app-menu__label">System Settings</span></a></li>
</ul>
</aside>
<main class="app-content">
<div class="app-title">
<div>
<h1>Teachers</h1>
</div>
<ul class="app-breadcrumb breadcrumb">
<li class="breadcrumb-item"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addModal">Add</button></li>
<li class="breadcrumb-item"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#importModal">Import</button></li>
</ul>
</div>

<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="addModalLabel">Add Teachers</h5>
</div>
<div class="modal-body">
<form class="app_frm" method="POST" autocomplete="OFF" action="admin/core/new_user2">
<div class="mb-2">
<label class="form-label">First Name</label>
<input required name="fname" class="form-control" type="text" onkeypress="return lettersOnly(event)" placeholder="Enter first name">
</div>
<div class="mb-2">
<label class="form-label">Last Name</label>
<input required name="lname" class="form-control" type="text"  onkeypress="return lettersOnly(event)" placeholder="Enter last name">
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
<div class="mb-2">
<label class="form-label">Gender</label>
<select class="form-control" name="gender" required>
<option selected disabled value="">Select gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>


<div class="mb-3">
<label class="form-label">Status</label>
<select class="form-control" name="status" required>
<option selected disabled value="">Select status</option>
<option value="1">Active</option>
<option value="0">Blocked</option>
</select>
</div>

<button id="sub_btnp2" type="submit" name="submit" value="1" class="btn btn-primary app_btn">Add</button>
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</form>
</div>

</div>
</div>
</div>

<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="editModalLabel">Edit Teacher</h5>
</div>
<div class="modal-body">
<form class="app_frm" method="POST" autocomplete="OFF" action="admin/core/update_user2">
<div class="mb-2">
<label class="form-label">First Name</label>
<input id="fname" required name="fname" class="form-control" type="text" onkeypress="return lettersOnly(event)" placeholder="Enter first name">
</div>
<div class="mb-2">
<label class="form-label">Last Name</label>
<input id="lname" required name="lname" class="form-control" type="text" onkeypress="return lettersOnly(event)" placeholder="Enter last name">
</div>
<div class="mb-2">
<label class="form-label">Email Address</label>
<input id="email" required name="email" class="form-control" type="email" placeholder="Enter email address">
</div>
<div class="mb-2">
<label class="form-label">Gender</label>
<select id="gender" class="form-control" name="gender" required>
<option selected disabled value="">Select gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>


<div class="mb-3">
<label class="form-label">Status</label>
<select id="status" class="form-control" name="status" required>
<option selected disabled value="">Select status</option>
<option value="1">Active</option>
<option value="0">Blocked</option>
</select>
</div>
<input type="hidden" name="id" id="id">
<button type="submit" name="submit" value="1" class="btn btn-primary app_btn">Save</button>
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</form>
</div>

</div>
</div>
</div>

<div class="modal fade" id="importModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="importModalLabel">Import Teachers</h5>
</div>
<div class="modal-body">
<form enctype="multipart/form-data" class="app_frm" method="POST" autocomplete="OFF" action="admin/core/import_users">
<div class="mb-3">
<label class="form-label">Excel File</label>
<input required accept=".xlsx" type="file" name="file" class="form-control" accept="application/msexcel">
</div>


<div class="alert alert-info">
Download excel template from <a download href="templates/import_teachers.xlsx" class="alert-link">here</a>
</div>
<button type="submit" name="submit" value="1" class="btn btn-primary">Import</button>
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</form>
</div>

</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="tile">
<div class="tile-body">
<div class="table-responsive">
<h3 class="tile-title">Teachers</h3>
<table class="table table-hover table-bordered" id="srmsTable">
<thead>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Gender</th>
<th width="120" align="center">Status</th>
<th width="120" align="center"></th>
</tr>
</thead>
<tbody>

<?php
try {
$conn = new PDO('mysql:host='.DBHost.';dbname='.DBName.';charset='.DBCharset.';collation='.DBCollation.';prefix='.DBPrefix.'', DBUser, DBPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT * FROM tbl_staff WHERE level > 1");
$stmt->execute();
$result = $stmt->fetchAll();

foreach($result as $row)
{
if ($row[7] == "1") {
$st = '<span class="me-1 badge badge-pill bg-success">Active</span>';
}else{
$st = '<span class="me-1 badge badge-pill bg-danger">Blocked</span>';
}

?>
<tr>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
<td><?php echo $row[4];?></td>
<td><?php echo $row[3];?></td>
<td width="100" align="center"><?php echo $st;?></td>
<td width="120" align="center">
<textarea style="display:none;" id="fname_<?php echo $row[0]; ?>"><?php echo $row[1]; ?></textarea>
<textarea style="display:none;" id="lname_<?php echo $row[0]; ?>"><?php echo $row[2]; ?></textarea>
<textarea style="display:none;" id="email_<?php echo $row[0]; ?>"><?php echo $row[4]; ?></textarea>
<button onclick="set_user('<?php echo $row[0]; ?>', '<?php echo $row[3]; ?>', '<?php echo $row[7]; ?>');" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
<a onclick="del('admin/core/drop_user2?id=<?php echo $row[0]; ?>', 'Delete Teacher?');" href="javascript:void(0);" class="btn btn-danger btn-sm">Delete</a>
</td>
</tr>
<?php
}

}catch(PDOException $e)
{
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
<script type="text/javascript">$('#srmsTable').DataTable({"sort" : false});</script>
<?php require_once('const/check-reply.php'); ?>
</body>

</html>
