<?php
// Start the session
session_start();
?>
<html>
   <head>
      <title>Select Model</title>
      <link href="order.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer">
         <h2 class="centerText">Select Model</h2>
         <form action="order2.php"  method="get" class="formLayout">

            <div class="formGroup">
               <label>First name:</label>
               <input type="text" name="fname" class="textbox" autofocus required placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}" />
            </div>

            <div class="formGroup">
               <label> Car model:</label>
               <div class="formElements">
                  <input type="radio" name="model" id="mustang" required value="Mustang">
                  <label for="mustang">Ford Mustang</label><br>
                  <input type="radio" name="model" id="subaru" required value="Subaru">
                  <label for="subaru">Subaru WRX STI</label><br>
                  <input type="radio" name="model" id="corvette" required value="Corvette">
                  <label for="corvette">Corvette</label><br>
               </div>
            </div>

           

            <div class="formGroup">
               <label></label>
               <button type="submit"> >> Next >> </button>
            </div>




      </div>
   </form>
</div>
</body>
</html>