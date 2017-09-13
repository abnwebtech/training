<html>
<head>
<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css") ?>">
<script src="<?php echo site_url("assets/jquery-3.2.1.min.js") ?>"></script>
<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $(this).hide();
    });
});
</script>

<form class="" action="<?php echo site_url('employees/save'); ?>" method="post">
   <table border='1'>
       <tbody>
           <tr>
               <td>First Name:</td>
               <td><input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" placeholder="first_name"></td>
           </tr>
           <tr>
               <td>Middle Name:</td>
               <td><input type="text" name="middle_name" value="<?php echo set_value('middle_name'); ?>" placeholder="middle_name"></td>
           </tr>
           <tr>
               <td>Last Name:</td>
               <td><input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" placeholder="last_name"></td>
           </tr>
           <tr>
               <td>&nbsp;</td>
               <td><button type="submit">SUBMIT</button></td>
           </tr>
       </tbody>
   </table>

   <input type="hidden" name="mode" value="add">
   
</form>