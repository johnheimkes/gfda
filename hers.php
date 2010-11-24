<?php
  include "config.inc.php";
  require_once "classes/class.fucking_db.php";

  $db = new FuckingDB($config);
  $tip = $db->hers();
?>
<!DOCTYPE html>
<html lang="en" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Good Fucking Dating Advice.</title>
    <meta name="Robots" content="index,all" />
    <meta name="Keywords" content="good, fucking, dating, advice" />
    <meta name="Description" content="Good Fucking Dating Advice &mdash; Your guide to dating since two thousand fucking ten." />
    <link rel="stylesheet" href="/public/css/style.css" type="text/css" media="screen" charset="utf-8" />
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <div id="filter">
          <h2 id="his"><a href="/his.php">His</a></h2>
          <h2 id="hers"><a href="/hers.php">Hers</a></h2>
        </div>
        <h1><a href="#">Good Fucking Dating Advice</a></h1>
      </div>
      <div id="content">
        <div class="separator"></div>
        <div class="advice <?=$tip["gender"]?>">
          <h2><?= $tip["body"] ?></h2>
        </div>
        <div class="separator"></div>
      </div>
      <div id="footer">
        <h3>More Fucking Information</h3>
        <ul id="nav">
          <li><a href="#">WTF is this?</a></li>
          <li><a href="#">Youngin' Fucking Friendly</a></li>
          <li><a href="#">More Fucking Resources</a></li> <!-- daytime talk show hosts (oprah, maury, dr. phil, montel, etc...) -->
          <li><a href="#">Fucking Contact Us</a></li>
        </ul>
        
        <p class="copy">&copy; <?= date("Y")?> MarkupIsArt &mdash; Inspired by <a href="http://goodfuckingdesignadvice.com" target="_blank" title="Good Fucking Design Advice.">this</a>.</p>
      </div>  
    </div>
  </body>
</html>