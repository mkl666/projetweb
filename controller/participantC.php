<?php
include "config.php";
class ParticipantC {
function afficherParticipant ($participant){
		echo "Id Participation: ".$participant->getId()."<br>";
		echo "Nom: ".$participant->getNom()."<br>";
		echo "Prenom: ".$participant->getPrenom()."<br>";
		echo "Date: ".$participant->getDate()."<br>";
		echo "Sexe: ".$participant->getSexe()."<br>";
		echo "E-mail: ".$participant->getMail()."<br>";
		echo "Telephone: ".$participant->getTelephone()."<br>";
		echo "Adresse: ".$participant->getAdresse()."<br>";
		
	}

	function ajouterParticipant($participant){
		$sql="INSERT INTO participant (id,nom,prenom,date,sexe,email,telephone,adresse) VALUES (:id,:nom,:prenom,:date,:sexe,:email,:telephone,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$participant->getId();
        $nom=$participant->getNom();
        $prenom=$participant->getPrenom();
		$date=$participant->getDate();
		$sexe=$participant->getSexe();
		$email=$participant->getMail();
		$telephone=$participant->getTelephone();
        $adresse=$participant->getAdresse();
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date',$date);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue('email',$email);
		$req->bindValue('telephone',$telephone);
		$req->bindValue(':adresse',$adresse);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	function afficherparticipants(){
		$sql="SELECT * From participant";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerparticipant($id){
		$sql="DELETE FROM participant where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierparticipant($participant,$id){
		$sql="UPDATE participant SET id=:idn, nom=:nom,prenom=:prenom,date=:date, sexe=:sexe,email=:email,telephone=:telephone,adresse=:adresse WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idn=$participant->getId();
        $nom=$participant->getNom();
        $prenom=$participant->getPrenom();
        $date=$participant->getDate();
        $sexe=$participant->getSexe();
		$email=$participant->getMail();
		$telephone=$participant->getTelephone();
        $adresse=$participant->getAdresse();
		$datas = array( ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':idn'=>$idn, ':date'=>$date,':sexe'=>$sexe,':email'=>$email,'telephone'=>$telephone,':adresse'=>$adresse);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':date',$date);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':email',$email);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':adresse',$adresse);

            $s=$req->execute();

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererparticipant($id){
		$sql="SELECT * from participant WHERE id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererparticipants()
	{
   		$sql="SELECT * from participant";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}


	
	function rechercherListeparticipants($idn){
		$sql="SELECT * from participant where id=$idn";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>