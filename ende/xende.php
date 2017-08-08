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
        <td valign="top"><p><strong>Achtung!</strong> Wenn Sie dieses Fenster schlie&szlig;en, werden alle Ihre Ergebnisse gel&ouml;scht!<strong>&nbsp; </strong></p>
          <table width="920" border="0" cellspacing="0" cellpadding="0">
              <tr valign="top">
                <td width="440" rowspan="20" valign="top"><table width="95%"  border="0" cellspacing="0" cellpadding="6">
                    <tr>
                      <td colspan="2"><strong>Bestehen der Pr&uuml;fung </strong></td>
                    </tr>
                    <tr>
                      <td colspan="2"><p>Die Pr&uuml;fung ist nicht bestanden, wenn nicht mindestens 60% der Gesamtpunktzahl sowohl im schriftlichen, als auch im m&uuml;ndlichen Teil der Pr&uuml;fung erreicht werden.</p>
                        <p>Eine Zulassung zur m&uuml;ndlichen Pr&uuml;fung erfolgt in der Regel nur, wenn der schriftliche Teil der Pr&uuml;fung bestanden ist.  </p></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#EEEEEE"><p><strong>Notenschl&uuml;ssel</strong> (ohne  M&uuml;ndliche Pr&uuml;fung)</p>                        </td>
                    </tr>
                    <tr bgcolor="#EEEEEE">
                      <td width="36%">225 - 202,5 Punkte <br>
                        202 - 180 Punkte<br>
                        179,5 - 157,5 Punkte<br>
                        157 - 135 Punkte</td>
                      <td width="64%">sehr gut<br>
                        gut<br>
                        befriedigend<br>
                        ausreichend </td>
                    </tr>
					<tr>
                      <td colspan="2"><strong>Hinweis</strong>: Die Durchf&uuml;hrung einer solchen &Uuml;bungspr&uuml;fung ergibt keinen Rechtsanspruch auf ein Zertifikat. </td>
                      </tr>
                </table></td>
                <td height="21" colspan="4"><strong>Ihr Ergebnis</strong></td>
                </tr>
              <tr valign="top">
              <td width="60" height="21">&nbsp;</td>
              <td width="77">&nbsp;</td>
              <td width="53" align="center" valign="middle">Punkte</td>
              <td width="170" align="center" valign="middle">maximal erreichbar </td>
            </tr>
            <tr valign="middle" bgcolor="#BBDDFF">
              <td height="21" bgcolor="#BBDDFF">&nbsp;Lesen</td>
              <td>&nbsp;</td>
              <td align="center"><strong>
                <?php 
$_SESSION['note_lese'] = $_SESSION['note_S1'] + $_SESSION['note_S2'] +	$_SESSION['note_S3'] + $_SESSION['note_S4'] 
	+ $_SESSION['note_S5'] ;
	print($_SESSION['note_lese']);
?>
              </strong></td>
              <td align="center">105</td>
              </tr>
            <tr valign="middle" bgcolor="#FFEEAA">
              <td height="21">&nbsp;H&ouml;ren</td>
              <td>&nbsp;</td>
              <td align="center"><strong>
                <?php 
$_SESSION['note_hoer'] = $_SESSION['note_S6'] + $_SESSION['note_S7'] +	$_SESSION['note_S8'] ;
	print($_SESSION['note_hoer']);
