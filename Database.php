<?php
    class Database{
        private $host = "localhost";
        private $password = "";
        private $username = "root";
        private $dbname = "oopscandiweb";
        private $connection;

        public function __construct(){
            $this->connection = new mysqli($this->host,$this->username,$this->password,$this->dbname);
                if($this->connection->connect_error){
                    die("Connection failed: ".$this->connection->connect_error);
                }
            }

        public function getConnection(){
            return $this->connection;
        }
    }
    $db=new Database();
?>