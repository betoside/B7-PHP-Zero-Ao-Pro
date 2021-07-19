<?php
// echo 'contatoController';
// exit;
class contatoController extends controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $dados = array(
            'aviso' => ''
        );

        if ( isset($_POST['nome']) && !empty($_POST['nome']) ) {

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $msg = addslashes($_POST['mensagem']);

            $para = "email@email.com.br";
            $assunto = "Dúvida do site";
            $mensagem = "Nome: ".$nome."<br>Email: ".$email."<br>Mensagem: ".$msg;

            $cabecalho = 'From: emailFrom@email.com'. "\r\n".
                            'Reply-To: '.$email."\r\n".
                            'X-Mailer: PHP/'.phpversion();

            // mail($para, $assunto, $msg, $cabecalho);
            $dados['aviso'] = "<br> >>> Email enviago com sucesso <<<";
        }

        $this->loadTemplate('contato', $dados);
    }
    
}