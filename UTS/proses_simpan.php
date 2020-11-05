<?php
// Load file koneksi.php
include "conn.php";
// Ambil Data yang Dikirim dari Form
$SKU = $_POST['SKU'];
$Nama_barang = $_POST['Nama_barang'];
$Kategori = $_POST['Kategori'];
$Jumlah_stock= $_POST['Jumlah_stock'];
$Harga_satuan = $_POST['Harga_satuan'];




// Proses simpan data ke Database
    $query = "INSERT INTO data VALUES('".$SKU."', '".$Nama_barang."', '".$Kategori."','".$Jumlah_stock."' , '".$Harga_satuan."')";
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






