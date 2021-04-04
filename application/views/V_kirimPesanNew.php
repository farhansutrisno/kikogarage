<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kiko Good Garage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg">
    <link rel="icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url() ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">

  </head>
  <body>
    <!-- <div id="notifications" style="margin-bottom: 100px !important;"><?php echo $this->session->flashdata('pesan2'); ?><br></div>  -->
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew">Kiko <span>Good Garage</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/CarWash') ?>" class="nav-link">Cars Wash</a></li>
            <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Interior') ?>" class="nav-link">Interior</a></li>
            <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Eksterior') ?>" class="nav-link">Eksterior</a></li>
            <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Coating') ?>" class="nav-link">Coating</a></li>
            <?php if ($this->session->userdata('nama') AND $this->session->userdata('pass')) { ?>
                
                <li class="nav-item dropdown" style="cursor: pointer;">
                    <a href="#" class="nav-link"><?=$this->session->userdata('namaLengkap3')?></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url() ?>C_transaksiProduk/allTransaksi" class="dropdown-item">All Reservasi</a></li>
                        <li><a href="<?php echo base_url() ?>C_dataAkun/daftarMember" class="dropdown-item">Member</a></li>
                        <li><a href="<?=base_url('C_dataAkun/logout')?>" class="dropdown-item">Logout</a></li>
                    </ul>
                  </li>

                  <?php }else{ ?>

                  <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#loginmodel">Login</a></li>

                  <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="modal fade" id="loginmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div id="login">
               <div class="modal-header">
                 
                  <div class="col-md-11">
                  <h4 class="modal-title textBlack" align="left">Form Login</h4>
                </div>
                <div class="col-md-1">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
               </div>
               <div class="modal-body">
                  
                  <div class="col-md-12 block-12">
                  <form action="<?php echo base_url().'C_dataAkun/prosesLogin'?>" method="POST" id="regForm">
                    <div class="form-group">
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    </div>

                    <div class="form-group">
                      <!-- <input type="submit" name="submit" value="Kirim" class="btn btn-primary py-3 px-5"> -->
                       <button type="button" class="btn btn-primary btn-lg marleft20" data-dismiss="modal">Close</button>
                      <button type="button" onclick="save();" class="btn btn-info btn-lg marleft20 active">Login</button>
                    </div>
                  </form>
                
                </div>

               </div>
               <div class="modal-footer">
               </div>
             </div>


          </div>

       </div>
    </div>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url() ?>images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p> -->
            <h1 class="mb-3 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Alamat:</span>Jalan Soewoko No. 30 Jetis, Kec. Lamongan, Kab. Lamongan 62211</p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Telepon:</span> <a href="tel://1234567920">085856442607</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:info@yoursite.com">kikogoodgarage@gmail.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <form class="bg-light p-5 contact-form" action="<?php echo base_url().'webbackend/C_pesanMasuk/prosesKirimPesan' ?>" method="POST" name="kirimPesan">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="No Telepon" name="noTelepon" required>
              </div>
             <!--  <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div> -->
              <div class="form-group">
                <textarea cols="30" rows="7" name="isiPesan" class="form-control" placeholder="Isi Pesan" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Kirim" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white"></div>
        	</div>
        </div>
      </div>
    </section>
	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container" style="margin-top: -75px !important;margin-bottom: -85px !important;">
        <div class="row mb-5">
          

          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informasi</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatAboutUsFo" class="py-2 d-block">About</a></li>
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatDataArtikelFo" class="py-2 d-block">Artikel</a></li>
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatDataGaleriFo"" class="py-2 d-block">Galeri</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo base_url() ?>webbackend/C_pesanMasuk/kirimPesanNew" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Kiko Good Garage</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Jalan Soewoko No. 30 Jetis, Kec. Lamongan, Kab. Lamongan 62211</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">085856442607</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">kikogoodgarage@gmail.com</span></a></li>
                </ul>

              </div>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5" style="margin-top: -10px !important;">
                  <li class="ftco-animate"><a href="https://twitter.com/login" target="_blank" title="Twitter"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.instagram.com/accounts/login/" target="_blank" title="Instagram"><span class="icon-instagram"></span></a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: -55px !important;">
          <div class="col-md-12 text-center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by Farhan Sutrisno
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url() ?>js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url() ?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url() ?>js/aos.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url() ?>js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url() ?>js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url() ?>js/google-map.js"></script>
  <script src="<?php echo base_url() ?>js/main.js"></script>
    
  </body>
</html>