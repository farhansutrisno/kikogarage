<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kiko Good Garage</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>admin//vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin//vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin//vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link href="<?php echo base_url() ?>assetsAdmin/css/icons.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin/vendors/css/vendor.bundle.addons.css">
  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg" />
  <link rel="stylesheet" href="<?php echo base_url() ?>admin//css/style.css">
  <link rel="stylesheet" href="<?php echo base_url().'assetsChart/css/morris.css'?>">
  <!-- endinject -->
  <!-- ini script grafik highchar -->
  <script src="<?php echo base_url() ?>chart/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url() ?>chart/js/jquery.mCustomScrollbar.js"></script>
  <script src="<?php echo base_url() ?>chart/js/highcharts.js"></script>

  <script>
    var chart;
    var getColor = {
      'Deep_Sky_Blue':'#00BFFF',
      'orange': '#F96B1C',
      'green': '#FFD700',
      'blue': '#219FF4',
      'darkblue': '#3B62CC',
      'light': '#CACADD',
      'Dark_Orchid':'#9932CC',
      'white': '#FFFFFF',
      'tosca_blue' : '#00fff0',
      'Chartreuse':'#7FFF00',
      'Chocolate':'#D2691E',
      'red' : '#FF0000',
      'pink' : '#FFC0CB',
      'dark': '#262932'
    };
  </script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
         <a class="navbar-brand" href="#">
         
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
             <!--  <a class="dropdown-item mt-2">
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
              <span class="menu-title">Data Reservasi</span>
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
                    echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";

                    date_default_timezone_set('Asia/Jakarta');
                    $jam=date("H:i:s");
                    echo "| Pukul : <b>". $jam." "."</b>";

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
          <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body" align="center">
                  <h3 class="card-title mb-0">FILTER PER-<?php echo $tahuncurrent ?></h3><br><br>

                  <form action="<?php echo base_url().'webbackend/C_dataProduk/grafikProduk'?>" method="POST">
                      <div class="row">
                        <select class="form-control" name="tahun" style="width: 100px !important">  
                            <option value="">Tahun</option>                 
                           <?php foreach($tahun as $r) { ?>
                              <option value="<?php echo $r->tanggal;?>" <?php if($tahuncurrent == $r->tanggal) echo 'selected';?>><?php echo $r->tanggal;?></option>
                            <?php } ?>
                        </select>
                        &nbsp;&nbsp;
                        <input type="submit" name="submit" class="btn btn-round btn-success" value="Filter" >
                      </div>
                  </form>
                  
                </div>
              </div>
            </div>
          <div class="row">
            

            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title mb-0">JUMLAH LAYANAN TERSEDIA</h3>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                      <div class="d-flex">
                         <h2 class="mb-0"><?php echo $jml_produk[0]->jml_produk; ?></h2> 
                         <!-- <h2 class="mb-0"><?php echo $jml_produk; ?></h2> -->
                      </div>
                    </div>
                    <div class="d-inline-block">
                      <div class="bg-success px-2 rounded">
                        <i class="menu-icon icon-briefcase text-white icon-lg"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title mb-0">JUMLAH PESAN MASUK</h3>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                      <div class="d-flex">
                        <h2 class="mb-0"><?php echo $jml_pesan[0]->jml_pesan; ?></h2>
                      </div>
                    </div>
                    <div class="d-inline-block">
                      <div class="bg-success px-2 rounded">
                        <i class="menu-icon icon-briefcase text-white icon-lg"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title mb-0">JUMLAH RESERVASI</h3>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                      <div class="d-flex">
                        <h2 class="mb-0"><?php echo $jml_penjualan[0]->jml_penjualan; ?></h2>
                      </div>
                    </div>
                    <div class="d-inline-block">
                      <div class="bg-success px-2 rounded">
                        <i class="menu-icon icon-basket-loaded text-white icon-lg"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                      <div class="chart" id="pieChart3" style="height: 350px;margin-bottom: 30px"></div>
                      <script type="text/javascript">
                      chart = new Highcharts.Chart({
                        chart: {
                          renderTo: 'pieChart3',
                          plotShadow: false,
                          backgroundColor: 'transparent'
                        },
                        title: {
                          text:'<h3>JUMLAH LAYANAN KIKO BERDASARKAN KATEGORI</h3>'
                        },
                        tooltip: {
                          backgroundColor: getColor['tosca_blue'],
                          borderColor: 'transparent',
                          borderRadius: 7,
                          borderWidth: 0,
                          style: {
                            color: getColor['dark'],
                            fontSize: '13px'  
                          }
                        },
                        plotOptions: {
                          pie: {
                            cursor: 'pointer',
                            dataLabels: {enabled: true},
                            borderWidth: 0,
                            showInLegend: true
                          }
                        },
                        legend: {
                          itemMarginTop: 20,
                          itemHoverStyle: {color: getColor['white']}
                        },
                        credits: {enabled: false},
                        series: [{
                          type: 'pie',
                          name: 'Jumlah : ',
                          innerSize: '50%',
                          size: '80%',
                          data: [
                            {
                              name: 'Cars Wash',
                              y: <?php echo $Cars_Wash ?>,
                              color: getColor['Dark_Orchid'],
                            }, {
                              name: 'Coating',
                              y: <?php echo $Coating ?>,
                              color: getColor['yellow'],
                            }
                          ]
                        }]
                      });
                    </script>
                      
                </div>
              </div>
            </div>

            <div class="col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                      <div class="chart" id="pieChart2" style="height: 350px;margin-bottom: 30px"></div>
                        <script type="text/javascript">
                        chart = new Highcharts.Chart({
                          chart: {
                            renderTo: 'pieChart2',
                            plotShadow: false,
                            backgroundColor: 'transparent'
                          },
                          title: {
                            text:'<h3>JUMLAH RESERVASI BERDASARKAN STATUS RESERVASI</h3>'
                          },
                          tooltip: {
                            backgroundColor: getColor['tosca_blue'],
                            borderColor: 'transparent',
                            borderRadius: 7,
                            borderWidth: 0,
                            style: {
                              color: getColor['dark'],
                              fontSize: '13px'  
                            }
                          },
                          plotOptions: {
                            pie: {
                              cursor: 'pointer',
                              dataLabels: {enabled: true},
                              borderWidth: 0,
                              showInLegend: true
                            }
                          },
                          legend: {
                            itemMarginTop: 20,
                            itemHoverStyle: {color: getColor['white']}
                          },
                          credits: {enabled: false},
                          series: [{
                            type: 'pie',
                            name: 'Jumlah : ',
                            innerSize: '50%',
                            size: '80%',

                            data: [
                              {
                                name: 'Waiting List',
                                y: <?php echo $waitinglist ?>,
                                color: getColor['Deep_Sky_Blue'],
                              }, {
                                name: 'Finish',
                                y: <?php echo $selesai ?>,
                                color: getColor['Chartreuse']
                              }
                            ]

                          }]
                        });
                      </script>
                      
                </div>
              </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                      <div class="chart" id="barChart5" style="height: 350px;margin-bottom: 30px"></div>
                      <script type="text/javascript">
                      $('#barChart5').highcharts({
                chart: {
                  type: 'column',
                  backgroundColor: 'transparent'
                },
                    title: {
                      text: '<h3>JUMLAH RESERVASI JASA BERDASARKAN KATEGORI</h3>'
                    },
                xAxis: {
                  categories: ['Cars Wash', 'Coating'],
                  title: {
                    text: null
                  }
                },
                yAxis: {
                  min: 0,
                  title: {
                    text: 'Jumlah Reservasi',
                    align: 'high'
                  },
                  labels: {
                    overflow: 'justify'
                  }
                },
                plotOptions: {
                  bar: {
                    dataLabels: {
                      enabled: true
                    }
                  }
                },
                legend: {enabled: false},
                credits: {enabled: false},
                tooltip: {
                  backgroundColor: getColor['tosca_blue'],
                  borderColor: 'transparent',
                  borderRadius: 7,
                  borderWidth: 0,
                  style: {
                    color: getColor['dark']
                  }
                },
                series: [{
                  name: 'Jumlah :',
                  data: [<?php echo $Cars_Wash1 ?>,<?php echo $Coating1 ?>],
                  color: getColor['Dark_Orchid']
                }]
              });
                    </script>
                      
                </div>
              </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                      <div class="chart" id="barChart6" style="height: 350px;margin-bottom: 30px"></div>
                      <script type="text/javascript">
                      $('#barChart6').highcharts({
                chart: {
                  type: 'column',
                  backgroundColor: 'transparent'
                },
                    title: {
                      text: '<h3>JUMLAH RESERVASI JASA BERDASARKAN JENIS BOOKING</h3>'
                    },
                xAxis: {
                  categories: ['Antar Jemput', 'Langsung'],
                  title: {
                    text: null
                  }
                },
                yAxis: {
                  min: 0,
                  title: {
                    text: 'Jumlah Reservasi',
                    align: 'high'
                  },
                  labels: {
                    overflow: 'justify'
                  }
                },
                plotOptions: {
                  bar: {
                    dataLabels: {
                      enabled: true
                    }
                  }
                },
                legend: {enabled: false},
                credits: {enabled: false},
                tooltip: {
                  backgroundColor: getColor['tosca_blue'],
                  borderColor: 'transparent',
                  borderRadius: 7,
                  borderWidth: 0,
                  style: {
                    color: getColor['dark']
                  }
                },
                series: [{
                  name: 'Jumlah :',
                  data: [<?php echo $antarjemput ?>,<?php echo $langsung ?>],
                  color: getColor['Dark_Orchid']
                }]
              });
                    </script>
                      
                </div>
              </div>
            </div>

            <div class="col-xl-12 col-md-6 col-12">
              <div class="card">
                <div class="card-body">

                    <div class="chart" id="barChart2" style="height: 500px;margin-bottom: 30px"></div>
                    <script type="text/javascript">
                    $('#barChart2').highcharts({
                      chart: {
                          type: 'line'
                      },
                      title: {
                          text: 'JUMLAH PENDAPATAN PERBULAN'
                      },

                      subtitle: {
                          text: 'Kiko Good Garage'
                      },
                      xAxis: {
                              categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
                          },
                      yAxis: {
                          title: {
                              text: 'Jumlah Pendapatan'
                          }
                      },
                      legend: {
                          layout: 'horizontal',
                          align: 'right',
                          verticalAlign: 'middle'
                      },

                      plotOptions: {
                          series: {
                                      label: {
                                          connectorAllowed: false
                                      }
                                  }
                      },

                      series: [{
                          name: 'Pendapatan = Rp.',
                          data: [<?php echo $januari ?>,<?php echo $februari ?>,<?php echo $maret ?>, <?php echo $april ?>,<?php echo $mei ?>,<?php echo $juni ?>,<?php echo $juli ?>,<?php echo $agustus ?>,<?php echo $september ?>,<?php echo $oktober ?>,<?php echo $november ?>, <?php echo $desember ?>]
                      }],

                      responsive: {
                          rules: [{
                              condition: {
                                  maxWidth: 400
                              },
                              chartOptions: {
                                  legend: {
                                      layout: 'horizontal',
                                      align: 'center',
                                      verticalAlign: 'bottom'
                                  }
                              }
                          }]
                      }
                    });
                  </script>  
                      
                </div>
              </div>
            </div>

          </div>
         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <!-- plugins:js -->
  <script src="<?php echo base_url() ?>admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url() ?>admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <script src="<?php echo base_url() ?>admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url() ?>admin/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url() ?>admin/js/misc.js"></script>
  <script src="<?php echo base_url() ?>admin/js/settings.js"></script>
  <script src="<?php echo base_url() ?>admin/js/todolist.js"></script>

  <script src="<?php echo base_url() ?>admin/js/dashboard.js"></script>
   <script src="<?php echo base_url() ?>admin/js/data-table.js"></script>
  <!-- Custom js for this page-->
  <!-- <script src="<?php echo base_url().'assetsChart/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assetsChart/js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assetsChart/js/morris.min.js'?>"></script>
    <!-- <script src="<?php echo base_url() ?>admin/js/morris.js"></script>
 -->  <!-- End custom js for this page-->

 <!-- <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bd9%2f1qnbRUEVDaLDOLvcbvWBm58jdhbN5LM041ifJBZ4HHvIzRSXMUkU4lPIh%2fYqiYc7wtqmtMWoVr1kId0HDTGeZ%2bwQlH%2f%2btg9ebKzUxo5T%2b%2bUN33UTMMTi3eGi571v2PevtQzTdiYpJVhTtVEGUZXMKXF300l5O8y2VFuocYUdTimwf0tcjekcsd0TAIp%2fx2G5jr67Au82DHajA2TlsBD3vQpEs6V7vc%2fK5PMmaV4mxJK6Qdbjc8X66VRhcIdG0rPLtCnwGAfXHnH0q7lDgPG2%2bel3wwNlE8NuCC%2bSmu2SxOiUx7A%2fkj1m9sM6a7R9yRzGzMEzGh3%2fZ5h3fPhYwybJgtfoY8sfQS9qABhgp%2bKXOhY1eGm056ufcOuaT9yTsNAy03FCk1yKUbUYcdljSxWQlc%2ftnBOBZKowLu%2ff7SENG%2bUzAmQLVINArEORbgm66kyE03E0UOkllDZopVlWKTRVEGKpAY%2bhlJ" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script> -->
</body>
</html>


          