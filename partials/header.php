<?php session_start(); ?>
<?php
$_SESSION['q1'] = 0; $_SESSION['q2'] = 0; $_SESSION['q3']= 0; $_SESSION['q4'] = 0; $_SESSION['q5']= 0; $_SESSION['q6'] = 0; $_SESSION['q7']= 0; $_SESSION['q8'] = 0; $_SESSION['q9']= 0; $_SESSION['q10'] = 0; $_SESSION['q11']= 0; $_SESSION['q12']= 0; $_SESSION['q13']= 0; $_SESSION['q14'] = 0; $_SESSION['q15']= 0; $_SESSION['q16']= 0; $_SESSION['q17']= 0; $_SESSION['q18'] = 0; $_SESSION['q19']= 0; $_SESSION['q20']= 0;

$_SESSION['q21']= 0;$_SESSION['q22'] = 0; $_SESSION['q23']= 0; $_SESSION['q24'] = 0; $_SESSION['q25']= 0; $_SESSION['q26'] = 0; $_SESSION['q27']= 0; $_SESSION['q28'] = 0; $_SESSION['q29']= 0; $_SESSION['q30'] = 0; $_SESSION['q31']= 0; $_SESSION['q32'] = 0; $_SESSION['q33']= 0; $_SESSION['q34'] = 0; $_SESSION['q35']= 0; $_SESSION['q36'] = 0; $_SESSION['q37']= 0; $_SESSION['q38'] = 0; $_SESSION['q39'] = 0; $_SESSION['ql2'] = 0; $_SESSION['ql3']= 0; $_SESSION['ql4']= 0;$_SESSION['ql5'] = 0; $_SESSION['ql6'] = 0;$_SESSION['ql7']= 0;

if(isset($_SESSION['start'])){
  $now = time(); // Checking the time now when home page starts.

  if ($now > $_SESSION['expire']) {
    session_destroy();
    header('Location: ../end.php');
  }
  $restTime = $_SESSION['expire']-$now;

  $hours = floor($restTime / 3600);
  $mins = floor($restTime / 60 % 60);
  $secs = floor($restTime % 60);
  $timeFormat = sprintf('%02d:%02d:%02d', $hours, $mins, $secs);
}else{
  $_SESSION['start'] = time(); 
  $_SESSION['expire'] = $_SESSION['start'] + (100*60);

  $restTime = $_SESSION['expire'] - $_SESSION['start'];
  $hours = floor($restTime / 3600);
  $mins = floor($restTime / 60 % 60);
  $secs = floor($restTime % 60);
  $timeFormat = sprintf('%02d:%02d:%02d', $hours, $mins, $secs);
} 



?>

<!DOCTYPE HTML>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black">


  <title>Prüfung Deutsch für Zuwanderer</title>
  <link href="../styles/style.css"   rel="stylesheet" type="text/css">
  <link href="../styles/framework.css"  rel="stylesheet" type="text/css">
  <link href="../styles/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="../styles/animate.css"   rel="stylesheet" type="text/css">

  <script type="text/javascript" src="../scripts/jquery.js"></script>
  <script type="text/javascript" src="../scripts/jqueryui.js"></script>
  <script type="text/javascript" src="../scripts/framework-plugins.js"></script>
  <script type="text/javascript" src="../scripts/custom.js"></script>
  <script type="text/javascript">
    function startTimer(duration, display) {
      var timer = duration;
      setInterval(function () {
        hour = parseInt(timer/3600, 10);
        minutes = parseInt((timer % 3600) / 60, 10);
        seconds = parseInt(timer % 60, 10);
        hour = hour < 10 ? "0" + hour : hour;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent =hour +":" + minutes + ":" + seconds;

        if (--timer < 0) {
          timer = duration;
        }
      }, 1000);
    }

    window.onload = function () {
      var fiveMinutes = <?php echo(json_encode($restTime)); ?>,
      display = document.querySelector('#timer');
      startTimer(fiveMinutes, display);
    };
  </script>
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
               <p class="head1"><b><?php echo $test_part; ?> </b> (<?php echo $time_text; ?>)</p>
               <p class="head2">Erreichte Punktzahl: 0 von 65</p>
               <span id="timer" class="time_cell"></span>
             </div>