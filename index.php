<?php

  // Definisco la badword
  $badword = $_GET['badword'];


  // Definisco una frase che abbia la badword dentro
  $paragrafo = "What the actual $badword !";
  // Rimpiazzo la badword con ***
  $paragrago_vm_18 = str_replace($badword, '***', $paragrafo)

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP badwords</title>
  </head>
  <body>
    <h1><?php echo $paragrago_vm_18; ?>  </h1>


  </body>
</html>
