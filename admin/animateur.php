<?PHP
include "../models/animateur.php";
include "../controller/animateurC.php";




ob_start();

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['telephone']) and isset($_POST['activite']) ){
$id=0;
$animateur1=new animateur($id,$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['activite']);
$animateur1C=new AnimateurC();
$animateur1C->ajouterAnimateur($animateur1);


header('Location: afficher.php');


}else{
	
	echo "vérifier les champs";
}



?>