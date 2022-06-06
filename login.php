<!DOCTYPE html>
<html lang="en">
<head>
	  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="styleIndex.css"> -->

    <!--CSS Style Minimum -->
    <link href="css/style.css"rel="stylesheet">
    <title>Login | Ardes</title>
</head>

<body>
  <div class="container mx-6">
     
   <div class="row row-cols-2">
       <div class="col-8 col-sm-6 my-4">
               <h2 class="text-center">Temukan Arsitek </h2>
               <h2 class="text-center">Desainer Terbaik Anda</h2>
               <img src="img/logologin.png"alt="logologin.png"width=95%>
        </div>

        <div class="col-8 col-sm-4 mt-5">
            <div>
                <h2 class="text-center">Login</h2>
            </div>

            <form class="container shadow p-3 mx-1 my-4 bg-body rounded-3" action="" method="POST">
                
              <div class="my-4 mx-3 bun">
                
                  <label for="email"class="form-label">Email</label><br>
                  <input id="email" name='email' type="text"><br>
              
                  <label for="password" class="form-label">Password</label><br>
                  <input id="password" name='password' type="password"><br>
            

                  <label for="submit"></label>
                  <label class="toLogin">Belum punya akun? 
                  <a href="register.php">Daftar di sini</a>
                  </label>

                  <label for="submit"></label>
                  <button id="button" type="submit" name= "submit" value="submit"
                                  href="index.php?i=0">Masuk</button>
                
              </div>

            </form>
        </div>
    
   </div>

    
  </div>

   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
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