<?= $this->extend('layouts/main'); ?>
<?= $this->section('main'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="card mb-3 shadow-lg col-md-10">
            <div class="row no-gutters">
                <div class="col-md-4 p-3">
                    <img src="/asset/img/<?= $comic['cover']; ?>" class="img-fluid rounded-start" width="200px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item bg-primary text-light fw-bold">Detail Comic : <?= $comic['title']; ?> </li>
                            <li class="list-group-item"><strong>Title: </strong><?= $comic['title']; ?></li>
                            <li class="list-group-item"><strong>Penulis: </strong><?= $comic['penulis']; ?></li>
                            <li class="list-group-item"><strong>Penerbit: </strong><?= $comic['penerbit']; ?></li>
                            <li class="list-group-item"><strong></strong><?= $comic['title']; ?></li>
                        </ul>
                    </div>
                    <div class="mb-2">
                        <a href="" class="btn btn-warning">Update</a>
                        <a href="" class="btn btn-danger">Delete</a>
                        <a href="" class="btn btn-success">Back To List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>