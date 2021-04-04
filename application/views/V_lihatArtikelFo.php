<!doctype html>
<html class="no-js" lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- <meta name="author" content="M_Adnan" /> -->
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
        <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i>085856442607</span> </div>
      </div>
    </nav>
  </header>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Artikel</a></li>
          <!-- <li class="active">Blog</li> -->
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="blog-page padding-top-30 padding-bottom-60">
      <div class="container">
        <div class="row">
          <div class="col-md-9"> 
            
            <!-- Blog Post -->
            <?php foreach ($artikel as $key) { 

              if ($key->tglUpdateArtikel != NULL) {

                $tanggalArtikel = date_format (new DateTime($key->tglUpdateArtikel), 'd-M-Y H:i:s');

              }else{

                $tanggalArtikel = date_format (new DateTime($key->tglArtikel), 'd-M-Y H:i:s');

              }

              ?>

              <div class="blog-post">
                <article class="row">
                  <div class="col-xs-4"> 
                    <img class="img-responsive" src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" alt="" > 
                  </div>
                  <div class="col-xs-8"> 

                    <span><i class="fa fa-bookmark-o"></i> <?php echo $tanggalArtikel; ?></span> 
                    <a href="#." class="tittle"><?php echo $key->judulArtikel; ?></a>

                    <p><?php echo $key->isiArtikel; ?></p>
                    <a href="<?php echo base_url().'webbackend/C_dataKiko/detailArtikelFo/'.$key->kdArtikel?>">Readmore</a>

                  </div>
                </article>
              </div>
            
            <?php } ?>

            <!-- <?php echo $pag; ?> -->

            <!-- pagination -->
            <!-- <ul class="pagination">
              <li> <a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
              <li><a class="active" href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li> <a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
            </ul> -->
          </div>
          
          <!-- Side Bar -->
          <div class="col-md-3">
            <div class="shop-side-bar"> 
              
              <!-- Search -->
              <!-- <div class="search">
                <form>
                  <label>
                    <input type="email" placeholder="Search here">
                  </label>
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div> -->
              
              <!-- Categories -->
              <!-- <h6>Categories</h6>
              <div class="checkbox checkbox-primary">
                <ul>
                  <li>
                    <input id="cate1" class="styled" type="checkbox" >
                    <label for="cate1"> Home Audio & Theater </label>
                  </li>
                  <li>
                    <input id="cate2" class="styled" type="checkbox" >
                    <label for="cate2"> TV & Video</label>
                  </li>
                  <li>
                    <input id="cate3" class="styled" type="checkbox" >
                    <label for="cate3"> Camera, Photo & Video</label>
                  </li>
                  <li>
                    <input id="cate4" class="styled" type="checkbox" >
                    <label for="cate4"> Cell Phones & Accessories</label>
                  </li>
                  <li>
                    <input id="cate5" class="styled" type="checkbox" >
                    <label for="cate5"> Headphones</label>
                  </li>
                  <li>
                    <input id="cate6" class="styled" type="checkbox" >
                    <label for="cate6"> Video Games</label>
                  </li>
                  <li>
                    <input id="cate7" class="styled" type="checkbox" >
                    <label for="cate7"> Bluetooth & Wireless Speakers</label>
                  </li>
                  <li>
                    <input id="cate8" class="styled" type="checkbox" >
                    <label for="cate8"> Gaming Console</label>
                  </li>
                  <li>
                    <input id="cate9" class="styled" type="checkbox" >
                    <label for="cate9"> Computers & Tablets</label>
                  </li>
                  <li>
                    <input id="cate10" class="styled" type="checkbox" >
                    <label for="cate10"> Monitors</label>
                  </li>
                  <li>
                    <input id="cate11" class="styled" type="checkbox" >
                    <label for="cate11"> Home Appliances</label>
                  </li>
                  <li>
                    <input id="cate12" class="styled" type="checkbox" >
                    <label for="cate12">Office Supplies </label>
                  </li>
                </ul>
              </div> -->
              
              <!-- Recent Posts -->
              <!-- <h6>Recent Posts</h6>
              <div class="recent-post"> 
                
                <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="images/blog-img-2.jpg" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>
                
                <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="images/blog-img-3.jpg" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>
                
                <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="images/blog-img-4.jpg" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>
              </div>
              
              <h6>Quote of the Day</h6>
              <div class="quote-day"> <i class="fa fa-quote-left"></i>
                <p>Suspendisse sodales cursus lorem vel
                  efficitur. Donec tincidunt aliquet lacus. Maecenas pulvinar egestas ex eget eleifend. Aenean eget tempus urna [...]</p>
              </div> -->

            </div>
          </div>

          
        </div>
      </div>
    </section>
    
    <!-- Clients img -->
    <!-- <section class="light-gry-bg clients-img">
      <div class="container">
        <ul>
          <li><img src="images/c-img-1.png" alt="" ></li>
          <li><img src="images/c-img-2.png" alt="" ></li>
          <li><img src="images/c-img-3.png" alt="" ></li>
          <li><img src="images/c-img-4.png" alt="" ></li>
          <li><img src="images/c-img-5.png" alt="" ></li>
        </ul>
      </div>
    </section> -->
    
    <!-- Newslatter -->
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
      <!-- <div class="foot-link">
        <ul>
          <li><a href="#."> About us </a></li>
          <li><a href="#."> Customer Service </a></li>
          <li><a href="#."> Privacy Policy </a></li>
          <li><a href="#."> Site Map </a></li>
          <li><a href="#."> Search Terms </a></li>
          <li><a href="#."> Advanced Search </a></li>
          <li><a href="#."> Orders and Returns </a></li>
          <li><a href="#."> Contact Us</a></li>
        </ul>
      </div> -->
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
          <p>Copyright © 2021. All rights reserved</p>
        </div>
        <div class="col-sm-6 text-right"> <img src="images/card-icon.png" alt=""> </div>
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
<!-- <script src="js/vendors/jquery.nouislider.min.js"></script> 
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