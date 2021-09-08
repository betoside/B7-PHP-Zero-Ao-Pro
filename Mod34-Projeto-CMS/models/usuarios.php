<?php
class Usuarios extends model {

    public function verificarLogin()
    {
        if (
            !isset($_SESSION['lgpainel']) || 
            ( isset($_SESSION['lgpainel']) && empty($_SESSION['lgpainel']) )
        ) {
            header('Location: '.BASE.'painel/login');
            exit;
        }
        
    }

    public function logar($email, $senha)
    {
        $retorno = '';

        $sql = "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        // print_r($sql);
        // exit;
        $sql = $this->db->query($sql);
        // $sql = "SELECT * FROM usuarios WHERE $email = :email, $senha = :senha";
        // $sql = $this->db->prepare(':email', $email);
        // $sql = $this->db->prepare(':senha', $senha);
        // $sql->execute();

        if ($sql->rowCount() > 0) {
            $f = $sql->fetch();
            $_SESSION['lgpainel'] = $f['id'];
            header('Location: '.BASE.'painel');

        } else {
            $retorno = 'Email ou Senha não conferem';
        }

        return $retorno;
    }

}