
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
                        </div>
                        <div class="card-body" style="font-size: 14px;">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tgl Pengaduan</th>
                                            <th>Isi Laporan</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tgl Pengaduan</th>
                                            <th>Isi Laporan</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no= 1;
                                    include 'koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT*FROM mst_pengaduan WHERE nik= '$_SESSION[nik]'");
                                    while($data= mysqli_fetch_array($query)) {

                                    
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['tgl_pengaduan']; ?></td>
                                            <td><?=$data['isi_laporan']; ?></td>
                                            <td><?=$data['foto']; ?></td>
                                            <td><?=$data['status']; ?></td>
                                            <td>

                                            <a href="?url=detail-pengaduan&id=<?=$data['id_pengaduan']; ?>" class="btn btn-primary btn-split-icon">
                                            <span class="icon text-white-50">
                                            <i class="fa fa-info"></i>
                                            </span>
                                            <span class="text text-white-50">Detail</span>
                                            </a>
                                            
                                            <a href="" class="btn btn-info btn-split-icon">
                                            <span class="icon text-white-50">
                                                <i class="fa fa-info"></i>
                                            </span>
                                            <span class="text text-white-50">Lihat Tanggapan</span>
                                            </a>

                                            </td>
                                        </tr>         
                                        <?php 
                                    } 
                                        ?>                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            