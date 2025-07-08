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
				<button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#step1" type="button" role="tab">
					<!-- <span class="icon"><i class="bi bi-grid-3x3-gap"></i></span> -->
					<span class="text">STEP ONE</span>
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="undergraduate-tab" data-bs-toggle="tab" data-bs-target="#step2" type="button" role="tab">
					<!-- <span class="icon"><i class="bi bi-mortarboard"></i></span> -->
					<span class="text">STEP TWO</span>
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="graduate-tab" data-bs-toggle="tab" data-bs-target="#step3" type="button" role="tab">
					<!-- <span class="icon"><i class="bi bi-book"></i></span> -->
					<span class="text">STEP THREE</span>
				</button>
			</li>
		</ul>
	</div>
	<div class="tab-content programs-content" data-aos="fade-up" data-aos-delay="200">
		<!-- Bio Data Tab -->
		<div class="tab-pane fade show active" id="step1" role="tabpanel">
			<div class="row">
				<div class="col-md-6 center_form">
					<div class="tile">
						<div class="tile-body">
							<div class="table-responsive">
								<h3 class="tile-title">Bio Data</h3>
								<?php if(empty($this->details->dob)):?>
								<form action="<?php echo URLROOT; ?>/users/step_two" method="POST" autocomplete="OFF">
									<input type="hidden" name="id" value="<?php echo $this->details->id; ?>">
									<div class="mb-2">
										<label class="form-label">Date of birth</label>
										<input name="dob" required class="form-control" type="date">
									</div>
									<div class="mb-2">
										<label class="form-label">State of origin</label>
										<input name="stateOfOrigin" required class="form-control" type="text" onkeypress="return lettersOnly(event)">
									</div>
									<div class="mb-2">
										<label class="form-label">L.G.A</label>
										<input name="lga" required class="form-control" type="text" onkeypress="return lettersOnly(event)">
									</div>
									<div class="mb-2">
										<label class="form-label">Nationality</label>
										<input name="nationality" required class="form-control" type="text" onkeypress="return lettersOnly(event)">
									</div>
									<div class="mb-2">
										<label class="form-label">Religion</label>
										<input name="religion" required class="form-control" type="text" onkeypress="return lettersOnly(event)">
									</div>
									<div class="mb-2">
										<label class="form-label">Marital status</label>
										<select class="form-control" name="m_status" required>
											<option value="single">Single</option>
											<option value="married">Married</option>
											<option value="divorced">Divorced</option>
											<option value="widow">Widow</option>
											<option value="seperated">Seperated</option>
											<option value="widower">Widower</option>
										</select>
									</div>

									<div class="mb-2">
										<label class="form-label">Home address</label>
										<input name="residence" required class="form-control" type="text">
									</div>
									<div class="mb-2">
										<label class="form-label">Mobile number</label>
										<input name="phone" required class="form-control" type="tel">
									</div>
									<div class="mb-2">
										<label class="form-label">Alternative mobile no.</label>
										<input name="phone3" required class="form-control" type="tel">
									</div>

									<div class="">
										<button class="btn btn-primary app_btn" type="submit">Submit</button>
									</div>
								</form>
							<?php else:?>
								<div class="alert alert-dismissible alert-info">
									<strong>Bio data submitted successfully, proceed to step two.</strong>
								</div>
							<?php endif;?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div><!-- STEP ONE ENDS -->

		<!-- Step Two Here -->
		<div class="tab-pane fade" id="step2" role="tabpanel">
			<div class="row">
				<div class="col-md-6 center_form">
					<div class="tile">
						<div class="tile-body">
							<div class="table-responsive">
								<h3 class="tile-title">Next of Kin</h3>
								<?php if(empty($this->details->next_kin)):?>
								<form action="<?php echo URLROOT; ?>/users/next_kin" method="POST" autocomplete="OFF">
									<input type="hidden" name="id" value="<?php echo $this->details->id; ?>">
									<div class="mb-2">
										<label class="form-label">Fullname of sponsor/Next of kin</label>
										<input name="next_kin" required class="form-control" type="text" onkeypress="return lettersOnly(event)">
									</div>
									<div class="mb-2">
										<label class="form-label">Phone number</label>
										<input name="phone3" required class="form-control" type="tel">
									</div>
									<div class="mb-2">
										<label class="form-label">Address</label>
										<input name="address" required class="form-control" type="text">
									</div>
									<div class="">
										<button class="btn btn-primary app_btn" type="submit">Submit</button>
									</div>
								</form>
								<?php else:?>
								<div class="alert alert-dismissible alert-info">
									<strong>Next of kin submitted successfully, proceed to upload documents.</strong>
								</div>
							<?php endif;?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div><!-- STEP ENDS -->
		<!-- STEP 3 ENDS -->
		<div class="tab-pane fade" id="step3" role="tabpanel">
			<div class="row">
				<div class="col-md-6 center_form">
					<div class="tile">
						<div class="tile-body">
							<div class="table-responsive">
								<h3 class="tile-title">Upload Documents</h3>
								<form enctype="multipart/form-data" action="admin/core/new_student" class="app_frm" method="POST" autocomplete="OFF">
									<input type="hidden" name="id" value="<?php echo $this->details->id; ?>">
									<div class="mb-3">
										<label class="form-label">Your passport</label>
										<input name="image" class="form-control" type="file" accept=".png, .jpg, .jpeg">
									</div>
									<div class="mb-3">
										<label class="form-label">O'level <small style="font-size:xx-small">PDF file</small></label>
										<input name="image" class="form-control" type="file" accept=".pdf">
									</div>
									<div class="mb-3">
										<label class="form-label">State of origin <small style="font-size:xx-small">PDF file</small></label>
										<input name="image" class="form-control" type="file" accept=".pdf">
									</div>
									<div class="mb-3">
										<label class="form-label">Birth certificate <small style="font-size:xx-small">PDF file</small></label>
										<input name="image" class="form-control" type="file" accept=".pdf">
									</div>
									<div class="">
										<button id="sub_btnp2" class="btn btn-primary app_btn" type="submit">Submit</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div><!-- STEP ENDS -->
	</div>
</main>

<?php require APPROOT . '/views/student/footer.php'; ?>
</body>
<html>