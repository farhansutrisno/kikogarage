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
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/css/style.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg" />
  <!-- endinject -->
  <!-- link baru date picker-->
  <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
  <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  
</head>

<body>
  <div class="container-scroller">
    <div  id="notifications"><?php echo $this->session->flashdata('pesan3'); ?></div>
    <div  id="notifications"><?php echo $this->session->flashdata('pesan4'); ?></div>
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
       <a class="navbar-brand brand-logo" href="<?php echo base_url() ?>webbackend/C_dataOperator/homeBackEnd"> 
         
          <p class="text-center font-weight-medium">Kiko Good Garage</p>
        </a>
       
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="dropdown-toggle-wrapper">
                <div class="inner">
                  <img class="img-xs rounded-circle" src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('foto') ?>" alt="Profile image">
                </div>
                <div class="inner">
                  <div class="inner">
                    <span class="profile-text font-weight-bold"><?=$this->session->userdata('namaAdmin')?></span>
                    <small class="profile-text small">Admin</small>
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
              <!-- <a class="dropdown-item mt-2">
                Lihat Data Operator
              </a>
              <a class="dropdown-item">
                Ubah Data
              </a> -->
              <a class="dropdown-item" href="<?php echo base_url() ?>webbackend/C_dataOperator/logout">
                Keluar
              </a>
            </div>
          </li>
         
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?php echo base_url() ?>admin/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?php echo base_url() ?>admin/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              
            </div>
          </li> -->
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
      <!-- partial:../../partials/_settings-panel.html -->
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
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <img src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('foto') ?>" alt="profile image">
            <p class="text-center font-weight-medium"><?=$this->session->userdata('namaLengkap')?></p>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataProduk/grafikProduk">
              <i class="menu-icon icon-diamond"></i>
              <span class="menu-title">Dashboard</span>             
            </a>
          </li>

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
                  <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataOperator/lihatDataKonsumen">Data Konsumen</a>
                </li>
               
              </ul>
            </div>
          </li>

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
                  <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataOperator/lihatDataTukang">Data Tukang</a>
                </li>
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>webbackend/C_dataProduk/lihatDataProduk">
              <i class="menu-icon icon-present"></i>
              <span class="menu-title">Data Layanan</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>webbackend/C_dataPenjualan/lihatDataPenjualan">
              <i class="menu-icon icon-bag"></i>
              <span class="menu-title">Data Penjualan</span>
            </a>
          </li>

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
          
          <!-- <?php echo form_open('webbackend/C_dataOperator/prosesInputDataOperator'); ?> -->
          <form method="POST" action="<?php echo base_url().'webbackend/C_dataOperator/prosesInputDataOperator'?>" name="inputDataOperator" enctype="multipart/form-data">
          <div class="row">

            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Input Data Operator</h4>
      
                  <hr>
                  
                    <fieldset>
                      <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" class="form-control" name="namaLengkap" value="<?php echo set_value('namaLengkap') ?>" required/>
                          <?php echo form_error('namaLengkap'); ?>
                      </div>
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text"  class="form-control" name="username" value="<?php echo set_value('username') ?>" required/>
                          <?php echo form_error('username'); ?>
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password"  class="form-control" name="password" value="<?php echo set_value('password') ?>" required/>
                          <?php echo form_error('password'); ?>
                      </div>
                      <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="email" value="<?php echo set_value('email') ?>" required/>
                          <?php echo form_error('email'); ?>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div>
                          <input class="form-control datepicker" style="width:335px;" size="30" data-date-format="yyyy-mm-dd" type="text" value="<?php echo set_value('tglLahir') ?>" name="tglLahir" required> <?php echo form_error('tglLahir'); ?>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <label>No Telp</label>
                          <div>
                              <input type="number" class="form-control" name="noTelepon" value="<?php echo set_value('noTelepon') ?>" required/>
                              <?php echo form_error('noTelepon'); ?>
                          </div>
                      </div>
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                          <select class="form-control" type="text" name="jenisKelamin" required>
                                <!-- <option><?php echo set_value('jenisKelamin') ?></option> -->
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                          </select>
                          <?php echo form_error('jenisKelamin'); ?>
                      </div>

                      <div class="form-group">
                        <label>Status</label>
                          <select class="form-control" type="text" name="status" required>
                                <!-- <option><?php echo set_value('status') ?></option> -->
                                <option value="1">Admin</option>
                                <option value="2">Super Admin</option>
                          </select>
                          <?php echo form_error('status'); ?>
                      </div>
                      
                    </fieldset>
                  
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                    <fieldset>
                      
                      <div class="form-group">
                          <label>Kelurahan</label>
                          <input type="text" class="form-control" name="kelurahan" value="<?php echo set_value('kelurahan') ?>"  required/>
                          <?php echo form_error('kelurahan'); ?>
                      </div>
                      <div class="form-group">
                          <label>Kecamatan</label>
                          <input type="text" class="form-control" name="kecamatan" value="<?php echo set_value('kecamatan') ?>" required/>
                          <?php echo form_error('kecamatan'); ?>
                      </div>
                      <div class="form-group">
                          <label>Kabupaten</label>
                          <input type="text" class="form-control" name="kota_kab" value="<?php echo set_value('kota_kab') ?>" required/>
                          <?php echo form_error('kota_kab'); ?>
                      </div>
                      <div class="form-group">
                          <label>Provinsi</label>
                          <select class="form-control" type="text" name="provinsi" required>
                              <!-- <option><?php echo set_value('provinsi') ?></option> -->
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
                      <div class="form-group">
                          <label>Alamat Lengkap</label>
                          <div>
                              <textarea class="form-control" name="alamatLengkap" rows="5" required><?php echo set_value('alamatLengkap') ?></textarea>
                              <?php echo form_error('alamatLengkap'); ?>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Kode Pos</label>
                          <input type="number" class="form-control" name="kodePos" value="<?php echo set_value('kodePos') ?>" required/>
                          <?php echo form_error('kodePos'); ?>
                      </div>

                      <div>
                        <label>Gambar</label>
                        <div>
                          <input class="form-control" type="file" name="userfile" required>
                          <span><i>Format file : JPG/PNG | Maksimal Upload : 10 Mb</i></span>
                          <?php echo form_error('userfile'); ?>

                      </div>
                      
                      </div>
                      
                          
                    </fieldset>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                    <fieldset>
                       <?php echo anchor('webbackend/C_dataOperator/lihatDataOperator','K E M B A L I',array('class'=>'btn btn-round btn-info' ));?>
                    
                          <input type="submit" name="submit" class="btn btn-round btn-success" value="S I M P A N"/>
                    </fieldset>
                  </div>
                </div>
              </div>
          </div>
          </form>
          <!-- <?php echo form_close(); ?> -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©Farhan Sutrisno All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

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
  <script src="<?php echo base_url() ?>admin/js/form-validation.js"></script>
  <script src="<?php echo base_url() ?>admin/js/bt-maxLength.js"></script>
  <!-- End custom js for this page-->
