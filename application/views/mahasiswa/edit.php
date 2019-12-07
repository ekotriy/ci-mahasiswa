<div class="container">
<div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Mahasiswa
                </div>
                <div class="card-body">
                <?php echo form_open_multipart('home/edit/'.$mhs['nim']); ?>
                    <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mhs['nim'];?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['nama'];?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">jurusan</label>
                            <select class="form-control" id="jurusan" name="prodi">
                            <?php foreach($prodi as $p): ?> 
                            <?php if($p == $mhs['id_prodi']): ?>
                             <option value="<?=$p['id_prodi'] ?>"selected ><?=$p['prodi']?></option>
                            <?php else: ?>
                            <option value="<?=$p['id_prodi'] ?>"><?=$p['prodi']?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tgl-lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl-lahir" name="ttl" value="<?= $mhs['tgl_lahir'];?>">
                            <small class="form-text text-danger"><?= form_error('ttl'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"value="<?= $mhs['alamat'];?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fileGambar">Foto</label>
                            <input type="file" class="form-control-file" id="fileGambar" name="foto">
                            <small class="form-text text-danger"><?= form_error('foto'); ?></small>
                        </div>
                        <button type="submit" name="submit"class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>