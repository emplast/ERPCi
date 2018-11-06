<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Wprowadzanie dokumentu magazynowego:</h3>
            </div>
            <div class="box-body">
                <form action="" class="form-horizontal" id="form1" method="POST">
                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 alert alert-danger"id="alert2" style="display: none;">
                            <h4 class="text-center" id="h_alert2"></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="symbol">Rodzaj:</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" id="symbol" name="part_1">
                                <option value="0"></option>
                                <option value="1">BO</option>
                                <option value="2">PW</option>
                                <option value="3">PZ</option>
                                <option value="4">RW</option>
                                <option value="5">WZ</option>
                            </select>
                        </div>
                        <input type="hidden" id="typ">
                        <div class="col-sm-3">
                            <h5 id="h_symbol"></h5>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="numer">Numer:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="numer" name="part_2" disabled>
                        </div>
                        <div class="col-sm-1">
                            <div class="col-sm-5"></div>
                            <label for="rok">/</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="rok" name="part_3"disabled>
                        </div>
                    </div>
                    <br/>
                    <hr>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="data">Data dokumentu:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="data" name="part_4" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="kontrahent">Kontrahent:</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kontrahent" name="part_5">
                        </div>
                        <div class="col-sm-2">
                            <input type="button" class="btn btn-success"id="wybierz"  value="Wybierz">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="col-sm-5 ">
                                <label style="color:#f4b402;" for="suma_r">Suma rabat:</label>
                            </div>
                            <div class="col-sm-5 has-warning">
                                <input type="text" id="suma_r" name="part_12" class="form-control" style="font-weight: bold;font-style: italic;"disabled>
                            </div>
                            <h5>zł</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-5 ">
                                <label style="color:#1482d1;"for="suma_vat">Suma VAT:</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" style="border-color:#1482d1; " id="suma_vat" name="part_13" class="form-control"style="font-weight: bold;font-style: italic;"disabled>
                            </div>
                            <h5>zł</h5>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="col-sm-5 ">
                                <label style="color:#447544;" for="wartosc">Wartość NETTO:</label>
                            </div>
                            <div class="col-sm-5 has-success">
                                <input type="text" id="wartosc" name="part_10" class="form-control" style="font-weight: bold;font-style: italic;"disabled>
                            </div>
                            <h5>zł</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-5 ">
                                <label style="color: #d81111;"for="wartosc_b">Wartość BRUTTO:</label>
                            </div>
                            <div class="col-sm-5 has-error">
                                <input type="text" id="wartosc_b" name="part_11" class="form-control"style="font-weight: bold;font-style: italic;"disabled>
                            </div>
                            <h5>zł</h5>
                        </div>
                    </div>
                    <br/>
                    <hr>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="numer_faktury">Numer faktury:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="numer_faktury" name="part_6">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="data_faktury">Data faktury:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="data_faktury"autocomplete="off" name="part_7">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="termin_faktury">Termin zapłaty:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="termin_faktury"autocomplete="off" name="part_8">
                        </div>
                        <div class="col-sm-2">
                            <label for="forma_zaplaty">Forma zapłaty:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="forma_zaplaty" name="part_9">
                        </div>
                        <div class="col-sm-2">
                            <input type="button" class="btn btn-warning" value="Wybierz" id="zaplata" >
                        </div>
                    </div>

                    <br/>
                    <hr>

                    <table id="example1" class="table table-bordered table-striped" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th>Lp</th>
                                <th>Mag.</th>
                                <th>Indeks</th>
                                <th>Kod EAN</th>
                                <th>Nazwa asortymentu</th>
                                <th>Jm</th>
                                <th>Ilość</th>
                                <th>Cena</th>
                                <th>VAT</th>
                                <th>Wartość</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>

                    <br/>
            </div>
            <div class="box-footer">
                <div class="form-group">
                    <div class="col-sm-2">
                        <input type="button" class="btn btn-primary"  id="dodaj"value="Dodaj">
                    </div>
                    <div class="col-sm-2">
                        <input type="button" class="btn btn-success" id="fakturuj" value="Fakturuj">
                    </div>
                    <div class="col-sm-2">
                        <input type="button" class="btn btn-warning" value="Księguj">
                    </div>
                    <div class="col-sm-2">
                        <input type="submit" class="btn btn-default" value="Zakończ">
                    </div>
                    <div class="col-sm-2">
                        <input type="button" class="btn btn-danger" id="anuluj" value="Anuluj">
                    </div>
                    <input type="hidden" id="suma">
                </div>

            </div> <br/>
            <br/>
            </form>
        </div>
    </div>
</div>



<!--Modal kontrahent-->

<div class="modal" id="myModal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Kontrahenci</h4>
            </div>
            <div class="modal-body">
                <div class="box box-default">

                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Lp</th>
                                <th>Nazwa skrócona</th>
                                <th>Nazwa pełna</th>
                                <th>NIP</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Emplast</td>
                                <td>Emplast Piotr Majewski</td>
                                <td>916-100-17-59</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Milano</td>
                                <td>Pizzeria "Milano" Jan Czartoryski</td>
                                <td>916-100-59-19</td>

                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-primary" value="Wybierz" id="modal_wybierz"data-dismiss="modal">
            </div>
        </div>
    </div>
</div>






<!--Modal formy zapłaty-->




<div class="modal" id="myModal2" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Domyślna forma płatności</h4>
            </div><div class="container"></div>
            <div class="modal-body">
                <table id="example3" class="table table-striped table-bordered " cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Rodzaj płatności</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gotówka</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Przelew 3 dni</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Przelew 7 dni</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Przelew 14 dni</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Przelew 21 dni</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Przelew 30 dni</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Przelew 45 dni</td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn-danger">Zapisz i zamknij</a>
            </div>
        </div>
    </div>
</div>


<!--Modal wybierz towar-->  



