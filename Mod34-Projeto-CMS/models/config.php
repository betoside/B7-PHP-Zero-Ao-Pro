<?php
// echo 'models/config.php';
// exit;
class Config extends model {

    public function getConfig()
    {
        $array = array();

        $sql = "SELECT * FROM config";
        $sql = $this->db->query($sql);

        // echo '<pre>';
        // print_r($sql);
        // print_r($c['valor']);
        // exit;

        if ($sql->rowCount() > 0) {
            foreach($sql->fetchAll() as $c){

                // echo '<pre>';
                // print_r($sql);
                // print_r($c['valor']);

                $array[$c['nome']] = $c['valor'];
            }
        }
        // print_r($array);
        // exit;
        return $array;
    }

    public function setPropriedade($nome, $valor)
    {
        $this->db->query("UPDATE config SET valor = '$valor' WHERE nome = '$nome'");
    }
}