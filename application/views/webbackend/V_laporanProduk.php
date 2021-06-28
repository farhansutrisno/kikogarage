<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table border="0">
	    <tr>
	        <td style="width: 400px !important" align="right"><img style="margin-bottom: 0px !important;" width="100px" src="<?php echo base_url() . 'asset/images/logokiko.jpeg'?>"></td>
	        <td><h3 align="center">  DATA LAYANAN KIKO GOOD GARAGE</h3></td>
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
		    if (!empty($filter['kategori'])) { ?>
		      <tr>
		          <td>Kategori :</td>
		          <td><?php echo $filter['kategori']; ?></td>
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
				<th style="width: 10px !important;">No</th>
				<th>Nama Layanan</th>
				<th>Kategori</th>
				<th>Paket</th>
				<th>Harga</th>
				<th style="text-align: center !important;">Create date</th>
				<th style="text-align: center !important;">Update date</th>
			</tr>
		</thead>
		<tbody>
          <?php
            $no=1;
                foreach ($produk as $key){

                  if (empty($key->updateDate)) {
                    $dateUpdate = '-';
                  }else{
                    $dateUpdate = date_format (new DateTime($key->updateDate), 'd-M-Y');
                  }

                  if (empty($key->createDate)) {
                    $dateCreate = '-';
                  }else{
                    $dateCreate = date_format (new DateTime($key->createDate), 'd-M-Y');
                  }

                echo "<tr>";
                    echo "<td>". $no++."</td>";
                    echo "<td>". $key->namaProduk."</td>";
                    echo "<td>". $key->kategori."</td>";
                    echo "<td>". $key->paket."</td>";
                    echo "<td>Rp.".number_format($key->hargaPenjualan, 0,",",".")."</td>";
                    echo "<td align='center'>". $dateCreate."</td>";
                    echo "<td align='center'>". $dateUpdate."</td>";
                    ?>
                    
                </tr>
            <?php } ?>
          
        </tbody>
	</table>
</body></html>