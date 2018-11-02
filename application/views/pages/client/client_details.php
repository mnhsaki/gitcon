<section class="content">

	<div class="row">
		<div class="col-md-3">

			<!-- Profile Image -->
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="assets/dist/img/user1-128x128.jpg" alt="User profile picture">

					<h3 class="profile-username text-center">Client Name</h3>
					<p class=" text-center">ID-65487</p>
					<p class=" text-center">Business Name</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Area</b><a class="pull-right">Mirpur</a>
						</li>
						<li class="list-group-item">
							<b>TL</b> <a class="pull-right">TL Name</a>
						</li>
						<li class="list-group-item">
							<b>TM</b> <a class="pull-right">TM Name</a>
						</li>
					</ul>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->

			<!-- About Me Box -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">About Client</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<strong><i class="fa fa-book margin-r-5"></i> Bio</strong>

					<p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
					</p>

					<hr>

					<strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

					<p class="text-muted">MIrpur, Dhaka</p>

					<hr>



					<strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
		<div class="col-md-9">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Activity</a></li>
					<li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Settings</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="activity">
						<!-- Post -->
						<div class="box">
		<div class="box-header">
			<h3 class="box-title"><b>All transaction List</b></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
				<div class="row">
					<div class="col-sm-6">
						<div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
									<option value="10">10</option>
									<option value="25">25</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select> entries</label></div>
					</div>
					<div class="col-sm-6">
						<div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<table id="" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
							<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100px;" aria-sort="ascending" aria-label="Invoice No: activate to sort column descending">Invoice No</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 58px;" aria-label="Purchases Date: activate to sort column ascending">Purchases Date</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 88px;" aria-label="Payment Terms: activate to sort column ascending">Payment Terms</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 41px;" aria-label="Net Total: activate to sort column ascending">Net Total</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 41px;" aria-label="Paid Amount: activate to sort column ascending">Paid Amount</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 41px;" aria-label="Due Amount: activate to sort column ascending">Due Amount</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 39px;" aria-label="Status: activate to sort column ascending">Status</th>
									<th style="width: 208px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr role="row" class="odd">
									<td nowrap="">SS-6890046</td>
									<td>2018-08-29</td>
									<td>Brack Bank</td>
									<td>2000</td>
                                    <td>1000</td>
									<td>1000</td>
									<td><span style="margin-right: 5px;"  class="btn btn-danger btn-xs pull-left"><i class="fa fa-caret-down"></i>&nbsp;&nbsp;Due</span></td>
									<td nowrap="">
										<a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-eye"></i>&nbsp;&nbsp;View</a>
										<a style="margin-right: 5px;" href="#" onclick="return confirm('Are You sure, Your want to Cancel This!')" class="btn btn-primary btn-xs pull-left"><i class="fa fa-edit"></i>&nbsp;&nbsp;Update</a>
										 <a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-share"></i>&nbsp;&nbsp;Add Payment</a>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td nowrap="">SS-6890045</td>
									<td>2018-08-20</td>
									<td>Bkash</td>
									<td>2000</td>
                                    <td>1000</td>
									<td>1000</td>
									<td><span style="margin-right: 5px;"  class="btn btn-success btn-xs pull-left"><i class="fa fa-check"></i>&nbsp;&nbsp;Paid.</span></td>
									<td nowrap="">
										<a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-eye"></i>&nbsp;&nbsp;View</a>
										<a style="margin-right: 5px;" href="#" onclick="return confirm('Are You sure, Your want to Cancel This!')" class="btn btn-primary btn-xs pull-left"><i class="fa fa-edit"></i>&nbsp;&nbsp;Update</a>
										 <a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-share"></i>&nbsp;&nbsp;Add Payment</a>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td nowrap="">SS-6890044</td>
									<td>2018-08-15</td>
									<td>EBL </td>
									<td>2000</td>
                                    <td>1000</td>
									<td>1000</td>
									<td><span style="margin-right: 5px;"  class="btn btn-danger btn-xs pull-left"><i class="fa fa-caret-down"></i>&nbsp;&nbsp;Due.</span></td>
									<td nowrap="">
										<a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-eye"></i>&nbsp;&nbsp;View</a>
										<a style="margin-right: 5px;" href="#" onclick="return confirm('Are You sure, Your want to Cancel This!')" class="btn btn-primary btn-xs pull-left"><i class="fa fa-edit"></i>&nbsp;&nbsp;Update</a>
										 <a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-share"></i>&nbsp;&nbsp;Add Payment</a>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td nowrap="">SS-6890043</td>
									<td>2018-08-10</td>
									<td>Bkash</td>
									<td>2000</td>
                                    <td>1000</td>
									<td>1000</td>
									<td><span style="margin-right: 5px;"  class="btn btn-success btn-xs pull-left"><i class="fa fa-check"></i>&nbsp;&nbsp;Paid.</span></td>
									<td nowrap="">
										<a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-eye"></i>&nbsp;&nbsp;View</a>
										<a style="margin-right: 5px;" href="#" onclick="return confirm('Are You sure, Your want to Cancel This!')" class="btn btn-primary btn-xs pull-left"><i class="fa fa-edit"></i>&nbsp;&nbsp;Update</a>
										 <a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-share"></i>&nbsp;&nbsp;Add Payment</a>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td nowrap="">SS-6890042</td>
									<td>2018-08-02</td>
									<td>EBL </td>
									<td>2000</td>
                                    <td>1000</td>
									<td>1000</td>
									<td><span style="margin-right: 5px;"  class="btn btn-danger btn-xs pull-left"><i class="fa fa-caret-down"></i>&nbsp;&nbsp;Due.</span></td>
									<td nowrap="">
										<a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-eye"></i>&nbsp;&nbsp;View</a>
										<a style="margin-right: 5px;" href="#" onclick="return confirm('Are You sure, Your want to Cancel This!')" class="btn btn-primary btn-xs pull-left"><i class="fa fa-edit"></i>&nbsp;&nbsp;Update</a>
										 <a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-share"></i>&nbsp;&nbsp;Add Payment</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
                </div>
				</div>
				<div class="row">
					<div class="col-sm-5">
						<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
					</div>
					<div class="col-sm-7">
						<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
							<ul class="pagination">
								<li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
								<li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
								<li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->
	</div>
    <!-- /.tab-pane -->

    <div class="tab-pane" id="settings">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="phonenumber" class="col-sm-2 control-label">Phone Number</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phonenumber" placeholder="+880 123456789">
                </div>
            </div>
            <div class="form-group">
                <label for="inputadderss" class="col-sm-2 control-label">Adderss</label>

                <div class="col-sm-10">
                    <textarea class="form-control" id="inputadderss" placeholder="Adderss"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputadderss" class="col-sm-2 control-label">Team Leader</label>

                <div class="col-sm-10">
                <select required="" id="tleader" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
                        <option selected="" disabled="">Select Team Leader</option>
                        <option value="">Team Leader 1</option>
                        <option value="">Team Leader 2</option>
                        <option value="">Team Leader 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tmember" class="col-sm-2 control-label">Team Member</label>

                <div class="col-sm-10">
                <select required="" id="tmember" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="customer_id" tabindex="-1" aria-hidden="true">
                        <option selected="" disabled="">Select Team Member</option>
                        <option value="">Team Member 1</option>
                        <option value="">Team Member 2</option>
                        <option value="">Team Member 3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputNote" class="col-sm-2 control-label">Note</label>

                <div class="col-sm-10">
                    <textarea class="form-control" id="inputNote" placeholder="Some Note...."></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </div>
        </form>
    </div>



</section>
