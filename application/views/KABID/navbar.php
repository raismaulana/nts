<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url("KABID/Beranda_kabid"); ?>">
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
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mdi mdi-account-circle mdi-24px"></span> &nbsp;<span class="hidden-md-down">Halo, <?php echo $this->session->userdata('username'); ?> &nbsp;<i class="ti-angle-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        <!-- text-->
                        <a href="<?php echo base_url("KABID/Profil_kabid"); ?>" class="dropdown-item"><i class="ti-user"></i> Profil Saya</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="<?php echo base_url("Setting/load_kabid"); ?>" class="dropdown-item"><i class="ti-settings"></i> Pengaturan Akun</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="<?php echo base_url("auth/logout"); ?>" class="dropdown-item"><i class="ti-power-off"></i> Keluar</a>
                        <!-- text-->
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End User Profile -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>

<!-- ============================================================== -->
<!-- End Topbar header -->