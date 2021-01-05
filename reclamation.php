<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="wjourth=device-wjourth, initial-scale=1, shrink-to-fit=no">
  <title>FITNESS ESNTLS PLANNING</title>

  <!-- Bootstrap CSS -->
  <link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link href="htseance2s://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  

</head>
<body>
<div class="container-flujour pl-0 pr-0 bg-img clearfix parallax-window2" data-parallax="scroll" data-image-src="images/banner2.jpg">
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container"> 
      <!-- Brand --> 
      <a class="navbar-brand mr-auto" href="#"><img src="images/logof.png" alt="FoxPro" />    FITNESS ESNTLS</a> 
      
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
      
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" jour="collapsibleNavbar">
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




<?php




require("connect.php");

if ($_POST) {


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$reclam=$_POST['reclam'];




$sql= "INSERT INTO `reclamation` VALUES (:nom,:prenom,:reclam);";
$query = $db->prepare($sql);


$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$query->bindValue(':reclam', $reclam, PDO::PARAM_STR);




$query->execute();



$_SESSION['message']=" ajouté ! "; 
require_once('close.php');

}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<script>



</script>


<h1><strong><center><I style="color:#d0d0d0;" > Vos Reclamations : </center></strong></h1>
<br>

<div style="padding:3$px; background-color:#040404;">
<div style="padding:4px; border-top:8px dotted #C0C0C0; border-bottom:8px dotted #C0C0C0;">
<center>
<hr>

<hr>
<I>
<form name="afficher" method="POST">
<label for="nom"> Nom </label>
<input type="text" name="nom" >
<br>
<br>
<br>
<br>


<label for="prenom"> Prénom </label>
<input type="text" name="prenom" >
<br>
<br>
<br>
<label> Reclamation ou Proposition</label>
<br>
<br>

<TEXTAREA name="reclam" rows=4 cols=40> reclamations</TEXTAREA>
<br>
<br>
<button type="submit" onclick="return isEmpty()">Envoyer </button>

</form>
</I>
</center>
</div>
</div>






</body>
</html>