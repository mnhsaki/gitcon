<?php $this->load->view('_base/header'); ?>
<section class="content container-fluid">
	<div class="row">
	<div class="col-md-3">

    </div>
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Add Attribute to Category</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form method="post" action="#" class="form-horizontal">
					<div class="box-body">
						<div class="form-group">
							<div id="select_box">
								<label for="attribute_name" class="col-sm-2 control-label">Category<span style="color:red;"> * </span></label>
								<div class="col-sm-10">
									<select required="" id="category" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="category"
									tabindex="-1" aria-hidden="true">
										<option selected="" disabled="">Select Category</option>
										<option value="">Category</option>
										<option value="">Category</option>
										<option value="">Category</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="attribute_name" class="col-sm-2 control-label">Attribute<span style="color:red;"> * </span></label>

							<div class="col-sm-10">
								<input class="form-control" name="attribute_name" id="attribute_name" placeholder="color, size, kg, box..." type="text">
							</div>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button name="add_attribute" type="submit" class="btn btn-info pull-right">Add Attribute</button>
					</div>
					<!-- /.box-footer -->
				</form>
			</div>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Add Value to Attribute</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="" method="post" class="form-horizontal">
					<div class="box-body">
					<div class="form-group">
							<div id="select_box">
								<label for="attribute_name" class="col-sm-2 control-label">Attribute<span style="color:red;"> * </span></label>
								<div class="col-sm-10">
									<select required="" id="Attribute" class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="Attribute"
									tabindex="-1" aria-hidden="true">
										<option selected="" disabled="">Select Attribute</option>
										<option value="">Attribute</option>
										<option value="">Attribute</option>
										<option value="">Attribute</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="value_name" class="col-sm-2 control-label">Value</label>
							<div class="col-sm-10">
								<input class="form-control" name="value_name" id="value_name" placeholder="red, xl, 10kg, style..." type="text">
							</div>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button name="add_value" type="submit" class="btn btn-info pull-right">Add Value</button>
					</div>
					<!-- /.box-footer -->
				</form>
			</div>
		</div>
		<div class="col-md-3">

		</div>
	</div>
</section>
<?php $this->load->view('_base/footer'); ?>
