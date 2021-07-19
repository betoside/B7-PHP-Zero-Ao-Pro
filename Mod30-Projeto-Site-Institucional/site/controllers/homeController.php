<?php
// echo 'homeController';
// exit;
class homeController extends controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $portifolio = new Portifolio();
        $dados['portifolio'] = $portifolio->getTrabalhos(8);
        $dados['base'] = "http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod30-Projeto-Site-Institucional/site";


        $this->loadTemplate('home', $dados);
    }
    
}