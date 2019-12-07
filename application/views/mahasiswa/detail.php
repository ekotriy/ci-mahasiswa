<div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-header">
    Mahasiswa
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $mahasiswa['nim'] ?></li>
    <li class="list-group-item"><?= $mahasiswa['nama'] ?></li>
    <li class="list-group-item"><?= $mahasiswa['tgl_lahir'] ?></li>
    <li class="list-group-item"><?= $mahasiswa['alamat'] ?></li>
    <li class="list-group-item"><?= $mahasiswa['prodi'] ?></li>
  </ul>
  <a href="<?= base_url(); ?>" class="btn btn-primary float-right">Kembali</a>
</div>

</div>