<?php
class Paginas extends model {
    
    
    public function getPagina($url)
    {
        // print_r($url);exit;
        $array = array();

        $sql = "SELECT * FROM paginas WHERE url = '$url'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

}