<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ERPCi</title>
        <link rel="icon" href="<?php echo base_url('jpg/logo/EmSoftLogo_32_32.ico'); ?>">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css'); ?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css'); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url('plugins/iCheck/flat/blue.css'); ?>">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo base_url('plugins/morris/morris.css'); ?>">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url('plugins/datepicker/datepicker3.css'); ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url('plugins/daterangepicker/daterangepicker.css'); ?>">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
         <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">-->

    </script>
</head>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url('index.php/Welcome/index'); ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>ERP</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Home</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo base_url('jpg/logo/EmSoftLogo_29_32.png'); ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $user ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                </br>
                </br>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">PANEL ADMINISTRACYJNY</li>
                    <li class=" treeview">
                        <a href="#">
                            <i class="fa fa-industry"></i> <span>Firma</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?php echo base_url('index.php/Panel/daneFirmy'); ?>"><i class="fa fa-circle-o"></i> Dane firmy</a></li>

                        </ul>
                    </li>
                    <li class=" treeview">
                        <a href="#">
                            <i class="fa fa-gg"></i> <span>Program</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?php echo base_url('index.php/Uzytkownicy/index') ?>"><i class="fa fa-circle-o"></i> Użytkownicy</a></li>
                            <li><a href="<?php echo base_url('index.php/Uzytkownicy/nowy') ?>"><i class="fa fa-circle-o"></i> Nowy użytkownik</a></li>
                            <li><a href="<?php echo base_url('index.php/Rok/index') ?>"><i class="fa fa-circle-o"></i> Nowy Rok księgowy</a></li>
                            <li><a href="<?php echo base_url('index.php/Miesiac/index') ?>"><i class="fa fa-circle-o"></i> Zmień miesiąc księgowy</a></li>

                        </ul>
                    </li>
                    <li class=" treeview">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Księgi</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?php echo base_url('index.php/BazaSMS/index'); ?>"><i class="fa fa-circle-o"></i> Wprowadzanie dokumetów</a></li>
                            <li><a href="<?php echo base_url('index.php/BazaSMSNewUser/index'); ?>"><i class="fa fa-circle-o"></i> Dokumenty zaksięgowane</a></li>
                            <li><a href="<?php echo base_url('index.php/BazaSMSNewUser/index'); ?>"><i class="fa fa-circle-o"></i> PKPiR</a></li>
                            <li><a href="<?php echo base_url('index.php/BazaSMSNewUser/index'); ?>"><i class="fa fa-circle-o"></i> Rejestry VAT</a></li>
                            <li><a href="<?php echo base_url('index.php/BazaSMSNewUser/index'); ?>"><i class="fa fa-circle-o"></i> Ewidencja przychodu</a></li>
                            <li><a href="<?php echo base_url('index.php/BazaSMSNewUser/index'); ?>"><i class="fa fa-circle-o"></i> Ewidencja sprzedaży</a></li>
                            <li><a href="<?php echo base_url('index.php/BazaSMSNewUser/index'); ?>"><i class="fa fa-circle-o"></i> Ewidencja najmu</a></li>
                            <li><a href="<?php echo base_url('index.php/BazaSMSNewUser/index'); ?>"><i class="fa fa-circle-o"></i> Ewidencja pojazdów</a></li>
                            <li><a href="<?php echo base_url('index.php/BazaSMSNewUser/index'); ?>"><i class="fa fa-circle-o"></i> Ewidencja wyposażenia</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-database"></i> <span>Magazyn</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?php echo base_url('index.php/WprowadzanieDokumentuMagazynowego/index') ?>"><i class="fa fa-circle-o"></i> Wprowadzanie dokumentów</a></li>
                            <li><a href="<?php echo base_url('index.php/WystawianieFaktur/index'); ?>"><i class="fa fa-circle-o"></i> Wystawianie faktur</a></li>
                            <li><a href="<?php echo base_url('index.php/CalendarSMS/index'); ?>"><i class="fa fa-circle-o"></i> Łączenie WZ w jedną fakturę</a></li>
                            <li><a href="<?php echo base_url('index.php/CalendarSMS/index'); ?>"><i class="fa fa-circle-o"></i> Faktura z dok. mag.</a></li>
                            <li><a href="<?php echo base_url('index.php/CalendarSMS/index'); ?>"><i class="fa fa-circle-o"></i> Paragon z dok. mag.</a></li>
                            <li><a href="<?php echo base_url('index.php/CalendarSMS/index'); ?>"><i class="fa fa-circle-o"></i> Zestawienie faktur</a></li>
                            <li><a href="<?php echo base_url('index.php/CalendarSMS/index'); ?>"><i class="fa fa-circle-o"></i> Zestawienie dok. mag.</a></li>
                            <li><a href="<?php echo base_url('index.php/CalendarSMS/index'); ?>"><i class="fa fa-circle-o"></i> Dokumenty korygujące</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-industry"></i> <span>Produkcja</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('index.php/MailBox/index') ?>"><i class="fa fa-circle-o"></i> Wprowadzanie produkcji</a></li>
                                <li><a href="<?php echo base_url('index.php/MailBox1/index') ?>"><i class="fa fa-circle-o"></i> Normy produkcji</a></li>
                                <li><a href="<?php echo base_url('index.php/MailBox2/index') ?>"><i class="fa fa-circle-o"></i> Zestwienie produkcji</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Towary</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('index.php/ArkuszInwentaryzacyjny/index') ?>"><i class="fa fa-circle-o"></i> Arkusz inwentaryzacyjny</a></li>
                                <li><a href="<?php echo base_url('index.php/KartotekiTowarow/index') ?>"><i class="fa fa-circle-o"></i> Kartoteki towarów</a></li>
                                <li><a href="<?php echo base_url('index.php/SpisZNatury/index') ?>"><i class="fa fa-circle-o"></i> Spis z natury</a></li>
                                <li><a href="<?php echo base_url('index.php/Inwentaryzacja/index') ?>"><i class="fa fa-circle-o"></i> Inwentaryzacja</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class=" fa fa-wrench"></i> <span>Środki trwałe</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>

                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/StatystykiMailing/index'); ?>"><i class="fa fa-circle-o"></i> Bilans otwarcia na następny rok</a></li>
                            <li><a href="<?php echo base_url('index.php/StatystykiSMS/index'); ?>"><i class=" fa fa-circle-o"></i> Odpisy miesięczne amortyzacji</a></li>
                            <li><a href="<?php echo base_url('index.php/StatystykiSMS/index'); ?>"><i class=" fa fa-circle-o"></i> Kartoteka środków trwałych</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class=" fa fa-book"></i> <span>Kartoteki</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>

                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/KartotekiZaplaty/index'); ?>"><i class="fa fa-circle-o"></i> Formy zapłaty</a></li>
                            <li><a href="<?php echo base_url('index.php/KartotekiTransport/index'); ?>"><i class=" fa fa-circle-o"></i> Formy transportu</a></li>
                            <li><a href="<?php echo base_url('index.php/KartotekiJednostkiMiary/index'); ?>"><i class=" fa fa-circle-o"></i> Jednostki miary</a></li>
                            <li><a href="<?php echo base_url('index.php/KartotekiKontrahent/index'); ?>"><i class=" fa fa-circle-o"></i> Kontrahenci</a></li>
                            <li><a href="<?php echo base_url('index.php/KartotekiMagazyn/index'); ?>"><i class=" fa fa-circle-o"></i> Magazyny</a></li>
                            <li><a href="<?php echo base_url('index.php/KartotekiKontaKsiegowe/index'); ?>"><i class=" fa fa-circle-o"></i> Konta księgowe</a></li>
                        </ul>
                    </li>


                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="content">
            <section class="content">


                <?php echo $content ?> 



            </section>
            <!-- /.content -->
        </div>

        <!-- /.content -->

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.8
            </div>
            <strong>Copyright &copy; 2016-<?php echo date('Y'); ?> <a href="https://emsoft.net.pl">EmSoft.net.pl</a>.</strong> Wszelkie prawa
            zastrzeżone.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('bower_components/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('dist/js/app.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('dist/js/demo.js'); ?>"></script>
    <!-- page script -->
    <script type="text/javascript" src="<?php echo base_url('dist/js/jquery.maskedinput.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/js/datepicker.pl.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/js/jquery-ean13.js');?>"></script>
    
</body>
</html>

