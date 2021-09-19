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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
                <h1><a href="index.html">Simdikna</a></h1>
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
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/user/guruprov">Data Provinsi</a></li>
                        <li>Guru</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Data Provinsi Section ======= -->
        <section id="data-provinsi" class="data-provinsi">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="title-data">
                            <h3>Data Guru</h3>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="title-data-provinsi">
                            <h3>Jumlah PTK Non ASN: <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah ?>" data-purecounter-duration="1" class="purecounter"></span></h3>
                        </div>
                    </div>
                    <div class="panel table-responsive">
                        <table id="provinsi" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Tempat Tugas</th>
                                    <th>Kabupaten/Kota</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($userList as $data) : ?>
                                    <tr>
                                        <td> <a href="<?= base_url('user/datadiri/' . $data['id']) ?>"><?= $data['Nama']; ?></a>
                                        </td>
                                        <td><?= $data['Jabatan']; ?></td>
                                        <td><?= $data['sekolah']; ?></td>
                                        <td><?= $data['Kota']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>