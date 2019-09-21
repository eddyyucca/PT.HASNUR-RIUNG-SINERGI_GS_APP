<!-- Begin Page Content -->
<div class="container">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                <a href="<?= base_url('order') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <div class="container">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <div class="container">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>BARANG</th>
                                                <th>QTY</th>
                                                <th>SATUAN</th>
                                                <th>TANGGAL</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            if ($data2 == false) { ?>
                                                <td colspan='5' align='center'>Data Kosong</td>
                                                <?php
                                                } else {
                                                    foreach ($data2 as $x) { ?>

                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $x->item ?></td>
                                                        <td><?= $x->qty_order ?></td>
                                                        <td><?= $x->satuan ?></td>
                                                        <td><?= $x->tanggal ?></td>
                                                        <td>
                                                            <a href="<?= base_url('super_admin/edit/') . $x->id_order ?>"><i class="btn btn-primary"> Edit</i></a>
                                                            <a href="<?= base_url('super_admin/hapus/') . $x->id_order ?>" onclick="return confirm('Yakin Hapus?')"><i class="btn btn-danger"> Hapus</i></a>
                                                        </td>
                                                    </tr>
                                        </tbody>
                                    <?php } ?>
                                    <td colspan='6' align="center">

                                        <?php $no = 1;
                                            foreach ($data2 as $k) :
                                                if ($no++ > 1) break;
                                                ?>
                                            <a href="<?= base_url('super_admin/diterima/') . $k->id_keranjang ?>"><i class="btn btn-primary"> DI Terima</i></a>

                                            <a href="<?= base_url('super_admin/ditolak/') . $k->id_keranjang ?>"><i class="btn btn-danger">DI Tolak</i></a>

                                        <?php endforeach; ?>
                                    </td>
                                <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>