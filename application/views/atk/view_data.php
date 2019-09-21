<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Data ATK</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('atk/tambah_barang') ?>" class="btn btn-danger">Tambah Barang</a>
                    <a href="<?= base_url('atk/excel') ?>" target="_blank" class="btn btn-success">Print Excel</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Item</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->item; ?></td>
                                <td><?= $x->qty; ?></td>
                                <td><?= $x->satuan; ?></td>
                                <td>
                                    <a href="<?= base_url('atk/edit/') . $x->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('atk/hapus/') . $x->id; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>