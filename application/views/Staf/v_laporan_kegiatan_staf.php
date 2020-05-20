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
    <title>Data Kegiatan Staf</title>
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css' ?>">
    <!-- Bootstrap Switch -->
    <link href="<?php echo base_url() . 'assets/node_modules/bootstrap-switch/bootstrap-switch.min.css' ?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url('assets/node_modules/select2/dist/css/select2.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url() . 'assets/dist/css/style.min.css' ?>" rel="stylesheet">
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
            <p class="loader__label">Laporan Kegiatan Harian Staf</p>
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
        $this->load->view('Staf/navbar')
        ?>
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
                        <h4 class="text-themecolor">Kegiatan Kegiatan Harian</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Bidang</a></li> -->
                                <li class="breadcrumb-item active">Data Laporan Kegiatan Harian</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row show-grid">
                                    <div class="col-xs-12 col-md-8">
                                        <h4 class="card-title">Daftar Data Laporan Kegiatan Harian</h4>
                                    </div>
                                </div>

                                <div class="table-responsive m-t-4">
                                    <table id="table_data_laporan" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Staf</th>
                                                <th>Seksi</th>
                                                <th>Bulan</th>
                                                <th>Status</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_laporan">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- ============================================================== -->

                <!-- MODAL DETAIL -->
                <div class="modal fade" id="Modal_Detail" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Data KABID</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <label class="col-md-2"><b>Nama Staf</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_nama"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Jabatan</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_jabatan"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Seksi</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_seksi"></p>
                                    </div>
                                </div>
                                <table id="table_detail_laporan" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Aktivitas Harian</th>
                                            <th>Kuantitas Output</th>
                                            <th>Tanggal</th>
                                            <th>Durasi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="detail_laporan">

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!--END MODAL DETAIL-->

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
    <!-- Select2 -->
    <script src="<?php echo base_url() . 'assets/node_modules/select2/dist/js/select2.full.min.js' ?>" type="text/javascript"></script>
    <!-- bt-switch -->
    <script src="<?php echo base_url() . 'assets/node_modules/bootstrap-switch/bootstrap-switch.min.js' ?>"></script>
    <!-- Javascript -->
    <script type="text/javascript">
        $(document).ready(function() {
            ! function(window, document, $) {
                "use strict";
                $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
            }(window, document, jQuery);

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

            $('#table_data_laporan').DataTable({

                "ajax": {
                    "url": "http://localhost/nts/Staf/laporan_kegiatan_staf/select_all",
                    "method": "GET"
                },
                "columns": [{
                        "data": "nama_pengguna"
                    },
                    {
                        "data": "nama_seksi"
                    },
                    {
                        "data": null,
                        render: function(data, type, full) {
                            return full['bulan_laporan'] + ", " + full['tahun_laporan'];
                        }
                    },
                    {
                        "data": "status_laporan",
                        render: function(data, type, row) {
                            if (row.status_laporan == 0) {
                                return 'Dalam Proses';
                            } else if (row.status_laporan == 1) {
                                return 'Diterima';
                            } else {
                                return 'Ditolak';
                            }
                        }
                    },
                    {
                        "data": null,
                        render: function(data, type, full) {
                            return '<div class="btn-group">' + ' ' +
                                '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' + ' ' +
                                '<i class="ti-settings"></i>' + ' ' +
                                '</button>' + ' ' +
                                '<div class="dropdown-menu">' + ' ' +
                                '<a class="dropdown-item item_detail" href="javascript:void(0)" data-toggle="modal"  data-target="#Modal_Detail" data-product_code="' + full.id_laporan + '">Detail</a>' + ' ' +
                                '</div>' + ' ' +
                                '</div>';
                        },
                        "orderable": false
                    }
                ],
                "order": [
                    [2, 'desc']
                ]

            });

            $('#data_laporan').on('click', '.item_detail', function() {
                $.ajax({
                    url: "<?php echo base_url('Staf/Laporan_kegiatan_staf/get_detail'); ?>",
                    type: "POST",
                    dataType: 'JSON',
                    data: {
                        id_laporan: $(this).data('product_code')
                    },
                    success: function(data) {

                        $(".detail_nama").html("<b>: </b>" + data.biodata[0].nama_pengguna);
                        $(".detail_jabatan").html("<b>: </b>" + data.biodata[0].nama_jabatan);
                        $(".detail_seksi").html("<b>: </b>" + data.biodata[0].nama_seksi);

                        var trHTML = '';
                        for (var f = 0; f < data.kegiatan.length; f++) {
                            trHTML += '<tr><td>' + data.kegiatan[f].aktivitas_kegiatan + '</td><td>' + data.kegiatan[f].kuantitas_output_kegiatan + '</td><td>' + format_date(data.kegiatan[f].tanggal_kegiatan) + '</td><td>' + data.kegiatan[f].waktu_kegiatan + '</td></tr>';
                        }

                        $('#detail_laporan').html(trHTML);
                    }
                })

            });

        });
    </script>

</body>

</html>