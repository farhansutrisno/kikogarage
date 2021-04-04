<?php
class C_dataAkun extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table','cart'));
		$this->load->model('mod_dataAkun');
	}

	public function login(){
		$this->load->view('V_login');
	}

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

	public  function createAkun(){
		$this->load->view('V_createAkun');
	}

	public function prosesCreateAkun(){
		$this->form_validation->set_rules('namaLengkap','nama lengkap','required');
		// $this->form_validation->set_rules('username','username','trim|required|min_length[4]|alpha_dash');
	    $this->form_validation->set_rules('password','password','required');
	    // $this->form_validation->set_rules('email','email','required|min_length[3]|valid_email');
	    // $this->form_validation->set_rules('tanggal_lahir','tanggal lahir','required');
	    $this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
	    // $this->form_validation->set_rules('kelurahan','kelurahan','required|min_length[4]');
	    // $this->form_validation->set_rules('kecamatan','kecamatan','required|min_length[4]');
	    // $this->form_validation->set_rules('kota_kab','kota/kabupaten','required|min_length[4]');
	    // $this->form_validation->set_rules('provinsi','provinsi','required|min_length[4]');
	    $this->form_validation->set_rules('alamatLengkap','alamat lengkap','required');
	    // $this->form_validation->set_rules('kodePos','kode pos','required|min_length[4]|numeric');

	    
	    // if(isset($_POST['submit'])){

		    if($this->form_validation->run() == false){
		        // $this->load->view('V_createAkun');
		        redirect('C_produkPembeli/lihatProdukNew');
		    }
		    else{
		        
		    	$data = $this->mod_dataAkun->login()->result_array();
				// $username = $this->input->post('username');
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
						// redirect('C_dataAkun/createAkun');
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
		// }

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
			
			redirect('C_produkPembeli/lihatProdukNew');
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

	//======================================================================================
	//API raja ongkir

	function _api_ongkir_post($des,$qty,$cour)
	{
		  $curl = curl_init();
	  curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "origin=23&destination=".$des."&weight=".$qty."&courier=".$cour,	  
	  CURLOPT_HTTPHEADER => array(
	    "content-type: application/x-www-form-urlencoded",
	    /* masukan api key disini*/
	    "key: 26d3a6572c103e52663cd1543d579a2d"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return $err;
		} else {
		  return $response;
		}
	}

	function _api_ongkir($data)
	{
		$curl = curl_init();

	curl_setopt_array($curl, array(
	  //CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=12",
	  //CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
	  CURLOPT_URL => "http://api.rajaongkir.com/starter/".$data,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",		  
	  CURLOPT_HTTPHEADER => array(
	  	/* masukan api key disini*/
	    "key: 26d3a6572c103e52663cd1543d579a2d"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  return  $err;
	} else {
	  return $response;
	}
	}


	public function provinsi()
	{

		$provinsi = $this->_api_ongkir('province');
		$data = json_decode($provinsi, true);
		echo json_encode($data['rajaongkir']['results']);
	}

	public function kota($provinsi="")
	{
		if(!empty($provinsi))
		{
			if(is_numeric($provinsi))
			{
				$kota = $this->_api_ongkir('city?province='.$provinsi);	
				$data = json_decode($kota, true);
				echo json_encode($data['rajaongkir']['results']);		  					 
			}
			else
			{
				show_404();
			}
		}
	   else
	   {
	   	show_404();
	   }
	}

	public function tarif($des,$qty,$cour)
	{
		$berat = $qty*1000;
		$tarif = $this->_api_ongkir_post($des,$berat,$cour);		
		$data = json_decode($tarif, true);
		echo json_encode($data['rajaongkir']['results']);		
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

	public function prosesUpdateAkun(){
		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
		$this->form_validation->set_rules('username','username','trim|required|min_length[4]|alpha_dash');
	    $this->form_validation->set_rules('password','password','trim|required|min_length[4]|alpha_dash');
	    $this->form_validation->set_rules('email','email','required|min_length[3]|valid_email');
	    $this->form_validation->set_rules('tglLahir','tanggal lahir','required');
	    $this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
	    $this->form_validation->set_rules('kelurahan','kelurahan','required|min_length[4]');
	    $this->form_validation->set_rules('kecamatan','kecamatan','required|min_length[4]');
	    $this->form_validation->set_rules('kota_kab','kota/kabupaten','required|min_length[4]');
	    $this->form_validation->set_rules('provinsi','provinsi','required|min_length[4]');
	    $this->form_validation->set_rules('alamatLengkap','alamat lengkap','required|min_length[6]');
	    $this->form_validation->set_rules('kodePos','kode pos','required|min_length[4]|numeric');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kode 			= $this->input->post('idAkun');
		        $data["profil"] = $this->mod_dataAkun->lihatDataProfil($kode)->result();
				$this->load->view('V_lihatProfil', $data);

		    }
		    else{
		        
		    	$config['upload_path']='./gambar_proyek/';
		        $config['allowed_types']='jpg|png|jpeg|gif';
		        $config['max_size'] = 5000000;
		        $this->load->library('upload',$config);
		        $this->upload->do_upload();
		        $data   =  $this->upload->data();

		        $this->mod_dataAkun->prosesUpdateAkun($data['file_name']);

		        $this->session->set_flashdata('pesanProfil', 
				                '<div class="alert alert-info ">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>BERHASIL ! </h7>
				                    <p>Berhasil mengupdate data Akun</p>
				                </div>');
				
				redirect('C_dataAkun/lihatDataProfil');

		    }
		}	
		
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
				                '<div class="alert alert-info ">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>BERHASIL ! </h7>
				                </div>');
				
				redirect('C_dataAkun/daftarMember');

		    }
		}	
		
	}
}

?>