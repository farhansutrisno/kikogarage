<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table border="0">
	    <tr>
	        <td style="width: 400px !important" align="right"><img style="margin-bottom: 0px !important;" width="100px" src="<?php echo base_url() . 'asset/images/logokiko.jpeg'?>"></td>
	        <td><h3 align="center">  DATA RESERVASI KIKO GOOD GARAGE</h3></td>
	    </tr>
	</table>
	<hr style="margin-top: -5px !important" />
	<?php if ($filter['filter'] == 1) { ?>
		  
		  <table border="0">

		    
		    <tr>
		        <td>Filter</td>
		        <td></td>
		    </tr>
		    
		    <?php 
		    if (!empty($filter['status'])) { ?>
		      <tr>
		          <td>status :</td>
		          <td><?php echo $filter['status']; ?></td>
		      </tr>
		    <?php } ?>

		    <?php 
		    if (!empty($filter['bulan'])) { ?>
		      <tr>
		          <td>Bulan :</td>
		          <td><?php echo $filter['bulan']; ?></td>
		      </tr>
		    <?php } ?>

		    <?php 
		    if (!empty($filter['tahun'])) { ?>
		      <tr>
		          <td>Tahun :</td>
		          <td><?php echo $filter['tahun']; ?></td>
		      </tr>
		    <?php } ?>

		    <tr>
		        <td></td>
		        <td></td>
		    </tr>
		</table>

	<?php } ?>

	<table border="0" class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Konsumen</th>
				<th>No Telepon</th>
				<th>No Plat</th>
				<th>No Antrian</th>
				<th>Nama Jasa</th>
				<th>Kategori</th>
				<th>Total Bayar</th>
				<th>Status Pembelian</th>
				<th>Tgl Transaksi</th>
				<th>Kode Reservasi</th>
			</tr>
		</thead>
		<tbody>
			<?php
	            $no=1;
                foreach ($penjualan as $key){

                    if (empty($key->tglTransaksi)) {
                      $dateUpdate = '-';
                    }else{
                      $dateUpdate = date_format (new DateTime($key->tglTransaksi), 'd M Y').' '.date_format (new DateTime($key->tglPembayaran), 'H:i');
                    }

                    if (empty($key->KdTukang)) {
                      $KdTukang = 0;
                    }else{
                      $KdTukang = $key->KdTukang;
                    }

                    echo "<tr>";
	                    echo "<td>". $no++."</td>";
	                    echo "<td>". $key->namaLengkap."</td>";
	                    echo "<td>". $key->noTelepon."</td>";
	                    echo "<td>". $key->noPlat."</td>";
	                    echo "<td>". $key->noAntrian."</td>";
	                    echo "<td>". $key->namaProduk."</td>";
	                    echo "<td>". $key->kategori."</td>";
	                    echo "<td>Rp.".number_format($key->totalBayar, 0,",",".")."</td>";
	                    echo "<td style='color: #5CB85C !important;'><b>". $key->statusPembayaran."</b></td>";
	                    echo "<td>". $dateUpdate."</td>";
	                    echo "<td>". $key->kodeUnik."</td>";
	          ?>
	                	</tr>
	            <?php } ?>
	    </tbody>
	</table>
</body></html>