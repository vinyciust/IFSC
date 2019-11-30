<html>
<head>
 <title>Como Pegar Dados do Formulário via POST com PHP</title>
</head>
<body>
 <h1>Enviando dados via POST</h1>
 <form id="formulario" name="formulario" method="post" action="teste.php">
  Nome: <input id="nome" name="nome" type="text" />
  <br />
  E-mail: <input id="email" name="email" type="text" />
  <br />
  <input id="btnenviar" name="btnenviar" type="submit" value="Enviar Dados" />
 </form>


<?php $nome = $_POST['nome']; $email = $_POST['email']; echo "Seu nome é $nome, e o e-mail é $email";
?>
</body>


</html>

