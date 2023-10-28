<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container"><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/user')?>">Data Mahasiswa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Mahasiswa</li>
                </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tambah Data Mahasiswa</h3></div>
                    <div class="card-body">
                        <form action="<?= base_url('user/store') ?>" method="POST" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="foto" id="inputGroupFile02" placeholder="Upload File" required>
                            </div>
                            <div class="form-floating mb-3">
                            <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('validation')->getError('nama'); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" name="nama" id="nama" placeholder="Nama" autofocus>
                                <label>Nama</label>
                            </div>
                            <div class="mb-3">
                                <!-- <label class="form-label">Kelas</label> -->
                                <select name="kelas" id="kelas" class="form-select pt-3 pb-3" type="text">
                                    <option value="" selected disabled>
                                        Kelas
                                    </option>
                                    <?php foreach ($kelas as $item){
                                        ?>
                                        <option value="<?= $item['id'] ?>">
                                            <?= $item['nama_kelas'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('validation')->getError('npm'); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" class="form-control <?= session('validation') ? 'is-invalid' : '' ?>" name="npm" id="npm" placeholder="NPM" autofocus>
                                <label>NPM</label>
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