<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../dist/js/jquery-ean13.js"></script>
<style type="text/css">
    .selectedRow{
        background: lightblue;
    }
</style>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Kartoteki Towarów</h3>
            </div>
            <div class="box-body">
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="magazyn">Magazyn:</label>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" id="magazyn" name="part_1">
                            <option>Wybór magazynu</option>
                            <option>Magzayn podstawowy</option>
                            <option>Magazyn art budowlanych</option>
                            <option>Magazyn leków</option>
                            <option>Magazyn kolan kanalizacyjnych</option>
                            <option>Magazyn rur</option>
                        </select>
                    </div>
                </div>

                <br/><br/>
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="indeks">Indeks</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="indeks" name="part_2"disabled> 
                    </div>
                </div>

                <br/><br/>
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="ean">Kod kreskowy EAN-13:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="ean" name="part_2"disabled> 
                    </div>
                    <div class="col-sm-3">
                        <canvas id="canvas_ean" width="150" height="75" style="margin-top: -50px;"></canvas>
                    </div>
                </div>
                <br/><br/>
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="nazwa">Nazwa:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nazwa" name="part_3"disabled> 
                    </div>

                </div>
                <br/><br/>
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="jednostka">Jednostka miary:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="jednostka" name="part_3"disabled> 
                    </div>
                    <div class="col-sm-2">
                        <label for="cena">Cena sprzedaży netto:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="cena" name="part_4"disabled> 
                    </div>

                </div>
                <br/><br/>
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="typ">Typ:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="typ" name="part_5"disabled> 
                    </div>
                    <div class="col-sm-2">
                        <label for="cena_zakupu">Cena zakupu:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="cena_zakupu" name="part_6"disabled=""> 
                    </div>

                </div>
                <br/><br/>
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="vat">Stawka VAT:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="vat" name="part_7"disabled> 
                    </div>
                    <div class="col-sm-2">
                        <label for="stan">Stan magazynowy:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="stan" name="part_8" disabled> 
                    </div>
                </div>
                <hr><br/><br/><br/>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Indeks</th>
                            <th>Nazwa asortymentu</th>
                            <th>Ilość</th>
                            <th>Jm</th>
                            <th>Cena sprzedaży</th>
                            <th>Cena zakupu</th>
                            <th>Typ</th>
                            <th>VAT</th>
                            <th>Kod EAN-13</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1/A/1</td>
                            <td>Kolano ø 110 90°</td>
                            <td>100</td>
                            <td>Szt.</td>
                            <td>2,18</td>
                            <td>2,00</td>
                            <td>Towar</td>
                            <td>23%</td>
                            <td>2000001000016</td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1/A/2</td>
                            <td>Kolano ø 110 67°</td>
                            <td>100</td>
                            <td>Szt.</td>
                            <td>2,67</td>
                            <td>1,89</td>
                            <td>Towar</td>
                            <td>23%</td>
                            <td>2000001000025</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1/A/3</td>
                            <td>Kolano ø 110 45°</td>
                            <td>100</td>
                            <td>Szt.</td>
                            <td>2,00</td>
                            <td>1,6</td>
                            <td>Towar</td>
                            <td>23%</td>
                            <td>2000001000034</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1/A/4</td>
                            <td>Kolano ø 110 22°</td>
                            <td>50</td>
                            <td>Szt.</td>
                            <td>2,00</td>
                            <td>1,85</td>
                            <td>Towar</td>
                            <td>23%</td>
                            <td>2000001000043</td>
                        </tr>
                    </tbody>

                </table>

            </div>
            <div class="box-footer">
                <div class="form-group">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4">
                        <input type="button" value="Dodaj asortyment" class="btn btn-success"id="nowy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal dodawanie nowego towaru-->


