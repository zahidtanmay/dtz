<?php
	// time management

	$currentTime = time();
	$endTime = $_SESSION['testEnd'];
	$restTime = $endTime - $currentTime;
    	print("<SCRIPT LANGUAGE=\"JavaScript\">var compteur =". $restTime .";</SCRIPT>");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pr&uuml;fungstraining Zertifikat B1</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
<!--
/*
window.onerror = mon_erreur;

function mon_erreur(nouvelle,fichier,ligne)
{
 erreur = "Message d'erreur:\n"+ nouvelle+"\n"+fichier+"\n"+ligne;
 affiche_erreur();
 return true;
}

function affiche_erreur()
{
 alert(window.erreur)
}
*/

//-->
</script>
<script type="text/javascript">
<!--
function check_modif()
{
 if (document.Test.Modif.value=="1")
 {
 	return true;
 }
 return false;
}
//-->
</script>

<style type="text/css" media="screen">
	@import url("../_template/gr-menu.css");
</style>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
<script language="JavaScript1.2" type="text/javascript" src="../_template/mm_css_menu.js"></script>
<style type="text/css" media="screen">
	@import url("../_template/gr-menu.css");
</style>
<link href="../_style/template_css.css" rel="stylesheet" type="text/css">
<link href="../_style/d_d.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
<!--
body {
	background-image: url(../_img/bgr.jpg);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<body onLoad="MM_preloadImages('../_template/gr-menu_r1_c1_f3.gif','../_template/gr-menu_r1_c1_f2.gif','../_template/gr-menu_r1_c2_f3.gif','../_template/gr-menu_r1_c2_f2.gif','../_template/gr-menu_r1_c3_f3.gif','../_template/gr-menu_r1_c3_f2.gif','../_template/gr-menu_r1_c4_f3.gif','../_template/gr-menu_r1_c4_f2.gif')">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" background="../_img/tbl-bg.gif">
  <tr>
    <td width="130" colspan="1" rowspan="2" valign="top"><img src="../_img/heda10.jpg" alt="Hedalos GmbH" width="130" height="70"></td>
    <td colspan="2"><div align="right"><span class="metanavi"></span></div></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><div align="right"><img src="../_img/zertc.jpg" alt="" width="580" height="62"> </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1" width="130"></td>
    <td width="700"></td>
    <td width="100"></td>
    <td width="30"></td>
  </tr>
  <tr>
    <td height="21" colspan="2" valign="top" bgcolor="#223366"><!--Menue-->
        <div id="FWTableContainer828307287">
          <table border="0" cellpadding="0" cellspacing="0" width="554">
            <!-- fwtable fwsrc="gr-menu.png" fwbase="gr-menu.gif" fwstyle="Dreamweaver" fwdocid = "828307287" fwnested="0" -->
            <tr>
              <td><img src="../_template/spacer.gif" width="112" height="1" border="0" alt="" /></td>
              <td><img src="../_template/spacer.gif" width="139" height="1" border="0" alt="" /></td>
              <td><img src="../_template/spacer.gif" width="123" height="1" border="0" alt="" /></td>
              <td><img src="../_template/spacer.gif" width="180" height="1" border="0" alt="" /></td>
              <td><img src="../_template/spacer.gif" width="1" height="1" border="0" alt="" /></td>
            </tr>
            <tr>
              <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','grmenu_r1_c1','../_template/gr-menu_r1_c1_f3.gif',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0127115105_0', 'MMMenu0127115105_0',0,23,'grmenu_r1_c1');MM_nbGroup('over','grmenu_r1_c1','../_template/gr-menu_r1_c1_f2.gif','../_template/gr-menu_r1_c1_f3.gif',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(500);"><img name="grmenu_r1_c1" src="../_template/gr-menu_r1_c1.gif" width="112" height="19" border="0" id="grmenu_r1_c1" alt="" /></a></td>
              <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','grmenu_r1_c2','../_template/gr-menu_r1_c2_f3.gif',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0127120802_1', 'MMMenu0127120802_1',11,23,'grmenu_r1_c2');MM_nbGroup('over','grmenu_r1_c2','../_template/gr-menu_r1_c2_f2.gif','../_template/gr-menu_r1_c2_f3.gif',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(500);"><img name="grmenu_r1_c2" src="../_template/gr-menu_r1_c2.gif" width="139" height="19" border="0" id="grmenu_r1_c2" alt="" /></a></td>
              <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','grmenu_r1_c3','gr-menu_r1_c3_f3.gif',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0127121212_2', 'MMMenu0127121212_2',16,23,'grmenu_r1_c3');MM_nbGroup('over','grmenu_r1_c3','../_template/gr-menu_r1_c3_f2.gif','../_template/gr-menu_r1_c3_f3.gif',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(500);"><img name="grmenu_r1_c3" src="../_template/gr-menu_r1_c3.gif" width="123" height="19" border="0" id="grmenu_r1_c3" alt="" /></a></td>
              <td><a href="../Schreiben/schreiben1.php" target="_top" onClick="MM_nbGroup('down','navbar1','grmenu_r1_c4','../_template/gr-menu_r1_c4_f3.gif',1);" onMouseOver="MM_nbGroup('over','grmenu_r1_c4','../_template/gr-menu_r1_c4_f2.gif','../_template/gr-menu_r1_c4_f3.gif',1);" onMouseOut="MM_nbGroup('out');"><img name="grmenu_r1_c4" src="../_template/gr-menu_r1_c4.gif" width="180" height="19" border="0" id="grmenu_r1_c4" alt="" /></a></td>
              <td><img src="../_template/spacer.gif" width="1" height="19" border="0" alt="" /></td>
            </tr>
          </table>
          <div id="MMMenuContainer0127115105_0">
            <div id="MMMenu0127115105_0" onMouseOut="MM_menuStartTimeout(500);" onMouseOver="MM_menuResetTimeout();"> <a href="../Lesen/lese_teil1.php" id="MMMenu0127115105_0_Item_0" class="MMMIFHStyleMMMenu0127115105_0" onMouseOver="MM_menuOverMenuItem('MMMenu0127115105_0');"> &nbsp;Teil&nbsp;1 </a> <a href="../Lesen/lese_teil2.php" id="MMMenu0127115105_0_Item_1" class="MMMIHStyleMMMenu0127115105_0" onMouseOver="MM_menuOverMenuItem('MMMenu0127115105_0');"> &nbsp;Teil&nbsp;2 </a> <a href="../Lesen/lese_teil3.php" id="MMMenu0127115105_0_Item_2" class="MMMIHStyleMMMenu0127115105_0" onMouseOver="MM_menuOverMenuItem('MMMenu0127115105_0');"> &nbsp;Teil&nbsp;3 </a> </div>
          </div>
          <div id="MMMenuContainer0127120802_1">
            <div id="MMMenu0127120802_1" onMouseOut="MM_menuStartTimeout(500);" onMouseOver="MM_menuResetTimeout();"> <a href="../Lesen/sprach_teil1.php" id="MMMenu0127120802_1_Item_0" class="MMMIFHStyleMMMenu0127120802_1" onMouseOver="MM_menuOverMenuItem('MMMenu0127120802_1');"> &nbsp;Teil&nbsp;1 </a> <a href="../Lesen/sprach_teil2.php" id="MMMenu0127120802_1_Item_1" class="MMMIHStyleMMMenu0127120802_1" onMouseOver="MM_menuOverMenuItem('MMMenu0127120802_1');"> &nbsp;Teil&nbsp;2 </a> </div>
          </div>
          <div id="MMMenuContainer0127121212_2">
            <div id="MMMenu0127121212_2" onMouseOut="MM_menuStartTimeout(500);" onMouseOver="MM_menuResetTimeout();"> <a href="../Hoeren/teil1.php" id="MMMenu0127121212_2_Item_0" class="MMMIFHStyleMMMenu0127121212_2" onMouseOver="MM_menuOverMenuItem('MMMenu0127121212_2');"> &nbsp;Teil&nbsp;1 </a> <a href="../Hoeren/teil2.php" id="MMMenu0127121212_2_Item_1" class="MMMIHStyleMMMenu0127121212_2" onMouseOver="MM_menuOverMenuItem('MMMenu0127121212_2');"> &nbsp;Teil2 </a> <a href="../Hoeren/teil3.php" id="MMMenu0127121212_2_Item_2" class="MMMIHStyleMMMenu0127121212_2" onMouseOver="MM_menuOverMenuItem('MMMenu0127121212_2');"> &nbsp;Teil&nbsp;3 </a> </div>
          </div>
        </div>
    <!--Ende Menue--></td>
    <td width="100" valign="top" background="../_img/men-bg.gif"><div align="right">
      <input name="UHR" id="UHR" type="text" class="uhr" value="Start" size="10" maxlength="8" />
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="16" colspan="4"><!--Ende Header--></td>
  </tr>
</table>
<!--Ende Header-->
