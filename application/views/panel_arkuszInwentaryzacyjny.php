<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php echo form_open('ArkuszInwentaryzacyjny/sporzadz') ?>
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Arkusz inwentaryzacyjny</h3>
            </div>
            
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Indeks</th>
                            <th>Nazwa asortymentu</th>
                            <th>Ilość</th>
                            <th>Cena</th>
                            <th>Wartość</th>
                            <th>Kod EAN-13</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1/A/1</td>
                            <td>Kolano ø 110<90°</td>
                            <td>100</td>
                            <td>2,18</td>
                            <td>218</td>
                            <td><canvas id="kod1" width="100" height="50"style="background-color: whitesmoke;"></canvas></td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1/A/2</td>
                            <td>Kolano ø 110<67°</td>
                            <td>100</td>
                            <td>2,67</td>
                            <td>267</td>
                            <td><canvas id="kod2" width="100" height="50"style="background-color: whitesmoke;"></canvas></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1/A/3</td>
                            <td>Kolano ø 110<45°</td>
                            <td>100</td>
                            <td>2,00</td>
                            <td>200</td>
                            <td><canvas id="kod3" width="100" height="50"style="background-color: whitesmoke;"></canvas></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1/A/4</td>
                            <td>Kolano ø 110<22°</td>
                            <td>50</td>
                            <td>2,00</td>
                            <td>100</td>
                            <td><canvas id="kod4" width="100" height="50"style="background-color: whitesmoke;"></canvas></td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="box-footer">
                <div class="col-sm-1"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="data">Utwórz arkusz na dzień</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="data"name="part_1"autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-12"></div><br/><br/>
                <div class="col-sm-1"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="magazyny">Wszystkie magazyny:</label>
                    </div>
                    <div class="col-sm-1">
                        <input type="checkbox"  id="magazyny"name="part_2"checked>
                    </div>
                    <div class="alert alert-danger col-sm-4" id="alert" style="display: none">
                        <p>Musisz wybrać magazyn poniżej lub zatwierdzić wybór wszystkich magazynów!!!</p>
                    </div>
                </div>
                <div class="col-sm-12"></div><br/><br/>
                <div class="col-sm-1"></div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="magazyn">Wybierz magazyn:</label>
                    </div>
                    <div class="col-sm-4">
                        <select id="magazyn" class="form-control" name="part_3">
                            <option value="0"></option>
                            <option>Magazyn podstawowy</option>
                            <option>Magazyn art budowlanych</option>
                            <option>Magazyn leków</option>
                            <option>Magazyn kolan kanalizacyjnych</option>
                            <option>Magazyn rur kanalizacyjnych</option>
                        </select>
                    </div>
                </div>
                <br/><br/><br/>
                <div class="form-group center-block">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-1">   
                        <input type="submit" value="Utwórz" class="btn btn-success">
                    </div>
                    <div class="col-sm-1">
                        <input type="submit" value="Drukuj" class="btn btn-default">
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close();?>
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
                {"width": "5%", "targets": 1},
                {"width": "15%", "targets": 3},
                {"width": "15%", "targets": 4}

            ]

        });

    });
    $(function () {
        $('#data').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '2016:<?php echo date('Y') ?>',
            showButtonPanel: true,
            dateFormat: 'yy-mm-dd',
        });
        $.datepicker.regional.pl;
    });
    $(function () {
        $('#magazyn').change(function () {
            if ($('#magazyn').val() == "0") {
                $('#magazyny').prop('disabled', false);
                $('#magazyny').prop('checked',true);
            } else {
                $('#magazyny').prop('disabled', true);
                $('#magazyny').prop('checked', false);
                $('#alert').css('display','none');
            }
        });
        $('#magazyny').click(function(){
        document.getElementById('magazyny').checked?
        $('#alert').css('display','none'):
                $('#alert').css('display','block');
        });
       
    });
    $(function(){
     var context = document.getElementById('kod1')
     context.getContext('2d');
    
     $('#kod1').EAN13("2000001000016");
     $('#kod2').EAN13("2000001000025");
     $('#kod3').EAN13("2000001000034");
     $('#kod4').EAN13("2000001000043");
});
</script>
