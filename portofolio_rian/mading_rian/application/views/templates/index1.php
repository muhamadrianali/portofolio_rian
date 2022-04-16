<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>
<div class="container-fluid">
	<!-- Page Heading -->
	<center>
		<h2 class="h3 mb-4 text-gray-1000" >Welcome To Madding Digital</h2>

<body class="bg-white ">
        <div class="row justify-content-center">
            
        <?php foreach ($blog1 as $bg):?>
                <div class="card mr-3 mt-2" style="width: 18rem;">
                <?php 
                
                    $gambar = $bg['blog_gambar'];
                    if($gambar):
                ?>
                    <img c lass="card-img-top" src="<?php echo base_url().'/gambar/'.$bg['blog_gambar'];?>"
                        alt="Card image cap">
                    <?php 
                        else:
                    ?>
                    <img c lass="card-img-top"
                        src="https://sabhara.sangkuriang.co.id/wp-content/uploads/2020/02/no-image.png"
                        alt="Card image cap">
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
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i>
  
</button>
                    </div>
			    </div>
            <?php 
            endforeach;
            ?>
            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form lihat data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        masih ada perbaikan!!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/');?>js/sb-admin-2.min.js"></script>

</body>

</html>