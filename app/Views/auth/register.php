<?= $this->extend('layout/auth'); ?>
<?= $this->section('content'); ?>

<div class="container" style="margin-top: 20vh; max-width: 500px">
    <div class="row">
        <div class="col">
            <?php
            $username = [
                'name' => 'username',
                'id' => 'username',
                'value' => null,
                'class' => 'form-control'
            ];

            $password = [
                'name' => 'password',
                'id' => 'password',
                'class' => 'form-control',
                'type' => 'password'
            ];

            $repeatPassword = [
                'name' => 'repeatPassword',
                'id' => 'repeatPassword',
                'class' => 'form-control',
                'type' => 'password'
            ];

            $session = session();
            $errors = $session->getFlashdata('errors');
            ?>
            <div class="container" style="max-width: 500px;">
                <div class="row">
                    <div class="col">
                        <h1 class="mt-5 fw-bold mb-5">Register Form</h1>
                        <?php if ($errors != null) : ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">An error has occured, please fill again</h4>
                                <hr>
                                <p class="mb-0">
                                    <?php
                                    foreach ($errors as $err) {
                                        echo $err . '<br>';
                                    }
                                    ?>
                                </p>
                            </div>
                        <?php endif ?>
                        <?= form_open('Auth/register') ?>
                        <div class="form-group mt-3">
                            <?= form_label("Username", "username") ?>
                            <?= form_input($username) ?>
                        </div>
                        <div class="form-group">
                            <?= form_label("Password", "password") ?>
                            <?= form_input($password) ?>
                        </div>
                        <div class="form-group">
                            <?= form_label("Repeat Password", "repeatPassword") ?>
                            <?= form_input($repeatPassword) ?>
                        </div>
                        <div class="text-start mt-3">
                            <a href="<?= site_url('auth/login') ?>" class="text-dark fw-bold">Already have an account? Login.</a>
                        </div>
                        <div class="text-end">
                            <?= form_submit('submit', 'Sign Up', ['class' => 'btn btn-danger']) ?>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>