?>
              </strong></td>
              <td align="center">75</td>
              </tr>
            <tr valign="middle" bgcolor="#FFBBBB">
              <td height="21">&nbsp;Schreiben</td>
              <td><span class="Stil1"></span></td>
              <td align="center"><?php print($_SESSION['note_S9']); ?></td>
              <td align="center">45</td>
              </tr>
            <tr valign="middle">
              <td height="28"><strong>&nbsp;gesamt</strong></td>
              <td>&nbsp;</td>
              <td align="center"><strong><?php print($_SESSION['note_total']); ?></strong></td>
              <td align="center">225</td>
              </tr>
            <tr valign="middle">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
              </tr>
            <tr valign="middle">
              <td>&nbsp;</td>
              <?php if ($_SESSION['note_total'] > 202) {
			  $note = "sehr gut";
			  $fnt ="stil2";
			  }
			  elseif ($_SESSION['note_total'] > 179.5) {
			  $note = "gut";
			  $fnt ="stil2";
			  }			  
			  elseif ($_SESSION['note_total'] > 157) {
			  $note = "befriedigend";
			  $fnt ="stil2";
			  }
			  elseif ($_SESSION['note_total'] > 134.5) {
			  $note = "ausreichend";
			  $fnt ="stil3";
			  }
			  elseif ($_SESSION['note_total'] <= 134.5) {
			  $note = "nicht bestanden";
			  $fnt ="stil4"; 
			  } ?>
              <td colspan="3" align="left"><h3><strong>Note: <?php print $note; ?></strong></h3></td>
              </tr>
            <tr valign="middle">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
              </tr>
            <tr valign="middle">
              <td colspan="4"><strong>&nbsp;Einzelergebnisse</td>
              </tr>
            <tr valign="middle">
              <td height="21">&nbsp;</td>
              <td>&nbsp;</td>
              <td align="center">Punkte</td>
              <td align="center">maximal erreichbar </td>
              </tr>
            <tr valign="middle" bgcolor="#BBDDFF">
              <td colspan="2">&nbsp;Leseverstehen, Teil 1 </td>
              <td align="center"><strong><span class="<?php echo $fnt; ?>"><?php print($_SESSION['note_S1']); ?></span></strong></td>
              <td align="center">25</td>
              </tr>
            <tr valign="middle" bgcolor="#BBDDFF">
              <td colspan="2">&nbsp;Leseverstehen, Teil 2 </td>
              <td align="center"><strong><?php print($_SESSION['note_S2']); ?></strong></td>
              <td align="center">25</td>
              </tr>
            <tr valign="middle" bgcolor="#BBDDFF">
              <td colspan="2">&nbsp;Leseverstehen, Teil 3 </td>
              <td align="center"><strong><?php print($_SESSION['note_S3']); ?></strong></td>
              <td align="center">25</td>
              </tr>
            <tr valign="middle" bgcolor="#BBDDFF">
              <td colspan="2">&nbsp;Sprachbausteine, Teil 1 </td>
              <td align="center"><strong><?php print($_SESSION['note_S4']); ?></strong></td>
              <td align="center">15</td>
              </tr>
            <tr valign="middle" bgcolor="#BBDDFF">
              <td colspan="2">&nbsp;Sprachbausteine, Teil 2 </td>
              <td align="center"><strong><?php print($_SESSION['note_S5']); ?></strong></td>
              <td align="center">15</td>
              </tr>
            <tr valign="middle" bgcolor="#FFEEAA">
              <td colspan="2">&nbsp;H&ouml;rverstehen, Teil 1 </td>
              <td align="center"><strong><?php print($_SESSION['note_S6']); ?></strong></td>
              <td align="center">25</td>
              </tr>
            <tr valign="middle" bgcolor="#FFEEAA">
              <td colspan="2">&nbsp;H&ouml;rverstehen, Teil 2 </td>
              <td align="center"><strong><?php print($_SESSION['note_S7']); ?></strong></td>
              <td align="center">25</td>
              </tr>
            <tr valign="middle" bgcolor="#FFEEAA">
              <td colspan="2">&nbsp;H&ouml;rverstehen, Teil 3 </td>
              <td align="center"><strong><?php print($_SESSION['note_S8']); ?></strong></td>
              <td align="center"><p>25</p>                </td>
              </tr>
            <tr valign="middle" bgcolor="#FFBBBB">
              <td colspan="2">&nbsp;Schriftlicher Ausdruck </td>
              <td align="center"><strong><?php print($_SESSION['note_S9']); ?></strong></td>
              <td align="center">45</td>
              </tr>
          </table>
          <p><strong>       </strong></p></td>
      </tr>
    </table>      </td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"></div>    </td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php include ("../_template/footer.php"); ?></form>
</body>
</html>