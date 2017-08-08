<?php
class Unit
{
	var $Form = "";
	
	var $IsSatzzeichen = false;
	
	var $IsSatztrenner = false;
	
	var $IsAbsatztrenner = false;

	var $IsZahl = false;
	
	var $IsName = false;
	
	var $IsWort = true;
	
	var $IsKorrekt = true;
	
	
	var $Lemma = "";
	
	var $IsInhalt = false;
	
	var $IsFunktion = false;
	
	var $Kategorie = "";
	
	var $LemmaRang = -1;
	
	var $WortRang = -1;
	
	var $BstbZahl = -1;
	
	function Unit($form)
	{
		$this->Form = $form;
	}
}
?>
