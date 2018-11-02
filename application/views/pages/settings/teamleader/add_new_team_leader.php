<?php $this->load->view('_base/header'); ?>
<section class="content">
    <?php $this->load->view('message_view'); ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Add New Team Leader</b></h3>
                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <a href="<?php echo site_url('list_of_team_leader'); ?>"><i class="fa fa-list"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="box-body">
                    <form action="" method="post">
                        <div class="form-group has-feedback">
                            <label>Team Leader ID<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('teamleaderid'); ?>" name="teamleaderid" class="form-control" placeholder="TL0011">
                        </div>
                        <div class="form-group has-feedback">
                            <div id="select_box">
                                <label>Sales Manager<span style="color:red;"> * </span></label>
                                <select required="" name="sales_manager_no" id="sales_manager_no" class="form-control select2 select2-hidden-accessible" style="width: 100%;" 
                                        tabindex="-1" aria-hidden="true">
                                    <option value="">Select Sales Manager</option>
                                    <?php foreach ($rows as $value) : ?>
                                        <option value="<?php echo $value['sales_manager_no']; ?>"><?php echo $value['sales_manager_id'].' : '.$value['sales_manager_name']; ?></option>
                                    <?php endforeach; ?>
                                    
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Team Leader Name<span style="color:red;"> * </span></label>
                            <input type="text" value="<?php echo set_value('teamleadername'); ?>" id="teamleadername"  name="teamleadername" class="form-control" placeholder="Team Leader">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Team Leader Phone Number<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('teamleadernumber'); ?>" name="teamleadernumber" class="form-control" placeholder="+880 123456789">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Team Leader Email<span style="color:red;">  </span></label>
                            <input value="<?php echo set_value('teamleadermail'); ?>" name="teamleadermail" class="form-control" placeholder="teamleder@email.com">
                        </div>
                        
                        <div class="form-group has-feedback">
                            <label>Team Leader NID Number<span style="color:red;">  </span></label>
                            <input value="<?php echo set_value('tnid'); ?>" name="tnid" class="form-control" placeholder="NID Number">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Team Leader Address<span style="color:red;">  </span></label>
                            <textarea class="form-control" name="teamleaderaddress" rows="" id="teamleaderaddress" placeholder="Address,Dhaka,Bangladesh"><?php echo set_value('teamleaderaddress'); ?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Note<span style="color:red;"></span></label>
                            <textarea class="form-control" rows="" name="teamleadernote" id="teamleadernote" placeholder="Note.....">value="<?php echo set_value('teamleadernote'); ?>"</textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Image<span style="color:red;"></span></label>
                            <input type="file" name="tlimage">
                        </div>
                </div>

                <div class="row">
                    <div class="col-xs-4">

                    </div>
                    <div class="col-xs-4">

                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button onclick="return checkad_add()" type="submit" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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