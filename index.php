<?php include "functions/functions.php" ?>
<?php include "functions/db.php" ?>

<?php
if (isset($_POST['btn_create'])) {
  createCar();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>2TINA-PS-PHP</title>
    <!-- META -->
    <meta name="description" content="Está página web está sendo construída na PS"/>
    <meta name="viewport" content="width=device-width, inital-scale=1.0"/>
    <!-- FAVICON -->
    <link rel="shortchut icon" href="img/favicon.png"/>
    <!-- ESTILOS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>
  </head>

  <body>
      <?php include 'include/header.php'; ?>

      <main class="container">
        <div class="content block_c">

          <article class="main_form">
            <p>Create a car</p>
            <form class="form_create" action="index.php" method="post">
              <div class="form-group">
                <label>Marca</label>
                <input class="form-control" type="text" name="marca" value="">
              </div>

              <div class="form-group">
                <label>Modelo</label>
                <input class="form-control" type="text" name="modelo" value="">
              </div>

              <div class="form-group">
                <label>Placa</label>
                <input class="form-control" type="text" name="placa" value="">
              </div>

              <div class="form-group">
                <label>Ano</label>
                <input class="form-control" type="text" name="ano" value="">
              </div>

              <input class="btn btn-primary" type="submit" name="btn_create" value="Create">
            </form>


          </article>
        </div>
      </div>
      </main>
      <script src="js/jquery.js"> </script>
      <script src="js/scripts.js"> </script>
  </body>
</html>
