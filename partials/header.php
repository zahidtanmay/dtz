<?php session_start(); ?>
<?php

if(!isset($_SESSION['q1'])){
    $_SESSION['q1']= 0; $_SESSION['q2'] = 0; $_SESSION['q3']= 0; $_SESSION['q4'] = 0;
    $_SESSION['q5']= 0; $_SESSION['q6'] = 0; $_SESSION['q7']= 0; $_SESSION['q8'] = 0;
    $_SESSION['q9']= 0; $_SESSION['q10'] = 0; $_SESSION['q11']= 0; $_SESSION['q12']= 0;
    $_SESSION['q13']= 0; $_SESSION['q14'] = 0; $_SESSION['q15']= 0; $_SESSION['q16']= 0;
    $_SESSION['q17']= 0; $_SESSION['q18'] = 0; $_SESSION['q19']= 0; $_SESSION['q20']= 0;
    $_SESSION['q21']= 0;$_SESSION['q22'] = 0; $_SESSION['q23']= 0; $_SESSION['q24'] = 0;
    $_SESSION['q25']= 0; $_SESSION['q26'] = 0; $_SESSION['q27']= 0; $_SESSION['q28'] = 0;
    $_SESSION['q29']= 0; $_SESSION['q30'] = 0; $_SESSION['q31']= 0; $_SESSION['q32'] = 0;
    $_SESSION['q33']= 0; $_SESSION['q34'] = 0; $_SESSION['q35']= 0; $_SESSION['q36'] = 0;
    $_SESSION['q37']= 0; $_SESSION['q38'] = 0; $_SESSION['q39'] = 0; $_SESSION['ql2'] = 0;
    $_SESSION['ql3']= 0; $_SESSION['ql4']= 0;$_SESSION['ql5'] = 0; $_SESSION['ql6'] = 0;
    $_SESSION['ql7']= 0;
}

$_SESSION['s1'] = $_SESSION['q1'] + $_SESSION['q2'] + $_SESSION['q3'] + $_SESSION['q4'];
$_SESSION['s2'] =  $_SESSION['q5'] + $_SESSION['q6'] + $_SESSION['q7'] + $_SESSION['q8'] + $_SESSION['q9'];

$_SESSION['s3'] = $_SESSION['q10'] + $_SESSION['q11'] + $_SESSION['q12'] + $_SESSION['q13'] + $_SESSION['q14'] + $_SESSION['q15'] + $_SESSION['q16'] + $_SESSION['q17'];

$_SESSION['s4'] =  $_SESSION['q18'] + $_SESSION['q19'] + $_SESSION['q20'];

$_SESSION['s5'] = $_SESSION['q21'] + $_SESSION['q22'] + $_SESSION['q23'] + $_SESSION['q24'] + $_SESSION['q25'];
$_SESSION['s6'] = $_SESSION['q26'] + $_SESSION['q27'] + $_SESSION['q28'] + $_SESSION['q29'] + $_SESSION['q30'];

$_SESSION['s7'] = $_SESSION['q31'] + $_SESSION['q32'] + $_SESSION['q33'] + $_SESSION['q34'] + $_SESSION['q35'] + $_SESSION['q36'];

$_SESSION['s8'] = $_SESSION['q37'] + $_SESSION['q38'] + $_SESSION['q39'];

$_SESSION['s9'] = $_SESSION['ql2'] + $_SESSION['ql3'] + $_SESSION['ql4'] + $_SESSION['ql5'] + $_SESSION['ql6'] + $_SESSION['ql7'];

