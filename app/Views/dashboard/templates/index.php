<!-- Header -->
<?= $this->include('dashboard/templates/header'); ?>
<!-- End Header -->

<title><?= $title; ?></title>

<!-- Header Include -->
<?= $this->include('dashboard/templates/header_include'); ?>
<!-- End Header Include -->

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('dashboard/templates/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('dashboard/templates/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?= $this->renderSection('page-content'); ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Footer -->
            <?= $this->include('dashboard/templates/footer'); ?>
            <!-- End Footer -->

</body>

</html>