<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<center>
		<h2 class="h3 mb-4 text-gray-1000" >Welcome To Madding Digital</h2>
	
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
	<i class="fa fa-plus"></i>TAMBAH DATA MADDING
		</button>
    <!-- Button trigger modal -->


<!-- Modal -->
  


    
  </center>
  <br>
  <div class="row">
	  <?php foreach ($blog as $bg):?>
    <div class="card mr-3" style="width: 18rem;" >
      <?php 
        $gambar = $bg['blog_gambar'];
        if($gambar):
      ?>
      <img c lass="card-img-top" src="<?php echo base_url().'/gambar/'.$bg['blog_gambar'];?>" alt="Card image cap">
      <?php 
        else:
      ?>
          <img c lass="card-img-top" src="https://sabhara.sangkuriang.co.id/wp-content/uploads/2020/02/no-image.png" alt="Card image cap">
      <?php 
        endif;
      ?>
      <div class="card-body">
        <h5 class="card-title"><?= $bg['blog_judul'];?></h5>
        <p class="card-text">
        <?php 
          $num_char = 500;
          $text = $bg['blog_content'];
          echo substr($text, 0, $num_char) . '...';
        ?></p>
        <a href="#" class="btn btn-info"><i class="fa fa-eye"></i></a>
		<a href="<?= base_url('blog/edit_data/'.$bg['blog_id'] )?>" class="btn btn-primary"><i class="fa fa-edit"></i>
        <a href="<?= base_url('blog/delete/'.$bg['blog_id'] )?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
      </div>
    </div>
    <?php 
    endforeach;
    ?>
  </div>
<!-- End of Main Content -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart("blog/proses_tambah_data/");?>
				<div class="form-group">
					<label>JUDUL</label>
					<input type="text" name="blog_judul" class="form-control"required="">
				<div class="form-group">
					<label>ISI MADDING</label>
					<input type="text" name="blog_content" class="form-control"required="">
				<div class="form-group">
					<label>PENULIS</label>
					<input type="text" name="blog_penulis" class="form-control"required="">
				<div class="form-group">
					<label>GAMBAR</label>
					<input type="file" name="userfile" size="20"required="">
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-info">SIMPAN</button>
					<?php echo form_close()?>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!--akhir modal-->
	<!--modal untuk edit-->
	

	<!--akhir edit-->
