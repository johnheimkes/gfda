<?php
  include "config.inc.php";
  require_once "classes/class.fucking_db.php";

  $db = new FuckingDB($config);
  $tip = $db->find($_GET["id"]);
?>
<?php 
    include "header.php" 
?>

        <div class="advice <?=$tip["gender"]?>">
          <h2><?= $tip["body"] ?></h2>
        </div>
<?php 
    include "footer.php" 
?>