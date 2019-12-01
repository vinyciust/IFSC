<?php 
 
class geraPaginaProdutoModel{
	
	public $nome="";

	 public function setNome($nome) {  $this->$nome=$nome;  }

	 public function getNome() {
    return $this->nome;
}
    public function  pagina($nome){

require_once ("../model/banco.php");

		
		$Conn = new banco();
		$Conn=$Conn->conexao();
		$sql = "SELECT *FROM Produto WHERE nome='".$nome."'";
		//$Conn = new mysqli("localhost", "root", "","realmotos");				
		$result=$Conn->query($sql);

		$i=0;
		
			while($row = $result->fetch_assoc()) {
			if ($i==0){
				if(file_exists("../view/menu.php")) {

        	include '../view/menu.php';  		
        	}else{
        	include './view/menu.php'; 
        }		$i++;
			}
				
        				echo "
		<section id='geral'>
		<section id='Produto'>

 		<link href='//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>
		<script src='//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
		<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>

<div class='container'>
    <div class='row'>

        <div class='col-md-9'>
            <div id='carousel-main' class='carousel slide ' data-ride='carousel' data-interval='5000'>
                <!-- Carousel items -->
                <div class='carousel-inner'>
                    <div class='active item'>
                        <img src='../view/img/".$row["Nome"]."/img0.png' class='img-responsive'>
                    </div>
                    <div class='item'>
                        <img src='../view/img/".$row["Nome"]."/img1.png' class='img-responsive'>
                    </div>
                    <div class='item'>
                        <img src='../view/img/".$row["Nome"]."/img2.png' class='img-responsive'>
                    </div>
                    <div class='item'>
                        <img src='../view/img/".$row["Nome"]."/img3.png' class='img-responsive'>
                    </div>
                    <div class='item'>
                        <img src='../view/img/".$row["Nome"]."/img4.png' class='img-responsive'>
                    </div>
					
                </div>


                <!-- Controls -->
                <a class='left carousel-control' href='.carousel' role='button' data-slide='prev'>
                    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='.carousel' role='button' data-slide='next'>
                    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
            </div>
        </div>

        <div class='col-md-3'>
            <div id='carousel-pager'class='carousel slide' data-ride='carousel' data-interval='1000'>
                <!-- Carousel items -->
                <div class='carousel-inner vertical'>
                    <div class='active item'>
                        <img src='../view/img/".$row["Nome"]."/img0.png' class='img-responsive' data-target='#carousel-main' data-slide-to='0'>
                    </div>
                    <div class='item'>
                        <img src='../view/img/".$row["Nome"]."/img1.png' class='img-responsive' data-target='#carousel-main' data-slide-to='1'>
                    </div>
                    <div class='item'>
                        <img src='../view/img".$row["Nome"]."/img2.png' class='img-responsive' data-target='#carousel-main' data-slide-to='2'>
                   </div>
                   <div class='item'>
                        <img src='../view/img/".$row["Nome"]."/img3.png' class='img-responsive' data-target='#carousel-main' data-slide-to='2'>
                   </div>
                   <div class='item'>
                        <img src='../view/img/".$row["Nome"]."/img4.png' class='img-responsive' data-target='#carousel-main' data-slide-to='2'>
                   </div>
                </div>
                
                <!-- Controls -->
                <a class='left carousel-control' href='#carousel-pager' role='button' data-slide='prev'>
                    <span class='glyphicon glyphicon-chevron-up' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#carousel-pager' role='button' data-slide='next'>
                    <span class='glyphicon glyphicon-chevron-down' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
            </div>
        </div>
    </div>
</div>





</section>


<section id='aside'>

<article id='dados'>
<h1>Nome do Produto: ".$row["Nome"]."</h1>
<h3><p>Valor: ".$row["Valor"]."</p>
<p></p>
<p>Descrição:".$row["Descricao"]."</br>
</p></h3>
</article>

<article id='botaoCompra'>



<button type='button' class='btn btn-light'>   Comprar   </button>



</article>

</section>


</section>

";$j=0;
if ($j==0){
				if(file_exists("../view/about.php")) {

        	include '../view/about.php'; 
        	include '../view/footer.php';  		
        	}else{
        	include './view/about.php';
        	include './view/footer.php'; 
        }		$j++;
			}
       
        				}


        				 $result->close();
	}
 }	

	





 


?>