<?php 
include 'menu.php';  ?>



 

 <div id="main" class="container-fluid" style="margin-top: 50px">
 
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Itens</h2>
		</div>
		<div class="col-sm-6">
			
			<div class="input-group h2">
				<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
			
		</div>
		<div class="col-sm-3">
			<a href="add.html" class="btn btn-primary pull-right h2">Novo Item</a>
		</div>
	</div> <!-- /#top -->
 
 
 	<hr />
 	<div id="list" class="row">
	
	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Header 1</th>
					<th>Header 2</th>
					<th>Header 3</th>
					<th class="actions">Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1001</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1002</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1003</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1004</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1005</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1006</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1007</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1008</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1009</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1010</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
					<td>Jes</td>
					<td>01/01/2015</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	</div> <!-- /#list -->
	
	<div id="bottom" class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<li class="disabled"><a>&lt; Anterior</a></li>
				<li class="disabled"><a>1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
			</ul><!-- /.pagination -->
		</div>
	</div> <!-- /#bottom -->
 </div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>












<!--<!DOCTYPE html>
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
		Modelo:   				<input type="text" name="modelo"><br />		

		<input type="hidden" name="acao" value="incluir">
		
		<input type="submit" value="Cadastrar">
	</form>








</body>
</html>
-->