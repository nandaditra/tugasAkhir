<html>
	<head>
		 <!-- Required meta tags -->
		 <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

         <!--CSS Style Minimum -->
        <link href="css/style.css"rel="stylesheet">
        <title>Hasil Upload Portofolio-1 | Ardes</title>
         <script src="https://kit.fontawesome.com/de7705137f.js" crossorigin="anonymous"></script>
	
	</head>
	<body>

	<!-- <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand text-info" href="#">
              <i class="fa-solid fa-pause"data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></i> Ardes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <div class="">
                  <p class="position-absolute top-0.5 end-0 text-info">User</p>
              </div>
            </div>
          </div>

          <!--Sidebar Ardes -->

          <div class="offcanvas offcanvas-start " data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header bg-info m-0 text-white">
              <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu Lainnya</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body container-fluid">
              <ul>
                <h6><i class="fa-solid fa-rotate-left"></i> Kembali</h6>
               <h6><i class="fa-solid fa-sim-card"></i> Edit Portofolio</h6>
               <h6><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</h6>
              </ul>
            </div>
          </div>
          
        </nav>
      </header> -->


		<?php 
		include 'c_ardes.php';
              $main=new c_ardes();
               $main->upload1();
		  ?> 
		<table>
      <?php
          // $main=new c_ardes();
      $main->view1();
      ?>
		</table>

		<form class="form1" action="" method="POST">

		<label for="submit">Upload Portofolio-2</label>
		<button type="submit" name= "submit1" value="submit1">Lanjut</button>

		<label for="submit">Upload Ulang Portofolio</label>
		<button type="submit" name= "submit2" value="submit2">Ulangi Semua</button>

        </form>

		<!-- <div class="row mt-4 py-5">
            <div class="col-6">
              <form class="shadow p-3 mb-5 mt-4 bg-body rounded"action="" method="POST">
                  <h4 class="text-center p-3">Unggah Portofolio</h4>

                <div class="mb-3 row mt-5">
                    <label for="nomorTelepon" class="col-sm-5 col-form-label">Upload Portofolio-2</label>
                    <div class="d-grid gap-2 col-sm-6">
                        <button type="submit" name= "submit1" value="submit1" class="btn btn-success text-white">Lanjut</button>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="noWA" class="col-sm-5 col-form-label">Upload Ulang Portofolio</label>
                    <div class="d-grid gap-2 col-sm-6">
                        <button type="submit" name= "submit2" value="submit2" class="btn btn-danger text-white">Ulangi Semua</button>
                    </div>
                </div>

              </form>
              </div>
        </div> -->
	</body>
</html>


<?php
require_once "c_ardes.php";
if(isset($_POST['submit1'])){
  header("location:indexUpload2.php");	
  }

if(isset($_POST['submit2'])){
	$main=new c_ardes();
	$main->deleteUpload();
	header("location:indexUpload1.php");	
}