<?php $this->load->view('_base/header'); ?>
<section class="content">
    <?php $this->load->view('message_view'); ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Add New Team Member</b></h3>
                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <a href="<?php echo site_url('list_of_team_member'); ?>"><i class="fa fa-list"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="box-body">
                    <form action="" method="post">
                        <div class="form-group has-feedback">
                            <label>Team Member ID<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('teammemberid'); ?>" name="teammemberid" class="form-control" placeholder="TM0011">
                        </div>
                        <div class="form-group has-feedback">
                            <div id="select_box">
                                <label>Team Leader<span style="color:red;"> * </span></label>
                                <select required="" name="team_leader_no" id="team_leader_no" class="form-control select2 select2-hidden-accessible" style="width: 100%;" 
                                        tabindex="-1" aria-hidden="true">
                                    <option value="">Select Team Leader</option>
                                    <?php foreach ($rows as $value) : ?>
                                        <option value="<?php echo $value['team_leader_no']; ?>"><?php echo $value['team_leader_id'].' : '.$value['team_leader_name']; ?></option>
                                    <?php endforeach; ?>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Team Member Name<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('teammembername'); ?>" type="text" id="teammembername"  name="teammembername" class="form-control" placeholder="Team Member">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Team Member Email<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('teammembermail'); ?>" name="teammembermail" class="form-control" placeholder="teammember@email.com">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Team Member Phone Number<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('teammembernumber'); ?>" name="teammembernumber" class="form-control" placeholder="+880 123456789">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Team Member NID Number<span style="color:red;">  </span></label>
                            <input value="<?php echo set_value('tnid'); ?>" name="tnid" class="form-control" placeholder="NID Number">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Team Member Address<span style="color:red;"> * </span></label>
                            <textarea class="form-control" name="teammemberaddress" rows="" id="teammemberaddress" placeholder="Address,Dhaka,Bangladesh"><?php echo set_value('teammemberaddress'); ?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Note<span style="color:red;"></span></label>
                            <textarea class="form-control" rows="" name="teammembernote" id="teammembernote" placeholder="Note....."><?php echo set_value('teammembernote'); ?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Image<span style="color:red;"></span></label>
                            <input type="file" name="tmimage">
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