<div class="container">
<div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Prodi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <div class="form-group">
                            <label for="id_prodi">Id Prodi</label>
                            <input type="text" class="form-control" id="id_prodi" name="id_prodi">
                            <small class="form-text text-danger"><?= form_error('id_prodi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <input type="text" class="form-control" id="prodi" name="prodi">
                            <small class="form-text text-danger"><?= form_error('prodi'); ?></small>
                        </div>
                        <button type="submit" name="submit"class="btn btn-primary float-right">Tambah Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>