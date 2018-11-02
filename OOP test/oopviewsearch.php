<?php

class viewSearch extends search {
    public function showAllArtikelen() {
        $datas = $this->getAllArtikelen();
        foreach ($datas as $data) {
            echo $data['titel']."<br>";
            echo $data['text']."<br>";
        }
    }
    
}