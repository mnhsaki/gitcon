<?php $this->load->view('_base/header'); ?>
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">&nbsp;<i class="fa fa-list"></i>&nbsp;Attribute List</h3>
					<div class="box-tools pull-right">
                        <a href="add_new_attribute"><button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;New Attribute</button></a>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-condensed table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Category Name</th>
								<th>Attribute Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Phone</td>
								<td>color</td>
								<td>
								<a style="margin-right: 5px;" href="#" class="btn btn-primary btn-xs pull-left"><i class="fa fa-edit"></i>Edit</a>
								<a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"class="btn btn-danger btn-xs pull-left"><i class="fa fa-trash"></i> Delete</a>
								</td>
							</tr>
							<tr>
								<td>SSD</td>
								<td>size</td>
								<td>
								<a style="margin-right: 5px;" href="#" class="btn btn-primary btn-xs pull-left"><i class="fa fa-edit"></i>Edit</a>
								<a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"class="btn btn-danger btn-xs pull-left"><i class="fa fa-trash"></i> Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">&nbsp;<i class="fa fa-list"></i>&nbsp;Value List</h3>
					<div class="box-tools pull-right">
                        <a href="add_new_attribute"><button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;New Value</button></a>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example3" class="table table-condensed table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Attribute Name</th>
								<th>Value</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>color</td>
								<td>red</td>
								<td>
								<a style="margin-right: 5px;" href="#" class="btn btn-primary btn-xs pull-left"><i class="fa fa-edit"></i>Edit</a>
								<a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"class="btn btn-danger btn-xs pull-left"><i class="fa fa-trash"></i> Delete</a>
								</td>
							</tr>
							<tr>
								<td>Size</td>
								<td>32GB</td>
								<td>
								<a style="margin-right: 5px;" href="#" class="btn btn-primary btn-xs pull-left"><i class="fa fa-edit"></i>Edit</a>
								<a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"class="btn btn-danger btn-xs pull-left"><i class="fa fa-trash"></i> Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->

			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
<?php $this->load->view('_base/footer'); ?>
