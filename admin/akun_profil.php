<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Profil</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg text-bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="Logo" width="108" height="33" class="d-inline-block align-text-top">
              </a>
          <a class="navbar-brand text-white" >Akun Profil</a>

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
                  <li><a class="dropdown-item" href="kelola_produk.php">Kelola Produk</a></li>
                  <li><a class="dropdown-item" href="pesanan_masuk(kelola).php">Kelola Pesanan</a></li>
                  <li><a class="dropdown-item" href="kelola_keluhan.php">Keluhan Konsumen</a></li>
                  <li><a class="dropdown-item" href="logout.php">Keluar Akun</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container py-5">
        <div class="row text-light">
          <div class="col-center">
            <div class="card text-center p-3 mb-5">
              <div class="card-body bg-white">

                <h2>Chandra Apriyanto</h2>
                <div class="row mt-lg-5 ">
                  <div class="col-4"></div>
                    <div class="col-4">
                      <table class="table table-hover">
                        <tr>
                          <th>Username</th>
                          <td>Chandra</td>
                        </tr>
                        <tr>
                          <th>No Hp</th>
                          <td>0895378967621</td>
                        </tr>
                        <tr>
                          <th>Password</th>
                          <td>Chandra123</td>
                        </tr>
                        <tr>
                          <th>Alamat</th>
                          <td>jl.suryanegara rt:11/03 legok,lohbener,indramayu,jawa barat</td>
                        </tr>
                      </table>
                      <button type="submit" class="btn btn-primary">edit</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>