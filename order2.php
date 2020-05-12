<?php
session_start();
?>
<html>
   <head>
      <title>Select Color</title>
      <link href="order.css" rel="stylesheet" type="text/css">
   </head>
   <body>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
               // collect value of input field
               $name = $_GET['fname'];
               $model = $_GET['model'];
                }
               $_SESSION["fname"] = $name;
               $_SESSION["model"] = $model;
            ?> 
      
      <div class="pageContainer centerText">
         <h2 class="centerText">Select Color</h2>

         <div class="pageContainer">
            <form action="order3.php" method="get" class="formLayout">
               <div class="formGroup">
                  <label>Car color:</label>

                  <div class="formElements">
                     <select name="color" required >
                        <option  value=""></option>
                        <option style="background-color: blue; color:white;" value="Blue">Blue</option>
                        <option style="background-color: red" value="Red">Red</option>
                        <option style="background-color: yellow" value="Yellow">Yellow</option>
                     </select> 

                  </div>
               </div>
               <div class="formGroup">
                  <label></label>
                  <button type="submit"> >> Next >> </button>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>