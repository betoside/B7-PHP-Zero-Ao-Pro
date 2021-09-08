<?php
class Paginas extends model {

    public function getPaginas()
    {
        $array = array();

        $sql = "SELECT id, url, titulo FROM paginas";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
    
    
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