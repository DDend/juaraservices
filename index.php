<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juara Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <!-- Header nih bos -->

    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <span class="fs-4 p-3">Juara Services</span>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-secondary">Beranda</a></li>
                    <li><a href="layanan.php" class="nav-link px-2 text-white">Layanan</a></li>
                    <li><a href="tentang.php" class="nav-link px-2 text-white">Tentang</a></li>
                </ul>

                <div class="text-end">
                    <a href="login.php" target="_parent"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
                    <a href="registrasi.php" target="_parent"><button type="button" class="btn btn-primary">Buat Akun</button></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Akhir Header nih bos -->

    <!-- Heroes nih bos -->

    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">Juaranya Melayani !!!</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">"Solusi untuk masalah Teknologi Anda" - kami menekankan pada fokus perusahaan untuk memberikan solusi yang tepat dan efektif untuk masalah atau kebutuhan pelanggan di bidang jasa Teknologi.</p>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="heroes.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Layanan Teratas Kami</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('fitur1.png');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Registrasi IMEI iPhone & Android</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill" />
                                </svg>
                                <small>Registrasikan IMEI anda melalui kami, solusi sinyal hilang pada Smartphone Ex inter</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('fitur2.png');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Jasa Pembuatan Website & Aplikasi Android</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill" />
                                </svg>
                                <small>Buat Website atau Aplikasi Android kini lebih mudah bersama kami baik untuk Proyek, Tugas kuliah, atau Instansi</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('fitur3.png');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Services iPhone, Android, Komputer, Laptop</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill" />
                                </svg>
                                <small>Perbaiki masalah layar, baterai, kamera, dll pada Gadget kesayangan Anda</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AKhir Heroes nih bos -->

    <!-- Floating Whatsapp nih bos -->

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

    <!-- Akhir Floating Whatsapp nih bos -->


    <!-- Footer nih bos -->

    <div class="container">
        <footer class="py-3 my-4">
            <p class="text-center text-muted">&copy; 2023 Juara Services</p>
        </footer>
    </div>

    <!-- Akhir Footer nih bos -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>