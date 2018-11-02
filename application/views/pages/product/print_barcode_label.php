<?php $this->load->view('_base/header'); ?>
<section class="content">
	<div class="row no-print">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><b>Print Barcode/Label</b></h3>

				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group has-feedback">
								<label>Add Product</label>
								<input id="productName" class="form-control ui-autocomplete-input" placeholder="Add Product" autocomplete="off">
							</div>
						</div>
					</div>
					<form action="#" target="_blank" method="post">
						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Product Name (Product Code)</th>
											<th style="width: 8%;">Quantity</th>
											<th style="width: 20%;">Product Catagory</th>
											<th style="width: 2%;"><i class="fa fa-fw fa-trash"></i></th>
										</tr>
									</thead>
									<tbody id="tableDynamic">

									<tr>
				<td>Product</td>
				<td style="width: 8%;">
				<input id="productQuantity_2" type="text" class="form-control" name="productQuantity[]" value="1">
				<input type="hidden" class="form-control" name="productName[]" value="test">
				<input type="hidden" class="form-control" name="productCode[]" value="53465556">
				<input type="hidden" class="form-control" name="productPrice[]" value="100">
				<input id="productID_2" type="hidden" class="form-control" name="productID[]" value="2">
				</td>
				<td style="width: 20%;">undefined</td>
				<td style="width: 2%;">
				<a href="javascript:void(0);" id="removeRow"><i class="fa fa-fw fa-trash"></i></a>
				</td></tr></tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<button type="submit" class="btn btn-block btn-primary btn-flat">Update</button>
							</div>
							<div class="col-md-2">
								<a href="#" class="btn btn-block btn-danger btn-flat">Reset</a>
							</div>
							<div class="col-md-7">
								<p><b>Note:</b> </p>
							</div>
						</div>
					</form>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>
<?php $this->load->view('_base/footer'); ?>