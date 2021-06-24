<?php

use MongoDB\Client;

require_once "vendor/autoload.php";
class DBMongo
{
    public $con;
    public $conn_string = "mongodb+srv://leminh1031999:minh10399@cluster0.dkkvd.mongodb.net/myFirstDatabase?retryWrites=true&w=majority";
    public $dbname = "trithucsoDB";
    public $db;
    function __construct()
    {
        $this->con = new Client($this->conn_string);
        $this->db = $this->con->selectDatabase($this->dbname);
    }
}
?>