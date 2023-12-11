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
    <title>Selamat Datang</title>
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

      <?php
        if (isset($_POST['username'])) {
            $username = mysqli_escape_string($koneksi, $_POST['username']);
            $password = mysqli_escape_string($koneksi, $_POST['password']);
            $cekkode = mysqli_fetch_assoc(mysqli_query($koneksi,
                        "SELECT COUNT(username) AS jml FROM user WHERE
                        username='".$username."' AND password= '".$password."'"));
            if ($cekkode['jml'] < 1) {
                echo "<script> alert('User tidak terdaftar');
                    document.locaton='login.php'; </script>";
            } else {
                $query = mysqli_query($koneksi, "SELECT * FROM user
                                        WHERE username='".$username."' AND password='".$password."'");
                $data = mysqli_fetch_assoc($query);
                $_SESSION['username'] = $data['username'];
                $_SESSION['password'] = $data['password'];
                $_SESSION['id'] = $data['id_user'];
                $_SESSION['type'] = $data['type'];

                if ($_SESSION['type'] == 'admin') echo "<script> document.location='admin/index.php'; </script>";
                else if ($_SESSION['type'] == 'user') echo "<script> document.location='konsumen/index.php'; </script>";
                
            }
        }
    ?>
        <form class="form-container mt-5 " method="POST" action=""> 
          <h1 class="text-center ">MASUK</h1>
          <p class="text-center ">Silakan Isi Formulir Di Bawah Ini!</p>
          <div class="mb-3 ">
            <label for="exampleInputName1" class="form-label"> </label>
            <input type="name" class="form-control" id="username" aria-describedby="nameHelp" name="username" placeholder="Username">
          </div>
          
          <div class="mb-3">
            
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          <div class="col-md-6 d-flex ">
            <!-- Simple link -->
            <a href="#!" >Lupa password?</a>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary"><h3>Masuk</h3></button>
          </div>
        </form>
         </div>
        
      </div>
    </div>
    
    <div class="bg-image">
      <h1><br></h1>
      <br>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>