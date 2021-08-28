<?php
class homeController extends controller {

    public function index()
    {

        $anuncios = new Anuncios();
        $usuarios = new Usuarios();

        $dados = array(
            'qtd' => $anuncios->getQuantidade(),
            'nome' => $usuarios->getNome(),
            'idade' => $usuarios->getIdade()
        );
        // $qtd = 5;
        // $nome = 'Betao';
        // $idade = '46';

        // $this->loadView('home', $dados);
        $this->loadTemplate('home', $dados);
    }

    

}