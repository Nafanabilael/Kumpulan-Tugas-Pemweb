<?php
// Load file koneksi.php
include "conn.php";
// Ambil data id yang dikirim oleh index.php melalui URL
$id = $_GET['nomor'];
// Query untuk menampilkan data berdasarkan id yang dikirim
$query = "SELECT * FROM data WHERE id='".$id."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Query untuk menghapus data barang berdasarkan id yang dikirim
$query2 = "DELETE FROM data WHERE id='".$id."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>