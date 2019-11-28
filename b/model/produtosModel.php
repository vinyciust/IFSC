<?php

//insert.php

require_once("../model/banco.php");
$connect = new banco();
$connect = $connect->angular();


$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validProdutoation_error = '';
$Nome = '';
$Valor = '';
$Descricao = '';

if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM produto WHERE idProduto='".$form_data->idProduto."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['Nome'] = $row['Nome'];
		$output['Valor'] = $row['Valor'];		
		$output['Descricao'] = $row['Descricao'];
	}
}
elseif($form_data->action == "Delete")
{
	$query = "
	DELETE FROM produto WHERE idProduto='".$form_data->idProduto."'
	";
	$statement = $connect->prepare($query);
	if($statement->execute())
	{
		$output['message'] = 'Data Deleted';
	}
}
else
{
	if(empty($form_data->Nome))
	{
		$error[] = 'First Name is Required';
	}
	else
	{
		$Nome = $form_data->Nome;
	}

	if(empty($form_data->Valor))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$Valor = $form_data->Valor;
	}	
	if(empty($form_data->Descricao))
	{
		$error[] = 'Descricao is Required';
	}
	else
	{
		$Descricao = $form_data->Descricao;
	}



	if(empty($error))
	{
		if($form_data->action == 'Insert')
		{
			$data = array(
				':Nome'		=>	$Nome,
				':Valor'		=>	$Valor,				
				':Descricao'		=>	$Descricao

			);
			$query = "
			INSERT INTO produto 
				(Nome, Valor, Descricao) VALUES 
				(:Nome, :Valor, :Descricao)

			";
			$statement = $connect->prepare($query);
			if($statement->execute($data))
			{
				$message = 'Data Inserted';
			}
		}
		if($form_data->action == 'Edit')
		{
			$data = array(
				':Nome'	=>	$Nome,
				':Valor'	=>	$Valor,				
				':Descricao'	=>	$Descricao,
				':idProduto'			=>	$form_data->idProduto
			);
			$query = "
			UPDATE produto 
			SET Nome = :Nome, Valor = :Valor, Descricao = :Descricao
			WHERE idProduto = :idProduto
			";

			$statement = $connect->prepare($query);
			if($statement->execute($data))
			{
				$message = 'Data Edited';
			}
		}
	} 
	else
	{
		$validProdutoation_error = implode(", ", $error);
	}

	$output = array(
		'error'		=>	$validProdutoation_error,
		'message'	=>	$message
	);

}



echo json_encode($output);

?>