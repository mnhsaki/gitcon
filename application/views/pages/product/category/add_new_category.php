<?php $this->load->view('_base/header'); ?>
<section class="content">
     <?php $this->load->view('message_view'); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 "></div>
        <div class="col-md-6 col-md-offset-3 ">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>New Catagory</b></h3>
                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <a href="<?php echo site_url('list_of_category'); ?>"><i class="fa fa-list"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="box-body">
                    <form action="" method="post">
                        <div class="form-group has-feedback">
                            <label>Category Name</label>
                            <input required="" name="category_name" class="form-control" placeholder="Category Name">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Category ID</label>
                            <input required="" name="category_id" class="form-control" placeholder="CTG6549">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Category Note<span style="color:red;"></span></label>
                            <textarea class="form-control" rows="" name="category_note" id="category_note" placeholder="Note....."></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Category Image<span style="color:red;"></span></label>
                            <input type="file" name="category_image" >
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