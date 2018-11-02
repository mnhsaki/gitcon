<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><b>Create New Sales</b></h3>
				</div>
				<div class="box-body">
					<form action="#" method="post">
						<div class="row">
							<div class="col-md-2">
							<div class="form-group has-feedback">
								<div id="select_box">
									<label>Div<span style="color:red;"> * </span></label>
									<select required="" id="div" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
										<option selected="" disabled="">Select Div</option>
										<option value="">In Side Dhaka</option>
										<option value="">Out Side Dhaka</option>
									</select>
								</div>
							</div>
							</div>
							<div class="col-md-2">
							<div class="form-group has-feedback">
								<div id="select_box">
									<label>Zone<span style="color:red;"> * </span></label>
									<select required="" id="zone" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
										<option selected="" disabled="">Select Zone</option>
										<option value="">Zone</option>
										<option value="">Zone</option>
										<option value="">Zone</option>
									</select>
								</div>
							</div>
							</div>
							<div class="col-md-3">
							<div class="form-group has-feedback">
								<div id="select_box">
									<label>Area<span style="color:red;"> * </span></label>
									<select required="" id="area" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
										<option selected="" disabled="">Select Area</option>
										<option value="">Gulshan</option>
										<option value="">Banani</option>
										<option value="">Mirpur</option>
									</select>
								</div>
							</div>
							</div>
							<div class="col-md-2">
							<div class="form-group has-feedback">
								<div id="select_box">
									<label>Team Leader<span style="color:red;"> * </span></label>
									<select required="" id="tleader" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
										<option selected="" disabled="">Select Team Leader</option>
										<option value="">Team Leader 1</option>
										<option value="">Team Leader 2</option>
										<option value="">Team Leader 3</option>
									</select>
								</div>
							</div>
							</div>
							<div class="col-md-3">
							<div class="form-group has-feedback">
								<div id="select_box">
									<label>Team Member<span style="color:red;"> * </span></label>
									<select required="" id="tmember" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
										<option selected="" disabled="">Select Team Member</option>
										<option value="">Team Member 1</option>
										<option value="">Team Member 2</option>
										<option value="">Team Member 3</option>
									</select>
								</div>
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group has-feedback">
									<label>Client Name<span style="color:red;"> * </span></label>
									<input type="text" id="clientname" readonly="" name="clientname" class="form-control" placeholder="Client Name">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group has-feedback">
									<label>Client Email</label>
									<input value="" name="clientmail" class="form-control" placeholder="Client Email">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group has-feedback">
									<label>Client Phone Number<span style="color:red;"> * </span></label>
									<input value="" name="cnumber" class="form-control" placeholder="Client Phone Number">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group has-feedback">
									<label>Payment Terms</label>
									<input value="" name="payTerms" class="form-control" placeholder="pay Terms">

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Client Address</label>
								<textarea class="form-control" rows="" id="clientaddress" placeholder="Client Address"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2"><button id="btnSubmit" type="submit" class="btn btn-block btn-success btn-flat" onclick="return checkadd();"><i class="fa fa-save"></i>&nbsp;Create Sale</button></div>
							<div class="col-md-2">
								<a href="#" class="btn btn-block btn-danger btn-flat"><i class="fa fa-close"></i>&nbsp;Reset</a>
							</div>
						</div>
					</form>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>