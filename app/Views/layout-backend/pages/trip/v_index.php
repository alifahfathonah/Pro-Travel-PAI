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
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data <?= $title; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="10px">No</th>
                                    <th>Nama Trip</th>
                                    <th width="85px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($trips as $no => $row) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $row->trip_nama; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/trip/' . $row->trip_id) ?>" class="btn btn-sm btn-success"><span class="fas fa-search"></span></a>
                                            <a href="<?= base_url('admin/trip/update/' . $row->trip_id) ?>" class="btn btn-sm btn-warning"><span class="fas fa-edit"></span></a>
                                            <a href="<?= base_url('admin/trip/delete/' . $row->trip_id); ?>" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->