<?php
session_start();
error_reporting(0);
ini_set('date.timezone', 'Asia/Jakarta');
include "../assets/koneksi.php";
include "../assets/database.php";
?>
<!DOCTYPE html>
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
          <a class="navbar-brand text-white" >Keluhan Konsumen</a>

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
     
        
      <div class="container ">
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
                    <th>No</th>
                    <tr>
                      <td><?=$data['id_keluhan'];?></td>
                    </tr>
                  </tr>
                    <tr>
                        <th>Nama </th>
                    </tr>
                    <tr>
                        <td><?=$data['nama_lengkap'];?></td>
                    </tr>
                    <tr>
                        <td class="fw-bolder">No Handphone </td>
                    </tr>
                    <tr>
                        <td><?=$data['no_handphone'];?></td>
                    </tr>
                    <tr>
                        <td class="fw-bolder">Keluhan</td>
                    </tr>
                    <tr>
                        <td><?=$data['keluhan'];?></td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
          </div>
          
      </div>
      <?php
        $nomor++;
      }
          ?>
          
       


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>
  