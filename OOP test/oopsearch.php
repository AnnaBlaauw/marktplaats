<?php

class search extends dbh {

    protected function getAllArtikelen() {
        $sql = "SELECT * FROM artikelen";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
}