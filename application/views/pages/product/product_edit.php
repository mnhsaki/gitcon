<?php $this->load->view('_base/header'); ?>
<section class="content-header">
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Product Edit</li>
	</ol>
   <div class="btn-group">
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="margin-left: 62%;">
         <span class="fa fa-ellipsis-h"></span>
      </button>
      <ul class="dropdown-menu pull-right" role="menu">
         <li><a href="#"><i class="fa fa-history"></i> Transactions History
         </a></li><li><a href="Product_View"><i class="fa fa-search"></i> View</a></li>
         <li><a href="Product_Edit"><i class="fa fa-pencil"></i> Edit</a></li>
         <li><a href="#"><i class="fa fa-history"></i>History</a></li>
         <li>
            <form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input type="hidden" name="_method" value="POST"></form><a href="#" onclick=""><i class="fa fa-shield"></i>
               Complete Block</a>
         </li>
         <li>
            <form action="#" name="" id="" style="display:none;" method="post" class="ng-pristine ng-valid"><input type="hidden" name="" value="POST"></form><a href="#" onclick="return confirm('Are You sure, Your want to delete This!')"><i class="fa fa-trash-o"></i> Delete</a>
         </li>
      </ul>
   </div>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-4">
			<div class="box box-success box-solid">
				<div class="box-header with-border">
					<h3 class="box-title"><b><i class="fa fa-camera"></i> Product Image</b></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="thumbnail">
						<img src="<?php echo base_url("assets/dist/img/photo2.png"); ?>" alt="Product Image">
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box box-success box-solid">
				<div class="box-header with-border">
					<h3 class="box-title"><b><i class="fa fa-sitemap"></i> Related Information</b></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<a class="btn btn-app">
						<span class="badge bg-green">3</span>
						<i class="fa fa-shopping-cart"></i> Cust. Orders
					</a>
					<a class="btn btn-app">
						<span class="badge bg-green">0</span>
						<i class="fa fa-archive"></i> Repl. Orders
					</a>
					<a class="btn btn-app">
						<span class="badge bg-green">30</span>
						<i class="fa fa-barcode"></i> Serials
					</a>
					<a class="btn btn-app">
						<span class="badge bg-green">300</span>
						<i class="fa fa-building-o"></i> Inventory
					</a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-success box-solid">
				<div class="box-header with-border">
					<h3 class="box-title"><b><i class="fa fa-cart-plus"></i> New Product</b></h3>
				</div>
				<div class="box-body">
					<form action="#" method="post">
						<div class="form-group">
							<label>Product Group<span style="color:red;">*</span></label>
							<select name="groupID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
							 aria-hidden="true">
								<option value="Group">Product Group</option>
								<option value="1">Group</option>
								<option value="2">Group</option>
								<option value="3">Group</option>
								<option value="4">Group</option>
							</select>
							<a href="Add_New_Group"><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add
									New Group</button></a>
						</div>
						<div class="form-group">
							<label>Product Category<span style="color:red;">*</span></label>
							<select name="catagoryID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
							 aria-hidden="true">
								<option value="Catagory">Product Catagory</option>
								<option value="1">Catagory</option>
								<option value="2">Catagory</option>
								<option value="3">Catagory</option>
								<option value="4">Catagory</option>
							</select>
							<a href="add_new_category"><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add
									New Category</button></a>
						</div>
						<div class="form-group">
							<label>UOM<span style="color:red;">*</span></label>
							<select name="uomID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
							 aria-hidden="true">
								<option value="Piece">Select UOM</option>
								<option value="1">Piece</option>
								<option value="2">Carton</option>
								<option value="3">Kilogram</option>
								<option value="4">Pound</option>
								<option value="5">Piece</option>
								<option value="6">Box</option>
								<option value="7">Case</option>
								<option value="7">Tray</option>
								<option value="7">Each</option>
							</select>
							<a href="Add_New_UOM"><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add
									New UOM</button></a>
						</div>
						<div class="form-group has-feedback">
							<label>Product Name<span style="color:red;">*</span></label>
							<input required="" value="Phone" name="productName" class="form-control" placeholder="Product Name">
						</div>
						<div class="form-group has-feedback">
							<label>Description</label>
							<input required="" value="Huawei 3/32" name="description" class="form-control" placeholder="Example of a longer product description">
						</div>
						<div class="form-group has-feedback">
							<label>Product retail Price<span style="color:red;">*</span></label>
							<input required="" value="20,000" name="productPrice" class="form-control" placeholder="Product Sales Price">
						</div>
						<div class="form-group has-feedback">
							<label>Product Whole Sale Price<span style="color:red;">*</span></label>
							<input required="" value="21,000" name="productWholeSalePrice" class="form-control" placeholder="Product Whole Sale Price">
						</div>
						<div class="form-group has-feedback">
							<label>Reorder Point<span style="color:red;"></span></label>
							<input required="" value="5" name="reorder_point" class="form-control" placeholder="10">
						</div>
						<div class="form-group has-feedback">
							<label>Product Code<span style="color:red;">*</span></label>
							<div class="input-group input-group-sm">
								<input required="" value="P52465" id="productCode" type="text" name="productCode" placeholder="Product Code"
								 class="form-control">
								<span class="input-group-btn">
									<button id="random" type="button" class="btn btn-flat"><i class="fa fa-random"></i></button>
								</span>
							</div>
							<span id="productCodeError" class="help-block" style="color: red;font-weight: bold;"></span>
							<span class="help-block">You can scan your barcode or click random button</span>
						</div>
						<div class="form-group has-feedback">
							<label>Product Image<span style="color:red;"></span></label>
							<input type="file" name="product_image" valur="">
						</div>

						<div class="row">
							<div class="col-xs-">

							</div>
							<!-- /.col -->
							<div class="col-xs-9">
								<button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
							</div>

							<div class="col-xs-3">
								<button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save
									and Add another</button>
							</div>
							<!-- /.col -->
						</div>
					</form>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</section>
<?php $this->load->view('_base/footer'); ?>
