<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];

    $query = mysqli_query($koneksi, "INSERT INTO admin(username, password, nama)
                                    VALUES ('".$username."', '".$password."', '".$nama."')");
    
    if ($query) {
        echo "<script> document.location='login.php'; </script>";
    }  else {
        echo "<script> alert('Gagal'); document.location='register.php'; </script>";
    }
}