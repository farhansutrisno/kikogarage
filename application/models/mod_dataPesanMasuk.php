<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataPesanMasuk extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function kirimPesan(){
			$namaLengkap 	= $this->input->post('namaLengkap');
			$noTelepon 		= $this->input->post('noTelepon');
			$isiPesan 		= $this->input->post('isiPesan');

			$data 			= array(
				"namaLengkap" 			=> $namaLengkap,
				"noTelepon" 			=> $noTelepon,
				"isiPesan" 				=> $isiPesan,
				"tglPesan" 				=> date("Y-m-d"),
				"jamPesan"				=> date("H:i:s")
			);

				$this->db->insert('pesanMasuk',$data);
	}

	public function lihatPesanMasuk(){
		$this->db->order_by('tglPesan', 'DESC');
		return $this->db->get("pesanMasuk");
	}
	
	public function deletePesanMasuk($kdPesanMasuk){
		$this->db->where("kdPesanMasuk",$kdPesanMasuk);
		return $this->db->delete("pesanMasuk");
	}

	public function detailPesanMasuk($kdPesanMasuk){
         $this->db->where("kdPesanMasuk",$kdPesanMasuk);
         return $this->db->get("pesanMasuk");
    }
}
?>