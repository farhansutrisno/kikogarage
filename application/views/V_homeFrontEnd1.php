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
<link href="<?php echo base_url() ?>https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<!-- JavaScripts -->
<script src="<?php echo base_url() ?>asset/js/vendors/modernizr.js"></script>

</head>
<body>

<!-- Page Wrapper -->
<div id="wrap" class="layout-1"> 
   
  <!-- Top bar -->
  <div class="top-bar">
    <div class="container">
      <p>Selamat Datang di koperasi KPDK 12 Juli</p>
      <div class="right-sec">
        <ul>
          <li><a href="<?php echo base_url() ?>C_dataAkun/login">Login </a></li>
          <li><a href="<?php echo base_url() ?>C_dataAkun/createAkun">Buat AKun </a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header>
    <div class="container">
      <div class="logo"> <a href="<?php echo base_url() ?>C_produkPembeli/lihatProdukAwal"><img src="<?php echo base_url() ?>asset/images/logokiko.jpeg" height="50px" width="60px" alt="" ></a> </div>
      <div class="search-cate">
        <form action="<?php echo base_url().'C_produkPembeli/pencarian' ?>"  method="POST">
          <input type="text" name="data_produk" placeholder="Ketik untuk mencari">
          <button class="submit" type="submit" name="submit"><i class="icon-magnifier"></i></button>
        </form>
      </div>
      <div class="nav navbar-right float-right list-inline">
          <ul class="nav navbar-left">
            <li class="dropdown"> 
               <a href="<?php echo base_url() ?>C_dataAkun/login"> <img src="<?php echo base_url() ?>asset/images/keranjang.png"  height="50px" width="60px"></a>
            </li>
          </ul>
      </div>
    </div>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container"> 
        
        <!-- Categories -->
        <div class="cate-lst"> <a  data-toggle="collapse" class="cate-style" href="<?php echo base_url() ?>#cater"><i class="fa fa-list-ul"></i> Kategori </a>
          <div class="cate-bar-in">
            <div id="cater" class="collapse">
              <ul>
                  <li><a href="<?php $kategori = "Makanan"; echo base_url('C_produkPembeli/makanan/'.$kategori) ?>">Makanan</a></li>
                  <li><a href="<?php $kategori = "Minuman"; echo base_url('C_produkPembeli/minuman/'.$kategori) ?>">Minuman</a></li>
                  <li><a href="<?php $kategori = "Makanan_Ringan"; echo base_url('C_produkPembeli/makanan_ringan/'.$kategori) ?>">Makanan Ringan</a></li> 
                  <li><a href="<?php $kategori = "Alat_Kebersihan"; echo base_url('C_produkPembeli/alat_kebersihan/'.$kategori) ?>">Alat Kebersihan</a></li>
                  <li><a href="<?php $kategori = "Alat_Tulis"; echo base_url('C_produkPembeli/alat_tulis/'.$kategori) ?>"> Alat Tulis</a></li>
                  <li><a href="<?php $kategori = "Buku"; echo base_url('C_produkPembeli/buku/'.$kategori) ?>">Buku</a></li>
                  <li><a href="<?php $kategori = "Barang_UKM"; echo base_url('C_produkPembeli/barang/'.$kategori) ?>">Barang UKM</a></li>
                  <li><a href="<?php $kategori = "Lainnya"; echo base_url('C_produkPembeli/lainnya/'.$kategori) ?>">Lainnya</a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Navbar Header -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li class="dropdown megamenu"> <a href="<?php echo base_url() ?>C_produkPembeli/lihatProdukAwal">Produk Koperasi </a></li>
            <li class="dropdown"> <a href="<?php echo base_url() ?>webbackend/C_pesanMasuk/kirimPesanLogin">Kontak</a></li>
          </ul>
        </div>
        
        <!-- NAV RIGHT -->
        <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hubungi:</strong> 081298374183 </span> </div>
      </div>
    </nav>
  </header>
  
  <!-- Slid Sec -->
  <section class="slid-sec">
    <div class="container">
      <div class="container-fluid">
        <div class="row"> 
          
          <!-- Main Slider  -->
          <div class="col-md-9 no-padding"> 
            
            <!-- Main Slider Start -->
            <div class="tp-banner-container">
              <div class="tp-banner">
                <ul>
                  
                  <!-- SLIDE  -->
                  <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
                    <!-- MAIN IMAGE --> 
                    <img src="<?php echo base_url() ?>asset/images/slider-img-1.jpg"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-110" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">High Quality VR Glasses </div>
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-60" 
                                     data-speed="800" 
                                     data-start="1000" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;">3D Daydream View </div>
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="10" 
                                     data-speed="800" 
                                     data-start="1200" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">Starting at </div>
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="210" 
                                     data-y="center" data-voffset="5" 
                                     data-speed="800" 
                                     data-start="1300" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$49.99 </div>
                    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb tp-resizeme scroll" 
                                      data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="80"
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>
                  </li>
                  
                  <!-- SLIDE  -->
                  <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
                    <!-- MAIN IMAGE --> 
                    <img src="<?php echo base_url() ?>asset/images/slider-img-2.jpg"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-110" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">No restocking fee ($35 savings)</div>
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-60" 
                                     data-speed="800" 
                                     data-start="1000" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;">M75 Sport Watch </div>
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="10" 
                                     data-speed="800" 
                                     data-start="1200" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">Now Only </div>
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="210" 
                                     data-y="center" data-voffset="5" 
                                     data-speed="800" 
                                     data-start="1300" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$320.99 </div>
                    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb tp-resizeme scroll" 
                                      data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="80"
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>
                  </li>
                  
                  <!-- SLIDE  -->
                  <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
                    <!-- MAIN IMAGE --> 
                    <img src="<?php echo base_url() ?>asset/images/slider-img-3.jpg"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-110" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">Get Free Bluetooth when buy </div>
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-60" 
                                     data-speed="800" 
                                     data-start="1000" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;">Flat SmartWatch </div>
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="0" 
                                     data-speed="800" 
                                     data-start="1200" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">Combo Only:</div>
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="240" 
                                     data-y="center" data-voffset=" -5" 
                                     data-speed="800" 
                                     data-start="1300" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$590.00 </div>
                    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb tp-resizeme scroll" 
                                      data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="80"
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Main Slider  -->
          <div class="col-md-3 no-padding"> 
            
            <!-- New line required  -->
            <div class="product">
              <div class="like-bnr">
                <div class="position-center-center">
                  <h5>New line required</h5>
                  <h4>Smartphone s7</h4>
                  <span class="price">$259.99</span> </div>
              </div>
            </div>
            
            <!-- Weekly Slaes  -->
            <div class="week-sale-bnr">
              <h4>Weekly <span>Sale!</span></h4>
              <p>Saving up to 50% off all online
                store items this week.</p>
              <a href="#." class="btn-round">Shop now</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Shipping Info -->
    <section class="shipping-info">
      <div class="container">
        <ul>
          <!-- Free Shipping -->
          <li>
            <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
            <div class="media-body">
              <h5>Delivery Murah</h5>
              <span>Rp.</span></div>
          </li>
          <!-- Money Return -->
          <li>
            <div class="media-left"> <i class="flaticon-arrows"></i> </div>
            <div class="media-body">
              <h5>Kembali Uang</h5>
              <span>30 Hari Uang Kembali</span></div>
          </li>
          <!-- Support 24/7 -->
          <li>
            <div class="media-left"> <i class="flaticon-operator"></i> </div>
            <div class="media-body">
              <h5>Admin 8/6</h5>
              <span>Hubungi: (081298374183</span></div>
          </li>
          <!-- Safe Payment -->
          <li>
            <div class="media-left"> <i class="flaticon-business"></i> </div>
            <div class="media-body">
              <h5>Pembayaran Aman</h5>
              <span>Jual Beli Terpercaya</span></div>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- tab Section -->
    <section class="featur-tabs padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
          <li role="presentation" class="active"><a href="#featur" aria-controls="featur" role="tab" data-toggle="tab">Tersedia</a></li>
          <li role="presentation"><a href="#special" aria-controls="special" role="tab" data-toggle="tab">Terlaris</a></li>
          
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content"> 
          <!-- Featured -->
          <div role="tabpanel" class="tab-pane active fade in" id="featur"> 
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav"> 
              <!-- Product -->
              <?php foreach ($produk as $key) { ?>
              <?php if($key->stok > 1){ ?>
                 <div class="product">
                   <article> 
                      <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" width="100px" height="150px" > 
                      <span class="tag"></span> <a href="<?php echo base_url().'C_produkPembeli/detailProdukLogin/'.$key->kdProduk?>" class="tittle"><?php echo $key->namaProduk; ?></a> 
                      <br>
                      <div class="price">Rp. <?php echo number_format($key->hargaPenjualan,0,",","."); ?> </div>
                      <a href="<?php echo base_url() ?>C_dataAkun/login" class="cart-btn"><i class="icon-basket-loaded"></i></a>
                      
                   </article>
                 </div>
              <?php } ?> 
              <?php } ?>  
            </div>
          </div>
          
          <!-- Special -->
          <div role="tabpanel" class="tab-pane fade" id="special"> 
            <!-- Items Slider -->
            <div class="item-col-5"> 
              <!-- Product -->
              <?php foreach ($produk as $key) { ?>
              <?php if($key->stok <= 10){ ?>
                 <div class="product">
                    <article> <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" width="100px" height="150px" > 
                      <span class="tag"></span> <a href="<?php echo base_url().'C_produkPembeli/detailProdukLogin/'.$key->kdProduk?>" class="tittle"><?php echo $key->namaProduk; ?></a> 
                      <br>
                      <div class="price">Rp. <?php echo number_format($key->hargaPenjualan,0,",","."); ?> </div>
                      <a href="<?php echo base_url() ?>C_dataAkun/login" class="cart-btn"><i class="icon-basket-loaded"></i></a> 
                    </article>
                 </div>
              <?php } ?>
              <?php } ?>  
            </div>
          </div>
          
          <!-- on sale -->
         <!--  <div role="tabpanel" class="tab-pane fade" id="on-sal"> 
            
            <div class="item-col-5"> 
              
              <?php foreach ($produk as $key) { ?>
                 <div class="product">
                    <article> <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" width="120px" height="200px" > 
                      <span class="tag"></span> <a href="<?php echo base_url().'C_produkPembeli/detailProdukLogin/'.$key->kdProduk?>" class="tittle"><?php echo $key->namaProduk; ?></a> 
                      <br>
                      <div class="price">Rp. <?php echo number_format($key->hargaPenjualan,0,",","."); ?> </div>
                      <a href="<?php echo base_url() ?>C_dataAkun/login" class="cart-btn"><i class="icon-basket-loaded"></i></a> 
                    </article>
                 </div>
              <?php } ?>  
            </div>
          </div> -->
        </div>
      </div>
    </section>
    
    <!-- Top Selling Week -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Produk KPDK 12 Juli</h2>
          <hr>
        </div>
        
        <!-- Items -->
        <div class="item-col-5"> 
          
          <!-- Product -->
          <!-- <div class="product col-2x">
            <div class="like-bnr">
              <div class="position-center-center">
                <h5>Smart Watch 2.0</h5>
                <p>Space Gray Aluminum Case
                  with Black/Volt Real Sport Band <span>38mm | 42mm</span> </p>
                <a href="#." class="btn-round">View Detail</a> </div>
            </div>
          </div> -->
          
          <?php foreach ($produk as $key) { ?>
             <div class="product">
                <article> <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?> " width="100px" height="150px" > 
                  <span class="tag"></span> <a href="<?php echo base_url().'C_produkPembeli/detailProdukLogin/'.$key->kdProduk?>" class="tittle"><?php echo $key->namaProduk; ?></a> 
                  <br>
                  <div class="price">Rp. <?php echo number_format($key->hargaPenjualan,0,",","."); ?>
                  </div>
                  <a href="<?php echo base_url() ?>C_dataAkun/login" class="cart-btn"><i class="icon-basket-loaded"></i></a> 
                </article>
             </div>
          <?php } ?>  
        </div>
      </div>
    </section>
    
    <!-- Main Tabs Sec -->
    <section class="main-tabs-sec padding-top-60 padding-bottom-0">
      <div class="container">
        <ul class="nav margin-bottom-40" role="tablist">
         <!--  <li role="presentation" class="active"><a href="#tv-au" aria-controls="featur" role="tab" data-toggle="tab"> <i class="flaticon-computer"></i> Produk Koperasi</span></a></li> -->
          <li role="presentation" class="active"><a href="#smart" aria-controls="special" role="tab" data-toggle="tab"><i class="flaticon-business"></i>Produk UKM <span></span></a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content"> 
          <!-- TV & Audios -->
          <div role="tabpanel" class="tab-pane active fade in" id="tv-au"> 
            
           
            <div class="item-slide-5 with-bullet no-nav"> 
             
              <?php foreach ($barang_ukm as $key) { ?>
                 <div class="product">
                    <article> <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" width="100px" height="150px" > 
                      <span class="tag"></span> <a href="<?php echo base_url().'C_produkPembeli/detailProdukLogin/'.$key->kdProduk?>" class="tittle"><?php echo $key->namaProduk; ?></a> 
                      <br>
                      <div class="price">Rp. <?php echo number_format($key->hargaPenjualan,0,",","."); ?> </div>
                      <a href="<?php echo base_url() ?>C_dataAkun/login" class="cart-btn"><i class="icon-basket-loaded"></i></a> 
                    </article>
                 </div>
              <?php } ?>  
            </div>
          </div>
          
          <!-- Smartphones -->
          <!-- <div role="tabpanel" class="tab-pane fade" id="smart"> 
            
            <div class="item-col-5"> 
              
              <?php foreach ($produk as $key) { ?>
                 <div class="product">
                    <article> <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" width="120px" height="200px" > 
                      <span class="tag"></span> <a href="<?php echo base_url().'C_produkPembeli/detailProdukLogin/'.$key->kdProduk?>" class="tittle"><?php echo $key->namaProduk; ?></a> 
                      <br>
                      <div class="price">Rp. <?php echo number_format($key->hargaPenjualan,0,",","."); ?> </div>
                      <a href="<?php echo base_url() ?>C_dataAkun/login" class="cart-btn"><i class="icon-basket-loaded"></i></a> 
                    </article>
                 </div>
              <?php } ?>  
            </div>
          </div>
          -->
          
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
        
        <!-- Categories -->
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
          <p>Copyright ©Farhan_Sutrisno 2019 | All rights reserved</p>
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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mj0r8oTdJIrd5J5bT%2fTOXLeTUMeLErBo7HIzBANSTGKmaxEgWA6YnTui5IinHTynDBm7cy2tkTUduAzju7NrwNqeTEAVMSG3TAmHzgRbbDTSoxiEFhf%2bIY59dp5tgWulEuejtrVRffZ81c6P%2fuTCHdUe4MpK%2bYcvAQaL4WfAW4SivPWhB%2bcUNhyyieTwfqx2kFgDqkXYax6vuichzks6CpmyaHzL9FZTLIBPVl%2f1dht1WMu7yjG1UibH7xY%2ftv95VDK70XgbOlIex3GooXfdHrdZWoIlMDaFx73zeoyWBG2B8DXfjmIXyvViJK5X52r279LqT7bHqvmPTlzoeY%2bXY1D%2b4jdzCNADH8j4uPs6tmS%2bd8R%2bWWydglGElytgQb3m3P0sEx%2b1%2b6TQ%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script>
</body>
</html>