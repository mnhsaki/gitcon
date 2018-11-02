<?php $this->load->view('_base/header'); ?>
<section class="content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 "></div>
        <div class="col-md-6 col-md-offset-3 ">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Add New Div</b></h3>
                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <a href="<?php echo site_url('list_of_div'); ?>"><i class="fa fa-list"></i></a>
                        </ul>
                    </div>
                    
                </div>
                <div class="box-body">
                    <?php if(isset($status['message'])) echo $status['message'];?>
                    <form action="<?php echo site_url('add_new_div');?>" method="POST">
                        <div class="form-group">
                            <label>Div ID</label>
                            <input class="form-control" name="division_id" id="division_id" type="text"placeholder="D0001">
                        </div>
                        <div class="form-group">
                            <label>Div Name</label>
                            <input class="form-control" name="division_name" id="division_name" type="text" placeholder="Div Name">
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