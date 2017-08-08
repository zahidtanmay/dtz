<?php
class Analyse
{
	var $m_UnitList;
	var $m_PairList;
	var $m_TripelList;
	var $m_QuatrupelList;
	var $pars = Array();
		
	

	var $oDbService;
	var $oDivider;
	
	function getPars(){
		return $this->pars;
	}		
	
	function Analyse($aufgabe)
	{
		$this->oDbService = new DbService($aufgabe);
		$this->oDivider = new Divider();
		$this->m_UnitList = NULL;
		$this->m_PairList = NULL;
		$this->m_TripelList = NULL;
		$this->m_QuatrupelList = NULL;

		
		$this->pars["THEMA"] = -1.0;
		$this->pars["ERROR"] = -1.0;
		$this->pars["S_INDEX"] = -1.0;
		$this->pars["TXT_LANG"] = -1.0;
		$this->pars["WH_RATE"] = -1.0;
		$this->pars["K_RANG"] = -1.0;
		$this->pars["TRIP_RANG"] = -1.0;
		$this->pars["QUAT_RANG"] = -1.0;
		
		$this->pars["NAMEN_FEHLER"] = -1.0;
		$this->pars["WORT_FEHLER"] = -1.0;
		$this->pars["FEHLER_LANG"] = -1.0;
		$this->pars["MPHL_TIEFE"] = -1.0;
		$this->pars["L_TIEFE"] = -1.0;
		$this->pars["L_VARIANZ"] = -1.0;
		$this->pars["L_BREITE"] = -1.0;
		$this->pars["L_LADUNG"] = -1.0;
		$this->pars["L_KOMPLEX"] = -1.0;
		$this->pars["L_ELAB"] = -1.0;
		$this->pars["BSTB_ZAHL"] = -1.0;
		$this->pars["SUB_INDEX"] = -1.0;
		$this->pars["ABSATZ_LANG"] = -1.0;
		$this->pars["ABSATZ_RATIO"] = -1.0;
		$this->pars["KOHAESION"] = -1.0;
		$this->pars["KNK_VAR"] = -0.1;
		$this->pars["K_INDEX"] = -0.1;
	}
	
	function AnalyseAufsatz($aufsatz, $anrede = "___", $schluss = "___")
	{
		$this->oDivider->DivideText($aufsatz);
		$this->m_UnitList = $this->oDivider->getUnitList();
		$this->oDbService->QueryUnit($this->m_UnitList);
		
		$this->pars["K_RANG"] = $this->oDbService->QueryRang("pair", $this->oDivider->m_PaarList);
		$this->pars["TRIP_RANG"] = $this->oDbService->QueryRang("tripl", $this->oDivider->m_TripelList);
		$this->pars["QUAT_RANG"] = $this->oDbService->QueryRang("quat", $this->oDivider->m_QuatrupelList);
		$this->pars["THEMA"] = $this->oDbService->QueryThema($this->m_UnitList);
		
		$this->pars["ANR"] = $this->oDbService->QueryAnrede(mysql_escape_string($anrede));
		$this->pars["SCHL"] = $this->oDbService->QuerySchluss(mysql_escape_string($schluss));
		
		$this->oDbService->DisconnectDb();
		$this->CalPara();

		$this->CalParaA();
		
		/*
		in der version sind nur die paramater: fehler, thema, wh_rate, k_rang, t_rang und bstb_zahl benoetigt
		deswegen sind folgende Funktionen unnoetig.
		*/	
		$this->CalParaB();
		$this->CalParaC();
		$this->CalParaD();
		$this->CalParaE();
		$this->CalParaF();
		
	}
	
	//Parameter werden gerechnet
	function CalPara()
	{
		//calculate the $Para_FORM
		$this->pars["FORM"] = $this->pars["ANR"] + $this->pars["SCHL"];
		
		$count = 0;
		for ($i=0; $i<count($this->m_UnitList); $i++)
		{
			$u1 = $this->m_UnitList[$i];
			if ($u1->IsWort||$u1->IsName)
			{
				if (!$u1->IsKorrekt)
					$this->pars["ERROR"]++;
				else 
				{
					$this->pars["S_INDEX"] += strlen($u1->Form);
					$count++;
				}
			}
			if ($u1->IsWort || $u1->IsName)
				$this->pars["TXT_LANG"]++;
		}
		/*
		$this->pars["ERROR-Absolut"] = $this->pars["ERROR"] ;
		$this->pars["ERROR"] = log10(1 + $this->pars["ERROR"]);
		*/
		
		
		if ($count != 0)
			$this->pars["S_INDEX"] = $this->pars["S_INDEX"] / $count;		
		$this->pars["TXT_ABW"] = $this->pars["TXT_LANG"] - $this->pars["SCHWELLE"];
		$form_type_list = array();
		for ($i=0; $i<count($this->m_UnitList); $i++){
			$u = $this->m_UnitList[$i];
			if ($u->IsWort){
				if (!$this->ListContains($form_type_list, $u->Form))
					$form_type_list[] = $u->Form;
			}
		}
		
		//=====  according to the email on : Wed, 21 Jul 2004 11:05:57 +0200
		//=====  WH_rate = Textlaenge / Zahl der Wortformen_types
		if (count($form_type_list) != 0)
			$this->pars["WH_RATE"] = $this->pars["TXT_LANG"] / count($form_type_list);
	}
	
