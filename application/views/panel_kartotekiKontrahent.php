<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php echo form_open('KartotekiKontrahent/usun') ?>
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Kontrahenci firmy <b><i><?php echo $firma ?></i></b></h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nazwa skrócona</th>
                            <th>Miejscowość</th>
                            <th>Ulica</th>
                            <th>Nr</th>
                            <th>NIP</th>
                            <th>Telefon</th>
                            <th>E-mail</th>
                            <th>Preferowana forma sprzedaży</th>
                            <th>Usuń</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Emplast</td>
                            <td>Milicz</td>
                            <td>Kościuszki</td>
                            <td>48</td>
                            <td>916-100-17-59</td>
                            <td>788 308 893</td>
                            <td>emplast@wp.pl</td>
                            <td>Cena sprzedaży 1</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Emsoft</td>
                            <td>Milicz</td>
                            <td>Kościuszki</td>
                            <td>48</td>
                            <td>916-100-17-59</td>
                            <td>788 308 893</td>
                            <td>emplast.pm@gmail.com</td>
                            <td>Cena sprzedaży 1</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fama</td>
                            <td>Milicz</td>
                            <td>Kościuszki</td>
                            <td>56</td>
                            <td>916-100-56-60</td>
                            <td>602 663 563</td>
                            <td>fama@wp.pl</td>
                            <td>Cena sprzedaży 1</td>
                            <td><input type="checkbox"></td>

                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Milano</td>
                            <td>Milicz</td>
                            <td>Nowowiejska</td>
                            <td>4</td>
                            <td>916-120-12-56</td>
                            <td>505 456 231</td>
                            <td>milano@wp.pl</td>
                            <td>Cena sprzedaży 2</td>
                            <td><input type="checkbox"></td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="box-footer">
                <input type="submit" value="Usuń" class="btn btn-danger pull-right">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
    <div class="col-sm-12"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php echo form_open('KartotekiKontrahent/dodaj') ?>
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Dodawanie nowego kontrahenta</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nazwa">Nazwa skrócona:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nazwa" name="part_1">
                    </div>
                </div><br/><br/>

                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nazwa_pelna">Nazwa pełna:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nazwa_pelna" name="part_2">
                    </div>
                </div><br/><br/>
                <div id="exTab1"class="tab-content" >
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#1a" data-toggle="tab">Dane podstawowe</a></li>
                        <li><a href="#2a" data-toggle="tab">Dane dotyczące sprzedaży</a></li>

                    </ul>
                    <div class="tab-content clearfix"> 

                        <!--Moduł dane ogólne-->


                        <div class="tab-pane active" id="1a" >
                            <br/><br/>
                            <div class="form-group">
                                <div class="col-sm-1">
                                    <label for="miejscowosc">Miejscowość:</label>
                                </div>

                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="part_3" id="miejscowosc">
                                </div>
                                <div class="col-sm-1">
                                    <label for="kod">Kod:</label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="kod" name="part_4">
                                </div>
                                <div class="col-sm-1">
                                    <label for="ulica">Ulica:</label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="ulica" name="part_5">
                                </div>
                                <div class="col-sm-1">
                                    <label for="nr_lokalu">Nr lokalu:</label>
                                </div>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="nr_lokalu" name="part_6">
                                </div>
                            </div>
                            <br/><br/>
                            <div class="form-group">
                                <div class="col-sm-1">
                                    <label for="nip">NIP:</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="nip" name="part_7">
                                </div>
                                <div class="col-sm-1">
                                    <label for="pesel">PESEL:</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="pesel" name="part_8">
                                </div>
                            </div><br/><br/>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="bank">Nazwa banku:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="bank" name="part_9">
                                </div>
                                <div class="col-sm-2">
                                    <label for="konto">Nr konta:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="konto" name="part_10">
                                </div>
                            </div><br/><br/>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="telefon">Telefon:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="telefon" name="part_11">
                                </div>
                                
                           
                                <div class="col-sm-2">
                                    <label for="email">E-mail:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" id="telefon" name="part_12">
                                </div>
                                
                            </div>
                        </div>
                            <!--Moduł sprzedaży-->

                            <div class="tab-pane active" id="2a" >
                                <br/><br/>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label for="osoba">Osoba upoważniona do odbioru faktur:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="osoba" name="part_13"> 
                                    </div>
                                </div><br><br/>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label for="rabat">Udzielony rabat przy sprzedaży:</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control"max="100"min="0" id="rabat" name="part_14"> 
                                    </div><div class="col-sm-2">
                                        <label >w %</label>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-12"></div><br/><br/>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label for="cena">Preferowana cena sprzedaży:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select id="cena" name="part_15" class="form-control">
                                            <option></option>
                                            <option>Cena sprzedaży I</option>
                                            <option>Cena sprzedaży II</option>
                                            <option>Cena sprzedaży III</option>
                                            <option>Cena sprzedaży IV</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="box-footer">
                    <input type="submit" value="Dodaj kontrahenta" class="btn btn-primary pull-right">
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {

            $('#example1').DataTable({

                "language": {
                    "url": "../../bower_components/datatables.net-bs/json/pl.json"
                },
                "columnDefs": [
                    {"width": "3%", "targets": 0},
                    {"width": "5%", "targets": 4},
                    {"width": "15%", "targets": 5},
                    {"width": "15%", "targets": 6},
                    {"width": "2%", "targets": 9}
                ]

            });

        });

    </script>
