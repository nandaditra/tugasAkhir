<html>
	<head>
		<title>Hasil Upload Portofolio-1</title>
		<link rel="stylesheet" type="text/css" href="styleUpload.css">

	</head>
	<body>
		<?php 
		include 'c_ardes.php';
    $main=new c_ardes();
    $pilihId=$_SESSION['id'];
    $main->viewContact($pilihId);

		?> 
		<table>
      <?php
          // $main=new c_ardes();
      // $main->view();
      ?>
		</table>

		<div class="container">
  <div class="row">
    <div class="col order-last">
      <?php echo $row["noTelp"] ?>
    </div>
    <div class="col">
    <?php echo $row["noWa"] ?>
    </div>
    <div class="col order-first">
    <?php echo $row["instagram"] ?>
    </div>
    <div class="col order-first">
    <?php echo $row["email"] ?>
    </div>
  </div>
</div>

	</body>
</html>








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
// session_start();
$sql = "SELECT noTelp, noWa, instagram, email 
FROM contact WHERE id= $pilihId";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div class='d-flex flex-wrap justify-content-evenly'>";
    while ($row = $result->fetch_assoc()) {
        ?> 		
        <div class="card" style="width: 18rem;">
        <div class="d-flex justify-content-evenly">
        </div>
  <div class="card-body">
    <h3 class="card-title"><?php echo $row["otoritas"] ?></h3>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nomor Telepon: <?php echo $row["noTelp"]?></li>
    <li class="list-group-item">Nomor Whatsapp: <?php echo $row["noWa"] ?></li>
    <li class="list-group-item">Instagram: <?php echo $row["instagram"] ?></li>
    <li class="list-group-item">Email: <?php echo $row["email"] ?></li>
  </ul>
</div>
<?php } ?>
	</body>
</html>
<?php } ?>








