<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>ERPCi</title>
        <link rel="shortcut icon" href="<?php echo base_url('jpg/logo/EmSoftLogo_32_32.ico'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('dist/js/jquery.maskedinput.js') ?>"></script>
    </head>
    <style type="text/css">
        span{
            color:red;
            font-size: 18px;
        }
    </style>
    <body>    
        <div class="row">
            <div class="col-lg-12" style="height: 150px;"></div>
        </div>
        <div class="container"style="background: #e6e8ed">
           
            <form action="dodajFirme" class="form-horizontal" id="form" method="POST">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-9">
                        <br/><br/>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6 alert alert-danger"  id="alert"style="display: none;">
                                <h4 class="text-center" id="h_alert"></h4>
                            </div>
                        </div>
                        <div id="exTab1"class="tab-content" >
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#1a" data-toggle="tab">Dane podstawowe</a></li>
                                <li><a href="#2a" data-toggle="tab">Adres siedziby</a></li>
                                <li><a href="#3a" data-toggle="tab">Dane Magazynu</a></li>
                                <li><a href="#4a" data-toggle="tab">Rozliczenia Amortyzacji</a></li>
                            </ul>
                            <div class="tab-content clearfix"> 

                                <!--Moduł dane ogólne-->


                                <div class="tab-pane active" id="1a" >
                                    <br/><br/>
                                    <h3 class="text-center">Dane podstawowe</h3>
                                    <p class="text-center"><span>Pola oznaczone czerwoną gwiazdką są wymagalne</span></p>
                                    <br/>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="nazwa_skrocona"><span>*&nbsp;&nbsp;</span>Nazwa skrócona:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="part_1" value="<?php echo $data['nazwa']; ?>" id="nazwa_skrocona"disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <label for="nazwa_pelna"><span>*&nbsp;&nbsp;</span>Nazwa pełna:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="part_2" id="nazwa_pelna">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <label for="nip"><span>*&nbsp;&nbsp;</span>NIP:</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <img src="<?php echo base_url('jpg/flags/pl.png'); ?>" id="img">
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control" id="nip_eu" name="part_3">
                                                <option value="0">PL</option>
                                                <option value="1">EU</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" id="nip" name="part_4" class="form-control"autocomplete="off"maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label><span>*&nbsp;&nbsp;</span>REGON:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="regon" name="part_5" class="form-control"autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label><span>*&nbsp;&nbsp;</span>Urząd Skarbowy:</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <select class="form-control" id="urzad_skarbowy" name="part_6">
                                                <?php
                                                $i = 0;
                                                foreach ($urzedy as $value):
                                                    ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $value; ?></option>
                                                    <?php
                                                    $i++;
                                                endforeach;
                                                ?>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label><span>*&nbsp;&nbsp;</span>Nazwa Banku:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="nazwa_banku" name="part_7" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label><span>*&nbsp;&nbsp;</span>Numer konta:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="numer_konta" name="part_8" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>&nbsp;&nbsp;&nbsp;&nbsp;Nazwa Banku:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="nazwa_banku" name="part_9" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>&nbsp;&nbsp;&nbsp;&nbsp;Numer konta:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="numer_konta" name="part_10" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>&nbsp;&nbsp;&nbsp;&nbsp;Nazwa Banku:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="nazwa_banku" name="part_11" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>&nbsp;&nbsp;&nbsp;&nbsp;Numer konta:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="numer_konta" name="part_12" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>&nbsp;&nbsp;&nbsp;&nbsp;Nazwa Banku:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="nazwa_banku" name="part_13" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>&nbsp;&nbsp;&nbsp;&nbsp;Numer konta:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="numer_konta" name="part_14" class="form-control">
                                        </div>
                                    </div>
                                    <br/><br/><br/>
                                    <h3 class="text-center">Sposób rozliczenia z fiskusem</h3>

                                    <hr><br/>
                                    <h4 class="text-center">Rozliczenie VAT</h4>
                                    <br/>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="vat">Podatnik rozlicza VAT</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_15" id="vat" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="vat_kwartal">Podatnik rozlicza VAT co kwartał</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_16" id="vat_kwartal" disabled value="1">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="vat_miesiac">Podatnik rozlicza VAT co miesiąc</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_17" id="vat_miesiac" disabled value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <br/><br/>
                                        <h4 class="text-center">Rozliczenie Podatku Dochowego</h4>
                                        <br/>
                                        <div class="col-sm-4">
                                            <label for="pkpir">Podatnik prowadzi PKPiR</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_18" id="pkpir"value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="pkpir_kwartal">Podatnik rozlicza się co kwartał z PKPiR</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_19" id="pkpir_kwartal" disabled value="1">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="pkpir_miesiac">Podatnik rozlicza się co miesiąc z PKPiR</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_20" id="pkpir_miesiac" disabled value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="ryczalt">Ryczałt Ewidencjonowany</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_21" id="ryczalt" value="1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="ryczalt_kwartal">Podatnik rozlicza się co kwartał z Ryczałtu</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_22" id="ryczalt_kwartal"disabled value="1">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="ryczalt_miesiac">Podatnik rozlicza się co miesiąc z Ryczałtu</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_23" id="ryczalt_miesiac"disabled value="1">
                                        </div>
                                    </div>
                                </div>

                                <!--Moduł dane teleadresowe-->

                                <div class="tab-pane" id="2a" >
                                    <br/><br/>
                                    <h3 class="text-center">Dane teleadresowe</h3>
                                    <p class="text-center"><span>Pola oznaczone czerwoną gwiazdką są wymagane</span></p>
                                    <br/>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="kraj"><span>*&nbsp;&nbsp;</span>Kraj:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="kraj" name="part_24" value="Polska" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="wojewodztwo"><span>*&nbsp;&nbsp;</span>Województwo:</label>
                                        </div>
                                        <div class="col-sm-4">

                                            <select class="form-control" id="wojewodztwo"name="part_25">
                                                <option value="0">Województwo</option>
                                                <option value="1">DOLNOŚLĄSKIE</option>
                                                <option value="2">KUJAWSKO-POMORSKIE</option>
                                                <option value="3">LUBELSKIE</option>
                                                <option value="4">LUBUSKIE</option>
                                                <option value="5">ŁÓDZKIE</option>
                                                <option value="6">MAŁOPOLSKIE</option>
                                                <option value="7">MAZOWIECKIE</option>
                                                <option value="8">OPOLSKIE</option>
                                                <option value="9">PODKARPADZKIE</option>
                                                <option value="10">PODLASKIE</option>
                                                <option value="11">POMORSKIE</option>
                                                <option value="12">ŚLĄSKIE</option>
                                                <option value="13">ŚWIĘTOKRZYSKIE</option>
                                                <option value="14">WARMIŃSKO-MAZURSKIE</option>
                                                <option value="15">WIELKOPOLSKIE</option>
                                                <option value="16">ZACHODNIOPOMORSKIE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="powiat"><span>*&nbsp;&nbsp;</span>Powiat:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="powiat" name="part_26" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="gmina"><span>*&nbsp;&nbsp;</span>Gmina:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="gmina" name="part_27" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="miejscowosc"><span>*&nbsp;&nbsp;</span>Miejscowość:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="miejscowosc" name="part_28" value="<?php echo $data['miejscowosc'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="poczta"><span>*&nbsp;&nbsp;</span>Poczta:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="poczta" name="part_29" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="kod_pocztowy"><span>*&nbsp;&nbsp;</span>Kod pocztowy:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="kod_pocztowy" name="part_30" value="<?php echo $data['kod']; ?>"class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="ulica"><span>*&nbsp;&nbsp;</span>Ulica:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="ulica" name="part_31" value="<?php echo $data['ulica']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <label for="nr_domu"><span>*&nbsp;&nbsp;</span>Numer domu:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" id="nr_domu" name="part_32" value="<?php echo $data['nr_lokalu']; ?>" class="form-control">
                                        </div>

                                        <div class="col-sm-2">
                                            <label for="nr_lokalu">&nbsp;Numer lokalu:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" id="nr_lokalu" name="part_33" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="fax">&nbsp;&nbsp;&nbsp;&nbsp;Numer Tel/Fax:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="fax" name="part_34" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="telefon">&nbsp;&nbsp;&nbsp;&nbsp;Numer komórkowego:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="telefon" name="part_35" value="<?php echo $data['nr_telefonu']; ?>"class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="fax">&nbsp;&nbsp;&nbsp;&nbsp;E-mail:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="email" id="fax" name="part_36" value="<?php echo $data['email']; ?>" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <!--Moduł Magazyn-->

                                <div class="tab-pane" id="3a" style="background: #e6e8ed">
                                    <br/><br/>
                                    <h3 class="text-center">Dane modułu magazyn</h3>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="cena_miejce_po_przecinku">Cena za jednostkę miary z dokładnością:</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <?php echo form_input(array('type' => 'number', 'id' => 'cena_miejsce_po_przecinku', 'value' => 2, 'min' => 0, 'max' => 2, 'name' => 'part_37', 'class' => 'form-control')); ?> 
                                        </div>
                                        <div class="col-sm-3">
                                            <label>miejsc po przecinku</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="jednostka_miejce_po_przecinku">Jednostki miary z dokładnościa do:</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <?php echo form_input(array('type' => 'number', 'id' => 'jednostka_miejsce_po_przecinku', 'value' => 0, 'min' => 0, 'max' => 2, 'name' => 'part_38', 'class' => 'form-control')); ?> 
                                        </div>
                                        <div class="col-sm-3">
                                            <label>miejsc po przecinku</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="produkcja_miejce_po_przecinku">Jednostki miar przy produkcji z dokładnością do:</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <?php echo form_input(array('type' => 'number', 'id' => 'produkcja_miejsce_po_przecinku', 'value' => 0, 'min' => 0, 'max' => 2, 'name' => 'part_39', 'class' => 'form-control')); ?> 
                                        </div>
                                        <div class="col-sm-3">
                                            <label>miejsc po przecinku</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="numeracja">Preferowana numeracja:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <?php
                                            echo form_dropdown(array('id' => 'numeracja', 'name' => 'part_40', 'class' => 'form-control'), array('Wspólna dla całego roku ',
                                                'Odrębna dla każdego miesiąca'))
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="magazyn">Magazyn domyślny:</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" id="magazyn" name="part_41" class="form-control" value="1">
                                        </div>
                                        <div class="col-sm-1">
                                            <p for="symbol">&nbsp;&nbsp;&nbsp;/</p>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" id="symbol" name="part_42" class="form-control"value="A">
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="nazwa">Nazwa:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="symbol" name="part_43" class="form-control" value="Magazyn podstawowy">
                                        </div>
                                    </div>
                                    <br/><br/>
                                    <h3 class="text-center">Wydruki modułu magazyn</h3>
                                    <br/>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="czcionka">Wielkość czcionki w wydrukach:</label>
                                        </div>
                                        <div class="col-sm-3">

                                            <select class="form-control" id="czcionka" name="part_44">
                                                <option value="0">Mała</option>
                                                <option value="1">Średnia</option>
                                                <option value="2">Duża</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="drukuj_index">W fakturze przed nazwą drukuj indeks:</label> 
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_45" id="drukuj_index" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="drukuj_wz">Wydrukuj informację o WZ na fakturze:</label> 
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_46" id="drukuj_wz" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="drukuj_cene_brutto_netto">Na fakturach drukuj cenę BRUTTO/NETTO:</label> 
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_47" id="drukuj_cene_brutto_netto" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="drukuj_rabat">Na fakturach drukuj informację o rabacie:</label> 
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" name="part_48" id="drukuj_rabat" value="1">
                                        </div>
                                    </div>
                                    <br/><br/>
                                    <h3 class="text-center">Informacje o sprzedaży:</h3>
                                    <br/>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="sprzedawaj_brutto">Sprzedawaj w cenach BRUTTO:</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="sprzedawaj_brutto" name="part_49" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="cena_narzut">Ustal Cenę sprzedaży 1 według narzutu:</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="cena_narzut" name="part_50" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="cena_marza">Ustalaj ceny sprzedaży poniżej według podanej marży:</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="cena_marza" name="part_51" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="cena_I">Cena sprzedaży I:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" id="cena_I" name="part_52" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="cena_II">Cena sprzedaży II:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" id="cena_II" name="part_53" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="cena_III">Cena sprzedaży III:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" id="cena_III" name="part_54" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="cena_IV">Cena sprzedaży IV:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" id="cena_IV" name="part_55" class="form-control">
                                        </div>
                                    </div>
                                    <br/><br/>
                                    <h3 class="text-center">Inne</h3>
                                    <br/>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="czlon">Trzeci człon numeru faktury:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" id="czlon" name="part_56" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="stopka">Stopka faktury:</label>
                                        </div>
                                        <div class="col-sm-5">
                                            <textarea class="form-control" id="stopka"rows="10" name="part_57"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="4a" style="background: #e6e8ed">
                                    <br/><br/>
                                    <h3 class="text-center">Amortyzacja</h3>
                                    <br/>
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label for="cena_marza">Środki Trwałe uporządkowane według Numeru Inwentarzowego:</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="cena_marza" name="part_58" value="1">
                                        </div>
                                    </div> 
                                </div>


                            </div>
                        </div>

                    </div>
                </div> <br/><br/><br/>
                <input type="button" class="btn btn-success" id="zapisz" value="Zapisz i przejdź dalej" style="margin-left: 50px;">

                <br/><br/><br/>
            </form>
        </div>



        <script type="text/javascript">
