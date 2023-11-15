
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="body-nav">
    <div class="container-sm mt-5 ">
    <nav class="navbar navbar-expand-lg text-bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="Logo" width="108" height="33" class="d-inline-block align-text-top">
              </a>
          <a class="navbar-brand text-white" >Daftar Pesanan</a>

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
                  <li><a class="dropdown-item" href="index.php">Dashboard</a></li>
                  <li><a class="dropdown-item" href="akun_profil.php">Akun Profil</a></li>
                  <li><a class="dropdown-item" href="beli_produk.php">Beli Produk</a></li>
                  <li><a class="dropdown-item" href="daftar_pesanan.php">Daftar Pesanan</a></li>
                  <li><a class="dropdown-item" href="keluhan.php">Keluhan</a></li>
                  <li><a class="dropdown-item" href="logout.php">Keluar Akun</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- nav status -->
      <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-start">
          <button class="btn btn-sm btn-outline-success me-5" type="button">Masih Diproses</button>
          <button class="btn btn-sm btn-outline-dark me-5" type="button">Pesanan Dikirim</button>
          <button class="btn btn-sm btn-outline-warning me-5" type="button">Pesanan Selesai</button>
          <button class="btn btn-sm btn-outline-danger me-5" type="button">Pesanan Batal</button>
        </form>
      </nav>
 <div class="container">
    
  <div class="row">
    <div class="col-6 col-center mt-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Kulit Lumpia Kecil</h5>
          <h7 class="card-text">10 X 10.000</h7>
          <p class="card-text">Easti damayanti 082100254481 larangan lohbener</p>
          <p class="card-link">Rp 100.000</p>
          <a href="#" class="btn btn-primary">Proses</a>
        </div>
      </div>
    </div>
    <div class="col-6 col-center mt-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Kulit Lumpia Kecil</h5>
          <h7 class="card-text">10 X 10.000</h7>
          <p class="card-text">Easti damayanti 082100254481 larangan lohbener</p>
          <p class="card-link">Rp 100.000</p>
          <a href="#" class="btn btn-primary">Proses</a>
        </div>
      </div>
    </div>
  </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>