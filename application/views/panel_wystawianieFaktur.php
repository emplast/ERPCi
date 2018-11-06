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
                <h3 class="box-title">Fakturowanie dokumentów magazynowych</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th>Numer dokumentu</th>
                            <th>Rodzaj</th>
                            <th>Data</th>
                            <th>Kontrahent</th>
                            <th>Wartość</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1/2018</td>
                            <td>BO</td>
                            <td>2018-08-01</td>
                            <td>Emplast</td>
                            <td>450,23</td>
                        </tr> 
                        <tr>
                            <td>2/2018</td>
                            <td>WZ</td>
                            <td>2018-08-03</td>
                            <td>Emsoft</td>
                            <td>350,35</td>
                        </tr> 
                         <tr>
                            <td>1/2018</td>
                            <td>WZ</td>
                            <td>2018-08-02</td>
                            <td>Emsoft</td>
                            <td>750,32</td>
                        </tr> 
                         <tr>
                            <td>3/2018</td>
                            <td>WZ</td>
                            <td>2018-08-03</td>
                            <td>Emar</td>
                            <td>35,20</td>
                        </tr> 
                         <tr>
                            <td>1/2018</td>
                            <td>PZ</td>
                            <td>2018-08-03</td>
                            <td>Darex</td>
                            <td>450,23</td>
                        </tr> 
                        <tr>
                            <td>1/2018</td>
                            <td>RW</td>
                            <td>2018-08-03</td>
                            <td>Emplast</td>
                            <td>450,23</td>
                        </tr> 
                        
                    </tbody>
                </table>
                <input  type="hidden" id="typ">
                <br/><br/>
                <hr>
                <table id="example2" class="table table-bordered table-striped" style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Magazyn</th>
                            <th>Indeks</th>
                            <th>Kod EAN</th>
                            <th>Nazwa asortymentu</th>
                            <th>Jm</th>
                            <th>Ilość</th>
                            <th>Cena netto</th>
                            <th>Rabat</th>
                            <th>Cena zakupu</th>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
            </div>
            <div class="box-footer">
                <div class="form-group">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <input type="button" class="btn btn-warning" id="fakturuj" value="Fakturuj">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--Modal fakturuj-->
<div class="modal" id="myModal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Fakturowanie dokumentów</h4>
            </div>
            <div class="modal-body">
                <div class="box box-warning">
                    <form action="" class="form-horizontal" method="POST">
                        <div class="box-body">
                            <br/><br/>
                            <div class="alert alert-info" id="alert"style="display: none;">
                                <h3 id="h_alert"></h3>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="kontrahent">Kontrahent:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"id="kontrahent" name="part_1"disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="numer_faktury">Numer faktury:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"id="numer_faktury" name="part_2">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="data_faktury">Data faktury:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"id="data_faktury" name="part_3" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="platnosc">Forma płatności:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"id="platnosc" name="part_4"disabled>
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" class="btn btn-success"id="platnosc_wybierz" value="Wybierz" name="part_5">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="transport">Forma transportu:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"id="transport" name="part_6"disabled>
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" class="btn btn-warning"id="transport_wybierz" value="Wybierz" name="part_7">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="wartosc">Wartość:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"id="wartosc" name="part_8" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="zaplacono">Zapłacono:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"id="zaplacono" name="part_9">
                                </div>
                            </div>


                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-4">

                                </div>
                                <div class="col-sm-2">
                                    <input type="submit" class="btn btn-primary"id="ok" data-dismiss="modal" value="Ok" name="part_10">
                                </div>
                                <div class="col-sm-2">
                                    <input type="button" class="btn btn-danger"id="ok" value="Anuluj" data-dismiss="modal" name="part_10">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!--Modal forma płatności-->



<div class="modal" id="myModal2" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Domyślna forma płatności</h4>
            </div><div class="container"></div>
            <div class="modal-body">
                <br/>
                <br/>
                <table id="example3" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nazwa</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gotówka</td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>przelew 3 dni</td>

                        </tr>
                        <tr>
                            <td>3</td>
                            <td>przelew 7 dni</td>


                        </tr>
                        <tr>
                            <td>4</td>
                            <td>przedpłata 50%</td>

                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-danger" value="Wybierz"data-dismiss="modal">
            </div>
        </div>
    </div>
</div>



        <!--Modal sposób transportu-->
        
        
<div class="modal" id="myModal3" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Formy transportu</h4>
            </div><div class="container"></div>
            <div class="modal-body">
                <table id="example4" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nazwa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Własny</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kurier</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Poczta list</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Poczta paczka</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-danger" value="Wybierz"data-dismiss="modal">
            </div>
        </div>
    </div>