//            vat początek checked i pkpir checked
            $(function () {
                $('#vat').prop('checked', true);
                document.getElementById('vat').checked ?
                        $('#vat_kwartal,#vat_miesiac').prop('disabled', false) :
                        $('#vat_kwartal,#vat_miesiac').prop('disabled', true);
                document.getElementById('vat').checked ?
                        $('#vat_miesiac').prop('checked', true) :
                        $('#vat_kwartal,#vat_miesiac').prop('checked', false);
                $('#pkpir').prop('checked', true);
                if (document.getElementById('pkpir').checked) {
                    $('#ryczalt').prop('checked', false);
                    $('#pkpir_miesiac,#pkpir_kwartal').prop('disabled', false);
                    $('#ryczalt').prop('disabled', true);
                    $('#ryczalt_miesiac ,#ryczalt_kwartal').prop('checked', false);
                    $('#pkpir_miesiac').prop('checked', true);
                } else {
                    $('#pkpir_miesiac,#pkpir_kwartal').prop('disabled', true);
                    $('#pkpir_miesiac,#pkpir_kwartal').prop('checked', false);
                    $('#ryczalt').prop('disabled', false);

                }
            });

//            nip_eu change
            $(function () {
                $('#nip_eu').change('click', function () {
                    var a = $('#nip_eu').val();
                    if (a == 0) {
                        $('#img').attr('src', '<?php echo base_url('jpg/flags/pl.png'); ?>');
                    } else if (a == 1) {
                        $('#img').attr('src', '<?php echo base_url('jpg/flags/europeanunion.png'); ?>');
                    }
                });
            });


