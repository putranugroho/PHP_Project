<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Bank Member
        <small>/ Prefix</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Prefix</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title" style="margin-bottom: 10px;">RRN Transaction Detail</h3>
                    <form action="<?php echo base_url() . 'prefix/search_bank'; ?>" method="post">
                        <div class="input-group input-group-lg">
                            <div class="input-group-btn">
                                <button id="prefix-dropdown" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action
                                    <span class="fa fa-caret-down"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" onclick="prefixDropdown('Bank Id')">Bank Id</a></li>
                                    <li><a href="#" onclick="prefixDropdown('Prefix/ BIN')">Prefix / BIN</a></li>
                                    <li><a href="#" onclick="prefixDropdown('Bank Name')">Bank Name</a></li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <input id="prefix-input" type="text" class="form-control" disabled placeholder="Please Choose An Action">
                            <span class="input-group-btn">
                                <button id="prefix-button" type="submit" class="btn btn-info btn-flat" disabled>Go!</button>
                            </span>
                        </div>
                        <!-- /input-group -->
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