<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="<?php echo base_url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">

<div class="box">
    <div class="box-header width-border">
        <h3 class="box-title"><i class="fa fa-male"></i> &nbsp;&nbsp;Użytkownicy</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nazwisko</th>
                    <th>Imie</th>
                    <th>Miejscowość</th>
                    <th>Ulica</th>
                    <th>Nr</th>
                    <th>E-mail</th>
                    <th>Nr kom</th>
                    <th>Login</th>
                    <th>Usuń</th>
                </tr>
            </thead>
            <tbody>
            <td>Kowalski</td>
            <td>Jan</td>
            <td>Kobyłka</td>
            <td>Kościelna</td>
            <td>48/2</td>
            <td>j.kowalski@wp.pl</td>
            <td>48788308789</td>
            <td>Kola</td>
            <td><input type="checkbox" id="usuń_1"></td>
            </tbody>

        </table>
    </div>
    
    <!-- /.box-body -->
</div>

<!-- /.box -->
<!--Modal start-->
<?php echo form_open('index.php/Magazyny/work', array('id' => "part_0", 'class' => 'form-horizontal')); ?>
<div class="modal" id="myModal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edycja uzytkownika</h4>
            </div>
            <div class="modal-body">
                <div class="box box-info">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="imie">Imie:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="imie" name="part_1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="nazwisko">Nazwisko:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nazwisko" name="part_2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="miejscowosc">Miejscowość:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="miejscowosc" name="part_3" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-sm-3">
                                <label for="ulica">Ulica:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="ulica" name="part_4" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">    
                            <div class="col-sm-3">
                                <label for="nr_lokalu">Numer lokalu:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nr_lokalu" name="part_5" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="telefon">Telefon:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="telefon" name="part_6" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="email">E-mail:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="part_7" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="login">Login:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="login" name="part_8" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="haslo">Hasło:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" id="haslo" name="part_9" class="form-control">
                            </div>
                        </div>
                       
                    </div>
                </div>  
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-3">
                    <a href="<?php echo base_url('index.php/Uzytkownicy/index')?>" id="part_1a"  class="btn btn-success">Edytuj</a>
                    <a href="<?php echo base_url('index.php/Uzytkownicy/usun')?>" id="part_2a"  class="btn btn-danger">Usuń</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>
<?php echo form_close(); ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<script>
    $(function () {

        $('#example1').DataTable({

            "language": {
                "url": "../../json/pl.json"
            }

        });

    });
    $(function () {
        var table = $('#example1').DataTable();

        $('#example1 tbody').on('click', 'tr', function () {
            $('#myModal').modal();
            var data = table.row(this).data();
            var str = data[0];
            var res = str.split('/');
            $('#imie').val(data[1]);
            $('#nazwisko').val(data[0]);
            $('#miejscowosc').val(data[2]);
            $('#ulica').val(data[3]);
            $('#nr_lokalu').val(data[4]);
            $('#telefon').val(data[6]);
            $('#email').val(data[5]);
            $('#login').val(data[7]);

        });

    });
</script>