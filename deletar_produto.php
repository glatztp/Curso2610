<?php

include('conexao.php');

$id = $_GET['id'];
$sql = "DELETE FROM estoque WHERE id_estoque = $id ";
$deletar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
	<div class="container" style = "width: 400px;">
		<center>
			<h3>Deletado com sucesso</h3>
			<div style="margin-top: 10px">
				<a href="listar_produtos.php" role = "button" class="btn btn-sm btn-primary">Voltar</a>	
			</div>
		</center>



	</div>