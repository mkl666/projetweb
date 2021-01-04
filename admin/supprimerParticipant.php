<?PHP
include "../controller/participantC.php";
include "../models/participant.php";
$participantC=new participantC();
if (isset($_POST["id"])){
	$participantC->supprimerparticipant($_POST["id"]);
	header('Location: dash.php');
}

?>