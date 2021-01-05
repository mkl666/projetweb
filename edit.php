<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FITNESS ESNTLS PLANNING</title>

  <!-- Bootstrap CSS -->
  <link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link href="htseance3s://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  

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

 <center> 
 <h1> <I style="color:orange;">  Modifier Le Planning :  </I> </h1>
 <hr>
 </center>
 <?php
require("connect.php");

if ($_POST) {

  $id=$_POST['id'];

$jour=$_POST['jour'];
$seance1=$_POST['seance1'];
$seance2=$_POST['seance2'];
$seance3=$_POST['seance3'];
$seance4=$_POST['seance4'];





$sql="UPDATE planning SET id='$id' jour='$jour', seance1='$seance1', seance2='$seance2', seance3='$seance3', seance4='$seance4',  WHERE id='$id'";
$query = $db->prepare($sql);
$datas =array(':id'=>$id,':jour'=>$jour, ':seance1'=>$seance1,':seance2'=>$seance2,':seance3'=>$seance3,':seance4'=>$seance4);
$query = $db->prepare($sql);

$query->bindValue(':id', $id, PDO::PARAM_INT);

$query->bindValue(':jour', $jour, PDO::PARAM_STR);
$query->bindValue(':seance1', $seance1, PDO::PARAM_STR);
$query->bindValue(':seance2', $seance2, PDO::PARAM_STR);
$query->bindValue(':seance3', $seance3, PDO::PARAM_STR);
$query->bindValue(':seance4', $seance4, PDO::PARAM_STR);




$query->execute();

$_SESSION['message']="Planning  ajouté ! "; 
require_once('close.php');

header('LOCATION: afficher.php');
}




    else {
        $_SESSION['erreur'] ="le formulaire est incomplet";
    }


if (isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect.php');
    $id=($_GET['id']);
    $sql = 'SELECT * FROM `planning` WHERE  `id`  = :id;';
    $query=$db->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
    $planning=$query->fetch();
    
    }
    else {
        $_SESSION['ERREUR']="PLANNING INTROUVABLE"; 
        header('LOCATION: afficher.php');
    }
    





?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widVolth=device-widVolth, initial-scale=1.0">
    <title>Document</title>
    <link href="htseance3s://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<main class="container">
    <div class="row">
    <section class="col-12">
<?php
if (!empty($_SESSION['erreur'])){

echo '<div class="alert alert-danger" role="alert">'. $_SESSION['erreur']. '</div>';
$_SESSION['erreur'] = "";


}



?>


 
<form  method="post">
<div class="form-group">
<label for="id"> id</label>
<input type="number" id="" name="id" class="form-control" value="<?= $planning['id']?>">
</div>
<div class="form-group">
<label for="jour"> Jour</label>
<input type="text" id="jour" name="jour" class="form-control" value="<?= $planning['jour']?>">
</div>
<div class="form-group">
<label for="seance1">seance1 </label>
<input type="text" id="seance1" name="seance1"  class="form-control"value="<?= $planning['seance1']?>">
</div>
<div class="form_group">
<label for="seance2">seance2</label>
<input type="text" id="seance2" name="seance2" class="form-control"value="<?= $planning['seance2']?>">

</div>
<div class="form-group">
<label for="seance3"> Seance 3</label>
<input type="text" id="seance3" name="seance3"  class="form-control"value="<?= $planning['seance3']?>">
</div>
<label for="seance4"> Seance 4 </label>

    <input type="text" name="seance4" class="form-control"value="<?= $planning['seance4']?>">
</div>

 
<input type="hidden" value="<?= $planning ['id']?>" name="id">
<center><button class="btn btn-primary">Modifier</button></center>

</form>

    
    </section>
    </div>
    </main>
</body>

</html>