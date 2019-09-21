<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Input Data Catering</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('catering/prosesedit/') . $data->id ?>" method="POST">
                        <table class="table">
                            <tr>
                                <td>Nama Mitra</td>
                                <td><input type="text" name="nama_mitra" value="<?= $data->mitra; ?>" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Awal Kontrak</td>
                                <td><input type="date" name="awal_kontrak" class="form-control" value="<?= $data->kontrak_awal; ?>"></td>
                            </tr>
                            <tr>
                                <td>Akhir Kontrak</td>
                                <td><input type="date" name="akhir_kontrak" class="form-control" value="<?= $data->akhir_kontrak ?>"></td>
                            </tr>


                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" class="form-control" value="<?= $data->alamat ?>"></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><input type="text" name="ket" class="form-control" value="<?= $data->ket ?>"></td>
                            </tr>

                        </table>
                        <hr>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>