<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$query = "CREATE TABLE IF NOT EXISTS estoque(
	id_estoque int not null auto_increment,
	nroproduto int not null,
	nomeproduto varchar(255) not null,
	categoria varchar(255) not null,
	quantidade int not null,
	fornecedor varchar(255) not null,
	primary key(id_estoque)

)";
$executar = mysqli_query($conexao, $query);

$sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
$inserir = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	

</head>
<body>
<div class = "container"  style="width: 500px; border:2px solid black; border-radius:20px; margin-bottom: 50px; margin-top:50px;">
			<center>
			<h4 style="margin-top:25px;">Produto Adicionado com sucesso!</h4>
		<div style="padding-top: 20px">
		
			<a href="index.php" role = "button" class="btn btn-sm btn-primary" style="margin-top:25px;">Cadastrar novo Item</a>	
			</center>
		
		<center>
			<h4 style="margin-top:25px;">Listar produto</h4>
		<div style="padding-top: 20px">
		
			<a href="listar_produtos.php" role = "button" class="btn btn-sm btn-primary" style="margin-top:15px;">Listar</a>	
			</center>
			<br>
		</div>

</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>