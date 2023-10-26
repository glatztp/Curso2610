<?php
include 'conexao.php';


$id = $_GET['id'];


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style type="text/css">
		
		#tamanhoContainer{
			width: 500px;
		}
		
	</style>

</head>
<body>

<div class="container" id ="tamanhoContainer" style="margin-top: 40px;">
	<h4>Formulário de Cadastro</h4>
	<form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
		<?php
			$sql = "SELECT * FROM estoque WHERE id_estoque = $id";
			$buscar = mysqli_query($conexao,$sql);
			while ($array =mysqli_fetch_array($buscar)) {
				$id_estoque = $array['id_estoque'];
			  	$nroproduto = $array['nroproduto'];
			  	$nomeproduto = $array['nomeproduto'];
			  	$categoria = $array['categoria'];
			  	$quantidade = $array['quantidade'];
			  	$fornecedor = $array['fornecedor'];
			

		?>



		<div class="mb-3">
	    	<label >Nro de registro</label>
	    	<input type="number" class="form-control" name="id"  value="<?php echo $id ?>" style="display:none">
	    	<input type="number" class="form-control" name="nroproduto"  value="<?php echo $nroproduto ?>">
		</div>
		<div class="mb-3">
	    	<label >Nome do Produto</label>
	    	<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
		</div>
		
		<div class="mb-3">
			<label>Categoria</label>
	    	<select class="form-select" name="categoria" >
			 
			  <option >Periféricos</option>
			  <option >Hardware</option>
			  <option >Software</option>
			  <option >Celulares</option>
			
			</select>
		</div>
		<div class="mb-3">
	    	<label >Quantidade</label>
	    	<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
		</div>
		<div class="mb-3">
			<label>Fornecedor</label>
	    	<select class="form-control" name="fornecedor" >
			
			  <option >Fornecedor A</option>
			  <option >Fornecedor B</option>
			  <option >Fornecedor C</option>
			
			
			</select>
		</div>
		<div style="text-align: right;">
		<button type="submit" class="btn btn-success">Atualizar</button>
		</div>
		
			<div style="margin-top: 25px;margin-left:420px">
				<a href="listar_produtos.php" role = "button" class="btn btn-sm btn-primary">Voltar</a>	
			</div>
	<?php } ?>
	</form>
</div>












<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>