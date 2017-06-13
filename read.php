<?php include "functions/functions.php" ?>
<?php include "functions/db.php" ?>
<?php
if(isset($_GET['delete'])){
  delCar();
  echo $_SESSION['msg'];
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
    <?php include 'include/header.php'; ?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Placa</th>
          <th>Ano</th>
        </tr>
      </thead>
      <?php
        $resultado_do_select_todos_carros = readCar();
          while ($row = mysqli_fetch_assoc($resultado_do_select_todos_carros)) { ?>
            <tbody>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['marca'];  ?></td>
                  <td><?php echo $row['modelo'];  ?></td>
                  <td><?php echo $row['placa'];  ?></td>
                  <td><?php echo $row['ano'];  ?></td>
                  <td><a href='read.php?delete=<?php echo $row['id']?>'>Excluir</a></td>
                  <td><a href='read.php?alterar=<?php echo $row['id']?>'>Alterar</a></td>
                </tr>
              </tbody>
        <?php } ?>

        <?php

        if(isset($_GET['alterar'])){
            $car_id = $_GET['alterar'];
            altCar();
        }

         ?>
    </table>
  </body>
</html>
