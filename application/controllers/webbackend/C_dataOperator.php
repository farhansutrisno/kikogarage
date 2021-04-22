<?php
class C_dataOperator extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_dataOperator');
	}

	public function login(){
		$this->load->view('webbackend/V_loginAdmin');
	}

	public function prosesLoginAdmin(){
		
		$data = $this->mod_dataOperator->lihatDataOperator()->result_array();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$no =0;
		foreach ($data as $key) {
			
			if($username == $key['username'] && $password == $key['password']){
				$no=1;

				$this->session->set_userdata('namaAdmin',$key['username']);
				$this->session->set_userdata('namaLengkap',$key['namaLengkap']);
				$this->session->set_userdata('kodeOperator',$key['kdOperator']);
				$this->session->set_userdata('foto',$key['foto']);

				$this->session->set_flashdata('pesan1', 
	 	                '<div class="alert alert-info ">    
	                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                <h7>BERHASIL ! </h7>
	                    <p>Berhasil login sebagai Admin<br/></p>
	                </div>');
				redirect('webbackend/C_dataProduk/grafikProduk');
			}
		}
		if ($no==0) {
			$this->session->set_flashdata('pesan2', 
		                '<div class="alert alert-danger">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>GAGAL LOGIN ! </h7>
		                    <p>Harap memasukan data valid<br/>
		                    Terima kasih.</p>
		                </div>');
			redirect('webbackend/C_dataOperator/login');
		}
	}

	public  function lihatDataKonsumen(){
		$data['konsumen'] = $this->mod_dataOperator->lihatDataKonsumen()->result();
		$this->load->view('webbackend/V_lihatDataKonsumen',$data);
	}

	public function deleteDataKonsumen(){
		$this->session->set_flashdata('pesan7', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                </div>');
		
		$idAkun = $this->input->post('idAkun');

		$this->mod_dataOperator->deleteDataKonsumen($idAkun);
		redirect('webbackend/C_dataOperator/lihatDataKonsumen');
	}

	public function detailDataKonsumen($idAkun){
		$data["row"] = $this->mod_dataOperator->detailDataKonsumen($idAkun)->result();
		$this->load->view('webbackend/V_detailDataKonsumen', $data);
	}

	public function updateDataKonsumen($idAkun){
		$data["konsumen"] = $this->mod_dataOperator->updateDataKonsumen($idAkun)->row_array();
		$this->load->view('webbackend/V_updateDataKonsumen', $data);
	}

	public function prosesUpdateDataKonsumen(){

		$this->form_validation->set_rules('member','member','required');
		
	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		    	$id 				= $this->input->post('idAkun');
		        $data["konsumen"] 	= $this->mod_dataOperator->updateDataKonsumen($id)->row_array();
				$this->load->view('webbackend/V_updateDataKonsumen', $data);
		    }
		    else{
		        
				$this->session->set_flashdata('pesan5', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                </div>');
				$this->mod_dataOperator->prosesUpdateDataKonsumen();
				redirect('webbackend/C_dataOperator/lihatDataKonsumen');
		    }
		}

	}

	public function logout(){
		$this->session->unset_userdata('namaAdmin');
		$this->session->unset_userdata('namaLengkap');
		$this->session->unset_userdata('kdOperator');
		$this->session->unset_userdata('foto');
		$this->session->unset_userdata('tahun');
		redirect('webbackend/C_dataOperator/login');
	}

	public  function lihatDataOperator(){
		$data['operator'] = $this->mod_dataOperator->lihatDataOperator()->result();
		$this->load->view('webbackend/V_lihatDataOperator',$data);
	}

	public function inputDataOperator(){
		$this->load->view('webbackend/V_inputDataOperator');
	}

	public function prosesInputDataOperator(){
		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
		$this->form_validation->set_rules('username','username','trim|required|min_length[4]|alpha_dash');
	    $this->form_validation->set_rules('password','password','trim|required|min_length[4]|alpha_dash');
	    $this->form_validation->set_rules('email','email','required|min_length[3]|valid_email');
	    // $this->form_validation->set_rules('tglLahir','tanggal lahir','required');
	    $this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
	    // $this->form_validation->set_rules('jenisKelamin','jenis kelamin','required');
	    // $this->form_validation->set_rules('kelurahan','kelurahan','required|min_length[4]');
	    // $this->form_validation->set_rules('kecamatan','kecamatan','required|min_length[4]');
	    // $this->form_validation->set_rules('kota_kab','kota/kabupaten','required|min_length[4]');
	    // $this->form_validation->set_rules('provinsi','provinsi','required|min_length[4]');
	    // $this->form_validation->set_rules('alamatLengkap','alamat lengkap','required|min_length[6]');
	    // $this->form_validation->set_rules('kodePos','kode pos','required|min_length[4]|numeric');
	    $this->form_validation->set_rules('status','status','required');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		        $this->load->view('webbackend/V_inputDataOperator');
		    }
		    else{
		        $config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='jpg|png|jpeg|gif';
	            $config['max_size'] = 5000000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();

	            
				$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil membuat data operator baru</p>
			                </div>');
				$this->mod_dataOperator->inputDataOperator($data['file_name']);
				redirect('webbackend/C_dataOperator/lihatDataOperator');
		    }
		}

	}

	public function updateDataOperator($kdOperator){
		$data["operator"] = $this->mod_dataOperator->updateDataOperator($kdOperator)->row_array();
		$this->load->view('webbackend/V_updateDataOperator', $data);
	}

	public function prosesUpdateDataOperator(){
		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
		$this->form_validation->set_rules('username','username','trim|required|min_length[4]|alpha_dash');
	    $this->form_validation->set_rules('password','password','trim|required|min_length[4]|alpha_dash');
	    $this->form_validation->set_rules('email','email','required|min_length[3]|valid_email');
	    // $this->form_validation->set_rules('tglLahir','tanggal lahir','required');
	    $this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
	    // $this->form_validation->set_rules('jenis','jenis kelamin','required');
	    // $this->form_validation->set_rules('kelurahan','kelurahan','required|min_length[4]');
	    // $this->form_validation->set_rules('kecamatan','kecamatan','required|min_length[4]');
	    // $this->form_validation->set_rules('kota_kab','kota/kabupaten','required|min_length[4]');
	    // $this->form_validation->set_rules('provinsi','provinsi','required|min_length[4]');
	    // $this->form_validation->set_rules('alamatLengkap','alamat lengkap','required|min_length[6]');
	    // $this->form_validation->set_rules('kodePos','kode pos','required|min_length[4]|numeric');
	    $this->form_validation->set_rules('status','Status','required');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		    	$id 				= $this->input->post('kdOperator');
		        $data["operator"] 	= $this->mod_dataOperator->updateDataOperator($id)->row_array();
				$this->load->view('webbackend/V_updateDataOperator', $data);
		    }
		    else{
		        $config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='jpg|png|jpeg|gif';
	            $config['max_size'] = 5000000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();

				$this->session->set_flashdata('pesan5', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil mengupdate data operator<br/></p>
			                </div>');
				$this->mod_dataOperator->prosesUpdateDataOperator($data['file_name']);
				redirect('webbackend/C_dataOperator/lihatDataOperator');
		    }
		}

	}

	public function deleteDataOperator(){
		$this->session->set_flashdata('pesan7', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data operator<br/></p>
		                </div>');

		$kdOperator = $this->input->post('kdOperator');

		$this->mod_dataOperator->deleteDataOperator($kdOperator);
		redirect('webbackend/C_dataOperator/lihatDataOperator');
	}

	public function detailDataOperator($kdOperator){
		$data["row"] = $this->mod_dataOperator->detailDataOperator($kdOperator)->result();
		$this->load->view('webbackend/V_detailDataOperator', $data);
	}

	public  function lihatDataTukang(){
		$data['tukang'] = $this->mod_dataOperator->lihatDataTukang()->result();
		$this->load->view('webbackend/V_lihatDataTukang',$data);
	}

	public function inputDataTukang(){
		$this->load->view('webbackend/V_inputDataTukang');
	}

	public function prosesInputDataTukang(){

		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
		$this->form_validation->set_rules('noTelepon','no telepon','required|min_length[10]|numeric');
	    $this->form_validation->set_rules('jenisKelamin','jenis kelamin','required');
	    
	    if(isset($_POST['submit'])){

		    if($this->form_validation->run() == false){
		    	die('here');
		        $this->load->view('webbackend/V_inputDataTukang');
		    }
		    else{
		        $config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='jpg|png|jpeg';
	            $config['max_size'] = 5000000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();

				$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info" style="height: 70px !important;">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil menambahkan data tukang baru</p>
			                </div>');
				$this->mod_dataOperator->inputDataTukang($data['file_name']);
				redirect('webbackend/C_dataOperator/lihatDataTukang');
		    }
		}

	}

	public function updateDataTukang($KdTukang){
		$data["tukang"] = $this->mod_dataOperator->updateDataTukang($KdTukang)->row_array();
		$this->load->view('webbackend/V_updateDataTukang', $data);
	}

	public function prosesUpdateDataTukang(){
		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required|min_length[4]');
	    $this->form_validation->set_rules('noTelepon','no telepon','required|max_length[12]|numeric');
	    $this->form_validation->set_rules('jenis','jenis kelamin','required');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		    	$id 				= $this->input->post('kdOperator');
		        $data["operator"] 	= $this->mod_dataOperator->updateDataTukang($id)->row_array();
				$this->load->view('webbackend/V_updateDataTukang', $data);
		    }
		    else{
		        $config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='jpg|png|jpeg|gif';
	            $config['max_size'] = 5000000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();

				$this->session->set_flashdata('pesan5', 
			                '<div class="alert alert-info" style="height: 70px !important;">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Berhasil mengupdate data tukang<br/></p>
			                </div>');
				$this->mod_dataOperator->prosesUpdateDataTukang($data['file_name']);
				redirect('webbackend/C_dataOperator/lihatDataTukang');
		    }
		}

	}

	public function deleteDataTukang(){

		$kdtukang = $this->input->post('kdtukang');

		// $this->session->set_flashdata('pesan7', 
		//                 '<div class="alert alert-info ">    
		//                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		//                 <h7>BERHASIL ! </h7>
		//                     <p>Berhasil menghapus data tukang<br/></p>
		//                 </div>');
		$this->mod_dataOperator->deleteDataTukang($kdtukang);
		redirect('webbackend/C_dataOperator/lihatDataTukang');
	}

	public function detailDataTukang($KdTukang){
		$data["row"] = $this->mod_dataOperator->detailDataTukang($KdTukang)->result();
		$this->load->view('webbackend/V_detailDataTukang', $data);
	}


}

?>