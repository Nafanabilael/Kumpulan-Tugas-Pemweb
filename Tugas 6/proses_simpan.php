<?php
// Load file koneksi.php
include "conn.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$riwayat_pendidikan = $_POST['riwayat_pendidikan'];





// Proses simpan data ke Database
    $query = "INSERT INTO data VALUES('".$id."', '".$riwayat_pendidikan."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
?>
