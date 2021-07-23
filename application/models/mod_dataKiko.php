<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataKiko extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();

		date_default_timezone_set('Asia/Jakarta');
	}

	public function lihatDataArtikel(){
		return $this->db->get("artikel");
	}

	public function detailDataArtikel($kdArtikel){
         $this->db->where("kdArtikel",$kdArtikel);
         return $this->db->get("artikel");
    }

	public function inputDataArtikel($gambar){
			
			$judul 			= $this->input->post('judul');
			$isiArtikel 	= $this->input->post('isiArtikel');
		
			$data 			= array(
				"judulArtikel" 		=> $judul,
				"isiArtikel" 		=> $isiArtikel,
				"tglArtikel" 		=> date("Y-m-d H:i:s"),
				"gambar"			=> $gambar
			);

			$this->db->insert('artikel',$data);
	}

	public function updateDataArtikel($kdArtikel){
		 $this->db->where("kdArtikel",$kdArtikel);
		 return $this->db->get("artikel");
	}

	public function prosesUpdateDataArtikel($gambar){

			if($gambar==null){

				$kdArtikel 		= $this->input->post('kdArtikel');
				$judulArtikel 	= $this->input->post('judulArtikel');
				$isiArtikel 	= $this->input->post('isiArtikel');
				
				$data 			= array(
					"judulArtikel" 		=> $judulArtikel,
					"isiArtikel" 		=> $isiArtikel,
					"tglUpdateArtikel" 	=> date("Y-m-d H:i:s"),
					 
				);

				$this->db->where("kdArtikel",$kdArtikel);
				return $this->db->update("artikel",$data);

			}else{
					$kdArtikel 		= $this->input->post('kdArtikel');
					$judulArtikel 	= $this->input->post('judulArtikel');
					$isiArtikel 	= $this->input->post('isiArtikel');
					
					$data 			= array(
						"judulArtikel" 		=> $judulArtikel,
						"isiArtikel" 		=> $isiArtikel,
						"tglUpdateArtikel" 	=> date("Y-m-d H:i:s"),
						"gambar"				=> $gambar 
					);

				$this->db->where("kdArtikel",$kdArtikel);
				return $this->db->update("artikel",$data);
			}
	}

	public function deleteDataArtikel($kdArtikel){
		$this->db->where("kdArtikel",$kdArtikel);
		return $this->db->delete("artikel");
	}

	public function detailDataArtikelFo($kdArtikel){
		 $this->db->where("kdArtikel",$kdArtikel);
		 return $this->db->get("artikel");
	}

	public function detailDataArtikelBo($kdArtikel){
		 $this->db->where("kdArtikel",$kdArtikel);
		 return $this->db->get("artikel");
	}

	/*
	model data galeri
	==================================================================================
	*/

	public function lihatDataGaleri(){
		$this->db->where("tipe",1);
		return $this->db->get("galeri");
	}

	public function lihatDataGaleriVideo(){
		$this->db->where("tipe",2);
		return $this->db->get("galeri");
	}

	public function lihatDataGaleriFo($limit, $start){
		$this->db->where("tipe",1);
		return $this->db->get("galeri",$limit, $start);
	}

	public function detailDataGaleri($kdGaleri){
         $this->db->where("kdGaleri",$kdGaleri);
         return $this->db->get("galeri");
    }

	public function inputDataGaleri($gambar){
			
			$judulGaleri	= $this->input->post('judulGaleri');
		
			$data 			= array(
				"judulGaleri" 		=> $judulGaleri,
				"tglGaleri" 		=> date("Y-m-d H:i:s"),
				"tipe"				=> 1,
				"gambar"			=> $gambar
			);

			$this->db->insert('galeri',$data);
	}

	public function inputDataGaleriVideo($data){
			
			$this->db->insert('galeri',$data);
	}

	public function updateDataGaleri($kdGaleri){
		 $this->db->where("kdGaleri",$kdGaleri);
		 return $this->db->get("galeri");
	}

	public function prosesUpdateDataGaleri($data){

		$kdGaleri 		= $this->input->post('kdGaleri');
		
		$this->db->where("kdGaleri",$kdGaleri);
		return $this->db->update("galeri",$data);
	}

	public function deleteDataGaleri($kdGaleri){
		$this->db->where("kdGaleri",$kdGaleri);
		return $this->db->delete("galeri");
	}

	public function detailDataGaleriFo($kdGaleri){
		 $this->db->where("kdGaleri",$kdGaleri);
		 return $this->db->get("galeri");
	}
	
}
?>