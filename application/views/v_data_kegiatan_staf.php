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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
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
        $this->load->view('navbar')
        ?>
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
                        <h4 class="text-themecolor">Data Kegiatan Harian</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Bidang</a></li> -->
                                <li class="breadcrumb-item active">Data Kegiatan Harian</li>
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
                                    <div class="col-xs-6 col-md-4">
                                        <div class="float-right mr-4"><a href="javascript:void(0);" class="btn waves-effect waves-light btn-primary" data-toggle="modal" data-target="#Modal_Tambah"><span class="fa fa-plus"></span> Tambah Data</a></div>
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

                <!-- MODAL ADD -->
                <div class="modal fade" id="Modal_Tambah" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan Staf</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('Data_kegiatan_staf/insert'); ?>" method="post">
                                <form id="form_tambah" type="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Nama Staf</label>
                                            <div class="col-md-10 controls">
                                                <select class="select2 custom-select col-12" style="width: 100%; height:36px;" name="input_id_pengguna" id="input_id_pengguna" required data-validation-required-message="Harap pilih nama staf">
                                                    <option></option>
                                                    <?php foreach ($pengguna as $row) { ?>
                                                        <option value="<?php echo $row->id_pengguna; ?>"><?= $row->nama_pengguna, " ( Seksi ", $row->nama_seksi, " ) "; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Aktivitas Harian</label>
                                            <div class="col-md-10 controls">
                                                <textarea name="input_aktivitas" id="input_aktivitas" rows="4" class="form-control" placeholder="Tulis uraian kegiatan yang dilakukan oleh staf" required data-validation-required-message="Harap isi uraian aktivitas staf"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Kuantitas Hasil</label>
                                            <div class="col-md-10 controls">
                                                <textarea name="input_kuantitas" id="input_kuantitas" row="4" class="form-control" placeholder="Tulis hasil yang telah didapatkan dalam aktivitas tersebut" required data-validation-required-message="Harap isi kuantitas hasil yang telah dicapai"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Tanggal Mulai Kegiatan</label>
                                            <div class="col-md-10 controls">
                                                <input type="datetime-local" name="input_tgl_mulai" id="input_tgl_mulai" class="form-control" placeholder="" required data-validation-required-message="Harap pilih tanggal mulai kegiatan anda">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Tanggal Selesai Kegiatan</label>
                                            <div class="col-md-10 controls">
                                                <input type="datetime-local" name="input_tgl_selesai" id="input_tgl_selesai" class="form-control" placeholder="" required data-validation-required-message="Harap pilih tangal selesai kegatan anda">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info">Kirim</button>
                                        <button type="reset" class="btn btn-inverse">Batal</button>
                                    </div>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
                <!--END MODAL ADD-->

                <!--MODAL DELETE-->
                <div class="modal fade" id="Modal_Hapus" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data KABID</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('Data_kegiatan_staf/delete'); ?>" method="post">
                                <form id="form_hapus" type="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <label><strong>Apakah anda yakin akan menghapus data kegiatan dari staf tersebut?</strong></label>
                                        <input type="text" name="del_id_kegiatan" id="del_id_kegiatan" hidden>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info">Kirim</button>
                                        <button type="reset" class="btn btn-inverse">Batal</button>
                                    </div>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END MODAL DELETE -->

                <!-- MODAL EDIT -->
                <div class="modal fade" id="Modal_Edit" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan Staf</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('Data_kegiatan_staf/update'); ?>" method="post">
                                <form id="form_edit" type="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <input type="text" class="form-control" name="edit_id_kegiatan" id="edit_id_kegiatan" hidden>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Nama Staf</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" class="form-control" name="edit_nama_pengguna" id="edit_nama_pengguna" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Aktivitas Harian</label>
                                            <div class="col-md-10 controls">
                                                <textarea name="edit_aktivitas" id="edit_aktivitas" rows="4" class="form-control" placeholder="Tulis uraian kegiatan yang dilakukan oleh staf" required data-validation-required-message="Harap isi uraian aktivitas staf"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Kuantitas Hasil</label>
                                            <div class="col-md-10 controls">
                                                <textarea name="edit_kuantitas" id="edit_kuantitas" row="4" class="form-control" placeholder="Tulis hasil yang telah didapatkan dalam aktivitas tersebut" required data-validation-required-message="Harap isi kuantitas hasil yang telah dicapai"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Tanggal Mulai Kegiatan</label>
                                            <div class="col-md-10 controls">
                                                <input type="datetime-local" name="edit_tgl_mulai" id="edit_tgl_mulai" class="form-control" placeholder="" required data-validation-required-message="Harap pilih tanggal mulai kegiatan anda">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Tanggal Selesai Kegiatan</label>
                                            <div class="col-md-10 controls">
                                                <input type="datetime-local" name="edit_tgl_selesai" id="edit_tgl_selesai" class="form-control" placeholder="" required data-validation-required-message="Harap pilih tangal selesai kegatan anda">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Status</label>
                                            <div class="col-md-10 controls">
                                                <select class="select2 custom-select col-12" style="width: 100%; height:36px;" name="edit_status" id="edit_status" required data-validation-required-message="Harap pilih nama staf">
                                                    <option></option>
                                                    <option value="0">Menunggu</option>
                                                    <option value="1">Diterima</option>
                                                    <option value="2">Ditolak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info">Kirim</button>
                                        <button type="reset" class="btn btn-inverse">Batal</button>
                                    </div>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
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
                    "url": "http://localhost/nts/data_kegiatan_staf/select_all",
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
                                return 'Menunggu';
                            } else if (row.status_kegiatan == 1) {
                                return 'Diterima';
                            } else {
                                return 'Ditolak';
                            }
                        }
                    },
                    {
                        "data": "id_kegiatan",
                        render: function(data, type, row) {
                            return '<div class="btn-group">' + ' ' +
                                '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' + ' ' +
                                '<i class="ti-settings"></i>' + ' ' +
                                '</button>' + ' ' +
                                '<div class="dropdown-menu">' + ' ' +
                                '<a class="dropdown-item item_detail" href="javascript:void(0)" data-toggle="modal"  data-target="#Modal_Detail" data-product_code="' + row.id_kegiatan + '">Detail</a>' + ' ' +
                                '<a class="dropdown-item item_edit" href="javascript:void(0)" data-toggle="modal"  data-target="#Modal_Edit" data-product_code="' + row.id_kegiatan + '">Edit</a>' + ' ' +
                                '<a class="dropdown-item item_delete" href="javascript:void(0)" data-toggle="modal" data-target="#Modal_Hapus" data-product_code="' + row.id_kegiatan + '">Hapus</a>' + ' ' +
                                '</div>' + ' ' +
                                '</div>';
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
                    url: "<?php echo base_url('Data_kegiatan_staf/get_detail'); ?>",
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

            $('#data_kegiatan').on('click', '.item_edit', function() {
                $.ajax({
                    url: "<?php echo base_url('Data_kegiatan_staf/get_detail'); ?>",
                    type: "POST",
                    dataType: 'JSON',
                    data: {
                        id_kegiatan: $(this).data('product_code')
                    },
                    success: function(data) {

                        $('[name="edit_id_kegiatan"]').val(data[0].id_kegiatan);
                        $('[name="edit_nama_pengguna"]').val(data[0].nama_pengguna);
                        $('[name="edit_aktivitas"]').val(data[0].aktivitas_kegiatan);
                        $('[name="edit_kuantitas"]').val(data[0].kuantitas_output_kegiatan);
                        $('[name="edit_tgl_mulai"]').val(data[0].tanggal_kegiatan);
                        $('[name="edit_tgl_selesai"]').val(data[0].tanggal_selesai_kegiatan);

                        // Set selected 
                        $('#edit_status').val(data[0].status_kegiatan);
                        $('#edit_status').select2().trigger('change');

                    }
                })
            });

            $('#data_kegiatan').on('click', '.item_delete', function() {
                let product_code = $(this).data('product_code');
                $('[name="del_id_kegiatan"]').val(product_code);
            })
        });
    </script>

</body>

</html>