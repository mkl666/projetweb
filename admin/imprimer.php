<?php
include "../controller/participantC.php";
include "../models/participant.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les participants </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th >ID</th>
													      <th >Nom</th>
													      <th >Prenom</th>
													      <th >Date de naissance</th>
													      <th >Sexe</th>
													      <th >Email</th>
													      <th >Telephone</th>
													      <th >Adresse</th>
													  
													      
													    
													      
													</tr>
													
		<?php
	$participants=new participantC();
$listparticipants=$participants->recupererparticipants();
		foreach($listparticipants as $row) {
			?>
		  <tr>
												      <td> <?php echo $row["id"] ; ?></td> 
												      <td> <?php echo $row["nom"] ; ?></td> 
												      <td> <?php echo $row["prenom"] ; ?></td> 
												      <td> <?php echo $row["date"] ; ?></td> 
                                                      <td> <?php echo $row["sexe"] ; ?></td> 
													  <td> <?php echo $row["email"] ; ?></td> 
													  <td> <?php echo $row["telephone"] ; ?></td>
													  <td> <?php echo $row["adresse"] ; ?></td> 


 												      
												   
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>
<script type="text/javascript">window.print()</script>