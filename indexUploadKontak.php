<!DOCTYPE html>
<html>
<head>
<title>Ardes.</title>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body>

<ul>
  <li><a class="active">MASUKKAN KONTAK</a></li>
</ul>

<form class="form1" action="" method="POST">
<label for="noTelp" class="noTelp">Nomor Telepon</label>
<input id="noTelp" name='noTelp' type="text">

<label for="noWa" class="noWa">Nomor Whatsapp</label>
<input id="noWa" name='noWa' type="text">

<label for="ig" class="ig">Link Akun Instagram</label>
<input id="ig" name='ig' type="text">

<label for="email">Email</label>
<input id="email" name='email' type="text">

<label for="submit"></label>
 <button id="button" type="submit" name= "submit" value="submit">Submit</button>

 </form>
</body>
</html>

<?php
require_once "c_ardes.php";
if(isset($_POST['submit'])){
  $main = new c_ardes();

    $main->insertContact();
    header("location:mainPageArdes.php");
	
}