<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataProduk extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
        date_default_timezone_set('Asia/Jakarta');
	}

    public function lihatjamreservasi(){
        $this->db->where("statusPembayaran !=",'Selesai');
        $data1 = date("Y-m-d");
        $data2 = date("Y-m-d", strtotime("+1 days"));

        $this->db->where("tglTransaksi BETWEEN '$data1' AND '$data2'");
        $this->db->order_by('tglTransaksi', 'ASC');
         return $this->db->get("pembelian");
    }

    public function jmlKeranjang(){
        $kode = $this->session->userdata('kode');
        $query = $this->db->query("SELECT COUNT(kdKeranjang) as jmlKeranjang
                                from keranjang Where idAkun='$kode' ");
        return $query->row();
    }

    public function detailProduk($kdProduk){
        
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('operator','operator.kdOperator=produk.kdOperator');
        $this->db->where("kdProduk",$kdProduk);
        return $this->db->get();
    }

    public function queue(){
        $kode = $this->session->userdata('kode');
        $query = $this->db->query("SELECT * FROM pembelian WHERE idAkun= '".$kode."' AND StatusPembayaran != 'Selesai' ORDER BY kdPembelian DESC LIMIT 1");
        return $query->row();
    }

    public function reservasiAwal($tglTransaksi){
       
        $query = $this->db->query("SELECT * FROM pembelian WHERE tglTransaksi= '".$tglTransaksi."' AND StatusPembayaran != 'Selesai' ORDER BY kdPembelian ASC LIMIT 1");
        return $query->row();
    }

    public function cekJumlahQueue($tglReservasi,$kodeUnik){
         $query = "SELECT  COUNT(DISTINCT kodeUnik) as data
                                FROM pembelian
                                WHERE kodeUnik != '".$kodeUnik."' AND tglTransaksi = '".$tglReservasi."' AND StatusPembayaran != 'Selesai'";
        return $this->db->query("$query");
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

    public function lihatReservasi(){
        $kode = $this->session->userdata('kode');

        $this->db->select('keranjang.kdProduk, keranjang.kdKeranjang, produk.namaProduk, produk.hargaPenjualan, produk.kategori, produk.gambar, keranjang.idAkun, konsumen.alamatLengkap');
        $this->db->from('keranjang');
        $this->db->join('produk','produk.kdProduk=keranjang.kdProduk');
        $this->db->join('konsumen','konsumen.idAkun=keranjang.idAkun');
        $this->db->where("keranjang.idAkun",$kode);
        return $this->db->get();
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
    public function cekProduk($kdProduk,$idAkun){
        $this->db->select('kdProduk');
        $this->db->where("kdProduk",$kdProduk);
        $this->db->where("idAkun",$idAkun);
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
        return $this->db->query("SELECT DISTINCT YEAR(tglTransaksi) AS tanggal1 FROM pembelian  order by tanggal1 desc");
    }

    public function bulan(){
        return $this->db->query("SELECT DISTINCT MONTH(tglTransaksi) AS bulan FROM pembelian  order by bulan ASC");
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
    public function jml_produk($tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal){
        // $tahun = $this->session->userdata('tahun');
        $tahun = $tahun;
        $query = "SELECT COUNT(kdProduk) as jml_produk
                                from produk
                                WHERE createDate BETWEEN '$tahunawal-$bulanawal-$tanggalawal' AND '$tahun-$bulan-$tanggal'";
        // echo $query;die;                            
        return $this->db->query("$query");
    }

    public function jml_produk2(){
        // $tahun = $this->session->userdata('tahun');
        $query = "SELECT COUNT(kdProduk) as jml_produk
                                from produk";
        return $this->db->query("$query");
    }

    
    //============================================================================================

    public function jml_pesan($tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal){
        $query = "SELECT COUNT(kdPesanMasuk) as jml_pesan
                                from pesanmasuk
                                WHERE tglPesan BETWEEN '$tahunawal-$bulanawal-$tanggalawal' AND '$tahun-$bulan-$tanggal'";
        return $this->db->query("$query");
    }
    //=======================================================================
    //garfik berdasarkan jumlah produk
    public function jml_penjualan($tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal){
        // $tahun = $this->session->userdata('tahun');
        $tahun = $tahun;
        $query = "SELECT COUNT(DISTINCT kodeUnik) as jml_penjualan
                                from pembelian
                                WHERE tglTransaksi BETWEEN '$tahunawal-$bulanawal-$tanggalawal' AND '$tahun-$bulan-$tanggal'";
        return $this->db->query("$query");
    }

    public function jml_penjualan2(){
        // $tahun = $this->session->userdata('tahun');
        $query = "SELECT COUNT(kdPembelian) as jml_penjualan
                                from pembelian";
        return $this->db->query("$query");
    }

    public function jmlreservasi($id){
        // $tahun = $this->session->userdata('tahun');
        $query = "SELECT COUNT(kdPembelian) as jmlreservasi
                                from pembelian
                                WHERE idAkun= '".$id."' ";
        return $this->db->query("$query");
    }

    //==============================================================================
    //berdasarkan kategori
    
    function tahun(){
        return $this->db->query("SELECT DISTINCT YEAR(createDate) AS tanggal FROM produk  order by tanggal desc");
    } 

    function get_kategori($kategori,$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal){
        $query = "SELECT  COUNT(kategori) as data
                                FROM produk
                                WHERE kategori= '".$kategori."' AND createDate BETWEEN '$tahunawal-$bulanawal-$tanggalawal' AND '$tahun-$bulan-$tanggal'";

        return $this->db->query("$query");
    }

    function kategori_value($kategori,$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal){
        $query = "SELECT  COUNT(kdPembelian) as data
                                FROM pembelian 
                                JOIN produk
                                ON pembelian.kdProduk = produk.kdProduk
                                WHERE produk.kategori='".$kategori."' AND pembelian.tglTransaksi BETWEEN '$tahunawal-$bulanawal-$tanggalawal' AND '$tahun-$bulan-$tanggal'";
        return $this->db->query("$query");
    }

    function seluruhnya($status,$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal){
        $tahun = $tahun;
        $query = "SELECT  COUNT(DISTINCT kodeUnik) as data
                                FROM pembelian
                                WHERE statusPembayaran = '".$status."' AND tglTransaksi BETWEEN '$tahunawal-$bulanawal-$tanggalawal' AND '$tahun-$bulan-$tanggal'";
        return $this->db->query("$query");
    }

    function jenisBooking($jenisBooking,$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal){
        $tahun = $tahun;
        $query = "SELECT  COUNT(DISTINCT kodeUnik) as data
                                FROM pembelian
                                WHERE jenisBooking = '".$jenisBooking."' AND tglTransaksi BETWEEN '$tahunawal-$bulanawal-$tanggalawal' AND '$tahun-$bulan-$tanggal'";
        return $this->db->query("$query");
    }

    function get_bulan($bulan2,$tahun,$tanggal,$tahunawal,$tanggalawal){
        $tahun = $tahun;
        $query = "SELECT  SUM(subtotal) as total_bayar
                                FROM pembelian WHERE statusPembayaran = 'Selesai' AND tglTransaksi BETWEEN '".$tahunawal."-".$bulan2."-$tanggalawal' AND '$tahun-$bulan2-$tanggal'";
        return $this->db->query("$query");
    }

    function kategoripaket($paket,$tahun,$bulan,$tanggal,$tahunawal,$bulanawal,$tanggalawal){
        $tahun = $tahun;
        $query = "SELECT  COUNT(kdProduk) as data
                                FROM produk
                                WHERE paket = '".$paket."' AND createDate BETWEEN '$tahunawal-$bulanawal-$tanggalawal' AND '$tahun-$bulan-$tanggal'";
        return $this->db->query("$query");
    }

}
?>