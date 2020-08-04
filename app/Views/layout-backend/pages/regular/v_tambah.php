<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/rent"><?= $title; ?></a></li>
                        <li class="breadcrumb-item active">Tambah Data <?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tamba Data <?= $title; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('admin/rent/store'); ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namaMobil">Nama Mobil</label>
                                        <input type="text" class="form-control" id="namaMobil" name="namaMobil" placeholder="Nama Mobil" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="maxJam">Max Jam Per Hari</label>
                                        <input type="number" min="1" max="24" class="form-control" id="maxJam" name="maxJam" placeholder="Max Jam Per Hari" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Transmisi</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="transmisi" value="Manual" checked>
                                            <label class="form-check-label">Manual</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Matic" name="transmisi">
                                            <label class="form-check-label">Matic</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Driver</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="driver" value="Ya" checked>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Tidak" name="driver">
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Smoking</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="smoking" value="Ya">
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Tidak" name="smoking" checked>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" min="1" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="maxPenumpang">Max Penumpang</label>
                                        <input type="number" min="1" max="50" class="form-control" id="maxPenumpang" name="maxPenumpang" placeholder="Max Penumpang" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Fuel</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fuel" value="Ya" checked>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Tidak" name="fuel">
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Full AC</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ac" value="Ya" checked>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Tidak" name="ac">
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="foto">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                        <?php echo form_close(); ?>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->