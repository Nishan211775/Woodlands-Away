<?php

class DBConnection {
    //put your code here
    private $host;
    private $user;
    private $pass;
    private $database;
    private $conn;

    function DBConnection() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->database = 'woodlands_away';
    }

    public function getConnections() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database) or
        die($this->conn->error);

        return $this->conn;
    }

}


