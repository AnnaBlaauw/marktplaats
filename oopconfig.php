<?php

class dbh {

    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "marktplaats";

        $conn = new msqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;
    }   
}