<?php
    	session_start();
	include ("../_template/header.php");

if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
	{
		$_SESSION['fertig_S5'] = $_POST['Fertig'];

	}

include("../include/exam.inc");
include("../include/result_cal.inc");
?>


<SCRIPT LANGUAGE="JavaScript" SRC="../_time/uhr.js"></SCRIPT>

<?php
if ($_POST['Fertig']==1)
{
	$_SESSION['note_S5'] = $sum;

	foreach ($_POST as $key=>$value){
		if (strpos($key, "lv_") == 0)
			$_SESSION["user_answer"][$key] = $value;
	}
}
 ?>

<form style="display: inline"; id="Test" name="Test" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0" background="../_img/tbl-bg.gif">
  <tr>
    <td width="261">&nbsp;&nbsp;<div style="float:left; height:15px;">&nbsp;<strong>Lesen</strong> (45 Minuten)</div></td>
    <td width="665"><div align="right">
      <?php include ("../_template/barOben.php"); ?>
<strong>Teil 1</strong></div>
    </div></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td height="11" colspan="2"></td>
    <td></td>
  </tr>
  <tr>
    <td height="47" colspan="2" valign="top"><span class="anl"><hr>&nbsp;&nbsp;Sie sind beim Bürgerbüro Ihrer Stadtverwaltung.
        Lesen Sie die Aufgaben 21-25 und den Wegweiser. <br /><br />
        &nbsp;&nbsp;In welches Zimmer (a, b oder c) gehen Sie?
      Markieren Sie Ihre Lösungen für die Aufgaben 21-25.<br /><br /></span></td>

  </tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
  <tr>
    <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="2" cellspacing="0">
          <tr>
        <td colspan="2" valign="top" bgcolor="D6EEF7"><strong>Beispiel</strong></td>
        <td valign="top" bgcolor="D6EEF7">&nbsp;</td>
        <td width="459" rowspan="7" valign="top"><img src="lv1.png" alt="LV1" width="452" height="570" /></td>
          </tr>
      <tr>
        <td width="25" valign="top" bgcolor="D6EEF7">&nbsp;</td>
        <td width="241" valign="top" bgcolor="D6EEF7">Sie m&ouml;chten, dass Ihr Kind im nächsten Jahr einen Platz im Kindergarten bekommt. </td>
        <td width="185" valign="top" bgcolor="D6EEF7"><input type="radio" name="radiobutton" value="radiobutton" checked="checked" />
a 212<br />
<input name="radiobutton" type="radio" value="radiobutton"  />
b 213<br />
<input type="radio" name="radiobutton" value="radiobutton" />
c anderes Zimmer</td>
      </tr>
      <tr>
        <td valign="top"><br />
          <strong>21</strong></td>
        <td valign="top"><br />
          Sie wollen heiraten. Wohin gehen Sie?</td>
        <td valign="top"><?php genQuestion(21,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
          <strong>22</strong></td>
        <td valign="top"><br />
          Sie wollen sich beim Chef des Bürgerbüros über etwas beschweren.</td>
        <td valign="top"><?php genQuestion(22,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
          <strong>23</strong></td>
        <td valign="top"><br />
          Sie haben gestern Ihr Handy verloren und hoffen, dass es jemand abgegeben hat.</td>
        <td valign="top"><?php genQuestion(23,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
          <strong>24</strong></td>
        <td valign="top"><br />
          Sie sind umgezogen und möchten Ihre neue Adresse melden.</td>
        <td valign="top"><?php genQuestion(24,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
          <strong>25</strong></td>
        <td valign="top"><br />
          Sie möchten einen Anwohnerparkausweis beantragen.</td>
        <td valign="top"><?php genQuestion(25,true); ?></td>
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
		<br />
          <td width="90"><input name="Submit" type="submit" class="sbutton" value="Bewerten" OnClick="document.Test.Modif.value='0'"/>
              <input name="Fertig" type="hidden" value="1" />
              <input name="Modif" type="hidden" value="0" /></td>
          <td width="60"><input name="Submit" type="button" class="sbutton" value="Weiter" onClick="location.href='lesen2.php'"/></td>
          <td width="60"><input name="Submit2" type="button" class="sbutton" value="Ende" onclick="location.href='../home/ende.php'"/></td>
        </tr>
      </table></td>
    <td width="4">&nbsp;</td>
  </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>