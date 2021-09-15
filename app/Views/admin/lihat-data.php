<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Lihat Data &mdash; Simdikna</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap4.min.css">
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">

  <!-- Page Specific CSS File -->
  <link rel="stylesheet" href="../assets/css/lihat-data.css">

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Cari" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
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
                    <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">
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
                    <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">
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
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
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
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Administrator</div></a>
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
              <li><a class="nav-link" href="index.html"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Menu</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>PTK Non ASN</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="lihat-data.html">Lihat Data</a></li>
                  <li><a class="nav-link" href="edit-data.html">Ubah Data</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-dollar-sign"></i> <span>Penggajian</span></a>
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
            <h1>Lihat Data</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.html">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">PTK Non ASN</a></div>
              <div class="breadcrumb-item">Lihat Data</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="float-right">
                  <a href="add-data.html" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data PTK Non ASN</h4>
                  </div>
                  <div class="card-body">
                    <div class="float-right">
                      <form>
                        <div class="input-group">
                          <div class="input-group-append">
                            <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                          <input type="text" class="form-control" placeholder="Cari" id="cari-data">
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
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Budi Anton</td>
                            <td>Guru Matematika</td>
                            <td>SMAN 1 Batam</td>
                            <td>2018-01-20</td>
                            <td>Batam</td>
                            <td><a href="detail-data.html" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>Meliana Putri</td>
                            <td>Guru Sejarah</td>
                            <td>SMAN 1 Tanjungpinang</td>
                            <td>2018-06-10</td>
                            <td>Tanjungpinang</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>Puji Astuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              5
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              6
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              7
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              8
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              9
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              10
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              11
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              12
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              13
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              14
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              15
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              16
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              17
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              18
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              19
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              20
                            </td>
                            <td>Puji AStuti</td>
                            <td>Guru Biologi</td>
                            <td>SMAN 2 Kundur</td>
                            <td>2018-06-10</td>
                            <td>Karimun</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
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
          Copyright &copy; <span><script>document.write(new Date().getFullYear());</script></span> <div class="bullet"></div> <a href="https://dinaspendidikan.kepriprov.go.id/">Dinas Pendidikan Provinsi Kepulauan Riau</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/data-ptk.js"></script>
</body>
</html>
