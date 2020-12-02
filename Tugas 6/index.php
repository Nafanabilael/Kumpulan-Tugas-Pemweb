<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nafa Nabila El Indri</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="960.css">
	<link rel="shortcut icon" href="wolfyfav.ico">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="asset/bootstrap-4/css/bootstrap.min.css">
    <!-- Memasukkan file CSS DataTable -->
    <link rel="stylesheet" href="asset/DataTables/css/dataTables.bootstrap4.min.css"> 
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

</head>

<body class="body">
	<div class="container_12">
		<div class="header">
			<div class="grid_6">
				<a class="logo" href="../CV/index.php"><del><bold>wo</del>L<del>fy</del></a>
			</div>
			<div class="grid_6">
				<nav>
					<ul>
						<a href="#">Home</a>
						<a href="#">Gallery</a>
						<a href="#">Contact</a>
					</ul>
				</nav>
			</div>
		</div>
	</div>



	<div class="container_12">
		<div class="grid_12">
			<div class="sampul">
				<div class="bgtrans">
				<div class="avatar">
					<img src="nafaa.jpg" >
				</div>
						<div class="name">			
								<div class="description text-center">
								 <h3 class="title">About</h3>
								 <div class="button">
								 <a href="https://instagram.com/nafanabilaelindri"><i class="fab fa-instagram"></i></a>
								 <a href="https://www.facebook.com/nabila.goldstar"><i class="fab fa-facebook-square"></i></a>
								 <a href="https://www.github.com/Nafanabilael"><i class="fab fa-github"></i></a>
								</div>
								<?php
									$Name="Nafa Nabila El Indri";
									$Tanggal="15 Desember 1999";
									$Univ="UPN Veteran Jawa Timur";

									echo "Halo, namaku $Name. Biasa dipanggil Nafa atau El. Aku lahir tanggal $Tanggal. Aku adalah seorang mahasiswa Jurusan Informatika di $Univ. Aku membuat character bernama woLfy yang ku gunakan sebagai nama samaran.";				
								?>

                				</div>
	                       </div>
	                    </div>
	                	</div>
    	            </div>
                </div>



<div class="container_12">
	<div class="grid_12">
		<div class="content">
		<div class="educations">
		<div class="bgedu">
          <h3 class="judul">EDUCATIONS</h3>
             <div class="riwayat"> 
        <div class="m-3">  <!-- Untuk mengatur margin di semua sisi sebesar 3 (menggunakan Bootstrap) -->
        <a class="btn btn-success mt-3 mb-3" href="form_simpan.php"><i class="fas fa-plus-circle"></i> Tambah Data</a> 	
		<div class="table-responsive-sm">          
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                        <th>Id</th>
                        <th>Riwayat Pendidikan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 


				        $query = mysqli_query($connect, "SELECT * FROM data");
				        $no=0;
			            while($data = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['riwayat_pendidikan'] ?></td>
                        <td>
                            <div class="text-center">
                            	<a href="form_ubah.php?nomor=<?= $data['id'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Ubah</a> 
                                <a href="form_hapus.php?nomor=<?= $data['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </div>
                        </td>
                    </tr>
            
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div></div></div>

                <div class="kosong"><br></div>

            <div class="skills">
            	<img src="bg3.jpeg" >
            <div class="skillbg">
                <div class="skill-bar">
   					<h2 class="jdl">SKILLS</h2>
   				<label>HTML5</label>
   				<div class="container">
    			<div class="skill html">90%</div>
  					 </div>
   				<label>CSS</label>
   				<div class="container">
   				 <div class="skill css">85%</div>
   				</div>
   				<label>Java Script</label>
   				<div class="container">
   				 <div class="skill js">70%</div>
   				</div>
   				<label>PHP</label>
   				<div class="container">
    			<div class="skill php">60%</div>
   				</div>
  				</div>
  			</div>
			</div>
		
			<div class="kosong"><br></div>
			
			<div class="gallery">
				<div class="bgtransgl">
				<h3 class="jdlgall">GALLERY</h3>					
					<?php
					echo "(berisi lukisan yang di buat sendiri)<br>";		
					?>
				<div class="cont">
				<div class="gall">
					 <img src="g1.jpg">
					 <img src="g2.jpg">
					 <img src="g3.jpg">
					 <img src="g4.jpg">
				</div>
			</div>
			</div>
				
			</div>

   
			</div>
		</div>
	</div>


	<div class="container_12">
			<div class="grid_12">
			<br>
			<h1>Profile github dengan ajax <button id="btn-clear" onclick="clearResult()">Clear</button></h1>
    <div id="hasil"></div>
    <button id="button" onclick="loadContent()">Load Content</button>

    <script>
        function loadContent() {
            var xhr = new XMLHttpRequest();
            var url = "https://api.github.com/users/Nafanabilael";

            xhr.onloadstart = function () {
                document.getElementById("button").innerHTML = "Loading...";
            }

            xhr.onerror = function () {
                alert("Gagal mengambil data");
            };

            xhr.onloadend = function () {
                if (this.responseText !== "") {
                    var data = JSON.parse(this.responseText);
                    var img = document.createElement("img");
                    img.src = data.avatar_url;
                    var name = document.createElement("h3");
                    name.innerHTML = data.name;

                    document.getElementById("hasil").append(img, name);
                    document.getElementById("button").innerHTML = "Done";

                    setTimeout(function () {
                        document.getElementById("button").innerHTML = "Load Lagi";
                    }, 3000);
                }
            };

            xhr.open("GET", url, true);
            xhr.send();
        }

        function clearResult() {
            document.getElementById("hasil").innerHTML = "";
        }
    </script>
			</div>
		</div>
		<br>

	<div class="container_12">
		<div class="grid_12">
			<div class="footer">
				<h3 class="jdl2">CONTACT :</h3>
				<div class="keterangan">
					<?php
									$Email="helloiamwolfy@gmail.com";
									$Phone="081234567892";

									echo "Email : $Email<br>";
									echo "Phone : $Phone<br>";
					?>			
					<div class="button">
					<a href="https://instagram.com/nafanabilaelindri"><i class="fab fa-instagram"></i></a>
					<a href="https://www.facebook.com/nabila.goldstar"><i class="fab fa-facebook-square"></i></a>
					<a href="https://www.github.com/Nafanabilael"><i class="fab fa-github"></i></a>
				</div>			
				</div>


			</div>
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

