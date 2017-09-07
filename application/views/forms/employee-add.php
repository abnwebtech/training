
<form class="" action="<?php echo site_url('employees/save'); ?>" method="post">
   <table border='1'>
       <tbody>
           <tr>
               <td>First Name:</td>
               <td><input type="text" name="first_name" value="" placeholder="first_name"></td>
           </tr>
           <tr>
               <td>Middle Name:</td>
               <td><input type="text" name="middle_name" value="" placeholder="middle_name"></td>
           </tr>
           <tr>
               <td>Last Name:</td>
               <td><input type="text" name="last_name" value="" placeholder="last_name"></td>
           </tr>
           <tr>
               <td>&nbsp;</td>
               <td><button type="submit">SUBMIT</button></td>
           </tr>
       </tbody>
   </table>

   <input type="hidden" name="mode" value="add">
</form>