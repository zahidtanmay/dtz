<?php
  	session_start();
	include ("../_template/header.php");

if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
	{
		$_SESSION['fertig_S6'] = $_POST['Fertig'];

	}

include("../include/exam.inc");
include("../include/result_cal.inc");
?>


<SCRIPT LANGUAGE="JavaScript" SRC="../_time/uhr.js"></SCRIPT>

<?php
if ($_POST['Fertig']==1)
{
	$_SESSION['note_S6'] = $sum;

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
<strong>Teil 2</strong></div>
  </div></td>
  <td width="30">&nbsp;</td>
 </tr>
 <tr>
  <td height="11" colspan="2"></td>
  <td></td>
 </tr>
 <tr>
  <td height="47" colspan="2" valign="top"><span class="anl"><hr><br />&nbsp;&nbsp;Lesen Sie die Situationen 26–30 und die Anzeigen a–h. Finden Sie für jede Situation die passende Anzeige.<br />
   &nbsp;&nbsp;Markieren Sie Ihre Lösungen für die Aufgaben 26–30.<br>
   &nbsp;&nbsp;F&uuml;r eine Aufgabe gibt es keine L&ouml;sung. W&auml;hlen Sie in diesem Fall <strong>X</strong>.</span></td>
   </tr><td>&nbsp;<br></td><td>&nbsp;<br></td>
 <tr>
  <td height="380" colspan="2" valign="top"><table width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>    </tr>

    <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
    <td rowspan="15" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="350" height="350">
     <param name="movie" value="lv2.swf" />
     <param name="quality" value="high" />
     <embed src="lv2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="350" height="350"></embed>
    </object></td>
    </tr>
     <tr>
    <td valign="top"><strong>26</strong></td>
    <td valign="top">Sie möchten Ihren Vater zum Essen einladen. Ihr Vater liebt die asiatische Küche<br /> und kann nicht alleine laufen.</td>
    <td valign="top">&nbsp;</td>
   </tr>
     <tr>
       <td valign="top">&nbsp;</td>
       <td valign="top"><?php genQuestion(26); ?></td>
       <td valign="top">&nbsp;</td>
     </tr>
     <tr>
       <td valign="top">&nbsp;</td>
       <td valign="top">&nbsp;</td>
       <td valign="top">&nbsp;</td>
     </tr>
     <tr>
    <td valign="top"><strong>27</strong></td>
    <td valign="top">Für eine Hochzeitsfeier mit über hundert Gästen suchen Sie ein passendes Restaurant.</td>
    <td valign="top">&nbsp;</td>
   </tr>
     <tr>
       <td valign="top">&nbsp;</td>
       <td valign="top"><?php genQuestion(27); ?></td>
       <td valign="top">&nbsp;</td>
     </tr>
     <tr>
       <td valign="top">&nbsp;</td>
       <td valign="top">&nbsp;</td>
       <td valign="top">&nbsp;</td>
     </tr>
   <tr>
    <td valign="top"><strong>28</strong></td>
    <td valign="top">Sie möchten Ihren Geburtstag zu Hause feiern, aber das Essen nicht selbst kochen.<br /> Sie erwarten zwölf Gäste.</td>
    <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top"><?php genQuestion(28); ?></td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
    <td valign="top"><strong>29</strong></td>
    <td valign="top">Sie möchten mit Ihren Kindern (2 und 6 Jahre alt) am Samstagabend essen gehen.<br /> Sie wollen im Freien sitzen, aber trotzdem bei Regen nicht nass werden.</td>
    <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top"><?php genQuestion(29); ?></td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
    <td valign="top"><strong>30</strong></td>
    <td valign="top">Sie haben Ihren Kindern versprochen, sie am Sonntag in ein Eiscafé<br /> zu einem großen Becher Eis einzuladen.</td>
    <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top"><?php genQuestion(210); ?></td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
  </table></td>
  <td width="30"><img src="../_img/pixtr.gif" width="1" height="380" alt="" /></td>
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
     <td width="60"><input name="Submit" type="button" class="sbutton" value="Weiter" onClick="location.href='lesen3.php'"/></td>
     <td width="60"><input name="Submit2" type="button" class="sbutton" value="Ende" onclick="location.href='../home/ende.php'"/></td>
    </tr>
   </table></td>
  <td width="4">&nbsp;</td>
 </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>