<?php $this->load->view('_base/header'); ?>
<section class="content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 "></div>
        <div class="col-md-6 col-md-offset-3 ">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>New Product</b></h3>
                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>Product Group<span style="color:red;">*</span></label>
                            <select name="groupID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
                                    aria-hidden="true">
                                <option value="">Select Group</option>
                                <?php foreach ($product_groups as $value) : ?>
                                    <option value="<?php echo $value['product_group_no']; ?>"><?php echo $value['product_group_name']; ?></option>
                                <?php endforeach; ?>

                            </select>
                            <a href="Add_New_Group"><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add
                                    New Group</button></a>
                        </div>
                        <div class="form-group">
                            <label>Product Category<span style="color:red;">*</span></label>
                            <select name="catagoryID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
                                    aria-hidden="true">
                                <option value="">Select Catagory</option>
                                <?php foreach ($product_category as $value) : ?>
                                    <option value="<?php echo $value['product_category_no']; ?>"><?php echo $value['product_category_name']; ?></option>
                                <?php endforeach; ?>


                            </select>
                            <a href="add_new_category"><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add
                                    New Category</button></a>
                        </div>
                        <div class="form-group">
                            <label>UOM<span style="color:red;">*</span></label>
                            <select name="uomID" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1"
                                    aria-hidden="true">
                                <option value="">Select UOM</option>
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
                            <input required="" name="productName" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Description</label>
                            <input required="" name="description" class="form-control" placeholder="Example of a longer product description">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Product retail Price<span style="color:red;">*</span></label>
                            <input required="" name="productPrice" class="form-control" placeholder="Product Sales Price">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Product Whole Sale Price<span style="color:red;">*</span></label>
                            <input required="" name="productWholeSalePrice" class="form-control" placeholder="Product Whole Sale Price">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Reorder Point<span style="color:red;"></span></label>
                            <input required="" name="reorder_point" class="form-control" placeholder="10">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Product Code<span style="color:red;">*</span></label>
                            <div class="input-group input-group-sm">
                                <input required="" id="productCode" type="text" name="productCode" placeholder="Product Code" class="form-control">
                                <span class="input-group-btn">
                                    <button id="random" type="button" class="btn btn-flat"><i class="fa fa-random"></i></button>
                                </span>
                            </div>
                            <span id="productCodeError" class="help-block" style="color: red;font-weight: bold;"></span>
                            <span class="help-block">You can scan your barcode or click random button</span>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Product Image<span style="color:red;"></span></label>
                            <input type="file" name="product_image">
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