<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Taresfas</title>
    <style>
    	p {
    		font-size: 20pt;
    		font-family: Arial sens-serif;
    		color: #ffffff;
    	}

    	h2 {
    		font-family: Arial sens-serif;
    		color: #ffffff;
    	}

        body {
        	background-color: black;
        }

    </style>
</head>
<body>

  <h2> Cadastro feito com sucesso! Confira seus dados </h2>

  <p>Nome: <?php echo $_GET["nome"] ?></p>

  <p>Data de nascimento: <?php echo $_GET["nasc"] ?></p>

  <p>E-mail: <?php echo $_GET["email"] ?></p>

  <p>Senha: <?php echo $_GET["senha"] ?></p>

  <p>Nacionalidade: <?php echo $_GET["pais"] ?></p>

 <?php

    $nome = $_GET["nome"];

    $nasc = $_GET["nasc"];

    $email = $_GET["email"];

    $senha = $_GET["senha"];

    $pais = $_GET["pais"];

 ?>

</body>
</html>