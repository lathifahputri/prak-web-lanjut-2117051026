<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> -->
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
    rel="stylesheet"
    />
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
    ></script>
    <link rel="stylesheet" href="style.css">
    <?php echo '<link rel="stylesheet" href="public/style.css">'; ?>
</head>
<body>
    <!-- <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $nama ?></td><br>
    </tr>
    <tr>
        <td>NPM</td>
        <td>:</td>
        <td><?= $npm ?></td><br>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><?= $kelas ?></td>
    </tr> -->
    <section class="vh-100" style="background-color: #f4f5f7">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3" style="border-radius: 0.5rem">
              <div class="row g-0">
                <div
                  class="col-md-4 gradient-custom text-center text-white"
                  style="
                    border-top-left-radius: 0.5rem;
                    border-bottom-left-radius: 0.5rem;
                  "
                >
                  <img
                    src="gambar.jpg"
                    alt="profil"
                    class="img-fluid my-5"
                    style="width: 100px; border-radius: 50px;"
                  />
                  <h5>Lathifah Putri</h5>
                  <p>Mahasiswi</p>
                </div>
                <div class="col-md-8">
                  <div class="card-body p-4">
                    <h4>Profil</h4>
                    <hr class="mt-0 mb-4" />
                    <div class="row pt-1">
                      <div class="col-6 mb-3">
                        <h6>Nama</h6>
                        <p class="text-muted">Lathifah Putri</p>
                      </div>
                      <div class="col-6 mb-3">
                        <h6>NPM</h6>
                        <p class="text-muted">2117051026</p>
                      </div>
                    </div>
                    <div class="row pt-1">
                      <div class="col-6 mb-3">
                        <h6>Kelas</h6>
                        <p class="text-muted">AB</p>
                      </div>
                    </div>
                    <div class="d-flex justify-content-start">
                      <a href="https://facebook.com"
                        ><i class="fab fa-facebook-f fa-lg me-3"></i
                      ></a>
                      <a href="https://twitter.com"
                        ><i class="fab fa-twitter fa-lg me-3"></i
                      ></a>
                      <a href="https://instagram.com"
                        ><i class="fab fa-instagram fa-lg"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <img src="<?=base_url("assets/img/gambar.jpg")?>" alt="" width="200px">
    <link rel="stylesheet" href="<?=base_url("assets/img/style.css")?>">
</body>
</html>