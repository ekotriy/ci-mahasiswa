<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<!-- tambah data -->
<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url();?>home/tambah" class="btn btn-primary">Tambah data mahasiswa</a>
    </div>
</div>
<!-- akhir tambah data -->
<!-- Cari -->
<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari data mahasiswa.." name="keyword">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" >Cari</button>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- akhir cari -->
<div class="row">
    <div class="col-md-8">
        <h3>Daftar Mahasiswa</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Foto</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal lahir</th>
                <th scope="col">alamat</th>
                <th scope="col">jurusan</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $a=0;
                
                foreach($mahasiswa as $mhs):
                    $a++
                ?>
                <tr>
                <th scope="row"><?= $a;?></th>
                <td><img src="<?php echo base_url(); ?>assets/foto/<?=$mhs['foto'];?>" width='100' height='100'> </td>
                <td><?=$mhs['nim'];?></td>
                <td><?=$mhs['nama'];?></td>
                <td><?=$mhs['tgl_lahir'];?></td>
                <td><?=$mhs['alamat'];?></td>
                <td><?=$mhs['prodi']?></td>
                <td>
                    <a href="<?= base_url(); ?>home/detail/<?=$mhs['nim'];?>" class="btn btn-primary">Detail</a>
                    <a href="<?=  base_url();?>home/edit/<?=$mhs['nim'];?>" class="btn btn-success">Edit</a>
                    <a href="<?=  base_url();?>home/hapus/<?=$mhs['nim'];?>" class="btn btn-danger tombol-hapus">Hapus</a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Daftar Mahasiswa Jurusan
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="<?= base_url(); ?>prodi/detail/P0001">Manajement Informatika</a></li>
                <li class="list-group-item"><a href="<?= base_url(); ?>prodi/detail/P0002">Teknologi Industri Pangan</a></li>
                <li class="list-group-item"><a href="<?= base_url(); ?>prodi/detail/P0003">Teknik Informatika</a></li>
                <li class="list-group-item"><a href="<?= base_url(); ?>prodi/detail/P0004">Teknik Sipil</a></li>
            </ul>
            
        </div>
    </div>
  </div>

</div>