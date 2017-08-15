<?php $page_session=1; $page = 'horen_1'; $test_part = 'H&ouml;ren Teil 1';$time_text = 'H&ouml;ren insgesamt 45 Minuten'; ?>
<?php include("../partials/header.php"); ?>



<div class="clear"></div>
<div class="decoration add_cell"></div>
<div class="explain_box cell_hoeren1">

 <p>Sie h&ouml;ren vier Ansagen. Zu jeder Ansage gibt es eine Aufgabe. Welche L&ouml;sung passt am besten?
  <br>W&auml;hlen Sie Ihre L&ouml;sungen f&uuml;r die Aufgaben 1 bis 4 im Listenfeld. Vorsicht: Was Sie hier sehen, muss nicht die korrekte L&ouml;sung sein! </p>
</div>

<div class="cle$test_part = 'H&ouml;ren Teil 1';ar"></div>
<div class="decoration"></div>
<!--Audio Play 14%-->
<div class="title_cell">
 <button type="button" id="audio" class="audio_bt fa fa-play" 
 onclick="document.getElementById('myaudio').play()"></button>
 <audio id="myaudio">
  <source src="../audio/hv1.mp3" type="audio/mpeg">
</audio>
  <a class="button_tit"><b> Abspielen </b></a>
  <!--Timer Counter-->
</div>
<div class="clear"></div>
<div class="decoration"></div>




  <div class="title_cell bg-1" >
   <h4 class="color-red-dark title_header">Beispiel</h4>
   <p class="question_cell1">Was soll Frau Baumgart tun?</p>
   <select action="php/contact.php" id="qh1" class="select_cell1">
    <option value="1">&nbsp; Herrn Libertz anrufen.</option>
    <option value="2">&nbsp; Ihre Bewerbungsunterlagen abholen.</option>
    <option value="3">&nbsp; Zu einem Kennenlerntag kommen.</option>
  </select>
</div>
<form id="a" action="" method="post">
<div class="clear"></div>
<div class="decoration"></div>
<!--1 question -->


<div class="cell_hoeren1">
 <p class="question_cell1"><b>1.&nbsp;</b> &nbsp;Was soll Herr Matuschek machen?</p>
 <select name="q1" class="select_cell1">
 <option>wählen</option>
   <option value="1">Den Stromz&auml;hler ablesen</option>
   <option value="2">Die Stromrechnung bezahlen.</option>
   <option value="3">Einen neuen Termin machen.</option>
 </select>
</div>
<div class="clear"></div>
<div class="decoration"></div>

<!--2 question -->
<div class="cell_hoeren1">
 <p class="question_cell1"><b>2.&nbsp;</b> Wohin soll Frau B&ouml;hmer kommen?.</p>
 <select name="q2" id="q2" class="select_cell1">
 <option>wählen</option>
  <option value="1">In den Kindergarten.</option>
  <option value="2">Zur Agentur f&uuml;r Arbeit.</option>
  <option value="3">Zur Schule.</option>
</select>
</div>
<div class="clear"></div>
<div class="decoration"></div>
<!--3 question-->
<div class="cell_hoeren1">
 <p class="question_cell1"><b>3.&nbsp</b> Wohin soll Herr Holstein mit seinem Sohn gehen?</p>
 <select name="q3" id="q3" class="select_cell1">
 <option>wählen</option>
  <option value="1">Ins Krankenhaus.</option>
  <option value="2">Zum Arzt.</option>
  <option value="3">Zum Gesundheitsamt.</option>
</select>
</div>
<div class="clear"></div>
<div class="decoration"></div>

<!--4 question-->
<div class="cell_hoeren1">
 <p class="question_cell1"><b>4.&nbsp</b> Wo soll Herr Lee sein Auto abholen?</p>
 <select name="q4" id="q4" class="select_cell1">
 <option>wählen</option>
  <option value="1">Bei der Polizei.</option>
  <option value="2">Bei einem Autoh&auml;ndler.</option>
  <option value="3">In der Werkstatt.</option>
</select>
</div>
<div class="clear"></div>
<div class="decoration"></div>
</div>
</div>
</div>
</form>
<!--Title Head-->
<script>

  $(function(){
    $( "select" ).change(function(){
      jQuery.ajax({
        type: "POST",
        data:  $( "form" ).serialize(),

        success: function(data){
          console.log('value');
        }
      }); 
    });


  });
</script>

<div id="results"></div>
<?php
if(isset($_POST['q1']))
{
  if($_POST['q1'] == 3){
    $_SESSION['q1']=1;
  }else{
    $_SESSION['q1']=0;
  }
}

if(isset($_POST['q2']))
{
  if($_POST['q2'] == 2){
    $_SESSION['q2']=1;
  }else{
    $_SESSION['q2']=0;
  }
}

if(isset($_POST['q3']))
{
  if($_POST['q3'] == 2){
    $_SESSION['q3']=1;
  }else{
    $_SESSION['q3']=0;
  }
}

if(isset($_POST['q4']))
{
  if($_POST['q4'] == 3){
    $_SESSION['q4']=1;
  }else{
    $_SESSION['q4']=0;
  }
}


?>

<!--Footer Button-->
<?php include("../partials/footer.php"); ?>