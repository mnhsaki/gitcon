<?php $this->load->view('_base/header'); ?>
<section class="content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 "></div>
        <div class="col-md-6 col-md-offset-3 ">
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>New Product Group</b></h3>

                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group has-feedback">
                            <label>Group Name <span style="color:red;">*</span></label>
                            <input required="" name="productName" class="form-control" placeholder="Group Name">
                        </div>
                        <div class="form-group has-feedback">
							<label>Group ID <span style="color:red;">*</span></label>
							<input required="" name="group_id" class="form-control" placeholder="G6549">
						</div>
						<div class="form-group has-feedback">
							<label>Group Note<span style="color:red;"></span></label>
							<textarea class="form-control" rows="" name="group_note" id="Group_note" placeholder="Note....."></textarea>
						</div>
						<div class="form-group has-feedback">
							<label>Group Image<span style="color:red;"></span></label>
							<input type="file" name="group_image" >
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