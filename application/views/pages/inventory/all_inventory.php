<div class="content" style="min-height: 850px;">

	<style>
		table tr td {
    border: 1px solid lightgray !important;
    margin: 2px 0px 2px 0px !important;
    padding: 2px 0px 2px 8px !important;
}
</style>
	<section class="content-header">
		<div class="box-body">
			<form action="#" method="post">
				<div class="row">
					<div class="col-md-3">
						<label>Warehouse</label>
						<div class="form-group">
							<select name="warehouseID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
							 aria-hidden="true">
								<option value="-1">Select Warehouse</option>
								<option value="1">Shikdar & Sons</option>
								<option value="2">Warehouse 2</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<label>Category</label>
						<div class="form-group ">
							<select name="cat_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
							 aria-hidden="true">
								<option value="">All</option>
								<option value="1">Category</option>
								<option value="2">Category</option>
								<option value="3">Category</option>
								<option value="4">Category</option>
								<option value="5">Category;h</option>
								<option value="6">Category</option>
								<option value="7">Category </option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<label>Product</label>
						<div class="form-group ">
							<select name="productID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
							 aria-hidden="true">
								<option value="">All</option>
								<option value="">Product 1</option>
								<option value="">Product 2</option>
								<option value="">Product 3</option>
								<option value="">Product 4</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<label></label>
						<div class="form-group divstyles">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Search</button>
						</div>
					</div>

				</div>


			</form>
		</div>
	</section>


	<section class="invoice">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="page-header">
					Inventory
					<small class="pull-right">Date: 03-10-2018</small>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 table-responsive">
				<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

					<div class="row">
						<div class="col-sm-12">
							<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
								<div class="row">
									<div class="col-sm-6">
										<div class="dataTables_length" id=""><label>Show <select name="" aria-controls="example1"
												 class="form-control input-sm">
													<option value="10">10</option>
													<option value="25">25</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select> entries</label></div>
									</div>
									<div class="col-sm-6">
										<div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm"
												 placeholder="" aria-controls="example1"></label></div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table id="" class="table table-bordered table-hover dataTable no-footer" role="grid"
										 aria-describedby="example1_info">
											<thead>
												<tr role="row">
													<th style="width: 44px;" class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
													 aria-label="SL: activate to sort column descending" aria-sort="ascending">SL</th>
													<th style="width: 123px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
													 aria-label="Product Category: activate to sort column ascending">Product Category</th>
													<th style="width: 397px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
													 aria-label="Product Name ( Barcode ): activate to sort column ascending">Product Name ( Barcode )</th>
													<th style="width: 47px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
													 aria-label="Qty: activate to sort column ascending">Qty</th>
													<th style="width: 34px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
													 aria-label="Value: activate to sort column ascending">Value</th>
												</tr>
											</thead>
											<tbody>





												<tr role="row" class="odd">
													<td class="sorting_1">1</td>
													<td>Category</td>
													<td>
                                                    <a href="#" onclick="" data-toggle="modal" data-target="#">Product(5487546)</a>

													</td>
													<td><b>1</b></td>
													<td><b>200</b></td>
												</tr>
												<tr role="row" class="even">
													<td class="sorting_1">2</td>
													<td>Category</td>
													<td>
                                                    <a href="#" onclick="" data-toggle="modal" data-target="#">Product(5487546)</a>

													</td>
													<td><b>0</b></td>
													<td><b></b></td>
												</tr>
												<tr role="row" class="odd">
													<td class="sorting_1">3</td>
													<td>Category</td>
													<td>
                                                    <a href="#" onclick="" data-toggle="modal" data-target="#">Product(5487546)</a>

													</td>
													<td><b>7</b></td>
													<td><b></b></td>
												</tr>
												<tr role="row" class="even">
													<td class="sorting_1">4</td>
													<td>Category</td>
													<td>
														<a href="#" onclick="" data-toggle="modal" data-target="#">Product(5487546)</a>

													</td>
													<td><b>10</b></td>
													<td><b></b></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-5">
										<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div>
									</div>
									<div class="col-sm-7">
										<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
											<ul class="pagination">
												<li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1"
													 data-dt-idx="0" tabindex="0">Previous</a></li>
												<li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
												<li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1"
													 data-dt-idx="2" tabindex="0">Next</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="#"><button class="btn btn-primary">Excel</button></a>
			</div>
		</div>
	</section>

	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Products Quantity Details</h4>
				</div>
				<div class="modal-body">
					<div id="showData">

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
