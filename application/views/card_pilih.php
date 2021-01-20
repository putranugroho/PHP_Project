<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Transaction
        <small>by Card</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Transaction</li>
        <li>Card</li>
        <li class="active">Select RRN</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title" style="margin-bottom: 10px;">Card Transaction Detail</h3>
                    <form action="<?php echo base_url() . 'card/search_card'; ?>" method="post">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Transaction Date</label>
                                    <input type="date" name="trans_date" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" name="card" class="form-control" value="">
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
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <table id="Table1" class="table table-bordered table-hover dataTable" style="border-color: #000000;">
                                <thead>
                                    <tr>
                                        <th>Transaction Type</th>
                                        <th>RRN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($payload as $load) : ?>
                                        <tr>
                                            <td style="border-top: 1px solid #000000;"><a href="<?= base_url('card/search_card_rrn/' . $load->bit37) ?>"><?php echo $load->mti ?></a></td>
                                            <td style="border-top: 1px solid #000000;"><a href="<?= base_url('card/search_card_rrn/' . $load->bit37) ?>"><?php echo $load->bit37 ?></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-3"></div>
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