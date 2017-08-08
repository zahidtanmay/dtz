<?php
 session_start();


	/*if ($_SESSION['active'])
	{
		$_SESSION['active'] = 0;
		$_SESSION['end'] 	= 1;
	}

	if (!$_SESSION['end'])
	{
		header("Location: http://www.netestgi.de/cd-us02/index.php");
		exit();
	}*/


	include ("../_template/header.php");

if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
	{
		$_SESSION['fertig_S6'] = $_POST['Fertig'];

	}
//$FORM =2;
//Bewertung
	$FORM = ($_SESSION['ANR'] + $_SESSION['SCHL']) / 10;
	$BACK_HV = ($_SESSION['note_S1']+$_SESSION['note_S2']+$_SESSION['note_S3']+$_SESSION['note_S4']);
	$BACK_LV = ($_SESSION['note_S5']+$_SESSION['note_S6']+$_SESSION['note_S7']+$_SESSION['note_S8']+$_SESSION['note_S9']);
	$BACK_TP = $_SESSION['note_S0'];
	if ($BACK_TP > 20)
	{
	$BACK_TP = 20;
	}
?>
<style type="text/css">
<!--
.Stil1 {color: #666666}
-->
</style>
<form style="display: inline"; id="Test" name="Test" action="<?php echo $_SERVER['../Sprechen/PHP_SELF']; ?>" method="POST">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" background="../_img/tbl-bg.gif">
 <tr>
 <td width="505">&nbsp;&nbsp;</td>
 <td width="450"><div align="right">
 <?php include ("../_template/barEnde.php"); ?>
 </div></td>
 <td width="30">&nbsp;</td>
 </tr>
 <tr>
 <td colspan="2">&nbsp;</td>
 <td>&nbsp;</td>
 </tr>

 <tr>
 <td height="330" colspan="2" valign="top"><table width="926" border="0" cellspacing="0" cellpadding="6">
 <tr>
 <td valign="top"><form id="Test" name="Test" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<img src="../_images/pixel.gif" height="8" width="1" alt=""><br />
	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#333333">
 <tr>
 <td><table width="100%" border="0" cellpadding="5" cellspacing="1">
 <tr bgcolor="#AADDFF">
 <td width="20%"><strong>Pr&uuml;fungsteil</strong></td>
 <td><strong>Ihre Leistung</strong></td>
 </tr>
 <tr>
 <td bgcolor="#FFFFFF">H&ouml;rverstehen</td>
			<?php
			if ($BACK_HV > 20)
			{
			$BACK_HV = 20;
			}
			?>
 <td bgcolor="#FFFFFF"><?php $BACK_HV = round($BACK_HV, 0); print $BACK_HV; ?>&nbsp;Punkte</td>
 </tr>
 <tr>
 <td bgcolor="#FFFFFF">Leseverstehen</td>
 <td bgcolor="#FFFFFF"><?php $BACK_LV = round($BACK_LV, 0); print $BACK_LV; ?>&nbsp;Punkte</td>
 </tr>
 <tr>
 <td bgcolor="#FFFFFF">Textproduktion</td>
 <td bgcolor="#FFFFFF"><?php print $BACK_TP; ?>&nbsp;Punkte</td>
 </tr>
 </table></td>
 </tr>
 </table>
	<p><strong><span class="" style="color: #0000FF">Gesamtbewertung der schriftlichen Prüfung</strong></span></p>
	<div id="gesamt"><?php
			 //Gesamtbeurteilung
			 $ERG1 = ($BACK_HV + $BACK_LV );
			 if ($ERG1 >= 32) {
			 echo "<p class='Stil3'>Ihr Ergebnis bei den Teilen „Hören“ und „Lesen“ entspricht der Stufe B1.</p>";
			 }
			 elseif ($ERG1 >= 19) {
			 echo "<p class='Stil3'>Ihr Ergebnis bei den Teilen „Hören“ und „Lesen“ entspricht der Stufe A2.</p>";
			 }
			 elseif ($ERG1 < 19) {
			 echo "<p class='Stil2'>Ihr Ergebnis bei den Teilen „Hören“ und „Lesen“ entspricht noch nicht der Stufe A2.</p>";
			 }
			 else
			 echo "<p class='Stil2'>Haben Sie überhaupt Lösungen versucht?</p>";
			 $ERG2 = ($BACK_TP);
			 if ($ERG2 >= 13) {
			 echo "<p class='Stil3'>Ihr Ergebnis beim Teil „Schreiben“ entspricht der Stufe B1.</p>";
			 }
			 elseif ($ERG2 >= 8) {
			 echo "<p class='Stil3'>Ihr Ergebnis beim Teil „Schreiben“ entspricht der Stufe A2.</p>";
			 }
			 elseif ($ERG1 >= 3) {
			 echo "<p class='Stil2'>Ihr Ergebnis beim Teil „Schreiben“ entspricht noch nicht der Stufe A2.</p>";
			 }
			 else
			 echo "<p class='Stil2'>Haben Sie überhaupt Lösungen versucht?</p>";
			 ?></div>
		<p><strong><span class="" style="color: #0000FF">Diagnose</span></strong></p>
		<div id="diagnose">
		 <p><strong>H&ouml;rverstehen</strong><br />
 <?php
			 //Auswertung HV
			 if ($BACK_HV > 15) {
			 echo "<p class='Stil2'>Beim Ihr Ergebnis beim H&ouml;rverstehen ist sehr gut.</p>";
			 }
			 elseif ($BACK_HV > 10) {
			 echo "<p class='Stil2'>Ihr Ergebnis beim H&ouml;rverstehen ist recht gut.</p>";
			 }
			 elseif ($BACK_HV > 8) {
			 echo "<p class='Stil2'>Beim H&ouml;rverstehen sind Sie noch nicht sicher. Sie sollten aber noch weiter &uuml;ben.</p>";
			 }
			 elseif ($BACK_HV > 0) {
			 echo "<p class='Stil2'>Beim H&ouml;rverstehen haben Sie noch große Schwierigkeiten. Bitte &uuml;ben Sie flei&szlig;ig weiter.</p>";
			 }
			 else {
			 echo "<p class='Stil2'>Haben Sie Lösungen markiert und bewertet?</p>";
			 }
			 ?>
 </p>
		 <p><strong>Leseverstehen</strong><br />
 <?php
			 //Auswertung LV
			 if ($BACK_LV > 20) {
			 echo ("Wunderbar. Beim Leseverstehen haben Sie eine sehr gute Punktzahl erreicht.");
			 }
			 elseif ($BACK_LV > 16) {
			 echo ("Ihr Ergebnis beim Leseverstehen ist gut. Das ist eine Ihrer St&auml;rken.");
			 }
			 elseif ($BACK_LV > 10) {
			 echo ("Beim Leseverstehen sind Sie noch nicht sicher. Üben Sie weiter.");
			 }
			 elseif ($BACK_LV > 0) {
			 echo ("Beim Leseverstehen haben Sie noch große Schwierigkeiten. Bitte &uuml;ben Sie weiter.");
			 }
			 else {
			 echo "<p class='Stil2'>Haben Sie Lösungen markiert und bewertet?</p>";
			 }
			 ?>
 </p>
		 <p><strong>Textproduktion</strong><br/>
 <?php
			 //Auswertung TP
			 $TAD = $_SESSION['TA'];
			 $WHD = ($_SESSION['WH']+0.001);
			 $TAH = $TAD / $WHD;
			 if ($_SESSION['TA'] <= 0) {
			 echo ("Haben Sie überhaupt etwas geschrieben?<br/>");
			 }
			 elseif ($_SESSION['TA'] < 60) {
			 echo ("Sie haben $TAD Wörter geschrieben. Gute haben Texte normalerweise ungefähr 80 Wörter. Vielleicht können Sie etwas mehr schreiben?<br/>");
			 }
			 elseif ($_SESSION['TA'] < 90) {
			 echo ("Sie haben $TAD Wörter geschrieben. So viele Wörter haben gute Texte normalerweise. Haben Sie auch zu allen vier Punkten etwas geschrieben?<br/>");
			 }
			 elseif ($_SESSION['TA'] < 220) {
			 echo ("Sie haben $TAD Wörter geschrieben. Gute Texte haben normalerweise ungefähr 80 Wörter. Sie haben mehr geschrieben.<br/>");
			 }
			 if ($_SESSION['TH'] <= 0) {
			 echo ("-<br/>");
			 }
			 elseif ($_SESSION['TH'] < 50) {
			 echo ("Es scheint, Sie seien nicht ganz gut auf die Aufgabenstellung eingegangen. K&ouml;nnte das sein?<br/>");
			 }
			 elseif ($_SESSION['TH'] < 80) {
			 echo ("Uns scheint, dass Sie die Aufgabenstellung ganz gut angegangen sind.<br/>");
			 }
			 elseif ($_SESSION['TH'] < 200) {
			 echo ("Sie sind gut auf die Aufgabenstellung eingegangen.<br/>");
			 }
			 if ($_SESSION['TR'] <= 0) {
			 echo ("-<br/>");
			 }
			 elseif ($_SESSION['TR'] < 4) {
			 echo ("Uns scheint, dass Sie grammatische Probleme haben. (Oder ist es die Rechtschreibung?)<br/><br/>");
			 }
			 if ($_SESSION['WH'] <= 0) {
			 echo ("-<br/>");
			 }
			 elseif ($_SESSION['WH'] > 1.55) {
			 echo ("Sie wiederholen Wörter recht oft.<br/><br/>");
			 }
			 elseif ($_SESSION['WH'] > 1.85) {
			 echo ("Haben Sie irgendwas gepastet?<br/><br/>");
			 }
			 ?>
 </p>

		 <p><strong>Form Ihrer E-Mail</strong><br/>
 <?php
		 			 if (($_SESSION['ANR'] + $_SESSION['SCHL'])/10 == 0) {
		 			 echo ("Die Form Ihrer E-Mail (Anrede und Schluss) ist noch nicht gut.<br/>");
		 			 }
		 			 elseif (($_SESSION['ANR'] + $_SESSION['SCHL'])/10 <= 1) {
		 			 echo ("Die Form Ihrer E-Mail (Anrede und Schluss) ist nicht perfekt.<br/>");
		 			 }
		 			 elseif (($_SESSION['ANR'] + $_SESSION['SCHL'])/10 > 1) {
		 			 echo ("Die Form Ihrer E-Mail ist sehr gut.<br/>");
		 			 }
		 			 else {
		 			 echo "-";

			 }
		?>
 </p>

 		 <p><strong>Diese Auswertung liefert keine unbedingt gültigen Rückmeldungen.<br> Wenn Sie genauere Bewertungen und Verbesserungstipps haben möchten, kopieren Sie Ihren Text und besprechen Sie ihn mit Ihrer Lehrkraft. </strong><br/>

 </p>


		 </div>
 <p>
</p>
	</div>
 </td>
 </tr>
 </table> </td>
 <td width="30">&nbsp;</td>
 </tr>
 <tr>
 <td>&nbsp;</td>
 <td><div align="right"></div> </td>
 <td>&nbsp;</td>
 </tr>
</table>
<?php include ("../_template/footer.php"); ?>
</form>
</body>
</html>