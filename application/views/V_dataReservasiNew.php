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
   <!--  <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->

    <!-- dibawah buat timepicker ===========================================================================================================================================================  -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" /> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css"/> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/ripples.min.css"/> -->

    <link rel="stylesheet" href="<?php echo base_url()?>datetimepicker/css/bootstrap-material-datetimepicker.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script> -->
    <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
    <!-- <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script> -->
    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>datetimepicker//js/bootstrap-material-datetimepicker.js"></script>

    <!-- =========================================================================================================================================================== -->

     <style type="text/css">
      /*.nav-link{
        color: #FFFFFF !important;
      }*/

      .ftco-degree-bg:after{
        content: none !important;
      }

      .table{
        min-width: 0px !important;
      }
      .form-control{
        height: 35px !important;
        font-size: 14px !important;
      }

      .tagcloud a{
        background-color: #A31313 !important;
        color: #FFFFFF !important;
        pointer-events: none !important;
      }

    </style>

  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      
        <div class="col-md-12">
          <?php echo $this->session->flashdata('tambah1'); ?>
          <?php echo $this->session->flashdata('hapus1'); ?>
          <?php echo $this->session->flashdata('notif1'); ?>
          <?php echo $this->session->flashdata('cekjadwal1'); ?>
          <?php echo $this->session->flashdata('cekjadwal2'); ?>

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

              <li class="nav-item active"><a href="<?php echo base_url('C_produkPembeli/datareservasi') ?>" class="nav-link">Data Reservasi</a></li>
              
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

                  <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#loginmodel">Masuk</a></li>

                  <?php } ?>
            </ul>

          </div>
            </div>
          
        </div>
        </div>
     
    </nav>

     <div class="modal fade" id="loginmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div id="login">
               <div class="modal-header">
                 
                  <div class="col-md-11">
                  <h6 class="modal-title textBlack" align="left">Masuk</h6>
                </div>
                <div class="col-md-1">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
               </div>
               <div class="modal-body">
                  
                  <div class="col-md-12 block-12">
                  <form action="<?php echo base_url().'C_dataAkun/prosesLogin'?>" method="POST" id="regForm">
                    <div class="form-group">
                      <input type="text" class="form-control" id="username" placeholder="Nama Depan" name="username" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="passwordlogin" placeholder="Password" name="password" required>
                    </div>

                    
                    <div class="form-group">
                      <!-- <input type="submit" name="submit" value="Kirim" class="btn btn-primary py-3 px-5"> -->
                      <div class="row justify-content-center">
                         <!-- <button type="button" class="btn btn-primary btn-lg marleft20" data-dismiss="modal">Close</button>&nbsp;&nbsp; -->
                        <button type="button" onclick="save();" class="btn btn-info btn-lg marleft20 active">Masuk</button>
                    </div>
                    </div>

                  </form>
                
                </div>

               </div>
               <div class="modal-footer justify-content-center">
                  
                <hr />
                <div class="col-md-12">
                  <div class="row justify-content-center">
                      <h6>Belum punya akun?</h6>  
                    </div>
                    <div class="row justify-content-center">
                      <button type="button" class="btn btn-info btn-lg marleft20 active" onclick="registermodel()" style="width: 300px !important;">Daftar</button>
                    </div>  
                </div>
                
               </div>
             </div>


          </div>

       </div>
    </div>

    <div class="modal fade" id="registermodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div id="login">
               <div class="modal-header">
                 
                  <div class="col-md-11">
                  <h6 class="modal-title textBlack" align="left">Form Registrasi</h6>
                </div>
                <div class="col-md-1">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
               </div>
               <form action="<?php echo base_url().'C_dataAkun/prosesCreateAkun'?>" method="POST" name="createAkun" enctype="multipart/form-data" id="regisForm">

               <div class="modal-body">
                  
                  <div class="col-md-10 block-10">

                    <div class="form-group">
                      <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="noTelepon" name="noTelepon" placeholder="No Telepon" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>

             <div class="form-group">
                      <input type="text" class="form-control" id="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required">
                    </div>
                    <div class="form-group">
                      <textarea cols="10" rows="4" name="alamatLengkap" class="form-control" placeholder="Alamat Lengkap" required></textarea>
                    </div>
                     
                    <div class="form-group">
                       <input class="form-control" type="file" name="userfile" required>
                        <span style="font-size: 14px !important;"><i>Format file : JPG/PNG | Maksimal Upload : 10 Mb</i></span>
                    </div>

                </div>

               </div>
               <div class="modal-footer justify-content-center">
                    <!-- <button type="button" class="btn btn-primary btn-lg marleft20" data-dismiss="modal">Close</button> -->
                      <button type="button" onclick="saveregister();" class="btn btn-info btn-lg marleft20 active">Kirim</button>
               </div>
               </form>
             </div>


          </div>

       </div>
    </div>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url() ?>images/car-11.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Reservasi <i class="ion-ios-arrow-forward"></i></a></span> <span>Detail Reservasi </span></p>
            <h1 class="mb-3 bread">Detail Reservasi</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" style="margin-bottom: -180px !important;">

      <div class="container" style="margin-top: -50px !important;">
        <h3 class="mb-3 bread"><b>Layanan yang diambil</b></h3>
        <hr/>
        <div class="row">

        <?php
          if (!empty($produk)) { ?>

                <?php 
                $total_belanja = 0;
                $total_potongan = 0;
                $kodeProduk     = '';
                $hargaProduk    = 0;    
                $kategoriproduk = '';  
                $paketproduk    = '';       

                foreach ($produk as $produk1) { 

                  $total_belanja = $total_belanja + $produk1->hargaPenjualan;

                  if ($produk1->kategori == 'CarWash' && $produk1->paket == 'Reguler' || $produk1->kategori == 'CarWash' && $produk1->paket == 'Premium') {
                    $total_potongan = $total_potongan + $produk1->hargaPenjualan;
                    $kodeProduk     = $produk1->kdProduk;
                    $hargaProduk    = $produk1->harga;    
                    $kategoriproduk = $produk1->kategori;  
                    $paketproduk    = $produk1->paket;           
                  }
                  
                  ?>

                <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url() ?>gambar_proyek/<?php echo $produk1->gambar ?>);">
                    </div>
                    <div class="text">
                      <h2 class="mb-0"><a href="#" style="cursor: default !important; text-transform: capitalize !important;"><?php echo $produk1->namaProduk ?></a></h2>
                      <div class="d-flex mb-3">
                        <span class="cat" style="color: #000000 !important;"><?php echo $produk1->kategori ?></span>
                        <p class="price ml-auto" style="color: red !important;">Rp. <?php echo  number_format($produk1->hargaPenjualan, 0,",","."); ?></p>
                      </div>
                      <p class="d-flex mb-0 d-block"><a href="<?php echo base_url()?>C_produkPembeli/deleteProduk2/<?php echo $produk1->kdKeranjang;?>/<?php echo $produk1->kategori;?>/<?php echo $produk1->paket;?>/<?php echo $produk1->harga;?>" class="btn btn-danger py-2 mr-1" style="color: #ffffff !important;">Batal</a></p>
                    </div>
                  </div>
                </div>

                 <?php } ?>   

           <?php }else{ 

                  $total_belanja = 0;
            ?>

              <div class="col-md-8">
                <div class="car-wrap rounded ftco-animate">

                  <div class="text">
                  <h4 class="mb-0"><b>Layanan Anda Kosong.</b></h4>
                  <h4 class="mb-0"><b>Silahkan Pilih Layanan Terlebih Dahulu</b></h4>
                  <br>
                  <p class="mb-0"><a href="<?php echo base_url()?>C_produkPembeli/lihatProdukNew" class="btn btn-success py-3 px-4">Reservasi Sekarang</a></p>
                  <br>
                  </div>
                  
                </div>
              </div>
                
           <?php }?>

        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-7 ftco-animate">
            <h3><b>Data Reservasi</b></h3>
            <hr/>

            <?php if (!empty($produk)) { ?>

            <div class="col-md-10" style="margin-left: -60px !important; margin-bottom: -20px !important;">
              <form class="p-5 contact-form" action="<?php echo base_url().'C_transaksiProduk/inputDataReservasi' ?>" method="POST" name="kirimPesan" style="margin-top: -15px !important;">
                <input type="hidden" name="totalBayar" value="<?php echo $total_belanja?>">
                <input type="hidden" name="idAkun" value="<?php echo $produk[0]->idAkun?>">
                <div class="form-group">
                  <input type="text" class="form-control" id="date11" placeholder="Pilih Tanggal Reservasi Anda" name="tglReservasi" value="<?php echo $tglReservasi ?>" required>
                </div>
                <div class="form-group">
                  <input type="text" id="time" class="form-control" name="jamreservasi" placeholder="Pilih Jam Reservasi Anda" value="<?php echo $jamreservasi ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nomor Plat Kendaraan Anda" name="noPlat" value="<?php echo $noPlat ?>" required>
                </div>
                <div class="form-group">
                  <!-- <input type="text" class="form-control" placeholder="No Telepon" name="noTelepon" required> -->
                  <select class="form-control" name="jenisBooking" required>
                    <option value=""> Pilih Jenis Reservasi</option>
                    <option value="Antar Jemput">Antar Jemput</option>
                    <option value="Langsung">Langsung</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="Lanjutkan" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            </div>

            <?php }?>

            <!-- <p style="color: #000000 !important;">Tanggal Transaksi : </p>
            <p style="color: #000000 !important;">No Plat : </p>
            <p style="color: #000000 !important;">Jenis Booking : </p> -->
            
            <!-- <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Pegawai Kiko Good Garage</a>
                
              </div>
            </div> -->
            
            <!-- <div class="about-author d-flex p-4 bg-light"> -->
              <!-- <div class="bio mr-5" style="margin-left: -25px !important;">
                <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $row[0]->foto ?>" style="width: 150px !important;" alt="Image placeholder" class="img-fluid mb-4">
              </div> -->
              <!-- <div class="desc" style="margin-left: -25px !important;">
                <h3><b>Jadwal Tidak Tersedia</b></h3>
                <hr/>
                
                
              </div>

              
            </div> -->
            
          </div> <!-- .col-md-8 -->
          <div class="col-md-5 sidebar ftco-animate" style="margin-top: -10px !important;">

            <div class="sidebar-box ftco-animate">
              <h3><b>Data Reservasi</b></h3>
              <hr/>
              <div class="block-21 mb-4 d-flex">
                <!-- <a class="blog-img mr-4" style="background-image: url(<?php echo base_url() ?>images/image_1.jpg);"></a> -->
                <div class="text">
                  <h3 class="heading">

                     <?php 
                      if (empty($member[0]->poin)) {
                        $totalPoint = 0;
                      }else{
                        $totalPoint = $member[0]->poin;
                      }
                      
                    ?>

                     <p style="color: #000000 !important;">Total Bayar : Rp. <?php echo  number_format($total_belanja, 0,",",".");  ?> </p>
                     <p style="color: #000000 !important;">Total Poin  : <?php echo $totalPoint; ?> &nbsp; 

                      <?php  
                        if (!empty($produk) && $totalPoint >= 10 && $hargaProduk != 0) { ?>

                        <a href="#" onclick="updateProgress(<?='\''.$member[0]->idAkun.'\',\''.$kodeProduk.'\''?>)" class="btn btn-success py-2 mr-1" style="color: #ffffff !important;">Gunakan</a>
                      <?php } 
                      if (!empty($kodeProduk) && $hargaProduk == 0) { 

                        $totalpembayaran = $total_belanja - $total_potongan;
                        ?>
                      
                      </p> 
                      
                       <p style="color: #000000 !important;">Total Potongan  : Rp. <?php echo  number_format($total_potongan, 0,",",".");  ?></p>
                       <p style="color: #000000 !important;">Total Bayar  : Rp. <?php echo  number_format($totalpembayaran, 0,",","."); ?></p>
                  <?php } ?>
                  </h3>
                 
                </div>
              </div>
              <!-- <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url() ?>images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>Oct. 29, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url() ?>images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>Oct. 29, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
            </div>

            <div class="sidebar-box ftco-animate" style="margin-top: -50px !important;">

              <h3><b>Alamat Saya</b></h3>
              <hr/>
              <?php
              if (!empty($produk)) { ?>
                
                <p style="color: #000000 !important;"><?php echo $produk[0]->alamatLengkap ?></p>
                
                <!-- <p class="d-flex mb-0 d-block"><a href="<?php echo base_url().'C_produkPembeli/lihatDetailProdukNew/'?>" class="btn btn-info py-2 mr-1" style="color: #ffffff !important;">Ubah Alamat</a></p> -->

              <?php }else{ ?>
                
                <br>
              <?php }
              ?>
                
            </div>

            <div class="sidebar-box ftco-animate" style="margin-top: -35px !important;">
                <h3><b>Jadwal Reservasi Penuh</b></h3>
                <hr/>

                <div class="tagcloud">
                  <?php foreach ($jamreservasi1 as $row1) { 
                    $dateUpdate1 = date_format (new DateTime($row1->tglPembayaran), 'H:i');
                    $dateUpdate2 = date_format (new DateTime($row1->tglTransaksi), 'd M Y');
                    ?>

                    <a href="#" class="tag-cloud-link" disable><b><?php echo $dateUpdate1.' - '.$dateUpdate2; ?></b></a>

                  <?php }?>
                  
                </div>
              </div>

            <!-- <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div> -->
            <!-- <div class="sidebar-box ftco-animate" style="margin-top: -30px !important;">
              <div class="categories">
                <h3><b>Status Reservasi</b></h3>
                <hr/>

                <li style="color: #000000 !important;"><?php echo $row[0]->statusPembayaran ?></li>
                
              </div>
            </div> -->
            
          </div>

          <!-- <div class="col-md-12 ftco-animate">

              <div style="margin-left: -5px !important;">
                <a href="<?php echo base_url().'C_produkPembeli/lihatDetailProdukNew'?>" class="btn btn-secondary py-2 ml-1" style="width: 100% !important">Lanjutkan</a>  
              </div>

          </div> -->

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
    
   <script type="text/javascript">

    function registermodel(){

      $('#loginmodel').modal('hide');

    $('#registermodel').modal('show');
        
  }

  function saveregister(){

    var namaLengkap = $('#namaLengkap').val();
    var noTelepon   = $('#noTelepon').val();
    var password  = $('#password').val();
    var valid = 1;
      
    if(namaLengkap == ''){
      valid = 0;
      var msg = 'Nama Lengkap Tidak Boleh Kosong';
    }

    if(password == ''){
      valid = 0;
      var msg = 'Password Tidak Boleh Kosong Tidak Boleh Kosong';
    }

    if(noTelepon == ''){
      valid = 0;
      var msg = 'No Telepon Tidak Boleh Kosong Tidak Boleh Kosong';
    }

    if(valid == 1){

      document.getElementById("regisForm").submit();
      
    }else{
      alert(msg);
    }
        
  }
    
  function save(){

    var username=$('#username').val();
    var passwordlogin=$('#passwordlogin').val();
    var valid = 1;
      
    if(username == ''){
      valid = 0;
      var msg = 'Username Tidak Boleh Kosong';
    }

    if(passwordlogin == ''){
      valid = 0;
      var msg = 'Password Tidak Boleh Kosong';
    }

    if(valid == 1){


      document.getElementById("regForm").submit();
      
      // $.ajax({
      //       type:"post",
   //                url: "<?php echo base_url(); ?>C_dataAkun/prosesLogin",
     //         dataType: "text",
      //       data: {
      //           username: username,
      //           password: password
      //       },
      //       success: function(data) {
      //           console.log(username);
      //           console.log(password);
      //           $('#loginmodel').modal('hide');
                
    //                 window.location.href = "<?php echo base_url() ?>C_produkPembeli/lihatProdukNew";
                    
      //       },
      //       error: function(xhr, ajaxOptions, thrownError)
      //       {
      //           alert("Failed to get where column list, please try again");
      
      //       }
      // });

    }else{
      alert(msg);
    }
        
  }

  // $( function() {

  //     $( "#datereservasi" ).datepicker({
  //       autoclose:true,
  //       todayHighlight:true,
  //       format:'yyyy-mm-dd',
  //       language: 'id',
  //     });

  //   } );

  function updateProgress(idAkun,kdProduk) {
                  
    var idAkun            = idAkun;
    var kdProduk          = kdProduk;
   
      $.ajax({
                url:"<?php echo base_url(); ?>C_produkPembeli/updatepotongan",
                type: 'POST',
                dataType: "html",
                data: {
                    idAkun: idAkun,
                    kdProduk : kdProduk
                },
                success: function(data) {
                    console.log(data);
                    window.location.reload(true);
                    
                },
                error: function(xhr, ajaxOptions, thrownError)
                {
                    alert("Failed to get where column list, please try again");
          
                }
          });

  }

  </script>

  <script type="text/javascript">
    $(document).ready(function()
    {
      $('#date11').bootstrapMaterialDatePicker
      ({
        time: false,
        lang: 'id',
        format:'YYYY-MM-DD',
        minDate : moment(),
        maxDate: moment().add(1, 'days'),
        cancelText: 'Kembali',
      });

      $('#time').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm',
        cancelText: 'Kembali',
        minDate: moment({h:10}),
        maxDate: moment({h:17}),
        twelvehour: true,
        shortTime: false,
        switchOnClick: true
      });

    });
    </script>

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