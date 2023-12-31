<?php
session_start();
error_reporting(0);
ini_set('date.timezone', 'Asia/Jakarta');
include "../assets/koneksi.php";
include "../assets/database.php";

switch ($_GET['action']) {
  default:

    ?>
    <!doctype html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Daftar Pesanan</title>
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body class="body-nav">
      <div class="container-sm mt-5 ">
        <nav class="navbar navbar-expand-lg text-bg-warning">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../img/logo.png" alt="Logo" width="108" height="33" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand text-white">Daftar Pesanan</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
              aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
        

        <button class="btn btn-lg btn-success mt-5">Proses</button>
        <form action="detail_pesanan.php?action=save" method="POST">
          <input type="hidden" name="uid" value="<?= $_SESSION['id'] ?>">
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='" . $_SESSION['id'] . "'");
          $data = mysqli_fetch_assoc($query);
          ?>
          <div class="container-lg">
            <h1 class="text-center ">Detail Pesanan</h1>
            <div class="row mt-lg-5">
              <div class="col-8">
                <h4>Alamat</h4>
                <p class="ms-lg-5 border border-0">
                  Nama :<input readonly name="nama_user" type="text" value="<?= $data['nama_lengkap']; ?>"> </br>
                  No handphone : <input readonly name="no_hp" type="text" value="<?= $data['no_handphone']; ?>"></br>
                  Alamat : <input readonly name="alamat" type="text" value="<?= $data['alamat']; ?>">
                </p>
              </div>
              <div class="col-4">
                <h4>Tanggal Pembelian</h4>
                <input readonly name="tgl" type="datetime" value="<?= date("Y-m-d H:i:s") ?>">
              </div>
            </div>
            <?php


            $nomor = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='" . $_GET['id'] . "'");
            $data = mysqli_fetch_assoc($query);
            ?>
            <div class="calculate">
              <table class="table table-borderless mt-lg-4">
                <thead>
                  <h3>Rincian Barang</h3>
                  <tr>
                    <th scope="col">No </th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga produk</th>
                    <th scope="col">Banyak </th>
                    <th scope="col">Total Pembelian</th>
                  </tr>
                </thead>
                <tbody>
                  <tr scope="row">
                    <td>
                      <?= $nomor; ?>
                    </td>
                    <td>
                      <input readonly name="nama_produk" type="text" value="<?= $data['nama_produk']; ?>">
                    </td>
                    <td>Rp.

                      <input readonly name="harga" id="harga" type="text" value="<?= $data['harga']; ?>">
                    </td>
                    <td>
                      <input type="number" name="kuantitas" id="kuantitas" type="text">
                    </td>
                    <td> Rp. <input readonly type="text" name="total" id="total"> </td>
                  </tr>


                </tbody>

              </table>
            </div>
            <div class="text-center mb-lg-5">
              <button type="submit" class="btn btn-warning text-white bi bi-cart">
                <h6>BELI PRODUK</h6>
              </button>
            </div>
        </form>

      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script type="text/javascript">
        $(".calculate").keyup(function () {
          var harga = parseInt($("#harga").val())
          var kuantitas = parseInt($("#kuantitas").val())

          var total = harga * kuantitas;
          $("#total").attr("value", total)
        });
      </script>
      
    </body>

    </html>
    <!-- <?php
    break;
  case "save":
    if (isset($_POST['nama_produk'])) {
      $tgl = $_POST['tgl'];
      $nama_user = $_POST['nama_user'];
      $no_hp = $_POST['no_hp'];
      $alamat = $_POST['alamat'];
      $namaProduk = $_POST['nama_produk'];
      $kuantitas = $_POST['kuantitas'];
      $harga = $_POST['harga'];
      $total = $_POST['total'];
      $uid = $_POST['uid'];

      $db = new database();
      $query = $db->query_data("CALL stok_kurang('".$tgl."', '".$nama_user."', '".$no_hp."', '".$alamat."', '".$namaProduk."', '".$kuantitas."', '".$harga."', '".$total."', '".$uid."')");
       if ($query) {
        $_SESSION['id_user'] = $uid;
        echo "<script> alert('Pesanan Anda Berhasil Dibuat'); document.location='daftar_pesanan.php'; </script>";
      } else {
        echo "<script> alert('Gagal'); document.location='detail_pesanan.php'; </script>";
      }
    // echo "INSERT INTO pemesanan (tgl_pesan, nama_lengkap, no_handphone, alamat, nama_produk, kuantitas, harga, total, status)
    // VALUES ('" . $tgl . "','" . $nama_user . "', '" . $no_hp . "', '" . $alamat . "', '" . $namaProduk . "','" . $kuantitas . "', '" . $harga . "', '" . $total . "', '" . $status . "')";
    }

    break;

}
?>