<div class="modal" id="myModal3" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="h_title"></h4>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal" method="POST" style="font-size: 12px;">
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="magazyn">Magazyn:</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" id="magazyn" name="part_1a">
                                <option>Magazyn podstawowy</option>
                                <option>Magazyn art budowlanych</option>
                                <option>Magazyn leków</option>
                                <option>Magazyn kolan kanalizacyjnych</option>
                                <option>Magazyn rur</option>                             
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="indeks">Indeks:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="part_2a" id="indeks"disabled>
                        </div>
                        <div class="col-sm-2">
                            <label for="kod">Kod EAN-13:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="part_3a" id="kod"disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="nazwa">Nazwa asortumentu:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="part_4a" id="nazwa"disabled>
                        </div>
                        <div class="col-sm-2">
                            <label for="cena_sprzedazy" style="color:red">Cena sprzedaży netto:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="part_9a" id="cena_sprzedazy"disabled>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control" id="cena_sprzedazy_I"disabled>
                                <option value="0"></option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                                <option value="3">III</option>
                                <option value="4">IV</option>
                            </select>
                        </div>
                        <input type="hidden" id="cenaAjax">
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="typ">Typ:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="part_6a" id="typ1"disabled>
                        </div>
                        <div class="col-sm-2">
                            <label for="cena_rabat" style="color: green;">Cena z rabatem:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="part_12a" id="cena_rabat"disabled>
                        </div>
                        <div class="col-sm-2">
                            <label for="marza">Marża:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="part_8a" id="marza"disabled>
                        </div>
                        <input type="hidden" id="marzaAjax">
                    </div>
                    <div class="form-group">

                        <div class="col-sm-2">
                            <label for="jednostka">Jednostka miary:</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="part_5a" id="jednostka"disabled>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2">
                            <label for="cena_zakupu" style="color: blue">Cena zakupu netto:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="part_10a" id="cena_zakupu"disabled>
                        </div>
                        <div class="col-sm-2">
                            <label for="rabat">Rabat:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="part_11a" value="0" id="rabat"disabled>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-2">
                            <label for="vat">Stawka VAT:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="part_7a" id="vat"disabled>
                        </div>

                        <div class="col-sm-2">
                            <label for="stan">Dostępny stan:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="part_13a" id="stan"disabled>
                        </div>
                        <div class="col-sm-2">
                            <label for="ilosc">Ilość:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="part_14a" id="ilosc">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="alert alert-danger col-sm-6" id="alert1"style="display: none;">
                            <h4 class="text-center" id="h4_alert"></h4>
                        </div>
                    </div>
                    <input type="hidden" id="part_15a">
                    <input type="hidden" id="part_16a">
                </form><br/><br/><hr>
                <table id="example4" class="table table-striped table-bordered " cellspacing="0" width="100%" style="font-size: 10px;">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Indeks</th>
                            <th>Kod EAN-13</th>
                            <th>Nazwa towaru/usługi</th>
                            <th>JM</th>
                            <th>Typ</th>
                            <th>Cena Netto</th>
                            <th>VAT</th>
                            <th>Cena zakupu</th>
                            <th>Stan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table><br/><br/><hr>
                <div class="modal-footer">
                    <div class="form-group">
                        <input id="part_17a" type="button"  class="btn btn-danger" value="Wybierz">
                        <a href="#" id="part_18a" class="btn btn-warning">Nowy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a href="#" id="part_19a"data-dismiss="modal" class="btn btn-primary">Anuluj&nbsp;&nbsp;&nbsp;&nbsp;</a>

                    </div>
                    </br>

                </div>
            </div>
        </div>
    </div>
</div>


<!--Modal dodaj nowy asortyment do magazynu-->
<div class="modal" id="myModal4" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Wprowadź nowy towar</h4>
            </div>
            <div class="modal-body">
                <div class="box box-default">
                    <br/><br/>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="alert alert-danger col-sm-6" id="alert4" style="display: none">
                                <h4 class="text-center" id="h_alert4"></h4>
                            </div>
                            <div class="alert alert-info col-sm-6" id="alert5" style="display: none">
                                <h4 class="text-center" id="h_alert5"></h4>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-sm-2">
                                <label for="part_1b">Magazyn:</label>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" id="part_1b">
                                    <option value="0">Magazyn podstawowy</option>
                                    <option value="1">Magazyn art budowlanych</option>
                                    <option value="2">Magazyn leków</option>
                                    <option value="3">Magazyn kolan kanalizacyjnych</option>
                                    <option value="4">Magazyn rur</option>                             
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="part_2b">Indeks:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="part_2b"disabled>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="part_3b">Kod EAN-13:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="part_3b">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="nadaj_kod">Nadaj wewnętrzny kod EAN-13:</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" id="nadaj_kod">
                            </div>
                            <div class="col-sm-4">
                                <canvas id="ean" style="background-color: whitesmoke;margin-top: -150px;"width="300"height="150"></canvas>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="part_4b">Nazwa:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="part_4b">
                            </div>
                        </div>
                        <div id="exTab1"class="tab-content" >
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#1ad" data-toggle="tab">Dane podstawowe</a></li>
                                <li><a href="#2ad" data-toggle="tab">Ceny standartowe</a></li>

                            </ul>
                            <div class="tab-content clearfix"> 
                                <div class="tab-pane active " id="1ad">
                                    <h3>Dane ogólne</h3>
                                    <hr></br>
                                    <div class="form-group">
                                        <div class="form-inline">
                                            <div class="col-sm-2">
                                                <label for="part_5b">Jednostka miary:</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="part_5b">
                                                <a href="#" id="part_16d" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-text-width" ></span></a>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="part_6b">Stan magazynowy:</label>              

                                            </div> 
                                            <div class="col-sm-3">
                                                <input type="text"id="part_6b"class="form-control"disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-inline">
                                            <div class="col-sm-2">
                                                <label for="part_7b">Typ:</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control"id="part_7b">
                                                    <option selected>Towar</option>
                                                    <option>Usługa</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="part_8b">Min. stan magazynowy:</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="part_8b">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-inline">
                                            <div class="col-sm-2">
                                                <label for="part_9b">Stawka VAT:</label>
                                            </div>
                                            <div class="col-sm-1">
                                                <select class="form-control"id="part_9b">
                                                    <option selected>23</option>
                                                    <option>15</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-3">
                                                <label>&nbsp;&nbsp;%</label>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="part_10b">Okres zbywania towaru dni:</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control"id="part_10b">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="2ad">
                                    <h3>Ceny standartowe</h3>
                                    <hr></br>
                                    <div class="form-group">

                                        <div class="col-sm-2">
                                            <label for="part_11b">Cena sprzedaży 1:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="part_11b" disabled>
                                        </div>

                                        <div class="col-sm-3">
                                            <label for="part_12b">Cena zakupu NETTO:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="part_12b">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <label for="part_13b">Cena sprzedaży 2:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="part_13b" disabled>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="part_14b">Marża w %</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="part_14b">
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <label for="part_15b">Cena sprzedaży 3:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="part_15b"disabled>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="part_16b">Cena sprzedaży NETTO:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="part_16b" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <label for="part_17b">Cena sprzedaży 4:</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="part_17b" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-2">
                                    <input type="button"value="Dodaj nowy towar" id="dodaj_nowy_towar" class="btn btn-primary">
                                </div>
                                <div class="col-sm-2">
                                    <input type="button"value="Anuluj" data-dismiss="modal" id="anuluj1" class="btn btn-danger">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal jednostki miary-->
