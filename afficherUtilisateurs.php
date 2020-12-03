<?PHP
	include "controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();
				foreach($listeUsers as $user){
					?>
					<tr>
						<td><?PHP echo $user['Id']; ?></td>
						<td><?PHP echo $user['Nom']; ?></td>
						<td><?PHP echo $user['Prenom']; ?></td>
						<td><?PHP echo $user['Email']; ?></td>
						<td><?PHP echo $user['Login']; ?>
						<?PHP
				}
?>