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
									<label>Company Name <span style="color:red;"> * </span></label>
									<select name="" readonly="readonly" class="form-control" id="">
										<option value="">Select Company</option>
										<option value="">Company 1</option>
										<option value="">Company 2</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label>Client Name<span style="color:red;"> * </span><a href="<?php echo site_url('add_new_client');?>"><button
											 type="button" data-toggle="modal" data-target="" class="btn btn-xs btn-success pull-right"> <i class="fa fa-plus"></i>&nbsp;New
												Client?</button></a></label>
									<div class="search">
										<span class="fa fa-search" style="    position: absolute;top: 8px;left: 10px;"></span>
										<input value="" id="clientName" class="form-control required_fields ui-autocomplete-input" placeholder="Client Name"
										 autocomplete="off">
									</div> <input id="clientID" name="clientID" type="hidden">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group has-feedback">
									<label>Invoice Date<span style="color:red;"> * </span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="invoiceDate" id="datepicker" class="form-control invoice_date required_fields" placeholder="YYYY-MM-DD">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group has-feedback">
									<label>Sales Date<span style="color:red;"> * </span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="salesDate" id="datepicker2" class="form-control sales_date required_fields" placeholder="YYYY-MM-DD">
										<!-- For Limit Today:  data-provide="datepicker" data-date-end-date="0d" -->
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group has-feedback">
									<label>Invoice No</label>
									<input type="text" id="invoiceNo" readonly="" name="invoiceNo" class="form-control" placeholder="Invoice No">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group has-feedback">
									<label>PO Reference</label>
									<input value="" name="poRef" class="form-control" placeholder="PO Reference">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group has-feedback">
									<label>Delivery Place </label>
									<input value="" name="deliveryPlace" class="form-control" placeholder="Delivery Place">
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
							<div class="col-md-3">
								<label>Executive ID</label>
								<div class="form-group">
									<select name="executiveID" class="form-control select2 select2-hidden-accessible" style="width: 100%;"
									 tabindex="-1" aria-hidden="true">
										<option value="-1">Executive ID</option>
										<option value="1">Executive</option>
										<option value="2">Executive</option>
										<option value="3">Executive</option>
									</select>
								</div>
							</div>

							<div class="col-md-3">
							<label>Zone</label>
								<div class="form-group">
									<select name="zone" class="form-control select2 select2-hidden-accessible" style="width: 100%;"
									 tabindex="-1" aria-hidden="true">
										<option value="-1">Select Zone</option>
										<option value="1">Zone</option>
										<option value="2">Zone</option>
										<option value="3">Zone</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row" style="padding: 30px 0px;">
							<div class="col-md-3">
								<div class="col-sm-1"></div>
								<div class="col-sm-12" style="background-color: lightgray;height: 32px;border-radius: 10px;padding-top: 5px;text-align: center;">
									<b> Search By Name or Barcode </b>
								</div>

							</div>
							<div class="col-md-9">
								<div class="search">
									<span class="fa fa-search" style="    position: absolute;top: 8px;left: 10px;"></span>
									<input value="" id="productName" onkeypress="load_ajax()" class="form-control ui-autocomplete-input"
									 placeholder="Search Product By Name or Barcode" autocomplete="off">
								</div>

							</div>
						</div>
						<!--                        <div class="box-header">
                                                    <h3 class="box-title"><b>Products Description*</b></h3>
                                                </div>-->
						<div class="row">
							<div class="col-md-8">
								<table class="table table-striped">
									<thead>
										<tr style="background: lightgray;border-radius: 5px;">
											<th style="border: 1px solid white;">Product Name</th>
											<th style="text-align: center;width: 10%;border: 1px solid white;">Stock</th>
											<th style="width: 12%;text-align: center;border: 1px solid white;">Price</th>
											<th style="width: 15%;text-align: center;border: 1px solid white;">Quantity<span style="color:red;"> *
												</span></th>
											<th style="width: 15%;text-align: center;border: 1px solid white;">Total Price</th>
											<th style="width: 7%;text-align: center;border: 1px solid white;">#</th>
										</tr>
									</thead>
									<tbody id="tableDynamic">
										<tr id="old_msg" style="background: lightgray;border-radius: 5px;">
											<td style="text-align: center;border: 1px solid white;" colspan="6">Search By Name or Barcode</td>
										</tr>
									</tbody>

								</table>
							</div>
							<div class="col-md-4">
								<table class="table table-striped">
									<thead>
										<tr style="background: lightgray;border-radius: 5px;">
											<th colspan="2">Payment Calculation</th>
										</tr>
										<tr>
											<td> <b> Sub Total </b></td>
											<td><input readonly="" id="subTotal" name="subTotal" class="form-control" placeholder="Sub Total" width="70%"></td>
										</tr>

										<tr id="openingBalance" style="display:none;">
											<td> <b>Opening Balance</b></td>
											<td><input readonly="" value="0" id="opening_balance" name="opening_balance" class="form-control"
												 placeholder="Opening Balance" width="70%"></td>
										</tr>

										<tr>
											<td> <b>Previous Due</b></td>
											<td><input readonly="" value="0" id="previousDue" name="previousDue" class="form-control" placeholder="Previous Due"
												 width="70%"></td>
										</tr>
										<tr>
											<td> <b> Delivery Charge(+)</b></td>
											<td><input value="0" id="service_charge" name="service_charge" class="form-control" placeholder="Service Charge"
												 width="70%"></td>
										</tr>
										<input readonly="" type="hidden" id="vat" name="vat" class="form-control" placeholder="Vat">
										<input type="hidden" id="vatRate" name="vatRate" value="0">


										<!--                                        <tr>
    <td> <b> Vat (%) </b></td>
    <td>



    </td>
