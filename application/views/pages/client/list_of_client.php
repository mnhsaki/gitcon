<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><b>Clients List</b></h3>
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
											 <th style="width: 87px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 49px;"
											 aria-label="Client Name: activate to sort column ascending">Client Name</th>
											<th style="width: 67px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Contact Number: activate to sort column ascending">Contact Number</th>
											<th style="width: 67px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
											 aria-label="Area: activate to sort column ascending">Area</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 87px;"
											 aria-label="TL: activate to sort column ascending">TL</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 87px;"
											 aria-label="TM: activate to sort column ascending">TM</th>

											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 49px;"
											 aria-label="Pur Amount: activate to sort column ascending">Pur Amount</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 49px;"
											 aria-label="Due Amount: activate to sort column ascending">Due Amount</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 49px;"
											 aria-label="Action: activate to sort column ascending">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td class="sorting_1">1</td>
											<td>Client Name X</td>
											<td>01712345678</td>
											<td>Mirpur</td>
											<td>TL Name</td>
											<td>TM Name</td>
											<td >25478</td>
											<td class="danger">15254</td>
											<td nowrap=""><a href="<?php echo site_url('client_details');?>" class="btn btn-success btn-xs">View</a>
												<a href="#" class="btn btn-primary btn-xs">Edit</a>
												<a onclick="return checkconfirm()" href="#" class="btn btn-danger btn-xs">Delete</a></td>
										</tr>
										<tr role="row" class="odd">
											<td class="sorting_1">1</td>
											<td>Client Name X</td>
											<td>01712345678</td>
											<td>Mirpur</td>
											<td>TL Name</td>
											<td>TM Name</td>
											<td >25478</td>
											<td class="succes">00000</td>
											<td nowrap=""><a href="<?php echo site_url('client_details');?>" class="btn btn-success btn-xs">View</a>
												<a href="#" class="btn btn-primary btn-xs">Edit</a>
												<a onclick="return checkconfirm()" href="#" class="btn btn-danger btn-xs">Delete</a></td>
										</tr>
										<tr role="row" class="odd">
											<td class="sorting_1">1</td>
											<td>Client Name X</td>
											<td>01712345678</td>
											<td>Mirpur</td>
											<td>TL Name</td>
											<td>TM Name</td>
											<td >25478</td>
											<td class="bg-danger">15254</td>
											<td nowrap=""><a href="<?php echo site_url('client_details');?>" class="btn btn-success btn-xs">View</a>
												<a href="#" class="btn btn-primary btn-xs">Edit</a>
												<a onclick="return checkconfirm()" href="#" class="btn btn-danger btn-xs">Delete</a></td>
										</tr>
										<tr role="row" class="odd">
											<td class="sorting_1">1</td>
											<td>Client Name X</td>
											<td>01712345678</td>
											<td>Mirpur</td>
											<td>TL Name</td>
											<td>TM Name</td>
											<td class="success">25478</td>
											<td>00000</td>
											<td nowrap=""><a href="<?php echo site_url('client_details');?>" class="btn btn-success btn-xs">View</a>
												<a href="#" class="btn btn-primary btn-xs">Edit</a>
												<a onclick="return checkconfirm()" href="#" class="btn btn-danger btn-xs">Delete</a></td>
										</tr>

									</tbody>
									<tfoot>

									</tfoot>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div>
							</div>
							<div class="col-sm-7">
								<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
									<ul class="pagination">
										<li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1"
											 data-dt-idx="0" tabindex="0">Previous</a></li>
										<li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
										<li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
										<li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="3"
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
