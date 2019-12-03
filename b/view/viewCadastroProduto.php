<?php 
include 'menu.php'; 
$nomeProduto=""; 
 
 require_once("../controller/controller_salvaimg.php");
 $obj2 = new SalvaImagem(); 
error_reporting(0);
 $nomeMoto=$_POST['nomeProduto'];
$obj2->cmd($nomeProduto);
 ?>



 <body ng-app="crudApp" ng-controller="crudController">
		
		<div class="container" ng-init="fetchData()">
			<br />
				<h3 align="center">Tela de Cadastro de Produtos</h3>
			<br />
			<div class="alert alert-success alert-dismissible" ng-show="success" >
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				{{successMessage}}
			</div>
			<div align="right">
				<button type="button" name="add_button" ng-click="addData()" class="btn btn-success">Adicionar</button>
			</div>
			<br />
			<div class="table-responsive" style="overflow-x: unset;">
				<table datatable="ng" dt-options="vm.dtOptions" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Valor</th>							
							<th>Descrição</th>
							<th>Imagens</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="name in namesData">
							<td>{{name.Nome}}</td>
							<td>{{name.Valor}}</td>							
							<td>{{name.Descricao}}</td>
							<td><button type="button" ng-click="img(name.idProduto)" class="btn btn-success btn-xs">Imagem</button></td>
							<td><button type="button" ng-click="fetchSingleData(name.idProduto)" class="btn btn-warning btn-xs">Editar</button></td>
							<td><button type="button" ng-click="deleteData(name.idProduto)" class="btn btn-danger btn-xs">Delete</button></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</body>


<div class="modal fade" tabindex="-1" role="dialog" id="crudmodal">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
    		<form method="post" ng-submit="submitForm()">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title">{{modalTitle}}</h4>
	      		</div>
	      		<div class="modal-body">
	      			<div class="alert alert-danger alert-dismissible" ng-show="error" >
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						{{errorMessage}}
					</div>
					<div class="form-group">
						<label>Insira nome</label>
						<input type="text" name="Nome" ng-model="Nome" class="form-control" />
					</div>
					<div class="form-group">
						<label>Insira valor</label>
						<input type="text" name="Valor" ng-model="Valor" class="form-control" />
					</div>					
					<div class="form-group">
						<label>Insira descrição</label>
						<input type="text" name="Descricao" ng-model="Descricao" class="form-control" />
					</div>
	      		</div>
	      		<div class="modal-footer">
	      			<input type="hidden" name="hidden_id" value="{{hidden_id}}" />
	      			<input type="submit" name="submit" id="submit" class="btn btn-info" value="{{submit_button}}" />
	        		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	        	</div>
	        </form>
    	</div>
  	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="crudmodalImg">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
    		<form action="viewCadastroProduto.php" method="POST" enctype="multipart/form-data">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title">{{modalTitle}}</h4>
	      		</div>
	      		<div class="modal-body">
	      			<div class="alert alert-danger alert-dismissible" ng-show="error" >
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						{{errorMessage}}
					</div>
					<div class="form-group">
						<label>Insira nome do produto</label>
						<input type="text" name="nomeProduto" id="nomeProduto" ng-model="nomeProduto" class="form-control" />
					</div>
					<div class="form-group">
						<label>Insira imagem</label>
						<input type="file" name="arquivo0"  />
					</div>
					<div class="form-group">
						<label>Insira imagem</label>
						<input type="file" name="arquivo1"  />
					</div>
					<div class="form-group">
						<label>Insira imagem</label>
						<input type="file" name="arquivo2"  />
					</div>
					<div class="form-group">
						<label>Insira imagem</label>
						<input type="file" name="arquivo3" />
					</div>
					<div class="form-group">
						<label>Insira imagem</label>
						<input type="file" name="arquivo4"  />
					</div>


				
				
				

	      		</div>
	      		<div class="modal-footer">
	      			<input type="hidden" name="hidden_id" value="{{hidden_id}}" />
	      			<input type="submit" name="submit" id="submit" class="btn btn-info" value="{{submit_button}}" />
	        		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	        	</div>
	        </form>
    	</div>
  	</div>
</div>


<script>

var app = angular.module('crudApp', ['datatables']);
app.controller('crudController', function($scope, $http){

	$scope.success = false;

	$scope.error = false;

	$scope.fetchData = function(){
		$http.get('../controller/ProdutosController.php').success(function(data){
			$scope.namesData = data;
		});
	};

	$scope.openModal = function(){
		var modal_popup = angular.element('#crudmodal');
		modal_popup.modal('show');
	};

	$scope.closeModal = function(){
		var modal_popup = angular.element('#crudmodal');
		modal_popup.modal('hide');
	};

	$scope.openModalImg = function(){
		var modal_popup = angular.element('#crudmodalImg');
		modal_popup.modal('show');
	};

	$scope.closeModalImg = function(){
		var modal_popup = angular.element('#crudmodalImg');
		modal_popup.modal('hide');
	};

	$scope.addData = function(){
		$scope.modalTitle = 'Add Data';
		$scope.submit_button = 'Insert';
		$scope.openModal();
	};

	$scope.submitForm = function(){
		$http({
			method:"POST",
			url:"../model/produtosModel.php",
			data:{'Nome':$scope.Nome, 'Valor':$scope.Valor,'Descricao':$scope.Descricao, 'action':$scope.submit_button, 'idProduto':$scope.hidden_id}
		}).success(function(data){
			if(data.error != '')
			{
				$scope.success = false;
				$scope.error = true;
				$scope.errorMessage = data.error;
			}
			else
			{
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.form_data = {};
				$scope.closeModal();
				$scope.fetchData();
			}
		});
	};

	$scope.img = function(idProduto){
		$http({
			method:"POST",
			url:"../model/produtosModel.php",
			data:{'idProduto':idProduto, 'action':'fetch_single_data'}
		}).success(function(data){	
			$scope.nomeProduto = data.Nome;				
			$scope.modalTitle = 'Salva Imagem';
			$scope.submit_button = 'Salvar';
			$scope.openModalImg();

		});
		
	};		

	$scope.fetchSingleData = function(idProduto){
		$http({
			method:"POST",
			url:"../model/produtosModel.php",
			data:{'idProduto':idProduto, 'action':'fetch_single_data'}
		}).success(function(data){
			$scope.Nome = data.Nome;
			$scope.Valor = data.Valor;
			$scope.Descricao = data.Descricao;
			$scope.hidden_id = idProduto;
			$scope.modalTitle = 'Edit Data';
			$scope.submit_button = 'Edit';
			$scope.openModal();
		});
	};

	$scope.deleteData = function(idProduto){
		if(confirm("Are you sure you want to remove it?"))
		{
			$http({
				method:"POST",
				url:"../model/produtosModel.php",
				data:{'idProduto':idProduto, 'action':'Delete'}
			}).success(function(data){
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.fetchData();
			});	
		}
	};

});

</script>











<!--<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>

<h1>Agenda</h1>

	<h2>Aprendendo MVC</h2>

	<h3>Adicionando novo Registro</h3>

	<form method="POST" action="../controller/idProdutos_controller.php" name="form1">

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