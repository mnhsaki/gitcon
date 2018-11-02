<section class="content">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Suppliers</h3>
					<h3 class="pull-right box-title">

						<a href="<?php echo site_url('payment_report');?>" class="btn btn-info btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add
							Payment</a>

					</h3>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
						<div class="row">
							<div class="col-sm-6">
								<div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1"
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
								<table id="" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
									<thead>
										<tr role="row">
											<th style="width: 19px;" class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-sort="ascending" aria-label="SL.: activate to sort column descending">SL.</th>
											<th style="width: 114px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label=" Name : activate to sort column ascending"> Name </th>
											<th style="width: 113px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Total Due: activate to sort column ascending">Total Due</th>
											<th style="width: 118px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Total Payment: activate to sort column ascending">Total Payment</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 39px;"
											 aria-label=" Status: activate to sort column ascending"> Status</th>
											<th style="width: 117px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Present Balance: activate to sort column ascending">Present Balance</th>
											<th style="width: 81px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Action: activate to sort column ascending">Action</th>
										</tr>
									</thead>
									<tbody>



										<tr role="row" class="odd">
											<td class="sorting_1">1</td>
											<td>S Name</td>
											<td>200.00</td>
											<td>500</td>
											<td>
												<span style="color:red;">Due </span>
											</td>
											<td>200.00</td>
											<td><a href="<?php echo site_url('payment_report');?>">Payment Report</a></td>
										</tr>
										<tr role="row" class="odd">
											<td class="sorting_1">1</td>
											<td>S Name</td>
											<td>200.00</td>
											<td>500</td>
											<td>
												<span style="color:red;">Due </span>
											</td>
											<td>200.00</td>
											<td><a href="<?php echo site_url('payment_report');?>">Payment Report</a></td>
										</tr>
										<tr role="row" class="odd">
											<td class="sorting_1">1</td>
											<td>S Name</td>
											<td>200.00</td>
											<td>500</td>
											<td>
												<span style="color:red;">Due </span>
											</td>
											<td>200.00</td>
											<td><a href="<?php echo site_url('payment_report');?>">Payment Report</a></td>
										</tr>
										<tr role="row" class="odd">
											<td class="sorting_1">1</td>
											<td>S Name</td>
											<td>200.00</td>
											<td>500</td>
											<td>
												<span style="color:red;">Due </span>
											</td>
											<td>200.00</td>
											<td><a href="<?php echo site_url('payment_report');?>">Payment Report</a></td>
										</tr>
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
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
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<div class="col-md-1"></div>
	</div>


</section>
