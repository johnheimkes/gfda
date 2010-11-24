<?php
    /**
    * Database class for goodfuckingdatingadvice.com
    * @author John Heimkes IV <johnh@ang.st>
    * @author Jake Dahn <jake@ang.st>
    * @version 1.0
    */
    class FuckingDB {

        function __construct($config="") {
            $this->config = $config;
            $this->connect();
            mysql_select_db($this->config["db_name"], $this->connection);
        }


        /**
         * Opens a connection with the fucking mysql server.
         * @return resource
        */
        public function connect() {
            $this->connection = mysql_connect($this->config["server"], $this->config["username"], $this->config["password"]);
            return $this->connection;
        }


        /**
         * Selects all rows in the fucking database table.
         * @return array
        */
        public function all() {
            $query = mysql_query("SELECT * FROM ".$this->config['db_table']);

            while ($row = mysql_fetch_assoc($query)) {
                $results[] = $row;
            }

            return $results;
        }


        /**
         * Selects a random fucking row in the database table.
         * @return array
        */
        public function random() {
            $query = mysql_query("SELECT * FROM ".$this->config['db_table']." ORDER BY RAND()");

            return mysql_fetch_assoc($query);
        }


        /**
         * Selects a specific row in the fucking database table.
         * @param integer $id required. (Tip ID).
         * @return array
        */
        public function find($id) {
            $query = mysql_query("SELECT * FROM ".$this->config['db_table']." WHERE id = '$id'");

            return mysql_fetch_assoc();
        }


        public function his() {
            $query = mysql_query("SELECT * FROM ".$this->config['db_table']." WHERE gender = 'his' ORDER BY RAND()");

            return mysql_fetch_assoc($query);
        }


        public function hers() {
            $query = mysql_query("SELECT * FROM ".$this->config['db_table']." WHERE gender = 'hers' ORDER BY RAND()");

            return mysql_fetch_assoc($query);
        }
    }
    
    
    
    
    