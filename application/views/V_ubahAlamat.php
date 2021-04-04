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
<link rel="icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeeg">

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
<link href="https://fonts.googleapis.com/css?family=Lato:100i,300,400,700,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="<?php echo base_url() ?>asset/js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Page Wrapper -->
<div id="wrap"> 
  <div id="notifications"><?php echo $this->session->flashdata('ubah1'); ?></div> 
  <div id="notifications"><?php echo $this->session->flashdata('ubah2'); ?></div> 
  <!-- Top bar -->
  <div class="top-bar">
    <div class="container">
      <p>Selamat Datang di Koperasi KPDK 12 Juli</p>
    </div>
  </div>
  
  <!-- Header -->
  <header>
    
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
        <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hubungi:</strong> (022) 733 2055 </span> </div>
      </div>
    </nav>
  </header>
  
  <div id="content"> 
    <section class="padding-bottom-60">
      <div class="container"> 
        <div class="pay-method">
          <div class="row">
            <div class="col-md-6"> 
              
              <div class="heading">
                <!-- <h6>Kode Pembayaran <?php echo $pembayaran[0]->kdPembayaran ?></h6>
                <br> -->
                <h2>Ubah Alamat</h2>
                <hr>
              </div>
              
             <form action="<?php echo base_url().'C_transaksiProduk/prosesUbahAlamat'?>" method="POST" name="ubahAlamat" >
                <input type="hidden" name="idAkun" value="<?php echo $dataPembeli[0]->idAkun?>">
                <input type="hidden" name="kodeUnik" value="<?php echo $kodeUnik['kodeUnik']?>">
                <input type="hidden" name="KdTukang" value="<?php echo $kodeUnik['KdTukang']?>">

                <div class="row"> 
                  
                  
                  <div class="col-sm-12" style="margin-bottom: -35px !important;margin-top: -20px !important;">
                    <label>Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan" value="<?php echo $dataPembeli[0]->kelurahan ?>" required >
                        <?php echo set_value('kelurahan') ?><br><?php echo form_error('kelurahan'); ?>
                    
                  </div>

                  <div class="col-sm-12" style="margin-bottom: -35px !important;">
                    <label>Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" value="<?php echo $dataPembeli[0]->kecamatan ?>" required >
                        <?php echo set_value('kecamatan') ?><br><?php echo form_error('kecamatan'); ?>
                    
                  </div>
                   
                  <div class="col-sm-12" style="margin-bottom: -35px !important;">
                    <label>kota/kabupaten</label>
                        <input type="text" class="form-control" name="kota_kab" value="<?php echo $dataPembeli[0]->kota_kabupaten ?>" required >
                        <?php echo set_value('kota_kab') ?><br><?php echo form_error('kota_kab'); ?>
                  
                  </div>

                   <div class="col-sm-12" style="margin-bottom: -35px !important;">
                    <label>Kode Pos</label>
                        <input type="number" class="form-control" name="kodePos" value="<?php echo $dataPembeli[0]->kodePos ?>" required>
                        <?php echo set_value('kodePos') ?><br><?php echo form_error('kodePos'); ?>
                  
                  </div>
                  
                  <div class="col-sm-12">
                    <label>Provinsi
                        <select class="form-control" type="text" name="provinsi" required>
                          <option><?php echo $dataPembeli[0]->provinsi ?></option>
                          <option>Aceh</option>
                          <option>Sumatera Utara</option>
                          <option>Sumatera Barat</option>
                          <option>Riau</option>
                          <option>Jambi</option>
                          <option>Sumatera Selatan</option>
                          <option>Bengkulu</option>
                          <option>Lampung</option>
                          <option>Kepulauan Bangka Belitung</option>
                          <option>Kepulauan Riau</option>
                          <option>DKI Jakarta</option>
                          <option>Jawa Barat</option>
                          <option>Jawa Tengah</option>
                          <option>DI Yogyakarta</option>
                          <option>Jawa Timur</option>
                          <option>Banten</option>
                          <option>Bali</option>
                          <option>Nusa Tenggara Barat</option>
                          <option>Nusa Tenggara Timur</option>
                          <option>Kalimantan Barat</option>
                          <option>Kalimantan Tengah</option>
                          <option>Kalimantan Selatan</option>
                          <option>Kalimantan Utara</option>
                          <option>Kalimantan Timur</option>
                          <option>Sulawesi Utara</option>
                          <option>Sulawesi Tengah</option>
                          <option>Sulawesi Selatan</option>
                          <option>Sulawesi Tenggara</option>
                          <option>Sulawesi Barat</option>
                          <option>Gorontalo</option>
                          <option>Maluku</option>
                          <option>Maluku Utara</option>
                          <option>Papua</option>
                          <option>Papua Barat</option>
                    </select>
                    <?php echo set_value('provinsi') ?><br><?php echo form_error('provinsi'); ?>
                 </label>
                  </div>

                  <div class="col-sm-12">
                    <label>Alamat Lengkap</label>
                        <textarea required class="form-control" name="alamatLengkap"  rows="3"><?php echo $dataPembeli[0]->alamatLengkap ?></textarea>
                        <?php echo set_value('alamatLengkap') ?><br><?php echo form_error('alamatLengkap'); ?>
                  
                  </div>
                 
                </div>
                  <div class="pro-btn">
                    <?php echo anchor('C_transaksiProduk/lihatTransaksi/'.$kodeUnik['kodeUnik'].'/'.$kodeUnik['KdTukang'],'K E M B A L I',array('class'=>'btn-round btn-light','style'=> 'padding: 10px 15px !important;'));?>
                    <input type="submit" name="submit" class="btn-round" value="S I M P A N" style="padding: 10px 15px !important;"/>
                </div>
              </form>
            </div>
            
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
       
      </div>
    </div>
  </div>
  
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
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
<script src="<?php echo base_url() ?>asset/js/main.js"></script> 
<script src="<?php echo base_url() ?>asset/js/vendors/jquery.nouislider.min.js"></script> 
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

</script>
</body>
</html>