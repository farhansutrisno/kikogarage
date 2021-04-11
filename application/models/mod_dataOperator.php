<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataOperator extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
		
	}

	public function detailDataOperator($kdOperator){
         $this->db->where("kdOperator",$kdOperator);
         return $this->db->get("operator");
    }

	public function inputDataOperator($gambar){
			
			$namaLengkap 	= $this->input->post('namaLengkap');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			$email 			= $this->input->post('email');
			$tglLahir 		= $this->input->post('tglLahir');
			$noTelepon 		= $this->input->post('noTelepon');
			$jenisKelamin 	= $this->input->post('jenisKelamin');
			$kelurahan 		= $this->input->post('kelurahan');
			$kecamatan		= $this->input->post('kecamatan');
			$kota_kab 		= $this->input->post('kota_kab');
			$provinsi		= $this->input->post('provinsi');
			$alamatLengkap	= $this->input->post('alamatLengkap');
			$kodePos		= $this->input->post('kodePos');
			$status			= $this->input->post('status');

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"username" 			=> $username,
				"password" 			=> $password,
				"email" 			=> $email,
				"tglLahir" 			=> $tglLahir,
				"noTelepon" 		=> $noTelepon,
				"jenisKelamin" 		=> $jenisKelamin,
				"kelurahan" 		=> $kelurahan,
				"kecamatan" 		=> $kecamatan,
				"kota_kab"			=> $kota_kab,
				"provinsi"			=> $provinsi,
				"alamatLengkap"		=> $alamatLengkap,
				"kodePos"			=> $kodePos,
				"foto"				=> $gambar,
				"status"			=> $status
			);

			$this->db->insert('operator',$data);
	}

	

	public function lihatDataOperator(){
		return $this->db->get("operator");
	}
	
	public function deleteDataOperator($kdOperator){
		$this->db->where("kdOperator",$kdOperator);
		return $this->db->delete("operator");
	}

	public function updateDataOperator($kdOperator){
		 $this->db->where("kdOperator",$kdOperator);
		 return $this->db->get("operator");
	}


	//==============================================================
	//data tukang

	public function inputDataTukang($gambar){
			
			$namaLengkap 	= $this->input->post('namaLengkap');
			$noTelepon 		= $this->input->post('noTelepon');
			$jenisKelamin 	= $this->input->post('jenisKelamin');
		
			$data 			= array(
				"nama_lengkap" 		=> $namaLengkap,
				"noTelepon" 		=> $noTelepon,
				"jenisKelamin" 		=> $jenisKelamin,
				"status"			=> 1,
				"foto"				=> $gambar
			);

			$this->db->insert('tukang',$data);
	}

	public function lihatDataTukang(){
		return $this->db->get("tukang");
	}

	public function deleteDataTukang($KdTukang){
		$this->db->where("KdTukang",$KdTukang);
		return $this->db->delete("tukang");
	}

	public function updateDataTukang($KdTukang){
		 $this->db->where("KdTukang",$KdTukang);
		 return $this->db->get("tukang");
	}

	public function prosesUpdateDataOperator($gambar){

			if($gambar==null){

				$kdOperator 	= $this->input->post('kdOperator');
				$namaLengkap 	= $this->input->post('namaLengkap');
				$username 		= $this->input->post('username');
				$password 		= $this->input->post('password');
				$email 			= $this->input->post('email');
				$tglLahir 		= $this->input->post('tglLahir');
				$noTelepon 		= $this->input->post('noTelepon');
				$jenis 			= $this->input->post('jenis');
				$kelurahan 		= $this->input->post('kelurahan');
				$kecamatan		= $this->input->post('kecamatan');
				$kota_kab 		= $this->input->post('kota_kab');
				$provinsi		= $this->input->post('provinsi');
				$alamatLengkap	= $this->input->post('alamatLengkap');
				$kodePos		= $this->input->post('kodePos');
				$status 		= $this->input->post('status');

				$data 			= array(
					"namaLengkap" 		=> $namaLengkap,
					"username" 			=> $username,
					"password" 			=> $password,
					"email" 			=> $email,
					"tglLahir" 			=> $tglLahir,
					"noTelepon" 		=> $noTelepon,
					"jenisKelamin" 		=> $jenis,
					"kelurahan" 		=> $kelurahan,
					"kecamatan" 		=> $kecamatan,
					"kota_kab"			=> $kota_kab,
					"provinsi"			=> $provinsi,
					"alamatLengkap"		=> $alamatLengkap,
					"kodePos"			=> $kodePos,
					"status"			=> $status
				);

			$this->db->where("kdOperator",$kdOperator);
			return $this->db->update("operator",$data);
		}else{
				$kdOperator 	= $this->input->post('kdOperator');
				$namaLengkap 	= $this->input->post('namaLengkap');
				$username 		= $this->input->post('username');
				$password 		= $this->input->post('password');
				$email 			= $this->input->post('email');
				$tglLahir 		= $this->input->post('tglLahir');
				$noTelepon 		= $this->input->post('noTelepon');
				$jenis 			= $this->input->post('jenis');
				$kelurahan 		= $this->input->post('kelurahan');
				$kecamatan		= $this->input->post('kecamatan');
				$kota_kab 		= $this->input->post('kota_kab');
				$provinsi		= $this->input->post('provinsi');
				$alamatLengkap	= $this->input->post('alamatLengkap');
				$kodePos		= $this->input->post('kodePos');

				$data 			= array(
					"namaLengkap" 		=> $namaLengkap,
					"username" 			=> $username,
					"password" 			=> $password,
					"email" 			=> $email,
					"tglLahir" 			=> $tglLahir,
					"noTelepon" 		=> $noTelepon,
					"jenisKelamin" 		=> $jenis,
					"kelurahan" 		=> $kelurahan,
					"kecamatan" 		=> $kecamatan,
					"kota_kab"			=> $kota_kab,
					"provinsi"			=> $provinsi,
					"alamatLengkap"		=> $alamatLengkap,
					"kodePos"			=> $kodePos,
					"foto"				=> $gambar 
				);

			$this->db->where("kdOperator",$kdOperator);
			return $this->db->update("operator",$data);
		}
	}

	public function prosesUpdateDataTukang($gambar){

			if($gambar==null){

				$KdTukang 		= $this->input->post('KdTukang');
				$namaLengkap 	= $this->input->post('namaLengkap');
				$noTelepon 		= $this->input->post('noTelepon');
				$jenis 			= $this->input->post('jenis');
				
				$data 			= array(
					"nama_lengkap" 		=> $namaLengkap,
					"noTelepon" 		=> $noTelepon,
					"jenisKelamin" 		=> $jenis
					 
				);

			$this->db->where("KdTukang",$KdTukang);
			return $this->db->update("tukang",$data);
		}else{
				$KdTukang 		= $this->input->post('KdTukang');
				$namaLengkap 	= $this->input->post('namaLengkap');
				$noTelepon 		= $this->input->post('noTelepon');
				$jenis 			= $this->input->post('jenis');
				
				$data 			= array(
					"namaLengkap" 		=> $namaLengkap,
					"noTelepon" 		=> $noTelepon,
					"jenisKelamin" 		=> $jenis,
					"foto"				=> $gambar 
				);

			$this->db->where("KdTukang",$KdTukang);
			return $this->db->update("tukang",$data);
		}
	}

	public function detailDataTukang($KdTukang){
         $this->db->where("KdTukang",$KdTukang);
         return $this->db->get("tukang");
    }

    public function lihatDataKonsumen(){
    	
		return $this->db->get("konsumen");

	}

	public function deleteDataKonsumen($idAkun){
		$this->db->where("idAkun",$idAkun);
		return $this->db->delete("konsumen");
	}

	public function detailDataKonsumen($idAkun){
         $this->db->where("idAkun",$idAkun);
         return $this->db->get("konsumen");
    }

    public function updateDataKonsumen($idAkun){
		 $this->db->where("idAkun",$idAkun);
		 return $this->db->get("konsumen");
	}

	public function prosesUpdateDataKonsumen(){

		
			$idAkun 		= $this->input->post('idAkun');
			$member 		= $this->input->post('member');
			
			$data 			= array(
				"member" 		=> $member
				 
			);

			$this->db->where("idAkun",$idAkun);
			return $this->db->update("konsumen",$data);
		
	}
}
?>