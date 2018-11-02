<section class="content">
	<form action="#" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><b>Adjustment</b></h3>

					</div>
					<div class="box-body">
						<div class="col-md-4">
							<div class="form-group">
								<label>Warehouse</label>
								<select required="" name="warehouseID" id="warehouseID" class="form-control select2 select2-hidden-accessible"
								 style="width: 100%;" tabindex="-1" aria-hidden="true">
									<option value="">Select Warehouse</option>
									<option value="">Warehouse</option>
									<option value="">Warehouse</option>
									<option value="">Warehouse</option>
								</select>
							</div>

						</div>
						<div class="col-md-4">

							<div class="form-group">
								<label>Adjustment Type</label>
								<select required="" name="type" id="adjustment_type" class="form-control select2 select2-hidden-accessible"
								 style="width: 100%;" tabindex="-1" aria-hidden="true">
									<option value="">Adjustment Type</option>
									<option value="IN">+ IN +</option>
									<option value="OUT">--OUT--</option>
									<option value="DAMAGE-OUT">--Damage--</option>
								</select>
							</div>

						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>RefNo</label>
								<input style="width: 100%;" readonly="" type="text" placeholder=" RefNo" name="refNo" id="refNo">
							</div>
						</div>
						<div class="col-md-12">
							<div class="search">
								<span class="fa fa-search"></span>
								<input value="" id="productName" onkeypress="load_ajax()" class="form-control ui-autocomplete-input"
								 placeholder="Search Product By Name or Barcode" autocomplete="off">
							</div>
						</div>
						<div style="padding-top: 20px" class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr style="background: lightgray;border-radius: 5px;">
										<th style="border: 1px solid white;">Product Name</th>
										<th style="width: 20%;text-align: center;border: 1px solid white;">Price</th>
										<th style="width: 20%;text-align: center;border: 1px solid white;">Quantity<span style="color:red;"> * </span></th>
										<th style="width: 7%;text-align: center;border: 1px solid white;">#</th>
									</tr>
								</thead>
								<tbody id="tableDynamic">
									<tr id="old_msg" style="background: lightgray none repeat scroll 0% 0%; border-radius: 5px; display: none;">
										<td style="text-align: center;border: 1px solid white;" colspan="6">Search By Name or Barcode</td>
									</tr>
									<tr style="font-weight:bold;">
										<td style="text-alight:left;border-radius:5px;border: 1px solid lightgray;margin:0px!important;padding:0px!important;"><span
											 style="margin-left:8px!important;padding-top:19px !important;">Product (5246254564564)</span></td>
										<td style="text-align: center;border: 1px solid lightgray;margin:0px!important;padding:0px!important;"><input
											 style="padding:5px;text-align: center;" class="form-control price" id="price" name="price" value="180"
											 type="text"></td>
										<td style="text-align: center;border: 1px solid lightgray;margin:0px!important;padding:0px!important;"><input
											 id="" type="text" class="quantity form-control" name="quantity" style="padding:5px;text-align: center;"
											 value="1" autocomplete="off"><input id="productID" name="productID" value="" type="hidden"></td>
										<td style="text-align: center;border: 1px solid lightgray;margin:0px!important;padding:0px!important;">
											<div id="removeRow"><i class="fa fa-trash-o" style="cursor:pointer;"></i></div>
										</td>
									</tr>
								</tbody>

							</table>
							<button type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Sbumit</button>
						</div>


					</div>
					<!-- /.box-body -->
				</div>
			</div>



		</div>
	</form>
</section>
