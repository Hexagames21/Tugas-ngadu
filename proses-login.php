<?php

$nik = $_POST['nik'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "SELECT * FROM mst_masyarakat WHERE nik = '$nik' AND password='$password'";
$query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($query)>0){

    session_start();
$_SESSION ['nik'] = $nik;
$data = mysqli_fetch_array($query);
$_SESSION ['nama'] = $data['nama'];


    
    header('Location:masyarakat.php');
} else {
    echo"
    <script>
    alert('Anda Gagal Login, Silahkan Ulangi Lagi');
    window.location.assign('index.php');
    </script>
    ";
}