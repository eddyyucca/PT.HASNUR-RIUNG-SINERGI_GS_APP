<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Data Mess Dan Lahan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('seragam/input_seragam') ?>" class="btn btn-danger">Tambah Seragam/Celana</a>
                    <a href="<?= base_url('mess/excel') ?>" class="btn btn-success">Print Excel</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ukuran</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $x->ukuran ?></td>
                                <td><?= $x->stok ?></td>
                                <td>
                                    <a href="<?= base_url('seragam/edit/') . $x->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('seragam/hapus/') . $x->id; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>