<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Data Mess Dan Lahan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('mess/tambah_mess') ?>" class="btn btn-danger">Tambah Mess Dan Lahan</a>
                    <a href="<?= base_url('mess/excel') ?>" class="btn btn-success">Print Excel</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mess Dan Lahan</th>
                            <th>Nama Perum</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $x->mess_lahan ?></td>
                                <td><?= $x->nama_perum ?></td>
                                <td><?php   //hitung selisih tanggal
                                        $sekarang = date('Y-m-d');
                                        $datesekarang = new DateTime($sekarang);
                                        $akhir = new DateTime($x->akhir_kontrak);
                                        $date = $datesekarang->diff($akhir);
                                        echo "$date->days ";

                                        $date_color = $date->days;

                                        if ($date_color < 60) { ?>
                                        <button class="btn btn-danger"></button>
                                    <?php } elseif ($date_color > 30) { ?>
                                        <button class="btn btn-primary"></button>

                                    <?php } ?>

                                </td>
                                <td>
                                    <a href="<?= base_url('mess/view/') . $x->id; ?>" class="btn btn-secondary">View</a>
                                    <a href="<?= base_url('mess/edit/') . $x->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('mess/hapus/') . $x->id; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>