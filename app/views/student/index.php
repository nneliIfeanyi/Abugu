<?php require APPROOT . '/views/student/header.php'; ?>
	<main class="app-content">
	<div class="app-title">
	<div>
	<h1>Dashboard</h1>
	</div>

	</div>
	<div class="row">
	<h4 class="mb-3">
	<?php
	$h = date('G');

	if($h>=5 && $h<=11)
	{
	echo "Good morning ".$this->details->fname."";
	}
	else if($h>=12 && $h<=15)
	{
	echo "Good afternoon ".$this->details->fname."";
	}
	else
	{
	echo "Good evening ".$this->details->fname."";
	}
	?>!
	</h4>
	</div>
	<div class="row">
	<div class="col-md-12">
	<div class="tile">
	<h4 class="tile-title">Announcements</h4>

	<div class="alert alert-dismissible alert-info">
	<strong><a href="<?php echo URLROOT;?>/student/profile">Your registration is incomplete, kindly click here to proceed.</a></strong>
	</div>
	
	<!-- <div class="col-lg-12 mb-3">
	<div class="bs-component">
	<div class="list-group">
	<a class="list-group-item list-group-item-action active"><?php //echo $row[1]; ?></a>
	<a class="list-group-item list-group-item-action"><?php// echo $row[2]; ?></a>
	<a class="list-group-item list-group-item-action disabled"><?php //echo $row[3]; ?></a></div>
	</div>
	</div> -->

	</div>
	</div>

	</div>
	</main>
<?php require APPROOT . '/views/student/footer.php'; ?>
</body>
<html>