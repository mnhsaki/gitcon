<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><b>New Purchase</b></h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<form action="#" method="POST" role="form">
					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Warehouse</label>
									<select name="warehouseID" id="warehouseID" class="form-control select2 select2-hidden-accessible" style="width: 100%;"
									 readonly="" tabindex="-1" aria-hidden="true">
										<option value="">Warehouse 1</option>
										<option value="">Warehouse 2</option>
										<option value="">Warehouse 3</option>
									</select>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<div id="select_box">
										<label>Supplier<sup style="color:red;">*</sup></label>
										<div class="search">
											<span class="fa fa-search"></span>
											<input type="text" id="supplierName" placeholder="Supplier Name" class="form-control required_fields ui-autocomplete-input"
											 autocomplete="off">
										</div>
										<input type="hidden" name="supplierID" id="supplierID">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Purchase No.</label>
									<input name="purchaseNo" id="purchaseNo" type="text" readonly="" class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>PO Reference</label>
									<input name="poRef" type="text" placeholder="Po / Reference" class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Payment Terms</label>
									<input name="payTerms" type="text" placeholder="Payment Terms" class="form-control">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Purchase Date<sup>*</sup></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="purchaseDate" id="datepicker" class="form-control" placeholder="YYYY-MM-DD">
										<!-- For Limit Today:  data-provide="datepicker" data-date-end-date="0d" -->
									</div><!-- /.input group -->
									<!--<p style="color: red; text-align: center; font-size: 12px;">
                                        Will not be greater than today
                                    </p>-->
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Due Date<sup>*</sup></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="dueDate" id="datepicker2" class="form-control" placeholder="YYYY-MM-DD">
									</div><!-- /.input group -->
									<!--<p style="color: red; text-align: center; font-size: 12px;">
                                        Will not be greater than today
                                    </p>-->
								</div>
							</div>




						</div>

						<div class="box-header">
							<h3 class="box-title">Products *</h3>
						</div><!-- /.box-header -->
						<div>
							<div class="search" style="padding-bottom: 20px">
								<span class="fa fa-search"></span>
								<input value="" id="productName" onkeypress="load_ajax()" class="form-control ui-autocomplete-input"
								 placeholder="Search Product By Name or Barcode" autocomplete="off">
							</div>
							<table class="table table-striped">
                                <thead>
                                    <tr style="background: lightgray;border-radius: 5px;">
                                        <th style="border: 1px solid white;">Product Name</th>
                                        <th style="width: 20%;text-align: center;border: 1px solid white;">Price</th>
                                        <th style="width: 20%;text-align: center;border: 1px solid white;">Quantity<span style="color:red;"> * </span></th>
                                        <th style="border: 1px solid white;width: 11%;">Total Price</th>
                                        <th style="width: 7%;text-align: center;border: 1px solid white;">#</th>
                                    </tr>
                                </thead>
                                <tbody id="tableDynamic">
                                    <tr id="old_msg" style="background: lightgray none repeat scroll 0% 0%; border-radius: 5px; display: none;">
                                        <td style="text-align: center;border: 1px solid white;" colspan="6">Search By Name or Barcode</td>
                                    </tr>
                                <tr style="font-weight:bold;"><td style="text-alight:left;border-radius:5px;border: 1px solid lightgray;margin:0px!important;padding:0px!important;"><span style="margin-left:8px!important;padding-top:19px !important;">Product (5246254564564)</span></td><td style="text-align: center;border: 1px solid lightgray;margin:0px!important;padding:0px!important;"><input style="padding:5px;text-align: center;" class="form-control purchaseprice" onkeypress="return isNumber(event)" id="unitcost_2" name="purchasePrice[]" type="text"></td><td style="text-align: center;border: 1px solid lightgray;margin:0px!important;padding:0px!important;"><input id="quantity_2" type="text" class="quant form-control" onkeypress="return isNumber(event)" name="quantity[]" style="padding:5px;text-align: center;" value="1" autocomplete="off"></td><td style="text-align: center;border: 1px solid lightgray;margin:0px!important;padding:0px!important;"><input type="text" id="totalprice_2" name="totalPrice[]" readonly="" placeholder="Total Price.." class="totalprice  form-control"></td><input class="productid" id="productID_2" name="productID[]" value="1" type="hidden"><td style="text-align: center;border: 1px solid lightgray;margin:0px!important;padding:0px!important;"><div id="removeRow"><i class="fa fa-trash-o" style="cursor:pointer;"></i></div></td></tr></tbody>

                            </table>


