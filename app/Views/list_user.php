<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<br>
    <div class="px-4">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="card-body">
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
                                <i class="bi bi-pencil-square" type="button"></i>
                                <i class="bi bi-trash3" type="button"></i>
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