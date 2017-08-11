<?php 
session_start();
$hoeren = $_SESSION['q1']+ $_SESSION['q2'] + $_SESSION['q3']+ $_SESSION['q4'] + $_SESSION['q5']+ $_SESSION['q6'] + $_SESSION['q7']+ $_SESSION['q8'] + $_SESSION['q9']+ $_SESSION['q10'] + $_SESSION['q11']+ $_SESSION['q12'] + $_SESSION['q13']+ $_SESSION['q14'] + $_SESSION['q15']+ $_SESSION['q16'] + $_SESSION['q17']+ $_SESSION['q18'] + $_SESSION['q19']+ $_SESSION['q20'];

$lesen = $_SESSION['q21']+$_SESSION['q22'] + $_SESSION['q23']+ $_SESSION['q24'] + $_SESSION['q25']+ $_SESSION['q26'] + $_SESSION['q27']+ $_SESSION['q28'] + $_SESSION['q29']+ $_SESSION['q30'] + $_SESSION['q31']+ $_SESSION['q32'] + $_SESSION['q33']+ $_SESSION['q34'] + $_SESSION['q35']+ $_SESSION['q36'] + $_SESSION['q37']+ $_SESSION['q38'] + $_SESSION['q39'] + $_SESSION['ql2'] + $_SESSION['ql3']+ $_SESSION['ql4']+ $_SESSION['ql5'] + $_SESSION['ql6'] +$_SESSION['ql7'];
session_destroy(); ?>
<!DOCTYPE HTML>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black">


  <title>Prüfung Deutsch für Zuwanderer</title>
  <link href="styles/style.css"   rel="stylesheet" type="text/css">
  <link href="styles/framework.css"  rel="stylesheet" type="text/css">
  <link href="styles/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="styles/animate.css"   rel="stylesheet" type="text/css">

  <script type="text/javascript" src="scripts/jquery.js"></script>
  <script type="text/javascript" src="scripts/jqueryui.js"></script>
  <script type="text/javascript" src="scripts/framework-plugins.js"></script>
  <script type="text/javascript" src="scripts/custom.js"></script>
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
  <a class="menu-item" href="index.php">
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
    <a class="submenu-item" href="hoeren/hoeren1.php"><i class="fa fa-angle-right"></i><em>H&ouml;ren 1</em><i
      class="fa fa-circle"></i></a>
      <a class="submenu-item" href="hoeren/hoeren2.php"><i class="fa fa-angle-right"></i><em>H&ouml;ren 2</em><i
        class="fa fa-circle"></i></a>
        <a class="submenu-item" href="hoeren/hoeren3.php"><i class="fa fa-angle-right"></i><em>H&ouml;ren 3</em><i
          class="fa fa-circle"></i></a>
          <a class="submenu-item" href="hoeren/hoeren4.php"><i class="fa fa-angle-right"></i><em>H&ouml;ren 4</em><i
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
          <a class="submenu-item" href="lesen/lesen1.php"><i class="fa fa-angle-right"></i><em>Lesen 1</em><i
            class="fa fa-circle"></i></a>
            <a class="submenu-item" href="lesen/lesen2.php"><i class="fa fa-angle-right"></i><em>Lesen 2</em><i
              class="fa fa-circle"></i></a>
              <a class="submenu-item" href="lesen/lesen3.php"><i class="fa fa-angle-right"></i><em>Lesen 3</em><i
                class="fa fa-circle"></i></a>
                <a class="submenu-item" href="lesen/lesen4.php"><i class="fa fa-angle-right"></i><em>Lesen 4</em><i
                  class="fa fa-circle"></i></a>
                  <a class="submenu-item" href="lesen/lesen5.php"><i class="fa fa-angle-right"></i><em>Lesen 5</em><i
                    class="fa fa-circle"></i></a>
                  </div>
                </div>
                <a class="menu-item" href="schreiben/schreiben.php">
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
            <div class="boxed-layout" style="height: 88vh;">

             <div class="l2_head">
              <a class="heading-title title_right">Ergebnis</a>
            </div>

            <table class="lesen1_tit">
              <tr>
               <td class="end_tabler bg-1"><b>Pr&uuml;fungsteil</b></td>
               <td class="end_tablel bg-1"><b>Ihre Leistung</b></td>
             </tr >
             <tr>
               <td class="end_tabler">H&ouml;rverstehen</td>
               <td class="end_tablel"><?php echo $hoeren; ?> Punkte</td>
             </tr>
             <tr>
               <td class="end_tabler">Leseverstehen </td>
               <td class="end_tablel">0 Punkte</td>
             </tr>
             <tr>
               <td class="end_tabler">Textproduktion</td>
               <td class="end_tablel">0 Punkte</td>
             </tr>
           </table>

           <div class="lesen1_cell">
            <p class="end-p" style="color: #071AE9"> <b>Gesamtbewertung der schriftlichen Pr&uuml;fung</b></p>
            <p>Ihr Ergebnis bei den Teilen "H&ouml;ren" und "Lesen" entspricht noch nicht der Stufe A2.
              <br> Haben Sie &uuml;berhaupt L&ouml;sungen versucht?</p>
            </div>

            <div style="height: 22%;">
              <p class="end-p" style="color: #071AE9"> <b>Leseverstehen</b></p>
              <p class="end-p">Haben Sie L&ouml;sungen markiert und bewertet?</p>
              <p class="end-p" style="color: #071AE9"> <b>H&ouml;rverstehen</b></p>
              <p class="end-p">Haben Sie L&ouml;sungen markiert und bewertet?</p>
              <p class="end-p" style="color: #071AE9"><b>Textproduktion</b></p>
            </div>

            <div class="h4_cell">
              <p class="end-p">Haben Sie &uuml;berhaupt etwas geschrieben?
               <br>-
               <br>-
               <br>-
             </p>
           </div>

           <div style="height:18%;">
            <p class="end-p"> <b>Form Ihrer E-Mail</b></p>
            <p>Die Form Ihrer E-Mail (Anrede und Schluss) ist noch nicht gut.
             <br><b>Diese Auswertung liefert keine unbedingt g&uuml;ltigen R&uuml;ckmeldungen.</b>
             <br><b>Wenn Sie genauere Bewertungen und Verbesserungstipps haben m&ouml;chten, kopieren Sie Ihren Text und besprechen Sie ihn mit Ihrer Lehrkraft.</b></p>
           </div>

         </div>
       </div>
     </div>

   </div>
 </div>

</div>


</body>
<script type="text/javascript" src="scripts/hoeren1.js"></script>