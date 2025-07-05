<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>ADMIN PORTAL</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="../">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" href="images/icon.ico">
    <link rel="stylesheet" type="text/css" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">
    <script src="summernote/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="summernote/summernote-lite.min.css" rel="stylesheet">
    <script src="summernote/summernote-lite.min.js"></script>
    <script src="summernote/summernote-fontawesome.js"></script>
    <link type="text/css" rel="stylesheet" href="loader/waitMe.css">
</head>

<body class="app sidebar-mini">

    <header class="app-header"><a class="app-header__logo" href="javascript:void(0);">ST MARY'S</a>
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

        <ul class="app-nav">

            <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="academic/profile"><i class="bi bi-person me-2 fs-5"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <div>
                <p class="app-sidebar__user-name"><?php echo $fname . ' ' . $lname; ?></p>
                <p class="app-sidebar__user-designation">Academic Admin</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="academic"><i class="app-menu__icon feather icon-monitor"></i><span class="app-menu__label">Dashboard</span></a></li>
            <li><a class="app-menu__item" href="academic/terms"><i class="app-menu__icon feather icon-folder"></i><span class="app-menu__label">Semesters</span></a></li>

            <li><a class="app-menu__item" href="academic/classes"><i class="app-menu__icon feather icon-home"></i><span class="app-menu__label">Classes</span></a></li>
            <li><a class="app-menu__item" href="academic/subjects"><i class="app-menu__icon feather icon-book"></i><span class="app-menu__label">Courses</span></a></li>
            <li><a class="app-menu__item" href="academic/combinations"><i class="app-menu__icon feather icon-book-open"></i><span class="app-menu__label">Subject Combinations</span></a></li>
            <li class="treeview"><a class="app-menu__item" href="javascript:void(0);" data-toggle="treeview"><i class="app-menu__icon feather icon-users"></i><span class="app-menu__label">Students</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="academic/promote_students"><i class="icon bi bi-circle-fill"></i> Promote Students</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="javascript:void(0);" data-toggle="treeview"><i class="app-menu__icon feather icon-file-text"></i><span class="app-menu__label">Examination Results</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">

                    <li><a class="treeview-item" href="academic/manage_results"><i class="icon bi bi-circle-fill"></i> Manage Results</a></li>
                    <li><a class="treeview-item" href="academic/individual_results"><i class="icon bi bi-circle-fill"></i> Individual Results</a></li>
                </ul>
            </li>
            <li><a class="app-menu__item" href="academic/report"><i class="app-menu__icon feather icon-bar-chart-2"></i><span class="app-menu__label">Report Tool</span></a></li>
            <li><a class="app-menu__item" href="academic/grading-system"><i class="app-menu__icon feather icon-award"></i><span class="app-menu__label">Grading System</span></a></li>
            <!-- <li><a class="app-menu__item" href="academic/division-system"><i class="app-menu__icon feather icon-layers"></i><span class="app-menu__label">Division System</span></a></li> -->
            <li><a class="app-menu__item active" href="academic/announcement"><i class="app-menu__icon feather icon-bell"></i><span class="app-menu__label">Announcements</span></a></li>
        </ul>
    </aside>