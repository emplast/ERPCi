<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>

    <div class="col-sm-6">
        <?php echo form_open('KartotekiMagazyn/usun')?>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Zestawienie magazynów firmy <i><b><?php echo $firma?></b></i></h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Symbol</th>
                            <th>Opis</th>
                            <th>Usuń</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1/A</td>
                             <td>Magazyn art budowlanych</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1/B</td>
                            <td>Magazyn leków</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2/A</td>
                            <td>Magazyn kolan kanalizacyjnych</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2/B</td>
                             <td>Magazyn rur kanalizacyjnych</td>
                            <td><input type="checkbox"></td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="box-footer">
                <input type="submit" value="Usuń" class="btn btn-danger pull-right">
            </div>
        </div>
        <?php echo form_close();?>
    </div>
    <div class="col-sm-6">
        <?php echo form_open('KartotekiMagazyn/dodaj')?>
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Dodawanie magazynów</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="symbol">Symbol magazynu:</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="symbol" name="part_1">
                    </div>
                    <div class="col-sm-1">
                        <label for="symbol_1">/</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="symbol_1" name="part_2">
                    </div>
                </div><br/><br/>
                <div class="col-sm-12"></div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nazwa">Opis magazynu:</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="part_3"id="opis">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <input type="submit" value="Dodaj magazyn" class="btn btn-primary pull-right">
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
    { "width": "10%", "targets": 0 },
    { "width": "10%", "targets": 1 },
    { "width": "10%", "targets": 3 }
  ]
      
    });
   
  });
  
</script>