<table style="margin-top: -20px;" class="table">
   <tbody>
      <tr>
         <td style="width: 66%;border-top: medium none;">
            <!-- <a style="margin-left:32px;" href="javascript:void(0);" id="addRow" class="btn btn-info  btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add New Product</a> -->
         </td>
         <td style="width: 15%;border-top: medium none; text-align: right;" colspan="">Sub Total</td>
         <td style="border-top: medium none;"><input name="subTotal" type="text" id="subtotal" readonly="" placeholder="Sub Total Price.." class="form-control"></td>
      </tr>
      <tr>
         <td style="width: 66%;border-top: medium none;">
            <!-- <a style="margin-left:32px;" href="javascript:void(0);" id="addRow" class="btn btn-info  btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add New Product</a> -->
         </td>
         <td style="width: 15%;border-top: medium none; text-align: right;" colspan="">Discount</td>
         <td style="border-top: medium none;"><input name="discount" type="text" id="discount" readonly="" placeholder="Discount.." class="form-control" value=""></td>
      </tr>
      <tr>
         <td style="width: 66%;border-top: medium none;">
            <!-- <a style="margin-left:32px;" href="javascript:void(0);" id="addRow" class="btn btn-info  btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add New Product</a> -->

         </td>
         <td style="width: 15%;border-top: medium none; text-align: right;" colspan="">Net Total</td>
         <td style="border-top: medium none;"><input name="nettotal" type="text" id="nettotal" readonly="" placeholder="Net Total.." class="form-control"></td>
      </tr>
      <!-- <tr>
         <td rowspan="5" style="border-top: medium none; position: relative;">
            <label for="">Note<sup>*</sup></label>
            <ul class="wysihtml5-toolbar" style="">
               <li class="dropdown">
                  <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">
                  <span class="glyphicon glyphicon-font"></span>
                  <span class="current-font">Normal text</span>
                  <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p" tabindex="-1" href="javascript:;" unselectable="on" class="wysihtml5-command-active">Normal text</a></li>
                     <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li>
                     <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
                     <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
                     <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
                     <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
                     <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
                  </ul>
               </li>
               <li>
                  <div class="btn-group">
                     <a class="btn btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
                     <a class="btn btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
                     <a class="btn btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>
                     <a class="btn btn-default" data-wysihtml5-command="small" title="CTRL+S" tabindex="-1" href="javascript:;" unselectable="on">Small</a>
                  </div>
               </li>
               <li>
                  <a class="btn btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" data-wysihtml5-display-format-name="false" tabindex="-1" href="javascript:;" unselectable="on">
                  <span class="glyphicon glyphicon-quote"></span>
                  </a>
               </li>
               <li>
                  <div class="btn-group">
                     <a class="btn btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on">
                     <span class="glyphicon glyphicon-list"></span>
                     </a>
                     <a class="btn btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on">
                     <span class="glyphicon glyphicon-th-list"></span>
                     </a>
                     <a class="btn btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on">
                     <span class="glyphicon glyphicon-indent-right"></span>
                     </a>
                     <a class="btn btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on">
                     <span class="glyphicon glyphicon-indent-left"></span>
                     </a>
                  </div>
               </li>
               <li>
                  <div class="bootstrap-wysihtml5-insert-link-modal modal fade" data-wysihtml5-dialog="createLink">
                     <div class="modal-dialog ">
                        <div class="modal-content">
                           <div class="modal-header">
                              <a class="close" data-dismiss="modal">×</a>
                              <h3>Insert link</h3>
                           </div>
                           <div class="modal-body">
                              <div class="form-group">
                                 <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control" data-wysihtml5-dialog-field="href">
                              </div>
                              <div class="checkbox">
                                 <label>
                                 <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window
                                 </label>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
                              <a href="#" class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save">Insert link</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="btn btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">
                  <span class="glyphicon glyphicon-share"></span>
                  </a>
               </li>
               <li>
                  <div class="bootstrap-wysihtml5-insert-image-modal modal fade" data-wysihtml5-dialog="insertImage">
                     <div class="modal-dialog ">
                        <div class="modal-content">
                           <div class="modal-header">
                              <a class="close" data-dismiss="modal">×</a>
                              <h3>Insert image</h3>
                           </div>
                           <div class="modal-body">
                              <div class="form-group">
                                 <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control" data-wysihtml5-dialog-field="src">
                              </div>
                           </div>
                           <div class="modal-footer">
                              <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
                              <a class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save" href="#">Insert image</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="btn btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">
                  <span class="glyphicon glyphicon-picture"></span>
                  </a>
               </li>
            </ul>
            <textarea class="textarea" name="note" style="width: 100%; height: 100px; border: 1px solid rgb(221, 221, 221); padding: 10px; background: rgb(252, 252, 252) none repeat scroll 0% 0%; z-index: auto; line-height: 18px; font-size: 14px; transition: none 0s ease 0s; display: none;" spellcheck="true" placeholder="Note"></textarea>
            <input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" marginwidth="0" marginheight="0" style="display: inline; background-color: rgb(252, 252, 252); border-collapse: collapse; border-color: rgb(221, 221, 221); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: rgb(51, 51, 51) none 0px; outline-offset: 0px; padding: 10px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: text-bottom; text-align: start; box-sizing: border-box; box-shadow: rgb(204, 204, 204) 0px 0px 3px 0px, rgb(235, 235, 235) 0px 10px 15px 0px inset; border-radius: 5px; width: 100%; height: 100px;" __idm_frm__="8589934624" data-gramm_id="e482e2f3-34b8-71ba-5fcb-583676813409" data-gramm="true" gramm-ifr="true" spellcheck="false" width="0" height="0" frameborder="0"></iframe>
            <grammarly-btn>
               <div style="z-index: 2; transform: translate(666.533px, 146px);" class="_1BN1N Kzi1t _2DJZN">
                  <div class="_1HjH7">
                     <div title="Protected by Grammarly" class="_3qe6h">&nbsp;</div>
                  </div>
               </div>
            </grammarly-btn>
         </td>
      </tr> -->

      <tr style="dispaly:none;">
         <td style="border-top: medium none; text-align: right;" colspan=""></td>
         <td style="border-top: medium none;"><input type="hidden" id="dueamount" readonly="" name="dueAmount" placeholder="Due Amount.." class="form-control" value="220000"></td>
      </tr>
   </tbody>
</table>








						</div>

					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary  btn-sm" onclick="return checkadd();"><i class="fa fa-save"></i>&nbsp;&nbsp;Create</button>
						<a href="#" class="btn btn-danger  btn-sm"><i class="fa fa-close"></i>&nbsp;&nbsp;Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</section>
