<html>
<head>
<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css") ?>">
<script src="<?php echo site_url("assets/jquery-3.2.1.min.js") ?>"></script>
<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>


</head>
<form class="" action="<?php echo site_url('items/save'); ?>" method="post">
   <table border='1'>
       <tbody>
           <tr>
               <td>Item Name:</td>
               <td><input type="text" name="name" value="" placeholder="name"></td>
           </tr>
           <tr>
               <td>Description:</td>
               <td><input type="text" name="description" value="" placeholder="description"></td>
           </tr>
           <tr>
               <td>Barcode:</td>
               <td><input type="text" name="barcode" value="" placeholder="barcode"></td>
           </tr>
           <tr>
               <td>&nbsp;</td>
               <td><button type="submit">SUBMIT</button></td>
           </tr>
       </tbody>
   </table>

   <input type="hidden" name="mode" value="add">
</form>