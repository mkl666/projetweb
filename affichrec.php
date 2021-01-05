<?php




require("connect.php");




$sql= "SELECT * FROM `reclamation`;";
$query = $db->prepare($sql);


$query->execute();
$result=$query->fetchAll(PDO::FETCH_ASSOC);



require_once('close.php');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les reclamations de la semaines</title>
</head>
<body>
    <center ><h1>listes des reclamations de la semaines</h1> </center>

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

    <table class="table">
    <thead>
    
    <th><I style="color:silver;">nom </I></th>
    <th><I style="color:silver;">prenom  </I></th>
    <th><I style="color:silver;"> reclamations </I></th>
    


    </thead>
    <body>
    
    <?php
    foreach($result as $reclamation){
    ?>
    <tr>
    <td><font color="black"><?= $reclamation['nom'] ?></font></td>
    <td><font color="black"><?= $reclamation['prenom'] ?> </font></td>
    <td><font color="black"><?= $reclamation['reclam'] ?></font></td>

    
    </tr>
    <?php



    }

    ?>

</body>
</html>