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
                <section class="mx-auto">
                    <form action="<?php echo base_url() . 'rrn/search_rrn'; ?>" method="post">
                        <div class="col-xs-4">
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
                        <div class="col-xs-2">
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
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        <!-- /.col -->
                    </form>
                </section>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th colspan="2">0200 - REQUEST</th>
                                <th colspan="2">0210 - RESPONSE</th>
                            </tr>
                        </thead>
                        <?php foreach ($payload as $payload) : ?>
                            <tbody>
                                <tr>
                                    <td>Msg Type</td>
                                    <td><?php echo $payload->id ?></td>
                                    <td>Msg Type</td>
                                    <td><?php echo $payload->mti ?></td>
                                </tr>
                                <tr>
                                    <td>Card Number</td>
                                    <td></td>
                                    <td>Card Number</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Trans Type</td>
                                    <td></td>
                                    <td>Trans Type</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Amount</td>
                                    <td></td>
                                    <td>Amount</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td></td>
                                    <td>Time</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td></td>
                                    <td>Date</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Settle Date</td>
                                    <td></td>
                                    <td>Settle Date</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Network ID</td>
                                    <td></td>
                                    <td>Network ID</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Acquirer Bank Id</td>
                                    <td></td>
                                    <td>Acquirer Bank Id</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Retrieval Ref No</td>
                                    <td></td>
                                    <td>Retrieval Ref No</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Response Code</td>
                                    <td></td>
                                    <td>Response Code</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Terminal Id</td>
                                    <td></td>
                                    <td>Terminal Id</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Terminal Loc</td>
                                    <td></td>
                                    <td>Terminal Loc</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Dest / Issuer Name</td>
                                    <td></td>
                                    <td>Dest / Issuer Name</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Issuer Bank Id</td>
                                    <td></td>
                                    <td>Issuer Bank Id</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Issuer Acct</td>
                                    <td></td>
                                    <td>Issuer Acct</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Dest Acct</td>
                                    <td></td>
                                    <td>Dest Acct</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Posting Code</td>
                                    <td></td>
                                    <td>Posting Code</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Dest Bank Id</td>
                                    <td></td>
                                    <td>Dest Bank Id</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
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