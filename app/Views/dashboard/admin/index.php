<?= $this->extend('dashboard/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Pengguna</h1>

    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <?= session()->getFlashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <!-- Datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">
                <a class="btn btn-primary" href="<?= base_url('dashboard/admin/add-user') ?>"><i class="fas fa-user-plus"></i> Tambah Pengguna</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Peran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $i++ . "."; ?></td>
                                <td><?= $user->username; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><?= $user->name; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-info mb-1" data-toggle="tooltip" data-placement="top" title="Lihat Data" href="<?= base_url('dashboard/admin/' . $user->userid); ?>"><i class="fas fa-eye"></i></a>

                                    <a class="btn btn-sm btn-primary mb-1" data-toggle="tooltip" data-placement="top" title="Ubah Data" href="<?= base_url('dashboard/admin/' . $user->userid); ?>"><i class="fas fa-edit"></i></a>

                                    <a class="btn btn-sm btn-danger mb-1" data-toggle="tooltip" data-placement="top" title="Hapus Data" href="<?= base_url('dashboard/admin/' . $user->userid); ?>" onclick="confirm('Apakah ingin hapus ?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Datatables -->

</div>
<?= $this->endSection(); ?>