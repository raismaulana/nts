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
    <title>Beranda</title>
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
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- Navbar -->
        <?php
        $this->load->view('KABID/navbar')
        ?>
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
                        <h4 class="text-themecolor">Beranda</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <!--<li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Bidang</a></li>-->
                                <li class="breadcrumb-item active">Beranda</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-docs"></i></h3>
                                            <p class="text-muted">DATA KEGIATAN STAF</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-primary"><?php echo $total_kegiatan; ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $persen_t . "%; height: 6px;"; ?>" aria-valuenow="<?php echo $total_kegiatan; ?>" aria-valuemin="0" aria-valuemax="<?php echo $total_kegiatan; ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-check"></i></h3>
                                            <p class="text-muted">DISETUJUI</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-cyan"><?php echo $diterima; ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: <?php echo $persen_de . "%; height: 6px;"; ?>" aria-valuenow="<?php echo $diterima; ?>" aria-valuemin="0" aria-valuemax="<?php echo $total_kegiatan; ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-clock"></i></h3>
                                            <p class="text-muted">MENUNGGU</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-purple"><?php echo $menunggu; ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: <?php echo $persen_m . "%; height: 6px;"; ?>" aria-valuenow="<?php echo $menunggu; ?>" aria-valuemin="0" aria-valuemax="<?php echo $total_kegiatan; ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-close"></i></h3>
                                            <p class="text-muted">DITOLAK</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success"><?php echo $ditolak; ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $persen_do . "%; height: 6px;"; ?>" aria-valuenow="<?php echo $ditolak; ?>" aria-valuemin="0" aria-valuemax="<?php echo $total_kegiatan; ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Laporan Kegiatan Harian Staf Terakhir</h5>
                            </div>
                            <div class="table-responsive m-t-4">
                                <table id="table_data_terakhir" class="table table-striped" data-page-size="8">
                                    <thead>
                                        <tr>
                                            <th>Nama Staf</th>
                                            <th>Aktivitas Kegiatan</th>
                                            <th>Kuantitas Hasil</th>
                                            <th>Tanggal Mulai Kegiatan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/js/custom.min.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            
            function format_date(date) {
                function appendLeadingZeroes(n) {
                    if (n <= 9) {
                        return "0" + n;
                    }
                    return n
                }
                const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

                var b = new Date(date);

                var a = appendLeadingZeroes(b.getDate()) + "-" + months[b.getMonth()] + "-" + b.getFullYear() + "  " + appendLeadingZeroes(b.getHours()) + ":" + appendLeadingZeroes(b.getMinutes())

                return a;
            }
            $('#table_data_terakhir').DataTable({
                "ajax": {
                    "url": "http://localhost/nts/KABID/kegiatan_staf/select_all",
                    "method": "GET"
                },
                "columns": [{
                        "data": "nama_pengguna"
                    },
                    {
                        "data": "aktivitas_kegiatan"
                    },
                    {
                        "data": "kuantitas_output_kegiatan"
                    },
                    {
                        "data": "tanggal_kegiatan",
                        render: function(data, type, row) {
                            return format_date(row.tanggal_kegiatan);
                        }
                    },
                    {
                        "data": "status_kegiatan",
                        render: function(data, type, row) {
                            if (row.status_kegiatan == 0) {
                                return '<span class="badge badge-warning">Menunggu</span>';
                            } else if (row.status_kegiatan == 1) {
                                return '<span class="badge badge-success">Disetujui</span>';
                            } else {
                                return '<span class="badge badge-danger">Ditolak</span>';
                            }
                        }
                    }
                ],
                "order": [
                    [3, 'desc']
                ]
            });
        });
    </script>
</body>
</html>
