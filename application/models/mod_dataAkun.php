<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataAkun extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function login(){
		return $this->db->get('konsumen'); 
	}

	public function lihatDataProfil($kode){
         $this->db->where("idAkun",$kode);
         return $this->db->get("konsumen");
    }

    public function ubahDataPembelian($id){
         $this->db->where("idAkun",$id);
         return $this->db->get("konsumen");
    }

    public function inputDataPembelian($id){
         $this->db->where("idAkun",$id);
         return $this->db->get("konsumen");
    }

	public function createAkun($gambar,$password){
		
			$namaLengkap 	= $this->input->post('namaLengkap');
			// $email 			= $this->input->post('email');
			$noTelepon 		= $this->input->post('noTelepon');
			// $tanggal_lahir 	= $this->input->post('tanggal_lahir');
			//$jenisKelamin 	= $this->input->post('jenisKelamin');
			// $kelurahan 		= $this->input->post('kelurahan');
			// $kecamatan 		= $this->input->post('kecamatan');
			//$kota_kab 		= $this->input->post('kota_kab');
			$alamatLengkap 	= $this->input->post('alamatLengkap');
			// $provinsi 		= $this->input->post('provinsi');
			// $kodePos 		= $this->input->post('kodePos');

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				// "username" 			=> $username,
				"password" 			=> $password,
				//"jenisKelamin" 		=> $jenisKelamin,
				"noTelepon" 		=> $noTelepon,
				// "email" 			=> $email,
				"alamatLengkap" 	=> $alamatLengkap,
				// "provinsi" 			=> $provinsi,
				// "tglLahir" 			=> $tanggal_lahir,
				// "kota_kabupaten"	=> $kota_kab,
				// "kodePos" 			=> $kodePos,
				// "kelurahan" 		=> $kelurahan,
				// "kecamatan" 		=> $kecamatan,
				"foto"				=> $gambar,
				"member"			=> 'Yes' 
			);

				$this->db->insert('konsumen',$data);
	}

	public function lihatAkun(){
		return $this->db->get("konsumen");
	}

	public function prosesUpdateAkun($gambar){

		if($gambar==null){
			$namaLengkap 	= $this->input->post('namaLengkap');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			$email 			= $this->input->post('email');
			$noTelepon 		= $this->input->post('noTelepon');
			$tglLahir 		= $this->input->post('tglLahir');
			//$jenisKelamin 	= $this->input->post('jenisKelamin');
			$kelurahan 		= $this->input->post('kelurahan');
			$kecamatan 		= $this->input->post('kecamatan');
			$kota_kab 		= $this->input->post('kota_kab');
			$alamatLengkap 	= $this->input->post('alamatLengkap');
			$provinsi 		= $this->input->post('provinsi');
			$kodePos 		= $this->input->post('kodePos');

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"username" 			=> $username,
				"password" 			=> $password,
				//"jenisKelamin" 		=> $jenisKelamin,
				"noTelepon" 		=> $noTelepon,
				"email" 			=> $email,
				"alamatLengkap" 	=> $alamatLengkap,
				"provinsi" 			=> $provinsi,
				"tglLahir" 			=> $tglLahir,
				"kota_kabupaten"	=> $kota_kab,
				"kodePos" 			=> $kodePos,
				"kelurahan" 		=> $kelurahan,
				"kecamatan" 		=> $kecamatan 
			);

				$this->db->where("idAkun",$this->input->post('idAkun'));
				return $this->db->update("konsumen",$data);
		}else{
			$namaLengkap 	= $this->input->post('namaLengkap');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			$email 			= $this->input->post('email');
			$noTelepon 		= $this->input->post('noTelepon');
			$tglLahir 		= $this->input->post('tglLahir');
			//$jenisKelamin 	= $this->input->post('jenisKelamin');
			$kelurahan 		= $this->input->post('kelurahan');
			$kecamatan 		= $this->input->post('kecamatan');
			$kota_kab 		= $this->input->post('kota_kab');
			$alamatLengkap 	= $this->input->post('alamatLengkap');
			$provinsi 		= $this->input->post('provinsi');
			$kodePos 		= $this->input->post('kodePos');

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"username" 			=> $username,
				"password" 			=> $password,
				//"jenisKelamin" 		=> $jenisKelamin,
				"noTelepon" 		=> $noTelepon,
				"email" 			=> $email,
				"alamatLengkap" 	=> $alamatLengkap,
				"provinsi" 			=> $provinsi,
				"tglLahir" 			=> $tglLahir,
				"kota_kabupaten"	=> $kota_kab,
				"kodePos" 			=> $kodePos,
				"kelurahan" 		=> $kelurahan,
				"kecamatan" 		=> $kecamatan,
				"foto"				=> $gambar 
			);

				$this->db->where("idAkun",$this->input->post('idAkun'));
				return $this->db->update("konsumen",$data);
		}
	}


	public function prosesUpdateDataPembeli(){
			$namaLengkap 	= $this->input->post('namaLengkap');
			$noTelepon 		= $this->input->post('noTelepon');
			$kelurahan 		= $this->input->post('kelurahan');
			$kecamatan 		= $this->input->post('kecamatan');
			$kota_kab 		= $this->input->post('kota_kab');
			$alamatLengkap 	= $this->input->post('alamatLengkap');
			$provinsi 		= $this->input->post('provinsi');
			$kodePos 		= $this->input->post('kodePos');

			$data 			= array(
				"namaLengkap" 		=> $namaLengkap,
				"noTelepon" 		=> $noTelepon,
				"alamatLengkap" 	=> $alamatLengkap,
				"provinsi" 			=> $provinsi,
				"kota_kabupaten"	=> $kota_kab,
				"kodePos" 			=> $kodePos,
				"kelurahan" 		=> $kelurahan,
				"kecamatan" 		=> $kecamatan,
				
			);

				$this->db->where("idAkun",$this->input->post('idAkun'));
				return $this->db->update("konsumen",$data);
	}
	
	function jumlahBerat($id){
        
        $query = $this->db->query("SELECT  SUM(berat) as jumlahBerat
                                FROM keranjang
                                WHERE idAkun=$id");
        return $query->row();
    }

    public function lihatDataMember($kode){
         $this->db->where("idAkun",$kode);
         return $this->db->get("konsumen");
    }

    public function prosesDaftarMember(){
			
			$member 		= $this->input->post('member');

			$data 			= array(
				"member" 		=> $member
				
			);

				$this->db->where("idAkun",$this->input->post('idAkun'));
				return $this->db->update("konsumen",$data);
	}
}
?>