
<?php session_start(); 


?>

<!DOCTYPE HTML>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">


<title>Epsilon 4.0</title>

<link href="../styles/style.css"   rel="stylesheet" type="text/css">
<link href="../styles/framework.css"  rel="stylesheet" type="text/css">
<link href="../styles/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../styles/animate.css"   rel="stylesheet" type="text/css">

<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript" src="../scripts/jqueryui.js"></script>
<script type="text/javascript" src="../scripts/framework-plugins.js"></script>
<script type="text/javascript" src="../scripts/custom.js"></script>
</head>

<body class="dual-sidebar">

<div id="preloader">
	<div id="status">
  <div class="preloader-logo"></div>
  <h3 class="center-text">Willkommen</h3>
  <p class="center-text smaller-text">
   Seite wird geladen. Dauert nur kurz.
  </p>
 </div>
</div>

<div class="gallery-fix"></div> <!-- Important for all pages that have galleries or portfolios -->

<div id="header-fixed">
 <a class="open-left-sidebar" href="#"><i class="fa fa-navicon"></i></a>

</div>

<div class="all-elements">
 <div class="snap-drawers">
  <div class="snap-drawer snap-drawer-left">
   <div class="sidebar-header">
    <div class="sidebar-header-logo">
     <a href="index.html"></a>
    </div>
    <div class="sidebar-header-icons">
    </div>
    <div class="overlay"></div>
   </div>

   <div class="sidebar-menu half-bottom">
    <a class="menu-item" href="../index.php">
     <i class="bg-red-light fa fa-home"></i>
     <em>HOME</em>
     <i class="fa fa-circle"></i>
    </a>
    <div class="has-submenu">
     <a class="menu-item show-submenu" href="#">
      <i class="bg-green-dark fa fa-bullhorn"></i>
      <em>H&ouml;ren </em>
      <strong>4</strong>
     </a>

     <div class="submenu">
      <a class="submenu-item" href="../hoeren/hoeren1.php"><i class="fa fa-angle-right"></i><em>H&ouml;ren 1</em><i
        class="fa fa-circle"></i></a>
      <a class="submenu-item" href="../hoeren/hoeren2.php"><i class="fa fa-angle-right"></i><em>H&ouml;ren 2</em><i
        class="fa fa-circle"></i></a>
      <a class="submenu-item" href="../hoeren/hoeren3.php"><i class="fa fa-angle-right"></i><em>H&ouml;ren 3</em><i
        class="fa fa-circle"></i></a>
      <a class="submenu-item" href="../hoeren/hoeren4.php"><i class="fa fa-angle-right"></i><em>H&ouml;ren 4</em><i
        class="fa fa-circle"></i></a>
     </div>
    </div>
    <div class="has-submenu">
     <a class="menu-item show-submenu" href="#">
      <i class="bg-blue-dark fa fa-navicon"></i>
      <em>Lesen </em>
      <strong>5</strong>
     </a>

     <div class="submenu">
      <a class="submenu-item" href="../lesen/lesen1.php"><i class="fa fa-angle-right"></i><em>Lesen 1</em><i
        class="fa fa-circle"></i></a>
      <a class="submenu-item" href="../lesen/lesen2.php"><i class="fa fa-angle-right"></i><em>Lesen 2</em><i
        class="fa fa-circle"></i></a>
      <a class="submenu-item" href="../lesen/lesen3.php"><i class="fa fa-angle-right"></i><em>Lesen 3</em><i
        class="fa fa-circle"></i></a>
      <a class="submenu-item" href="../lesen/lesen4.php"><i class="fa fa-angle-right"></i><em>Lesen 4</em><i
        class="fa fa-circle"></i></a>
      <a class="submenu-item" href="../lesen/lesen5.php"><i class="fa fa-angle-right"></i><em>Lesen 5</em><i
        class="fa fa-circle"></i></a>
     </div>
    </div>
    <a class="menu-item" href="../schreiben/schreiben.php">
     <i class="bg-yellow-dark fa fa-pencil-square-o"></i>
     <em>Schreiben</em>
     <i class="fa fa-circle"></i>
    </a>
    <a class="menu-item close-sidebar" href="#">
     <i class="bg-red-dark fa fa-times"></i>
     <em>Schlie&szlig;en</em>
     <i class="fa fa-circle"></i>
    </a>
   </div>
  </div>

  <!--main Border -->
 </div>
 <div id="content" class="snap-content">
   <div class="pageapp-signup bg-5 cover-screen">
    <div class="cover-center">
     <div class="boxed-layout" style="height: 82vh;">

      <div class="l2_head">
       <p class="head1"><b>H&ouml;ren Teil 1 </b> (H&ouml;ren insgesamt 25 Minuten)</p>
       <p class="head2">Erreichte Punktzahl: 0 von 65</p>
       <span id="timer" class="time_cell"></span>
      </div>