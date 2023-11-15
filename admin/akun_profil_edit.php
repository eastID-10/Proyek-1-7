<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Akun Profil</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg text-bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="Logo" width="108" height="33" class="d-inline-block align-text-top">
              </a>
          <a class="navbar-brand text-white" >Edit Akun Profil</a>

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
                  <li><a class="dropdown-item" href="pesanan_masuk.php">Kelola Pesanan</a></li>
                  <li><a class="dropdown-item" href="keluhan_admin.php">Keluhan Konsumen</a></li>
                  <li><a class="dropdown-item" href="logout.php">Keluar Akun</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <div class="container">
    <form>
        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="Nama Lengkap" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
                <label for="floatingInput">Nama Lengkap</label>
            </div>
            <div class="form-floating mb-3">
                <input type="Username" class="form-control" id="floatinginput" placeholder="Username">
                <label for="floatinginput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="No Handphone" class="form-control" id="floatinginput" placeholder="No Handphone">
                <label for="floatingInput">No Handphone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="row g-2">
              <div class="col-md">
            
                <label for="floatingInputGrid" >Alamat  </label>
                  <textarea type="Alamat" rows="5" class="form-control" id="floatingInputGrid" placeholder="Provinsi, Kota, Kecamatan, Desa, Detail Rumah "></textarea>
        
              </div>
                
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input-right" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Klik Jika Sudah Benar</label>
                </div>
                <div class="col-md">
                  <button type="submit" class="btn btn-primary center-block">Kirim</button>
                </div>
              </div>
        </div>
    </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>