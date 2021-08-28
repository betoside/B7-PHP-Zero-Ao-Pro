<?php
class galeriaController extends controller {

    public function index()
    {
        // echo 'Listando Galerias';
        $dados = array(
            'qtd' => 129
        );

        // $this->loadView('galeria', $dados);
        $this->loadTemplate('galeria', $dados);
    }

}