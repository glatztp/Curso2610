<?php
include 'conexao.php';

$id = $_POST['id'];
$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

  $sql = "UPDATE `estoque` SET `nroproduto`='$nroproduto',`nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor' WHERE id_estoque = $id";
  $atualizar = mysqli_query($conexao,$sql)


?>
	<link rel="stylesheet" href="css/bootstrap.css">
	<div class="container" style="width: 500px; border:2px solid black; border-radius:20px;margin-bottom: 25px; margin-top:25px;">
		<center>
			<h3 style= " margin-bottom: 25px; margin-top:25px;">Atualizado com sucesso</h3>
			<div style="margin-top: 10px">
				<a href="listar_produtos.php" role = "button" class="btn btn-sm btn-primary" style= " margin-bottom: 25px; margin-top:25px;">Voltar</a>	
			</div>
		</center>



	</div>