<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container"><br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('/kelas')?>">Data Kelas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Kelas</li>
        </ol>
</nav>
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tambah Data Kelas</h3></div>
                    <div class="card-body">
                        <form action="<?= base_url('kelas/store') ?>" method="POST">
                            <div class="form-floating mb-3">
                            <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('validation')->getError('nama_kelas'); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" name="nama_kelas" id="floatingInput" placeholder="Nama Kelas"">
                                <label for="floatingInput">Nama Kelas</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                            <?php if (session('validation') && session('validation')->hasError('ruang_kelas')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('validation')->getError('ruang_kelas'); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('ruang_kelas') ? 'is-invalid' : '' ?>" name="ruang_kelas" id="floatingInput" placeholder="Ruang Kelas">
                                <label for="floatingInput">Ruang Kelas</label>
                            </div><br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>