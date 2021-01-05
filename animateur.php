<?php

class Animateur{
	
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $telephone;
	private $activite;


	function __construct($id,$nom,$prenom,$email,$telephone,$activite)
	{	
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->telephone=$telephone;
		$this->activite=$activite;
	}

	function getId(){
		return $this->id;
	}


	function getNom(){
		return $this->nom;
	}

	function getPrenom(){
		return $this->prenom;
	}


	function getMail(){
		return $this->email;
	}

	function getTelephone(){
		return $this->telephone;
	}

	function getActivite(){
		return $this->activite;
	}

	function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}

	function setPrenom($prenom){
		$this->prenom=$prenom;
	}

	function setMail($email){
		$this->email=$email;
	}
	
	function setTelephone($telephone){
		$this->telephone=$telephone;
	}
	function setActivite($activite){
		$this->activite=$activite;
	}

}

?>