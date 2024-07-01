<?php
session_start();
include './views/layouts/navbar.php';
include './views/layouts/header.php';
$uriForm = 'http://' . $_SERVER['HTTP_HOST'] . '/dashboard/form';

$data = require('./models/dataProduk.php');
?>

<div class="container">
  <h1>Data Produk</h1>
  <table id="product" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Stok</th>
        <th>Harga Jual</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($data as $key => $row) :
        $ur_action = $uriForm . '?product_code=' . $row['product_code'] . '&product_name=' . $row['product_name'] . '&stok=' . $row['stok'] . '&price=' . $row['price']
      ?>
        <tr>
          <td><?= $row['product_code'] ?></td>
          <td><?= $row['product_name'] ?></td>
          <td><?= $row['stok'] ?></td>
          <td><?= $row['price'] ?></td>
          <td><a href="<?= $ur_action ?>" class="btn btn-warning">Edit</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php include './views/layouts/footer.php'; ?>