<div class="container">
<div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                <?php echo form_open_multipart('home/tambah'); ?> 
                    <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                            <?php foreach($mahasiswa as $mhs): ?>  
                             <option value="<?=$mhs['id_prodi'] ?>"><?=$mhs['prodi']?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl-lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl-lahir" name="ttl">
                            <small class="form-text text-danger"><?= form_error('ttl'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fileGambar">Foto</label>
                            <input type="file" class="form-control-file" id="fileGambar" name="foto">
                            <small class="form-text text-danger"><?= form_error('foto'); ?></small>
                        </div>

                        
                        <button type="submit" name="submit"class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>