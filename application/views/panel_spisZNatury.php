<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

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
                <h3 class="box-title">Spis z natury</h3>
            </div>
            <div class="box-body">
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="recznie">Wybierz zapis ręczny:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="checkbox" name="part_1" id="recznie">
                    </div>
                </div><br/><br/>
                <form action="ajaxExcel" method="POST" id="form" enctype="multipart/form-data">
                    <div class="col-sm-2"></div>

                    <div class="form-group" id="excel">
                        <div class="col-sm-2">
                            <label for="vat">Pobierz plik Excel'a:</label>
                        </div>
                        <div class="col-sm-3">
                            <span class="btn btn-primary btn-file"><i class="fa fa-download">&nbsp;&nbsp;Wybierz plik</i><input type="file" id="userfile" name="userfile"</span>
                        </div>
                        <div class="col-sm-3">
                            <input type="submit" class="btn btn-default" id="pobierz" value="Pobierz">
                        </div>
                    </div><br/><br/>
                </form>
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="numer">Numer spisu z natury:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="part_2" id="numer"disabled class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="button"  class="btn btn-success" value="Otwórz nowy spis z natury">
                    </div>
                    <div class="col-sm-2">
                        <input type="button"  class="btn btn-danger" value="Zamknij i rozlicz spis z natury">
                    </div>
                </div><br/><br/>
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
                        <label for="stan">Stan magazynowy:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="stan" name="part_6"disabled=""> 
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
                        <label for="stwierdzono">Stwierdzono:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="stwierdzono" name="part_8" disabled> 
                    </div>
                </div>
                <br/><br/>
                <div class="col-sm-2"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="edytuj">Edytuj:</label>
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox"  id="edytuj" name="part_8"> 
                    </div>
                    <div class="col-sm-1">
                        <input  type="button" class="btn btn-primary" value="Edytuj" id="edytuj_1" style="display:none">
                    </div>
                    <div class="col-sm-1">
                        <input type="button" class="btn btn-danger" id="usun" value="Usuń" style="display:none"> 
                    </div>
                </div>



                <br/><br/>
                <hr><br/><br/><br/>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Indeks</th>
                            <th>Nazwa asortymentu</th>
                            <th>Jm</th>
                            <th>Stan</th>
                            <th>Stwierdzono</th>
                            <th>Cena sprzedaży</th>
                            <th>Typ</th>
                            <th>VAT</th>
                            <th>Kod EAN-13</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < $id; $i++): ?>                            

                            <tr>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $indeks[$i]; ?></td>
                                <td><?php echo $nazwa[$i]; ?></td>
                                <td><?php echo $jednostka[$i]; ?></td>
                                <td><?php echo $stan[$i]; ?></td>
                                <td><?php echo $stwierdzono[$i]; ?></td>
                                <td><?php echo $cena[$i]; ?></td>
                                <td><?php echo $typ[$i]; ?></td>
                                <td><?php echo $vat[$i] ?></td>
                                <td><?php echo $ean[$i]; ?></td>

                            </tr>
                        <?php endfor; ?>
                    </tbody>

                </table>
            </div>

            <div class="box-footer">
                <div class="form-group" >
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4">
                        <input type="button" value="Dodaj asortyment" class="btn btn-success"id="dodaj" style="display: none;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal nowy towar spis z natury-->

