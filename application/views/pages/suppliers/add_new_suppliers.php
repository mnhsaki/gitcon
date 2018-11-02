<?php $this->load->view('_base/header'); ?>
<section class="content">
    <?php $this->load->view('message_view'); ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">New Supplier</h3>
                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <a href="<?php echo site_url('list_of_suppliers'); ?>"><i class="fa fa-list"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="box-body">
                    <form action="" method="post">

<!--                        <div class="form-group has-feedback">
                            <label>Warehouse</label>
                            <select class="form-control" name="warehouseID">
                                <option value="" selected="" disabled="">Select Warehouse</option>
                                <option selected="" value="">Warehouse</option>
                                <option value="">Warehouse</option>
                                <option value="">Warehouse</option>
                            </select>
                        </div>-->

                        <div class="form-group has-feedback">
                            <label>Supplier Name<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('supplierName'); ?>" name="supplierName" class="form-control" placeholder="Supplier Name">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Supplier Email<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('supplierEmail'); ?>" type="email" name="supplierEmail" class="form-control" placeholder="Supplier Email">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Supplier Phone Number<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('supplierPhone'); ?>" name="supplierPhone" class="form-control" placeholder="Supplier Phone Number">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Opening Balance<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('opening_balance'); ?>" name="opening_balance" class="form-control" value="0.00" placeholder="Opening Balance">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Supplier Address<span style="color:red;"> * </span></label>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="supplierAddress"><?php echo set_value('supplierAddress'); ?></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" onclick="return get_confirm()" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                            </div>

                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</section>
<?php $this->load->view('_base/footer'); ?>