<?php include 'db.php';

function createCar(){
  global $connection;
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $placa = $_POST['placa'];
  $ano = $_POST['ano'];

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
    $_SESSION['msg'] = '<div class="col-md-3"></div><div class="alert alert-warning"><strong>Dados deletados!</strong></div>';
    header("Location:read.php");
  }
}

function altCar(){
      global $connection;
      global $car_id;
      echo '
      <form class="" action="categorias.php" method="POST">
        <div class="form-group">
          <label for="cat_nome">Update Car</label>
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
        <input value="<?php if(isset($marca)) {echo $marca;}?>" type="text" class="form-control" name="cat_nome" id="names">
        <input value="<?php if(isset($marca)) {echo $modelo;}?>" type="text" class="form-control" name="cat_nome" id="names">
        <input value="<?php if(isset($marca)) {echo $placa;}?>" type="text" class="form-control" name="cat_nome" id="names">
        <input value="<?php if(isset($marca)) {echo $ano;}?>" type="text" class="form-control" name="cat_nome" id="names">
      <?php  }
      echo '</div>
      <div class="form-group">
        <input type="submit" class="form-control" name="cat_alterar" value="Alterar">
      </div>
    </form>';
  }


 ?>
