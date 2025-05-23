<?php
require_once ('Adresse.php');
require_once ('Personne.php');

/**
 * @author AVitu
 * @version 1.0
 * @created 23-mai-2025 11:36:25
 */
class Intervenant extends Personne
{

	var $salaire;
	var $autreRevenue;

	function Intervenant()
	{
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

	function getsalaire()
	{
		return $this->salaire;
	}

	function getautreRevenue()
	{
		return $this->autreRevenue;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setautreRevenue($newVal)
	{
		$this->autreRevenue = $newVal;
	}

	function afficher()
	{
	}

	function calculerCharge()
	{
	}

}
?>