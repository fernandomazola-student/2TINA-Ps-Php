<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PS - Taboada em PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <!-- LEGENDA:
    N de numero
    P de produto  -->
<center><div class="">
  <h2>Tabuada</h2>
  <?php for ($n = 1; $n <= 5; $n++) { ?>
    <h3><?php echo "Tabuada do $n" ?></h3>

    <?php for ($p = 1; $p <= 10; $p++) { ?>
      <div><?php
      $resultado = ($n*$p);
      echo "$n x $p" . ' = ' . $resultado  ?></div>
    <?php }
  }
  ?>
</div></center>

  </body>
</html>
