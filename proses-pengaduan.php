<?php

session_start();
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik = $_SESSION ['nik'];
$isi_laporan = $_POST['isi_pengaduan'];
$asal_foto = $_FILES['foto']['tmp_name'];
$nama_foto = $_FILES['foto']['name'];
$folder = "foto";
$status = 0;

if(move_uploaded_file($asal_foto, $folder.'/'.$nama_foto)) {

include 'koneksi.php';
$sql = "INSERT INTO mst_pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status)
VALUES('$tgl_pengaduan','$nik','$isi_laporan','$nama_foto','$status')";

if(mysqli_query($koneksi, $sql)) {
    echo"
    <script>
    alert('Anda Berhasil Mengirim Laporan');
    window.location.assign('masyarakat.php');
    </script>
    ";  

} else {

    echo"
    <script>
    alert('!!! Anda Gagal Mengirim Laporan');
    window.location.assign('masyarakat.php?url=tulis-pengaduan');
    </script>
    ";  

}

} else {
    echo"
    <script>
    alert('MAAF ANDA GAGAL UPLOAD FOTO');
    window.location.assign('masyarakat.php?url=tulis-pengaduan');
    </script>
    ";  
}

