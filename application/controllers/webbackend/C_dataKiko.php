<?php
class C_dataKiko extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_dataKiko');
	}

	public  function lihatAboutUsFoNew(){
		$this->load->view('V_aboutUsNew');
	}

	public  function lihatDataGaleriFoNew(){

		$config['base_url']     = site_url('C_dataKiko/lihatDataGaleriFoNew'); //site url
        $config['total_rows']   = $this->db->count_all('galeri'); //total row
        $config['per_page']     = 4;  //show record per halaman
        $config["uri_segment"]  = 3;  // uri parameter
        $choice                 = $config["total_rows"] / $config["per_page"];
        $config["num_links"]    = floor($choice);

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
        //$data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);           

        $data['pag'] = $this->pagination->create_links();
		$data['galeri'] = $this->mod_dataKiko->lihatDataGaleriFo($config["per_page"], $data['page'])->result();
		$data['video']  = $this->mod_dataKiko->lihatDataGaleriVideo()->result();
		$this->load->view('V_galeriFoNew',$data);
	}

	public  function lihatDataGaleriBo(){
		$data['Galeri'] = $this->mod_dataKiko->lihatDataGaleri()->result();
		$this->load->view('webbackend/V_lihatDataGaleriBo', $data);
	}

	public  function lihatDataGaleriVideo(){
		$data['Galeri'] = $this->mod_dataKiko->lihatDataGaleriVideo()->result();
		$this->load->view('webbackend/V_lihatGaleriVideo', $data);
	}

	public function inputDataGaleri(){
		$this->load->view('webbackend/V_inputDataGaleri');
	}

	public function inputDataGaleriVideo(){
		$this->load->view('webbackend/V_inputDataGaleriVideo');
	}

	public function prosesInputDataGaleri(){
		$this->form_validation->set_rules('judulGaleri','judul galeri','trim|required|min_length[5]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		    	$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>Gagal ! </h7>
			                <p>Harap cek kembali</p>
			                </div>');
		        $this->load->view('webbackend/V_inputDataGaleri');
		    }
		    else{

		        $config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='jpg|png|jpeg';
	            $config['max_size'] = 5000000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();
	            
				$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                </div>');
				$this->mod_dataKiko->inputDataGaleri($data['file_name']);
				redirect('webbackend/C_dataKiko/lihatDataGaleriBo');
		    }
		}

	}

	public function prosesInputDataGaleriVideo(){
		$this->form_validation->set_rules('judulGaleriVideo','judul galeri Video','trim|required|min_length[5]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		    	$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>Gagal ! </h7>
			                <p>Harap cek kembali</p>
			                </div>');
		        $this->load->view('webbackend/V_inputDataGaleriVideo');
		    }
		    else{

		        unset($config);
		        $date = date("ymd");
		        $configVideo['upload_path'] = './gambar_proyek';
		        $configVideo['max_size'] = '60000';
		        $configVideo['allowed_types'] = 'avi|flv|wmv|mp3|mp4';
		        $configVideo['overwrite'] = FALSE;
		        $configVideo['remove_spaces'] = TRUE;
		        $video_name = $date.$_FILES['video']['name'];
		        $configVideo['file_name'] = $video_name;

		        $this->load->library('upload', $configVideo);
		        $this->upload->initialize($configVideo);

		        if(!$this->upload->do_upload('video')) {
		            // echo $this->upload->display_errors();
		            $this->session->set_flashdata('pesan3', 
				                '<div class="alert alert-info ">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>Gagal ! </h7>
				                <p>Harap cek kembali</p>
				                </div>');
			        $this->load->view('webbackend/V_inputDataGaleriVideo');
		        }else{

		            $videoDetails = $this->upload->data();
		            $data1['video_name']= $configVideo['file_name'];
		            $data1['video_detail'] = $videoDetails;
		  			
		  			$judulGaleriVideo	= $this->input->post('judulGaleriVideo');

		            $data 			= array(
						"judulGaleri" 		=> $judulGaleriVideo,
						"tglGaleri" 		=> date("Y-m-d H:i:s"),
						"tipe"				=> 2,
						"gambar"			=> $data1['video_name']
					);

		            $this->session->set_flashdata('pesan3', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                </div>');

					$this->mod_dataKiko->inputDataGaleriVideo($data);
					redirect('webbackend/C_dataKiko/lihatDataGaleriVideo');

		        }
	            
				
		    }
		}

	}

	public function detailDataGaleri($kdGaleri){
		$data["Galeri"] = $this->mod_dataKiko->detailDataGaleri($kdGaleri)->result();
		$this->load->view('webbackend/V_detailDataGaleri', $data);
	}

	public function detailDataGaleriVideo($kdGaleri){
		$data["Galeri"] = $this->mod_dataKiko->detailDataGaleri($kdGaleri)->result();
		$this->load->view('webbackend/V_detailDataGaleriVideo', $data);
	}	

	public function updateDataGaleri($kdGaleri){
		$data["Galeri"] = $this->mod_dataKiko->updateDataGaleri($kdGaleri)->row_array();
		$this->load->view('webbackend/V_updateDataGaleri', $data);
	}

	public function updateDataGaleriVideo($kdGaleri){
		$data["Galeri"] = $this->mod_dataKiko->updateDataGaleri($kdGaleri)->row_array();
		$this->load->view('webbackend/V_updateDataGaleriVideo', $data);
	}

	public function prosesUpdateDataGaleriVideo(){
		$this->form_validation->set_rules('judulGaleri','judul galeri','trim|required|min_length[4]');
	    // $this->form_validation->set_rules('isiArtikel','isi artikel','required|min_length[6]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		    	$id 				= $this->input->post('kdGaleri');
		        $data["Galeri"] 	= $this->mod_dataKiko->updateDataGaleri($id)->row_array();
		       	$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>Gagal ! </h7>
			                <p>Harap cek kembali</p>
			                </div>');
				$this->load->view('webbackend/V_updateDataGaleriVideo', $data);
		    }
		    else{
		        
		        unset($config);
		        $date = date("ymd");
		        $configVideo['upload_path'] = './gambar_proyek';
		        $configVideo['max_size'] = '60000';
		        $configVideo['allowed_types'] = 'avi|flv|wmv|mp3|mp4';
		        $configVideo['overwrite'] = FALSE;
		        $configVideo['remove_spaces'] = TRUE;
		        $video_name = $date.$_FILES['video']['name'];
		        $configVideo['file_name'] = $video_name;

			    if (!empty($_FILES['video']['name'])) {
			        
			        $this->load->library('upload', $configVideo);
			        $this->upload->initialize($configVideo);

			            $videoDetails = $this->upload->data();
			            $data1['video_name']= $configVideo['file_name'];
			            $data1['video_detail'] = $videoDetails;

			            $judulGaleri	= $this->input->post('judulGaleri');

			            $data 			= array(
							"judulGaleri" 		=> $judulGaleri,
							"tglUpdateGaleri" 	=> date("Y-m-d H:i:s"),
							"gambar"			=> $data1['video_name']
						);
			  			
			            $this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                </div>');

						$this->mod_dataKiko->prosesUpdateDataGaleri($data);
						redirect('webbackend/C_dataKiko/lihatDataGaleriVideo');

			    }else{

					$this->session->set_flashdata('pesan6', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                </div>');
					
					$judulGaleri	= $this->input->post('judulGaleri');
					$data 			= array(
						"judulGaleri" 		=> $judulGaleri,
						"tglUpdateGaleri" 	=> date("Y-m-d H:i:s")
					);
					$this->mod_dataKiko->prosesUpdateDataGaleri($data);
					redirect('webbackend/C_dataKiko/lihatDataGaleriVideo');

			    }

		    }
		}

	}

	public function prosesUpdateDataGaleri(){
		$this->form_validation->set_rules('judulGaleri','judul galeri','trim|required|min_length[4]');
	    // $this->form_validation->set_rules('isiArtikel','isi artikel','required|min_length[6]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		    	$id 				= $this->input->post('kdGaleri');
		        $data["Galeri"] 	= $this->mod_dataKiko->updateDataGaleri($id)->row_array();
		       	$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>Gagal ! </h7>
			                <p>Harap cek kembali</p>
			                </div>');
				$this->load->view('webbackend/V_updateDataGaleri', $data);
		    }
		    else{
		        $config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='jpg|png|jpeg';
	            $config['max_size'] = 5000000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();

				$this->session->set_flashdata('pesan5', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                </div>');
				$this->mod_dataKiko->prosesUpdateDataGaleri($data['file_name']);
				redirect('webbackend/C_dataKiko/lihatDataGaleriBo');
		    }
		}

	}

	public function deleteDataGaleri(){
		$this->session->set_flashdata('pesan7', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                </div>');

		$kdGaleri = $this->input->post('kdGaleri');

		$this->mod_dataKiko->deleteDataGaleri($kdGaleri);
		redirect('webbackend/C_dataKiko/lihatDataGaleriBo');
	}


	public  function lihatDataArtikelBo(){

		$data['artikel'] = $this->mod_dataKiko->lihatDataArtikel()->result();
		$this->load->view('webbackend/V_lihatDataArtikelBo', $data);
	}


	public  function lihatAboutUsFo(){
		// $data['artikel'] = $this->mod_dataKiko->lihatDataArtikel()->result();
		$this->load->view('V_aboutUs');
	}

	public  function lihatDataArtikelFo(){
		$data['artikel'] = $this->mod_dataKiko->lihatDataArtikel()->result();
		$this->load->view('V_lihatArtikelFo', $data);
	}

	public  function lihatDataGaleriFo(){

		$config['base_url']     = site_url('C_dataKiko/lihatDataGaleriFo'); //site url
        $config['total_rows']   = $this->db->count_all('galeri'); //total row
        $config['per_page']     = 4;  //show record per halaman
        $config["uri_segment"]  = 3;  // uri parameter
        $choice                 = $config["total_rows"] / $config["per_page"];
        $config["num_links"]    = floor($choice);

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
        //$data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);           

        $data['pag'] = $this->pagination->create_links();
		$data['galeri'] = $this->mod_dataKiko->lihatDataGaleri($config["per_page"], $data['page'])->result();
		$this->load->view('V_galeriFo',$data);
	}

	

	//=========================================================================================
	//function di bawah ini tidak dipakai
	

	public function inputDataArtikel(){
		$this->load->view('webbackend/V_inputDataArtikel');
	}

	public function prosesInputDataArtikel(){
		$this->form_validation->set_rules('judul','nama lengkap','trim|required|min_length[4]');
	    $this->form_validation->set_rules('isiArtikel','alamat lengkap','required|min_length[6]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		        $this->load->view('webbackend/V_inputDataArtikel');
		    }
		    else{


		        $config['upload_path']='./gambar_proyek/';
	            $config['allowed_types']='jpg|png|jpeg';
	            $config['max_size'] = 5000000;
	            $this->load->library('upload',$config);
	            $this->upload->do_upload();
	            $data   =  $this->upload->data();
	            
				$this->session->set_flashdata('pesan3', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                </div>');
				$this->mod_dataKiko->inputDataArtikel($data['file_name']);
				redirect('webbackend/C_dataKiko/lihatDataArtikelBo');
		    }
		}

	}

	public function updateDataArtikel($kdArtikel){
		$data["artikel"] = $this->mod_dataKiko->updateDataArtikel($kdArtikel)->row_array();
		$this->load->view('webbackend/V_updateDataArtikel', $data);
	}

	public function prosesUpdateDataArtikel(){
		$this->form_validation->set_rules('judulArtikel','judul artikel','trim|required|min_length[4]');
	    $this->form_validation->set_rules('isiArtikel','isi artikel','required|min_length[6]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){
		    	$id 				= $this->input->post('kdArtikel');
		        $data["artikel"] 	= $this->mod_dataKiko->updateDataArtikel($id)->row_array();
				$this->load->view('webbackend/V_updateDataArtikel', $data);
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
			                    <p>Berhasil</p>
			                </div>');
				$this->mod_dataKiko->prosesUpdateDataArtikel($data['file_name']);
				redirect('webbackend/C_dataKiko/lihatDataArtikelBo');
		    }
		}

	}

	public function deleteDataArtikel($kdArtikel){
		$this->session->set_flashdata('pesan7', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    
		                </div>');
		$this->mod_dataKiko->deleteDataArtikel($kdArtikel);
		redirect('webbackend/C_dataKiko/lihatDataArtikelBo');
	}

	public function detailArtikelFo($kdArtikel){
		$data["row"] = $this->mod_dataKiko->detailDataArtikelFo($kdArtikel)->row_array();

		// echo "<pre>";
		// var_dump($data);
		// die();
		
		$this->load->view('V_detailDataArtikelFo', $data);
	}

	public function detailDataArtikelBo($kdArtikel){
		$data["artikel"] = $this->mod_dataKiko->detailDataArtikelBo($kdArtikel)->result();
		$this->load->view('webbackend/V_detailDataArtikelBo', $data);
	}

	/* 
	bagian input data galeri bo
	===================================================================================================================
	*/

	


	

	

}

?>