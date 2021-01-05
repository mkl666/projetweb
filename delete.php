<?php 

session_start(); 

if (isset($_GET['jour']) && !empty($_GET['jour'])){
require_once('connect.php');
$jour=strip_tags($_GET['jour']);
$sql = 'SELECT * FROM `planning` WHERE  `jour`  = :jour;';
$query=$db->prepare($sql);
$query->bindValue(':jour',$jour,PDO::PARAM_STR);
$query->execute();
$planning=$query->fetch();



$sql = 'DELETE  FROM `planning` WHERE  `jour`  = :jour;';
$query=$db->prepare($sql);
$query->bindValue(':jour',$jour,PDO::PARAM_STR);
$query->execute();
$_SESSION['ERREUR']="planning supprimé !"; 
header('LOCATION: afficher.php');}


else {
    $_SESSION['ERREUR']="planning INTROUVABLE"; 
    header('LOCATION: afficher.php');
}

?>