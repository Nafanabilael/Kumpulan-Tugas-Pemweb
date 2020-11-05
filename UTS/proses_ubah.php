<?php
// Load file koneksi.php
include "conn.php";
// Ambil data SKU yang dikirim oleh form_ubah.php melalui URL
$SKU = $_GET['SKU'];
// Ambil Data yang Dikirim dari Form
$SKU = $_POST['SKU'];
$Nama_barang = $_POST['Nama_barang'];
$Kategori = $_POST['Kategori'];
$Jumlah_stok= $_POST['Jumlah_stok'];
$Harga_satuan = $_POST['Harga_satuan'];



    
     
// Proses ubah data ke Database
    $query = "UPDATE data SET Nama_barang='".$Nama_barang."', Kategori='".$Kategori."', Jumlah_stok='".$Jumlah_stok."', Harga_satuan='".$Harga_satuan."'WHERE SKU='".$SKU."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
     $query = "UPDATE data SET Nama_barang='".$Nama_barang."', Kategori='".$Kategori."', Jumlah_stok='".$Jumlah_stok."', Harga_satuan='".$Harga_satuan."'WHERE SKU='".$SKU."'";
      $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
 
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }

?>