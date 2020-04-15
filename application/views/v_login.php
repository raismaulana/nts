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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(). 'assets/images/favicon.png'?>">
    <title>SPKH | Login</title>
    <!-- page css -->
    <link href="<?php echo base_url(). 'assets/node_modules/register-steps/steps.css'?>" rel="stylesheet">
    <link href="<?php echo base_url(). 'assets/dist/css/pages/register3.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(). 'assets/dist/css/style.min.css'?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Login admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="step-register">
        <div class="register-box">
            <div class="">
                <!-- multistep form -->
                <form id="msform">
                    <!-- fieldsets -->
                    <fieldset>
                    <a href="javascript:void(0)" class="text-center m-b-40"><img src="<?php echo base_url(); ?>assets/images/logo-sidoarjo.png" style="width: 55px; height: 55px;" alt="Home" /><br/><img src="<?php echo base_url(); ?>assets/images/logo-tulisan.png" style="height: 40px;" alt="Home" /></a>
                        <input type="text" name="username" placeholder="Username" />
                        <input type="password" name="pass" placeholder="Password" />
                        <input type="button" name="submit" class="submit action-button" value="Login" />
                    </fieldset>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'assets/node_modules/jquery/jquery-3.2.1.min.js'?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url().'assets/node_modules/popper/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/node_modules/bootstrap/dist/js/bootstrap.min.js'?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(). 'assets/node_modules/register-steps/jquery.easing.min.js'?>"></script>
    <script src="<?php echo base_url(). 'assets/node_modules/register-steps/register-init.js'?>"></script>
   
</body>

</html>