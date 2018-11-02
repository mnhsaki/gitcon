<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Start) -->
	<!-- Small boxes (Stat box) row 1 -->
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3>150</h3>
					<p>Total Orders</p>
				</div>
				<div class="icon">
					<i class="fa fa-arrow-circle-right"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3>120</h3>

					<p>Delivery</p>
				</div>
				<div class="icon">
					<i class="fa fa-arrow-circle-right"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>94,521,120<span style="font-size:30px;">৳</span></h3>

					<p>Total Collection</p>
				</div>
				<div class="icon">
					<i class="fa fa-arrow-circle-right"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3>53,547,210<span style="font-size:30px;">৳</span></h3>

					<p>Total Due</p>
				</div>
				<div class="icon">
					<i class="fa fa-arrow-circle-right"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
	</div>
	<!-- /.row Small boxes (Stat box) row 1-->

	<!-- Small boxes (End) -->
	<!-- Main row -->
	<div class="row">
		<!-- Left col -->
		<section class="col-lg-8 connectedSortable">
			<!-- Custom tabs (Charts with tabs)-->

			<!-- /.nav-tabs-custom -->

			<!-- TABLE: LATEST ORDERS -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Latest Orders</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table class="table no-margin">
							<thead>
								<tr>
									<th>Order ID</th>
									<th>Customer Name</th>
									<th>Date</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="pages/examples/invoice.html">OR9842</a></td>
									<td>Customer 1</td>
									<td>20 Oct 2018</td>
									<td><span class="label label-success">Delivered</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">OR1848</a></td>
									<td>Customer 2</td>
									<td>20 Oct 2018</td>
									<td><span class="label label-warning">Pending</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">OR7429</a></td>
									<td>Customer 3</td>
									<td>19 Oct 2018</td>
									<td><span class="label label-success">Delivered</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">OR7429</a></td>
									<td>Customer 4</td>
									<td>18 Oct 2018</td>
									<td><span class="label label-info">Processing</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">OR1848</a></td>
									<td>Customer 5</td>
									<td>17 Oct 2018</td>
									<td><span class="label label-warning">Pending</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">OR7429</a></td>
									<td>Customer 6</td>
									<td>16 Oct 2018</td>
									<td><span class="label label-success">Delivered</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">OR9842</a></td>
									<td>Customer 7</td>
									<td>15 Oct 2018</td>
									<td><span class="label label-info">Processing</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					<a href="<?php echo site_url('add_new_sale');?>" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
					<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
				</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->
			<!-- /.box (LATEST ORDERS) -->

			<div class="row invoice">
				<div class="col-md-12 table-responsive">

					<div class="col-md-8">
						<h4 style="text-align: center"><u>Today Sales &amp; Expense Summary</u></h4>
						<table class="table table-striped">
							<thead style="background-color: #21A8DF;color: white;">
								<tr>
									<th class="text-left" width="50%">Company</th>
									<th>Sale</th>
									<th>Expense</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-left">Shikdar & Sons</td>
									<td>0.00</td>
									<td>0.00</td>
								</tr>
								<tr>
									<td class="text-left">Company 2</td>
									<td>0.00</td>
									<td>0.00</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>0</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-4">
						<h4 style="text-align: center"><u>Total receivables</u></h4>
						<table class="table table-striped">
							<thead style="background-color: #21A8DF;color: white;">
								<tr>
									<th class="text-left" width="30%">Courier</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Receivable</td>
									<td class="text-left">0.00</td>
								</tr>


							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<h4 style="text-align: center"><u>Month Sales &amp; Expense Summary</u></h4>
						<table class="table table-striped">
							<thead style="background-color: #21A8DF;color: white;">
								<tr>
									<th class="text-left" width="50%">Company</th>
									<th>Total Sales</th>
									<th>Total Expense</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-left">Shikdar & Sons</td>
									<td>0.00</td>
									<td>0.00</td>
								</tr>
								<tr>
									<td class="text-left">Company 2</td>
									<td>0.00</td>
									<td>0.00</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>0</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						<h4 style="text-align: center"><u>Inventory &amp; Value</u></h4>
						<table class="table table-striped">
							<thead style="background-color: #21A8DF;color: white;">
								<tr>
									<th>Company</th>
									<th>Qty</th>
									<th>Value</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td class="text-left">Shikdar & Sons</td>
									<td>700</td>
									<td>568401.00</td>
								</tr>
								<tr>
									<td class="text-left">Company 2</td>
									<td>1000</td>
									<td>4589654.00</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>1700</td>
									<td>4582147854</td>
								</tr>

							</tbody>
						</table>

					</div>
					<div class="col-md-6">
						<h4 style="text-align: center"><u>Today Financial Summary</u></h4>
						<table class="table table-striped">
							<thead style="background-color: #21A8DF;color: white;">
								<tr>
									<th>Company</th>
									<th>In</th>
									<th>Out</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-left">Shikdar & Sons</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td class="text-left">Company 2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>0</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<h4 style="text-align: center"><u>Accounts Summary</u></h4>
						<table class="table table-striped">
							<thead style="background-color: #21A8DF;color: white;">
								<tr>
									<th>Sl.</th>
									<th>Account Name</th>
									<th>Account Number</th>
									<th>Company Name</th>
									<th>Balance</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td class="text-left">cash</td>
									<td></td>
									<td></td>
									<td>50,610.00</td>
								</tr>
								<tr>
									<td>2</td>
									<td class="text-left">Bank</td>
									<td></td>
									<td></td>
									<td>150,610.00</td>
								</tr>
								<tr>

									<td colspan="4" style="text-align:right;font-weight: bold;">Total Balance&nbsp;&nbsp;</td>
									<td style="font-weight:bold;">&nbsp;&nbsp;50,610.00&nbsp;&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="col-md-12">
						<h4 style="text-align: center"><u>Today Accounts Summary</u></h4>
						<table class="table table-striped">
							<thead style="background-color: #21A8DF;color: white;">
								<tr>
									<th>Sl.</th>
									<th>Account Name</th>
									<th>Account Number</th>
									<th>Company Name</th>
									<th>Balance</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td class="text-left">cash</td>
									<td></td>
									<td>shikdar & Sons</td>
									<td>0.00</td>
								</tr>
								<tr>
								<tr>
									<td>2</td>
									<td class="text-left">Brack Bank</td>
									<td>1547825469</td>
									<td>Company 2</td>
									<td>0.00</td>
								</tr>
								<tr>
								<tr>
									<td>3</td>
									<td class="text-left">EBL Bank</td>
									<td>654872154</td>
									<td>Shikdar & Sons</td>
									<td>0.00</td>
								</tr>
								<tr>

									<td colspan="4" style="text-align:right;font-weight: bold;">Total Balance&nbsp;&nbsp;</td>
									<td style="font-weight:bold;">&nbsp;&nbsp;0.00&nbsp;&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
				<!-- /.col -->
			</div>

			<!-- quick email widget -->


		</section>
		<!-- /.Left col -->
		<!-- right col (We are only adding the ID to make the widgets sortable)-->
		<section class="col-lg-4 connectedSortable">

			<!-- PRODUCT LIST -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Recently Added Products</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<ul class="products-list product-list-in-box">
						<li class="item">
							<div class="product-img">
								<img src="assets/dist/img/default-50x50.gif" alt="Product Image">
							</div>
							<div class="product-info">
								<a href="javascript:void(0)" class="product-title">Samsung TV
									<span class="label label-warning pull-right">৳1800</span></a>
								<span class="product-description">
									Samsung 32" 1080p 60Hz LED Smart HDTV.
								</span>
							</div>
						</li>
						<!-- /.item -->
						<li class="item">
							<div class="product-img">
								<img src="assets/dist/img/default-50x50.gif" alt="Product Image">
							</div>
							<div class="product-info">
								<a href="javascript:void(0)" class="product-title">Bicycle
									<span class="label label-info pull-right">৳700</span></a>
								<span class="product-description">
									26" Mongoose Dolomite Men's 7-speed, Navy Blue.
								</span>
							</div>
						</li>
						<!-- /.item -->
						<li class="item">
							<div class="product-img">
								<img src="assets/dist/img/default-50x50.gif" alt="Product Image">
							</div>
							<div class="product-info">
								<a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">৳350</span></a>
								<span class="product-description">
									Xbox One Console Bundle with Halo Master Chief Collection.
								</span>
							</div>
						</li>
						<!-- /.item -->
						<li class="item">
							<div class="product-img">
								<img src="assets/dist/img/default-50x50.gif" alt="Product Image">
							</div>
							<div class="product-info">
								<a href="javascript:void(0)" class="product-title">PlayStation 4
									<span class="label label-success pull-right">৳399</span></a>
								<span class="product-description">
									PlayStation 4 500GB Console (PS4)
								</span>
							</div>
						</li>
						<!-- /.item -->
					</ul>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-center">
					<a href="javascript:void(0)" class="uppercase">View All Products</a>
				</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->

			<!-- USERS LIST -->
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title">Latest Customers</h3>

					<div class="box-tools pull-right">
						<span class="label label-danger">8 New Customers</span>
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<ul class="users-list clearfix">
						<li>
							<img src="assets/dist/img/user1-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Alexander Pierce</a>
							<span class="users-list-date">Today</span>
						</li>
						<li>
							<img src="assets/dist/img/user8-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Norman</a>
							<span class="users-list-date">Yesterday</span>
						</li>
						<li>
							<img src="assets/dist/img/user7-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Jane</a>
							<span class="users-list-date">12 Jan</span>
						</li>
						<li>
							<img src="assets/dist/img/user6-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">John</a>
							<span class="users-list-date">12 Jan</span>
						</li>
						<li>
							<img src="assets/dist/img/user2-160x160.jpg" alt="User Image">
							<a class="users-list-name" href="#">Alexander</a>
							<span class="users-list-date">13 Jan</span>
						</li>
						<li>
							<img src="assets/dist/img/user5-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Sarah</a>
							<span class="users-list-date">14 Jan</span>
						</li>
						<li>
							<img src="assets/dist/img/user4-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Nora</a>
							<span class="users-list-date">15 Jan</span>
						</li>
						<li>
							<img src="assets/dist/img/user3-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Nadia</a>
							<span class="users-list-date">15 Jan</span>
						</li>
					</ul>
					<!-- /.users-list -->
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-center">
					<a href="javascript:void(0)" class="uppercase">View All Users</a>
				</div>
				<!-- /.box-footer -->
			</div>
			<!--/.box -->
			<!-- TABLE: Top 10 Selling Product -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Top 10 Selling Product 2018</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table class="table no-margin">
							<thead>
								<tr>
									<th>SL</th>
									<th>Order ID</th>
									<th>Product Name</th>
									<th>QTY</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><a href="pages/examples/invoice.html">OR9842</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">9,251,210</span></td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="pages/examples/invoice.html">OR2452</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">7,251,210</span></td>
								</tr>
								<tr>
									<td>3</td>
									<td><a href="pages/examples/invoice.html">CO2546</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">7,151,210</span></td>
								</tr>
								<tr>
									<td>4</td>
									<td><a href="pages/examples/invoice.html">NM5478</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">6,251,210</span></td>
								</tr>
								<tr>
									<td>5</td>
									<td><a href="pages/examples/invoice.html">KH547</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">5,251,210</span></td>
								</tr>
								<tr>
									<td>6</td>
									<td><a href="pages/examples/invoice.html">IL2546</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">4,251,210</span></td>
								</tr>
								<tr>
									<td>7</td>
									<td><a href="pages/examples/invoice.html">OR9842</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">4,151,210</span></td>
								</tr>
								<tr>
									<td>8</td>
									<td><a href="pages/examples/invoice.html">OI2541</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">3,251,210</span></td>
								</tr>
								<tr>
									<td>1</td>
									<td><a href="pages/examples/invoice.html">UY5412</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">2,251,210</span></td>
								</tr>
								<tr>
									<td>9</td>
									<td><a href="pages/examples/invoice.html">XS9842</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">2,151,210</span></td>
								</tr>
								<tr>
									<td>10</td>
									<td><a href="pages/examples/invoice.html">OR524</a></td>
									<td>Product 1</td>
									<td><span class="label label-success">1,251,210</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-right">View All Products</a>
				</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->
			<!-- /.Top 10 Selling Product -->

			<!-- Calendar -->
			<div class="box box-solid bg-green-gradient">
				<div class="box-header">
					<i class="fa fa-calendar"></i>

					<h3 class="box-title">Calendar</h3>
					<!-- tools box -->
					<div class="pull-right box-tools">
						<!-- button with a dropdown -->
						<div class="btn-group">
							<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bars"></i></button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#">Add new event</a></li>
								<li><a href="#">Clear events</a></li>
								<li class="divider"></li>
								<li><a href="#">View calendar</a></li>
							</ul>
						</div>
						<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
						</button>
					</div>
					<!-- /. tools -->
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<!--The calendar -->
					<div id="calendar" style="width: 100%"></div>
				</div>
			</div>
			<!-- /.box-body -->

			<!-- /.box -->


		</section>
		<!-- right col -->
	</div>
	<!-- /.row (main row) -->

</section>
<!-- /.content -->
