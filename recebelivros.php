<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe livros</title>
</head>
<body>
    <form action="salvalivros.php">
	<label for="tit">Título:</label>
	<input type="text" name="tit"><br>

    <label for="idio">Idioma:</label>
	<input type="text" name="idio"><br>

    <label for="qntp">Quantidade de páginas:</label>
	<input type="text" name="qntp"><br>

    <label for="ed">Editora:</label>
	<input type="text" name="ed"><br>

    <label for="data">Data da publicação:</label>
	<input type="date" name="data"><br>

    <label for="isbn">ISBN:</label>
	<input type="text" name="isbn"><br>

	<input type="submit">
    </form>
</body>

</html>
