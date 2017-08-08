<?php
    	session_start();
	include ("../_template/header.php");

if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
	{
		$_SESSION['fertig_S3'] = $_POST['Fertig'];

	}

include("../include/exam.inc");
include("../include/result_cal.inc");
?>


<SCRIPT LANGUAGE="JavaScript" SRC="../_time/uhr.js"></SCRIPT>

<?php
if ($_POST['Fertig']==1)
{
	$_SESSION['note_S3'] = $sum;

	foreach ($_POST as $key=>$value){
		if (strpos($key, "lv_") == 0)
			$_SESSION["user_answer"][$key] = $value;
	}
}
 ?>

<form style="display: inline"; id="Test" name="Test" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0" background="../_img/tbl-bg.gif">
  <tr>
    <td width="261">&nbsp;&nbsp;<strong>H&ouml;ren</strong> (25 Minuten)</div></td>
    <td width="665"><div align="right">
      <?php include ("../_template/barOben.php"); ?><strong>Teil 3</strong></div>
    </div></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>    <td height="11" colspan="2"></td>
    <td></td>
  </tr>
  <tr>
    <td height="30" colspan="2"><span class="anl"><hr><br />&nbsp;&nbsp;Sie hören vier Gespräche. Zu jedem Gespräch gibt es zwei Aufgaben. <br>&nbsp;&nbsp;Entscheiden Sie bei jedem Gespräch,
ob die Aussage dazu richtig oder falsch ist und welche Antwort (a, b oder c) am besten passt.
<br><br>&nbsp; Markieren Sie Ihre Lösungen für die Aufgaben 10-17.</span></td>
   </tr><td>&nbsp;</td><td>&nbsp;</td>
  <tr>
    <td colspan="2" valign="top"><table width="98%" border="0" cellpadding="2" cellspacing="0">
      <tr>
        <td colspan="6" valign="middle">
          <div align="left">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="100" height="32">
              <param name="movie" value="dtz_hv3.swf" />
              <param name="quality" value="high" />
              <embed src="dtz_hv3.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="32"></embed>
            </object>
            </div></td></tr>
      <tr>
        <td colspan="2" valign="top" bgcolor="D6EEF7"><strong>&nbsp; &nbsp; Beispiel</strong></td>
        <td valign="top" bgcolor="D6EEF7">&nbsp;</td>
        <td valign="top" bgcolor="D6EEF7">&nbsp;</td>
        <td valign="top" bgcolor="D6EEF7">&nbsp;</td>
        <td valign="top" bgcolor="D6EEF7">&nbsp;</td>
      </tr>
      <tr>
        <td width="2%" valign="top" bgcolor="D6EEF7"></td>
        <td width="18%" valign="top" bgcolor="D6EEF7">Frau Erdmann ist die Chefin<br> von Herrn Becker.<br /></td>
        <td valign="top" bgcolor="D6EEF7"><input name="radiobutton" type="radio" value="radiobutton" checked="checked" />
Richtig
<input name="radiobutton00" type="radio" value="radiobutton" checked="checked" />
  Falsch</td>
        <td valign="top" bgcolor="D6EEF7"></td>
        <td valign="top" bgcolor="D6EEF7">Worum geht es? </td>
        <td valign="top" bgcolor="D6EEF7"><input name="radiobutton" type="radio" value="radiobutton"  />
a Herr Becker erklärt Frau Erdmann die Firmengeschichte.<br />
<input name="radiobutton" type="radio" value="radiobutton" checked="checked" />
b Herr Becker möchte für die Firma arbeiten.<br />
<input type="radio" name="radiobutton" value="radiobutton" />
c Herr Becker möchte mehr Gehalt.</td>
      </tr>
      <tr>
        <td valign="top">          <br />
          <strong>10</strong> </td>
        <td valign="top">          <br />
          Das Gespräch findet <br />
          in Norwegen statt.</td>
        <td width="21%" valign="top">
          <br />
          <?php genQuestion(110); ?></td>
        <td width="2%" valign="top">          <br />
         <strong> 11</strong></td>
        <td width="15%" valign="top"><br />
              Worum bittet Herr Jansen Frau Samsonov?</td>
        <td width="43%" valign="top"><?php genQuestion(111,true); ?></td>
      </tr>
      <tr>
        <td valign="top">        <br />
         <strong> 12</strong></td>
        <td valign="top">          <br />
          Frau Baier und Herr Steiner sind Kollegen.</td>
        <td valign="top"><br />
          <?php genQuestion(112); ?></td>
        <td valign="top"><br />
         <strong> 13</strong></td>
        <td valign="top"><br />
          Was macht Frau Baier?</td>
        <td valign="top"><?php genQuestion(113,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
        <strong>14</strong></td>
        <td valign="top"><br />
          Frau Melnik telefoniert <br />mit dem Lehrer ihrer Tochter.</td>
        <td valign="top"><br />
          <?php genQuestion(114); ?></td>
        <td valign="top"><br />
        <strong>  15</strong></td>
        <td valign="top"><br />
          Was kann Frau Melnik nicht so gut?</td>
        <td valign="top"><?php genQuestion(115,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
        <strong>16</strong></td>
        <td valign="top"><br />
          Frau Keller ist in einem Lebensmittelgeschäft.</td>
        <td valign="top"><br />
          <?php genQuestion(116); ?></td>
        <td valign="top"><br />
        <strong>  17</strong></td>
        <td valign="top"><br />
          Wie viel kosten die Medikamente?</td>
        <td valign="top"><?php genQuestion(117,true); ?></td>
      </tr>
    </table></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"></div>
      <table width="550"  border="0" align="right" cellpadding="0" cellspacing="0">
        <tr valign="middle">
          <td width="330" height="30"><div align="right">
            <?php include ("../_template/barUnten.php"); ?>&nbsp;&nbsp;
          </div>            </td>
          <!--td width="98" height="30"><input name="Clear" type="reset" class="sbutton" value="Zur&uuml;cksetzen" /></td-->
          <td width="100"><input name="Submit" type="submit" class="sbutton" value="Bewerten" OnClick="document.Test.Modif.value='0'"/>
              <input name="Fertig" type="hidden" value="1" />
              <input name="Modif" type="hidden" value="0" /></td>
          <td width="60"><input name="Submit" type="button" class="sbutton" value="Weiter" onClick="location.href='hoeren4.php'"/></td>
          <td width="60"><input name="Submit2" type="button" class="sbutton" value="Ende" onclick="location.href='../home/ende.php'"/></td>
        </tr>
      </table></td>
    <td width="4">&nbsp;</td>
  </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>