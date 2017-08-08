<?php
  	session_start();
	include ("../_template/header.php");

if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
	{
		$_SESSION['fertig_S8'] = $_POST['Fertig'];

	}

include("../include/exam.inc");
include("../include/result_cal.inc");
?>


<SCRIPT LANGUAGE="JavaScript" SRC="../_time/uhr.js"></SCRIPT>

<?php
if ($_POST['Fertig']==1)
{
	$_SESSION['note_S8'] = $sum;

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
<strong>Teil 4</strong></div>
  </div></td>
  <td width="30">&nbsp;</td>
 </tr>
 <tr>
  <td height="11" colspan="2"></td>
  <td></td>
 </tr>
 <tr>
  <td height="30" colspan="2" valign="top"><span class="anl"><hr>&nbsp;&nbsp;Lesen Sie den Text. Entscheiden Sie, ob die Aussagen 37–39 richtig oder falsch sind.<br />
&nbsp;&nbsp;Markieren Sie Ihre Lösungen für die Aufgaben 37–39.</span></td>
  <td>&nbsp;</td>
 </tr>
 <td>&nbsp;</td><td>&nbsp;</td>
 <tr>
  <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="2" cellspacing="0">
   <tr>
    <td width="455" rowspan="6" valign="top"><img src="lv4.png" alt="4" width="537" height="720" /></td>
    <td width="33" valign="top"><p><br />
     <strong>37</strong>
    </p>     </td>
    <td width="426" valign="top"><p><br />
     Die Ware wird immer innerhalb von fünf Werktagen geliefert.<br />
      <?php genQuestion(217); ?>
   </tr>
   <tr>
      <td width="33" valign="top"><strong>38</strong></td>
      <td valign="top">Die Ware wird an Kunden in der ganzen Welt verschickt.<br />
      <?php genQuestion(218); ?></td>
   </tr>
    <td valign="top"><strong>39</strong>     </td>
    <td valign="top">Bei Rücksendung der Ware muss der Kunde <br />in bestimmten Fällen das Porto selbst bezahlen.<br />
      <?php genQuestion(219); ?>
     </p>     </td>
  </tr>
   <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
   </tr>
   <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    </tr>
   <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    </tr>
  </table></td>
  <td width="30">&nbsp;</td>
 </tr>
 <tr>
  <td>&nbsp;</td>
  <td><div align="right"></div>
   <table width="550" border="0" align="right" cellpadding="0" cellspacing="0">
    <tr valign="middle">
     <td width="320" height="30"><div align="right">
      <?php include ("../_template/barUnten.php"); ?>&nbsp;&nbsp;
     </div>      </td>
       <!--td width="98" height="30"><input name="Clear" type="reset" class="sbutton" value="Zur&uuml;cksetzen" /></td-->
     <td width="90"><input name="Submit" type="submit" class="sbutton" value="Bewerten" OnClick="document.Test.Modif.value='0'"/>
       <input name="Fertig" type="hidden" value="1" />
       <input name="Modif" type="hidden" value="0" /></td>
     <td width="60"><input name="Submit" type="button" class="sbutton" value="Weiter" onClick="location.href='lesen5.php'"/></td>
     <td width="60"><input name="Submit2" type="button" class="sbutton" value="Ende" onclick="location.href='../home/ende.php'"/></td>
    </tr>
   </table></td>
  <td width="4">&nbsp;</td>
 </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>