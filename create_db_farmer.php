<?php

class CreatefarmerDb
{
        public $server;
        public $username;
        public $password;
        public $db_name;
        public $tablename;
        public $con;

        // class constructor
    public function __construct(
        $db_name    = "vegetable_website",
        $tablename  = "buyvegetables",
        $server     = "localhost",
        $username   = "root",
        $password   = ""
    )
    {

      // create connection
      $this->con = mysqli_connect($server, $username, $password);

      // Check connection
      if (!$this->con){
          die("Connection failed : " . mysqli_connect_error());
      }

      // query
      $sql = "CREATE DATABASE IF NOT EXISTS $db_name";

      // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($server, $username, $password, $db_name);

            // sql to create new table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
                            (buyveg_id         INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            buyveg_name        VARCHAR (25) NOT NULL,
                            catoA              VARCHAR (150),
                            catoB              VARCHAR (150),
                            catoC              VARCHAR (50),                           
                            dateofveg          VARCHAR (200),
                            availablequntity   VARCHAR (200),
                            needquntity        VARCHAR (200),
                            vegstatus          VARCHAR (200),
                            contact            VARCHAR (200),
                            picture            VARCHAR (200),
                            mailaddress        VARCHAR (200),
                            shopname           VARCHAR (200),
                            economiccenter     VARCHAR (200)
                          
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }
    }

    // get product from the database
    public function getData(){
        $sql = "SELECT * FROM buyvegetables";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    }


?>