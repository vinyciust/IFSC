<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>

<h1>Agenda</h1>

	<h2>Aprendendo MVC</h2>

	<h3>Adicionando novo Registro</h3>

	<form method="POST" action="../controller/produto_controller.php" name="form1">

		Nome: 					<input type="text" name="nome"><br />
		Descricao:				    <input type="text" name="descricao" ><br />
		Valor:    				<input type="text" name="valor"><br />		
				

		<input type="hidden" name="acao" value="incluir">
		
		<input type="submit" value="Cadastrar">
	</form>








</body>
</html>