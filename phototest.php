<?php
require 'postmodel.php';
$db = new DB();
      $sql = "DELETE FROM `post` WHERE `id_post` = 33" ;
  $db->query($sql)
?>
