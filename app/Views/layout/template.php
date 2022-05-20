<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/output.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title><?= $tittle; ?></title>
    <link rel="icon" type="image/png" href="/assets/images/BQ sementara(2).png" sizes="16x16">
  </head>

  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" class="navigasi">
      <div class="container">
        <img class="logo" href="/" src="/assets/images/BQ sementara(2).png" />
        <a class="navbar-brand" href="index.html">Toko Bumi Q-ta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="/" href="/">Home</a>
            <a class="nav-link active" href="/pages/job">Job Vacancies</a>
            <a class="nav-link active" href="/#contact">Contact Us</a>
            <a class="nav-link active" href="/pages/admin">Admin</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- Header -->
    <div class="jumbotron text-center text-white" style="background-image: url(/assets/images/Untitled-1.png)">
      <h1 class="display-4">Selamat Datang,</h1>
      <p class="lead">Kami melayani segala kebutuhan harian anda.</p>
    </div>
    <!-- end header -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <div class="container text-center text-md-start mt-5 pt-1">

          <div class="row mt-3">
            <div class="col-md-2 col-lg-3 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>
                Toko Bumi-Qta
                <hr />
              </h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit est error nihil cumque, iure nesciunt maxime illum ratione vero assumenda architecto veniam, sequi, odio non necessitatibus qui vel soluta praesentium.</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="text-decoration: none">
              <h6 class="text-uppercase fw-bold mb-4">Location<hr /></h6>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3335.7907254128104!2d106.27100042193639!3d-6.1379487428023785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f6141f08e289%3A0x8007f9797e7518ee!2sToko%20BUMI%20Q-ta!5e0!3m2!1sid!2sid!4v1647486310309!5m2!1sid!2sid" width="200" height="200" style="border: 2px;;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Contact<hr/></h6>
              <p><i class="bi bi-house-door"></i> Serang, Banten</p>
              <p><i class="bi bi-envelope"></i>admin@bumiqta.budiman.fun</p>
              <p><i class="bi bi-telephone"></i> +62 6969 6969</p>
            </div>
          </div>
          
        </div>
    </footer>
    <!-- Footer -->

    <!-- end Footer -->
    <footer class="text-white text-center pb-1 pt-2 fs-6 ps-5 pe-5">
      <a href="/pages/home"><img class="logoFooter" src="/assets/images/BQ sementara(2).png" /></a> 
      <p class="fw-bold">Created by <a class="created" href="https://www.instagram.com/ayeshaalifirdaus/">Ayesha.A.F</a> | @2022 <a class="created" href="/pages/home">Toko Bumi-Qta</a></p>
    </footer>
    <!-- end footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>