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



 ?>
