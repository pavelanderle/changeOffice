<?php
  /* Link library of function */
  require_once("model/function.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="views/style/style.css">
    <title>Change Office 1.0</title>
  </head>
  <body>
    <?php
       /* Display form */
       require_once("views/form.php");

       

       if (isset($_GET["money"])) {
        require_once("model/currency.php");
        $valut = $_GET["currency"];
        if ($_GET["typeChange"]=="purchase") {
          $changeValue = $_GET["money"]*$currencies["$valut"]["purchase"];
          $chargeValue = $changeValue*0.01;
        }
        else {
          $changeValue= $_GET["money"]*$currencies["$valut"]["sold"];
          $chargeValue=$changeValue*0.01;
        }

         /* Display ticket */
         require_once("views/ticket.php");
       }

     ?>
  </body>
</html>
