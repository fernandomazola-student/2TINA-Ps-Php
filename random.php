<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random Number</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortchut icon" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>

    <center><div class="">
      <?php include 'include/header.php'; ?>
      <?php
      function misturar() {
        $numbers = [rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100)];
        sort($numbers);

        foreach (array_reverse($numbers) as $number) {
          echo " - " . $number . " -  <br>";
        }
    }
      ?>

      <h1>Numeros na ordem decrescente</h1>
      <?php misturar(); ?>

      <center><h1><a href="index.php">VOLTAR</a></h1></center>
    </div></center>

  </body>
</html>
