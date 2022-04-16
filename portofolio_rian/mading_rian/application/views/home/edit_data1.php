<div class="container-fluid">
    <h3>HALAMAN EDIT DATA</h3>
    <hr>
    <br>


    <form method='post'action="<?php echo base_url('blog/proses_edit_data/')?>">
    <input type="hidden" name="blog_id" value="<?php echo $tbl_blog['blog_id'];?>">
    <div class="form-group">
					<label>JUDUL</label>
					<input type="text" name="blog_judul" class="form-control"required=""value="<?php echo $tbl_blog['blog_judul'];?>">
				<div class="form-group">
					<label>ISI MADDING</label>
					<input type="text" name="blog_content" class="form-control"required=""value="<?php echo $tbl_blog['blog_content'];?>">
				<div class="form-group">
					<label>PENULIS</label>
					<input type="text" name="blog_penulis" class="form-control"required=""value="<?php echo $tbl_blog['blog_penulis'];?>">
				<div class="form-group">
					<label>GAMBAR</label>
					<input type="file" name="userfile" size="20">
				<div class="form-group">
					<button type="button" class="btn btn-danger" >batal</button>
					<button type="submit" class="btn btn-primary">ubah</button>
					
				</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

