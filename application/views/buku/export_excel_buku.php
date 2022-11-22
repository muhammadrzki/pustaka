<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition:attachment;filename=$title.xls");
header("Pragma: no-cache");
header("expites:0");
?>

<table class="table-data">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">ISBN</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $a = 1;
    foreach ($buku as $b) { ?>
    <tr>
      <th scope="row"><?= $a++; ?></th>
      <td><?= $b['judul_buku']; ?></td>
      <td><?= $b['pengarang']; ?></td>
      <td><?= $b['penerbit']; ?></td>
      <td><?= $b['tahun_terbit']; ?></td>
      <td><?= $b['isbn']; ?></td>
      <td><?= $b['stok']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>