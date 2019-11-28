<?php

//insert.php

require_once("../model/banco.php");
$connect = new banco();
$connect = $connect->angular();


$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validServicoation_error = '';
$Nome = '';
$Descricao = '';

if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM servico WHERE idServico='".$form_data->idServico."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['Nome'] = $row['Nome'];		
		$output['Descricao'] = $row['Descricao'];
	}
}
elseif($form_data->action == "Delete")
{
	$query = "
	DELETE FROM servico WHERE idServico='".$form_data->idServico."'
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
				':Descricao'		=>	$Descricao

			);
			$query = "
			INSERT INTO servico 
				(Nome,  Descricao) VALUES 
				(:Nome,  :Descricao)

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
				':Descricao'	=>	$Descricao,
				':idServico'			=>	$form_data->idServico
			);
			$query = "
			UPDATE servico 
			SET Nome = :Nome,  Descricao = :Descricao
			WHERE idServico = :idServico
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
		$validServicoation_error = implode(", ", $error);
	}

	$output = array(
		'error'		=>	$validServicoation_error,
		'message'	=>	$message
	);

}



echo json_encode($output);

?>