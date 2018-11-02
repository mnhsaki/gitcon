<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
	<link rel="shortcut icon" href="your_image_path_and_name.ico" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/icon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jqueryui.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/site.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/pygments.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
	<style type="text/css">
		.sidebar-menu li {
			border-bottom: 1px solid #eee;
		}

		@media print {
			a[href]:after {
				content: none !important;
			}
		}

		@page {
			size: auto;
			margin: 0mm;
		}


		.main-sidebar {
			border-right: 1px solid #ddd;
		}

		.skin-black-light .content-wrapper,
		.skin-black-light .main-footer {
			border-left: 0px solid #d2d6de;
		}

		.center {
			text-align: center;
		}

		.right {
			text-align: right;
		}

		.search {
			position: relative;
			color: #aaa;
			font-size: 16px;
		}

		.select2 {
			height: 32px !important;

			background: #fcfcfc !important;

			border-radius: 5px !important;
			box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset !important;
		}

		textarea {
			background: #fcfcfc !important;
			border: 1px solid #aaa;
			border-radius: 5px !important;
			box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset !important;
		}

		select,
		input {

			height: 32px !important;
			background: #fcfcfc !important;
			border: 1px solid #aaa;
			border-radius: 5px !important;
			box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset !important;
		}

		.search input {

			height: 32px;

			background: #fcfcfc;
			border: 1px solid #aaa;
			border-radius: 5px;
			box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset;
		}

		.search input {
			text-indent: 32px;
		}

		.search .fa-search {
			position: absolute;
			top: 10px;
			left: 10px;
		}

	</style>
</head>

