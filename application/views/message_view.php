<?php if (validation_errors()): ?>
<div class="row">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Error</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php echo validation_errors(); ?>
        </div>
        <!-- /.box-body -->
    </div>
    </div>
<?php endif; ?>
<?php if (isset($status['message'])): ?>

<div class="row">
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Info</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php echo $status['message']; ?>
        </div>
        <!-- /.box-body -->
    </div>
     </div>
<?php endif; ?>