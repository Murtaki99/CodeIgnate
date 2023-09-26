<?= $this->extend('layouts/main'); ?>
<?= $this->section('main'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card border-primary mb-3" style="max-width: 50rem;">
                <h1 class="card-header"><?= $title; ?></h1>
                <div class="card-body text-primary">
                    <form action="/store" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Create a title comic" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="penulis" class="col-sm-2 col-form-label">Creator</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Creator name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="penulis" class="col-sm-2 col-form-label">Publicator</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Publicator name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cover" class="col-sm-2 col-form-label">Cover</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cover" name="cover" placeholder="Cover image">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end mr-1">
                                <button class="btn btn-success col-4 ">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>