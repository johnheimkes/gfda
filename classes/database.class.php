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
    
    public function connect($info="") {
        $this->connection = mysql_connect($info["server"], $info["username"], $info["password"], false, MYSQL_CLIENT_INTERACTIVE);
        return mysql_select_db($info["server_name"]);
    }
    
    public function all($info="") {
        $result = mysql_query("SELECT * FROM tips");
        $row = mysql_fetch_array($result);
        return $row;
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