<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Juara Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <div class="b-example-divider"></div>

  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <span class="fs-4 p-3">Juara Services</span>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white">Beranda</a></li>
          <li><a href="layanan.php" class="nav-link px-2 text-white">Layanan</a></li>
          <li><a href="tentang.php" class="nav-link px-2 text-secondary">Tentang</a></li>
        </ul>

        <div class="text-end">
          <a href="login.php" target="_parent"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="registrasi.php" target="_parent"><button type="button" class="btn btn-primary">Buat Akun</button></a>
        </div>
      </div>
    </div>
  </header>

  <div class="b-example-divider"></div>

  <div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Tentang Kami</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h3 class="fw-bold">Visi Perusahaan</h3>
        <p class="text-muted">Menjadi perusahaan jasa terkemuka di bidang Teknologi dengan memberikan layanan yang berkualitas tinggi dan terpercaya kepada pelanggan kami.</p>
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#collection" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Kualitas Terbaik</h4>
            <p class="text-muted">Memberikan layanan yang berkualitas tinggi dan terpercaya kepada pelanggan kami.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#gear-fill" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Professional</h4>
            <p class="text-muted">Menjaga kepuasan pelanggan dan memenuhi kebutuhan mereka dengan profesionalisme dan integritas.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#speedometer" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Relasi Luas</h4>
            <p class="text-muted">Mengembangkan dan mempertahankan hubungan yang baik dengan pelanggan, karyawan, dan mitra bisnis kami.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#table" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Efektif & Efisien</h4>
            <p class="text-muted">Mengembangkan dan memperbaiki proses dan teknologi untuk meningkatkan efisiensi dan efektivitas layanan kami.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>

  <center>
    <h1 style="color:rgb(0, 0, 0);">
      Alamat Kami :
    </h1>

    <div>
      <!-- Google Map Copied Code -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347863129!2d107.57311687144541!3d-6.903444341655675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1679414204154!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </iframe>
    </div>
  </center>




  <!-- load font awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <!-- add your custom CSS -->
  <style>
    body {
      font-family: sans-serif;
    }

    /* Add WA floating button CSS */
    .floating {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #fff;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .fab-icon {
      margin-top: 16px;
    }
  </style>

  <!-- render the button and direct it to wa.me -->
  <a href="https://wa.me/6281228430523?text=Hi%20Qiscus" class="floating" target="_blank">
    <i class="fab fa-whatsapp fab-icon"></i>
  </a>

  <div class="b-example-divider"></div>

  <div class="container">
    <footer class="py-3 my-4">
      <p class="text-center text-muted">&copy; 2023 Juara Services</p>
    </footer>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>