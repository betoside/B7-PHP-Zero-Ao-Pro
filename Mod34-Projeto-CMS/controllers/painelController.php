<?php
class painelController extends controller {

    public function __construct()
    {
        parent::__construct();
        // so posso acessar o painelController se estiver logado
    }

    public function index()
    {
        $u = new Usuarios();
        $u->verificarLogin();
        $dados = array();

        $p = new Paginas();
        $dados['paginas'] = $p->getPaginas();
        
        $this->loadTemplateInPainel('painel/home', $dados);
    }

    public function menus()
    {
        $u = new Usuarios();
        $u->verificarLogin();
        $dados = array();

        $m = new Menu();
        $dados['menus'] = $m->getMenu();
        
        $this->loadTemplateInPainel('painel/menus', $dados);
    }

    public function menus_del($id)
    {
        $u = new Usuarios();
        $u->verificarLogin();

        $m = new Menu();
        $m->delete($id);
        
        header('Location: '.BASE.'painel/menus');
        exit;
    }

    public function menus_edit($id)
    {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = array();
        $m = new Menu();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $url = addslashes($_POST['url']);

            $m->update($nome, $url, $id);
            header('Location: '.BASE.'painel/menus');
            exit;

        }

        $dados['menu'] = $m->getMenu($id);
        
        $this->loadTemplateInPainel('painel/menus_edit', $dados);
    }

    public function menus_add()
    {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = array();
        $m = new Menu();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $url = addslashes($_POST['url']);

            $m->insert($nome, $url);
            header('Location: '.BASE.'painel/menus');
            exit;

        }
        
        $this->loadTemplateInPainel('painel/menus_add', $dados);
    }

    public function login()
    {
        $dados = array(
            'erro' => ''
        );

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            $u = new Usuarios();
            $dados['erro'] = $u->logar($email, $senha);
        }

        $this->loadView('painel/login', $dados);
    }

    public function logout()
    {
        unset($_SESSION['lgpainel']);
        header('Location: '.BASE.'painel/login');
        exit;
    }

    public function home()
    {
        $dados = array();
        $this->loadView('painel/home', $dados);
    }

}