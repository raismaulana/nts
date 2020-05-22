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
    <title>Data Kegiatan Harian Staf</title>
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
        <!-- Navbar -->
        <?php
        $this->load->view('KABID/navbar')
        ?>
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
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Staf</a></li>
                                <li class="breadcrumb-item active">Data Kegiatan Harian Staf</li>
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
                                        <h4 class="card-title">Daftar Data Kegiatan Harian Staf</h4>
                                    </div>
                                </div>

                                <div class="table-responsive m-t-4">
                                    <table id="table_data_kegiatan" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Staf</th>
                                                <th>Aktivitas Kegiatan</th>
                                                <th>Kuantitas Hasil</th>
                                                <th>Tanggal Mulai Kegiatan</th>
                                                <th>Status</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_kegiatan">

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
                                <h5 class="modal-title" id="exampleModalLabel">Detail Data Kegiatan Staf</h5>
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
                                <div class="row">
                                    <label class="col-md-2"><b>Aktivitas Harian</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_aktivitas"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Kuantitas Hasil</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_kuantitas"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Status</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_status"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Tanggal Mulai Kegiatan</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_tgl_mulai"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Tanggal Selesai Kegiatan</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_tgl_selesai"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Waktu Kegiatan</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_waktu"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Tanggal Update Kegiatan</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_tgl_update"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END MODAL DETAIL-->
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

            $(".select2").select2({
                placeholder: "Pilih salah satu"
            });

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


            $('#table_data_kegiatan').DataTable({
                "ajax": {
                    "url": "http://localhost/nts/kabid/Kegiatan_staf/select_all",
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
                        render: function(data,type,row){
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
                    },
                    {
                        "data": "id_kegiatan",
                        render: function(data, type, row) {
                            return '<a href="javascript:void(0);" data-toggle="modal"  data-target="#Modal_Detail" class="btn btn-info btn-sm item_detail" data-product_code="' + row.id_kegiatan + '">Detail</a>';
                        },
                        "orderable": false
                    }
                ],
                "order": [
                    [3, 'desc']
                ]
            });

            $('#data_kegiatan').on('click', '.item_detail', function() {
                $.ajax({
                    url: "<?php echo base_url('KABID/Kegiatan_staf/get_detail'); ?>",
                    type: "POST",
                    dataType: 'JSON',
                    data: {
                        id_kegiatan: $(this).data('product_code')
                    },
                    success: function(data) {

                        var status;

                        if (data[0].status_kegiatan == 0) {
                            status = 'Menunggu';
                        } else if (data[0].status_kegiatan == 1) {
                            status = 'Diterima';
                        } else {
                            status = 'Ditolak';
                        }
                        $(".detail_nama").html("<b>: </b>" + data[0].nama_pengguna);
                        $(".detail_jabatan").html("<b>: </b>" + data[0].nama_jabatan);
                        $(".detail_seksi").html("<b>: </b>" + data[0].nama_seksi);
                        $(".detail_aktivitas").html("<b>: </b>" + data[0].aktivitas_kegiatan);
                        $(".detail_kuantitas").html("<b>: </b>" + data[0].kuantitas_output_kegiatan);
                        $(".detail_status").html("<b>: </b>" + status);
                        $(".detail_tgl_mulai").html("<b>: </b>" + format_date(data[0].tanggal_kegiatan));
                        $(".detail_tgl_selesai").html("<b>: </b>" + format_date(data[0].tanggal_selesai_kegiatan));
                        $(".detail_waktu").html("<b>: </b>" + data[0].waktu_kegiatan);
                        $(".detail_tgl_update").html("<b>: </b>" + data[0].tanggal_update_kegiatan);
                    }
                })
            });
        });
    </script>

</body>

</html>