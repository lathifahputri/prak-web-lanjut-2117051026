<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<br>
    <div class="px-4">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('user/create') ?>" method="POST">
                    <button class="btn btn-warning">Tambah Data</button>
                </form>
                <table cellpadding="10" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $user){
                        ?>
                        <tr>
                            <td><?= $user['nama'] ?></td>
                            <td><?= $user['npm'] ?></td>
                            <td><?= $user['nama_kelas'] ?></td>
                            <td>
                                <div class="wrap">
                                    <button type="button" class="btn btn-secondary me-2"><i class="bi bi-info-circle"></i>
                                        <a href="<?= base_url('user/' . $user['id']) ?>"> Detail</a>
                                    </button>
                                    <button type="button" class="btn btn-success me-2 edit" ><i class="bi bi-pencil-square"></i>
                                        <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>"> Edit</a>
                                    </button>
                                    <form action="<?= base_url('user/' . $user['id']) ?>" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i>Delete</button>
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