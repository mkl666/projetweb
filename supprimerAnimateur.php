<?PHP
include "../controller/animateurC.php";
include "../models/animateur.php";
$animateurC=new animateurC();
if (isset($_POST["id"])){
	$animateurC->supprimeranimateur($_POST["id"]);
	header('Location: afficher.php');
}

?>