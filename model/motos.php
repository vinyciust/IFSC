<?php 
require_once("../model/banco.php");


$Conn = new banco();
$Conn->conexao();

$sql = "INSERT INTO moto ( Marca, Valor, Ano, Descricao ) VALUES ('Xm', '20000', '2019', 'Uma moto top')";
if (mysqli_query ($Conn->conexao(), $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($Conn->conexao());
}
mysqli_close($Conn->conexao());

?>