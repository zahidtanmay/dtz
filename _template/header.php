<?php
	// time management

	$currentTime = time();
	$endTime = $_SESSION['testEnd'];
	$restTime = $endTime - $currentTime;
    	print("<SCRIPT LANGUAGE=\"JavaScript\">var compteur =". $restTime .";</SCRIPT>");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pr&uuml;fung Deutsch f&uuml;r Zuwanderer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="JavaScript1.2" type="text/javascript">
<!--
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
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])?args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) { img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr) for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

//-->
</script>
<script language="JavaScript1.2" type="text/javascript" src="../_template/mm_css_menu.js"></script>
<style type="text/css" media="screen">
	@import url("../_template/dtz-menu.css");
</style>
<link href="../_style/template_css.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
<!--
body {
	background-image: url(../_img/bgr.jpg);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	text-align:center;
}
-->
</style>
<body onload="MM_preloadImages('../_template/dtz-menu_r2_c2_f2.gif','../_template/dtz-menu_r2_c2_f3.gif','../_template/dtz-menu_r2_c4_f2.gif','../_template/dtz-menu_r2_c4_f3.gif','../_template/dtz-menu_r2_c6_f2.gif','../_template/dtz-menu_r2_c6_f3.gif');">
<div id="FWTableContainer146101965">
<table width="959" border="0" align="center" cellpadding="0" cellspacing="0" background="../_img/tbl-bg.gif">
  <tr>
    <td width="130" colspan="1" valign="top">&nbsp;</td>
    <td colspan="2"><div align="right"><span class="metanavi"></span></div></td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><img src="../_img/DTZ_banner1.jpg" width="957" height="70" alt="DTZ" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1" width="130"></td>
    <td width="700"></td>
    <td width="100"></td>
    <td width="30"></td>
  </tr>
  <tr>
    <td height="21" colspan="2" valign="top" bgcolor="#2F468C"><!--Menue-->
      <div id="FWTableContainer146101965">
<table border="0" cellpadding="0" cellspacing="0" width="750">
<!-- fwtable fwsrc="../_template/dtz-menu.png" fwbase="../_template/dtz-menu.gif" fwstyle="Dreamweaver" fwdocid = "146101965" fwnested="0" -->
  <tr>
   <td><img src="../_template/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="36" height="1" border="0" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="190" height="1" border="0" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="36" height="1" border="0" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="244" height="1" border="0" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="60" height="1" border="0" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="177" height="1" border="0" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="7"><img name="dtzmenu_r1_c1" src="../_template/dtz-menu_r1_c1.gif" width="750" height="4" border="0" id="dtzmenu_r1_c1" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="1" height="4" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="3"><img name="dtzmenu_r2_c1" src="../_template/dtz-menu_r2_c1.gif" width="7" height="13" border="0" id="dtzmenu_r2_c1" alt="" /></td>
   <td><a href="#" onmouseout="MM_nbGroup('out');MM_menuStartTimeout(500);" onmouseover="MM_menuShowMenu('MMMenuContainer0105132723_0', 'MMMenu0105132723_0',-6,17,'dtzmenu_r2_c2');MM_nbGroup('over','dtzmenu_r2_c2','../_template/dtz-menu_r2_c2_f2.gif','../_template/dtz-menu_r2_c2_f3.gif',1);" onclick="MM_nbGroup('down','navbar1','dtzmenu_r2_c2','../_template/dtz-menu_r2_c2_f3.gif',1);"><img name="dtzmenu_r2_c2" src="../_template/dtz-menu_r2_c2.gif" width="36" height="9" border="0" id="dtzmenu_r2_c2" alt="" /></a></td>
   <td rowspan="3"><img name="dtzmenu_r2_c3" src="../_template/dtz-menu_r2_c3.gif" width="190" height="13" border="0" id="dtzmenu_r2_c3" alt="" /></td>
   <td><a href="#" onmouseout="MM_nbGroup('out');MM_menuStartTimeout(500);" onmouseover="MM_menuShowMenu('MMMenuContainer0105143915_1', 'MMMenu0105143915_1',-6,17,'dtzmenu_r2_c4');MM_nbGroup('over','dtzmenu_r2_c4','../_template/dtz-menu_r2_c4_f2.gif','../_template/dtz-menu_r2_c4_f3.gif',1);" onclick="MM_nbGroup('down','navbar1','dtzmenu_r2_c4','../_template/dtz-menu_r2_c4_f3.gif',1);"><img name="dtzmenu_r2_c4" src="../_template/dtz-menu_r2_c4.gif" width="36" height="9" border="0" id="dtzmenu_r2_c4" alt="" /></a></td>
   <td rowspan="3"><img name="dtzmenu_r2_c5" src="../_template/dtz-menu_r2_c5.gif" width="244" height="13" border="0" id="dtzmenu_r2_c5" alt="" /></td>
   <td rowspan="2"><a href="#" onmouseout="MM_nbGroup('out');MM_menuStartTimeout(500);" onmouseover="MM_menuShowMenu('MMMenuContainer0115141346_2', 'MMMenu0115141346_2',-6,17,'dtzmenu_r2_c6');MM_nbGroup('over','dtzmenu_r2_c6','../_template/dtz-menu_r2_c6_f2.gif','../_template/dtz-menu_r2_c6_f3.gif',1);" onclick="MM_nbGroup('down','navbar1','dtzmenu_r2_c6','../_template/dtz-menu_r2_c6_f3.gif',1);"><img name="dtzmenu_r2_c6" src="../_template/dtz-menu_r2_c6.gif" width="60" height="10" border="0" id="dtzmenu_r2_c6" alt="" /></a></td>
   <td rowspan="3"><img name="dtzmenu_r2_c7" src="../_template/dtz-menu_r2_c7.gif" width="177" height="13" border="0" id="dtzmenu_r2_c7" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="1" height="9" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="dtzmenu_r3_c2" src="../_template/dtz-menu_r3_c2.gif" width="36" height="4" border="0" id="dtzmenu_r3_c2" alt="" /></td>
   <td rowspan="2"><img name="dtzmenu_r3_c4" src="../_template/dtz-menu_r3_c4.gif" width="36" height="4" border="0" id="dtzmenu_r3_c4" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="dtzmenu_r4_c6" src="../_template/dtz-menu_r4_c6.gif" width="60" height="3" border="0" id="dtzmenu_r4_c6" alt="" /></td>
   <td><img src="../_template/spacer.gif" width="1" height="3" border="0" alt="" /></td>
  </tr>
