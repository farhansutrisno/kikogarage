<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kiko Good Garage</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
  <link href="<?php echo base_url() ?>assetsAdmin/css/icons.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg" />

  <style type="text/css">
    /*.sidebar .nav .nav-item.nav-profile img{
      border-radius: 0% !important;
    }

    .rounded-circle, .settings-panel .color-tiles .tiles{
      border-radius: 0% !important;
    }*/
  </style>
  
</head>

<body>

  <div class="container-scroller">
   
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0   ">

      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

      <!--  <a class="navbar-brand" href="#">
        
          <p class="text-center font-weight-medium">Kiko Good Garage</p>
      </a>  -->
       
      </div>
      
      <div class="navbar-menu-wrapper d-flex align-items-center">

        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">

          <div style="width: 500px !important; margin-bottom: -3rem !important;" id="notifications">
            <?php echo $this->session->flashdata('pesan1'); ?>
            <?php echo $this->session->flashdata('pesan2'); ?>
            <?php echo $this->session->flashdata('pesan5'); ?>
            </div>
          
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="<?php echo base_url() ?>#" data-toggle="dropdown" aria-expanded="false">
              <div class="dropdown-toggle-wrapper">
                <div class="inner">
                  <img class="img-xs rounded-circle" src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('foto') ?>" alt="Profile image">
                </div>
                <div class="inner">
                  <div class="inner">
                    <span class="profile-text font-weight-bold"><?=$this->session->userdata('namaAdmin')?></span>
                    <small class="profile-text small"><?=$this->session->userdata('operatorstatus')?></small>
                  </div>
                  <div class="inner">
                    <div class="icon-wrapper">
                      <i class="mdi mdi-chevron-down"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
            <!--   <a class="dropdown-item mt-2">
                Lihat Data Akun
              </a>
              <a class="dropdown-item">
                Ubah Data
              </a> -->
              <a class="dropdown-item" href="<?php echo base_url() ?>webbackend/C_dataOperator/logout">
                Keluar
              </a>
            </div>
          </li>
          
       
          <li class="nav-item dropdown color-setting d-none d-md-block">
            <a class="nav-link count-indicator" href="#">
              <i class="mdi mdi-invert-colors"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins</p>
          </div>
          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading font-weight-bold mt-2">Header Skins</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles pink"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile" style="margin-top: -40px !important;">
           <img src="<?php echo base_url() ?>asset/images/kikonew.png" alt="profile image" style="width: 120px !important; height: 100px !important; margin-bottom: -15px !important;">
            <p class="text-center font-weight-medium" style="font-size: 22px !important;">Kiko Good Garage</p>
            <hr color="white" width="85%">
          </li>
          
          <li class="nav-item nav-profile" style="margin-top: -30px !important;">
           <img src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('foto') ?>" alt="profile image">
            <p class="text-center font-weight-medium"><?=$this->session->userdata('namaLengkap')?></p>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataProduk/grafikProdukUtama">
              <i class="menu-icon icon-home"></i>
              <span class="menu-title">Dashboard Utama</span>      
            </a>
          </li>

          <?php if ($this->session->userdata('statusAdmin') == '1') { ?>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon icon-screen-desktop"></i>
              <span class="menu-title">Data Front End</span>
              <div class="badge badge-info">3</div>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <!-- <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatDataArtikelBo">Artikel</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatDataGaleriBo">Galeri</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_pesanMasuk/lihatPesanMasuk">Pesan Masuk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataOperator/lihatDataKonsumen">Data Customer</a>
                </li>
               
              </ul>
            </div>
          </li>

          <?php } ?>

          <?php if ($this->session->userdata('statusAdmin') == '1') { ?>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#apps-dropdown" aria-expanded="false" aria-controls="apps-dropdown">
                <i class="menu-icon icon-user"></i>
                <span class="menu-title">Pegawai</span>

                <div class="badge badge-info">2</div>
                
              </a>
              <div class="collapse" id="apps-dropdown">
                <ul class="nav flex-column sub-menu">
                   
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataOperator/lihatDataOperator">Data Operator</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataOperator/lihatDataTukang">Data Pegawai Services</a>
                  </li>
                  
                </ul>
              </div>
            </li>
          <?php } ?>
          
          <?php if ($this->session->userdata('statusAdmin') == '1') { ?>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>webbackend/C_dataProduk/lihatDataProduk">
              <i class="menu-icon icon-present"></i>
              <span class="menu-title">Data Layanan</span>
            </a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#datareservasi" aria-expanded="true" aria-controls="datareservasi">
              <i class="menu-icon icon-bag"></i>
              <span class="menu-title">Data Reservasi</span>
              <div class="badge badge-info">2</div>
            </a>
            <div class="collapse show" id="datareservasi">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item active">
                  <a class="nav-link active" href="<?php echo base_url() ?>webbackend/C_dataPenjualan/lihatDataPenjualan">Reservasi Customer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataPenjualan/lihatHistoryReservasi">History Reservasi</a>
                </li>
              </ul>
            </div>
          </li>

           <?php } ?>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row mb-4">

            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title"></h4>
             
              <div class="d-flex align-items-center">
                <div class="wrapper mr-4 d-none d-sm-block">
                  <p class="mb-0">
                    <?php
                    $tanggal= mktime(date("m"),date("d"),date("Y"));
                    echo "Server Time : <b>".date("d-M-Y", $tanggal)."</b> ";

                    date_default_timezone_set('Asia/Jakarta');
                    $jam=date("H:i:s");
                    echo "<b>". $jam." "."</b>";

                    $a = date ("H");
                    if (($a>=6) && ($a<=11)){
                      echo "<b>, Selamat Pagi</b>";
                    }else if(($a>11) && ($a<=15)){
                      echo ", Selamat Siang !!";
                    }else if (($a>15) && ($a<=18)){
                      echo ", Selamat Sore !!";
                    }else { 
                      echo ", <b> Selamat Malam </b>";
                    }
                  ?>
                  </p>
                </div>
               
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-body">
              <h3 class="page-title">Lihat Data Reservasi Kiko Good Garage</h3><br>

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="accordion accordion-multiple-filled" id="accordion-3" role="tablist">

                      <div class="card">
                        <div class="card-header" role="tab" id="headingOne-3">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne-3" aria-expanded="false" aria-controls="collapseOne-3">
                              Export to Excel
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne-3" class="collapse" role="tabpanel" aria-labelledby="headingOne-3" data-parent="#accordion-3">
                          <div class="card-body">

                            <div class="row">
                
                                <div class="col-md-7">
                                    <?php
                                    echo anchor('webbackend/C_dataPenjualan/exportAll','Export All',array('class'=>'btn btn-round btn-success'));
                                    ?>
                                </div>
                                <div class="col-md-5">
                                    <form action="<?php echo base_url().'webbackend/C_dataPenjualan/dataFilter'?>" id="regFormExcel" method="POST">
                                      
                                      <div class="row">
                                        <select class="form-control" name="statusPembayaran" id="statusPengerjaanExcel" style="width: 120px !important">  
                                            <option value="">Status</option>                 
                                           <?php foreach($status as $r) { ?>
                                              <option value="<?php echo $r->statusPembayaran;?>"><?php echo $r->statusPembayaran;?></option>
                                            <?php } ?>
                                        </select>
                                        &nbsp;&nbsp;
                                        <select class="form-control" id="tahunexcel" name="tahun" style="width: 100px !important">  
                                          <option value="">Tahun</option>                 
                                          <?php foreach($tahun as $key) { ?>
                                            <option value="<?php echo $key->tanggal1;?>"><?php echo $key->tanggal1;?></option>
                                          <?php } ?>
                                        </select>
                                        &nbsp;&nbsp;
                                        <select class="form-control" id="bulanexcel" name="bulan" style="width: 80px !important">  
                                          <option value="">bulan</option>                 
                                          <?php foreach($bulan as $bln) { ?>
                                            <option value="<?php echo $bln->bulan;?>"><?php echo $bln->bulan;?></option>
                                          <?php } ?>
                                        </select>
                                        &nbsp;&nbsp;
                                        <button type="button" onclick="saveExcel();" class="btn btn-round btn-success">Export Filter</button> 
                                      </div>
                                      
                                    </form>
                                </div>
                              </div>

                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="headingTwo-3">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                              Export to PDF
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo-3" class="collapse" role="tabpanel" aria-labelledby="headingTwo-3" data-parent="#accordion-3">
                          <div class="card-body">
                            
                            <div class="row">
                
                                <div class="col-md-7">
                                    <?php
                                    echo anchor('webbackend/C_dataPenjualan/exportReservasiAll','Export All',array('class'=>'btn btn-round btn-success'));
                                    ?>
                                </div>
                                <div class="col-md-5">
                                    <form action="<?php echo base_url().'webbackend/C_dataPenjualan/exportpdfAllReservasiFilter'?>" id="regForm" method="POST">
                                      
                                      <div class="row">
                                        <select class="form-control" name="statusPembayaran" id="statusPengerjaan" style="width: 120px !important">  
                                            <option value="">Status</option>                 
                                           <?php foreach($status as $r) { ?>
                                              <option value="<?php echo $r->statusPembayaran;?>"><?php echo $r->statusPembayaran;?></option>
                                            <?php } ?>
                                        </select>
                                        &nbsp;&nbsp;
                                        <select class="form-control"  name="tahun" id="tahun" style="width: 100px !important">  
                                          <option value="">Tahun</option>                 
                                          <?php foreach($tahun as $key) { ?>
                                            <option value="<?php echo $key->tanggal1;?>"><?php echo $key->tanggal1;?></option>
                                          <?php } ?>
                                        </select>
                                        &nbsp;&nbsp;
                                        <select class="form-control"  name="bulan" id="bulan" style="width: 80px !important">  
                                          <option value="">bulan</option>                 
                                          <?php foreach($bulan as $bln) { ?>
                                            <option value="<?php echo $bln->bulan;?>"><?php echo $bln->bulan;?></option>
                                          <?php } ?>
                                        </select>
                                        &nbsp;&nbsp;
                                        <!-- <input type="submit" name="submit" class="btn btn-round btn-success" value="Export Filter" >  -->
                                        <button type="button" onclick="save();" class="btn btn-round btn-success">Export Filter</button>  
                                      </div>
                                      
                                    </form>
                                </div>
                              </div>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                          <th style="width: 10px !important;">No</th>
                          <th>Nama Konsumen</th>
                          <th>No Telepon</th>
                          <th>No Plat</th>
                          <!-- <th>kategori</th> -->
                          <th>No Antrian</th>
                          <th>Total Bayar</th>
                          <th>Status Reservasi</th>
                          <th>Tgl Transaksi</th>
                          <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no=1;
                        $kdoperator = $this->session->userdata('kodeOperator');

                            foreach ($penjualan as $key){

                                if (empty($key->tglTransaksi)) {
                                  $dateUpdate = '-';
                                }else{
                                  $dateUpdate = date_format (new DateTime($key->tglTransaksi), 'd M Y').' '.date_format (new DateTime($key->tglPembayaran), 'H:i');
                                }

                                if (empty($key->KdTukang)) {
                                  $KdTukang = 0;
                                }else{
                                  $KdTukang = $key->KdTukang;
                                }

                                if ($key->statusPembayaran == 'Antrian') {
                                  $statusPembayaran = "<font style='color:#800000'><b>".$key->statusPembayaran."</b></font>";
                                }else if ($key->statusPembayaran == 'Penjemputan') {
                                  $statusPembayaran = "<font style='color:#FFA500'><b>".$key->statusPembayaran."</b></font>";
                                }else if ($key->statusPembayaran == 'Pengerjaan') {
                                  $statusPembayaran = "<font style='color:#337AB7'><b>".$key->statusPembayaran."</b></font>";
                                }else if ($key->statusPembayaran == 'Pengantaran') {
                                  $statusPembayaran = "<font style='color:#5BC0DE'><b>".$key->statusPembayaran."</b></font>";
                                }else if ($key->statusPembayaran == 'Selesai') {
                                  $statusPembayaran = "<font style='color:#5CB85C'><b>".$key->statusPembayaran."</b></font>";
                                }

                                echo "<tr>";
                                echo "<td>". $no++."</td>";
                                echo "<td>". $key->namaLengkap."</td>";
                                echo "<td>". $key->noTelepon."</td>";
                                echo "<td>". $key->noPlat."</td>";
                                // echo "<td>". $key->kategori."</td>";
                                echo "<td>". $key->noAntrian."</td>";
                                echo "<td>Rp.".number_format($key->totalBayar, 0,",",".")."</td>";
                                echo "<td>". $statusPembayaran."</td>";
                                echo "<td>". $dateUpdate."</td>";
                                
                      ?>
                                <td>
                                    <a href="<?php echo base_url().'webbackend/C_dataPenjualan/detailDataPenjualan2/'.$key->kodeUnik.'/'.$KdTukang?>" class="btn btn-info"> <i class="fa fa-eye"></i> Detail</a>&nbsp;
                                    <!-- <a href="<?php echo base_url().'webbackend/C_dataPenjualan/updateDataPenjualan/'.$key->kodeUnik.'/'.$KdTukang?>" class="btn btn-primary"><i class="fa fa-handshake-o"></i> Edit</a> -->
                                    <a href="#" onclick="updateselesai(<?='\''.$key->kodeUnik.'\',\''.$key->idAkun.'\',\''.$kdoperator.'\',\''.$key->KdTukang.'\',\''."Selesai".'\''?>)" class="btn btn-primary <?php if ($key->statusPembayaran == 'Pengantaran' && $key->jenisBooking == 'Antar Jemput' || $key->statusPembayaran == 'Pengerjaan' && $key->jenisBooking == 'Langsung'){ ?> ' ' <?php }else{?> disabled <?php } ?>"><i class="fa fa-handshake-o"></i> Selesai</a>&nbsp;
                                    <a href="#" onclick="myDelete(<?='\''.$key->kodeUnik.'\''?>)" class="btn btn-danger"><i class="ion ion-md-trash"></i> Batal</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
                
            </div>
          </div>  
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright. All rights reserved.</span>
           
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <div class="modal fade" id="dialogrepair_box" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div id="login">
               <div class="modal-header" style="height: 50px !important;">
                 
                  <div class="col-md-11">
                  <h6 class="modal-title textBlack" align="left">Batal Data Reservasi</h6>
                </div>
                <div class="col-md-1">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
               </div>
               <div class="modal-body" style="height: 50px !important;">
                  
                     <p>Apakah anda yakin ingin membatalkan data Reservasi</p>  
                  
                </div>

               </div>
               <div class="modal-footer" align="center">
                <div class="col-md-12">
                    <div align="center">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>&nbsp;&nbsp;
                      <button type="button" id="btn_delete" class="btn btn-danger">Ya</button>
                    </div>  
                </div>
               </div>
             </div>


          </div>

       </div>

       <div class="modal fade" id="updateselesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div id="login">
                   <div class="modal-header">
                     
                      <div class="col-md-11">
                      <h6 class="modal-title textBlack" align="center">Update Status Reservasi</h6>
                    </div>
                    
                   </div>
                   <div class="modal-body">
                      
                      <div class="col-md-12 block-12">
                      <form action="#" enctype="multipart/form-data" method="POST">

                        <div class="form-group">
                            <p>Konfirmasi Status Reservasi : Selesai</p>  
                        </div>
                        
                        <div class="form-group">
                          <textarea cols="10" rows="5" name="catatan" class="form-control" id="catatan" placeholder="Catatan" required></textarea>
                        </div>

                        <div class="form-group">
                          <div class="row justify-content-center">
                             <button type="button" class="btn btn-danger btn-rounded btn-fw btn-lg marleft20" data-dismiss="modal">Batal</button>&nbsp;&nbsp;
                            <button type="button" id="btn_selesai" class="btn btn-primary btn-rounded btn-fw btn-lg marleft20">Simpan</button>
                          </div>
                        </div>

                      </form>
                    
                    </div>

                   </div>
                   
                 </div>


              </div>

           </div>
        </div>

  <script>
    function myDelete(val) {
        // console.log(val);
        var kodeUnik = val;

        $('#dialogrepair_box').modal('show');

        $("#btn_delete").click(function() {

            $.ajax({
                  url:"<?php echo base_url(); ?>webbackend/C_dataPenjualan/deleteDataPenjualan",
                  type: 'POST',
                  dataType: "html",
                  data: {
                      kodeUnik: kodeUnik
                  },
                  success: function(data) {
                      console.log(data);
                      $('#dialogrepair_box').modal('hide');
                      window.location.reload(true);

                  },
                  error: function(xhr, ajaxOptions, thrownError)
                  {
                      alert("Failed to get where column list, please try again");
            
                  }
            });

        });
        
    }

    function updateselesai(kodeUnik,idAkun,kdoperator,KdTukang,statusPengerjaan) {

        var kodeUnik          = kodeUnik;
        var idAkun            = idAkun;
        var kdoperator        = kdoperator;
        var KdTukang          = KdTukang;
        var statusPengerjaan  = statusPengerjaan;

        $('#updateselesai').modal('show');

        $("#btn_selesai").click(function() {

          var catatan         = document.getElementById("catatan").value;

          if(catatan){
            
            $.ajax({
                  url:"<?php echo base_url(); ?>webbackend/C_dataPenjualan/prosesUpdateDataPenjualan",
                  type: 'POST',
                  dataType: "html",
                  data: {
                      kodeUnik: kodeUnik,
                      idAkun: idAkun,
                      kdoperator : kdoperator,
                      KdTukang : KdTukang,
                      statusPengerjaan : statusPengerjaan,
                      catatan : catatan
                  },
                  success: function(data) {
                      console.log(data);
                      $('#updateselesai').modal('hide');
                      window.location.reload(true);

                  },
                  error: function(xhr, ajaxOptions, thrownError)
                  {
                      alert("Failed to get where column list, please try again");
            
                  }
            });

          }else{
            var msg = 'Catatan Tidak Boleh Kosong';
            alert(msg);
            window.location.reload(true);    
          }

        });
        
    }
  </script>
  <script type="text/javascript">

      function save(){

        var tahun                 = $('#tahun').val();
        var bulan                 = $('#bulan').val();
        var statusPengerjaan      = $('#statusPengerjaan').val();
        var valid = 1;

        if(statusPengerjaan == ''){
          valid = 0;
          var msg = 'Status Pengerjaan Tidak Boleh Kosong';
        }

        if(tahun == ''){
          valid = 0;
          var msg = 'Tahun Tidak Boleh Kosong';
        }
        
        if(bulan == ''){
          valid = 0;
          var msg = 'Bulan Tidak Boleh Kosong';
        }

        if(valid == 1){

          document.getElementById("regForm").submit();
          
        }else{
          alert(msg);
        }
            
      }

      function saveExcel(){

        var tahun                     = $('#tahunexcel').val();
        var bulan                     = $('#bulanexcel').val();
        var statusPengerjaanExcel     = $('#statusPengerjaanExcel').val();
        var valid = 1;

        if(statusPengerjaanExcel == ''){
          valid = 0;
          var msg = 'Status Pengerjaan Tidak Boleh Kosong';
        }
          
        if(tahun == ''){
          valid = 0;
          var msg = 'Tahun Tidak Boleh Kosong';
        }

        if(bulan == ''){
          valid = 0;
          var msg = 'Bulan Tidak Boleh Kosong';
        }

        if(valid == 1){

          document.getElementById("regFormExcel").submit();
          
        }else{
          alert(msg);
        }
            
      }

  </script>

  <!-- plugins:js -->
  <script src="<?php echo base_url() ?>admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url() ?>admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url() ?>admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url() ?>admin/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url() ?>admin/js/misc.js"></script>
  <script src="<?php echo base_url() ?>admin/js/settings.js"></script>
  <script src="<?php echo base_url() ?>admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url() ?>admin/js/dashboard.js"></script>
   <script src="<?php echo base_url() ?>admin/js/data-table.js"></script>
  <!-- End custom js for this page-->
<!-- <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bd9%2f1qnbRUEVDaLDOLvcbvWBm58jdhbN5LM041ifJBZ4HHvIzRSXMUkU4lPIh%2fYqiYc7wtqmtMWoVr1kId0HDTGeZ%2bwQlH%2f%2btg9ebKzUxo5T%2b%2bUN33UTMMTi3eGi571v2PevtQzTdiYpJVhTtVEGUZXMKXF300l5O8y2VFuocYUdTimwf0tcjekcsd0TAIp%2fx2G5jr67Au82DHajA2TlsBD3vQpEs6V7vc%2fK5PMmaV4mxJK6Qdbjc8X66VRhcIdG0rPLtCnwGAfXHnH0q7lDgPG2%2bel3wwNlE8NuCC%2bSmu2SxOiUx7A%2fkj1m9sM6a7R9yRzGzMEzGh3%2fZ5h3fPhYwybJgtfoY8sfQS9qABhgp%2bKXOhY1eGm056ufcOuaT9yTsNAy03FCk1yKUbUYcdljSxWQlc%2ftnBOBZKowLu%2ff7SENG%2bUzAmQLVINArEORbgm66kyE03E0UOkllDZopVlWKTRVEGKpAY%2bhlJ" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script> -->
</body>
</html>