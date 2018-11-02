<?php $this->load->view('_base/header'); ?>
<section class="content">
    <?php $this->load->view('message_view'); ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Add New Sales Manager</b></h3>
                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <a href="<?php echo site_url('list_of_sales_manager'); ?>"><i class="fa fa-list"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group has-feedback">
                            <label>Sales Manager ID<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('sales_manager_id'); ?>" required="" name="sales_manager_id" class="form-control" placeholder="SM0011">
                        </div>
                        <div class="form-group has-feedback">
                            <div id="select_box">
                                <label>Div<span style="color:red;"> * </span></label>
                                <select required="" name="division_no" id="division_no" class="form-control select2 select2-hidden-accessible" style="width: 100%;" 
                                        tabindex="-1" aria-hidden="true">
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
                                <select required=""  name="zone_no" id="zone_no" class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                        tabindex="-1" aria-hidden="true">
                                    <option value="">Select Zone</option>
                                    <div id="zone_info"></div>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div id="select_box">
                                <label>Area<span style="color:red;"> * </span></label>
                                <select required="" name="area_no" id="area_no" class="form-control select2 select2-hidden-accessible" style="width: 100%;" 
                                        tabindex="-1" aria-hidden="true">
                                    <option selected="" disabled="">Select Area</option>
                                    <option value="">Area</option>
                                    <option value="">Area</option>
                                    <option value="">Area</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Sales Manager Name<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('sales_manager_name'); ?>" type="text" id="sales_manager_name" name="sales_manager_name" class="form-control" placeholder="Sales Manager">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Sales Manager Email<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('sales_manager_email'); ?>" name="sales_manager_email" class="form-control" placeholder="salesmanager@email.com">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Sales Manager Phone Number<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('sales_manager_number'); ?>" name="sales_manager_number" class="form-control" placeholder="+880 123456789">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Sales Manager NID Number<span style="color:red;"> * </span></label>
                            <input value="<?php echo set_value('sales_manager_nid'); ?>" name="sales_manager_nid" class="form-control" placeholder="NID Number">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Sales Manager Address<span style="color:red;"> * </span></label>
                            <textarea class="form-control" name="sales_manager_address" rows="" id="sales_manager_address" placeholder="Address,Dhaka,Bangladesh"><?php echo set_value('sales_manager_address'); ?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Note<span style="color:red;"></span></label>
                            <textarea class="form-control" rows="" name="sales_manager_note" id="sales_manager_note" placeholder="Note....."><?php echo set_value('sales_manager_note'); ?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Image<span style="color:red;"></span></label>
                            <input type="file" name="slimage">
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

</section>
<?php $this->load->view('_base/footer'); ?>

<script>
    $(document).ready(function () {
        /*  ########################################################## */
        function getZoneInfo(division_no) {
            $("#division_no").addClass('loading');
            $("#division_no").addClass('overlay');

//            alert('hi');
            var url = '<?php echo site_url('ajax/get_zone_info/'); ?>' + '/' + division_no;
            var dataString = 'division_no=' + division_no;
            $.ajax({
//                dataType: "json",
                url: url,
                method: "POST",
                data: dataString,
                statusCode: {
                    404: function () {
                        alert("page not found");
                    }
                }
            }).done(function (data) {

                $('#zone_no').html(data);

            }).always(function () {
                $("#loading").removeClass('loading');
            });
        }
        /*  ########################################################## */
        function getAreaInfo(zone_no) {
            $("#loading").addClass('loading');
            $("#area_no").addClass('overlay');

//            alert('hi');
            var url = '<?php echo site_url('ajax/get_area_info/'); ?>' + '/' + zone_no;
            var dataString = 'zone_no=' + zone_no;
            $.ajax({
//                dataType: "json",
                url: url,
                method: "POST",
                data: dataString,
                statusCode: {
                    404: function () {
                        alert("page not found");
                    }
                }
            }).done(function (data) {

                $('#area_no').html(data);

            }).always(function () {
                $("#loading").removeClass('loading');
            });
        }
        /*  ########################################################## */
        $("#division_no").change(function () {
            division_no = $(this).val();
            if (division_no != '') {
//                alert(division_no);
                $('#zone_no').html('<option selected="" disabled="">Select Zone</option>');
                $('#area_no').html('<option selected="" disabled="">Select Area</option>');

                getZoneInfo(division_no);
            }
        });
        /*  ########################################################## */
        $("#zone_no").change(function () {
            zone_no = $(this).val();
            if (zone_no != '') {
//                alert(division_no);

                $('#area_no').html('<option selected="" disabled="">Select Area</option>');

                getAreaInfo(zone_no);
            }
        });
        /*  ########################################################## */
    });
</script>