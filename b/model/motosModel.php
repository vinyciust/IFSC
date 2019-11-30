<?php

//insert.php

require_once("../model/banco.php");
$connect = new banco();
$connect = $connect->angular();


$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validMotoation_error = '';
$Nome = '';
$Valor = '';
$Ano = '';
$Descricao = '';

if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM moto WHERE idMoto='".$form_data->idMoto."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['Nome'] = $row['Nome'];
		$output['Valor'] = $row['Valor'];
		$output['Ano'] = $row['Ano'];
		$output['Descricao'] = $row['Descricao'];

	}
}
elseif($form_data->action == "Delete")
{
	$query = "
	DELETE FROM moto WHERE idMoto='".$form_data->idMoto."'
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

	if(empty($form_data->Ano))
	{
		$error[] = 'Descricao is Required';
	}
	else
	{
		$Ano = $form_data->Ano;
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
				':Ano'		=>	$Ano,
				':Descricao'		=>	$Descricao

			);
			$query = "
			INSERT INTO moto 
				(Nome, Valor, Ano, Descricao) VALUES 
				(:Nome, :Valor,:Ano, :Descricao)

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
				':Ano'			=>	$Ano,
				':Descricao'	=>	$Descricao,
				':idMoto'			=>	$form_data->idMoto
			);
			$query = "
			UPDATE moto 
			SET Nome = :Nome, Valor = :Valor, Ano = :Ano, Descricao = :Descricao
			WHERE idMoto = :idMoto
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
		$validMotoation_error = implode(", ", $error);
	}

	$output = array(
		'error'		=>	$validMotoation_error,
		'message'	=>	$message
	);


 
            
           
}



echo json_encode($output);

?>