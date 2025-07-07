<?php require APPROOT . '/views/student/header.php'; ?>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1>My Profile</h1>
		</div>

	</div>
	<div class="program-tabs">
		<ul class="nav nav-tabs justify-content-center" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#academics-all" type="button" role="tab">
					<span class="icon"><i class="bi bi-grid-3x3-gap"></i></span>
					<span class="text">All Programs</span>
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="undergraduate-tab" data-bs-toggle="tab" data-bs-target="#academics-undergraduate" type="button" role="tab">
					<span class="icon"><i class="bi bi-mortarboard"></i></span>
					<span class="text">ND/HND</span>
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="graduate-tab" data-bs-toggle="tab" data-bs-target="#academics-graduate" type="button" role="tab">
					<span class="icon"><i class="bi bi-book"></i></span>
					<span class="text">PGDA</span>
				</button>
			</li>
		</ul>
	</div>
	<div class="tab-content programs-content" data-aos="fade-up" data-aos-delay="200">
		<!-- All Programs Tab -->
		<div class="tab-pane fade show active" id="academics-all" role="tabpanel">
			<div class="row g-4">
				<!-- Program Item -->
				<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
					<div class="program-item undergraduate">
						<div class="program-header">
							<div class="program-icon">
								<i class="bi bi-cpu"></i>
							</div>
							<span class="program-type">Undergraduate</span>
						</div>
						<div class="program-body">
							<h3>Computer Science</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
							<ul class="program-details">
								<li><i class="bi bi-clock"></i> 4 years</li>
								<li><i class="bi bi-mortarboard-fill"></i> B.Sc. Degree</li>
								<li><i class="bi bi-calendar-check"></i> Fall &amp; Spring</li>
							</ul>
						</div>
						<div class="program-footer">
							<a href="#" class="program-link">View Program <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
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