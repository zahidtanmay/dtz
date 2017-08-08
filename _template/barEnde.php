<?php
function checkfertig($var){

	if ($var == 1)
	{
		print("button_Fertig");
	}
	else
	{
		print("button1");

	}

}

?>
<?php
$_SESSION['note_total'] = $_SESSION['note_S1'] + $_SESSION['note_S2'] +	$_SESSION['note_S3'] + $_SESSION['note_S4']
	+ $_SESSION['note_S5']
	+ $_SESSION['note_S6']
	+ $_SESSION['note_S7']
	+ $_SESSION['note_S8']
	+ $_SESSION['note_S9']
	+ $_SESSION['note_S0'];
?>
<table width="330"  border="0" cellspacing="6" cellpadding="0">
          <tr valign="middle">
            <td width="16" valign="top">
			<!--input name="Seite1" type="button" class="<?php checkfertig($_SESSION['fertig_S1']); ?>" value="*" onClick="location.href='../Lesen/lese_teil1.php'"/>
			<input name="Seite2" type="button" class="<?php checkfertig($_SESSION['fertig_S2']); ?>" value="*" onClick="location.href='../Lesen/lese_teil2.php'"/>
			<input name="Seite3" type="button" class="<?php checkfertig($_SESSION['fertig_S3']); ?>" value="*" onClick="location.href='../Lesen/lese_teil3.php'"/>
			<input name="Seite4" type="button" class="<?php checkfertig($_SESSION['fertig_S4']); ?>" value="*" onClick="location.href='../Lesen/sprach_teil1.php'"/>
			<input name="Seite5" type="button" class="<?php checkfertig($_SESSION['fertig_S5']); ?>" value="*" onClick="location.href='../Lesen/sprach_teil2.php'"/>
			<input name="Seite6" type="button" class="<?php checkfertig($_SESSION['fertig_S6']); ?>" value="*" onClick="location.href='../Hoeren/teil1.php'"/>
			<input name="Seite7" type="button" class="<?php checkfertig($_SESSION['fertig_S7']); ?>" value="*" onClick="location.href='../Hoeren/teil2.php'"/>
			<input name="Seite8" type="button" class="<?php checkfertig($_SESSION['fertig_S8']); ?>" value="*" onClick="location.href='../Hoeren/teil3.php'"/>
			<input name="Seite9" type="button" class="<?php checkfertig($_SESSION['fertig_S9']); ?>" value="*" onclick="location.href='../Schreiben/teil1.php'"/--></td>
            <td width="296" valign="top">
		    <div align="right">Punktzahl: <?php print($_SESSION['note_total']); ?> von maximal 65</div></td>
          </tr>
</table>
