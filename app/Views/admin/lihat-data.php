<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Lihat Data &mdash; Simdikna</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/style1.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/components.css">

    <!-- Page Specific CSS File -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/lihat-data.css">

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
                        <li class="active"><a class="nav-link" href="<?= base_url('admin/lihatData'); ?>"><i
                                    class="fas fa-users"></i>
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
                        <h1>Lihat Data</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a
                                    href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">PTK Non ASN</a></div>
                            <div class="breadcrumb-item">Lihat Data</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="float-right">
                                    <a href="<?= base_url('admin/tambahData'); ?>"
                                        class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah
                                        Data</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Data PTK Non ASN</h4>
                                    </div>

                                    <!-- sesion pemberitahuan -->
                                    <?php if (session()->getFlashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('success'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('error')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('error'); ?>
                                    </div>
                                    <?php endif; ?>

                                    <div class="card-body">
                                        <div class="float-right">
                                            <form>
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-primary"><i
                                                                class="fas fa-search"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Cari"
                                                        id="cari-data">
                                                </div>
                                            </form>
                                        </div>

                                        <div class="clearfix mb-3"></div>

                                        <div class="table-responsive">
                                            <table class="table table-striped" id="data-ptk">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th>Nama</th>
                                                        <th>Jabatan</th>
                                                        <th>Tempat Tugas</th>
                                                        <th>Tanggal Masuk</th>
                                                        <th>Kabupaten/Kota</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($userList as $data) : ?>
                                                    <tr>
                                                        <td scope="row"><?= $i++; ?>
                                                        </td>
                                                        <td><?= $data['Nama']; ?></td>
                                                        <td><?= $data['Jabatan']; ?></td>
                                                        <td><?= $data['sekolah']; ?></td>
                                                        <td><?= $data['Tanggal_Masuk']; ?></td>
                                                        <td><?= $data['Kota']; ?></td>
                                                        <td>

                                                            <a href="<?= base_url('admin/detailUser/' . $data['id'] . '/' . $data['id_sekolah'] . '/' . $data['id_kabupaten']) ?>"
                                                                class="btn btn-primary">Detail</a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/js/scripts.js"></script>
    <script src="<?= base_url() ?>/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>/js/data-ptk.js"></script>
</body>

</html>