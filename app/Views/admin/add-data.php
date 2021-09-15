<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Tambah Data &mdash; Simdikna</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/style1.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/components.css">
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
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Cari" aria-label="Search"
                            data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-1.png"
                                            class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b>
                                        <p>Hello, Bro!</p>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-2.png"
                                            class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Dedik Sugiharto</b>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-3.png"
                                            class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Agung Ardiansyah</b>
                                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-4.png"
                                            class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Ardian Rahardiansyah</b>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-5.png"
                                            class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b>
                                        <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Template update is available now!
                                        <div class="time text-primary">2 Min Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-success text-white">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-danger text-white">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Low disk space. Let's clean it!
                                        <div class="time">17 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Welcome to Stisla template!
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url() ?>/img/avatar/avatar-1.png"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Administrator</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">admin@admin.com</div>
                            <div class="dropdown-divider"></div>
                            <a href="auth-login-2.html" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Simdikna</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">Sd</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a class="nav-link" href="index.html"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Menu</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i>
                                <span>PTK Non ASN</span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="nav-link" href="lihat-data.html">Lihat Data</a></li>
                                <li><a class="nav-link" href="edit-data.html">Ubah Data</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-dollar-sign"></i>
                                <span>Penggajian</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">Data Tahunan</a></li>
                                <li><a class="nav-link" href="#">Data Bulanan</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="auth-login.html" class="btn btn-danger btn-lg btn-block btn-icon-split">
                            <i class="fas fa-sign-out-alt"></i> Keluar
                        </a>
                    </div>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <div class="section-header-back">
                            <a href="lihat-data.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                        </div>
                        <h1>Tambah Data</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="index.html">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">PTK Non ASN</a></div>
                            <div class="breadcrumb-item"><a href="lihat-data.html">Lihat Data</a></div>
                            <div class="breadcrumb-item">Tambah Data</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Tambah Data</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">NIK</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Nama</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-form-label col-12 col-md-3 col-lg-3">Alamat</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Tempat
                                                        Lahir</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Tanggal
                                                        Lahir</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Agama</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <select class="form-control selectric">
                                                            <option>Pilih Agama</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Katolik</option>
                                                            <option>Buddha</option>
                                                            <option>Hindu</option>
                                                            <option>Konghucu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">No.
                                                        Telp/HP</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="tel" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Jenis
                                                        Kelamin</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <select class="form-control selectric">
                                                            <option>Pilih Jenis Kelamin</option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Pendidikan
                                                        Terakhir</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">NRPTK</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Kab/Kota
                                                        Sekolah</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <select class="form-control selectric">
                                                            <option>Pilih Kab/Kota</option>
                                                            <option>Kab. Anambas</option>
                                                            <option>Kab. Bintan</option>
                                                            <option>Kab. Karimun</option>
                                                            <option>Kab. Lingga</option>
                                                            <option>Kab. Natuna</option>
                                                            <option>Kota Batam</option>
                                                            <option>Kota Tanjungpinang</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Pilih
                                                        Sekolah</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <select class="form-control selectric">
                                                            <option>Pilih Sekolah</option>
                                                            <option>SMAN 1 Tanjungpinang</option>
                                                            <option>SMAN 2 Tanjungpinang</option>
                                                            <option>SMAN 3 Tanjungpinang</option>
                                                            <option>SMAN 4 Tanjungpinang</option>
                                                            <option>SMAN 5 Tanjungpinang</option>
                                                            <option>SMAN 6 Tanjungpinang</option>
                                                            <option>SMAN 7 Tanjungpinang</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Tanggal
                                                        Masuk</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-form-label col-12 col-md-3 col-lg-3">Jabatan</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">No.
                                                        NPWP</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">No. BPJS
                                                        Kesehatan</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">No. BPJS
                                                        Tenaga Kerja</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Tanggal
                                                        Keluar</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center mt-3">
                                                <a href="#" class="btn btn-icon icon-left btn-primary"><i
                                                        class="fab fa-telegram-plane"></i> Tambah Data</a>
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
                <div class="footer-right">
                    2.3.0
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
    <script src="<?= base_url() ?>/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/js/scripts.js"></script>
    <script src="<?= base_url() ?>/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>/js/page/data-ptk.js"></script>
</body>

</html>