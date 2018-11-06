<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #ccc;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color:#eee ;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>  
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <?php echo form_open('Rok/nowy');?>
        <div class="box box-default">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;&nbsp;Nowy rok księgowy</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-7">
                        <label for="rok">Wybierz rok księgowy</label>
                    </div>
                    <div class="col-sm-5"> 
                        <select id="rok" name="part_1" class="form-control">
                            <?php foreach (range(date('Y'), 2016, -1) as $value): ?>
                                <option value="<?php echo $value ?>"><?php echo $value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div><br/><br/>
                <div class="form-group">
                    <div class="col-sm-7">
                        <label for="kontrahenci">Skopjuj dane kontrahentów do nowego roku:</label>
                    </div>
                    <div class="col-sm-5">
                        <label class="container">
                            <input type="checkbox" class="minimal" name="part_2" checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <br/><br/>
                <div class="form-group">
                    <div class="col-sm-7">
                        <label for="kontrahenci">Skopjuj dane kont księgowych:</label>
                    </div>
                    <div class="col-sm-5">
                        <label class="container">
                            <input type="checkbox" class="minimal" name="part_3" checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <br/><br/>
                <div class="form-group">
                    <div class="col-sm-7">
                        <label for="kontrahenci">Skopiuj dane magazynu do nowego roku:</label>
                    </div>
                    <div class="col-sm-5">
                        <label class="container">
                            <input type="checkbox" class="minimal"  name="part_4"checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <br/><br/>
                <div class="form-group">
                    <div class="col-sm-7">
                        <label for="kontrahenci">Utwórz bilans otwarcia dla magazynów:</label>
                    </div>
                    <div class="col-sm-5">
                        <label class="container">
                            <input type="checkbox" class="minimal" name="part_5">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" class="btn btn-success pull-right" value="Utwórz nowy rok księgowy">
                </div>
            </div>
        </div>
        <?php echo form_close();?>
    </div>
</div>
<script src="../../dist/js/app.min.js"></script>
<script src="../../plugins/iCheck/icheck.js"></script>
<script src="../../dist/js/mailbox.js"></script>
<script type="text/javascript">
    
</script>
