<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-12 col-xs-12">


			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Add Group</h3>
				</div>
				<form role="form" action="" method="post">
					<div class="box-body">


						<div class="form-group">
							<label for="group_name">Group Name</label>
							<input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name">
						</div>
						<div class="form-group">
							<label for="permission">Permission</label>

							<table class="table table-responsive">
								<thead>
									<tr>
										<th></th>
										<th>Create</th>
										<th>Update</th>
										<th>View</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Users</td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="createUser" class="minimal" style="position: absolute; top: 186px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateUser" class="minimal" style="position: absolute; top: 186px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="viewUser" class="minimal" style="position: absolute; top: 186px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="deleteUser" class="minimal" style="position: absolute; top: 186px;"></label></td>
									</tr>
									<tr>
										<td>Groups</td>
                    <td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="createGroup" class="minimal" style="position: absolute; top: 221px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateGroup" class="minimal" style="position: absolute; top: 221px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="viewGroup" class="minimal" style="position: absolute; top: 221px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="deleteGroup" class="minimal" style="position: absolute; top: 221px;"></label></td>
									</tr>
									<tr>
										<td>Brands</td>
                    <td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="createBrand" class="minimal" style="position: absolute; top: 259px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateBrand" class="minimal" style="position: absolute; top: 259px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="viewBrand" class="minimal" style="position: absolute; top: 259px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="deleteBrand" class="minimal" style="position: absolute; top: 259px;"></label></td>
									</tr>
									<tr>
										<td>Category</td>
                    <td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="createCategory" class="minimal" style="position: absolute; top: 294px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateCategory" class="minimal" style="position: absolute; top: 294px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateCategory" class="minimal" style="position: absolute; top: 294px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="viewCategory" class="minimal"   style="position: absolute; top: 294px;"></label></td>
									</tr>
									<tr>
										<td>Client</td>
                    <td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="createClient" class="minimal" style="position: absolute; top: 331px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateClient" class="minimal" style="position: absolute; top: 331px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="viewClient" class="minimal" style="position: absolute; top: 331px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="deleteClient" class="minimal"   style="position: absolute; top: 331px;"></label></td>
									</tr>
									<tr>
										<td>Attributes</td>
                    <td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="createAttribute" class="minimal" style="position: absolute; top: 368px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateAttribute" class="minimal" style="position: absolute; top: 368px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="viewAttribute" class="minimal" style="position: absolute; top: 368px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="deleteAttribute" class="minimal"   style="position: absolute; top: 368px;"></label></td>
									</tr>
									<tr>
										<td>Products</td>
                    <td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="createProduct" class="minimal" style="position: absolute; top: 405px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateProduct" class="minimal" style="position: absolute; top: 405px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="viewProduct" class="minimal" style="position: absolute; top: 405px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="deleteProduct" class="minimal"   style="position: absolute; top: 405px;"></label></td>
									</tr>
									<tr>
										<td>Orders</td>
                    <td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="createOrder" class="minimal" style="position: absolute; top: 442px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateOrder" class="minimal" style="position: absolute; top: 442px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="viewOrder" class="minimal" style="position: absolute; top: 442px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="deleteOrder" class="minimal"   style="position: absolute; top: 442px;"></label></td>
									</tr>
									<tr>
										<td>Reports</td>
										<td> - </td>
										<td> - </td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="viewReport" class="minimal"   style="position: absolute; top: 479px;"></label></td>
										<td> - </td>
									</tr>
									<tr>
										<td>Company</td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="createCompany" class="minimal" style="position: absolute; top: 516px;"></label></td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="updateCompany" class="minimal" style="position: absolute; top: 516px;"></label></td>
										<td> - </td>
										<td> - </td>
									</tr>
									<tr>
										<td>Profile</td>
										<td> - </td>
										<td> - </td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="ViewProfile" class="minimal" style="position: absolute; top: 553px;"></label></td>
										<td> - </td>
									</tr>
									<tr>
										<td>Setting</td>
										<td>-</td>
										<td><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="permission[]" id="permission" value="UpdateSetting" class="minimal" style="position: absolute; top: 590px;"></label></td>
										<td> - </td>
										<td> - </td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Save Changes</button>
						<a href="#" class="btn btn-warning">Back</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
		<!-- col-md-12 -->
	</div>
	<!-- /.row -->


</section>
