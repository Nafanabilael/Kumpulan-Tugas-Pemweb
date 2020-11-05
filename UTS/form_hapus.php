<?php
// Load file koneksi.php
include "conn.php";
// Ambil data SKU yang dikirim oleh index.php melalui URL
$SKU = $_GET['nomor'];
// Query untuk menampilkan data berdasarkan SKU yang dikirim
$query = "SELECT * FROM data WHERE SKU='".$SKU."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Query untuk menghapus data barang berdasarkan SKU yang dikirim
$query2 = "DELETE FROM data WHERE SKU='".$SKU."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>