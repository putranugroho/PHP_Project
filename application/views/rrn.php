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
                <div class="box-body">
                    <div class="row">
                        <?php foreach ($payload as $load) : ?>
                            <div class="col-xs-6">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <?php if ($load->mti == '200') : ?>
                                                <th colspan="2">0200 - REQUEST</th>
                                            <?php elseif ($load->mti == '210') : ?>
                                                <th colspan="2">0210 - RESPONSE</th>
                                            <?php elseif ($load->mti == '400') : ?>
                                                <th colspan="2">0400 - REQUEST</th>
                                            <?php elseif ($load->mti == '410') : ?>
                                                <th colspan="2">0410 - RESPONSE</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Msg Type</td>
                                            <td><?php echo $load->mti ?></td>
                                        </tr>
                                        <tr>
                                            <td>Card Number</td>
                                            <td><?php echo $load->bit2 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Trans Type</td>
                                            <td><?php echo $load->bit3 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Amount</td>
                                            <td><?php echo $load->bit4 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Time</td>
                                            <td><?php echo $load->bit7 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td><?php echo $load->bit13 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Settle Date</td>
                                            <td><?php echo $load->bit15 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Network ID</td>
                                            <td><?php echo $load->bit24 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Acquirer Bank Id</td>
                                            <td><?php echo $load->bit32 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Retrieval Ref No</td>
                                            <td><?php echo $load->bit37 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Response Code</td>
                                            <td><?php echo $load->bit39 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Terminal Id</td>
                                            <td><?php echo $load->bit41 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Terminal Loc</td>
                                            <td><?php echo $load->bit43 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dest / Issuer Name</td>
                                            <td><?php echo $load->bit48 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Issuer Bank Id</td>
                                            <td><?php echo $load->bit100 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Issuer Acct</td>
                                            <td><?php echo $load->bit102 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dest Acct</td>
                                            <td><?php echo $load->bit103 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Posting Code</td>
                                            <td><?php echo $load->bit125 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dest Bank Id</td>
                                            <td><?php echo $load->bit127 ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php endforeach; ?>
                    </div>
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