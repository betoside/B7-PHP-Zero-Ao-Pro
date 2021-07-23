<?php
class Usuarios {
    
    private $id;
    private $email;
    private $senha;
    private $nome;

    private $pdo;

    public function __construct($i = '')
    {
        
        // SEMPRE QUE INSTANCIAR A CLASS VAI FAZER UMA CONEXAO
        try {
            $this->pdo = new PDO("mysql:dbname=zeroAoPro_blog;host=localhost", "root", "root");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // working
        } catch (PDOException $e) {
            echo 'ERR: '.$e->getMessage();
        }

        if (!empty($i)) {

            $sql = "SELECT * FROM usuarios WHERE id = ?";
            $sql = $this->pdo->prepare($sql); 
            // se estou usando prepare é pq estou mandando uma estrutura de como vai ser minha query, depois mando os valores com bindValue, bindParam ou array
            // $sql->bindValue(':id', $id);
            $sql->execute(array($i));

            if ($sql->rowCount() > 0) {
                $data = $sql->fetch(); // pega apenas o primeiro resultado
                $this->id = $data['id'];
                $this->email = $data['email'];
                $this->senha = $data['senha'];
                $this->nome = $data['nome'];
            }
        } else {

        }
    }

    // OBS: NAO POSSO ALTERAR O ID DO USER, nao posso ter um setId
    // public function setId($i)
    // {
    //     $this->id = $i;
    // }
    public function getId()
    {
        return $this->id;
    }

    public function setEmail($e)
    {
        $this->email = $e;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setSenha($s)
    {
        $this->senha = md5($s);
    }
    /*
    OBS: nao tem sentindo pegar a senha ja q ela eh criptografada
    Podemos verificar a senha mas nao pegar ela
    Podemos alterar a senha
    */
    // public function getSenha($s)
    // {
    //     return $this->senha;
    // }

    public function setNome($n)
    {
        $this->nome = $n;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function salvar()
    {
        if (!empty($this->id)) {
            // SE ELE ACHOU UM ALGUEM/USER
            // editar as informacoes
            $sql = "UPDATE usuarios SET 
                    nome = ?, 
                    email = ?, 
                    senha = ?
                    WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array(
                $this->nome, 
                $this->email, 
                $this->senha, 
                $this->id));

        } else {
            // se nao achar valor o id entao está
            // ADICIONANDO USUARIO NOVO
            $sql = "INSERT INTO usuarios SET 
                nome = ?, 
                email = ?, 
                senha = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array(
                $this->nome, 
                $this->email, 
                $this->senha));
        }
    }

    public function delete()
    {
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = $this->pdo->prepare($sql);
        $sql->execute(array($this->id));
    }

}