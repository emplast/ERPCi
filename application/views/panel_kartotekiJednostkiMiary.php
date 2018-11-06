<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>

    <div class="col-sm-6">
        <?php echo form_open('KartotekiJednostkiMiary/usun')?>
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Zestawienie jednostek miary</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nazwa</th>
                            <th>Skrót</th>
                            <th>Usuń</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>kilogram</td>
                            <td>kg.</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>gram</td>
                            <td>g.</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>metr</td>
                            <td>m.</td>
                            <td><input type="checkbox"></td>
                            
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>litr</td>
                            <td>l.</td>
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
        <?php echo form_open('KartotekiTransport/dodaj',array('class'=>'form-horizontal'))?>
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Dodawanie jednostek miary</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nazwa">Nazwa jednostki miary:</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nazwa" name="part_1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="skrot">Skrót jednostki miary:</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="skrot" name="part_">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <input type="submit" value="Dodaj jednostkę miary" class="btn btn-primary pull-right">
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
    { "width": "10%", "targets": 3 }
  ]
      
    });
   
  });
  
</script>
