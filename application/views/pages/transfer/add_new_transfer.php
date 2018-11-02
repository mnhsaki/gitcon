<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><b>New Transfer</b></h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<form action="#" method="POST" role="form">
					<input type="hidden" name="selectedFromWareHouse" id="selectedFromWareHouse">
					<input type="hidden" name="selectedToWareHouse" id="selectedToWareHouse">
					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Transfer Date<sup>*</sup></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="transferDate" id="datepicker" class="form-control" placeholder="YYYY-MM-DD">
									</div><!-- /.input group -->
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Transfer No.</label>
									<input name="transferNo" id="transferNo" type="text" readonly="" class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>From Warehouse<sup>*</sup></label>
									<select id="fromWarehouseID" class="form-control select2 select2-hidden-accessible" style="width: 100%;"
									 tabindex="-1" aria-hidden="true">
										<option value="" disabled="" selected="">Select Warehouse</option>
										<option value="">Warehouse 1</option>
										<option value="">Warehouse 2</option>
										<option value="">Warehouse 3</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>To Warehouse<sup>*</sup></label>
									<select id="toWarehouseID" class="form-control select2 select2-hidden-accessible" style="width: 100%;"
									 tabindex="-1" aria-hidden="true">
										<option value="">Select To warehouse</option>
										<option value="">Select To warehouse</option>
										<option value="">Select To warehouse</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="col-sm-1"></div>
								<div class="col-sm-12" style="background-color: lightgray;height: 32px;border-radius: 10px;padding-top: 5px;text-align: center;">
									<b> Search By Name or Barcode </b>
								</div>

							</div>
							<div class="col-md-6">
								<input type="hidden" id="selectedProductID">
								<select class="productID form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
								 aria-hidden="true"></select>
							</div>
							<div class="col-md-3"><a href="javascript:void(0);" id="addRow" class="btn btn-info btn-block  btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add
									Product</a></div>
						</div>


						<div class="box-header">
							<h3 class="box-title">Products *</h3>
						</div><!-- /.box-header -->
						<div>
							<table class="table table-striped">
								<thead>
									<tr style="background: lightgray;border-radius: 5px;">
										<th style="border: 1px solid white;width: 5%;">Sl.</th>
										<th style="border: 1px solid white;">Product Name</th>
										<th style="border: 1px solid white;width: 20%;">Available Quantity</th>
										<th style="border: 1px solid white;width: 20%;">Quantity</th>
										<th style="border: 1px solid white;width: 6%;">#</th>
									</tr>
								</thead>
								<tbody id="tableDynamic">
									<tr id="old_msg" style="background: lightgray;border-radius: 5px;">
										<td style="text-align: center;border: 1px solid white;" colspan="5">Search By Name or Barcode</td>
									</tr>

								</tbody>
							</table>
							<table class="table">
								<tbody>
									<tr>
										<td style="width: 66%;border-top: medium none;"></td>
										<td style="width: 15%;border-top: medium none; text-align: right;" colspan=""></td>
										<td style="border-top: medium none;"></td>
									</tr>
									<tr>
										<div class="form-group"style="width:40%;">
											<label for="comment">Comment:</label>
											<textarea class="form-control" rows="3" id="comment"></textarea>
										</div>
									</tr>

									<tr>

										<td style="border-top: medium none; text-align: right;" colspan=""></td>
										<td style="border-top: medium none;"></td>
									</tr>
									<tr>
										<td style="border-top: medium none; text-align: right;" colspan=""></td>
										<td style="border-top: medium none;"></td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
					<div class="box-footer">
						<button type="submit" id="submitBTN" class="btn btn-primary  btn-sm" onclick="return checkadd();"><i class="fa fa-save"></i>&nbsp;&nbsp;Create
							Transfer</button>
						<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-close"></i>
							&nbsp;&nbsp;Reset</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</section>
