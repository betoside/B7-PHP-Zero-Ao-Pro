<?php
// echo '../core/Core > controllers/homeController';
// exit;
class homeController extends controller {

    public function __construct() {
        parent::__construct();
        // echo 'controllers/homeController / __construct';
        // exit;
    }

    public function index() {

        // echo 'controllers/homeController - index()';
        // exit;

        $dados = array(
            // 'tpl' => 'default'
            'depoimentos' => array()
        );

        // pegar depoimentos
        $depo = new Depoimentos();
        $dados['depoimentos'] = $depo->getDepoimentos(2);

        // print_r($dados);exit;

        // $portifolio = new Portifolio();
        // $dados['portifolio'] = $portifolio->getTrabalhos(8);
        // $dados['base'] = "http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod30-Projeto-Site-Institucional/site";


        $this->loadTemplate('home', $dados);
    }
    
}