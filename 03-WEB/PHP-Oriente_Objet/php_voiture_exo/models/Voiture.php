<?php
require_once ('..\Moteur.php');

/**
 * @author AVitu
 * @version 1.0
 * @created 20-mai-2025 14:44:45
 */
class Voiture
{

	private string $marque;
	private string $modele;
	private Moteur $leMotor;
	private float $poidsEnKM;
	private int $puissance;
	


	/**
	 * 
	 * @param marque
	 * @param modele
	 * @param leMotor
	 * @param poids
	 * @param puissance
	 */
	public function __construct(string $_marque, string $_modele, Moteur $_leMotor, float $_poids = 1000, int $_puissance = 5)
	{
		
	}

	public function getleMotor():Moteur
	{
		return $this->leMotor;
	}

	public function getmarque():string
	{
		return $this->marque;
	}

	public function getmodele():string
	{
		return $this->modele;
	}

	public function getpoidsEnKM():float
	{
		return $this->poidsEnKM;
	}

	public function getpuissance():int
	{
		return $this->puissance;
	}

	/**
	 * 
	 * @param nouvMoteur
	 * @param newVal
	 */
	function setleMotor($nouvMoteur, $newVal)
	{
		$this->leMotor = $newVal;
	}

	/**
	 * 
	 * @param nouvPoids
	 * @param newVal
	 */
	public function setpoidsEnKM($nouvPoids, $newVal)
	{
		$this->poidsEnKM = $newVal;
	}

	public function getVitesseMax($nouvVitesse, $newVal)
	{
		$this->puissance = $newVal;
	}

	public function afficher():string
	{
		return "Voiture de marque: ". $this->getmarque(). "De modele: ". $this->getmodele(). "De Moteur: ". $this->leMotor->afficher().
		" De Poids en Kg: ". $this->getpoidsEnKM(). "Puissance: ". $this->getpuissance();
	}

}
?>