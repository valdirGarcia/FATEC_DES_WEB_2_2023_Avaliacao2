<?php 

require_once('DBconnect.php');

$objeto1 = new DBConnect(); 

if($objeto1->deletar($id_deletar = $_POST['id_deletar'])){
    echo "candidato deletado";
}

?>