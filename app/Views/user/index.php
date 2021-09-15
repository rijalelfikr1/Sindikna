<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Simdikna - Sistem Informasi Pendidik dan Tenaga Pendidik Non ASN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/">Simdikna</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Beranda</a></li>
                    <li><a class="nav-link" href="/user/dataprovinsi">Data Provinsi</a></li>
                    <li><a class="nav-link" href="/user/kabupatenKota">Data Kabupaten-Kota</a></li>
                    <li><a class="getstarted" href="#">Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1 data-aos="fade-up">Selamat Datang di Simdikna</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">Menyediakan informasi mengenai Pendidik dan Tenaga Pendidik Non
                ASN</h2>
            <div data-aos="fade-up" data-aos-delay="800">
                <a href="#about" class="btn-get-started scrollto">Mulai</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tentang</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="150">
                        <img src="<?= base_url() ?>/img/about-img.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-up"
                        data-aos-delay="300">
                        <p>
                            <strong>Simdikna</strong> adalah Sistem Informasi Pendidik dan Tenaga Pendidik (PTK) Non ASN
                            di Provinsi Kepulauan Riau.
                            Adapun PTK Non ASN yang masuk dalam pengawasan Dinas Pendidikan Provinsi Kepulauan Riau,
                            yaitu berada pada:
                        </p>
                        <ul>
                            <li><i class="fas fa-school"></i> SMA Negeri se Provinsi Kepulauan Riau</li>
                            <li><i class="fas fa-school"></i> SMK Negeri se Provinsi Kepulauan Riau</li>
                            <li><i class="fas fa-school"></i> SLB Negeri se Provinsi Kepulauan Riau</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row gy-4 counters">

                    <div class="col-lg-4 col-md-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1072" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Guru</p>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="800" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Laboran</p>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="750" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Penjaga Sekolah</p>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1072" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Pustakawan</p>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="800" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Tenaga Administrasi</p>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="750" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Tenaga Kebersihan</p>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Layanan</h2>
                    <p>Apa yang ditampilkan oleh Simdikna</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="icofont-users-social"></i></div>
                            <h4 class="title">Data Provinsi</h4>
                            <p class="description">Menampilkan informasi Pendidik dan Tenaga Pendidik Non ASN di
                                Provinsi Kepulauan Riau</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="icofont-users"></i></div>
                            <h4 class="title">Data Kabupaten/Kota</h4>
                            <p class="description">Menampilkan informasi Pendidik dan Tenaga Pendidik Non ASN per
                                Kabupaten/Kota di Provinsi Kepulauan Riau</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="icofont-user"></i></div>
                            <h4 class="title">Data PTK</h4>
                            <p class="description">Menampilkan informasi tentang Pendidik dan Tenaga Pendidik Non ASN
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="icofont-search-user"></i></div>
                            <h4 class="title">Cari PTK</h4>
                            <p class="description">Mencari informasi tentang Pendidik dan Tenaga Pendidik Non ASN</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak Kami</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="row">
                            <div class="col-lg-6 info">
                                <i class="bx bx-map"></i>
                                <h4>Alamat</h4>
                                <p>Jl. Sultan Mansyur Syah,<br>Tanjungpinang, Kepulauan Riau 29124</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-phone"></i>
                                <h4>Telepon</h4>
                                <p>(0771) 443032<br>(0771) 443033 - FAX</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-envelope"></i>
                                <h4>Email</h4>
                                <p>disdik@kepriprov.go.id</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-time-five"></i>
                                <h4>Jam Kerja</h4>
                                <p>Sen - Kam: 08.00 - 16.00<br>Jumat: 08.00 - 15.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3611773977746!2d104.46481651475362!3d0.8673436993672766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d90d59f75f12f5%3A0x2151b8b0ff6f9761!2sDinas%20Pendidikan%20Provinsi%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1628596903721!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 410px;" allowfullscreen></iframe>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    Copyright &copy; <span>
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                    </span> <strong>Dinas Pendidikan Provinsi Kepulauan Riau</strong>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/vendor/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>/vendor/purecounter/purecounter.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/js/main.js"></script>

</body>

</html>