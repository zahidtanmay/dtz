<?php
class Divider
	{
		var $m_UnitList;
		var $m_PaarList;
		var $m_TripelList;
		var $m_QuatrupelList;
		var $m_Text;
		
		//comma is not used for english version, because 
		var $m_Satzzeichen = "\'\"&\$()[]{}<>\r\n";
		var $m_Satztrenner = ":;.?!\n";
		var $m_Absatztrenner = "\r\n";
		var $m_ErlaubtBstb = "%1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZÄäÖöÜüß-";

		function getUnitList(){
			return $this->m_UnitList;
		}

		function Divider()
		{
			$this->m_UnitList = array();
			$this->m_PaarList = array();
			$this->m_TripelList = array();
			$this->m_QuatrupelList = array();
		}
		
		function DivideText($text)
		{
			$text = trim(stripslashes($text));
			$this->m_Text = str_replace(","," , ",$text);
			include("apo.inc");
			
			foreach ($apo as $key => $value)
			{
				$this->m_Text = str_replace($key, $value, $this->m_Text);
				$this->m_Text = str_replace(ucfirst($key), ucfirst($value), $this->m_Text);
			}
			//$this->m_Text = strtr($this->m_Text, $apo);
			$satz = strtok($this->m_Text, $this->m_Satztrenner);
			while($satz !== false){
				$wort_list = array();
				$temp_list =  explode(" ", $satz);
				foreach($temp_list as $value){
					$temp = trim($value);	//trim whitespaces
					$temp = trim($temp, $this->m_Satzzeichen);	//trim extra punctuations
					if(strlen($temp) != 0)
						$wort_list[] = $temp;
				}
				
				for($i=0; $i < count($wort_list); $i++){
					if ($wort_list[$i] != ",")
						$this->m_UnitList[] = new Unit($wort_list[$i]);
				}
				for($i=0; $i+2 <= count($wort_list); $i++){
					$u1 = $wort_list[$i];
					$u2 = $wort_list[$i+1];
					//$this->m_PaarList[] = strtolower($u1."#".$u2); 
					$this->m_PaarList[] = $u1."#".$u2; 

				}
				for($i=0; $i+3 <= count($wort_list); $i++){
					$u1 = $wort_list[$i];
					$u2 = $wort_list[$i+1];
					$u3 = $wort_list[$i+2];
					//$this->m_TripelList[] = strtolower($u1."#".$u2."#".$u3); 
					$this->m_TripelList[] = $u1."#".$u2."#".$u3; 
				}
				for($i=0; $i+4 <= count($wort_list); $i++){
					$u1 = $wort_list[$i];
					$u2 = $wort_list[$i+1];
					$u3 = $wort_list[$i+2];
					$u4 = $wort_list[$i+3];
					//$this->m_QuatrupelList[] = $u1."#".$u2."#".$u3."#".$u4; 
					$this->m_QuatrupelList[] = $u1."#".$u2."#".$u3."#".$u4; 
				}
				
				$satz = strtok($this->m_Satztrenner);
			}
		}
		function DivideAufsatz(&$Aufsatz)
		{	
			$Aufsatz = html_entity_decode($Aufsatz, ENT_QUOTES, "ISO-8859-1");			
			$Aufsatz = trim($Aufsatz);
			
			$sbTemp ="";
			$iPos=0;
			$aufsatz_length = strlen($Aufsatz);
			while ($iPos< $aufsatz_length){
				if ($this->IsErlaubtBstb(substr($Aufsatz, $iPos, 1))&&(substr($Aufsatz, $iPos, 1)!="-")){					
					$sbTemp .= substr($Aufsatz, $iPos, 1);
					$iPos++;
					while($iPos < $aufsatz_length)
					{
						if($this->IsErlaubtBstb(substr($Aufsatz, $iPos, 1)))
						{
							$sbTemp .= substr($Aufsatz, $iPos, 1);
							$iPos++;
						}
						else
							break;
					}
					$u = new Unit($sbTemp);
					$u->IsWort = true;

					$this->m_UnitList[] = $u;
					$sbTemp = "" ;

				}else if ($this->IsSatzzeichen(substr($Aufsatz, $iPos, 1))){
					$u = new Unit(substr($Aufsatz, $iPos, 1));
					$u->IsSatzzeichen = true;
					$this->m_UnitList[] = $u;
					$iPos++;

				}else if ($this->IsSatztrenner(substr($Aufsatz, $iPos, 1))){
					$u = new Unit(substr($Aufsatz, $iPos, 1));
					$u->IsSatzzeichen = true;
					$u->IsSatztrenner = true;
					$this->m_UnitList[] = $u;
					$iPos++;
					while($iPos < $aufsatz_length && $this->IsSatztrenner(substr($Aufsatz, $iPos, 1))){
						$iPos++;
					}

				}else if 
					($this->IsZahl(substr($Aufsatz, $iPos, 1))){
					$sbTemp = $sbTemp . substr($Aufsatz, $iPos, 1);
					$iPos++;
					while($iPos < $aufsatz_length){
						if($this->IsZahl(substr($Aufsatz, $iPos, 1))){
							$sbTemp = $sbTemp . substr($Aufsatz, $iPos, 1);
							$iPos++;
						}	
						else
							break;
					}

					$u = new Unit($sbTemp);
					$u->IsZahl = true;
					$this->m_UnitList[] = $u;
					$sbTemp = "";

				}else if ($this->IsAbsatztrenner(substr($Aufsatz, $iPos, 1))){
					$u = new Unit("*** Neuer Absatz ***");
					$u->IsAbsatztrenner = true;
					$this->m_UnitList[] = $u;
					$iPos++;
					while($iPos < $aufsatz_length && $this->IsAbsatztrenner(substr($Aufsatz, $iPos, 1)))
						$iPos++;
				}
				//wenn es uebrigens sind, z.B. ein Leerzeichen, soll es ignoriert werden.
				else
				{
					$iPos++;	
				}
			}
		}
		
		function IsSatzzeichen($c)
		{ 
			return $this->Contains($this->m_Satzzeichen, $c);
		}
		function IsSatztrenner($c)
		{
			return $this->Contains($this->m_Satztrenner, $c);
		}
		function IsAbsatztrenner($c)
		{
			return 	$this->Contains($this->m_Absatztrenner, $c);
		}
		function IsErlaubtBstb($c)
		{
			return $this->Contains($this->m_ErlaubtBstb, $c);
		}
		function IsZahl($c)
		{
			return $this->Contains("0123456789.", $c);
		}
		function Contains($string, $c)
		{
			return !(strpos($string, $c)===false);
		}
	}
?>