<div class="modal" id="myModal5" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Jednostki miary</h4>
            </div>
            <div class="modal-body">
                <table id="example5" class="table table-striped table-bordered " cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Nazwa jednostki</th>
                            <th>Skrót</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sztuk</td>
                            <td>szt.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tona</td>
                            <td>T</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kilogram</td>
                            <td>kg.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Gram</td>
                            <td>g.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Litr</td>
                            <td>m3</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Kilometr</td>
                            <td>km.</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Metr</td>
                            <td>m.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a href="#" id="part_1e" class="btn btn-success" data-dismiss="modal">Wybierz</a>
            </div>
        </div>
    </div>
</div>

<!--Modal ostrzrzenie-->
<div class="modal modal-danger" id="myModalDanger">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Ostrzeżenie</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span>x</span></button>
            </div>
            <div class="modal-body">
                <h4 id="h_alert3" class="text-center"></h4>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    var counter = 1,
            suma = 0,
            sumaV = 0,
            sumaB = 0,
            sumaR = 0,
            cena = 0,
            sprawdzenie = "0";



    //datepicker
    $(function () {
        $('#data').datepicker({
            yearRange: '2016:<?php echo date('Y') ?>',
            dateFormat: 'yy-mm-dd'
        });
        $('#data_faktury').datepicker({
            yearRange: '2016:<?php echo date('Y') ?>',
            dateFormat: 'yy-mm-dd'
        });
        $('#termin_faktury').datepicker({
            yearRange: '2016:<?php echo date('Y') ?>',
            dateFormat: 'yy-mm-dd'
        });
        $('#data').change(function () {
            $('#h_alert2').html('');
            $('#alert2').css('display', 'none');
        });
        $('#data_faktury').change(function () {
            $('#h_alert2').html('');
            $('#alert2').css('display', 'none');
        });
        $('#termin_faktury').change(function () {
            $('#h_alert2').html('');
            $('#alert2').css('display', 'none');
        });
    });

    //table example 1 zestawienie towarów do dokumentu mag.
    $(function () {

        $('#example1').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            },
            "columnDefs": [
                {"width": "1%", "targets": 0},
                {"width": "1%", "targets": 1},
                {"width": "1%", "targets": 2},
                {"width": "15%", "targets": 3},
                {"width": "45%", "targets": 4},
            ]

        });

        var table = $('#example1').DataTable();
        $('#example1 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');
            } else {
                table.$('tr.success').removeClass('success');
                $(this).addClass('success');
            }
        });
    }
    );

    // myModal run kontrahent
    $(function () {
        $('#wybierz').click(function () {
            var table = $('#example2').DataTable();
            if ($('#myModal').modal()) {
                $('#h_alert2').html('');
                $('#alert2').css('display', 'none');
                table.$('tr.success').removeClass('success');
            }
        });
    });

    //myModal2 run formy zapłaty
    $(function () {
        $('#zaplata').click(function () {
            var table = $('#example3').DataTable();
            if ($('#myModal2').modal()) {
                $('#alert2').css('display', 'none');
                $('#h_alert2').html('');
                table.$('tr.success').removeClass('success');

            }

        });

    });

    // dodaj towar click myModal3 run
    $(function () {
        $('#dodaj').click(function () {
            var select = document.getElementById('part_15a').value,
                    symbol = document.getElementById('symbol').value;

            if (symbol == "0") {
                $('#myModalDanger').modal();
                $('#h_alert3').html('Musisz wybrać rodzaj dokumentu');
            } else {
                if ($('#kontrahent').val() == "") {
                    $('#myModalDanger').modal();
                    $('#h_alert3').html('Musisz wybrać kontrahenta');

                } else {
                    $('#myModal3').modal();
                    $('#h_alert2').html('');
                    $('#alert2').css('display', 'none');
                }
            }
            if (select == "1") {
                $('#cena_sprzedazy').val("");
                $('#cena_zakupu').val("");
                $('#rabat').val("");
                $('#cena_zakupu').prop('disabled', false);
                $('#h_title').html('Wybierz towar do <b>BO</b> <i>Bilansu Otwarcia</i>');

            }
            if (select == "2") {
                $('#cena_sprzedazy').val("");
                $('#cena_zakupu').val("");
                $('#rabat').val("");
                $('#cena_zakupu').prop('disabled', false);
                $('#h_title').html('Wybierz towar do <b>PW</b> <i>Przyjęcie Wewnętrzne</i>');
            }
            if (select == "3") {
                $('#cena_sprzedazy').val("");
                $('#cena_zakupu').val("");
                $('#rabat').val("");
                $('#cena_zakupu').prop('disabled', false);
                $('#h_title').html('Wybierz towar do <b>PZ</b> <i>Przyjęcie Zewnętrzne</i>');
            }
            if (select == "4") {
                $('#cena_sprzedazy').val(data[6]);
                $('#rabat').val("");
                $('#cena_zakupu').prop('disabled', true);
                $('#rabat').prop('disabled', false);
                $('#cena_sprzedazy,#cena_sprzedazy_I').prop('disabled', false);
                $('#h_title').html('Wybierz towar do <b>RW</b> <i>Rozchód Wewnętrzny</i>');
            }
            if (select == "5") {
                $('#cena_sprzedazy').val(data[6]);
                $('#rabat').val("");
                $('#cena_zakupu').prop('disabled', true);
                $('#rabat').prop('disabled', false);
                $('#cena_sprzedazy,#cena_sprzedazy_I').prop('disabled', false);
                $('#h_title').html('Wybierz towar do <b>WZ</b> <i>Wydanie Zewnętrzne</i>');
            }
        });

    });

    //nowy towar click myModal4 run
    $(function () {
        $('#part_18a').click(function () {
            $('#myModal4').modal();

            $.ajax({
                type: "POST",
                url: "ajaxIndeks",
                dataType: 'json',
                data: "magazyn=" + document.getElementById('part_1b').value,
                success: function (msg) {

                    $('#part_2b').val(msg['indeks']);
                },
                error: function () {
                    alert('error ajaxIndeks');
                }
            });

        });

    });

