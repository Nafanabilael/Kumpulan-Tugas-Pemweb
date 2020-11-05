<html>
<head>
  <title>Barokah Minimarket</title>
</head>
<body>
  <h1>Ubah Data</h1>
  
  <?php
  // Load file koneksi.php
  include "conn.php";
  
  // Ambil data SKU barang yang dikirim oleh index.php melalui URL
  $SKU = $_GET['nomor'];
  
  // Query untuk menampilkan data barang berdasarkan SKU yang dikirim
 
  $query = "SELECT *  FROM data WHERE SKU='".$SKU."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="proses_ubah.php?SKU=<?php echo $SKU; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>SKU</td>
    <td><input type="text" name="SKU" value="<?php echo $data['SKU']; ?>"></td>
  </tr>
  <tr>
    <td>Nama Barang</td>
    <td><input type="text" name="Nama_barang" value="<?php echo $data['Nama_barang']; ?>"></td>
  </tr>
  <tr>
    <td>Kategori</td>
    <td><input type="text" name="Kategori" value="<?php echo $data['Kategori']; ?>"></td>
  </tr>
  <tr>
    <td>Jumlah Stock</td>
    <td><input type="text" name="Jumlah_stok" value="<?php echo $data['Jumlah_stok']; ?>"></td>
  </tr>
  <tr>
    <td>Harga Satuan</td>
    <td><input type="text" name="Harga_satuan" value="<?php echo $data['Harga_satuan']; ?>"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>