<?php
class C_dataProduk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->library('pdf');
		$this->load->model('mod_dataProduk');
		date_default_timezone_set('Asia/Jakarta');
	}

	function grafikProduk(){
		$tahun1 	= $this->input->post('tahun');
		$tanggal1 	= $this->input->post('tanggal');
		$bulan1 	= $this->input->post('bulan');

		if (empty($tahun1)) {
			$tahun = date("Y");
		}else{
			$tahun = $tahun1;
		}

		if (empty($tanggal1)) {
			$tanggal = date("d");
		}else{
			
			if ($tanggal1 >= 10) {
				$tanggal = $tanggal1;
			}else{
				$tanggal = "0".$tanggal1;
			}
		}

		if (empty($bulan1)) {
			$bulan = date("m");
		}else{

			if ($bulan1 >= 10) {
				$bulan = $bulan1;
			}else{
				$bulan = "0".$bulan1;
			}

		}

		$tahunawal 		= $this->input->post('tahunawal');
		$tanggalawal 	= $this->input->post('tanggalawal');
		$bulanawal 		= $this->input->post('bulanawal');

		if (empty($tahunawal)) {
			$tahunawal = $tahun;
		}else{
			$tahunawal = $tahunawal;
		}

		if (empty($tanggalawal)) {
			$tanggalawal = "01";
		}else{
			
			if ($tanggalawal >= 10) {
				$tanggalawal = $tanggalawal;
			}else{
				$tanggalawal = "0".$tanggalawal;
			}
		}

		if (empty($bulanawal)) {
			// $bulanawal = "01";
			$bulanawal = date("m");
		}else{

			if ($bulanawal >= 10) {
				$bulanawal = $bulanawal;
			}else{
				$bulanawal = "0".$bulanawal;
			}

		}

		$x['tahuncurrent']		= $tahun;
		$x['bulancurrent']		= $bulan;
		$x['tanggalcurrent']	= $tanggal;

		$x['tahunawal2']		= $tahunawal;
		$x['bulanawal2']		= $bulanawal;
		$x['tanggalawal2']		= $tanggalawal;

		$x['tahun']			= $this->mod_dataProduk->tahun()->result();

		$x['Cars_Wash'] 	= $this->mod_dataProduk->get_kategori('CarWash',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['Coating'] 		= $this->mod_dataProduk->get_kategori('Coating',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['Interior'] 		= $this->mod_dataProduk->get_kategori('Interior',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['Eksterior'] 	= $this->mod_dataProduk->get_kategori('Eksterior',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;

		$x['Cars_Wash1'] 	= $this->mod_dataProduk->kategori_value('CarWash',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['Coating1'] 		= $this->mod_dataProduk->kategori_value('Coating',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['Interior1'] 	= $this->mod_dataProduk->kategori_value('Interior',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['Eksterior1'] 	= $this->mod_dataProduk->kategori_value('Eksterior',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;

		$x['antarjemput'] 	= $this->mod_dataProduk->jenisBooking('Antar Jemput',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['langsung'] 		= $this->mod_dataProduk->jenisBooking('Langsung',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;


      	$x['jml_produk'] 		= $this->mod_dataProduk->jml_produk($tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->result();
		$x['jml_pesan'] 		= $this->mod_dataProduk->jml_pesan($tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->result();
		$x['jml_penjualan'] 	= $this->mod_dataProduk->jml_penjualan($tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->result();

		$x['januari'] = $this->mod_dataProduk->get_bulan('01',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['januari'] == NULL) {
			$x['januari'] = 0;
		}else{
			$x['januari'] = $this->mod_dataProduk->get_bulan('01',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['februari'] 		= $this->mod_dataProduk->get_bulan('02',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['februari'] == NULL) {
			$x['februari'] = 0;
		}else{
			$x['februari'] 		= $this->mod_dataProduk->get_bulan('02',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['maret'] = $this->mod_dataProduk->get_bulan('03',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['maret'] == NULL) {
			$x['maret'] = 0;
		}else{
			$x['maret'] = $this->mod_dataProduk->get_bulan('03',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['april'] 		= $this->mod_dataProduk->get_bulan('04',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['april'] == NULL) {
			$x['april'] = 0;
		}else{
			$x['april'] 		= $this->mod_dataProduk->get_bulan('04',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['mei'] 		= $this->mod_dataProduk->get_bulan('05',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['mei'] == NULL) {
			$x['mei'] = 0;
		}else{
			$x['mei'] 		= $this->mod_dataProduk->get_bulan('05',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['juni'] 		= $this->mod_dataProduk->get_bulan('06',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['juni'] == NULL) {
			$x['juni'] = 0;
		}else{
			$x['juni'] 		= $this->mod_dataProduk->get_bulan('06',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['juli'] 		= $this->mod_dataProduk->get_bulan('07',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['juli'] == NULL) {
			$x['juli'] = 0;
		}else{
			$x['juli'] 		= $this->mod_dataProduk->get_bulan('07',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['agustus'] 		= $this->mod_dataProduk->get_bulan('08',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['agustus'] == NULL) {
			$x['agustus'] = 0;
		}else{
			$x['agustus'] 		= $this->mod_dataProduk->get_bulan('08',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['september'] 		= $this->mod_dataProduk->get_bulan('09',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['september'] == NULL) {
			$x['september'] = 0;
		}else{
			$x['september'] 		= $this->mod_dataProduk->get_bulan('09',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['oktober'] 		= $this->mod_dataProduk->get_bulan('10',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['oktober'] == NULL) {
			$x['oktober'] = 0;
		}else{
			$x['oktober'] 		= $this->mod_dataProduk->get_bulan('10',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['november'] 		= $this->mod_dataProduk->get_bulan('11',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['november'] == NULL) {
			$x['november'] = 0;
		}else{
			$x['november'] 		= $this->mod_dataProduk->get_bulan('11',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['desember'] 		= $this->mod_dataProduk->get_bulan('12',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		if ($x['desember'] == NULL) {
			$x['desember'] = 0;
		}else{
			$x['desember'] 		= $this->mod_dataProduk->get_bulan('12',$tahun,$tanggal,$tahunawal,$tanggalawal)->result()[0]->total_bayar;
		}

		$x['Antrian'] 		= $this->mod_dataProduk->seluruhnya('Antrian',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['selesai'] 		= $this->mod_dataProduk->seluruhnya('Selesai',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['pengerjaan'] 	= $this->mod_dataProduk->seluruhnya('Pengerjaan',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['penjemputan'] 	= $this->mod_dataProduk->seluruhnya('Penjemputan',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;
		$x['pengantaran'] 	= $this->mod_dataProduk->seluruhnya('Pengantaran',$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal)->row()->data;

		$this->load->view('webbackend/V_lihatGrafikPenjualan',$x);

    }
	
	public function lihatDataProduk(){
		$data['filter'] = $this->mod_dataProduk->filter()->result();
		$data['tahun']	= $this->mod_dataProduk->tahun2()->result();
		$data['bulan']	= $this->mod_dataProduk->bulan()->result();
		$data['produk'] = $this->mod_dataProduk->lihatDataProduk()->result();
		$this->load->view('webbackend/V_lihatDataProduk',$data);
	}

	public  function inputDataProduk(){
		$this->load->view('webbackend/V_inputDataProduk');
	}

	public function prosesInputDataProduk(){
		$this->form_validation->set_rules('namaProduk','nama produk','trim|required|min_length[4]');
	    $this->form_validation->set_rules('hp','harga penjualan','trim|required|min_length[3]|numeric');
	    $this->form_validation->set_rules('kategori','kategori','required|min_length[4]');
	    // $this->form_validation->set_rules('paket','paket');
	    $this->form_validation->set_rules('deskripsi','deskripsi','required|min_length[6]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		        $this->load->view('webbackend/V_inputDataProduk');

		    }
		    else{

		        $this->session->set_flashdata('pesan1', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menginputkan data produk</p>
		                </div>');

				$this->load->library('upload');
			    $dataInfo = array();
			    $files = $_FILES;
			    $cpt = count($_FILES['userfile']['name']);
			    for($i=0; $i<$cpt; $i++)
			    {           
			        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
			        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
			        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
			        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

			        $this->upload->initialize($this->set_upload_options());
			        $this->upload->do_upload();
			        $dataInfo[] = $this->upload->data();
			    }

			    $this->upload->initialize($this->set_upload_options());
		        $this->upload->do_upload('pendukung');
		        $gambar = $this->upload->data();

			    $kode           = $this->session->userdata('kodeOperator');   
				$namaProduk 	= $this->input->post('namaProduk');
				$deskripsi 		= $this->input->post('deskripsi');
				$hp 			= $this->input->post('hp');
				$kategori 		= $this->input->post('kategori');
				$paket1 		= $this->input->post('paket1');
				$paket2 		= $this->input->post('paket2');

				if ($kategori == 'Interior') {
					$paket = 'Interior';
				}elseif($kategori == 'Eksterior'){
					$paket = 'Eksterior';
				}else{
					if ($paket1 != " ") {
						$paket = $paket1;
					}elseif($paket2 != " "){
						$paket = $paket2;
					}
				}

				$data 			= array(
					"namaProduk" 			=> $namaProduk,
					"deskripsi" 			=> $deskripsi,
					"createDate" 			=> date("Y-m-d H:i:s"),
					"hargaPenjualan" 		=> $hp,
					"kategori"				=> $kategori,
					"paket"					=> $paket,
					'gambar' 				=> $dataInfo[0]['file_name'],
			        'gambar2' 				=> $dataInfo[1]['file_name'],
			        'gambar3' 				=> $dataInfo[2]['file_name'],
	                "kdOperator"            => $kode);
				
				$this->mod_dataProduk->inputDataProduk($data);
				redirect('webbackend/C_dataProduk/lihatDataProduk');

		    }
		}
	}


	private function set_upload_options(){   
    //upload an image options
	    $config = array();
	    $config['upload_path'] = './gambar_proyek/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';
	    $config['max_size']      = 5000000;
	    $config['overwrite']     = FALSE;

	    return $config;
	}

	public function updateDataProduk($kdProduk){
		$data["produk"] = $this->mod_dataProduk->updateDataProduk($kdProduk)->result();
		$this->load->view('webbackend/V_updateDataProduk', $data);
	}

	public function prosesUpdateDataProduk(){

		$this->form_validation->set_rules('namaProduk','nama produk','trim|required|min_length[4]');
		$this->form_validation->set_rules('hp','harga penjualan','trim|required|min_length[3]|numeric');
	    $this->form_validation->set_rules('kategori','kategori','required|min_length[4]');
	    $this->form_validation->set_rules('deskripsi','deskripsi','required|min_length[6]');
	    // $this->form_validation->set_rules('paket','paket','required|min_length[4]');
	    
	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kdProduk 		= $this->input->post('kdProduk');
		        $data["produk"] = $this->mod_dataProduk->updateDataProduk($kdProduk)->result();
				$this->load->view('webbackend/V_updateDataProduk', $data);

		    }
		    else{

			    $this->load->library('upload');
			    $dataInfo = array();
			    $files = $_FILES;
			    $cpt = count($_FILES['userfile']['name']);
			    for($i=0; $i<$cpt; $i++)
			    {           
			        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
			        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
			        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
			        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

			        $this->upload->initialize($this->set_upload_options());
			        $this->upload->do_upload();
			        $dataInfo[] = $this->upload->data();
			    }

			    	$kode           = $this->session->userdata('kodeOperator');
				    $kdProduk 		= $this->input->post('kdProduk');
					$namaProduk 	= $this->input->post('namaProduk');
					$deskripsi 		= $this->input->post('deskripsi');
					$hp 			= $this->input->post('hp');
					$kategori 		= $this->input->post('kategori');
					$paket1 		= $this->input->post('paket1');
					$paket2 		= $this->input->post('paket2');

					if ($kategori == 'Interior') {
						$paket = 'Interior';
					}elseif ($kategori == 'Eksterior') {
						$paket = 'Eksterior';
					}else{
						if ($paket1 != "--pilih--") {
							$paket = $paket1;
						}elseif($paket2 != "--pilih--"){
							$paket = $paket2;
						}
					}

				    if($dataInfo[0]['file_name'] == null AND $dataInfo[1]['file_name'] == null AND $dataInfo[2]['file_name'] == null){
			        	
			        	$data 			= array(
							"namaProduk" 			=> $namaProduk,
							"deskripsi" 			=> $deskripsi,
							"hargaPenjualan" 		=> $hp,
							"updateDate" 			=> date("Y-m-d"),
							"kategori"				=> $kategori,
							"paket"					=> $paket,
			                "kdOperator"            => $kode);
						
			            $this->mod_dataProduk->prosesUpdateDataProduk($data,$kdProduk);
			        }else{

			        	$data 			= array(
							"namaProduk" 			=> $namaProduk,
							"deskripsi" 			=> $deskripsi,
							"hargaPenjualan" 		=> $hp,
							"updateDate" 			=> date("Y-m-d"),
							"point" 				=> $point,
							"stok" 					=> $stok,
							"kategori"				=> $kategori,
							"paket"					=> $paket,
							'gambar' 				=> $dataInfo[0]['file_name'],
					        'gambar2' 				=> $dataInfo[1]['file_name'],
					        'gambar3' 				=> $dataInfo[2]['file_name'],
			                "kdOperator"            => $kode);

			            $this->mod_dataProduk->prosesUpdateDataProduk($data,$kdProduk);
			        }

					$this->session->set_flashdata('pesan3', 
				                '<div class="alert alert-info ">    
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                <h7>BERHASIL ! </h7>
				                    <p>Berhasil mengupdate data produk</p>
				                </div>');
					
					redirect('webbackend/C_dataProduk/lihatDataProduk');
		    }
		}
		
	}

	public function deleteDataProduk(){
		$this->session->set_flashdata('pesan5', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Berhasil menghapus data produk</p>
		                </div>');

		$kdProduk = $this->input->post('kdProduk');

		$this->mod_dataProduk->deleteDataProduk($kdProduk);
		redirect('webbackend/C_dataProduk/lihatDataProduk');
	}

	public function detailProduk($kdProduk){
		$data["row"] = $this->mod_dataProduk->detailProduk($kdProduk)->result();
		$this->load->view('webbackend/V_detailDataProduk', $data);
	}

	

    public function exportAll(){
    	$data["filter"] 	 = array(
								'filter' => 0
								);
    	
		$data['produk'] = $this->mod_dataProduk->lihatDataProduk()->result();
		$this->load->view('webbackend/V_excelDataProduk',$data);
	}

	public function dataFilter(){
       // if(isset($_POST['submit'])){
            $kategori 	= $this->input->post('kategori');
            $tahun 		= $this->input->post('tahun');
            $bulan 		= $this->input->post('bulan');

            if (empty($kategori) && empty($tahun) && empty($bulan)) {
	    		$query = 0;
		    }else{
		    	$query = 1;
		    }

            $data["filter"] 	 = array(
								'tahun'   	=> $tahun,
								'bulan'  	=> $bulan,
								'kategori' 	=> $kategori,
								'filter' 	=> $query
								);

            $data['produk']= $this->mod_dataProduk->excelFilter($kategori,$tahun,$bulan)->result();
            $this->load->view('webbackend/V_excelDataProduk',$data);
        // }
    }

    public function exportAllPDF(){

	 	$dateDownload = date("d-M-Y H:i:s");

	 	$data["filter"] 	 = array('filter' => 0);
    	$data['produk'] = $this->mod_dataProduk->lihatDataProduk()->result();
    	$this->load->view('webbackend/V_laporanProduk',$data);

    	$paper_size 	= 'A4';
    	$orientation 	= 'landscape';

		// $html_content = '<h3 align="center">DATA LAYANAN KIKO GOOD GARAGE</h3><hr/>';
		$html_content = $this->output->get_output();
		$this->pdf->set_paper($paper_size, $orientation);
		// echo $html_content;die();
		$this->pdf->loadHtml($html_content);
		$this->pdf->render();
		$this->pdf->stream("Data Layanan Kiko Good garage.pdf".' - '.$dateDownload, array("Attachment"=>0));

	}

	public function dataFilterPDF(){
       // if(isset($_POST['submit'])){

       		$dateDownload = date("d-M-Y H:i:s");
       		
            $kategori 	= $this->input->post('kategori');
            $tahun 		= $this->input->post('tahun');
            $bulan 		= $this->input->post('bulan');

            if (empty($kategori) && empty($tahun) && empty($bulan)) {
	    		$query = 0;
		    }else{
		    	$query = 1;
		    }

            $data["filter"] 	 = array(
								'tahun'   	=> $tahun,
								'bulan'  	=> $bulan,
								'kategori' 	=> $kategori,
								'filter' 	=> $query
								);

            $data['produk']= $this->mod_dataProduk->excelFilter($kategori,$tahun,$bulan)->result();
            $this->load->view('webbackend/V_laporanProduk',$data);

            $paper_size 	= 'A4';
	    	$orientation 	= 'landscape';

			// $html_content = '<h3 align="center">DATA LAYANAN KIKO GOOD GARAGE</h3><hr/>';
			$html_content = $this->output->get_output();
			$this->pdf->set_paper($paper_size, $orientation);
			// echo $html_content;die();
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("Data Layanan Kiko Good garage.pdf".' - '.$dateDownload, array("Attachment"=>0));
        // }
    }

}

?>