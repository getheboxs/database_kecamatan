<?= $this->extend('layout/view_layout') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-2 card">
                <div class="card-body">
                    <h5 class="h5"><?= $data['title']?></h5>
                    <p><?= $data['content']?></p>
                </div>
            </div>            
        </div>
    </div>
<?= $this->endSection() ?>