//            vat click , pkpir click, ryczalt click
            $(function () {
                $('#vat').on('click', function () {
                    document.getElementById('vat').checked ?
                            $('#vat_kwartal,#vat_miesiac').prop('disabled', false) :
                            $('#vat_kwartal,#vat_miesiac').prop('disabled', true);
                    document.getElementById('vat').checked ?
                            $('#vat_miesiac').prop('checked', true) :
                            $('#vat_kwartal,#vat_miesiac').prop('checked', false);

                });

                $('#pkpir').on('click', function () {
                    if (document.getElementById('pkpir').checked) {
                        $('#ryczalt').prop('checked', false);
                        $('#pkpir_miesiac,#pkpir_kwartal').prop('disabled', false);
                        $('#ryczalt_miesiac ,#ryczalt_kwartal').prop('checked', false);
                        $('#pkpir_miesiac').prop('checked', true);
                    } else {
                        $('#pkpir_miesiac,#pkpir_kwartal').prop('disabled', true);
                        $('#pkpir_miesiac,#pkpir_kwartal').prop('checked', false);
                        $('#ryczalt, #ryczalt_miesiac, #ryczalt_kwartal').prop('disabled', false);
                        $('#ryczalt').prop('checked', true);
                        $('#ryczalt_miesiac').prop('checked', true);
                    }

                });
                $('#ryczalt').on('click', function () {
                    if (document.getElementById('ryczalt').checked) {
                        $('#pkpir').prop('checked', false);
                        $('#ryczalt_kwartal,#ryczalt_miesiac').prop('disabled', false);
                        $('#ryczalt_miesiac').prop('checked', true);
                        $('#pkpir_miesiac ,#pkpir_kwartal').prop('checked', false);
                        $('#pkpir_miesiac ,#pkpir_kwartal').prop('disabled', true);

                    } else {
                        $('#ryczalt_kwartal,#ryczalt_miesiac').prop('disabled', true);
                        $('#ryczalt_kwartal,#ryczalt_miesiac').prop('checked', false);
                        $('#pkpir_miesiac,#pkpir_kwartal').prop('disabled', false);
                        $('#pkpir').prop('checked', true);
                        $('#pkpir_miesiac').prop('checked', true);

                    }

                });
                $('#vat_kwartal').on('change', function () {
                    (document.getElementById('vat_kwartal').checked) ?
                            $('#vat_miesiac').prop('checked', false) :
                            $('#vat_miesiac').prop('checked', true);
                });
                $('#vat_miesiac').on('change', function () {
                    (document.getElementById('vat_miesiac').checked) ?
                            $('#vat_kwartal').prop('checked', false) :
                            $('#vat_kwartal').prop('checked', true);
                });
                $('#pkpir_miesiac').on('change', function () {
                    (document.getElementById('pkpir_miesiac').checked) ?
                            $('#pkpir_kwartal').prop('checked', false) :
                            $('#pkpir_kwartal').prop('checked', true);
                });
                $('#pkpir_kwartal').on('change', function () {
                    (document.getElementById('pkpir_kwartal').checked) ?
                            $('#pkpir_miesiac').prop('checked', false) :
                            $('#pkpir_miesiac').prop('checked', true);
                });
                $('#ryczalt_kwartal').on('change', function () {
                    (document.getElementById('ryczalt_kwartal').checked) ?
                            $('#ryczalt_miesiac').prop('checked', false) :
                            $('#ryczalt_miesiac').prop('checked', true);
                });
                $('#ryczalt_miesiac').on('change', function () {
                    (document.getElementById('ryczalt_miesiac').checked) ?
                            $('#ryczalt_kwartal').prop('checked', false) :
                            $('#ryczalt_kwartal').prop('checked', true);
                });
            });

