<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() . 'assets/images/logo.png' ?>">
    <title>Seksi</title>
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css' ?>">
    <!-- Bootstrap Switch -->
    <link href="<?php echo base_url() . 'assets/node_modules/bootstrap-switch/bootstrap-switch.min.css' ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() . 'assets/dist/css/style.min.css' ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fixed-layout skin-blue mini-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Data Seksi</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url(); ?>assets/images/logo-sidoarjo.png" style="width: 55px; height: 55px;" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url(); ?>assets/images/logo-sidoarjo.png" style="width: 55px; height: 55px;" alt="homepage" class="light-logo" />
                        </b>&nbsp;&nbsp;
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url(); ?>assets/images/logo-tulisan.png" style="height: 40px;" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->
                         <img src="<?php echo base_url(); ?>assets/images/logo-tulisan.png" style="height: 40px;" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mdi mdi-account-circle mdi-24px"></span> &nbsp;<span class="hidden-md-down">Mark &nbsp;<i class="ti-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> Profil Saya</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Pengaturan Akun</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item"><i class="ti-power-off"></i> Keluar</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <!-- Notification -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-bell"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Pemberitahuan</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('v_sidebar')
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Data Seksi</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Bidang</a></li> -->
                                <li class="breadcrumb-item active">Data Seksi</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row show-grid">
                                    <div class="col-xs-12 col-md-8">
                                        <h4 class="card-title">Daftar Data Seksi</h4>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                        <div class="float-right mr-4"><a href="javascript:void(0);" class="btn waves-effect waves-light btn-primary" data-toggle="modal" data-target="#Modal_Tambah"><span class="fa fa-plus"></span> Tambah Data</a></div>
                                    </div>
                                </div>

                                <div class="table-responsive m-t-4">
                                    <table id="mydata" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>No.</th>
                                              <th>Seksi</th>
                                              <th>Bidang</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="">
                                          <?php $i=1; foreach($data_seksi as $row){ ?>
                                              <tr>
                                                  <td scope="row"><?= $i++; ?></td>
                                                  <td><?= $row->nama_seksi; ?></td>
                                                  <td><?= $row->nama_bidang; ?></td>
                                                  <td ><a name="edit" id="edit" class="btn btn-info" href="#" role="button">Edit</a>
                                                  <a name="hapus" id="hapus" class="btn btn-danger" href="#" role="button">Hapus</a></td>
                                              </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL ADD -->
                <form action="<?= base_url('seksi/insert_seksi'); ?>" method="post">
                <form id="form_tambah" type="POST" enctype="multipart/form-data">
                    <div class="modal fade" id="Modal_Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Seksi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="pesan-error-tmbh" class="alert alert-danger" hidden></div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Seksi</label>
                                        <div class="col-md-10">
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Seksi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-2 col-form-label" for="bidang">Bidang</label>
                                      <div class="col-md-10">
                                      <select class="custom-select col-12" name="bidang" id="bidang">
                                          <?php foreach($data_bidang as $row){ ?>
                                            <option value="<?php echo $row->id_bidang; ?>"><?=$row->nama_bidang; ?></option>
                                          <?php } ?>
                                      </select>
                                      </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                    <button type="submit" id="btn_simpan" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </form>
                <!--END MODAL ADD-->

                <!--MODAL DELETE-->

                <!-- END MODAL DELETE -->

                <!-- MODAL EDIT -->

                <!--END MODAL EDIT-->
                <!-- ============================================================== -->
                <!--Kepala Bidang-->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row show-grid">
                                    <div class="col-xs-12 col-md-8">
                                        <h4 class="card-title">Daftar Data Kepala Seksi</h4>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                        <div class="float-right mr-4"><a href="javascript:void(0);" class="btn waves-effect waves-light btn-primary" data-toggle="modal" data-target="#Modal_Tambah_Kabid"><span class="fa fa-plus"></span> Tambah Data</a></div>
                                    </div>
                                </div>

                                <div class="table-responsive m-t-4">
                                    <table id="mydata" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>No.</th>
                                              <th>Bidang</th>
                                              <th>Seksi</th>
                                              <th>Kepala Seksi</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="">
                                          <?php $i=1; foreach($data_kasi as $row){ ?>
                                              <tr>
                                                  <td scope="row"><?= $i++; ?></td>
                                                  <td><?= $row->nama_bidang; ?></td>
                                                  <td><?= $row->nama_seksi; ?></td>
                                                  <td><?= $row->nama_pengguna; ?></td>
                                                  <td style="text-align:right;"><a name="edit" id="edit" class="btn btn-info" href="#" role="button">Edit</a>
                                                  <a name="hapus" id="hapus" class="btn btn-danger" href="#" role="button">Hapus</a></td>
                                              </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL ADD -->
                <form action="<?= base_url('seksi/insert_kasi'); ?>" method="post">
                <form id="form_tambah" type="POST" enctype="multipart/form-data">
                    <div class="modal fade" id="Modal_Tambah_Kabid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kepala Seksi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="pesan-error-tmbh" class="alert alert-danger" hidden></div>
                                    <div class="form-group row">
                                      <label class="col-md-2 col-form-label" for="bidang">Bidang - Seksi</label>
                                      <div class="col-md-10">
                                      <select class="custom-select col-12" name="seksi" id="seksi">
                                        <?php foreach($data_seksi as $row){ ?>
                                        <option value="<?php echo $row->id_seksi; ?>"><?=$row->nama_bidang," - ",$row->nama_seksi; ?></option>
                                        <?php } ?>
                                      </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-2 col-form-label" for="pengguna">Pengguna</label>
                                      <div class="col-md-10">
                                      <select class="custom-select col-12" name="pengguna" id="pengguna">
                                        <?php foreach($data_pengguna as $row){ ?>
                                        <option value="<?php echo $row->id_pengguna; ?>"><?=$row->nama_pengguna,"(",$row->username_pengguna,")"; ?></option>
                                        <?php } ?>
                                      </select>
                                      </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                    <button type="submit" id="btn_simpan" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </form>
                <!--END MODAL ADD-->

                <!--MODAL DELETE-->

                <!-- END MODAL DELETE -->

                <!-- MODAL EDIT -->

                <!--END MODAL EDIT-->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            Hak Cipta © 2020 Dinas Kesehatan Sidoarjo
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() . 'assets/node_modules/jquery/jquery-3.2.1.min.js' ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() . 'assets/node_modules/popper/popper.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/node_modules/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() . 'assets/dist/js/perfect-scrollbar.jquery.min.js' ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() . 'assets/dist/js/waves.js' ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() . 'assets/dist/js/sidebarmenu.js' ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() . 'assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/node_modules/sparkline/jquery.sparkline.min.js' ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() . 'assets/dist/js/custom.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/dist/js/pages/validation.js' ?>"></script>
    <!-- This is data table -->
    <script src="<?php echo base_url() . 'assets/node_modules/datatables.net/js/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js' ?>"></script>
    <!-- Sweetalert 2 -->
    <script src="<?php echo base_url() . 'assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js' ?>"></script>
    <!-- bt-switch -->
    <script src="<?php echo base_url() . 'assets/node_modules/bootstrap-switch/bootstrap-switch.min.js' ?>"></script>

</body>

</html>
