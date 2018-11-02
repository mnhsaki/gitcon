<section class="content">
	<div class="col-md-8 col-md-offset-2">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title no-print">Supplier Payment Report</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form action="" method="post">
				<div class="box-body">
					<div class="row no-print">
						<div class="form-group">
							<div class="col-md-3">
                            <div class="form-group has-feedback">
							<label>Supplier</label>
							<select class="form-control" name="warehouseID">
								<option value="" selected="" disabled="">Select Supplier</option>
								<option selected="" value="">Supplier</option>
								<option value="">Supplier</option>
								<option value="">Supplier</option>
							</select>
						</div>
							</div>
							<div class="col-md-5">
								<label>Date</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="date_range" value="2018-10-07-2018-10-07" id="reservation" placeholder="Date Range"
									 class="form-control pull-right" required="">
								</div><!-- /.input group -->
							</div>
							<div class="col-md-2">
								<label>&nbsp;</label>
								<div class="input-group">
									<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> &nbsp;&nbsp;Search</button>
								</div>
							</div>
							<div class="col-md-2">
								<label>&nbsp;</label>
								<div class="input-group">
									<button class="btn btn-info" type="button" onclick="window.print();"><i class="fa fa-print"></i>
										&nbsp;&nbsp;Print</button>
								</div>
							</div>
						</div>
					</div>
					<br>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td colspan="6" style="font-weight:bold;font-size: 18px;">
									Supplier Payment History
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th style="width:5%;">SL.</th>
								<th style="width:20%">Date</th>
								<th style="width:20%">Supplier</th>
								<th style="width:20%"> Account</th>
								<th>Payment</th>
								<th>Note</th>
							</tr>


							<tr>
								<td style="text-align: center;color:red;" colspan="6">
									No transaction found
								</td>
							</tr>

						</tbody>
						<tfoot>
						</tfoot>
					</table>


				</div><!-- /.box-body -->

				<div class="box-footer">


				</div>
			</form>
		</div><!-- /.box -->
	</div>
</section>
