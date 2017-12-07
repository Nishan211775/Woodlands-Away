<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnection
 *
 * @author Dell
 */

define('PROJECT_ROOT_PATH', __DIR__);

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