</tr>-->
										<tr>
											<td> <b> Grand Total </b></td>
											<td><input readonly="" id="grand" name="grandTotal" class="form-control" placeholder="Grand Total"></td>
										</tr>
										<tr>
											<td> <b> Discount (-)</b></td>
											<td><input id="discount" name="discount" class="form-control" placeholder="Discount"></td>
										</tr>

										<tr>
											<td> <b> Net Total </b></td>
											<td><input readonly="" id="net" name="netTotal" class="form-control" placeholder="Net Total"></td>
										</tr>
										<tr>
											<td style="border-top: medium none; text-align: left;">
												<label for="payYes">Add Payment?</label>
											</td>
											<td style="border-top: medium none;">
												<select name="payment_confirm" class="payYes form-control" id="payYes">
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</td>
										</tr>


										<tr style="display: none;" id="accTr">
											<td style="border-top: medium none; text-align: left;">
												<label for="bid">Accounts</label>
											</td>
											<td style="border-top: medium none;">
												<select name="bank_id" id="accountID" class="form-control accountID">
													<option selected="" disabled="" value="-1">Select Account</option>
												</select>
											</td>
										</tr>
										<tr style="display: none;" id="payTr">
											<td style="border-top: medium none; text-align: left;">
												<label for="paidamount">Paid Amount</label>
											</td>
											<td style="border-top: medium none;">
												<input id="paid" name="paid_amount" value="" class=" form-control paid">
												<div style="color: red; font-weight: bold;" id="errors"></div>
											</td>
										</tr>

										<tr style="display: none;" id="dueTr">
											<td><b>Remaining Due</b></td>
											<td> <input readonly="readonly" name="due_amount" id="reamining_due" class="form-control col-xs-8"
												 placeholder="Remaining Due">
											</td>
										</tr>
									</thead>
								</table>
							</div>

						</div>

						<div class="row">
							<div class="col-md-2"><button id="btnSubmit" type="submit" class="btn btn-block btn-success btn-flat" onclick="return checkadd();"><i
									 class="fa fa-save"></i>&nbsp;Create Sale</button></div>
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
