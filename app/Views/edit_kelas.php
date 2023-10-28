<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container"><br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/kelas')?>">Data Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Kelas</li>
            </ol>
    </nav>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Data Kelas</h3></div>
                    <div class="card-body">
                        <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="POST">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas" value="<?= $kelas['nama_kelas'] ?>">
                                <label>Nama Kelas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="ruang_kelas" id="ruang_kelas" placeholder="Ruang Kelas" value="<?= $kelas['ruang_kelas'] ?>">
                                <label>Ruang Kelas</label>
                            </div><br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>