<?php
 header("Content-type: application/x-ms-excel");
 header("Content-Disposition: attachment; filename=data_Reservasi.xls");
 header("Pragma: no-cache");  
 header("Expires: 0");  
 ?>

 <?php 
if ($filter['filter'] == 1) { ?>
  
  <table border="0">

    
    <tr>
        <td>Filter</td>
        <td></td>
    </tr>
    
    <?php 
    if (!empty($filter['status'])) { ?>
      <tr>
          <td>status</td>
          <td><?php echo $filter['status']; ?></td>
      </tr>
    <?php } ?>

    <?php 
    if (!empty($filter['bulan'])) { ?>
      <tr>
          <td>Bulan</td>
          <td><?php echo $filter['bulan']; ?></td>
      </tr>
    <?php } ?>

    <?php 
    if (!empty($filter['tahun'])) { ?>
      <tr>
          <td>Tahun</td>
          <td><?php echo $filter['tahun']; ?></td>
      </tr>
    <?php } ?>

    <tr>
        <td></td>
        <td></td>
    </tr>
</table>

<?php }
 ?>
 
<table border="1">
        <tr>
              <th rowspan="1">No</th>
              <th rowspan="1">Nama Konsumen</th>
              <th rowspan="1">No Telepon</th>
              <th rowspan="1">Alamat Lengkap</th>
              <th rowspan="1">No Antrian</th>
              <th rowspan="1">No Plat</th>
              <th rowspan="1">Jenis Booking</th>
              <th rowspan="1">Tgl Transaksi</th>
              <th rowspan="1">Status</th>
              <th rowspan="1">Nama Jasa</th>
              <th rowspan="1">Kategori</th>
              <th rowspan="1">Total Bayar</th>
              <!-- <th rowspan="1">Nama Tukang</th> -->
            </tr>
            <!-- <td>".  ($r->nama_lengkap)."</td> -->
            <tbody>
                <?php 
                $no = 1;

                foreach ($penjualan as $r) {
            echo "<tr>
                    <td>".  ($no++)."</td>
                    <td>".  ($r->namaLengkap)."</td>
                    <td>".  ($r->noTelepon)."</td>
                    <td>".  ($r->alamatLengkap)."</td>
                    <td>".  ($r->noAntrian)."</td>
                    <td>".  ($r->noPlat)."</td>
                    <td>".  ($r->jenisBooking)."</td>
                    <td>".  ($r->tglTransaksi)."</td>
                    <td>".  ($r->statusPembayaran)."</td>
                    <td>".  ($r->namaProduk)."</td>
                    <td>".  ($r->kategori)."</td>
                    <td>".  ($r->totalBayar)."</td>
                    
                  </tr>";
                } ?>
            </tbody>    
</table>
