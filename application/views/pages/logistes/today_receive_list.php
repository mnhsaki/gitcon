<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><b>Create Receive Voucher</b><br>
						<p style="color:red;font-size: 10px;">*Fill out the form carefully because it's not editable next time.</p>
					</h3>
				</div>
				<div class="box-body">
					<form action="" method="post">
						<div class="row">
							<div class="col-md-2">
								<div class="form-group has-feedback">
									<label>Receive Voucher No</label>
									<input value="" readonly="" id="voucharno" name="voucharid" class="form-control" placeholder="Vouchar No">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group has-feedback">
									<label>Branch Name <span style="color:red;"> * </span></label>
									<select name="warehouseID" readonly="readonly" class="form-control" id="warehouseID">
										<option value="-1">Select Branch</option>
										<option value="1">Main Store</option>
										<option value="2">Bonasree</option>
										<option value="3">Marina , Abu Dhabi Branch</option>
									</select>
								</div>
							</div>


							<div class="col-md-2">
								<div class="form-group has-feedback">
									<label>Courrier Name <span style="color:red;"> * </span></label>
									<select onchange="get_courrier_value(this.value)" readonly="" name="courrier_id" class="form-control" id="courrier_id">
										<option value="-1" disabled="" selected="">Select Courrier</option>
										<option value="2">5 Star Express</option>
										<option value="1">Sundorbon courrier</option>
										<option value="3">Tanven</option>
									</select>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group has-feedback">
									<label>Courrier Branch <span style="color:red;"> * </span></label>
									<select id="courrierBranch_value" readonly="" name="courrier_branch" class="form-control">
										<option value="-1" disabled="" selected="">Select Courrier</option>
									</select>
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group has-feedback">
									<label>Delivery Type <span style="color:red;"> * </span></label>
									<select readonly="" name="delivery_location" class="form-control" id="delivery_type">
										<option value="-1" disabled="">Select Type</option>
										<option value="1" selected="">In Dhaka</option>
										<option value="2">Outside Dhaka</option>

									</select>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group has-feedback">
									<label>Vouchar Date<span style="color:red;"> * </span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="vouchar_date" id="datepicker" class="form-control invoice_date required_fields" placeholder="YYYY-MM-DD">
										<!-- For Limit Today:  data-provide="datepicker" data-date-end-date="0d" -->
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<table class="table table-striped">
									<thead>
										<tr style="background: lightgray;border-radius: 5px;">
											<th style="border: 1px solid white;width: 2%!important;">Sl.</th>
											<th style="border: 1px solid white;width: 12%!important;">Invoice NO<sup style="color:red;">*</sup></th>
											<th style="border: 1px solid white;width: 11%!important;">Client Name<sup style="color:red;">*</sup></th>
											<th style="border: 1px solid white;width: 12%!important;">Client Phone<sup style="color:red;">*</sup></th>
											<th style="border: 1px solid white;width: 15%!important;">Delivery Address</th>
											<th style="border: 1px solid white;width: 12%!important;">Total Amount</th>
											<th style="border: 1px solid white;width: 9%!important;"> Charge</th>
											<th style="border: 1px solid white;width: 10%!important;">Receivable</th>
											<th style="border: 1px solid white;width: 15%!important;">Delivery Voucher</th>
											<th style="border: 1px solid white;width: 2%!important;">#</th>
										</tr>
									</thead>
									<tbody id="tableDynamic">
										<tr>
											<td>1.</td>
											<td><input type="text" id="invoiceno_1" data-type="Invoice Id" placeholder="Invoice ID" class="invoiceno form-control required_fields">
												<input type="hidden" name="invoiceid[]" id="invoiceid_1" class="invoiceid form-control">
											</td>
											<td>
												<input type="text" readonly="" name="clientName[]" id="clientName_1" placeholder="Client Name" class="quant form-control required_fields">
												<input type="hidden" name="client_id[]" id="client_id_1" placeholder="clientid" class="quant form-control required_fields">
											</td>
											<td><input type="text" readonly="" name="clientPhone[]" placeholder="01710000000" id="clientPhone_1" class="purchaseprice form-control required_fields"></td>
											<td><textarea readonly="" style="height: 38px;" rows="1" id="deliveryAddress_1" name="deliveryAddress[]"
												 placeholder="Delivery Address" class="totalprice form-control"></textarea></td>
											<td><input readonly="" type="text" id="invoice_amount_1" name="invoice_amount[]" placeholder="Total Amount"
												 class="totalAmount form-control"></td>
											<td><input readonly="" type="text" id="courrier_deduct_amount_1" name="courrier_deduct_amount[]" placeholder="C Charge"
												 class="courrierAmount form-control"></td>
											<td><input readonly="" type="text" id="payable_amount_1" name="payable_amount[]" placeholder="P Amount"
												 class="payableAmount form-control"></td>
											<td><input type="text" readonly="" id="delivery_voucher_1" name="delivery_voucher[]" placeholder="Delivery Voucher"
												 class="delivery_voucher form-control"></td>
											<td><a href="javascript:void(0);" id="deleteRow_1" class="deleteRow btn btn-danger btn-flat btn-xs"><i class="fa fa-minus"></i></a></td>
										</tr>
									</tbody>
								</table>
								<table style="margin-top: -20px;" class="table">
									<tbody>
										<tr>
											<td style="width: 65%;border-top: medium none;"><a style="margin-left:32px;" href="javascript:void(0);" id="addRow"
												 class="btn btn-info  btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add New Inovice</a></td>
											<td style="width: 17%;border-top: medium none; text-align: left;" colspan="">Total Amount</td>
											<td style="border-top: medium none;"><input name="total_invoice_amount" type="text" id="total_invoice_amount"
												 readonly="" placeholder="Total Amount" class="form-control"></td>
										</tr>
										<tr>
											<td rowspan="6" style="border-top: medium none; position: relative;">
												<div class="form-group">
													<label for="comment">Comment:</label>
													<textarea class="form-control" rows="5" id="comment"></textarea>
												</div>
											</td>
										</tr>
										<tr style="color:red;">
											<td style="border-top: medium none; text-align: left;" colspan="">Courrier Charge ( - )</td>
											<td style="border-top: medium none;"><input readonly="" type="text" name="total_corrier_amount" id="total_corrier_amount"
												 placeholder="Courrier Charge" class="form-control" value=""></td>
										</tr>

										<tr style="color:red;">
											<td style="border-top: medium none; text-align: left;" colspan="">Other Charge ( - )</td>
											<td style="border-top: medium none;"><input type="text" name="other_charge" id="other_charge" placeholder="Other Charge"
												 class="other_charge form-control" value=""></td>
										</tr>

										<tr style="color:green;">
											<td style="border-top: medium none; text-align: left;" colspan="">Receivable Amount</td>
											<td style="border-top: medium none;"><input type="text" id="total_payable_amount" name="total_payable_amount"
												 readonly="" placeholder="Payable Amount" class="form-control"></td>
										</tr>
										                                   <tr>
                                        <td style="border-top: medium none; text-align: left;" colspan="">Courrier Deduct Account(-)</td>
                                        <td style="border-top: medium none;">
                                            <select id="showAccount" class="form-control" name="couurier_account_id">
                                                <option value="-1">Select Courrier</option>
                                            </select>
                                        </td>
                                    </tr>
										<tr>
											<td style="border-top: medium none; text-align: left;" colspan="">Payment Receive Account(+)</td>
											<td style="border-top: medium none;">
												<select id="receive_account" class="form-control" name="receive_account_id">
													<option value="-1" selected="" disabled="">Select Account</option>

												</select>
											</td>
										</tr>
										<tr style="display: none;">
											<td style="border-top: medium none; text-align: left;" colspan="">Present Balance</td>
											<td style="border-top: medium none;"><input type="text" id="accountBalance" name="present_balance" readonly=""
												 placeholder="Present Balance" class="form-control"></td>
										</tr>

									</tbody>
								</table>
							</div>


						</div>

						<div class="row">
							<div class="col-md-2"><button id="btnSubmit" type="submit" class="btn btn-block btn-primary btn-flat" onclick="return checkadd();">Create
									Vouchar</button></div>
							<div class="col-md-2">
								<a href="http://soft.abhworld.biz/ecomamaster/sales/create" class="btn btn-block btn-danger btn-flat">Reset</a>
							</div>
						</div>
					</form>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>
