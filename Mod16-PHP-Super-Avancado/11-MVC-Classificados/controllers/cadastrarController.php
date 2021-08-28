<?php
class cadastrarController extends controller {

    public function index()
    {
        $dados = array(); 
        $dados['flash'] = 0;

        $u = new Usuarios();
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];
            $telefone = addslashes($_POST['telefone']);

            if(!empty($nome) && !empty($email) && !empty($senha)) {
                if($u->cadastrar($nome, $email, $senha, $telefone)) {
                    $dados['flash'] = 1;
                } else {
                    $dados['flash'] = 2;
                }
            }

        } else {
            $dados['flash'] = 3;
        }

        // print_r($dados);
        // exit;

        $this->loadTemplate('cadastro', $dados);
    }

    
    public function abrir($id)
    {

    }
    
}