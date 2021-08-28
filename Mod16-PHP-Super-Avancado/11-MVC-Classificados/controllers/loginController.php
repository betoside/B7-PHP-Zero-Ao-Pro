<?php
class loginController extends controller {

    public function index()
    {
        $dados = array();
        $dados['login'] = 0;

        $u = new Usuarios();
        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];
    
            if($u->login($email, $senha)) {
                $dados['login'] = 1;
            } else {
                $dados['login'] = 2;
            }
        }

        $this->loadTemplate('login', $dados);
    }

}