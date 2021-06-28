<?php
class C_transaksiProduk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->library('pagination');
		$this->load->library('pdf');
		$this->load->model('mod_dataPembelian');
		date_default_timezone_set('Asia/Jakarta');
	}

	//==================================================================================
	//fix dipakai
	public function inputDataReservasi(){
		
		if($this->input->post("submit")){

			$noPlat			= $this->input->post('noPlat');
			$jenisBooking	= $this->input->post('jenisBooking');
			$idAkun 		= $this->input->post('idAkun');
			$totalBayar		= $this->input->post('totalBayar');
			$tglReservasi	= $this->input->post('tglReservasi');
			$jamreservasi	= $this->input->post('jamreservasi');

			$reservasiqueue = $this->mod_dataPembelian->selectQueue();

			if (!empty($reservasiqueue->statusPembayaran) && $reservasiqueue->statusPembayaran != 'Selesai') {
				$this->session->set_flashdata('cekjadwal2', 
		                '<div class="alert alert-danger" style="margin-bottom: 20px !important">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>Reservasi sebelumnya harus selesai terlebih dahulu !</h7>
		                </div>');

				$this->session->set_userdata('noPlat',$noPlat);
				$this->session->set_userdata('jenisBooking',$jenisBooking);
				$this->session->set_userdata('tglReservasi',$tglReservasi);
				$this->session->set_userdata('jamreservasi',$jamreservasi);
			
				redirect('C_produkPembeli/datareservasi');
			}

			$cekjadwal = $this->mod_dataPembelian->cekjadwalreservasi($tglReservasi)->result_array();

			foreach ($cekjadwal as $key) {
			
				if($jamreservasi == $key['tglPembayaran']){

					$this->session->set_flashdata('cekjadwal1', 
		                '<div class="alert alert-danger" style="margin-bottom: 20px !important">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>Jadwal Sudah Penuh !</h7>
		                </div>');

					$this->session->set_userdata('noPlat',$noPlat);
					$this->session->set_userdata('jenisBooking',$jenisBooking);
					$this->session->set_userdata('tglReservasi',$tglReservasi);
					$this->session->set_userdata('jamreservasi',$jamreservasi);
				
					redirect('C_produkPembeli/datareservasi');
				}
			}

			$noPlat = $noPlat;
			$id   = random_string('numeric', 3);
			$booking  = $jenisBooking;

			$cekAntrian = $this->mod_dataPembelian->cekNoAntrian();

			$currentDate = date("Y-m-d");

			if (empty($cekAntrian)) {

				if ($booking == 'Langsung') {
					$noAntrian1 = 1;
					$noAntrian = 'LGSG-'.$noAntrian1;
				}else{
					$noAntrian1 = 1;
					$noAntrian = 'JEMPUT-'.$noAntrian1;
				}

			}else{

				if ($booking == 'Langsung') {
					$cekAntrian2 = $this->mod_dataPembelian->cekNoAntrian2();

					if (!empty($cekAntrian2)) {
						if ($tglReservasi == $cekAntrian2->tglTransaksi) {

							if ($jamreservasi != $cekAntrian2->tglPembayaran) {
								$explode_data = explode('LGSG-',$cekAntrian2->noAntrian);

								$noAntrian1 = $explode_data[1] + 1;
								$noAntrian = 'LGSG-'.$noAntrian1;
							}
							else{
								$this->session->set_flashdata('notif1', 
					                '<div class="alert alert-danger" style="margin-bottom: 20px !important">    
					                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					                <h7>Jam Reservasi Sudah Penuh! </h7>
					                   
					                </div>');
								redirect('C_produkPembeli/datareservasi');
							}

						}
						else{

							$noAntrian1 = 1;
							$noAntrian = 'LGSG-'.$noAntrian1;

						}
					}else{

						$noAntrian1 = 1;
						$noAntrian = 'LGSG-'.$noAntrian1;

					}
					
				}else{
					
					$cekAntrian3 = $this->mod_dataPembelian->cekNoAntrian3();
					if (!empty($cekAntrian3)) {
						if ($tglReservasi == $cekAntrian3->tglTransaksi) {

							if ($jamreservasi != $cekAntrian3->tglPembayaran) {

								$explode_data = explode('JEMPUT-',$cekAntrian3->noAntrian);

								$noAntrian1 = $explode_data[1] + 1;
								$noAntrian = 'JEMPUT-'.$noAntrian1;

							}
							else{
								$this->session->set_flashdata('notif1', 
					                '<div class="alert alert-danger" style="margin-bottom: 20px !important">    
					                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					                <h7>Jam Reservasi Sudah Penuh! </h7>
					                   
					                </div>');
								redirect('C_produkPembeli/datareservasi');
							}

						}
						else{

							$noAntrian1 = 1;
							$noAntrian = 'JEMPUT-'.$noAntrian1;

						}
					}else{

						$noAntrian1 = 1;
						$noAntrian = 'JEMPUT-'.$noAntrian1;

					}

				}

			}


			$cekTukang = $this->mod_dataPembelian->cekTukang();
			$cekTukang2 = $this->mod_dataPembelian->cekTukang2();

			if (empty($cekTukang->KdTukang)) {
				$kodeTukang = $cekTukang2->KdTukang;
			}else{
				$kodeTukang = $cekTukang->KdTukang;
			}

			$KdTukang = $kodeTukang;
			
			$order = $this->mod_dataPembelian->inputTransaksi($idAkun)->result_array();

			foreach ($order as $key) {

				$dataTransaksi = array(
									'idAkun'			=> $idAkun,
									'kdProduk'			=> $key['kdProduk'],
									'jml_produk'		=> $key['jml_produk'],
									'subtotal'			=> $key['subtotal'],
									'totalBayar'		=> $totalBayar,
									'KdTukang'			=> $KdTukang,
									'noAntrian'			=> $noAntrian,
									'kodeUnik'			=> $id,
									'tglTransaksi'		=> $tglReservasi,
									'tglPembayaran'		=> $jamreservasi,
									'noPlat'			=> $noPlat,
									'jenisBooking'		=> $booking,
									'statusPembayaran' 	=> 'Antrian');
				
				$this->mod_dataPembelian->inputDataOrder($dataTransaksi);
			}

			$dataHistory = array(
									'idAkun'			=> $idAkun,
									'kodeUnik'			=> $id,
									'createDate'		=> date("Y-m-d H:i:s"),
									'status' 			=> 'Antrian'
							);
			$this->mod_dataPembelian->inputDataHistory($dataHistory);

			// $this->mod_dataPembelian->statusTukang($kodeTukang);
			
			$data["produk"] 		= $this->mod_dataPembelian->dataProduk($id)->result();
			$data["history"] 		= $this->mod_dataPembelian->lihatDataHistory($id)->result();

			$data["row"] 		= $this->mod_dataPembelian->lihatTransaksi($id)->result();
			
			$data["profil"] 		= $this->mod_dataPembelian->lihatTransaksi2($idAkun)->result();

			$jml 			 		= $this->mod_dataPembelian->jumlahBayar2($id);
			$data['totalBelanja2'] 	= $jml->jumlahBayar2;

			$this->mod_dataPembelian->deleteProduk($idAkun);

			$this->session->unset_userdata('noPlat');
	        $this->session->unset_userdata('jenisBooking');
	        $this->session->unset_userdata('tglReservasi');
	        $this->session->unset_userdata('jamreservasi');

			$this->session->set_flashdata('test1', 
	                    '<div class="alert alert-info" style="margin-bottom: 20px !important">    
	                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                    <h7>Berhasil Reservasi</h7>
	                    </div>');

			$this->load->view('V_TransaksiNew',$data);

			}else{
				
				redirect('C_produkPembeli/datareservasi');
			}

	}

	public function lihatTransaksiNew(){
		$id 			= $this->uri->segment(3);
		$KdTukang 		= $this->uri->segment(4);
		$kode 			= $this->session->userdata('kode');

		$data["produk"] 		= $this->mod_dataPembelian->dataProduk($id)->result();
		$data["history"] 		= $this->mod_dataPembelian->lihatDataHistory($id)->result();
		
		if (!empty($KdTukang)) {
			$data["row"] 		= $this->mod_dataPembelian->lihatTransaksi($id)->result();
		}else{
			$data["row"] 		= $this->mod_dataPembelian->lihatTransaksi3($id)->result();
		}
		
		$data["profil"] = $this->mod_dataPembelian->lihatTransaksi2($kode)->result();
		$jml 			 		= $this->mod_dataPembelian->jumlahBayar2($id);
		$data['totalBelanja2'] 	= $jml->jumlahBayar2;

		$this->load->view('V_TransaksiNew',$data);
	}

	public function allTransaksiNew(){

		//konfigurasi pagination
        $config['base_url'] = site_url('C_transaksiProduk/allTransaksiNew'); //site url
        $id = $this->session->userdata('kode');
        $config['total_rows'] = $this->mod_dataPembelian->countpencarian($id)->result()[0]->data;

        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
                 
        $data['pag'] = $this->pagination->create_links();
		$data['pembayaran'] = $this->mod_dataPembelian->sessionTransaksi($config["per_page"], $data['page'])->result();

		$this->load->view('V_allReservasiNew',$data);
	}

	public function exportpdf(){
		$dateDownload = date("d-M-Y H:i:s");
		$id 			= $this->uri->segment(3);
		$KdTukang 		= $this->uri->segment(4);

		// $html_content = '<h3 align="center">DATA RESERVASI KIKO GOOD GARAGE</h3>';
		$html_content = $this->mod_dataPembelian->fetch_single_details($id,$KdTukang);

		// echo $html_content;die;
		
		$this->pdf->loadHtml($html_content);
		$this->pdf->render();
		$this->pdf->stream("Data Reservasi Kiko Good garage.pdf".' - '.$dateDownload, array("Attachment"=>1));

	}

	//============================================================================================================================
	// function tidak dipakai
	
	public function inputOngkir(){

		$this->form_validation->set_rules('noPlat','no plat','required');
		$this->form_validation->set_rules('jenisBooking','jenis booking','required');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$this->session->set_flashdata('ongkir2', 
		                '<div class="alert alert-danger">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>Data Kendaraan Harus Diisi Dengan Lengkap !</h7>
		                   
		                </div>');

				redirect('C_dataAkun/inputDataPembelian');

		    }
		    else{

		        $this->session->set_flashdata('ongkir2', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL</h7>
		                    <p>Harap Segera Dibayar </p>
		                </div>');
				$this->mod_dataPembelian->inputOngkir();
				redirect('C_transaksiProduk/inputDataPembayaran');

		    }
		}

		/*if($this->input->post("submit")){
			$this->session->set_flashdata('ongkir1', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL MEMILIH PAKET ONGKIR</h7>
		                    <p>Harap Segera Dibayar </p>
		                </div>');
			$this->mod_dataPembelian->inputOngkir();
			redirect('C_transaksiProduk/inputDataPembayaran');
		}else{
			$this->session->set_flashdata('ongkir2', 
		                '<div class="alert alert-danger">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>Erorr Pembayaran ! </h7>
		                   
		                </div>');
			redirect('C_transaksiProduk/inputDataPembayaran');
		}*/
	}

	public function inputDataPembayaran(){
		$jml 			 		= $this->mod_dataPembelian->jumlahBayar();
		$data['totalBelanja'] 	= $jml->jumlahBayar;
		$data["data"] 			= $this->mod_dataPembelian->inputDataPembayaran()->result();
		$this->load->view('V_inputDataPembayaran',$data);
	}

	public function prosesInputPembayaran(){
		if($this->input->post("submit")){
			$this->session->set_flashdata('pembayaran1', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Harap Segera Dibayar Dan Lanjutkan Transaksi <br>
		                    	Tekan Tombol Lanjutkan Transaksi </p>
		                </div>');
			$this->mod_dataPembelian->inputPembayaran();

			$kodeUnik	= $this->input->post('kodeUnik');
			$jenisBooking	= $this->input->post('jenisBooking');

			redirect('C_transaksiProduk/lihatTransaksi2/'.$kodeUnik.'/'.$jenisBooking);
		}else{
			$this->session->set_flashdata('pembayaran2', 
		                '<div class="alert alert-danger">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>Erorr Pembayaran ! </h7>
		                   
		                </div>');
			redirect('C_transaksiProduk/inputDataPembayaran');
		}
	}

	/*public function inputDataReservasi(){
		if($this->input->post("submit")){

			// $this->session->set_flashdata('pembayaran1', 
		 //                '<div class="alert alert-info ">    
		 //                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		 //                <h7>BERHASIL ! </h7>
		 //                    <p>Harap Segera Dibayar Dan Lanjutkan Transaksi <br>
		 //                    	Tekan Tombol Lanjutkan Transaksi </p>
		 //                </div>');

			// $this->mod_dataPembelian->inputPembayaran();

			// $kodeUnik	= $this->input->post('kodeUnik');

			$noPlat			= $this->input->post('noPlat');
			$jenisBooking	= $this->input->post('jenisBooking');

			redirect('C_transaksiProduk/lihatTransaksi2/'.$noPlat.'/'.$jenisBooking);
		}else{
			// $this->session->set_flashdata('pembayaran2', 
		 //                '<div class="alert alert-danger">    
		 //                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		 //                <h7>Erorr Pembayaran ! </h7>
		                   
		 //                </div>');
			redirect('C_produkPembeli/datareservasi');
		}
	}*/

	

	public function lihatTransaksi(){
		$id 			= $this->uri->segment(3);
		$KdTukang 		= $this->uri->segment(4);
		$kode 			= $this->session->userdata('kode');

		$data["produk"] = $this->mod_dataPembelian->dataProduk($id)->result();
		
		if (!empty($KdTukang)) {
			$data["row"] 		= $this->mod_dataPembelian->lihatTransaksi($id)->result();
		}else{
			$data["row"] 		= $this->mod_dataPembelian->lihatTransaksi3($id)->result();
		}
		
		$data["profil"] = $this->mod_dataPembelian->lihatTransaksi2($kode)->result();
		$jml 			 		= $this->mod_dataPembelian->jumlahBayar2($id);
		$data['totalBelanja2'] 	= $jml->jumlahBayar2;

		$this->load->view('V_Transaksi',$data);
	}

	

	//function di bawah ini tidak dipakai
	/*public function lihatDataTransaksi(){
		$id   = $this->session->userdata('kdPembayaran');
		$kode = $this->session->userdata('kode');
		
		$data["row"] = $this->mod_dataPembelian->lihatData2($id)->result();
		
		$data["profil"] = $this->mod_dataPembelian->lihatData($kode)->result();
		$this->load->view('V_lihatDataTransaksi',$data);
	}*/

	public function lihatTagihan(){
		$data['row'] = $this->mod_dataPembelian->lihatTagihan()->result();
		$this->load->view('lihatTagihan',$data);
	}

	public function ubahAlamat(){
		$kodeUnik 			= $this->uri->segment(3);
		$id 				= $this->uri->segment(4);
		$KdTukang 			= $this->uri->segment(5);

		$data["dataPembeli"] = $this->mod_dataPembelian->ubahAlamat($id)->result();
		$data["kodeUnik"] 	 = array(
								'kodeUnik' => $kodeUnik,
								'KdTukang' => $KdTukang
								);

		$this->load->view('V_ubahAlamat',$data);
	}

	public function prosesUbahAlamat(){
	    $this->form_validation->set_rules('kelurahan','kelurahan','required|min_length[4]');
	    $this->form_validation->set_rules('kecamatan','kecamatan','required|min_length[4]');
	    $this->form_validation->set_rules('kota_kab','kota/kabupaten','required|min_length[4]');
	    $this->form_validation->set_rules('provinsi','provinsi','required|min_length[4]');
	    $this->form_validation->set_rules('alamatLengkap','alamat lengkap','required|min_length[6]');
	    $this->form_validation->set_rules('kodePos','kode pos','required|min_length[4]|numeric');

	    if(isset($_POST['submit'])){

			$kodeUnik 			= $this->input->post('kodeUnik');
			$id 				= $this->input->post('idAkun');
			$KdTukang 			= $this->input->post('KdTukang');

		    if($this->form_validation->run() == false){

		    	$data["dataPembeli"] = $this->mod_dataPembelian->ubahAlamat($id)->result();
				$data["kodeUnik"] 	 = array(
										'kodeUnik' => $kodeUnik,
										'KdTukang' => $KdTukang
										);

				$this->load->view('V_ubahAlamat',$data);

		    }
		    else{
		        
		    	$this->mod_dataPembelian->prosesUpdateAlamat();
	        	$this->session->set_flashdata('ubah1', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                </div>');
				
				redirect('C_transaksiProduk/ubahAlamat/'.$kodeUnik.'/'.$id.'/'.$KdTukang);

		    }
		}	
	
	}

	public function statusTerima(){
		
	        $this->mod_dataPembelian->statusTerima();
	        $this->session->set_flashdata('terima', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Pesanan Sudah Diterima Yah !!</p><br>
			                    <p>Yuk Belanja Lagi...</p>
			                </div>');
				
			redirect('C_transaksiProduk/allTransaksi');
	}

	public function konfirmasiPembayaran(){
	
		//session dibawah ini coba transaksi
		$id 			= $this->uri->segment(3);
		$pembayaran = $this->session->userdata('pembayaran');
		
		$data["pembayaran"] = $this->mod_dataPembelian->konfirmasiPembayaran($pembayaran)->result();

		$this->load->view('V_konfirmasiPembayaran',$data);
	}

	public function prosesKonfirmasiPembayaran(){
		
			$id = $this->input->post('kdPembayaran');;
			
			$config['upload_path']='./gambar_proyek/';
	        $config['allowed_types']='jpg|png|jpeg|gif';
	        $config['max_size'] = 5000000;
	        $this->load->library('upload',$config);
	        $this->upload->do_upload();
	        $data   =  $this->upload->data();

	        $this->mod_dataPembelian->prosesKonfirmasiPembayaran($data['file_name']);

	        $this->session->set_flashdata('konfirmasi1', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil konfirmasi pembayaran</p>
			                </div>');
				
			$stok = $this->mod_dataPembelian->kurangStok($id)->result_array();
			foreach ($stok as $stok1) {
				$sisa = $stok1['stok'] - $stok1['jml_produk'];
				$produk = $stok1['kdProduk'];
				$dataStok = array(
									'stok'	=> $sisa
								);
				$this->mod_dataPembelian->updateStok($dataStok,$produk,$id);
			}
			redirect('C_transaksiProduk/konfirmasiPembayaran');
		
	}

	//kedua ini coba transaksi baru
	public function allTransaksi(){

		//konfigurasi pagination
        $config['base_url'] = site_url('C_transaksiProduk/allTransaksi'); //site url
        $config['total_rows'] = $this->db->count_all('pembelian'); //total row harus di ubah per user count data

        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
                 
        $data['pag'] = $this->pagination->create_links();
		$data['pembayaran'] = $this->mod_dataPembelian->sessionTransaksi($config["per_page"], $data['page'])->result();

		$this->load->view('webbackend/V_allTransaksi',$data);
	}

	

	
}
?>