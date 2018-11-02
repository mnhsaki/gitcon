<section class="content">
	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">New Expense</h3>

				</div>


				<div class="box-body">
					<form action="" method="post">
						<div class="form-group">
							<label>Warehouse<span style="color:red;"> *</span></label>
							<select name="warehouse_id" id="warehouse_id" class="form-control warehouse_id select2 select2-hidden-accessible" style="width: 100%;"
							 readonly="" tabindex="-1" aria-hidden="true">
								<option value="">-- Select warehouse --</option>
								<option value="">warehouse</option>
								<option value="">warehouse</option>
								<option value="">warehouse</option>
							</select>
						</div>
						<div class="form-group">
							<label>Account Head<span style="color:red;"> *</span></label>
							<select name="head_id" class="form-control head_id select2 select2-hidden-accessible" style="width: 100%;"
							 readonly="" tabindex="-1" aria-hidden="true">
								<option value="">-- Select Account Head --</option>
							</select>
						</div>
						<div class="form-group">
							<label>Account Sub Head<span style="color:red;"> *</span></label>
							<select name="sub_head_id" class="form-control subitem_1 select2 select2-hidden-accessible" style="width: 100%;"
							 readonly="" tabindex="-1" aria-hidden="true">
								<option value="">-- Select Sub Head --</option>


							</select>
						</div>
						<div class="form-group">
							<label>Account<span style="color:red;"> *</span></label>
							<select name="account_id" class="form-control select2 bank_id account_list select2-hidden-accessible" style="width: 100%;"
							 tabindex="-1" aria-hidden="true">
								<option>----(Select account)---</option>
							</select>
						</div>
						<div class="form-group has-feedback">
							<label>Remaining Amount<span style="color:red;"> *</span></label>
							<input readonly="" id="mySelect" onchange="myFunction()" class="form-control av_amount" placeholder="Remaining Amount">
						</div>
						<div class="form-group has-feedback">
							<label>Amount<span style="color:red;"> *</span></label>
							<input required="" id="mySelect2" onkeypress="myFunction()" name="amount" class="form-control expens_amount"
							 placeholder="Amount">
						</div>
						<div class="form-group has-feedback">
							<label>Date<span style="color:red;"> *</span></label>
							<input required="" id="datepicker" name="date" class="form-control" value="2018-10-07" placeholder="YYYY-MM-DD">
						</div>
						<div class="form-group has-feedback">
							<label>Note</label>
                            <div class="form-group">
  <textarea class="form-control" rows="3" id="comment"></textarea>
</div>
						</div>

						<div class="row">
							<div class="col-xs-4">
							</div>
							<div class="col-xs-4">
							</div>
							<div class="col-xs-4">
								<button type="submit" onclick="return get_confirm()" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
							</div>
						</div>
					</form>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</section>
