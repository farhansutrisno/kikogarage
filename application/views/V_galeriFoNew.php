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


    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/main2.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/font-awesome.min.css">


     <style type="text/css">
    	/*.nav-link{
    		color: #FFFFFF !important;
    	}*/
    	.form-control{
    		height: 35px !important;
    		font-size: 14px !important;
    	}

    	.col-md-3 {
    		max-width: 100% !important;
    	}
    </style>

  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew"><span>Kiko</span> <span style="color: #fdee00">Good</span> Garage</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew" class="nav-link">Beranda</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/CarWash') ?>" class="nav-link">Cars Wash</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Interior') ?>" class="nav-link">Interior</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Eksterior') ?>" class="nav-link">Eksterior</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Coating') ?>" class="nav-link">Coating</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/datareservasi') ?>" class="nav-link">Data Reservasi</a></li>
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
			                 <!-- <button type="button" class="btn btn-primary btn-lg marleft20" data-dismiss="modal">Close</button> -->
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

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url() ?>images/car-2.jpg'); height: 200px !important;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Galeri</span></p>
            <h1 class="mb-3 bread">Galeri</h1>
          </div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section ftco-car-details">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<!-- <span class="subheading">What we offer</span> -->
            <h2 class="mb-2" align="left">Koleksi Video Layanan Kami</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">

    					<?php foreach ($video as $key) { ?>

    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end");">
		    						<video controls loop="true" width="300px" height="300px">
				                      	<source src="<?php echo base_url().'gambar_proyek/'.$key->gambar ?>" type="video/mp4" />
				                    </video>
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#"><?php echo $key->judulGaleri; ?></a></h2>
		    						
		    					</div>
		    				</div>
    					</div>

    					<?php } ?> 

    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="padding-top-20 padding-bottom-20" style="margin-top: -70px !important;">
      
      <div class="gallery-page-sec"> 
        <div class="container">
        	<div class="row justify-content-center">
	          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
	          	<!-- <span class="subheading">What we offer</span> -->
	            <h2 class="mb-2" align="left">Koleksi Foto Layanan Kami</h2>
	          </div>
	        </div>

          <div class="row">   
            <?php foreach ($galeri as $key) { ?>
            <div class="gallery-area">            
              <div class="gallery-container">  
                  
                  <div class="col-xs-6 col-sm-4 col-md-3 ">
                    <div class="gallery-item gallery">
                      <h2 style="margin: 0 0 20px; font-weight: 600; font-family: 'Poppins' sans-serif; color: #083180; font-size: 18px; text-align: justify;"><?php echo $key->judulGaleri; ?></h2>
                      <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" width="200px" alt="" />
                      <div class="project-project-gallery-overlay">
                        <div class="project-gallery-overlay-text">
                          <span class="gallery-button">
                            <a href="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" width="200px" hright="300px" class="gallery-photo"><i class="fa fa-image"></i></a>
                          </span>
                        </div>
                      </div>
                    </div>                
                  </div>    
                   
              </div>          
            </div>  
            <?php } ?>
            
          </div>
            <?php echo $pag; ?>
        </div>
      </div>
     
    </section>

   
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
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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

  <script type="text/javascript">
        $(document).ready(function ($) {
            $('.gallery').magnificPopup({
                type: 'image',
  
                // To invoke the popup
                // using the 'a' tag
                delegate: 'a',
  
                // Enable the gallery
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
    
  </body>
</html>