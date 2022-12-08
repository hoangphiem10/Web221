<?php 
    class Database{
        public $con;
        public $servername = "localhost:3307";
        public $username = "root";
        public $password = "";
        public $dbname = "web221";

        function __construct(){
            $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }
    }

?>