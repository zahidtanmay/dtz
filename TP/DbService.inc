<?php
	class DbService
	{
        var $m_DbConnection;
        var $m_vok_db;
        var $m_anrede_db;
        var $m_schluss_db;

		function DbService($current_aufgabe)
		{
			$this->m_vok_db = $current_aufgabe[1];
			$this->m_anrede_db = $current_aufgabe[2];
			$this->m_schluss_db = $current_aufgabe[3];
		}
		
		function ConnectDb(){
			include("config.inc");
		    $this->m_DbConnection = mysql_connect($db_host, $db_username, $db_password);
			mysql_select_db($db_name, $this->m_DbConnection);
		}

		function DisconnectDb(){
			mysql_close($this->m_DbConnection);
		}

		function QuerySql($strSql)
		{
			if(!($dbResult = mysql_query($strSql, $this->m_DbConnection)))
	        {
				$errno = mysql_errno($this->m_DbConnection);
    			$error = mysql_error($this->m_DbConnection);
    			return $errno . $error;
			}

			$num_rows = mysql_num_rows($dbResult);
			$result = "results: \n";
			for ($i=0; $i < $num_rows; $i++){
					mysql_data_seek($dbResult, $i);
					$row = mysql_fetch_row($dbResult);
					$result = $result . $row[0] . $row[1] . "\n";
			}
			return $result;
		}
		
		function QueryUnit(&$list)
		{
			for ($i=0; $i< count($list); $i++)
			{
				$unit = &$list[$i];
				if($unit->IsWort)
				{
					$strSql = "SELECT * FROM en_all WHERE name='" . $unit->Form . "'";
					if(!$this->m_DbConnection)
						$this->ConnectDb();
					if(!($dbResult = mysql_query($strSql, $this->m_DbConnection)))
			        {
						$errno = mysql_errno($this->m_DbConnection);
		    			$error = mysql_error($this->m_DbConnection);
		    			die($errno . $error);
					}
					
					$num_rows = mysql_num_rows($dbResult);
					if ($num_rows > 0){
						$unit->IsName = true;
						$unit->IsKorrekt = true;
						$unit->IsWort = false;
					}
					else{
						$unit->IsName = false;
						$strSql = "SELECT * FROM error WHERE wortform='" . $unit->Form. "'";
						$dbResult = mysql_query($strSql, $this->m_DbConnection);
						$num_rows = mysql_num_rows($dbResult);					
						$unit->IsKorrekt = $num_rows > 0;
					}
				}

			
				if($unit->IsWort || $unit->IsName) $unit->BstbZahl = strlen($unit->Form);
				
				
			}
		}
		
		function QueryRang($type, $list){
			if(!$this->m_DbConnection)
						$this->ConnectDb();
			$rang = 0;
			for ($i=0; $i< count($list); $i++){
				$entry = $list[$i];
				$strSql = "???";
				if ($type == "pair")
					$strSql = "SELECT * FROM mpaar WHERE paerchen ='" . $entry . "';";
				else if ($type == "tripl")
					$strSql = "SELECT * FROM 7tripl WHERE tripl ='" . $entry . "';";
				else if ($type == "quat")
					$strSql = "SELECT * FROM mquatrupel WHERE quatrupel ='" . $entry . "';";
				else
					die ("type specified error!");
				if(!($dbResult = mysql_query($strSql, $this->m_DbConnection)))
			        {
						$errno = mysql_errno($this->m_DbConnection);
		    			$error = mysql_error($this->m_DbConnection);
		    			die("$errno . $error: $strSql");
					}
				$num_rows = mysql_num_rows($dbResult);
				if ($num_rows > 0)
				{
					mysql_data_seek($dbResult, 0);
					$row = mysql_fetch_row($dbResult);
					//$rang = $rang + $row[1];
					
					$rang++;
				}
			}
			return $rang;
		}
		
		
		function DebugQueryRang($text, $type)
		{
			if ($type == "pair")
				$strSql = "SELECT * FROM mpaar WHERE paerchen ='" . $text . "'";
			else if ($type == "tripl")
				$strSql = "SELECT * FROM 7tripl WHERE tripl ='" . $text . "';";	
			else if ($type == "quat")
				$strSql = "SELECT * FROM mquatrupel WHERE quatrupel ='" . $text . "';";
			
			$this->ConnectDb();
			
			if(!($dbResult = mysql_query($strSql, $this->m_DbConnection)))
    			die("DB Error: $strSql");
			$num_rows = mysql_num_rows($dbResult);
			if ($num_rows > 0)
			{
				mysql_data_seek($dbResult, 0);
				$row = mysql_fetch_row($dbResult);
				return $row[1];
			}
			return 0;
		}
		
		function QueryAnrede($strAnrede)
		{
			$strAnrede_esc = mysql_escape_string($strAnrede);
			$strSql = "SELECT * FROM $this->m_anrede_db WHERE formel ='$strAnrede_esc'";
			$this->ConnectDb();
			if(!($dbResult = mysql_query($strSql, $this->m_DbConnection)))
	        {
			$errno = mysql_errno($this->m_DbConnection);
    			$error = mysql_error($this->m_DbConnection);
    			die("Error while quering Anrede: $errno . $error");
		}
			$num_rows = mysql_num_rows($dbResult);
			if ($num_rows > 0)
		{
				mysql_data_seek($dbResult, 0);
				$row = mysql_fetch_row($dbResult);
				return $row[1];
		}
			else
				return 0;
		}
		function QuerySchluss($strSchluss)
		{
			$strSchluss_esc = mysql_escape_string($strSchluss);
			$strSql = "SELECT * FROM $this->m_schluss_db WHERE formel ='$strSchluss_esc'";
			$this->ConnectDb();
			if(!($dbResult = mysql_query($strSql, $this->m_DbConnection)))
	        {
			$errno = mysql_errno($this->m_DbConnection);
    			$error = mysql_error($this->m_DbConnection);
    			die("Error while quering Schluss: $errno . $error");
		}
			$num_rows = mysql_num_rows($dbResult);
			if ($num_rows > 0)
		{
				mysql_data_seek($dbResult, 0);
				$row = mysql_fetch_row($dbResult);
				return $row[1];
		}
			else
				return 0;
		}
		
		function QueryThema($list){
			$vok = 0;
			for ($i=0; $i< count($list); $i++){
				$unit = $list[$i];
				if ($unit->IsWort || $unit->IsName)
				{			
					$strSql = "SELECT * FROM $this->m_vok_db WHERE wortform ='$unit->Form'";
					if(!$this->m_DbConnection)
						$this->ConnectDb();
					if(!$dbResult = mysql_query($strSql, $this->m_DbConnection))
					{
						$error = mysql_error($this->m_DbConnection);
						die("Error in QueryThema: $error: $strSql");
					}
					$num_rows = mysql_num_rows($dbResult);
					if ($num_rows > 0)
						$vok++;
				}
			}
			return $vok;
		}
		
		function SaveLog($anrede,$text,$schluss,$wert,$punkt,$aufgabename,$THEMA, $K_RANG,$TRIP_RANG, $QUAT_RANG, $WH_RATE,$S_INDEX,$ERROR,$TXT_LANG,$ANR,$SCHL)
		{
			$strSql  = "INSERT INTO Test_Log(Anrede, Brieftext, Schluss, Aufgabename,THEMA, K_RANG, TRIP_RANG, QUAT_RANG, WH_RATE, S_INDEX, ERROR, TXT_LANG, ANR, SCHL, Wert, Punkt) ";
			$strSql .= "VALUES('$anrede','$text','$schluss','$aufgabename',$THEMA,$K_RANG,$TRIP_RANG,$QUAT_RANG,$WH_RATE,$S_INDEX,$ERROR,$TXT_LANG,$ANR,$SCHL,$wert,$punkt)";
			$this->ConnectDb();
			mysql_query($strSql, $this->m_DbConnection)
				or die("Log Failed!");
		}
	}
?>
