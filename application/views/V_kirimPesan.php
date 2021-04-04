<!doctype html>
<html class="no-js" lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>Kiko Good Garage</title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg">
<link rel="icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/main.css">
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/responsive.css">

<!-- Fonts Online -->
<!-- <link href="https://fonts.googleapis.com/css?family=Lato:100i,300,400,700,900" rel="stylesheet"> -->

<!-- JavaScripts -->
<script src="<?php echo base_url() ?>asset/js/vendors/modernizr.js"></script>

</head>
<body>

<!-- Page Wrapper -->
<div id="wrap"> 
  <div id="notifications"><?php echo $this->session->flashdata('pesan2'); ?></div> 
  <div id="notifications"><?php echo $this->session->flashdata('pesan3'); ?></div> 
  <!-- Top bar -->
  <?php if ($this->session->userdata('nama') AND $this->session->userdata('pass')) { ?>

  <div class="top-bar">
    <div class="container">
      <p>Selamat Datang di Kiko Good Garage</p>
    </div>
  </div>
  
  <?php }else{ ?>

    <div class="top-bar">
      <div class="container">
        <p>Selamat Datang di Kiko Good Garage</p>
        <div class="right-sec">
          <ul>
            <li><a href="<?php echo base_url() ?>C_dataAkun/login">Login </a></li>
            <li><a href="<?php echo base_url() ?>C_dataAkun/createAkun">Registrasi</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php } ?>
  <!-- Header -->
  <header>
    <?php if ($this->session->userdata('nama') AND $this->session->userdata('pass')) { ?>

    <div class="container">
      <div class="logo" style="margin-top: -40px !important; margin-bottom: -40px !important;"> 
        <a href="<?php echo base_url() ?>C_produkPembeli/lihatProduk"><img src="<?php echo base_url() ?>asset/images/logokiko.jpeg" height="120px" width="120px"></a> 
      </div>
      <div class="search-cate">
        <form action="<?php echo base_url().'C_produkPembeli/pencarianLogin' ?>"  method="POST">
          <input type="text" name="data_produk" placeholder="Ketik untuk mencari">
          <button class="submit" type="submit" name="submit"><i class="icon-magnifier"></i></button>
        </form>
      </div>
      <div class="nav navbar-right float-right list-inline" style="margin-top: -15px !important; margin-bottom: -20px !important;">
         <!--  <ul class="nav navbar-left">
            <li class="dropdown"> 
               <a href="<?php echo base_url() ?>C_produkPembeli/lihatKeranjang"> <img src="<?php echo base_url() ?>asset/images/keranjang.png"  height="50px" width="60px"></a>
            </li>
          </ul>
          <ul class="nav navbar-right ">
              <li class="dropdown">
                <img src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('fotoProfil') ?>" height="50px" width="60px">
                <br> 
                <strong><?=$this->session->userdata('namaLengkap3')?></strong><span class="fa fa-sort-down white_bg"></span>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() ?>C_dataAkun/lihatDataProfil" class="dropdown-item"> Profil</a></li>
                    <li><a href="<?=base_url('C_dataAkun/logout')?>" class="dropdown-item"> Logout</a></li>
                </ul>
              </li>
          </ul>
          <ul class="nav navbar-right ">
              <li class="dropdown">
                  <a href="<?php echo base_url() ?>C_transaksiProduk/allTransaksi"> <img src="<?php echo base_url() ?>asset/images/transaksi.png"  height="50px" width="60px"></a>
              </li>
          </ul> -->

          <div class="row">
            <div class="col-md-12">
              <div class="col-md-3">
                <a href="<?php echo base_url() ?>C_produkPembeli/lihatKeranjang"> <img src="<?php echo base_url() ?>asset/images/keranjang.png" title="Cart" height="50px" width="60px"></a>
              </div>

              <div class="col-md-3" style="margin-top: 3px !important;">
                <a href="<?php echo base_url() ?>C_transaksiProduk/allTransaksi"> <img src="<?php echo base_url() ?>asset/images/transaksi.png" title="Data Transaksi" height="45px" width="55px"></a>
              </div>

              <div class="col-md-6">
                <ul class="nav">
                    <li class="dropdown" style="cursor: pointer;">
                      <img src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('fotoProfil') ?>" height="50px" width="60px">
                      <br> 
                      <strong><?=$this->session->userdata('namaLengkap3')?></strong>&nbsp;<span class="fa fa-sort-down white_bg"></span>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url() ?>C_dataAkun/lihatDataProfil" class="dropdown-item">Profil</a></li>
                          <li><a href="<?php echo base_url() ?>C_dataAkun/daftarMember" class="dropdown-item">Member</a></li>
                          <li><a href="<?=base_url('C_dataAkun/logout')?>" class="dropdown-item">Logout</a></li>
                      </ul>
                    </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>

    <?php }else{ ?>

    <div class="container">
      <div class="logo" style="margin-top: -40px !important; margin-bottom: -40px !important;"> 
        <a href="<?php echo base_url() ?>C_produkPembeli/lihatProduk"><img src="<?php echo base_url() ?>asset/images/logokiko.jpeg" height="120px" width="120px"></a> 
      </div>
      <div class="search-cate" style="margin-top: 0px !important; margin-bottom: 0px !important;">
        <form action="<?php echo base_url().'C_produkPembeli/pencarianLogin' ?>"  method="POST">
          <input type="text" name="data_produk" placeholder="Ketik untuk mencari">
          <button class="submit" type="submit" name="submit"><i class="icon-magnifier"></i></button>
        </form>
      </div>
      <div class="nav navbar-right float-right list-inline" style="margin-top: -10px !important; margin-bottom: -20px !important;">
          <!-- <ul class="nav navbar-left">
            <li class="dropdown"> 
               <a href="<?php echo base_url() ?>C_dataAkun/login"> <img src="<?php echo base_url() ?>asset/images/keranjang.png"  height="60px" width="60px"></a>
            </li>
          </ul> -->
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-3">
                <a href="<?php echo base_url() ?>C_dataAkun/login"> <img src="<?php echo base_url() ?>asset/images/keranjang.png" title="Cart" height="60px" width="60px"></a>
              </div>

            </div>
          </div>
      </div>
    </div>

    <?php } ?>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container"> 
        
        <!-- Categories -->
        <div class="cate-lst"> <a  data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i> Kategori </a>
          <div class="cate-bar-in">
            <div id="cater" class="collapse">
              <ul>
                  <li><a href="<?php $kategori = "Cars Wash"; echo base_url('C_produkPembeli/makanan2/'.$kategori) ?>">Cars Wash</a></li>
                <li><a href="<?php $kategori = "Coating"; echo base_url('C_produkPembeli/makanan2/'.$kategori) ?>">Coating</a></li>
                </ul>
            </div>
          </div>
        </div>
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li class="dropdown megamenu"> <a href="<?php echo base_url() ?>C_produkPembeli/lihatProduk">Layanan Jasa</a></li>
            <li class="dropdown"> <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">Kiko Good Garage</a>
              <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatAboutUsFo">About Us</a></li>
                <li><a href="<?php echo base_url() ?>webbackend/C_pesanMasuk/kirimPesan">Contact Us</a></li>
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatDataArtikelFo">Artikel</a></li>
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatDataGaleriFo">Galeri</a></li>
              </ul>
            </li>
          </ul>
        </div>
        
        <!-- NAV RIGHT -->
        <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i>085856442607 </span> </div>
      </div>
    </nav>
  </header>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Linking -->
    <!-- <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>C_dataAkun/index">Beranda</a></li>
          <li class="active">Kontak</li>
        </ol>
      </div>
    </div> -->
    
    <!-- Blog -->
    <section class="contact-sec padding-top-40 padding-bottom-80">
      <div class="container"> 
        
        <!-- MAP -->
        <!-- <section class="map-block margin-bottom-40">
          <div class="map-wrapper" id="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-zoom="13" data-style="1"></div>
          <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-string="Smart Tech"></a> </div>
        </section> -->
        
        <!-- Conatct -->
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <!-- <?php echo form_open('webbackend/C_pesanMasuk/prosesKirimPesan'); ?> -->
                <form action="<?php echo base_url().'webbackend/C_pesanMasuk/prosesKirimPesan' ?>" role="form" id="contact_form" class="contact-form" method="POST" name="kirimPesan">
              <div class="row">
                
                    <div class="col-md-8"> 
                      
                      <!-- Payment information -->
                      <div class="heading">
                        <h2>Kirim Pesan</h2>
                      </div>
                      <ul class="row">
                        <li class="col-sm-7">
                          <label>Nama Lengkap
                            <input type="text" class="form-control" name="namaLengkap" value="<?php echo set_value('namaLengkap') ?>" required>
                            <?php echo form_error('namaLengkap'); ?>
                          </label>
                        </li>
                        <li class="col-sm-7">
                          <label>No Telepon
                            <input type="text" class="form-control" name="noTelepon" value="<?php echo set_value('noTelepon') ?>" required>
                            <?php echo form_error('noTelepon'); ?>
                          </label>
                        </li>
                       <!--  <li class="col-sm-7">
                          <label>Judul Pesan
                            <input type="text" class="form-control" name="judulPesan" value="<?php echo set_value('judulPesan') ?>" required>
                            <?php echo form_error('judulPesan'); ?>
                          </label>
                        </li> -->
                        <li class="col-sm-12">
                          <label>Isi Pesan
                            <textarea class="form-control" name="isiPesan"  required><?php echo set_value('isiPesan') ?></textarea>
                            <?php echo form_error('isiPesan'); ?>
                          </label>
                        </li>
                       
                        <!-- <div class="col-lg-4" align="center">
                            <?php echo anchor('C_produkPembeli/lihatProduk','K E M B A L I',array('class'=>'form-control btn btn-round btn-info'));?>
                        </div> -->
                        <div class="col-lg-4 form-group" align="center">
                            <input type="submit" name="submit" class="form-control btn-round" value="Submit"/>
                        </div> 
                        
                      </ul>
                    </div>

                <!-- Conatct Infomation -->
                <div class="col-md-4">
                  <div class="contact-info">
                    <h5>Kiko Good Garage</h5>
                    <!-- <p>"Menjadi Koperasi Besar di Jawa Barat"</p> -->
                    <hr>
                    <h6>Alamat:</h6>
                    <p>Jalan Soewoko No. 30 Jetis, Kec. Lamongan, Kab. Lamongan 62211</p>
                    <h6>Kontak Person:</h6>
                    <p>085856442607</p>
                    <h6>Email:</h6>
                    <p>kikogarage.co@gmail.com</p>
                  </div>
                </div>
              </div>
              </form>
                <!-- <?php echo form_close(); ?> -->
          </div>
        </div>
      </div>
    </section>
    
    <section class="newslatter">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3> -->
          </div>
          <div class="col-md-6">
            <!-- <form>
              <input type="email" placeholder="Your email address here...">
              <button type="submit">Subscribe!</button>
            </form> -->
          </div>
        </div>
      </div>
    </section>
 
  </div>
  <!-- End Content --> 
  <br>
  <!-- Footer -->
  <footer>
    <div class="container"> 
      
      <!-- Footer Upside Links -->
      
      <div class="row"> 
        
        <!-- Contact -->
        <div class="col-md-4">
          <h4><b>Kiko Good Garage</b></h4>
          <h7>Jalan Soewoko No. 30 Jetis, Kec. Lamongan, Kab. Lamongan 62211</h7> <br><br>
          <h7>Hubungi 085856442607</h7>
          <div class="social-links"> 
            <a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a> 
            <a href="https://twitter.com/login" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a> 
            <a href="https://www.instagram.com/accounts/login/" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a> 
          </div>
        </div>
        
         <!-- <div class="col-md-3">
          <h4>Customer Services</h4>
          <ul class="links-footer">
            <li><a href="#."> Panduan Belanja</a></li>
            <li><a href="#."> Kontak </a></li>
          </ul>
        </div> -->
        
        <!-- Categories -->
        <!-- <div class="col-md-2">
          <h4>Informasi</h4>
          <ul class="links-footer">
            <li><a href="#."> Tentang Koperasi KPDK 12 Juli</a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </footer>
  
  <!-- Rights -->
  <div class="rights">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Copyright 2021 | All rights reserved</p>
        </div>
       <!--  <div class="col-sm-6 text-right"> <img src="<?php echo base_url() ?>asset/images/card-icon.png" alt=""> </div> -->
      </div>
    </div>
  </div>
  
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="<?php echo base_url() ?>asset/#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 
<script src="<?php echo base_url() ?>asset/js/vendors/jquery/jquery.min.js"></script> 
<script src="<?php echo base_url() ?>asset/js/vendors/wow.min.js"></script> 
<script src="<?php echo base_url() ?>asset/js/vendors/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>asset/js/vendors/own-menu.js"></script> 
<script src="<?php echo base_url() ?>asset/js/vendors/jquery.sticky.js"></script> 
<script src="<?php echo base_url() ?>asset/js/vendors/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo base_url() ?>asset/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>asset/rs-plugin/js/jquery.tp.min.js"></script> 
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>  -->
<script src="<?php echo base_url() ?>asset/js/vendors/map.js"></script>
<script src="<?php echo base_url() ?>asset/js/main.js"></script> 
<!-- <script src="<?php echo base_url() ?>asset/js/vendors/jquery.nouislider.min.js"></script> 
<script>
jQuery(document).ready(function($) {
  
  //  Price Filter ( noUiSlider Plugin)
    $("#price-range").noUiSlider({
    range: {
      'min': [ 0 ],
      'max': [ 1000 ]
    },
    start: [40, 940],
        connect:true,
        serialization:{
            lower: [
        $.Link({
          target: $("#price-min")
        })
      ],
      upper: [
        $.Link({
          target: $("#price-max")
        })
      ],
      format: {
      // Set formatting
        decimals: 2,
        prefix: '$'
      }
        }
  })
})

</script> -->
</body>

</html>