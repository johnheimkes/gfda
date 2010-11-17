<?php
    require_once "classes/database.class.php";
    
    $settings = array(
        'server'     => 'localhost',
        'username'   => 'root',
        'password'   => 'root',
        'db_name'    => 'gfda',
        'db_table'   => 'tips'
    );
    
    $db = new zomg($settings);
    
    echo "<pre>";
    print_r($db->all());
    echo "</pre>";
    
    echo "<pre>";
    print_r($db->random());
    echo "</pre>";
    
    echo "<pre>";
    print_r($db->find(3));
    echo "</pre>";
    
?>
<!DOCTYPE html>
<html lang="en" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>title</title>
    <meta name="Author" content="Author" />
    <meta name="Robots" content="index,all" />
    <meta name="Keywords" content="Key Words" />
    <meta name="Description" content="Descritpion" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <h1>Good Fucking Dating Advice</h1>
        <ul id="nav">
          <li><a href="#">Nav Item 1</a></li>
          <li><a href="#">Nav Item 2</a></li>
        </ul>
      </div>
      <div id="content">
        
      </div>
      <div id="footer">
        footer
      </div>  
    </div>
  </body>
</html>