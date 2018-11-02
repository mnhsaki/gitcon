<?php $this->load->view('_base/header'); ?>
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="box box-success box-solid">
				<div class="box-header">
					<h3 class="box-title"><i class="fa fa-user-plus"></i> Manage Groups</h3>
                    <a href="add_new_groups" class="btn btn-success" style="float: right;"><i class="fa fa-plus"></i> Add Group</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="groupTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
						<div class="row">
							<div class="col-sm-6">
								<div class="dataTables_length" id="groupTable_length"><label>Show <select name="groupTable_length" aria-controls="groupTable"
										 class="form-control input-sm">
											<option value="10">10</option>
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="100">100</option>
										</select> entries</label></div>
							</div>
							<div class="col-sm-6">
								<div id="groupTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm"
										 placeholder="" aria-controls="groupTable"></label></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="groupTable" class="table table-bordered table-striped dataTable no-footer" role="grid"
								 aria-describedby="groupTable_info">
									<thead>
										<tr role="row">
											<th class="sorting_asc" tabindex="0" aria-controls="groupTable" rowspan="1" colspan="1" style="width: 137.75px;"
											 aria-sort="ascending" aria-label="groupname: activate to sort column descending">groupname</th>
											<th class="sorting" tabindex="0" aria-controls="groupTable" rowspan="1" colspan="1" style="width: 170.25px;"
											 aria-label="Group ID: activate to sort column ascending">Group ID</th>
											<th class="sorting" tabindex="0" aria-controls="groupTable" rowspan="1" colspan="1" style="width: 128.25px;"
											 aria-label="Action: activate to sort column ascending">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td class="sorting_1">saki</td>
											<td>G0012</td>
											<td>
												<a style="margin-right: 5px;" href="#" class="btn btn-primary btn-xs pull-left">Edit</a>
												<a href="#" onclick="return confirm('Are You sure, Your want to delete This!')" class="btn btn-danger btn-xs pull-left">Delete</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="dataTables_info" id="groupTable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
							</div>
							<div class="col-sm-7">
								<div class="dataTables_paginate paging_simple_numbers" id="groupTable_paginate">
									<ul class="pagination">
										<li class="paginate_button previous disabled" id="groupTable_previous"><a href="#" aria-controls="groupTable"
											 data-dt-idx="0" tabindex="0">Previous</a></li>
										<li class="paginate_button active"><a href="#" aria-controls="groupTable" data-dt-idx="1" tabindex="0">1</a></li>
										<li class="paginate_button next disabled" id="groupTable_next"><a href="#" aria-controls="groupTable"
											 data-dt-idx="2" tabindex="0">Next</a></li>
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
		<!-- col-md-12 -->
	</div>
	<!-- /.row -->


</section>
<?php $this->load->view('_base/footer'); ?>
