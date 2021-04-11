<?php
class C_produkPembeli extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','table'));
		$this->load->library('pagination');
		$this->load->model('mod_dataProduk');
	}

    //==========================================================================================================
    //fix dipakai

    public function lihatProdukNew(){
        $data['produk'] = $this->mod_dataProduk->lihatDataProduk()->result();
        
        // $id = $this->session->userdata('kode');
        // if (!empty($id)) {
            // $this->load->model('mod_dataAkun');
            // $data["dataPembeli"]    = $this->mod_dataAkun->ubahDataPembelian($id)->result();
            // $data['jmlreservasi']   = $this->mod_dataProduk->jmlreservasi($id)->result()[0]->jmlreservasi;
            // $data['idAkun']         = $id;
        // }

        // $data['jml_produk']        = $this->mod_dataProduk->jml_produk2()->result();
        
        $this->session->set_flashdata('test1', 
                    '<div class="alert alert-info" style="margin-bottom: 20px !important">    
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h7>Berhasil </h7>
                    </div>');

        $this->load->view('V_homeFrontEndNew',$data);
    }

    public function lihatDetailProdukNew(){
        $id             = $this->uri->segment(3);
        $data["row"]    = $this->mod_dataProduk->lihatDetailProduk($id)->result();
        $kategori = $data["row"][0]->kategori;
        $data['produk'] = $this->mod_dataProduk->lihatDataProdukDetail($kategori)->result();
        $this->load->view('V_lihatDetailProdukNew',$data);
    }

    public function prosesTambah(){
            
            $subtotal       = $this->input->post('subtotal');
            $namaProduk     = $this->input->post('namaProduk');
            $kdProduk       = $this->input->post('kdProduk');
            $qty            = $this->input->post('qty');
            $idAkun         = $this->input->post('idAkun');
            $harga          = $this->input->post('harga');
            $gambar         = $this->input->post('gambar');
            // $berat          = $this->input->post('berat');

            $produk = $this->mod_dataProduk->cekProduk($kdProduk,$idAkun)->result();

            if ($kdProduk == $produk[0]->kdProduk) {
                
                        $this->session->set_flashdata('tambah1', 
                        '<div class="alert alert-success" style="margin-bottom: 20px !important">    
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h7>Berhasil Memilih Produk</h7>
                        </div>');

                        $data           = array(
                            "jml_produk"    => $qty,
                            "subtotal"      => $qty * $harga
                        );
                        $this->mod_dataProduk->ubahData($data,$kdProduk);
                        redirect('C_produkPembeli/datareservasi');

            }else{

                $this->session->set_flashdata('tambah1', 
                        '<div class="alert alert-success" style="margin-bottom: 20px !important">    
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h7>Berhasil Memilih Produk</h7>
                        </div>');

                $data           = array(
                    "namaProduk"         => $namaProduk,
                    "kdProduk"           => $kdProduk,
                    "jml_produk"         => $qty,
                    "subtotal"           => $subtotal,
                    "idAkun"             => $idAkun,
                    "harga"              => $harga,
                    "gambar"             => $gambar,
                );

                $this->mod_dataProduk->prosesTambah($data);
                redirect('C_produkPembeli/datareservasi');
            }
    }


    public function datareservasi(){
        $data['produk']         = $this->mod_dataProduk->lihatReservasi()->result();
        $data['jamreservasi1']   = $this->mod_dataProduk->lihatjamreservasi()->result();

        $jml                    = $this->mod_dataProduk->jmlKeranjang();
        $data['keranjang']      = $jml->jmlKeranjang;
        $this->load->view('V_dataReservasiNew',$data);
    }

    public function pencarianNew(){
       
        //konfigurasi pagination
        $kategori  = $this->uri->segment(3);

        $data['kategori'] = $kategori;

        $config['base_url'] = site_url('C_produkPembeli/pencarianNew'); //site url
        $config['total_rows'] = $this->mod_dataProduk->countpencarian($kategori)->result()[0]->data; //total row

        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['pag'] = $this->pagination->create_links();
        
        $data['produk'] = $this->mod_dataProduk->kategori_makanan($config["per_page"], $data['page'],$kategori)->result();
        $this->load->view('V_pencarianLoginNew',$data);
    }

    //================================================================================================================================


	// public function index(){
 //        $data['produk'] = $this->mod_dataProduk->lihatDataProduk()->result();
 //        $data['barang_ukm'] = $this->mod_dataProduk->barang_ukm()->result();
 //        $this->load->view('V_homeFrontEnd2',$data);
 //    }
    
    //function dibawah tidak dipakai
	/*public function lihatProdukAwal(){
		$data['produk'] = $this->mod_dataProduk->lihatDataProduk()->result();
        $data['barang_ukm'] = $this->mod_dataProduk->barang_ukm()->result();
		$this->load->view('V_homeFrontEnd1',$data);
	}*/

    public function lihatProduk(){
        $data['produk'] = $this->mod_dataProduk->lihatDataProduk()->result();
        $data['carwash'] = $this->mod_dataProduk->carwash()->result();

        $data['coating'] = $this->mod_dataProduk->coating()->result();
        $data['terlaris'] = $this->mod_dataProduk->terlaris()->result();
        $this->load->view('V_homeFrontEnd2',$data);
    }

    public function lihatProduk1(){
        $this->session->set_flashdata('stok1', 
                    '<div class="alert alert-success fade in">    
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h7>Stok Tidak Tersedia </h7>
                        <p>Segera memilih produk untuk transaksi.<br/>
                        Terima kasih.</p>
                    </div>');

        $data['produk'] = $this->mod_dataProduk->lihatDataProduk()->result();
        // $data['barang_ukm'] = $this->mod_dataProduk->barang_ukm()->result();
        $data['terlaris'] = $this->mod_dataProduk->terlaris()->result();
        $this->load->view('V_homeFrontEnd2',$data);
    }
	
	public function lihatDetailProduk(){
		$id 			= $this->uri->segment(3);
        $data["row"]    = $this->mod_dataProduk->lihatDetailProduk($id)->result();
        $kategori = $data["row"][0]->kategori;
		$data['produk'] = $this->mod_dataProduk->lihatDataProdukDetail($kategori)->result();
		$this->load->view('V_lihatDetailProduk',$data);
	}

	public function lihatKeranjang(){
        $data['produk']         = $this->mod_dataProduk->lihatKeranjang()->result();
        $jml                    = $this->mod_dataProduk->jmlKeranjang();
        $data['keranjang']      = $jml->jmlKeranjang;
		$this->load->view('V_lihatKeranjang',$data);
	}

	//=============================================================================================
	 public function validasi(){
        $uangmuka = $this->input->post('uangmuka');

        if ( $uangmuka >= $total) {
           $this->session->set_flashdata('update2', 
                    '<div class="alert alert-info ">    
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h7>Stok Kurang ! </h7>
                        <p>Gagal Mengubah Jumlah Produk</p>
                    </div>');
            redirect('C_produkPembeli/lihatProduk');

        } else if ($uangmuka <= 100000 ) {
           $this->session->set_flashdata('update2', 
                    '<div class="alert alert-info ">    
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h7>Stok Kurang ! </h7>
                        <p>Gagal Mengubah Jumlah Produk</p>
                    </div>');
            redirect('C_produkPembeli/lihatProduk');
        }

    }

    public function keranjangTambah(){

        $kdProduk       = $this->uri->segment(3);
        $qty            = $this->uri->segment(4);
        $tambah         = 1; 
        $jumlah         = $qty + $tambah;
        $harga          = $this->uri->segment(5);
        $berat          = $this->uri->segment(6);
        $kdKeranjang    = $this->uri->segment(7);

        $cek = $this->mod_dataProduk->cekKeranjang($kdProduk)->result();

        if($qty >= $cek[0]->stok){

            $this->session->set_flashdata('update2', 
                    '<div class="alert alert-info ">    
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h7>Stok Kurang ! </h7>
                        <p>Gagal Mengubah Jumlah Produk</p>
                    </div>');
            redirect('C_produkPembeli/lihatKeranjang');

        }else{

                $this->session->set_flashdata('update1', 
                        '<div class="alert alert-info ">    
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h7>BERHASIL ! </h7>
                            <p>Berhasil Mengubah Jumlah Barang<br/></p>
                        </div>');
                $brt = $this->mod_dataProduk->cekBerat($kdProduk)->result();
                $beratProduk = $brt[0]->berat * $jumlah;
                $data           = array(
                    "jml_produk"    => $jumlah,
                    "subtotal"      => $jumlah * $harga,
                    "berat"         => $beratProduk    
                );
                $this->mod_dataProduk->prosesUpdate($data,$kdKeranjang);
                redirect('C_produkPembeli/lihatKeranjang');

        }
        
    }

    //function tambahan revisi
    public function prosesUbahJumlah(){
        $kdKeranjang        = $this->input->post('kdKeranjang');
        $kdProduk           = $this->input->post('kdProduk');
        $qty                = $this->input->post('qty'); 
        $jumlah             = $qty;
        $harga              = $this->input->post('harga');
        $berat              = $this->input->post('berat');
        $subtotal           = $this->input->post('subtotal');
        $subtotal_kurang    = $subtotal - $harga;

        if($qty <= 0){
            $this->session->set_flashdata('update4', 
                        '<div class="alert alert-danger ">    
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h7>PERINGATAN ! </h7>
                            <p>Harap memasukan data dengan benar<br/></p>
                        </div>');
            redirect('C_produkPembeli/lihatKeranjang');

        }else{

            $produk = $this->mod_dataProduk->jumlahProduk($kdProduk)->result();

            if($qty > $produk[0]->jml_produk){
                
                $cek = $this->mod_dataProduk->cekKeranjang($kdProduk)->result();

                if($qty >= $cek[0]->stok){

                    $this->session->set_flashdata('update2', 
                            '<div class="alert alert-info ">    
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <h7>Stok Kurang ! </h7>
                                <p>Gagal Mengubah Jumlah Produk</p>
                            </div>');
                    redirect('C_produkPembeli/lihatKeranjang');

                }else{

                        $this->session->set_flashdata('update1', 
                                '<div class="alert alert-info ">    
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <h7>BERHASIL ! </h7>
                                    <p>Berhasil Mengubah Jumlah Barang<br/></p>
                                </div>');
                        $brt = $this->mod_dataProduk->cekBerat($kdProduk)->result();
                        $beratProduk = $brt[0]->berat * $jumlah;
                        $data           = array(
                            "jml_produk"    => $jumlah,
                            "subtotal"      => $jumlah * $harga,
                            "berat"         => $beratProduk    
                        );
                        $this->mod_dataProduk->prosesUpdate($data,$kdKeranjang);
                        redirect('C_produkPembeli/lihatKeranjang');

                }

            }elseif($qty < $produk[0]->jml_produk){

                $this->session->set_flashdata('update1', 
                    '<div class="alert alert-info ">    
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h7>BERHASIL ! </h7>
                        <p>Berhasil Mengubah Jumlah Barang<br/></p>
                    </div>');
                $brt = $this->mod_dataProduk->cekBerat($kdProduk)->result();
                $beratProduk = $berat -  $brt[0]->berat;
                $data           = array(
                    "jml_produk"    => $jumlah,
                    "subtotal"      => $subtotal_kurang,
                    "berat"         => $beratProduk    
                );
                $this->mod_dataProduk->prosesUpdate($data,$kdKeranjang);
                redirect('C_produkPembeli/lihatKeranjang');

            }elseif($qty == $produk[0]->jml_produk){
                redirect('C_produkPembeli/lihatKeranjang');
            }

        }
        
    }

    public function keranjangKurang(){

        $kdProduk           = $this->uri->segment(3);
        $qty                = $this->uri->segment(4);
        $kurang             = 1; 
        $jumlah             = $qty - $kurang;
        $harga              = $this->uri->segment(5);
        $berat              = $this->uri->segment(6);
        $subtotal           = $this->uri->segment(7);
        $kdKeranjang        = $this->uri->segment(8);
        $subtotal_kurang    = $subtotal - $harga;

        // $cek = $this->mod_dataProduk->cekKeranjang($kdProduk)->result();

        // if($qty >= $cek[0]->stok){

        //     $this->session->set_flashdata('update2', 
        //             '<div class="alert alert-info ">    
        //             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        //             <h7>Stok Kurang ! </h7>
        //                 <p>Gagal Mengubah Jumlah Produk</p>
        //             </div>');
        //     redirect('C_produkPembeli/lihatKeranjang');

        // }else{

        $this->session->set_flashdata('update1', 
                '<div class="alert alert-info ">    
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <h7>BERHASIL ! </h7>
                    <p>Berhasil Mengubah Jumlah Barang<br/></p>
                </div>');
        $brt = $this->mod_dataProduk->cekBerat($kdProduk)->result();
        $beratProduk = $berat -  $brt[0]->berat;
        $data           = array(
            "jml_produk"    => $jumlah,
            "subtotal"      => $subtotal_kurang,
            "berat"         => $beratProduk    
        );
        $this->mod_dataProduk->prosesUpdate($data,$kdKeranjang);
        redirect('C_produkPembeli/lihatKeranjang');

        //}
        
    }

    public function deleteProduk2($kdKeranjang){
        $this->session->set_flashdata('hapus1', 
                        '<div class="alert alert-info" style="margin-bottom: 20px !important">    
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h7>BERHASIL ! </h7>
                            <p>Berhasil Menghapus Produk</p>
                        </div>');
        $this->mod_dataProduk->deleteProduk($kdKeranjang);
        redirect('C_produkPembeli/datareservasi');
    }

    public function pencarianLogin(){
        //konfigurasi pagination
        $config['base_url'] = site_url('C_produkPembeli/pencarianLogin'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['pag'] = $this->pagination->create_links();
        $data['produk'] = $this->mod_dataProduk->lihatDataProduk2($config["per_page"], $data['page'])->result();

        $this->load->view('V_pencarianLogin',$data);
    }

    public function makanan2(){
       
        //konfigurasi pagination
        $config['base_url'] = site_url('C_produkPembeli/makanan'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['pag'] = $this->pagination->create_links();
        $kategori  = str_replace('%20',' ',$this->uri->segment(3));

        $data['produk'] = $this->mod_dataProduk->kategori_makanan($config["per_page"], $data['page'],$kategori)->result();
        $this->load->view('V_pencarianLogin',$data);
    }

    

}

?>