</div>
        

<script type="text/javascript">
    $(function () {

        $('#example1').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            }
        });


        $('#example2').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            }
        });
        var table = $('#example1').DataTable(),
                tabela = $('#example2').DataTable();
        $('#example1 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                table.$('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#typ').val(data[1]);
                tabela.row.add([
                    '1',
                    '1/A',
                    '1',
                    '2000001000016',
                    'Kolano 110 90°',
                    'szt.',
                    '50',
                    '0',
                    '0',
                    '1,80'
                ]).draw();
                tabela.row.add([
                    '2',
                    '1/A',
                    '2',
                    '2000001000025',
                    'Kolano 110 67°',
                    'szt.',
                    '150',
                    '0',
                    '0',
                    '1,60'
                ]).draw();
                tabela.row.add([
                    '3',
                    '1/A',
                    '3',
                    '2000001000016',
                    'Kolano 110 45°',
                    'szt.',
                    '75',
                    '0',
                    '0',
                    '1,40'
                ]).draw();
                $('#kontrahent').val(data[3]);
                $('#wartosc').val(data[4]);
                $.ajax({
                    type:"POST",
                    url:'ajaxNumer',
                    data:"typ="+$('#typ').val(),
                    dataType:'text',
                    success:function(msg){
                        $('#numer_faktury').val(msg);
                        
                    },
                    error:function(){
                        alsert('error');
                    }
                });
            }
        });
    });
    $(function () {

        var table = $('#example2').DataTable();
        $('#example2 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                table.$('tr.success').removeClass('success');
                $(this).addClass('success');
            }
        });
    });
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
                $('#platnosc').val(data[1]);

            }

        });

    });
     $(function () {

        $('#example4').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            }
        });
        var table = $('#example4').DataTable();
        $('#example4 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                table.$('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#transport').val(data[1]);

            }

        });

    });
    
    $(function () {
        $('#fakturuj').click(function () {
            switch($('#typ').val()){
                case "BO":
                    $('#numer_faktury').prop('disabled',true);
                    $('#data_faktury').prop('disabled',true);
                    $('#zaplacono').prop('disabled',true);
                    $('#transport_wybierz').prop('disabled',true);
                    $('#platnosc_wybierz').prop('disabled',true);
                    $('#alert').css('display','block');
                    $('#h_alert').html('Dokument nie podlega fakturowaniu');
                    break;
                case "PW":
                    $('#numer_faktury').prop('disabled',true);
                    $('#data_faktury').prop('disabled',true);
                    $('#zaplacono').prop('disabled',true);
                    $('#transport_wybierz').prop('disabled',true);
                    $('#platnosc_wybierz').prop('disabled',true);
                    $('#alert').css('display','block');
                    $('#h_alert').html('Dokument nie podlega fakturowaniu');
                    break;
                case "PZ":
                    $('#numer_faktury').prop('disabled',false);
                    $('#data_faktury').prop('disabled',false);
                    $('#zaplacono').prop('disabled',false);
                    $('#transport_wybierz').prop('disabled',false);
                    $('#platnosc_wybierz').prop('disabled',false);
                    $('#alert').css('display','none');
                    break;
                case "RW":
                    $('#numer_faktury').prop('disabled',true);
                    $('#data_faktury').prop('disabled',true);
                    $('#zaplacono').prop('disabled',true);
                    $('#transport_wybierz').prop('disabled',true);
                    $('#platnosc_wybierz').prop('disabled',true);
                    $('#alert').css('display','block');
                    $('#h_alert').html('Dokument nie podlega fakturowaniu');
                    break;
                case "WZ":
                    $('#numer_faktury').prop('disabled',true);
                    $('#data_faktury').prop('disabled',false);
                    $('#zaplacono').prop('disabled',false);
                    $('#transport_wybierz').prop('disabled',false);
                    $('#platnosc_wybierz').prop('disabled',false);
                    $('#alert').css('display','none');
                    break;
                default:
                    $('#numer_faktury').prop('disabled',false);
                    $('#data_faktury').prop('disabled',false);
                    $('#zaplacono').prop('disabled',false);
                    $('#transport_wybierz').prop('disabled',false);
                    $('#platnosc_wybierz').prop('disabled',false);
                    $('#alert').css('display','none');
                    break;
                    
                    
            }
            $('#myModal').modal();
        });
        $('#platnosc_wybierz').click(function () {
            $('#myModal2').modal();
        });
        $('#transport_wybierz').click(function () {
            $('#myModal3').modal();
        });
        $('#data_faktury').datepicker({
            yearRange: '2016:<?php echo date('Y') ?>',
            dateFormat: 'yy-mm-dd'
        });
    });
    
</script>