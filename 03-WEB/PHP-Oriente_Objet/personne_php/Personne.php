<?php
require_once ('Adresse.php');

/**
 * @author AVitu
 * @version 1.0
 * @created 23-mai-2025 11:36:19
 */
class Personne
{

	private string $nom;
	private string $prenom;
	private int $age;
	private string $adressePers;
	private string $m_Adresse;

	function Personne()
	{
		$this->nom;
		$this->prenom;
		$this->age;
	}



	/**
	 * 
	 * @param nom
	 * @param prenom
	 * @param dateDeNaissance
	 * @param newAdresse
	 */
	function __construct($nom, $prenom, $dateDeNaissance, $newAdresse)
	{
	}

	function getnom()
	{
		return $this->nom;
	}

	function getprenom()
	{
		return $this->prenom;
	}

	function getadressePers()
	{
		return $this->adressePers;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setadressePers($newVal)
	{
		$this->adressePers = $newVal;
	}

	function afficher()
	{
	}

}
?>