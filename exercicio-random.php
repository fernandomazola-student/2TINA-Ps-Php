<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random Number</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php
    function misturar() {
      $numbers = [rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100)];
      sort($numbers);

      foreach (array_reverse($numbers) as $number) {
        echo $number
      }
  }
    ?>

    Numeros na ordem decrescente:
    <?php misturar(); ?>
  </body>
</html>
