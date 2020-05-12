
<?php
session_start();
?>
<html>
   <head>
      <title>Login</title>
      <link href="order.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">
         <h2>Login</h2>
         <form method="get" action="protectedpage.php" actionclass="formLayout">
            <div class="formGroup">
               <label>First name:</label>
               <input type="text" name="username" value="" 
                      class="formElement" 
                      placeholder="first name" 
                      title="first name" required autofocus /><br>
            </div>                     
            
            <div class="formGroup">
               <label>Password:</label>
               <input type="password" name="password" class="formElement" 
                      placeholder="password"
                      title="password" required /><br>
               <label></label>(hint: password is 'guest')<br>     
            </div>

            <div class="formGroup">
               <label> </label>
               <input type="hidden" name="postback" value="true">
               <button type="submit">Login</button>
            </div>

         </form>     

      </div>
   </body>
</html>