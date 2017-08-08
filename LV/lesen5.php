<?php
    	session_start();
	include ("../_template/header.php");

if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
	{
		$_SESSION['fertig_S9'] = $_POST['Fertig'];

	}

include("../include/exam.inc");
include("../include/result_cal.inc");
?>


<SCRIPT LANGUAGE="JavaScript" SRC="../_time/uhr.js"></SCRIPT>

<?php
if ($_POST['Fertig']==1)
{
	$_SESSION['note_S9'] = $sum;

	foreach ($_POST as $key=>$value){
		if (strpos($key, "lv_") == 0)
			$_SESSION["user_answer"][$key] = $value;
	}
}
 ?>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>



<form style="display: inline"; id="Test" name="Test" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0" background="../_img/tbl-bg.gif">
  <tr>
    <td width="261">&nbsp;&nbsp;<div style="float:left; height:15px;">&nbsp;<strong>Lesen</strong> (45 Minuten)</div></td>
    <td width="665"><div align="right">
      <?php include ("../_template/barOben.php"); ?>
<strong>Teil 5</strong></div>
    </div></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td height="11" colspan="2"></td>
    <td></td>
  </tr>
  <tr>
    <td height="30" colspan="2" valign="top"><span class="anl"><hr><br>&nbsp;&nbsp;Lesen Sie den Text und f&uuml;llen Sie die L&uuml;cken. <br />
    &nbsp;&nbsp;In den K&auml;stchen finden Sie immer drei M&ouml;glichkeiten. Welche Lösung (a, b oder c) passt am besten?</span></td>
  </tr><td>&nbsp;</td><td>&nbsp;</td>
  <tr>
    <td height="550" colspan="2" valign="top"><table  style="background-image: url(lv5.png); background-repeat:no-repeat; "height = "100%" width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
        <td height="" valign="top"><div style="padding-top: 35px; padding-left:117px;">
          <p class="brf"><strong>GUTE KLEIDER – Bahnstraße 1 – 06886 Lutherstadt Wittenberg</strong><br />
            Frau<br />
            Barbara Schnied<br />
            Blumenstraße 5<br />
            06889 Reinsdorf<br /><br />Kundennummer 123456<br /><br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wittenberg, 16.04.20..</p>
            <strong>ZAHLUNGSERINNERUNG<strong><br /><br />

          <p class="brf">
            <select name="menu1"  class="bsp">
              <option selected="selected">Sehr geehrte</option>
              <option>Sehr geehrten</option>
              <option>Sehr geehrten</option>
                  </select>
            Frau Schnied,</p>
          <p class="brf">bitte helfen Sie
            <?php genQuestion (220); ?>: Unsere Buchhaltung hat den Betrag von 59,65 € vom <br />10.03. noch nicht als Zahlungseingang feststellen
            <?php genQuestion (221); ?>.
            <br />
               <?php genQuestion (222); ?> Sie in der Hektik des Alltags vergessen, den Rechnungsbetrag zu überweisen?<br />
               Wir bitten Sie in diesem Fall um Zahlung innerhalb der <?php genQuestion (223); ?> 14 Tage.<br /> Oder haben Sie den Betrag
<?php genQuestion (224); ?>bezahlt, und wir konnten das Geld nicht richtig zuordnen?<br />
<?php genQuestion (225); ?> bitten wir um Zusendung des Zahlungsbelegs. <br /><br />
  Wir bedanken uns für Ihre Mithilfe.<br /><br />
  Mit freundlichem Gruß<br /><br />
  Maria Kleidermann<br />
  </p>
        </div></td>
        </tr>

    </table></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"></div>
      <table width="550"  border="0" align="right" cellpadding="0" cellspacing="0">
        <tr valign="middle">
          <td width="320" height="30"><div align="right">
            <?php include ("../_template/barUnten.php"); ?>&nbsp;&nbsp;
          </div>            </td>
              <!--td width="98" height="30"><input name="Clear" type="reset" class="sbutton" value="Zur&uuml;cksetzen" /></td-->
          <td width="90"><input name="Submit" type="submit" class="sbutton" value="Bewerten" OnClick="document.Test.Modif.value='0'"/>
              <input name="Fertig" type="hidden" value="1" />
              <input name="Modif" type="hidden" value="0" /></td>
          <td width="60"><input name="Submit" type="button" class="sbutton" value="Weiter" onClick="location.href='../TP/schreiben1.php'"/></td>
          <td width="60"><input name="Submit2" type="button" class="sbutton" value="Ende" onclick="location.href='../home/ende.php'"/></td>
        </tr>
      </table></td>
    <td width="4">&nbsp;</td>
  </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>