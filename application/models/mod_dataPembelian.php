<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mod_dataPembelian extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function inputDataPembayaran(){
		$kode 			= $this->session->userdata('kode');
         $this->db->where("idAkun",$kode);
         return $this->db->get("keranjang");
    }

    public function lihatData2($id){
         $this->db->where("kdPembayaran",$id);
         return $this->db->get("pembelian");
    }

    public function lihatData($kode){
         $this->db->where("idAkun",$kode);
         return $this->db->get("konsumen");
    }

    public function ubahAlamat($id){
         $this->db->where("idAkun",$id);
         return $this->db->get("konsumen");
    }

    public function ubahAlamat2($pembayaran){
         $this->db->where("kdPembayaran",$pembayaran);
         return $this->db->get("pembelian");
    }

    public function konfirmasiPembayaran($pembayaran){
         $this->db->where("kdPembayaran",$pembayaran);
         return $this->db->get("pembelian");
    }

    public function lihatTransaksi($id){
		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->join('tukang','tukang.KdTukang=pembelian.KdTukang');
		$this->db->where("kodeUnik",$id);
         return $this->db->get();
    }

    function fetch_single_details($id,$KdTukang)
	{
		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->join('tukang','tukang.KdTukang=pembelian.KdTukang');
		$this->db->where("kodeUnik",$id);

		$data = $this->db->get();        

		$output = '<table border="0">
					    <tr>
					        <td style="width: 200px !important" align="right"><img style="margin-bottom: 0px !important;" width="100px" src="'.base_url().'asset/images/logokiko.jpeg"></td>
					        <td><h3 align="center">  DATA RESERVASI KIKO GOOD GARAGE</h3></td>
					    </tr>
					</table>
					<hr style="margin-top: -5px !important" />';
 		
		$output .= '<table width="100%" cellspacing="0" cellpadding="0">';
		foreach($data->result() as $row)
		{
			$output .= '
			<tr>
				<td colspan="2">
					<h3>Data Reservasi</h3>
					<p>No Antrian : '.$row->noAntrian.'</p>
					<p>Jam & Tanggal Reservasi : '.date_format (new DateTime($row->tglPembayaran), 'H:i').' - '.date_format (new DateTime($row->tglTransaksi), 'd M Y').'</p>
					<p>No Plat : </b>'.$row->noPlat.'</p>
					<p>Jenis Booking : '.$row->jenisBooking.'</p>
					<p>Total Bayar : Rp. '.number_format($row->totalBayar, 0,",",".").' </p>
					<hr/>
					
				</td>
			</tr>
			<tr>
				<td width="160px"><img width="150px" src="'.base_url().'gambar_proyek/'.$row->foto.'" /></td>
				<td>
					<h3>Data Pegawai Kiko</h3>
					<p>Nama Pegawai Kiko : '.$row->nama_lengkap.' </p>
					<p>No Telp Pegawai Kiko : '.$row->noTelepon.' </p>
				</td>
			</tr>
			';
		}

		$output .= '</table>';

		return $output;
	}

    public function lihatTransaksi3($id){
		// $this->db->select('*');
		// $this->db->from('pembelian');
		$this->db->where("kodeUnik",$id);
         return $this->db->get('pembelian');
    }

    public function lihatTransaksi2($idAkun){
         $this->db->where("idAkun",$idAkun);
         return $this->db->get("konsumen");
    }

    public function dataProduk($id) {
		$this->db->select('pembelian.berat, produk.namaProduk, pembelian.subtotal, produk.kategori, produk.gambar, produk.hargaPenjualan');
		$this->db->from('produk');
		$this->db->join('pembelian','pembelian.kdProduk=produk.kdProduk');
		$this->db->where("kodeUnik",$id);
		return $this->db->get();
		
	}

	public function lihatDataHistory($id) {
		
		$this->db->where("kodeUnik",$id);
		return $this->db->get('history');
		
	}

	public function inputPembayaran(){

			$kode 			= $this->session->userdata('kode');
			$totalBayar	= $this->input->post('totalBayar');

			$data = array(
				"totalBayar" => $totalBayar
			);
				
			$this->db->where("idAkun",$kode);
			return $this->db->update("keranjang",$data);

	}

	public function inputDataOrder($dataTransaksi){
		$this->db->insert("pembelian",$dataTransaksi);
	}

	public function inputDataHistory($dataHistory){
		$this->db->insert("history",$dataHistory);
	}

	public function inputOngkir(){
			$kode 			= $this->session->userdata('kode');
			$kodeUnik 		= random_string('numeric', 3);
			// $total 			= random_string('alpha', 5);
			$noPlat		= $this->input->post('noPlat');
			$jenisBooking	= $this->input->post('jenisBooking');

			$data= array(

				"noPlat" 			=> $noPlat,
				"jenisBooking"		=> $jenisBooking,
				// "kdPembayaran"		=> 'KP'.$total.'KPDK'
				"kodeUnik" 			=> $kodeUnik
				
			);

				$this->db->where("idAkun",$kode);
				return $this->db->update("keranjang",$data);

	}

    function jumlahBayar(){
        
        $kode  = $this->session->userdata('kode');
        $query = $this->db->query("SELECT  SUM(subtotal) as jumlahBayar
                                FROM keranjang
                                WHERE idAkun=$kode");
        return $query->row();
    }
    function jumlahBayar2($id){
        
        $query = $this->db->query("SELECT  SUM(subtotal) as jumlahBayar2
                                FROM pembelian
                                WHERE kodeUnik=$id");
        return $query->row();
    }

	public function lihatTagihan(){
		
		$kode  = $this->session->userdata('kode');
		$this->db->where("idAkun",$kode);
		 return $this->db->get("keranjang");
	}

	public function inputTransaksi($idAkun){
		
		$this->db->where("idAkun",$idAkun);
		 return $this->db->get("keranjang");
	}

	public function prosesUpdateAlamat(){

			$kelurahan 		= $this->input->post('kelurahan');
			$kecamatan 		= $this->input->post('kecamatan');
			$kota_kab 		= $this->input->post('kota_kab');
			$alamatLengkap 	= $this->input->post('alamatLengkap');
			$provinsi 		= $this->input->post('provinsi');
			$kodePos 		= $this->input->post('kodePos');

			$data 			= array(
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
	

	public function prosesKonfirmasiPembayaran($gambar){
			
			$data 			= array(
				"tglPembayaran"		=> date("Y-m-d"),
				"statusPembayaran"	=> 'sudah dibayar',
				"strukPembayaran"	=> $gambar

			);

				$this->db->where("kdPembayaran",$this->input->post('kdPembayaran'));
				return $this->db->update("pembelian",$data);
	}

	public function statusTerima(){

			$terima 		= $this->input->post('statusTerima');
			$data 			= array(

				"statusPembayaran"	=> $terima
				
			);

			$this->db->where("kdPembayaran",$this->input->post('terima'));
			return $this->db->update("pembelian",$data);
	}

	public function updateStok($dataStok,$produk,$id){

		$this->db->join('pembelian','produk.kdProduk=pembelian.kdProduk');
		$this->db->set($dataStok);
		$this->db->where('produk.kdProduk',$produk);
		return $this->db->update('produk');
	}

	public function kurangStok($id) {
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('pembelian','pembelian.kdProduk=produk.kdProduk');
		$this->db->where("kdPembayaran",$id);
		return $this->db->get();
		
	}

	public function countpencarian($id){
        // $tahun = $this->session->userdata('tahun');
        $query = "SELECT  COUNT(DISTINCT kodeUnik) as data
                                FROM pembelian
                                WHERE idAkun= '".$id."'";
        return $this->db->query("$query");
    }

	public function sessionTransaksi($limit, $start){
		$kode = $this->session->userdata('kode');
		$this->db->distinct();
		$this->db->select("totalBayar,kdPembayaran,kodeUnik,tglTransaksi,noAntrian,statusPembayaran,strukPembayaran, jenisBooking, noPlat, KdTukang, tglPembayaran");
		// $this->db->join('produk','produk.kdProduk = pembelian.kdProduk');
		$this->db->where("idAkun",$kode);
		$this->db->order_by('kdPembelian','DESC');
		 return $this->db->get("pembelian",$limit, $start);
	}

	/*public function sessionTransaksi($limit, $start){
		$kode = $this->session->userdata('kode');
		$this->db->limit($limit, $start);
		$this->db->distinct();
		$this->db->select("pembelian.totalBayar,pembelian.kdPembayaran,pembelian.kodeUnik,pembelian.tglTransaksi,pembelian.noResi,pembelian.statusPembayaran,pembelian.strukPembayaran,produk.namaProduk");
		$this->db->from('pembelian');
		$this->db->join('produk','produk.kdProduk=pembelian.kdProduk');
		$this->db->where("idAkun",$kode);
		$this->db->order_by('tglTransaksi','DESC');
		 return $this->db->get();
	}*/

	public function deleteProduk($idAkun){
		// $kode 			= $this->session->userdata('kode');
        $this->db->where("idAkun",$idAkun);
        return $this->db->delete("keranjang");
    }

    function cekNoAntrian(){
        $query = $this->db->query("SELECT * FROM pembelian ORDER BY kdPembelian DESC LIMIT 1");
        return $query->row();
    }

    function cekNoAntrian2(){
        $query = $this->db->query("SELECT * FROM pembelian WHERE jenisBooking='Langsung' AND statusPembayaran != 'Selesai' ORDER BY kdPembelian DESC LIMIT 1");
        return $query->row();
    }

    function cekNoAntrian3(){
        $query = $this->db->query("SELECT * FROM pembelian WHERE jenisBooking='Antar Jemput' AND statusPembayaran != 'Selesai' ORDER BY kdPembelian DESC LIMIT 1");
        return $query->row();
    }

    function cekTukang(){
        $query = $this->db->query("SELECT * FROM tukang WHERE status=1 LIMIT 1");
        return $query->row();
    }

    function cekTukang2(){
        $query = $this->db->query("SELECT * FROM tukang WHERE status=2 ORDER BY KdTukang ASC LIMIT 1");
        return $query->row();
    }

    public function statusTukang($KdTukang){

		$data 			= array(
			"status"	=> 2
		);

		$this->db->where("KdTukang",$KdTukang);
		return $this->db->update("tukang",$data);
	}


	public function cekjadwalreservasi($tglReservasi){
		$this->db->where("statusPembayaran !=",'Selesai');
		$this->db->where("tglTransaksi",$tglReservasi);
         return $this->db->get('pembelian');
    }

    public function queue(){
        $query = $this->db->query("SELECT * FROM pembelian ORDER BY kdPembelian DESC LIMIT 1");
        return $query->row();
    }

    public function selectQueue(){
        $kode = $this->session->userdata('kode');
        $query = $this->db->query("SELECT * FROM pembelian WHERE idAkun= '".$kode."' AND StatusPembayaran != 'Selesai' ORDER BY kdPembelian DESC LIMIT 1");
        return $query->row();
    }

}
?>