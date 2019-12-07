<div class="container">
<div class="row">
    <div class="col-md-8">
        <h3>Detail Prodi Mahasiswa</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal lahir</th>
                <th scope="col">alamat</th>
                <th scope="col">jurusan</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $a=0;
                
                foreach($prodi as $prodi):
                    $a++
                ?>
                <tr>
                <th scope="row"><?= $a ?></th>
                <td><?= $prodi['nama']; ?></td>
                <td><?= $prodi['tgl_lahir']; ?></td>
                <td><?= $prodi['alamat']; ?></td>
                <td><?= $prodi['prodi']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>

</div>