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

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/bootstrap-datepicker.min.css">
    <script src="<?php echo base_url() ?>dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url() ?>dist/locales/bootstrap-datepicker.id.min.js"></script>
  
    <link rel="stylesheet" href="<?php echo base_url() ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

     <style type="text/css">
      /*a:link, a:visited {
        color: white;
      }

      a:hover, a:active {
        color: white;
      }*/
    </style>

  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      
        <div class="col-md-12">
          <?php echo $this->session->flashdata('test1'); ?>

           <div class="container">
            <div class="row">
             <a class="navbar-brand" href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew"><span>Kiko</span> <span style="color: #fdee00">Good</span> Garage</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="<?php echo base_url()?>C_produkPembeli/lihatProdukNew" class="nav-link">Beranda</a></li>
              <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/CarWash') ?>" class="nav-link">Cars Wash</a></li>
              <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Interior') ?>" class="nav-link">Interior</a></li>
              <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Eksterior') ?>" class="nav-link">Eksterior</a></li>
              <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Coating') ?>" class="nav-link">Coating</a></li>

              <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/datareservasi') ?>" class="nav-link">Data Reservasi</a></li>
              
              <?php if ($this->session->userdata('nama') AND $this->session->userdata('pass')) { ?>
                
                <li class="nav-item dropdown" style="cursor: pointer;">
                    <ul class="nav">
                        <li class="dropdown" style="cursor: pointer;">
                          <p class="nav-link" style="padding-top: 14px !important;"><?=$this->session->userdata('namaLengkap3')?></p>

                          <ul class="dropdown-menu">
                              <li><a href="<?php echo base_url() ?>C_transaksiProduk/allTransaksiNew" class="dropdown-item">All Reservasi</a></li>
                              <li><a href="<?php echo base_url() ?>C_dataAkun/lihatmemberNew" class="dropdown-item">Member</a></li>
                              <li><a href="<?=base_url('C_dataAkun/logout')?>" class="dropdown-item">Logout</a></li>
                          </ul>
                        </li>
                    </ul>
                  </li>

                  <?php }else{ ?>

                  <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#loginmodel">Login</a></li>

                  <?php } ?>
            </ul>

          </div>
            </div>
          
        </div>
        </div>
     
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url() ?>images/car-11.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Data Reservasi <i class="ion-ios-arrow-forward"></i></a></span> <span>Detail Data Reservasi <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Detail Data Reservasi</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" style="margin-bottom: -180px !important;">

      <div class="container" style="margin-top: -50px !important;">
        <h3 class="mb-3 bread"><b>Produk Terpilih</b></h3>
        <hr/>
        <div class="row">
          <?php foreach ($produk as $produk1) { ?>

          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url() ?>gambar_proyek/<?php echo $produk1->gambar ?>);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#" style="cursor: default !important;"><?php echo $produk1->namaProduk ?></a></h2>
                <div class="d-flex mb-3">
                  <span class="cat" style="color: #000000 !important;"><?php echo $produk1->kategori ?></span>
                  <p class="price ml-auto" style="color: red !important;">Rp. <?php echo  number_format($produk1->hargaPenjualan, 0,",","."); ?></p>
                </div>
                <!-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-danger py-2 mr-1" style="color: #ffffff !important;">Delete</a></p> -->
              </div>
            </div>
          </div>

           <?php } ?>    
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-7 ftco-animate">
            <h3><b>Data Reservasi</b> &nbsp;&nbsp;&nbsp;<a style="color: #FFFFFF !important;" href="<?php echo base_url().'C_transaksiProduk/exportpdf/'.$row[0]->kodeUnik.'/'.$row[0]->KdTukang?>" target="_blank" class="btn btn-info">Unduh PDF</a></h3> 
            <hr/>
            <p style="color: #000000 !important;">No Antrian : <?php echo $row[0]->noAntrian ?></p>
            <p style="color: #000000 !important;">Tanggal Reservasi : <?php echo date_format (new DateTime($row[0]->tglPembayaran), 'H:i') ?> - <?php echo date_format (new DateTime($row[0]->tglTransaksi), 'd M Y') ?></p>
            <p style="color: #000000 !important;">Nomor Plat Kendaraan : <?php echo $row[0]->noPlat ?></p>
            <p style="color: #000000 !important;">Jenis Booking : <?php echo $row[0]->jenisBooking ?></p>

            <?php if ($row[0]->statusPembayaran == 'Selesai') { ?>
                <p style="color: #000000 !important;">Keterangan Reservasi : <?php echo $row[0]->catatan ?></p>
            <?php }?>
            
            <?php if (!empty($row[0]->nama_lengkap)) { ?>

            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5" style="margin-left: -25px !important;">
                <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $row[0]->foto ?>" style="width: 150px !important;" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3><b>Pegawai Kiko Good Garage</b></h3>
                <hr/>
                <p style="color: #000000 !important;">Nama Lengkap : <?php echo $row[0]->nama_lengkap ?></p>
                <p style="color: #000000 !important;">Jenis Kelamin : <?php echo $row[0]->jenisKelamin; ?></p>
                <p style="color: #000000 !important;">No Telepon : <?php echo $row[0]->noTelepon ?></p>
              </div>
            </div>
            <?php } ?>

          </div> <!-- .col-md-8 -->
          <div class="col-md-5 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">

              <h3><b>Data Pembayaran</b></h3>
              <hr/>
              <div class="block-21 mb-4 d-flex">
                <!-- <a class="blog-img mr-4" style="background-image: url(<?php echo base_url() ?>images/image_1.jpg);"></a> -->
                <div class="text">
                  <h3 class="heading"><a href="#" style="cursor: default !important;">

                    Total Bayar : Rp. <?php
                     $totalBayar2 = $totalBelanja2;
                      echo  number_format($totalBayar2, 0,",",".");  ?>
                        
                      </a></h3>
                  <div class="meta">
                   <h3 class="heading"><a href="#" style="cursor: default !important;">Potongan : </a></h3>
                  </div>
                  <hr/>
                  <h3 class="heading"><a href="#" style="cursor: default !important;">Total Bayar : Rp. <?php
                     // $totalBayar2 = $totalBelanja2;
                      echo  number_format($totalBayar2, 0,",",".");  ?></a></h3>
                </div>
              </div>
              
            </div>

            <div class="sidebar-box ftco-animate" style="margin-top: -50px !important;">
              <h3><b>Alamat Konsumen</b></h3>
              <hr/>
              <p style="color: #000000 !important;"><?php echo $profil[0]->alamatLengkap ?></p>
              <!-- <?php if ($row[0]->statusPembayaran == 'Waiting List') { ?>
                   
                         <p class="d-flex mb-0 d-block"><a href="<?php echo base_url().'C_produkPembeli/lihatDetailProdukNew/'.$row[0]->kodeUnik.'/'.$row[0]->KdTukang?>" class="btn btn-info py-2 mr-1" style="color: #ffffff !important;">Ubah Alamat</a></p>
                <?php }else{ ?>
                  
                <?php } ?> -->
            </div>
           
            <div class="sidebar-box ftco-animate" style="margin-top: -30px !important;">
              <div class="categories">
                <h3><b>Status Reservasi</b></h3>
                <hr/>

                <?php foreach ($history as $row) { 

                  $dateUpdate = date_format (new DateTime($row->createDate), 'd M Y H:i:s');

                  ?>
                  <div class="row">

                      <div class="col-md-6">
                        <p style="color: #000000 !important;"><?php echo $row->status ?></p>
                      </div>
                      <div class="col-md-6">
                        <p style="color: #000000 !important;"><?php echo $dateUpdate ?></p>
                      </div>
                  </div>

                <?php } ?>
              </div>
            </div>
            
          </div>

        </div>
      </div>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container" style="margin-top: -75px !important;margin-bottom: -85px !important;">
        <div class="row mb-5">
          

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><span style="color: #01d28e">Kiko</span> <span style="color: #fdee00">Good</span> Garage</h2>
              <ul class="list-unstyled">
                <li><a class="py-2 d-block">Premium Carwash & Auto Detailing</a></li>
                
              </ul>
            </div>
          </div>

          <div class="col-md">
             <div class="ftco-footer-widget mb-4 ml-md-5">
              <!-- <h2 class="ftco-heading-2">Customer Support</h2> -->
              <ul class="list-unstyled">
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatAboutUsFoNew" class="py-2 d-block">Tentang Kami</a></li>
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatDataGaleriFoNew"" class="py-2 d-block">Galeri</a></li>
                <li><a href="<?php echo base_url() ?>webbackend/C_pesanMasuk/kirimPesanNew" class="py-2 d-block">Hubungi Kami</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ikuti Kami</h2>
              
              <ul class="list-unstyled">
                <li class="ftco-animate"><a href="https://www.instagram.com/accounts/login/" target="_blank" title="Instagram"><span class="icon-instagram"></span> kikogarage.co</a></li>
                <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCvRorMTjPdc74qqyAe7FSkA" target="_blank" title="Youtube"><span class="icon-youtube"></span> Kiko Good Garage</a></li>
                  
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


  <!-- <script src="<?php echo base_url() ?>js/jquery.min.js"></script> -->
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
  <!-- <script src="<?php echo base_url() ?>js/bootstrap-datepicker.js"></script> -->
  <script src="<?php echo base_url() ?>js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url() ?>js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
  <!-- <script src="<?php echo base_url() ?>js/google-map.js"></script> -->
  <script src="<?php echo base_url() ?>js/main.js"></script>
    
  </body>
</html>