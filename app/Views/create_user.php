<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap">
</head>
<body>
    <div class="bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Form Input</h3></div>
                        <div class="card-body">
                            <form action="<?= base_url('user/store') ?>" method="POST">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 
                                    'is-invalid' : ''; ?>" name="nama" id="nama" placeholder="Nama" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                    <label>Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <!-- <label>Kelas</label> -->
                                    <!-- <input type="text" class="form-control" placeholder="Kelas"> -->
                                    <select name="kelas" id="kelas" class="form-control" placeholder="Kelas" type="text">
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
                                    <input type="text" class="form-control" <?= ($validation->hasError('npm')) ? 
                                    'is-invalid' : ''; ?>" name="npm" id="npm" placeholder="NPM" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('npm'); ?>
                                    </div>
                                    <label>NPM</label>
                                </div><br>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