<body class="hold-transition skin-black-light sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="<?php echo site_url(''); ?>dashbord" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini">IAT</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg" style="font-size:14px"><strong>IAT</strong></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li>
							<a class="pull-left" href="welcome" style=" text-transform: uppercase;"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;
								&nbsp;<span id="clock">2018-10-02 03:29:50pm</span></a>
						</li>
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="" style=" text-transform: uppercase;"><i class="fa fa-user" aria-hidden="true"></i> Admin</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">

									<p>
										Sikander & Sons
										<small><strong>Admin</strong></small>
									</p>
								</li>
								<li class="user-footer">
									<div class="pull-left">
										<a style=" text-transform: uppercase;" href="<?php echo site_url(" profile") ?>" class="btn btn-default
											btn-flat"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profile</a>
									</div>
									<div class="pull-right">
										<a style=" text-transform: uppercase;" href="<?php echo site_url(" login") ?>" class="btn btn-default
											btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;&nbsp;Sign out</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<div>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">MAIN NAVIGATION</li>
						<li class="active">
							<a href="<?php echo site_url(''); ?>dashbord">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-shopping-cart"></i> <span>Sales</span>
								<span class="pull-right-container" style="padding-right:15px;">
									<small class="label pull-right bg-yellow">12</small>
								</span>
								<span class="pull-right-container">

									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('add_new_sale'); ?>"><i class="fas fa-folder-open"></i> Add New Sale</a></li>
								<li><a href="<?php echo site_url('today_sale'); ?>"><i class="fas fa-folder-open"></i> Today Sale</a></li>
								<li><a href="<?php echo site_url('list_of_today_sale'); ?>"><i class="fas fa-folder-open"></i> List of Today Sale</a></li>
								<li><a href="<?php echo site_url('return_product'); ?>"><i class="fas fa-folder-open"></i> Return Product</a></li>
								<li><a href="<?php echo site_url('list_of_due'); ?>"><i class="fas fa-folder-open"></i> List of Due</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-share"></i> <span>Sales Department</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu" style="display: none;">
								<li class="treeview">
									<a href="#"><i class="fas fa-folder-open"></i> Sales Manager<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('sales/add_new_sale'); ?>"><i class="fas fa-folder-open"></i> Add New Sale</a></li>
										<li><a href="<?php echo site_url('today_sale'); ?>"><i class="fas fa-folder-open"></i> Today Sale</a></li>
										<li><a href="<?php echo site_url('list_of_today_sale'); ?>"><i class="fas fa-folder-open"></i> List of All Sale</a></li>
										<li><a href="<?php echo site_url('return_product'); ?>"><i class="fas fa-folder-open"></i> Return Product</a></li>
										<li><a href="<?php echo site_url('list_of_due'); ?>"><i class="fas fa-folder-open"></i> List of Due</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fas fa-folder-open"></i> sales Executive<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('sales/add_new_sale'); ?>"><i class="fas fa-folder-open"></i> Add New Sale</a></li>
										<li><a href="<?php echo site_url('today_sale'); ?>"><i class="fas fa-folder-open"></i> Today Sale</a></li>
										<li><a href="<?php echo site_url('list_of_today_sale'); ?>"><i class="fas fa-folder-open"></i> List of All Sale</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Invoice</span>
								<span class="pull-right-container" style="padding-right:15px;">
									<small class="label pull-right bg-red">10</small>
								</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('add_new_invoice'); ?>"><i class="fas fa-folder-open"></i> Add New Invoice</a></li>
								<li><a href="<?php echo site_url('list_of_today_sale'); ?>"><i class="fas fa-folder-open"></i> List of Invoice</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Logistics</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu" style="display: none;">
								<!-- <li class="treeview">
                                            <a href="#"><i class="fas fa-folder-open"></i>Div<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                                            <ul class="treeview-menu" style="display: none;">
                                                    <li><a href="<?php echo site_url('add_new_div'); ?>"><i class="fas fa-folder-open"></i>Add New Div</a></li>
                                                    <li><a href="<?php echo site_url('list_of_div'); ?>"><i class="fas fa-folder-open"></i>List of Div</a></li>
                                            </ul>
                                    </li>
                                    <li class="treeview">
                                            <a href="#"><i class="fas fa-folder-open"></i>Zone<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                                            <ul class="treeview-menu" style="display: none;">
                                                    <li><a href="<?php echo site_url('add_new_zone'); ?>"><i class="fas fa-folder-open"></i>Add New Zone</a></li>
                                                    <li><a href="<?php echo site_url('list_of_zone'); ?>"><i class="fas fa-folder-open"></i>List of Zone</a></li>
                                            </ul>
                                    </li>
                                    <li class="treeview">
                                            <a href="#"><i class="fas fa-folder-open"></i>Area<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                                            <ul class="treeview-menu" style="display: none;">
                                                    <li><a href="<?php echo site_url('add_new_area'); ?>"><i class="fas fa-folder-open"></i>Add New Area</a></li>
                                                    <li><a href="<?php echo site_url('list_of_area'); ?>"><i class="fas fa-folder-open"></i>List of Area</a></li>
                                            </ul>
                                    </li>
                                    <li class="treeview">
                                            <a href="#"><i class="fas fa-folder-open"></i>Sales Manager<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                                            <ul class="treeview-menu" style="display: none;">
                                                    <li><a href="<?php echo site_url('add_new_sales_manager'); ?>"><i class="fas fa-folder-open"></i>Add New Sales Maneger</a></li>
                                                    <li><a href="<?php echo site_url('list_of_sales_manager'); ?>"><i class="fas fa-folder-open"></i>List of Sales Maneger</a></li>
                                            </ul>
                                    </li>
                                    <li class="treeview">
                                            <a href="#"><i class="fas fa-folder-open"></i>Team Leader<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                                            <ul class="treeview-menu" style="display: none;">
                                                    <li><a href="<?php echo site_url('add_new_team_leader'); ?>"><i class="fas fa-folder-open"></i>Add New Team Leader</a></li>
                                                    <li><a href="<?php echo site_url('list_of_team_leader'); ?>"><i class="fas fa-folder-open"></i>List of Leam Leader</a></li>
                                            </ul>
                                    </li>
                                    <li class="treeview">
                                            <a href="#"><i class="fas fa-folder-open"></i>Team Member<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                                            <ul class="treeview-menu" style="display: none;">
                                                    <li><a href="<?php echo site_url('add_new_team_member'); ?>"><i class="fas fa-folder-open"></i>Add New Team Member</a></li>
                                                    <li><a href="<?php echo site_url('list_of_team_member'); ?>"><i class="fas fa-folder-open"></i>List of Leam Member</a></li>
                                            </ul>
                                    </li> -->
							</ul>
						</li>
						<!-- <li class="treeview">
                                    <a href="#">
                                            <i class="fa fa-folder"></i> <span>Logistics</span>

                                            <span class="pull-right-container">
                                                    <i class="fa fa-angle-left pull-right"></i>
                                            </span>
                                    </a>
                                    <ul class="treeview-menu">
                                            <li><a href="<?php echo site_url('create_delivery_voucher'); ?>"><i class="fas fa-folder-open"></i> Create Delivery
                                                            Voucher</a></li>
                                            <li><a href="<?php echo site_url('today_delivery_list'); ?>"><i class="fas fa-folder-open"></i> Today Delivery List</a></li>
                                            <li><a href="<?php echo site_url('delivery_voucher_list'); ?>"><i class="fas fa-folder-open"></i> Delivery Voucher
                                                            List</a></li>
                                            <li><a href="<?php echo site_url('today_receive_list'); ?>"><i class="fas fa-folder-open"></i> Today Receive List</a></li>
                                            <li><a href="<?php echo site_url('today_voucher_list'); ?>"><i class="fas fa-folder-open"></i> Today Voucher List</a></li>
                                            <li><a href="<?php echo site_url('create_div'); ?>"><i class="fas fa-folder-open"></i>Create Div</a></li>
                                            <li><a href="<?php echo site_url('create_Zone'); ?>"><i class="fas fa-folder-open"></i>Create Zone</a></li>
                                            <li><a href="<?php echo site_url('create_team_leader'); ?>"><i class="fas fa-folder-open"></i>Team Leader</a></li>
                                            <li><a href="<?php echo site_url('create_team_member'); ?>"><i class="fas fa-folder-open"></i>Team Member</a></li>
                                    </ul>
                            </li> -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Delivery</span>
								<span class="pull-right-container" style="padding-right:15px;">
									<small class="label pull-right bg-green">9</small>
								</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('create_delivery'); ?>"><i class="fas fa-folder-open"></i> Create Delivery</a></li>
								<li><a href="<?php echo site_url('list_of_delivery'); ?>"><i class="fas fa-folder-open"></i> List of Delivery </a></li>
								<li><a href="<?php echo site_url('create_delivery_warehouses'); ?>"><i class="fas fa-folder-open"></i> Create
										Delivery Warehouses</a></li>
								<li><a href="<?php echo site_url('list_of_warehouses'); ?>"><i class="fas fa-folder-open"></i> List of Warehouses</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Product</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>

							<ul class="treeview-menu" style="display: none;">
								<li><a href="<?php echo site_url('add_new_product'); ?>"><i class="fas fa-folder-open"></i> Add New Product</a></li>
								<li><a href="<?php echo site_url('list_of_product'); ?>"><i class="fas fa-folder-open"></i> List of Product </a></li>
								<li><a href="<?php echo site_url('print_barcode_label'); ?>"><i class="fas fa-folder-open"></i> Print Barcode/Label</a></li>
								<li class="treeview">
									<a href="#">
										<i class="fa fa-folder"></i> <span>Product Category</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?php echo site_url('add_new_category'); ?>"><i class="fas fa-folder-open"></i> Add New Category</a></li>
										<li><a href="<?php echo site_url('list_of_category'); ?>"><i class="fas fa-folder-open"></i> List of Category </a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#">
										<i class="fa fa-folder"></i> <span>Product Attribute </span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?php echo site_url('add_new_attribute '); ?>"><i class="fas fa-folder-open"></i> Add New Attribute
											</a></li>
										<li><a href="<?php echo site_url('list_of_attribute '); ?>"><i class="fas fa-folder-open"></i> List of Attribute
											</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#">
										<i class="fa fa-folder"></i> <span>Product Brand</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?php echo site_url('add_new_brand'); ?>"><i class="fas fa-folder-open"></i> Add New Brand</a></li>
										<li><a href="<?php echo site_url('list_of_brand'); ?>"><i class="fas fa-folder-open"></i> List of Brand </a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#">
										<i class="fa fa-folder"></i> <span>Product Group</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?php echo site_url('Add_New_Product_Group'); ?>"><i class="fas fa-folder-open"></i> Add New Product
												Group</a></li>
										<li><a href="<?php echo site_url('List_of_Product_Group'); ?>"><i class="fas fa-folder-open"></i> List of Product
												Group</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#">
										<i class="fa fa-folder"></i> <span>Unit Of Measure</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?php echo site_url('Add_New_UOM'); ?>"><i class="fas fa-folder-open"></i> Add New UOM</a></li>
										<li><a href="<?php echo site_url('List_of_UOM'); ?>"><i class="fas fa-folder-open"></i> List of UOM</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Inventory</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('inventory'); ?>"><i class="fas fa-folder-open"></i> Inventory</a></li>
								<li><a href="<?php echo site_url('inventory_adjustment'); ?>"><i class="fas fa-folder-open"></i> Adjustment </a></li>
								<li><a href="<?php echo site_url('inventory_adjustment_list'); ?>"><i class="fas fa-folder-open"></i> Adjustment
										List</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Transfer</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('add_new_transfer'); ?>"><i class="fas fa-folder-open"></i> Add New Transfer</a></li>
								<li><a href="<?php echo site_url('list_of_transfer'); ?>"><i class="fas fa-folder-open"></i> List Of Transfer </a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Purchases</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('add_new_purchases'); ?>"><i class="fas fa-folder-open"></i> Add New Purchases</a></li>
								<li><a href="<?php echo site_url('list_of_purchases'); ?>"><i class="fas fa-folder-open"></i> List Of Purchases </a></li>
								<li><a href="<?php echo site_url('purchases_return'); ?>"><i class="fas fa-folder-open"></i> Purchases Return</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Cashbook</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url(); ?>assets/pages/sales/"><i class="fas fa-folder-open"></i> Add New Account</a></li>
								<li><a href="<?php echo base_url(); ?>assets/pages/sales/"><i class="fas fa-folder-open"></i> List Of Account </a></li>
								<li><a href="<?php echo base_url(); ?>assets/pages/sales/"><i class="fas fa-folder-open"></i> Add New Opening
										Blance</a></li>
								<li><a href="<?php echo base_url(); ?>assets/pages/sales/"><i class="fas fa-folder-open"></i> Transfer Blance</a></li>
								<li><a href="<?php echo base_url(); ?>assets/pages/sales/"><i class="fas fa-folder-open"></i> Transfer History</a></li>
								<li><a href="<?php echo base_url(); ?>assets/pages/sales/"><i class="fas fa-folder-open"></i> Transaction History</a></li>
								<li><a href="<?php echo base_url(); ?>assets/pages/sales/"><i class="fas fa-folder-open"></i> Balance Statement</a></li>
								<li><a href="<?php echo base_url(); ?>assets/pages/sales/"><i class="fas fa-folder-open"></i> Non Invoice Amount</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Expenses</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('add_new_expenses'); ?>"><i class="fas fa-folder-open"></i> Add New Expenses</a></li>
								<li><a href="<?php echo site_url('list_of_expences'); ?>"><i class="fas fa-folder-open"></i> List Of Expenses </a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Client</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('add_new_client'); ?>"><i class="fas fa-folder-open"></i> Add New Client</a></li>
								<li><a href="<?php echo site_url('list_of_client'); ?>"><i class="fas fa-folder-open"></i> List Of Client </a></li>
								<!-- <li><a href="<?php echo site_url('client_details'); ?>"><i class="fas fa-folder-open"></i> List Of Client </a></li> -->
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Suppliers</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo site_url('add_new_suppliers'); ?>"></i> Add New Suppliers</a></li>
								<li><a href="<?php echo site_url('list_of_suppliers'); ?>"></i> List Of Suppliers </a></li>
								<li><a href="<?php echo site_url('suppliers_payment'); ?>"></i> Suppliers Payment </a></li>
								<li><a href="<?php echo site_url('payment_report'); ?>"></i> Payment Report</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Report</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="#"><i class="fa fa-folder"></i> Date Wise Transfers Report</a></li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Sales
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> Date Wise Sales Report</a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Date Wise Total Sales<span class="pull-right-container"></i></span></a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Customer Wise Sales Report<span class="pull-right-container"></i></span></a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Details Sales Report<span class="pull-right-container"></i></span></a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Returned Report<span class="pull-right-container"></i></span></a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Purchase
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> Date Wise Purchase Report</a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Supplier Wise Purchase<span class="pull-right-container"></i></span></a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Details Wise Purchase<span class="pull-right-container"></i></span></a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Date Wise Supplier<span class="pull-right-container"></i></span></a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Client
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> Client Ledger</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Supplier
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> Supplier Ledger</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Payment
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> Payment Collection</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Inventory
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> All Inventory Report</a></li>
										<li><a href="#"><i class="fa fa-folder"></i> Item Wise Inventory Report</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Expense
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> All Expense Report</a></li>
										<li><a href="#"><i class="fa fa-folder"></i> Head Expense Report</a></li>
										<li><a href="#"><i class="fa fa-folder"></i> Expense Report</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Summary
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> Daily Summary Report</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Lgistict
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> Delivery Report</a></li>
										<li><a href="#"><i class="fa fa-folder"></i> Receive Report</a></li>
										<li><a href="#"><i class="fa fa-folder"></i> Details Report</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Profit/Loss
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> Profit/Loss</a></li>
										<li><a href="#"><i class="fa fa-folder"></i> Account Statement</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Settings</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i>User Management<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('add_new_user'); ?>"><i class="fas fa-folder-open"></i> Add New User</a></li>
										<li><a href="<?php echo site_url('manage_user'); ?>"><i class="fas fa-folder-open"></i> Manage Users</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i>Add User Groups<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('Add_New_User_Groups'); ?>"><i class="fas fa-folder-open"></i> Add User Groups</a></li>
										<li><a href="<?php echo site_url('Manage_User_Groups'); ?>"><i class="fas fa-folder-open"></i> Manage User Groups</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i>Div<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('add_new_div'); ?>"><i class="fas fa-folder-open"></i>Add New Div</a></li>
										<li><a href="<?php echo site_url('list_of_div'); ?>"><i class="fas fa-folder-open"></i>List of Div</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i>Zone<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('add_new_zone'); ?>"><i class="fas fa-folder-open"></i>Add New Zone</a></li>
										<li><a href="<?php echo site_url('list_of_zone'); ?>"><i class="fas fa-folder-open"></i>List of Zone</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i>Area<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('add_new_area'); ?>"><i class="fas fa-folder-open"></i>Add New Area</a></li>
										<li><a href="<?php echo site_url('list_of_area'); ?>"><i class="fas fa-folder-open"></i>List of Area</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i>Sales Manager<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('add_new_sales_manager'); ?>"><i class="fas fa-folder-open"></i>Add New Sales
												Maneger</a></li>
										<li><a href="<?php echo site_url('list_of_sales_manager'); ?>"><i class="fas fa-folder-open"></i>List of Sales
												Maneger</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i>Team Leader<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('add_new_team_leader'); ?>"><i class="fas fa-folder-open"></i>Add New Team
												Leader</a></li>
										<li><a href="<?php echo site_url('list_of_team_leader'); ?>"><i class="fas fa-folder-open"></i>List of Leam
												Leader</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i>Team Member<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
									<ul class="treeview-menu" style="display: none;">
										<li><a href="<?php echo site_url('add_new_team_member'); ?>"><i class="fas fa-folder-open"></i>Add New Team
												Member</a></li>
										<li><a href="<?php echo site_url('list_of_team_member'); ?>"><i class="fas fa-folder-open"></i>List of Leam
												Member</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Expense Headings
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> Add New Head</a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> List Of Head<span class="pull-right-container"></i></span></a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> Add New Sub Head<span class="pull-right-container"></i></span></a></li>
										<li class="treeview"><a href="#"><i class="fa fa-folder"></i> LIst Of Sub Head<span class="pull-right-container"></i></span></a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Product Categories
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> List Of Categories</a></li>
										<li><a href="#"><i class="fa fa-folder"></i> Add New Categories</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Warehouse
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-folder"></i> List Of Warehouses</a></li>
										<li><a href="#"><i class="fa fa-folder"></i> Add New Warehouses</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#"><i class="fa fa-folder"></i> Other Income Source
										<span class="pull-right-container">
										</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</section>
			<!-- /.sidebar -->
		</aside>

		<div class="content-wrapper">
			<!-- add pages content -->

			<!-- Content Header (Page header) -->
			<?php echo $admin_main_content; ?>
			<!-- /.content -->

			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<script type="text/javascript">
				google.charts.load('current', {
					'packages': ['bar']
				});
				google.charts.setOnLoadCallback(drawChart);

				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Year', 'POS Sales', 'Online Sales', 'Whole Sales', 'Expenses'],

						['January', 200, 0, 0, 0],

						['February', 0, 0, 0, 0],

						['March', 0, 0, 0, 0],

						['April', 4000, 2200, 0, 0],

						['May', 0, 100, 0, 0],

						['June', 0, 0, 0, 0],

						['July', 0, 0, 0, 0],

						['August', 10100, 2000, 1500, 0],

						['September', 0, 0, 0, 0],

						['October', 0, 0, 0, 0],

						['November', 0, 0, 0, 0],

						['December', 0, 0, 0, 0],
					]);

					var options = {
						chart: {
							title: 'Business summary 2018',
							subtitle: 'POS Sales, Online Sales, Whole Sales, And Expenses',
						},
						bars: 'vertical' // Required for Material Bar Charts.
					};

					var chart = new google.charts.Bar(document.getElementById('barchart_material'));

					chart.draw(data, google.charts.Bar.convertOptions(options));
				}

			</script>

			<section class="content invoice" id="chart_bar" style="display: none;">
				<div class="row">
					<div class="col-md-12">
						<div id="barchart_material" style="width: 100%; height: 350px;"></div>
					</div>
				</div>
			</section>
		</div>

		<footer class="main-footer  no-print">
			<div class="pull-right hidden-xs">
				<b>Version 1.0</b>
			</div>
			<strong>Copyright &copy; <a href="http://iatlbd.com/">IAT</a></strong> All rights
			reserved.
		</footer>
	</div>
	<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo base_url(); ?>assets/movement.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
	<!-- DataTables -->
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
	<!-- Select2 -->
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/jqueryui2.js"></script>
	<!-- bootstrap datepicker -->
	<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
	<script>
		function updateClock() {
			var currentTime = new Date();
			var current_date = currentTime.getDate();
			var current_month = currentTime.getMonth() + 1;
			var current_year = currentTime.getFullYear();
			var currentHours = currentTime.getHours();
			var currentMinutes = currentTime.getMinutes();
			var currentSeconds = currentTime.getSeconds();

			// Pad the minutes and seconds with leading zeros, if required
			currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
			currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

			// Choose either "AM" or "PM" as appropriate
			var timeOfDay = (currentHours < 12) ? "AM" : "PM";

			// Convert the hours component to 12-hour format if needed
			currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;

			// Convert an hours component of "0" to "12"
			currentHours = (currentHours == 0) ? 12 : currentHours;

			// Compose the string for display
			var currentTimeString = current_date + " : " + current_month + " : " + current_year + " : " + currentHours + ":" +
				currentMinutes + ":" + currentSeconds + " " + timeOfDay;


			$("#clock").html(currentTimeString);

		}

		$(document).ready(function () {
			setInterval('updateClock()', 1000);
		});

	</script>

	<script>
		$(function () {
			//$("#example").DataTable();
			$("#example1").DataTable();
			$("#example2").DataTable();
			$("#example3").DataTable();
			$("#example4").DataTable();
			$('.tbl1').DataTable({
				orderable: false,
				"ordering": false
			});
			//Initialize Select2 Elements
			$(".select2").select2();
			//bootstrap WYSIHTML5 - text editor
			$(".textarea").wysihtml5();
			//Date picker
			$('#datepicker').datepicker({
				autoclose: true,
				endDate: '+0d',
				format: 'yyyy-mm-dd'
			});
			$('#datepicker2').datepicker({
				autoclose: true,
				format: 'yyyy-mm-dd'
			});
			//Date range picker
			$('#reservation').daterangepicker({
				locale: {
					format: 'YYYY/MM/DD'
				}
			});
		});

	</script>
</body>

</html>
