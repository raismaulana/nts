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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() .'assets/images/favicon.png'?>">
    <title>Data Kegiatan Harian Staf</title>
    <!-- Page CSS -->
    <link href="<?php echo base_url() .'assets/dist/css/pages/contact-app-page.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() .'assets/dist/css/style.min.css'?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Data Kegiatan Harian Staf</p>
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
                                <a href="<?php echo base_url().'KABID/Profil_kabid'?>" class="dropdown-item"><i class="ti-user"></i> Profil Saya</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Pengaturan Akun</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="login.html" class="dropdown-item"><i class="ti-power-off"></i> Keluar</a>
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
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
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
        $this->load->view('KABID/v_sidebar_kabid')
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
                        <h4 class="text-themecolor">Data Kegiatan Harian Staf</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Kegiatan Harian Staf</a></li>
                                <li class="breadcrumb-item active">Detail Data Kegiatan Harian Staf</li>
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
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <!-- <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Data Kegiatan Harian Staf</a> </li>
                            </ul> -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <h4 class="card-title">Kegiatan Harian Staf</h4>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6"> <strong>Nama</strong>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6"> <strong>Jabatan</strong>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6"> <strong>Seksi</strong>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6"> <strong>Aktivitas Kegiatan</strong>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6"> <strong>Kuantitas Hasil</strong>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6"> <strong>Tanggal Mulai Kegiatan</strong>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6"> <strong>Tanggal Selesai Kegiatan</strong>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6"> <strong>Durasi</strong>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6"> <strong>Status</strong>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
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
    <script src="<?php echo base_url() .'assets/node_modules/jquery/jquery-3.2.1.min.js'?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() .'assets/node_modules/popper/popper.min.js'?>"></script>
    <script src="<?php echo base_url() .'assets/node_modules/bootstrap/dist/js/bootstrap.min.js'?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() .'assets/dist/js/perfect-scrollbar.jquery.min.js'?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() .'assets/dist/js/waves.js'?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() .'assets/dist/js/sidebarmenu.js'?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() .'assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js'?>"></script>
    <script src="<?php echo base_url() .'assets/node_modules/sparkline/jquery.sparkline.min.js'?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() .'assets/dist/js/custom.min.js'?>"></script>
</body>

</html>
