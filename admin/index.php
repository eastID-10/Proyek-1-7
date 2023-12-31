<?php
session_start();
error_reporting(0);
ini_set('date.timezone', 'Asia/Jakarta');
include "../assets/koneksi.php";
include "../assets/database.php";

if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
    echo "<script> document.location='login.php'; </script>";
} else {
  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
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
      <div class="row mt-2 ">
      <div class="col-4">
        <a class="link-dark link-underline link-underline-opacity-0" href="pesanan_masuk.php">
          <div class="bi bi-journals "  style="font-size: 30px; text-align: center;"> 
          <h4 > Kelola Pesanan</h4> </div>
        </a>
      </div>
      <div class="col-4">
        <a class="link-dark link-underline link-underline-opacity-0" href="kelola_produk.php">
          <div class="bi bi-box-seam"  style="font-size: 30px; text-align: center;"> 
          <h4 > Kelola Produk</h4> </div>
        </a>
      </div>
        <div class="col-4">
          <a class="link-dark link-underline link-underline-opacity-0" href="keluhan_admin.php">
            <div class="bi bi-graph-down-arrow"  style="font-size: 30px; text-align: center;"> 
            <h4 > Keluhan Konsumen</h4> </div>
          </a>
      </div>

      <!--  -->
      <div class="container ">
      <div class="col-4 container-ds text-white rounded-2 text-center">
          <h3>Selamat Datang! </h3>
          <p>Dapatkan Laporan Cepat Dari Data Di Bawah Ini </p>
        </div>
      <?php
          $nomor =1;
          $db = new database();
          $data = $db->tampil_data("SELECT * FROM keluhan ORDER BY id_keluhan desc");
          foreach($data as $data){
            
            ?>
      
        <div class="row">
        
            <div class="col-3"></div>
          <div class="col-6 col-center mt-lg-4">
            <div class="card">
              <div class="card-body">
                <table >
                  <tr>
                    <th>Total Pesanan </th>
                    <tr>
                      <td><?=$nomor;?></td>
                    </tr>
                  </tr>
                    
                </table>
              </div>
            </div>
          </div>
          </div>
          
      
      <?php
        $nomor++;
      }
          ?>
          </div>
          <!--  -->
      <div class="container mt-lg-5 ">
        <div class="row">
      <div class="col-4"></div>
        <div class="col-4 container-ds text-white rounded-2 text-center">
          <h3>Selamat Datang! </h3>
          <p>Dapatkan Laporan Cepat Dari Data Di Bawah Ini </p>
        </div>
      </div>
      </div>
      <div class="row mt-lg-5 ">
        <div class="col-4"></div>
        <div class="col-4">
        <table class="table table-hover">
         <tr>
          <th>Total Pesanan Hari Ini</th>
          <td>120</td>
         </tr>
         <tr>
          <th>Total Pendapatan Hari Ini</th>
          <td>Rp 1000.000</td>
        </tr>
        <tr>
            <th>Total Stok Kulit Lumpia</th>
            <td>340 Pack</td>
        </tr>
        <tr>
            <th>Total Semua Pesanan</th>
            <td>500 </td>
        </tr>
        <tr>
            <th>Total Semua Pendapatan</th>
            <td>Rp 30.000.000</td>
        </tr>
       </table>
      </div>
      </div>
    
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


<?php
}
?>