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
    <title>Data KABID</title>
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
            <p class="loader__label">Pencatatan Data KABID</p>
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
        <!-- Page wrapper  -->
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
                        <h4 class="text-themecolor">Data KABID</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Pegawai</a></li>
                                <li class="breadcrumb-item active">Data KABID</li>
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
                                        <h4 class="card-title">Daftar Data Kepala Bidang</h4>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                        <div class="float-right mr-4"><a href="javascript:void(0);" class="btn waves-effect waves-light btn-primary" data-toggle="modal" data-target="#Modal_Tambah"><span class="fa fa-plus"></span> Tambah Data</a></div>
                                    </div>
                                </div>

                                <div class="table-responsive m-t-4">
                                    <table id="tabel_data_kabid" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th> Nama Lengkap</th>
                                                <th> No.Telp </th>
                                                <th> NIK </th>
                                                <th> Golongan </th>
                                                <th> # </th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_kabid">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
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
                                    <label class="col-md-2"><b>Nama Lengkap</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_nama"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Bidang</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_bidang"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>NIK</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_nik"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>NIP</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_nip"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Alamat</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_alamat"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Email</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_email"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Golongan</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_golongan"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Tanggal Lahir</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_tanggal"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>No.Telp</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_telp"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2"><b>Pendidikan</b></label>
                                    <div class="col-md-10">
                                        <p class="detail_pendidikan"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END MODAL DETAIL-->

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
    <!-- Select2 -->
    <script src="<?php echo base_url() . 'assets/node_modules/select2/dist/js/select2.full.min.js' ?>" type="text/javascript"></script>
    <!-- Javascript -->
    <script>
        $(document).ready(function() {
            ! function(window, document, $) {
                "use strict";
                $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
            }(window, document, jQuery);
            $(".select2").select2({
                placeholder: "Pilih salah satu"
            });

            $('#data_kabid').on('click', '.item_detail', function() {
                $.ajax({
                    url: "<?php echo base_url('KABID/Data_Kabid/get_detail'); ?>",
                    type: "POST",
                    dataType: 'JSON',
                    data: {
                        id_pengguna: $(this).data('product_code')
                    },
                    success: function(data) {
                        $(".detail_nama").html("<b>: </b>" + data[0].nama_pengguna);
                        $(".detail_nik").html("<b>: </b>" + data[0].nik_pengguna);
                        $(".detail_nip").html("<b>: </b>" + data[0].nip_pengguna);
                        $(".detail_alamat").html("<b>: </b>" + data[0].alamat_pengguna + ", " + data[0].nama_kecamatan + ", " + data[0].nama_kabupaten + ", " + data[0].nama_provinsi);
                        $(".detail_email").html("<b>: </b>" + data[0].email_pengguna);
                        $(".detail_tanggal").html("<b>: </b>" + data[0].tanggal_lahir_pengguna);
                        $(".detail_telp").html("<b>: </b>" + data[0].telepon_pengguna);
                        $(".detail_pendidikan").html("<b>: </b>" + data[0].pendidikan);
                        $(".detail_bidang").html("<b>: </b>" + data[0].nama_bidang);
                        $(".detail_golongan").html("<b>: </b>" + data[0].golongan_pengguna);
                    }
                })
            });

            $('#tabel_data_kabid').DataTable({
                "ajax": {
                    "url": "http://localhost/nts/KABID/data_kabid/select_all",
                    "method": "GET"
                },
                "columns": [{
                        "data": "nama_pengguna"
                    },
                    {
                        "data": "telepon_pengguna"
                    },
                    {
                        "data": "nik_pengguna"
                    },
                    {
                        "data": "golongan_pengguna"
                    },
                    {
                        "data": "id_pengguna",
                        render: function(data, type, row) {
                            return '<a href="javascript:void(0);" data-toggle="modal"  data-target="#Modal_Detail" class="btn btn-info btn-sm item_detail" data-product_code="' + row.id_pengguna + '">Detail</a>';
                        },
                        "orderable": false
                    }
                ]
            });

        });
    </script>

</body>

</html>