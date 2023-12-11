<?php
session_start();
error_reporting(0);
ini_set('date.timezone', 'Asia/Jakarta');
include "assets/koneksi.php";
include "assets/database.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Konsumen</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body >
    <div class="container-fluid bg-image">
    <div class="row">
      <div class="col-12 ">
        <h2 class="headline mt-lg-4 text-white text-center">SELAMAT DATANG DI KULIT LUMPIA
         <br> SEMOGA PUAS DENGAN PELAYANAN KAMI </h2>
         <P class="text-white text-center">Ajukan Pesanan Sesuai Selera Anda Jangan Sampai Salah Pilih Ukuran 
          Karena Banyak Variasi Ukuran Dari Yang Terkecil Hingga Terbesar</P>
      </div>
     </div>
     <div class="row">
      <div class="col-12  text-white ">
        
        <form class="form-container mt-5 "  action="" method="POST" name="form">
          <h1 class="text-center ">DAFTAR</h1>
          <p class="text-center ">Lengkapi Data Pendaftaran Anda!</p>
          <div class="mb-3 ">
            <label for="exampleInputName1" class="form-label">Nama Lengkap</label>
            <input type="name" class="form-control" id="exampleInputName1" name="nama" aria-describedby="nameHelp">
          </div>
          <div class="mb-3 ">
            <label for="exampleInputusername1" class="form-label">Username</label>
            <input type="username" class="form-control" id="exampleInputusername1" name="username" aria-describedby="usernameHelp">
          </div>
          <div class="mb-3 ">
            <label for="exampleInputnohandphone1" class="form-label">No Handphone</label>
            <input type="No Handphone" class="form-control" id="exampleInputnohandphone1" name="noHp" aria-describedby="nohandphoneHelp">
          </div>
          <div class="mb-3 ">
              <label for="exampleInputnohandphone1" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Provinsi, Kota, Kecamatan, Desa, Detail Rumah ">
              
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary"><h3>Daftar</h3></button>
          </div>
          <div class="text-center">
            <p>Sudah Punya Akun? <a href="login.php">Masuk</a></p>
          </div>
        </form>
        
      </div>
    </div>
    
    <div class="bg-image">
      <h1><br></h1>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $noHp = $_POST['noHp'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        $query = mysqli_query($koneksi, "INSERT INTO user (nama_lengkap, username, no_handphone, alamat, password)
                                        VALUES ('".$nama."', '".$username."', '".$noHp."', '".$alamat."', '".$password."')");
        
        if ($query) {
            echo "<script> alert('Anda Berhasil Terdaftar!'); document.location='login.php'; </script>";
        }  else {
            echo "<script> alert('Gagal'); document.location='daftar.php'; </script>";
        }
    } 