	//CalParaA - CalParaG are used for TextAnalyse but not for BriefAnalyse
	function CalParaA()
	{
		$bstbZahl = 0.0;
		$absatzZahl = 0.0;
		$wortCount = 0.0;
		for ($i=0; $i<count($this->m_UnitList); $i++)
		{
			$u = $this->m_UnitList[$i];
			if($u->IsWort)
			{
				$wortCount++;
				$bstbZahl += $u->BstbZahl;
				if(!$u->IsKorrekt){
					$this->pars["WORT_FEHLER"]++;
					$this->pars["FEHLER_LANG"] += $u->BstbZahl;
				}
			}
			if($u->IsName && !$u->IsKorret)
				$this->pars["NAMEN_FEHLER"]++;
			if($u->IsAbsatztrenner)
				$absatzZahl++;
		}
		$absatzZahl++; //with the last Absatz0
		$this->pars["ABSATZ_LANG"] = $this->pars["TXT_LANG"] / $absatzZahl;
		$this->pars["ABSATZ_RATIO"] = $this->pars["ABSATZ_LANG"] - $this->pars["SCHWELLE"];
		if($wortCount != 0)
			$this->pars["BSTB_ZAHL"] = $bstbZahl / $wortCount;
		if($this->pars["WORT_FEHLER"] != 0)
		{
			$this->pars["FEHLER_LANG"] /= $this->pars["WORT_FEHLER"];
			$this->pars["K_INDEX"] = $this->pars["TXT_LANG"] / $this->pars["WORT_FEHLER"];
		}
	}
	
	function CalParaB()
	{
		//MPHL_TIEFE
		//durchschnittlicher Rang der 30 rangh?chsten korrekten W?rter aus WortRang
		$wortTypeList = Array();
		$wortRangList = Array();
		//L_TIEFE
		//durchschnittlicher Rang der 20 rangh?chsten Lemma
		$lemmaTypeList = Array();
		$lemmaRangList = Array();
		for ($i=0; $i<count($this->m_UnitList); $i++)
		{
			$u = $this->m_UnitList[$i];
			if($u->IsWort && $u->WortRang > 0 && !$this->ListContains($wortTypeList, $u->Form))
			{
				$wortTypeList[] = $u->Form;
				$wortRangList[] = $u->WortRang;
			}
			if($u->IsWort && $u->LemmaRang > 0 && !$this->ListContains($lemmaTypeList, $u->Lemma))
			{
				$lemmaTypeList[] = $u->Lemma;
				$lemmaRangList[] = $u->LemmaRang;
			}
		}
		rsort($wortRangList);
		rsort($lemmaRangList);
		$num = min(30,count($wortRangList));
		if($num != 0)
		{
			$this->pars["MPHL_TIEFE"] = 0.0;
			for ($i=0; $i<$num; $i++)
				$this->pars["MPHL_TIEFE"] += $wortRangList[$i];
			$this->pars["MPHL_TIEFE"] /= $num;
		}
		$num = min(20,count($lemmaRangList));
		if($num != 0)
		{
			$this->pars["L_TIEFE"] = 0.0;
			for ($i=0; $i<$num; $i++)
				$this->pars["L_TIEFE"] += $lemmaRangList[$i];
			$this->pars["L_TIEFE"] /= $num;
			$this->pars["L_TIEFE"] *= 0.01;
		}
	}
	
