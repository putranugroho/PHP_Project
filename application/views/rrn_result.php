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
                <div class="box-body">
                    <div class="row">
                        <?php $no = 1;
                        foreach ($payload as $load) : ?>
                            <div class="col-sm-6">
                                <table id="Table<?php echo $no++ ?>" class="table table-bordered table-hover dataTable" style="border-color: #000000;">
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
                                            <td style="border-top: 1px solid #000000;">Msg Type</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->mti ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Card Number</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit2 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Trans Type</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit3 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Amount</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit4 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Time</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit7 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Date</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit13 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Settle Date</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit15 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Network ID</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit24 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Acquirer Bank Id</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit32 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Retrieval Ref No</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit37 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Response Code</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit39 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Terminal Id</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit41 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Terminal Loc</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit43 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Dest / Issuer Name</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit48 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Issuer Bank Id</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit100 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Issuer Acct</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit102 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Dest Acct</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit103 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Posting Code</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit125 ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;">Dest Bank Id</td>
                                            <td style="border-top: 1px solid #000000;"><?php echo $load->bit127 ?></td>
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