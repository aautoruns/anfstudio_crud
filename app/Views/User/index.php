<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-3">
    <div class="btn btn-dark mb-3">
        <a class="text-light mt-4" href="<?= site_url('home/index') ?>" style="text-decoration: none;">
            <i class="fa-solid fa-home"></i>
        </a>
    </div>
    <div class="col-md">
        <h1>Data User</h1>
        <div class="text-danger mb-3">
            <h6>Note: (0 = Admin) (1 = User)
            </h6>
        </div>
        <table class="table table-hover table-bordered">
            <thead>
                <th>Id</th>
                <th>Username</th>
                <th>Role</th>
                <th>Created Date</th>
            </thead>
            <tbody>
                <?php foreach ($data['users'] as $index => $user) : ?>
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->username ?></td>
                        <td><?= $user->role ?></td>
                        <td><?= $user->created_date ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="float-md-end">
    <?= $data['pager']->links('default', 'custom_pagination') ?>
</div>
<br><br><br><br>
<?= $this->endSection() ?>