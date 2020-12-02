<html>
<head>
  <title>Nafa Nabila El Indri</title>
</head>
<body>
  <h1>Ubah Data</h1>
  
  <?php
  // Load file koneksi.php
  include "conn.php";
  
  // Ambil data id barang yang dikirim oleh index.php melalui URL
  $id = $_GET['nomor'];
  
  // Query untuk menampilkan data barang berdasarkan SKU yang dikirim
 
  $query = "SELECT *  FROM data WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>ID</td>
    <td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td>
  </tr>
  <tr>
    <td>Riwayat Pendidikan</td>
    <td><input type="text" name="riwayat_pendidikan" value="<?php echo $data['riwayat_pendidikan']; ?>"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>