<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table style="margin-left: 160px !important" border="0">
	    <tr>
	        <td align="center"><img style="margin-bottom: 0px !important;" width="100px" src="<?php echo base_url() . 'asset/images/logokiko.jpeg'?>"></td>
	    </tr>
	    <tr>
	        <td align="center"><b style="color: #095F50 !important;">KIKO GOOD GARAGE</b></td>
	    </tr>
	    <tr>
	        <td align="center">085742109442</td>
	    </tr>
	    <tr>
	        <td align="center">Jl. Soewoko No.30 Jetis Lamongan</td>
	    </tr>
	    <tr>
	        <td align="center">Kab. Lamongan, Jawa Timur</td>
	    </tr>
	    <tr>
	        <td align="center">kikogarage.co@gmail.com</td>
	    </tr>
	</table>
	<br>
	<hr style="margin-top: -5px !important; border: 1px dotted #000000;" />
	<br>
		<?php foreach ($penjualan as $key){

                echo "<table border='0'>
	                	<tr>
	                		<td colspan='2'><b>DATA RESERVASI</b></td>
			            </tr>
			            <tr>
			            	<td>No. Antrian</td>
							<td>: ".$key->noAntrian."</td>
			            </tr>
			            <tr>
			            	<td style='width:180px !important;'>Jam & Tanggal Reservasi</td></td>
			                 <td>: ".date_format (new DateTime($key->tglPembayaran), 'H:i')." - ".date_format (new DateTime($key->tglTransaksi), 'd M Y')."</td>
			            </tr>
			            <tr>
			            	<td>No Plat</td>
			                 <td>: ".$key->noPlat."</td>
			            </tr>
			            <tr>
			            	<td>Jenis Reservasi</td></td>
			                 <td>: ".$key->jenisBooking."</td>
			            </tr>
			            <tr>
			            	<td>Customer</td></td>
			                 <td style='text-transform: capitalize;'>: ".$key->namaLengkap."</td>
			            </tr>
					</table>
					<br>
					<hr style='border: 1px dotted #000000;'/><br>";
			} 
				
			echo "<table border='0'>
						<tr>
							<td colspan='2'><b>LAYANAN</b></td>
						</tr>"; ?>
					<?php foreach ($produk as $row){ 
						echo "<tr>
								<td colspan='2'></td>
							</tr>
		                	<tr>
		                	  <td style='width:300px !important; text-transform: capitalize;'>".$row->namaProduk."</td>  
		                	  <td>Rp. ".number_format($row->subtotal, 0,",",".")."</td>
		                	</tr>";
	                } ?>
                    <?php echo " </table><br>
					<hr style='border: 1px dotted #000000;'/><br>";?>
			 <?php foreach ($penjualan as $key){
                echo "<table border='0'>
	                	<tr>
	                		<td colspan='2'><b>PEMBAYARAN</b></td>
			            </tr>
			             <tr>
			            	<td style='width:300px !important;'>Total Bayar</td>
			                <td>Rp. ".number_format($key->totalBayar, 0,",",".")."</td>
						</tr>"; ?>

					<?php if ($key->statusPembayaran == 'Selesai') { ?>

			            <?php echo "<tr>
						            	<td>Poin didapat</td>
										<td>1</td>
						            </tr>
						            <tr>
						            	<td>Total Poin</td></td>
						                 <td>".$key->poin."</td>
						            </tr>";
						         ?>

			         <?php } ?>
			           
					<?php echo "</table><br>
					<hr style='border: 1px dotted #000000;'/><br>";
			} ?>
			<?php foreach ($penjualan as $key1){
			echo "<table border='0'>
					<tr>
						<td colspan='3'><b>DATA PEGAWAI SERVICES KIKO GOOD GARAGE</b></td>
					</tr>
					<tr>
						<td colspan='3'></td>
					</tr>
                	<tr>
                	  <td><img width='150px' src=".base_url()."gambar_proyek/".$key->foto." /></td>
                	  <td style='text-transform: capitalize;'>
                	  		<table border='0' style='margin-top: -90px !important;'>
                	  			<tr>
                	  				<td>Nama Pegawai</td>
                	  				<td>: ".$key1->nama_lengkap."</td>
                	  			</tr>
                	  			<tr>
                	  				<td>No Telepon</td>
                	  				<td>: ".$key1->noTelepon."</td>
                	  			</tr>
                	  		</table>
                     </td>
                    </tr>
                    </table>";
          } ?>
	
</body></html>