<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulário de cadastro</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <div class="container" style="margin-top: 40px">
    <h3> Lista de produto</h3>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nro Produto</th>
          <th scope="col">Nome Produto</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Ação</th>

        </tr>
      </thead>

      <tr>
        <?php
        include 'conexao.php';
        $sql = "SELECT * FROM estoque";
        $busca = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($busca)) {
          $id_estoque = $array['id_estoque'];
          $nroproduto = $array['nroproduto'];
          $nomeproduto = $array['nomeproduto'];
          $categoria = $array['categoria'];
          $quantidade = $array['quantidade'];
          $fornecedor = $array['fornecedor'];
          ?>
        <tr>

          <td>
            <?php echo $nroproduto ?>
          </td>
          <td>
            <?php echo $nomeproduto ?>
          </td>
          <td>
            <?php echo $categoria ?>
          </td>
          <td>
            <?php echo $quantidade ?>
          </td>
          <td>
            <?php echo $fornecedor ?>
          </td>
          <td><a class="btn btn-warning" href="editar_produto.php?id=<?php
          echo $id_estoque ?>" role="button">Editar</a>

            <a class="btn btn-danger" href="deletar_produto.php?id=<?php
            echo $id_estoque ?>" role="button">Deletar</a>
          </td>
        </tr>

        <?php
        }
        ?>

      </tr>

    </table>
    <div style="text-align: right;">
		<button type="submit" class="btn btn-success">Cadastrar</button>
		</div>
		<link rel="stylesheet" href="css/bootstrap.css">
	<div class="container" style = "width: 400px;">
		
			<div style="margin-top: 25px;margin-left: 780px">
				<a href="index.php" role = "button" class="btn btn-sm btn-primary">Voltar</a>	
			</div>

  



  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>