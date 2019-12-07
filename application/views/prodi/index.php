<div class="container">
<div class="row">
    <div class="col-md-8">
        <h3>Daftar Prodi</h3>
            <!-- tambah data -->
            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="<?= base_url();?>prodi/tambah" class="btn btn-primary">Tambah data prodi</a>
                </div>
            </div>
            <!-- akhir tambah data -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Id prodi</th>
                <th scope="col">Prodi</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $a=0;
                
                foreach($prodi as $prodi):
                    $a++
                ?>
                <tr>
                <th scope="row"><?= $a; ?></th>
                <td><?= $prodi['id_prodi']; ?></td>
                <td><?= $prodi['prodi']; ?></td>
                
                <td>
                    <a href="<?= base_url(); ?>prodi/detail/<?=$prodi['id_prodi'];?>" class="btn btn-primary">Detail</a>
                    <a href="<?=  base_url();?>prodi/edit/<?=$prodi['id_prodi'];?>" class="btn btn-success">Edit</a>
                    <a href="<?=  base_url();?>prodi/hapus/<?=$prodi['id_prodi'];?>" class="btn btn-danger">Hapus</a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>

</div>