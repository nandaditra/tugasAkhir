<!DOCTYPE html>
<html>
<head>
<title>Ardes.</title>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body>

<ul>
  <li><a class="active">REGISTER</a></li>
</ul>

<form class="form1" action="" method="POST"  enctype='multipart/form-data'>
<label for="first_name" class="first-name">Nama Depan</label>
<input id="first_name" name='first_name' type="text">

<label for="last_name" class="first-name">Nama Belakang</label>
<input id="last_name" name='last_name' type="text">

<!-- <label for="gender" class="last-name">Gender</label> -->
<label for="gender" class="last-name">Gender</label>
<label for="gender" class="last-name">
<select name="gender" class="form-control">
                    <option value="">--Pilih Gender--</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="wanita">Wanita</option> 
    </select>
</label>

<label for="domisili">Domisili</label>
<input id="domisili" name='domisili' type="text">

<label for="email">Email</label>
<input id="email" name='email' type="text">

<label for="otoritas" class="last-name">Otoritas</label>
<label for="otoritas" class="last-name">
<select name="otoritas" class="form-control">
                    <option value="">--Pilih Otoritas--</option>
                    <option value="pengguna">Pengguna</option>
                    <option value="arsitek">Arsitek</option>
                    <option value="desainerInterior">Desainer Interior</option> 
</select>
</label>

<label for="password">Password</label>
<input id="password" name='password' type="password">

<label for="profilPicture" class="first-name">Pilih Gambar Profil</label>
<input id="profilPicture" name='profilPicture' type="file">

<label for="submit"></label>
 <button id="button" type="submit" name= "submit" value="submit">Submit</button>

<label for="submit"></label>

<label class="toLogin">Sudah punya akun? 
<a href="login.php">Masuk di sini</a>
</label>

 </form>
</body>
</html>



<?php
require_once "c_ardes.php";
if(isset($_POST['submit'])){
  // var_dump($_FILES);
  $main = new c_ardes();
    // header("location:mainPage.php");
    $main->insert();
    $main->insertPP();
    header("location:login.php");
  }