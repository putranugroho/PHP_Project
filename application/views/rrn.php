<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Transaction
        <small>by RRN</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transaction</a></li>
        <li class="active">RRN</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <section>
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
                                            <input type="checkbox" value="normal" name="check[]"> Normal
                                            <input type="checkbox" value="reversal" name="check[]"> Reversal
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->

                                <div class="col-xs-2" style="margin-top: 24px; padding-left: 0px; text-align: end;">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </section>
                </div>
                <!-- /.box-header -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->