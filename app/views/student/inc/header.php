<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title><?php echo SITENAME; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <base href="../"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/main.css">
    <link rel="icon" href="<?php echo URLROOT; ?>/images/icon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/cdn.jsdelivr.net/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css">
    <link type="text/css" rel="stylesheet" href="<?php echo URLROOT; ?>/loader/waitMe.css">
</head>

<body class="app sidebar-mini">

    <header class="app-header"><a class="app-header__logo" href="javascript:void(0);">S.M.P</a>
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

        <ul class="app-nav">

            <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <!-- <li><a class="dropdown-item" href="student/settings"><i class="bi bi-person me-2 fs-5"></i> Change Password</a></li> -->
                    <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <div>
                <p class="app-sidebar__user-name"><?php echo $this->details->fname . ' ' . $this->details->lname; ?></p>
                <p class="app-sidebar__user-designation">Student</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="<?php echo URLROOT; ?>/student"><i class="app-menu__icon feather icon-monitor"></i><span class="app-menu__label">Dashboard</span></a></li>
            <li><a class="app-menu__item" href="<?php echo URLROOT; ?>/student/profile"><i class="app-menu__icon feather icon-user"></i><span class="app-menu__label">My Profile</span></a></li>
            <!-- <li><a class="app-menu__item" href="<?php echo URLROOT; ?>/student/subjects"><i class="app-menu__icon feather icon-book-open"></i><span class="app-menu__label">My Subjects</span></a></li>
<li><a class="app-menu__item" href="<?php echo URLROOT; ?>/student/results"><i class="app-menu__icon feather icon-file-text"></i><span class="app-menu__label">My Examination Results</span></a></li>
<li><a class="app-menu__item" href="<?php echo URLROOT; ?>/student/grading-system"><i class="app-menu__icon feather icon-award"></i><span class="app-menu__label">Grading System</span></a></li>
<li><a class="app-menu__item" href="<?php echo URLROOT; ?>/student/division-system"><i class="app-menu__icon feather icon-layers"></i><span class="app-menu__label">Division System</span></a></li> -->
        </ul>
    </aside>