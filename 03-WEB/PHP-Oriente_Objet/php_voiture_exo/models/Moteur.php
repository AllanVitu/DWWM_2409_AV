<?php


/**
 * @author AVitu
 * @version 1.0
 * @created 20-mai-2025 14:29:43
 */
class Moteur
{

	private string $marques;
	private string $modele;
	private int $vitesseMax;
	private string $carburant;

	/**
	 * 
	 * @param marque
	 * @param modele
	 * @param vitesseMax
	 * @param carburant
	 */
	public function __construct(string $_marque, string $_modele, int $_vitesseMax, string $_carburant)
	{
		$this ->marques = $_marque;
		$this->modele = $_modele;
		$this->vitesseMax = $_vitesseMax;
		$this->carburant = $_carburant;
	}

	public function getmodele():string
	{
		return $this->modele;
	}

	public function getmarques():string
	{
		return $this->marques;
	}

	public function getvistesseMax():int
	{
		return $this->vitesseMax;
	}
	public function getcarburant():string
	{
		return $this->carburant;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setvistesseMax($newVal):void
	{
		$this->vitesseMax = $newVal;
	}

	

	public function afficher():string
	{
		return "Moteur de marques: ". $this->getmarques(). " de modeles: ". $this->getmodele(). "de vitesse max: ". $this-> getvistesseMax(). "de Carburant: ". $this->getcarburant();
	}

}
?>