//  Wybór Magazynu part_1b change myModal4 pobieranie ajax'em indeksu towaru

    $(function () {
        $('#part_1b').change(function () {
            $.ajax({
                type: "POST",
                url: "ajaxIndeks",
                dataType: 'json',
                data: "magazyn=" + $('#part_1b').val(),
                success: function (msg) {

                    $('#part_2b').val(msg['indeks']);
                },
                error: function () {
                    alert('error ajaxIndeks');
                }
            });
        });
    });

// wyliczanie ceny według marży dodawanie nowego asortymentu do magazynu


    $(function () {
        $('#part_14b').on('keyup keydown', function () {
            this.value = this.value.replace(/,/g, ".");
            this.value = (/^\d*\.?\d*$/g.test(this.value)) ? this.value : "";
            var cena = 0;
            if ($('#part_12b').val() != "" & $('#part_14b').val() != "") {
                cena = (Number($('#part_14b').val()) / Number(100)) * Number($('#part_12b').val()) + Number($('#part_12b').val());
                $('#part_16b').val(Round(cena, 2));
            } else {
                $('#part_16b').val("");
            }


        });
    });

// pobieranie ajax'em cen cena sprzedaży I II II IV


    $(function () {
        $('#part_12b').on('keyup keydown', function () {
            this.value = this.value.replace(/,/g, ".");
            this.value = (/^\d*\.?\d*$/g.test(this.value)) ? this.value : "";
            var cena = 0, cenaI = 0, cenaII = 0, cenaIII = 0, cenaIV = 0;
            if ($('#part_12b').val() != "") {

                $.ajax({
                    type: "POST",
                    url: "ajaxNarzuty",
                    dataType: "json",
                    success: function (msg) {
                        cenaI = (Number(msg['cenaI']) * Number($('#part_12b').val())) / Number("100") + Number($('#part_12b').val());
                        $('#part_11b').val(Round(cenaI, 2));
                        cenaII = (Number(msg['cenaII']) * Number($('#part_12b').val())) / Number("100") + Number($('#part_12b').val());
                        $('#part_13b').val(Round(cenaII, 2));
                        cenaIII = (Number(msg['cenaIII']) * Number($('#part_12b').val())) / Number("100") + Number($('#part_12b').val());
                        $('#part_15b').val(Round(cenaIII, 2));
                        cenaIV = (Number(msg['cenaIV'] * Number($('#part_12b').val()))) / Number("100") + Number($('#part_12b').val());
                        $('#part_17b').val(Round(cenaIV, 2));
                    },
                    error: function () {
                    }
                });
                if ($('#part_14b').val() != "") {
                    cena = (Number($('#part_14b').val()) / Number(100)) * Number($('#part_12b').val()) + Number($('#part_12b').val());
                    $('#part_16b').val(Round(cena, 2));
                }
            } else {
                $('#part_11b').val('');
                $('#part_13b').val('');
                $('#part_15b').val('');
                $('#part_17b').val('');
            }
        });
    });


