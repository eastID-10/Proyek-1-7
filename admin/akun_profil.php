<?php
session_start();
error_reporting(0);
ini_set('date.timezone', 'Asia/Jakarta');
include "../assets/koneksi.php";
include "../assets/database.php";

switch ($_GET['action']) {
  default:

    ?>
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
    <div class="container py-5">
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
                      <li><a class="dropdown-item" href="pesanan_masuk.php">Kelola Pesanan</a></li>
                      <li><a class="dropdown-item" href="keluhan_admin.php">Keluhan Konsumen</a></li>
                      <li><a class="dropdown-item" href="logout.php">Keluar Akun</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <?php
              
              $db = new database();
              $data = $db->tampil_data("SELECT * FROM user WHERE id_user='".$_SESSION['id']."'");
              foreach($data as $data){
              ?>  
          
            <div class="row text-light">
              <div class="col-center">
                <div class="card text-center p-3 mb-5">
                  <div class="card-body bg-white">

                    <h2>Profil Anda</h2>
                    <div class="row mt-lg-5 ">
                      <div class="col-4"></div>
                        <div class="col-4">
                          <table class="table table-hover">
                            <tr>
                              <th>Nama Lengkap</th>
                              <td><?=$data['nama_lengkap'];?></td>
                            </tr>
                            <tr>
                              <th>Username</th>
                              <td><?=$data['username'];?></td>
                            </tr>
                            <tr>
                              <th>No Hp</th>
                              <td><?=$data['no_handphone'];?></td>
                            </tr>
                            <tr>
                              <th>Password</th>
                              <td><?=$data['password'];?></td>
                            </tr>
                            <tr>
                              <th>Alamat</th>
                              <td><?=$data['alamat'];?></td>
                            </tr>
                          </table>
                          <a href="akun_profil.php?action=edit&id=<?=$data['id_user']?>"><button type="" class="btn btn-primary" href="">edit</button></a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
              <?php
              }
          ?>
              
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
  <?php
  break;
  case 'edit':
  $db = new database();
  $data= $db->get_data("SELECT * FROM user WHERE id_user='".$_SESSION['id']."'");
  ?>

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
      <div class="container">
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
        <form method="POST" action="akun_profil.php?action=update">
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="hidden" class="form-control" id="floatingInput" name="id" placeholder="Nama Lengkap" value="<?=$data['id_user'];?>">
                    <label for="floatingInput">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="nama" class="form-control" id="floatingInput" name="nama" placeholder="Nama Lengkap" value="<?=$data['nama_lengkap'];?>">
                    <label for="floatingInput">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="Username" class="form-control" id="floatinginput" name="username" placeholder="Username" value="<?=$data['username'];?>">
                    <label for="floatinginput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="NoHp" class="form-control" id="floatinginput" name="noHp" placeholder="No Handphone" value="<?=$data['no_handphone'];?>">
                    <label for="floatingInput">No Handphone</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="ps" placeholder="Password" value="<?=$data['password'];?>">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" name="alamat" placeholder="Provinsi, Kota, Kecamatan, Desa, Detail Rumah " value="<?=$data['alamat'];?>">
                    <label for="floatingPassword">Alamat</label>
                </div>
                
                    
                    <div class="mb-3 form-check">
                    <div class="col-md">
                      <button type="submit" class="btn btn-primary center-block">Kirim</button>
                    </div>
                  </div>
            </div>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>  
  </body>
    </html>
  <?php
  break; 
  case 'update':
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $noHp = $_POST['noHp'];
        $ps = $_POST['ps'];
        $alamat = $_POST['alamat'];
        $db = new database();
        $query = $db->query_data("UPDATE user SET  nama_lengkap ='".$nama."' , username ='".$username."' , 
                                no_handphone ='".$noHp."', password ='".$ps."' , alamat ='".$alamat."' WHERE id_user='".$_POST['id']."'");
        if($query) {
            echo "<script> alert('Berhasil'); 
            document.location='akun_profil.php'; </script>";
        } else {
            echo "<script> alert('gagal');
                document.location='akun_profil.php?action=edit&id=".$POST['id']."'; </script>";
        }
    }
    break;
  }

                  