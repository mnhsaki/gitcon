<?php $this->load->view('_base/header'); ?>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>All Team Leader List</b></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>
                    <div class="col-sm-6">
                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="Name/ID/Zone" aria-controls="example1"></label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100px;" aria-sort="ascending" aria-label="Company: activate to sort column descending">T Leader Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 65px;" aria-label="Invoice No: activate to sort column ascending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100px;" aria-label="Client Name: activate to sort column ascending">Div</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 58px;" aria-label="Sales Date: activate to sort column ascending">Zone</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 58px;" aria-label="Sales Date: activate to sort column ascending">Area</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 88px;" aria-label="Payment Terms: activate to sort column ascending">Target</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 41px;" aria-label="Net Total: activate to sort column ascending">Achieve</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 41px;" aria-label="Due Amount: activate to sort column ascending">Due Amount</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 39px;" aria-label="Status: activate to sort column ascending">Team Member</th>
                                    <th style="width: 208px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($rows as $row):
                                    ?>
                                <tr role="row" class="odd">
                                    <td class="sorting_1"><?php echo $row['team_leader_name']; ?></td>
                                    <td nowrap=""><?php echo $row['team_leader_id']; ?></td>
                                    <td><?php echo $row['division_name']; ?></td>
                                    <td><?php echo $row['zone_name']; ?></td>
                                    <td><?php echo $row['area_name']; ?></td>
                                    <td>Not Implemented</td>
                                    <td>Not Implemented</td>
                                    <td>Not Implemented</td>
                                    <td>Not Implemented</td>
                                    <td nowrap="">
                                        <a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-share"></i>&nbsp;&nbsp;View</a>

                                        <a style="margin-right: 5px;" href="#" onclick="return confirm('Are You sure, Your want to Cancel This!')" class="btn btn-primary btn-xs pull-left"><i class="fa fa-remove"></i>&nbsp;&nbsp;Cancel</a>
                                        <a style="margin-right: 5px;" href="#" class="btn btn-success btn-xs pull-left"><i class="fa fa-share"></i>&nbsp;&nbsp;Approved</a>
                                    </td>
                                </tr>
                                 <?php endforeach; ?>                                
                              
                                
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                                <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                                <li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<?php $this->load->view('_base/footer'); ?>