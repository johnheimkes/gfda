<?php
  include "config.inc.php";
  require_once "classes/class.fucking_db.php";

  $db = new FuckingDB($config);
  
  $tip = str_ireplace("fucking", "<span class='friendly'>fucking</span>", $db->random());
?>

<?php 
    include "header.php" 
?>

        <div class="advice <?=$tip["gender"]?>">
          <a href="/show/<?= $tip["id"] ?>"><h2><?= $tip["body"] ?></h2></a>
        </div>
        
<?php 
    include "footer.php" 
?>