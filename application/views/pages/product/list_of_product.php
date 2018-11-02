<?php $this->load->view('_base/header'); ?>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><b>Products List</b></h3>
				</div>
				<div class="box-body">
					<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
						<div class="row">
							<div class="col-md-1">
								<div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1"
										 class="form-control input-sm">
											<option value="10">10</option>
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="100">100</option>
										</select></label>
								</div>
							</div>
							<div class="col-md-3" style="padding-left: 3%;">
								<a href="#"><button type="submit" class="btn btn-success btn-sm "><i class="fa fa-download"></i>&nbsp;&nbsp;Export</button></a>
								<a href="#"><button type="submit" class="btn btn-success btn-sm "><i class="fa fa-upload"></i>&nbsp;&nbsp;Import</button></a>
							</div>
							<div class="col-md-8">
								<div class="search">
									<span class="fa fa-search"></span>
									<input id="" class="form-control" placeholder="Scan/Search Product by Name/Code/Category" autocomplete="off"
									 style="width: 100%;">
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
									<thead>
										<tr role="row">
											<th style="width: 19px;" class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-sort="ascending" aria-label="SL.: activate to sort column descending">SL.</th>
											<th style="width: 290px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Product Name: activate to sort column ascending">Product Name</th>
											<th style="width: 88px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="BarCode: activate to sort column ascending">BarCode</th>
											<th style="width: 110px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label=" Category: activate to sort column ascending">Category</th>
											<th style="width: 44px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Retail Price: activate to sort column ascending">Retail Price</th>
											<th style="width: 71px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Whole Sales Price: activate to sort column ascending">Whole Sales Price</th>
											<th style="width: 70px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Cost Price: activate to sort column ascending">Cost Price</th>
											<th style="width: 70px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Product Inventory: activate to sort column ascending">Product Inventory</th>
											<th style="width: 54px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Action: activate to sort column ascending">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td class="">1</td>
											<td><a href="#" onclick="">Product Name 1</a></td>
											<td>5246</td>
											<td>
												Device </td>
											<td>75000</td>
											<td>74500</td>
											<td>
											</td>
											<td>
												<a href="#">0 Piece in 1 location </a>
											</td>
											<td>
												<div class="btn-group ">
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
													 style="margin-left: 62%;">
														<span class="fa fa-ellipsis-h"></span>
													</button>
													<ul class="dropdown-menu pull-right" role="menu">
														<li><a href="#"><i class="fa fa-history"></i> Transactions History
														<li><a href="Product_View"><i class="fa fa-search"></i> View</a></li>
														<li><a href="#"><i class="fas fa-edit"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-history"></i>History</a></li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="_method" value="POST"></form><a href="#" onclick=""><i class="fas fa-shield-alt"></i>
																Complete Block</a>
														</li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="" value="POST"></form><a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"><i
																 class="fas fa-trash"></i> Delete</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr role="row" class="odd">
											<td class="">2</td>
											<td><a href="#" onclick="">Product Name 1</a></td>
											<td>5246</td>
											<td>
												Device </td>
											<td>75000</td>
											<td>74500</td>
											<td>
											</td>
											<td>
												<a href="#">0 Piece in 1 location </a>
											</td>
											<td>
												<div class="btn-group ">
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
													 style="margin-left: 62%;">
														<span class="fa fa-ellipsis-h"></span>
													</button>
													<ul class="dropdown-menu pull-right" role="menu">
														<li><a href="#"><i class="fa fa-history"></i> Transactions History
														<li><a href="#"><i class="fa fa-search"></i> View</a></li>
														<li><a href="#"><i class="fas fa-edit"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-history"></i>History</a></li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="_method" value="POST"></form><a href="#" onclick=""><i class="fas fa-shield-alt"></i>
																Complete Block</a>
														</li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="" value="POST"></form><a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"><i
																 class="fas fa-trash"></i> Delete</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr role="row" class="odd">
											<td class="">3</td>
											<td><a href="#" onclick="">Product Name 1</a></td>
											<td>5246</td>
											<td>
												Device </td>
											<td>75000</td>
											<td>74500</td>
											<td>
											</td>
											<td>
												<a href="#">0 Piece in 1 location </a>
											</td>
											<td>
												<div class="btn-group ">
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
													 style="margin-left: 62%;">
														<span class="fa fa-ellipsis-h"></span>
													</button>
													<ul class="dropdown-menu pull-right" role="menu">
														<li><a href="#"><i class="fa fa-history"></i> Transactions History
														<li><a href="#"><i class="fa fa-search"></i> View</a></li>
														<li><a href="#"><i class="fas fa-edit"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-history"></i>History</a></li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="_method" value="POST"></form><a href="#" onclick=""><i class="fas fa-shield-alt"></i>
																Complete Block</a>
														</li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="" value="POST"></form><a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"><i
																 class="fas fa-trash"></i> Delete</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr role="row" class="odd">
											<td class="">4</td>
											<td><a href="#" onclick="">Product Name 1</a></td>
											<td>5246</td>
											<td>
												Device </td>
											<td>75000</td>
											<td>74500</td>
											<td>
											</td>
											<td>
												<a href="#">0 Piece in 1 location </a>
											</td>
											<td>
												<div class="btn-group ">
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
													 style="margin-left: 62%;">
														<span class="fa fa-ellipsis-h"></span>
													</button>
													<ul class="dropdown-menu pull-right" role="menu">
														<li><a href="#"><i class="fa fa-history"></i> Transactions History History
														<li><a href="#"><i class="fa fa-search"></i> View</a></li>
														<li><a href="#"><i class="fas fa-edit"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-history"></i>History</a></li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="_method" value="POST"></form><a href="#" onclick=""><i class="fas fa-shield-alt"></i>
																Complete Block</a>
														</li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="" value="POST"></form><a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"><i
																 class="fas fa-trash"></i> Delete</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
										<tr role="row" class="odd">
											<td class="">5</td>
											<td><a href="#" onclick="">Product Name 1</a></td>
											<td>5246</td>
											<td>
												Device </td>
											<td>75000</td>
											<td>74500</td>
											<td>
											</td>
											<td>
												<a href="#">0 Piece in 1 location </a>
											</td>
											<td>
												<div class="btn-group ">
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
													 style="margin-left: 62%;">
														<span class="fa fa-ellipsis-h"></span>
													</button>
													<ul class="dropdown-menu pull-right" role="menu">
														<li><a href="#"><i class="fa fa-history"></i> Transactions History
														<li><a href="#"><i class="fa fa-search"></i> View</a></li>
														<li><a href="#"><i class="fas fa-edit"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-history"></i>History</a></li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="_method" value="POST"></form><a href="#" onclick=""><i class="fas fa-shield-alt"></i>
																Complete Block</a>
														</li>
														<li>
															<form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input
																 type="hidden" name="" value="POST"></form><a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"><i
																 class="fas fa-trash"></i> Delete</a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 9 of 9 entries</div>
							</div>
							<div class="col-sm-7">
								<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
									<ul class="pagination">
										<li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1"
											 data-dt-idx="0" tabindex="0">Previous</a></li>
										<li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
										<li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2"
											 tabindex="0">Next</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('_base/footer'); ?>