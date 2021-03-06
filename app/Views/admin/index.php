<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard &mdash; Simdikna</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/modules/owl.carousel//dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/style1.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/components.css">

    <!-- Page Specific CSS File -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/index.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-1.png"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hai, Administrator</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title"><?= session()->get('email') ?></div>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= base_url(); ?>">Simdikna</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('admin/dashboard'); ?>">Sd</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="active"><a class="nav-link" href="<?= base_url('admin/dashboard'); ?>"><i
                                    class="fas fa-fire"></i>
                                <span>Dashboard</span></a></li>
                        <li class="menu-header">PTK Non ASN</li>
                        <li><a class="nav-link" href="<?= base_url('admin/lihatData'); ?>"><i class="fas fa-users"></i>
                                <span>Lihat Data</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('admin/editData'); ?>"><i
                                    class="fas fa-users-cog"></i>
                                <span>Ubah Data</span></a></li>
                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="<?= base_url('auth/keluar'); ?>"
                            class="btn btn-danger btn-lg btn-block btn-icon-split">
                            <i class="fas fa-sign-out-alt"></i> Keluar
                        </a>
                    </div>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>PTK Non ASN</h4>
                                    </div>
                                    <div class="card-body">
                                        5010
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-success">
                                    <i class="far fa-plus-square"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Data Terbaru</h4>
                                    </div>
                                    <div class="card-body">
                                        10
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-warning">
                                    <i class="far fa-edit"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Data diubah</h4>
                                    </div>
                                    <div class="card-body">
                                        1,201
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                    <i class="far fa-trash-alt"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Data dihapus</h4>
                                    </div>
                                    <div class="card-body">
                                        47
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Statistik Data PTK Non ASN</h4>
                                    <div class="card-header-action">
                                        <div class="btn-group">
                                            <a href="#minggu" data-tab="statistik-tab" class="btn active">1 Minggu</a>
                                            <a href="#bulan" data-tab="statistik-tab" class="btn">1 Bulan</a>
                                            <a href="#tahun" data-tab="statistik-tab" class="btn">1 Tahun</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="active" data-tab-group="statistik-tab" id="minggu">
                                        <canvas id="myChart" height="182"></canvas>
                                    </div>
                                    <div data-tab-group="statistik-tab" id="bulan">
                                        <canvas id="chartBulan" height="182"></canvas>
                                    </div>
                                    <div data-tab-group="statistik-tab" id="tahun">
                                        <canvas id="chartTahun" height="182"></canvas>
                                    </div>
                                    <div class="statistic-details mt-sm-4">
                                        <div class="statistic-details-item">
                                            <div class="detail-value">10</div>
                                            <div class="detail-name">Data Hari ini</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <div class="detail-value">120</div>
                                            <div class="detail-name">Data Minggu ini</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <div class="detail-value">205</div>
                                            <div class="detail-name">Data Bulan ini</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <div class="detail-value">500</div>
                                            <div class="detail-name">Data Tahun ini</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                            <div class="card card-hero">
                                <div class="card-header">
                                    <div class="card-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <h4 class="hari"></h4>
                                    <div class="card-description"><span class="tgl"></span> - <span class="bln"></span>
                                        - <span class="thn"></span></div>
                                </div>
                                <div class="card-body p-0 mb-4">
                                    <div class="notification"></div>
                                    <div class="weather-icon">
                                        <img src="<?= base_url() ?>/img/icons/unknown.png" alt="">
                                    </div>
                                    <div class="temperature-value">
                                        <p>- ??<span>C</span></p>
                                    </div>
                                    <div class="temperature-description">
                                        <p> &mdash; </p>
                                    </div>
                                    <div class="location">
                                        <p>&mdash;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Data Terbaru</h4>
                                    <div class="card-header-action">
                                        <a href="<?= base_url('admin/lihatData'); ?>"
                                            class="btn btn-danger btn-icon icon-right">Lihat Semua
                                            <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="owl-carousel owl-theme" id="users-carousel">
                                        <div>
                                            <div class="user-item">
                                                <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-1.png"
                                                    class="img-fluid">
                                                <div class="user-details">
                                                    <div class="user-name">Budi Utama</div>
                                                    <div class="text-job text-muted">Guru Biologi</div>
                                                    <div class="user-cta">
                                                        <a href="detail-data.html" class="btn btn-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="user-item">
                                                <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-2.png"
                                                    class="img-fluid">
                                                <div class="user-details">
                                                    <div class="user-name">Kusnaedi</div>
                                                    <div class="text-job text-muted">Penjaga Sekolah</div>
                                                    <div class="user-cta">
                                                        <a href="detail-data.html" class="btn btn-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="user-item">
                                                <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-3.png"
                                                    class="img-fluid">
                                                <div class="user-details">
                                                    <div class="user-name">Bagus Dwi Cahya</div>
                                                    <div class="text-job text-muted">Tenaga Administrasi</div>
                                                    <div class="user-cta">
                                                        <a href="detail-data.html" class="btn btn-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="user-item">
                                                <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-4.png"
                                                    class="img-fluid">
                                                <div class="user-details">
                                                    <div class="user-name">Wildan Ahdian</div>
                                                    <div class="text-job text-muted">Tenaga Administrasi</div>
                                                    <div class="user-cta">
                                                        <a href="detail-data.html" class="btn btn-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="user-item">
                                                <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-5.png"
                                                    class="img-fluid">
                                                <div class="user-details">
                                                    <div class="user-name">Deden Febriansyah</div>
                                                    <div class="text-job text-muted">Pustakawan</div>
                                                    <div class="user-cta">
                                                        <a href="detail-data.html" class="btn btn-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <span>
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                    </span>
                    <div class="bullet"></div> <a href="https://dinaspendidikan.kepriprov.go.id/">Dinas Pendidikan
                        Provinsi Kepulauan Riau</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url() ?>/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>/modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>/modules/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/js/scripts.js"></script>
    <script src="<?= base_url() ?>/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>/js/index-admin.js"></script>
</body>

</html>