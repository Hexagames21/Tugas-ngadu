<?php

$id = $_GET['id'];

if (empty($id)) {
    Header("location:masyarakat.php");
}

include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT*FROM mst_pengaduan WHERE id_pengaduan= '$id' ");
$data = mysqli_fetch_array($query);
?>

<div class="card shadow">
<div class="card-header">
<a href="?url=lihat-pengaduan" class="btn btn-primary btn-split-icon">
<span class="icon text-white-50">
    <i class="fa fa-arrow-left"></i>
</span>
<span class="text text-white-50">Kembali</span>
</a>
</div>
<div class="card-body">

<form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">

<div class="form-group">
<label style="font: size 14px;">Tanggal Pengaduan</label>
<input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= $data['tgl_pengaduan'];?>">
</div>

<div class="form-group">
<label style="font: size 14px;">Isi Pengaduan</label>
<textarea name="isi_pengaduan" class="form-control" required><?= $data['isi_laporan'];?></textarea>
</div>

<div class="form-group">
<label style="font: size 14px;">Foto</label> 
<br>
<img src="foto/<?= $data['foto'];?>" width="200px">
</div>


</form>

</div>

</div>