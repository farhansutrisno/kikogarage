<?php
class C_dataPenjualan extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->model('mod_dataPenjualan');
	}
	
	public function lihatDataPenjualan(){
		$data['status'] = $this->mod_dataPenjualan->filter()->result();
		$data['tahun']	= $this->mod_dataPenjualan->tahun2()->result();
		$data['bulan']	= $this->mod_dataPenjualan->bulan()->result();
		$data['penjualan'] = $this->mod_dataPenjualan->lihatDataPenjualan()->result();


		$this->load->view('webbackend/V_lihatDataPenjualan',$data);
	}

	public function lihatHistoryReservasi(){
		$data['status'] = $this->mod_dataPenjualan->filter()->result();
		$data['tahun']	= $this->mod_dataPenjualan->tahun2()->result();
		$data['bulan']	= $this->mod_dataPenjualan->bulan()->result();
		$data['penjualan'] = $this->mod_dataPenjualan->lihatHistoryReservasi()->result();


		$this->load->view('webbackend/V_lihatHistoryReservasi',$data);
	}

	public function detailDataPenjualan2($kodeUnik,$KdTukang){

		if ($KdTukang == 0) {
			$data["row"] = $this->mod_dataPenjualan->detailDataPenjualan3($kodeUnik)->result();
			$data["KdTukang"] = array($KodeTukang = 0);
		}else{
			$data["row"] = $this->mod_dataPenjualan->detailDataPenjualan2($kodeUnik)->result();
			$data["KdTukang"] = array($KodeTukang = 1);
		}

		$data["penjualanProduk"] = $this->mod_dataPenjualan->detailDataPenjualanProduk($kodeUnik)->result();
		
		$this->load->view('webbackend/V_detailDataPenjualan', $data);
	}

	public function detailHistoryReservasi($kodeUnik,$KdTukang){

		if ($KdTukang == 0) {
			$data["row"] = $this->mod_dataPenjualan->detailDataPenjualan3($kodeUnik)->result();
			$data["KdTukang"] = array($KodeTukang = 0);
		}else{
			$data["row"] = $this->mod_dataPenjualan->detailDataPenjualan2($kodeUnik)->result();
			$data["KdTukang"] = array($KodeTukang = 1);
		}

		$data["penjualanProduk"] = $this->mod_dataPenjualan->detailDataPenjualanProduk($kodeUnik)->result();
		
		$this->load->view('webbackend/V_detailHistoryReservasi', $data);
	}


	public function updateDataPenjualan($kodeUnik){
		$data["penjualan"] = $this->mod_dataPenjualan->updateDataPenjualan($kodeUnik)->result();
		$this->load->view('webbackend/V_updateDataPenjualan', $data);
	}

	public function prosesUpdateDataPenjualan(){

	    if(isset($_POST['submit'])){
		    

			$this->session->set_flashdata('pesan1', 
		                '<div class="alert alert-info ">    
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                <h7>BERHASIL ! </h7>
		                    <p>Data penjualan berhasil diupdate</p>
		                </div>');

			$this->mod_dataPenjualan->prosesUpdateDataPenjualan();
			
			redirect('webbackend/C_dataPenjualan/lihatDataPenjualan');

		}

	}

	public function exportAll(){
		$data["filter"] 	 = array(
								'filter' => 0
								);

		$data['penjualan'] = $this->mod_dataPenjualan->lihatDataPenjualan2()->result();
		$this->load->view('webbackend/V_excelDataPenjualan',$data);
	}

	public function exportAllHistory(){
		$data["filter"] 	 = array(
								'filter' => 0
								);

		$data['penjualan'] = $this->mod_dataPenjualan->lihatDataPenjualanHistory()->result();
		$this->load->view('webbackend/V_excelDataPenjualan',$data);
	}

	public function dataFilter(){
       if(isset($_POST['submit'])){
            $status 	= $this->input->post('statusPembayaran');
            $tahun 		= $this->input->post('tahun');
            $bulan 		= $this->input->post('bulan');
            
            if (empty($status) && empty($tahun) && empty($bulan)) {
	    		$query = 0;
		    }else{
		    	$query = 1;
		    }

            $data["filter"] 	 = array(
								'tahun'  => $tahun,
								'bulan'  => $bulan,
								'status' => $status,
								'filter' => $query
								);

            $data['penjualan']= $this->mod_dataPenjualan->excelFilter($status,$tahun,$bulan)->result();
            $this->load->view('webbackend/V_excelDataPenjualan',$data);
        }
    }

    public function dataFilterHistory(){
       if(isset($_POST['submit'])){
            $tahun 		= $this->input->post('tahun');
            $bulan 		= $this->input->post('bulan');
            
            if (empty($status) && empty($tahun) && empty($bulan)) {
	    		$query = 0;
		    }else{
		    	$query = 1;
		    }

            $data["filter"] 	 = array(
								'tahun'  => $tahun,
								'bulan'  => $bulan,
								'filter' => $query
								);

            $data['penjualan']= $this->mod_dataPenjualan->excelFilterHistory($tahun,$bulan)->result();
            $this->load->view('webbackend/V_excelDataPenjualan',$data);
        }
    }

    public function prosesUpdateDataPenjualan2(){

	    $this->form_validation->set_rules('catatan','catatan','required|min_length[7]');

	    if(isset($_POST['submit'])){
		    if($this->form_validation->run() == false){

		    	$kdPembayaran		= $this->input->post('kdPembayaran');
		        $data["penjualan"] 	= $this->mod_dataPenjualan->updateDataPenjualan($kdPembayaran)->result();
				$this->load->view('webbackend/V_updateDataPenjualan', $data);

		    }
		    else{

				$this->session->set_flashdata('pesan2', 
			                '<div class="alert alert-info ">    
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <h7>BERHASIL ! </h7>
			                    <p>Data penjualan berhasil diupdate</p>
			                </div>');
				$this->mod_dataPenjualan->prosesUpdateDataPenjualan2();
				redirect('webbackend/C_dataPenjualan/lihatDataPenjualan');

		    }
		}

	}
	
}

?>