<!-- <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bd9%2f1qnbRUEVCVZX4IV0M5OaagmDC9xsepkK5hTLXpERDD8TrtJTWm0zcV8%2fw8Bo1%2fdc0i%2flxQYMINzyz8b1eLBCBLpqGjHWbErwHMhSNKiAJCGszynE9YkG8NHcHRxQ1jwpwxZIzS8L%2fMTjMHwpldaKnjciA%2fhvOrKk1Fzzkub2sg2tTtj796sIzcH6mm1DOXvDtCyo8h2p%2f1owNmB1ECpI9ViW8Cg3oo%2fBEpXGASLHU8CQL2kPOgiAPWCrmFdL8%2bklJdp9XZsUQZYQLTt%2fkX4v840V8lCkn4yItrMroeG7%2fSdghqboIPnfn1E%2fkkK1t%2fu8ThWoxLWkGcwA1VfTfVKAKnhXmDKXlaB4brppugOypwm%2bZ06%2bsfR%2bUbccHipHHR1rT0RZxzpDka63wnX%2fEivA00t4UVN90FRZyokx9jt4%2fOl9pO7VvRg9tRQrcccUw4mg%2f3tXoqsJXzVdVaQys%2fG4PR5sRiiR6Rw%2bDyLgNLcT1OUSkj9R6s4Q%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script> -->

<!-- script buat date picker-->
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
</body>
</html>