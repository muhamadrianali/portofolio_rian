<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h1 class="m-0 font-weight-bold text-primary"><?php echo $title;?>
<button type="button" class="btn btn-primary float-right " data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
     </div>
<div class="card-body">
    <?php echo $this->session->flashdata('pesan'); ?>
 <div class="table-responsive">
 <table class="table table-bordered " 
 id="dataTable" width="100%" cellspacing="0">
 <thead>
                        <tr>
                            <th>Id Jenis</th>
                            <th>Nama Jenis Kamar</th>
                            <th>Keterangan</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id Jenis</th>
                            <th>Nama Jenis Kamar</th>
                            <th>Keterangan</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
   <tbody>
    <?php 
    $no = 1;
    foreach ($tbl_jenis_kamar as $tjk) :  ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $tjk['nama_jenis_kamar']; ?></td>
            <td><?php echo $tjk['keterangan']; ?></td>
            <td><?php echo $tjk['harga']; ?></td>
            <td><img src="<?php echo base_url() . '/gambar/' . $tjk['gambar']; ?>" width="50"></td>
            <td>
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editmodal<?php echo $tjk['id_jenis'];?>">
 <i class="fa fa-edit"></i>
</button>
                <a href="<?php echo base_url() ?>data_jenis_kamar/hapus_data/<?php echo $tjk['id_jenis']; ?>" class=" btn btn-danger"> <i class="fa fa-trash"></i></a>
            </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>



</div>
    </div>
    </div>

</div>
<!-- Modal untuk tambah Data-->

<!-- Button trigger modal -->


<!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('data_jenis_kamar/proses_tambah_data'); ?>
        <div class="form-group">
            <label>Nama Jenis Kamar</label>
            <input type="text" name="nama_jenis_kamar" class="form-control"
            required="">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="number" name="keterangan" class="form-control"
            required="">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control"
            required="">
        </div>
    <div class="form-group">
           <label>foto</label>
            <input type="file" name="userfile" class="form-control"
            size="20" required="">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>

<!--Akhir Modal-->

<!--Modal Untuk Edit-->
<?php $no = 0;
foreach ($tbl_jenis_kamar as $tjk) : $no++; ?>
<div class="modal fade" id="editmodal<?php echo $tjk['id_jenis_kamar']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM EDIT DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('data_jenis_kamar/proses_edit_data'); ?>

         <input type="hidden" name="id_jenis" value="<?php echo $tjk['id_jenis']; ?>">

        <div class="form-group">
            <label>Nama Jenis Kamar</label>
            <input type="text" name="nama_jenis_kamar" class="form-control" value="<?php echo $tjk['nama_jenis_kamar']; ?>">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="number" name="keterangan" class="form-control" value="<?php echo $tjk['keterangan']; ?>">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $tjk['harga']; ?>">
        </div>
   <div class="form-group">
           <label>Foto</label>
            <input type="file" name="userfile"  size="20">
    </div>
    <img src="<?php echo base_url() . '/gambar/' . $tjk['gambar']; ?>" width="100">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!--Akhir Edit-->

           
         