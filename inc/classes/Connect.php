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
                return $this->query("INSERT INTO user (firstName, secondName, email, password) VALUES ('$firstName', '$secondName', '$email', '$password')");
            }
        }

        public function getAllProducts()
        {
            return $this->query("SELECT * FROM product");
        }
        public function getProductsByType(int $typeID)
        {
            return $this->query("SELECT * FROM product WHERE typeID = '$typeID'");
        }
        public function getProductsByID(int $ID)
        {
            return $this->query("SELECT * FROM product WHERE id = '$ID'");
        }

        public function checkOrder(int $userID)
        {
            //return $this->query("SELECT * FROM order WHERE userid = '$userID'");
        }
        public function createOrder(int $userID)
        {

        }
        public function addToCart(int $userID, int $productID)
        {
            if ($this->checkOrder($userID))
            {
                echo "wombat";
            }
            //return $this->query("INSERT INTO ");
        }
        public function getCart(int $userID)
        {

        }

        public function makeReview(int $userID, int $productID, int $stars, string $comment)
        {
            return $this->query("INSERT INTO review (userID, productID, stars, comment) VALUES ('$userID', '$productID', '$stars', '$comment')");
        }
        public function getReviewsByID(int $productID)
        {
            return $this->query("SELECT * FROM review WHERE productID = '$productID'");
        }
    }
?>