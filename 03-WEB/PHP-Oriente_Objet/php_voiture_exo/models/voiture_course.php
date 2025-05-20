<?php
require_once ('..\Moteur.php');
require_once ('Voiture.php');

/**
 * @author AVitu
 * @version 1.0
 * @created 20-mai-2025 14:45:17
 */
class voiture_course extends Voiture
{

	


	/**
	 * 
	 * @param marque
	 * @param modele
	 * @param leMotor
	 * @param poids
	 * @param puissance
	 */
	function __construct($marque, $modele, $leMotor, $poids = 1000, $puissance = 5)
	{
	}

	public function getVitesseMax()
	{
	}

	public function afficher()
	{
	}

}
?>