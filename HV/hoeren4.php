<?php
    	session_start();
	include ("../_template/header.php");

if ( isset($_POST['Fertig']) && strlen($_POST['Fertig']) )
	{
		$_SESSION['fertig_S4'] = $_POST['Fertig'];

	}

include("../include/exam.inc");
include("../include/result_cal.inc");
?>


<SCRIPT LANGUAGE="JavaScript" SRC="../_time/uhr.js"></SCRIPT>

<?php
if ($_POST['Fertig']==1)
{
	$_SESSION['note_S4'] = $sum;

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
      <?php include ("../_template/barOben.php"); ?><strong>Teil 4 </strong></div>
      </div></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>    <td height="11" colspan="2"></td>
    <td></td>
  </tr>
  <tr>
    <td height="30" colspan="2"><span class="anl"><hr><br />
      &nbsp;Sie h&ouml;ren Aussagen zu einem Thema. Welcher der S&auml;tze a&ndash;f passt zu den Aussagen 18&ndash;20?<br />
      <br />
      &nbsp;Markieren Sie Ihre L&ouml;sungen für die Aufgaben 18&ndash;20.<br />
      <br />
      &nbsp;Lesen Sie jetzt die S&auml;tze a&ndash;f. Dazu haben Sie eine Minute Zeit.<br />
&nbsp;Danach h&ouml;ren Sie die Aussagen.</tr><td>&nbsp;</td><td>&nbsp;</td>
  <tr>
    <td colspan="2" valign="top"><table width="98%" border="0" cellpadding="2" cellspacing="0">
      <tr valign = "top">
        <td height="49" colspan="3" valign="middle">
          <div align="left">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="100" height="32">
              <param name="movie" value="dtz_hv4.swf" />
              <param name="quality" value="high" />
              <embed src="dtz_hv4.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="32"></embed>
            </object>
            </div></td>
      </tr>
		<tr valign = "top">
        <td width="4%" height="30" valign="top"> <div><strong>&nbsp;a</strong><br /><br /><br /><strong>&nbsp;b</strong><br /><br /><br /><strong><span class=""  style="color: #0489B1">&nbsp;c</span></strong><br /><br /><br /><strong>&nbsp;d</strong><br /><br /><br /><strong>&nbsp;e</strong><br /><br /><br /><strong>&nbsp;f</strong><br /><br /><br /></div></td>
        <td width="49%" valign="top">Es ist gut, wenn Kinder ihre Hausaufgaben in der Schule machen können.<br /><br /><br />
        Die ganztägige Grundschule ist zu teuer.<br /><br /><br />
        <span class=""  style="color: #0489B1">Es ist schade, dass Kinder dann keine Freizeit mehr haben.</span><br /><br /><br />
        Kinder sollen nachmittags nicht allein am Computer sitzen.<br /><br /><br />
        Kinder haben nachmittags in der Ganztagsschule interessante Beschäftigung.<br /><br />
        In der ganztägigen Grundschule machen die Kinder Lernspiele am Computer.</td>
        <td width="47%" rowspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
             <tr valign = "top">
	           <td colspan="3" valign="top" bgcolor="D6EEF7"><strong>Beispiel</strong></td>
	         </tr>
	         <tr valign = "top">
	           <td width="29%" valign="top" bgcolor="D6EEF7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	           <td width="67%" valign="top" bgcolor="D6EEF7">
	           <input type="radio" name="radiobutton" value="radiobutton" />
	           <input name="radiobutton" type="radio" value="radiobutton"/>
	           <input type="radio" name="radiobutton" value="radiobutton"  checked="checked" />
	           <input type="radio" name="radiobutton" value="radiobutton" />
	           <input name="radiobutton" type="radio" value="radiobutton"/>
	           <input type="radio" name="radiobutton" value="radiobutton" />
<br /><strong>&nbsp;&nbsp;a&nbsp;&nbsp;&nbsp; b&nbsp;&nbsp;&nbsp; c&nbsp;&nbsp;&nbsp;&nbsp; d&nbsp;&nbsp;&nbsp; e&nbsp;&nbsp;&nbsp; f </strong><br />&nbsp;<br />	         </tr>
  <tr>&nbsp;<br /></tr>

        <td valign="top"><strong>18</strong></td>
        <td width="100%" valign="top"><?php genQuestion(118); ?>
          <br />
          <br />    </tr> <tr valign = "top">
  		<td valign="top"><strong>19</strong></td>
        <td width="100%" valign="top"><?php genQuestion(119); ?>
		  <br />
          <br />    </tr> <tr valign = "top">
       <td valign="top"><strong>20</strong></td>
        <td width="100%" valign="top"><?php genQuestion(120); ?>    </tr>
    </table></td>


    <td width="30">&nbsp;</td>
    <td width="30">&nbsp;</td>
   </tr>

   <tr>
     <td>&nbsp;</td>
     <td><div align="right"></div>       </td>
     <td width="4">&nbsp;</td>
   </tr>
 </table></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><br /><br /></div>
      <table width="550"  border="0" align="right" cellpadding="0" cellspacing="0">
        <tr valign="middle">
          <td width="320" height="30"><div align="right">
            <?php include ("../_template/barUnten.php"); ?>&nbsp;&nbsp;
          </div>            </td>
          <!--td width="98" height="30"><input name="Clear" type="reset" class="sbutton" value="Zur&uuml;cksetzen" /></td-->
          <td width="90"><input name="Submit" type="submit" class="sbutton" value="Bewerten" OnClick="document.Test.Modif.value='0'"/>
              <input name="Fertig" type="hidden" value="1" />
              <input name="Modif" type="hidden" value="0" /></td>
          <td width="60"><input name="Submit" type="button" class="sbutton" value="Weiter" onClick="location.href='../LV/lesen1.php'"/></td>
          <td width="60"><input name="Submit2" type="button" class="sbutton" value="Ende" onclick="location.href='../home/ende.php'"/></td>
        </tr>
      </table></td>
    <td width="4">&nbsp;</td>
  </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>