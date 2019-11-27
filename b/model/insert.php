<?php

//insert.php

require_once("../model/banco.php");
$connect = new banco();
$connect = $connect->angular();


$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validMotoation_error = '';
$first_name = '';
$last_name = '';
$teste = '';

if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM moto WHERE idMoto='".$form_data->idMoto."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['first_name'] = $row['first_name'];
		$output['last_name'] = $row['last_name'];
		$output['teste'] = $row['teste'];
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
	if(empty($form_data->first_name))
	{
		$error[] = 'First Name is Required';
	}
	else
	{
		$first_name = $form_data->first_name;
	}

	if(empty($form_data->last_name))
	{
		$error[] = 'Last Name is Required';
	}
	else
	{
		$last_name = $form_data->last_name;
	}

	if(empty($form_data->teste))
	{
		$error[] = 'Teste is Required';
	}
	else
	{
		$teste = $form_data->teste;
	}



	if(empty($error))
	{
		if($form_data->action == 'Insert')
		{
			$data = array(
				':first_name'		=>	$first_name,
				':last_name'		=>	$last_name,
				':teste'		=>	$teste

			);
			$query = "
			INSERT INTO moto 
				(first_name, last_name, teste) VALUES 
				(:first_name, :last_name,:teste)

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
				':first_name'	=>	$first_name,
				':last_name'	=>	$last_name,
				':teste'			=>	$teste,
				':idMoto'			=>	$form_data->idMoto
			);
			$query = "
			UPDATE moto 
			SET first_name = :first_name, last_name = :last_name, teste = :teste
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