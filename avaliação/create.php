<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar cadastro</title>
</head>
<body>

<?php

require_once('DBconnect.php');
$objeto1 = new DBConnect(); 


if($objeto1->inserir_dados('null',$nome = $_POST['nome'],$cpf = $_POST['cpf'],$tel = $_POST ['tel'], $escl = $_POST['escl'])){
    echo "Dados enviados";
}
   
//$objeto1->relatorioCandidatos();
 
//$objeto1->atualiza($nome_atualizar = $_POST['atualizar'],$id_atualizar = $_POST['id_atualizar']);

//$objeto1->deletar($id_deletar = $_POST['id_deletar']);

unset($objeto1);



?>
 
</body>
</html>