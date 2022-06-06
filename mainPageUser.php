<html>
	<head>
		<title>Hasil Upload Portofolio-1</title>
		<link rel="stylesheet" type="text/css" href="styleMainPage.css">
        <link rel="stylesheet" type="text/css" href="
        https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

	</head>
	<body>
    <ul>
  <li><a class="active">Ardes.</a></li>
</ul>
<?php
$conn = mysqli_connect("localhost", "root", "", "tugasakhir");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$sql = "SELECT user.*, profil.gambarProfil FROM user
INNER JOIN profil ON user.id=profil.id WHERE user.otoritas!='pengguna'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div class='d-flex flex-wrap justify-content-evenly'>";
    while ($row = $result->fetch_assoc()) {
        ?> 		
        <div class="card" style="width: 18rem;">
        <div class="d-flex justify-content-evenly">
        <img src="file/<?php echo $row["gambarProfil"]?>" class="card-img-top" style="width:250px; height:250px " alt="...">
        </div>
  <div class="card-body">
    <h3 class="card-title"><?php echo $row["otoritas"] ?></h3>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nama Lengkap: <?php echo $row["first_name"]." ".$row["last_name"]?></li>
    <li class="list-group-item">Otoritas: <?php echo $row["otoritas"] ?></li>
    <li class="list-group-item">Domisili: <?php echo $row["domisili"] ?></li>
  </ul>
  <div class="card-body">
    <a href="" class="card-link" name=lihatKontak>Lihat Kontak</a>
    <a href="lihatPortofolio.php" class="card-link">Lihat Portofolio</a>
  </div>
</div>
    <?php 
    if(isset($_POST['lihatKontak'])){
      $pilihId = $row["id"];
      $main= new c_ardes();
      $main->viewContact($pilihId);
    }
  
  
  } ?>
    </div>
	</body>
</html>

<?php } ?>
<a href="login.php">Logout</a>




