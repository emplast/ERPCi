<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>ERPCi</title>
        <link rel="shortcut icon" href="<?php echo base_url('jpg/logo/EmSoftLogo_32_32.ico'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
       
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;

            }

            #nav_1{
                border-radius: 0px;
            }
            
           
        </style>
    </head>
    <body>

        <header>
            <nav id="nav_1" class="navbar navbar-inverse">
                <br/>
                <div class="collapse navbar-collapse">
                    <div class="col-sm-1">
                        <div class="col-sm-3"></div>
                        <img src="<?php echo base_url('jpg/logo/EmSoftLogo_29_32.png'); ?>" width="32" height="32">
                    </div>
                    <div class="col-sm-2">

                        <h5><ul class="navbar navbar-nav">
                                <li><a href="<?php echo base_url('index.php/Panel/index')?>">Księgowość EmSoft</a></li>
                            </ul>
                        </h5>
                    </div>
                    <div class="col-sm-5">
                        <h5>
                            <ul class="navbar navbar-nav">
                                <li style="width: 70px;"><a href="<?php echo base_url('index.php/Welcome/index');?>">Home</a></li>
                                <li style="width: 100px;"><a href="#">O programie</a></li>
                                <li style="width: 100px;"><a href="#">O nas</a></li> 
                                <li style="width: 90px;"><a href="<?php echo base_url('index.php/Kontakt/index');?>" id="kontakt">KONTAKT</a></li>
                            </ul>
                        </h5>
                    </div>
                    <div class="col-sm-3">
                        <h5>
                            <ul class="navbar navbar-nav pull-right" id="ul_2_nav">
                                <li style="width: 70px;" id="li1"><a href="<?php echo base_url('index.php/Login/index') ?>">Zaloguj</a></li>
                                <li><a href="<?php echo base_url('index.php/NowyUzytkownik/index'); ?>" id="li2">Nowa firma</a></li>
                            </ul>
                            <ul class="navbar navbar-nav pull-right" id="ul_3_nav" style="display:none">
                                <li style="width: 150px;"><a href="#">Zalogowany: <?php echo $user ?></a></li>
                                <li><a href="<?php echo base_url('index.php/Logout/index')?>">Wyloguj</a></li>
                            </ul>
                        </h5>
                    </div>
                </div>
                </div>
            </nav>
        </header>
        <div class="container-fluid"style="min-height: 1200px">
            <?php echo $content; ?>

        </div>
        <footer style="bottom: 10px;"class="container text-center">
            <hr>
            <p>&copy;&nbsp;2016-<?php echo date('Y'); ?>&nbsp;<i><b>emsoft.net.pl</b></i> Wszelkie prawa zastrzeżone</p>
        </footer>
        <script type="text/javascript">
            
        </script>

    </body>
</html>