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
    <link href="<?= base_url() ?>/vendor/datatables/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/buttons/css/buttons.bootstrap5.min.css" rel="stylesheet">
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
                <h1><a href="<?= base_url() ?>/index.php">Simdikna</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="/">Beranda</a></li>
                    <li><a class="nav-link" href="/user/dataprovinsi">Data Provinsi</a></li>
                    <li><a class="nav-link active" href="/user/datakabupaten">Data Kabupaten-Kota</a></li>
                    <li><a class="getstarted" href="#">Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2></h2>
                    <ol>
                        <li><a href="index.html">Beranda</a></li>
                        <li><a href="data-kab_kot.html">Data Kabupaten-Kota</a></li>
                        <li><a href="data-tanjungpinang.html">Kota Tanjungpinang</a></li>
                        <li><a href="data-kecamatan.html">Kec. Tanjungpinang Barat</a></li>
                        <li><a href="data-guru.html">SMAN 1 Tanjungpinang</a></li>
                        <li><?= $DetailUser['Nama'] ?></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Data Diri Section ======= -->
        <section id="data-diri" class="data-diri">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="data-diri-box">
                            <div class="data-diri-img mx-auto">
                                <img src="assets/img/undraw_profile.svg" alt="" class="img-responsive">
                            </div>
                            <div class="data-diri-title">
                                <h4><?= $DetailUser['Nama'] ?></h4>
                                <p><?= $DetailUser['Jabatan'] ?></p>
                            </div>
                        </div> .
                    </div>
                    <div class="col-lg-8">
                        <div class="data-diri-box">
                            <h3>Data Diri PTK Non ASN</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Nama</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['Nama'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>NRPTK</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['NRPTK'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Tempat Tanggal Lahir</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['Tempat_lahir'] ?>, <?= $DetailUser['Tanggal_lahir'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Jabatan</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['Jabatan'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Tempat Tugas</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['id_sekolah'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Kab/Kota</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['sekolah'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Pendidikan Terakhir</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['Pendidikan_Terakhir'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Alamat</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['Alamat'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Agama</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['Agama'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Jenis Kelamin</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['JK'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>No. Telp/HP</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['Telp'] ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>Tanggal Masuk</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                    <?= $DetailUser['Tanggal_Masuk'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Data Provinsi Section -->

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
    <script src="<?= base_url() ?>/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url() ?>/vendor/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url() ?>/vendor/buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/vendor/buttons/js/buttons.bootstrap5.min.js"></script>
    <script src="<?= base_url() ?>/vendor/buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/vendor/buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/vendor/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>/vendor/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/vendor/pdfmake/vfs_fonts.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/js/main.js"></script>
    <script>
    console.log(<?= $DetailUser['Tanggal_Masuk'] ?>)
    </script>
</body>

</html>