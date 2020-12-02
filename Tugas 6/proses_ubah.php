<?php
// Load file koneksi.php
include "conn.php";
// Ambil data id yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$riwayat_pendidikan = $_POST['riwayat_pendidikan'];



    
     
// Proses ubah data ke Database
    $query = "UPDATE data SET riwayat_pendidikan='".$riwayat_pendidikan."'WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
     $query = "UPDATE data SET riwayat_pendidikan='".$riwayat_pendidikan."'WHERE id='".$id."'";
      $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
 
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }

?>