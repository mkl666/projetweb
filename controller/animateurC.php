<?php
include "config.php";
class AnimateurC {
function afficherAnimateur ($animateur){
		echo "Id Animateur: ".$animateur->getId()."<br>";
		echo "Nom: ".$animateur->getNom()."<br>";
		echo "Prenom: ".$animateur->getPrenom()."<br>";
		echo "E-mail: ".$animateur->getMail()."<br>";
		echo "Telephone: ".$animateur->getTelephone()."<br>";
		echo "Activite: ".$animateur->getActivite()."<br>";
		
	}

	function ajouterAnimateur($animateur){
		$sql="INSERT INTO animateur (id,nom,prenom,email,telephone,activite) VALUES (:id,:nom,:prenom,:email,:telephone,:activite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$animateur->getId();
        $nom=$animateur->getNom();
        $prenom=$animateur->getPrenom();
		$email=$animateur->getMail();
		$telephone=$animateur->getTelephone();
        $activite=$animateur->getActivite();
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue('email',$email);
		$req->bindValue('telephone',$telephone);
		$req->bindValue(':activite',$activite);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	function afficheranimateurs(){
		$sql="SELECT * From animateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimeranimateur($id){
		$sql="DELETE FROM animateur where id= :id";
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
	function modifieranimateur($animateur,$id){
		$sql="UPDATE animateur SET id=:idn, nom=:nom,prenom=:prenom,email=:email,telephone=:telephone,activite=:activite WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idn=$animateur->getId();
        $nom=$animateur->getNom();
        $prenom=$animateur->getPrenom();
		$email=$animateur->getMail();
		$telephone=$animateur->getTelephone();
        $activite=$animateur->getActivite();
		$datas = array( ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':idn'=>$idn,':email'=>$email,'telephone'=>$telephone,':activite'=>$activite);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':email',$email);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':activite',$activite);

            $s=$req->execute();

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereranimateur($id){
		$sql="SELECT * from animateur WHERE id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupereranimateurs()
	{
   		$sql="SELECT * from animateur";
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


	
	function rechercherListeanimateurs($idn){
		$sql="SELECT * from animateur where id=$idn";
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