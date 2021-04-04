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
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    
	 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew">Kiko <span>Good Garage</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew" class="nav-link">Home</a></li>
            <li class="nav-item <?=($kategori == 'CarWash')?'active':''?>"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/CarWash') ?>" class="nav-link">Cars Wash</a></li>
            <li class="nav-item <?=($kategori == 'Interior')?'active':''?>"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Interior') ?>" class="nav-link">Interior</a></li>
            <li class="nav-item <?=($kategori == 'Eksterior')?'active':''?>"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Eksterior') ?>" class="nav-link">Eksterior</a></li>
            <li class="nav-item <?=($kategori == 'Coating')?'active':''?>"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Coating') ?>" class="nav-link">Coating</a></li>
            <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Produk <?php echo $kategori; ?> <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Produk <?php echo $kategori; ?></h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">

          <?php foreach ($produk as $key) { ?>
      			<div class="col-md-4">
      				<div class="car-wrap rounded ftco-animate">
      					<div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>);">
      					</div>
      					<div class="text">
      						<h2 class="mb-0"><a href="car-single.html"><?php echo $key->namaProduk; ?></a></h2>
      						<div class="d-flex mb-3">
  	    						<span class="cat"><?php echo $key->kategori; ?></span>
  	    						<p class="price ml-auto">Rp. <?php echo number_format($key->hargaPenjualan,0,",","."); ?></p>
      						</div>
      						<p class="d-flex mb-0 d-block">
                      <input type="submit" name="submit" value="Booking" class="btn btn-primary py-2 mr-1" style="width: 30% !important"> 
                      <a href="<?php echo base_url().'C_produkPembeli/lihatDetailProdukNew/'.$key->kdProduk?>" class="btn btn-secondary py-2 ml-1" style="width: 30% !important">Detail</a>
                    </p>
      					</div>
      				</div>
      			</div>
          <?php } ?>

    		</div>

    		<div class="row mt-5">

          <div class="col text-center">
             <?php echo $pag; ?>
            
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
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
  <!-- <script src="<?php echo base_url() ?>js/google-map.js"></script> -->
  <script src="<?php echo base_url() ?>js/main.js"></script>
    
  </body>
</html>