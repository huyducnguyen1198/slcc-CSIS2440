<?php
session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
         <?php include "Header.php";

         print <<<html
         <div>
            <form name="form1" method="post" action="LoginCheck.php" >
                <table align = "center" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">

                    <tr>
                        <td colspan="3"><strong>Member Login </strong></td>

                    </tr>
                    <tr>
                        <td width="78">Username</td>
                        <td width="6">:</td>
                        <td width="294"><input name="myusername" type="text" id="myusername" class="error"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input name="mypassword" type="password" id="mypassword">
        html;
            if(isset($_SESSION['badPass'])){
                echo "<br> Username or password do not match";
            }
        print <<< html
                        </td>
                    </tr>
                   <tr>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td><input type="submit" name="Submit" value="Login" onclick="return loginfilled();"></td>
                   </tr>
                   <tr>
                       <td>
                           <a href="NewAccount.php">Create an Account</a>
                       </td>
                   </tr>
               </table>
           </form>
       </div>
       html;

          ?>
     </head>
     <body>

     </body>
 </html>
