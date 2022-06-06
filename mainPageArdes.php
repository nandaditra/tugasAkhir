<html>
	<head>
		<title>Ardes.</title>
		<link rel="stylesheet" type="text/css" href="styleMainPage.css">
        <link rel="stylesheet" type="text/css" href="
        https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

	</head>
	<body>
    <ul>
  <li><a class="active"><h5>Ardes.</h5></a></li>
  <li>  <a class="active" href="login.php">Logout</a>
</li>
</ul>
<?php
$conn = mysqli_connect("localhost", "root", "", "tugasakhir");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

$sql = "SELECT user.*, profil.gambarProfil, contact.*, upload.* FROM user
INNER JOIN profil ON user.id=profil.id 
INNER JOIN contact on profil.ID=contact .ID
INNER JOIN upload on upload.ID=contact .ID
WHERE user.otoritas!='pengguna'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div class='d-flex'>";
    while ($row = $result->fetch_assoc()) {
        ?> 	
        <div class="d-flex flex-wrap justify-content-evenly">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="file/<?php echo $row["gambarProfil"]?>" class="img-fluid rounded-start" 
      style="width:250px; height:180px " alt="...">
    </div>
    <div class="col-md-8">
      <div class="container">
  <div class="row">
    <div class="col">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Nama Lengkap: <?php echo $row["first_name"]." ".$row["last_name"]?></li>
    <li class="list-group-item">Otoritas: <?php echo $row["otoritas"] ?></li>
    <li class="list-group-item">Domisili: <?php echo $row["domisili"] ?></li>
  </ul>
    </div>
    <div class="col">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Nomor Telepon: <?php echo $row["noTelp"]?></li>
    <li class="list-group-item">Nomor Whatsapp: <?php echo $row["noWa"] ?></li>
    <li class="list-group-item">Instagram: <?php echo $row["instagram"] ?></li>
    <li class="list-group-item">Email: <?php echo $row["email"] ?></li>
  </ul>
    <img src="file/<?php echo $row["nama_file1"]?>"  
      style="width:250px; height:180px " alt="...">
      <img src="file/<?php echo $row["nama_file2"]?>"  
      style="width:250px; height:180px " alt="...">
      <img src="file/<?php echo $row["nama_file3"]?>"  
      style="width:250px; height:180px " alt="...">
    </div>
  </div>
</div>



    </div>
  </div>
</div>




    </div>
	</body>
</html>

<?php }} ?>



