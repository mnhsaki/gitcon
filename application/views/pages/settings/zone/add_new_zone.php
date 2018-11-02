<?php $this->load->view('_base/header'); ?>
<section class="content">
    <div class="row">

        <div class="col-md-6 col-md-offset-3 ">
           <?php $this->load->view('message_view'); ?>

        </div>
        <div class="col-md-6 col-md-offset-3 ">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Add New Zone</b></h3>
                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <a href="<?php echo site_url('list_of_zone'); ?>"><i class="fa fa-list"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="box-body">
                    <?php if (isset($status['message'])) echo $status['message']; ?>
                    <form action="<?php echo site_url('add_new_zone'); ?>" method="POST">
                        <div class="form-group">
                            <div id="select_box">
                                <label>Division<span style="color:red;"> * </span></label>                                

                                <select required="" id="division_no" name="division_no"  class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="">Select Division</option>
                                    <?php foreach ($divisions as $division): ?>

                                        <option value="<?php echo $division['division_no']; ?>"><?php echo $division['division_name']; ?></option>
                                    <?php endforeach; ?>              

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Zone ID</label>
                            <input required="" name="zone_id" class="form-control" placeholder="Z0001">
                        </div>

                        <div class="form-group">
                            <label>Zone Name</label>
                            <input required="" name="zone_name" class="form-control" placeholder="Zone Name">
                        </div>
                        <div class="row">
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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