//    Dodawanie asortymentu do magazynów myModal4

    $(function () {
        var table = $('example4').DataTable();
        $('#dodaj_nowy_towar').click(function () {

            if ($('#part_3b').val() == "") {
                $('#alert4').css('display', 'block');
                $('#h_alert4').html('Musisz podać kod EAN towaru');
            } else if ($('#part_4b').val() == "") {
                $('#alert4').css('display', 'block');
                $('#h_alert4').html('Musisz podać nazwę towaru');
            } else if ($('#part_5b').val() == "") {
                $('#alert4').css('display', 'block');
                $('#h_alert4').html('Musisz podać wubrać jednostkę miary');
            } else if ($('#part_12b').val() == "") {
                $('#alert4').css('display', 'block');
                $('#h_alert4').html('Musisz podać cenę zakupu');
            } else if ($('#part_14b').val() == "") {
                $('#alert4').css('display', 'block');
                $('#h_alert4').html('Musisz podać marżę towaru w celu wyliczenia ceny sprzedaży');
            } else {
                $('#alert4').css('display', 'none');
                $('#h_alert4').html('');
                $.ajax({
                    type: "POST",
                    url: "ajaxDodajAsortyment",
                    dataType: "json",
                    data: {
                        "magazyn": $('#part_1b').val(),
                        "indeks": $('#part_2b').val(),
                        "kodEAN": $('#part_3b').val(),
                        "nazwa": $('#part_4b').val(),
                        "jednostka": $('#part_5b').val(),
                        "typ": $('#part_7b').val(),
                        "vat": $('#part_9b').val(),
                        "minStanMagazynowy": $('part_8b').val(),
                        "okresZbywania": $('#part_10b').val(),
                        "cenaZakupu": $('#part_12b').val(),
                        "marza": $('#part_14b').val(),
                        "cenaSprzedazy": $('#part_16b').val()},
                    success: function (msg) {
                        $('#alert5').css('display', 'block');
                        $('#h_alert5').html(msg['komentarz']);
                        $('#part_2b').val("");
                        $('#part_3b').val("");
                        $('#part_4b').val("");
                        $('#part_5b').val("");
                        $('#part_6b').val("");
                        $('#part_8b').val("");
                        $('#part_10b').val("");
                        $('#part_11b').val("");
                        $('#part_12b').val("");
                        $('#part_13b').val("");
                        $('#part_14b').val("");
                        $('#part_15b').val("");
                        $('#part_16b').val("");
                        $('#part_17b').val("");
                        var canvas = document.getElementById("ean"),
                                ctx = canvas.getContext("2d");
                        ctx.clearRect(0, 0, canvas.width, canvas.height);

                        setTimeout(function () {
                            $('#alert5').css('display', 'none');
                            $('#h_alert5').html("");
                            $('#myModal4').modal('toggle');
                            $('#myModal3').modal('toggle');
                            $('#myModal3').modal();
                            table.ajax.reload();

                        }, 3000);
                        console.log(msg);
                    },
                    error: function () {
                        alert('error ajaxDodajAsortyment');
                    }
                });

            }
        });
    });

    //  jednostki miary myModal5 run
    $(function () {
        $('#part_16d').click(function () {
            $('#myModal5').modal();

        });

    });

    //table example2 kontrahent
    $(function () {

        $('#example2').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            }
        });
        var table = $('#example2').DataTable();
        $('#example2 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                table.$('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#kontrahent').val(data[2]);

            }

        });

    });

    // table example3 forma zapłaty
    $(function () {

        $('#example3').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            }
        });
        var table = $('#example3').DataTable();
        $('#example3 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                table.$('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#forma_zaplaty').val(data[1]);

            }

        });

    });

    // table example4 wybór asortymenu do dokumentu magazynowego modal myModal3
    $(function () {

        $('#example4').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            },
            "ajax": {
                dataSrc: "",
                dataType: 'json',
                url: "ajaxTabelaTowarow",
                error: function () {
                    alert('errorAjaxData');
                }
            },

        });
        var table = $('#example4').DataTable();
        $('#example4 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                table.$('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#alert1').css('display', 'none');
                $('#h4_alert').html('');
                $('#indeks').val(data[1]);
                $('#kod').val(data[2]);
                $('#nazwa').val(data[3]);
                $('#jednostka').val(data[4]);
                $('#typ1').val(data[5]);
                $('#vat').val(data[7]);
                $('#cena_sprzedazy').val(data[6]);
                $('#cenaAjax').val(data[6]);
                $('#cena_zakupu').val(data[8]);
                $('#stan').val(data[9]);



                var select = document.getElementById('part_15a').value;
                if (select == "1") {
                    $('#cena_sprzedazy').val("");
                    $('#cena_zakupu').val("");
                    $('#rabat').val("");
                    $('#cena_zakupu').prop('disabled', false);


                }
                if (select == "2") {
                    $('#cena_sprzedazy').val("");
                    $('#cena_zakupu').val("");
                    $('#rabat').val("");
                    $('#cena_zakupu').prop('disabled', false);
                }
                if (select == "3") {
                    $('#cena_sprzedazy').val("");
                    $('#cena_zakupu').val("");
                    $('#rabat').val("");
                    $('#cena_zakupu').prop('disabled', false);
                    $('#rabat ').prop('disabled', true);
                    $('#cena_sprzedazy,#cena_sprzedazy_I').prop('disabled', true);

                }
                if (select == "4") {
                    $('#cena_sprzedazy').val(data[6]);
                    $('#rabat').val(0);
                    $('#cena_zakupu').prop('disabled', true);
                    $('#rabat ').prop('disabled', false);
                    $('#cena_sprzedazy,#cena_sprzedazy_I').prop('disabled', false);
                    $('#cena_rabat').val(Round(Number($('#cena_sprzedazy').val()) - Number($('#cena_sprzedazy').val()) * Number($('#rabat').val()) / Number(100), 2));
                }
                if (select == "5") {
                    $('#cena_sprzedazy').val(data[6]);
                    $('#rabat').val(0);
                    $('#cena_rabat').val(Round(Number($('#cena_sprzedazy').val()) - Number($('#cena_sprzedazy').val()) * Number($('#rabat').val()) / Number(100), 2));
                    $('#cena_zakupu').prop('disabled', true);
                    $('#rabat').prop('disabled', false);
                    $('#cena_sprzedazy,#cena_sprzedazy_I').prop('disabled', false);
                }
                $.ajax({
                    type: "POST",
                    url: "ajaxMarza",
                    data: "ean=" + data[2],
                    dataType: "text",
                    success: function (msg) {
                        $('#marza').val(msg);
                        $('#marzaAjax').val(msg);
                    },
                    error: function () {
                        alert('error ajaxMarza');
                    }
                });

            }

        });

    });

    // table example5 jednostki miary myModal5
    $(function () {

        $('#example5').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            }
        });
        var table = $('#example5').DataTable();
        $('#example5 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                table.$('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#part_5b').val(data[2]);

            }

        });

    });

    // nadaj_kod on change nadawanie koduEAN wewnętrznego
    $(function () {
        $('#nadaj_kod').click(function ()
        {


            if (document.getElementById('nadaj_kod').checked) {
                $.ajax({
                    type: "POST",
                    url: "ajaxEAN",
                    dataType: 'json',
                    success: function (msg) {
                        $('#ean').EAN13(msg['ean']);
                        $('#part_3b').val(msg['ean']);
                        $('#part_3b').prop('disabled', true);
                        $('#alert4').css('display', 'none');
                        $('#h_alert4').html('');
                    },
                    error: function ()
                    {
                        alert('error ajaxEAN');
                    }
                });

            } else {
                var canvas = document.getElementById("ean"),
                        ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, canvas.width, canvas.height);


                $('#part_3b').val('');
                $('#ean').EAN13($('#part_3b').val());
                $('#part_3b').prop('disabled', false);

            }
        });
    });


