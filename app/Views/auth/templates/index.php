<!-- Header -->
<?= $this->include('dashboard/templates/header'); ?>
<!-- End Header -->

<?php
$title = 'Default Page';

if (uri_string() == 'login') {
    $title = 'Login Page';
} elseif (uri_string() == 'register') {
    $title = 'Register Page';
}
?>

<title><?= $title; ?></title>

<!-- Header Include -->
<?= $this->include('dashboard/templates/header_include'); ?>
<!-- End Header Include -->

<body class="bg-gradient-primary">

    <!-- This is a content from dinamic page -->
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <?= $this->include('dashboard/templates/footer_include'); ?>
    <!-- End Footer -->

</body>

</html>