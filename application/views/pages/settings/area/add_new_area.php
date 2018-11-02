<?php $this->load->view('_base/header'); ?>
<section class="content">
    <?php $this->load->view('message_view'); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 "></div>
        <div class="col-md-6 col-md-offset-3 ">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Add New Area</b></h3>
                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <a href="<?php echo site_url('list_of_area'); ?>"><i class="fa fa-list"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group has-feedback">
                            <div id="select_box">
                                <label>Div<span style="color:red;"> * </span></label>
                                <select required="" name="division_no" id="div" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="">Select Division</option>
                                    <?php foreach ($division as $value) : ?>
                                        <option value="<?php echo $value['division_no']; ?>"><?php echo $value['division_name']; ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div id="select_box">
                                <label>Zone<span style="color:red;"> * </span></label>
                                <select name="zone_no" required="" id="zone_no" class="form-control select2 select2-hidden-accessible" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                                    <option value="">Select Zone</option>
                                    <?php foreach ($zone as $value) : ?>
                                        <option value="<?php echo $value['zone_no']; ?>"><?php echo $value['zone_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Area Name</label>
                            <input required="" name="area_name" class="form-control" placeholder="Area Name">
                        </div>
                        <div class="row">
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" onclick="return checkad_add()" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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