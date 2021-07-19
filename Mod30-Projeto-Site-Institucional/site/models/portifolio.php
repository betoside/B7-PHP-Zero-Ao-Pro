<?php
class Portifolio extends model {

    public function getTrabalhos($n = '') {

        $sql = "SELECT * FROM portifolio ";
        if(!empty($n)) {
            // $sql .= "";
            $sql = $sql . "LIMIT ".$n;
        }

        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

}