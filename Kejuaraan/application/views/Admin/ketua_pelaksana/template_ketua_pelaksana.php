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

    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>assets/sb_admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>assets/sb_admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/sb_admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/sb_admin/dist/css/sb-admin-2.css" rel="stylesheet"> 


     <!-- SWEET ALERT -->
    <link href="<?php echo base_url()?>assets/sweetalert/sweetalert.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/sb_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
  
    @keyframes example {
        from {  left: -30px;
                top: -30px;
                opacity: 0;
            }
         to {   left: 0px;
                top: 0px;
                opacity: 1;
            }
    }

    /* The element to apply the animation to */
    .animation-wrapper{
        position: relative;
        animation-name: example;
        animation-duration: 0.6s;
    } 
    .logo-ts{
        background-image: url(<?php echo base_url('assets/images/login_ts.png') ?>);
        background-position: center center;
        filter: drop-shadow(0px 4px 4px white);
        background-color: #ed3237;
        background-size: contain;
        height: 234px;
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




    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Ketua Pelaksana</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#logout" onclick="logout()"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#general_setting" onclick="load_general_setting()"><i class="fa fa-wrench fa-fw"></i> General Setting</a>
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        

         <div id="page-wrapper">
          <?php 
             $this->load->view($main_view);
         ?> 
         </div>

    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/sb_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/sb_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
   
   <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>assets/sb_admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/sb_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/sb_admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/sb_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/sb_admin/dist/js/sb-admin-2.js"></script>

    <!-- SWEET ALERT -->
    <script src="<?php echo base_url()?>assets/sweetalert/sweetalert.js"></script>

     <script>


        function initialize_general_setting_datatables(){
            $('#tabel_kategori_lomba').DataTable({
                responsive: true
            });
            $('#tabel_kategori_usia').DataTable({
                responsive: true
            });
            $('#tabel_kategori_kelas_tanding').DataTable({
                responsive: true
            });
        }
        function logout(){
            $.post('<?php echo base_url('index.php/Admin/logout') ?>', function(data, textStatus, xhr) {
                var e = JSON.parse(data)
                if (e.status == "berhasil") {
                    swal({
                      title: "Thank you!",
                      text: "Logging out...",
                      imageUrl: '<?php echo base_url()?>assets/sweetalert/thumbs-up.jpg'
                    });
                                        
                    setTimeout(function(){ window.location.href = window.location.href = "<?php echo base_url('index.php/Admin') ?>"; }, 2000)

                }else{
                    swal('Error', 'Error logging out. Please contact system administrator', 'error');
                }
            });
        }

        function load_general_setting(){
            $('#page-wrapper').load('<?php echo base_url('index.php/Admin/general_setting_page') ?>',
                function(){
            });
            
        }
            initialize_general_setting_datatables();

       
    </script>

</body>

</html>
