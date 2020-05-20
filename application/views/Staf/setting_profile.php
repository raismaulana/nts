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
    <title>Beranda Admin</title>
    <!--c3 CSS -->
    <link href="<?php echo base_url('assets/css/pages/easy-pie-chart.css') ?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url('assets/node_modules/select2/dist/css/select2.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatables.net-bs4/css/responsive.dataTables.min.css' ?>">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/style.min.css') ?>" rel="stylesheet">
</head>

<body class="fixed-layout skin-megna-dark mini-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Pengaturan Akun</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('Staf/navbar')
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('Staf/view_sidebar')
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
                        <h4 class="text-themecolor">Setting</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <!--<li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Bidang</a></li>-->
                                <li class="breadcrumb-item active">Pengaturan Akun</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ubah Username dan Password</h4>
                                <h6 class="card-subtitle"> Fitur untuk mengganti username dan password </h6>
                                <form action="<?= base_url('Setting/update_kasi'); ?>" method="post">
                                    <form id="form_edit" type="POST" enctype="multipart/form-data">
                                        <div class="form-group controls">
                                            <label for="edt_username">Username</label>
                                            <input type="text" name="edt_username" id="edt_username" class="form-control" placeholder='' required data-validation-required-message="Harap isi username">
                                        </div>
                                        <div class="form-group controls">
                                            <label for="edt_password">Password</label>
                                            <input type="password" name="edt_password" id="edt_password" class="form-control" placeholder='' required data-validation-required-message="Harap isi password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-inverse">Batal</button>
                                    </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
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
    <script src="<?php echo base_url('assets/vendor /jquery/jquery-3.2.1.min.js'); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/popper/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/js/perfect-scrollbar.jquery.min.js'); ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/js/waves.js'); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/js/sidebarmenu.js'); ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/vendor/sticky-kit-master/dist/sticky-kit.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/sparkline/jquery.sparkline.min.js'); ?>"></script>
    <!-- This is data table -->
    <script src="<?php echo base_url() . 'assets/vendor/datatables.net/js/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatables.net-bs4/js/dataTables.responsive.min.js' ?>"></script>
    <!-- EASY PIE CHART JS -->
    <script src="<?php echo base_url() . 'assets/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/jquery.easy-pie-chart/easy-pie-chart.init.js' ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url() . 'assets/node_modules/select2/dist/js/select2.full.min.js' ?>" type="text/javascript"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/js/custom.min.js'); ?>"></script>
    <script>
        $(document).ready(function() {});
    </script>
</body>

</html>