<?php $this->load->view('_base/header'); ?>
<section class="content">
    
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><b>Area List</b></h3>
                </div>
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
                            <div class="col-sm-5">
                                <div id="" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="Area Name" aria-controls="example1"></label></div>
                            </div>
                            <div class="col-xs-1">
                                <a href="add_new_area"><button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;New Area</button></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="width: 19px;" class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="SL.: activate to sort column descending">SL.</th>
                                            <th style="width: 150px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending">Area Name</th>
                                            <th style="width: 150px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending">Area ID</th>
                                            <th style="width: 150px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending">Zone Name</th>
                                            <th style="width: 150px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending">Div Name</th>
                                            <th style="width: 54px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($rows as $row):
                                            ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo ++$i; ?></td>
                                                <td><a href="#" onclick="" data-toggle="modal" data-target=""><?php echo $row['area_name']; ?></a></td>
                                                <td><a href="#" onclick="" data-toggle="modal" data-target=""><?php echo $row['area_id']; ?></a></td>
                                                <td><a href="#" onclick="" data-toggle="modal" data-target=""><?php echo $row['zone_name']; ?></a></td>
                                                <td><a href="#" onclick="" data-toggle="modal" data-target=""><?php echo $row['division_name']; ?></a></td>
                                                <td>
                                                    <a style="margin-right: 5px;" href="#" class="btn btn-primary btn-xs pull-left">Edit</a>
                                                    <a href="#" onclick="return confirm('Are You sure, Your want to delete This!')" class="btn btn-danger btn-xs pull-left">Delete</a>
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
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 9 of 9 entries</div>
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
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('_base/footer'); ?>