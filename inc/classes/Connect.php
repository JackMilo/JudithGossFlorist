<?php
    class Connect
    {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "JudithGossFlorist";

        private function Connect()
        {
            return mysqli_connect($this->host, $this->username, $this->password, $this->db);
        }

        public function query(string $query)
        {
            return mysqli_query($this->Connect(), $query);
        }
    }
?>