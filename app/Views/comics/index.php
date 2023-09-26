<?= $this->extend('layouts/main'); ?>
<?= $this->section('main'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a href="/create" class="btn btn-success mb-2">Add new comic</a>
            <h2>List Comics</h2>
            <?php if (session()->getFlashdata('flash')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('flash') ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>

                    <?php foreach ($comics as $comic) : ?>
                        <tr class="align-middle">
                            <td scope="row"><?= $i++; ?></td>
                            <td><img src="/asset/img/<?= $comic['cover']; ?>" class="cover" width="50px"></td>
                            <td><?= $comic['title']; ?></td>
                            <td>
                                <a href="/comic/<?= $comic['slug']; ?>" class="btn btn-success">View</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>