<?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Data_Produk.xls");
 header("Pragma: no-cache");
 header("Expires: 0");

// header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
// header("Content-Disposition: attachment;filename=\"filename.xls\"");
// header("Cache-Control: max-age=0");
 ?>

 <?php 
if ($filter['filter'] == 1) { ?>
  
  <table border="1">

    
    <tr>
        <td>Filter</td>
        <td></td>
    </tr>
    
    <?php 
    if (!empty($filter['kategori'])) { ?>
      <tr>
          <td>Kategori</td>
          <td><?php echo $filter['kategori']; ?></td>
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
        <th rowspan="1">Nama Jasa</th>
        <th rowspan="1">Harga Jasa</th>
        <th rowspan="1">Kategori</th>
        <th rowspan="1">Create Date</th>
        <th rowspan="1">Update Date</th>
      </tr>
      
      <tbody>

          <?php 
          $no = 1;

          foreach ($produk as $r) {
      echo "<tr>
            <td>".  ($no++)."</td>
            <td>".  ($r->namaProduk)."</td>
            <td>".  ($r->hargaPenjualan)."</td>
            <td>".  ($r->kategori)."</td>
            <td>".  ($r->createDate)."</td>
            <td>".  ($r->updateDate)."</td>
            </tr>";
          } ?>
      </tbody>    
</table>
