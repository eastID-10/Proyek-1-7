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
        <!-- nav status -->
        <nav class="navbar navbar-light bg-light">
          
            <a href="pesanan_masuk.php?proses=proses">
              <button class="btn btn-sm btn-outline-success me-5" type="button">Masih Diproses</button>
            </a>
            <a href="pesanan_masuk.php?proses=kirim">
              <button class="btn btn-sm btn-outline-dark me-5" type="button">Pesanan Dikirim</button>
            </a>
            <a href="pesanan_masuk.php?proses=selesai">
              <button class="btn btn-sm btn-outline-warning me-5" type="button">Pesanan Selesai</button>
            </a>
            <a href="pesanan_masuk.php?proses=batal">
              <button class="btn btn-sm btn-outline-danger me-5" type="button">Pesanan Batal</button>
            </a>
        </nav>
        
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id_pemesanan='" . $_GET['id'] . "'");
        $data = mysqli_fetch_assoc($query);
        ?>
        <div class="container-lg">
          <h1 class="text-center ">Detail Pesanan</h1>
          <div class="row mt-lg-5">
            <div class="col-8">
              <h4>Alamat</h4>
              <p class="ms-lg-5">
                <?= $data['nama_lengkap']; ?> </br>
                <?= $data['no_handphone']; ?> </br>
                <?= $data['alamat']; ?>
              </p>
            </div>
            <div class="col-4">
              <h4>
                <?= tgljm_full($data['tgl_pesan']); ?>
              </h4>
            </div>
          </div>
          <table class="table table-borderless mt-lg-4">
            <thead>
              <h3>Rincian Barang</h3>
              <tr>
                <th scope="col">No </th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga produk</th>
                <th scope="col">Banyak </th>
                <th scope="col">Total </th>
              </tr>
            </thead>
            <tbody>
              <tr scope="row">
                <td>1</td>
                <td>
                  <?= $data['nama_produk']; ?>
                </td>
                <td>Rp.
                  <?= $data['harga']; ?>
                </td>
                <td>
                  <?= $data['kuantitas']; ?>
                </td>
                <td>Rp.
                  <?= $data['total']; ?>
                </td>
              </tr>
              <tr class="fw-bolder">
                <td>Total Pembelian</td>
                <td></td>
                <td></td>
                <td></td>
                <div class="ms-4">
                  <td>
                    Rp.
                    <?= $data['total']; ?>
                  </td>
                </div>
              </tr>

            </tbody>

          </table>



          <div class="container text-center mb-5">
            <h2>Ubah Status Pesanan</h2>
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
              data-bs-target="#modalStatus"><?=$data['status'];?></button>

          </div>

        </div>
        <!-- Modal tambah data  -->
        <div class="modal fade" id="modalStatus" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Ubah Status pemesanan!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="kelola_pesanan.php?action=update" method="POST">
                  <input type="hidden" class="form-control" id="id" name="id" value=<?= $_GET['id'] ?>>
                  <div class="mb-3 produk">

                    <select class="form-select" aria-label="Default select example" name="status">
                      <option selected>-- Status --</option>
                      <option value="proses">Proses</option>
                      <option value="kirim">Kirim</option>
                      <option value="selesai">Selesai</option>
                      <option value="batal">Batal</option>
                    </select>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>
    </body>

    </html>
    <?php
    break;
  case 'update':
    if (isset($_POST['id'])) {
      $id = $_POST['id'];
      $status = $_POST['status'];
      $query = mysqli_query($koneksi, "UPDATE pemesanan SET status='" . $status . "' WHERE id_pemesanan='" . $id. "'");
      if ($query) {
        echo "<script>alert ('Apakah Anda Yakin Mengubah Status Pesanan Ini?');
         document.location='kelola_pesanan.php?id=$id'; </script>";
      } else {
        echo "<script> alert ('gagal');
            document.location='kelola_produk.php?action=edit&id=" . $POST['id'] . "'; </script>";
      }

      // echo var_dump($_POST);
    }
    break;
}


?>