<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invetarisasi stok Barokah Minimarket</title>
    <!-- Memasukkan File CSS Bootstrap -->
    <link rel="stylesheet" href="asset/bootstrap-4/css/bootstrap.min.css">
    <!-- Memasukkan file CSS DataTable -->
    <link rel="stylesheet" href="asset/DataTables/css/dataTables.bootstrap4.min.css"> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center>
<?php
echo "Selamat Datang, <b>$username</b> di program invetarisasi stok Barokah Minimarket";
?>
</center>
    <div class="m-3">  <!-- Untuk mengatur margin di semua sisi sebesar 3 (menggunakan Bootstrap) -->
      <div class="cover">
        <center> <img src="toko.jpg" width="10%"> </center>
       
        </div>
        <h1 class="text-center">Daftar Inventarisasi Stok Barang Barokah Minimarket</h1>
        <a class="btn btn-success mt-3 mb-3" href="form_simpan.php"><i class="fas fa-plus-circle"></i> Tambah Data</a><br><br>

        <!-- Proses pembuatan Table -->
        <div class="table-responsive-sm">          
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                        <th>SKU</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah Stok</th>
                        <th>Harga Satuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 

                    $query = mysqli_query($connect, "SELECT * FROM data");  /* Query untuk memanipulasi Database */
                    $no=0;
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?= $data['SKU'] ?></td>
                        <td><?= $data['Nama_barang'] ?></td>
                        <td><?= $data['Kategori'] ?></td>
                        <td><?= $data['Jumlah_stok'] ?></td>
                        <td><?= $data['Harga_satuan'] ?></td>
                        <td>
                            <div class="text-center">
                                <a href="form_ubah.php?nomor=<?= $data['SKU'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Ubah</a>
                                <a href="form_hapus.php?nomor=<?= $data['SKU'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </div>
                        </td>
                    </tr>
            
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Memasukkan File Javascript Bootstrap -->
    <script src="asset/bootstrap-4/js/jquery.js"></script>
    <script src="asset/bootstrap-4/js/popper.js"></script>
    <script src="asset/bootstrap-4/js/bootstrap.min.js"></script>
    <!-- Memasukkan File Javascript DataTable -->
    <script src="asset/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="asset/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <!-- Memasukkan link untuk plugin Font -->
    <script src="https://kit.fontawesome.com/122a498aaa.js" crossorigin="anonymous"></script>
    

    <!-- Penggunaan DataTable dengan jQuery -->
    <script>
        $(function(){
            $('.table').DataTable();
        });
    </script>

</body>
</html>