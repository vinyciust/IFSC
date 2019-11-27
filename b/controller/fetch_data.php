<?php

//fetch_data.php
 
require_once("../model/banco.php");
$connect = new PDO("mysql:host=localhost;dbname=realmotos", "root", "");
$teste = new banco();
$teste = $teste->conexao();
$query = "SELECT * FROM tbl_sample ORDER BY id";
$statement = $teste->query($query);
if($statement->execute())
{
	while($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$data[] = $row;
	}

	echo json_encode($data);
}

?>