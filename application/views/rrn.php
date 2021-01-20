<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <section style="padding : 0px 10px;">
                        <form action="<?php echo base_url() . 'rrn/search_rrn'; ?>" method="post">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <label>Transaction Date</label>
                                        <input type="date" name="trans_date" class="form-control" value="">
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label>Retrieval Ref Number</label>
                                        <input type="text" name="rrn" class="form-control" value="">
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <label>MSG TYPE : </label>
                                        <div class="checkbox icheck">
                                            <label>
                                                <input type="checkbox" value="normal" name="check[]"> Normal
                                                <input type="checkbox" value="reversal" name="check[]"> Reversel
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->

                                <div class="col-xs-2" style="margin-top: 24px; text-align: end;">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </section>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->