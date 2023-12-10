<?php
session_start();
error_reporting(0);
ini_set('date.timezone', 'Asia/Jakarta');
include "../assets/koneksi.php";
include "../assets/database.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola Produk</title>
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
          <a class="navbar-brand text-white" >Kelola Produk</a>

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
    switch ($_GET['action']) {
      default:
      ?>
    <div class="row mt-lg-5">
        <div class="col-2">
          <button type="Add" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalProduk"><h6 class="bi bi-plus-circle-fill">Tambah Produk</h6></button>
        </div>
    <table class="table table-bordered border-primary mt-lg-4 ">
      <thead>
        <tr>
          <th scope="col" width="20px">No</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Harga produk</th>
          <th scope="col">Banyak Stok </th>
          <th scope="col" width="20px">Edit</th>
        </tr>
      </thead>
      <tbody>
      <?php
          $nomor =1;
          $db = new database();
          $data = $db->tampil_data("SELECT * FROM produk ORDER BY id_produk asc");
          foreach($data as $data){
            ?>
        <tr scope="row">
          <td><?=$nomor;?></td>
          <td><?=$data['nama_produk'];?></td>
          <td>Rp. <?=$data['harga'];?></td>
          <td><?=$data['stok'];?></td>
          <td class="text-center" style="color: blue;"><a href="kelola_produk.php?action=edit&id=<?=$data['id_produk'];?>"><i class="bi bi-pencil-square "  ></i></a></td>
        </tr>
        <?php
                $nomor++;

            }
          
        ?>
        
      </tbody>
    </table>
  </div>


  <!-- Modal tambah data  -->
<div class="modal fade" id="modalProduk" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambahkan Varian Produk Anda!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="kelola_produk.php?action=save" method="POST">
            <div class="mb-3 produk">
                <label for="nisn" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="namaProduk" name="namaProduk">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
              <label for="stok" class="form-label">Stok Produk</label>
              <input type="number" class="form-control" id="stok" name="stok">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Varian Produk</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
case 'save':
  if(isset($_POST['namaProduk'])) {
      $namaProduk = $_POST['namaProduk'];
      $harga = $_POST['harga'];
      $stok = $_POST['stok'];
      $db = new database();
      $query = $db->query_data("CALL log_produk('".$namaProduk."', '".$harga."', '".$stok."')");
      // $query = $db->query_data("INSERT INTO produk (nama_produk, harga, stok)
      // VALUES ('".$namaProduk."', '".$harga."', '".$stok."')");
      if($query) {
          echo "<script> document.location='kelola_produk.php'; </script>";
      } else {
          echo "<script> alert('Gagal'); document.location='kelola_produk.php'; </script>";
      }
  }
  break;
  case 'edit':
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='".$_GET['id']."'");
    $data= mysqli_fetch_assoc($query);
    ?>
        <form method="POST" action="kelola_produk.php?action=update">
            <input type="hidden" name="id" value="<?=$data['id_produk']?>">
            <label>Nama Produk:</label>
            <input type="text" name="produk" class="form-control" required="true" value="<?=$data['nama_produk']?>"  >
            <label>Harga </label>
            <input type="text" name="harga" class="form-control" required="true" value="<?=$data['harga']?>" >
            <label>Stok:</label>
            <input type="text" name="stok" class="form-control" required="true" value="<?=$data['stok']?>"> <br>
            <button type="submit" class="btn btn-primary">UPDATE</button>
            <a href="kelola_produk.php" class="btn btn default">KEMBALI</a>
        </form>
    <?php
    break;
    case 'update':
      if(isset($_POST['id'])) {
          $produk = $_POST['produk'];
          $harga = $_POST['harga'];
          $stok = $_POST['stok'];
          $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='".$produk."', harga='".$harga."', stok='".$stok."'  WHERE id_produk='".$_POST['id']."'");
          if($query) {
              echo "<script> document.location='kelola_produk.php'; </script>";
          } else {
              echo "<script> alert ['gagal'];
                  document.location='kelola_produk.php?action=edit&id=".$POST['id']."'; </script>";
          }
      }
      break;
}
  
// <!-- modal edit -->
//   <div class="modal" id="edit" tabindex="-1" role="dialog">
//     <div class="modal-dialog" role="document">
//       <div class="modal-content">
//         <div class="modal-header">
//           <h5 class="modal-title">Tambahkan Varian Produk Anda!</h5>
//           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
//             <span aria-hidden="true">&times;</span>
//           </button>
//         </div>
//         <div class="modal-body">
//           <div class="mb-3 nisn-class">
//             <label for="nisn" class="form-label">Nama Produk</label>
//             <input type="text" class="form-control" id="namaProduk" name="namaProduk">
//         </div>
//         <div class="mb-3">
//             <label for="harga" class="form-label">Harga</label>
//             <input type="number" class="form-control" id="harga" name="harga">
//         </div>
//         <div class="mb-3">
//           <label for="stok" class="form-label">Stok Produk</label>
//           <input type="number" class="form-control" id="stok" name="stok">
//         </div>
//         </div>
//         <div class="modal-footer">
//           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
//           <button type="button" class="btn btn-primary">Save changes</button>
//         </div>
//       </div>
//     </div>
//   </div>
?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


                      