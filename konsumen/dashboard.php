<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Konsumen</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-sm mt-5 ">
    <nav class="navbar navbar-expand-lg text-bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="Logo" width="108" height="33" class="d-inline-block align-text-top">
              </a>
          <a class="navbar-brand text-white" >Dashboard</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Dashboard</a></li>
                  <li><a class="dropdown-item" href="#">Akun Profil</a></li>
                  <li><a class="dropdown-item" href="#">Beli Produk</a></li>
                  <li><a class="dropdown-item" href="#">Keluhan</a></li>
                  <li><a class="dropdown-item" href="#">Keluar Akun</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="row">
      <div class="col-4">
        <div class="bi bi-clipboard-plus-fill "  style="font-size: 60px; text-align: center;"> 
        <h4 > Beli Produk</h4> </div>
      </div>
      <div class="col-4">
        <div class="bi bi-chat-right-text"  style="font-size: 60px; text-align: center;"> 
        <h4 > Keluhan</h4> </div>
        </div>
        <div class="col-4">
        <div class="bi bi-bi bi-cart "  style="font-size: 60px; text-align: center;"> 
        <h4 > Status Pesanan</h4> </div>
      </div>


      <div class="row ms-lg-4 ">
        <div class="col-4 text-center">
          <div class="card " style="width: 14rem;">
            <img src="../img/kecil.png" width="200" class="card-img-fluid " alt="...">
            <div class="card-body">
              <h3 class="card-text ">Kulit Lumpia Kecil</h3>
              <h4>Isi 100 Lembar</h4>
              <p>komposisi:
                Tepung Terigu
                Garam
                Minyak
                Air</p>
            </div>
          </div>
        </div>
  
        <div class="col-4 text-center">
        <div class="card" style="width: 14rem;">
          <img src="../img/standar.png" width="200" class="card-img-fluid" alt="...">
          <div class="card-body ">
            <h3 class="card-text">Kulit Lumpia Standar</h3>
            <h4>Isi 90 Lembar</h4>
            <p>komposisi:
              Tepung Terigu
              Garam
              Minyak
              Air</p>
          </div>
        </div>
        </div>
        
        <div class="col-4 text-center">
            <div class="card" style="width: 14rem;">
              <img src="../img/jumbo.png" width="200" height="auto" class="card-img-fluid" alt="...">
              <div class="card-body">
                <h3 class="card-text">Kulit Lumpia Jumbo</h3>
                <h4>Isi 80 Lembar</h4>
                <p>komposisi:
                  Tepung Terigu
                  Garam
                  Minyak
                  Air</p>
              </div>
            </div>
          </div>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>