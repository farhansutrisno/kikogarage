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
<link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
<!-- <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" /> -->
<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<!-- Fonts Online -->
<!-- <link href="https://fonts.googleapis.com/css?family=Lato:100i,300,400,700,900" rel="stylesheet"> -->

<!-- JavaScripts -->
<script src="<?php echo base_url() ?>asset/js/vendors/modernizr.js"></script>

</head>
<body>

<!-- Page Wrapper -->
<div id="wrap"> 
  <div id="notifications"><?php echo $this->session->flashdata('akun1'); ?></div> 
  
  <!-- Top bar -->
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
  
  <!-- Header -->
  <header>
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
      
      <!-- Cart Part -->
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
         <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i>085856442607</span> </div>
      </div>
    </nav>
  </header>
  
  <!-- Content -->
  <div id="content"> 

    <!-- <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>C_produkPembeli/lihatProdukAwal">Beranda</a></li>
          <li class="active">Buat Akun</li>
        </ol>
      </div>
    </div> -->
    
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <form action="<?php echo base_url().'C_dataAkun/prosesCreateAkun'?>" method="POST" name="createAkun" enctype="multipart/form-data" >
        <div class="row">

            <div class="col-md-6">

              <div class="row">
                  <div class="col-sm-12" style="margin-bottom: 10px !important;">
                    <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="namaLengkap" value="<?php echo set_value('namaLengkap') ?>" required>
                      <?php echo form_error('namaLengkap'); ?>
                    
                  </div>

                  <div class="col-sm-12" style="margin-bottom: 10px !important;">
                    <label>Email</label>
                      <input type="email" class="form-control" name="email" parsley-type="email" value="<?php echo set_value('email') ?>" required>
                      <?php echo form_error('email'); ?>
                    
                  </div>

                  <div class="col-sm-12" style="margin-bottom: 10px !important;">
                    <label>No Telepon</label>
                      <input type="text" class="form-control" name="noTelepon" value="<?php echo set_value('noTelepon') ?>" required>
                      <?php echo form_error('noTelepon'); ?>
                    
                  </div>

                  <div class="col-sm-12" style="margin-bottom: 10px !important;">
                    <label>Username</label>
                      <input type="text" class="form-control" name="username" value="<?php echo set_value('username') ?>" required>
                      <?php echo form_error('username'); ?>
                    
                  </div>

                  <div class="col-sm-12" style="margin-bottom: 10px !important;">
                    <label>Password</label>
                      <input type="password" class="form-control" name="password" value="<?php echo set_value('password') ?>" required>
                      <?php echo form_error('password'); ?>
                    
                  </div>

                  <div class="col-sm-12" style="margin-bottom: 10px !important;">
                    <label>Tanggal Lahir</label>
                      <input class="form-control datepicker" data-date-format="yyyy-mm-dd" type="text" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir') ?>" required> 
                      <?php echo form_error('tanggal_lahir'); ?>
                    
                  </div>

                  <div class="col-sm-12" style="margin-bottom: 10px !important;">
                  <label>Gambar</label>
                    
                    <input class="form-control" type="file" name="userfile" required>
                    <span><i>Format file : JPG/PNG | Maksimal Upload : 10 Mb</i></span>
                      
                </div>
              </div>
            </div>

            <div class="col-md-6">

              <div class="row">
                <div class="col-sm-12" style="margin-bottom: 10px !important;">
                  <label>Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan" value="<?php echo set_value('kelurahan') ?>" required >
                        <?php echo form_error('kelurahan'); ?>
                </div>
                
                <div class="col-sm-12" style="margin-bottom: 10px !important;">
                  <label>Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" value="<?php echo set_value('kecamatan') ?>" required >
                        <?php echo form_error('kecamatan'); ?>
                 
                </div>
                
                <div class="col-sm-12" style="margin-bottom: 10px !important;">
                  <label>kota/kabupaten</label>
                        <input type="text" class="form-control" name="kota_kab" value="<?php echo set_value('kota_kab') ?>" required >
                        <?php echo form_error('kota_kab'); ?>
                  
                </div>
               
                <div class="col-sm-12" style="margin-bottom: 10px !important;">
                 <label>Provinsi</label>
                        <select class="form-control" type="text" name="provinsi" required>
                          <option><?php echo set_value('provinsi') ?></option>
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
                    <?php echo form_error('provinsi'); ?>
                 
                </div>
              
                <div class="col-sm-12" style="margin-bottom: 10px !important;">
                  <label>Kode Pos</label>
                        <input type="text" class="form-control" name="kodePos" <?php echo set_value('kodePos') ?>" required>
                        <?php echo form_error('kodePos'); ?>
                  
                </div>
                
                <div class="col-sm-12" style="margin-bottom: 10px !important;">
                  <label>Alamat Lengkap</label>
                        <textarea required class="form-control" name="alamatLengkap" rows="5"><?php echo set_value('alamatLengkap') ?></textarea>
                        <?php echo form_error('alamatLengkap'); ?>
                  
                </div>  
                
              </div>
              
            </div>
              <!-- <ul class="row">
                  <li class="col-sm-6">
                    <label>Nama Lengkap
                      <input type="text" class="form-control" name="namaLengkap" value="<?php echo set_value('namaLengkap') ?>" required>
                      <?php echo form_error('namaLengkap'); ?>
                    </label>
                  </li>

                  <li class="col-sm-6">
                    <label>Email
                      <input type="email" class="form-control" name="email" parsley-type="email" value="<?php echo set_value('email') ?>" required>
                      <?php echo form_error('email'); ?>
                    </label>
                  </li>

                  <li class="col-sm-6">
                    <label>Username
                      <input type="text" class="form-control" name="username" value="<?php echo set_value('username') ?>" required>
                      <?php echo form_error('username'); ?>
                    </label>
                  </li>

                  <li class="col-sm-6">
                    <label>No Telepon
                      <input type="text" class="form-control" name="noTelepon" value="<?php echo set_value('noTelepon') ?>" required>
                      <?php echo form_error('noTelepon'); ?>
                    </label>
                  </li>

                  <li class="col-sm-6">
                    <label>Password
                      <input type="password" class="form-control" name="password" value="<?php echo set_value('password') ?>" required>
                      <?php echo form_error('password'); ?>
                    </label>
                  </li>

                  <li class="col-sm-6">
                    <label>Tanggal Lahir
                      <input class="form-control datepicker" style="width:240px;" size="30" data-date-format="yyyy-mm-dd" type="text" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir') ?>" required> 
                      <?php echo form_error('tanggal_lahir'); ?>
                    </label>
                  </li> -->

                  <!-- <li class="col-sm-6">
                    <label>Jenis Kelamin
                    <select class="form-control" type="hidden" name="jenisKelamin" required>
                          <option>Laki-Laki</option>
                          <option>Perempuan</option>
                    </select>
                    </label>
                  </li> -->
              <!-- <ul>
                <li class="col-sm-6">
                  <label>Kelurahan
                        <input type="text" class="form-control" name="kelurahan" value="<?php echo set_value('kelurahan') ?>" required >
                        <?php echo form_error('kelurahan'); ?>
                  </label>
                </li>
                
                <li class="col-sm-6">
                  <label>Kecamatan
                        <input type="text" class="form-control" name="kecamatan" value="<?php echo set_value('kecamatan') ?>" required >
                        <?php echo form_error('kecamatan'); ?>
                  </label>
                </li>
                
                <li class="col-sm-6">
                  <label>kota/kabupaten
                        <input type="text" class="form-control" name="kota_kab" value="<?php echo set_value('kota_kab') ?>" required >
                        <?php echo form_error('kota_kab'); ?>
                  </label>
                </li>
               
                <li class="col-sm-6">
                 <label>Provinsi
                        <select class="form-control" type="text" name="provinsi" required>
                          <option><?php echo set_value('provinsi') ?></option>
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
                    <?php echo form_error('provinsi'); ?>
                 </label>
                </li>
              
                <li class="col-sm-6">
                  <label>Kode Pos
                        <input type="text" class="form-control" name="kodePos" <?php echo set_value('kodePos') ?>" required>
                        <?php echo form_error('kodePos'); ?>
                  </label>
                </li>
                <li class="col-sm-6">
                  <label>Gambar</label>
                    
                          <input class="form-control" type="file" name="userfile" required>
                          <span><i>Format file : JPG/PNG | Maksimal Upload : 10 Mb</i></span>
                      <br>
                </li>
                <li class="col-sm-6">
                  <label>Alamat Lengkap
                        <textarea required class="form-control" name="alamatLengkap" rows="5"><?php echo set_value('alamatLengkap') ?></textarea>
                        <?php echo form_error('alamatLengkap'); ?>
                  </label>
                </li>  
                
              </ul> -->
              
            </div>
            <div class="row pro-btn">
                <!-- <div class="col-sm-3"> -->
                    <?php echo anchor('C_produkPembeli/lihatProduk','Back',array('class'=>'btn-round','style'=>'padding: 10px 15px !important;'));?>
                <!-- </div> -->
                <!-- <div class="col-sm-3"> -->
                    <input type="submit" name="submit" class="btn-round" value="Submit" style="padding: 10px 15px !important;"/>
                <!-- </div>  -->

            </div>
            </form>
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
        
       <!-- <div class="col-md-3">
          <h4>Customer Services</h4>
          <ul class="links-footer">
            <li><a href="#."> Panduan Belanja</a></li>
            <li><a href="#."> Login</a></li>
            <li><a href="#."> Buat Akun</a></li>
            <li><a href="#."> Kontak </a></li>
          </ul>
        </div> -->
        
        <!-- Categories -->
        <!-- <div class="col-md-2">
          <h4>Informasi</h4>
          <ul class="links-footer">
            <li><a href="#."> Tentang Koperasi KPDK 12 Juli</a></li>
            <li><a href="#."> Lokasi Koperasi</a></li>
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
          <p>Copyright © Farhan Sutrisno 2019 | All rights reserved</p>
        </div>
      
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
<!-- <script src="<?php echo base_url() ?>asset/js/vendors/bootstrap.min.js"></script>  -->
<script src="<?php echo base_url() ?>asset/js/vendors/own-menu.js"></script> 
<script src="<?php echo base_url() ?>asset/js/vendors/jquery.sticky.js"></script> 
<script src="<?php echo base_url() ?>asset/js/vendors/owl.carousel.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">
     $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
        });
    </script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo base_url() ?>asset/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>asset/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?php echo base_url() ?>asset/js/main.js"></script> 
<!-- <script src="<?php echo base_url() ?>asset/js/vendors/jquery.nouislider.min.js"></script>  -->
<!-- <script>
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