<?php

$servidor = 'localhost';
$banco = 'biblioteca';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$codigoSQL = "INSERT INTO `livro` (`id`, `titulo`, `idioma`,`quantidade`,`editora`, `data`, `isbn`) VALUES (NULL, :tit,:idi ,:quap, :edit, :dat, :isb)";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('tit' => $_GET['tit'], 'idi' => $_GET['idio'],'quap' => $_GET['qntp'], 'edit' => $_GET['ed'],'dat' => $_GET['data'], 'isb' => $_GET['isbn'],));

    if($resultado) {
	echo "Comando executado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>
