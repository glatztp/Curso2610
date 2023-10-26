<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container" style="margin-top: 40px; width: 500px;">
    <h4>Cadastro de Categoria</h4>
    <form action="inserir_categoria.php" method="POST">
      <div class="mb-3">
        <label for="categoria" style = "margin-top:15px;" >Categoria</label>
        <input type="text" id="categoria" class="form-control" name="categoria" placeholder="Insira o nome da Categoria"
          required style = "margin-top:15px;">
      </div>
      <div style = "text-align: right; margin-top:15px;">
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>
    </form>
    <link rel="stylesheet" href="css/bootstrap.css">
	<div class="container" style = "width: 400px;">
		
			<div style="margin-top: 25px;margin-left:370px">
				<a href="listar_produtos.php" role = "button" class="btn btn-sm btn-primary">Voltar</a>	
			</div>
	
  </div>
</body>

</html>



