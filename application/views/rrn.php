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
                    <form action="<?php echo base_url() . 'rrn/search_rrn'; ?>" method="post">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Transaction Date</label>
                                    <input type="date" name="trans_date" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Retrieval Ref Number</label>
                                    <input type="text" name="rrn" class="form-control" value="">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Msg Type</label>
                                    <div class="checkbox icheck" style="margin-top: 0px;">
                                        <label style="margin-right: 20px;">
                                            <input type="checkbox" value="normal" name="check[]"> Normal
                                        </label>
                                        <label style="margin-top: 10px;">
                                            <input type="checkbox" value="reversal" name="check[]"> Reversal
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-top: 24px;">Proses</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
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