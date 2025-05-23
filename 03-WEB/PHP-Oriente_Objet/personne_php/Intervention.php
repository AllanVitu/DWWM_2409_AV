<?php
require_once ('Client.php');
require_once ('Intervenant.php');

/**
 * @author AVitu
 * @version 1.0
 * @created 23-mai-2025 11:36:26
 */
class Intervention
{

	var $dateEtHeure;
	var $m_Intervenant;
	var $m_Client;

	function Intervention()
	{
	}



	/**
	 * 
	 * @param unIntervenant
	 * @param leClient
	 * @param dateEtHeure
	 */
	function __construct($unIntervenant, $leClient, $dateEtHeure)
	{
	}

	function getdateEtHeure()
	{
		return $this->dateEtHeure;
	}

}
?>