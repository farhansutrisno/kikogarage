<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataPenjualan extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function lihatDataPenjualan(){

		$this->db->distinct();
		$this->db->select('konsumen.namaLengkap,konsumen.noTelepon,pembelian.tglTransaksi,pembelian.KdTukang,pembelian.kodeUnik,pembelian.noAntrian,pembelian.noPlat,pembelian.totalBayar,pembelian.statusPembayaran,pembelian.tglPembayaran,pembelian.jenisBooking,pembelian.idAkun');
		$this->db->from('pembelian');
		$this->db->join('konsumen','konsumen.idAkun = pembelian.idAkun');
		$this->db->order_by('kdPembelian','ASC');
		 $this->db->where("statusPembayaran !=",'Selesai');
		return $this->db->get();
	}

	public function lihatDataPegawaiKiko(){

		$this->db->distinct();
		$this->db->select('KdTukang, nama_lengkap, noTelepon, status');
		$this->db->from('tukang');
		$this->db->order_by('status','ASC');
		return $this->db->get();
	}

	public function lihatHistoryReservasi(){

		$this->db->distinct();
		$this->db->select('konsumen.namaLengkap,konsumen.noTelepon,pembelian.tglTransaksi,pembelian.KdTukang,pembelian.kodeUnik,pembelian.noAntrian,pembelian.noPlat,pembelian.totalBayar,pembelian.statusPembayaran,pembelian.tglPembayaran');
		$this->db->from('pembelian');
		$this->db->join('konsumen','konsumen.idAkun = pembelian.idAkun');
		$this->db->order_by('kdPembelian','DESC');
		$this->db->where("statusPembayaran =",'Selesai');
		return $this->db->get();
	}

	public function lihatDataPenjualan2(){
		
		$this->db->select('konsumen.namaLengkap,konsumen.email, konsumen.noTelepon, konsumen.kelurahan, konsumen.kecamatan, konsumen.kota_kabupaten, konsumen.provinsi, konsumen.alamatLengkap, konsumen.kodePos, pembelian.noAntrian, pembelian.noPlat, pembelian.jenisBooking, pembelian.tglTransaksi, pembelian.statusPembayaran, produk.namaProduk, produk.kategori, pembelian.totalBayar, konsumen.foto as fotoKonsumen');
		$this->db->from('konsumen');
		$this->db->join('pembelian','pembelian.idAkun = konsumen.idAkun');
		$this->db->join('produk','produk.kdProduk = pembelian.kdProduk');
		$this->db->order_by('pembelian.kdPembelian','DESC');
		$this->db->where("statusPembayaran !=",'Selesai');
		return $this->db->get();
	}

	public function lihatDataPenjualanHistory(){
		
		$this->db->select('konsumen.namaLengkap,konsumen.email, konsumen.noTelepon, konsumen.kelurahan, konsumen.kecamatan, konsumen.kota_kabupaten, konsumen.provinsi, konsumen.alamatLengkap, konsumen.kodePos, pembelian.noAntrian, pembelian.noPlat, pembelian.jenisBooking, pembelian.tglTransaksi, pembelian.statusPembayaran, produk.namaProduk, produk.kategori, pembelian.totalBayar, konsumen.foto as fotoKonsumen');
		$this->db->from('konsumen');
		$this->db->join('pembelian','pembelian.idAkun = konsumen.idAkun');
		$this->db->join('produk','produk.kdProduk = pembelian.kdProduk');
		$this->db->order_by('pembelian.kdPembelian','DESC');
		$this->db->where("statusPembayaran =",'Selesai');
		return $this->db->get();
	}

    public function detailDataPenjualan2($kodeUnik){
        $this->db->select('konsumen.namaLengkap,konsumen.email, konsumen.noTelepon, konsumen.kelurahan, konsumen.kecamatan, konsumen.kota_kabupaten, konsumen.provinsi, konsumen.alamatLengkap, konsumen.kodePos, pembelian.noAntrian, pembelian.noPlat, pembelian.jenisBooking, pembelian.tglTransaksi, pembelian.tglPembayaran, pembelian.statusPembayaran, pembelian.catatan, pembelian.kodeUnik, pembelian.idAkun, pembelian.KdTukang, produk.namaProduk, produk.kategori, pembelian.totalBayar, tukang.nama_lengkap, tukang.noTelepon as tukangHP, tukang.jenisKelamin, konsumen.foto as fotoKonsumen');
		$this->db->from('konsumen');
		$this->db->join('pembelian','pembelian.idAkun = konsumen.idAkun');
		$this->db->join('produk','produk.kdProduk = pembelian.kdProduk');
		$this->db->join('tukang','tukang.KdTukang = pembelian.KdTukang');
		$this->db->where("kodeUnik",$kodeUnik);
		return $this->db->get();
    }

    public function detailDataPenjualan3($kodeUnik){
        $this->db->select('konsumen.namaLengkap, konsumen.noTelepon, konsumen.alamatLengkap, pembelian.noAntrian, pembelian.noPlat, pembelian.jenisBooking, pembelian.tglTransaksi, pembelian.tglPembayaran, pembelian.statusPembayaran, pembelian.totalBayar, pembelian.catatan, pembelian.kodeUnik, pembelian.idAkun, pembelian.KdTukang, konsumen.foto as fotoKonsumen');
		$this->db->from('konsumen');
		$this->db->join('pembelian','pembelian.idAkun = konsumen.idAkun');
		// $this->db->join('produk','produk.kdProduk = pembelian.kdProduk');
		$this->db->where("kodeUnik",$kodeUnik);
		return $this->db->get();
    }

    public function detailDataPenjualanProduk($kodeUnik){
        $this->db->select('*');
		$this->db->from('pembelian');
		$this->db->join('produk','produk.kdProduk = pembelian.kdProduk');
		$this->db->where("kodeUnik",$kodeUnik);
		return $this->db->get();
    }

	public function updateDataPenjualan($kodeUnik){
		 $this->db->where("kodeUnik",$kodeUnik);
		 return $this->db->get("pembelian");
	}

	public function prosesUpdateDataPenjualan(){

			$kodeUnik 		= $this->input->post('kodeUnik');
			$idAkun			= $this->input->post('idAkun');
			$kdoperator		= $this->input->post('kdoperator');
			$KdTukang		= $this->input->post('KdTukang');
			$status			= $this->input->post('statusPengerjaan');
			$catatan		= $this->input->post('catatan');

			$data 			= array(
				
				"kodeUnik" 			=> $kodeUnik,
				"status"			=> $status,
				"kdOperator"		=> $kdoperator,
				"createDate"		=> date("Y-m-d H:i:s"),
				"idAkun"			=> $idAkun
				
			);

			$this->db->insert("history",$data);

			if ($status == 'Selesai') {

				$data1 			= array(
					"statusPembayaran"	=> $status,	
					"catatan"			=> $catatan,
				);

				$this->db->where("kodeUnik",$kodeUnik);
				$this->db->update("pembelian",$data1);

				$query = $this->db->select('*');
				$query = $this->db->where("idAkun",$idAkun);
				$query = $this->db->get('konsumen')->result();
				
				if ($query[0]->member == 'Yes') {
					$poin = $query[0]->poin + 1;
				}else{
					$poin = 0;
				}

				$datapoin 			= array(
					"poin"	=> $poin,
				);

				$this->db->where("idAkun",$idAkun);
				$this->db->update("konsumen",$datapoin);

				$datatukang  = array(
					"status"	=> 1,
				);

				$this->db->where("KdTukang",$KdTukang);
				return $this->db->update("tukang",$datatukang);

			}else{

				if ($status == 'Pengerjaan') {
					$datatukang  = array(
						"status"	=> 2,
					);

					$this->db->where("KdTukang",$KdTukang);
					$this->db->update("tukang",$datatukang);
				}

				$data1 			= array(
					"statusPembayaran"	=> $status,	
				);

				$this->db->where("kodeUnik",$kodeUnik);
				return $this->db->update("pembelian",$data1);
				
			}

	}

	public function prosesUpdateDataPenjualan2(){
			$kode			= $this->input->post('bismillah');
			$catatan 		= $this->input->post('catatan');
			$kdPembayaran 	= $this->input->post('kdPembayaran');
			$data 			= array(
				
				"catatan" 					=> $catatan,
				"statusPembayaran"			=> 'belum dibayar',
				"kdOperator"				=> $kode
				
			);

		$this->db->where("kdPembayaran",$kdPembayaran);
		return $this->db->update("pembelian",$data);
	}

	public function filter(){
        return $this->db->query("SELECT DISTINCT statusPembayaran FROM pembelian WHERE statusPembayaran != 'Selesai'");
    }

    public function bulan(){
        return $this->db->query("SELECT DISTINCT MONTH(tglTransaksi) AS bulan FROM pembelian  order by bulan ASC");
    }

    public function bulanReservasi(){
        return $this->db->query("SELECT DISTINCT MONTH(tglTransaksi) AS bulan FROM pembelian WHERE statusPembayaran != 'Selesai' order by bulan ASC");
    }

    public function excelFilter($status,$tahun,$bulan)
    {

        $query = "select konsumen.namaLengkap,konsumen.email, konsumen.noTelepon, konsumen.kelurahan, konsumen.kecamatan, konsumen.kota_kabupaten, konsumen.provinsi, konsumen.alamatLengkap, konsumen.kodePos, pembelian.kdPembelian, pembelian.noAntrian, pembelian.noPlat, pembelian.jenisBooking, pembelian.tglTransaksi, pembelian.statusPembayaran, produk.namaProduk, produk.kategori, pembelian.totalBayar, pembelian.tglPembayaran, pembelian.kodeUnik, konsumen.foto as fotoKonsumen from konsumen inner join pembelian on konsumen.idAkun=pembelian.idAkun inner join produk on pembelian.kdProduk=produk.kdProduk where";

        if ($bulan >= 10) {

	        if($status != ""){
	         $query = $query." pembelian.statusPembayaran = '".$status."' and";
	        }

	        if($tahun != ""){
	        $query = $query." pembelian.tglTransaksi BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31' and";
	        }

	    }else{

	    	if($status != ""){
	         $query = $query." statusPembayaran = '".$status."' and";
	        }

	        $bln = "0".$bulan;
	        if($tahun != ""){
	        $query = $query." pembelian.tglTransaksi BETWEEN '".$tahun."-".$bln."-01' AND '".$tahun."-".$bln."-31' and";
	        }
	    }

	    if (empty($status) && empty($tahun) && empty($bulan)) {
	    	$query = substr($query, 0,-5);// membuang where
	    }else{
	    	$query = substr($query, 0,-3);// membuang and
	    }

	    $bismillah = $query." order by pembelian.tglTransaksi desc";

        return $this->db->query("$bismillah");        
    }

    public function excelFilterHistory($tahun,$bulan)
    {

        $query = "select konsumen.namaLengkap,konsumen.email, konsumen.noTelepon, konsumen.kelurahan, konsumen.kecamatan, konsumen.kota_kabupaten, konsumen.provinsi, konsumen.alamatLengkap, konsumen.kodePos, pembelian.kdPembelian, pembelian.noAntrian, pembelian.noPlat, pembelian.jenisBooking, pembelian.tglTransaksi, pembelian.tglPembayaran, pembelian.statusPembayaran, pembelian.kodeUnik, produk.namaProduk, produk.kategori, pembelian.totalBayar, konsumen.foto as fotoKonsumen from konsumen inner join pembelian on konsumen.idAkun=pembelian.idAkun inner join produk on pembelian.kdProduk=produk.kdProduk where";

        $query = $query." statusPembayaran = 'Selesai' and";

        if ($bulan >= 10) {

	        if($tahun != ""){
	        $query = $query." pembelian.tglTransaksi BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31' and";
	        }

	    }else{

	        $bln = "0".$bulan;
	        if($tahun != ""){
	        $query = $query." pembelian.tglTransaksi BETWEEN '".$tahun."-".$bln."-01' AND '".$tahun."-".$bln."-31' and";
	        }
	    }

	    if (empty($tahun) && empty($bulan)) {
	    	$query = substr($query, 0,-5);// membuang where
	    }else{
	    	$query = substr($query, 0,-3);// membuang and
	    }

	    $bismillah = $query." order by pembelian.tglTransaksi desc";

        return $this->db->query("$bismillah");        
    }

    public function tahun2(){
        return $this->db->query("SELECT DISTINCT YEAR(tglTransaksi) AS tanggal1 FROM pembelian  order by tanggal1 desc");
    }

    public function tahunReservasi(){
        return $this->db->query("SELECT DISTINCT YEAR(tglTransaksi) AS tanggal1 FROM pembelian WHERE statusPembayaran != 'Selesai' order by tanggal1 desc");
    }

    public function deleteDataPenjualan($kodeUnik){
        $this->db->where("kodeUnik",$kodeUnik);
        return $this->db->delete("pembelian");
    }

}
?>