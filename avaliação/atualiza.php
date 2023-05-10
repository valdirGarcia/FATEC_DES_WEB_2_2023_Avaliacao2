<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro</title>
</head>
<body>
<div>
        <h1><strong>Selecione o novo nome para atualizar: </strong><b>
        <br><br>
        <form action="update.php" method="post">
        <label for="id">novo nome:</label>
        <input type="text" id="atualizar" name="atualizar"><br><br>
        <label for="id">id do candidato:</label>
        <input type="text" id="id_atualizar" name="id_atualizar"><br><br>
        <input type="submit" value="Atualizar">
    </form>
    </div>
</body>
</html>