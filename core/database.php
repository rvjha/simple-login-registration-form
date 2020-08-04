<?php
    class database{
        
        //! DB Params
        private $host = 'localhost';//server 
        private $db_name = 'db'; //database name
        private $username ='root';//db admin name 
        private $password = ''; //db admin password 
        private $conn;
        
        //! DB Connect
        public function connect(){
            
            $this->conn = NULL;
            
            try {
                $this->conn = new PDO('mysql:host=' .$this->host. ';dbname=' .$this->db_name, $this->username,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e) {
                
                echo "Connection error" . $e->getMessage();

            }
            return $this->conn;
        }
    }