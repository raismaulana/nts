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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() .'assets/images/logo.png'?>">
    <title>Profile KABID</title>
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

<body class="fixed-layout skin-megna-dark mini-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Profile KABID</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Navbar -->
        <?php
        $this->load->view('KABID/navbar')
        ?>
        <!-- ============================================================== -->
        <!-- Sidebar -->
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
                        <h4 class="text-themecolor">Detail Profil</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                                <li class="breadcrumb-item active">Detail Profil</li>
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
                <div class="section" id="about">
                <div class="container">
                    <div class="card" data-aos="fade-up" data-aos-offset="10">
                    <div class="row">  
                        <div class="col-lg-9 col-md-12">
                        <div class="card-body">
                            <div class="h4 mt-0 title">Data Diri</div>
                           <br>
                            <div class="row">
                            <div class="col-sm-4"><strong class="text-uppercase">Nama Lengkap </strong></div>
                            <div class="col-sm-8">: <?php echo $nama_pengguna; ?></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Bidang</strong></div>
                            <div class="col-sm-8">: <?php echo $nama_bidang; ?></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">NIK</strong></div>
                            <div class="col-sm-8">: <?php echo $nik_pengguna; ?></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">NIP</strong></div>
                            <div class="col-sm-8">: <?php echo $nip_pengguna; ?></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Alamat</strong></div>
                            <div class="col-sm-8">: <?php echo $alamat_pengguna; ?>, <?php echo $nama_kecamatan; ?>, <?php echo $nama_kabupaten; ?>, <?php echo $nama_provinsi; ?></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Email</strong></div>
                            <div class="col-sm-8">: <?php echo $email_pengguna; ?></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Golongan</strong></div>
                            <div class="col-sm-8">: <?php echo $golongan_pengguna; ?></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Tanggal Lahir</strong></div>
                            <div class="col-sm-8">: <?php echo $tanggal_lahir_pengguna; ?></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">No. Telp</strong></div>
                            <div class="col-sm-8">: <?php echo $telepon_pengguna; ?></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Pendidikan</strong></div>
                            <div class="col-sm-8">: <?php echo $pendidikan; ?></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
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
