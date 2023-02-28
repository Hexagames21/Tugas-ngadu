<?php

$nik = $_POST['nik'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$telp = $_POST['telp'];


include 'koneksi.php';

$sql = "INSERT INTO mst_masyarakat(nik,nama,username,password,telp) VALUES('$nik','$nama','$username','$password','$telp')";
$query = mysqli_query($koneksi, $sql);


if($query) {
    echo"
    <script>
    alert('Anda Berhasil Mendaftar Silahkan Login');
    window.location.assign('index.php');
    </script>
    ";
} else {
    echo"
    <script>
    alert('Anda Gagal Mendaftar Silahkan Ulangi');
    window.location.assign('register.php');
    </script>
    ";
    
}