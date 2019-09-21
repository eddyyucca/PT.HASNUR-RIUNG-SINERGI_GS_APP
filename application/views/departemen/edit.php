<div class="container-fluid">
    <div class="card-body">
        <div class="card shadow mb-4">
            <!-- header -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold ">Edit Departemen</h6>
            </div>
            <!-- mulai -->
            <div class="card-body">
                <div class="row">
                    <div class="container col-7">
                        <?= validation_errors() ?>
                        <?php
                        if ($data == false) {
                            echo "<h1>Data Kosong</h1>";
                        } else { ?>
                            <form action="<?= base_url('departemen/prosesEdit/') . $data->id ?>" method="POST">
                                <div class="form-group">
                                    <label for="inputItem">Nama Departemen</label>
                                    <input type="text" class="form-control" id="nama_dep" name="nama_dep" value="<?= $data->nama_dep; ?>" placeholder="Departemen Baru">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
                        <?php  } ?>
                        <!-- akhir -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>