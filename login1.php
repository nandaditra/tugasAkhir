<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

            <form class="container shadow p-3 mx-1 my-4 bg-body rounded-3"action="" method="POST">
               <div class="my-4 mx-3">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control border border-info" id="email" name="email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control border border-info" id="password" name="password">
                </div>
               
                <div class="mt-3">
                  <div class="text-start float-start">
                    <input type="checkbox" class="form-check-input border border-info" id="exampleCheck1">
                    <label class="form-check-label " for="exampleCheck1">Ingat Saya</label>
                  </div>

                  <div class="text-end">
                    <p>Lupa Sandi?</p>
                  </div>
                    
                </div>
                       
                <div class="mt-5">
                    <div class="text-start float-start">
                        <p>Belum Punya Akun?<a href="register1.php"><b>Register</b></a></p>
                    </div>

                    <div class="text-end">     
                        <button type="submit" class="btn btn-info text-white"name= "submit"href="index.php?i=0"value="submit">masuk</button>
                    </div>
                </div>
                        
               </div>
              </form>
          </div>
         
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
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