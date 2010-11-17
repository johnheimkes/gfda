<?php
  include "config.inc.php";
  require_once "classes/class.fucking_db.php";

  $db = new FuckingDB($config);
  $tip = $db->random();
?>
<!DOCTYPE html>
<html lang="en" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Good Fucking Dating Advice.</title>
    <meta name="Robots" content="index,all" />
    <meta name="Keywords" content="good, fucking, dating, advice" />
    <meta name="Description" content="Good Fucking Dating Advice &mdash; Your guide to dating since two thousand fucking ten." />
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <h1>Good Fucking Dating Advice</h1>
        <ul id="nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Family Fucking Friendly</a></li>
          <li><a href="#">More Fucking Resources</a></li> <!-- daytime talk show hosts (oprah, maury, dr. phil, montel, etc...) -->
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div id="content">
        <div class="advice">
          <h2><?= $tip["body"] ?></h2>
        </div>
      </div>
      <div id="footer">
        <p class="copy">&copy; <?= date("Y")?> John Heimkes IV &mdash; Inspired by <a href="http://goodfuckingdesignadvice.com" target="_blank" title="Good Fucking Design Advice.">this</a>.</p>
      </div>  
    </div>
  </body>
</html>