<?php


/**
 * @author AVitu
 * @version 1.0
 * @created 23-mai-2025 11:36:24
 */
class Adresse
{

	var $numRue;
	var $nomRue;
	var $codePostal;
	var $nomCommune;

	function Adresse()
	{
	}



	function getnumRue()
	{
		return $this->numRue;
	}

	function getnomRue()
	{
		return $this->nomRue;
	}

	function getcodePostal()
	{
		return $this->codePostal;
	}

	function getnomCommune()
	{
		return $this->nomCommune;
	}

}
?>