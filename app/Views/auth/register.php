<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.register') ?></h1>
                                </div>

                                <!-- Message error -->
                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form class="user" action="<?= url_to('register') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                        <small id="emailHelp" class="text-muted ml-2" style="cursor: help;" data-toggle="tooltip" data-placement="top" title="Kami tidak akan pernah membagikan email Anda kepada orang lain!">
                                            <!-- <?= lang('Auth.weNeverShare') ?> -->
                                            <i class="fas fa-info-circle"></i> Info Privasi
                                        </small>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?= lang('Auth.register') ?>
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= url_to('login') ?>">
                                        <!-- <?= lang('Auth.alreadyRegistered') ?> <?= lang('Auth.signIn') ?> -->
                                        Sudah punya akun? Login
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>