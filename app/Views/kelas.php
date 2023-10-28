<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<br>
<div class="px-4">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/kelas')?>">Data Kelas</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Kelas</li>
    </ol>
  </nav>
  <div class="card mb-4">
    <div class="card-header">
      <h3>Detail Kelas</h3>
    </div>
    <div class="card-body">
      <table
        id="dataTable"
        class="table table-bordered"
        cellpadding="10">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            foreach($kelas as $kelas){
          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $kelas['nama']?></td>                            
              <td><?= $kelas['npm']?></td>                              
              <td><?= $kelas['nama_kelas']?></td>
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