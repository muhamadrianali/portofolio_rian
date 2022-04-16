 <!-- Masthead-->
 <header class="masthead">
     <div class="container">
         <div class="masthead-subheading">Welcome To Our Hotel</div>
         <div class="masthead-heading text-uppercase">Muhamad Rian Ali</div>
         <?php
                    if ($this->session->userdata('status') == "login") {
                        echo '<a class="btn btn-primary btn-xl text-uppercase" href="' . base_url('index.php/pesan_kamar'). '">Pesan Kamar</a>';
                    } else {
                        
                    }
                    ?>
     </div>
 </header>