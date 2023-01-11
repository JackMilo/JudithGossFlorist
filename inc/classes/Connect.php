<?php
    class Connect
    {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "judithgossflorist";

        private function connect()
        {
            return mysqli_connect($this->host, $this->username, $this->password, $this->db);
        }

        public function query(string $query)
        {
            return mysqli_query($this->connect(), $query);
        }

        public function login(string $email, string $password)
        {
            return mysqli_fetch_assoc($this->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'"));
        }

        public function register(string $firstName, string $secondName, string $email, string $password, string $rpassword)
        {
            if ($password == $rpassword)
            {
                $this->query("INSERT INTO user (firstName, secondName, email, password) VALUES ('$firstName', '$secondName', '$email', '$password')");
            }
        }
    }
?>