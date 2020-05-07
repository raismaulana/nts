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
    <title>Data Staf</title>
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
            <p class="loader__label">Pencatatan Data Staf</p>
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
                        <h4 class="text-themecolor">Data Staf</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Pegawai</a></li>
                                <li class="breadcrumb-item active">Data Staf</li>
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
                                        <h4 class="card-title">Daftar Data Staf</h4>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                        <div class="float-right mr-4"><a href="javascript:void(0);" class="btn waves-effect waves-light btn-primary" data-toggle="modal" data-target="#Modal_Tambah"><span class="fa fa-plus"></span> Tambah Data</a></div>
                                    </div>
                                </div>

                                <div class="table-responsive m-t-4">
                                    <table id="tabel_data_staf" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th> Nama Lengkap</th>
                                                <th> No.Telp </th>
                                                <th> NIK </th>
                                                <th> Golongan </th>
                                                <th> # </th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_staf">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

                <!-- MODAL ADD -->
                <div class="modal fade" id="Modal_Tambah" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Staf</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('Data_staf/insert_pengguna'); ?>" method="post">
                                <form id="form_tambah" type="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="input_nama_staf" id="input_nama_staf" class="form-control" placeholder="" class="form-control" required data-validation-required-message="Harap isi nama lengkap Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">NIK</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="input_nik_staf" id="input_nik_staf" class="form-control" placeholder="" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Harus berupa angka, tidak boleh karakter" data-validation-required-message="Harap isi NIK dari Staf" minlength="16" maxlength="16">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">NIP</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="input_nip_staf" id="input_nip_staf" class="form-control" placeholder="" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Harus berupa angka, tidak boleh karakter" minlength="18" maxlength="18">
                                                <div class="form-control-feedback"><small>Tidak perlu diisi jika bukan PNS</small></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Alamat</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="input_alamat_staf" id="input_alamat_staf" class="form-control" placeholder="Tulis alamat lengkap seperti nama jalan, gedung dan lain-lain" required data-validation-required-message="Harap isi detail alamat dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10 controls">
                                                <select class="select2 form-control custom-select" required data-validation-required-message="Harap pilih alamat lengkap dari Staf" name="input_kecamatan_staf" id="input_kecamatan_staf" style="width: 100%; height:36px;">
                                                    <option></option>
                                                    <?php foreach ($data_alamat as $row) { ?>
                                                        <option value="<?php echo $row->id_kecamatan; ?>"><?= $row->nama_kecamatan, ", ", $row->nama_kabupaten, ", ", $row->nama_provinsi; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <div class="form-control-feedback"><small>Pilih kecamatan, kabupaten dan provinsi</small></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10 controls">
                                                <input type="email" name="input_email_staf" id="input_email_staf" class="form-control" placeholder="" required data-validation-required-message="Harap isi email dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Golongan</label>
                                            <div class="col-md-10 controls">
                                                <select class="select2 form-control custom-select" name="input_gol_staf" id="input_gol_staf" style="width: 100%; height:36px;">
                                                    <option></option>
                                                    <option value="Juru Muda (Gol. I a)">Juru Muda (Gol. I a)</option>
                                                    <option value="Juru Muda Tingkat I (Gol. I b)">Juru Muda Tingkat I (Gol. I b)</option>
                                                    <option value="Juru (Gol. I c)">Juru (Gol. I c)</option>
                                                    <option value="Juru Tingkat I (Gol. I d)">Juru Tingkat I (Gol. I d)</option>
                                                    <option value="Pengatur Muda(Gol. II a)">Pengatur Muda(Gol. II a)</option>
                                                    <option value="Pengatur Muda Tingkat I (Gol. II b)">Pengatur Muda Tingkat I (Gol. II b)</option>
                                                    <option value="Pengatur (Gol. II c)">Pengatur (Gol. II c)</option>
                                                    <option value="Pengatur Tingkat I(Gol. II d)">Pengatur Tingkat I(Gol. II d)</option>
                                                    <option value="Penata Muda (Gol. III a)">Penata Muda (Gol. III a)</option>
                                                    <option value="Penata Muda Tingkat I(Gol. III b)">Penata Muda Tingkat I(Gol. III b)</option>
                                                    <option value="Penata (Gol. III c)">Penata (Gol. III c)</option>
                                                    <option value="Penata Tingkat I(Gol. III d)">Penata Tingkat I(Gol. III d)</option>
                                                    <option value="Pembina (Gol. IV a)">Pembina (Gol. IV a)</option>
                                                    <option value="Pembina Tingkat I (Gol. IV b)">Pembina Tingkat I (Gol. IV b)</option>
                                                    <option value="Pembina Utama Muda (Gol. IV c)">Pembina Utama Muda (Gol. IV c)</option>
                                                    <option value="Pembina Utama Madya (Gol. IV d)">Pembina Utama Madya (Gol. IV d)</option>
                                                    <option value="Pembina Utama (Gol. IV e)">Pembina Utama (Gol. IV e)</option>
                                                </select>
                                                <div class="form-control-feedback"><small>Tidak perlu dipilih jika bukan PNS</small></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-md-10 controls">
                                                <input type="date" name="input_tgl_lahir_staf" id="input_tgl_lahir_staf" class="form-control" placeholder="" required data-validation-required-message="Harap isi email dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">No.Telp</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="input_no_telp_staf" id="input_no_telp_staf" class="form-control" placeholder="" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Harus berupa angka, tidak boleh karakter" data-validation-required-message="Harap isi nomor telepon dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Pendidikan</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="input_pendidikan_staf" id="input_pendidikan_staf" class="form-control" placeholder='Tulis pendidikan terakhir, seperti "SMK jurusan Mesin" atau "D4 Kesehatan"' required data-validation-required-message="Harap isi pendidikan terakhir dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Jabatan</label>
                                            <div class="col-md-10 controls">
                                                <select class="select2 custom-select col-12" style="width: 100%; height:36px;" name="input_jabatan_staf" id="input_jabatan_staf" required data-validation-required-message="Harap pilih bidang yang dikepalai oleh Staf">
                                                    <option></option>
                                                    <?php foreach ($data_jabatan as $row) { ?>
                                                        <option value="<?php echo $row->id_jabatan; ?>"><?= $row->nama_jabatan; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Seksi</label>
                                            <div class="col-md-10 controls">
                                                <select class="select2 custom-select col-12" style="width: 100%; height:36px;" name="input_seksi_staf" id="input_seksi_staf" required data-validation-required-message="Harap pilih bidang yang dikepalai oleh Staf">
                                                    <option></option>
                                                    <?php foreach ($data_seksi as $row) { ?>
                                                        <option value="<?php echo $row->id_seksi; ?>"><?= $row->nama_seksi; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Username</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="input_username_staf" id="input_username_staf" class="form-control" placeholder='' required data-validation-required-message="Harap isi username dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Password</label>
                                            <div class="col-md-10 controls">
                                                <input type="password" name="input_password_staf" id="input_password_staf" class="form-control" placeholder='' required data-validation-required-message="Harap isi password dari Staf">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="reset" class="btn btn-inverse">Cancel</button>
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
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Staf</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('Data_Staf/delete_pengguna'); ?>" method="post">
                                <form id="form_hapus" type="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <label><strong>Apakah anda yakin akan menghapus data staf tersebut?</strong></label>
                                        <input type="text" name="del_id_pengguna" id="del_id_pengguna" hidden>
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
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Staf</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('Data_Staf/update_pengguna'); ?>" method="post">
                                <form id="form_edit" type="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <input type="text" name="edt_id_pengguna" id="edt_id_pengguna">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="edt_nama_staf" id="edt_nama_staf" class="form-control" placeholder="" class="form-control" required data-validation-required-message="Harap isi nama lengkap Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">NIK</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="edt_nik_staf" id="edt_nik_staf" class="form-control" placeholder="" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Harus berupa angka, tidak boleh karakter" data-validation-required-message="Harap isi NIK dari Staf" minlength="16" maxlength="16">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">NIP</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="edt_nip_staf" id="edt_nip_staf" class="form-control" placeholder="" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Harus berupa angka, tidak boleh karakter" minlength="18" maxlength="18">
                                                <div class="form-control-feedback"><small>Tidak perlu diisi jika bukan PNS</small></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Alamat</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="edt_alamat_staf" id="edt_alamat_staf" class="form-control" placeholder="Tulis alamat lengkap seperti nama jalan, gedung dan lain-lain" required data-validation-required-message="Harap isi detail alamat dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10 controls">
                                                <select class="select2 form-control custom-select" required data-validation-required-message="Harap pilih alamat lengkap dari Staf" name="edt_kecamatan_staf" id="edt_kecamatan_staf" style="width: 100%; height:36px;">
                                                    <option></option>
                                                    <?php foreach ($data_alamat as $row) { ?>
                                                        <option value="<?php echo $row->id_kecamatan; ?>"><?= $row->nama_kecamatan, ", ", $row->nama_kabupaten, ", ", $row->nama_provinsi; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <div class="form-control-feedback"><small>Pilih kecamatan, kabupaten dan provinsi</small></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10 controls">
                                                <input type="email" name="edt_email_staf" id="edt_email_staf" class="form-control" placeholder="" required data-validation-required-message="Harap isi email dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Golongan</label>
                                            <div class="col-md-10 controls">
                                                <select class="select2 form-control custom-select" name="edt_gol_staf" id="edt_gol_staf" style="width: 100%; height:36px;">
                                                    <option></option>
                                                    <option value="Juru Muda (Gol. I a)">Juru Muda (Gol. I a)</option>
                                                    <option value="Juru Muda Tingkat I (Gol. I b)">Juru Muda Tingkat I (Gol. I b)</option>
                                                    <option value="Juru (Gol. I c)">Juru (Gol. I c)</option>
                                                    <option value="Juru Tingkat I (Gol. I d)">Juru Tingkat I (Gol. I d)</option>
                                                    <option value="Pengatur Muda(Gol. II a)">Pengatur Muda(Gol. II a)</option>
                                                    <option value="Pengatur Muda Tingkat I (Gol. II b)">Pengatur Muda Tingkat I (Gol. II b)</option>
                                                    <option value="Pengatur (Gol. II c)">Pengatur (Gol. II c)</option>
                                                    <option value="Pengatur Tingkat I(Gol. II d)">Pengatur Tingkat I(Gol. II d)</option>
                                                    <option value="Penata Muda (Gol. III a)">Penata Muda (Gol. III a)</option>
                                                    <option value="Penata Muda Tingkat I(Gol. III b)">Penata Muda Tingkat I(Gol. III b)</option>
                                                    <option value="Penata (Gol. III c)">Penata (Gol. III c)</option>
                                                    <option value="Penata Tingkat I(Gol. III d)">Penata Tingkat I(Gol. III d)</option>
                                                    <option value="Pembina (Gol. IV a)">Pembina (Gol. IV a)</option>
                                                    <option value="Pembina Tingkat I (Gol. IV b)">Pembina Tingkat I (Gol. IV b)</option>
                                                    <option value="Pembina Utama Muda (Gol. IV c)">Pembina Utama Muda (Gol. IV c)</option>
                                                    <option value="Pembina Utama Madya (Gol. IV d)">Pembina Utama Madya (Gol. IV d)</option>
                                                    <option value="Pembina Utama (Gol. IV e)">Pembina Utama (Gol. IV e)</option>
                                                </select>
                                                <div class="form-control-feedback"><small>Tidak perlu dipilih jika bukan PNS</small></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-md-10 controls">
                                                <input type="date" name="edt_tgl_lahir_staf" id="edt_tgl_lahir_staf" class="form-control" placeholder="" required data-validation-required-message="Harap isi email dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">No.Telp</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="edt_no_telp_staf" id="edt_no_telp_staf" class="form-control" placeholder="" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Harus berupa angka, tidak boleh karakter" data-validation-required-message="Harap isi nomor telepon dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Pendidikan</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="edt_pendidikan_staf" id="edt_pendidikan_staf" class="form-control" placeholder='Tulis pendidikan terakhir, seperti "SMK jurusan Mesin" atau "D4 Kesehatan"' required data-validation-required-message="Harap isi pendidikan terakhir dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Jabatan</label>
                                            <div class="col-md-10 controls">
                                                <input class="form-control" name="edt_jabatan_staf" id="edt_jabatan_staf" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Seksi</label>
                                            <div class="col-md-10 controls">
                                                <input class="form-control" name="edt_seksi_staf" id="edt_seksi_staf" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Username</label>
                                            <div class="col-md-10 controls">
                                                <input type="text" name="edt_username_staf" id="edt_username_staf" class="form-control" placeholder='' required data-validation-required-message="Harap isi username dari Staf">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Password</label>
                                            <div class="col-md-10 controls">
                                                <input type="password" name="edt_password_staf" id="edt_password_staf" class="form-control" placeholder='' required data-validation-required-message="Harap isi password dari Staf">
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

        $('#data_staf').on('click', '.item_edit', function() {
            $.ajax({
                url: "<?php echo base_url('Data_staf/get_where'); ?>",
                type: "POST",
                dataType: 'JSON',
                data: {
                    id_pengguna: $(this).data('product_code')
                },
                success: function(dataf) {
                    $('[name="edt_id_pengguna"]').val(dataf[0].id_pengguna);
                    $('[name="edt_nama_staf"]').val(dataf[0].nama_pengguna);
                    $('[name="edt_nik_staf"]').val(dataf[0].nik_pengguna);
                    $('[name="edt_nip_staf"]').val(dataf[0].nip_pengguna);
                    $('[name="edt_alamat_staf"]').val(dataf[0].alamat_pengguna);
                    $('[name="edt_email_staf"]').val(dataf[0].email_pengguna);
                    $('[name="edt_tgl_lahir_staf"]').val(dataf[0].tanggal_lahir_pengguna);
                    $('[name="edt_no_telp_staf"]').val(dataf[0].telepon_pengguna);
                    $('[name="edt_pendidikan_staf"]').val(dataf[0].pendidikan);
                    $('[name="edt_jabatan_staf"]').val(dataf[0].nama_jabatan);
                    $('[name="edt_seksi_staf"]').val(dataf[0].nama_seksi);
                    $('[name="edt_username_staf"]').val(dataf[0].username_pengguna);

                    // Set selected
                    $('#edt_kecamatan_staf').val(dataf[0].id_kecamatan);
                    $('#edt_kecamatan_staf').select2().trigger('change');

                    $('#edt_gol_staf').val(dataf[0].golongan_pengguna);
                    $('#edt_gol_staf').select2().trigger('change');
                }
            })
        });

        $('#data_staf').on('click','.item_delete', function(){
            let product_code = $(this).data('product_code');
            $('[name="del_id_pengguna"]').val(product_code);
        })

        $('#tabel_data_staf').DataTable({
            "ajax": {
                "url": "http://localhost/nts/data_staf/select_all",
                "method": "GET"
            },
            "columns": [{
                    "data": "nama_pengguna",
                    "width": "30%"
                },
                {
                    "data": "telepon_pengguna",
                    "width": "15%"
                },
                {
                    "data": "nik_pengguna",
                    "width": "15%"
                },
                {
                    "data": "golongan_pengguna",
                    "width": "24%"
                },
                {
                    "data": "id_pengguna",
                    "width": "16%",
                    render: function(data, type, row) {
                        return '<a href="javascript:void(0);" data-toggle="modal"  data-target="#Modal_Edit" class="btn btn-info btn-sm item_edit" data-product_code="' + row.id_pengguna + '">Edit</a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-toggle="modal" data-target="#Modal_Hapus" data-product_code="' + row.id_pengguna + '">Hapus</a>';
                    },
                    "orderable": false
                }
            ]
        });

    });















        // var dataset = [
        //     ["A", "B", "C", "D", "E", "F", "F"],
        //     ["D", "S", "W", "O", "D", "S", "F"],
        //     ["R", "X", "E", "L", "E", "D", "F"],
        //     ["W", "Y", "K", "S", "W", "P", "F"],
        //     ["G", "J", "O", "T", "Z", "F", "F"]
        // ];
        // ! function(window, document, $) {
        //     "use strict";
        //     $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        // }(window, document, jQuery);
        //
        // $(document).ready(function() {
        //     $(".select2").select2({
        //         placeholder: "Pilih salah satu"
        //     });
        //     $('#tabel_data_staf').DataTable({
        //         "ajax": {
        //             "url": "http://localhost/nts/data_staf/select_all",
        //             "method": "GET"
        //         },
        //         "columns": [{
        //                 "data": "nama_pengguna",
        //                 "width": "30%"
        //             },
        //             {
        //                 "data": "telepon_pengguna",
        //                 "width": "15%"
        //             },
        //             {
        //                 "data": "nik_pengguna",
        //                 "width": "15%"
        //             },
        //             {
        //                 "data": "golongan_pengguna",
        //                 "width": "24%"
        //             },
        //             {
        //                 "data": "id_pengguna",
        //                 "width": "16%",
        //                 render: function(data, type, row) {
        //                     return '<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_Edit" class="btn btn-info btn-sm item_edit" data-product_code="' + row.id_pengguna + '">Edit</a>' + ' ' +
        //                         '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-toggle="modal" data-target="#Modal_Hapus" data-product_code="' + row.id_pengguna + '">Hapus</a>';
        //                 },
        //                 "orderable": false
        //             }
        //         ]
        //     });
        // });
    </script>

</body>

</html>
