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
    <title>Isi Portofolio | Ardes</title>
    <script src="https://kit.fontawesome.com/de7705137f.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <header class="container">
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
      </header>

      <main>

       <div class="container mt-4">
        <div class="row mt-4 py-5">
            <div class="col-6">
              <img class="w-100"src="img/upload.png"alt="">
            </div>
            <div class="col-6">
              <form class="shadow p-3 mb-5 mt-4 bg-body rounded "action="aksi3.php" method="POST" enctype="multipart/form-data">
                  <h4 class="text-center p-3">Unggah Portofolio Ke-3</h4>

                  <div class="mb-3 p-3">
                    <label for="formFile" class="form-label">Silahkan Masukkan File Portofolio</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>

                  <div class="text-end">
                    <button type="button" class="btn btn-info text-white"name= "upload" value="upload">Unggah</button>
                  </div>
              </form>
            </div>
        </div>
       </div>
       
      </main>

      <footer  class="footer mt-auto py-4 bg-dark">
        <p class="text-white text-center">@copyright 2022 - Created by kelompok 7</p>
      </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>