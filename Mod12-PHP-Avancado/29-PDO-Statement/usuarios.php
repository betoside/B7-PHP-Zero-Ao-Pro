<?php
class Usuarios {
    
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:dbname=zeroAoPro_blog;host=localhost", "root", "root");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "ERR: ".$e->getMessage();
        }
    }

    public function selecionarPorId($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        $array = array();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        } else {
            return false;
        }

        return $array;
    }

    public function inserir($nome, $email, $senha)
    {
        $sql = "INSERT INTO usuarios 
                SET nome = :nome, email = :email, senha = :senha";
        $sql = $this->db->prepare($sql);
        $sql->bindParam(":nome", $nome); 
        /*
        Associa diretamente a variavel com o :nome. 
        Se atualizar valor da variavel depois do bindParam e antes do execute, 
        será executado o valor da variavel e nao o que VALUE que veio no post/get
        */ 
        $sql->bindParam(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();
    }

    public function atualizar($nome, $email, $senha, $id)
    {
        $sql = "UPDATE usuarios 
                SET nome = ?, email = ?, senha = ?
                WHERE id = ?";
        $sql = $this->db->prepare($sql);
        $sql->execute(array($nome, $email, md5($senha), $id));
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
    }

}