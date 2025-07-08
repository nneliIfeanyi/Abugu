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

			if ($h >= 5 && $h <= 11) {
				echo "Good morning " . $this->details->fname . "";
			} else if ($h >= 12 && $h <= 15) {
				echo "Good afternoon " . $this->details->fname . "";
			} else {
				echo "Good evening " . $this->details->fname . "";
			}
			?>!
		</h4>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<h4 class="tile-title">Announcements</h4>

				<div class="alert alert-dismissible alert-info">
					<?php flash('register_success');?>
					<strong><a href="<?php echo URLROOT; ?>/student/profile">Your registration is incomplete, kindly click here to proceed.</a></strong>
				</div>

				<!-- <div class="col-lg-12 mb-3">
	<div class="bs-component">
	<div class="list-group">
	<a class="list-group-item list-group-item-action active"><?php //echo $row[1]; 
																?></a>
	<a class="list-group-item list-group-item-action"><? php // echo $row[2]; 
														?></a>
	<a class="list-group-item list-group-item-action disabled"><?php //echo $row[3]; 
																?></a></div>
	</div>
	</div> -->

			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="tile">

				<div class="kv-detail-view">
					<table class="detail-view table table-hover" data-krajee-kvdetailview="kvDetailView_fd109e89">
						<tbody>
							<tr class="default">
								<th colspan="2">Profile Photo <span></span></th>
							</tr>
							<tr>
								<th colspan="2">
									<div class="row">
										<div class="col-xs-6 col-md-3">
											<a href="javascript:void(0);" data-toggle="modal" class="img-rounded">
												<?php
												if ($this->details->passport == "") : ?>
													<img src="<?php echo URLROOT; ?>/images/students/<?php echo $this->details->sex; ?>.png" class="avatar_img">
												<?php else: ?>
													<img src="<?php echo URLROOT; ?>/images/students/<?php echo $this->details->passport; ?>" class="avatar_img">
												<?php endif; ?>
											</a>
										</div>

									</div>
								</th>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Registration Number</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->regno; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">First Name</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->fname; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Middle Name</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->mname; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Last Name</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->lname; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Gender</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->sex; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Email</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->email; ?> </div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Programme enrolled</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->programme; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Faculty</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->school_of; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Department</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->department; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Mode of study</th>
								<td>
									<div class="kv-attribute"><?php echo $this->details->modeOfStudy; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%; text-align: ; vertical-align: ;">Proceed registration</th>
								<td>
									<div class="kv-attribute"><a href="<?php echo URLROOT; ?>/student/profile" class="btn btn-primary app_btn" type="submit">Click me</a></div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>


			</div>
		</div>

	</div>
</main>
<?php require APPROOT . '/views/student/footer.php'; ?>
</body>
<html>