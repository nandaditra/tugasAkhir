<html>
	<head>
		<title>Hasil Upload Portofolio-2</title>
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

<label for="submit">Upload Portofolio-3</label>
<button type="submit" name= "submit1" value="submit1">Lanjut</button>

<label for="submit">Upload Ulang Portofolio</label>
<button type="submit" name= "submit2" value="submit2">Ulangi Semua</button>

</body>
</html>


<?php
require_once "c_ardes.php";
if(isset($_POST['submit1'])){
header("location:indexUpload3.php");	
}

if(isset($_POST['submit2'])){
$main=new c_ardes();
$main->deleteUpload();
header("location:indexUpload1.php");	
}
