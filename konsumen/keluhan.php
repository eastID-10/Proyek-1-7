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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluhan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-lg-5">
    <nav class="navbar navbar-expand-lg text-bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="Logo" width="108" height="33" class="d-inline-block align-text-top">
              </a>
          <a class="navbar-brand text-white" >Keluhan</a>

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
      <?php
      switch ($_GET['action']) {
      default:
      ?>
      <div class="container-md">
      <div class="container text-black rounded-2 text-center mt-4">
          <h3>Anda Mengalami Kendala? </h3>
          <p>Silahkan Adukan Keluhan Anda Dengan Mengirim Formulir Keluhan Dibawah Ini!</p>
        </div>
      <form action="keluhan.php?action=save" method="POST">
        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="namaLengkap" placeholder="NamaLengkap" name="namaLengkap">
                <label for="floatingInput">Nama Lengkap</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="noHp" placeholder="Nohanphone" name="noHp">
                <label for="floatinginput">No Handphone</label>
            </div>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" name="keluhan" id="keluhan" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Keluhan</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary text-center">Kirim</button>
      </form>
    
    <?php
    break;
    case 'save':
      if(isset($_POST['namaLengkap'])) {
        $namaLengkap = $_POST['namaLengkap'];
        $noHp = $_POST['noHp'];
        $keluhan = $_POST['keluhan'];
        $db = new database();
        $query = $db->query_data("INSERT INTO keluhan (nama_lengkap, no_handphone, keluhan)
        VALUES ('".$namaLengkap."', '".$noHp."', '".$keluhan."')");
        if($query) {
            echo "<script> alert('Keluhan Anda Berhasil Dikirim!'); document.location='keluhan.php'; </script>";
        } else {

            echo "<script> alert('Gagal'); document.location='keluhan.php'; </script>";
        } 
      } else {echo "gagal";}
    break;
      }
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
