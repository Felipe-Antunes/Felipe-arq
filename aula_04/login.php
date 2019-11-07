<!DOCTYPE html>
<html>
<head>
	<title>Tarefas</title>
	<meta charset="utf-8">
	<style>

    	p {
    		font-size: 20pt;
    		font-family: Arial sens-serif;
    		color: #ffffff;
    	}

    	h2 {
    		font-family: Arial sens-serif;
    	}

	</style>
</head>
<body>

  <h2>Login feito com sucesso! Confira as informações abaixo</h2>

  <p>E-mail: <?php echo $_GET["email"] ?></p>

  <p>Senha: <?php echo $_GET["senha"] ?></p>

  <?php

    $email = $_GET["email"];

    $senha = $_GET["senha"];

  ?>

</body>
</html>