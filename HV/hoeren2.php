<?php
    	session_start();
	include ("../_template/header.php");

if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
	{
		$_SESSION['fertig_S2'] = $_POST['Fertig'];

	}

include("../include/exam.inc");
include("../include/result_cal.inc");
?>


<SCRIPT LANGUAGE="JavaScript" SRC="../_time/uhr.js"></SCRIPT>

<?php
if ($_POST['Fertig']==1)
{
	$_SESSION['note_S2'] = $sum;

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
      <?php include ("../_template/barOben.php"); ?><strong>Teil 2</strong></div>
    </div></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>    <td height="11" colspan="2"></td>
    <td></td>
  </tr>
  <tr>
    <td height="30" colspan="2"><span class="anl"><hr><br />&nbsp;&nbsp;Sie h&ouml;ren fünf Ansagen aus dem Radio. Zu jeder Ansage gibt es eine Aufgabe. Welche Lösung (a, b oder c) passt am besten?
    <br><br> &nbsp;&nbsp;Markieren Sie Ihre Lösungen für die Aufgaben 5-9.  </tr><td>&nbsp;</td><td>&nbsp;</td>
  <tr>
    <td colspan="2" valign="top"><table width="98%" border="0">
      <tr>
        <td colspan="3" valign="middle">
          <div align="left">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="100" height="32">
              <param name="movie" value="dtz_hv2.swf" />
              <param name="quality" value="high" />
              <embed src="dtz_hv2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="32"></embed>
            </object>
            </div></td></tr>
      <tr>
        <td width="4%" valign="top"><br />
          <strong> 5</strong></td>
        <td width="35%" valign="top"><br />
          Was h&ouml;ren Sie?</td>
        <td width="61%" valign="top">
          <?php genQuestion(15,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
       <strong> 6</strong></td>
        <td valign="top"><br />
          Die Züge ...</td>
        <td valign="top"><?php genQuestion(16,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
        <strong> 7</strong></td>
        <td valign="top"><br />
          Wie macht man bei dem Gewinnspiel mit?</td>
        <td valign="top"><?php genQuestion(17,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
       <strong> 8</strong></td>
        <td valign="top"><br />
          Wo fährt der Falschfahrer?</td>
        <td valign="top"><?php genQuestion(18,true); ?></td>
      </tr>
      <tr>
        <td valign="top"><br />
        <strong> 9</strong></td>
        <td valign="top"><br />
          Wie wird das Wetter in Westdeutschland?</td>
        <td valign="top"><?php genQuestion(19,true); ?></td>
      </tr>
    </table></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;<br /><br /></td>
    <td><div align="right"><br /></div>
      <table width="550"  border="0" align="right" cellpadding="0" cellspacing="0">
        <tr valign="middle">
          <td width="320" height="30"><div align="right">
            <?php include ("../_template/barUnten.php"); ?>&nbsp;&nbsp;
          </div>            </td>
          <!--td width="98" height="30"><input name="Clear" type="reset" class="sbutton" value="Zur&uuml;cksetzen" /></td-->
          <td width="80"><input name="Submit" type="submit" class="sbutton" value="Bewerten" OnClick="document.Test.Modif.value='0'"/>
              <input name="Fertig" type="hidden" value="1" />
              <input name="Modif" type="hidden" value="0" /></td>
          <td width="60"><input name="Submit" type="button" class="sbutton" value="Weiter" onClick="location.href='hoeren3.php'"/></td>
          <td width="60"><input name="Submit2" type="button" class="sbutton" value="Ende" onclick="location.href='../home/ende.php'"/></td>
        </tr>
      </table></td>
    <td width="4">&nbsp;</td>
  </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>