<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('dist/js/jquery.plugin.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('dist/js/jquery.realperson.js'); ?>"></script>
<script type="text/javascript">
    $(function () {
        $('#defaultReal').realperson();
        $('#defaultReal').realperson('option', {length: 4, includeNumbers: false, hashName: 'realHash', regenerate: 'Niewyrażnie'});

    });

</script>
<style type="text/css">
    .realperson-challenge {
        display: block;
        color: #000;
    }
    .realperson-text {
        font-family: "Courier New",monospace !important;
        font-size: 6px;
        font-weight: bold;
        letter-spacing: -1px;
        line-height: 3px;
        margin-left:0px;;
    }
    .realperson-regen {
        padding-top: 10px;
        font-size: 12px;
        text-align: left;
        cursor: pointer;
        margin-left:0px;

    }
    .realperson-disabled {
        opacity: 0.5;
        filter: Alpha(Opacity=50);
    }
    .realperson-disabled .realperson-regen {
        cursor: default;
    }    
</style>
<div class="row">
    <div class="col-lg-12" style="height: 150px;"></div>
</div>
<div class="col-sm-3"></div>
<div class="col-sm-6"style="background: #e6e8ed">
    <br/><br/><br/><br/>
    <!--<form action="" id="form" class="form-horizontal" method="POST">-->
    <?php echo form_open('index.php/NowaFirma/index',array('class'=>'form-horizontal','id'=>'form'));?>
        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="alert alert-danger col-sm-6" id="alert"style="display:none;">
                <h4 class="text-center" id="h_alert"></h4>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="nazwa">Nazwa skrócona firmy:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" id="nazwa" name="part_1" class="form-control" placeholder="Nazwa skrócona usi być jednym wyrazem bez spacji">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="imie">Imie:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" id="imie" name="part_2" class="form-control" placeholder="Imie">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="nazwisko">Nazwisko:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" id="nazwisko" name="part_3" class="form-control" placeholder="Nazwisko">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="miejscowosc">Miejscowość:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" id="miejscowosc" name="part_4" class="form-control" placeholder="Miejscowość">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="kod_pocztowy">Kod pocztowy:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" id="kod" name="part_5" class="form-control" placeholder="Kod pocztowy">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="ulica">Ulica:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" id="ulica" name="part_6" class="form-control" placeholder="Ulica">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="nr_lokalu">Numer lokalu:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" id="nr_lokalu" name="part_7" class="form-control" placeholder="Numer lokalu">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="email">E-mail:</label>
            </div>
            <div class="col-sm-6">
                <input type="email" id="email" name="part_8" class="form-control" placeholder="E-mail">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="telefon">Numer telefonu:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" id="telefon" name="part_9" class="form-control" placeholder="Numer telefonu">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="login">Login:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" id="login" name="part_10" class="form-control" placeholder="Login">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="haslo">Hasło:</label>
            </div>
            <div class="col-sm-6">
                <input type="password" id="haslo" name="part_11" class="form-control" placeholder="Hasło">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="defaultReal">Przepisz tekst</label>
            </div>
            <div class="col-sm-4">
                <input type="text" id="defaultReal" name="defaultReal" class="form-control" placeholder="nie jestem robotem">
            </div>
        </div>
        <div class="form-group">
            <input type="button" id="zapisz" class="btn btn-success" value="Zapisz" style="margin-left:50px;">
        </div>
        <br/><br/><br/>
    </form>
</div>

<script type="text/javascript">
// sprawdzenie formularza
    $(function () {
        $('#zapisz').click(function () {
            $('#alert').css('display', 'none');

            if ($('#nazwa').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Musisz podać nazwę skróconą firmy');
            } else if ($('#imie').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Imie');
            } else if ($('#nazwisko').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Nazwisko');
            } else if ($('#miejscowosc').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Miejscowość');
            } else if ($('#kod').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Kod Pocztowy');
            } else if ($('#ulica').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Ulice');
            } else if ($('#nr_lokalu').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Numer Lokalu');
            } else if (/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/.test($('#email').val()) == false) {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Email');
            } else if ($('#telefon').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Numer telefonu');
            } else if ($('#login').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Login');
            } else if ($('#haslo').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Hasło');
            } else if ($('#defaultReal').val() == "") {
                $('#alert').css('display', 'block');
                $('#h_alert').html('Podaj Kod powyżej');
            } else if ($('#nazwa').val() != "") {
                $.ajax({
                    type: "POST",
                    url: "ajaxNowyUrzytkownikSprawdzenie",
                    data: "nazwaUzytkownika=" + $('#nazwa').val(),
                    dataType: "text",
                    success: function (msg) {
                        
                        if (msg == "0") {
                            $('#alert').css('display', 'block');
                            $('#h_alert').html('Podany użytkownik  istnieje albo ma taką samą nazwę ');
                        } else {
                            $.ajax({
                                type: "POST",
                                url: "ajaxCapcha",
                                data: {"capcha": $('#defaultReal').realperson('getHash'), "kod": $('#defaultReal').val()},
                                success: function (msg1) {
                                    if (msg1 == "1") {
                                        $('#form').submit();
                                    } else {
                                        $('#alert').css('display', 'block');
                                        $('#h_alert').html('Podany kod Capcha jest nie prawidłowy ');
                                        $('.realperson-regen').click();
                                    }
                                },
                                error: function () {
                                    alert('error ajax Capcha');
                                }
                            });
                        }

                    },
                    error: function () {
                        alert('error ajaxSprawdzenieNowyUrzytkownik');
                    }
                });

            }

        });

    });

// nazwa skrócona firmy keyup keydown

    $(function () {
        $('#nazwa').on('keyup keydown', function () {
            this.value = (/^[a-zA-Z0-9\@.\_\-\+]*$/g.test(this.value)) ? this.value : "";
            if ($('#nazwa').val().length > 0) {
                $('#alert').css('display', 'none');
                $('h_alert').val('');
            }
        });
    });
</script>