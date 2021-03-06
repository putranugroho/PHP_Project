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
        <li>Select RRN</li>
        <li class="active">Result</li>
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
                                <button type="submit" class="btn btn-primary" style="margin-top: 24px;">Process</button>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url() . 'mahasiswa/tambah_aksi'; ?>">
                        <div class="form-group">
                            <label>
                                Nama Mahasiswa
                            </label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>
                                NIM
                            </label>
                            <input type="text" name="nim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>
                                Tanggal Lahir
                            </label>
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>
                                Jurusan
                            </label>
                            <input type="text" name="jurusan" class="form-control">
                        </div>

                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->