<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="col-sm-12" style="height: 150px;"></div>
<div class="row">
    <div class="col-sm-2" style="height: 150px;"></div>
    <div class="col-sm-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Inwentaryzacje</h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" action="">
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="data">Na dzień:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="data" name="part_1" autocomplete="off">
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="wartosc">Wartość:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"id="wartosc" name="part_2" autocomplete="off">
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-sm-4">
                            <label for="podlega">Podlega księgowaniu:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" id="podlega" name="part_3">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-primary" value="Zapisz">
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <br/><br/>
                <hr><br/><br/><br/>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Podlega</th>
                            <th>Data</th>
                            <th>Wartość</th>
                            <th>Uwagi</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tak</td>
                            <td>2018-01-01</td>
                            <td>15000</td>
                            <td>Inwentaryzacja początkowa</td>
                        </tr>
                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
$(function(){
    $('#data').datepicker({
        yearRange: '2016:<?php echo date('Y')?>',
        dateFormat: 'yy-mm-dd',
    });
});


$(function () {

        $('#example1').DataTable({

            "language": {
                "url": "../../bower_components/datatables.net-bs/json/pl.json"
            },
            

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
               
            }

        });
    });
</script>
