<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
   
.ui-datepicker table{
    display: none;
}
</style>
<div class="row">
    <div class="col-sm-12" style="height: 150px"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <?php echo form_open('Miesiac/zmien')?>
        <div class="box box-success">
            <div class="box-header">
                <h3>Miesiąc księgowy</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="col-lg-4">
                        <label for="miesiac">Zmień miesiąc księgowy:</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="miesiac" name="part_1"autocomplete="off">
                </div>
            </div>
            <div class="box-footer">
                <input type="submit" value="Zatwierdź" class="btn btn-danger pull-right">
            </div>
        </div>
        <?php echo form_close();?>
    </div>
</div>









<script type="text/javascript">
    $(function() {
    $('#miesiac').datepicker( {
        changeMonth: true,
        changeYear: true,
        yearRange: '2016:<?php echo date('Y')?>',
        showButtonPanel: true,
        dateFormat: 'yy-mm',
       onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        },
        beforeShow : function(input, inst) {
            if ((datestr = $(this).val()).length > 0) {
                actDate = datestr.split('-');
                year = actDate[0];
                month = actDate[1]-1;
                $(this).datepicker('option', 'defaultDate', new Date(year, month));
                $(this).datepicker('setDate', new Date(year, month));
            }
        },
        
    });
   $.datepicker.regional.pl;
});
</script>