</table>
<div id="MMMenuContainer0105132723_0">
	<div id="MMMenu0105132723_0" onmouseout="MM_menuStartTimeout(500);" onmouseover="MM_menuResetTimeout();">
		<a href="../HV/hoeren1.php" id="MMMenu0105132723_0_Item_0" class="MMMIFHStyleMMMenu0105132723_0" onmouseover="MM_menuOverMenuItem('MMMenu0105132723_0');">
			&nbsp;H&ouml;ren&nbsp;1		</a>
		<a href="../HV/hoeren2.php" id="MMMenu0105132723_0_Item_1" class="MMMIHStyleMMMenu0105132723_0" onmouseover="MM_menuOverMenuItem('MMMenu0105132723_0');">
			&nbsp;H&ouml;ren&nbsp;2		</a>
		<a href="../HV/hoeren3.php" id="MMMenu0105132723_0_Item_2" class="MMMIHStyleMMMenu0105132723_0" onmouseover="MM_menuOverMenuItem('MMMenu0105132723_0');">
			&nbsp;H&ouml;ren&nbsp;3		</a>
		<a href="../HV/hoeren4.php" id="MMMenu0105132723_0_Item_3" class="MMMIHStyleMMMenu0105132723_0" onmouseover="MM_menuOverMenuItem('MMMenu0105132723_0');">
			&nbsp;H&ouml;ren&nbsp;4		</a>	</div>
</div>
<div id="MMMenuContainer0105143915_1">
	<div id="MMMenu0105143915_1" onmouseout="MM_menuStartTimeout(500);" onmouseover="MM_menuResetTimeout();">
		<a href="../LV/lesen1.php" id="MMMenu0105143915_1_Item_0" class="MMMIFHStyleMMMenu0105143915_1" onmouseover="MM_menuOverMenuItem('MMMenu0105143915_1');">
			&nbsp;Lesen&nbsp;1		</a>
		<a href="../LV/lesen2.php" id="MMMenu0105143915_1_Item_1" class="MMMIHStyleMMMenu0105143915_1" onmouseover="MM_menuOverMenuItem('MMMenu0105143915_1');">
			&nbsp;Lesen&nbsp;2		</a>
		<a href="../LV/lesen3.php" id="MMMenu0105143915_1_Item_2" class="MMMIHStyleMMMenu0105143915_1" onmouseover="MM_menuOverMenuItem('MMMenu0105143915_1');">
			&nbsp;Lesen&nbsp;3		</a>
		<a href="../LV/lesen4.php" id="MMMenu0105143915_1_Item_3" class="MMMIHStyleMMMenu0105143915_1" onmouseover="MM_menuOverMenuItem('MMMenu0105143915_1');">
			&nbsp;Lesen&nbsp;4		</a>
		<a href="../LV/lesen5.php" id="MMMenu0105143915_1_Item_4" class="MMMIHStyleMMMenu0105143915_1" onmouseover="MM_menuOverMenuItem('MMMenu0105143915_1');">
			&nbsp;Lesen&nbsp;5		</a>	</div>
</div>
<div id="MMMenuContainer0115141346_2">
	<div id="MMMenu0115141346_2" onmouseout="MM_menuStartTimeout(500);" onmouseover="MM_menuResetTimeout();">
		<a href="../TP/schreiben1.php" id="MMMenu0115141346_2_Item_0" class="MMMIFHStyleMMMenu0115141346_2" onmouseover="MM_menuOverMenuItem('MMMenu0115141346_2');">
			&nbsp;Schreiben
		</a>
	</div>
</div>
</div>
    <!--Ende Menue--></td>
    <td width="100" valign="top" background="../_img/men-bg.gif"><div align="right">
      <input name="UHR" id="UHR" type="text" class="uhr" value="Beendet" size="10" maxlength="8" />
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="16" colspan="4"><!--Ende Header--></td>
  </tr>
</table>
<!--Ende Header-->