<div class="modal" id="myModal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Wprowadzanie nowego towaru do spisu z natury</h3>
                    </div>
                    <div class="box-body">
                        <div class="row" id="brak"style="display:none">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <div class="alert alert-info" >
                                    <h3 class="text-center">Nie dodano asortymentu do magazynów</h3>
                                </div>
                            </div>
                        </div><br/>
                        <br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="numer1">Numer spisu z natury:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="numer1" name="part_1a" disabled>
                            </div>
                        </div><br/><br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="kod1">Kod EAN-13:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="kod1" name="part_2a">
                            </div>
                        </div><br/><br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="indeks1">Indeks:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="indeks1" name="part_2a" disabled>
                            </div>
                        </div><br/><br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="nazwa1">Nazwa asortymentu:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="nazwa1" name="part_3a" disabled>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="jednostka1">Jednostka miary:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="jednostka1" name="part_4a" disabled>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="typ1">Typ:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="typ1" name="part_5a" disabled>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="vat1">Stawka VAT:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="vat1" name="part_6a" disabled>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="cena1">Cena sprzedaży:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="cena1" name="part_7a">
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="stan1">Stan:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="stan1" name="part_8a" disabled>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="stwierdzono1">Stwierdzono:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="stwierdzono1" name="part_9a">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-3">
                            <input type="submit" value="Dodaj" class="btn btn-success">
                        </div>
                    </div>
                </div>
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
                $('#stan').attr('value', data[4]);
                $('#jednostka').attr('value', data[3]);
                $('#cena').attr('value', data[6]);
                $('#cena_zakupu').attr('value', data[6]);
                $('#typ').attr('value', data[7]);
                $('#vat').attr('value', data[8]);
                $('#stwierdzono').attr('value', data[5]);
            }

        });
        var lista = [], count = table.column(0).nodes().length, suma = 0, record = [];
        lista.map(Number);
        
        for (var i = 0; i < count; i++) {
            var data = table.row(i).data();
            for (var j = 0; j < count; j++) {
                var data_1 = table.row(j).data();
                if (Number(data_1[9]) === Number(data[9]) & i != j) {
                    lista.push(data_1[5]);
                    record.push(i);

                }
            }
        }
        $.each(lista, function () {
            suma += Number(this);
        });

        for (var i = 0; i < count; i++) {
            var data = table.row(i).data();

            
               
                if (  Number(data[5]) < Number(data[4])) {
                    $(table.column(5).nodes()[i]).addClass('danger');
                     
                }
                if ( Number(data[5]) > Number(data[4])) {
                    $(table.column(5).nodes()[i]).addClass('info');

                }
                
       
        }

       
        $.each(record, function () {
            var data = table.row(this).data();

            if (Number(suma) < Number(data[4])) {
                $(table.column(5).nodes()[this]).removeClass('info');
                $(table.column(5).nodes()[this]).addClass('danger');
                
            }
            if (Number(suma) > Number(data[4])) {
                $(table.column(5).nodes()[this]).removeClass('danger');
                $(table.column(5).nodes()[this]).addClass('info');
               
            }
            
        });

    });

    $(function () {
        $('#recznie').on('click', function () {
            if (document.getElementById('recznie').checked)
            {
                $('#dodaj').css('display', 'block');
                $('#excel').css('display', 'none');
<?php $this->session->unset_userdata('dane'); ?>
            } else
            {
                $('#dodaj').css('display', 'none');
                $('#excel').css('display', 'block');
            }
        });
    });
    $(function () {
        $('#dodaj').click(function () {
            $('#myModal').modal();
        });
        $('#kod1').on('keyup keydown', function () {
            var kod = $('#kod1').val();
            if (kod.length == 13) {

                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    data: {"kodEAN": kod},
                    url: 'ajaxData',
                    success: function (msg) {
                        if (msg['brak'] == '0') {
                            $('#jednostka1').attr('value', msg['jednostka']);
                            $('#indeks1').attr('value', msg['indeks']);
                            $('#typ1').attr('value', msg['typ']);
                            $('#vat1').attr('value', msg['vat']);
                            $('#nazwa1').attr('value', msg['nazwa']);
                            $('#numer1').attr('value', msg['numer']);
                            $('#stan1').attr('value', msg['stan']);
                            $('#brak').css('display', 'none');
                        } else {
                            $('#brak').css('display', 'block');
                        }
                    },
                    error: function () {
                        alert('error');
                    }
                });
            }
        });
        $('#form').on('submit', function () {
            var formData = new FormData($('#userfile')[0]);


            $.ajax({
                type: "POST",
                data: formData,
                url: 'ajaxExcel',
                dataType: 'text',
                success: function (msg) {
                },
                error: function () {
                    alert('error');
                }
            });
        });
        $('#edytuj').click(function () {
            if (document.getElementById('edytuj').checked)
            {
                $('#edytuj_1, #usun').css('display', 'block');
                $('#stwierdzono').prop('disabled', false);
            } else {
                $('#edytuj_1 ,#usun').css('display', 'none');
                $('#stwierdzono').prop('disabled', true);
            }
        });

    });



</script>


