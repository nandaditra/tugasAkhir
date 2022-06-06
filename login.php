<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleIndex.css">
	<title>Login</title>
</head>
<body>

<ul>
  <li><a class="active">LOGIN</a></li>
</ul>

<form class="form1" action="" method="POST">
<label for="email" class="email">Email</label>
<input id="email" name='email' type="text">

<label for="password" class="first-name">Password</label>
<input id="password" name='password' type="password">

<label for="submit"></label>
 <button id="button" type="submit" name= "submit" value="submit"
                href="index.php?i=0">Masuk</button>

<label for="submit"></label>
<label class="toLogin">Belum punya akun? 
<a href="register.php">Daftar di sini</a>
</label>

 </form>
</body>
</html>

<?php 
require_once "c_ardes.php";

if(isset($_POST['submit'])){
	if($_POST['email']==null or $_POST['password']==null){
		echo "<script>alert('Email/Password tidak boleh kosong!')</script>";
	} else{
  $main = new c_ardes();
  $main->loginCheck();
  }
}
?>