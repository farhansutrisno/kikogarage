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
  <div id="notifications"><?php echo $this->session->flashdata('konfirmasi1'); ?></div> 
  <!-- Top bar -->
  <div class="top-bar">
    <div class="container">
      <p>Selamat Datang di Koperasi KPDK 12 Juli</p>
    </div>
  </div>
  
  <!-- Header -->
  <header>
    <div class="container">
      <div class="logo"> <a href="<?php echo base_url() ?>C_produkPembeli/lihatProduk"><img src="<?php echo base_url() ?>asset/images/logokiko.jpeg" height="50px" width="60px" alt="" ></a> </div>
      <div class="search-cate">
       <form action="<?php echo base_url().'C_produkPembeli/pencarianLogin' ?>"  method="POST">
          <input type="text" name="data_produk" placeholder="Ketik untuk mencari">
          <button class="submit" type="submit" name="submit"><i class="icon-magnifier"></i></button>
        </form>
      </div>
      
      <!-- Cart Part -->
      <div class="nav navbar-right float-right list-inline">

          <ul class="nav navbar-left">
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
                    <li><a href="<?php echo base_url() ?>C_dataAkun/daftarMember" class="dropdown-item">Member</a></li>
                    <li><a href="<?=base_url('C_dataAkun/logout')?>" class="dropdown-item"> Logout</a></li>
                </ul>
              </li>
          </ul>
          <ul class="nav navbar-right ">
              <li class="dropdown">
                  <a href="<?php echo base_url() ?>C_transaksiProduk/allTransaksi"> <img src="<?php echo base_url() ?>asset/images/transaksi.png"  height="50px" width="60px"></a>
              </li>
          </ul>
        
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
        <div class="nav-right"> </div>
      </div>
    </nav>
  </header>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">
          <li class="col-sm-3">
            <div class="media-left"> <i class="flaticon-shopping"></i> </div>
            <div class="media-body"> <span>Langkah 1</span>
              <h6>Keranjang</h6>
            </div>
          </li>
          
          <li class="col-sm-3 ">
            <div class="media-left"> <i class="flaticon-shopping-bag"></i> </div>
            <div class="media-body"> <span>Langkah 2</span>
              <h6>Data pembeli</h6>
            </div>
          </li>

          <li class="col-sm-3 ">
            <div class="media-left"> <i class="flaticon-business"></i> </div>
            <div class="media-body"> <span>Langkah 3</span>
              <h6>Data Pembayaran</h6>
            </div>
          </li>
          
          <li class="col-sm-3 current">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Langkah 4</span>
              <h6>Data Transaksi</h6>
            </div>
          </li>
        </ul>

      </div>
    </div>
    
    <!-- Payout Method -->
    <section class="padding-bottom-60">
      <div class="container"> 
        <!-- Payout Method -->
       <h5>Detail Transaksi</h5>    
        
        <div class="pay-method check-out"> 

          <div class="row">
            <div class="col-md-6"> 
                <div class="heading">
                  <h2>Data Pembayaran</h2>
                  <hr>
                </div>
                
                <ul>
                  <h8>Total Bayar</h8>
                </ul>
                <ul class="row check-item">
                  <li class="col-xs-12">
                    <p> Rp.<?php echo  number_format($row[0]->totalBayar, 0,",","."); ?></p>
                    <p> Bayar sampai 3 digit terakhir pada total bayar tujuan untuk verifikasi</p>
                  </li>
                </ul>
                
                <ul class="row check-item">
                  <li class="col-xs-6">
                    <h8>Transfer Bank BRI</h8>
                    <p><img class="margin-right-20" src="<?php echo base_url() ?>asset/images/bri.jpg" height="70px" width="90px" alt=""></p>
                    <p>234 786 346 466</p>
                  </li>

                  <li class="col-xs-6">
                    <h8>Transfer Bank BCA</h8>
                    <p><img class="margin-right-20" src="<?php echo base_url() ?>asset/images/bca.jpg" height="70px" width="90px" alt=""></p>
                    <p>954 454 257 234</p>
                  </li> 
                </ul>

                <ul class="row check-item">
                  <li class="col-xs-6">
                    <h8>Transfer Bank BNI</h8>
                    <p><img class="margin-right-20" src="<?php echo base_url() ?>asset/images/bni.jpg" height="70px" width="90px" alt=""></p>
                    <p>999 124 967 934</p>
                  </li>

                  <li class="col-xs-6">
                    <h8>Transfer Bank Mandiri</h8>
                    <p><img class="margin-right-20" src="<?php echo base_url() ?>asset/images/mandiri.jpg" height="70px" width="90px" alt=""></p>
                    <p>888 965 444 534</p>
                  </li>
                </ul>

                <div class="row">
                    <div class="col-md-12">
                      <div class="heading">
                      <h2>Data Pembelian</h2>
                      <hr>
                    </div>
                      
                    <ul>
                      <h8>Kode Pembelian</h8>
                    </ul>
                    <ul class="row check-item">
                      <li class="col-xs-12">
                        <p><?php echo $row[0]->kdPembelian ?></p>
                      </li>
                    </ul>
                    <ul>
                    <h8>No Resi</h8>
                    </ul>
                    <ul class="row check-item">
                      <li class="col-xs-12">
                        <p><?php echo $row[0]->noResi ?></p>
                      </li>
                    </ul>

                    <ul>
                    <h8>Status Pembelian</h8>
                    </ul>
                    <ul class="row check-item">
                      <li class="col-xs-12">
                        <p><?php echo $row[0]->statusPembayaran ?></p>
                      </li>
                    </ul>

                    <ul>
                      <h8>Barang</h8>
                    </ul>
                    <ul class="row check-item">
                      <li class="col-xs-12">
                        <p><img class="margin-right-20" src="<?php echo base_url() ?>asset/images/mandiri.jpg" height="40px" width="50px" alt=""></p>
                      </li>
                      <li class="col-xs-12">
                        <h8>Nama Produk</h8><br>
                        <h8>Harga</h8><br>
                        <h8>Berat</h8><br>
                        <h8>Kategori</h8>
                    </ul>
                    
                    </div>
                </div>
            </div>

            <div class="col-md-6"> 
              
                <ul>
                  <h8>Kode Tagihan</h8>
                </ul>
                <ul class="row check-item">
                  <li class="col-xs-12">
                    <p><?php echo $row[0]->kdPembayaran ?></p>
                  </li>
                  
                  <li class="col-xs-12">
                    <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $$row[0]->strukPembayaran ?>" height="400px" width="350px" >
                  </li>
                  
                  <br>
                  <li class="col-xs-12">
                    <p><a href="<?php echo base_url().'C_transaksiProduk/konfirmasiPembayaran/'.$row[0]->kdPembayaran ?>" class="btn-round">Konfirmasi Pembayaran</a></p>
                  </li>
                </ul>

                <ul>
                  <h8>Status Pembayaran</h8>
                </ul>
                <ul class="row check-item">
                  <li class="col-xs-12">
                    <p><?php echo $row[0]->statusPembayaran ?></p>
                  </li>
                </ul>

                <ul>
                  <h8>Rincian Pembayaran</h8>
                </ul>
                <ul class="row check-item">
                  <li class="col-xs-6">
                    <p>Kode Pembayaran </p>
                    
                  </li>
                  <li class="col-xs-6">
                   
                     <p>Rp.<?php echo $row[0]->kodeUnik ?></p>
                  </li>
                  <li class="col-xs-6">
                    <p>Biaya kirim</p>
                    
                  </li>
                  <li class="col-xs-6">
                   
                     <p>Rp.<?php echo  number_format($row[0]->biayaKirim, 0,",",".");  ?></p>
                  </li>
                  <li class="col-xs-6">
                    <p></p>
                    
                  </li>
                  <li class="col-xs-6">
                   
                     <p></p>
                  </li>
                  <li class="col-xs-6">
                    <p>Total Bayar</p>
                    
                  </li>
                  <li class="col-xs-6">
                   
                     <p>Rp.<?php echo   number_format($row[0]->totalBayar, 0,",","."); ?></p>
                  </li>
                </ul>

                <ul>
                  <h8>Alamat Pengiriman</h8>
                </ul>
                <ul class="row check-item">
                  <li class="col-xs-6">
                    <p> <?php echo $profil[0]->namaLengkap ?></p>
                    <p> <?php echo $profil[0]->alamatLengkap ?></p>
                    <p> <?php echo $profil[0]->kelurahan ?>,<?php echo $profil[0]->kecamatan ?>, <?php echo $profil[0]->kota_kabupaten ?></p>
                    <p>  </p>
                    <p> <?php echo $profil[0]->provinsi ?>, <?php echo $profil[0]->kodePos ?></p>
                    <p> No Handphone : <?php echo $profil[0]->noTelepon ?></p>
                  </li>
                  <li class="col-xs-12">
                  <?php echo anchor('C_transaksiProduk/ubahAlamat','Ubah Alamat',array('class'=>'btn-round'));?>
                  </li>
                </ul>

            </div>
          </div>
      
        <div class="pro-btn">
          <a href="<?php echo base_url() ?>C_produkPembeli/lihatProduk" class="btn-round">Lihat Produk</a> 
        </div>

      </div>
    </section>
 
  </div>
  <!-- End Content --> 
  
  <!-- Footer -->
  <footer>
    <div class="container"> 
      
      <div class="row"> 
        
        <!-- Contact -->
        <div class="col-md-4">
          <h4>Kontak Koperasi KPDK 12 Juli</h4>
          <p>Alamat: Komplek Dinas Koperasi dan Usaha Kecil Provinsi Jawa Barat Jl. Soekarno Hatta NO.705 Bandung</p>
          <p>No Telepon: 081298374183 </p>
          <div class="social-links"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> </div>
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
          <p>Copyright ©Farhan Sutrisno 2019 | All rights reserved</p>
        </div>
       
      </div>
    </div>
  </div> 
  
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