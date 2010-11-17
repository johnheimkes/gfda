<?php
/**
* Database class for goodfuckingdatingadvice.com
* @author John Heimkes IV <johnh@ang.st>
* @author Jake Dahn <jake@ang.st>
* @version 1.0
*/
class zomg {

    private $config = array();

    function __construct($settings="") {
        $this->config = $settings;
        $this->connect();
    }
    
    public function connect() {
        $this->connection = mysql_connect($this->config["server"], $this->config["username"], $this->config["password"]);
        return $this->connection;
    }
    
    public function all() {
        mysql_select_db($this->config["db_name"], $this->connection);
        $result = mysql_query("SELECT * FROM tips");
        
        while ($row = mysql_fetch_assoc($result)) {
            $results[] = $row;
        }

        return $results;
    }

}


// $settings = array(
//     'server'     => 'localhost',
//     'username'   => 'foo',
//     'password'   => 'bar'
// )
// 
// $settings["server"]
// 
// 
// $db = databse()