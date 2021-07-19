<?php
// echo 'portifolioController';
// exit;
class portifolioController extends controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $portifolio = new Portifolio();
        $dados['portifolio'] = $portifolio->getTrabalhos();
        $dados['base'] = "http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod30-Projeto-Site-Institucional/site";


        $this->loadTemplate('portifolio', $dados);
    }
    
}