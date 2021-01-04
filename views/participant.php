<?PHP
include "../models/participant.php";
include "../controller/participantC.php";




ob_start();

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['date']) and isset($_POST['sexe']) and isset($_POST['email']) and isset($_POST['telephone']) and isset($_POST['adresse']) ){
$id=0;
$participant1=new participant($id,$_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['sexe'],$_POST['email'],$_POST['telephone'],$_POST['adresse']);
$participant1C=new ParticipantC();
$participant1C->ajouterParticipant($participant1);
require 'send/PHPMailerAutoload.php';
require 'send/credential.php';


try {
	$mail = new PHPMailer;
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();   
                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';
   // $mail->SMTPDebug = 2;                      // Set the SMTP server to send through
    $mail->SMTPAuth   = true;     
                                 // Enable SMTP authentication
    $mail->Username   = 'smart.rapid.post@gmail.com';                     // SMTP username
    $mail->Password   = 'projet2a';                               // SMTP password
    $mail->SMTPSecure = 'tls';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;   
    //var_dump($mail);                                  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('smart.rapid.post@gmail.com', 'FITNESS ESNTLS');

    $mail->addAddress('nairouz.khelifi@esprit.tn');               // Name is optional


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'FITNESS ESNTLS';
    $mail->Body = 'Participant est ajoute avec succes';
    if($mail->send())
    	echo 'Message has been sent';
    
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


header('Location: index.html');


}else{
	
	echo "vérifier les champs";
}



?>