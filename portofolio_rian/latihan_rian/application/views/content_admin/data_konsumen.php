<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        Tabel Konsumen
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Tabel Konsumen
                <a href="<?= base_url('index.php/data_konsumen/tambah_data') ?>">
                    <button class="btn btn-info">Tambah data</button>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Konsumen</th>
                            <th>Nama Depan</th>
                            <th>Nama Tengah</th>
                            <th>Nama Belakang</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th>Negara</th>
                            <th>No Identitas</th>
                            <th>No Telp</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <th>Id Konsumen</th>
                        <th>Nama Depan</th>
                        <th>Nama Tengah</th>
                        <th>Nama Belakang</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Negara</th>
                        <th>No Identitas</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($tbl_konsumen as $tko) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tko["nama_depan"] ?></td>
                                <td><?php echo $tko["nama_tengah"] ?></td>
                                <td><?php echo $tko["nama_belakang"] ?></td>
                                <td><?php echo $tko["alamat"] ?></td>
                                <td><?php echo $tko["kota"] ?></td>
                                <td><?php echo $tko["provinsi"] ?></td>
                                <td><?php echo $tko["negara"] ?></td>
                                <td><?php echo $tko["no_identitas"] ?></td>
                                <td><?php echo $tko["no_telp"] ?></td>
                                <td><?php echo $tko["email"] ?></td>
                                <td>
                                    <a href="<?= base_url('index.php/data_konsumen/update_data/') ?><?php echo $tko['id_konsumen'] ?>" class="btn btn-info btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="<?= base_url('index.php/data_konsumen/hapus_data/') ?><?php echo $tko['id_konsumen'] ?>" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>