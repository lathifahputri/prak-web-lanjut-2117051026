<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<br>
<div class="px-4">
    <div class="card mb-4">
        <div class="card-header">
            <h3>Data Kelas</h3>
        </div>
        <div class="card-body">
            <a href="<?= base_url('kelas/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <table id="dataTable" cellpadding="10" class="table table-striped">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Kelas</th>                          
                        <th>Ruang Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($kelas as $kelas){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $kelas['nama_kelas'] ?></td>
                        <td><?= $kelas['ruang_kelas'] ?></td>
                        <td>
                            <div class="wrap">
                                <button type="button" class="btn btn-secondary me-2 detail" ><i class="bi bi-info-circle"></i>
                                    <a href="<?= base_url('kelas/' . $kelas['id']) ?>"> Detail</a>
                                </button>
                                <button type="button" class="btn btn-success me-2 edit" ><i class="bi bi-pencil-square"></i>
                                    <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>"> Edit</a>
                                </button>
                                <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i> Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div> 
    </div>
</div>
<?= $this->endSection() ?>