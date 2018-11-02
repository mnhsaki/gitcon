<section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><b>New Courrier Warehouse</b></h3>

				</div>
				<div class="box-body">
					<form action="" method="post">
						<div class="form-group has-feedback">
							<label>Warehouse Name <span style="color:red;">*</span></label>
							<select name="courrier_id" id="courrier_id" class="form-control courrier_id select2 bordercolor select2-hidden-accessible"
							 style="width: 100%;" tabindex="-1" aria-hidden="true">
								<option value="-1" disabled="" selected=""> Select Warehouse</option>
								<option value="2">5 Star Express</option>
								<option value="1">Sundorbon courrier</option>
								<option value="3">Tanven</option>
							</select>
						</div>
						<div class="form-group has-feedback">
							<label>Warehouse Name</label>
							<input name="Warehouse_name" class="form-control" id="courrier_name" placeholder="Warehouse Name">
						</div>
						<div class="form-group has-feedback">
							<label> Manager Name</label>
							<input type="text" name="manager_name" id="manager_name" class="form-control bordercolor" placeholder="Manager Name">
						</div>
						<div class="form-group has-feedback">
							<label> Phone Number</label>
							<input name="phone" class="form-control " id="courrier_phone" placeholder="Phone Number">
						</div>
						<div class="form-group has-feedback">
							<label>Warehouse Address</label>
							<div class="form-group">
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-4">

							</div>
							<div class="col-xs-4">

							</div>
							<!-- /.col -->
							<div class="col-xs-4">
								<button type="submit" onclick="return get_confirm()" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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
