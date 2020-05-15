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
    <title>Beranda Staf</title>
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
            <p class="loader__label">Dasbor</p>
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
        $this->load->view('Staf/navbar');
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('Staf/View_sidebar')
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
                        <h4 class="text-themecolor">Dasbor</h4>
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
                                            <h2 class="counter text-primary">148</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
                                            <p class="text-muted">DITERIMA</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-cyan">68</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 68%; height: 6px;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
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
                                            <h2 class="counter text-purple">22</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 22%; height: 6px;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
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
                                            <h2 class="counter text-success">10</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%; height: 6px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Laporan Kegiatan Harian Staf Terakhir</h5>
                            </div>
                            <div class="table-responsive m-t-4">
                                <table id="table_data_terakhir" class="table table-striped" data-page-size="8">
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Progres Laporan Staf</h5>
                            </div>
                            <ul class="country-state">
                                <h5 class="m-t-30">Pilih Bidang</h5>
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                    <option>Pilih salah satu bidang</option>
                                    <option value="AK">ARA</option>
                                    <option value="HI">BARA</option>
                                    <option value="HI">CBAR</option>
                                    <option value="HI">DCBA</option>
                                    <option value="HI">ERA</option>
                                    <option value="HI">FBAR</option>
                                </select>
                                <h5 class="m-t-30">Pilih Seksi</h5>
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                    <option>Pilih salah satu seksi</option>
                                    <option value="AK">ARA</option>
                                    <option value="HI">BARA</option>
                                    <option value="HI">CBAR</option>
                                    <option value="HI">DCBA</option>
                                    <option value="HI">ERA</option>
                                    <option value="HI">FBAR</option>
                                </select>
                                <div class="chart easy-pie-chart-2" data-percent="75"> <span class="percent">75</span>
                                    <h4>Diterima</h4>
                                </div>
                                <div class="chart easy-pie-chart-1" data-percent="65"> <span class="percent">75</span>
                                    <h4>Menunggu</h4>
                                </div>
                                <div class="chart easy-pie-chart-3" data-percent="25"> <span class="percent">75</span>
                                    <h4>Ditolak</h4>
                                </div>
                            </ul>
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
        var dataset = [
            ["A", "B", "C", "D", "E", "F"],
            ["D", "S", "W", "O", "D", "S"],
            ["R", "X", "E", "L", "E", "D"],
            ["W", "Y", "K", "S", "W", "P"],
            ["G", "J", "O", "T", "Z", "F"]
        ];
        $(document).ready(function() {
            $(".select2").select2();
            $('#table_data_terakhir').DataTable({
                data: dataset,
                columns: [{
                        title: "Tanggal"
                    },
                    {
                        title: "Nama"
                    },
                    {
                        title: "Uraian"
                    },
                    {
                        title: "Kuantitan Hasil"
                    },
                    {
                        title: "Jabatan"
                    },
                    {
                        title: "Status"
                    }
                    /*Format untuk data dari server nantinya dengan tipe data array $datas = array("data" => $data);
                    ajax: {
                        "url": "http://localhost/",
                        "method": "GET"
                    },
                    columns: [{
                            "data": "tanggal",
                            "width": "10%"
                        },
                        {
                            "data": "nama",
                            "width": "40%"
                        }
                    ]
                    */
                ]
            });
        });
    </script>
</body>

</html>