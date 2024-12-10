<?php

$servidor = 'localhost';
$banco = 'times';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$codigoSQL = "INSERT INTO `times` (`id`, `nome`, `pontos`) VALUES (NULL, :nm, :pnts)";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'pnts' => $_GET['pts']));

    if($resultado) {
	echo "Executado!";
    } else {
	echo "Erro ao executar!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>
