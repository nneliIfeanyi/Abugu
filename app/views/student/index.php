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
				<?php flash('register_success'); ?>
				<div class="alert alert-dismissible alert-info">
					<strong><a href="<?php echo URLROOT; ?>/student/profile">Registration is incomplete click here to proceed.</a></strong>
				</div>
				<div class="table-responsive">
					<table class="table table-hover">
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
													<img src="<?php echo URLROOT; ?>/<?php echo $this->details->passport; ?>" class="avatar_img">
												<?php endif; ?>
											</a>
										</div>

									</div>
								</th>
							</tr>
							<tr>
								<th style="width: 20%;">Registration Number</th>
								<td>
									<div class=""><?php echo $this->details->regno; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%;">First Name</th>
								<td>
									<div class=""><?php echo $this->details->fname; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%;">Middle Name</th>
								<td>
									<div class=""><?php echo $this->details->mname; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%;">Last Name</th>
								<td>
									<div class=""><?php echo $this->details->lname; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%;">Gender</th>
								<td>
									<div class=""><?php echo $this->details->sex; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%;">Email</th>
								<td>
									<div class=""><?php echo $this->details->email; ?> </div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%;">Programme enrolled</th>
								<td>
									<div class=""><?php echo $this->details->programme; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%;">Faculty</th>
								<td>
									<div class=""><?php echo $this->details->school_of; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%;">Department</th>
								<td>
									<div class=""><?php echo $this->details->department; ?></div>
								</td>
							</tr>
							<tr>
								<th style="width: 20%;">Mode of study</th>
								<td>
									<div class=""><?php echo $this->details->modeOfStudy; ?></div>
								</td>

							<tr>
								<th style="width: 20%;">Proceed registration</th>
								<td>
									<div class=""><a href="<?php echo URLROOT; ?>/student/profile" class="btn btn-primary app_btn" type="submit">Click me</a></div>
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