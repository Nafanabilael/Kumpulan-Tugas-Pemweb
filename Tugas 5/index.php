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
								<?php 
				                  //proses menampilkan data dari database:
				                  //siapkan query SQL
				                  $query = mysqli_query($connect, "SELECT * FROM riwayat");
				                  $no=0;
			                    while($data = mysqli_fetch_array($query)){
			                		?>
			                    <tr>
			                        <td><?= $data['SD'] ?></td><br>
			                        <td><?= $data['SMP'] ?></td><br>
			                        <td><?= $data['SMA'] ?></td><br>
			                        <td><?= $data['S1'] ?></td><br>
			                    </tr>
				                 <?php } ?>
				</div>
				</div>
                </div>

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


</body>
</html>