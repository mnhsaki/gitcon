<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><b>Return Product</b></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form action="#" method="POST" role="form">
				<div class="box-body">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div id="select_box">
									<label>Client<sup>*</sup></label>
									<select required="" id="cst_id"  class="form-control select2 select2-hidden-accessible"
									 style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
										<option selected="" disabled="">---</option>
										<option value="">Clint</option>
										<option value="">Clint</option>
										<option value="">Clint</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div id="select_box">
									<label>Invoice<sup>*</sup></label>
									<select required="" id="invoice_list" class="form-control select2 select2-hidden-accessible"
									 style="width: 100%;" name="invoice_id" tabindex="-1" aria-hidden="true">
										<option value="">Select Invoice id</option>
										<option value="">IAT-0820258</option>
										<option value="">IAT-0820258</option>
										<option value="">IAT-0820258</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div id="new_product">
						<div class="box-header">
							<h3 class="box-title">Products*</h3>
						</div>
						<div>
							<table class="table table-striped">
								<thead>
									<tr style="background: lightgray;border-radius: 5px;">
										<th style="text-align: center;border: 1px solid white;">Sl.</th>
										<th style="text-align: center;border: 1px solid white;">Product Name</th>
										<th style="text-align: center;border: 1px solid white;">Product ID</th>
										<th style="text-align: center;border: 1px solid white;">Invoice Quantity</th>
										<th style="text-align: center;border: 1px solid white;">Balance Quantity</th>
										<th style="text-align: center;border: 1px solid white;">Return Quantity</th>
										<th style="text-align: center;border: 1px solid white;">Unit Price</th>
										<th style="text-align: center;border: 1px solid white;">Total Price</th>
										<th style="text-align: center;border: 1px solid white;">Return Price</th>
									</tr>
								</thead>
								<tbody id="tableDynamic">
									<tr>
										<td>1.</td>
										<td>
											<input type="hidden" value="7" name="product_id[]">
											<input type="text" id="productid_1" readonly="" value="Lather Backpack" name="product_name" placeholder="Product Name"
											 class="form-control">
										</td>
										<td><input readonly="" value="312165" class="form-control"></td>
										<td>
											<input type="text" readonly="" value="1" placeholder="Quantity" class="form-control">
											<input type="hidden" id="stock_1" value="1">
										</td>
										<td>
											<input type="text" id="quantity_1" readonly="" name="quantity[]" value="1" placeholder="Quantity" class="form-control">
										</td>
										<td>
											<input type="text" id="return_quantity_1" name="return_quantity[]" value="" placeholder="Return Quantity"
											 class="return_qty form-control">
										</td>
										<td>
											<input type="text" readonly="" id="sell_price_1" name="selling_price[]" value="1500" placeholder="S Unit Price"
											 class=" form-control">
										</td>
										<td><input type="text" readonly="" id="totalprice_1" value="1500" name="total_price[]" placeholder="Total Price.."
											 class="form-control"></td>
										<td><input type="text" readonly="" id="return_price_1" value="" name="return_total_price[]" placeholder="Total Price.."
											 class="total_return_price form-control"></td>
									</tr>
								</tbody>
							</table>
							<hr>
							<table class="table">
								<tbody>
									<tr>
										<td style="width: 48%;border-top: medium none;" rowspan="8">
											<input type="hidden" value="OLS-0820258" name="due_invoice_id">
										</td>
										<td style="width: 22%;border-top: medium none; text-align: right;" colspan="">Previous Due</td>
										<td style="border-top: medium none;"><input name="previous_due" type="text" id="previous_due" readonly=""
											 value="101500" placeholder="Sub Total Price.." class="form-control"></td>
									</tr>

									<tr>
										<td style="border-top: medium none; text-align: right;" colspan="">Return Amount</td>
										<td style="border-top: medium none;"><input type="text" id="total_return_amount1" name="return_amount"
											 readonly="" placeholder="Previous Due.." class="form-control"></td>
									</tr>
									<tr>
										<td style="border-top: medium none; text-align: right;" colspan="">Last Due Amount</td>
										<td style="border-top: medium none;"><input type="text" id="last_due" name="last_due" readonly="" placeholder="Last Due.."
											 class="form-control"></td>
									</tr>
									<tr id="show_advanced" style="display:none">
										<td style="border-top: medium none; text-align: right;colo:red!important;" colspan="">Advanced</td>
										<td style="border-top: medium none;"><input type="text" id="advanced" name="advanced" readonly="" placeholder="Previous Due.."
											 class="form-control"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div id="old_product" style="display: none;">
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" id="submitId" class="btn btn-primary btn-sm" onclick="return confirm('Sure to ADD?');">
						<i class="fa fa-save"></i>&nbsp;Submit
					</button>
				</div>
			</form>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</section>
