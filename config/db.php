<?php
    class db {
        private static $instance = null;
        private $conn;

        private $host = 'localhost';
        private $db = 'hairClinic';
        private $user = 'root';
        private $pass = '';

        private function __construct(){
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public static function getInstance() {
            if(!self::$instance) {
                self::$instance = new db();
            }
            return self::$instance;
        }

        public function getConnection() {
            return $this->conn;
        }
    }
?>