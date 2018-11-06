<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-lg-12" style="height: 150px;"></div>
</div>
<div class="col-sm-3"></div>
<div class="col-sm-6" style="background: #e6e8ed">
    <br/><br/><br/><br/>
    <form action="#" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-4">
                <label for="email">E-mail:</label>
            </div>
            <div class="col-sm-6">
                <input type="text" placeholder="e-mail" id="email" name="part_1" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="password">Hasło:</label>
            </div>
            <div class="col-sm-6">
                <input type="password" placeholder="hasło" id="password" name="part_2" class="form-control">
            </div>
        </div><br/>
        
        <div class="form-group">
            <div class="col-sm-3">
            <a href="<?php echo base_url('index.php/NowyUzytkownik/index');?>" style="margin-left: 20px; margin-top: 20px;" class="pull-left">Nowy użytkownik</a>
            </div>
            <div class="col-sm-6"></div>
            <div class="col-sm-3">
                <a href="<?php echo base_url('index.php/Login/noweHaslo');?>">Zapomniałem Hasła</a>
            </div>
            <input type="submit" class="btn btn-success pull-right"style="margin-right: 50px;margin-top: 20px;" value="Zaloguj">
            
        </div>
        <br/><br/><br/>       
    </form>
</div>