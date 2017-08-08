<?php
    	session_start();
	include ("../_template/header.php");

if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
	{
		$_SESSION['fertig_S7'] = $_POST['Fertig'];

	}

include("../include/exam.inc");
include("../include/result_cal.inc");
?>


<SCRIPT LANGUAGE="JavaScript" SRC="../_time/uhr.js"></SCRIPT>

<?php
if ($_POST['Fertig']==1)
{
	$_SESSION['note_S7'] = $sum;

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
<strong>Teil 3</strong></div>
    </div></td>
    <td width="30">&nbsp;</td>
  </tr>
    <td height="11" colspan="2"></td>
    <td></td>
  </tr>
  <tr>
    <td height="30" colspan="2" valign="top"><span class="anl"><hr>&nbsp;&nbsp;Lesen Sie die drei Texte. Zu jedem Text gibt es zwei Aufgaben.<br />&nbsp;&nbsp;Entscheiden Sie bei jedem Text, ob die
Aussage richtig oder falsch ist und welche Antwort (a, b oder c) am besten passt.<br />
&nbsp;&nbsp;Markieren Sie Ihre Lösungen für die Aufgaben 31–36.</span></td>
      </tr><td>&nbsp;</td><td>&nbsp;</td>
  <tr>
    <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="2" cellspacing="0">
          <tr>
        <td width="443" rowspan="2" valign="top"><img src="lv31.png" alt="1" width="435" height="240" /></td>
        <td width="22" valign="top"><p><br />
          <strong>31</strong>
        </p>          </td>
        <td valign="top"><p><br />
          Die KKB Krankenkasse bezahlt ihren Mitgliedern einen Kurs im Fitness-Club.
            <br />
            <?php genQuestion(211); ?>
        </p>          </td>
        </tr>
          <tr>
            <td width="22" valign="top"><strong>32</strong></td>
            <td valign="top">Um am Trainingsprogramm von Trainer Tom teilzunehmen,
              <?php genQuestion(212,true); ?></td>
          </tr>
      <tr>
        <td colspan="3" valign="top" height="3"></td>
        </tr>
      <tr>
        <td colspan="3" valign="top" height="1" bgcolor="#CCCCCC"></td>
        </tr>
      <tr>
        <td colspan="3" valign="top" height="3"></td>
        </tr>
      <tr>
        <td rowspan="2" valign="top"><img src="lv32.png" alt="2" width="435" height="220" /></td>
        <td valign="top"><p><br />
          <strong>20</strong></p>          </td>
        <td valign="top"><p><br />
          Kinder sollen immer den kürzesten Weg zur Schule nehmen.
            <br />
            <?php genQuestion(213); ?>
          </p>          </td>
        </tr>
      <tr>
        <td valign="top"><strong>34</strong></td>
        <td valign="top">Eltern sollen <?php genQuestion(214,true); ?></td>
      </tr>
      <tr>
        <td colspan="3" valign="top" height="3"></td>
        </tr>
      <tr>
        <td colspan="3" valign="top" height="1" bgcolor="#CCCCCC"></td>
        </tr>
      <tr>
        <td colspan="3" valign="top" height="3"></td>
        </tr>
      <tr>
        <td rowspan="2" valign="top"><img src="lv33.png" alt="3" width="435" height="250" /></td>
        <td valign="top"><br />
          <strong>35</strong></td>
        <td valign="top"><br />
          Die Firma Teletronica GmbH kann auch an einem anderen Termin kommen.<br />
          <?php genQuestion(215); ?></td>
        </tr>
      <tr>
        <td valign="top"><strong>36</strong></td>
        <td valign="top">Herr Demir soll vor dem 30.11. die Firma Teletronica GmbH anrufen,<?php genQuestion(216,true); ?></td>
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
          <td width="60"><input name="Submit" type="button" class="sbutton" value="Weiter" onClick="location.href='lesen4.php'"/></td>
          <td width="60"><input name="Submit2" type="button" class="sbutton" value="Ende" onclick="location.href='../home/ende.php'"/></td>
        </tr>
      </table></td>
    <td width="4">&nbsp;</td>
  </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>