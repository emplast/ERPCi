<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>

    <div class="col-sm-6">
        <?php echo form_open('KartotekiZaplaty/usun')?>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Zestawienie form zapłaty</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nazwa</th>
                            <th>Usuń</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gotówka</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>przelew 3 dni</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>przelew 7 dni</td>
                            <td><input type="checkbox"></td>
                            
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>przedpłata 50%</td>
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
        <?php echo form_open('KartotekiZaplaty/dodaj')?>
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Dodawanie form zapłaty</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nazwa">Nazwa formy zapłaty:</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nazwa" name="part_1">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <input type="submit" value="Dodaj formę zapłaty" class="btn btn-primary pull-right">
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
    { "width": "10%", "targets": 2 }
  ]
      
    });
   
  });
  
  
</script>