	function CalParaC()
	{
		// L_Varainz
		// Anzahl der i-lemma-type / Anzahl der i-lemma_okk
		// L_Breite
		// Anzahl der i-lemma_type / Anzahl der i-w_form_type
		$lemmaTypeList = Array();
		$wortTypeList = Array();
		$lemmaOkk = 0;
		for ($i=0; $i<count($this->m_UnitList); $i++)
		{
			$u = $this->m_UnitList[$i];
			if($u->Kategorie == "I" || $u->Kategorie == "i")
			{
				$lemmaOkk++;
				if(!$this->ListContains($lemmaTypeList,$u->Lemma))
					$lemmaTypeList[] = $u->Lemma;
				if(!$this->ListContains($wortTypeList,$u->Form))
					$wortTypeList[] = $u->Form;
			}
		}
		if($lemmaOkk != 0)
			$this->pars["L_VARIANZ"] = count($lemmaTypeList) / $lemmaOkk;
		if(count($wortTypeList) != 0)
			$this->pars["L_BREITE"] = count($lemmaTypeList) / count($wortTypeList);
	}
	
	function CalParaD()
	{
		//L_Ladung
		//Anzahl der i-w_form_okk [mit 1 in IF] / Anzahl der f-w_form-okk
		//Anzahl der 1/ Anzahl der 0
		
		//L_Komplex
		//Anzahl der i-w_form_okk [mit 1 in If] mit bu_zahl > 8 / Anzahl der i-w_form_okk
		$i_okk = 0;
		$f_okk = 0;
		$i_8_okk = 0;
		for ($i=0; $i<count($this->m_UnitList); $i++)
		{
			$u = $this->m_UnitList[$i];
			if($u->IsInhalt){
				$i_okk++;
				if($u->BstbZahl > 8)
					$i_8_okk++;
			}
			if($u->IsFunktion)
				$f_okk++;
		}
		if($f_okk != 0)
			$this->pars["L_LADUNG"] = $i_okk / $f_okk;
		if($i_8_okk != 0)
			$this->pars["L_KOMPLEX"] = $i_8_okk / $i_okk;
	}
	
	function CalParaE()
	{
		//L_Elab
		//Durchschnitt alle Lemma-Range * 0.01
		$rang = 0;
		$count = 0;

		for ($i=0; $i<count($this->m_UnitList); $i++)
		{
			$u = $this->m_UnitList[$i];
			if($u->LemmaRang > 0){
				$rang += $u->LemmaRang;
				$count++;
			}
		}
		if($count != 0)
			$this->pars["L_ELAB"] = $rang / $count;
		$this->pars["L_ELAB"] *= 0.01;
	}
	
	function CalParaF()
	{
		//Sub_Index = k1_okk / txt_lang
		//Kohaesion = (k1+k2)_okk /txt_lang
		//KNK_Var = 10 * Anzahl K-Types / Anzahl (k1+k2)_okk
		$k1_okk = 0;
		$k1_k2_okk = 0;
		$k_typeList = Array();
		for ($i=0; $i<count($this->m_UnitList); $i++)
		{
			$u = $this->m_UnitList[$i];
			$ktg = strtolower($u->Kategorie);
			if($ktg == "k1" || $ktg == "k2"){
				$k1_k2_okk++;
				if($ktg == "k1") $k1_okk++;
				if(!$this->ListContains($k_typeList, $u->Form)) $k_typeList[] = $u->Form;
			}
		}
		if($this->pars["TXT_LANG"] != 0){
			$this->pars["SUB_INDEX"] = $k1_okk / $this->pars["TXT_LANG"];
			$this->pars["KOHAESION"] = $k1_k2_okk / $this->pars["TXT_LANG"];
		}
		if($k1_k2_okk != 0)
			$this->pars["KNK_VAR"] = 10 * count($k_typeList) / $k1_k2_okk;
	}
	
