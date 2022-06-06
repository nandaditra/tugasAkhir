<html>
	<head>
		<title>Hasil Upload Portofolio-1</title>
		<link rel="stylesheet" type="text/css" href="styleUpload.css">

	</head>
	<body>
		<?php 
		include 'c_ardes.php';
    $main=new c_ardes();
    $main->upload();
		?> 
		<table>
      <?php
          // $main=new c_ardes();
      $main->view();
      ?>
		</table>

		<form class="form1" action="" method="POST">

		<label for="submit">Lakukan Login</label>
		<button type="submit" name= "submit1" value="submit1">Lanjut</button>

		<label for="submit">Lakukan Registetrasi Ulang</label>
		<button type="submit" name= "submit2" value="submit2">Ulangi Registrasi</button>

	</body>
</html>


<?php
require_once "c_ardes.php";
if(isset($_POST['submit1'])){
  header("location:login.php");	
  }

if(isset($_POST['submit2'])){
	$main=new c_ardes();
	$main->deleteUpload();
	header("location:register.php");	
}