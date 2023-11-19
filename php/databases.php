<?php 
  $db_host = "localhost"; 
  $db_user = "root"; 
  $db_password = "";
  $db_base = 'EnglishTest20231018';
  try {
      $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
      $db->exec("set names utf8");
  } catch (PDOException $e) {
      print "Ошибка!: " . $e->getMessage() . "<br/>";
  }
  function get_singles_all(){
    global $db;
    $singles = $db->query("SELECT * FROM `promo_prices` ORDER BY id DESC");
    return $singles;
  }
?>
