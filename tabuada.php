<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PS - Taboada em PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortchut icon" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
    <?php include 'include/header.php'; ?>
<?php

for ($c=1; $c <= 5 ; $c++) {
      echo "<div style='width:20%; border:1px solid black; display:inline-block; box-sizing: border-box; padding:15px;'>";
      echo "<h1>Tabuada {$c}</h1>";
      for ($c1=0; $c1 <= 10 ; $c1++) {
        $resultado = ($c * $c1);
        echo "<hr>";
        echo $c . "x" . $c1 . " = " . $resultado . "<br>";
      }
      echo "</div>";
    }



 ?>


  <center><h1><a href="index.php">VOLTAR</a></h1></center>
  </body>
</html>
