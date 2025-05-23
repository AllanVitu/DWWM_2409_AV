<?php
require_once ('Personne.php');

/**
 * @author AVitu
 * @version 1.0
 * @created 23-mai-2025 11:36:22
 */
class Client extends Personne
{

	var $numClient;

	function Client()
	{
	}



	/**
	 * 
	 * @param newNumClient
	 * @param newName
	 * @param newPrenom
	 * @param nouvDateDeNaissance
	 * @param newAdresse
	 */
	function __construct($newNumClient, $newName, $newPrenom, $nouvDateDeNaissance, $newAdresse)
	{
	}

	function getnumClient()
	{
		return $this->numClient;
	}
	public function afficher()
	{
		
	}

}
?>