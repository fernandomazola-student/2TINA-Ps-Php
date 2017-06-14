<?php include 'db.php';

function createCar(){
  global $connection;
  $marca = trim($_POST['marca']);
  $modelo = trim($_POST['modelo']);
  $placa = trim($_POST['placa']);
  $ano = trim($_POST['ano']);

  $query = "INSERT INTO carros(marca, modelo, placa, ano) VALUES ('$marca', '$modelo', '$placa', '$ano')";

  $resultado = mysqli_query($connection, $query);

  if (!$resultado) {
    die('Erro' . mysql_error($connection));
  }else{
    echo '<div class="col-md-3"></div><div class="alert alert-success"><strong>Cadastrado com sucesso!</strong></div>';
  }
}


function readCar(){
  global $connection;
  $query = "SELECT * FROM carros";
  return mysqli_query($connection, $query);
}

function delCar(){
  global $connection;
  $id = $_GET['delete'];
  $query = "DELETE FROM carros WHERE id = '$id'";
  $resultado = mysqli_query($connection, $query);
  if(!$resultado){
    die("Deu ruim");
  }else{
    $_SESSION['msg'] = '<div class="col-md-3"></div><div class="alert alert-danger"><strong>Dados deletados!</strong></div>';
  }
}

function altCar(){
      global $connection;
      global $car_id;
      echo '
      <div class="col-md-8 col-md-offset-2">
      <form action="read.php" method="POST">
        <div class="form-group">
          <p>Update Car</p>
      ';
      $query = "SELECT * from carros WHERE id = $car_id";
      $select_carros = mysqli_query($connection, $query);
      while($row = mysqli_fetch_assoc($select_carros)){
        $id= $row['id'];
        $marca = $row['marca'];
        $modelo = $row['modelo'];
        $placa = $row['placa'];
        $ano = $row['ano'];
        ?>
        <div class="form-group">
          <?php echo '<label for="marca">Digite a nova marca:</label>' ?>
          <input value="<?php if(isset($marca)) {echo $marca;}?>" type="text" class="form-control" name="marca" id="marca">
        </div>
        <div class="form-group">
          <?php echo '<label for="marca">Digite o novo modelo:</label>' ?>
          <input value="<?php if(isset($modelo)) {echo $modelo;}?>" type="text" class="form-control" name="modelo" id="modelo">
        </div>

        <div class="form-group">
          <?php echo '<label for="marca">Digite o novo modelo:</label>' ?>
          <input value="<?php if(isset($placa)) {echo $placa;}?>" type="text" class="form-control" name="placa" id="placa">
        </div>

        <div class="form-group">
          <?php echo '<label for="marca">Digite a nova placa:</label>' ?>
          <input value="<?php if(isset($ano)) {echo $ano;}?>" type="text" class="form-control" name="ano" id="ano">
        </div>

        <input value="<?php if(isset($id)) {echo $id;}?>" type="hidden" class="form-control" name="id" id="id">

      <?php  }
      echo '</div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" name="car_alterar" value="Alterar">
      </div>
    </form></div>'
    ;
  }

  function uptCar(){
  global $connection;
  if (isset($_POST['car_alterar'])) {
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $ano = $_POST['ano'];

    $query = "UPDATE carros SET marca = '$marca', modelo = '$modelo', placa = '$placa', ano = '$ano' WHERE id = $id";
    $resultado = mysqli_query($connection, $query);
    if(!$resultado){
      die("Shiii, falhou na hora de atualizar");
    }else{
      echo '<div class="col-md-3"></div><div class="alert alert-warning"><strong>Dados atualizados!</strong></div>';
    }
  }
}

function valCar(){
  $marca = trim($_POST['marca']);
  $modelo = trim($_POST['modelo']);
  $placa = trim($_POST['placa']);
  $ano = trim($_POST['ano']);
  if($marca == "" || empty($marca)){
      echo '<p class="alert alert-danger">Campo vázio<p>';
    }else if(strlen($marca) > 10){
        echo '<p class="alert alert-danger">Nome da marca muito grande<p>';
    }else{
        createCar();
    }

}


 ?>
