<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apaga produtos</title>
</head>
<body>
<?php
    $id = $_GET['id'];
    $comandoSQL = "DELETE FROM produto WHERE `produto`.`id` = $id";

    $servidor = 'localhost';
    $banco = 'loja';
    $usuario = 'root';
    $senha = '';

    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    try {
	$resultado = $conexao->exec($comandoSQL);

	if($resultado != 0) {
	    echo "Apagado!";
	} else {
	    echo "Erro ao apagar!";
	}
    } catch (Exception $e) {
	echo "Erro $e";
    }
?>
</body>
</html> 
