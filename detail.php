
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

}
else {
    $_SESSION['ERREUR']="planning INTROUVABLE"; 
    header('LOCATION: afficher.php');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FITNESS ESNTLS PLANNING</title>

  

    <title><I style="color:orangered;"> <center>Detail de Planning </center></I></title>
    <link rel="stylesheet" href="htseance1s://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfjourPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body onload="window.print()">
<div class="container-flujour pl-0 pr-0 bg-img clearfix parallax-window2" data-parallax="scroll" data-image-src="images/banner2.jpg">
  <nav class="navbar navbar-expand-md navbar-dark">
    
  </nav>

 <center>
   <main class="container">
   <div class="row">
   <section class="col-12">
     <br>
     <br>
     <hr>
     <br>
   <h1 style ="color:orangered;"> Detail du Planning  <?= $planning['jour']?></h1>
   <br>
   
   <div style="padding:3px; padding-left:6px; border:1px dotted #d0d0d0; border-left:4px solid #808080; margin-left:20px; font-style:italic;">
<strong></strong>
<br>
<br>

   <p><b>Jour: </b> <?= $planning['jour']?></p>
   <p> <b>Seance 1  : </b>  <?= $planning['seance1']?></p>
   <p> <b> Seance 2  :</b>  <?=$planning['seance2']?></p>
   <p><b> Seance3  : </b>  <?= $planning['seance3']?></p>
   <p> <b>Seance4 :</b>   <?= $planning['seance4']?></p>

   <br>
   <br>

  
   </div>
   <p> <a href="afficher.php"> Retour </a><a href="edit.php?jour=<? $planning['jour'] ?>"> modifer </a></p>
</center>
   <br>
   <br>
   <hr>
   <div class="container"> 
   <div style="text-align: right;padding-right: 50px">
      <!-- Brand --> 
      <a class="navbar-brand mr-auto" href="#"><img src="images/logof.png" alt="FoxPro" /><b style="color:grey	;">    FITNESS ESNTLS  </b></a> 
      </div>      
    </div>
 



   </section>
   </div>
   </main> 
</body>
</html>