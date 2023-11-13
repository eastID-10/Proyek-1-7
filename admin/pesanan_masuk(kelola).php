
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
      <!-- nav status -->
      <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-start">
          <button class="btn btn-sm btn-outline-success me-5" type="button">Masih Diproses</button>
          <button class="btn btn-sm btn-outline-dark me-5" type="button">Pesanan Dikirim</button>
          <button class="btn btn-sm btn-outline-warning me-5" type="button">Pesanan Selesai</button>
          <button class="btn btn-sm btn-outline-danger me-5" type="button">Pesanan Batal</button>
        </form>
      </nav>
      
      <div class="container-lg">
        <h1 class="text-center ">Detail Pesanan</h1>
      <div class="row mt-lg-5">
        <div class="col-8">
        <h4>Alamat</h4>
            <p class="ms-lg-5">Easti Damayanti </br>
                083100254488 </br>
                Jawa Barat Indramayu Lohbener Larangan 00/09 jln. kemayoran
            </p>
        </div>
        <div class="col-4">
            <h4>Tanggal Pembelian</h4>
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
            <td>Kulit Lumpia Kecil</td>
            <td>10.000</td>
            <td>10</td>
            <td>100.000</td>
            </tr>
            <tr class="fw-bolder">
                <td>Total Pembelian</td>
                <td></td>
                <td></td>
                <td></td>
                <div class="ms-4">
                    <td>Rp 100.000</td>
                </div>
            </tr>
           
        </tbody>
       
        </table>
        <div class="text-center mb-lg-5">
          <button type="submit" class="btn btn-secondary text-white"><h6 >Unduh Rincian Pesanan</h6></button>
        </div>
        
    </div>
    <div class="container text-center mb-5">
        <h2>Ubah Status Pesanan</h2>
    <button type="button" class="btn btn-outline-success">Proses</button>
    <button type="button" class="btn btn-outline-dark">Kirim</button>
    <button type="button" class="btn btn-outline-warning">Selesai</button>
    <button type="button" class="btn btn-outline-danger">Batal</button>
    </div>
    <button class="btn btn-primary col-12 mb-5">Simpan</button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>