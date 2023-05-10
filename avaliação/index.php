<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro vestibular</title>
</head>
<body>
<div>
        <h1><strong>cadastro de usuario: </strong><b>
        <br><br>
        <form action="create.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="cpf">cpf:</label>
        <input type="text" id="cpf" name="cpf"><br><br>
        <label for="telefone">telefone:</label>
        <input type="text" id="tel" name="tel"><br><br>
        <label for="esolaridade">escolaridade:</label>
        <input type="text" id="escl" name="escl"><br><br>
        <input type="submit" value="Cadastrar">
        <br><br>
    </form>
    </div>
    <p>
        <a href="read.php"><input type="submit" value="relatorio de cadastros"></a>
        <br><br>
        <a href="deletar.php"><input type="submit" value="Deletar cadastro"></a>
        <br><br>
        <a href="atualiza.php"><input type="submit" value="atualizar cadastro"></a>
        <br><br>
    </p>   

</body>
</html>