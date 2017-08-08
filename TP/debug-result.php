<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>BriefAnalyseResult</title>
<?php

function getmtime()
{
	$a = explode (' ',microtime());
	return(double) $a[0] + $a[1];
}
require_once("config.inc");
require_once("Unit.inc");
require_once("Divider.inc");
require_once("DbService.inc");
require_once("Analyse.inc");

$str_brief = $_POST["brief"];
$str_anrede = $_POST["anrede"];
$str_schluss = $_POST["schluss"];

?>
</head>
<body>
<center>
<table border="0" cellspacing="15" bgcolor="#CCCCFF">
    <tr>
      <td align="left">Result</td>
    </tr>
    <tr>
      <td align="left">
      <textarea id="Result" cols="75" rows="30"><?php
      	$start = getmtime();
		$analyse = &new analyse($aufgaben[0]);
		$analyse->AnalyseAufsatz($str_brief);
		$runtime = getmtime() - $start ;
      	echo("\nruntime = $runtime seconds\n");
		
		echo "\n========================   original text    =============================\n";
		echo stripslashes($str_brief);
		echo "\n========================   prepared text    =============================\n";
		echo $analyse->oDivider->m_Text;
		
		echo "\n========================     parameters     =============================\n";
		include("formula.inc");
		$str_result = $analyse->getResults();
		echo("wert  = $WERT\n");
      	echo("punkt = $PKT\n");
      	echo("$str_result\n"); 
      	echo "\n========================   basic values     =============================\n";
      	$analyse->printBasicValues();
		echo "\n========================       details      =============================\n";
		$str_detail = $analyse->getDetailText();
      	echo("$str_detail\n"); 
      ?></textarea></td>
    </tr>
</table>
</center>
</body>
</html>