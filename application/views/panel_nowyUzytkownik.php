<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <?php echo form_open('Uzytkownicy/dodajNowegoUzytkownika', array('class' => 'form-horizontal')) ?>
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-male"></i>&nbsp;&nbsp;&nbsp;Nowy użytkownik firmy<i><b> <?php echo $firma ?></b></i></h3>
            </div>
            <div class="box-body">

                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="nazwa">Nazwa skrócona firmy:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nazwa" name="part_1" value="<?php echo $firma ?>" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="imie">Imie:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="imie" name="part_2" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="nazwisko">Nazwisko:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nazwisko" name="part_3" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="miejscowosc">Miejscowość:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="miejscowosc" name="part_4" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="kod_pocztowy">Kod pocztowy:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="kod_pocztowy" name="part_5" class="form-control">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-3">
                        <label for="ulica">Ulica:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="ulica" name="part_6" class="form-control">
                    </div>
                </div>
                <div class="form-group">    
                    <div class="col-sm-3">
                        <label for="nr_lokalu">Numer lokalu:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nr_lokalu" name="part_7" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="telefon">Telefon:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="telefon" name="part_8" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="email">E-mail:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" id="email" name="part_9" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="login">Login:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="login" name="part_10" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="haslo">Hasło:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="password" id="haslo" name="part_11" class="form-control">
                    </div>
                </div>

            </div>
            <div class="box-footer">
                <input type="submit"value="Dodaj" class="btn btn-success pull-right">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>