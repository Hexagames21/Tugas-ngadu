<div class="card shadow">
<div class="card-header">
<a href="masyarakat.php" class="btn btn-primary btn-split-icon">
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
<input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= date('d-m-y');?>">
</div>

<div class="form-group">
<label style="font: size 14px;">Isi Pengaduan</label>
<textarea name="isi_pengaduan" class="form-control" required></textarea>
</div>

<div class="form-group">
<label style="font: size 14px;">Foto</label>
<input type="file" name="foto" class="form-control" accept="image/*">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success"> KIRIM </button>
    <button type="reset" class="btn btn-warning"> HAPUS DATA </button>
</div>

</form>

</div>

</div>