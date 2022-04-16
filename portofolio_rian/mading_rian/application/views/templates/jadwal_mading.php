<!-- Begin Page Content -->
<div class="container-fluid">
 
 <!-- Page Heading -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">JADWAL MADING </h6>
      <a href="<?= base_url('jadwal_mading/tambah_data'); ?>"class="btn btn-primary btn-sm float-right">Tambah Data</a>
      
    </div>
 <div class="card-body">
          <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <td>NO</td>
            <td>HARI</td>
            <td>CONTENT</td>
            <td>ACTION</td>
        </tr>
</thead>
<tbody>
<?php 
    $no=1;
foreach($tbl_jadwal as $jdw):?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $jdw['hari'];?></td>
        <td><?php echo $jdw['content'];?></td>
        <td>
        <a href="<?= base_url('jadwal_mading/edit_data/'.$jdw['no'] )?>" class="btn btn-primary"><i class="fa fa-edit"></i>
        <a href="<?= base_url('jadwal_mading/delete/'.$jdw['no'] )?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
</td>
    </tr>   
    <?php endforeach;?>
</tbody>
</table>
</div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
