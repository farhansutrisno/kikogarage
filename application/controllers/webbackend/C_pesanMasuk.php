<?php
class C_pesanMasuk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_dataPesanMasuk');
	}
	
	public function lihatPesanMasuk(){
		$data['pesan'] = $this->mod_dataPesanMasuk->lihatPesanMasuk()->result();
		$this->load->view('webbackend/V_lihatPesanMasuk',$data);
	}

	public function kirimPesan(){
		$this->load->view('V_kirimPesan');
	}

	public function kirimPesanNew(){
		$this->load->view('V_kirimPesanNew');
	}

	public function prosesKirimPesan(){
	
		$this->form_validation->set_rules('namaLengkap','nama lengkap','trim|required');
		$this->form_validation->set_rules('noTelepon','no telepon','trim|required|numeric');
	    // $this->form_validation->set_rules('judulPesan','judul pesan','trim|required|min_length[8]');
	    $this->form_validation->set_rules('isiPesan','isi pesan','required');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		        $this->load->view('V_kirimPesanNew');

		    }
		    else{

		        $this->session->set_flashdata('pesan2', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Pesan berhasil terkirim </p>
		                </div>');
				$this->mod_dataPesanMasuk->kirimPesan();
				redirect('webbackend/C_pesanMasuk/kirimPesanNew');

		    }
		}

	}

	//Function dibawah ini tidak dipakai
	/*public function kirimPesanLogin(){
		$this->load->view('V_PesanLogin');
	}*/
	//function dibawah ini tidak dipakai
	/*public function prosesKirimPesanLogin(){
		if($this->input->post("submit")){
			$this->session->set_flashdata('pesan2', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Pesan berhasil terkirim </p>
		                </div>');
			$this->mod_dataPesanMasuk->kirimPesan();
			redirect('webbackend/C_pesanMasuk/kirimPesanLogin');
		}else{
			$this->session->set_flashdata('pesan3', 
		                '<div class="alert alert-danger">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>GAGAL MENGIRIM PESAN ! </h7>
		                    <p>Harap memasukan data dengan lengkap<br/>
		                    Terima kasih.</p>
		                </div>');
			redirect('webbackend/C_pesanMasuk/kirimPesanLogin');
		}
	}*/

	public function deletePesanMasuk($kdPesanMasuk){
		$this->session->set_flashdata('delete1', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data pesan masuk</p>
		                </div>');
		$this->mod_dataPesanMasuk->deletePesanMasuk($kdPesanMasuk);
		redirect('webbackend/C_pesanMasuk/lihatPesanMasuk');
	}
	
	public function detailPesanMasuk($kdPesanMasuk){
		$data["row"] = $this->mod_dataPesanMasuk->detailPesanMasuk($kdPesanMasuk)->result();
		$this->load->view('webbackend/V_detailPesanMasuk', $data);
	}


	//function dibawah ini tidak dipakai

	function periksasatu($fullname){
		if (! preg_match('/^[a-zA-Z\s.,]+$/',$username)) {
			$this->form_validation->set_massage('periksasatu','gunakan huruf dalam mengisi');
			return false;
		}else{
			return true;
		}
	}

	//function dibawah ini tidak dipakai
	function periksadua($fullname){
		if (! preg_match('/^[a-zA-Z\s.,123456789]+$/',$username)) {
			$this->form_validation->set_massage('periksasatu','gunakan huruf, karakter atau angka dalam mengisi');
			return false;
		}else{
			return true;
		}
	}

}

?>