< <a href="../">módulo 12 php avançado</a> / <a href="">reload page</a>
<h1>#7: Introdução à orientação a objetos</h1>

<pre>

    PESSOA 
        nome 
        idade 
        endereco 
        cor do cabelo 
        cor dos olhos 

        anda 
        corre 
        senta 
        levanta 
        le 

    
    Conceito

        Class 
            propriedades / caracteristicas 
            funcionalidades 

    

    #8: Definindo uma Classe
    #9: Definindo Métodos

        < ? p h p
        class Usuario { // o nome da class pode ser o nome da tabela ou do bd

                // 1º colocar a permissao de acesso do metodo
                public 
                    pode acessar de qualquer lugar
                    qdo queremos as acoes da funcao publicas
                        - pegarNome

                    public function trocarSenha($senhaAtual, $senhaNova) {
                        // conectar ao bando de dados: conectarAoBanco()
                        // verificar se a senha atual está correta
                        // trocar a senha
                    }
            
                
                // 2º
                private 
                    se faz private normall\/\/e quando se faz funcoes ou metodos auxiliares
                    coisas que vao ajudar no funcionamento da sua classe:
                    
                        private function conectarAoBanco() {
                            // consigo acessar aqui apenas de dentro da minha class
                        }

                
                // 3º
                protected
                    Raciocínio: Quando crio o obj Usuario posso extender esse obj no futuro
                    ou seja, posso pegar um outro e juntar com ele, eles vao se agregar em um só

                    exemplo: tenho a 
                        class Humano {

                        }

                        class Skater {
                            // é humano tb
                            // terá as características de humano
                            // terá as características de skatista
                        }
                    
                        protected function algumaCoisa() {
                            // aqui será acessível apenas:
                                - centro dessa class 
                                - dentro das outras class que vao agregar com ela
                        }

        }
        ? >

    #10: Instanciando uma Classe
    </pre>

    <?php

    class Cachorro {

        // public $nome; // pode acessar externamente da class
        // private $nome; // NAO pode acessar externamente da class
        private $idade;

        public static function latir()
        // public function latir()
        {
            echo 'Latindo: Au Au';
            echo '<br>';
        }
    }
    
    $cachorro = new Cachorro();
    $cachorro->latir();
    $cachorro->nome = 'Shiba';
    echo '<br>';
    echo 'O nome do dog é >> '.$cachorro->nome.' <<';
    echo '<br>';
    echo '<br>';

    $rex = new Cachorro();
    $rex->latir();

    Cachorro::latir();
    // executando uma funcao publica
    // tem que Setar STATIC

    class Post {
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;


        public function getTitulo()
        {
            return $this->titulo;
        }

        public function setTitulo($t)
        {
            if(strlen($t) > 10){
                $this->titulo = $t;
            }
            if( is_string($t)){
                $this->titulo = $t;
            }
        }

        /*
        Por que fazer isso?
        Porque tenho como pegar os dados que o usuário está enviando e VALIDAR eles.
        É uma forma de proteger as propriedades do 'meu' objeto
        É possivel colocar um intermediário para validar 


        */ 

    }

    $post = new Post();
    $post->setTitulo('Titulo exemplo #1');
    // echo '<br>';
    echo '<hr>';
    echo $post->getTitulo();
    echo '<br>';

        
        // #13: Construtor
        class Materia {
            private $titulo;
            private $data;
            private $corpo;
            private $comentarios;
            private $qtComentarios;

            public function __construct($qq, $c = '') // sempre publico salvo excecoes
            {
                // ele é a funcao ou metodo executado instantaneamente qdo instancia o obj
                // pode preencher algumas propriedades nesse momento
                if( is_string($qq)){
                    $this->titulo = $qq;
                }
                // por enquanto apenas setado o titulo mas podem serem feitas infinitas coisas
                $this->setCorpo($c);

            }
    
    
            public function getTitulo()
            {
                return $this->titulo;
            }
            public function setTitulo($t)
            {
                if(strlen($t) > 10){
                    $this->titulo = $t;
                }
            }
    
            public function setCorpo($c)
            {
                $this->corpo = $c;
            }
            public function getCorpo()
            {
                return $this->corpo;
            }

            public function addComentario($msg)
            {
                $this->comentarios[] = $msg;
                $this->contarComentarios();
            }

            public function getQuantosComentarios()
            {
                return  $this->qtComentarios;
            }

            private function contarComentarios()
            {
                // é PRIVATE pq é o tipo de funcao que nao pode ser executado de fora.
                // Nao cabe ao sistema contar quantos comentarios tem, cabe ao proprio obj fazer esse tipo de acao.
                // só vai poder rodar dentro do proprio obj
                $this->qtComentarios = count($this->comentarios);

            }
    
        }

        $materia = new Materia('Já definimos/Setamos no __construct, então vamos ver como vai ficar esse título da matéria exemplo #2', 'Aqui é o CORPO.');
        // echo '<br>';
        echo '<hr>';
        echo $materia->getTitulo();
        echo '<br>';
        echo $materia->getCorpo();
        echo '<br>';
        $materia->addComentario('Comentario 1 da mat');
        $materia->addComentario('Comentario 2 da maté');
        $materia->addComentario('Comentario 3 da matéri');
        $materia->addComentario('Comentario 4 da matériA');
        echo 'Quantidade de comentários: <b>'. $materia->getQuantosComentarios() .'</b>';


    ?>

    <pre>
    #15: Herança de Classes
    #16: Abstração de Classes
    </pre>
    <?php

    abstract class Animal {
        // public $nome;
        private $nome;
        private $idade;
        private $raca;

        // funcoes abstratas sao sempre protegidas
        // com isso a class se torna abstrata, necessario declarar no nome da class
        abstract protected function andar();
        // com isso a class que extends tem que declarar tb o metodo abstrato
        // a class continua funcionando normall\/e
        // mas agora ela tem alguns pre-requisitos para ser herdada

        public function setNome($n)
        {
            $this->nome = $n;
        }
        public function getNome($n)
        {
            return $this->nome;
        }

    }

    class Cavalo extends Animal {
        private $qtd_patas;
        private $genero;

        public function andar(){

        }

    }

   class Gato extends Animal {
        private $qtd_patas;
        private $cor_do_pelo;

        public function andar() {

        }
    }

    // $cavalo = new Animal();
    $cavalo = new Cavalo(); // apos abstrair
    $cavalo->nome = 'Horse #1';

    echo '<br>';
    echo 'O nome do meu cavalo é: <b>'.$cavalo->nome.'</b>';
    echo '<br>';
    $cavalo->andar();
    ?>

    <pre>
        <hr>
    #17: Interface
    </pre>
    <?php

    interface Esporte { // nao pode ser usada como uma class
        //primeiro a gente cria a estruta e depois a class

        // criar todos os metodos, todos eles públicos mas nao põe conteudo neles
        public function modalidade();
        public function circuito(); // todo metodo precisa ser PUBLIC
        public function categoria();
        // ou seja, a gente cria uma especie de template, uma especie de estrutura
        // que a class que foi for usar vai ter que definir esse metodos
    }

    class Surf implements Esporte {

        public function modalidade()
        {
            echo 'FREE SURF -> Sou uma Modalidade do surf';
        }

        public function circuito()
        {
            echo 'Sou uma Modalidade do surf';
        }

        public function categoria()
        {
            echo 'Sou uma Modalidade do surf';
        }

    }

    $brasilStorm = new Surf();
    echo '<br>';
    $brasilStorm->modalidade();
    echo '<br>';
    ?>

    <pre>
        <hr>
        #18: Polimorfismo

        coneito: quando eu substituo uma funcao herdada por uma funcao
        do proprio objeto
    </pre>
    <?php
    class Veiculo {
        private $nome;

        public function potencia()
        {
            echo "ECHO: Potência Crosser: 150cc";
        }

        public function misturaClassAndObj()
        {
            echo 'ECHO: Testado mixing class and obj: olha a potência';
        }

        public function getNome()
        {
            return $this->name;
        }
    }

    class Motocicleta extends Veiculo {
        public function potencia() // substitui a funcao herdada \o/
        {
            echo "Potência XT 225, 225cc";
        }

        public function getNome()
        {
            $this->misturaClassAndObj();
        }
    }

    // $xt225 = new Moto();
    $xt225 = new Motocicleta();
    // $xt225->potencia();
    $xt225->getNome();
    ?>

    <pre>
        <hr>
        #19: Namespace
                resumindo, em linhas gerais e poucas palavras:
                é voce separar seu codigo em pastas imaginarias
                .
                pratica e exemplo
                .
                É legal/bom criar em arquivo separado para separar o arquivo e a aplicacao 
                um arquivo apenas por namespace
        
        <a href="19_namespace_v1.php">19_namespace_v1.php</a> >
    </pre>
    <?php

    require_once '19_namespace_v1.php';
    require_once '19_namespace_v2.php';
    // echo 'uri: '. $_SERVER['REQUEST_URI'];
    $base = $_SERVER['REQUEST_URI'];

    // $sobre = new Sobre(); // don't works cause missing local/diretory
    $sobre = new aplicacao\v1\Sobre();
    $sobre = new aplicacao\v2\Sobre();
    echo 'Versao : '.$sobre->versao();


    ?>


    