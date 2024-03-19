<!-- Header -->
<?= $this->include('dashboard/templates/header'); ?>
<!-- End Header -->

<title><?= $title; ?></title>

<!-- Header Include -->
<?= $this->include('dashboard/templates/header_include'); ?>
<!-- End Header Include -->

<body id="page-top">

    <!-- HEADER -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('/'); ?>">FTIK Administrasi</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('/'); ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Pengajuan Surat</a>
                            </div>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        <?php if (logged_in()) : ?>
                            <li class="nav-item dropdown bg-danger" style="border-radius: 5px;">
                                <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <img class="img-profile rounded-circle" width="20" src="<?= base_url(); ?>img/<?= user()->user_image; ?>"> Akun
                                </a>
                                <div class="dropdown-menu">
                                    <p class="text-center text-muted m-0 p-0">Hi, <?= user()->username; ?></p>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('dashboard'); ?>"><i class="fas fa-home"></i> Dasbor</a>
                                    <a class="dropdown-item" href="<?= base_url('dashboard/user'); ?>"><i class="fas fa-user"></i> Profil Saya</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                                </div>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-danger" href="<?= base_url('login'); ?>"><i class="fas fa-lock"></i> Login</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- HERO IMAGE -->
    <section id="hero-image">
        <div class="jumbotron" style="background-image: url(<?= base_url(); ?>img/umko.png);">
            <div class="container">
                <h1 class="display-4">Layanan Administrasi</h1>
                <p class="lead">Fakultas Teknik dan Ilmu Komputer Universitas Muhammadiah Kotabumi</p>
                <a class="btn btn-primary" href="#" target="_blank" data-toggle="modal" data-target="#helpDeskModal"><i class="fas fa-question-circle"></i> Pusat Bantuan</a>
            </div>
        </div>
    </section>

    <!-- DUKUNGAN -->
    <section id="service-support" class="p-5">
        <div class="container text-center">
            <h3 class="display-5">Dukungan Layanan</h3>
            <p class="mb-5">Manfaat atau Keuntungan dengan adanya Website ini adalah sebagai berikut :</p>
            <div class="service-icon">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <i class="fas fa-user-clock"></i>
                        <h5>Waktu yang Fleksibel</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-headphones"></i>
                        <h5>Layanan 24 Jam</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-motorcycle"></i>
                        <h5>Bebas Biaya Transportasi</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INFO -->
    <section id="fast-info" class="p-5 mb-5">
        <div class="container text-center">
            <h3 class="display-5 mb-5">Sekilas Info</h3>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <p>Website ini adalah portal yang memberikan Layanan Administrasi Surat Menyurat pada Fakultas Teknik dan Ilmu Komputer Universitas Muhammadiah Kotabumi, Website ini bisa dimanfaatkan oleh Mahasiswa untuk mengajukan permohonan surat.</p>
                </div>
                <div class="col-md-5">
                    <p>Dengan adanya Website ini diharapkan dapat membuat proses Layanan Administrasi Surat Menyurat pada Fakultas Teknik dan Ilmu Komputer Universitas Muhammadiah Kotabumi menjadi lebih Efektif dan Efisien bagi Mahasiswa maupun para Dosen.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- REGULATION -->
    <section id="regulation">
        <div class="jumbotron">
            <div class="container text-center">
                <h3 class="display-5 mb-5">Alur Kerja Administrasi</h3>
                <img class="img-thumbnail" src="<?= base_url(); ?>img/workflow.png">
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Footer -->
    <?= $this->include('dashboard/templates/footer'); ?>
    <!-- End Footer -->

</body>

</html>