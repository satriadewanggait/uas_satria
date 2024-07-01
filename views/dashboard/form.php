<?php
include './views/layouts/header.php';

$label = $_SERVER['QUERY_STRING'] ? 'Edit Produk' : 'Tambah Produk';

$product_code = '';

if($_SERVER['QUERY_STRING']) {
  $product_code = $_GET['product_code'];
  $product_name = $_GET['product_name'];
  $stok = $_GET['stok'];
  $price = $_GET['price'];
}

$uri = !$_SERVER['QUERY_STRING'] ?
'http://'. $_SERVER['HTTP_HOST']. '/models/produkSave.php' :
'http://'. $_SERVER['HTTP_HOST']. '/models/updateDataProduk.php';
?>

<div class="container">
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <h1><?= $label ?></h1>
      <form method="POST" action="<?= $uri ?>" name="produk">
        <input type="hidden" class="form-control" id="product_code" name="product_code" value="<?= $product_code ?>">
        <div class="form-group">
          <label for="product_name">Nama Produk:</label>
          <input type="text" class="form-control" id="product_name" name="product_name" value="<?= $product_name ?>">
        </div>
        <div class="form-group">
          <label for="price">Harga:</label>
          <input type="text" class="form-control" id="price" name="price" value="<?= $price ?>">
        </div>
        <div class="form-group">
          <label for="stok">Stok:</label>
          <input type="text" class="form-control" id="stok" name="stok" value="<?= $stok ?>">
        </div>
        <button type="submit" class="btn btn-default">Simpan</button>
      </form>
    </div>
    <div class="col-lg-4"></div>
  </div>
</div>

<?php
include './views/layouts/footer.php';
?>