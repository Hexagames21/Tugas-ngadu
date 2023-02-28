<?php
session_start();
if(empty($_SESSION['username'])) {
    echo "
    <script>
    alert('Maaf anda belum login ya..?')window.location.assign('login.php')
    </script>
    ";
}
?>

<?php include "koneksi.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/">
</head>
<body>
    
</body>
</html>