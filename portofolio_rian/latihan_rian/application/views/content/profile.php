<section class="page-section bg-ligh" id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-subheading text-uppercase">Profile</h2>
                <h3 class="section-subheading text-muted">Selamat Datang Di Hotel Rian</h3>

                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">Email</td>
                            <td>:</td>
                            <td class="text-start"><?= $user['email'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Nama Lengkap</td>
                            <td>:</td>
                            <td class="text-start"><?= $user['nama_lengkap'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">No Hp</td>
                            <td>:</td>
                            <td class="text-start"><?= $user['no_hp'] ?></td>
                        </tr>
                    </tbody>
                </table>
                klik <a href="<?= base_url('index.php/profile/update_profile') ?>">Disini</a>untuk update profile anda <br>
                klik <a href="<?= base_url('index.php/profile/ganti_password') ?>">Disini</a>untuk mengganti password anda <br>


            </div>

        </div>
    </div>
</section>