<?php
require_once 'config.php';
class Language {

    private $l;
    private $ini;
    private $bd;

    public function __construct()
    {
        // $this->l = 'pt-br';
        $this->l = 'en';
        if (!empty($_SESSION['lang']) && file_exists('lang/'.$_SESSION['lang'].'.ini')) {
            $this->l = $_SESSION['lang'];
        }

        $this->ini = parse_ini_file('lang/'.$this->l.'.ini');

        global $pdo;
        $sql = "SELECT * FROM lang WHERE lang = :lang";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':lang', $this->l);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $bd = $sql->fetchAll();

            foreach($bd as $item):
                $this->bd[$item['nome']] = $item['valor'];
            endforeach;
        }
    }

    public function getLanguage()
    {
        return $this->l;
    }

    public function get($word, $return = false)
    {
        $text = $word;

        if (isset($this->ini[$word])) {
            $text = $this->ini[$word];
        } elseif ($this->bd[$word]) {
            $text = $this->bd[$word];
        }

        if ($return) {
            return $text;
        } else {
            echo $text;
        }
        
    }
}