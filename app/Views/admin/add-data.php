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
    <link rel="stylesheet" href="<?= base_url() ?>/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/modules/selectric/public/selectric.css">

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
                        <a href="<?= base_url('admin/dashboard'); ?>">Simdikna</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('admin/dashboard'); ?>">Sd</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a class="nav-link" href="<?= base_url('admin/dashboard'); ?>"><i class="fas fa-fire"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">PTK Non ASN</li>
                        <li><a class="nav-link" href="<?= base_url('admin/lihatData'); ?>"><i class="fas fa-users"></i>
                                <span>Lihat Data</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('admin/editData'); ?>"><i
                                    class="fas fa-users-cog"></i>
                                <span>Ubah Data</span></a></li>
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
                            <a href="<?= base_url('admin/lihatData'); ?>" class="btn btn-icon"><i
                                    class="fas fa-arrow-left"></i></a>
                        </div>
                        <h1>Tambah Data</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a
                                    href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">PTK Non ASN</a></div>
                            <div class="breadcrumb-item">Tambah Data</div>
                        </div>
                    </div>

                    <!-- sesion pemberitahuan -->

                    <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                    <?php endif; ?>

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
                                                <form action="<?= base_url('admin/addUser'); ?>" method="POST">
                                                    <?= csrf_field(); ?>

                                                    <div class="form-group row">
                                                        <label
                                                            class="col-form-label col-12 col-md-3 col-lg-3">NIK</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" id="nik" name="nik">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-form-label col-12 col-md-3 col-lg-3">Nama</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" id="name"
                                                                name="name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-form-label col-12 col-md-3 col-lg-3">Alamat</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" id="alamat"
                                                                name="alamat">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-12 col-md-3 col-lg-3">Tempat
                                                            Lahir</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" id="tempatLahir"
                                                                name="tempatLahir">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-12 col-md-3 col-lg-3">Tanggal
                                                            Lahir</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="date" class="form-control" id="tanggalLahir"
                                                                name="tanggalLahir">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-form-label col-12 col-md-3 col-lg-3">Agama</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <select class="form-control selectric" id="agama"
                                                                name="agama">
                                                                <option disabled>Pilih Agama</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Katolik">Katolik</option>
                                                                <option value="Budhha">Buddha</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Konghucu">Konghucu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-12 col-md-3 col-lg-3">No.
                                                            Telp/HP</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="tel" class="form-control" id="noHp"
                                                                name="noHp">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-12 col-md-3 col-lg-3">Jenis
                                                            Kelamin</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <select class="form-control selectric" id="JK" name="JK">
                                                                <option disabled>Pilih Jenis Kelamin</option>
                                                                <option value="Laki-laki">Laki - laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-form-label col-12 col-md-3 col-lg-3">Pendidikan
                                                            Terakhir</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" id="pendidikan"
                                                                name="pendidikan">
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">NRPTK</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control" id="nrptk" name="nrptk">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Kab/Kota
                                                        Sekolah</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <select class="form-control selectric" id="kabupaten"
                                                            name="kabupaten">

                                                            <option disabled>Pilih Kab/Kota</option>
                                                            <option value="1">Kota Tanjungpinang</option>
                                                            <option value="2">Kota Batam</option>
                                                            <option value="3">Kab. Karimun</option>
                                                            <option value="4">Kab. Lingga</option>
                                                            <option value="5">Kab. Natuna</option>
                                                            <option value="6">Kab. Bintan</option>
                                                            <option value="7">Kab. Anambas
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Pilih
                                                        Sekolah</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <select class="form-control selectric" id="sekolah"
                                                            name="sekolah">
                                                            <option disabled>Pilih Sekolah</option>
                                                            <option value="1">SMAN 1 Tanjungpinang
                                                            </option>
                                                            <option value="2">SMAN 2 Tanjungpinang
                                                            </option>
                                                            <option value="3">SMAN 3 Tanjungpinang
                                                            </option>
                                                            <option value="4">SMAN 4 Tanjungpinang
                                                            </option>
                                                            <option value="5">SMAN 5 Tanjungpinang
                                                            </option>
                                                            <option value="6">SMAN 6 Tanjungpinang
                                                            </option>
                                                            <option value="7">SMAN 7 Tanjungpinang
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Tanggal
                                                        Masuk</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="date" class="form-control" id="tanggalMasuk"
                                                            name="tanggalMasuk">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-form-label col-12 col-md-3 col-lg-3">Jabatan</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control" id="jabatan"
                                                            name="jabatan">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">No.
                                                        NPWP</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control" id="npwp" name="npwp">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">No. BPJS
                                                        Kesehatan</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control" id="bpjsKes"
                                                            name="bpjsKes">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">No. BPJS
                                                        Tenaga Kerja</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="text" class="form-control" id="bpjsTK"
                                                            name="bpjsTK">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-12 col-md-3 col-lg-3">Tanggal
                                                        Keluar</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <input type="date" class="form-control" id="tglKeluar"
                                                            name="tglKeluar">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center mt-3">
                                                <button type="submit" class="btn btn-icon icon-left btn-primary"><i
                                                        class="fab fa-telegram-plane"></i> Tambah Data</button>
                                            </div>
                                            </form>
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
    <script src="<?= base_url() ?>/modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/js/scripts.js"></script>
    <script src="<?= base_url() ?>/js/custom.js"></script>


</body>

</html>