<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//phpinfo();
?>
<!DOCTYPE html>
<html>
<body>

<?php echo form_open('index.php/Welcome/upload',array('enctype'=>'multipart/from-data'));?>
    Select image to upload:
    <?php    echo form_input(array('type'=>'file','name'=>'user'));?>
<!--    <input type="file" name="fileUpload" id="fileUpload">
    <input type="submit" value="Upload Image" name="submit">-->
    <?php echo form_input(array('type'=>'submit','value'=>'download'));?>
<?php echo form_close();?>

</body>
</html>