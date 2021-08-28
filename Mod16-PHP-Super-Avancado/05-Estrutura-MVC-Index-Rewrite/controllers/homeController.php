<?php
class homeController extends controller {

    public function index()
    {
        $dados = array(
            'qtd' => 5,
            'nome' => 'Betao',
            'idade' => '46',
        );
        // $qtd = 5;
        // $nome = 'Betao';
        // $idade = '46';

        // $this->loadView('home', $dados);
        $this->loadTemplate('home', $dados);
    }

    

}