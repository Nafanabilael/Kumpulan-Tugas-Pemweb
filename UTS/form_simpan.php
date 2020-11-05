<html>
<head>
  <title>Barokah Minimarket</title>
</head>
<body>
  <h1>Tambah Data</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>SKU</td>
    <td><input type="text" name="SKU"></td>
  </tr>
  <tr>
    <td>Nama Barang</td>
    <td><input type="text" name="Nama_barang"></td>
  </tr>
  <tr>
    <td>Kategori</td>
    <td><input type="text" name="Kategori"></td>
  </tr>
  <tr>
    <td>Jumlah Stock</td>
    <td><input type="text" name="Jumlah_stock"></td>
  </tr>
  <tr>
    <td>Harga Satuan</td>
    <td><input type="text" name="Harga_satuan"></td>
  </tr>
  </table>
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>