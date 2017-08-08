<?php
    session_start();


include ("../_template/header.php");


if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
{
	$_SESSION['fertig_S0'] = $_POST['Fertig'];
}
?>

<SCRIPT LANGUAGE="JavaScript" SRC="../_time/uhr.js"></SCRIPT>

<?php

if ($_POST['Fertig']==1)
{
	require_once("config.inc");
	require_once("Unit.inc");
	require_once("Divider.inc");
	require_once("DbService.inc");
	require_once("Analyse.inc");
	$_SESSION['brief'] = stripslashes($_POST["aufsatz"]);
	$_SESSION['anrede'] = stripslashes($_POST["anrede"]);
	$_SESSION['datum'] = stripslashes($_POST["datum"]);
	$_SESSION['abschied'] = stripslashes($_POST["abschied"]);
	$_SESSION['unterschrift'] = stripslashes($_POST["unterschrift"]);

	$analyse = &new analyse($aufgaben[0]);
	$analyse->AnalyseAufsatz($_SESSION['brief'],$_SESSION['anrede'], $_SESSION['abschied']);
	include("formula.inc");
// Logfunktion eingefügt 07.08.08
// $analyse->SaveLog($_SESSION['anrede'],$_SESSION['brief'],$_SESSION['abschied'],$WERT,$PKT,$_SESSION['aufgabe'][0]);

	$_SESSION['note_S0'] = $PKT;
	$_SESSION['TA'] = $TA;
	$_SESSION['WH'] = $WH;
	$_SESSION['TH'] = $TH;
	$_SESSION['TR'] = $TR;
	$_SESSION['FORM'] = $FORM;
	$_SESSION['ANR'] = $ANR;
	$_SESSION['SCHL'] = $SCHL;
}
 ?>
<form style="display: inline"; id="Test" name="Test" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" background="../_img/tbl-bg.gif">
  <tr>
    <td width="261">&nbsp;&nbsp;<div style="float:left;">&nbsp;<strong>Schreiben</strong> (30 Minuten)</div></td>
    <td><div align="right">
      <?php include ("../_template/barOben.php"); ?>
    </div></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="45" colspan="2"><p><hr>&nbsp;&nbsp;&nbsp;<span class="anl"><br />&nbsp;&nbsp;&nbsp;Sie haben vor einem halben Jahr bei der Firma Neumann eine Waschmaschine gekauft. Jetzt ist sie kaputt.
    <br>&nbsp;&nbsp;&nbsp;Sie erreichen bei der Firma telefonisch niemanden. Deshalb schreiben Sie eine E-Mail.<br />

      <br><i>&nbsp;&nbsp;&nbsp;Schreiben Sie Ihren Text. Zeigen Sie, was Sie können. Schreiben Sie möglichst viel.<br />
      &nbsp;&nbsp;&nbsp;Schreiben Sie etwas über folgende Punkte. Vergessen Sie nicht die Anrede und den Gruß.</i></span></p>
      <p>&nbsp;</p></td>
  </tr><td>&nbsp;</td><td>&nbsp;</td>
  <tr>
    <td height="55" valign="top">&nbsp;</td>
    <td rowspan="2" valign="top"><table width="659" border="0" cellspacing="0" cellpadding="0">
      <tr valign="top">
        <td width="557" height="55">Anrede<br>
          <input name="anrede" class="inputbox" type="text" size="40" maxlength="80" value="<?PHP echo($_SESSION['anrede']);?>" onChange="document.Test.Modif.value='1'"/></td>
         </tr>
      <tr valign="top">
        <td height="221" colspan="2"><textarea name="aufsatz"  class="inputbox" cols="117" rows="16" onchange="document.Test.Modif.value='1'"><?PHP echo($_SESSION['brief']);?></textarea></td>
      </tr>
      <tr valign="top">
        <td height="46" colspan="2">Gru&szlig;<br>
          <input name="abschied" class="inputbox" type="text" size="40" maxlength="80" value="<?PHP echo($_SESSION['abschied']);?>" OnChange="document.Test.Modif.value='1'"/></td>
        </tr>
      <tr valign="top">
        <td colspan="2">Unterschrift<br>
          <input name="unterschrift" class="inputbox" type="text" size="40" maxlength="80" value="<?PHP echo($_SESSION['unterschrift']);?>" OnChange="document.Test.Modif.value='1'"/></td>
        </tr>
      <tr valign="top">
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
    <td width="30" rowspan="2"><img src="../_img/pixtr.gif" width="1" height="380" alt="" /></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;<strong><span class="" style="color: #0000FF">Schreiben Sie zu jedem Punkt:
      <ul>
        <li>Grund des Schreibens</li>
        <li>Garantie</li>
        <li>Reparatur oder neue Waschmaschine</li>
        <li>wie Sie erreichbar sind</li>
      </ul></span>  </strong>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><br /><br /></div>
      <table width="550"  border="0" align="right" cellpadding="0" cellspacing="0">
        <tr valign="middle">
          <td width="320" height="30"><div align="right">
              <?php include ("../_template/barUnten.php"); ?>
            &nbsp;&nbsp; </div></td>
          <!--td width="98" height="30"><input name="Clear" type="reset" class="sbutton" value="Zur&uuml;cksetzen" /></td-->
          <td width="90"><input name="Submit" type="submit" class="sbutton" value="Bewerten" onclick="document.Test.Modif.value='0'"/>
              <input name="Fertig" type="hidden" value="1" />
              <input name="Modif" type="hidden" value="0" /></td>
          <td width="60"><input name="Submit" type="button" class="btn-deakt" value="Weiter" onclick=""/></td>
          <td width="60"><input name="Submit2" type="button" class="sbutton" value="Ende" onclick="location.href='../home/ende.php'"/></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>