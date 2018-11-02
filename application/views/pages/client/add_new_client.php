<section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><b>New Client</b></h3>

				</div>
				<div class="box-body">
					<form action="#" method="post">
					<div class="form-group has-feedback">
									<label>Client ID</label>
									<input value="" name="clientid" class="form-control" placeholder="Client ID">
								</div>
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
							<div class="form-group has-feedback">
									<label>Client Name<span style="color:red;"> * </span></label>
									<input type="text" id="clientname" readonly="" name="clientname" class="form-control" placeholder="Client Name">
							</div>
							<div class="form-group has-feedback">
									<label>Client Email</label>
									<input value="" name="clientmail" class="form-control" placeholder="Client Email">
								</div>
								<div class="form-group has-feedback">
									<label>Client Phone Number<span style="color:red;"> * </span></label>
									<input value="" name="cnumber" class="form-control" placeholder="Client Phone Number">
								</div>
								<div class="form-group has-feedback">
									<label>NID</label>
									<input value="" name="cnid" class="form-control" placeholder="NID Number">
								</div>
								<div class="form-group has-feedback">
									<label>Payment Terms</label>
									<input value="" name="payTerms" class="form-control" placeholder="pay Terms">

								</div>
								<div class="form-group has-feedback">
									<label>Client Address<span style="color:red;"> * </span></label>
									<textarea class="form-control" rows="" id="clientaddress" placeholder="Client Address"></textarea>
								</div>
								<div class="form-group has-feedback">
							<label>Image<span style="color:red;"></span></label>
							<input type="file" name="tlimage">
						</div>

							</div>

						<div class="row">
							<div class="col-xs-4">

							</div>
							<div class="col-xs-4">

							</div>
							<!-- /.col -->
							<div class="col-xs-4">
								<button onclick="return checkad_add()" type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
							</div>

							<!-- /.col -->
						</div>
					</form>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</section>