//     part_3b kod EAN keyup keydown dodawanie koduEAN zewnętrznego

    $(function () {

        $('#part_3b').on('keyup keydown', function () {

            if ($('#part_3b').val().length == Number(13)) {
                var ref;
                $.ajax({
                    type: 'POST',
                    url: "ajaxEANSprawdzenie",
                    data: {"kodEAN": $('#part_3b').val(), "magazyn": $('#part_1b').val()},
                    dataType: 'json',
                    success: function (msg) {
                        if (msg['ref'] === "1") {
                            $('#part_3b').prop('disabled', false);
                            $('#ean').EAN13($('#part_3b').val());
                            $('#alert4').css('display', 'none');
                            $('#h_alert4').html('');
                        } else if (msg['ref'] == "0") {
                            $('#alert4').css('display', 'block');
                            $('#h_alert4').html('Ten towar istniej już w wybranym magazynie');
                        }

                    },
                    erorr: function () {
                        alert('error ajaxEANSprawdzenie');
                    }

                });

            } else {
                var canvas = document.getElementById("ean"),
                        ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                $('#part_3b').prop('disabled', false);
                $('#alert4').css('display', 'none');
                $('#h_alert4').html('');
            }


        }
        );
    });

    // symbol change nadawanie wartośći polu hidden part_15a
    $(function () {
        $('#symbol').on('change', function () {
            var select = document.getElementById('symbol').value,
                    table = $('#example1').DataTable(),
                    counter = 1,
                    suma = 0,
                    sumaV = 0,
                    sumaB = 0,
                    sumaR = 0,
                    cena = 0,
                    sprawdzenie = "0";

            $('#part_15a').val(select);
            table.clear().draw();
            $('#suma ,#suma_vat,#suma_r').val('');
            $('#wartosc, #wartosc_b,#kontrahent').val('');
            $('#alert2').css('display', 'none');
            $('#h_alert2').html('');
            $('#cena_sprzedazy_I').val("0").change();
            $('#ilosc').val("");
            $('#cena_rabat').val("");
            $('#indeks').val('');
            $('#nazwa').val('');
            $('#typ1').val('');
            $('#kod').val('');
            $('#cena_sprzedazy').val('');
            $('#cena_zakupu').val('');
            $('#jednostka').val('');
            $('#vat').val('');
            $('#stan').val('');
            $('#marza').val('');
            $('#rabat').val('');




            switch (select)
            {
                case "1":
                    $('#h_symbol').html('Bilans Otwarcia');
                    $('#numer_faktury').prop('disabled', true);
                    $('#data_faktury').prop('disabled', true);
                    $('#termin_faktury').prop('disabled', true);
                    $('#forma_zaplaty').prop('disabled', true);
                    $('#zaplata').prop('disabled', true);
                    $('#cena_zakupu').prop('disabled', false);

                    break;
                case "2":
                    $('#h_symbol').html('Przyjęcie Wewnętrzne');
                    $('#numer_faktury').prop('disabled', true);
                    $('#data_faktury').prop('disabled', true);
                    $('#termin_faktury').prop('disabled', true);
                    $('#forma_zaplaty').prop('disabled', true);
                    $('#zaplata').prop('disabled', true);
                    $('#cena_zakupu').prop('disabled', false);

                    break;
                case "3":
                    $('#h_symbol').html('Przyjęcie Zewnętrzne');
                    $('#numer_faktury').prop('disabled', false);
                    $('#data_faktury').prop('disabled', false);
                    $('#termin_faktury').prop('disabled', false);
                    $('#forma_zaplaty').prop('disabled', false);
                    $('#zaplata').prop('disabled', false);
                    $('#cena_zakupu').prop('disabled', false);
                    $('#rabat ').prop('disabled', true);
                    $('#cena_sprzedazy,#cena_sprzedazy_I').prop('disabled', true);
                    break;
                case "4":
                    $('#h_symbol').html('Rozchód Wewnętrzny');
                    $('#numer_faktury').prop('disabled', true);
                    $('#data_faktury').prop('disabled', true);
                    $('#termin_faktury').prop('disabled', true);
                    $('#forma_zaplaty').prop('disabled', true);
                    $('#zaplata').prop('disabled', true);
                    $('#cena_zakupu').prop('disabled', true);
                    $('#rabat ').prop('disabled', false);
                    $('#cena_sprzedazy,#cena_sprzedazy_I').prop('disabled', false);
                    break;
                case "5":
                    $('#h_symbol').html('Wydanie Zewnętrzne');
                    $('#numer_faktury').prop('disabled', true);
                    $('#data_faktury').prop('disabled', false);
                    $('#termin_faktury').prop('disabled', false);
                    $('#forma_zaplaty').prop('disabled', false);
                    $('#zaplata').prop('disabled', false);
                    $('#cena_zakupu').prop('disabled', true);
                    $('#rabat').prop('disabled', false);
                    $('#cena_sprzedazy,#cena_sprzedazy_I').prop('disabled', false);
                    break;
                default:
                    $('#h_symbol').html('');
                    $('#numer_faktury').prop('disabled', false);
                    $('#data_faktury').prop('disabled', false);
                    $('#termin_faktury').prop('disabled', false);
                    $('#forma_zaplaty').prop('disabled', false);
                    $('#zaplata').prop('disabled', false);

                    break;

            }
            $.ajax({
                type: "POST",
                url: 'ajaxNumer',
                data: "typ=" + select,
                dataType: 'json',
                success: function (msg) {
                    $('#numer_faktury').val(msg['numer_faktury']);
                    $('#numer').val(msg['numer']);
                    $('#rok').val(msg['rok']);

                },
                error: function () {
                    alert('error ajaxNumer');
                }
            });


        });
    });

    // part_17a on click dodawanie wiersz w tabeli exaple1 i komunikaty otrzeżen przed pustym polem ilość orza brakiem wyboru tabeli
    $(function () {
        var tableAddRow = $('#example1').DataTable(),
                table = $('#example4').DataTable();


        $('#part_17a').on('click', function () {
            $('#alert1').css('display', 'none');
            var rodzaj = document.getElementById('symbol').value;
            switch (rodzaj) {
                case "0":
                    $('#wartosc').val(0);
                    break;
                case "1":
                    if (!table.$('tr.success').hasClass('success')) {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz wybrać towar z tabeli');
                    } else if ($('#ilosc').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać ilość towaru');
                    } else if ($('#cena_zakupu').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać cene zakupu');
                    } else {
                        sumaV += Number($('#cena_zakupu').val()) * Number($('#vat').val());
                        suma += Number($('#cena_zakupu').val()) * Number($('#ilosc').val());
                        sumaB = sumaV + suma;
                        $('#wartosc').val(Round(suma, 2));
                        $('#suma_vat').val(Round(sumaV, 2));
                        $('#wartosc_b').val(Round(sumaB, 2));
                        sprawdzenie = "1";
                        tableAddRow.row.add(
                                [
                                    counter,
                                    '1/A',
                                    $('#indeks').val(),
                                    $('#kod').val(),
                                    $('#nazwa').val(),
                                    $('#jednostka').val(),
                                    $('#ilosc').val(),
                                    $('#cena_zakupu').val(),
                                    $('#vat').val(),
                                    Round(Number(Number($('#cena_zakupu').val()) * Number($('#vat').val()) / Number("100") + Number($('#cena_zakupu').val())) * Number($('#ilosc').val()), 2)

                                ]).draw(false);
                    }
                    break;
                case "2":

                    if (!table.$('tr.success').hasClass('success')) {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz wybrać towar z tabeli');
                    } else if ($('#ilosc').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać ilość towaru');
                    } else if ($('#cena_zakupu').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać cene zakupu');
                    } else {
                        sumaV += Number($('#cena_zakupu').val()) * Number($('#vat').val());
                        suma += Number($('#cena_zakupu').val()) * Number($('#ilosc').val());
                        sumaB = sumaV + suma;
                        $('#wartosc').val(Round(suma, 2));
                        $('#suma_vat').val(Round(sumaV, 2));
                        $('#wartosc_b').val(Round(sumaB, 2));
                        sprawdzenie = "1";
                        tableAddRow.row.add(
                                [
                                    counter,
                                    '1/A',
                                    $('#indeks').val(),
                                    $('#kod').val(),
                                    $('#nazwa').val(),
                                    $('#jednostka').val(),
                                    $('#ilosc').val(),
                                    $('#cena_zakupu').val(),
                                    $('#vat').val(),
                                    Round(Number(Number($('#cena_zakupu').val()) * Number($('#vat').val()) / Number("100") + Number($('#cena_zakupu').val())) * Number($('#ilosc').val()), 2)
                                ]).draw(false);
                    }
                    break;
                case "3":
                    if (!table.$('tr.success').hasClass('success')) {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz wybrać towar z tabeli');
                    } else if ($('#ilosc').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać ilość towaru');
                    } else if ($('#cena_zakupu').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać cene zakupu');
                    } else {
                        sumaV += Number($('#cena_zakupu').val()) * Number($('#vat').val());
                        suma += Number($('#cena_zakupu').val()) * Number($('#ilosc').val());
                        sumaB = sumaV + suma;
                        $('#wartosc').val(Round(suma, 2));
                        $('#suma_vat').val(Round(sumaV, 2));
                        $('#wartosc_b').val(Round(sumaB, 2));
                        sprawdzenie = "1";
                        tableAddRow.row.add(
                                [
                                    counter,
                                    '1/A',
                                    $('#indeks').val(),
                                    $('#kod').val(),
                                    $('#nazwa').val(),
                                    $('#jednostka').val(),
                                    $('#ilosc').val(),
                                    $('#cena_zakupu').val(),
                                    $('#vat').val(),
                                    Round(Number(Number($('#cena_zakupu').val()) * Number($('#vat').val()) / Number("100") + Number($('#cena_zakupu').val())) * Number($('#ilosc').val()), 2)

                                ]).draw(false);

                    }
                    break;
                case "4":
                    if (!table.$('tr.success').hasClass('success')) {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz wybrać towar z tabeli');
                    } else if ($('#ilosc').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać ilość towaru');
                    } else if ($('#cena_sprzedazy').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać cene sprzedaży');
                    } else {
                        sumaV += ($('#cena_rabat').val() != "" & $('#cena_rabat').val() != "0") ? Number($('#cena_rabat').val()) * Number($('#vat').val()) : Number($('#cena_sprzedazy').val()) * Number($('#vat').val());
                        cena = ($('#cena_rabat').val() != "" & $('#cena_rabat').val() != "0") ? Number($('#cena_rabat').val()) : Number($('#cena_sprzedazy').val());
                        suma += Number(cena) * Number($('#ilosc').val());
                        sumaB = sumaV + suma;
                        sumaR += ($('#cena_rabat').val() != "" & $('#cena_rabat').val() != "0") ? (Number($('#cena_sprzedazy').val()) - Number($('#cena_rabat').val())) * Number($('#ilosc').val()) : Number("0");
                        $('#wartosc').val(Round(suma, 2));
                        $('#suma_vat').val(Round(sumaV, 2));
                        $('#wartosc_b').val(Round(sumaB, 2));
                        $('#suma_r').val(Round(sumaR, 2));
                        sprawdzenie = "1";
                        tableAddRow.row.add(
                                [
                                    counter,
                                    '1/A',
                                    $('#indeks').val(),
                                    $('#kod').val(),
                                    $('#nazwa').val(),
                                    $('#jednostka').val(),
                                    $('#ilosc').val(),
                                    cena,
                                    $('#vat').val(),
                                    Round((Number(cena) * Number($('#vat').val() / Number(100)) + Number(cena)) * Number($('#ilosc').val()), 2)


                                ]).draw(false);
                    }
                    break;
                case "5":
                    if (!table.$('tr.success').hasClass('success')) {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz wybrać towar z tabeli');
                    } else if ($('#ilosc').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać ilość towaru');
                    } else if ($('#cena_sprzedazy').val() == "") {
                        $('#alert1').css('display', 'block');
                        $('#h4_alert').html('Musisz podać cene sprzedaży');
                    } else {
                        sumaV += ($('#cena_rabat').val() != "" & $('#cena_rabat').val() != "0") ? Number($('#cena_rabat').val()) * Number($('#vat').val()) : Number($('#cena_sprzedazy').val()) * Number($('#vat').val());
                        cena = ($('#cena_rabat').val() != "" & $('#cena_rabat').val() != "0") ? Number($('#cena_rabat').val()) : Number($('#cena_sprzedazy').val());
                        suma += Number(cena) * Number($('#ilosc').val());
                        sumaB = sumaV + suma;
                        sumaR += ($('#cena_rabat').val() != "" & $('#cena_rabat').val() != "0") ? (Number($('#cena_sprzedazy').val()) - Number($('#cena_rabat').val())) * Number($('#ilosc').val()) : Number("0");
                        $('#wartosc').val(Round(suma, 2));
                        $('#suma_vat').val(Round(sumaV, 2));
                        $('#wartosc_b').val(Round(sumaB, 2));
                        $('#suma_r').val(Round(sumaR, 2));
                        sprawdzenie = "1";
                        tableAddRow.row.add(
                                [
                                    counter,
                                    '1/A',
                                    $('#indeks').val(),
                                    $('#kod').val(),
                                    $('#nazwa').val(),
                                    $('#jednostka').val(),
                                    $('#ilosc').val(),
                                    cena,
                                    $('#vat').val(),
                                    Round((Number(cena) * Number($('#vat').val()) / Number(100) + Number(cena)) * Number($('#ilosc').val()), 2)


                                ]).draw(false);
                    }
                    break;
            }


            if (sprawdzenie != "0") {



                $('#myModal3').modal('toggle');
                $('#cena_sprzedazy_I').val("0").change();
                $('#ilosc').val("");
                $('#cena_rabat').val("");
                $('#indeks').val('');
                $('#nazwa').val('');
                $('#typ1').val('');
                $('#kod').val('');
                $('#cena_sprzedazy').val('');
                $('#cena_zakupu').val('');
                $('#jednostka').val('');
                $('#vat').val('');
                $('#stan').val('');
                $('#marza').val('');
                $('#rabat').val('');
                table.$('tr.success').removeClass('success');
                counter++;
                sprawdzenie = "0";
            }






        });
    });

    // anuluj reload strona główna
    $(function () {
        $('#anuluj').click(function () {
            location.reload();
        });
    });


    // cena_sprzedazy_I change
    // rabat keydown keyup
    $(function () {

        $('#cena_sprzedazy_I').change(function () {

            var cena = document.getElementById('cena_sprzedazy_I').value;

            if ($('#kod').val() != "") {

                if (cena != "0" & cena != "") {

                    $.ajax({
                        type: "POST",
                        url: "ajaxCena",
                        data: "cena=" + $('#cena_sprzedazy_I').val(),
                        dataType: 'json',
                        success: function (msg) {

                            $('#cena_sprzedazy').val(msg['cena']);
                            $('#marza').val(msg['marza']);
                            $('#rabat').val(0);
                            $('#cena_rabat').val(Round(Number($('#cena_sprzedazy').val()) - Number($('#cena_sprzedazy').val()) * Number($('#rabat').val()) / Number(100), 2));

                        },
                        error: function () {
                            alert('error');
                        }
                    });



                } else {
                    $('#marza').val($('#marzaAjax').val());
                    $('#cena_sprzedazy').val($('#cenaAjax').val());
                    $('#rabat').val(0);
                    $('#cena_rabat').val(Round(Number($('#cena_sprzedazy').val()) - Number($('#cena_sprzedazy').val()) * Number($('#rabat').val()) / Number(100), 2));

                }
            }
        });
        $('#rabat').on('keyup keydown', function () {
            if ($('#rabat').val() != "" & $('#rabat').val() != "") {
                if (Number($('#rabat').val()) > Number($('#marza').val()))
                {
                    $('#alert1').css('display', 'block');
                    $('#h4_alert').html('Uwaga rabat większy od marży');
                } else {
                    $('#cena_rabat').val(Round(Number($('#cena_sprzedazy').val()) - (Number($('#cena_sprzedazy').val()) * Number($('#rabat').val())) / Number("100"), 2));
                    $('#alert1').css('display', 'none');
                    $('#h4_alert').html('');
                }
            } else {
                $('#cena_rabat').val($('#cena_sprzedazy').val());
            }
        });

    });

    // fakturuj click strona głowna

    $(function () {
        $('#fakturuj').click(function () {
            var rodzaj = document.getElementById('symbol').value;
            switch (rodzaj)
            {
                case "0":
                    $('#alert2').css('display', 'block');
                    $('#h_alert2').html('Wybierz typ dokumentu i asortyment');
                    break;
                case "1":
                    $('#alert2').css('display', 'block');
                    $('#h_alert2').html('Bilans otwarcia nie podlega fakturowaniu');
                    break;
                case "2":
                    $('#alert2').css('display', 'block');
                    $('#h_alert2').html('Przyjęcie Wewnętrzne nie podlega fakturowaniu');
                    break;
                case "3":
                    if ($('#data').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wskaż date dokumentu magazynowego');
                    } else if ($('#kontrahent').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wskaż kontrahenta');
                    } else if ($('#wartosc').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wybierz asortyment');
                    } else if ($('#numer_faktury').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Podaj numer faktury dostawy');
                    } else if ($('#data_faktury').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wskaż date faktury dostawy');
                    } else if ($('#termin_faktury').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wskaż termin zapłaty za fakturę dostawy');
                    } else if ($('#forma_zaplaty').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wybierz forme zapłaty za fakture dostawy');
                    }

                    $('#myModal6').modal();
                    break;
                case "4":
                    $('#alert2').css('display', 'block');
                    $('#h_alert2').html('Rozchód Wewnęczny nie podlega księgowaniu');
                    break;
                case "5":
                    if ($('#data').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wskaż date dokumentu magazynowego');
                    } else if ($('#kontrahent').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wskaż kontrahenta');
                    } else if ($('#wartosc').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wybierz asortyment');
                    } else if ($('#numer_faktury').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Podaj numer faktury sprzedży');
                    } else if ($('#data_faktury').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wskaż date faktury sprzedży');
                    } else if ($('#termin_faktury').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wskaż termin zapłaty za fakturę sprzedaży');
                    } else if ($('#forma_zaplaty').val() == "") {
                        $('#alert2').css('display', 'block');
                        $('#h_alert2').html('Wybierz forme zapłaty za fakture sprzedaży');
                    }

                    $('#myModal7').modal();
                    break;

            }
        });
    });

// numer_faktury keyup keydown

    $(function () {

        $('#numer_faktury').on('keyup keydown', function () {
            if (this != "") {
                $('#alert2').css('display', 'none');
                $('#h_alert2').html('');
            }

        });
    });

// cena_zakupu cena_sprzedazy ilosc keydown keyup zamiana kropki

    $(function () {
        $('#cena_sprzedazy ,#cena_zakupu,#ilosc,#rabat').on('keyup kyedown', function () {
            this.value = this.value.replace(/,/g, ".");
            this.value = (/^\d*\.?\d*$/g.test(this.value)) ? this.value : "";


        });
    });

//min stan mag i okres zbywania  nowy towar keyup keydown zamiana kropki

    $(function () {
        $('#part_8b ,#part_10b').on('keyup keydown', function () {
            this.value = this.value.replace(/,/g, ".");
            this.value = (/^\d*\.?\d*$/g.test(this.value)) ? this.value : "";


        });
    });


    function Round(n, k)
    {
        var factor = Math.pow(10, k + 1);
        n = Math.round(Math.round(n * factor) / 10);
        return n / (factor / 10);
    }
</script>