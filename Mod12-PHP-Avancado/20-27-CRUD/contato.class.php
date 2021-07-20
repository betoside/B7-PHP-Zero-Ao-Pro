<?php
class Contato {

    // a conexao com BD pode ser feita no construtor
    // pode vir de fora tb
    // vamos ver os dois jeitos
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname=crudoo-20-27;host=localhost", 'root', 'root');
        // echo 'conexion works';
    }

    // 1º C - create
    // public function adicionar($nome = '', $email)
    public function adicionar($email, $nome = '') // comeca pelos obrigatorios
    {
        /*
        adicionar novo contato
        - nome (opcional)
        - email (required) 1º por esse

        integridade de dados
        1º passo - verificar se o email ja existe
        2º passo - adicionar
        metodo auxiliar aqui
        */ 
        if ($this->existeEmail($email) == false) {
            $sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    // 2º - R (read)
    public function getNome($email)
    {
        $sql = "SELECT * FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $info = $sql->fetch();
            return $info['nome'];
        } else {
            return '';
        }
    }

    public function getAll()
    {
        $sql = "SELECT * FROM contatos";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql->fetchAll(); // retorna um array
        } else {
            return array(); // mesma coisa, array
        }
    }

    // 3º - U (update)
    public function editar($nome, $email)
    {
        /*
        usar alguma informacao que seja unica para identificar o USER
        */
        if ($this->existeEmail($email)) {
                
            $sql = "UPDATE contatos SET nome = :nome WHERE email = :email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();
            
            return true;
        } else {
            return false;
        }
    }

    // 4º - D (delete)
    public function excluir($email)
    {
        /*
        poderia excluir direto sem verificar porem vamos checar o email para responder ao user sobre a acao
        */
        if ($this->existeEmail($email)) { // fazer a verificacao para poder dar uma resposta ao user
                
            $sql = "DELETE FROM contatos WHERE email = :email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();
            
            return true;
        } else {
            return false;
        }
    }

    // funcoes auxiliares
    private function existeEmail($email)
    {
        $sql = "SELECT * FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}