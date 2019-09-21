<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Data Sarana</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('sarana/tambah_sarana') ?>" class="btn btn-danger">Tambah Sarana</a>
                    <a href="<?= base_url('sarana/excel') ?>" class="btn btn-success">Print Excel</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mitra</th>
                            <th>Departemen</th>
                            <th>No Polisi</th>
                            <th>Status</th>
                            <th>No Lambung</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        //hitung selisih tanggal
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= substr($x->mitra, 0, 10);
                                        echo "..."  ?></td>
                                <td><?= $x->dept  ?></td>
                                <td><?= $x->no_polisi; ?></td>
                                <td><?php   //hitung selisih tanggal
                                        $sekarang = date('Y-m-d');
                                        $datesekarang = new DateTime($sekarang);
                                        $akhir = new DateTime($x->akhir_kontrak);
                                        $date = date_diff($datesekarang, $akhir);
                                        echo "$date->days ";

                                        $date_color = $date->days;

                                        if ($date_color < 60) { ?>
                                        <button class="btn btn-danger"></button>
                                    <?php } elseif ($date_color > 61) { ?>
                                        <button class="btn btn-primary"></button>

                                    <?php } ?>
                                </td>
                                <td><?= $x->no_lambung; ?></td>
                                <td>
                                    <a href="<?= base_url('sarana/view/') . $x->id; ?>" class="btn btn-secondary">View</a>
                                    <a href="<?= base_url('sarana/edit/') . $x->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('sarana/hapus/') . $x->id; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>