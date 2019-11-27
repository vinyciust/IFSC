<?php

//fetch_data.php
 
require_once("../model/banco.php");
$connect = new banco();
$connect = $connect->angular();
$query = "SELECT * FROM tbl_sample ORDER BY id";
$statement = $connect->query($query);

if($statement->execute())
{
	while($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$data[] = $row;
	}

	echo json_encode($data);
}

?>