<div class="modal" id="myModal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Wprowadź nowy towar</h4>
            </div>
            <div class="modal-body">
                <div class="box box-default">
                    <br/><br/>
                    <?php echo form_open('index.php/KartotekiTowarow/nowy', array('class' => 'form-horizontal')); ?>
                    <div class="form-group">

                        <div class="col-sm-2">
                            <label for="part_1d">Magazyn:</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" id="part_1d">
                                <option>Magzayn podstawowy</option>
                                <option>Magazyn art budowlanych</option>
                                <option>Magazyn leków</option>
                                <option>Magazyn kolan kanalizacyjnych</option>
                                <option>Magazyn rur</option>                             
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="part_2d">Indeks:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="part_2d">
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="part_3d">Kod EAN-13:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="part_3d">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="part_4">Nadaj wewnętrzny kod EAN-13:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" id="nadaj_kod">
                        </div>
                        <div class="col-sm-4">
                            <canvas id="kod" style="background-color: whitesmoke;margin-top: -150px;"width="300"height="150"></canvas>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="part_4d">Nazwa:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="part_4d">
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
                                            <label for="part_5d">Jednostka miary:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="part_5d">
                                            <a href="#" id="part_16d" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-text-width" ></span></a>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="part_6d">Stan magazynowy:</label>              

                                        </div> 
                                        <div class="col-sm-3">
                                            <input type="text"id="part_6d"class="form-control"disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <div class="col-sm-2">
                                            <label for="part_7d">Typ:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control"id="part_7d">
                                                <option selected>Towar</option>
                                                <option>Usługa</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="part_7d">Min. stan magazynowy:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="part_7d">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <div class="col-sm-2">
                                            <label for="part_8d">Stawka VAT:</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <select class="form-control"id="part_8d">
                                                <option selected>23</option>
                                                <option>15</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>&nbsp;&nbsp;%</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="part_9d">Okres zbywania towaru:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"id="part_9d">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="2ad">
                                <h3>Ceny standartowe</h3>
                                <hr></br>
                                <div class="form-group">

                                    <div class="col-sm-2">
                                        <label for="part_10d">Cena sprzedaży 1:</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="part_10d">
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="part_11d">Cena zakupu NETTO:</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="part_11d">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label for="part_12d">Cena sprzedaży 2:</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="part_12d">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="part_13d">Marża</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="part_13d">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label for="part_14d">Cena spraedaży 3:</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="part_14d">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label for="part_15d">Cena sprzedaży 4:</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="part_15d">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group">
                            <div class="col-sm-8"></div>
                            <div class="col-sm-2">
                                <input type="submit"value="Dodaj nowy towar" data-toggle="modal" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">


    $(function () {

        $('#example1').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            },
            select: true,
            "columnDefs": [
                {"width": "3%", "targets": 0},
                {"width": "5%", "targets": 1},
                {"width": "15%", "targets": 2},
                {"width": "7%", "targets": 3},
                {"width": "2%", "targets": 4},
                {"width": "10%", "targets": 5},
                {"width": "10%", "targets": 6},
            ]

        });

    });

    $(function () {
        var table = $('#example1').DataTable();


        $('#example1 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');
            } else {
                table.$('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#indeks').attr('value', data[1]);
                $('#ean').attr('value', data[9]);
                $('#canvas_ean').EAN13(data[9]);
                $('#nazwa').attr('value', data[2]);
                $('#stan').attr('value', data[3]);
                $('#jednostka').attr('value', data[4]);
                $('#cena').attr('value', data[5]);
                $('#cena_zakupu').attr('value', data[6]);
                $('#typ').attr('value', data[7]);
                $('#vat').attr('value', data[6]);
            }

        });


    });
    $(function () {
        $('#nowy').click(function () {
            $('#myModal').modal();
            $('#kod').EAN13('8806086332057');
        });

    });
    $(function () {
        $('#nadaj_kod').click(function ()
        {
            
            var email = $("#email").val();
            if (document.getElementById('nadaj_kod').checked) {
                $.ajax(
                        {
                            type: "post",
                            url: "kodEAN",
                            data: {email: email},
                            success: function (response)
                            {
                                $('#kod').EAN13(response);
                                $('#nadaj_kod').prop('checked', true);

                            },
                            error: function ()
                            {
                                alert("Invalide!");
                            }
                        }
                );
            }else{
                $('#kod').EAN13('8806086332057');
            }
        });
    });
</script>