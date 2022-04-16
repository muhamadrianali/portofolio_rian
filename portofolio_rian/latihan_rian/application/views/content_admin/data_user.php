<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        Tabel User
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Tabel User
                <a href="<?= base_url('index.php/data_kamar/tambah_data') ?>">
                    <button class="btn btn-info">Tambah data</button>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id User</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Nama Lengkap</th>
                            <th>No Hp</th>
                            <th>Hak Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id User</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Nama Lengkap</th>
                            <th>No Hp</th>
                            <th>Hak Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($tbl_user as $tu) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tu["email"] ?></td>
                                <td><?php echo $tu["password"] ?></td>
                                <td><?php echo $tu["nama_lengkap"] ?></td>
                                <td><?php echo $tu["no_hp"] ?></td>
                                <td><?php echo $tu["hak_akses"] ?></td>
                                <td>
                                    <a href="<?= base_url('index.php/data_user/update_data/') ?><?php echo $tu['id_user'] ?>" class="btn btn-info btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="<?= base_url('index.php/data_user/hapus_data/') ?><?php echo $tu['id_user'] ?>" class="btn btn-danger btn-circle">
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