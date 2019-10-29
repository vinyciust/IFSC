<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>

<h1>Agenda</h1>

	<h2>Aprendendo MVC</h2>

	<h3>Adicionando novo serviço</h3>

	<form method="POST" action="../controller/servicos_controller.php" name="form1">

		Título: 					<input type="text" name="titulo"><br />
		Descrição:				    <input type="text" name="descricao" ><br />

		<input type="hidden" name="acao" value="incluir">
		
		<input type="submit" value="Cadastrar">
	</form>

</body>
</html>