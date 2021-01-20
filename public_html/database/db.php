<?php

    class database {
        private $con;

        public function connect(){
            include_once("constants.php");
            $this->con = new Mysqli(HOST, USER, PASS, DB_NAME);

            if($this->con)
            {
                //echo "connected";
                return $this->con;
            }
            return "DATABASE_CONNECTION_FAIL";
        }
    }

    //$db = new database();
    //$db->connect();

?>