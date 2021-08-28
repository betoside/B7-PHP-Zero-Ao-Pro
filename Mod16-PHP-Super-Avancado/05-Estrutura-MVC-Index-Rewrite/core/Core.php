<?php
class Core {

    public function run()
    {
        // echo 'URL (core): '.$_GET['url'];
        // 1 = controller
        // 2 = action ou metodo 
        // 3, 4, 5 = parametros

        // controller = home; // padrao
        // action = index; // padrao

        $url = '/';
        if (isset($_GET['url'])) {
            $url.=$_GET['url']; 
        }

        $params = array();

        // echo 'URL: '.$url;
        // http://localhost:8888/B7-PHP-Zero-Ao-Pro/Mod16-PHP-Super-Avancado/05-Estrutura-MVC-Index-Rewrite/galeria/abrir/123

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);
            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if (count($url) > 0) {
                $params = $url;
            }

            // print_r($url);
            // echo '<hr>';
            // $currentAction = $url[0].'Controller';
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        // echo 'CONTROLLER: '.$currentController;
        // echo '<br>';
        // echo 'ACTION: '.$currentAction;
        // echo '<br>';
        // echo 'PARAMS: '.print_r($params, true);
        // echo '<br>';

        $c = new $currentController();
        // $c = new homeController();
        // $c = new galeriaController();
        call_user_func_array(array($c, $currentAction), $params);

    }
    
}