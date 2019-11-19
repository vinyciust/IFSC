<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>

<h1>Agenda</h1>

	<h2>Aprendendo MVC</h2>

	<h3>Adicionando novo Registro</h3>

	<form method="POST" action="../controller/motos_controller.php" name="form1">

		Marca: 					<input type="text" name="marca"><br />
		Valor:				    <input type="text" name="valor" ><br />
		Ano:    				<input type="text" name="ano"><br />		
		Descrição:   			<input type="text" name="descricao"><br />	
		Modelo:   				<input type="text" name="Modelo"><br />		

		<input type="hidden" name="acao" value="incluir">
		
		<input type="submit" value="Cadastrar">
	</form>








</body>
</html>