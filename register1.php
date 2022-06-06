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
    <title>Register | Ardes</title>
  </head>
  <body>
    <div class="container mx-6">
        <div class="row row-cols-2 mt-2">
          <div class="col-8 col-sm-4 my-5">
               <h2 class="text-center">Temukan Arsitek </h2>
               <h2 class="text-center">Desainer Terbaik Anda</h2>
               <img src="img/logologin.png"alt="logologin.png"width=95%>
          </div>
          
          <div class="col-8 col-sm-6 mt-5">
            <div>
                <h2 class="text-center">Register</h2>
            </div>

            <form class="g-3 shadow p-4 mt-4 bg-body rounded-3 "action="" method="POST"  enctype='multipart/form-data'>
               <div class="row g-3">
                <div class="col-md-6">
                  <label for="first_name" class="form-label">Nama Depan</label>
                  <input type="text" class="form-control  border border-info" id="first_name" name='first_name' placeholder="Nama Depan">
                </div>
                <div class="col-md-6">
                  <label  for="last_name" class="form-label">Nama Belakang</label>
                  <input type="text" class="form-control  border border-info" id="last_name" name='last_name'placeholder="Nama Belakang">
                </div>
                <div class="col-md-8">
                  <label for="domisili" class="form-label">Domisili</label>
                  <input type="text" class="form-control  border border-info" id="domisili" name='domisili'placeholder="Ex Batang">
                </div>
                <div class="col-md-4">
                  <label for="gender" class="form-label">Gender</label>
                  <select id="gender"  name="gender"class="form-select  border border-info">
                    <option value="">--Pilih Gender--</option>
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control  border border-info" id="email"name='email' placeholder="xxx@gmail.com">
                </div>
                <div class="col-md-6">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control  border border-info" id="password" name='password'placeholder="Ex Putxxxx">
                </div>

                <fieldset class="col-md-5 mb-1 mt-3"name="otoritas">
                  <p>Daftar Sebagai :</p>
                  <div class="col-sm-12">
                    <div class="form-check">
                      <input class="form-check-input border border-info" type="radio" name="otoritas" id="gridRadios1" value="Pengguna">
                      <label class="form-check-label" for="gridRadios1" value="pengguna">
                        Pengguna
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input border border-info" type="radio" name="otoritas" id="gridRadios2" value="Arsitek">
                      <label class="form-check-label" for="gridRadios2"value="arsitek">
                        Arsitek
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input border border-info" type="radio" name="otoritas" id="gridRadios3" value="Desain Interior">
                      <label class="form-check-label" for="gridRadios3" value="desainerInterior">
                        Desain Interior
                      </label>
                    </div>
                  </div>
                </fieldset>

                <div class="col-md-7">
                  <label for="profilPicture" class="form-label">Foto Profil</label>
                  <input type="file" class="form-control  border border-info" id="profilPicture" name='profilPicture'>

                       
                <div class="mt-5">
                    <div class="text-start float-start">
                        <p>Sudah Punya Akun?<a href="login1.php"><b>Login</b></a></p>
                    </div>

                    <div class="text-end">     
                        <button type="submit" class="btn btn-info text-white"name= "submit" value="submit">Daftar</button>
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
  // var_dump($_FILES);
  $main = new c_ardes();
    // header("location:mainPage.php");
    $main->insert();
    $main->insertPP();
    header("location:login1.php");
  }