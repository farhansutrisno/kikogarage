<?php
class C_dataAkun extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table','cart'));
		$this->load->model('mod_dataAkun');
	}

	//================================================================================
	//fix dipakai
	//coba lagi

	public function prosesLogin(){

		$data = $this->mod_dataAkun->login()->result_array();
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$no =0;
		foreach ($data as $key) {

			$namadepan = explode(' ', $key['namaLengkap']);
			
			if($username == $namadepan[0] && $password == $key['password']){
				$no=1;

				$this->session->set_userdata('nama',$key['namaLengkap']);
				$this->session->set_userdata('pass',$key['password']);
				$this->session->set_userdata('namaLengkap3',$key['namaLengkap']);
				$this->session->set_userdata('fotoProfil',$key['foto']);
				$this->session->set_userdata('kode',$key['idAkun']);

				$this->session->set_flashdata('msg1', 
	                '<div class="alert alert-info" style="margin-bottom: 20px !important">    
	                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                <h7>BERHASIL LOGIN ! </h7>
	                </div>');
			
				redirect('C_produkPembeli/lihatProdukNew');
			}
		}
		if ($no==0) {
			$this->session->set_flashdata('msg3', 
		                '<div class="alert alert-danger">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>GAGAL LOGIN ! </h7>
		                <p>Nama depan atau Password Salah </p>
		                </div>');
			redirect('C_produkPembeli/lihatProdukNew');
		}
	}

	public function prosesCreateAkun(){
		$this->form_validation->set_rules('namaLengkap','nama lengkap','required');
	    $this->form_validation->set_rules('password','password','required');
	    $this->form_validation->set_rules('tanggal_lahir','tanggal lahir','required');
	    $this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
	    $this->form_validation->set_rules('alamatLengkap','alamat lengkap','required');

		    if($this->form_validation->run() == false){
		        redirect('C_produkPembeli/lihatProdukNew');
		    }
		    else{
		        
		    	$data = $this->mod_dataAkun->login()->result_array();
				$password = $this->input->post('password');
				$no =0;
				foreach ($data as $key) {
					
					if($password == $key['password']){
						$no=1;

						$this->session->set_flashdata('akun1', 
				                '<div class="alert alert-danger" style="margin-bottom: 20px !important">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>GAGAL REGISTRASI! </h7>
				                    <p>Password Sudah Terpakai</p><br>
				                    <p>Harap Memasukan Password Lain </p>
				                </div>');
						redirect('C_produkPembeli/lihatProdukNew');
					}
				}

				if ($no==0) {
					$config['upload_path']='./gambar_proyek/';
		            $config['allowed_types']='jpg|png|jpeg';
		            $config['max_size'] = 5000000;
		            $this->load->library('upload',$config);
		            $this->upload->do_upload();
		            $data   =  $this->upload->data();

					$this->mod_dataAkun->createAkun($data['file_name'],$password);
					$this->session->set_flashdata('akun2', 
				                '<div class="alert alert-success" style="margin-bottom: 20px !important">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>BERHASIL ! </h7>
				                <p>Silahkan login untuk reservasi</p>
				                </div>');
					redirect('C_produkPembeli/lihatProdukNew');
				}

		    }

	}

	public function logout(){
			$this->session->unset_userdata('nama');
			$this->session->unset_userdata('kode');
			$this->session->unset_userdata('fotoProfil');
			$this->session->unset_userdata('namaLengkap3');
			$this->session->unset_userdata('kodeUnik');
			$this->session->unset_userdata('unik');
			$this->session->unset_userdata('pass');
			$this->session->unset_userdata('pembayaran');

			$this->session->unset_userdata('noPlat');
	        $this->session->unset_userdata('jenisBooking');
	        $this->session->unset_userdata('tglReservasi');
	        $this->session->unset_userdata('jamreservasi');

	        $this->session->sess_destroy();
			
			redirect('C_produkPembeli/lihatProdukNew');
	}


	public function lihatMemberNew(){
		$kode = $this->session->userdata('kode');
		$data["member"] = $this->mod_dataAkun->lihatDataMember($kode)->result();
		$this->load->view('V_lihatMemberNew', $data);
	}

	public function editMemberNew(){
		$kode = $this->session->userdata('kode');
		$data["member"] = $this->mod_dataAkun->lihatDataMember($kode)->result();
		$this->load->view('V_editDataMemberNew',$data);
	}

	public function daftarMember(){
		$kode = $this->session->userdata('kode');
		$data["member"] = $this->mod_dataAkun->lihatDataMember($kode)->result();
		$this->load->view('V_lihatMember', $data);
	}

	public function prosesDaftarMember(){
		
	    $this->form_validation->set_rules('member','member','required');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kode 			= $this->input->post('idAkun');
		        $data["member"] = $this->mod_dataAkun->lihatDataMember($kode)->result();
				$this->load->view('V_lihatMember', $data);

		    }
		    else{
		        
		        $this->mod_dataAkun->prosesDaftarMember();

		        $this->session->set_flashdata('pesanProfil', 
				                '<div class="alert alert-info" style="margin-bottom: 20px !important">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>BERHASIL ! </h7>
				                </div>');
				
				redirect('C_dataAkun/daftarMember');

		    }
		}	
		
	}

	public function prosesUpdateAkun(){

		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
	    $this->form_validation->set_rules('password','password','trim|required|min_length[4]|alpha_dash');
	    $this->form_validation->set_rules('tglLahir','tanggal lahir','required');
	    $this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
	    $this->form_validation->set_rules('alamatLengkap','alamat lengkap','required|min_length[6]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kode = $this->input->post('idAkun');
				$data["member"] = $this->mod_dataAkun->lihatDataMember($kode)->result();
				$this->load->view('V_editDataMemberNew',$data);

		    }
		    else{
		        
		    	$config['upload_path']='./gambar_proyek/';
		        $config['allowed_types']='jpg|png|jpeg';
		        $config['max_size'] = 500000;
		        $this->load->library('upload',$config);
		        $this->upload->do_upload();
		        $data   =  $this->upload->data();

		        $this->mod_dataAkun->prosesUpdateAkun($data['file_name']);

		        $this->session->set_flashdata('pesanProfil', 
				                '<div class="alert alert-success" style="margin-bottom: 20px !important">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>BERHASIL ! </h7>
				                    <p>Berhasil mengupdate data Member</p>
				                </div>');
				
				redirect('C_dataAkun/lihatMemberNew');

		    }
		}	
		
	}

	public function prosesUpdateDataKonsumen(){

		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
	    $this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
	    $this->form_validation->set_rules('alamatLengkap','alamat lengkap','required|min_length[6]');

	    // if(isset($_POST['submit'])){
	    	
		    if($this->form_validation->run() == false){

		    	$this->session->set_flashdata('gagalUpdateKonsumen', 
				                '<div class="alert alert-success" style="margin-bottom: 20px !important">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>BERHASIL ! </h7>
				                    <p>Gagal mengupdate data konsumen</p>
				                </div>');

		    	$kodeUnik = $this->input->post('kodeUnik');
				$KdTukang = $this->input->post('KdTukang');
				redirect('webbackend/C_dataPenjualan/detailDataPenjualan2/'.$kodeUnik.'/'.$KdTukang);

		    }
		    else{
		        
		    	$config['upload_path']='./gambar_proyek/';
		        $config['allowed_types']='jpg|png|jpeg';
		        $config['max_size'] = 500000;
		        $this->load->library('upload',$config);
		        $this->upload->do_upload();
		        $data   =  $this->upload->data();

		        $this->mod_dataAkun->prosesUpdateKonsumenBO($data['file_name']);

		        $this->session->set_flashdata('suksesUpdateKonsumen', 
				                '<div class="alert alert-success" style="margin-bottom: 20px !important">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>BERHASIL ! </h7>
				                    <p>Berhasil mengupdate data konsumen</p>
				                </div>');
				
				$kodeUnik = $this->input->post('kodeUnik');
				$KdTukang = $this->input->post('KdTukang');
				redirect('webbackend/C_dataPenjualan/detailDataPenjualan2/'.$kodeUnik.'/'.$KdTukang);

		    }
		// }	
		
	}

	//========================================================================================================
	//function tidak dipakai

	public function login(){
		$this->load->view('V_login');
	}

	public  function createAkun(){
		$this->load->view('V_createAkun');
	}

	public function inputDataPembelian(){
		$id = $this->session->userdata('kode');

		$jml = $this->mod_dataAkun->jumlahBerat($id);
		$jmlber = $jml->jumlahBerat;

		if($jmlber > 30){

		$this->session->set_flashdata('berat', 
				                '<div class="alert alert-danger fade in">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>Jumlah Berat Melebihi Kapasitas ! </h7>
				                    <p>Jumlah Berat Maksimal 30 (KG). Jumlah Berat Anda = '.$jmlber.' (KG)</p>
				                </div>');
		redirect('C_produkPembeli/lihatKeranjang');

		}else{
		
			$data["dataPembeli"] 	= $this->mod_dataAkun->inputDataPembelian($id)->result();
			$jml                 	= $this->mod_dataAkun->jumlahBerat($id);
	        $data['berat']   		= $jml->jumlahBerat;
			$this->load->view('V_inputDataPembelian', $data);

		}
	}

	//=====================================================================================

	public function ubahDataPembelian(){
		$id = $this->session->userdata('kode');
		$data["dataPembeli"] = $this->mod_dataAkun->ubahDataPembelian($id)->result();
		$this->load->view('V_ubahDataPembelian', $data);
	}

	public function prosesUbahDataPembelian(){
		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
		$this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
		$this->form_validation->set_rules('kelurahan','kelurahan','required|min_length[4]');
	    $this->form_validation->set_rules('kecamatan','kecamatan','required|min_length[4]');
	    $this->form_validation->set_rules('kota_kab','kota/kabupaten','required|min_length[4]');
	    $this->form_validation->set_rules('provinsi','provinsi','required|min_length[4]');
	    $this->form_validation->set_rules('alamatLengkap','alamat lengkap','required|min_length[6]');
	    $this->form_validation->set_rules('kodePos','kode pos','required|min_length[4]|numeric');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$id 				 = $this->input->post('idAkun');
		    	$data["dataPembeli"] = $this->mod_dataAkun->ubahDataPembelian($id)->result();
				$this->load->view('V_ubahDataPembelian', $data);

		    }
		    else{
		        
		    	$this->mod_dataAkun->prosesUpdateDataPembeli();
	        	$this->session->set_flashdata('info1', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil mengupdate data Pembeli</p>
			                </div>');
				redirect('C_dataAkun/inputDataPembelian');

		    }
		}	

	}

	public function lihatDataProfil(){
		$kode = $this->session->userdata('kode');
		$data["profil"] = $this->mod_dataAkun->lihatDataProfil($kode)->result();
		$this->load->view('V_lihatProfil', $data);
	}

}

?>