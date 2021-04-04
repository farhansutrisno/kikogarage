<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataProduk extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
        date_default_timezone_set('Asia/Jakarta');
	}

    public function jmlKeranjang(){
        $kode = $this->session->userdata('kode');
        $query = $this->db->query("SELECT COUNT(kdKeranjang) as jmlKeranjang
                                from keranjang Where idAkun='$kode' ");
        return $query->row();
    }

    public function detailProduk($kdProduk){
         $this->db->where("kdProduk",$kdProduk);
         return $this->db->get("produk");
    }

    public function lihatDetailProduk($id){
         $this->db->where("kdProduk",$id);
         return $this->db->get("produk");
    }
    //function dibawah ini tidak terpakai
    //=========================================
    public function lihatDetailProdukLogin($id){
         $this->db->where("kdProduk",$id);
         return $this->db->get("produk");
    }
    //==========================================

	public function inputDataProduk($data){
		$this->db->insert('produk',$data);
	}

    public function lihatKeranjang(){
        $kode = $this->session->userdata('kode');

        $this->db->where("idAkun",$kode);
        return $this->db->get("keranjang");
    }

    public function cekJumlah($kdProduk){
        $this->db->select('jml_produk,berat');
        $this->db->where("kdProduk",$kdProduk);
        return $this->db->get("keranjang");
    }

    public function cekBerat($kdProduk){
        $this->db->select('berat');
        $this->db->where("kdProduk",$kdProduk);
        return $this->db->get("produk");
    }

    public function prosesTambah($data){

                $this->db->insert('keranjang',$data);
    }

    //function dibawah ini tidak dipakai
    //=============================================================
    public function prosesUpdate($data,$kdKeranjang){
            // $qty            = $this->input->post('qty');
            // $kdProduk       = $this->input->post('kdProduk');
            // $harga          = $this->input->post('harga');

            // $data           = array(
            //     "jml_produk"    => $qty,
            //     "subtotal"      => $qty * $harga    
            // );

        $this->db->where("kdKeranjang",$kdKeranjang);
        return $this->db->update("keranjang",$data);

    }

    //tambahan revisi sidang
    public function ubahData($data,$kdProduk){

        $this->db->where("kdProduk",$kdProduk);
        return $this->db->update("keranjang",$data);

    }
    //================================================================

    public function cekKeranjang($kdProduk){
        $this->db->select('stok');
        $this->db->from('produk');
        $this->db->join('keranjang','keranjang.kdProduk = produk.kdProduk');
        $this->db->where('keranjang.kdProduk',$kdProduk);
        return $this->db->get();
    }

    //function tambahan revisi sidang
    public function jumlahProduk($kdKeranjang){
        $this->db->select('jml_produk');
        $this->db->where("kdKeranjang",$kdKeranjang);
        return $this->db->get("keranjang");
    }

    //function tambahan revisi sidang
    public function cekProduk($kdProduk){
        $this->db->select('kdProduk');
        $this->db->where("kdProduk",$kdProduk);
        return $this->db->get("keranjang");
    }

    public function deleteProduk($id){
        $this->db->where("kdKeranjang",$id);
        return $this->db->delete("keranjang");
    }

	public function lihatDataProduk(){
		$this->db->order_by('tglPembelian', 'DESC');
		return $this->db->get("produk");
	}

    public function lihatDataProdukDetail($kategori){
        $this->db->where('kategori', $kategori);
        return $this->db->get("produk");
    }

    public function carwash(){
        $this->db->select('*');
        $this->db->where('kategori','Cars Wash');
        // $this->db->order_by('tglPembelian', 'DESC');
        return $this->db->get("produk");
    }

    public function coating(){
        $this->db->select('*');
        $this->db->where('kategori','Coating');
        // $this->db->order_by('tglPembelian', 'DESC');
        return $this->db->get("produk");
    }

    public function terlaris(){
        $this->db->select('*');
        return $this->db->get("produk");
    }

	public function lihatDataProduk2($limit, $start){
		
        $data_produk     = $this->input->post('data_produk');

        $this->db->select('*');
        $this->db->like('namaProduk',$data_produk);
		return $this->db->get("produk",$limit, $start);
	}

    public function kategori_makanan($limit, $start,$kategori){
        $this->db->select('*');
        $this->db->where('kategori',$kategori);
        return $this->db->get("produk",$limit, $start);
    }

    public function countpencarian($kategori){
        // $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as data
                                FROM produk
                                WHERE kategori= '".$kategori."'";
        return $this->db->query("$query");
    }

    //function dibawah ini tidak dipakai
    //==============================================================
    public function kategori_minuman($limit, $start,$kategori){

        $this->db->select('*');
        $this->db->where('kategori',$kategori);
        return $this->db->get("produk",$limit, $start);
    }

    public function kategori_ringan($limit, $start,$kategori){

        $this->db->select('*');
        $this->db->where('kategori',$kategori);
        return $this->db->get("produk",$limit, $start);
    }

    public function kategori_kebersihan($limit, $start,$kategori){

        $this->db->select('*');
        $this->db->where('kategori',$kategori);
        return $this->db->get("produk",$limit, $start);
    }

    public function kategori_tulis($limit, $start,$kategori){

        $this->db->select('*');
        $this->db->where('kategori',$kategori);
        return $this->db->get("produk",$limit, $start);
    }

    public function kategori_buku($limit, $start,$kategori){

        $this->db->select('*');
        $this->db->where('kategori',$kategori);
        return $this->db->get("produk",$limit, $start);
    }

    public function kategori_barang($limit, $start,$kategori){

        $this->db->select('*');
        $this->db->where('kategori',$kategori);
        return $this->db->get("produk",$limit, $start);
    }

    public function kategori_lain($limit, $start,$kategori){

        $this->db->select('*');
        $this->db->where('kategori',$kategori);
        return $this->db->get("produk",$limit, $start);
    }
    //=============================================================
	
	public function deleteDataProduk($kdProduk){
		$this->db->where("kdProduk",$kdProduk);
		return $this->db->delete("produk");
	}

	public function updateDataProduk($kdProduk){
		 $this->db->where("kdProduk",$kdProduk);
		 return $this->db->get("produk");
	}

	public function prosesUpdateDataProduk($data,$kdProduk){
        $this->db->where("kdProduk",$kdProduk);
        return $this->db->update("produk",$data);
  //       if($foto==null){

		// 	$kdProduk 		= $this->input->post('kdProduk');
		// 	$namaProduk 	= $this->input->post('namaProduk');
		// 	$namaSuplier 	= $this->input->post('namaSuplier');
		// 	$deskripsi 		= $this->input->post('deskripsi');
		// 	$expired 		= $this->input->post('expired');
		// 	$hp 			= $this->input->post('hp');
		// 	$hpp 			= $this->input->post('hpp');
		// 	$tglPembelian 	= $this->input->post('tglPembelian');
		// 	$berat 			= $this->input->post('berat');
		// 	$stok 			= $this->input->post('stok');
		// 	$kategori 		= $this->input->post('kategori');

		// 	$data 			= array(
		// 		"namaProduk" 			=> $namaProduk,
		// 		"namaSuplier" 			=> $namaSuplier,
		// 		"deskripsi" 			=> $deskripsi,
		// 		"expired" 				=> $expired,
		// 		"hargaPenjualan" 		=> $hp,
		// 		"hargaPokokPembelian" 	=> $hpp,
		// 		"tglPembelian" 			=> $tglPembelian,
		// 		"berat" 				=> $berat,
		// 		"stok" 					=> $stok,
		// 		"kategori"				=> $kategori 
		// 	);

		// $this->db->where("kdProduk",$kdProduk);
		// return $this->db->update("dataproduk",$data);

  //       }else{
  //           $kdProduk       = $this->input->post('kdProduk');
  //           $namaProduk     = $this->input->post('namaProduk');
  //           $namaSuplier    = $this->input->post('namaSuplier');
  //           $deskripsi      = $this->input->post('deskripsi');
  //           $expired        = $this->input->post('expired');
  //           $hp             = $this->input->post('hp');
  //           $hpp            = $this->input->post('hpp');
  //           $tglPembelian   = $this->input->post('tglPembelian');
  //           $berat          = $this->input->post('berat');
  //           $stok           = $this->input->post('stok');
  //           $kategori       = $this->input->post('kategori');

  //           $data           = array(
  //               "namaProduk"            => $namaProduk,
  //               "namaSuplier"           => $namaSuplier,
  //               "deskripsi"             => $deskripsi,
  //               "expired"               => $expired,
  //               "hargaPenjualan"        => $hp,
  //               "hargaPokokPembelian"   => $hpp,
  //               "tglPembelian"          => $tglPembelian,
  //               "berat"                 => $berat,
  //               "stok"                  => $stok,
  //               "kategori"              => $kategori,
  //               "gambar"                => $foto 
  //           );

  //       $this->db->where("kdProduk",$kdProduk);
  //       return $this->db->update("dataproduk",$data);
  //       }

	}

    public function penjualan(){
        $this->db->select('');
        $this->db->from('produk');
        $this->db->join('pembelian','pembelian.kdProduk = produk.kdProduk');
        return $this->db->get();
    }

  	public function filter(){
        return $this->db->query("SELECT DISTINCT kategori FROM produk");
    }

    public function tahun2(){
        return $this->db->query("SELECT DISTINCT YEAR(createDate) AS tanggal1 FROM produk  order by tanggal1 desc");
    }

    public function bulan(){
        return $this->db->query("SELECT DISTINCT MONTH(createDate) AS bulan FROM produk  order by bulan ASC");
    } 

    public function excelFilter($kategori,$tahun,$bulan)
    {
        $query = "select * from produk where";

        if ($bulan >= 10) {

            if($kategori != ""){
                $query = $query." kategori = '".$kategori."' and";
            }

            if($tahun OR $bulan != ""){
                $query = $query." createDate BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31' and";
            }    

        }else{

            if($kategori != ""){
                $query = $query." kategori = '".$kategori."' and";
            }

            $bln = "0".$bulan;
            if($tahun OR $bulan != ""){
                $query = $query." createDate BETWEEN '".$tahun."-".$bln."-01' AND '".$tahun."-".$bln."-31' and";
            }  
        }

        if (empty($kategori) && empty($tahun) && empty($bulan)) {
            $bismillah = substr($query, 0,-5);// membuang where
        }else{
            $bismillah = substr($query, 0,-3);// membuang and
        }
        
        $bismillah = $bismillah." order by createDate asc";

        return $this->db->query("$bismillah");        
    }
    //=======================================================================
    //garfik berdasarkan jumlah produk
    public function jml_produk(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT COUNT(kdProduk) as jml_produk
                                from produk
                                WHERE createDate BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    public function jml_produk2(){
        // $tahun = $this->session->userdata('tahun');
        $query = "SELECT COUNT(kdProduk) as jml_produk
                                from produk";
        return $this->db->query("$query");
    }

    
    //============================================================================================

    public function jml_pesan(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT COUNT(kdPesanMasuk) as jml_pesan
                                from pesanmasuk
                                WHERE tglPesan BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }
    //=======================================================================
    //garfik berdasarkan jumlah produk
    public function jml_penjualan(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT COUNT(kdPembelian) as jml_penjualan
                                from pembelian
                                WHERE tglTransaksi BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    public function jml_penjualan2(){
        // $tahun = $this->session->userdata('tahun');
        $query = "SELECT COUNT(kdPembelian) as jml_penjualan
                                from pembelian";
        return $this->db->query("$query");
    }
    //==============================================================================
    //berdasarkan kategori
    
    function tahun(){
        return $this->db->query("SELECT DISTINCT YEAR(createDate) AS tanggal FROM produk  order by tanggal desc");
    }                           

    function get_kategori($kategori){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as data
                                FROM produk
                                WHERE kategori= '".$kategori."' AND createDate BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function kategori_value($kategori){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as data
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='".$kategori."' AND pembelian.tglTransaksi BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function seluruhnya($status){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(statusPembayaran) as data
                                FROM pembelian
                                WHERE statusPembayaran = '".$status."' AND tglTransaksi BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function jenisBooking($jenisBooking){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as data
                                FROM pembelian
                                WHERE jenisBooking = '".$jenisBooking."' AND tglTransaksi BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function get_bulan($bulan){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as total_bayar
                                FROM pembelian WHERE tglTransaksi LIKE '".$tahun."-".$bulan."-%'";
        return $this->db->query("$query");
    }

    //function dibawah ini tidak dipakai
    //==========================================================================================================

    /*function makanan(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as makanan
                                FROM produk
                                WHERE kategori='Makanan' AND tglPembelian BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function makanan2(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as makanan2
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='Makanan' AND pembelian.tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function minuman(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as minuman
                                FROM produk
                                WHERE kategori='Minuman' AND tglPembelian BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function minuman2(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as minuman2
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='Minuman' AND pembelian.tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function makanan_ringan(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as makanan_ringan
                                FROM produk
                                WHERE kategori='Makanan_Ringan' AND tglPembelian BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function makanan_ringan2(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as makanan_ringan2
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='Makanan_Ringan' AND pembelian.tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function alat_kebersihan(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as alat_kebersihan
                                FROM produk
                                WHERE kategori='Alat_Kebersihan' AND tglPembelian BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function alat_kebersihan2(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as alat_kebersihan2
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='Alat_Kebersihan' AND pembelian.tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function alat_tulis(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as alat_tulis
                                FROM produk
                                WHERE kategori='Alat_Tulis' AND tglPembelian BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function alat_tulis2(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as alat_tulis2
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='Alat_Tulis' AND pembelian.tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }
  	
  	function buku_organisasi(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as buku_organisasi
                                FROM produk
                                WHERE kategori='Buku' AND tglPembelian BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function buku_organisasi2(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as buku_organisasi2
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='Buku' AND pembelian.tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function barang_konsinyasi(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as barang_konsinyasi
                                FROM produk
                                WHERE kategori='Barang_UKM' AND tglPembelian BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function barang_konsinyasi2(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as barang_konsinyasi2
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='Barang_UKM' AND pembelian.tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function lain_lain(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kategori) as lain_lain
                                FROM produk
                                WHERE kategori='Lainnya' AND tglPembelian BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function lain_lain2(){
       $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(kdPembelian) as lain_lain2
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='Lainnya' AND pembelian.tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }
    //select untuk join di tampilkan dulu kemudian pake group by di akhir
    //==============================================================================
    //berdasarkan status pembelian

    public function jml_pembelian(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  statusPembayaran
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function belum_dibayar(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(statusPembayaran) as belum_dibayar
                                FROM pembelian
                                WHERE statusPembayaran='belum dibayar' AND tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function sudah_dibayar(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(statusPembayaran) as sudah_dibayar
                                FROM pembelian
                                WHERE statusPembayaran='sudah dibayar' AND tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function sudah_dikirim(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(statusPembayaran) as sudah_dikirim
                                FROM pembelian
                                WHERE statusPembayaran='sudah dikirim' AND tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    function sudah_diterima(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(statusPembayaran) as sudah_diterima
                                FROM pembelian
                                WHERE statusPembayaran='sudah diterima' AND tglPembayaran BETWEEN '$tahun-01-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }

    //===============================================================================================
    //berdasarkan pendapatan perbulan

    function februari(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as februari
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-02-01' AND '$tahun-02-28'";
        return $this->db->query("$query");
    }

    function maret(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as maret
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-03-01' AND '$tahun-03-31'";
        return $this->db->query("$query");
    }

    function april(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as april
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-04-01' AND '$tahun-04-30'";
        return $this->db->query("$query");
    }
	
    function mei(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as mei
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-05-01' AND '$tahun-05-31'";
        return $this->db->query("$query");
    }

    function juni(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as juni
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-06-01' AND '$tahun-06-30'";
        return $this->db->query("$query");
    }

    function juli(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as juli
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-07-01' AND '$tahun-07-31'";
        return $this->db->query("$query");
    }

    function agustus(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as agustus
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-08-01' AND '$tahun-08-31'";
        return $this->db->query("$query");
    }

    function september(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as september
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-09-01' AND '$tahun-09-30'";
        return $this->db->query("$query");
    }

    function oktober(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as oktober
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-10-01' AND '$tahun-10-31'";
        return $this->db->query("$query");
    }

    function november(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as november
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-11-01' AND '$tahun-11-31'";
        return $this->db->query("$query");
    }

    function desember(){
        $tahun = $this->session->userdata('tahun');
        $query = "SELECT  SUM(DISTINCT totalBayar) as desember
                                FROM pembelian
                                WHERE tglPembayaran BETWEEN '$tahun-12-01' AND '$tahun-12-31'";
        return $this->db->query("$query");
    }*/

    //====================================================================================================================
}
?>