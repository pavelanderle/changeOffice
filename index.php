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

       // TODO: shift calculation

       if (isset($_GET["money"])) {
         /* Display ticket */
         require_once("views/ticket.php");
       }

     ?>
  </body>
</html>
