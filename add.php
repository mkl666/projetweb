<?php 


require("connect.php");

if ($_POST) {


$jour=$_POST['jour'];
$seance1=$_POST['seance1'];
$seance2=$_POST['seance2'];
$type=$_POST['seance3'];
$seance4=$_POST['seance4'];
//$annee=$_POST['annee'];



$sql= "INSERT INTO `planning` VALUES ('',:jour,:seance1,:seance2,:seance3,:seance4);";
$query = $db->prepare($sql);


$query->bindValue(':jour', $jour, PDO::PARAM_STR);
$query->bindValue(':seance1', $seance1, PDO::PARAM_STR);
$query->bindValue(':seance2', $seance2, PDO::PARAM_STR);
$query->bindValue(':seance3', $type, PDO::PARAM_STR);
$query->bindValue(':seance4', $seance4, PDO::PARAM_STR);




$query->execute();



$_SESSION['message']="Planning ajouté ! "; 
require_once('close.php');

header('LOCATION: afficher.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link href="htseance3s://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter des Vols</title>
    <link href="htseance3s://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>
<center><h1> Ajouter un planning </h1></center>
    <form  method="POST" >
    
 <div class="form-group">

 <label for="jour">Jour </label>
 
<SELECT name="jour" size="1">
<OPTION>Lundi
<OPTION>Mardi
<OPTION>Mercredi
<OPTION>Jeudi
<OPTION>Vendredi
<OPTION>Samedi
<OPTION>Dimanche
</SELECT>

</div>
    <label for="seance1">Seance 1 </label>

    <input type="text" name="seance1" class="form-control">

<div class="form-group">

    <label for="seance2"> Seance 2 </label>

    <input type="text" name="seance2"class="form-control" >
</div>
<div class="form-group">

    <label for="seance3"> Seance 3</label>

    <input type="text" name="seance3" class="form-control" >
</div>
<div class="form-group">

    <label for="seance4"> Seance 4 </label>

    <input type="text" name="seance4" class="form-control">
</div>



<button class="btn btn-primary">Ajouter</button>
</form>
</body>
</html>
