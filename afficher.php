<?php 

session_start(); 

require_once ('connect.php');
$sql='SELECT * FROM `planning`';

 $query=$db->prepare($sql);
 $query->execute();
 
 $result=$query->fetchAll(PDO::FETCH_ASSOC);
require_once ('close.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FITNESS ESNTLS PLANNING</title>

  <!-- Bootstrap CSS -->
  <link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link href="htseance3s://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
<link href="htseance1s://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="wjourth=device-wjourth, initial-scale=1.0">
    <title>TABLEAU DE planning</title>
    <link rel="stylesheet" href="htseance2s://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfjourPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body>
<div class="container-fluid pl-0 pr-0 bg-img clearfix parallax-window2" data-parallax="scroll" data-image-src="images/banner2.jpg">
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container"> 
      <!-- Brand --> 
      <a class="navbar-brand mr-auto" href="#"><img src="images/logof.png" alt="FoxPro" />    FITNESS ESNTLS</a> 
      
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
      
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="#">ACCUEIL</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#about-us">A PROPOS</a> </li>
          <li class="nav-item"> <a class="nav-link" href="sign/index.html">SIGNUP</a> </li>
		    <li class="nav-item"> <a class="nav-link" href="planning.php">PLANNING</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#contact">CONTACTEZ NOUS</a> </li>		
        </ul>
		
		
        <ul class="navbar-nav ml-5">
          <li class="nav-item"> <a class="nav-link btn btn-danger" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        </ul>
      </div>
    </div>
  </nav>
 
</div>
    <main class="container">
    <div class="row">
    <section class="col-12">

    <?php
if (!empty($_SESSION['message'])){

echo '
<div class="alert alert-success" role="alert">'. $_SESSION['message']. '</div>';
$_SESSION['message'] = "";
}
?>

    <center><h1><I style="color:orangered;">Listes des plannings </I></h1> </center>
    <table class="table">
    <thead>
    
    <th><I style="color:white;">Jour </I></th>
    <th><I style="color:white;">Seance 1 </I></th>
    <th><I style="color:white;">Seance 2 </I></th>
    <th><I style="color:white;">Seance 3 </I></th>  
    <th><I style="color:white;">Seance 4 </I></th>

    <th><I style="color:white;">Actions</I></th>


    </thead>
    <body>
    
    <?php
    foreach($result as $planning){
    ?>
    <tr>
    <td><font color="silver"><?= $planning['jour'] ?></font></td>
    <td><font color="silver"><?= $planning['seance1'] ?> </font></td>
    <td><font color="silver"><?= $planning['seance2'] ?></font></td>
    <td><font color="silver"><?= $planning['seance3'] ?></font></td>
    <td><font color="silver"><?= $planning['seance4'] ?></font></td>
 
    <td><a href="detail.php?jour=<?= $planning['jour']?>"> IMPRIMER <hr> </a><a href="edit.php?id=<?= $planning['id']?>">MODIFIER <hr> </a> <a href="delete.php?jour=<?= $planning['jour']?>"> SUPPRIMER </a> </td>
    
    </tr>
    <?php



    }

    ?>
    
    </tbody>
    
    </table>
    <a href="add.php" class="btn btn-primary">ajouter </a> 
    <a href="affichrec.php" class="btn btn-primary">afficher reclamations </a> 

    
    </section>
    </div>
    </main>
</body>
</html>