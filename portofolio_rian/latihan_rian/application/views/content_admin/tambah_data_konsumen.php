<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Konsumen</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_konsumen/proses_tambah_data') ?>" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Nama Depan</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_depan" id="nama_depan"></td>
                                </tr>
                                <tr>
                                    <td>Nama Tengah</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_tengah" id="nama_tengah"></td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Belakang</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_belakang" id="nama_belakang"></td>
                                </tr>

                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="alamat" id="alamat"></td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="kota" id="kota"></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="provinsi" id="provisi"></td>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="negara" id="negara"></td>
                                <tr>
                                    <td>No Identitas</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="no_identitas" id="no_identitas"></td>
                                </tr>
                                <tr>
                                    <td>No Telp</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="no_telp" id="no_telp"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="email" id="email"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>