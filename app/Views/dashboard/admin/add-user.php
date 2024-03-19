<?= $this->extend('dashboard/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Pengguna</h1>

    <!-- Form -->
    <div class="row">
        <div class="col-md-8">
            <div class="card p-5">
                <form action="<?= base_url('dashboard/admin/save'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Nama :</label>
                        <div class="col-sm-10">
                            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nama lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username :</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Gunakan huruf kecil tanpa karakter @">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Gunakan email yang aktif">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_hash" class="col-sm-2 col-form-label">Password :</label>
                        <div class="col-sm-10">
                            <input type="password" name="password_hash" class="form-control" id="password_hash" placeholder="Gunakan kata sandi yang kuat dan unik">
                        </div>
                    </div>
                    <div class="custom-file">
                        <div class="col-sm-6" style="float: right;">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Pilih Foto</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>