	function getDetailText()
	{
		$sb=" *** Unit list *** \n";
		
		for ($i=0; $i<count($this->m_UnitList); $i++)
		{
			$u = &$this->m_UnitList[$i];
			$sb .=  "<" . $u->Form . ">\n";
			
			if ($u->IsSatzzeichen) 		$sb .= "|IsSatzzeichen ";
			if ($u->IsSatztrenner) 		$sb .= "|IsSatztrenner ";
			if ($u->IsAbsatztrenner)	$sb .= "|IsAbsatztrenner ";
			if ($u->IsZahl)				$sb .= "|IsZahl";
			if ($u->IsName)				$sb .= "|IsName ";
			if ($u->IsWort)				$sb .= "|IsWort ";
			if (!$u->IsKorrekt)			$sb .= "|Inkorrekt";
			if ($u->Lemma != "")		$sb .= "|Lemma: ".$u->Lemma;
			if ($u->IsFunktion)			$sb .= "|IsFunktion";
			if ($u->IsInhalt)			$sb .= "|IsInhalt";
			if ($u->Kategorie != "")	$sb .= "|Kategorie: ".$u->Kategorie;
			if ($u->LemmaRang != -1)	$sb .= "|LemmaRang: ".$u->LemmaRang;	
			if ($u->WortRang != -1)		$sb .= "|WortRang: ".$u->WortRang;
			if ($u->IsWort||$u->IsName)	$sb .= "|BstbZahl: ".$u->BstbZahl;
			$sb .= "\n\n";
		}
		$sb .= "\n\n *** Paare List *** ";
		for ($i=0; $i<count($this->oDivider->m_PaarList); $i++)
		{
			$pair = $this->oDivider->m_PaarList[$i];
			$sb .= "\n<" . $pair . ">\t: ";
			$sb .= $this->oDbService->DebugQueryRang($pair, "pair");
		}
		
		$sb .= "\n\n *** Tripel List ***";
		for ($i=0; $i<count($this->oDivider->m_TripelList); $i++)
		{
			$tripl = $this->oDivider->m_TripelList[$i];
			$sb .= "\n<" . $tripl . ">\t: ";
			$sb .= $this->oDbService->DebugQueryRang($tripl, "tripl");
		}
		
		$sb .= "\n\n *** Quatrupel List ***";
		for ($i=0; $i<count($this->oDivider->m_QuatrupelList); $i++)
		{
			$quat = $this->oDivider->m_QuatrupelList[$i];
			$sb .= "\n<" . $quat . ">\t: ";
			$sb .= $this->oDbService->DebugQueryRang($quat, "quat");
		}
		return $sb;
	}
	
	function getResults()
	{
		$sb = "";
		foreach ($this->pars as $key => $value) {
			//$sb .= $key . "\t\t = " .$value . "\n";
			$sb .= sprintf("%-12s = %s\n", $key, $value);
		}
		return $sb;
	}
	
	function printBasicValues()
	{
		include("statistic.inc");
		printf("%-10s | %7s | %8s | %8s | %7s\n", "PARAMETER", "ROHWERT", "STANDARD", "Absolut", "Prozent");
		echo "----------------------------------------------------\n";
		$format = "%-10s | %4.2f | %5.2f | %4.2f  | %4.2f\n";
		printf($format, "ERROR", $this->pars["ERROR"],$standard["ERROR"], $this->pars["ERROR"],
			$this->pars["ERROR"] / $standard["ERROR"] * 100);
		printf($format, "THEMA", $this->pars["THEMA"],$standard["THEMA"],$this->pars["THEMA"],
			$this->pars["THEMA"] / $standard["THEMA"] * 100);
		printf($format, "WH_RATE", $this->pars["WH_RATE"],$standard["WH_RATE"], $this->pars["WH_RATE"],
			$this->pars["WH_RATE"] / $standard["WH_RATE"] * 100);
		printf($format, "K_RANG", $this->pars["K_RANG"],$standard["K_RANG"], $this->pars["K_RANG"],
			$this->pars["K_RANG"] / $standard["K_RANG"] * 100);
		printf($format, "TRIP_RANG", $this->pars["TRIP_RANG"],$standard["TRIP_RANG"], $this->pars["TRIP_RANG"],
			$this->pars["TRIP_RANG"] / 1+ $standard["TRIP_RANG"] * 100);
		printf($format, "BSTB_ZAHL", $this->pars["BSTB_ZAHL"]-3.0, $standard["BSTB_ZAHL"], $this->pars["BSTB_ZAHL"],
			($this->pars["BSTB_ZAHL"] - 3 )/ 1 + $standard["BSTB_ZAHL"] * 100);
		//printf($format, 
		return $sb;
	}
	
	function SaveLog($anrede, $text, $schluss, $wert, $punkt, $aufgabename)
	{
		$anrede_esc = mysql_escape_string($anrede);
		$text_esc = mysql_escape_string($text);
		$schluss_esc = mysql_escape_string($schluss);
		$this->oDbService->SaveLog($anrede_esc, $text_esc, $schluss_esc,$wert,$punkt, $aufgabename,
			$this->pars["THEMA"],$this->pars["K_RANG"],$this->pars["TRIP_RANG"],
			$this->pars["QUAT_RANG"],
			$this->pars["WH_RATE"],$this->pars["S_INDEX"],$this->pars["ERROR"],
			$this->pars["TXT_LANG"],$this->pars["ANR"],$this->pars["SCHL"]);
	}
	
	//Hilffunktion
	function ListContains($typelist, $okk)
	{
		for($i=0; $i<count($typelist); $i++){
			if ($typelist[$i] == $okk)
			   	return true;
		}
		return false;
	}
}
?>