//            walidacja formularza
            $(function () {
                
                $('#zapisz').on('click',function () {
                    if ($('input[name="part_2"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj pełną nazwe firmy');
                    } else if ($('input[name="part_4"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj NIP');
                    } else if ($('input[name="part_5"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj REGON');
                    } else if ($('#urzad_skarbowy').val() == "0") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Wybierz Urząd Skarbowy');
                    } else if ($('input[name="part_7"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj nazwe banku');
                    } else if ($('input[name="part_8"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj numer konta');
                    } else if ($('input[name="part_24"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj Kraj');
                    } else if ($('#wojewodztwo').val() == "0") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Wybierz województwo');
                    } else if ($('input[name="part_26"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj powiat');
                    } else if ($('input[name="part_27"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj gmine');
                    } else if ($('input[name="part_28"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj miejscowość');
                    } else if ($('input[name="part_29"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj pocztę');
                    } else if ($('input[name="part_30"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj kod pocztowy');
                    } else if ($('input[name="part_31"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj ulice');
                    } else if ($('input[name="part_32"]').val() == "") {
                        $('#alert').css('display', 'block');
                        $('#h_alert').html('Podaj numer domu');
                    } else if ($('input[name="part_4"]').val().length == 10) {
                        
                        $.ajax({
                            type: "POST",
                            url: "ajaxGUS",
                            dataType: "json",
                            data: "nip=" + $('input[name="part_4"]').val(),
                            success: function (msg) {
                                var xml = msg.d;
                                if (xml != "") {
                                    let parser = new DOMParser();
                                    xml = parser.parseFromString(xml, 'text/xml');
                                    var silosID = xml.getElementsByTagName('SilosID')[0].childNodes[0].nodeValue;
                                    if (silosID != "4") {
                                        $('#form').submit();
                                    } else {
                                        $('#alert').css('display', 'block');
                                        $('#h_alert').html('Podałeś dane zlikwidowanej działalności');
                                    }
                                } else {
                                    $('#alert').css('display', 'block');
                                    $('#h_alert').html('NIP jest nie prawidłowy');
                                }
                            },
                            error: function () {
                                alert('error ajaxGUS');
                            },
                        });
                    }
                });
            });


        </script>
    </body>
</html>

