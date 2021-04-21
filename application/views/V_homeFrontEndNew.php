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

    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-datepicker.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.timepicker.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/bootstrap-datepicker.min.css">
	<script src="<?php echo base_url() ?>dist/js/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo base_url() ?>dist/locales/bootstrap-datepicker.id.min.js"></script>

    
    <link rel="stylesheet" href="<?php echo base_url() ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">

    <style type="text/css">
    	/*.nav-link{
    		color: #FFFFFF !important;
    	}*/
    	.form-control{
    		height: 35px !important;
    		font-size: 14px !important;
    	}
    </style>
  </head>
  <body>
    	
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	  	
        <div class="col-md-12">
        	<?php echo $this->session->flashdata('msg1'); ?>
        	<?php echo $this->session->flashdata('msg3'); ?>
        	<?php echo $this->session->flashdata('akun1'); ?>
        	<?php echo $this->session->flashdata('akun2'); ?>

        	 <div class="container">
        	 	<div class="row">
        	 		<a class="navbar-brand" href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew"><span>Kiko</span> <span style="color: #fdee00">Good</span> Garage</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>

		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto">
		          <li class="nav-item active"><a href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew" class="nav-link">Beranda</a></li>
		          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/CarWash') ?>" class="nav-link">Cars Wash</a></li>
		          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Interior') ?>" class="nav-link">Interior</a></li>
		          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Eksterior') ?>" class="nav-link">Eksterior</a></li>
		          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Coating') ?>" class="nav-link">Coating</a></li>
		          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/datareservasi') ?>" class="nav-link">Data Reservasi</a></li>
		          
		          <?php if ($this->session->userdata('nama') AND $this->session->userdata('pass')) { ?>
		          	
		          	<li class="nav-item" style="cursor: pointer;">
	                 <!--  <a href="#" class="nav-link"><?=$this->session->userdata('namaLengkap3')?></a>
	                  <ul class="dropdown dropdown-menu">
	                      <li><a href="<?php echo base_url() ?>C_transaksiProduk/allTransaksiNew" class="dropdown-item">All Reservasi</a></li>
	                      <li><a href="<?=base_url('C_dataAkun/logout')?>" class="dropdown-item">Logout</a></li>
	                  </ul> -->
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
			                <textarea cols="10" rows="3" name="alamatLengkap" class="form-control" placeholder="Alamat Lengkap" required></textarea>
			              </div>
			               
			              <div class="form-group">
			                 <input class="form-control" type="file" name="userfile" required>
                    		<span style="font-size: 14px !important;"><i>Format file : JPG/PNG | Maksimal Upload : 10 Mb</i></span>
			              </div>

			          </div>

		           </div>
		           <div class="modal-footer justify-content-center">
		           			<!-- <button type="button" class="btn btn-primary btn-lg marleft20" data-dismiss="modal">Close</button> -->
			                <button type="button" onclick="saveregister();" class="btn btn-info btn-lg marleft20 active">Submit</button>
		           </div>
		           </form>
		         </div>


	        </div>

	     </div>
	  </div>

    <!-- END nav -->

    <div class="hero-wrap ftco-degree-bg" style="background-image: url('<?php echo base_url() ?>images/bg_1.jpg');" data-stellar-background-ratio="0.5">

      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-2" style="font-size: 40px;">Premium Carwash & Auto Detailing</h1>
	            <p style="font-size: 18px;">Rawat dan Percantik Kendaraan Anda dan Percayakan Kepada Kami</p>
	            <p class="mb-0"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/CarWash') ?>" class="btn btn-success py-3 px-4">Reservasi Sekarang</a></p>
	           
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						
	  					</div>
	  					<div class="col-md-8 d-flex align-items-right">
	  						<div class="services-wrap rounded-right w-100">
	  							<?php if ($this->session->userdata('nama') AND $this->session->userdata('pass')) { ?>
	  							<h4 class="heading-section mb-2">Selamat datang <?=$this->session->userdata('namaLengkap3')?> </h4>
	  							<h3 class="heading-section mb-4">Reservasi Kiko Good Garage</h3>
	  							<?php }?>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Biaya Jemput Murah</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Pembayaran Ditempat</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Cars Wash Terpercaya</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section> -->


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<!-- <span class="subheading">What we offer</span> -->
            <h2 class="mb-2">Produk Kiko Good Garage</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">

    					<?php foreach ($produk as $key) { ?>

    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#"><?php echo $key->namaProduk; ?></a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat"><?php echo $key->kategori; ?></span>
			    						<p class="price ml-auto">Rp. <?php echo number_format($key->hargaPenjualan,0,",","."); ?></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block">
		    							<?php if ($this->session->userdata('nama') AND $this->session->userdata('pass')) { ?>

		    								<form method="post" action="<?php echo base_url()?>C_produkPembeli/prosesTambah" enctype="multipart/form-data">

						                         <?php 
							                         $kode = $this->session->userdata('kode'); 
							                         $subtotal = $key->hargaPenjualan * 1 ;
						                         ?>

						                        <input type="hidden" name="subtotal" value="<?php echo $subtotal; ?>" /> 
						                        <input type="hidden" name="idAkun" value="<?php echo $kode; ?>" /> 
						                        <input type="hidden" name="kdProduk" value="<?php echo $key->kdProduk; ?>" />
						                        <input type="hidden" name="namaProduk" value="<?php echo $key->namaProduk; ?>" />
						                        <input type="hidden" name="harga" value="<?php echo $key->hargaPenjualan; ?>" />
						                        <input type="hidden" name="gambar" value="<?php echo $key->gambar; ?>" />
						                        <!-- <input type="hidden" name="berat" value="<?php echo $key->berat; ?>" /> -->
						                        <input type="hidden" name="qty" value="1" />
						                        <!-- <button type="submit" name="submit" class="cart-btn"><i class="icon-basket-loaded"></i></button> -->
						                        <input type="submit" name="submit" value="Booking" class="btn btn-primary py-2 mr-1" style="width: 30% !important"> 
						                        <a href="<?php echo base_url().'C_produkPembeli/lihatDetailProdukNew/'.$key->kdProduk?>" class="btn btn-success py-2 ml-1" style="width: 30% !important">Detail</a>
					                        </form>

		    							<?php }else{ ?>
		    								<input type="submit" name="submit" data-toggle="modal" data-target="#loginmodel" value="Booking" class="btn btn-primary py-2 mr-1" style="width: 30% !important"> 
		    								<a href="<?php echo base_url().'C_produkPembeli/lihatDetailProdukNew/'.$key->kdProduk?>" class="btn btn-success py-2 ml-1" style="width: 30% !important">Detail</a>
		    							<?php } ?> 
		    						</p>
		    					</div>
		    				</div>
    					</div>

    					<?php } ?> 

    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url() ?>gambar_proyek/kiko/Wa7.jpeg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">Tentang Kami</span>
	            <h2 class="mb-4" style="color: #FFFFFF !important;">Welcome to Kiko Good Garage</h2>

	            <p>kikogarage didirikan pada tanggal 1 september 2020. Dinamakan kikogarage karena nama owner ‘frangky dan eko’. Jadi dikikogarage ini merupakan usaha carwash gabungan dari dua orang entrepreneur dimana didepan terdapat café dan belakangnya garasi untuk carwash dan coating otomotif.</p>
	            <p><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatAboutUsFoNew" class="btn btn-primary py-3 px-4">Detail</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		
		<br>

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
		var noTelepon 	= $('#noTelepon').val();
		var password 	= $('#password').val();
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
		 //      	  dataType: "text",
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

	$( function() {

	    $( "#date" ).datepicker({
	      autoclose:true,
	      todayHighlight:true,
	      format:'yyyy-mm-dd',
	      language: 'id',
	    });

	  } );

	</script>
	

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  <!-- <script src="<?php echo base_url() ?>js/jquery/jquery.min.js"></script> -->
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