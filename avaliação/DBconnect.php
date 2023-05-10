<?php

class DBConnect { 
    private $servername = "localhost"; 
    private $username = "root";
    private $password = "";
    private $dbname="vestibular";
    private $conn;
    public function __construct() { 
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            print_r($this->conn); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "<br>" . $e->getMessage();
        }
    }

    public function __destruct() { 
        $this->fechar_conexao();
	    print "DESTRUÍDO: Objeto {$this->conn}\n"; 
	} 

    private function fechar_conexao(){
        $this->conn = null;
    }
    
    // criação

    public function inserir_dados($id, $nome, $cpf, $telefone, $escola_publica){
        try {
            $sql = "INSERT INTO candidatos (id, nome, cpf, telefone, escola_publica) VALUES ($id, '".$nome."', '".$cpf."', '".$telefone."', $escola_publica)";
            # print($sql);
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }


    // leitura

    function relatorioCandidatos() {
        $sql = "SELECT * FROM candidatos";
        $result = $this->conn->query($sql);

    if ($result->rowCount() > 0) {
        echo "<table><tr><th>ID</th><th>Nome</th><th>Telefone</th><th>CPF</th><th>Escolaridade</th></tr>";
    while($row = $result->fetch()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["telefone"]."</td><td>".$row["cpf"]."</td><td>".$row["escola_publica"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}

  // atualiza

    function atualiza($nome_atualizar, $id_atualizar){
        $sql = "UPDATE candidatos SET nome='$nome_atualizar' WHERE id=$id_atualizar";
        $this->conn->exec($sql);
    }

  // deletar

    function deletar($id_deletar){
        $sql = "DELETE FROM candidatos WHERE id=$id_deletar";
        $this->conn->exec($sql);
    }

}
?>