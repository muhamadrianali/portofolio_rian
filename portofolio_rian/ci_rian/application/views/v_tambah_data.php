<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <form action="<?= base_url('profile/action_tambah_data') ?>" method="post">
        <table>
            <tr>
                <td>Nama Depan</td>
                <td>:</td>
                <td><input type="text" name="namadepan"></td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td>:</td>
                <td><input type="text" name="namabelakang"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="temlahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgllahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value='L'>Laki-Laki
                    <input type="radio" name="jk" value='P'>Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alm"></td>
            </tr>
            <tr>
                <td>Jenjang Pendidikan</td>
                <td>:</td>
                <td> <select class="form-control" name="jp">
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMK/SMA">SMK/SMA</option>
                        <option value="KULIAH">KULIAH</option>
                    </select>
                    <br>
            <tr>
                <td colspan="3">
                    <button type="submit">Simpan</button>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>