$_SESSION['sum'] = $_SESSION['s1'] + $_SESSION['s2'] + $_SESSION['s3'] + $_SESSION['s4'] + $_SESSION['s5'] + $_SESSION['s6'] + $_SESSION['s7'] + $_SESSION['s8'] + $_SESSION['s9'];

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        $(document).ready(function(){
            $("#button1").click(function(){
                document.getElementById("image").src="../images/a.png";
            });
            $("#button2").click(function(){
                document.getElementById("image").src="../images/b.png";
            });
            $("#button3").click(function(){
                document.getElementById("image").src="../images/c.png";
            });
            $("#button4").click(function(){
                document.getElementById("image").src="../images/d.png";
            });
            $("#button5").click(function(){
                document.getElementById("image").src="../images/e.png";
            });
            $("#button6").click(function(){
                document.getElementById("image").src="../images/f.png";
            });
            $("#button7").click(function(){
                document.getElementById("image").src="../images/g.png";
            });
            $("#button8").click(function(){
                document.getElementById("image").src="../images/h.png";
            });

        });
    </script>
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

                display.textContent = hour +":" + minutes + ":" + seconds;

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

    <script type="text/javascript">

        $(document).ready(function(){
            $("#result").click(function(){
                var str = $("form").serializeArray();
                console.log(str);
                var s = [];
                $.ajax({
                    type: 'GET',
                    data: str,
                    success: function() {
                        $.each(str, function(i, field){
                            s.push(field);
                            console.log(s[i].name);
                            console.log(s[i].value);
                        });


                        var session = <?php echo(json_encode($page_session)); ?>;

                        if(session == 1){
                            var q1, q2, q3, q4;

                            if(s[0].value == 3){
                                q1= 1;
                            }else {
                                q1 = 0;
                            }
                            if(s[1].value==2){
                                q2= 1;
                            }else {
                                q2 = 0;
                            }
                            if(s[2].value==2){
                                q3= 1;
                            }else {
                                q3 = 0;
                            }
                            if(s[3].value==3){
                                q4= 1;
                            }else {
                                q4 = 0;
                            }
                            var sum1 = q1 +q2+q3+q4;
                            document.getElementById("s1").style.display="block";
                            document.getElementById("s1").textContent = sum1 ;
                        }
                        else if(session == 2){
                            var q5, q6, q7, q8, q9;

                            if(s[0].value == 1){
                                q5= 1;
                            }else {
                                q5 = 0;
                            }
                            if(s[1].value==3){
                                q6= 1;
                            }else {
                                q6 = 0;
                            }
                            if(s[2].value==1){
                                q7= 1;
                            }else {
                                q7 = 0;
                            }
                            if(s[3].value==3){
                                q8= 1;
                            }else {
                                q8 = 0;
                            }
                            if(s[4].value==3){
                                q9= 1;
                            }else {
                                q9 = 0;
                            }

                            var sum2 = q5+ q6 + q7 + q8 + q9;
                            document.getElementById("s2").style.display="block";
                            document.getElementById("s2").textContent = sum2 ;
                        }else if(session == 3){
                            var q10 = 0; var q11= 0;var q12= 0;var q13= 0;var q14= 0;var  q15= 0;var  q16= 0;var  q17= 0;

                            if(s[0].name == 'q10' && s[0].value == 2){
                                q10= 1;console.log('q10');
                            }else if(s[0].name == 'q11' && s[0].value == 3){
                                q11 = 1;console.log('q11');
                            }

                            if(s[1].name == 'q11' && s[1].value == 3){
                                q11= 1;
                            }else if(s[1].name == 'q12' && s[1].value == 2){
                                q12 = 1;
                            }else if(s[1].name == 'q13' && s[1].value == 3){
                                q13 = 1;
                            }

                            if(s[2].name == 'q12' && s[2].value == 2){
                                q12= 1;
                            }else if(s[2].name == 'q13' && s[2].value == 3){
                                q13 = 1;
                            }else if(s[2].name == 'q14' && s[2].value == 1){
                                q14 = 1;
                            }else if(s[2].name == 'q15' && s[2].value == 3){
                                q15 = 1;
                            }

                            if(s[3].name == 'q13' && s[3].value == 3){
                                q13= 1;
                            }else if(s[3].name == 'q14' && s[3].value == 1){
                                q14 = 1;
                            }else if(s[3].name == 'q15' && s[3].value == 3){
                                q15 = 1;
                            }else if(s[3].name == 'q16' && s[3].value == 2){
                                q16 = 1;
                            }else if(s[3].name == 'q17' && s[3].value == 2){
                                q17 = 1;
                            }

                            if(s.length>4){
                                if(s[4].name == 'q14' && s[4].value == 1){
                                    q14 = 1;
                                }else if(s[4].name == 'q15' && s[4].value == 3){
                                    q15 = 1;
                                }else if(s[4].name == 'q16' && s[4].value == 2){
                                    q16 = 1;
                                }else if(s[4].name == 'q17' && s[4].value == 2){
                                    q17 = 1;
                                }
                                if(s.length>5){
                                    if(s[5].name == 'q15' && s[5].value == 3){
                                        q15 = 1;
                                    }else if(s[5].name == 'q16' && s[5].value == 2){
                                        q16 = 1;
                                    }else if(s[5].name == 'q17' && s[5].value == 2){
                                        q17 = 1;
                                    }

                                    if(s.length>6){
                                        if(s[6].name == 'q16' && s[6].value == 2){
                                            q16 = 1;
                                        }else if(s[6].name == 'q17' && s[6].value == 2){
                                            q17 = 1;
                                        }

                                        if(s.length>7){
                                            if(s[7].name == 'q17' && s[7].value == 2){
                                                q17 = 1;
                                            }
                                        }


                                    }


                                }


                            }


                            var sum3 = q10+ q11 + q12 + q13 + q14 + q15 + q16 + q17;
                            document.getElementById("s3").style.display="block";
                            document.getElementById("s3").textContent = sum3;
                        }else if(session == 4){

                            var q18= 0; var q19= 0; var q20= 0;

                            if(s.length>=1) {

                                if (s[0].name == 'q18' && s[0].value == 5) {
                                    q18 = 1;
                                } else if (s[0].name == 'q19' && s[0].value == 1) {
                                    q19 = 1;
                                } else if (s[0].name == 'q20' && s[0].value == 4) {
                                    q20 = 1;
                                }
                                if(s.length>=2){
                                    if (s[1].name == 'q19' && s[1].value == 1) {
                                        q19 = 1;
                                    } else if (s[1].name == 'q20' && s[1].value == 4) {
                                        q20 = 1;
                                    }
                                    if(s.length>=3){
                                        if (s[2].name == 'q20' && s[2].value == 4) {
                                            q20 = 1;
                                        }
                                    }
                                }

                            }


                            var sum4 = q18 + q19 + q20;
                            document.getElementById("s4").style.display="block";
                            document.getElementById("s4").textContent = sum4;
                        }else if(session == 5){

                            var q21 = 0;var q22 = 0;var q23 = 0;var q24 = 0;var q25 = 0;

                            if(s[0].value == 1){
                                q21= 1;
                            }else {
                                q21 = 0;
                            }
                            if(s[1].value==2){
                                q22= 1;
                            }else {
                                q22 = 0;
                            }
                            if(s[2].value==1){
                                q23= 1;
                            }else {
                                q23 = 0;
                            }
                            if(s[3].value==1){
                                q24= 1;
                            }else {
                                q24 = 0;
                            }
                            if(s[4].value==3){
                                q25= 1;
                            }else {
                                q25 = 0;
                            }
                            sum5 = q21 + q22 + q23 + q24 + q25;
                            document.getElementById("s5").style.display="block";
                            document.getElementById("s5").textContent = sum5;
                        }else if(session == 6){

                            var q26 = 0; var q27 = 0; var q28 = 0; var q29 = 0; var q30 = 0;

                            if(s.length>=1) {

                                if (s[0].name == 'q26' && s[0].value == 6) {
                                    q26 = 1;
                                } else if (s[0].name == 'q27' && s[0].value == 1) {
                                    q27 = 1;
                                } else if (s[0].name == 'q28' && s[0].value == 2) {
                                    q28 = 1;
                                }else if (s[0].name == 'q29' && s[0].value == 5) {
                                    q29 = 1;
                                }else if (s[0].name == 'q30' && s[0].value == 9) {
                                    q30 = 1;
                                }

                                if(s.length>=2){

                                    if (s[1].name == 'q27' && s[1].value == 1) {
                                        q27 = 1;
                                    } else if (s[1].name == 'q28' && s[1].value == 2) {
                                        q28 = 1;
                                    }else if (s[1].name == 'q29' && s[1].value == 5) {
                                        q29 = 1;
                                    }else if (s[1].name == 'q30' && s[1].value == 9) {
                                        q30 = 1;
                                    }
                                    if(s.length>=3){
                                        if (s[2].name == 'q28' && s[2].value == 2) {
                                            q28 = 1;
                                        }else if (s[2].name == 'q29' && s[2].value == 5) {
                                            q29 = 1;
                                        }else if (s[2].name == 'q30' && s[2].value == 9) {
                                            q30 = 1;
                                        }
                                        if(s.length>=4){
                                            if (s[3].name == 'q29' && s[3].value == 5) {
                                                q29 = 1;
                                            }else if (s[3].name == 'q30' && s[3].value == 9) {
                                                q30 = 1;
                                            }

                                            if(s.length>=5){
                                                if (s[4].name == 'q30' && s[4].value == 9) {
                                                    q30 = 1;
                                                }


                                            }

                                        }

                                    }
                                }

                            }


                            var sum6 = q26 + q27 + q28 + q29 + q30;

                            document.getElementById("s6").style.display="block";
                            document.getElementById("s6").textContent = sum6;
                        }else if(session == 7){
                            var q31= 0;var q32= 0;var q33= 0;var q34= 0;var  q35= 0;var  q36= 0;

                            if(s[0].name == 'q31' && s[0].value == 2){
                                q31= 1;
                            }else if(s[0].name == 'q32' && s[0].value == 2){
                                q32 = 1;
                            }

                            if(s[1].name == 'q32' && s[1].value == 2){
                                q32= 1;
                            }else if(s[1].name == 'q33' && s[1].value == 2){
                                q33 = 1;
                            }else if(s[1].name == 'q34' && s[1].value == 3){
                                q34 = 1;
                            }

                            if(s[2].name == 'q33' && s[2].value == 2){
                                q33= 1;
                            }else if(s[2].name == 'q34' && s[2].value == 3){
                                q34 = 1;
                            }else if(s[2].name == 'q35' && s[2].value == 1){
                                q35 = 1;
                            }else if(s[2].name == 'q36' && s[2].value == 1){
                                q36 = 1;
                            }

                            if(s.length >3){

                                if(s[3].name == 'q34' && s[3].value == 3){
                                    q34= 1;
                                }else if(s[3].name == 'q35' && s[3].value == 1){
                                    q35 = 1;
                                }else if(s[3].name == 'q36' && s[3].value == 1){
                                    q36 = 1;
                                }

                                if(s.length > 4){
                                    if(s[4].name == 'q35' && s[4].value == 1){
                                        q35 = 1;
                                    }else if(s[4].name == 'q36' && s[4].value == 1){
                                        q36 = 1;
                                    }

                                    if(s.length > 5){
                                        if (s[5].name == 'q36' && s[5].value == 1) {
                                            q36 = 1;
                                        }
                                    }


                                }

                            }

                            var sum7 = q31+ q32 + q33 + q34 + q35 + q36;
                            document.getElementById("s7").style.display="block";
                            document.getElementById("s7").textContent = sum7;
                        }else if(session == 8){

                            var q37= 0; var q38= 0; var q39= 0;

                            if(s.length>=1) {

                                if (s[0].name == 'q37' && s[0].value == 2) {
                                    q37 = 1;
                                } else if (s[0].name == 'q38' && s[0].value == 2) {
                                    q38 = 1;
                                } else if (s[0].name == 'q39' && s[0].value == 1) {
                                    q39 = 1;
                                }
                                if(s.length>=2){
                                    if (s[1].name == 'q38' && s[1].value == 2) {
                                        q38 = 1;
                                    } else if (s[1].name == 'q39' && s[1].value == 1) {
                                        q39 = 1;
                                    }
                                    if(s.length>=3){
                                        if (s[2].name == 'q39' && s[2].value == 1) {
                                            q39 = 1;
                                        }
                                    }
                                }

                            }


                            var sum8 = q37 + q38 + q39;

                            document.getElementById("s8").style.display="block";
                            document.getElementById("s8").textContent = sum8;
                        }else if(session == 9){
                            var ql2 = 0;var ql3 = 0;var ql4 = 0;var ql5 = 0;var ql6 = 0;var ql7 = 0;

                            if(s[0].value == 3){
                                ql2 = 1;
                            }else {
                                ql2  = 0;
                            }
                            if(s[1].value==1){
                                ql3= 1;
                            }else {
                                ql3 = 0;
                            }
                            if(s[2].value==1){
                                ql4= 1;
                            }else {
                                ql4 = 0;
                            }
                            if(s[3].value==2){
                                ql5= 1;
                            }else {
                                ql5 = 0;
                            }
                            if(s[4].value==2){
                                ql6= 1;
                            }else {
                                ql6 = 0;
                            }
                            if(s[5].value==2){
                                ql7= 1;
                            }else {
                                ql7 = 0;
                            }

                            sum9 = ql2 + ql3 + ql4 + ql5 + ql6 + ql7;
                            document.getElementById("s9").style.display="block";
                            document.getElementById("s9").textContent = sum9;
                        }
                    }
                });
            });
        });
    </script>
</head>

<body class="dual-sidebar">

<!-- <div id="preloader">
    <div id="status">
        <div class="preloader-logo"></div>
        <h3 class="center-text">Willkommen</h3>
        <p class="center-text smaller-text">
            Seite wird geladen. Dauert nur kurz.
        </p>
    </div>
</div>
 -->
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
                        <p class="head2">Erreichte Punktzahl: <?php echo $_SESSION['sum']; ?> von 65</p>
                        <span id="timer" class="time_cell"></span>
                    </div>