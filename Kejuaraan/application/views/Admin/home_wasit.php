<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kejuaraan</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/ts_favicon.ico') ?>">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/sb_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/sb_admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/sb_admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/sb_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    .logo-ts{
        background-image: url(<?php echo base_url('assets/images/home_wasit.jpg') ?>);
        background-position: center center;
        background-size: contain;
        height: 246px;
        background-repeat: no-repeat;
    }
    .login-container{
        overflow: auto;
        background-color: #F8F8F8;
        border-radius: 20px;
        box-shadow: 0px 5px 5px #E9E9E9;
        padding: 0px !important;
        border: 2px solid #E9E7E7;
    }
    .btn-custom {
      color: #fff;
      background-color: #ed3237;
      border-color: #D82E33;
    }

    .btn-custom:hover {
      color: #fff;
      background-color: #D82D32;
      border-color: #D82E33;
    }

    .btn-custom:focus, .btn-custom.focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .btn-custom.disabled, .btn-custom:disabled {
      color: #fff;
      background-color: #ed3237;
      border-color: #ed3237;
    }

    .btn-custom:not(:disabled):not(.disabled):active, .btn-custom:not(:disabled):not(.disabled).active,
    .show > .btn-custom.dropdown-toggle {
      color: #fff;
      background-color: #ed3237;
      border-color: #ed3237;
    }

    .btn-custom:not(:disabled):not(.disabled):active:focus, .btn-custom:not(:disabled):not(.disabled).active:focus,
    .show > .btn-custom.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .form-control:focus {
      color: #495057;
      background-color: #fff;
      border-color: #D82D32;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(216, 45, 40, 0.25);
    }
</style>
</head>

<body>

    <div class="container-fluid">
        <div class="row" style="margin-top: 150px">
            <div class="login-container col-lg-6 col-md-6 col-lg-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin: 25px 0px;">
                    <form role="form">
                        <fieldset>
                            <p style="font-weight: 500;font-size: 1.2em;">Masukkan Kode Pertandingan</p>
                            <div class="form-group">
                                <input class="form-control" placeholder="Kode Pertandingan" name="password" value="" type="password">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <a href="index.html" class="btn btn-lg btn-custom btn-block">Mulai</a>
                        </fieldset>
                    </form>
                </div>

                <div class="col-lg-6 col-md-6 hidden-sm hidden-xs logo-ts">
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/sb_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/sb_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/sb_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/sb_admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
